<?php

namespace Oro\Bundle\PromotionBundle\Provider;

use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\OrderBundle\Entity\OrderLineItem;
use Oro\Bundle\PromotionBundle\Discount\ShippingDiscount;
use Oro\Bundle\PromotionBundle\Entity\AppliedPromotion;
use Oro\Bundle\PromotionBundle\Entity\AppliedPromotionsAwareInterface;

/**
 * Provides data about discounts for given Orders and OrderLineItems
 */
class AppliedDiscountsProvider
{
    /**
     * Returns sum of all discounts amounts for given Order (including line item discounts, etc) without shipping
     *
     * @param Order|AppliedPromotionsAwareInterface $order
     * @return float
     */
    public function getDiscountsAmountByOrder(Order $order): float
    {
        $amount = 0.0;
        foreach ($order->getAppliedPromotions() as $appliedPromotion) {
            if ($appliedPromotion->getType() === ShippingDiscount::NAME) {
                continue;
            }

            $amount += $this->getDiscountsSum($appliedPromotion);
        }

        return $amount;
    }

    /**
     * Returns sum of all shipping discounts amounts for given Order
     *
     * @param Order|AppliedPromotionsAwareInterface $order
     * @return float
     */
    public function getShippingDiscountsAmountByOrder(Order $order): float
    {
        $amount = 0.0;
        foreach ($order->getAppliedPromotions() as $appliedPromotion) {
            if ($appliedPromotion->getType() !== ShippingDiscount::NAME) {
                continue;
            }

            $amount += $this->getDiscountsSum($appliedPromotion);
        }

        return $amount;
    }

    /**
     * @param OrderLineItem $lineItem
     * @return float
     */
    public function getDiscountsAmountByLineItem(OrderLineItem $lineItem): float
    {
        $amount = 0.0;
        /** @var AppliedPromotionsAwareInterface $order */
        $order = $lineItem->getOrder();
        foreach ($order->getAppliedPromotions() as $appliedPromotion) {
            if ($appliedPromotion->getType() === ShippingDiscount::NAME) {
                continue;
            }

            foreach ($appliedPromotion->getAppliedDiscounts() as $appliedDiscount) {
                if ($appliedDiscount->getLineItem() === $lineItem) {
                    $amount += $appliedDiscount->getAmount();
                }
            }
        }

        return $amount;
    }

    /**
     * @param AppliedPromotion $appliedPromotion
     * @return float float
     */
    protected function getDiscountsSum(AppliedPromotion $appliedPromotion)
    {
        $amount = 0.0;
        foreach ($appliedPromotion->getAppliedDiscounts() as $appliedDiscount) {
            $amount += $appliedDiscount->getAmount();
        }

        return $amount;
    }
}
