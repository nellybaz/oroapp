<?php

namespace Oro\Bundle\WorkflowBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

use Oro\Bundle\WorkflowBundle\Entity\ProcessTrigger;

class ProcessTriggerRepository extends EntityRepository implements EventTriggerRepositoryInterface
{
    /**
     * @param ProcessTrigger $trigger
     * @return null|ProcessTrigger
     */
    public function findEqualTrigger(ProcessTrigger $trigger)
    {
        return $this->findOneBy(
            [
                'event' => $trigger->getEvent(),
                'field' => $trigger->getField(),
                'definition' => $trigger->getDefinition(),
                'cron' => $trigger->getCron()
            ]
        );
    }

    /**
     * @return array|ProcessTrigger[]
     */
    public function findAllCronTriggers()
    {
        $qb = $this->createQueryBuilder('trigger');

        return $qb
            ->innerJoin('trigger.definition', 'definition')
            ->where(
                $qb->expr()->isNotNull('trigger.cron'),
                $qb->expr()->isNull('trigger.event'),
                $qb->expr()->eq('definition.enabled', ':enabled')
            )
            ->setParameter('enabled', true)
            ->orderBy('definition.executionOrder')
            ->getQuery()
            ->getResult();
    }

    /**
     * @param ProcessTrigger $trigger
     * @return bool
     */
    public function isEqualTriggerExists(ProcessTrigger $trigger)
    {
        $equalTrigger = $this->findEqualTrigger($trigger);

        return !empty($equalTrigger);
    }

    /**
     * @param bool|null $enabled
     * @param bool $withCronTriggers
     *
     * @return ProcessTrigger[]
     */
    public function findAllWithDefinitions($enabled = null, $withCronTriggers = false)
    {
        $queryBuilder = $this->createQueryBuilder('trigger')
            ->select('trigger, definition')
            ->innerJoin('trigger.definition', 'definition')
            ->orderBy('definition.executionOrder');

        if (!$withCronTriggers) {
            $queryBuilder->andWhere($queryBuilder->expr()->isNotNull('trigger.event'));
            $queryBuilder->andWhere($queryBuilder->expr()->isNull('trigger.cron'));
        }

        if (null !== $enabled) {
            $queryBuilder->andWhere('definition.enabled = :enabled')->setParameter('enabled', $enabled);
        }

        return $queryBuilder->getQuery()->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableEventTriggers()
    {
        return $this->findAllWithDefinitions(null, false);
    }

    /**
     * @param string $definitionName
     * @return mixed
     */
    public function findByDefinitionName($definitionName)
    {
        return $this->createQueryBuilder('trigger')
            ->select('trigger, definition')
            ->innerJoin('trigger.definition', 'definition')
            ->andWhere('definition.name = :definition_name')
            ->setParameter('definition_name', $definitionName)
            ->getQuery()
            ->execute();
    }
}
