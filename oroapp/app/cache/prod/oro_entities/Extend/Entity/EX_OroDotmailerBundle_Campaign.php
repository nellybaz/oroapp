<?php

namespace Extend\Entity;

abstract class EX_OroDotmailerBundle_Campaign implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $status;
    protected $serialized_data;
    protected $reply_action;

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setReplyAction($value)
    {
        $this->reply_action = $value; return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getReplyAction()
    {
        return $this->reply_action;
    }

    public function __construct()
    {
    }
}