<?php

namespace Oro\Bundle\PaymentBundle\Tests\Unit\Context\LineItem\Builder\Basic\Factory;

use Oro\Bundle\PaymentBundle\Context\LineItem\Builder\Basic\BasicPaymentLineItemBuilder;
use Oro\Bundle\PaymentBundle\Context\LineItem\Builder\Basic\Factory\BasicPaymentLineItemBuilderFactory;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Model\ProductHolderInterface;

class BasicPaymentLineItemBuilderFactoryTest extends \PHPUnit_Framework_TestCase
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

        $builderFactory = new BasicPaymentLineItemBuilderFactory();

        $builder = $builderFactory->createBuilder(
            $this->productUnitMock,
            $unitCode,
            $quantity,
            $this->productHolderMock
        );

        $expectedBuilder = new BasicPaymentLineItemBuilder(
            $this->productUnitMock,
            $unitCode,
            $quantity,
            $this->productHolderMock
        );

        static::assertEquals($expectedBuilder, $builder);
    }
}
