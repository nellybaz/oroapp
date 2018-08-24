<?php

namespace Oro\Bundle\ApiBundle\Form\Guesser;

use Symfony\Component\Form\FormTypeGuesserInterface;
use Symfony\Component\Form\Guess\TypeGuess;

use Oro\Bundle\ApiBundle\Collection\IncludedEntityCollection;
use Oro\Bundle\ApiBundle\Config\ConfigAccessorInterface;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionFieldConfig;
use Oro\Bundle\ApiBundle\Metadata\AssociationMetadata;
use Oro\Bundle\ApiBundle\Metadata\EntityMetadata;
use Oro\Bundle\ApiBundle\Metadata\MetadataAccessorInterface;
use Oro\Bundle\ApiBundle\Request\DataType;
use Oro\Bundle\ApiBundle\Util\DoctrineHelper;

class MetadataTypeGuesser implements FormTypeGuesserInterface
{
    /** @var array [data type => [form type, options], ...] */
    protected $dataTypeMappings = [];

    /** @var DoctrineHelper */
    protected $doctrineHelper;

    /** @var MetadataAccessorInterface|null */
    protected $metadataAccessor;

    /** @var ConfigAccessorInterface|null */
    protected $configAccessor;

    /** @var IncludedEntityCollection|null */
    protected $includedEntities;

    /**
     * @param array          $dataTypeMappings [data type => [form type, options], ...]
     * @param DoctrineHelper $doctrineHelper
     */
    public function __construct(array $dataTypeMappings, DoctrineHelper $doctrineHelper)
    {
        $this->dataTypeMappings = $dataTypeMappings;
        $this->doctrineHelper = $doctrineHelper;
    }

    /**
     * @return MetadataAccessorInterface|null
     */
    public function getMetadataAccessor()
    {
        return $this->metadataAccessor;
    }

    /**
     * @param MetadataAccessorInterface|null $metadataAccessor
     */
    public function setMetadataAccessor(MetadataAccessorInterface $metadataAccessor = null)
    {
        $this->metadataAccessor = $metadataAccessor;
    }

    /**
     * @return ConfigAccessorInterface|null
     */
    public function getConfigAccessor()
    {
        return $this->configAccessor;
    }

    /**
     * @param ConfigAccessorInterface|null $configAccessor
     */
    public function setConfigAccessor(ConfigAccessorInterface $configAccessor = null)
    {
        $this->configAccessor = $configAccessor;
    }

    /**
     * @return IncludedEntityCollection|null
     */
    public function getIncludedEntities()
    {
        return $this->includedEntities;
    }

    /**
     * @param IncludedEntityCollection|null $includedEntities
     */
    public function setIncludedEntities(IncludedEntityCollection $includedEntities = null)
    {
        $this->includedEntities = $includedEntities;
    }

