<?php

namespace Extend\Entity;

abstract class EX_OroCheckoutBundle_Checkout implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface, \Oro\Bundle\PromotionBundle\Entity\AppliedCouponsAwareInterface
{
    protected $serialized_data;
    protected $appliedCoupons;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setAppliedCoupons($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->appliedCoupons instanceof \Doctrine\Common\Collections\Collection) {
            $this->appliedCoupons = $value;
            return $this;
        }
        foreach ($this->appliedCoupons as $item) {
            $this->removeAppliedCoupon($item);
        }
        foreach ($value as $item) {
            $this->addAppliedCoupon($item);
        }
        return $this;
    }

    /**
     * @deprecated since 1.10. Use removeAppliedCoupon instead
     */
    public function removeAppliedCoupons($value)
    {
        $this->removeAppliedCoupon($value);
    }

    public function removeAppliedCoupon($value)
    {
        if ($this->appliedCoupons && $this->appliedCoupons->contains($value)) {
            $this->appliedCoupons->removeElement($value);
            $value->setCheckout(null);
        }
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getAppliedCoupons()
    {
        return $this->appliedCoupons;
    }

    /**
     * @deprecated since 1.10. Use addAppliedCoupon instead
     */
    public function addAppliedCoupons($value)
    {
        $this->addAppliedCoupon($value);
    }

    public function addAppliedCoupon($value)
    {
        if (!$this->appliedCoupons->contains($value)) {
            $this->appliedCoupons->add($value);
            $value->setCheckout($this);
        }
    }

    public function __construct()
    {
        $this->appliedCoupons = new \Doctrine\Common\Collections\ArrayCollection();
    }
}