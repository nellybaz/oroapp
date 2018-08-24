<?php

namespace Oro\Bundle\OrderBundle\Factory;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\OrderBundle\Converter\OrderPaymentLineItemConverterInterface;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\PaymentBundle\Context\Builder\Factory\PaymentContextBuilderFactoryInterface;
use Oro\Bundle\PaymentBundle\Context\PaymentContextInterface;

class OrderPaymentContextFactory
{
    /**
     * @var OrderPaymentLineItemConverterInterface
     */
    private $paymentLineItemConverter;

    /**
     * @var PaymentContextBuilderFactoryInterface|null
     */
    private $paymentContextBuilderFactory;

    /**
     * @param OrderPaymentLineItemConverterInterface     $paymentLineItemConverter
     * @param null|PaymentContextBuilderFactoryInterface $paymentContextBuilderFactory
     */
    public function __construct(
        OrderPaymentLineItemConverterInterface $paymentLineItemConverter,
        PaymentContextBuilderFactoryInterface $paymentContextBuilderFactory = null
    ) {
        $this->paymentLineItemConverter = $paymentLineItemConverter;
        $this->paymentContextBuilderFactory = $paymentContextBuilderFactory;
    }

    /**
     * @param Order $order
     *
     * @return PaymentContextInterface
     */
    public function create(Order $order)
    {
        if (null === $this->paymentContextBuilderFactory) {
            return null;
        }

        $paymentContextBuilder = $this->paymentContextBuilderFactory->createPaymentContextBuilder(
            $order,
            (string)$order->getId()
        );

        $subtotal = Price::create($order->getSubtotal(), $order->getCurrency());

        $paymentContextBuilder
            ->setSubTotal($subtotal)
            ->setCurrency($order->getCurrency())
            ->setShippingMethod($order->getShippingMethod());

        if (null !== $order->getWebsite()) {
            $paymentContextBuilder->setWebsite($order->getWebsite());
        }

        if (null !== $order->getBillingAddress()) {
            $paymentContextBuilder->setBillingAddress($order->getBillingAddress());
        }

        if (null !== $order->getBillingAddress()) {
            $paymentContextBuilder->setBillingAddress($order->getBillingAddress());
        }

        if (null !== $order->getCustomer()) {
            $paymentContextBuilder->setCustomer($order->getCustomer());
        }

        if (null !== $order->getCustomerUser()) {
            $paymentContextBuilder->setCustomerUser($order->getCustomerUser());
        }

        $convertedLineItems = $this->paymentLineItemConverter->convertLineItems($order->getLineItems());

        if (null !== $convertedLineItems && !$convertedLineItems->isEmpty()) {
            $paymentContextBuilder->setLineItems($convertedLineItems);
        }

        return $paymentContextBuilder->getResult();
    }
}
