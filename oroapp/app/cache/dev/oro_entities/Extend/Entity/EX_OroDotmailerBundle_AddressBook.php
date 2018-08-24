<?php

namespace Extend\Entity;

abstract class EX_OroDotmailerBundle_AddressBook implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $visibility;
    protected $syncStatus;
    protected $serialized_data;

    public function setVisibility($value)
    {
        $this->visibility = $value; return $this;
    }

    public function setSyncStatus($value)
    {
        $this->syncStatus = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }

    public function getSyncStatus()
    {
        return $this->syncStatus;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function __construct()
    {
    }
}