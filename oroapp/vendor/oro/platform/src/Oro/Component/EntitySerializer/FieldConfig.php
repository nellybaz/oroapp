<?php

namespace Oro\Component\EntitySerializer;

use Symfony\Component\Form\DataTransformerInterface as FormDataTransformerInterface;

class FieldConfig
{
    /** a flag indicates whether the field should be excluded */
    const EXCLUDE = 'exclude';

    /**
     * a flag indicates whether the target entity should be collapsed;
     * it means that target entity should be returned as a value, instead of an array with values of entity fields;
     * usually it is used to get identifier of the related entity
     */
    const COLLAPSE = 'collapse';

    /** the path of the field value */
    const PROPERTY_PATH = 'property_path';

    /** the data transformer to be applies to the field value */
    const DATA_TRANSFORMER = 'data_transformer';

    /** @var array */
    protected $items = [];

    /** @var EntityConfig|null */
    private $targetEntity;

    /**
     * Gets a native PHP array representation of the field configuration.
     *
     * @param bool $excludeTargetEntity
     *
     * @return array
     */
    public function toArray($excludeTargetEntity = false)
    {
        $result = $this->items;

        if (!$excludeTargetEntity && null !== $this->targetEntity) {
            $result = array_merge($result, $this->targetEntity->toArray());
        }

        return $result;
    }

    /**
     * Indicates whether the field does not have a configuration.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return
            empty($this->items)
            && (null === $this->targetEntity || $this->targetEntity->isEmpty());
    }

    /**
     * Make a deep copy of object.
     */
    public function __clone()
    {
        $this->items = ConfigUtil::cloneItems($this->items);
        if (null !== $this->targetEntity) {
            $this->targetEntity = clone $this->targetEntity;
        }
    }

    /**
     * Gets the configuration of the target entity if the field represents an association with another entity.
     *
     * @return EntityConfig|null
     */
    public function getTargetEntity()
    {
        return $this->targetEntity;
    }

    /**
     * Sets the configuration of the target entity.
     * Use this method only if the field represents an association with another entity.
     *
     * @param EntityConfig|null $targetEntity
     *
     * @return EntityConfig|null
     */
    public function setTargetEntity($targetEntity = null)
    {
        $this->targetEntity = $targetEntity;

        return $this->targetEntity;
    }

    /**
     * Indicates whether the field should be excluded.
     *
     * @return bool
     */
    public function isExcluded()
    {
        if (!array_key_exists(self::EXCLUDE, $this->items)) {
            return false;
        }

        return $this->items[self::EXCLUDE];
    }

    /**
     * Sets a flag indicates whether the field should be excluded.
     *
     * @param bool $exclude
     */
    public function setExcluded($exclude = true)
    {
        if ($exclude) {
            $this->items[self::EXCLUDE] = $exclude;
        } else {
            unset($this->items[self::EXCLUDE]);
        }
    }

    /**
     * Indicates whether the target entity should be collapsed.
     *
     * @return bool
     */
    public function isCollapsed()
    {
        if (!array_key_exists(self::COLLAPSE, $this->items)) {
            return false;
        }

        return $this->items[self::COLLAPSE];
    }

    /**
     * Sets a flag indicates whether the target entity should be collapsed.
     *
     * @param bool $collapse
     */
    public function setCollapsed($collapse = true)
    {
        if ($collapse) {
            $this->items[self::COLLAPSE] = $collapse;
        } else {
            unset($this->items[self::COLLAPSE]);
        }
    }

    /**
     * Gets the path of the field value.
     *
     * @param string|null $defaultValue
     *
     * @return string|null
     */
    public function getPropertyPath($defaultValue = null)
    {
        if (empty($this->items[self::PROPERTY_PATH])) {
            return $defaultValue;
        }

        return $this->items[self::PROPERTY_PATH];
    }

    /**
     * Sets the path of the field value.
     *
     * @param string|null $propertyPath
     */
    public function setPropertyPath($propertyPath = null)
    {
        if ($propertyPath) {
            $this->items[self::PROPERTY_PATH] = $propertyPath;
        } else {
            unset($this->items[self::PROPERTY_PATH]);
        }
    }

    /**
     * Gets a list of data transformers that should be applied to the field value.
     * Please note that these data transformers work only during loading of data
     * and they are applicable only to fields. For associations they do not work.
     *
     * @return array Each item of the array can be the id of a service in DIC, an instance of
     *               "Oro\Component\EntitySerializer\DataTransformerInterface" or
     *               "Symfony\Component\Form\DataTransformerInterface",
     *               or function ($class, $property, $value, $config, $context) : mixed.
     */
    public function getDataTransformers()
    {
        if (!array_key_exists(self::DATA_TRANSFORMER, $this->items)) {
            return [];
        }

        return $this->items[self::DATA_TRANSFORMER];
    }

    /**
     * Adds the data transformer to be applies to the field value.
     *
     * The data transformer can be the id of a service in DIC or an instance of
     * "Oro\Component\EntitySerializer\DataTransformerInterface" or
     * "Symfony\Component\Form\DataTransformerInterface",
     * or function ($class, $property, $value, $config, $context) : mixed.
     *
     * Please note that these data transformers work only during loading of data
     * and they are applicable only to fields. For associations they do not work.
     *
     * @param string|callable|DataTransformerInterface|FormDataTransformerInterface $dataTransformer
     */
    public function addDataTransformer($dataTransformer)
    {
        $transformers = $this->getDataTransformers();
        $transformers[] = $dataTransformer;

        $this->items[self::DATA_TRANSFORMER] = $transformers;
    }
}
