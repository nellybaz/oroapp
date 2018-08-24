<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Provider;

use Symfony\Component\Translation\TranslatorInterface;
use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\CurrencyBundle\Rounding\RoundingServiceInterface;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\PricingBundle\Manager\UserCurrencyManager;
use Oro\Bundle\PricingBundle\SubtotalProcessor\Model\Subtotal;
use Oro\Bundle\PromotionBundle\Discount\DiscountContext;
use Oro\Bundle\PromotionBundle\Executor\PromotionExecutor;
use Oro\Bundle\PromotionBundle\Provider\AppliedDiscountsProvider;
use Oro\Bundle\PromotionBundle\Provider\SubtotalProvider;
use Oro\Bundle\MultiWebsiteBundle\Provider\WebsiteCurrencyProvider;
use Oro\Bundle\PricingBundle\SubtotalProcessor\Provider\SubtotalProviderConstructorArguments;

class SubtotalProviderTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var UserCurrencyManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $currencyManager;

    /**
     * @var WebsiteCurrencyProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    private $websiteCurrencyProvider;

    /**
     * @var RoundingServiceInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $rounding;

    /**
     * @var PromotionExecutor|\PHPUnit_Framework_MockObject_MockObject
     */
    private $promotionExecutor;

    /**
     * @var AppliedDiscountsProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    private $appliedDiscountsProvider;

    /**
     * @var TranslatorInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $translator;

    /**
     * @var SubtotalProvider
     */
    private $provider;

    protected function setUp()
    {
        $this->currencyManager = $this->createMock(UserCurrencyManager::class);
        $this->websiteCurrencyProvider = $this->createMock(WebsiteCurrencyProvider::class);
        $this->promotionExecutor = $this->createMock(PromotionExecutor::class);
        $this->appliedDiscountsProvider = $this->createMock(AppliedDiscountsProvider::class);
        $this->rounding = $this->createMock(RoundingServiceInterface::class);
        $this->translator = $this->createMock(TranslatorInterface::class);

        $this->provider = new SubtotalProvider(
            new SubtotalProviderConstructorArguments($this->currencyManager, $this->websiteCurrencyProvider),
            $this->promotionExecutor,
            $this->appliedDiscountsProvider,
            $this->rounding,
            $this->translator
        );
    }

    public function testGetName()
    {
        $this->assertSame(SubtotalProvider::NAME, $this->provider->getName());
    }

    public function testIsSupported()
    {
        $order2 = new Order();
        $entity = new \stdClass();

        $this->promotionExecutor->expects($this->any())
            ->method('supports')
            ->will($this->returnValueMap([
                [$order2, true],
                [$entity, false],
            ]));

        $this->assertFalse($this->provider->isSupported($entity));
        $this->assertTrue($this->provider->isSupported($order2));
    }

    public function testGetSubtotal()
    {
        $entity = new \stdClass();

        $discountContext = $this->createMock(DiscountContext::class);
        $discountContext->expects($this->once())
            ->method('getTotalLineItemsDiscount')
            ->willReturn(10);
        $discountContext->expects($this->once())
            ->method('getSubtotalDiscountTotal')
            ->willReturn(5);
        $discountContext->expects($this->once())
            ->method('getShippingDiscountTotal')
            ->willReturn(8);
        $this->promotionExecutor->expects($this->once())
            ->method('execute')
            ->with($entity)
            ->willReturn($discountContext);

        $this->translator->expects($this->any())
            ->method('trans')
            ->willReturnCallback(
                function ($messageId) {
                    return $messageId . ' TRANS';
                }
            );

        $this->rounding->expects($this->exactly(2))
            ->method('round')
            ->willReturnArgument(0);
        $this->currencyManager->expects($this->once())
            ->method('getLoggedUserCurrentWebsiteCurrency')
            ->willReturn('EUR');

        $expected = [
            SubtotalProvider::ORDER_DISCOUNT_SUBTOTAL =>
                $this->createSubtotal('oro.promotion.discount.subtotal.order.label TRANS', 15.0, 'EUR', 100),
            SubtotalProvider::SHIPPING_DISCOUNT_SUBTOTAL =>
                $this->createSubtotal('oro.promotion.discount.subtotal.shipping.label TRANS', 8.0, 'EUR', 300)
        ];
        $this->assertEquals($expected, $this->provider->getSubtotal($entity));
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testGetCachedSubtotalEntityWithWrongEntity()
    {
        $this->appliedDiscountsProvider->expects($this->never())
            ->method('getDiscountsAmountByOrder');

        $this->provider->getCachedSubtotal(new \stdClass());
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testGetCachedSubtotalEntityWithoutId()
    {
        $order = new Order();

        $this->appliedDiscountsProvider->expects($this->never())
            ->method('getDiscountsAmountByOrder');

        $this->provider->getCachedSubtotal($order);
    }

    public function testGetCachedSubtotal()
    {
        /** @var Order $order */
        $order = $this->getEntity(Order::class, ['id' => 123]);
        $order->setCurrency('USD');

        $this->translator->expects($this->any())
            ->method('trans')
            ->willReturnCallback(
                function ($messageId) {
                    return $messageId . ' TRANS';
                }
            );

        $this->appliedDiscountsProvider->expects($this->once())
            ->method('getDiscountsAmountByOrder')
            ->with($order)
            ->willReturn(45.67);

        $this->appliedDiscountsProvider->expects($this->once())
            ->method('getShippingDiscountsAmountByOrder')
            ->with($order)
            ->willReturn(5.0);

        $this->rounding->expects($this->any())
            ->method('round')
            ->willReturnArgument(0);

        $expected = [
            SubtotalProvider::ORDER_DISCOUNT_SUBTOTAL =>
                $this->createSubtotal('oro.promotion.discount.subtotal.order.label TRANS', 45.67, 'USD', 100),
            SubtotalProvider::SHIPPING_DISCOUNT_SUBTOTAL =>
                $this->createSubtotal('oro.promotion.discount.subtotal.shipping.label TRANS', 5.0, 'USD', 300)
        ];

        $this->assertEquals($expected, $this->provider->getCachedSubtotal($order));
    }

    /**
     * @param string $label
     * @param float $amount
     * @param string $currency
     * @param int $order
     * @return Subtotal
     */
    private function createSubtotal($label, $amount, $currency, $order): Subtotal
    {
        $subtotal = new Subtotal();
        $subtotal->setLabel($label);
        $subtotal->setType(SubtotalProvider::TYPE);
        $subtotal->setVisible(true);
        $subtotal->setAmount($amount);
        $subtotal->setCurrency($currency);
        $subtotal->setSortOrder($order);
        $subtotal->setOperation(Subtotal::OPERATION_SUBTRACTION);

        return $subtotal;
    }
}
