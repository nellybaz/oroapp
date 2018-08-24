<?php

namespace Oro\Bundle\EntityMergeBundle\Data;

use Oro\Bundle\EntityMergeBundle\Metadata\EntityMetadata;
use Oro\Bundle\EntityMergeBundle\Metadata\FieldMetadata;
use Oro\Bundle\EntityMergeBundle\Exception\InvalidArgumentException;
use Oro\Bundle\EntityMergeBundle\Exception\OutOfBoundsException;

class EntityData
{
    /**
     * @var EntityMetadata
     */
    protected $metadata;

    /**
     * @var object[]
     */
    protected $entities = array();

    /**
     * @var object
     */
    protected $masterEntity;

    /**
     * @var FieldData[]
     */
    protected $fields = array();

    /**
     * @param EntityMetadata $metadata
     * @param array $entities
     */
    public function __construct(EntityMetadata $metadata, array $entities)
    {
        $this->metadata = $metadata;
        $this->setEntities($entities);

        foreach ($metadata->getFieldsMetadata() as $fieldMetadata) {
            $this->addNewField($fieldMetadata);
        }
    }

    /**
     * Get merge metadata
     *
     * @return EntityMetadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set entities to merge
     *
     * @param object[] $entities
     * @return EntityData
     */
    protected function setEntities(array $entities)
    {
        $this->masterEntity = null;
        $this->entities = array();
        foreach ($entities as $entity) {
            $this->addEntity($entity);
        }

        return $this;
    }

    /**
     * Add entity to merge
     *
     * @param object $entity
     * @throws InvalidArgumentException
     * @return EntityData
     */
    public function addEntity($entity)
    {
        $this->entities[] = $entity;

        return $this;
    }

    /**
     * Get entities to merge
     *
     * @return object[]
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * Get entities by offset
     *
     * @param int $offset
     * @return object
     * @throws OutOfBoundsException
     */
    public function getEntityByOffset($offset)
    {
        if (!is_numeric($offset) || !isset($this->entities[$offset])) {
            throw new OutOfBoundsException(sprintf('"%s" is illegal offset for getting entity.', $offset));
        }
        return $this->entities[$offset];
    }

    /**
     * Get entity class name
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->getMetadata()->getClassName();
    }

    /**
     * Set master entity. This entity will be used to update values, all other entities will be deleted.
     *
     * @param object $entity
     * @return EntityData
     */
    public function setMasterEntity($entity)
    {
        $this->masterEntity = $entity;

        return $this;
    }

    /**
     * Get master entity
     *
     * @return object
     */
    public function getMasterEntity()
    {
        return $this->masterEntity;
    }

    /**
     * Add field merge data
     *
     * @param FieldMetadata $metadata
     * @return FieldData
     */
    protected function addNewField(FieldMetadata $metadata)
    {
        $field = new FieldData($this, $metadata);
        $this->fields[$field->getFieldName()] = $field;

        return $field;
    }

    /**
     * Checks if field merge data was added
     *
     * @param string $fieldName
     * @return bool
     */
    public function hasField($fieldName)
    {
        return !empty($this->fields[$fieldName]);
    }

    /**
     * Gets field merge data by field name
     *
     * @param string $fieldName
     * @return FieldData
     * @throws InvalidArgumentException If such field is not exist
     */
    public function getField($fieldName)
    {
        if (!$this->hasField($fieldName)) {
            throw new InvalidArgumentException(sprintf('Field "%s" not exist.', $fieldName));
        }
        return $this->fields[$fieldName];
    }

    /**
     * Get all fields
     *
     * @return FieldData[]
     */
    public function getFields()
    {
        return $this->fields;
    }
}
