<?php

namespace Extend\Entity;

abstract class EX_OroSalesBundle_B2bCustomerEmail extends \Oro\Bundle\AddressBundle\Entity\AbstractEmail implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
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

    public function __construct($email = NULL)
    {
        parent::__construct($email);
    }
}