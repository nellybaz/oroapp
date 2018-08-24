<?php

namespace Extend\Entity;

abstract class EX_OroProductBundle_ProductImage implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $image;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setImage($value)
    {
        $this->image = $value; return $this;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function __construct()
    {
    }
}