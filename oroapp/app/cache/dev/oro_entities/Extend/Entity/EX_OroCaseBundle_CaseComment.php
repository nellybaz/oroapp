<?php

namespace Extend\Entity;

abstract class EX_OroCaseBundle_CaseComment extends \Oro\Bundle\CommentBundle\Entity\BaseComment implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $attachment;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setAttachment($value)
    {
        $this->attachment = $value; return $this;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getAttachment()
    {
        return $this->attachment;
    }

    public function __construct()
    {
    }
}