<?php

namespace Proxies\__CG__\Oro\Bundle\FedexShippingBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FedexIntegrationSettings extends \Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'fedexTestMode', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'key', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'password', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'accountNumber', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'meterNumber', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'pickupType', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'unitOfWeight', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'shippingServices', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'labels', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'invalidateCacheAt', 'id', 'channel'];
        }

        return ['__isInitialized__', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'fedexTestMode', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'key', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'password', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'accountNumber', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'meterNumber', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'pickupType', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'unitOfWeight', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'shippingServices', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'labels', '' . "\0" . 'Oro\\Bundle\\FedexShippingBundle\\Entity\\FedexIntegrationSettings' . "\0" . 'invalidateCacheAt', 'id', 'channel'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FedexIntegrationSettings $proxy) {
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
    public function isFedexTestMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFedexTestMode', []);

        return parent::isFedexTestMode();
    }

    /**
     * {@inheritDoc}
     */
    public function setFedexTestMode(bool $testMode): \Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFedexTestMode', [$testMode]);

        return parent::setFedexTestMode($testMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKey', []);

        return parent::getKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setKey(string $key): \Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKey', [$key]);

        return parent::setKey($key);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountNumber', []);

        return parent::getAccountNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountNumber(string $accountNumber): \Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountNumber', [$accountNumber]);

        return parent::setAccountNumber($accountNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getMeterNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMeterNumber', []);

        return parent::getMeterNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setMeterNumber(string $meterNumber): \Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMeterNumber', [$meterNumber]);

        return parent::setMeterNumber($meterNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getPickupType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPickupType', []);

        return parent::getPickupType();
    }

    /**
     * {@inheritDoc}
     */
    public function setPickupType(string $pickupType): \Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPickupType', [$pickupType]);

        return parent::setPickupType($pickupType);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitOfWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitOfWeight', []);

        return parent::getUnitOfWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnitOfWeight(string $unitOfWeight): \Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnitOfWeight', [$unitOfWeight]);

        return parent::setUnitOfWeight($unitOfWeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabels(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabels', []);

        return parent::getLabels();
    }

    /**
     * {@inheritDoc}
     */
    public function addLabel(\Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue $label): \Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLabel', [$label]);

        return parent::addLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLabel(\Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue $label): \Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLabel', [$label]);

        return parent::removeLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingServices(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingServices', []);

        return parent::getShippingServices();
    }

    /**
     * {@inheritDoc}
     */
    public function addShippingService(\Oro\Bundle\FedexShippingBundle\Entity\FedexShippingService $service): \Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addShippingService', [$service]);

        return parent::addShippingService($service);
    }

    /**
     * {@inheritDoc}
     */
    public function removeShippingService(\Oro\Bundle\FedexShippingBundle\Entity\FedexShippingService $service): \Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeShippingService', [$service]);

        return parent::removeShippingService($service);
    }

    /**
     * {@inheritDoc}
     */
    public function getSettingsBag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSettingsBag', []);

        return parent::getSettingsBag();
    }

    /**
     * {@inheritDoc}
     */
    public function getDimensionsUnit(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDimensionsUnit', []);

        return parent::getDimensionsUnit();
    }

    /**
     * {@inheritDoc}
     */
    public function setInvalidateCacheAt(\DateTime $invalidateCacheAt = NULL): \Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInvalidateCacheAt', [$invalidateCacheAt]);

        return parent::setInvalidateCacheAt($invalidateCacheAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getInvalidateCacheAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInvalidateCacheAt', []);

        return parent::getInvalidateCacheAt();
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
    public function setChannel(\Oro\Bundle\IntegrationBundle\Entity\Channel $channel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannel', [$channel]);

        return parent::setChannel($channel);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannel', []);

        return parent::getChannel();
    }

}