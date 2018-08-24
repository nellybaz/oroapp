<?php

namespace Oro\Bundle\OrderBundle\Tests\Unit\EventListener\Order;

use Symfony\Component\Form\FormInterface;

use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\OrderBundle\Event\OrderEvent;
use Oro\Bundle\OrderBundle\EventListener\Order\OrderTotalEventListener;
use Oro\Bundle\PricingBundle\SubtotalProcessor\TotalProcessorProvider;

class OrderTotalEventListenerTest extends \PHPUnit_Framework_TestCase
{
    use SubtotalTrait;

    /** @var OrderTotalEventListener */
    protected $listener;

    /** @var TotalProcessorProvider|\PHPUnit_Framework_MockObject_MockObject */
    protected $totalProvider;

    protected function setUp()
    {
        $this->totalProvider = $this
            ->getMockBuilder('Oro\Bundle\OrderBundle\Provider\TotalProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->listener = new OrderTotalEventListener($this->totalProvider);
    }

    protected function tearDown()
    {
        unset($this->listener, $this->totalProvider);
    }

    public function testOnOrderEvent()
    {
        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $form */
        $form = $this->createMock('Symfony\Component\Form\FormInterface');

        $order = new Order();

        $total = $this->getSubtotal('type', 'label', 100, 'USD', true);

        $this->totalProvider->expects($this->once())
            ->method('getTotalWithSubtotalsWithBaseCurrencyValues')
            ->with($order)
            ->willReturn($total->toArray());

        $event = new OrderEvent($form, $order);
        $this->listener->onOrderEvent($event);

        $actualData = $event->getData()->getArrayCopy();

        $this->assertArrayHasKey(OrderTotalEventListener::TOTALS_KEY, $actualData);
        $this->assertEquals($total->toArray(), $actualData[OrderTotalEventListener::TOTALS_KEY]);
    }
}
