<?php

namespace Extend\Entity;

abstract class EX_OroSalesBundle_Customer implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $customer_f2bbc387;
    protected $customer_e197f906;
    protected $b2b_customer_188b774c;

    /**
     * Checks if this entity can be associated with the given target entity type
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportCustomerTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\Customer') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { return true; }
        return false;
    }

    /**
     * Sets the entity this entity is associated with
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function setCustomerTarget($target)
    {
        if (null === $target) { $this->resetCustomerTargets(); return $this; }
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        // This entity can be associated with only one another entity
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\Customer') { $this->resetCustomerTargets(); $this->customer_e197f906 = $target; return $this; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { $this->resetCustomerTargets(); $this->b2b_customer_188b774c = $target; return $this; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { $this->resetCustomerTargets(); $this->customer_f2bbc387 = $target; return $this; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function setCustomerF2bbc387($value)
    {
        $this->customer_f2bbc387 = $value; return $this;
    }

    public function setCustomerE197f906($value)
    {
        $this->customer_e197f906 = $value; return $this;
    }

    public function setB2bCustomer188b774c($value)
    {
        $this->b2b_customer_188b774c = $value; return $this;
    }

    /**
     * Returns array with all associated entities
     *
     * @return array
     * @deprecated since 2.0. Method "getCustomerTarget" should be used instead
     */
    public function getCustomerTargetEntities()
    {
        $associationEntities = [];
        $entity = $this->customer_e197f906;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        $entity = $this->b2b_customer_188b774c;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        $entity = $this->customer_f2bbc387;
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
    public function getCustomerTarget()
    {
        if (null !== $this->customer_e197f906) { return $this->customer_e197f906; }
        if (null !== $this->b2b_customer_188b774c) { return $this->b2b_customer_188b774c; }
        if (null !== $this->customer_f2bbc387) { return $this->customer_f2bbc387; }
        return null;
    }

    public function getCustomerF2bbc387()
    {
        return $this->customer_f2bbc387;
    }

    public function getCustomerE197f906()
    {
        return $this->customer_e197f906;
    }

    public function getB2bCustomer188b774c()
    {
        return $this->b2b_customer_188b774c;
    }

    public function __construct()
    {
    }

    private function resetCustomerTargets()
    {
        $this->customer_e197f906 = null;
        $this->b2b_customer_188b774c = null;
        $this->customer_f2bbc387 = null;
    }
}