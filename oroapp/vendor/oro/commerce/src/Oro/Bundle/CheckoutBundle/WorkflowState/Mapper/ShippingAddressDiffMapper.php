<?php

namespace Oro\Bundle\CheckoutBundle\WorkflowState\Mapper;

use Oro\Bundle\CheckoutBundle\Entity\Checkout;

class ShippingAddressDiffMapper extends AbstractAddressDiffMapper
{
    const DATA_NAME = 'shipping_address';

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::DATA_NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getAddress(Checkout $checkout)
    {
        return $checkout->getShippingAddress();
    }
}
