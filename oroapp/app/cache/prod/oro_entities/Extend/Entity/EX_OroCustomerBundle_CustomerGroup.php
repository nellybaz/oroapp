<?php

namespace Extend\Entity;

abstract class EX_OroCustomerBundle_CustomerGroup implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $taxCode;
    protected $serialized_data;
    protected $payment_term_7c4f1e8e;

    public function setTaxCode($value)
    {
        $this->taxCode = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setPaymentTerm7c4f1e8e($value)
    {
        $this->payment_term_7c4f1e8e = $value; return $this;
    }

    public function getTaxCode()
    {
        return $this->taxCode;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getPaymentTerm7c4f1e8e()
    {
        return $this->payment_term_7c4f1e8e;
    }

    public function __construct()
    {
    }
}