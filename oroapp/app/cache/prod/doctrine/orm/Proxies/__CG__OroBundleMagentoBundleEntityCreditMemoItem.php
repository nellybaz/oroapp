<?php

namespace Proxies\__CG__\Oro\Bundle\MagentoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CreditMemoItem extends \Oro\Bundle\MagentoBundle\Entity\CreditMemoItem implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'parent', 'orderItemId', 'taxAmount', 'discountAmount', 'rowTotal', 'qty', 'price', 'additionalData', 'description', 'sku', 'name', 'owner', 'serialized_data', 'channel', 'originId'];
        }

        return ['__isInitialized__', 'id', 'parent', 'orderItemId', 'taxAmount', 'discountAmount', 'rowTotal', 'qty', 'price', 'additionalData', 'description', 'sku', 'name', 'owner', 'serialized_data', 'channel', 'originId'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CreditMemoItem $proxy) {
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
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\Oro\Bundle\MagentoBundle\Entity\CreditMemo $parent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderItemId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderItemId', []);

        return parent::getOrderItemId();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderItemId($orderItemId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderItemId', [$orderItemId]);

        return parent::setOrderItemId($orderItemId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxAmount', []);

        return parent::getTaxAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxAmount($taxAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxAmount', [$taxAmount]);

        return parent::setTaxAmount($taxAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscountAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscountAmount', []);

        return parent::getDiscountAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscountAmount($discountAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscountAmount', [$discountAmount]);

        return parent::setDiscountAmount($discountAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getRowTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRowTotal', []);

        return parent::getRowTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setRowTotal($rowTotal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRowTotal', [$rowTotal]);

        return parent::setRowTotal($rowTotal);
    }

    /**
     * {@inheritDoc}
     */
    public function getQty()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQty', []);

        return parent::getQty();
    }

    /**
     * {@inheritDoc}
     */
    public function setQty($qty)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQty', [$qty]);

        return parent::setQty($qty);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdditionalData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdditionalData', []);

        return parent::getAdditionalData();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdditionalData($additionalData)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdditionalData', [$additionalData]);

        return parent::setAdditionalData($additionalData);
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
    public function getSku()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSku', []);

        return parent::getSku();
    }

    /**
     * {@inheritDoc}
     */
    public function setSku($sku)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSku', [$sku]);

        return parent::setSku($sku);
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
    public function setOwner(\Oro\Bundle\OrganizationBundle\Entity\Organization $owner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
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

    /**
     * {@inheritDoc}
     */
    public function setChannel(\Oro\Bundle\IntegrationBundle\Entity\Channel $integration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannel', [$integration]);

        return parent::setChannel($integration);
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
    public function getChannelName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannelName', []);

        return parent::getChannelName();
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