<?php

namespace Proxies\__CG__\Oro\Bundle\MailChimpBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Member extends \Oro\Bundle\MailChimpBundle\Entity\Member implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'originId', 'channel', 'email', 'phone', 'status', 'firstName', 'lastName', 'memberRating', 'optedInAt', 'optedInIpAddress', 'confirmedAt', 'confirmedIpAddress', 'latitude', 'longitude', 'gmtOffset', 'dstOffset', 'timezone', 'cc', 'region', 'lastChangedAt', 'euid', 'mergeVarValues', 'subscribersList', 'owner', 'segmentMembers', 'createdAt', 'updatedAt'];
        }

        return ['__isInitialized__', 'id', 'originId', 'channel', 'email', 'phone', 'status', 'firstName', 'lastName', 'memberRating', 'optedInAt', 'optedInIpAddress', 'confirmedAt', 'confirmedIpAddress', 'latitude', 'longitude', 'gmtOffset', 'dstOffset', 'timezone', 'cc', 'region', 'lastChangedAt', 'euid', 'mergeVarValues', 'subscribersList', 'owner', 'segmentMembers', 'createdAt', 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Member $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginId', []);

        return parent::getOriginId();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginId($originId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginId', [$originId]);

        return parent::setOriginId($originId);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannel', []);

        return parent::getChannel();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannel($channel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannel', [$channel]);

        return parent::setChannel($channel);
    }

    /**
     * {@inheritDoc}
     */
    public function getCc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCc', []);

        return parent::getCc();
    }

    /**
     * {@inheritDoc}
     */
    public function setCc($cc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCc', [$cc]);

        return parent::setCc($cc);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmedAt', []);

        return parent::getConfirmedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmedAt(\DateTime $confirmedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmedAt', [$confirmedAt]);

        return parent::setConfirmedAt($confirmedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmedIpAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmedIpAddress', []);

        return parent::getConfirmedIpAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmedIpAddress($confirmedIpAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmedIpAddress', [$confirmedIpAddress]);

        return parent::setConfirmedIpAddress($confirmedIpAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getDstOffset()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDstOffset', []);

        return parent::getDstOffset();
    }

    /**
     * {@inheritDoc}
     */
    public function setDstOffset($dstOffset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDstOffset', [$dstOffset]);

        return parent::setDstOffset($dstOffset);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getEuid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEuid', []);

        return parent::getEuid();
    }

    /**
     * {@inheritDoc}
     */
    public function setEuid($euid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEuid', [$euid]);

        return parent::setEuid($euid);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getGmtOffset()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGmtOffset', []);

        return parent::getGmtOffset();
    }

    /**
     * {@inheritDoc}
     */
    public function setGmtOffset($gmtOffset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGmtOffset', [$gmtOffset]);

        return parent::setGmtOffset($gmtOffset);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastChangedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastChangedAt', []);

        return parent::getLastChangedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastChangedAt(\DateTime $lastChangedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastChangedAt', [$lastChangedAt]);

        return parent::setLastChangedAt($lastChangedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude($latitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeid', []);

        return parent::getLeid();
    }

    /**
     * {@inheritDoc}
     */
    public function setLeid($leid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeid', [$leid]);

        return parent::setLeid($leid);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude($longitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemberRating()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemberRating', []);

        return parent::getMemberRating();
    }

    /**
     * {@inheritDoc}
     */
    public function setMemberRating($memberRating)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMemberRating', [$memberRating]);

        return parent::setMemberRating($memberRating);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptedInAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptedInAt', []);

        return parent::getOptedInAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setOptedInAt(\DateTime $optedInAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOptedInAt', [$optedInAt]);

        return parent::setOptedInAt($optedInAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptedInIpAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptedInIpAddress', []);

        return parent::getOptedInIpAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setOptedInIpAddress($optedInIpAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOptedInIpAddress', [$optedInIpAddress]);

        return parent::setOptedInIpAddress($optedInIpAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegion', []);

        return parent::getRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegion($region)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', [$region]);

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimezone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimezone', []);

        return parent::getTimezone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimezone($timezone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimezone', [$timezone]);

        return parent::setTimezone($timezone);
    }

    /**
     * {@inheritDoc}
     */
    public function getMergeVarValues()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMergeVarValues', []);

        return parent::getMergeVarValues();
    }

    /**
     * {@inheritDoc}
     */
    public function setMergeVarValues(array $data = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMergeVarValues', [$data]);

        return parent::setMergeVarValues($data);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscribersList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscribersList', []);

        return parent::getSubscribersList();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubscribersList(\Oro\Bundle\MailChimpBundle\Entity\SubscribersList $subscribersList = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubscribersList', [$subscribersList]);

        return parent::setSubscribersList($subscribersList);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner($owner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', []);

        return parent::prePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', []);

        return parent::preUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function addSegmentMember(\Oro\Bundle\MailChimpBundle\Entity\StaticSegmentMember $segmentMembers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSegmentMember', [$segmentMembers]);

        return parent::addSegmentMember($segmentMembers);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSegmentMember(\Oro\Bundle\MailChimpBundle\Entity\StaticSegmentMember $segmentMembers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSegmentMember', [$segmentMembers]);

        return parent::removeSegmentMember($segmentMembers);
    }

    /**
     * {@inheritDoc}
     */
    public function getSegmentMembers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSegmentMembers', []);

        return parent::getSegmentMembers();
    }

}