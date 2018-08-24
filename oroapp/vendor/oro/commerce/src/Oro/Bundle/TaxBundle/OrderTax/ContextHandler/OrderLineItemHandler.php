<?php

namespace Oro\Bundle\TaxBundle\OrderTax\ContextHandler;

use Oro\Bundle\OrderBundle\Entity\OrderLineItem;
use Oro\Bundle\TaxBundle\Event\ContextEvent;
use Oro\Bundle\TaxBundle\Model\Taxable;
use Oro\Bundle\TaxBundle\Model\TaxCodeInterface;
use Oro\Bundle\TaxBundle\Provider\TaxationAddressProvider;
use Oro\Bundle\TaxBundle\Provider\TaxCodeProvider;

class OrderLineItemHandler
{
    /**
     * @var TaxationAddressProvider
     */
    protected $addressProvider;

    /**
     * @var TaxCodeProvider
     */
    protected $taxCodeProvider;

    /**
     * @var string
     */
    protected $orderLineItemClass;

    /**
     * @var TaxCodeInterface[]
     */
    protected $taxCodes = [];

    /**
     * @param TaxationAddressProvider $addressProvider
     * @param TaxCodeProvider $taxCodeProvider
     * @param string $orderLineItemClass
     */
    public function __construct(
        TaxationAddressProvider $addressProvider,
        TaxCodeProvider $taxCodeProvider,
        $orderLineItemClass
    ) {
        $this->addressProvider = $addressProvider;
        $this->taxCodeProvider = $taxCodeProvider;
        $this->orderLineItemClass = $orderLineItemClass;
    }

    /**
     * @param ContextEvent $contextEvent
     */
    public function onContextEvent(ContextEvent $contextEvent)
    {
        /** @var OrderLineItem $lineItem */
        $lineItem = $contextEvent->getMappingObject();
        $context = $contextEvent->getContext();

        if (!$lineItem instanceof $this->orderLineItemClass) {
            return;
        }

        $context->offsetSet(Taxable::DIGITAL_PRODUCT, $this->isDigital($lineItem));
        $context->offsetSet(Taxable::PRODUCT_TAX_CODE, $this->getProductTaxCode($lineItem));
        $context->offsetSet(Taxable::ACCOUNT_TAX_CODE, $this->getCustomerTaxCode($lineItem));
    }

    /**
     * @param OrderLineItem $lineItem
     * @return bool
     */
    protected function isDigital(OrderLineItem $lineItem)
    {
        $productTaxCode = $this->getProductTaxCode($lineItem);

        if (null === $productTaxCode) {
            return false;
        }

        $billingAddress = $lineItem->getOrder()->getBillingAddress();
        $shippingAddress = $lineItem->getOrder()->getShippingAddress();

        $address = $this->addressProvider->getTaxationAddress($billingAddress, $shippingAddress);

        if (null === $address) {
            return false;
        }

        return $this->addressProvider->isDigitalProductTaxCode($address->getCountryIso2(), $productTaxCode);
    }

    /**
     * @param OrderLineItem $lineItem
     * @return null|TaxCodeInterface
     */
    protected function getProductTaxCode(OrderLineItem $lineItem)
    {
        $cacheKey  = $this->getCacheTaxCodeKey(TaxCodeInterface::TYPE_PRODUCT, $lineItem);
        $cachedTaxCode = $this->getCachedTaxCode($cacheKey);

        if ($cachedTaxCode !== false) {
            return $cachedTaxCode;
        }

        $product = $lineItem->getProduct();
        $this->taxCodes[$cacheKey] = null;

        if ($product) {
            $this->taxCodes[$cacheKey] = $this->getTaxCode(TaxCodeInterface::TYPE_PRODUCT, $product);
        }

        return $this->taxCodes[$cacheKey];
    }

    /**
     * @param OrderLineItem $lineItem
     * @return null|string
     */
    protected function getCustomerTaxCode(OrderLineItem $lineItem)
    {
        $cacheKey  = $this->getCacheTaxCodeKey(TaxCodeInterface::TYPE_ACCOUNT, $lineItem);
        $cachedTaxCode = $this->getCachedTaxCode($cacheKey);

        if ($cachedTaxCode !== false) {
            return $cachedTaxCode;
        }

        $taxCode = null;
        $customer = null;

        if ($lineItem->getOrder() && $lineItem->getOrder()->getCustomer()) {
            $customer = $lineItem->getOrder()->getCustomer();
            $taxCode = $this->getTaxCode(TaxCodeInterface::TYPE_ACCOUNT, $customer);
        }

        if (!$taxCode && $customer && $customer->getGroup()) {
            $taxCode = $this->getTaxCode(TaxCodeInterface::TYPE_ACCOUNT_GROUP, $customer->getGroup());
        }

        $this->taxCodes[$cacheKey] = $taxCode;

        return $taxCode;
    }

    /**
     * @param string $type
     * @param object $object
     * @return string|null
     */
    protected function getTaxCode($type, $object)
    {
        $taxCode = $this->taxCodeProvider->getTaxCode((string)$type, $object);
        return $taxCode ? $taxCode->getCode() : null;
    }

    /**
     * @param string $type
     * @param OrderLineItem $orderLineItem
     * @return string
     */
    protected function getCacheTaxCodeKey($type, OrderLineItem $orderLineItem)
    {
        $id = $orderLineItem->getId() ?: spl_object_hash($orderLineItem);

        return implode(':', [$type, $id]);
    }

    /**
     * @param string $cacheKey
     * @return false|TaxCodeInterface
     */
    protected function getCachedTaxCode($cacheKey)
    {
        if (!array_key_exists($cacheKey, $this->taxCodes)) {
            return false;
        }

        return $this->taxCodes[$cacheKey];
    }
}
