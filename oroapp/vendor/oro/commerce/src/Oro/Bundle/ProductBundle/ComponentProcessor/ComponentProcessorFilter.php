<?php

namespace Oro\Bundle\ProductBundle\ComponentProcessor;

use Oro\Bundle\ProductBundle\Search\ProductRepository;
use Oro\Bundle\ProductBundle\Storage\ProductDataStorage;
use Oro\Bundle\SearchBundle\Query\Result\Item;

class ComponentProcessorFilter implements ComponentProcessorFilterInterface
{
    /** @var ProductRepository */
    protected $repository;

    /**
     * @param ProductRepository $repository
     */
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * {@inheritdoc}
     */
    public function filterData(array $data, array $dataParameters)
    {
        $products = [];
        foreach ($data[ProductDataStorage::ENTITY_ITEMS_DATA_KEY] as $product) {
            $upperSku = strtoupper($product[ProductDataStorage::PRODUCT_SKU_KEY]);

            if (!isset($products[$upperSku])) {
                $products[$upperSku] = [];
            }

            $products[$upperSku][] = $product;
        }

        $data[ProductDataStorage::ENTITY_ITEMS_DATA_KEY] = [];

        if (empty($products)) {
            return $data;
        }

        $searchQuery = $this->repository->getFilterSkuQuery(array_keys($products));
        /** @var Item[] $filteredProducts */
        $filteredProducts = $searchQuery->getResult();

        if ($filteredProducts === null) {
            throw new \RuntimeException("Result of search query cannot be null.");
        }

        $filteredProducts = $filteredProducts->toArray();

        foreach ($filteredProducts as $productEntry) {
            $product = $productEntry->getSelectedData();
            if (isset($product['sku'])) {
                $upperSku = strtoupper($productEntry->getSelectedData()['sku']);
                foreach ($products[$upperSku] as $product) {
                    $data[ProductDataStorage::ENTITY_ITEMS_DATA_KEY][] = $product;
                }
            }
        }

        return $data;
    }
}
