<?php

namespace Extend\Entity;

abstract class EX_OroDotmailerBundle_Contact implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $status;
    protected $serialized_data;
    protected $opt_in_type;
    protected $email_type;

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setOptInType($value)
    {
        $this->opt_in_type = $value; return $this;
    }

    public function setEmailType($value)
    {
        $this->email_type = $value; return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getOptInType()
    {
        return $this->opt_in_type;
    }

    public function getEmailType()
    {
        return $this->email_type;
    }

    public function __construct()
    {
    }
}