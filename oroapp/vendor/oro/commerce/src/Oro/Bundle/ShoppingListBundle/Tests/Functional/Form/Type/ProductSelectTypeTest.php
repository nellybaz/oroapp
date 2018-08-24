<?php

namespace Oro\Bundle\ShoppingListBundle\Tests\Functional\Autocomlete;

use Oro\Bundle\CatalogBundle\Tests\Functional\DataFixtures\LoadCategoryProductData;
use Oro\Bundle\ProductBundle\Tests\Functional\Form\Type\AbstractScopedProductSelectTypeTest;

class ProductSelectTypeTest extends AbstractScopedProductSelectTypeTest
{
    public function setUp()
    {
        $this->setDataParameters(['scope' => 'shopping_list']);
        $this->setConfigPath('oro_shopping_list.backend_product_visibility');

        parent::setUp();
        $this->loadFixtures([LoadCategoryProductData::class]);
    }
}
