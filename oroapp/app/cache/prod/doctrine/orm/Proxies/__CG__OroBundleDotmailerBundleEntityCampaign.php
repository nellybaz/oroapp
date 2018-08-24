<?php

namespace Proxies\__CG__\Oro\Bundle\DotmailerBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Campaign extends \Oro\Bundle\DotmailerBundle\Entity\Campaign implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'channel', 'name', 'subject', 'fromName', 'fromAddress', 'htmlContent', 'plainTextContent', 'replyToAddress', 'isSplitTest', 'owner', 'createdAt', 'updatedAt', 'addressBooks', 'activities', 'emailCampaign', 'campaignSummary', 'deleted', 'status', 'serialized_data', 'reply_action', 'originId'];
        }

        return ['__isInitialized__', 'id', 'channel', 'name', 'subject', 'fromName', 'fromAddress', 'htmlContent', 'plainTextContent', 'replyToAddress', 'isSplitTest', 'owner', 'createdAt', 'updatedAt', 'addressBooks', 'activities', 'emailCampaign', 'campaignSummary', 'deleted', 'status', 'serialized_data', 'reply_action', 'originId'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Campaign $proxy) {
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
    public function getChannel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannel', []);

        return parent::getChannel();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannel(\Oro\Bundle\IntegrationBundle\Entity\Channel $channel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannel', [$channel]);

        return parent::setChannel($channel);
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
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
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
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getFromAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFromAddress', []);

        return parent::getFromAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setFromAddress($fromAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFromAddress', [$fromAddress]);

        return parent::setFromAddress($fromAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getFromName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFromName', []);

        return parent::getFromName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFromName($fromName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFromName', [$fromName]);

        return parent::setFromName($fromName);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsSplitTest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsSplitTest', []);

        return parent::getIsSplitTest();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsSplitTest($isSplitTest)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsSplitTest', [$isSplitTest]);

        return parent::setIsSplitTest($isSplitTest);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubject', []);

        return parent::getSubject();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubject($subject)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubject', [$subject]);

        return parent::setSubject($subject);
    }

    /**
     * {@inheritDoc}
     */
    public function getHtmlContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHtmlContent', []);

        return parent::getHtmlContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setHtmlContent($htmlContent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHtmlContent', [$htmlContent]);

        return parent::setHtmlContent($htmlContent);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainTextContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainTextContent', []);

        return parent::getPlainTextContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainTextContent($plainTextContent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainTextContent', [$plainTextContent]);

        return parent::setPlainTextContent($plainTextContent);
    }

    /**
     * {@inheritDoc}
     */
    public function getReplyToAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReplyToAddress', []);

        return parent::getReplyToAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setReplyToAddress($replyToAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReplyToAddress', [$replyToAddress]);

        return parent::setReplyToAddress($replyToAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressBooks($addressBooks)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressBooks', [$addressBooks]);

        return parent::setAddressBooks($addressBooks);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressBooks()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressBooks', []);

        return parent::getAddressBooks();
    }

    /**
     * {@inheritDoc}
     */
    public function addAddressBook(\Oro\Bundle\DotmailerBundle\Entity\AddressBook $addressBook)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAddressBook', [$addressBook]);

        return parent::addAddressBook($addressBook);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAddressBook(\Oro\Bundle\DotmailerBundle\Entity\AddressBook $addressBook)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAddressBook', [$addressBook]);

        return parent::removeAddressBook($addressBook);
    }

    /**
     * {@inheritDoc}
     */
    public function hasAddressBooks()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasAddressBooks', []);

        return parent::hasAddressBooks();
    }

    /**
     * {@inheritDoc}
     */
    public function getActivities()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivities', []);

        return parent::getActivities();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivities($activities)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivities', [$activities]);

        return parent::setActivities($activities);
    }

    /**
     * {@inheritDoc}
     */
    public function addActivity(\Oro\Bundle\DotmailerBundle\Entity\Activity $activity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addActivity', [$activity]);

        return parent::addActivity($activity);
    }

    /**
     * {@inheritDoc}
     */
    public function removeActivity(\Oro\Bundle\DotmailerBundle\Entity\Activity $activity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeActivity', [$activity]);

        return parent::removeActivity($activity);
    }

    /**
     * {@inheritDoc}
     */
    public function hasActivities()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasActivities', []);

        return parent::hasActivities();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailCampaign()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailCampaign', []);

        return parent::getEmailCampaign();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailCampaign(\Oro\Bundle\CampaignBundle\Entity\EmailCampaign $emailCampaign = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailCampaign', [$emailCampaign]);

        return parent::setEmailCampaign($emailCampaign);
    }

    /**
     * {@inheritDoc}
     */
    public function getCampaignSummary()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCampaignSummary', []);

        return parent::getCampaignSummary();
    }

    /**
     * {@inheritDoc}
     */
    public function setCampaignSummary(\Oro\Bundle\DotmailerBundle\Entity\CampaignSummary $campaignSummary = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCampaignSummary', [$campaignSummary]);

        return parent::setCampaignSummary($campaignSummary);
    }

    /**
     * {@inheritDoc}
     */
    public function isDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDeleted', []);

        return parent::isDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
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
    public function setStatus($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$value]);

        return parent::setStatus($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setSerializedData($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSerializedData', [$value]);

        return parent::setSerializedData($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setReplyAction($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReplyAction', [$value]);

        return parent::setReplyAction($value);
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
    public function getSerializedData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSerializedData', []);

        return parent::getSerializedData();
    }

    /**
     * {@inheritDoc}
     */
    public function getReplyAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReplyAction', []);

        return parent::getReplyAction();
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
    public function getOriginId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginId', []);

        return parent::getOriginId();
    }

}