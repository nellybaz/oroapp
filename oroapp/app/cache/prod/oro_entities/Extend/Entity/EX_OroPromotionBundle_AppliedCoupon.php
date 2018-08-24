<?php

namespace Extend\Entity;

abstract class EX_OroPromotionBundle_AppliedCoupon implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $order;
    protected $checkout;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setOrder($value)
    {
        $this->order = $value; return $this;
    }

    public function setCheckout($value)
    {
        $this->checkout = $value; return $this;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getOrder()
    {
        return $this->order;
    }

    public function getCheckout()
    {
        return $this->checkout;
    }

    public function __construct()
    {
    }
}