<?php

namespace Extend\Entity;

abstract class EX_OroDotmailerBundle_DataField implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $visibility;
    protected $type;
    protected $serialized_data;

    public function setVisibility($value)
    {
        $this->visibility = $value; return $this;
    }

    public function setType($value)
    {
        $this->type = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function __construct()
    {
    }
}