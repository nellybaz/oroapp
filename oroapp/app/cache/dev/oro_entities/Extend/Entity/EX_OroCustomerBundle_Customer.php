<?php

namespace Extend\Entity;

abstract class EX_OroCustomerBundle_Customer implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $taxCode;
    protected $serialized_data;
    protected $previous_account;
    protected $payment_term_7c4f1e8e;
    protected $lifetime;
    protected $internal_rating;
    protected $dataChannel;

    public function setTaxCode($value)
    {
        $this->taxCode = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setPreviousAccount($value)
    {
        $this->previous_account = $value; return $this;
    }

    public function setPaymentTerm7c4f1e8e($value)
    {
        $this->payment_term_7c4f1e8e = $value; return $this;
    }

    public function setLifetime($value)
    {
        $this->lifetime = $value; return $this;
    }

    public function setInternalRating($value)
    {
        $this->internal_rating = $value; return $this;
    }

    public function setDataChannel($value)
    {
        $this->dataChannel = $value; return $this;
    }

    public function getTaxCode()
    {
        return $this->taxCode;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getPreviousAccount()
    {
        return $this->previous_account;
    }

    public function getPaymentTerm7c4f1e8e()
    {
        return $this->payment_term_7c4f1e8e;
    }

    public function getLifetime()
    {
        return $this->lifetime;
    }

    public function getInternalRating()
    {
        return $this->internal_rating;
    }

    public function getDataChannel()
    {
        return $this->dataChannel;
    }

    public function __construct()
    {
    }
}