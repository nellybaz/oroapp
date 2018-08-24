<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Discount\Converter;

use Oro\Bundle\CheckoutBundle\DataProvider\Converter\CheckoutToOrderConverter;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CheckoutBundle\Entity\CheckoutSource;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\PromotionBundle\Discount\Converter\CheckoutDiscountContextConverter;
use Oro\Bundle\PromotionBundle\Discount\Converter\DiscountContextConverterInterface;
use Oro\Bundle\PromotionBundle\Discount\DiscountContext;
use Oro\Bundle\PromotionBundle\Discount\DiscountLineItem;
use Oro\Bundle\PromotionBundle\Discount\Exception\UnsupportedSourceEntityException;
use Oro\Bundle\SaleBundle\Entity\QuoteDemand;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;

class CheckoutDiscountContextConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CheckoutToOrderConverter|\PHPUnit_Framework_MockObject_MockObject
     */
    private $checkoutToOrderConverter;

    /**
     * @var DiscountContextConverterInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $orderDiscountContextConverter;

    /**
     * @var CheckoutDiscountContextConverter
     */
    private $converter;

    protected function setUp()
    {
        $this->checkoutToOrderConverter = $this->createMock(CheckoutToOrderConverter::class);
        $this->orderDiscountContextConverter = $this->createMock(DiscountContextConverterInterface::class);
        $this->converter = new CheckoutDiscountContextConverter(
            $this->checkoutToOrderConverter,
            $this->orderDiscountContextConverter
        );
    }

    public function testConvert()
    {
        $sourceEntity = $this->getCheckout();
        $order = new Order();

        $discountContext = new DiscountContext();
        $discountContext->setSubtotal(100.0);
        $discountContext->setLineItems([new DiscountLineItem()]);

        $this->checkoutToOrderConverter
            ->expects($this->any())
            ->method('getOrder')
            ->with($sourceEntity)
            ->willReturn($order);

        $this->orderDiscountContextConverter
            ->expects($this->any())
            ->method('convert')
            ->with($order)
            ->willReturn($discountContext);

        $this->assertEquals($discountContext, $this->converter->convert($sourceEntity));
    }

    public function testConvertUnsupportedException()
    {
        $entity = new \stdClass();
        $this->expectException(UnsupportedSourceEntityException::class);
        $this->expectExceptionMessage('Source entity "stdClass" is not supported.');

        $this->converter->convert($entity);
    }

    /**
     * @dataProvider supportsDataProvider
     * @param object $entity
     * @param boolean $isSupported
     */
    public function testSupports($entity, $isSupported)
    {
        $this->assertSame($isSupported, $this->converter->supports($entity));
    }

    /**
     * @return array
     */
    public function supportsDataProvider()
    {
        return [
            'supported entity' => [
                'entity' => $this->getCheckout(),
                'isSupported' => true
            ],
            'support all source entities except QuoteDemand' => [
                'entity' => $this->getCheckout(\stdClass::class),
                'isSupported' => true
            ],
            'not support QuoteDemand source' => [
                'entity' => $this->getCheckout(QuoteDemand::class),
                'isSupported' => false
            ],
            'not supported entity' => [
                'entity' => new \stdClass(),
                'isSupported' => false
            ],
            'supported without source entity' => [
                'entity' => $this->getCheckout(null),
                'isSupported' => true
            ],
        ];
    }

    /**
     * @param string $sourceEntityClass
     * @return Checkout
     */
    private function getCheckout($sourceEntityClass = ShoppingList::class)
    {
        /** @var CheckoutSource|\PHPUnit_Framework_MockObject_MockObject $source */
        $source = $this->createMock(CheckoutSource::class);
        $source->expects($this->any())
            ->method('getEntity')
            ->willReturn($sourceEntityClass ? new $sourceEntityClass : null);
        $checkout = new Checkout();
        $checkout->setSource($source);

        return $checkout;
    }
}
