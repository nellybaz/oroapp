<?php

namespace Extend\Entity;

abstract class EX_OroCustomerBundle_CustomerUserRole extends \Oro\Bundle\UserBundle\Entity\AbstractRole implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
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

    public function __construct($role)
    {
        parent::__construct($role);
    }
}