<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Model;

use Oro\Bundle\PricingBundle\Model\ProductPriceCriteria;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;

class ProductPriceCriteriaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider productPriceCriteriaDataProvider
     *
     * @param mixed $quantity
     * @param string $currency
     */
    public function testProductPriceCriteria($quantity, $currency)
    {
        $instance = new ProductPriceCriteria(
            $this->getProduct(42),
            (new ProductUnit())->setCode('kg'),
            $quantity,
            $currency
        );

        $this->assertInstanceOf('Oro\Bundle\PricingBundle\Model\ProductPriceCriteria', $instance);
        $this->assertEquals($this->getProduct(42), $instance->getProduct());
        $this->assertEquals((new ProductUnit())->setCode('kg'), $instance->getProductUnit());
        $this->assertEquals($quantity, $instance->getQuantity());
        $this->assertEquals($currency, $instance->getCurrency());
    }

    /**
     * @return array
     */
    public function productPriceCriteriaDataProvider()
    {
        return [
            [0, 'USD'],
            ['0', 'EUR'],
            [1, 'USD'],
            [1.1, 'EUR'],
            ['1', 'USD'],
            ['1.1', 'EUR']
        ];
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Product must have id.
     */
    public function testConstructorProductException()
    {
        new ProductPriceCriteria(new Product(), (new ProductUnit())->setCode('kg'), 1, 'USD');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage ProductUnit must have code.
     */
    public function testConstructorProductUnitException()
    {
        new ProductPriceCriteria($this->getProduct(42), new ProductUnit(), 1, 'USD');
    }

    /**
     * @dataProvider constructorExceptionDataProvider
     *
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Quantity must be numeric and more than or equal zero.
     *
     * @param mixed $quantity
     * @param string $currency
     */
    public function testConstructorQuantityException($quantity, $currency)
    {
        new ProductPriceCriteria($this->getProduct(42), (new ProductUnit())->setCode('kg'), $quantity, $currency);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Currency must be non-empty string.
     */
    public function testConstructorCurrencyException()
    {
        new ProductPriceCriteria($this->getProduct(42), (new ProductUnit())->setCode('kg'), 1, '');
    }

    /**
     * @return array
     */
    public function constructorExceptionDataProvider()
    {
        return [
            [-1, 'USD'],
            ['', 'EUR'],
            [null, 'USD'],
            ['1a', 'EUR']
        ];
    }

    public function testGetIdentifier()
    {
        $product = $this->getProduct(150);

        $productUnit = new ProductUnit();
        $productUnit->setCode('kg');

        $productPriceCriteria = new ProductPriceCriteria($product, $productUnit, 42, 'USD');

        $this->assertEquals('150-kg-42-USD', $productPriceCriteria->getIdentifier());
    }

    /**
     * @param int $id
     * @return Product
     */
    protected function getProduct($id)
    {
        $product = new Product();

        $reflection = new \ReflectionProperty(get_class($product), 'id');
        $reflection->setAccessible(true);
        $reflection->setValue($product, $id);

        return $product;
    }
}
