<?php

namespace Oro\Bundle\WorkflowBundle\EventListener\Extension;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Util\ClassUtils;

use Oro\Component\MessageQueue\Client\Message;
use Oro\Component\MessageQueue\Client\MessageProducerInterface;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;

use Oro\Bundle\WorkflowBundle\Async\Topics;
use Oro\Bundle\WorkflowBundle\Cache\EventTriggerCache;
use Oro\Bundle\WorkflowBundle\Configuration\ProcessPriority;
use Oro\Bundle\WorkflowBundle\Entity\EventTriggerInterface;
use Oro\Bundle\WorkflowBundle\Entity\ProcessJob;
use Oro\Bundle\WorkflowBundle\Entity\ProcessTrigger;
use Oro\Bundle\WorkflowBundle\Entity\Repository\ProcessJobRepository;
use Oro\Bundle\WorkflowBundle\Entity\Repository\ProcessTriggerRepository;
use Oro\Bundle\WorkflowBundle\Model\ProcessData;
use Oro\Bundle\WorkflowBundle\Model\ProcessHandler;
use Oro\Bundle\WorkflowBundle\Model\ProcessLogger;
use Oro\Bundle\WorkflowBundle\Model\ProcessSchedulePolicy;

class ProcessTriggerExtension extends AbstractEventTriggerExtension
{
    /** @var ProcessHandler */
    protected $handler;

    /** @var ProcessLogger */
    protected $logger;

    /** @var ProcessSchedulePolicy */
    protected $schedulePolicy;

    /** @var array */
    protected $scheduledProcesses = [];

    /** @var array */
    protected $removedEntityHashes = [];

    /**
     * @var MessageProducerInterface
     */
    private $messageProducer;

    /**
     * @param DoctrineHelper $doctrineHelper
     * @param ProcessHandler $handler
     * @param ProcessLogger $logger
     * @param EventTriggerCache $triggerCache
     * @param ProcessSchedulePolicy $schedulePolicy
     * @param MessageProducerInterface $messageProducer
     */
    public function __construct(
        DoctrineHelper $doctrineHelper,
        ProcessHandler $handler,
        ProcessLogger $logger,
        EventTriggerCache $triggerCache,
        ProcessSchedulePolicy $schedulePolicy,
        MessageProducerInterface $messageProducer
    ) {
        $this->doctrineHelper = $doctrineHelper;
        $this->handler = $handler;
        $this->logger = $logger;
        $this->triggerCache = $triggerCache;
        $this->schedulePolicy = $schedulePolicy;
        $this->messageProducer = $messageProducer;
    }

    /**
     * {@inheritdoc}
     */
    public function schedule($entity, $event, array $changeSet = null)
    {
        $entityClass = ClassUtils::getClass($entity);

        $triggers = $this->getTriggers($entityClass, $event);
        foreach ($triggers as $trigger) {
            $this->scheduleProcess(
                $trigger,
                // cloned to save all data after flush
                $event === EventTriggerInterface::EVENT_DELETE ? clone $entity : $entity,
                $changeSet
            );
        }

        if ($event === EventTriggerInterface::EVENT_UPDATE) {
            $fields = array_keys($changeSet);
            foreach ($fields as $field) {
                $fieldTriggers = $this->getTriggers($entityClass, $event, $field);

                foreach ($fieldTriggers as $trigger) {
                    $oldValue = $changeSet[$field]['old'];
                    $newValue = $changeSet[$field]['new'];

                    if (!$this->isEqual($newValue, $oldValue)) {
                        $this->scheduleProcess($trigger, $entity, $changeSet, $oldValue, $newValue);
                    }
                }
            }
        } elseif ($event === EventTriggerInterface::EVENT_DELETE) {
            $entityId = $this->doctrineHelper->getSingleEntityIdentifier($entity, false);
            if ($entityId) {
                $this->removedEntityHashes[] = ProcessJob::generateEntityHash($entityClass, $entityId);
            }
        }
    }

