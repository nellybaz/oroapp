<?php

namespace Extend\Entity;

abstract class EX_OroTrackingBundle_TrackingVisitEvent implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $product_262abcc3;
    protected $order_3967254e;
    protected $customer_2bc6a2ee;
    protected $cart_4962cb03;
    protected $campaign_a14160a8;

    /**
     * Checks if this entity can be associated with the given target entity type
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportAssociationTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\CampaignBundle\Entity\Campaign') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Cart') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Product') { return true; }
        return false;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setProduct262abcc3($value)
    {
        $this->product_262abcc3 = $value; return $this;
    }

    public function setOrder3967254e($value)
    {
        $this->order_3967254e = $value; return $this;
    }

    public function setCustomer2bc6a2ee($value)
    {
        $this->customer_2bc6a2ee = $value; return $this;
    }

    public function setCart4962cb03($value)
    {
        $this->cart_4962cb03 = $value; return $this;
    }

    public function setCampaignA14160a8($value)
    {
        $this->campaign_a14160a8 = $value; return $this;
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeAssociationTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\CampaignBundle\Entity\Campaign') {
            if ($this->campaign_a14160a8 === $target) { $this->campaign_a14160a8 = null; }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Cart') {
            if ($this->cart_4962cb03 === $target) { $this->cart_4962cb03 = null; }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') {
            if ($this->customer_2bc6a2ee === $target) { $this->customer_2bc6a2ee = null; }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') {
            if ($this->order_3967254e === $target) { $this->order_3967254e = null; }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Product') {
            if ($this->product_262abcc3 === $target) { $this->product_262abcc3 = null; }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    /**
     * Checks is the given entity is associated with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return bool
     */
    public function hasAssociationTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\CampaignBundle\Entity\Campaign') { return $this->campaign_a14160a8 === $target; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Cart') { return $this->cart_4962cb03 === $target; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { return $this->customer_2bc6a2ee === $target; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return $this->order_3967254e === $target; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Product') { return $this->product_262abcc3 === $target; }
        return false;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getProduct262abcc3()
    {
        return $this->product_262abcc3;
    }

    public function getOrder3967254e()
    {
        return $this->order_3967254e;
    }

    public function getCustomer2bc6a2ee()
    {
        return $this->customer_2bc6a2ee;
    }

    public function getCart4962cb03()
    {
        return $this->cart_4962cb03;
    }

    public function getCampaignA14160a8()
    {
        return $this->campaign_a14160a8;
    }

    /**
     * Gets the entities this entity is associated with
     *
     * @return object[]
     */
    public function getAssociationTargets()
    {
        $targets = [];
        $entity = $this->campaign_a14160a8;
        if ($entity) {
            $targets[] = $entity;
        }
        $entity = $this->cart_4962cb03;
        if ($entity) {
            $targets[] = $entity;
        }
        $entity = $this->customer_2bc6a2ee;
        if ($entity) {
            $targets[] = $entity;
        }
        $entity = $this->order_3967254e;
        if ($entity) {
            $targets[] = $entity;
        }
        $entity = $this->product_262abcc3;
        if ($entity) {
            $targets[] = $entity;
        }
        return $targets;
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addAssociationTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\CampaignBundle\Entity\Campaign') { $this->campaign_a14160a8 = $target; return $this; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Cart') { $this->cart_4962cb03 = $target; return $this; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { $this->customer_2bc6a2ee = $target; return $this; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { $this->order_3967254e = $target; return $this; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Product') { $this->product_262abcc3 = $target; return $this; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function __construct()
    {
    }
}