<?php

namespace Oro\Bundle\ApiBundle\Processor\Shared;

use Oro\Component\ChainProcessor\ContextInterface;
use Oro\Component\ChainProcessor\ProcessorInterface;
use Oro\Bundle\ApiBundle\Collection\IncludedEntityData;
use Oro\Bundle\ApiBundle\Model\Error;
use Oro\Bundle\ApiBundle\Processor\ActionProcessorBagInterface;
use Oro\Bundle\ApiBundle\Processor\FormContext;
use Oro\Bundle\ApiBundle\Processor\SingleItemContext;
use Oro\Bundle\ApiBundle\Request\ApiActions;
use Oro\Bundle\ApiBundle\Request\ErrorCompleterRegistry;

/**
 * Validates and fill included entities.
 */
abstract class ProcessIncludedEntities implements ProcessorInterface
{
    /** @var ActionProcessorBagInterface */
    protected $processorBag;

    /** @var ErrorCompleterRegistry */
    protected $errorCompleterRegistry;

    /**
     * @param ActionProcessorBagInterface $processorBag
     * @param ErrorCompleterRegistry      $errorCompleterRegistry
     */
    public function __construct(
        ActionProcessorBagInterface $processorBag,
        ErrorCompleterRegistry $errorCompleterRegistry
    ) {
        $this->processorBag = $processorBag;
        $this->errorCompleterRegistry = $errorCompleterRegistry;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContextInterface $context)
    {
        /** @var FormContext $context */

        $includedData = $context->getIncludedData();
        if (empty($includedData)) {
            // no included data
            return;
        }

        $includedEntities = $context->getIncludedEntities();
        if (null === $includedEntities) {
            // the Context does not have included entities
            return;
        }

        foreach ($includedEntities as $entity) {
            $entityData = $includedEntities->getData($entity);
            $this->processIncludedEntity(
                $context,
                $includedData[$entityData->getIndex()],
                $entity,
                $includedEntities->getClass($entity),
                $includedEntities->getId($entity),
                $entityData
            );
        }
    }

    /**
     * @param FormContext        $context
     * @param array              $entityRequestData
     * @param object             $entity
     * @param string             $entityClass
     * @param string             $entityIncludeId
     * @param IncludedEntityData $entityData
     */
    protected function processIncludedEntity(
        FormContext $context,
        array $entityRequestData,
        $entity,
        $entityClass,
        $entityIncludeId,
        IncludedEntityData $entityData
    ) {
        $actionProcessor = $this->processorBag->getProcessor(
            $entityData->isExisting() ? ApiActions::UPDATE : ApiActions::CREATE
        );

        /** @var SingleItemContext|FormContext $actionContext */
        $actionContext = $actionProcessor->createContext();
        $actionContext->setVersion($context->getVersion());
        $actionContext->getRequestType()->set($context->getRequestType());
        $actionContext->setRequestHeaders($context->getRequestHeaders());
        $actionContext->setIncludedEntities($context->getIncludedEntities());

        $actionContext->setClassName($entityClass);
        $actionContext->setId($entityIncludeId);
        $actionContext->setRequestData($entityRequestData);
        $actionContext->setResult($entity);

        $actionContext->setLastGroup('transform_data');
        $actionContext->setSoftErrorsHandling(true);

        $actionProcessor->process($actionContext);

        if ($actionContext->hasErrors()) {
            $errorCompleter = $this->errorCompleterRegistry->getErrorCompleter($actionContext->getRequestType());
            $actionMetadata = $actionContext->getMetadata();
            $errors = $actionContext->getErrors();
            foreach ($errors as $error) {
                $errorCompleter->complete($error, $actionMetadata);
                $this->fixErrorPath($error, $entityData->getPath());
                $context->addError($error);
            }
        } else {
            $entityData->setMetadata($actionContext->getMetadata());
        }
    }

    /**
     * @param Error  $error
     * @param string $entityPath
     */
    abstract protected function fixErrorPath(Error $error, $entityPath);
}
