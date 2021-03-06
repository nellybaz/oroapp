<?php

namespace Proxies\__CG__\Oro\Bundle\PromotionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Promotion extends \Oro\Bundle\PromotionBundle\Entity\Promotion implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'rule', 'labels', 'descriptions', 'scopes', 'schedules', 'discountConfiguration', 'useCoupons', 'coupons', 'productsSegment', 'serialized_data', 'createdAt', 'updatedAt', 'updatedAtSet', 'owner', 'organization'];
        }

        return ['__isInitialized__', 'id', 'rule', 'labels', 'descriptions', 'scopes', 'schedules', 'discountConfiguration', 'useCoupons', 'coupons', 'productsSegment', 'serialized_data', 'createdAt', 'updatedAt', 'updatedAtSet', 'owner', 'organization'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Promotion $proxy) {
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
    public function getRule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRule', []);

        return parent::getRule();
    }

    /**
     * {@inheritDoc}
     */
    public function setRule($rule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRule', [$rule]);

        return parent::setRule($rule);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabels()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabels', []);

        return parent::getLabels();
    }

    /**
     * {@inheritDoc}
     */
    public function addLabel(\Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue $label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLabel', [$label]);

        return parent::addLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLabel(\Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue $label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLabel', [$label]);

        return parent::removeLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptions', []);

        return parent::getDescriptions();
    }

    /**
     * {@inheritDoc}
     */
    public function addDescription(\Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue $description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDescription', [$description]);

        return parent::addDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDescription(\Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue $description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDescription', [$description]);

        return parent::removeDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getScopes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScopes', []);

        return parent::getScopes();
    }

    /**
     * {@inheritDoc}
     */
    public function resetScopes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetScopes', []);

        return parent::resetScopes();
    }

    /**
     * {@inheritDoc}
     */
    public function addScope(\Oro\Bundle\ScopeBundle\Entity\Scope $scope)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addScope', [$scope]);

        return parent::addScope($scope);
    }

    /**
     * {@inheritDoc}
     */
    public function removeScope(\Oro\Bundle\ScopeBundle\Entity\Scope $scope)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeScope', [$scope]);

        return parent::removeScope($scope);
    }

    /**
     * {@inheritDoc}
     */
    public function getSchedules()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSchedules', []);

        return parent::getSchedules();
    }

    /**
     * {@inheritDoc}
     */
    public function addSchedule(\Oro\Bundle\PromotionBundle\Entity\PromotionSchedule $schedule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSchedule', [$schedule]);

        return parent::addSchedule($schedule);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSchedule(\Oro\Bundle\PromotionBundle\Entity\PromotionSchedule $schedule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSchedule', [$schedule]);

        return parent::removeSchedule($schedule);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscountConfiguration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscountConfiguration', []);

        return parent::getDiscountConfiguration();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscountConfiguration($discountConfiguration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscountConfiguration', [$discountConfiguration]);

        return parent::setDiscountConfiguration($discountConfiguration);
    }

    /**
     * {@inheritDoc}
     */
    public function isUseCoupons()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isUseCoupons', []);

        return parent::isUseCoupons();
    }

    /**
     * {@inheritDoc}
     */
    public function setUseCoupons($useCoupons)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUseCoupons', [$useCoupons]);

        return parent::setUseCoupons($useCoupons);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoupons()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoupons', []);

        return parent::getCoupons();
    }

    /**
     * {@inheritDoc}
     */
    public function addCoupon(\Oro\Bundle\PromotionBundle\Entity\Coupon $coupon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCoupon', [$coupon]);

        return parent::addCoupon($coupon);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCoupon(\Oro\Bundle\PromotionBundle\Entity\Coupon $coupon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCoupon', [$coupon]);

        return parent::removeCoupon($coupon);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductsSegment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductsSegment', []);

        return parent::getProductsSegment();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductsSegment(\Oro\Bundle\SegmentBundle\Entity\Segment $productsSegment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductsSegment', [$productsSegment]);

        return parent::setProductsSegment($productsSegment);
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
    public function setDefaultLabel($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultLabel', [$value]);

        return parent::setDefaultLabel($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultDescription($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultDescription', [$value]);

        return parent::setDefaultDescription($value);
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
    public function getLabel(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', [$localization]);

        return parent::getLabel($localization);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', [$localization]);

        return parent::getDescription($localization);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultLabel', []);

        return parent::getDefaultLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultDescription', []);

        return parent::getDefaultDescription();
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
    public function isUpdatedAtSet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isUpdatedAtSet', []);

        return parent::isUpdatedAtSet();
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
    public function getOrganization()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganization', []);

        return parent::getOrganization();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganization(\Oro\Bundle\OrganizationBundle\Entity\OrganizationInterface $organization)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganization', [$organization]);

        return parent::setOrganization($organization);
    }

}
