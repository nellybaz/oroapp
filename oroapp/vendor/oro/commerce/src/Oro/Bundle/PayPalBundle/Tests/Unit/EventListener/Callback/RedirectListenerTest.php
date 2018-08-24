<?php

namespace Oro\Bundle\PayPalBundle\Tests\Unit\EventListener\Callback;

use Oro\Bundle\PaymentBundle\Entity\PaymentTransaction;
use Oro\Bundle\PaymentBundle\Event\CallbackErrorEvent;
use Oro\Bundle\PaymentBundle\Method\Provider\PaymentMethodProviderInterface;
use Oro\Bundle\PayPalBundle\EventListener\Callback\RedirectListener;
use Oro\Bundle\PayPalBundle\PayPal\Payflow\Response\Response as PayflowResponse;
use Oro\Bundle\PayPalBundle\PayPal\Payflow\Response\ResponseStatusMap;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;

class RedirectListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var RedirectListener */
    protected $listener;

    /** @var Session|\PHPUnit_Framework_MockObject_MockObject */
    protected $session;

    /** @var PaymentMethodProviderInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $paymentMethodProvider;

    protected function setUp()
    {
        $this->session = $this->createMock(Session::class);
        $this->paymentMethodProvider = $this->createMock(PaymentMethodProviderInterface::class);

        $this->listener = new RedirectListener($this->session, $this->paymentMethodProvider);
    }

    protected function tearDown()
    {
        unset($this->listener, $this->session);
    }

    public function testOnErrorWithoutPaymentTransaction()
    {
        $event = new CallbackErrorEvent();

        $this->paymentMethodProvider->expects($this->never())
            ->method('hasPaymentMethod');

        $this->listener->onError($event);
    }

    public function testOnErrorWithoutPaymentMethod()
    {
        $event = new CallbackErrorEvent();

        $paymentTransaction = new PaymentTransaction();

        $event->setPaymentTransaction($paymentTransaction);

        $this->paymentMethodProvider->expects($this->once())
            ->method('hasPaymentMethod')
            ->willReturn(false);

        $this->session->expects($this->never())
            ->method('getFlashBag');

        $this->listener->onError($event);
    }

    /**
     * @dataProvider onErrorProvider
     * @param bool $errorAlreadyInFlashBag
     * @param array $options
     * @param array $receivedResponse
     * @param Response $expectedResponse
     * @param string $expectedFlashError
     */
    public function testOnError(
        $errorAlreadyInFlashBag,
        $options,
        $receivedResponse,
        $expectedResponse,
        $expectedFlashError = null
    ) {
        $paymentTransaction = (new PaymentTransaction())
            ->setTransactionOptions($options)
            ->setResponse($receivedResponse);

        $event = new CallbackErrorEvent();
        $event->setPaymentTransaction($paymentTransaction);

        $flashBag = new FlashBag();
        if ($errorAlreadyInFlashBag) {
            $flashBag->add('error', 'test msg');
        }

        $this->session->expects($this->any())
            ->method('getFlashBag')
            ->willReturn($flashBag);

        $this->paymentMethodProvider->expects($this->once())
            ->method('hasPaymentMethod')
            ->willReturn(true);

        $this->listener->onError($event);

        $this->assertResponses($expectedResponse, $event->getResponse());

        if ($errorAlreadyInFlashBag) {
            $this->assertContains('test msg', $flashBag->get('error', []));
        }
        if ($expectedFlashError) {
            $this->assertContains($expectedFlashError, $flashBag->get('error', []));
        }
    }

    /**
     * @return array
     */
    public function onErrorProvider()
    {
        $message = 'Field format error: 10736-A match of the Shipping Address City, State, and Postal Code failed.';

        return [
            [
                'errorAlreadyInFlashBag' => false,
                'options' => [RedirectListener::FAILED_SHIPPING_ADDRESS_URL_KEY => 'failedShippingUrl'],
                'receivedResponse' => [PayflowResponse::RESULT_KEY => ResponseStatusMap::FIELD_FORMAT_ERROR],
                'expectedResponse' => new Response('', Response::HTTP_FORBIDDEN),
                'expectedFlashError' => null
            ],
            [
                'errorAlreadyInFlashBag' => false,
                'options' => [RedirectListener::FAILED_SHIPPING_ADDRESS_URL_KEY => 'failedShippingUrl'],
                'receivedResponse' => [
                    PayflowResponse::RESULT_KEY => ResponseStatusMap::FIELD_FORMAT_ERROR,
                    PayflowResponse::RESPMSG_KEY => $message,
                ],
                'expectedResponse' => new RedirectResponse('failedShippingUrl'),
                'expectedFlashError' => 'oro.paypal.result.incorrect_shipping_address_error',
            ],
        ];
    }

    public function testOnErrorWithNonFieldFormatError()
    {
        $paymentTransaction = (new PaymentTransaction())
            ->setResponse([PayflowResponse::RESULT_KEY => ResponseStatusMap::DECLINED]);

        $event = new CallbackErrorEvent();
        $event->setPaymentTransaction($paymentTransaction);

        $this->session->expects($this->never())
            ->method('getFlashBag');

        $this->paymentMethodProvider->expects($this->once())
            ->method('hasPaymentMethod')
            ->willReturn(true);

        $this->listener->onError($event);
    }

    public function testOnErrorWithoutTransaction()
    {
        $event = new CallbackErrorEvent();

        $this->listener->onError($event);

        $this->assertNotInstanceOf(RedirectResponse::class, $event->getResponse());
    }

    /**
     * @param Response $expectedResponse
     * @param Response $actualResponse
     */
    private function assertResponses(Response $expectedResponse, Response $actualResponse)
    {
        // Hack response datetime because of requests might have different datetime
        $expectedResponse->setDate($actualResponse->getDate());
        $this->assertEquals($expectedResponse, $actualResponse);
    }
}
