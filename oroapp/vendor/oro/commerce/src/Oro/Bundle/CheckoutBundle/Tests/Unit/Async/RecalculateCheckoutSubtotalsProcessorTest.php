<?php

namespace Oro\Bundle\CheckoutBundle\Tests\Unit\Async;

use Oro\Bundle\CheckoutBundle\Async\RecalculateCheckoutSubtotalsProcessor;
use Oro\Bundle\CheckoutBundle\Model\CheckoutSubtotalUpdater;
use Oro\Bundle\CheckoutBundle\Async\Topics;
use Oro\Component\MessageQueue\Consumption\MessageProcessorInterface;
use Oro\Component\MessageQueue\Transport\MessageInterface;
use Oro\Component\MessageQueue\Transport\SessionInterface;
use Psr\Log\LoggerInterface;

class RecalculateCheckoutSubtotalsProcessorTest extends \PHPUnit_Framework_TestCase
{
    /** @var CheckoutSubtotalUpdater|\PHPUnit_Framework_MockObject_MockObject */
    protected $checkoutSubtotalUpdater;

    /** @var LoggerInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $logger;

    /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $message;

    /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $session;

    /** @var RecalculateCheckoutSubtotalsProcessor */
    protected $processor;

    protected function setUp()
    {
        $this->checkoutSubtotalUpdater = $this->createMock(CheckoutSubtotalUpdater::class);
        $this->logger = $this->createMock(LoggerInterface::class);
        $this->message = $this->createMock(MessageInterface::class);
        $this->session = $this->createMock(SessionInterface::class);

        $this->processor = new RecalculateCheckoutSubtotalsProcessor($this->checkoutSubtotalUpdater, $this->logger);
    }

    public function testProcessWhenThrowsException()
    {
        $exception = new \Exception('Test Exception');
        $this->checkoutSubtotalUpdater->expects($this->once())
            ->method('recalculateInvalidSubtotals')
            ->willThrowException($exception);
        $this->logger->expects($this->once())
            ->method('error')
            ->with(
                'Unexpected exception occurred during queue message processing',
                [
                    'exception' => $exception,
                    'topic' => Topics::RECALCULATE_CHECKOUT_SUBTOTALS,
                ]
            );

        $this->assertEquals(
            MessageProcessorInterface::REJECT,
            $this->processor->process($this->message, $this->session)
        );
    }

    public function testProcess()
    {
        $this->checkoutSubtotalUpdater->expects($this->once())
            ->method('recalculateInvalidSubtotals');
        $this->logger->expects($this->never())
            ->method('error');

        $this->assertEquals(MessageProcessorInterface::ACK, $this->processor->process($this->message, $this->session));
    }

    public function testGetSubscribedTopics()
    {
        $this->assertEquals(
            [Topics::RECALCULATE_CHECKOUT_SUBTOTALS],
            RecalculateCheckoutSubtotalsProcessor::getSubscribedTopics()
        );
    }
}
