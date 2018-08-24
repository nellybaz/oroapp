<?php

namespace Extend\Entity;

abstract class EX_OroCheckoutBundle_CheckoutSource implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $shoppingList;
    protected $serialized_data;
    protected $quoteDemand;
    protected $order;

    public function setShoppingList($value)
    {
        $this->shoppingList = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setQuoteDemand($value)
    {
        $this->quoteDemand = $value; return $this;
    }

    public function setOrder($value)
    {
        $this->order = $value; return $this;
    }

    public function getShoppingList()
    {
        return $this->shoppingList;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getQuoteDemand()
    {
        return $this->quoteDemand;
    }

    public function getOrder()
    {
        return $this->order;
    }

    public function __construct()
    {
    }
}