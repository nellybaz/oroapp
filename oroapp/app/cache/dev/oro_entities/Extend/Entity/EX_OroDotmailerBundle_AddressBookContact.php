<?php

namespace Extend\Entity;

abstract class EX_OroDotmailerBundle_AddressBookContact implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $status;
    protected $serialized_data;
    protected $exportOperationType;

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setExportOperationType($value)
    {
        $this->exportOperationType = $value; return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getExportOperationType()
    {
        return $this->exportOperationType;
    }

    public function __construct()
    {
    }
}