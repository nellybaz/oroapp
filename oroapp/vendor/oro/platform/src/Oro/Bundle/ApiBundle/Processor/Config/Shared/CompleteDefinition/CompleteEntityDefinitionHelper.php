<?php

namespace Oro\Bundle\ApiBundle\Processor\Config\Shared\CompleteDefinition;

use Doctrine\ORM\Mapping\ClassMetadata;

use Oro\Bundle\ApiBundle\Config\ConfigExtraInterface;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionFieldConfig;
use Oro\Bundle\ApiBundle\Config\ExpandRelatedEntitiesConfigExtra;
use Oro\Bundle\ApiBundle\Config\FilterIdentifierFieldsConfigExtra;
use Oro\Bundle\ApiBundle\Processor\Config\ConfigContext;
use Oro\Bundle\ApiBundle\Provider\ExpandedAssociationExtractor;
use Oro\Bundle\ApiBundle\Request\ApiActions;
use Oro\Bundle\ApiBundle\Request\DataType;
use Oro\Bundle\ApiBundle\Request\RequestType;
use Oro\Bundle\ApiBundle\Util\ConfigUtil;
use Oro\Bundle\ApiBundle\Util\DoctrineHelper;
use Oro\Bundle\ApiBundle\Util\EntityIdHelper;
use Oro\Bundle\EntityBundle\Provider\ExclusionProviderInterface;

