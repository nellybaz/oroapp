<?php

namespace Oro\Bundle\ProductBundle\Layout\DataProvider;

use Doctrine\ORM\Query;

use Oro\Bundle\ProductBundle\DependencyInjection\Configuration;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\SegmentBundle\Entity\Segment;
use Oro\Bundle\UserBundle\Entity\AbstractUser;

class NewArrivalsProvider extends AbstractSegmentProductsProvider
{
    /**
     * {@inheritDoc}
     */
    public function getProducts()
    {
        if (!$this->isMinAndMaxLimitsValid()) {
            return [];
        }

        return $this->applyMinItemsLimit(parent::getProducts());
    }

    /**
     * {@inheritdoc}
     */
    protected function getCacheParts(Segment $segment)
    {
        $user = $this->getTokenStorage()->getToken()->getUser();
        $userId = 0;
        if ($user instanceof AbstractUser) {
            $userId = $user->getId();
        }

        return ['new_arrivals_products', $userId, $segment->getId()];
    }

    /**
     * {@inheritdoc}
     */
    protected function getSegmentId()
    {
        return $this->getValueFromConfig(Configuration::NEW_ARRIVALS_PRODUCT_SEGMENT_ID);
    }

    /**
     * {@inheritdoc}
     */
    protected function getQueryBuilder(Segment $segment)
    {
        $qb = $this->getSegmentManager()->getEntityQueryBuilder($segment);

        if ($qb) {
            $qb = $this->getProductManager()->restrictQueryBuilder($qb, []);
        }

        return $qb;
    }

    /**
     * @return int|null
     */
    private function getMaxItemsLimit()
    {
        return $this->getValueFromConfig(Configuration::NEW_ARRIVALS_MAX_ITEMS);
    }

    /**
     * @return int|null
     */
    private function getMinItemsLimit()
    {
        return $this->getValueFromConfig(Configuration::NEW_ARRIVALS_MIN_ITEMS);
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    private function getValueFromConfig($key)
    {
        $key = Configuration::getConfigKeyByName($key);

        return $this->getConfigManager()->get($key);
    }

    /**
     * @param Query $query
     */
    private function setMaxItemsLimit($query)
    {
        if (is_int($this->getMaxItemsLimit())) {
            $query->setMaxResults($this->getMaxItemsLimit());
        }
    }

    /**
     * @param Product[] $products
     *
     * @return Product[]
     */
    private function applyMinItemsLimit(array $products)
    {
        if (count($products) < $this->getMinItemsLimit()) {
            return [];
        }

        return $products;
    }

    /**
     * @return bool
     */
    private function isMinAndMaxLimitsValid()
    {
        // if max limit is null, it is mean that there are no max limit
        $maxLimit = $this->getMaxItemsLimit();

        // if min limit is null, then we can operate it like zero
        $minLimit = (int)$this->getMinItemsLimit();

        return $maxLimit === null || ($maxLimit > 0 && $minLimit <= $maxLimit);
    }

    /**
     * @param array $data
     *
     * @return array
     */
    protected function getResult(array $data)
    {
        $query = $this->getRegistry()->getEntityManager()->createQuery($data['dql']);
        $this->setMaxItemsLimit($query);

        return $query->execute($data['parameters']);
    }
}
