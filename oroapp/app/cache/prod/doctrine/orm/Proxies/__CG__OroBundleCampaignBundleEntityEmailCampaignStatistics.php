<?php

namespace Proxies\__CG__\Oro\Bundle\CampaignBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EmailCampaignStatistics extends \Oro\Bundle\CampaignBundle\Entity\EmailCampaignStatistics implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'marketingListItem', 'emailCampaign', 'openCount', 'clickCount', 'bounceCount', 'abuseCount', 'unsubscribeCount', 'createdAt', 'owner', 'organization', 'serialized_data'];
        }

        return ['__isInitialized__', 'id', 'marketingListItem', 'emailCampaign', 'openCount', 'clickCount', 'bounceCount', 'abuseCount', 'unsubscribeCount', 'createdAt', 'owner', 'organization', 'serialized_data'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EmailCampaignStatistics $proxy) {
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
    public function getMarketingListItem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarketingListItem', []);

        return parent::getMarketingListItem();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarketingListItem(\Oro\Bundle\MarketingListBundle\Entity\MarketingListItem $marketingListItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarketingListItem', [$marketingListItem]);

        return parent::setMarketingListItem($marketingListItem);
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
    public function setEmailCampaign(\Oro\Bundle\CampaignBundle\Entity\EmailCampaign $emailCampaign)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailCampaign', [$emailCampaign]);

        return parent::setEmailCampaign($emailCampaign);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpenCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpenCount', []);

        return parent::getOpenCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpenCount($openCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpenCount', [$openCount]);

        return parent::setOpenCount($openCount);
    }

    /**
     * {@inheritDoc}
     */
    public function incrementOpenCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'incrementOpenCount', []);

        return parent::incrementOpenCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getClickCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClickCount', []);

        return parent::getClickCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setClickCount($clickCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClickCount', [$clickCount]);

        return parent::setClickCount($clickCount);
    }

    /**
     * {@inheritDoc}
     */
    public function incrementClickCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'incrementClickCount', []);

        return parent::incrementClickCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getBounceCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBounceCount', []);

        return parent::getBounceCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setBounceCount($bounceCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBounceCount', [$bounceCount]);

        return parent::setBounceCount($bounceCount);
    }

    /**
     * {@inheritDoc}
     */
    public function incrementBounceCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'incrementBounceCount', []);

        return parent::incrementBounceCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbuseCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbuseCount', []);

        return parent::getAbuseCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbuseCount($abuseCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbuseCount', [$abuseCount]);

        return parent::setAbuseCount($abuseCount);
    }

    /**
     * {@inheritDoc}
     */
    public function incrementAbuseCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'incrementAbuseCount', []);

        return parent::incrementAbuseCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnsubscribeCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnsubscribeCount', []);

        return parent::getUnsubscribeCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnsubscribeCount($unsubscribeCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnsubscribeCount', [$unsubscribeCount]);

        return parent::setUnsubscribeCount($unsubscribeCount);
    }

    /**
     * {@inheritDoc}
     */
    public function incrementUnsubscribeCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'incrementUnsubscribeCount', []);

        return parent::incrementUnsubscribeCount();
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
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', []);

        return parent::prePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(\Oro\Bundle\UserBundle\Entity\User $owner = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
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
    public function setOrganization(\Oro\Bundle\OrganizationBundle\Entity\Organization $organization = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganization', [$organization]);

        return parent::setOrganization($organization);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganization()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganization', []);

        return parent::getOrganization();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
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
    public function getSerializedData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSerializedData', []);

        return parent::getSerializedData();
    }

}