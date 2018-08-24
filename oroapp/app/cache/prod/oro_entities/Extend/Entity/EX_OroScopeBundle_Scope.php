<?php

namespace Extend\Entity;

abstract class EX_OroScopeBundle_Scope implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $website;
    protected $webCatalog;
    protected $user;
    protected $serialized_data;
    protected $organization;
    protected $localization;
    protected $customerGroup;
    protected $customer;

    public function setWebsite($value)
    {
        $this->website = $value; return $this;
    }

    public function setWebCatalog($value)
    {
        $this->webCatalog = $value; return $this;
    }

    public function setUser($value)
    {
        $this->user = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setOrganization($value)
    {
        $this->organization = $value; return $this;
    }

    public function setLocalization($value)
    {
        $this->localization = $value; return $this;
    }

    public function setCustomerGroup($value)
    {
        $this->customerGroup = $value; return $this;
    }

    public function setCustomer($value)
    {
        $this->customer = $value; return $this;
    }

    public function getWebsite()
    {
        return $this->website;
    }

    public function getWebCatalog()
    {
        return $this->webCatalog;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getOrganization()
    {
        return $this->organization;
    }

    public function getLocalization()
    {
        return $this->localization;
    }

    public function getCustomerGroup()
    {
        return $this->customerGroup;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function __construct()
    {
    }
}