<?php

namespace Oro\Bundle\PaymentBundle\Tests\Unit\Context\LineItem\Builder\Basic;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\PaymentBundle\Context\LineItem\Builder\Basic\BasicPaymentLineItemBuilder;
use Oro\Bundle\PaymentBundle\Context\PaymentLineItem;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Model\ProductHolderInterface;

class BasicPaymentLineItemBuilderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Price|\PHPUnit_Framework_MockObject_MockObject
     */
    private $priceMock;

    /**
     * @var ProductUnit|\PHPUnit_Framework_MockObject_MockObject
     */
    private $productUnitMock;

    /**
     * @var ProductHolderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $productHolderMock;

    /**
     * @var Product
     */
    private $productMock;

    public function setUp()
    {
        $this->priceMock = $this->getMockBuilder(Price::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productUnitMock = $this->getMockBuilder(ProductUnit::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productHolderMock = $this->createMock(ProductHolderInterface::class);

        $this->productMock = $this->getMockBuilder(Product::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testFullBuild()
    {
        $unitCode = 'someCode';
        $quantity = 15;
        $productSku = 'someSku';
        $entityIdentifier = 'someId';

        $this->productHolderMock
            ->expects(static::once())
            ->method('getEntityIdentifier')
            ->willReturn($entityIdentifier);

        $builder = new BasicPaymentLineItemBuilder(
            $this->productUnitMock,
            $unitCode,
            $quantity,
            $this->productHolderMock
        );

        $builder
            ->setPrice($this->priceMock)
            ->setProduct($this->productMock)
            ->setProductSku($productSku);

        $paymentLineItem = $builder->getResult();

        $expectedPaymentLineItem = new PaymentLineItem([
            PaymentLineItem::FIELD_PRICE => $this->priceMock,
            PaymentLineItem::FIELD_PRODUCT_UNIT => $this->productUnitMock,
            PaymentLineItem::FIELD_PRODUCT_UNIT_CODE => $unitCode,
            PaymentLineItem::FIELD_QUANTITY => $quantity,
            PaymentLineItem::FIELD_PRODUCT_HOLDER => $this->productHolderMock,
            PaymentLineItem::FIELD_PRODUCT => $this->productMock,
            PaymentLineItem::FIELD_PRODUCT_SKU => $productSku,
            PaymentLineItem::FIELD_ENTITY_IDENTIFIER => $entityIdentifier
        ]);

        static::assertEquals($expectedPaymentLineItem, $paymentLineItem);
    }

    public function testOptionalBuild()
    {
        $unitCode = 'someCode';
        $quantity = 15;
        $entityIdentifier = 'someId';

        $this->productHolderMock
            ->expects(static::once())
            ->method('getEntityIdentifier')
            ->willReturn($entityIdentifier);

        $builder = new BasicPaymentLineItemBuilder(
            $this->productUnitMock,
            $unitCode,
            $quantity,
            $this->productHolderMock
        );

        $paymentLineItem = $builder->getResult();

        $expectedPaymentLineItem = new PaymentLineItem([
            PaymentLineItem::FIELD_PRODUCT_UNIT => $this->productUnitMock,
            PaymentLineItem::FIELD_PRODUCT_UNIT_CODE => $unitCode,
            PaymentLineItem::FIELD_QUANTITY => $quantity,
            PaymentLineItem::FIELD_PRODUCT_HOLDER => $this->productHolderMock,
            PaymentLineItem::FIELD_ENTITY_IDENTIFIER => $entityIdentifier
        ]);

        static::assertEquals($expectedPaymentLineItem, $paymentLineItem);
    }
}
