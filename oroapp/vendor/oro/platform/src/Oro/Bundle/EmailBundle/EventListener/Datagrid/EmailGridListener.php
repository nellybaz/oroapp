<?php

namespace Oro\Bundle\EmailBundle\EventListener\Datagrid;

use Doctrine\ORM\Query\Expr\GroupBy;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\QueryBuilder;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\DataGridBundle\Datagrid\ParameterBag;
use Oro\Bundle\DataGridBundle\Datasource\Orm\OrmDatasource;
use Oro\Bundle\DataGridBundle\Datasource\ResultRecord;
use Oro\Bundle\DataGridBundle\Entity\GridView;
use Oro\Bundle\DataGridBundle\Entity\Manager\GridViewManager;
use Oro\Bundle\DataGridBundle\Event\BuildAfter;
use Oro\Bundle\DataGridBundle\Event\OrmResultAfter;
use Oro\Bundle\DataGridBundle\Event\OrmResultBeforeQuery;
use Oro\Bundle\EmailBundle\Datagrid\EmailQueryFactory;
use Oro\Bundle\EmailBundle\Datagrid\EmailGridResultHelper;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;

/**
 * Grid listener that modify email grids.
 */
class EmailGridListener
{
    /** @var EmailQueryFactory */
    protected $factory;

    /** @var TokenAccessorInterface */
    protected $tokenAccessor;

    /** @var GridViewManager */
    protected $gridViewManager;

    /** @var ConfigManager */
    protected $configManager;

    /** @var EmailGridResultHelper */
    protected $resultHelper;

    /**
     * Stores join's root and alias if joins for filters are added - ['eu' => ['alias1']]
     *
     * @var []
     */
    protected $filterJoins;

    /**
     * @param EmailQueryFactory      $factory
     * @param TokenAccessorInterface $tokenAccessor
     * @param GridViewManager        $gridViewManager
     * @param ConfigManager          $configManager
     * @param EmailGridResultHelper  $resultHelper
     */
    public function __construct(
        EmailQueryFactory $factory,
        TokenAccessorInterface $tokenAccessor,
        GridViewManager $gridViewManager,
        ConfigManager $configManager,
        EmailGridResultHelper $resultHelper
    ) {
        $this->factory = $factory;
        $this->tokenAccessor = $tokenAccessor;
        $this->gridViewManager = $gridViewManager;
        $this->configManager = $configManager;
        $this->resultHelper = $resultHelper;
    }

    /**
     * @param OrmResultBeforeQuery $event
     */
    public function onResultBeforeQuery(OrmResultBeforeQuery $event)
    {
        $qb = $event->getQueryBuilder();
        if ($this->filterJoins) {
            $this->removeJoinByRootAndAliases($qb, $this->filterJoins);
            $this->removeGroupByPart($qb, 'eu.id');
        }
    }

    /**
     * Add required filters
     *
     * @param BuildAfter $event
     */
    public function onBuildAfter(BuildAfter $event)
    {
        $datagrid = $event->getDatagrid();

        /** @var OrmDatasource $ormDataSource */
        $ormDataSource = $datagrid->getDatasource();
        $queryBuilder  = $ormDataSource->getQueryBuilder();
        $countQb       = $ormDataSource->getCountQb();
        $parameters    = $datagrid->getParameters();

        $isThreadGroupingEnabled = $this->configManager->get('oro_email.threads_grouping');

        $this->factory->addEmailsCount($queryBuilder, $isThreadGroupingEnabled);
        $filters = $this->getFilters($parameters);

        if ($isThreadGroupingEnabled) {
            $this->factory->applyAclThreadsGrouping(
                $queryBuilder,
                $datagrid,
                $filters
            );
            if ($countQb) {
                $this->factory->applyAclThreadsGrouping($countQb, $datagrid, $filters);
            }
        } else {
            $this->factory->applyAcl($queryBuilder);
            if ($countQb) {
                $this->factory->applyAcl($countQb);
            }
        }

        if ($parameters->has('emailIds')) {
            $emailIds = $parameters->get('emailIds');
            if (!is_array($emailIds)) {
                $emailIds = explode(',', $emailIds);
            }
            $queryBuilder->andWhere($queryBuilder->expr()->in('e.id', ':emailIds'))
                ->setParameter('emailIds', $emailIds);
        }

        $this->prepareQueryToFilter($parameters, $queryBuilder, $countQb);
    }

    /**
     * @param OrmResultAfter $event
     */
    public function onResultAfter(OrmResultAfter $event)
    {
        /** @var ResultRecord[] $records */
        $records = $event->getRecords();
        $this->resultHelper->addEmailDirections($records);
        $this->resultHelper->addEmailMailboxNames($records);
        $this->resultHelper->addEmailRecipients($records);
    }

