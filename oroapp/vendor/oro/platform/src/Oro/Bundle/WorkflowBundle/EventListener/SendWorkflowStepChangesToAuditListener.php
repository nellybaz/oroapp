<?php

namespace Oro\Bundle\WorkflowBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Oro\Bundle\DataAuditBundle\Model\AdditionalEntityChangesToAuditStorage;
use Oro\Bundle\PlatformBundle\EventListener\OptionalListenerInterface;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowTransitionRecord;

class SendWorkflowStepChangesToAuditListener implements OptionalListenerInterface
{
    const FIELD_ALIAS = 'workflow:currentStep';

    /**
     * @var AdditionalEntityChangesToAuditStorage
     */
    private $storage;

    /**
     * @var boolean
     */
    private $enabled = true;

    /**
     * @param AdditionalEntityChangesToAuditStorage $storage
     */
    public function __construct(AdditionalEntityChangesToAuditStorage $storage)
    {
        $this->storage = $storage;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnabled($enabled = true)
    {
        $this->enabled = $enabled;
    }

    /**
     * @param WorkflowTransitionRecord $transitionRecord
     * @param LifecycleEventArgs $eventArgs
     */
    public function postPersist(WorkflowTransitionRecord $transitionRecord, LifecycleEventArgs $eventArgs)
    {
        if (!$this->enabled) {
            return;
        }

        $workflowEntity = $transitionRecord->getWorkflowItem()->getEntity();
        if (!$workflowEntity) {
            return;
        }

        $this->storage->addEntityUpdate(
            $eventArgs->getEntityManager(),
            $workflowEntity,
            [
                self::FIELD_ALIAS => [
                    $transitionRecord->getStepFrom(),
                    $transitionRecord->getStepTo(),
                ],
            ]
        );
    }
}
