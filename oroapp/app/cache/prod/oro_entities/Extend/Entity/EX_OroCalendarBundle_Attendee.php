<?php

namespace Extend\Entity;

abstract class EX_OroCalendarBundle_Attendee implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $type;
    protected $status;
    protected $serialized_data;

    public function setType($value)
    {
        $this->type = $value; return $this;
    }

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getType()
    {
        return $this->type;
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