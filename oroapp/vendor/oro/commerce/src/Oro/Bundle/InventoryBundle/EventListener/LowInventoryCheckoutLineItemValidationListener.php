<?php

namespace Oro\Bundle\InventoryBundle\EventListener;

use Oro\Bundle\CheckoutBundle\Entity\CheckoutLineItem;
use Oro\Bundle\InventoryBundle\Validator\LowInventoryCheckoutLineItemValidator;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ShoppingListBundle\Event\LineItemValidateEvent;

class LowInventoryCheckoutLineItemValidationListener
{
    /**
     * @var LowInventoryCheckoutLineItemValidator
     */
    protected $validator;

    /**
     * @param LowInventoryCheckoutLineItemValidator $validator
     */
    public function __construct(LowInventoryCheckoutLineItemValidator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param LineItemValidateEvent $event
     */
    public function onLineItemValidate(LineItemValidateEvent $event)
    {
        $lineItems = $event->getLineItems();
        if (!$lineItems instanceof \Traversable) {
            return;
        }

        foreach ($lineItems as $lineItem) {
            if (!$lineItem instanceof CheckoutLineItem) {
                return;
            }

            if (!$lineItem->getProduct() instanceof Product) {
                continue;
            }

            if ($lowInventoryWarning = $this->validator->getMessageIfLineItemRunningLow($lineItem)) {
                $event->addWarning($lineItem->getProduct()->getSku(), $lowInventoryWarning);
            }
        }
    }
}
