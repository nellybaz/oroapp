<?php

namespace Oro\Bundle\ApiBundle\Processor\Config\GetConfig;

use Doctrine\ORM\Mapping\ClassMetadata;

use Oro\Component\ChainProcessor\ActionProcessorInterface;
use Oro\Component\ChainProcessor\ContextInterface;
use Oro\Component\ChainProcessor\ProcessorInterface;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionFieldConfig;
use Oro\Bundle\ApiBundle\Processor\CustomizeLoadedData\CustomizeLoadedDataContext;
use Oro\Bundle\ApiBundle\Processor\Config\ConfigContext;
use Oro\Bundle\ApiBundle\Util\ConfigUtil;
use Oro\Bundle\ApiBundle\Util\DoctrineHelper;

/**
 * Registers a post loading handler for the entity and all related entities.
 * It allows to customize loaded data by registering own processors for the "customize_loaded_data" action.
 */
class SetDataCustomizationHandler implements ProcessorInterface
{
    /** @var ActionProcessorInterface */
    protected $customizationProcessor;

    /** @var DoctrineHelper */
    protected $doctrineHelper;

    /**
     * @param ActionProcessorInterface $customizationProcessor
     * @param DoctrineHelper           $doctrineHelper
     */
    public function __construct(
        ActionProcessorInterface $customizationProcessor,
        DoctrineHelper $doctrineHelper
    ) {
        $this->customizationProcessor = $customizationProcessor;
        $this->doctrineHelper         = $doctrineHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContextInterface $context)
    {
        /** @var ConfigContext $context */

        $definition = $context->getResult();
        if (!$definition->isExcludeAll() || !$definition->hasFields()) {
            // expected completed configs
            return;
        }

        $this->setCustomizationHandler($definition, $context);
    }

    /**
     * @param EntityDefinitionConfig $definition
     * @param ConfigContext          $context
     */
    protected function setCustomizationHandler(EntityDefinitionConfig $definition, ConfigContext $context)
    {
        $entityClass = $context->getClassName();

        $definition->setPostSerializeHandler(
            $this->getRootCustomizationHandler(
                $context,
                $entityClass,
                $definition->getPostSerializeHandler()
            )
        );

        if ($this->doctrineHelper->isManageableEntityClass($entityClass)) {
            // we can set customization handlers for associations only for manageable entity,
            // because for other types of entities we do not have metadata
            $this->processFields(
                $context,
                $definition,
                $entityClass,
                $this->doctrineHelper->getEntityMetadataForClass($entityClass)
            );
        }
    }

    /**
     * @param ConfigContext          $context
     * @param EntityDefinitionConfig $definition
     * @param string                 $rootEntityClass
     * @param ClassMetadata          $metadata
     * @param string|null            $fieldPath
     */
    protected function processFields(
        ConfigContext $context,
        EntityDefinitionConfig $definition,
        $rootEntityClass,
        ClassMetadata $metadata,
        $fieldPath = null
    ) {
        $fields = $definition->getFields();
        foreach ($fields as $fieldName => $field) {
            $linkedMetadata = $this->getLinkedMetadata($metadata, $fieldName, $field);
            if (null !== $linkedMetadata) {
                $this->setFieldCustomizationHandler(
                    $context,
                    $field,
                    $linkedMetadata,
                    $rootEntityClass,
                    $this->buildFieldPath($fieldName, $fieldPath)
                );
            }
        }
    }

    /**
     * @param ClassMetadata               $metadata
     * @param string                      $fieldName
     * @param EntityDefinitionFieldConfig $field
     *
     * @return ClassMetadata|null
     */
    protected function getLinkedMetadata(ClassMetadata $metadata, $fieldName, EntityDefinitionFieldConfig $field)
    {
        $propertyPath = $field->getPropertyPath($fieldName);
        if ($metadata->hasAssociation($propertyPath)) {
            return $this->doctrineHelper->getEntityMetadataForClass(
                $metadata->getAssociationTargetClass($propertyPath)
            );
        }

        $targetClass = $field->getTargetClass();
        if ($targetClass && $this->doctrineHelper->isManageableEntityClass($targetClass)) {
            return $this->doctrineHelper->getEntityMetadataForClass($targetClass);
        }

        return null;
    }

    /**
     * @param ConfigContext               $context
     * @param EntityDefinitionFieldConfig $field
     * @param ClassMetadata               $metadata
     * @param string                      $rootEntityClass
     * @param string                      $fieldPath
     */
    protected function setFieldCustomizationHandler(
        ConfigContext $context,
        EntityDefinitionFieldConfig $field,
        ClassMetadata $metadata,
        $rootEntityClass,
        $fieldPath
    ) {
        $targetEntity = $field->getOrCreateTargetEntity();
        $targetEntity->setPostSerializeHandler(
            $this->getCustomizationHandler(
                $context,
                $rootEntityClass,
                $fieldPath,
                $metadata->name,
                $targetEntity->getPostSerializeHandler()
            )
        );
        $this->processFields($context, $targetEntity, $rootEntityClass, $metadata, $fieldPath);
    }

    /**
     * @param string      $fieldName
     * @param string|null $parentFieldPath
     *
     * @return string
     */
    protected function buildFieldPath($fieldName, $parentFieldPath = null)
    {
        return null !== $parentFieldPath
            ? $parentFieldPath . ConfigUtil::PATH_DELIMITER . $fieldName
            : $fieldName;
    }

    /**
     * @param ConfigContext $context
     *
     * @return CustomizeLoadedDataContext
     */
    protected function createCustomizationContext(ConfigContext $context)
    {
        /** @var CustomizeLoadedDataContext $customizationContext */
        $customizationContext = $this->customizationProcessor->createContext();
        $customizationContext->setVersion($context->getVersion());
        $customizationContext->getRequestType()->set($context->getRequestType());

        return $customizationContext;
    }

    /**
     * @param ConfigContext $context
     * @param string        $entityClass
     * @param callable|null $previousHandler
     *
     * @return callable
     */
    protected function getRootCustomizationHandler(
        ConfigContext $context,
        $entityClass,
        $previousHandler
    ) {
        return function (array $item) use ($context, $entityClass, $previousHandler) {
            if (null !== $previousHandler) {
                $item = call_user_func($previousHandler, $item);
            }

            $customizationContext = $this->createCustomizationContext($context);
            $customizationContext->setClassName($entityClass);
            $customizationContext->setConfig($context->getResult());
            $customizationContext->setResult($item);
            $this->customizationProcessor->process($customizationContext);

            return $customizationContext->getResult();
        };
    }

    /**
     * @param ConfigContext $context
     * @param string        $rootEntityClass
     * @param string        $propertyPath
     * @param string        $entityClass
     * @param callable|null $previousHandler
     *
     * @return callable
     */
    protected function getCustomizationHandler(
        ConfigContext $context,
        $rootEntityClass,
        $propertyPath,
        $entityClass,
        $previousHandler
    ) {
        return function (array $item) use ($context, $rootEntityClass, $propertyPath, $entityClass, $previousHandler) {
            if (null !== $previousHandler) {
                $item = call_user_func($previousHandler, $item);
            }

            $customizationContext = $this->createCustomizationContext($context);
            $customizationContext->setRootClassName($rootEntityClass);
            $customizationContext->setPropertyPath($propertyPath);
            $customizationContext->setClassName($entityClass);
            $customizationContext->setConfig($context->getResult());
            $customizationContext->setResult($item);
            $this->customizationProcessor->process($customizationContext);

            return $customizationContext->getResult();
        };
    }
}