    /**
     * Add joins and group by for query just if filter used. For performance optimization - BAP-10674
     *
     * @param ParameterBag $parameters
     * @param QueryBuilder $queryBuilder
     * @param QueryBuilder $countQb
     */
    protected function prepareQueryToFilter($parameters, QueryBuilder $queryBuilder, QueryBuilder $countQb = null)
    {
        $filters = $this->getFilters($parameters);
        if (!$filters) {
            return;
        }
        $this->filterJoins = [];
        $groupByFilters = ['cc', 'bcc', 'to', 'folders', 'folder', 'mailbox'];

        // As now optimizer could not automatically remove joins for these filters
        // (they do not affect number of rows)
        // adding group by statement
        if (array_intersect_key($filters, array_flip($groupByFilters))) {
            // CountQb doesn't need group by statement cos it already added in grid config
            $queryBuilder->addGroupBy('eu.id');
        }
        $rFilters = [
            'cc'  => ['r_cc', 'WITH', 'r_cc.type = :ccType', ['ccType' => 'cc']],
            'bcc' => ['r_bcc', 'WITH', 'r_bcc.type = :bccType', ['bccType' => 'bcc']],
            'to'  => ['r_to', null, null, []],
        ];
        $rParams  = [];
        // Add join for each filter which is based on e.recipients table
        foreach ($rFilters as $rKey => $rFilter) {
            if (array_key_exists($rKey, $filters)) {
                $queryBuilder->leftJoin('e.recipients', $rFilter[0], $rFilter[1], $rFilter[2]);
                $countQb->leftJoin('e.recipients', $rFilter[0], $rFilter[1], $rFilter[2]);
                $rParams = array_merge($rParams, $rFilter[3]);
                $this->filterJoins['eu'][] = $rFilter[0];
            }
        }
        foreach ($rParams as $rParam => $rParamValue) {
            $queryBuilder->setParameter($rParam, $rParamValue);
            $countQb->setParameter($rParam, $rParamValue);
        }
        $fFilters = ['folder', 'folders', 'mailbox'];
        if (array_intersect_key($filters, array_flip($fFilters))) {
            $queryBuilder->leftJoin('eu.folders', 'f');
            $this->filterJoins['eu'][] = 'f';
        }
    }

    /**
     * @param ParameterBag $parameters
     *
     * @return array
     */
    protected function getFilters($parameters)
    {
        $filters = $parameters->get('_filter');
        if (!$filters || !is_array($filters)) {
            $filters = $this->getGridViewFiltersData();
        }

        return $filters;
    }

    /**
     * @return array
     */
    protected function getGridViewFiltersData()
    {
        $filters = [];
        $user = $this->tokenAccessor->getUser();
        if (!$user) {
            return $filters;
        }
        /** @var GridView|null $gridView */
        $gridView = $this->gridViewManager->getDefaultView($user, 'user-email-grid');
        if (!$gridView) {
            return $filters;
        }

        return $gridView->getFiltersData();
    }

    /**
     *
     * @param QueryBuilder $qb
     * @param              $part
     */
    protected function removeGroupByPart(QueryBuilder $qb, $part)
    {
        $groupByParts = $qb->getDQLPart('groupBy');
        $qb->resetDQLPart('groupBy');
        /** @var GroupBy $groupByPart */
        foreach ($groupByParts as $groupByPart) {
            $newGroupByPart = [];
            foreach ($groupByPart->getParts() as $val) {
                if ($val !== $part) {
                    $newGroupByPart[] = $val;
                }
            }
            if ($newGroupByPart) {
                call_user_func_array([$qb, 'addGroupBy'], $newGroupByPart);
            }
        }
    }

    /**
     * @param QueryBuilder $qb
     * @param array        $rootAndAliases ['root1' => ['aliasToRemove1', 'aliasToRemove2', ...], ...]
     */
    protected function removeJoinByRootAndAliases(QueryBuilder $qb, array $rootAndAliases)
    {
        $joins    = $qb->getDQLPart('join');

        /** @var Join $join */
        foreach ($joins as $root => $rJoins) {
            if (!empty($rootAndAliases[$root]) && is_array($rootAndAliases[$root])) {
                foreach ($rJoins as $key => $join) {
                    if (in_array($join->getAlias(), $rootAndAliases[$root], true)) {
                        unset($rJoins[$key]);
                    }
                }
            }
            $qb->add('join', [$root => $rJoins]);
        }
    }
}
