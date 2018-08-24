<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Entity;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Component\Testing\Unit\EntityTestCaseTrait;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\ProductPrice;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Tests\Unit\Entity\Stub\Product;

class BaseProductPriceTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    public function testAccessors()
    {
        $this->assertPropertyAccessors(
            new ProductPrice(),
            [
                ['id', 42],
                ['product', new Product()],
                ['unit', new ProductUnit()],
                ['priceList', new PriceList()],
                ['quantity', 12]
            ]
        );
    }

    public function testGetProductSku()
    {
        $product = new Product();
        $product->setSku('test');

        $price = new ProductPrice();
        $price->setProduct($product);

        $this->assertEquals($product->getSku(), $price->getProductSku());
    }

    public function testSetGetPrice()
    {
        $productPrice = new ProductPrice();
        $this->assertNull($productPrice->getPrice());

        $productPrice->updatePrice();
        $this->assertAttributeEquals(null, 'value', $productPrice);
        $this->assertAttributeEquals(null, 'currency', $productPrice);

        $value = 11;
        $currency = 'EUR';
        $this->setProperty($productPrice, 'value', $value);
        $this->setProperty($productPrice, 'currency', $currency);
        $productPrice->loadPrice();

        $price = $productPrice->getPrice();
        $this->assertInstanceOf('Oro\Bundle\CurrencyBundle\Entity\Price', $price);
        $this->assertEquals($value, $price->getValue());
        $this->assertEquals($currency, $price->getCurrency());

        $price = Price::create(12, 'USD');
        $productPrice->setPrice($price);
        $this->assertEquals($price, $productPrice->getPrice());

        $productPrice->updatePrice();
        $this->assertAttributeEquals($price->getValue(), 'value', $productPrice);
        $this->assertAttributeEquals($price->getCurrency(), 'currency', $productPrice);
    }

    /**
     * @param object $object
     * @param string $property
     * @param mixed $value
     */
    protected function setProperty($object, $property, $value)
    {
        $reflection = new \ReflectionProperty(get_class($object), $property);
        $reflection->setAccessible(true);
        $reflection->setValue($object, $value);
    }
}
