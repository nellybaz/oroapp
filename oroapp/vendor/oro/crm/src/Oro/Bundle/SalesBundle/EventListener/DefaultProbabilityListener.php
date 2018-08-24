<?php

namespace Oro\Bundle\SalesBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\WorkflowBundle\Restriction\RestrictionManager;
use Oro\Bundle\SalesBundle\Entity\Opportunity;

class DefaultProbabilityListener
{
    /** @var ConfigManager $configManager */
    protected $configManager;

    /** @var RestrictionManager $restrictionManager */
    protected $restrictionManager;

    /**
     * @param ConfigManager      $configManager
     * @param RestrictionManager $restrictionManager
     */
    public function __construct(ConfigManager $configManager, RestrictionManager $restrictionManager)
    {
        $this->configManager = $configManager;
        $this->restrictionManager = $restrictionManager;
    }

    /**
     * @param Opportunity        $entity
     * @param PreUpdateEventArgs $args
     */
    public function preUpdate(Opportunity $entity, PreUpdateEventArgs $args)
    {
        if (null === $entity->getStatus()) {
            return;
        }

        if (!$args->hasChangedField('status')) {
            return;
        }

        if ($this->hasWorkflowRestriction($entity)) {
            return;
        }

        $probability = $this->getDefaultProbability($entity->getStatus()->getId());
        if (null === $probability) {
            return;
        }

        $oldProbability = $probability;

        if (null !== $args->getOldValue('status')) {
            $oldProbability = $this->getDefaultProbability($args->getOldValue('status')->getId());
        }

        // don't change if it's already overwritten
        if ($oldProbability !== $entity->getProbability()) {
            return;
        }

        $entity->setProbability($probability);
        $this->recomputeChangeSet($args);
    }

    /**
     * Checks if opportunity has an restriction of probability field
     *
     * @param  Opportunity $opportunity
     * @return bool
     */
    protected function hasWorkflowRestriction(Opportunity $opportunity)
    {
        if (!$this->restrictionManager->hasEntityClassRestrictions(Opportunity::class)) {
            return false;
        }

        $restrictions = (array) $this->restrictionManager->getEntityRestrictions($opportunity);

        return in_array('probability', array_column($restrictions, 'field'));
    }

    /**
     * @param int $statusId
     *
     * @return float|null
     */
    protected function getDefaultProbability($statusId)
    {
        $probabilities = $this->configManager->get(Opportunity::PROBABILITIES_CONFIG_KEY);

        if (isset($probabilities[$statusId])) {
            return (float) $probabilities[$statusId];
        }

        return null;
    }

    /**
     * @param LifecycleEventArgs $args
     */
    protected function recomputeChangeSet(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $em = $args->getEntityManager();
        $uow = $em->getUnitOfWork();
        $meta = $em->getClassMetadata(get_class($entity));
        $uow->recomputeSingleEntityChangeSet($meta, $entity);
    }
}
