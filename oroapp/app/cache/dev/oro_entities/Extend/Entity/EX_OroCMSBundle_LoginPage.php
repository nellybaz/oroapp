<?php

namespace Extend\Entity;

abstract class EX_OroCMSBundle_LoginPage implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $logoImage;
    protected $backgroundImage;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setLogoImage($value)
    {
        $this->logoImage = $value; return $this;
    }

    public function setBackgroundImage($value)
    {
        $this->backgroundImage = $value; return $this;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getLogoImage()
    {
        return $this->logoImage;
    }

    public function getBackgroundImage()
    {
        return $this->backgroundImage;
    }

    public function __construct()
    {
    }
}