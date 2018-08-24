<?php

namespace Oro\Bundle\ShippingBundle\Tests\Unit\Context\LineItem\Builder\Basic\Factory;

use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Model\ProductHolderInterface;
use Oro\Bundle\ShippingBundle\Context\LineItem\Builder\Basic\BasicShippingLineItemBuilder;
use Oro\Bundle\ShippingBundle\Context\LineItem\Builder\Basic\Factory\BasicShippingLineItemBuilderFactory;

class BasicShippingLineItemBuilderFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ProductUnit|\PHPUnit_Framework_MockObject_MockObject
     */
    private $productUnitMock;

    /**
     * @var ProductHolderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $productHolderMock;

    public function setUp()
    {
        $this->productUnitMock = $this->getMockBuilder(ProductUnit::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productHolderMock = $this->createMock(ProductHolderInterface::class);
    }

    public function testCreate()
    {
        $unitCode = 'someCode';
        $quantity = 15;

        $builderFactory = new BasicShippingLineItemBuilderFactory();

        $builder = $builderFactory->createBuilder(
            $this->productUnitMock,
            $unitCode,
            $quantity,
            $this->productHolderMock
        );

        $expectedBuilder = new BasicShippingLineItemBuilder(
            $this->productUnitMock,
            $unitCode,
            $quantity,
            $this->productHolderMock
        );

        $this->assertEquals($expectedBuilder, $builder);
    }
}
