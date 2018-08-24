<?php

namespace Oro\Bundle\SalesBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

use Oro\Bundle\CurrencyBundle\Query\CurrencyQueryBuilderTransformerInterface;
use Oro\Bundle\DashboardBundle\Filter\DateFilterProcessor;
use Oro\Bundle\DataAuditBundle\Entity\AbstractAudit;
use Oro\Bundle\EntityExtendBundle\Tools\ExtendHelper;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\SalesBundle\Entity\Opportunity;
use Oro\Bundle\SecurityBundle\ORM\Walker\AclHelper;
use Oro\Component\DoctrineUtils\ORM\QueryBuilderUtil;

/**
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class OpportunityRepository extends EntityRepository
{
    const OPPORTUNITY_STATE_IN_PROGRESS      = 'In Progress';
    const OPPORTUNITY_STATE_IN_PROGRESS_CODE = 'in_progress';
    const OPPORTUNITY_STATUS_CLOSED_WON_CODE = 'won';

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * Get opportunities by state by current quarter
     *
     * @param           $aclHelper AclHelper
     * @param  array    $dateRange
     * @param  array    $states
     * @param int[]     $owners
     *
     * @param AclHelper $aclHelper
     * @param array     $dateRange
     * @param array     $states
     * @param int[]     $owners
     *
     * @return array
     */
    public function getOpportunitiesByStatus(AclHelper $aclHelper, $dateRange, $states, $owners = [])
    {
        $dateEnd   = $dateRange['end'];
        $dateStart = $dateRange['start'];

        return $this->getOpportunitiesDataByStatus($aclHelper, $dateStart, $dateEnd, $states, $owners);
    }

    /**
     * @param array             $removingCurrencies
     * @param Organization|null $organization
     *
     * @return bool
     */
    public function hasRecordsWithRemovingCurrencies(
        array $removingCurrencies,
        Organization $organization = null
    ) {
        $qb = $this->createQueryBuilder('opportunity');
        $qb
            ->select('COUNT(opportunity.id)')
            ->where($qb->expr()->in('opportunity.budgetAmountCurrency', ':removingCurrencies'))
            ->orWhere($qb->expr()->in('opportunity.closeRevenueCurrency', ':removingCurrencies'))
            ->setParameter('removingCurrencies', $removingCurrencies);
        if ($organization instanceof Organization) {
            $qb->andWhere('opportunity.organization = :organization');
            $qb->setParameter(':organization', $organization);
        }

        return (bool) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * @param string $alias
     * @param CurrencyQueryBuilderTransformerInterface $qbTransformer
     * @param string $orderBy
     * @param string $direction
     *
     * @return QueryBuilder
     */
    public function getGroupedOpportunitiesByStatusQB(
        $alias,
        CurrencyQueryBuilderTransformerInterface $qbTransformer,
        $orderBy = 'budget',
        $direction = 'DESC'
    ) {
        $statusClass = ExtendHelper::buildEnumValueClassName('opportunity_status');
        $repository  = $this->getEntityManager()->getRepository($statusClass);

        $qb = $repository->createQueryBuilder('s');
        $closeRevenueQuery = $qbTransformer->getTransformSelectQuery('closeRevenue', $qb, $alias);
        $budgetAmountQuery = $qbTransformer->getTransformSelectQuery('budgetAmount', $qb, $alias);
        $qb->select(
            's.name as label',
            sprintf('COUNT(%s.id) as quantity', $alias),
            // Use close revenue for calculating budget for opportunities with won statuses
                sprintf(
                    'SUM(
                        CASE WHEN s.id = \'won\'
                            THEN
                                (CASE WHEN %1$s.closeRevenueValue IS NOT NULL THEN (%2$s) ELSE 0 END)
                            ELSE
                                (CASE WHEN %1$s.budgetAmountValue IS NOT NULL THEN (%3$s) ELSE 0 END)
                        END
                    ) as budget',
                    $alias,
                    $closeRevenueQuery,
                    $budgetAmountQuery
                )
        )
        ->leftJoin('OroSalesBundle:Opportunity', $alias, 'WITH', sprintf('%s.status = s', $alias))
        ->groupBy('s.name')
        ->orderBy($orderBy, $direction);

        return $qb;
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * @param  AclHelper $aclHelper
     * @param            $dateStart
     * @param            $dateEnd
     * @param array      $states
     * @param int[]      $owners
     *
     * @return array
     */
    protected function getOpportunitiesDataByStatus(
        AclHelper $aclHelper,
        $dateStart = null,
        $dateEnd = null,
        $states = [],
        $owners = []
    ) {
        foreach ($states as $key => $name) {
            $resultData[$key] = [
                'name'   => $key,
                'label'  => $name,
                'budget' => 0,
            ];
        }

        // select opportunity data
        $qb = $this->createQueryBuilder('opportunity');
        $qb->select('IDENTITY(opportunity.status) as name, SUM(opportunity.budgetAmountValue) as budget')
            ->groupBy('opportunity.status');

        if ($dateStart && $dateEnd) {
            $qb->where($qb->expr()->between('opportunity.createdAt', ':dateFrom', ':dateTo'))
                ->setParameter('dateFrom', $dateStart)
                ->setParameter('dateTo', $dateEnd);
        }

        if ($owners) {
            QueryBuilderUtil::applyOptimizedIn($qb, 'opportunity.owner', $owners);
        }

        $groupedData = $aclHelper->apply($qb)->getArrayResult();

        foreach ($groupedData as $statusData) {
            $status = $statusData['name'];
            $budget = (float)$statusData['budget'];
            if ($budget) {
                $resultData[$status]['budget'] = $budget;
            }
        }

        return $resultData;
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * @param array       $ownerIds
     * @param \DateTime    $date
     * @param AclHelper   $aclHelper
     *
     * @param string|null $start
     * @param string|null $end
     *
     * @return mixed
     */
    public function getForecastOfOpportunitiesData($ownerIds, $date, AclHelper $aclHelper, $start = null, $end = null)
    {
        if ($date === null) {
            return $this->getForecastOfOpportunitiesCurrentData($ownerIds, $aclHelper, $start, $end);
        }

        return $this->getForecastOfOpportunitiesOldData($ownerIds, $date, $aclHelper);
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * @param array       $ownerIds
     * @param AclHelper   $aclHelper
     * @param string|null $start
     * @param string|null $end
     *
     * @return mixed
     */
    protected function getForecastOfOpportunitiesCurrentData(
        $ownerIds,
        AclHelper $aclHelper,
        $start = null,
        $end = null
    ) {
        $qb = $this->createQueryBuilder('opportunity');

        $select = "
            COUNT( opportunity.id ) as inProgressCount,
            SUM( opportunity.budgetAmount ) as budgetAmount,
            SUM( opportunity.budgetAmount * opportunity.probability ) as weightedForecast";
        $qb
            ->select($select)
            ->andWhere('opportunity.status NOT IN (:notCountedStatuses)')
            ->setParameter('notCountedStatuses', ['lost', 'won']);
        if (!empty($ownerIds)) {
            $qb->join('opportunity.owner', 'owner');
            QueryBuilderUtil::applyOptimizedIn($qb, 'owner.id', $ownerIds);
        }

        if ($start) {
            $qb
                ->andWhere('opportunity.closeDate >= :startDate')
                ->setParameter('startDate', $start);
        }
        if ($end) {
            $qb
                ->andWhere('opportunity.closeDate <= :endDate')
                ->setParameter('endDate', $end);
        }

        return $aclHelper->apply($qb)->getOneOrNullResult();
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * @param array     $ownerIds
     * @param \DateTime $date
     * @param AclHelper $aclHelper
     *
     * @return mixed
     */
    protected function getForecastOfOpportunitiesOldData($ownerIds, $date, AclHelper $aclHelper)
    {
        //clone date for avoiding wrong date on printing with current locale
        $newDate = clone $date;
        $qb      = $this->createQueryBuilder('opportunity')
            ->where('opportunity.createdAt < :date')
            ->setParameter('date', $newDate);

        $opportunities = $aclHelper->apply($qb)->getResult();

        $result['inProgressCount']  = 0;
        $result['budgetAmount']     = 0;
        $result['weightedForecast'] = 0;

        $auditRepository = $this->getEntityManager()->getRepository('OroDataAuditBundle:Audit');
        /** @var Opportunity $opportunity */
        foreach ($opportunities as $opportunity) {
            $auditQb = $auditRepository->getLogEntriesQueryBuilder($opportunity);
            $auditQb->andWhere('a.action = :action')
                ->andWhere('a.loggedAt > :date')
                ->setParameter('action', AbstractAudit::ACTION_UPDATE)
                ->setParameter('date', $newDate);
            $opportunityHistory = $aclHelper->apply($auditQb)->getResult();

            if ($oldProbability = $this->getHistoryOldValue($opportunityHistory, 'probability')) {
                $probability     = $oldProbability;
            } else {
                $probability     = $opportunity->getProbability();
            }

            if ($this->isOwnerOk($ownerIds, $opportunityHistory, $opportunity)
                && $this->isStatusOk($opportunityHistory, $opportunity)
            ) {
                $result = $this->calculateOpportunityOldValue($result, $opportunityHistory, $opportunity, $probability);
            }
        }

        return $result;
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * @param mixed  $opportunityHistory
     * @param string $field
     *
     * @return mixed
     */
    protected function getHistoryOldValue($opportunityHistory, $field)
    {
        $result = null;

        $opportunityHistory = is_array($opportunityHistory) ? $opportunityHistory : [$opportunityHistory];
        foreach ($opportunityHistory as $item) {
            if ($item->getField($field)) {
                $result = $item->getField($field)->getOldValue();
            }
        }

        return $result;
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * @param array       $opportunityHistory
     * @param Opportunity $opportunity
     *
     * @return bool
     */
    protected function isStatusOk($opportunityHistory, $opportunity)
    {
        if ($oldStatus = $this->getHistoryOldValue($opportunityHistory, 'status')) {
            $isStatusOk = $oldStatus === self::OPPORTUNITY_STATE_IN_PROGRESS;
        } else {
            $isStatusOk = $opportunity->getStatus()->getName() === self::OPPORTUNITY_STATE_IN_PROGRESS_CODE;
        }

        return $isStatusOk;
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * @param array       $ownerIds
     * @param array       $opportunityHistory
     * @param Opportunity $opportunity
     *
     * @return bool
     */
    protected function isOwnerOk($ownerIds, $opportunityHistory, $opportunity)
    {
        $userRepository = $this->getEntityManager()->getRepository('OroUserBundle:User');
        if ($oldOwner = $this->getHistoryOldValue($opportunityHistory, 'owner')) {
            $isOwnerOk = in_array($userRepository->findOneByUsername($oldOwner)->getId(), $ownerIds);
        } else {
            $isOwnerOk = in_array($opportunity->getOwner()->getId(), $ownerIds);
        }

        return $isOwnerOk;
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * @param array       $result
     * @param array       $opportunityHistory
     * @param Opportunity $opportunity
     * @param mixed       $probability
     *
     * @return array
     */
    protected function calculateOpportunityOldValue($result, $opportunityHistory, $opportunity, $probability)
    {
        ++$result['inProgressCount'];
        $oldBudgetAmount = $this->getHistoryOldValue($opportunityHistory, 'budgetAmount');

        $budget = $oldBudgetAmount !== null ? $oldBudgetAmount : $opportunity->getBudgetAmount();
        $result['budgetAmount'] += $budget;
        $result['weightedForecast'] += $budget * $probability;

        return $result;
    }

    /**
     * @param \DateTime  $start
     * @param \DateTime  $end
     *
     * @return QueryBuilder
     */
    public function getOpportunitiesCountQB(
        \DateTime $start = null,
        \DateTime $end = null
    ) {
        $qb = $this->createQueryBuilder('o');
        $qb->select('COUNT(o.id)');
        if ($start) {
            $qb
                ->andWhere('o.createdAt >= :start')
                ->setParameter('start', $start);
        }
        if ($end) {
            $qb
                ->andWhere('o.createdAt <= :end')
                ->setParameter('end', $end);
        }

        return $qb;
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3. Use getOpportunitiesCountQB instead (CRM-8037)
     * @param \DateTime  $start
     * @param \DateTime  $end
     *
     * @return QueryBuilder
     */
    public function getNewOpportunitiesCountQB(
        \DateTime $start = null,
        \DateTime $end = null
    ) {
        return $this->getOpportunitiesCountQB($start, $end);
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3. Use getOpportunitiesCountQB instead (CRM-8037)
     * @param \DateTime $start
     * @param \DateTime $end
     *
     * @return QueryBuilder
     */
    public function createOpportunitiesCountQb(\DateTime $start = null, \DateTime $end = null)
    {
        return $this->getOpportunitiesCountQB($start, $end);
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * @param AclHelper $aclHelper
     * @param \DateTime  $start
     * @param \DateTime  $end
     * @param int[]     $owners
     *
     * @return double
     */
    public function getTotalServicePipelineAmount(
        AclHelper $aclHelper,
        \DateTime $start = null,
        \DateTime $end = null,
        $owners = []
    ) {
        $qb = $this->createQueryBuilder('o');

        $qb
            ->select('SUM(o.budgetAmount)')
            ->andWhere('o.closeDate IS NULL')
            ->andWhere('o.status = :status')
            ->setParameter('status', self::OPPORTUNITY_STATE_IN_PROGRESS_CODE);
        if ($start) {
            $qb
                ->andWhere('o.createdAt > :start')
                ->setParameter('start', $start);
        }
        if ($end) {
            $qb
                ->andWhere('o.createdAt < :end')
                ->setParameter('end', $end);
        }

        if ($owners) {
            QueryBuilderUtil::applyOptimizedIn($qb, 'o.owner', $owners);
        }

        return $aclHelper->apply($qb)->getSingleScalarResult();
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * @param AclHelper $aclHelper
     * @param \DateTime  $start
     * @param \DateTime  $end
     *
     * @return double
     */
    public function getTotalServicePipelineAmountInProgress(
        AclHelper $aclHelper,
        \DateTime $start = null,
        \DateTime $end = null
    ) {
        $qb = $this->createQueryBuilder('o');

        $qb
            ->select('SUM(o.budgetAmount)')
            ->andWhere('o.status = :status')
            ->setParameter('status', self::OPPORTUNITY_STATE_IN_PROGRESS_CODE);
        if ($start) {
            $qb
                ->andWhere('o.createdAt > :start')
                ->setParameter('start', $start);
        }
        if ($end) {
            $qb
                ->andWhere('o.createdAt < :end')
                ->setParameter('end', $end);
        }

        return $aclHelper->apply($qb)->getSingleScalarResult();
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * @param AclHelper $aclHelper
     * @param \DateTime  $start
     * @param \DateTime  $end
     *
     * @return double
     */
    public function getWeightedPipelineAmount(AclHelper $aclHelper, \DateTime $start = null, \DateTime $end = null)
    {
        $qb = $this->createQueryBuilder('o');

        $qb->select('SUM(o.budgetAmount * o.probability)');
        if ($start) {
            $qb
                ->andWhere('o.createdAt > :start')
                ->setParameter('start', $start);
        }
        if ($end) {
            $qb
                ->andWhere('o.createdAt < :end')
                ->setParameter('end', $end);
        }

        return $aclHelper->apply($qb)->getSingleScalarResult();
    }

    /**
     * @deprecated Since 2.2 Will be removed in 2.3 (CRM-8037)
     * @param AclHelper $aclHelper
     * @param \DateTime  $start
     * @param \DateTime  $end
     * @param int[]     $owners
     *
     * @return double
     */
    public function getOpenWeightedPipelineAmount(
        AclHelper $aclHelper,
        \DateTime $start = null,
        \DateTime $end = null,
        $owners = []
    ) {
        $qb = $this->createQueryBuilder('o');

        $qb
            ->select('SUM(o.budgetAmount * o.probability)')
            ->andWhere('o.status = :status')
            ->setParameter('status', self::OPPORTUNITY_STATE_IN_PROGRESS_CODE);

        $this->setCreationPeriod($qb, $start, $end);

        if ($owners) {
            QueryBuilderUtil::applyOptimizedIn($qb, 'o.owner', $owners);
        }

        return $aclHelper->apply($qb)->getSingleScalarResult();
    }

    /**
     * @deprecated since 2.1. Method "getOpportunitiesByPeriodQB" should be used instead
     *
     * @param AclHelper $aclHelper
     * @param CurrencyQueryBuilderTransformerInterface $qbTransformer
     * @param \DateTime $start
     * @param \DateTime $end
     * @param array $owners
     *
     * @return double
     */
    public function getNewOpportunitiesAmount(
        AclHelper $aclHelper,
        CurrencyQueryBuilderTransformerInterface $qbTransformer,
        \DateTime $start = null,
        \DateTime $end = null,
        $owners = []
    ) {
        $qb = $this->createQueryBuilder('o');
        $baTransformedQuery = $qbTransformer->getTransformSelectQuery('budgetAmount', $qb);
        $qb->select(sprintf('SUM(%s)', $baTransformedQuery));

        $this->setCreationPeriod($qb, $start, $end);

        if ($owners) {
            QueryBuilderUtil::applyOptimizedIn($qb, 'o.owner', $owners);
        }

        return $aclHelper->apply($qb)->getSingleScalarResult();
    }
    /**
     * @param \DateTime|null $start
     * @param \DateTime|null $end
     *
     * @return QueryBuilder
     */
    public function getOpportunitiesByPeriodQB(\DateTime $start = null, \DateTime $end = null)
    {
        $qb = $this->createQueryBuilder('o');
        $this->setCreationPeriod($qb, $start, $end);

        return $qb;
    }

    /**
     * @deprecated since 2.1. Method "getWonOpportunitiesCountByPeriodQB" should be used instead
     *
     * @param AclHelper $aclHelper
     * @param \DateTime  $start
     * @param \DateTime  $end
     * @param int[]     $owners
     *
     * @return int
     */
    public function getWonOpportunitiesToDateCount(
        AclHelper $aclHelper,
        \DateTime $start = null,
        \DateTime $end = null,
        $owners = []
    ) {
        $qb = $this->createQueryBuilder('o');
        $qb->select('COUNT(o.id)')
            ->andWhere('o.status = :status')
            ->setParameter('status', self::OPPORTUNITY_STATUS_CLOSED_WON_CODE);

        $this->setClosedPeriod($qb, $start, $end);

        if ($owners) {
            QueryBuilderUtil::applyOptimizedIn($qb, 'o.owner', $owners);
        }

        return $aclHelper->apply($qb)->getSingleScalarResult();
    }

    /**
     * @param \DateTime|null $start
     * @param \DateTime|null $end
     *
     * @return QueryBuilder
     */
    public function getWonOpportunitiesCountByPeriodQB(\DateTime $start = null, \DateTime $end = null)
    {
        $qb = $this->createQueryBuilder('o');
        $qb->select('COUNT(o.id)')
            ->andWhere('o.status = :status')
            ->setParameter('status', self::OPPORTUNITY_STATUS_CLOSED_WON_CODE);
        $this->setClosedPeriod($qb, $start, $end);

        return $qb;
    }

    /**
     * @deprecated since 2.1. Method "getWonOpportunitiesByPeriodQB" should be used instead
     *
     * @param AclHelper $aclHelper
     * @param CurrencyQueryBuilderTransformerInterface $qbTransformer
     * @param \DateTime  $start
     * @param \DateTime  $end
     * @param int[]     $owners
     *
     * @return double
     */
    public function getWonOpportunitiesToDateAmount(
        AclHelper $aclHelper,
        CurrencyQueryBuilderTransformerInterface $qbTransformer,
        \DateTime $start = null,
        \DateTime $end = null,
        $owners = []
    ) {
        $qb = $this->createQueryBuilder('o');
        $crTransformedQuery = $qbTransformer->getTransformSelectQuery('closeRevenue', $qb);
        $qb->select(sprintf('SUM(%s)', $crTransformedQuery))
            ->andWhere('o.status = :status')
            ->setParameter('status', self::OPPORTUNITY_STATUS_CLOSED_WON_CODE);

        $this->setClosedPeriod($qb, $start, $end);

        if ($owners) {
            QueryBuilderUtil::applyOptimizedIn($qb, 'o.owner', $owners);
        }

        return $aclHelper->apply($qb)->getSingleScalarResult();
    }

    /**
     * @param \DateTime|null $start
     * @param \DateTime|null $end
     *
     * @return QueryBuilder
     */
    public function getWonOpportunitiesByPeriodQB(\DateTime $start = null, \DateTime $end = null)
    {
        $qb = $this->createQueryBuilder('o')
            ->andWhere('o.status = :status')
            ->setParameter('status', self::OPPORTUNITY_STATUS_CLOSED_WON_CODE);

        $this->setClosedPeriod($qb, $start, $end);

        return $qb;
    }

    /**
     * @param QueryBuilder $qb
     * @param \DateTime|null $start
     * @param \DateTime|null $end
     */
    protected function setCreationPeriod(QueryBuilder $qb, \DateTime $start = null, \DateTime $end = null)
    {
        if ($start) {
            $qb->andWhere('o.createdAt >= :dateStart')->setParameter('dateStart', $start);
        }

        if ($end) {
            $qb->andWhere('o.createdAt <= :dateEnd')->setParameter('dateEnd', $end);
        }
    }

    /**
     * @param QueryBuilder $qb
     * @param \DateTime|null $start
     * @param \DateTime|null $end
     */
    protected function setClosedPeriod(QueryBuilder $qb, \DateTime $start = null, \DateTime $end = null)
    {
        if ($start) {
            $qb->andWhere('o.closedAt >= :dateStart')->setParameter('dateStart', $start);
        }

        if ($end) {
            $qb->andWhere('o.closedAt <= :dateEnd')->setParameter('dateEnd', $end);
        }
    }

    /**
     * Returns count of opportunities grouped by lead source
     *
     * @param AclHelper $aclHelper
     * @param DateFilterProcessor $dateFilterProcessor
     * @param array $dateRange
     * @param array $owners
     *
     * @return array [value, source]
     */
    public function getOpportunitiesCountGroupByLeadSource(
        AclHelper $aclHelper,
        DateFilterProcessor $dateFilterProcessor,
        array $dateRange = [],
        array $owners = []
    ) {
        $qb = $this->getOpportunitiesGroupByLeadSourceQueryBuilder($dateFilterProcessor, $dateRange, $owners);
        $qb->addSelect('count(o.id) as value');

        return $aclHelper->apply($qb)->getArrayResult();
    }

    /**
     * Returns opportunities QB grouped by lead source filtered by $dateRange and $owners
     *
     * @param DateFilterProcessor $dateFilterProcessor
     * @param array $dateRange
     * @param array $owners
     *
     * @return QueryBuilder
     */
    public function getOpportunitiesGroupByLeadSourceQueryBuilder(
        DateFilterProcessor $dateFilterProcessor,
        array $dateRange = [],
        array $owners = []
    ) {
        $qb = $this->createQueryBuilder('o')
            ->select('s.id as source')
            ->leftJoin('o.lead', 'l')
            ->leftJoin('l.source', 's')
            ->groupBy('source');

        $dateFilterProcessor->process($qb, $dateRange, 'o.createdAt');

        if ($owners) {
            QueryBuilderUtil::applyOptimizedIn($qb, 'o.owner', $owners);
        }

        return $qb;
    }

    /**
     * @param string $alias
     * @param CurrencyQueryBuilderTransformerInterface $qbTransformer
     * @param array $excludedStatuses
     *
     * @return QueryBuilder
     */
    public function getForecastQB(
        CurrencyQueryBuilderTransformerInterface $qbTransformer,
        $alias = 'o',
        array $excludedStatuses = ['lost', 'won']
    ) {
        $qb     = $this->createQueryBuilder($alias);
        $baBaseCurrencyQuery = $qbTransformer->getTransformSelectQuery('budgetAmount', $qb, $alias);
        $qb->select([
            sprintf('COUNT(%s.id) as inProgressCount', $alias),
            sprintf('SUM(%s) as budgetAmount', $baBaseCurrencyQuery),
            sprintf('SUM((%s) * %s.probability) as weightedForecast', $baBaseCurrencyQuery, $alias)
        ]);

        if ($excludedStatuses) {
            $qb->andWhere($qb->expr()->notIn(sprintf('%s.status', $alias), $excludedStatuses));
        }

        return $qb;
    }
}
