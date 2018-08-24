<?php

namespace Oro\Bundle\PayPalBundle\Tests\Unit\Method\View;

use Oro\Bundle\PaymentBundle\Context\PaymentContextInterface;
use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\PayPalBundle\Method\Config\PayPalExpressCheckoutConfigInterface;
use Oro\Bundle\PayPalBundle\Method\View\PayPalExpressCheckoutPaymentMethodView;
use Oro\Bundle\PaymentBundle\Method\View\PaymentMethodViewInterface;

class PayPalExpressCheckoutPaymentMethodViewTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /** @var PaymentMethodViewInterface */
    protected $methodView;

    /** @var PayPalExpressCheckoutConfigInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $paymentConfig;

    protected function setUp()
    {
        $this->paymentConfig =
            $this->createMock('Oro\Bundle\PayPalBundle\Method\Config\PayPalExpressCheckoutConfigInterface');

        $this->methodView = $this->createMethodView();
    }

    protected function tearDown()
    {
        unset($this->paymentConfig, $this->methodView);
    }

    public function testGetOptions()
    {
        /** @var PaymentContextInterface|\PHPUnit_Framework_MockObject_MockObject $context */
        $context = $this->createMock(PaymentContextInterface::class);
        $this->assertEmpty($this->methodView->getOptions($context));
    }

    public function testGetBlock()
    {
        $this->assertEquals('_payment_methods_paypal_express_checkout_widget', $this->methodView->getBlock());
    }

    public function testGetPaymentMethodIdentifier()
    {
        $this->paymentConfig->expects(static::once())
            ->method('getPaymentMethodIdentifier')
            ->willReturn('payflow_express_checkout');
        $this->assertSame('payflow_express_checkout', $this->methodView->getPaymentMethodIdentifier());
    }

    public function testGetLabel()
    {
        $label = 'Label';

        $this->paymentConfig->expects($this->once())
            ->method('getLabel')
            ->willReturn($label);

        $this->assertSame($label, $this->methodView->getLabel());
    }

    public function testGetShortLabel()
    {
        $shortLAbel = 'Short Label';

        $this->paymentConfig->expects($this->once())
            ->method('getShortLabel')
            ->willReturn($shortLAbel);

        $this->assertSame($shortLAbel, $this->methodView->getShortLabel());
    }

    /**
     * @return PaymentMethodViewInterface
     */
    protected function createMethodView()
    {
        return new PayPalExpressCheckoutPaymentMethodView($this->paymentConfig);
    }
}
