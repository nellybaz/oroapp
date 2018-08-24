<?php

namespace Extend\Entity;

abstract class EX_OroOrderBundle_Order implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface, \Oro\Bundle\PromotionBundle\Entity\AppliedPromotionsAwareInterface, \Oro\Bundle\PromotionBundle\Entity\AppliedCouponsAwareInterface
{
    protected $serialized_data;
    protected $payment_term_7c4f1e8e;
    protected $internal_status;
    protected $appliedPromotions;
    protected $appliedCoupons;
    protected $ac_last_contact_date_out;
    protected $ac_last_contact_date_in;
    protected $ac_last_contact_date;
    protected $ac_contact_count_out;
    protected $ac_contact_count_in;
    protected $ac_contact_count;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setPaymentTerm7c4f1e8e($value)
    {
        $this->payment_term_7c4f1e8e = $value; return $this;
    }

    public function setInternalStatus($value)
    {
        $this->internal_status = $value; return $this;
    }

    public function setAppliedPromotions($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->appliedPromotions instanceof \Doctrine\Common\Collections\Collection) {
            $this->appliedPromotions = $value;
            return $this;
        }
        foreach ($this->appliedPromotions as $item) {
            $this->removeAppliedPromotion($item);
        }
        foreach ($value as $item) {
            $this->addAppliedPromotion($item);
        }
        return $this;
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

    public function setAcLastContactDateOut($value)
    {
        $this->ac_last_contact_date_out = $value; return $this;
    }

    public function setAcLastContactDateIn($value)
    {
        $this->ac_last_contact_date_in = $value; return $this;
    }

    public function setAcLastContactDate($value)
    {
        $this->ac_last_contact_date = $value; return $this;
    }

    public function setAcContactCountOut($value)
    {
        $this->ac_contact_count_out = $value; return $this;
    }

    public function setAcContactCountIn($value)
    {
        $this->ac_contact_count_in = $value; return $this;
    }

    public function setAcContactCount($value)
    {
        $this->ac_contact_count = $value; return $this;
    }

    /**
     * @deprecated since 1.10. Use removeAppliedPromotion instead
     */
    public function removeAppliedPromotions($value)
    {
        $this->removeAppliedPromotion($value);
    }

    public function removeAppliedPromotion($value)
    {
        if ($this->appliedPromotions && $this->appliedPromotions->contains($value)) {
            $this->appliedPromotions->removeElement($value);
            $value->setOrder(null);
        }
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
            $value->setOrder(null);
        }
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getPaymentTerm7c4f1e8e()
    {
        return $this->payment_term_7c4f1e8e;
    }

    public function getInternalStatus()
    {
        return $this->internal_status;
    }

    public function getAppliedPromotions()
    {
        return $this->appliedPromotions;
    }

    public function getAppliedCoupons()
    {
        return $this->appliedCoupons;
    }

    public function getAcLastContactDateOut()
    {
        return $this->ac_last_contact_date_out;
    }

    public function getAcLastContactDateIn()
    {
        return $this->ac_last_contact_date_in;
    }

    public function getAcLastContactDate()
    {
        return $this->ac_last_contact_date;
    }

    public function getAcContactCountOut()
    {
        return $this->ac_contact_count_out;
    }

    public function getAcContactCountIn()
    {
        return $this->ac_contact_count_in;
    }

    public function getAcContactCount()
    {
        return $this->ac_contact_count;
    }

    /**
     * @deprecated since 1.10. Use addAppliedPromotion instead
     */
    public function addAppliedPromotions($value)
    {
        $this->addAppliedPromotion($value);
    }

    public function addAppliedPromotion($value)
    {
        if (!$this->appliedPromotions->contains($value)) {
            $this->appliedPromotions->add($value);
            $value->setOrder($this);
        }
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
            $value->setOrder($this);
        }
    }

    public function __construct()
    {
        $this->appliedCoupons = new \Doctrine\Common\Collections\ArrayCollection();
        $this->appliedPromotions = new \Doctrine\Common\Collections\ArrayCollection();
    }
}