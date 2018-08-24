<?php

namespace Oro\Bundle\CheckoutBundle\Factory;

use Oro\Bundle\CheckoutBundle\DataProvider\Manager\CheckoutLineItemsManager;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\OrderBundle\Converter\OrderPaymentLineItemConverterInterface;
use Oro\Bundle\PricingBundle\SubtotalProcessor\TotalProcessorProvider;
use Oro\Bundle\PaymentBundle\Context\Builder\Factory\PaymentContextBuilderFactoryInterface;
use Oro\Bundle\PaymentBundle\Context\PaymentContextInterface;

class CheckoutPaymentContextFactory
{
    /**
     * @var CheckoutLineItemsManager
     */
    protected $checkoutLineItemsManager;

    /**
     * @var TotalProcessorProvider
     */
    protected $totalProcessor;

    /**
     * @var OrderPaymentLineItemConverterInterface
     */
    private $paymentLineItemConverter;

    /**
     * @var PaymentContextBuilderFactoryInterface|null
     */
    private $paymentContextBuilderFactory;

    /**
     * @param CheckoutLineItemsManager $checkoutLineItemsManager
     * @param TotalProcessorProvider $totalProcessor
     * @param OrderPaymentLineItemConverterInterface $paymentLineItemConverter
     * @param null|PaymentContextBuilderFactoryInterface $paymentContextBuilderFactory
     */
    public function __construct(
        CheckoutLineItemsManager $checkoutLineItemsManager,
        TotalProcessorProvider $totalProcessor,
        OrderPaymentLineItemConverterInterface $paymentLineItemConverter,
        PaymentContextBuilderFactoryInterface $paymentContextBuilderFactory = null
    ) {
        $this->checkoutLineItemsManager = $checkoutLineItemsManager;
        $this->totalProcessor = $totalProcessor;
        $this->paymentLineItemConverter = $paymentLineItemConverter;
        $this->paymentContextBuilderFactory = $paymentContextBuilderFactory;
    }

    /**
     * @param Checkout $checkout
     *
     * @return PaymentContextInterface|null
     */
    public function create(Checkout $checkout)
    {
        if (null === $this->paymentContextBuilderFactory) {
            return null;
        }

        $lineItems = $this->checkoutLineItemsManager->getData($checkout);
        $convertedLineItems = $this->paymentLineItemConverter->convertLineItems($lineItems);

        $paymentContextBuilder = $this->paymentContextBuilderFactory->createPaymentContextBuilder(
            $checkout,
            (string)$checkout->getId()
        );

        $total = $this->totalProcessor->getTotal($checkout);
        $subtotal = Price::create(
            $total->getAmount(),
            $total->getCurrency()
        );

        $paymentContextBuilder
            ->setSubTotal($subtotal)
            ->setCurrency($checkout->getCurrency());

        if (null !== $checkout->getWebsite()) {
            $paymentContextBuilder
                ->setWebsite($checkout->getWebsite());
        }

        if (null !== $checkout->getBillingAddress()) {
            $paymentContextBuilder->setBillingAddress($checkout->getBillingAddress());
        }

        if (null !== $checkout->getBillingAddress()) {
            $paymentContextBuilder->setBillingAddress($checkout->getBillingAddress());
        }

        if (null !== $checkout->getShippingMethod()) {
            $paymentContextBuilder->setShippingMethod($checkout->getShippingMethod());
        }

        if (null !== $convertedLineItems && !$convertedLineItems->isEmpty()) {
            $paymentContextBuilder->setLineItems($convertedLineItems);
        }

        if (null !== $checkout->getCustomer()) {
            $paymentContextBuilder->setCustomer($checkout->getCustomer());
            $paymentContextBuilder->setCustomerUser($checkout->getCustomerUser());
        }

        return $paymentContextBuilder->getResult();
    }
}
