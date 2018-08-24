<?php

namespace Oro\Bundle\SaleBundle\Model;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Util\ClassUtils;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\OrderBundle\Entity\OrderAddress;
use Oro\Bundle\OrderBundle\Entity\OrderLineItem;
use Oro\Bundle\OrderBundle\Handler\OrderCurrencyHandler;
use Oro\Bundle\OrderBundle\Handler\OrderTotalsHandler;
use Oro\Bundle\SaleBundle\Entity\Quote;
use Oro\Bundle\SaleBundle\Entity\QuoteAddress;
use Oro\Bundle\SaleBundle\Entity\QuoteProductOffer;

class QuoteToOrderConverter
{
    const FIELD_OFFER = 'offer';
    const FIELD_QUANTITY = 'quantity';

    /** @var OrderCurrencyHandler */
    protected $orderCurrencyHandler;

    /** @var ManagerRegistry */
    protected $registry;

    /** @var OrderTotalsHandler */
    protected $orderTotalsHandler;

    /**
     * @param OrderCurrencyHandler $orderCurrencyHandler
     * @param OrderTotalsHandler   $orderTotalsHandler
     * @param ManagerRegistry      $registry
     */
    public function __construct(
        OrderCurrencyHandler $orderCurrencyHandler,
        OrderTotalsHandler $orderTotalsHandler,
        ManagerRegistry $registry
    ) {
        $this->orderCurrencyHandler = $orderCurrencyHandler;
        $this->orderTotalsHandler = $orderTotalsHandler;
        $this->registry = $registry;
    }

    /**
     * @param Quote $quote
     * @param CustomerUser|null $user
     * @param array|null $selectedOffers
     * @param bool $needFlush
     * @return Order
     */
    public function convert(Quote $quote, CustomerUser $user = null, array $selectedOffers = null, $needFlush = false)
    {
        $order = $this->createOrder($quote, $user);

        if (!$selectedOffers) {
            foreach ($quote->getQuoteProducts() as $quoteProduct) {
                /** @var QuoteProductOffer $productOffer */
                $productOffer = $quoteProduct->getQuoteProductOffers()->first();

                $order->addLineItem($this->createOrderLineItem($productOffer));
            }
        } else {
            foreach ($selectedOffers as $selectedOffer) {
                /** @var QuoteProductOffer $offer */
                $offer = $selectedOffer[self::FIELD_OFFER];

                $order->addLineItem(
                    $this->createOrderLineItem($offer, (float)$selectedOffer[self::FIELD_QUANTITY])
                );
            }
        }

        if ($order->getCurrency() === null) {
            $this->orderCurrencyHandler->setOrderCurrency($order);
        }

        $this->orderTotalsHandler->fillSubtotals($order);

        if ($needFlush) {
            $manager = $this->registry->getManagerForClass('OroOrderBundle:Order');
            $manager->persist($order);
            $manager->flush();
        }

        return $order;
    }

    /**
     * @param Quote $quote
     * @param CustomerUser|null $user
     * @return Order
     */
    protected function createOrder(Quote $quote, CustomerUser $user = null)
    {
        $customerUser = $user ?: $quote->getCustomerUser();
        $customer = $user ? $user->getCustomer() : $quote->getCustomer();
        $orderShippingAddress = $this->createOrderAddress($quote->getShippingAddress());

        $order = new Order();
        $order
            ->setCustomer($customer)
            ->setCustomerUser($customerUser)
            ->setOwner($quote->getOwner())
            ->setOrganization($quote->getOrganization())
            ->setPoNumber($quote->getPoNumber())
            ->setShipUntil($quote->getShipUntil())
            ->setShippingAddress($orderShippingAddress)
            ->setSourceEntityClass(ClassUtils::getClass($quote))
            ->setSourceEntityId($quote->getId())
            ->setSourceEntityIdentifier($quote->getPoNumber())
            ->setCurrency($quote->getCurrency())
            ->setEstimatedShippingCostAmount($quote->getEstimatedShippingCostAmount())
            ->setOverriddenShippingCostAmount($quote->getOverriddenShippingCostAmount());

        return $order;
    }

