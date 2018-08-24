<?php

namespace Oro\Bundle\PaymentBundle\Tests\Unit\Event;

use Symfony\Component\HttpFoundation\Response;

use Oro\Bundle\PaymentBundle\Entity\PaymentTransaction;
use Oro\Bundle\PaymentBundle\Event\AbstractCallbackEvent;

abstract class AbstractCallbackEventTest extends \PHPUnit_Framework_TestCase
{
    /** @return AbstractCallbackEvent */
    abstract protected function getEvent();

    public function testGetResponse()
    {
        $this->assertInstanceOf('Symfony\Component\HttpFoundation\Response', $this->getEvent()->getResponse());
    }

    public function testGetData()
    {
        $this->assertInternalType('array', $this->getEvent()->getData());
    }

    public function testOverrideResponse()
    {
        $response = new Response();
        $event = $this->getEvent();
        $event->setResponse($response);

        $this->assertInstanceOf('Symfony\Component\HttpFoundation\Response', $event->getResponse());
        $this->assertSame($response, $event->getResponse());
    }

    public function testPaymentTransaction()
    {
        $event = $this->getEvent();
        $this->assertNull($event->getPaymentTransaction());
        $paymentTransaction = new PaymentTransaction();
        $event->setPaymentTransaction($paymentTransaction);

        $this->assertInstanceOf(
            'Oro\Bundle\PaymentBundle\Entity\PaymentTransaction',
            $event->getPaymentTransaction()
        );
        $this->assertSame($paymentTransaction, $event->getPaymentTransaction());
    }

    public function testMarkResponse()
    {
        $event = $this->getEvent();
        $this->assertEquals(Response::HTTP_FORBIDDEN, $event->getResponse()->getStatusCode());
        $this->assertFalse($event->isPropagationStopped());

        $event->markSuccessful();
        $this->assertEquals(Response::HTTP_OK, $event->getResponse()->getStatusCode());

        $event->markFailed();
        $this->assertEquals(Response::HTTP_FORBIDDEN, $event->getResponse()->getStatusCode());
        $this->assertTrue($event->isPropagationStopped());
    }
}
