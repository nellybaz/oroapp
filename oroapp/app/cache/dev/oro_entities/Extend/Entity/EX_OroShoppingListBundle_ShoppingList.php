<?php

namespace Extend\Entity;

abstract class EX_OroShoppingListBundle_ShoppingList implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $visitors;
    protected $serialized_data;
    protected $default_visitors;

    public function setVisitors($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->visitors instanceof \Doctrine\Common\Collections\Collection) {
            $this->visitors = $value;
            return $this;
        }
        foreach ($this->visitors as $item) {
            $this->removeVisitor($item);
        }
        foreach ($value as $item) {
            $this->addVisitor($item);
        }
        return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setDefaultVisitors($value)
    {
        $this->default_visitors = $value; return $this;
    }

    /**
     * @deprecated since 1.10. Use removeVisitor instead
     */
    public function removeVisitors($value)
    {
        $this->removeVisitor($value);
    }

    public function removeVisitor($value)
    {
        if ($this->visitors && $this->visitors->contains($value)) {
            $this->visitors->removeElement($value);
            $value->removeShoppingList($this);
        }
    }

    public function getVisitors()
    {
        return $this->visitors;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getDefaultVisitors()
    {
        return $this->default_visitors;
    }

    /**
     * @deprecated since 1.10. Use addVisitor instead
     */
    public function addVisitors($value)
    {
        $this->addVisitor($value);
    }

    public function addVisitor($value)
    {
        if (!$this->visitors->contains($value)) {
            $this->visitors->add($value);
            $value->addShoppingList($this);
        }
    }

    public function __construct()
    {
        $this->visitors = new \Doctrine\Common\Collections\ArrayCollection();
    }
}