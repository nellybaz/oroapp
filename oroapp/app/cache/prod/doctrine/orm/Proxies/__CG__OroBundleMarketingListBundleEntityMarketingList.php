<?php

namespace Proxies\__CG__\Oro\Bundle\MarketingListBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MarketingList extends \Oro\Bundle\MarketingListBundle\Entity\MarketingList implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'name', 'description', 'entity', 'type', 'segment', 'marketingListItems', 'marketingListUnsubscribedItems', 'marketingListRemovedItems', 'owner', 'organization', 'lastRun', 'createdAt', 'updatedAt', 'union', 'serialized_data'];
        }

        return ['__isInitialized__', 'id', 'name', 'description', 'entity', 'type', 'segment', 'marketingListItems', 'marketingListUnsubscribedItems', 'marketingListRemovedItems', 'owner', 'organization', 'lastRun', 'createdAt', 'updatedAt', 'union', 'serialized_data'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MarketingList $proxy) {
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
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(\Oro\Bundle\MarketingListBundle\Entity\MarketingListType $type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function isManual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isManual', []);

        return parent::isManual();
    }

    /**
     * {@inheritDoc}
     */
    public function getSegment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSegment', []);

        return parent::getSegment();
    }

    /**
     * {@inheritDoc}
     */
    public function setSegment(\Oro\Bundle\SegmentBundle\Entity\Segment $segment = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSegment', [$segment]);

        return parent::setSegment($segment);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntity', []);

        return parent::getEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntity($entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntity', [$entity]);

        return parent::setEntity($entity);
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
    public function setOwner(\Oro\Bundle\UserBundle\Entity\User $owning)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owning]);

        return parent::setOwner($owning);
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
    public function setCreatedAt(\DateTime $created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$created]);

        return parent::setCreatedAt($created);
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
    public function setUpdatedAt(\DateTime $updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updated]);

        return parent::setUpdatedAt($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function setLastRun($lastRun)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastRun', [$lastRun]);

        return parent::setLastRun($lastRun);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastRun()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastRun', []);

        return parent::getLastRun();
    }

    /**
     * {@inheritDoc}
     */
    public function beforeSave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'beforeSave', []);

        return parent::beforeSave();
    }

    /**
     * {@inheritDoc}
     */
    public function doUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'doUpdate', []);

        return parent::doUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function getMarketingListItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarketingListItems', []);

        return parent::getMarketingListItems();
    }

    /**
     * {@inheritDoc}
     */
    public function resetMarketingListItems($marketingListItems)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetMarketingListItems', [$marketingListItems]);

        return parent::resetMarketingListItems($marketingListItems);
    }

    /**
     * {@inheritDoc}
     */
    public function addMarketingListItem(\Oro\Bundle\MarketingListBundle\Entity\MarketingListItem $marketingListItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMarketingListItem', [$marketingListItem]);

        return parent::addMarketingListItem($marketingListItem);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMarketingListItem(\Oro\Bundle\MarketingListBundle\Entity\MarketingListItem $marketingListItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMarketingListItem', [$marketingListItem]);

        return parent::removeMarketingListItem($marketingListItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarketingListRemovedItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarketingListRemovedItems', []);

        return parent::getMarketingListRemovedItems();
    }

    /**
     * {@inheritDoc}
     */
    public function resetMarketingListRemovedItems($marketingListRemovedItems)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetMarketingListRemovedItems', [$marketingListRemovedItems]);

        return parent::resetMarketingListRemovedItems($marketingListRemovedItems);
    }

    /**
     * {@inheritDoc}
     */
    public function addMarketingListRemovedItem(\Oro\Bundle\MarketingListBundle\Entity\MarketingListRemovedItem $marketingListRemovedItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMarketingListRemovedItem', [$marketingListRemovedItem]);

        return parent::addMarketingListRemovedItem($marketingListRemovedItem);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMarketingListRemovedItem(\Oro\Bundle\MarketingListBundle\Entity\MarketingListRemovedItem $marketingListRemovedItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMarketingListRemovedItem', [$marketingListRemovedItem]);

        return parent::removeMarketingListRemovedItem($marketingListRemovedItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarketingListUnsubscribedItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarketingListUnsubscribedItems', []);

        return parent::getMarketingListUnsubscribedItems();
    }

    /**
     * {@inheritDoc}
     */
    public function resetMarketingListUnsubscribedItems($marketingListUnsubscribedItems)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetMarketingListUnsubscribedItems', [$marketingListUnsubscribedItems]);

        return parent::resetMarketingListUnsubscribedItems($marketingListUnsubscribedItems);
    }

    /**
     * {@inheritDoc}
     */
    public function addMarketingListUnsubscribedItem(\Oro\Bundle\MarketingListBundle\Entity\MarketingListUnsubscribedItem $marketingListUnsubscribedItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMarketingListUnsubscribedItem', [$marketingListUnsubscribedItem]);

        return parent::addMarketingListUnsubscribedItem($marketingListUnsubscribedItem);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMarketingListUnsubscribedItem(\Oro\Bundle\MarketingListBundle\Entity\MarketingListUnsubscribedItem $marketingListUnsubscribedItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMarketingListUnsubscribedItem', [$marketingListUnsubscribedItem]);

        return parent::removeMarketingListUnsubscribedItem($marketingListUnsubscribedItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefinition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefinition', []);

        return parent::getDefinition();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefinition($definition)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefinition', [$definition]);

        return parent::setDefinition($definition);
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
    public function isUnion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isUnion', []);

        return parent::isUnion();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnion($union)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnion', [$union]);

        return parent::setUnion($union);
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