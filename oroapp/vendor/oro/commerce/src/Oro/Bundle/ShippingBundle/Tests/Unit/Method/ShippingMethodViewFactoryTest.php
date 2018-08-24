<?php

namespace Oro\Bundle\ShippingBundle\Tests\Unit\Method;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\ShippingBundle\Method\ShippingMethodInterface;
use Oro\Bundle\ShippingBundle\Method\ShippingMethodProviderInterface;
use Oro\Bundle\ShippingBundle\Method\ShippingMethodTypeInterface;
use Oro\Bundle\ShippingBundle\Method\ShippingMethodViewFactory;

class ShippingMethodViewFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ShippingMethodProviderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $shippingMethodProviderMock;

    /**
     * @var ShippingMethodViewFactory
     */
    private $shippingMethodViewFactory;

    public function setUp()
    {
        $this->shippingMethodProviderMock = $this
            ->getMockBuilder(ShippingMethodProviderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->shippingMethodViewFactory = new ShippingMethodViewFactory($this->shippingMethodProviderMock);
    }

    public function testCreateMethodView()
    {
        $methodId = 'someId';
        $isGrouped = true;
        $label = 'someLabel';
        $sortOrder = 5;

        $expected = [
            'identifier' => $methodId,
            'isGrouped' => $isGrouped,
            'label' => $label,
            'sortOrder' => $sortOrder,
        ];

        $actual = $this->shippingMethodViewFactory->createMethodView($methodId, $label, $isGrouped, $sortOrder);

        $this->assertEquals($expected, $actual);
    }

    public function testCreateMethodViewTest()
    {
        $methodId = 'someId';
        $label = 'someLabel';
        $sortOrder = 5;
        $price = Price::create(5, 'USD');

        $expected = [
            'identifier' => $methodId,
            'label' => $label,
            'sortOrder' => $sortOrder,
            'price' => $price,
        ];

        $actual = $this->shippingMethodViewFactory->createMethodTypeView($methodId, $label, $sortOrder, $price);

        $this->assertEquals($expected, $actual);
    }

    public function testCreateMethodViewByShippingMethod()
    {
        $methodId = 'someId';
        $isGrouped = true;
        $label = 'someLabel';
        $sortOrder = 5;

        $methodMock = $this->getMockBuilder(ShippingMethodInterface::class)->getMock();

        $methodMock
            ->expects($this->once())
            ->method('getLabel')
            ->willReturn($label);

        $methodMock
            ->expects($this->once())
            ->method('isGrouped')
            ->willReturn($isGrouped);

        $methodMock
            ->expects($this->once())
            ->method('getSortOrder')
            ->willReturn($sortOrder);

        $this->shippingMethodProviderMock
            ->expects($this->once())
            ->method('getShippingMethod')
            ->with($methodId)
            ->willReturn($methodMock);

        $expected = [
            'identifier' => $methodId,
            'isGrouped' => $isGrouped,
            'label' => $label,
            'sortOrder' => $sortOrder,
        ];

        $actual = $this->shippingMethodViewFactory->createMethodViewByShippingMethod($methodId);

        $this->assertEquals($expected, $actual);
    }

    public function createMethodViewByShippingMethodWithNullMethod()
    {
        $methodId = 'someMethodId';

        $this->shippingMethodProviderMock
            ->expects($this->once())
            ->method('getShippingMethod')
            ->with($methodId)
            ->willReturn(null);

        $actual = $this->shippingMethodViewFactory->createMethodViewByShippingMethod($methodId);

        $this->assertEquals(null, $actual);
    }

    public function testCreateMethodTypeViewByShippingMethodAndPrice()
    {
        $methodId = 'someId';
        $methodTypeId = 'someMethodTypeId';
        $label = 'someLabel';
        $sortOrder = 5;
        $price = Price::create(5, 'USD');

        $methodTypeMock = $this->getMockBuilder(ShippingMethodTypeInterface::class)->getMock();

        $methodTypeMock
            ->expects($this->once())
            ->method('getLabel')
            ->willReturn($label);

        $methodTypeMock
            ->expects($this->once())
            ->method('getSortOrder')
            ->willReturn($sortOrder);

        $methodMock = $this->getMockBuilder(ShippingMethodInterface::class)->getMock();

        $methodMock
            ->expects($this->once())
            ->method('getType')
            ->willReturn($methodTypeMock);

        $this->shippingMethodProviderMock
            ->expects($this->once())
            ->method('getShippingMethod')
            ->with($methodId)
            ->willReturn($methodMock);

        $expected = [
            'identifier' => $methodTypeId,
            'label' => $label,
            'sortOrder' => $sortOrder,
            'price' => $price,
        ];

        $actual = $this->shippingMethodViewFactory->createMethodTypeViewByShippingMethodAndPrice(
            $methodId,
            $methodTypeId,
            $price
        );

        $this->assertEquals($expected, $actual);
    }

    public function testCreateMethodTypeViewByShippingMethodAndPriceWithNullMethod()
    {
        $methodId = 'someMethodId';
        $methodTypeId = 'someMethodTypeId';
        $price = Price::create(5, 'USD');

        $this->shippingMethodProviderMock
            ->expects($this->once())
            ->method('getShippingMethod')
            ->with($methodId)
            ->willReturn(null);

        $actual = $this->shippingMethodViewFactory->createMethodTypeViewByShippingMethodAndPrice(
            $methodId,
            $methodTypeId,
            $price
        );

        $this->assertEquals(null, $actual);
    }

    public function testCreateMethodTypeViewByShippingMethodAndPriceWithNullMethodType()
    {
        $methodId = 'someMethodId';
        $methodTypeId = 'someMethodTypeId';
        $price = Price::create(5, 'USD');

        $methodMock = $this->getMockBuilder(ShippingMethodInterface::class)->getMock();

        $methodMock
            ->expects($this->once())
            ->method('getType')
            ->willReturn(null);

        $this->shippingMethodProviderMock
            ->expects($this->once())
            ->method('getShippingMethod')
            ->with($methodId)
            ->willReturn($methodMock);

        $actual = $this->shippingMethodViewFactory->createMethodTypeViewByShippingMethodAndPrice(
            $methodId,
            $methodTypeId,
            $price
        );

        $this->assertEquals(null, $actual);
    }
}
