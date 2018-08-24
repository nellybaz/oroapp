<?php

namespace Oro\Bundle\ProductBundle\Test\Validator\Constraints;

use Oro\Bundle\ProductBundle\Validator\Constraints\ProductBySku;

class ProductBySkuTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ProductBySku
     */
    protected $constraint;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->constraint = new ProductBySku();
    }

    public function testValidatedBy()
    {
        $this->assertEquals('oro_product_product_by_sku_validator', $this->constraint->validatedBy());
    }
}
