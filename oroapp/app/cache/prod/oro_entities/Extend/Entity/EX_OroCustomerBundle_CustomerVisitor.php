<?php

namespace Extend\Entity;

abstract class EX_OroCustomerBundle_CustomerVisitor implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $shoppingLists;
    protected $serialized_data;

    public function setShoppingLists($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->shoppingLists instanceof \Doctrine\Common\Collections\Collection) {
            $this->shoppingLists = $value;
            return $this;
        }
        foreach ($this->shoppingLists as $item) {
            $this->removeShoppingList($item);
        }
        foreach ($value as $item) {
            $this->addShoppingList($item);
        }
        return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    /**
     * @deprecated since 1.10. Use removeShoppingList instead
     */
    public function removeShoppingLists($value)
    {
        $this->removeShoppingList($value);
    }

    public function removeShoppingList($value)
    {
        if ($this->shoppingLists && $this->shoppingLists->contains($value)) {
            $this->shoppingLists->removeElement($value);
            $value->removeVisitor($this);
        }
    }

    public function getShoppingLists()
    {
        return $this->shoppingLists;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @deprecated since 1.10. Use addShoppingList instead
     */
    public function addShoppingLists($value)
    {
        $this->addShoppingList($value);
    }

    public function addShoppingList($value)
    {
        if (!$this->shoppingLists->contains($value)) {
            $this->shoppingLists->add($value);
            $value->addVisitor($this);
        }
    }

    public function __construct()
    {
        $this->shoppingLists = new \Doctrine\Common\Collections\ArrayCollection();
    }
}