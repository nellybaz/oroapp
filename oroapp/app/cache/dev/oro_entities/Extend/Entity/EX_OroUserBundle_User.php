<?php

namespace Extend\Entity;

abstract class EX_OroUserBundle_User extends \Oro\Bundle\UserBundle\Entity\AbstractUser implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $title;
    protected $serialized_data;
    protected $phone;
    protected $googleId;
    protected $avatar;
    protected $auth_status;

    public function setTitle($value)
    {
        $this->title = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setPhone($value)
    {
        $this->phone = $value; return $this;
    }

    public function setGoogleId($value)
    {
        $this->googleId = $value; return $this;
    }

    public function setAvatar($value)
    {
        $this->avatar = $value; return $this;
    }

    public function setAuthStatus($value)
    {
        $this->auth_status = $value; return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getGoogleId()
    {
        return $this->googleId;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function getAuthStatus()
    {
        return $this->auth_status;
    }

    public function __construct()
    {
        parent::__construct();
    }
}