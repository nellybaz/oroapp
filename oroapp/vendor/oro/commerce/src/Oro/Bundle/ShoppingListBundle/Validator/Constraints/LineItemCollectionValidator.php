<?php

namespace Oro\Bundle\ShoppingListBundle\Validator\Constraints;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

use Oro\Bundle\ShoppingListBundle\Event\LineItemValidateEvent;
use Oro\Bundle\ShoppingListBundle\Validator\Constraints\LineItemCollection;

class LineItemCollectionValidator extends ConstraintValidator
{
    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param [] $value
     * @param Constraint|LineItemCollection $constraint
     *
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$this->eventDispatcher->hasListeners(LineItemValidateEvent::NAME)) {
            return;
        }

        $event = new LineItemValidateEvent($value, $constraint->getAdditionalContext());
        $this->eventDispatcher->dispatch(LineItemValidateEvent::NAME, $event);

        if ($event->hasErrors()) {
            foreach ($event->getErrors() as $error) {
                $this->context->buildViolation($error['message'])
                    ->atPath(sprintf('product.%s', $error['sku']))
                    ->addViolation();
            }
        }

        if ($event->hasWarnings()) {
            foreach ($event->getWarnings() as $warning) {
                $this->context->buildViolation($warning['message'])
                    ->atPath(sprintf('product.%s', $warning['sku']))
                    ->setCause('warning')
                    ->addViolation();
            }
        }
    }
}
