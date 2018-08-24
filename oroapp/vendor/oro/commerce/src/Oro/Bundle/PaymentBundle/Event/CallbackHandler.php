<?php

namespace Oro\Bundle\PaymentBundle\Event;

use Psr\Log\LoggerAwareTrait;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Response;

use Oro\Bundle\PaymentBundle\Provider\PaymentTransactionProvider;

class CallbackHandler
{
    use LoggerAwareTrait;

    /** @var EventDispatcherInterface */
    protected $eventDispatcher;

    /** @var PaymentTransactionProvider */
    protected $paymentTransactionProvider;

    /**
     * @param EventDispatcherInterface $eventDispatcher
     * @param PaymentTransactionProvider $paymentTransactionProvider
     */
    public function __construct(
        EventDispatcherInterface $eventDispatcher,
        PaymentTransactionProvider $paymentTransactionProvider
    ) {
        $this->eventDispatcher = $eventDispatcher;
        $this->paymentTransactionProvider = $paymentTransactionProvider;
    }

    /**
     * @param AbstractCallbackEvent $event
     * @return Response
     */
    public function handle(AbstractCallbackEvent $event)
    {
        $paymentTransaction = $event->getPaymentTransaction();
        if (!$paymentTransaction) {
            return $event->getResponse();
        }

        $this->eventDispatcher->dispatch($event->getEventName(), $event);
        if ($event->isPropagationStopped()) {
            return $event->getResponse();
        }

        $this->paymentTransactionProvider->savePaymentTransaction($paymentTransaction);

        return $event->getResponse();
    }
}
