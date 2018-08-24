<?php

namespace Extend\Entity;

abstract class EX_OroDotmailerBundle_AddressBookContactsExport implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $status;
    protected $serialized_data;

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function __construct()
    {
    }
}