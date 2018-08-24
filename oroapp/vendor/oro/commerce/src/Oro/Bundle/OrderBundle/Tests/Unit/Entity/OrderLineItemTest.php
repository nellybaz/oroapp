<?php

namespace Oro\Bundle\OrderBundle\Tests\Unit\Entity;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\OrderBundle\Entity\OrderLineItem;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Component\Testing\Unit\EntityTestCaseTrait;

class OrderLineItemTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    public function testProperties()
    {
        $now = new \DateTime('now');
        $properties = [
            ['id', '123'],
            ['order', new Order()],
            ['product', new Product()],
            ['parentProduct', new Product()],
            ['productSku', '1234'],
            ['freeFormProduct', 'Services'],
            ['quantity', 42],
            ['productUnit', new ProductUnit()],
            ['productUnitCode', 'item'],
            ['value', 42.00],
            ['currency', 'USD'],
            ['price', Price::create(42, 'USD')],
            ['priceType', 10],
            ['shipBy', $now],
            ['fromExternalSource', true],
            ['comment', 'The answer is 42'],
        ];

        $entity = new OrderLineItem();
        $this->assertPropertyAccessors($entity, $properties);
    }

    public function testCreatePrice()
    {
        $entity = new OrderLineItem();
        $this->assertEmpty($entity->getPrice());
        $entity->setValue(42);
        $entity->setCurrency('USD');
        $entity->createPrice();
        $this->assertEquals(Price::create(42, 'USD'), $entity->getPrice());
    }

    public function testPriceNotInitializedWithValueWithoutCurrency()
    {
        $orderLineItem = new OrderLineItem();
        $this->assertEmpty($orderLineItem->getPrice());
        $orderLineItem->setValue(42);
        $this->assertEmpty($orderLineItem->getPrice());
    }

    public function testPriceNotInitializedWithCurrencyWithoutValue()
    {
        $orderLineItem = new OrderLineItem();
        $this->assertEmpty($orderLineItem->getPrice());
        $orderLineItem->setCurrency('USD');
        $this->assertEmpty($orderLineItem->getPrice());
    }

    public function testCreatePriceCalledOnSetCurrency()
    {
        $entity = new OrderLineItem();
        $this->assertEmpty($entity->getPrice());
        $entity->setValue(42);
        $this->assertEmpty($entity->getPrice());
        $entity->setCurrency('USD');
        $this->assertEquals(Price::create(42, 'USD'), $entity->getPrice());
    }

    public function testCreatePriceCalledOnSetValue()
    {
        $entity = new OrderLineItem();
        $this->assertEmpty($entity->getPrice());
        $entity->setCurrency('USD');
        $this->assertEmpty($entity->getPrice());
        $entity->setValue(42);
        $this->assertEquals(Price::create(42, 'USD'), $entity->getPrice());
    }

    public function testPrePersist()
    {
        $entity = new OrderLineItem();
        $entity->setPrice(Price::create(42, 'USD'));
        $this->assertEquals(42, $entity->getValue());
        $this->assertEquals('USD', $entity->getCurrency());

        $entity->getPrice()->setValue(84);
        $entity->getPrice()->setCurrency('EUR');

        $this->assertEmpty($entity->getProductSku());
        $this->assertEmpty($entity->getProductUnitCode());

        $entity->setProduct((new Product())->setSku('SKU'));
        $entity->setProductUnit((new ProductUnit())->setCode('kg'));

        $entity->preSave();
        $this->assertEquals(84, $entity->getValue());
        $this->assertEquals('EUR', $entity->getCurrency());
        $this->assertEquals('SKU', $entity->getProductSku());
        $this->assertEquals('kg', $entity->getProductUnitCode());
    }

    /**
     * @dataProvider isRequirePriceRecalculationDataProvider
     *
     * @param OrderLineItem $entity
     * @param string $method
     * @param mixed $value
     * @param bool $expectedResult
     */
    public function testIsRequirePriceRecalculation(OrderLineItem $entity, $method, $value, $expectedResult)
    {
        $this->assertFalse($entity->isRequirePriceRecalculation());

        $entity->$method($value);
        $this->assertEquals($expectedResult, $entity->isRequirePriceRecalculation());
    }

    /**
     * @return array
     */
    public function isRequirePriceRecalculationDataProvider()
    {
        $lineItemWithProduct = $this->getEntity(
            'Oro\Bundle\OrderBundle\Entity\OrderLineItem',
            'product',
            $this->getEntity('Oro\Bundle\ProductBundle\Entity\Product', 'id', 42)
        );

        $lineItemWithProductUnit = $this->getEntity(
            'Oro\Bundle\OrderBundle\Entity\OrderLineItem',
            'product',
            $this->getEntity('Oro\Bundle\ProductBundle\Entity\ProductUnit', 'code', 'kg')
        );

        $lineItemWithQuantity = $this->getEntity('Oro\Bundle\OrderBundle\Entity\OrderLineItem', 'quantity', 21);

        return [
            [
                new OrderLineItem(),
                'setProduct',
                new Product(),
                true
            ],
            [
                new OrderLineItem(),
                'setProductUnit',
                new ProductUnit(),
                true
            ],
            [
                new OrderLineItem(),
                'setQuantity',
                1,
                true
            ],
            [
                $lineItemWithProduct,
                'setProduct',
                $this->getEntity('Oro\Bundle\ProductBundle\Entity\Product', 'id', 21),
                true
            ],
            [
                $lineItemWithProductUnit,
                'setProductUnit',
                $this->getEntity('Oro\Bundle\ProductBundle\Entity\ProductUnit', 'code', 'item'),
                true
            ],
            [
                $lineItemWithQuantity,
                'setQuantity',
                1,
                true
            ]
        ];
    }

    /**
     * @param string $className
     * @param string $property
     * @param mixed $value
     * @return object
     */
    protected function getEntity($className, $property, $value)
    {
        $entity = new $className();

        $reflectionClass = new \ReflectionClass($className);
        $method = $reflectionClass->getProperty($property);
        $method->setAccessible(true);
        $method->setValue($entity, $value);

        return $entity;
    }
}
