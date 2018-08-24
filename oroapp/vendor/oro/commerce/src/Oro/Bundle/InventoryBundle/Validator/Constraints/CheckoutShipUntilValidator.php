<?php

namespace Oro\Bundle\InventoryBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

use Oro\Bundle\CheckoutBundle\DataProvider\Manager\CheckoutLineItemsManager;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\InventoryBundle\Provider\ProductUpcomingProvider;
use Oro\Bundle\ProductBundle\Entity\Product;

class CheckoutShipUntilValidator extends ConstraintValidator
{
    /**
     * @var ProductUpcomingProvider
     */
    protected $upcomingProvider;

    /**
     * @var CheckoutLineItemsManager
     */
    protected $checkoutLineItemsManager;

    /**
     * @param ProductUpcomingProvider $upcomingProvider
     * @param CheckoutLineItemsManager $checkoutLineItemsManager
     */
    public function __construct(
        ProductUpcomingProvider $upcomingProvider,
        CheckoutLineItemsManager $checkoutLineItemsManager
    ) {
        $this->upcomingProvider = $upcomingProvider;
        $this->checkoutLineItemsManager = $checkoutLineItemsManager;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($checkout, Constraint $constraint)
    {
        if (!$checkout instanceof Checkout) {
            throw new \LogicException('Wrong validated entity');
        }

        $shipUntil = $checkout->getShipUntil();
        if (!$shipUntil) {
            return;
        }

        $products = [];
        foreach ($this->checkoutLineItemsManager->getData($checkout) as $lineItem) {
            $product = $lineItem->getProduct();
            if ($product instanceof Product) {
                $products[] = $product;
            }
        }

        $latestAvailabilityDate = $this->upcomingProvider->getLatestAvailabilityDate($products);
        if (!$latestAvailabilityDate) {
            return;
        }

        // latestAvailabilityDate is a date_time, whereas shipUntil is only a date
        // so we still should be able to make order on 20st of January,
        // even if latestAvailabilityDate of its products is 20 Jan 2020 12:00
        $latestAvailabilityDate->setTime(0, 0);
        if ($latestAvailabilityDate > $shipUntil) {
            $this->context->addViolation($constraint->message);
        }
    }
}
