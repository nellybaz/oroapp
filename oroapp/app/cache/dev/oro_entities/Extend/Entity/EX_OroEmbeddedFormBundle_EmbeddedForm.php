<?php

namespace Extend\Entity;

abstract class EX_OroEmbeddedFormBundle_EmbeddedForm implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $dataChannel;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setDataChannel($value)
    {
        $this->dataChannel = $value; return $this;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getDataChannel()
    {
        return $this->dataChannel;
    }

    public function __construct()
    {
    }
}