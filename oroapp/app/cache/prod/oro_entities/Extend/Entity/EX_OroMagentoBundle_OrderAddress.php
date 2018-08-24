<?php

namespace Extend\Entity;

abstract class EX_OroMagentoBundle_OrderAddress extends \Oro\Bundle\AddressBundle\Entity\AbstractTypedAddress implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function __construct()
    {
        parent::__construct();
    }
}