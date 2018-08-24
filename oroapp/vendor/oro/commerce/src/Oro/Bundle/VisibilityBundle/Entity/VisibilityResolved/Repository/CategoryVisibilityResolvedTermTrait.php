<?php

namespace Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\Repository;

use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\QueryBuilder;
use Oro\Bundle\ScopeBundle\Entity\Scope;
use Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\CustomerCategoryVisibilityResolved;

trait CategoryVisibilityResolvedTermTrait
{
    /**
     * @param QueryBuilder $qb
     * @param int $configValue
     * @return string
     */
    protected function getCategoryVisibilityResolvedTerm(QueryBuilder $qb, $configValue)
    {
        $qb->leftJoin(
            'Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\CategoryVisibilityResolved',
            'cvr',
            Join::WITH,
            $qb->expr()->eq($this->getRootAlias($qb), 'cvr.category')
        );

        return $this->formatConfigFallback('cvr.visibility', $configValue);
    }

    /**
     * @param QueryBuilder $qb
     * @param Scope $scope
     * @param int
     * @return string
     */
    protected function getCustomerGroupCategoryVisibilityResolvedTerm(
        QueryBuilder $qb,
        Scope $scope,
        $configValue
    ) {
        $qb->leftJoin(
            'Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\CustomerGroupCategoryVisibilityResolved',
            'agcvr',
            Join::WITH,
            $qb->expr()->andX(
                $qb->expr()->eq($this->getRootAlias($qb), 'agcvr.category'),
                $qb->expr()->eq('agcvr.scope', ':groupScope')
            )
        );

        $qb->setParameter('groupScope', $scope);

        return sprintf(
            'COALESCE(CASE WHEN agcvr.visibility = %s THEN %s ELSE agcvr.visibility END, 0) * 10',
            CustomerCategoryVisibilityResolved::VISIBILITY_FALLBACK_TO_CONFIG,
            $configValue
        );
    }

    /**
     * @param QueryBuilder $qb
     * @param Scope $scope
     * @param int $configValue
     * @return string
     */
    protected function getCustomerCategoryVisibilityResolvedTerm(QueryBuilder $qb, Scope $scope, $configValue)
    {
        $qb->leftJoin(
            'Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\CustomerCategoryVisibilityResolved',
            'acvr',
            Join::WITH,
            $qb->expr()->andX(
                $qb->expr()->eq($this->getRootAlias($qb), 'acvr.category'),
                $qb->expr()->eq('acvr.scope', ':customerScope')
            )
        );

        $qb->setParameter('customerScope', $scope);

        return sprintf(
            'COALESCE(CASE WHEN acvr.visibility = %s THEN %s ELSE acvr.visibility END, 0) * 100',
            CustomerCategoryVisibilityResolved::VISIBILITY_FALLBACK_TO_CONFIG,
            $configValue
        );
    }

    /**
     * @param QueryBuilder $qb
     * @return mixed
     */
    protected function getRootAlias(QueryBuilder $qb)
    {
        return $qb->getRootAliases()[0];
    }

    /**
     * @param string $select
     * @param int $configValue
     * @return string
     */
    protected function formatConfigFallback($select, $configValue)
    {
        // wrap into COALESCE in case of multiple fields
        if (strpos($select, ',') !== false) {
            $select = sprintf('COALESCE(%s)', $select);
        }

        return sprintf(
            'CASE WHEN %1$s IS NOT NULL AND %1$s != %2$s THEN %1$s ELSE %3$s END',
            $select,
            CustomerCategoryVisibilityResolved::VISIBILITY_FALLBACK_TO_CONFIG,
            $configValue
        );
    }
}
