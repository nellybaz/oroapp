<?php

namespace Extend\Entity;

abstract class EX_OroRFPBundle_Request implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $internal_status;
    protected $customer_status;
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

    public function setInternalStatus($value)
    {
        $this->internal_status = $value; return $this;
    }

    public function setCustomerStatus($value)
    {
        $this->customer_status = $value; return $this;
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

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getInternalStatus()
    {
        return $this->internal_status;
    }

    public function getCustomerStatus()
    {
        return $this->customer_status;
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

    public function __construct()
    {
    }
}