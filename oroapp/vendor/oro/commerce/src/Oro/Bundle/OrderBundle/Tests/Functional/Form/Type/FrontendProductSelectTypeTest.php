<?php

namespace Oro\Bundle\OrderBundle\Tests\Functional\Form\Type;

use Oro\Bundle\CatalogBundle\Tests\Functional\DataFixtures\LoadCategoryProductData;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadFrontendProductData;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductData;
use Oro\Bundle\ProductBundle\Tests\Functional\Form\Type\AbstractFrontendScopedProductSelectTypeTest;

class FrontendProductSelectTypeTest extends AbstractFrontendScopedProductSelectTypeTest
{
    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->setDatagridName('products-select-grid-frontend');
        $this->setDataParameters(['scope' => 'order']);
        $this->setConfigPath('oro_order.frontend_product_visibility');

        parent::setUp();

        $this->loadFixtures([
            LoadCategoryProductData::class,
            LoadFrontendProductData::class
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function restrictionGridDataProvider()
    {
        return [
            [
                ['availableInventoryStatuses' => ['in_stock', 'out_of_stock']],
                'expectedProducts' => LoadProductData::PRODUCTS_1_2_3_6_7_8_9
            ],
            [
                ['availableInventoryStatuses' => ['in_stock']],
                'expectedProducts' => LoadProductData::PRODUCTS_1_2_6_7_8_9
            ],
            [
                ['availableInventoryStatuses' => ['out_of_stock']],
                'expectedProducts' => [
                    LoadProductData::PRODUCT_3,
                ],
            ],
            [
                ['availableInventoryStatuses' => ['discontinued']],
                'expectedProducts' => [],
            ],
            [
                ['availableInventoryStatuses' => ['in_stock', 'discontinued']],
                'expectedProducts' => LoadProductData::PRODUCTS_1_2_6_7_8_9
            ],
        ];
    }
}
