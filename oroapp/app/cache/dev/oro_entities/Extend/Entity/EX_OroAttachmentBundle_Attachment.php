<?php

namespace Extend\Entity;

abstract class EX_OroAttachmentBundle_Attachment implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $quote_7de78df3;
    protected $product_f4309915;
    protected $order_50627d4f;
    protected $opportunity_f89bd07c;
    protected $customer_user_539cf909;
    protected $customer_e2cfcbe5;
    protected $account_8d93c122;

    /**
     * Checks if this entity can be associated with the given target entity type
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\ProductBundle\Entity\Product') { return true; }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\Customer') { return true; }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') { return true; }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') { return true; }
        if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') { return true; }
        return false;
    }

    /**
     * Sets the entity this entity is associated with
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function setTarget($target)
    {
        if (null === $target) { $this->resetTargets(); return $this; }
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        // This entity can be associated with only one another entity
        if ($className === 'Oro\Bundle\ProductBundle\Entity\Product') { $this->resetTargets(); $this->product_f4309915 = $target; return $this; }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\Customer') { $this->resetTargets(); $this->customer_e2cfcbe5 = $target; return $this; }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') { $this->resetTargets(); $this->customer_user_539cf909 = $target; return $this; }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { $this->resetTargets(); $this->account_8d93c122 = $target; return $this; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { $this->resetTargets(); $this->opportunity_f89bd07c = $target; return $this; }
        if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') { $this->resetTargets(); $this->order_50627d4f = $target; return $this; }
        if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') { $this->resetTargets(); $this->quote_7de78df3 = $target; return $this; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setQuote7de78df3($value)
    {
        $this->quote_7de78df3 = $value; return $this;
    }

    public function setProductF4309915($value)
    {
        $this->product_f4309915 = $value; return $this;
    }

    public function setOrder50627d4f($value)
    {
        $this->order_50627d4f = $value; return $this;
    }

    public function setOpportunityF89bd07c($value)
    {
        $this->opportunity_f89bd07c = $value; return $this;
    }

    public function setCustomerUser539cf909($value)
    {
        $this->customer_user_539cf909 = $value; return $this;
    }

    public function setCustomerE2cfcbe5($value)
    {
        $this->customer_e2cfcbe5 = $value; return $this;
    }

    public function setAccount8d93c122($value)
    {
        $this->account_8d93c122 = $value; return $this;
    }

    /**
     * Returns array with all associated entities
     *
     * @return array
     * @deprecated since 2.0. Method "getTarget" should be used instead
     */
    public function getTargetEntities()
    {
        $associationEntities = [];
        $entity = $this->product_f4309915;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        $entity = $this->customer_e2cfcbe5;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        $entity = $this->customer_user_539cf909;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        $entity = $this->account_8d93c122;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        $entity = $this->opportunity_f89bd07c;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        $entity = $this->order_50627d4f;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        $entity = $this->quote_7de78df3;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        return $associationEntities;
    }

    /**
     * Gets the entity this entity is associated with
     *
     * @return object|null Any configurable entity
     */
    public function getTarget()
    {
        if (null !== $this->product_f4309915) { return $this->product_f4309915; }
        if (null !== $this->customer_e2cfcbe5) { return $this->customer_e2cfcbe5; }
        if (null !== $this->customer_user_539cf909) { return $this->customer_user_539cf909; }
        if (null !== $this->account_8d93c122) { return $this->account_8d93c122; }
        if (null !== $this->opportunity_f89bd07c) { return $this->opportunity_f89bd07c; }
        if (null !== $this->order_50627d4f) { return $this->order_50627d4f; }
        if (null !== $this->quote_7de78df3) { return $this->quote_7de78df3; }
        return null;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getQuote7de78df3()
    {
        return $this->quote_7de78df3;
    }

    public function getProductF4309915()
    {
        return $this->product_f4309915;
    }

    public function getOrder50627d4f()
    {
        return $this->order_50627d4f;
    }

    public function getOpportunityF89bd07c()
    {
        return $this->opportunity_f89bd07c;
    }

    public function getCustomerUser539cf909()
    {
        return $this->customer_user_539cf909;
    }

    public function getCustomerE2cfcbe5()
    {
        return $this->customer_e2cfcbe5;
    }

    public function getAccount8d93c122()
    {
        return $this->account_8d93c122;
    }

    public function __construct()
    {
    }

    private function resetTargets()
    {
        $this->product_f4309915 = null;
        $this->customer_e2cfcbe5 = null;
        $this->customer_user_539cf909 = null;
        $this->account_8d93c122 = null;
        $this->opportunity_f89bd07c = null;
        $this->order_50627d4f = null;
        $this->quote_7de78df3 = null;
    }
}