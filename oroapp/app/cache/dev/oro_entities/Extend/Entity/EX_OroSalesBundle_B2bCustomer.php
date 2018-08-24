<?php

namespace Extend\Entity;

abstract class EX_OroSalesBundle_B2bCustomer implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $website;
    protected $ticker_symbol;
    protected $serialized_data;
    protected $rating;
    protected $ownership;
    protected $employees;
    protected $ac_last_contact_date_out;
    protected $ac_last_contact_date_in;
    protected $ac_last_contact_date;
    protected $ac_contact_count_out;
    protected $ac_contact_count_in;
    protected $ac_contact_count;

    public function setWebsite($value)
    {
        $this->website = $value; return $this;
    }

    public function setTickerSymbol($value)
    {
        $this->ticker_symbol = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setRating($value)
    {
        $this->rating = $value; return $this;
    }

    public function setOwnership($value)
    {
        $this->ownership = $value; return $this;
    }

    public function setEmployees($value)
    {
        $this->employees = $value; return $this;
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

    public function getWebsite()
    {
        return $this->website;
    }

    public function getTickerSymbol()
    {
        return $this->ticker_symbol;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getOwnership()
    {
        return $this->ownership;
    }

    public function getEmployees()
    {
        return $this->employees;
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