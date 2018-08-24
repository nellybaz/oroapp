<?php

namespace Extend\Entity;

abstract class EX_OroMarketingActivityBundle_MarketingActivity implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $type;
    protected $serialized_data;

    public function setType($value)
    {
        $this->type = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
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