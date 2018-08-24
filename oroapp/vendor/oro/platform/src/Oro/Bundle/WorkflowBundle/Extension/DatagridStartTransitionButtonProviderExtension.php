<?php

namespace Oro\Bundle\WorkflowBundle\Extension;

use Doctrine\Common\Collections\Collection;

use Oro\Bundle\ActionBundle\Button\ButtonInterface;
use Oro\Bundle\ActionBundle\Button\ButtonSearchContext;
use Oro\Bundle\ActionBundle\Provider\CurrentApplicationProviderInterface;
use Oro\Bundle\ActionBundle\Provider\RouteProviderInterface;
use Oro\Bundle\ActionBundle\Resolver\DestinationPageResolver;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;

use Oro\Bundle\WorkflowBundle\Button\StartTransitionButton;
use Oro\Bundle\WorkflowBundle\Model\Transition;
use Oro\Bundle\WorkflowBundle\Model\Workflow;
use Oro\Bundle\WorkflowBundle\Model\WorkflowRegistry;

class DatagridStartTransitionButtonProviderExtension extends AbstractStartTransitionButtonProviderExtension
{
    /** @var DoctrineHelper */
    private $doctrineHelper;

    /**
     * @param DoctrineHelper $doctrineHelper
     * @param WorkflowRegistry $workflowRegistry
     * @param RouteProviderInterface $routeProvider
     * @param DestinationPageResolver $destinationPageResolver
     */
    public function __construct(
        DoctrineHelper $doctrineHelper,
        WorkflowRegistry $workflowRegistry,
        RouteProviderInterface $routeProvider,
        DestinationPageResolver $destinationPageResolver
    ) {
        parent::__construct($workflowRegistry, $routeProvider, $destinationPageResolver);

        $this->doctrineHelper = $doctrineHelper;
    }

    /**
     * {@inheritdoc}
     * @param StartTransitionButton $button
     */
    public function isAvailable(
        ButtonInterface $button,
        ButtonSearchContext $buttonSearchContext,
        Collection $errors = null
    ) {
        if (!$this->supports($button)) {
            throw $this->createUnsupportedButtonException($button);
        }

        $workflow = $button->getWorkflow();

        if (null === $buttonSearchContext->getEntityId() ||
            null !== $workflow->getWorkflowItemByEntityId($buttonSearchContext->getEntityId())
        ) {
            return false;
        }

        $transition = $button->getTransition();
        $entity = $this->doctrineHelper->getEntity(
            $buttonSearchContext->getEntityClass(),
            $buttonSearchContext->getEntityId()
        );

        try {
            $isAvailable = $workflow->isStartTransitionAvailable($transition, $entity, [], $errors);
        } catch (\Exception $e) {
            $isAvailable = false;
            $this->addError($button, $e, $errors);
        }

        return $isAvailable;
    }

    /**
     * @param Workflow $workflow
     * @param ButtonSearchContext $searchContext
     *
     * @return Transition[]
     */
    protected function getTransitions(Workflow $workflow, ButtonSearchContext $searchContext)
    {
        if ($searchContext->getDatagrid() !== null &&
            $searchContext->getEntityClass() === $workflow->getDefinition()->getRelatedEntity() &&
            in_array($searchContext->getDatagrid(), $workflow->getDefinition()->getDatagrids(), true)
        ) {
            return $workflow->getTransitionManager()->getStartTransitions()->toArray();
        }

        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function getApplication()
    {
        return CurrentApplicationProviderInterface::DEFAULT_APPLICATION;
    }
}
