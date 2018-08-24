<?php

namespace Oro\Bundle\ProductBundle\RelatedItem\RelatedProduct;

use Doctrine\ORM\EntityRepository;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\RelatedItem\RelatedProduct;
use Oro\Bundle\ProductBundle\Entity\Repository\RelatedItem\RelatedProductRepository;
use Oro\Bundle\ProductBundle\RelatedItem\AbstractRelatedItemConfigProvider;
use Oro\Bundle\ProductBundle\RelatedItem\FinderStrategyInterface;

class FinderDatabaseStrategy implements FinderStrategyInterface
{
    /**
     * @var DoctrineHelper
     */
    private $doctrineHelper;

    /**
     * @var AbstractRelatedItemConfigProvider
     */
    private $configProvider;

    /**
     * @param DoctrineHelper                    $doctrineHelper
     * @param AbstractRelatedItemConfigProvider $configProvider
     */
    public function __construct(DoctrineHelper $doctrineHelper, AbstractRelatedItemConfigProvider $configProvider)
    {
        $this->doctrineHelper = $doctrineHelper;
        $this->configProvider = $configProvider;
    }

    /**
     * {@inheritdoc}
     * If parameters `bidirectional` and `limit` are not passed - default values from configuration will be used
     */
    public function find(Product $product, $bidirectional = false, $limit = null)
    {
        if (!$this->configProvider->isEnabled()) {
            return [];
        }

        return $this->getRelatedProductsRepository()
            ->findRelated(
                $product->getId(),
                $bidirectional,
                $limit
            );
    }

    /**
     * @return RelatedProductRepository|EntityRepository
     */
    private function getRelatedProductsRepository()
    {
        return $this->doctrineHelper->getEntityRepository(RelatedProduct::class);
    }
}
