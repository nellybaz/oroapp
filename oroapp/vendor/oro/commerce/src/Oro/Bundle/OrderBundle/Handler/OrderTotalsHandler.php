<?php

namespace Oro\Bundle\OrderBundle\Handler;

use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\PricingBundle\SubtotalProcessor\Provider\LineItemSubtotalProvider;
use Oro\Bundle\PricingBundle\SubtotalProcessor\TotalProcessorProvider;
use Oro\Bundle\CurrencyBundle\Converter\RateConverterInterface;
use Oro\Bundle\CurrencyBundle\Entity\MultiCurrency;

/**
 * @deprecated Use Oro\Bundle\OrderBundle\Total\TotalHelper instead
 */
class OrderTotalsHandler
{
    /**
     * @param TotalProcessorProvider $totalProvider
     * @param LineItemSubtotalProvider $lineItemSubtotalProvider
     * @param RateConverterInterface $rateConverter
     */
    public function __construct(
        TotalProcessorProvider $totalProvider,
        LineItemSubtotalProvider $lineItemSubtotalProvider,
        RateConverterInterface $rateConverter
    ) {
        $this->totalProvider = $totalProvider;
        $this->lineItemSubtotalProvider = $lineItemSubtotalProvider;
        $this->rateConverter = $rateConverter;
    }

    /**
     * @param Order $order
     */
    public function fillSubtotals(Order $order)
    {
        $subtotal = $this->lineItemSubtotalProvider->getSubtotal($order);
        $total = $this->totalProvider->enableRecalculation()->getTotal($order);

        $subtotalObject = MultiCurrency::create($subtotal->getAmount(), $subtotal->getCurrency());
        $baseSubtotal = $this->rateConverter->getBaseCurrencyAmount($subtotalObject);
        $subtotalObject->setBaseCurrencyValue($baseSubtotal);

        $totalObject = MultiCurrency::create($total->getAmount(), $total->getCurrency());
        $baseTotal = $this->rateConverter->getBaseCurrencyAmount($totalObject);
        $totalObject->setBaseCurrencyValue($baseTotal);

        $order->setSubtotalObject($subtotalObject);
        $order->setTotalObject($totalObject);
    }
}
