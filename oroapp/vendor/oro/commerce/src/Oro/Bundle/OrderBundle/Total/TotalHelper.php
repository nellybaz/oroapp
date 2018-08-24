<?php

namespace Oro\Bundle\OrderBundle\Total;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\OrderBundle\Entity\OrderDiscount;
use Oro\Bundle\OrderBundle\Provider\DiscountSubtotalProvider;
use Oro\Bundle\PricingBundle\SubtotalProcessor\Model\Subtotal;
use Oro\Bundle\PricingBundle\SubtotalProcessor\Provider\LineItemSubtotalProvider;
use Oro\Bundle\PricingBundle\SubtotalProcessor\TotalProcessorProvider;
use Oro\Bundle\CurrencyBundle\Converter\RateConverterInterface;
use Oro\Bundle\CurrencyBundle\Entity\MultiCurrency;

class TotalHelper
{
    /** @var TotalProcessorProvider */
    protected $totalProvider;

    /** @var LineItemSubtotalProvider */
    protected $lineItemSubtotalProvider;

    /** @var DiscountSubtotalProvider */
    protected $discountSubtotalProvider;

    /** @var RateConverterInterface */
    protected $rateConverter;

    /**
     * @param TotalProcessorProvider $totalProvider
     * @param LineItemSubtotalProvider $lineItemSubtotalProvider
     * @param DiscountSubtotalProvider $discountSubtotalProvider
     * @param RateConverterInterface $rateConverter
     */
    public function __construct(
        TotalProcessorProvider $totalProvider,
        LineItemSubtotalProvider $lineItemSubtotalProvider,
        DiscountSubtotalProvider $discountSubtotalProvider,
        RateConverterInterface $rateConverter
    ) {
        $this->totalProvider = $totalProvider;
        $this->lineItemSubtotalProvider = $lineItemSubtotalProvider;
        $this->discountSubtotalProvider = $discountSubtotalProvider;
        $this->rateConverter = $rateConverter;
    }

    /**
     * @param Order $order
     */
    public function fillSubtotals(Order $order)
    {
        $subtotal = $this->lineItemSubtotalProvider->getSubtotal($order);

        $subtotalObject = MultiCurrency::create($subtotal->getAmount(), $subtotal->getCurrency());
        $baseSubtotal = $this->rateConverter->getBaseCurrencyAmount($subtotalObject);
        $subtotalObject->setBaseCurrencyValue($baseSubtotal);

        $order->setSubtotalObject($subtotalObject);
        if ($subtotal->getAmount() > 0) {
            foreach ($order->getDiscounts() as $discount) {
                if ($discount->getType() === OrderDiscount::TYPE_AMOUNT) {
                    $discount->setPercent($this->calculatePercent($subtotal, $discount));
                }
            }
        }
    }

    /**
     * @param Order $order
     */
    public function fillDiscounts(Order $order)
    {
        $discountSubtotals = $this->discountSubtotalProvider->getSubtotal($order);

        $discountSubtotalAmount = new Price();
        if (count($discountSubtotals) > 0) {
            foreach ($discountSubtotals as $discount) {
                $newAmount = $discount->getAmount() + (float) $discountSubtotalAmount->getValue();
                $discountSubtotalAmount->setValue($newAmount);
            }
        }
        $order->setTotalDiscounts($discountSubtotalAmount);
    }

    /**
     * @param Order $order
     */
    public function fillTotal(Order $order)
    {
        $total = $this->totalProvider->enableRecalculation()->getTotal($order);
        $totalObject = MultiCurrency::create($total->getAmount(), $total->getCurrency());
        $baseTotal = $this->rateConverter->getBaseCurrencyAmount($totalObject);
        $totalObject->setBaseCurrencyValue($baseTotal);
        $order->setTotalObject($totalObject);
    }

    /**
     * @param Subtotal $subtotal
     * @param OrderDiscount $discount
     * @return int
     */
    protected function calculatePercent($subtotal, $discount)
    {
        return (float) ($discount->getAmount() / $subtotal->getAmount() * 100);
    }
}
