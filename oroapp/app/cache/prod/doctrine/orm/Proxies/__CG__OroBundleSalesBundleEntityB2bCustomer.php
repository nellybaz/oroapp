<?php

namespace Proxies\__CG__\Oro\Bundle\SalesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class B2bCustomer extends \Oro\Bundle\SalesBundle\Entity\B2bCustomer implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'name', 'lifetime', 'shippingAddress', 'billingAddress', 'account', 'contact', 'owner', 'organization', 'createdAt', 'updatedAt', 'phones', 'emails', 'website', 'ticker_symbol', 'serialized_data', 'rating', 'ownership', 'employees', 'ac_last_contact_date_out', 'ac_last_contact_date_in', 'ac_last_contact_date', 'ac_contact_count_out', 'ac_contact_count_in', 'ac_contact_count', 'dataChannel'];
        }

        return ['__isInitialized__', 'id', 'name', 'lifetime', 'shippingAddress', 'billingAddress', 'account', 'contact', 'owner', 'organization', 'createdAt', 'updatedAt', 'phones', 'emails', 'website', 'ticker_symbol', 'serialized_data', 'rating', 'ownership', 'employees', 'ac_last_contact_date_out', 'ac_last_contact_date_in', 'ac_last_contact_date', 'ac_contact_count_out', 'ac_contact_count_in', 'ac_contact_count', 'dataChannel'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (B2bCustomer $proxy) {
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
    public function getLifetime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLifetime', []);

        return parent::getLifetime();
    }

    /**
     * {@inheritDoc}
     */
    public function setLifetime($lifetime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLifetime', [$lifetime]);

        return parent::setLifetime($lifetime);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingAddress', []);

        return parent::getShippingAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingAddress(\Oro\Bundle\AddressBundle\Entity\Address $shippingAddress = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingAddress', [$shippingAddress]);

        return parent::setShippingAddress($shippingAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getBillingAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBillingAddress', []);

        return parent::getBillingAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setBillingAddress(\Oro\Bundle\AddressBundle\Entity\Address $billingAddress = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBillingAddress', [$billingAddress]);

        return parent::setBillingAddress($billingAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccount', []);

        return parent::getAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccount(\Oro\Bundle\AccountBundle\Entity\Account $account = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccount', [$account]);

        return parent::setAccount($account);
    }

    /**
     * {@inheritDoc}
     */
    public function getContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContact', []);

        return parent::getContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setContact(\Oro\Bundle\ContactBundle\Entity\Contact $contact = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContact', [$contact]);

        return parent::setContact($contact);
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
    public function setOwner(\Oro\Bundle\UserBundle\Entity\User $owner = NULL)
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
    public function setCreatedAt(\DateTime $createdAt = NULL)
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
    public function resetPhones($phones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetPhones', [$phones]);

        return parent::resetPhones($phones);
    }

    /**
     * {@inheritDoc}
     */
    public function addPhone(\Oro\Bundle\SalesBundle\Entity\B2bCustomerPhone $phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPhone', [$phone]);

        return parent::addPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function removePhone(\Oro\Bundle\SalesBundle\Entity\B2bCustomerPhone $phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePhone', [$phone]);

        return parent::removePhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhones', []);

        return parent::getPhones();
    }

    /**
     * {@inheritDoc}
     */
    public function hasPhone(\Oro\Bundle\SalesBundle\Entity\B2bCustomerPhone $phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPhone', [$phone]);

        return parent::hasPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimaryPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimaryPhone', []);

        return parent::getPrimaryPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimaryPhone(\Oro\Bundle\SalesBundle\Entity\B2bCustomerPhone $phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrimaryPhone', [$phone]);

        return parent::setPrimaryPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function resetEmails($emails)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetEmails', [$emails]);

        return parent::resetEmails($emails);
    }

    /**
     * {@inheritDoc}
     */
    public function addEmail(\Oro\Bundle\SalesBundle\Entity\B2bCustomerEmail $email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEmail', [$email]);

        return parent::addEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEmail(\Oro\Bundle\SalesBundle\Entity\B2bCustomerEmail $email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEmail', [$email]);

        return parent::removeEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmails', []);

        return parent::getEmails();
    }

    /**
     * {@inheritDoc}
     */
    public function hasEmail(\Oro\Bundle\SalesBundle\Entity\B2bCustomerEmail $email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasEmail', [$email]);

        return parent::hasEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimaryEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimaryEmail', []);

        return parent::getPrimaryEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimaryEmail(\Oro\Bundle\SalesBundle\Entity\B2bCustomerEmail $email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrimaryEmail', [$email]);

        return parent::setPrimaryEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setWebsite($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebsite', [$value]);

        return parent::setWebsite($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setTickerSymbol($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTickerSymbol', [$value]);

        return parent::setTickerSymbol($value);
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
    public function setRating($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRating', [$value]);

        return parent::setRating($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setOwnership($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwnership', [$value]);

        return parent::setOwnership($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployees($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployees', [$value]);

        return parent::setEmployees($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setAcLastContactDateOut($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcLastContactDateOut', [$value]);

        return parent::setAcLastContactDateOut($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setAcLastContactDateIn($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcLastContactDateIn', [$value]);

        return parent::setAcLastContactDateIn($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setAcLastContactDate($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcLastContactDate', [$value]);

        return parent::setAcLastContactDate($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setAcContactCountOut($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcContactCountOut', [$value]);

        return parent::setAcContactCountOut($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setAcContactCountIn($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcContactCountIn', [$value]);

        return parent::setAcContactCountIn($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setAcContactCount($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcContactCount', [$value]);

        return parent::setAcContactCount($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebsite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebsite', []);

        return parent::getWebsite();
    }

    /**
     * {@inheritDoc}
     */
    public function getTickerSymbol()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTickerSymbol', []);

        return parent::getTickerSymbol();
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
    public function getRating()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRating', []);

        return parent::getRating();
    }

    /**
     * {@inheritDoc}
     */
    public function getOwnership()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnership', []);

        return parent::getOwnership();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployees()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployees', []);

        return parent::getEmployees();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcLastContactDateOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcLastContactDateOut', []);

        return parent::getAcLastContactDateOut();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcLastContactDateIn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcLastContactDateIn', []);

        return parent::getAcLastContactDateIn();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcLastContactDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcLastContactDate', []);

        return parent::getAcLastContactDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcContactCountOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcContactCountOut', []);

        return parent::getAcContactCountOut();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcContactCountIn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcContactCountIn', []);

        return parent::getAcContactCountIn();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcContactCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcContactCount', []);

        return parent::getAcContactCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataChannel(\Oro\Bundle\ChannelBundle\Entity\Channel $channel = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataChannel', [$channel]);

        return parent::setDataChannel($channel);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataChannel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataChannel', []);

        return parent::getDataChannel();
    }

}