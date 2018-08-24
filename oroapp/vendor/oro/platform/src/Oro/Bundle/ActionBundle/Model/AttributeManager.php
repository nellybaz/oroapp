<?php

namespace Oro\Bundle\ActionBundle\Model;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

use Oro\Bundle\ActionBundle\Exception\UnknownAttributeException;

class AttributeManager
{
    /**
     * @var string
     */
    protected $entityAttributeName;

    /**
     * @var Attribute[]|Collection
     */
    protected $attributes;

    /**
     * @param Attribute[]|Collection $attributes
     */
    public function __construct($attributes = null)
    {
        $this->setAttributes($attributes);
    }

    /**
     * @param string $entityAttributeName
     * @return AttributeManager
     */
    public function setEntityAttributeName($entityAttributeName)
    {
        $this->entityAttributeName = $entityAttributeName;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntityAttributeName()
    {
        return $this->entityAttributeName;
    }

    /**
     * @return Attribute[]|Collection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param Attribute[]|Collection $attributes
     * @return AttributeManager
     */
    public function setAttributes($attributes)
    {
        $data = array();
        if ($attributes) {
            foreach ($attributes as $attribute) {
                $data[$attribute->getName()] = $attribute;
            }
            unset($attributes);
        }
        $this->attributes = new ArrayCollection($data);

        return $this;
    }

    /**
     * @param string $attributeName
     * @return Attribute
     */
    public function getAttribute($attributeName)
    {
        return $this->attributes->get($attributeName);
    }

    /**
     * Get related entity attribute
     *
     * @return Attribute
     * @throws UnknownAttributeException
     */
    public function getEntityAttribute()
    {
        if (!$this->attributes->containsKey($this->entityAttributeName)) {
            throw new UnknownAttributeException('There is no entity attribute');
        }

        return $this->attributes->get($this->entityAttributeName);
    }

    /**
     * @param string $type
     * @return Collection|Attribute[]
     */
    public function getAttributesByType($type)
    {
        return $this->attributes->filter(
            function ($attribute) use ($type) {
                /** @var Attribute $attribute */
                return $attribute->getType() == $type;
            }
        );
    }

    /**
     * Get list of all attributes with type entity
     *
     * @return Collection|Attribute[]
     */
    public function getEntityAttributes()
    {
        return $this->getAttributesByType('entity');
    }
}
