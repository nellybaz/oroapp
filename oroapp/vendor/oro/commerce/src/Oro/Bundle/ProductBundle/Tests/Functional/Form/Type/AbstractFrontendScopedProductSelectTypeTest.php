<?php

namespace Oro\Bundle\ProductBundle\Tests\Functional\Form\Type;

use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductData;

abstract class AbstractFrontendScopedProductSelectTypeTest extends AbstractScopedProductSelectTypeTest
{
    public function setUp()
    {
        $this->setDatagridIndexPath('oro_frontend_datagrid_index');
        $this->setSearchAutocompletePath('oro_frontend_autocomplete_search');

        parent::setUp();

        $this->configScope = $this->getContainer()->get('oro_website.manager')->getDefaultWebsite();
    }

    /**
     * @return array
     */
    public function restrictionSelectDataProvider()
    {
        return [
            [
                ['availableInventoryStatuses' => ['in_stock', 'out_of_stock']],
                'expectedProducts' => LoadProductData::PRODUCTS_1_2_3_6_7
            ],
            [
                ['availableInventoryStatuses' => ['in_stock']],
                'expectedProducts' => LoadProductData::PRODUCTS_1_2_6_7
            ],
            [
                ['availableInventoryStatuses' => ['out_of_stock']],
                'expectedProducts' => [
                    LoadProductData::PRODUCT_3
                ],
            ],
            [
                ['availableInventoryStatuses' => ['discontinued']],
                'expectedProducts' => []
            ],
            [
                ['availableInventoryStatuses' => ['in_stock', 'discontinued']],
                'expectedProducts' => [
                    LoadProductData::PRODUCT_1,
                    LoadProductData::PRODUCT_2,
                    LoadProductData::PRODUCT_6,
                    LoadProductData::PRODUCT_7,
                ]
            ],
        ];
    }

    /**
     * @return array
     */
    public function restrictionGridDataProvider()
    {
        return [
            [
                ['availableInventoryStatuses' => ['in_stock', 'out_of_stock']],
                'expectedProducts' => LoadProductData::PRODUCTS_1_2_3_6_7
            ],
            [
                ['availableInventoryStatuses' => ['in_stock']],
                'expectedProducts' => LoadProductData::PRODUCTS_1_2_6_7
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
                'expectedProducts' => [
                    LoadProductData::PRODUCT_1,
                    LoadProductData::PRODUCT_2,
                    LoadProductData::PRODUCT_6,
                    LoadProductData::PRODUCT_7,
                ],
            ],
        ];
    }
}
