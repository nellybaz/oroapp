<?php

namespace Oro\Bundle\PayPalBundle\Tests\Unit\EventListener\Callback;

use Oro\Bundle\PaymentBundle\Entity\PaymentTransaction;
use Oro\Bundle\PaymentBundle\Method\Provider\PaymentMethodProviderInterface;
use Symfony\Component\HttpFoundation\RequestStack;

use Oro\Bundle\PayPalBundle\EventListener\Callback\PayflowIPCheckListener;
use Oro\Bundle\PaymentBundle\Event\CallbackNotifyEvent;

class PayflowIPCheckListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var PaymentMethodProviderInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $paymentMethodProvider;

    public function setUp()
    {
        $this->paymentMethodProvider = $this->createMock(PaymentMethodProviderInterface::class);
    }

    /**
     * @return array[]
     */
    public function returnAllowedIPs()
    {
        return [
            'PayPal\'s IP address 1 should be allowed' => ['173.0.81.1'],
            'PayPal\'s IP address 2 should be allowed' => ['173.0.81.33'],
            'PayPal\'s IP address 3 should be allowed' => ['173.0.81.65'],
            'PayPal\'s IP address 4 should be allowed' => ['66.211.170.66'],
        ];
    }

    /**
     * @return array[]
     */
    public function returnNotAllowedIPs()
    {
        return [
            'Google\'s IP address 5 should not be allowed' => ['216.58.214.206'],
            'Facebook\'s IP address 6 should not be allowed' => ['173.252.120.68'],
        ];
    }

    /**
     * @dataProvider returnAllowedIPs
     * @param string $remoteAddress
     */
    public function testOnNotifyAllowed($remoteAddress)
    {
        $paymentTransaction = new PaymentTransaction();
        $paymentTransaction
            ->setAction('action')
            ->setPaymentMethod('payment_method')
            ->setResponse(['existing' => 'response']);

        $masterRequest = $this->createMock('Symfony\Component\HttpFoundation\Request');
        $masterRequest->method('getClientIp')->will($this->returnValue($remoteAddress));

        /** @var RequestStack|\PHPUnit_Framework_MockObject_MockObject $requestStack */
        $requestStack = $this->createMock('Symfony\Component\HttpFoundation\RequestStack');
        $requestStack->method('getMasterRequest')->will($this->returnValue($masterRequest));

        /** @var CallbackNotifyEvent|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this->createMock('Oro\Bundle\PaymentBundle\Event\CallbackNotifyEvent');

        $event
            ->expects($this->never())
            ->method('markFailed');

        $event
            ->expects($this->once())
            ->method('getPaymentTransaction')
            ->willReturn($paymentTransaction);

        $this->paymentMethodProvider
            ->expects(static::once())
            ->method('hasPaymentMethod')
            ->with('payment_method')
            ->willReturn(true);

        $listener = new PayflowIPCheckListener($requestStack, $this->paymentMethodProvider);
        $listener->onNotify($event);
    }

    /**
     * @dataProvider returnNotAllowedIPs
     * @param string $remoteAddress
     */
    public function testOnNotifyNotAllowed($remoteAddress)
    {
        $paymentTransaction = new PaymentTransaction();
        $paymentTransaction
            ->setAction('action')
            ->setPaymentMethod('payment_method')
            ->setResponse(['existing' => 'response']);

        $masterRequest = $this->createMock('Symfony\Component\HttpFoundation\Request');
        $masterRequest->method('getClientIp')->will($this->returnValue($remoteAddress));

        /** @var RequestStack|\PHPUnit_Framework_MockObject_MockObject $requestStack */
        $requestStack = $this->createMock('Symfony\Component\HttpFoundation\RequestStack');
        $requestStack->method('getMasterRequest')->will($this->returnValue($masterRequest));

        /** @var CallbackNotifyEvent|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this->createMock('Oro\Bundle\PaymentBundle\Event\CallbackNotifyEvent');
        $event
            ->expects($this->once())
            ->method('markFailed');

        $event
            ->expects($this->once())
            ->method('getPaymentTransaction')
            ->willReturn($paymentTransaction);

        $this->paymentMethodProvider
            ->expects(static::once())
            ->method('hasPaymentMethod')
            ->with('payment_method')
            ->willReturn(true);

        $listener = new PayflowIPCheckListener($requestStack, $this->paymentMethodProvider);
        $listener->onNotify($event);
    }

    public function testOnNotifyDontAllowIfMasterRequestEmpty()
    {
        $paymentTransaction = new PaymentTransaction();
        $paymentTransaction
            ->setAction('action')
            ->setPaymentMethod('payment_method')
            ->setResponse(['existing' => 'response']);

        $masterRequest = null;

        /** @var RequestStack|\PHPUnit_Framework_MockObject_MockObject $requestStack */
        $requestStack = $this->createMock('Symfony\Component\HttpFoundation\RequestStack');
        $requestStack->method('getMasterRequest')->will($this->returnValue($masterRequest));

        /** @var CallbackNotifyEvent|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this->createMock('Oro\Bundle\PaymentBundle\Event\CallbackNotifyEvent');
        $event
            ->expects($this->once())
            ->method('markFailed');

        $event
            ->expects($this->once())
            ->method('getPaymentTransaction')
            ->willReturn($paymentTransaction);

        $this->paymentMethodProvider
            ->expects(static::once())
            ->method('hasPaymentMethod')
            ->with('payment_method')
            ->willReturn(true);

        $listener = new PayflowIPCheckListener($requestStack, $this->paymentMethodProvider);
        $listener->onNotify($event);
    }
}