    /**
     * @param QuoteAddress|null $quoteAddress
     *
     * @return null|OrderAddress
     */
    protected function createOrderAddress(QuoteAddress $quoteAddress = null)
    {
        $orderAddress = null;

        if ($quoteAddress) {
            $orderAddress = new OrderAddress();

            $orderAddress->setCustomerAddress($quoteAddress->getCustomerAddress());
            $orderAddress->setCustomerUserAddress($quoteAddress->getCustomerUserAddress());
            $orderAddress->setLabel($quoteAddress->getLabel());
            $orderAddress->setStreet($quoteAddress->getStreet());
            $orderAddress->setStreet2($quoteAddress->getStreet2());
            $orderAddress->setCity($quoteAddress->getCity());
            $orderAddress->setPostalCode($quoteAddress->getPostalCode());
            $orderAddress->setOrganization($quoteAddress->getOrganization());
            $orderAddress->setRegionText($quoteAddress->getRegionText());
            $orderAddress->setNamePrefix($quoteAddress->getNamePrefix());
            $orderAddress->setFirstName($quoteAddress->getFirstName());
            $orderAddress->setMiddleName($quoteAddress->getMiddleName());
            $orderAddress->setLastName($quoteAddress->getLastName());
            $orderAddress->setNameSuffix($quoteAddress->getNameSuffix());
            $orderAddress->setRegion($quoteAddress->getRegion());
            $orderAddress->setCountry($quoteAddress->getCountry());
            $orderAddress->setPhone($quoteAddress->getPhone());
            $orderAddress->setFromExternalSource(true);
        }

        return $orderAddress;
    }

    /**
     * @param QuoteProductOffer $quoteProductOffer
     * @param float|null $quantity
     * @return OrderLineItem
     */
    protected function createOrderLineItem(QuoteProductOffer $quoteProductOffer, $quantity = null)
    {
        $quoteProduct = $quoteProductOffer->getQuoteProduct();
        $freeFormTitle = null;
        $productSku = null;

        if ($quoteProduct->isTypeNotAvailable()) {
            $product = $quoteProduct->getProductReplacement();
            if ($quoteProduct->isProductReplacementFreeForm()) {
                $freeFormTitle = $quoteProduct->getFreeFormProductReplacement();
                $productSku = $quoteProduct->getProductReplacementSku();
            }
        } else {
            $product = $quoteProduct->getProduct();
            if ($quoteProduct->isProductFreeForm()) {
                $freeFormTitle = $quoteProduct->getFreeFormProduct();
                $productSku = $quoteProduct->getProductSku();
            }
        }

        $orderLineItem = new OrderLineItem();
        $orderLineItem
            ->setFreeFormProduct($freeFormTitle)
            ->setProductSku($productSku)
            ->setProduct($product)
            ->setProductUnit($quoteProductOffer->getProductUnit())
            ->setQuantity($quantity ?: $quoteProductOffer->getQuantity())
            ->setPriceType($quoteProductOffer->getPriceType())
            ->setPrice($quoteProductOffer->getPrice())
            ->setFromExternalSource(true);

        return $orderLineItem;
    }

    /**
     * @param Price $shippingEstimate
     * @param Order $order
     */
    protected function fillShippingCost(Price $shippingEstimate, Order $order)
    {
        $estimatedShippingCostAmount = $shippingEstimate->getValue();
        $shippingEstimateCurrency = $shippingEstimate->getCurrency();
        $orderCurrency = $order->getCurrency();
        if ($orderCurrency !== $shippingEstimateCurrency) {
            $estimatedShippingCostAmount *= $this->getExchangeRate($shippingEstimateCurrency, $orderCurrency);
        }

        $order->setEstimatedShippingCostAmount($estimatedShippingCostAmount);
    }

    /**
     * @param string $fromCurrency
     * @param string $toCurrency
     * @return float
     */
    protected function getExchangeRate($fromCurrency, $toCurrency)
    {
        return 1.0;
    }
}