    /**
     * @param string $dataType
     * @param string $formType
     * @param array  $formOptions
     */
    public function addDataTypeMapping($dataType, $formType, array $formOptions = [])
    {
        $this->dataTypeMappings[$dataType] = [$formType, $formOptions];
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($class, $property)
    {
        $metadata = $this->getMetadataForClass($class);
        if (null !== $metadata) {
            if ($metadata->hasField($property)) {
                return $this->getTypeGuessForField($metadata->getField($property)->getDataType());
            } elseif ($metadata->hasAssociation($property)) {
                $association = $metadata->getAssociation($property);
                if (DataType::isAssociationAsField($association->getDataType())) {
                    $fieldConfig = $this->getFieldConfig($class, $property);
                    if (null !== $fieldConfig) {
                        if (DataType::isNestedObject($fieldConfig->getDataType())) {
                            return $this->getTypeGuessForNestedObjectAssociation($association, $fieldConfig);
                        }
                        if (!$association->isCollapsed()) {
                            return $this->getTypeGuessForArrayAssociation($association, $fieldConfig);
                        }
                    }
                    if ($association->isCollapsed()) {
                        return $this->getTypeGuessForCollapsedArrayAssociation($association);
                    } else {
                        return null;
                    }
                } else {
                    $fieldConfig = $this->getFieldConfig($class, $property);
                    if (null !== $fieldConfig && DataType::isNestedAssociation($fieldConfig->getDataType())) {
                        return $this->getTypeGuessForNestedAssociation($association, $fieldConfig);
                    }
                }

                return $this->getTypeGuessForAssociation($association);
            }
        }

        return $this->createDefaultTypeGuess();
    }

    /**
     * {@inheritdoc}
     */
    public function guessRequired($class, $property)
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function guessMaxLength($class, $property)
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function guessPattern($class, $property)
    {
        return null;
    }

    /**
     * @param string $class
     *
     * @return EntityMetadata|null
     */
    protected function getMetadataForClass($class)
    {
        return null !== $this->metadataAccessor
            ? $this->metadataAccessor->getMetadata($class)
            : null;
    }

    /**
     * @param string $class
     *
     * @return EntityDefinitionConfig|null
     */
    protected function getConfigForClass($class)
    {
        return null !== $this->configAccessor
            ? $this->configAccessor->getConfig($class)
            : null;
    }

    /**
     * @param string $class
     * @param string $property
     *
     * @return EntityDefinitionFieldConfig|null
     */
    protected function getFieldConfig($class, $property)
    {
        $config = $this->getConfigForClass($class);

        return null !== $config
            ? $config->getField($property)
            : null;
    }

    /**
     * @param string $formType
     * @param array  $formOptions
     * @param int    $confidence
     *
     * @return TypeGuess
     */
    protected function createTypeGuess($formType, array $formOptions, $confidence)
    {
        return new TypeGuess($formType, $formOptions, $confidence);
    }

    /**
     * @return TypeGuess
     */
    protected function createDefaultTypeGuess()
    {
        return $this->createTypeGuess('text', [], TypeGuess::LOW_CONFIDENCE);
    }

    /**
     * @param string $dataType
     *
     * @return TypeGuess
     */
    protected function getTypeGuessForField($dataType)
    {
        if (!isset($this->dataTypeMappings[$dataType])) {
            return $this->createDefaultTypeGuess();
        }

        list($formType, $options) = $this->dataTypeMappings[$dataType];

        return $this->createTypeGuess($formType, $options, TypeGuess::HIGH_CONFIDENCE);
    }

    /**
     * @param AssociationMetadata $metadata
     *
     * @return TypeGuess|null
     */
    protected function getTypeGuessForAssociation(AssociationMetadata $metadata)
    {
        return $this->createTypeGuess(
            'oro_api_entity',
            ['metadata' => $metadata, 'included_entities' => $this->includedEntities],
            TypeGuess::HIGH_CONFIDENCE
        );
    }

    /**
     * @param AssociationMetadata         $metadata
     * @param EntityDefinitionFieldConfig $config
     *
     * @return TypeGuess|null
     */
    protected function getTypeGuessForArrayAssociation(
        AssociationMetadata $metadata,
        EntityDefinitionFieldConfig $config
    ) {
        $targetMetadata = $metadata->getTargetMetadata();
        if (null === $targetMetadata) {
            return null;
        }

        $formType = $this->doctrineHelper->isManageableEntityClass($targetMetadata->getClassName())
            ? 'oro_api_entity_collection'
            : 'oro_api_collection';

        return $this->createTypeGuess(
            $formType,
            [
                'entry_data_class' => $targetMetadata->getClassName(),
                'entry_type'       => 'oro_api_compound_object',
                'entry_options'    => [
                    'metadata' => $targetMetadata,
                    'config'   => $config->getTargetEntity()
                ]
            ],
            TypeGuess::HIGH_CONFIDENCE
        );
    }

    /**
     * @param AssociationMetadata         $metadata
     * @param EntityDefinitionFieldConfig $config
     *
     * @return TypeGuess
     */
    protected function getTypeGuessForNestedObjectAssociation(
        AssociationMetadata $metadata,
        EntityDefinitionFieldConfig $config
    ) {
        return $this->createTypeGuess(
            'oro_api_compound_object',
            array_merge(
                $config->getFormOptions(),
                [
                    'metadata' => $metadata->getTargetMetadata(),
                    'config'   => $config->getTargetEntity()
                ]
            ),
            TypeGuess::HIGH_CONFIDENCE
        );
    }

    /**
     * @param AssociationMetadata $metadata
     *
     * @return TypeGuess|null
     */
    protected function getTypeGuessForCollapsedArrayAssociation(AssociationMetadata $metadata)
    {
        $targetMetadata = $metadata->getTargetMetadata();
        if (null === $targetMetadata) {
            return null;
        }

        // it is expected that collapsed association must have only one field or association
        $fieldNames = array_keys($targetMetadata->getFields());
        $targetFieldName = reset($fieldNames);
        if (!$targetFieldName) {
            $associationNames = array_keys($targetMetadata->getAssociations());
            $targetFieldName = reset($associationNames);
        }
        if (!$targetFieldName) {
            return null;
        }

        $formType = $this->doctrineHelper->isManageableEntityClass($targetMetadata->getClassName())
            ? 'oro_api_entity_scalar_collection'
            : 'oro_api_scalar_collection';

        return $this->createTypeGuess(
            $formType,
            [
                'entry_data_class'    => $targetMetadata->getClassName(),
                'entry_data_property' => $targetFieldName,
            ],
            TypeGuess::HIGH_CONFIDENCE
        );
    }

    /**
     * @param AssociationMetadata         $metadata
     * @param EntityDefinitionFieldConfig $config
     *
     * @return TypeGuess|null
     */
    protected function getTypeGuessForNestedAssociation(
        AssociationMetadata $metadata,
        EntityDefinitionFieldConfig $config
    ) {
        return $this->createTypeGuess(
            'oro_api_nested_association',
            ['metadata' => $metadata, 'config' => $config],
            TypeGuess::HIGH_CONFIDENCE
        );
    }
}
