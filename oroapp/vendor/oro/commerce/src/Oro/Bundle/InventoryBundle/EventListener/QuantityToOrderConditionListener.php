<?php

namespace Oro\Bundle\InventoryBundle\EventListener;

use Oro\Bundle\ActionBundle\Model\ActionData;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CheckoutBundle\Event\CheckoutValidateEvent;
use Oro\Bundle\InventoryBundle\Validator\QuantityToOrderValidatorService;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Event\QuickAddRowCollectionValidateEvent;
use Oro\Bundle\ProductBundle\Model\QuickAddRow;
use Oro\Bundle\ProductBundle\Model\QuickAddRowCollection;
use Oro\Bundle\SaleBundle\Entity\QuoteDemand;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowItem;
use Oro\Bundle\WorkflowBundle\Exception\InvalidTransitionException;
use Oro\Component\Action\Event\ExtendableConditionEvent;

class QuantityToOrderConditionListener
{
    const QUANTITY_CHECK_ERROR = 'quantity_check_error';

    /**
     * @var array
     */
    public static $allowedWorkflows = [
        'b2b_flow_checkout',
        'b2b_flow_alternative_checkout',
        'b2b_flow_checkout_single_page',
    ];

    /**
     * @var QuantityToOrderValidatorService
     */
    protected $validatorService;

    /**
     * @param QuantityToOrderValidatorService $validatorService
     */
    public function __construct(QuantityToOrderValidatorService $validatorService)
    {
        $this->validatorService = $validatorService;
    }

    /**
     * @param CheckoutValidateEvent $event
     * @throws InvalidTransitionException
     */
    public function onCheckoutValidate(CheckoutValidateEvent $event)
    {
        $workflowItem = $event->getContext();
        if ($this->isNotCorrectConditionContext($workflowItem)) {
            return;
        }

        /** @var Checkout $checkout */
        $checkout = $workflowItem->getEntity();
        if (false === $this->validatorService->isLineItemListValid($checkout->getLineItems())) {
            $event->setIsCheckoutRestartRequired(true);
        }
    }

    /**
     * @param ExtendableConditionEvent $event
     */
    public function onStartCheckoutConditionCheck(ExtendableConditionEvent $event)
    {
        /** @var ActionData $context */
        $context = $event->getContext();
        if (!$this->isApplicableContextForStartCheckout($context)) {
            return;
        }

        /** @var Checkout $checkout */
        $checkout = $context->get('checkout');
        if (false === $this->validatorService->isLineItemListValid($checkout->getLineItems())) {
            $event->addError('oro.inventory.frontend.messages.quantity_limits_error');
        }
    }

    /**
     * Event listener to check if shopping list actions can be run (ex. used to show/hide shopping list trigger buttons)
     *
     * @param ExtendableConditionEvent $event
     */
    public function onShoppingListStart(ExtendableConditionEvent $event)
    {
        $context = $event->getContext();
        if (!$context instanceof WorkflowItem
            || !in_array($context->getWorkflowName(), self::$allowedWorkflows)
            || !$context->getResult()->get('shoppingList') instanceof ShoppingList
        ) {
            return;
        }

        $lineItems = $context->getResult()->get('shoppingList')->getLineItems();
        if (false === $this->validatorService->isLineItemListValid($lineItems)) {
            $event->addError('');
        }
    }

    /**
     * @param ExtendableConditionEvent $event
     */
    public function onCheckoutConditionCheck(ExtendableConditionEvent $event)
    {
        $context = $event->getContext();
        if ($this->isNotCorrectConditionContext($context)) {
            return;
        }

        if (false === $this->validatorService->isLineItemListValid($context->getEntity()->getLineItems())) {
            $event->addError(self::QUANTITY_CHECK_ERROR, $context);
        }
    }

    /**
     * @param QuickAddRowCollectionValidateEvent $event
     */
    public function onQuickAddRowCollectionValidate(QuickAddRowCollectionValidateEvent $event)
    {
        $collection = $event->getQuickAddRowCollection();
        if (!$collection instanceof QuickAddRowCollection) {
            return;
        }

        /** @var QuickAddRow $quickAddRow */
        foreach ($collection as $quickAddRow) {
            $product = $quickAddRow->getProduct();
            if (!$product instanceof Product) {
                continue;
            }

            if ($maxError = $this->validatorService->getMaximumErrorIfInvalid($product, $quickAddRow->getQuantity())) {
                $quickAddRow->addError($maxError, ['allowedRFP' => true]);
                continue;
            }

            if ($minError = $this->validatorService->getMinimumErrorIfInvalid($product, $quickAddRow->getQuantity())) {
                $quickAddRow->addError($minError, ['allowedRFP' => true]);
            }
        }
    }

    /**
     * @param mixed $context
     * @return bool
     */
    protected function isNotCorrectConditionContext($context)
    {
        return (!$context instanceof WorkflowItem
            || !in_array($context->getWorkflowName(), self::$allowedWorkflows, true)
            || !$context->getEntity() instanceof Checkout
            // make sure that checkout not done from quote demand
            || $context->getEntity()->getSourceEntity() instanceof QuoteDemand
        );
    }

    /**
     * @param mixed $context
     * @return bool
     */
    protected function isApplicableContextForStartCheckout($context)
    {
        if (!$context instanceof ActionData) {
            return false;
        }

        $checkout = $context->get('checkout');

        return ($checkout instanceof Checkout && !$checkout->getSourceEntity() instanceof QuoteDemand);
    }
}
