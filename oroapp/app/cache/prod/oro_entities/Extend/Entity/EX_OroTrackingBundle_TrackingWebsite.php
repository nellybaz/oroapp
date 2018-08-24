<?php

namespace Extend\Entity;

abstract class EX_OroTrackingBundle_TrackingWebsite implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $extend_description;
    protected $channel;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setExtendDescription($value)
    {
        $this->extend_description = $value; return $this;
    }

    public function setChannel($value)
    {
        $this->channel = $value; return $this;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getExtendDescription()
    {
        return $this->extend_description;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    public function __construct()
    {
    }
}