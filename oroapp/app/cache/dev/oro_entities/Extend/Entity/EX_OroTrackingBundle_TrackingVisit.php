<?php

namespace Extend\Entity;

abstract class EX_OroTrackingBundle_TrackingVisit implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $customer_7c2d0d96;

    /**
     * Checks if this entity can be associated with the given target entity type
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportIdentifierTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { return true; }
        return false;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    /**
     * Sets the entity this entity is associated with
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function setIdentifierTarget($target)
    {
        if (null === $target) { $this->resetIdentifierTargets(); return $this; }
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        // This entity can be associated with only one another entity
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { $this->resetIdentifierTargets(); $this->customer_7c2d0d96 = $target; return $this; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function setCustomer7c2d0d96($value)
    {
        $this->customer_7c2d0d96 = $value; return $this;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * Returns array with all associated entities
     *
     * @return array
     * @deprecated since 2.0. Method "getIdentifierTarget" should be used instead
     */
    public function getIdentifierTargetEntities()
    {
        $associationEntities = [];
        $entity = $this->customer_7c2d0d96;
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
    public function getIdentifierTarget()
    {
        if (null !== $this->customer_7c2d0d96) { return $this->customer_7c2d0d96; }
        return null;
    }

    public function getCustomer7c2d0d96()
    {
        return $this->customer_7c2d0d96;
    }

    public function __construct()
    {
    }

    private function resetIdentifierTargets()
    {
        $this->customer_7c2d0d96 = null;
    }
}