/**
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class CompleteEntityDefinitionHelper
{
    /** @var DoctrineHelper */
    protected $doctrineHelper;

    /** @var EntityIdHelper */
    protected $entityIdHelper;

    /** @var CompleteAssociationHelper */
    protected $associationHelper;

    /** @var CompleteCustomAssociationHelper */
    protected $customAssociationHelper;

    /** @var ExclusionProviderInterface */
    protected $exclusionProvider;

    /** @var ExpandedAssociationExtractor */
    protected $expandedAssociationExtractor;

    /**
     * @param DoctrineHelper                  $doctrineHelper
     * @param EntityIdHelper                  $entityIdHelper
     * @param CompleteAssociationHelper       $associationHelper
     * @param CompleteCustomAssociationHelper $customAssociationHelper
     * @param ExclusionProviderInterface      $exclusionProvider
     * @param ExpandedAssociationExtractor    $expandedAssociationExtractor
     */
    public function __construct(
        DoctrineHelper $doctrineHelper,
        EntityIdHelper $entityIdHelper,
        CompleteAssociationHelper $associationHelper,
        CompleteCustomAssociationHelper $customAssociationHelper,
        ExclusionProviderInterface $exclusionProvider,
        ExpandedAssociationExtractor $expandedAssociationExtractor
    ) {
        $this->doctrineHelper = $doctrineHelper;
        $this->entityIdHelper = $entityIdHelper;
        $this->associationHelper = $associationHelper;
        $this->customAssociationHelper = $customAssociationHelper;
        $this->exclusionProvider = $exclusionProvider;
        $this->expandedAssociationExtractor = $expandedAssociationExtractor;
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param ConfigContext          $context
     */
    public function completeDefinition(
        EntityDefinitionConfig $definition,
        ConfigContext $context
    ) {
        $existingFields = $this->getExistingFields($definition);
        $metadata = $this->doctrineHelper->getEntityMetadataForClass($context->getClassName());
        if ($context->hasExtra(FilterIdentifierFieldsConfigExtra::NAME)) {
            $this->completeIdentifierFields($definition, $metadata, $existingFields);
        } else {
            $version = $context->getVersion();
            $requestType = $context->getRequestType();
            $expandedEntities = $this->getExpandedEntities(
                $definition,
                $context->get(ExpandRelatedEntitiesConfigExtra::NAME)
            );
            $this->completeCustomAssociations($definition, $metadata, $version, $requestType);
            $this->completeUnidirectionalAssociations(
                $definition,
                $metadata,
                $expandedEntities,
                $version,
                $requestType
            );
            $this->completeAssociations(
                $definition,
                $metadata,
                $existingFields,
                $expandedEntities,
                $version,
                $requestType
            );
            $this->completeDependentAssociations($definition, $metadata, $version, $requestType);
            $this->completeFields($definition, $metadata, $existingFields);
        }
        // make sure that identifier field names are set
        $idFieldNames = $definition->getIdentifierFieldNames();
        if (empty($idFieldNames)) {
            $this->setIdentifierFieldNames($definition, $metadata);
        } else {
            $this->completeCustomIdentifier($definition, $metadata, $context->getTargetAction());
        }
        // make sure "class name" meta field is added for entity with table inheritance
        if ($metadata->inheritanceType !== ClassMetadata::INHERITANCE_TYPE_NONE) {
            $this->addClassNameField($definition);
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     *
     * @return array [property path => field name, ...]
     */
    protected function getExistingFields(EntityDefinitionConfig $definition)
    {
        $existingFields = [];
        $fields = $definition->getFields();
        foreach ($fields as $fieldName => $field) {
            $propertyPath = $field->getPropertyPath();
            if (empty($propertyPath) || ConfigUtil::IGNORE_PROPERTY_PATH === $propertyPath) {
                $propertyPath = $fieldName;
            }
            $existingFields[$propertyPath] = $fieldName;
        }

        return $existingFields;
    }

    /**
     * @param EntityDefinitionConfig $definition
     */
    protected function addClassNameField(EntityDefinitionConfig $definition)
    {
        $classNameField = $definition->findFieldNameByPropertyPath(ConfigUtil::CLASS_NAME);
        if (null === $classNameField) {
            $classNameField = $definition->addField(ConfigUtil::CLASS_NAME);
            $classNameField->setMetaProperty(true);
            $classNameField->setDataType(DataType::STRING);
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param ClassMetadata          $metadata
     */
    protected function setIdentifierFieldNames(EntityDefinitionConfig $definition, ClassMetadata $metadata)
    {
        $idFieldNames = [];
        $propertyPaths = $metadata->getIdentifierFieldNames();
        foreach ($propertyPaths as $propertyPath) {
            $idFieldNames[] = $definition->findFieldNameByPropertyPath($propertyPath) ?: $propertyPath;
        }
        $definition->setIdentifierFieldNames($idFieldNames);
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param ClassMetadata          $metadata
     * @param string|null            $targetAction
     */
    protected function completeCustomIdentifier(
        EntityDefinitionConfig $definition,
        ClassMetadata $metadata,
        $targetAction
    ) {
        if ($metadata->usesIdGenerator()
            && (ApiActions::CREATE === $targetAction || ApiActions::UPDATE === $targetAction)
            && !$this->entityIdHelper->isEntityIdentifierEqual($metadata->getIdentifierFieldNames(), $definition)
        ) {
            $propertyPaths = $metadata->getIdentifierFieldNames();
            foreach ($propertyPaths as $propertyPath) {
                $field = $definition->findField($propertyPath, true);
                if (null !== $field) {
                    $formOptions = $field->getFormOptions();
                    if (null === $formOptions || !array_key_exists('mapped', $formOptions)) {
                        $formOptions['mapped'] = false;
                        $field->setFormOptions($formOptions);
                    }
                }
            }
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param ClassMetadata          $metadata
     * @param array                  $existingFields [property path => field name, ...]
     */
    protected function completeIdentifierFields(
        EntityDefinitionConfig $definition,
        ClassMetadata $metadata,
        array $existingFields
    ) {
        // get identifier fields
        $configuredIdFieldNames = $definition->getIdentifierFieldNames();
        if (empty($configuredIdFieldNames)) {
            $idFieldNames = $metadata->getIdentifierFieldNames();
        } else {
            $idFieldNames = [];
            foreach ($configuredIdFieldNames as $fieldName) {
                $field = $definition->getField($fieldName);
                if (null !== $field) {
                    $propertyPath = $field->getPropertyPath();
                    if ($propertyPath) {
                        $fieldName = $propertyPath;
                    }
                }
                $idFieldNames[] = $fieldName;
            }
        }
        // remove all not identifier fields
        foreach ($existingFields as $propertyPath => $fieldName) {
            if (!in_array($propertyPath, $idFieldNames, true)
                && !$definition->getField($fieldName)->isMetaProperty()
            ) {
                $definition->removeField($fieldName);
            }
        }
        // make sure all identifier fields are added
        foreach ($idFieldNames as $propertyPath) {
            if (!isset($existingFields[$propertyPath])) {
                $definition->addField($propertyPath);
            }
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param ClassMetadata          $metadata
     * @param array                  $existingFields [property path => field name, ...]
     */
    protected function completeFields(
        EntityDefinitionConfig $definition,
        ClassMetadata $metadata,
        array $existingFields
    ) {
        $fieldNames = $metadata->getFieldNames();
        foreach ($fieldNames as $propertyPath) {
            if (isset($existingFields[$propertyPath])) {
                $field = $definition->getField($existingFields[$propertyPath]);
            } else {
                $field = $definition->addField($propertyPath);
            }
            if (!$field->hasExcluded()
                && !$field->isExcluded()
                && $this->exclusionProvider->isIgnoredField($metadata, $propertyPath)
            ) {
                $field->setExcluded();
            }
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param ClassMetadata          $metadata
     * @param array                  $existingFields   [property path => field name, ...]
     * @param array                  $expandedEntities [field name => [path, ...], ...]
     * @param string                 $version
     * @param RequestType            $requestType
     */
    protected function completeAssociations(
        EntityDefinitionConfig $definition,
        ClassMetadata $metadata,
        array $existingFields,
        array $expandedEntities,
        $version,
        RequestType $requestType
    ) {
        $associations = $metadata->getAssociationMappings();
        foreach ($associations as $propertyPath => $mapping) {
            if (isset($existingFields[$propertyPath])) {
                $fieldName = $existingFields[$propertyPath];
                $field = $definition->getField($fieldName);
            } else {
                $fieldName = $propertyPath;
                $field = $definition->addField($fieldName);
            }
            if (!$field->hasExcluded()
                && !$field->isExcluded()
                && $this->exclusionProvider->isIgnoredRelation($metadata, $propertyPath)
            ) {
                $field->setExcluded();
            }
            $this->completeAssociation(
                $field,
                $mapping,
                $version,
                $requestType,
                $this->getAssociationConfigExtras($fieldName, $expandedEntities)
            );
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param ClassMetadata          $metadata
     * @param array                  $expandedEntities [field name => [path, ...], ...]
     * @param string                 $version
     * @param RequestType            $requestType
     */
    protected function completeUnidirectionalAssociations(
        EntityDefinitionConfig $definition,
        ClassMetadata $metadata,
        array $expandedEntities,
        $version,
        RequestType $requestType
    ) {
        $associationNames = $metadata->getAssociationNames();
        $fields = $definition->getFields();
        foreach ($fields as $fieldName => $field) {
            $targetClass = $field->getTargetClass();
            if ($targetClass && $field->hasTargetType() && !$field->hasDataType()) {
                $propertyPath = $field->getPropertyPath($fieldName);
                if (!in_array($propertyPath, $associationNames, true)) {
                    $this->associationHelper->completeAssociation(
                        $field,
                        $targetClass,
                        $version,
                        $requestType,
                        $this->getAssociationConfigExtras($fieldName, $expandedEntities)
                    );
                }
            }
        }
    }

    /**
     * @param string $fieldName
     * @param array  $expandedEntities [field name => [path, ...], ...]
     *
     * @return array
     */
    protected function getAssociationConfigExtras($fieldName, array $expandedEntities)
    {
        $extras = [];
        if (!empty($expandedEntities[$fieldName])) {
            $extras[] = new ExpandRelatedEntitiesConfigExtra($expandedEntities[$fieldName]);
        }

        return $extras;
    }

    /**
     * @param EntityDefinitionFieldConfig $field
     * @param array                       $associationMapping
     * @param string                      $version
     * @param RequestType                 $requestType
     * @param ConfigExtraInterface[]      $extras
     */
    protected function completeAssociation(
        EntityDefinitionFieldConfig $field,
        array $associationMapping,
        $version,
        RequestType $requestType,
        array $extras = []
    ) {
        $this->associationHelper->completeAssociation(
            $field,
            $associationMapping['targetEntity'],
            $version,
            $requestType,
            $extras
        );
        if ($field->getTargetClass()) {
            $field->setTargetType(
                $this->associationHelper->getAssociationTargetType(
                    !($associationMapping['type'] & ClassMetadata::TO_ONE)
                )
            );
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param ClassMetadata          $metadata
     * @param string                 $version
     * @param RequestType            $requestType
     */
    protected function completeCustomAssociations(
        EntityDefinitionConfig $definition,
        ClassMetadata $metadata,
        $version,
        RequestType $requestType
    ) {
        $this->customAssociationHelper->completeCustomAssociations(
            $metadata->name,
            $definition,
            $version,
            $requestType
        );
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param ClassMetadata          $metadata
     * @param string                 $version
     * @param RequestType            $requestType
     */
    protected function completeDependentAssociations(
        EntityDefinitionConfig $definition,
        ClassMetadata $metadata,
        $version,
        RequestType $requestType
    ) {
        $fields = $definition->getFields();
        foreach ($fields as $field) {
            $propertyPath = $field->getPropertyPath();
            if ($propertyPath && false !== strpos($propertyPath, ConfigUtil::PATH_DELIMITER)) {
                $this->completeDependentAssociation(
                    $definition,
                    $metadata,
                    $propertyPath,
                    $version,
                    $requestType
                );
                $formOptions = $field->getFormOptions();
                if (null === $formOptions || !array_key_exists('mapped', $formOptions)) {
                    $formOptions['mapped'] = false;
                    $field->setFormOptions($formOptions);
                }
            }
            $dependsOn = $field->getDependsOn();
            if (!empty($dependsOn)) {
                foreach ($dependsOn as $dependsOnFieldName) {
                    $this->completeDependentAssociation(
                        $definition,
                        $metadata,
                        $dependsOnFieldName,
                        $version,
                        $requestType
                    );
                }
            }
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param ClassMetadata          $metadata
     * @param string                 $propertyPath
     * @param string                 $version
     * @param RequestType            $requestType
     */
    protected function completeDependentAssociation(
        EntityDefinitionConfig $definition,
        ClassMetadata $metadata,
        $propertyPath,
        $version,
        RequestType $requestType
    ) {
        $targetDefinition = $definition;
        $targetClassName = $metadata->name;
        $targetMetadata = $metadata;
        $path = ConfigUtil::explodePropertyPath($propertyPath);
        $i = 0;
        foreach ($path as $targetFieldName) {
            $targetField = $targetDefinition->getField($targetFieldName);
            if (null === $targetField) {
                $targetEntityDefinition = $this->associationHelper->loadDefinition(
                    $targetClassName,
                    $version,
                    $requestType
                );

                $targetField = $targetDefinition->addField(
                    $targetFieldName,
                    $targetEntityDefinition->getField($targetFieldName)
                );
                $targetField->setExcluded();

                $dependsOn = $targetField->getDependsOn();
                if (!empty($dependsOn)) {
                    foreach ($dependsOn as $dependsOnFieldName) {
                        $dependsOnField = $targetEntityDefinition->getField($dependsOnFieldName);
                        if (null !== $dependsOnField) {
                            $targetDefinition->addField($dependsOnFieldName, $dependsOnField);
                            $dependsOnField->setExcluded();
                        }
                    }
                }
            }

            $i++;
            if ($i >= count($path)) {
                break;
            }

            $targetClassName = $targetField->getTargetClass();
            if (!$targetClassName && null !== $targetMetadata && $targetMetadata->hasAssociation($targetFieldName)) {
                $targetClassName = $targetMetadata->getAssociationTargetClass($targetFieldName);
                $targetMetadata = $this->doctrineHelper->getEntityMetadataForClass($targetClassName, false);
            }

            if (!$targetClassName) {
                break;
            }

            $targetDefinition = $targetField->getOrCreateTargetEntity();
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param string[]|null          $expandedEntities [path, ...]
     *
     * @return array [field name => [path, ...], ...]
     */
    protected function getExpandedEntities(EntityDefinitionConfig $definition, $expandedEntities)
    {
        if (empty($expandedEntities)) {
            return [];
        }

        return $this->expandedAssociationExtractor->getFirstLevelOfExpandedAssociations(
            $definition,
            $expandedEntities
        );
    }
}
