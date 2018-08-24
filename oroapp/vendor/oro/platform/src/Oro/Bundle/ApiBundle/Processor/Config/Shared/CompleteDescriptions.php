<?php

namespace Oro\Bundle\ApiBundle\Processor\Config\Shared;

use Symfony\Component\Translation\TranslatorInterface;

use Oro\Component\ChainProcessor\ContextInterface;
use Oro\Component\ChainProcessor\ProcessorInterface;
use Oro\Bundle\ApiBundle\ApiDoc\EntityDescriptionProvider;
use Oro\Bundle\ApiBundle\ApiDoc\Parser\MarkdownApiDocParser;
use Oro\Bundle\ApiBundle\ApiDoc\ResourceDocProviderInterface;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionFieldConfig;
use Oro\Bundle\ApiBundle\Config\FiltersConfig;
use Oro\Bundle\ApiBundle\Model\Label;
use Oro\Bundle\ApiBundle\Processor\Config\ConfigContext;
use Oro\Bundle\ApiBundle\Request\RequestType;
use Oro\Bundle\ApiBundle\Util\RequestDependedTextProcessor;
use Oro\Bundle\EntityConfigBundle\Config\ConfigInterface;
use Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider;
use Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue;

/**
 * Adds human-readable descriptions for:
 * * entity
 * * fields
 * * filters
 * * identifier field
 * * "createdAt" and "updatedAt" fields
 * * ownership fields such as "owner" and "organization".
 * * fields for entities represent enumerations
 * By performance reasons all these actions are done in one processor.
 *
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class CompleteDescriptions implements ProcessorInterface
{
    const PLACEHOLDER_INHERIT_DOC = '{@inheritdoc}';

    const ID_DESCRIPTION           = 'The unique identifier of a resource.';
    const CREATED_AT_DESCRIPTION   = 'The date and time of resource record creation.';
    const UPDATED_AT_DESCRIPTION   = 'The date and time of the last update of the resource record.';
    const OWNER_DESCRIPTION        = 'An owner record represents the ownership capabilities of the record.';
    const ORGANIZATION_DESCRIPTION = 'An organization record represents a real enterprise, business, firm, '
    . 'company or another organization to which the users belong.';

    const ENUM_NAME_DESCRIPTION     = 'The human readable name of the option.';
    const ENUM_DEFAULT_DESCRIPTION  = 'Determines if this option is selected by default for new records.';
    const ENUM_PRIORITY_DESCRIPTION = 'The order in which options are ranked. '
    . 'First appears the option with the higher number of the priority.';

    const FIELD_FILTER_DESCRIPTION       = 'Filter records by \'%s\' field.';
    const ASSOCIATION_FILTER_DESCRIPTION = 'Filter records by \'%s\' relationship.';

    /** @var EntityDescriptionProvider */
    protected $entityDocProvider;

    /** @var ResourceDocProviderInterface */
    protected $resourceDocProvider;

    /** @var MarkdownApiDocParser */
    protected $apiDocParser;

    /** @var TranslatorInterface */
    protected $translator;

    /** @var ConfigProvider */
    protected $ownershipConfigProvider;

    /** @var RequestDependedTextProcessor */
    protected $requestDependedTextProcessor;

    /** @var RequestType */
    private $requestType;

    /**
     * @param EntityDescriptionProvider    $entityDocProvider
     * @param ResourceDocProviderInterface $resourceDocProvider
     * @param MarkdownApiDocParser         $apiDocParser
     * @param TranslatorInterface          $translator
     * @param ConfigProvider               $ownershipConfigProvider
     * @param RequestDependedTextProcessor $requestDependedTextProcessor
     */
    public function __construct(
        EntityDescriptionProvider $entityDocProvider,
        ResourceDocProviderInterface $resourceDocProvider,
        MarkdownApiDocParser $apiDocParser,
        TranslatorInterface $translator,
        ConfigProvider $ownershipConfigProvider,
        RequestDependedTextProcessor $requestDependedTextProcessor
    ) {
        $this->entityDocProvider = $entityDocProvider;
        $this->resourceDocProvider = $resourceDocProvider;
        $this->apiDocParser = $apiDocParser;
        $this->translator = $translator;
        $this->ownershipConfigProvider = $ownershipConfigProvider;
        $this->requestDependedTextProcessor = $requestDependedTextProcessor;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContextInterface $context)
    {
        /** @var ConfigContext $context */

        $targetAction = $context->getTargetAction();
        if (!$targetAction) {
            // descriptions cannot be set for undefined target action
            return;
        }

        $entityClass = $context->getClassName();
        $definition = $context->getResult();
        $this->requestType = $context->getRequestType();
        try {
            $this->setDescriptionForEntity(
                $definition,
                $entityClass,
                $targetAction,
                $context->isCollection(),
                $context->getAssociationName(),
                $context->getParentClassName()
            );
            $this->setDescriptionsForFields($definition, $entityClass, $targetAction);
            $filters = $context->getFilters();
            if (null !== $filters) {
                $this->setDescriptionsForFilters($filters, $definition, $entityClass);
            }
        } finally {
            $this->requestType = null;
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param string                 $entityClass
     * @param string                 $targetAction
     * @param bool                   $isCollection
     * @param string                 $associationName
     * @param string                 $parentEntityClass
     */
    protected function setDescriptionForEntity(
        EntityDefinitionConfig $definition,
        $entityClass,
        $targetAction,
        $isCollection,
        $associationName,
        $parentEntityClass
    ) {
        $entityDescription = false;
        if ($definition->hasDescription()) {
            $description = $definition->getDescription();
            if ($description instanceof Label) {
                $definition->setDescription($this->trans($description));
            }
        } elseif ($associationName) {
            $entityDescription = $this->getAssociationDescription($associationName);
            $this->setDescriptionForSubresource($definition, $entityDescription, $targetAction, $isCollection);
        } else {
            $entityDescription = $this->getEntityDescription($entityClass, $isCollection);
            $this->setDescriptionForResource($definition, $targetAction, $entityDescription);
        }

        $this->setDocumentationForEntity(
            $definition,
            $entityClass,
            $targetAction,
            $isCollection,
            $associationName,
            $parentEntityClass,
            $entityDescription
        );
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param string                 $entityClass
     * @param string                 $targetAction
     * @param bool                   $isCollection
     * @param string                 $associationName
     * @param string                 $parentEntityClass
     * @param string|bool|null       $entityDescription
     */
    protected function setDocumentationForEntity(
        EntityDefinitionConfig $definition,
        $entityClass,
        $targetAction,
        $isCollection,
        $associationName,
        $parentEntityClass,
        $entityDescription
    ) {
        $this->registerDocumentationResources($definition);
        $this->loadDocumentationForEntity(
            $definition,
            $entityClass,
            $targetAction,
            $associationName,
            $parentEntityClass
        );
        $processInheritDoc = !$associationName;
        if (!$definition->hasDocumentation()) {
            if ($associationName) {
                if (false === $entityDescription) {
                    $entityDescription = $this->getAssociationDescription($associationName);
                }
                $this->setDocumentationForSubresource($definition, $entityDescription, $targetAction, $isCollection);
            } else {
                $processInheritDoc = false;
                if (false === $entityDescription) {
                    $entityDescription = $this->getEntityDescription($entityClass, $isCollection);
                }
                if ($entityDescription) {
                    $this->setDocumentationForResource($definition, $targetAction, $entityDescription);
                }
            }
        }
        if ($processInheritDoc) {
            $this->processInheritDocForEntity($definition, $entityClass);
        }

        $documentation = $definition->getDocumentation();
        if ($documentation) {
            $definition->setDocumentation($this->processRequestDependedContent($documentation));
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     */
    protected function registerDocumentationResources(EntityDefinitionConfig $definition)
    {
        $documentationResources = $definition->getDocumentationResources();
        foreach ($documentationResources as $resource) {
            if (is_string($resource) && !empty($resource)) {
                $this->apiDocParser->parseDocumentationResource($resource);
            }
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param string                 $entityClass
     */
    protected function processInheritDocForEntity(EntityDefinitionConfig $definition, $entityClass)
    {
        $documentation = $definition->getDocumentation();
        if ($documentation && false !== strpos($documentation, self::PLACEHOLDER_INHERIT_DOC)) {
            $entityDocumentation = $this->entityDocProvider->getEntityDocumentation($entityClass);
            $definition->setDocumentation(
                str_replace(self::PLACEHOLDER_INHERIT_DOC, $entityDocumentation, $documentation)
            );
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param string                 $entityClass
     * @param string                 $targetAction
     * @param string                 $associationName
     * @param string                 $parentEntityClass
     */
    protected function loadDocumentationForEntity(
        EntityDefinitionConfig $definition,
        $entityClass,
        $targetAction,
        $associationName,
        $parentEntityClass
    ) {
        if (!$definition->hasDocumentation()) {
            if ($associationName) {
                $documentation = $this->apiDocParser->getSubresourceDocumentation(
                    $parentEntityClass,
                    $associationName,
                    $targetAction
                );
            } else {
                $documentation = $this->apiDocParser->getActionDocumentation($entityClass, $targetAction);
            }
            if ($documentation) {
                $definition->setDocumentation($documentation);
            }
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param string                 $targetAction
     * @param string|null            $entityDescription
     */
    protected function setDescriptionForResource(
        EntityDefinitionConfig $definition,
        $targetAction,
        $entityDescription
    ) {
        if ($entityDescription) {
            $description = $this->resourceDocProvider->getResourceDescription($targetAction, $entityDescription);
            if ($description) {
                $definition->setDescription($description);
            }
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param string                 $targetAction
     * @param string                 $entityDescription
     */
    protected function setDocumentationForResource(
        EntityDefinitionConfig $definition,
        $targetAction,
        $entityDescription
    ) {
        $documentation = $this->resourceDocProvider->getResourceDocumentation($targetAction, $entityDescription);
        if ($documentation) {
            $definition->setDocumentation($documentation);
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param string                 $associationDescription
     * @param string                 $targetAction
     * @param bool                   $isCollection
     */
    protected function setDescriptionForSubresource(
        EntityDefinitionConfig $definition,
        $associationDescription,
        $targetAction,
        $isCollection
    ) {
        $description = $this->resourceDocProvider->getSubresourceDescription(
            $targetAction,
            $associationDescription,
            $isCollection
        );
        if ($description) {
            $definition->setDescription($description);
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param string                 $associationDescription
     * @param string                 $targetAction
     * @param bool                   $isCollection
     */
    protected function setDocumentationForSubresource(
        EntityDefinitionConfig $definition,
        $associationDescription,
        $targetAction,
        $isCollection
    ) {
        $documentation = $this->resourceDocProvider->getSubresourceDocumentation(
            $targetAction,
            $associationDescription,
            $isCollection
        );
        if ($documentation) {
            $definition->setDocumentation($documentation);
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param string                 $entityClass
     * @param string                 $targetAction
     * @param string|null            $fieldPrefix
     */
    protected function setDescriptionsForFields(
        EntityDefinitionConfig $definition,
        $entityClass,
        $targetAction,
        $fieldPrefix = null
    ) {
        $this->setDescriptionForIdentifierField($definition);

        $fields = $definition->getFields();
        foreach ($fields as $fieldName => $field) {
            if (!$field->hasDescription()) {
                $this->loadFieldDescription($field, $entityClass, $targetAction, $fieldName, $fieldPrefix);
            } else {
                $description = $field->getDescription();
                if ($description instanceof Label) {
                    $field->setDescription($this->trans($description));
                } elseif (false !== strpos($description, self::PLACEHOLDER_INHERIT_DOC)) {
                    $field->setDescription(str_replace(
                        self::PLACEHOLDER_INHERIT_DOC,
                        $this->getFieldDescription($entityClass, $field, $fieldName, $fieldPrefix),
                        $description
                    ));
                }
            }

            $description = $field->getDescription();
            if ($description) {
                $field->setDescription($this->processRequestDependedContent($description));
            }

            $targetEntity = $field->getTargetEntity();
            if ($targetEntity && $targetEntity->hasFields()) {
                $targetClass = $field->getTargetClass();
                $targetFieldPrefix = null;
                if (!$targetClass) {
                    $targetFieldPrefix = $field->getPropertyPath($fieldName) . '.';
                }
                $this->setDescriptionsForFields($targetEntity, $entityClass, $targetAction, $targetFieldPrefix);
            }
        }

        $this->setDescriptionsForSpecialFields($definition, $entityClass);
    }

    /**
     * @param EntityDefinitionFieldConfig $field
     * @param string                      $entityClass
     * @param string                      $targetAction
     * @param string                      $fieldName
     * @param string|null                 $fieldPrefix
     */
    protected function loadFieldDescription(
        EntityDefinitionFieldConfig $field,
        $entityClass,
        $targetAction,
        $fieldName,
        $fieldPrefix
    ) {
        $description = $this->apiDocParser->getFieldDocumentation($entityClass, $fieldName, $targetAction);
        if ($description) {
            if (false !== strpos($description, self::PLACEHOLDER_INHERIT_DOC)) {
                $commonDescription = $this->apiDocParser->getFieldDocumentation($entityClass, $fieldName);
                if ($commonDescription) {
                    if (false !== strpos($commonDescription, self::PLACEHOLDER_INHERIT_DOC)) {
                        $commonDescription = str_replace(
                            self::PLACEHOLDER_INHERIT_DOC,
                            $this->getFieldDescription($entityClass, $field, $fieldName, $fieldPrefix),
                            $commonDescription
                        );
                    }
                } else {
                    $commonDescription = $this->getFieldDescription($entityClass, $field, $fieldName, $fieldPrefix);
                }
                $description = str_replace(self::PLACEHOLDER_INHERIT_DOC, $commonDescription, $description);
            }
        } else {
            $description = $this->apiDocParser->getFieldDocumentation($entityClass, $fieldName);
            if ($description) {
                if (false !== strpos($description, self::PLACEHOLDER_INHERIT_DOC)) {
                    $description = str_replace(
                        self::PLACEHOLDER_INHERIT_DOC,
                        $this->getFieldDescription($entityClass, $field, $fieldName, $fieldPrefix),
                        $description
                    );
                }
            } else {
                $description = $this->getFieldDescription($entityClass, $field, $fieldName, $fieldPrefix);
            }
        }
        if ($description) {
            $field->setDescription($description);
        }
    }

    /**
     * @param string                      $entityClass
     * @param EntityDefinitionFieldConfig $field
     * @param string                      $fieldName
     * @param string|null                 $fieldPrefix
     *
     * @return string|null
     */
    protected function getFieldDescription(
        $entityClass,
        EntityDefinitionFieldConfig $field,
        $fieldName,
        $fieldPrefix
    ) {
        return $this->entityDocProvider->getFieldDocumentation(
            $entityClass,
            $this->getFieldPropertyPath($field, $fieldName, $fieldPrefix)
        );
    }

    /**
     * @param EntityDefinitionFieldConfig $field
     * @param string                      $fieldName
     * @param string|null                 $fieldPrefix
     *
     * @return string
     */
    protected function getFieldPropertyPath(
        EntityDefinitionFieldConfig $field,
        $fieldName,
        $fieldPrefix = null
    ) {
        $propertyPath = $field->getPropertyPath($fieldName);
        if ($fieldPrefix) {
            $propertyPath = $fieldPrefix . $propertyPath;
        }

        return $propertyPath;
    }

    /**
     * @param FiltersConfig          $filters
     * @param EntityDefinitionConfig $definition
     * @param string                 $entityClass
     */
    protected function setDescriptionsForFilters(
        FiltersConfig $filters,
        EntityDefinitionConfig $definition,
        $entityClass
    ) {
        $fields = $filters->getFields();
        foreach ($fields as $fieldName => $field) {
            if (!$field->hasDescription()) {
                $description = $this->apiDocParser->getFilterDocumentation($entityClass, $fieldName);
                if ($description) {
                    $field->setDescription($description);
                } else {
                    $fieldConfig = $definition->getField($fieldName);
                    if (null !== $fieldConfig && $fieldConfig->hasTargetEntity()) {
                        $field->setDescription(sprintf(self::ASSOCIATION_FILTER_DESCRIPTION, $fieldName));
                    } else {
                        $field->setDescription(sprintf(self::FIELD_FILTER_DESCRIPTION, $fieldName));
                    }
                }
            } else {
                $description = $field->getDescription();
                if ($description instanceof Label) {
                    $field->setDescription($this->trans($description));
                }
            }

            $description = $field->getDescription();
            if ($description) {
                $field->setDescription($this->processRequestDependedContent($description));
            }
        }
    }

    /**
     * @param string $entityClass
     * @param bool   $isCollection
     *
     * @return string|null
     */
    protected function getEntityDescription($entityClass, $isCollection)
    {
        if ($isCollection) {
            return $this->entityDocProvider->getEntityPluralDescription($entityClass);
        }

        return $this->entityDocProvider->getEntityDescription($entityClass);
    }

    /**
     * @param string $associationName
     *
     * @return string
     */
    protected function getAssociationDescription($associationName)
    {
        return $this->entityDocProvider->humanizeAssociationName($associationName);
    }

    /**
     * @param Label $label
     *
     * @return string|null
     */
    protected function trans(Label $label)
    {
        return $label->trans($this->translator) ?: null;
    }

    /**
     * @param EntityDefinitionConfig $definition
     */
    protected function setDescriptionForIdentifierField(EntityDefinitionConfig $definition)
    {
        $identifierFieldNames = $definition->getIdentifierFieldNames();
        if (1 !== count($identifierFieldNames)) {
            // keep descriptions for composite identifier as is
            return;
        }

        $this->updateFieldDescription(
            $definition,
            reset($identifierFieldNames),
            self::ID_DESCRIPTION
        );
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param string                 $entityClass
     */
    protected function setDescriptionsForSpecialFields(EntityDefinitionConfig $definition, $entityClass)
    {
        $this->setDescriptionForCreatedAtField($definition);
        $this->setDescriptionForUpdatedAtField($definition);
        $this->setDescriptionsForOwnershipFields($definition, $entityClass);
        if (is_a($entityClass, AbstractEnumValue::class, true)) {
            $this->setDescriptionsForEnumFields($definition);
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     */
    protected function setDescriptionForCreatedAtField(EntityDefinitionConfig $definition)
    {
        $this->updateFieldDescription(
            $definition,
            'createdAt',
            self::CREATED_AT_DESCRIPTION
        );
    }

    /**
     * @param EntityDefinitionConfig $definition
     */
    protected function setDescriptionForUpdatedAtField(EntityDefinitionConfig $definition)
    {
        $this->updateFieldDescription(
            $definition,
            'updatedAt',
            self::UPDATED_AT_DESCRIPTION
        );
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param string                 $entityClass
     */
    protected function setDescriptionsForOwnershipFields(EntityDefinitionConfig $definition, $entityClass)
    {
        if (!$this->ownershipConfigProvider->hasConfig($entityClass)) {
            // ownership fields are available only for configurable entities
            return;
        }

        $entityConfig = $this->ownershipConfigProvider->getConfig($entityClass);
        $this->updateOwnershipFieldDescription(
            $definition,
            $entityConfig,
            'owner_field_name',
            self::OWNER_DESCRIPTION
        );
        $this->updateOwnershipFieldDescription(
            $definition,
            $entityConfig,
            'organization_field_name',
            self::ORGANIZATION_DESCRIPTION
        );
    }

    /**
     * @param EntityDefinitionConfig $definition
     */
    protected function setDescriptionsForEnumFields(EntityDefinitionConfig $definition)
    {
        $this->updateFieldDescription(
            $definition,
            'name',
            self::ENUM_NAME_DESCRIPTION
        );
        $this->updateFieldDescription(
            $definition,
            'default',
            self::ENUM_DEFAULT_DESCRIPTION
        );
        $this->updateFieldDescription(
            $definition,
            'priority',
            self::ENUM_PRIORITY_DESCRIPTION
        );
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param string                 $fieldName
     * @param string                 $description
     */
    protected function updateFieldDescription(EntityDefinitionConfig $definition, $fieldName, $description)
    {
        $field = $definition->getField($fieldName);
        if (null !== $field) {
            $existingDescription = $field->getDescription();
            if (empty($existingDescription)) {
                $field->setDescription($description);
            }
        }
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param ConfigInterface        $entityConfig
     * @param string                 $configKey
     * @param string                 $description
     */
    protected function updateOwnershipFieldDescription(
        EntityDefinitionConfig $definition,
        ConfigInterface $entityConfig,
        $configKey,
        $description
    ) {
        $propertyPath = $entityConfig->get($configKey);
        if ($propertyPath) {
            $field = $definition->findField($propertyPath, true);
            if (null !== $field) {
                $existingDescription = $field->getDescription();
                if (empty($existingDescription)) {
                    $field->setDescription($description);
                }
            }
        }
    }

    /**
     * @param string $content
     *
     * @return string
     */
    protected function processRequestDependedContent($content)
    {
        return $this->requestDependedTextProcessor->process($content, $this->requestType);
    }
}