    /**
     * @param ObjectManager $manager
     */
    public function process(ObjectManager $manager)
    {
        // handle processes
        $hasQueuedOrHandledProcesses = false;
        $handledProcesses = [];
        $queuedJobs = [];
        foreach ($this->scheduledProcesses as &$entityProcesses) {
            while ($entityProcess = array_shift($entityProcesses)) {
                /** @var ProcessTrigger $trigger */
                $trigger = $entityProcess['trigger'];
                /** @var ProcessData $data */
                $data = $entityProcess['data'];

                if (!$this->handler->isTriggerApplicable($trigger, $data)) {
                    $this->logger->debug('Process trigger is not applicable', $trigger, $data);
                    continue;
                }

                if ($trigger->isQueued() || $this->forceQueued) {
                    $processJob = $this->queueProcess($trigger, $data);
                    $manager->persist($processJob);

                    $queuedJobs[(int)$trigger->getTimeShift()][$trigger->getPriority()][] = $processJob;
                } else {
                    $this->logger->debug('Process handled', $trigger, $data);
                    $this->handler->handleTrigger($trigger, $data);
                    $handledProcesses[] = $entityProcess;
                }

                $hasQueuedOrHandledProcesses = true;
            }
        }

        // save both handled entities and queued process jobs
        if ($hasQueuedOrHandledProcesses) {
            $manager->flush();

            foreach ($handledProcesses as $entityProcess) {
                /** @var ProcessTrigger $trigger */
                $trigger = $entityProcess['trigger'];
                /** @var ProcessData $data */
                $data = $entityProcess['data'];

                $this->handler->finishTrigger($trigger, $data);
            }
        }

        // delete unused processes
        if ($this->removedEntityHashes) {
            /** @var ProcessJobRepository $repository */
            $repository = $this->doctrineHelper->getEntityRepositoryForClass(ProcessJob::class);
            $repository->deleteByHashes($this->removedEntityHashes);

            $this->removedEntityHashes = [];
        }

        if (!empty($queuedJobs)) {
            $this->createJobs($queuedJobs);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clear($entityClass = null)
    {
        parent::clear($entityClass);

        if ($entityClass) {
            unset($this->scheduledProcesses[$entityClass]);
        } else {
            $this->scheduledProcesses = [];
        }
    }

    /**
     * @param ProcessTrigger $trigger
     * @param object $entity
     * @param array|null $changeSet
     * @param mixed|null $old
     * @param mixed|null $new
     */
    protected function scheduleProcess(
        ProcessTrigger $trigger,
        $entity,
        array $changeSet = null,
        $old = null,
        $new = null
    ) {
        $entityClass = ClassUtils::getClass($entity);

        // important to set modified flag to true
        $data = new ProcessData();
        $data->set('data', $entity);
        if ($changeSet) {
            $data->set('changeSet', $changeSet);
        }
        if ($old || $new) {
            $data->set('old', $old)->set('new', $new);
        }

        if (!$this->schedulePolicy->isScheduleAllowed($trigger, $data)) {
            $this->logger->debug('Policy declined process scheduling', $trigger, $data);
            return;
        }

        $this->scheduledProcesses[$entityClass][] = ['trigger' => $trigger, 'data' => $data];
    }

    /**
     * @param ProcessTrigger $trigger
     * @param ProcessData $data
     * @return ProcessJob
     */
    protected function queueProcess(ProcessTrigger $trigger, ProcessData $data)
    {
        $processJob = new ProcessJob();
        $processJob->setProcessTrigger($trigger)
            ->setData($data);

        return $processJob;
    }

    /**
     * @param array $queuedJobs [time shift => [priority => [process job, ...], ...], ...]
     */
    protected function createJobs(array $queuedJobs)
    {
        foreach ($queuedJobs as $timeShift => $processJobBatch) {
            foreach ($processJobBatch as $priority => $processJobs) {
                /** @var ProcessJob $processJob */
                foreach ($processJobs as $processJob) {
                    $message = new Message();
                    $message->setBody(['process_job_id' => $processJob->getId()]);
                    $message->setPriority(ProcessPriority::convertToMessageQueuePriority($priority));

                    if ($timeShift) {
                        $message->setDelay($timeShift);
                    }

                    $this->messageProducer->send(Topics::EXECUTE_PROCESS_JOB, $message);
                    $this->logger->debug('Process queued', $processJob->getProcessTrigger(), $processJob->getData());
                }
            }
        }
    }

    /**
     * @return ProcessTriggerRepository
     */
    protected function getRepository()
    {
        return $this->doctrineHelper->getEntityRepositoryForClass(ProcessTrigger::class);
    }
}
