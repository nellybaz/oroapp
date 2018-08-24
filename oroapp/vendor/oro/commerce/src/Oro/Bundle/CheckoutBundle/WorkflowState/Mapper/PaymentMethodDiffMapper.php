<?php

namespace Oro\Bundle\CheckoutBundle\WorkflowState\Mapper;

use Oro\Bundle\CheckoutBundle\Entity\Checkout;

class PaymentMethodDiffMapper implements CheckoutStateDiffMapperInterface
{
    const DATA_NAME = 'payment_method';

    /**
     * {@inheritdoc}
     */
    public function isEntitySupported($entity)
    {
        return is_object($entity) && $entity instanceof Checkout;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::DATA_NAME;
    }

    /**
     * {@inheritdoc}
     * @param Checkout $checkout
     */
    public function getCurrentState($checkout)
    {
        return $checkout->getPaymentMethod();
    }

    /** {@inheritdoc} */
    public function isStatesEqual($entity, $state1, $state2)
    {
        return $state1 === $state2;
    }
}
