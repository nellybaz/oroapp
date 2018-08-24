<?php

namespace Oro\Bundle\OrderBundle\EventListener\Order;

use Oro\Bundle\OrderBundle\Entity\OrderLineItem;
use Oro\Bundle\OrderBundle\Event\OrderEvent;
use Oro\Bundle\PricingBundle\Model\PriceListTreeHandler;
use Oro\Bundle\PricingBundle\Provider\ProductPriceProvider;

class TierPriceEventListener
{
    const TIER_PRICES_KEY = 'tierPrices';

    /** @var ProductPriceProvider */
    protected $productPriceProvider;

    /** @var PriceListTreeHandler */
    protected $priceListTreeHandler;

    /**
     * @param ProductPriceProvider $productPriceProvider
     * @param PriceListTreeHandler $priceListTreeHandler
     */
    public function __construct(ProductPriceProvider $productPriceProvider, PriceListTreeHandler $priceListTreeHandler)
    {
        $this->productPriceProvider = $productPriceProvider;
        $this->priceListTreeHandler = $priceListTreeHandler;
    }

    /**
     * @param OrderEvent $event
     */
    public function onOrderEvent(OrderEvent $event)
    {
        $order = $event->getOrder();

        $productIds = $order->getLineItems()->map(
            function (OrderLineItem $orderLineItem) {
                $product = $orderLineItem->getProduct();

                if (!$product) {
                    return false;
                }

                return $product->getId();
            }
        );

        $priceList = $this->priceListTreeHandler->getPriceList($order->getCustomer(), $order->getWebsite());
        $prices = [];
        if ($priceList) {
            $prices = $this->productPriceProvider->getPriceByPriceListIdAndProductIds(
                $priceList->getId(),
                array_filter($productIds->toArray()),
                $order->getCurrency()
            );
        }

        $event->getData()->offsetSet(self::TIER_PRICES_KEY, $prices);
    }
}
