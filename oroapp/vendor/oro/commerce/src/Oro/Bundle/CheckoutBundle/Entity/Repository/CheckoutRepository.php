<?php

namespace Oro\Bundle\CheckoutBundle\Entity\Repository;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CheckoutBundle\Entity\CheckoutSource;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\WorkflowBundle\Helper\WorkflowQueryTrait;

class CheckoutRepository extends EntityRepository
{
    use WorkflowQueryTrait;

    /**
     * Return the count of line items per Checkout.
     *
     * @param array $checkoutIds
     *
     * @return array
     */
    public function countItemsPerCheckout(array $checkoutIds)
    {
        if (0 === count($checkoutIds)) {
            return [];
        }

        $databaseResults = $this->createQueryBuilder('c')
            ->select('c.id as id')
            ->addSelect('count(cli.id) as itemsCount')
            ->leftJoin('c.lineItems', 'cli')
            ->groupBy('c.id')
            ->where('c.id in (:ids)')
            ->setParameter('ids', $checkoutIds)
            ->getQuery()
            ->getScalarResult();

        return $this->extractCheckoutItemsCounts($databaseResults);
    }

    /**
     * Return the list of checkouts by ids.
     *
     * @param array $checkoutIds
     *
     * @return array|Checkout[] ['<id>' => '<Checkout>', ...]
     */
    public function getCheckoutsByIds(array $checkoutIds)
    {
        /* @var $checkouts Checkout[] */
        $checkouts = $this->createQueryBuilder('c')
            ->select('c, s')
            ->leftJoin('c.source', 's')
            ->where('c.id in (:ids)')
            ->setParameter('ids', $checkoutIds)
            ->getQuery()
            ->getResult();

        $sources = [];
        foreach ($checkouts as $checkout) {
            $sources[$checkout->getId()] = $checkout;
        }

        return $sources;
    }

    /**
     * Cutting out ID and ITEMSCOUNT columns from the query
     * and making an associative array out of it.
     *
     * @param $results
     *
     * @return array
     */
    private function extractCheckoutItemsCounts($results)
    {
        $result = [];

        if (!count($results)) {
            return $result;
        }

        $ids = array_column($results, 'id');
        $itemCounts = array_column($results, 'itemsCount');

        $result = array_combine(
            $ids,
            $itemCounts
        );

        return $result;
    }

    /**
     * @param CustomerUser $customerUser
     * @param array        $sourceCriteria [shoppingList => ShoppingList, deleted => false]
     * @param string       $workflowName
     *
     * @return Checkout|null
     */
    public function findCheckoutByCustomerUserAndSourceCriteria(
        CustomerUser $customerUser,
        array $sourceCriteria,
        $workflowName
    ) {
        $qb = $this->getCheckoutBySourceCriteriaQueryBuilder($sourceCriteria, $workflowName);
        $qb
            ->andWhere(
                $qb->expr()->eq('c.customerUser', ':customerUser')
            )
            ->setParameter('customerUser', $customerUser);

        return $qb->getQuery()->getOneOrNullResult();
    }

    public function deleteWithoutWorkflowItem()
    {
        $qb = $this->joinWorkflowItem($this->createQueryBuilder('checkout'), 'wi');
        $checkouts = $qb->select('checkout.id AS checkoutId, checkoutSource.id AS checkoutSourceId')
            ->join('checkout.source', 'checkoutSource')
            ->where($qb->expr()->eq('checkout.deleted', ':deleted'), $qb->expr()->isNull('wi.id'))
            ->setParameter('deleted', false)
            ->getQuery()
            ->getResult();

        if (!$checkouts) {
            return;
        }

        $qb = $this->createQueryBuilder('checkout');
        $qb->update()
            ->set('checkout.deleted', ':deleted')
            ->where($qb->expr()->in('checkout.id', ':checkouts'))
            ->setParameter('deleted', true)
            ->setParameter('checkouts', array_column($checkouts, 'checkoutId'))
            ->getQuery()
            ->execute();

        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->update(CheckoutSource::class, 'checkoutSource')
            ->set('checkoutSource.deleted', ':deleted')
            ->where($qb->expr()->in('checkoutSource.id', ':checkoutSources'))
            ->setParameter('deleted', true)
            ->setParameter('checkoutSources', array_column($checkouts, 'checkoutSourceId'))
            ->getQuery()
            ->execute();
    }

    /**
     * @param $paymentMethod
     *
     * @return Checkout[]
     */
    public function findByPaymentMethod($paymentMethod)
    {
        return $this->findBy([
            'paymentMethod' => $paymentMethod
        ]);
    }

    /**
     * @param array  $sourceCriteria [shoppingList => ShoppingList, deleted => false]
     * @param string $workflowName
     *
     * @return Checkout|null
     */
    public function findCheckoutBySourceCriteria(
        array $sourceCriteria,
        $workflowName
    ) {
        $qb = $this->getCheckoutBySourceCriteriaQueryBuilder($sourceCriteria, $workflowName);

        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * @return array|Checkout[]
     */
    public function findWithInvalidSubtotals()
    {
        $qb = $this->createQueryBuilder('c')
            ->select('c, cs')
            ->join('c.subtotals', 'cs')
            ->where('cs.valid = :valid')
            ->setParameter('valid', false, Type::BOOLEAN);

        return $qb->getQuery()->getResult();
    }

    /**
     * @param array  $sourceCriteria [shoppingList => ShoppingList, deleted => false]
     * @param string $workflowName
     *
     * @return QueryBuilder
     */
    private function getCheckoutBySourceCriteriaQueryBuilder(
        array $sourceCriteria,
        $workflowName
    ) {
        $qb = $this->createQueryBuilder('c');
        $this->joinWorkflowItem($qb)
            ->innerJoin('c.source', 's')
            ->where(
                $qb->expr()->eq('c.deleted', ':deleted'),
                $qb->expr()->eq('s.deleted', ':deleted'),
                $qb->expr()->eq('c.completed', ':completed'),
                $qb->expr()->eq('workflowItem.workflowName', ':workflowName')
            )
            ->setParameter('deleted', false, Type::BOOLEAN)
            ->setParameter('completed', false, Type::BOOLEAN)
            ->setParameter('workflowName', $workflowName);

        foreach ($sourceCriteria as $field => $value) {
            $qb->andWhere($qb->expr()->eq('s.' . $field, ':' . $field))
                ->setParameter($field, $value);
        }

        return $qb;
    }
}
