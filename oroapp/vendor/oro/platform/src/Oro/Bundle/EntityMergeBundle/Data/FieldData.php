<?php

namespace Oro\Bundle\EntityMergeBundle\Data;

use Oro\Bundle\EntityMergeBundle\Model\MergeModes;
use Oro\Bundle\EntityMergeBundle\Metadata\FieldMetadata;

class FieldData
{
    /**
     * @var EntityData
     */
    protected $entityData;

    /**
     * @var FieldMetadata
     */
    protected $metadata;

    /**
     * @var object
     */
    protected $sourceEntity;

    /**
     * @var string
     */
    protected $mode = MergeModes::REPLACE;

    /**
     * @param EntityData $entityData
     * @param FieldMetadata $metadata
     */
    public function __construct(EntityData $entityData, FieldMetadata $metadata)
    {
        $this->entityData = $entityData;
        $this->metadata = $metadata;
        if ($metadata->getMergeMode()) {
            $this->mode = $metadata->getMergeMode();
        }
    }

    /**
     * Get entity merge data
     *
     * @return EntityData
     */
    public function getEntityData()
    {
        return $this->entityData;
    }

    /**
     * Get merge metadata
     *
     * @return FieldMetadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Get field name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->getMetadata()->getFieldName();
    }

    /**
     * Set source entity
     *
     * @param object $entity
     * @return FieldData
     */
    public function setSourceEntity($entity)
    {
        $this->sourceEntity = $entity;

        return $this;
    }

    /**
     * Get source entity
     *
     * @return object
     */
    public function getSourceEntity()
    {
        return $this->sourceEntity;
    }

    /**
     * Set field merge mode
     *
     * @param $mode
     * @return FieldData
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }
}
