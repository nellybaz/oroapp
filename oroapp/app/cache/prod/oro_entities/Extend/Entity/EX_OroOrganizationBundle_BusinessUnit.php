<?php

namespace Extend\Entity;

abstract class EX_OroOrganizationBundle_BusinessUnit implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $extend_description;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setExtendDescription($value)
    {
        $this->extend_description = $value; return $this;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getExtendDescription()
    {
        return $this->extend_description;
    }

    public function __construct()
    {
    }
}