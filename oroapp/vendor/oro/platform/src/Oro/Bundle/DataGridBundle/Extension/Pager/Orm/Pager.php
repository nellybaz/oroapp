<?php

namespace Oro\Bundle\DataGridBundle\Extension\Pager\Orm;

use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Oro\Bundle\BatchBundle\ORM\Query\QueryCountCalculator;
use Oro\Bundle\BatchBundle\ORM\QueryBuilder\CountQueryBuilderOptimizer;
use Oro\Bundle\DataGridBundle\Extension\Pager\AbstractPager;
use Oro\Bundle\SecurityBundle\ORM\Walker\AclHelper;
use Oro\Component\DoctrineUtils\ORM\QueryHintResolver;

class Pager extends AbstractPager
{
    /** @var QueryBuilder */
    protected $qb;

    /** @var QueryBuilder */
    protected $countQb;

    /** @var array */
    protected $countQueryHints = [];

    /** @var boolean */
    protected $isTotalCalculated = false;

    /** @var array */
    protected $parameters = [];

    /** @var AclHelper */
    protected $aclHelper;

    /** @var boolean */
    protected $skipAclCheck;

    /** @var boolean */
    protected $skipCountWalker;

    /** @var CountQueryBuilderOptimizer */
    protected $countQueryBuilderOptimizer;

    /** @var QueryHintResolver */
    protected $queryHintResolver;

    /** @var string */
    protected $aclPermission = 'VIEW';

    public function __construct(
        AclHelper $aclHelper,
        CountQueryBuilderOptimizer $countQueryOptimizer,
        QueryHintResolver $queryHintResolver,
        $maxPerPage = 10,
        QueryBuilder $qb = null
    ) {
        $this->qb = $qb;
        parent::__construct($maxPerPage);

        $this->aclHelper                  = $aclHelper;
        $this->countQueryBuilderOptimizer = $countQueryOptimizer;
        $this->queryHintResolver          = $queryHintResolver;
    }

    /**
     * @param QueryBuilder $qb
     *
     * @return $this
     */
    public function setQueryBuilder(QueryBuilder $qb)
    {
        $this->qb                = $qb;
        $this->isTotalCalculated = false;

        return $this;
    }

    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        return $this->qb;
    }

    /**
     * @param QueryBuilder $countQb
     * @param array $queryHints
     */
    public function setCountQb(QueryBuilder $countQb, $queryHints = [])
    {
        $this->countQb           = $countQb;
        $this->countQueryHints   = $queryHints;
        $this->isTotalCalculated = false;
    }

    /**
     * Calculates count
     *
     * @return int
     */
    public function computeNbResult()
    {
        $countQb = $this->countQb ? : $this->qb;
        $countQb = $this->countQueryBuilderOptimizer->getCountQueryBuilder($countQb);
        $query   = $countQb->getQuery();
        if (!$this->skipAclCheck) {
            $query = $this->aclHelper->apply($query, $this->aclPermission);
        }
        $this->queryHintResolver->resolveHints($query, $this->countQueryHints);

        $useWalker = null;
        if ($this->skipCountWalker !== null) {
            $useWalker = !$this->skipCountWalker;
        }

        return QueryCountCalculator::calculateCount($query, $useWalker);
    }

    /**
     * {@inheritdoc}
     */
    public function getResults($hydrationMode = Query::HYDRATE_OBJECT)
    {
        return $this->getQueryBuilder()->getQuery()->execute([], $hydrationMode);
    }

    /**
     * Get result which are filtered by ACL
     *
     * @param int $hydrationMode
     *
     * @return array
     */
    public function getAppliedResult($hydrationMode = Query::HYDRATE_OBJECT)
    {
        $qb    = $this->getQueryBuilder();
        $query = $this->aclHelper->apply($qb);

        return $query->execute([], $hydrationMode);
    }

    /**
     * {@inheritdoc}
     */
    public function serialize()
    {
        $vars = get_object_vars($this);
        unset($vars['qb']);

        return serialize($vars);
    }

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->resetIterator();

        if (!$this->isTotalCalculated) {
            $this->setNbResults($this->computeNbResult());
            $this->isTotalCalculated = true;
        }

        /** @var QueryBuilder $query */
        $query = $this->getQueryBuilder();

        $query->setFirstResult(null);
        $query->setMaxResults(null);

        if (count($this->getParameters()) > 0) {
            $query->setParameters($this->getParameters());
        }

        if (0 == $this->getPage() || 0 == $this->getMaxPerPage() || 0 == $this->getNbResults()) {
            $this->setLastPage(0);
            if (0 !== $this->getMaxPerPage()) {
                $query->setMaxResults($this->getMaxPerPage());
            }
        } else {
            $offset = ($this->getPage() - 1) * $this->getMaxPerPage();

            $this->setLastPage(ceil($this->getNbResults() / $this->getMaxPerPage()));

            $query->setFirstResult($offset);
            $query->setMaxResults($this->getMaxPerPage());
        }
    }

    /**
     * Set nbResults with already known value and mark total as calculated.
     *
     * @param int $nbResults
     */
    public function adjustTotalCount($nbResults)
    {
        $this->setNbResults($nbResults);
        $this->isTotalCalculated = true;
    }

    /**
     * Returns the current pager's parameter holder.
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Returns a parameter.
     *
     * @param string $name
     * @param mixed  $default
     *
     * @return mixed
     */
    public function getParameter($name, $default = null)
    {
        return isset($this->parameters[$name]) ? $this->parameters[$name] : $default;
    }

    /**
     * Checks whether a parameter has been set.
     *
     * @param string $name
     *
     * @return boolean
     */
    public function hasParameter($name)
    {
        return isset($this->parameters[$name]);
    }

    /**
     * Sets a parameter.
     *
     * @param string $name
     * @param mixed  $value
     */
    public function setParameter($name, $value)
    {
        $this->parameters[$name] = $value;
    }

    /**
     * @param boolean $skipCheck
     */
    public function setSkipAclCheck($skipCheck)
    {
        $this->skipAclCheck = $skipCheck;
    }

    /**
     * @param boolean $skipCountWalker
     */
    public function setSkipCountWalker($skipCountWalker)
    {
        $this->skipCountWalker = $skipCountWalker;
    }

    /**
     * @param string $permission
     */
    public function setAclPermission($permission)
    {
        $this->aclPermission = $permission;
    }

    /**
     * {@inheritdoc}
     */
    protected function retrieveObject($offset)
    {
        $queryForRetrieve = clone $this->getQueryBuilder();
        $queryForRetrieve
            ->setFirstResult($offset - 1)
            ->setMaxResults(1);

        $results = $queryForRetrieve->getQuery()->execute();

        return $results[0];
    }

    /**
     * @param array $countQueryHints
     */
    public function setCountQueryHints(array $countQueryHints)
    {
        $this->countQueryHints = $countQueryHints;
    }
}
