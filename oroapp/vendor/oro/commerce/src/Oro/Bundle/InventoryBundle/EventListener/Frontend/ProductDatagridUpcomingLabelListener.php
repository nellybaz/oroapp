<?php

namespace Oro\Bundle\InventoryBundle\EventListener\Frontend;

use Oro\Bundle\InventoryBundle\Provider\ProductUpcomingProvider;
use Oro\Bundle\DataGridBundle\Datasource\ResultRecord;
use Oro\Bundle\DataGridBundle\Event\PreBuild;
use Oro\Bundle\DataGridBundle\Extension\Formatter\Property\PropertyInterface;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\Repository\ProductRepository;
use Oro\Bundle\SearchBundle\Datagrid\Event\SearchResultAfter;

/**
 * Add highlight upcoming label of the products on product grid
 */
class ProductDatagridUpcomingLabelListener
{
    const COLUMN_IS_UPCOMING = 'is_upcoming';
    const COLUMN_AVAILABLE_DATE = 'availability_date';

    /** @var ProductUpcomingProvider */
    private $productUpcomingProvider;

    /** DoctrineHelper */
    private $doctrineHelper;

    /**
     * @param ProductUpcomingProvider $productUpcomingProvider
     * @param DoctrineHelper $doctrineHelper
     */
    public function __construct(
        ProductUpcomingProvider $productUpcomingProvider,
        DoctrineHelper $doctrineHelper
    ) {
        $this->productUpcomingProvider = $productUpcomingProvider;
        $this->doctrineHelper = $doctrineHelper;
    }

    /**
     * @param PreBuild $event
     */
    public function onPreBuild(PreBuild $event)
    {
        $config = $event->getConfig();

        $config->offsetAddToArrayByPath(
            '[properties]',
            [
                self::COLUMN_IS_UPCOMING => [
                    'type' => 'field',
                    'frontend_type' => PropertyInterface::TYPE_BOOLEAN,
                ],
                self::COLUMN_AVAILABLE_DATE => [
                    'type' => 'field',
                    'frontend_type' => PropertyInterface::TYPE_DATETIME,
                ],
            ]
        );
    }

    /**
     * @param SearchResultAfter $event
     */
    public function onResultAfter(SearchResultAfter $event)
    {
        /** @var ResultRecord[] $records */
        $records = $event->getRecords();

        $upcomingProductsData = $this->prepareDataForIsUpcomingCollection($records);
        if (!$upcomingProductsData) {
            return;
        }

        foreach ($records as $record) {
            $productId = $record->getValue('id');
            if (array_key_exists($productId, $upcomingProductsData)) {
                $record->addData($upcomingProductsData[$productId]);
            }
        }
    }

    /**
     * @param ResultRecord[] $records
     *
     * @return Product[]
     */
    protected function prepareDataForIsUpcomingCollection(array $records)
    {
        $data = [];
        $products = $this->getProductsEntities($records);

        foreach ($products as $product) {
            if ($this->productUpcomingProvider->isUpcoming($product)) {
                $data[$product->getId()] = [
                    self::COLUMN_IS_UPCOMING => true,
                    self::COLUMN_AVAILABLE_DATE => $this->productUpcomingProvider->getAvailabilityDate($product),
                ];
            }
        }

        return $data;
    }

    /**
     * @param ResultRecord[] $records
     *
     * @return Product[]
     */
    protected function getProductsEntities(array $records)
    {
        $products = [];

        /** @var ResultRecord[] $records */
        foreach ($records as $record) {
            $products[] = $record->getValue('id');
        }

        /** @var ProductRepository $productRepository */
        $productRepository = $this->doctrineHelper->getEntityRepositoryForClass(Product::class);

        return $productRepository->findBy(['id' => $products]);
    }
}
