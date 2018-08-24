<?php

namespace Oro\Component\MessageQueue\Job;

use Oro\Component\MessageQueue\Client\Message;
use Oro\Component\MessageQueue\Client\MessagePriority;
use Oro\Component\MessageQueue\Client\MessageProducerInterface;
use Oro\Component\MessageQueue\Provider\JobConfigurationProviderInterface;
use Oro\Component\MessageQueue\Provider\NullJobConfigurationProvider;

/**
 * JobProcessor is a main class responsible for processing jobs, shifting it's responsibilities to other classes
 * is quite difficult and would make it less readable.
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class JobProcessor
{
    /** @var JobConfigurationProviderInterface */
    private $jobConfigurationProvider;

    /** @var JobStorage */
    private $jobStorage;

    /** @var MessageProducerInterface */
    private $producer;

    /**
     * @param JobStorage               $jobStorage
     * @param MessageProducerInterface $producer
     */
    public function __construct(JobStorage $jobStorage, MessageProducerInterface $producer)
    {
        $this->jobStorage = $jobStorage;
        $this->producer = $producer;
    }

    /**
     * @param JobConfigurationProviderInterface $jobConfigurationProvider
     * @return $this
     */
    public function setJobConfigurationProvider(JobConfigurationProviderInterface $jobConfigurationProvider)
    {
        $this->jobConfigurationProvider = $jobConfigurationProvider;

        return $this;
    }

    /**
     * @return JobConfigurationProviderInterface
     */
    public function getJobConfigurationProvider()
    {
        if (!$this->jobConfigurationProvider) {
            return new NullJobConfigurationProvider();
        }
        return $this->jobConfigurationProvider;
    }

    /**
     * @param string $id
     *
     * @return Job
     */
    public function findJobById($id)
    {
        return $this->jobStorage->findJobById($id);
    }

    /**
     * Finds root non interrupted job by name and given statuses.
     *
     * @param string $jobName
     * @param array  $statuses
     *
     * @return Job|null
     */
    public function findRootJobByJobNameAndStatuses($jobName, array $statuses)
    {
        return $this->jobStorage->findRootJobByJobNameAndStatuses($jobName, $statuses);
    }

    /**
     * @param string $ownerId
     * @param string $jobName
     * @param bool   $unique
     *
     * @return Job|null
     */
    public function findOrCreateRootJob($ownerId, $jobName, $unique = false)
    {
        if (! $ownerId) {
            throw new \LogicException('OwnerId must not be empty');
        }

        if (! $jobName) {
            throw new \LogicException('Job name must not be empty');
        }

        $job = $this->jobStorage->findRootJobByOwnerIdAndJobName($ownerId, $jobName);
        if ($job) {
            return $job;
        }

        $job = $this->jobStorage->createJob();
        $job->setOwnerId($ownerId);
        $job->setStatus(Job::STATUS_NEW);
        $job->setName($jobName);
        $job->setCreatedAt(new \DateTime());
        $job->setLastActiveAt(new \DateTime());
        $job->setStartedAt(new \DateTime());
        $job->setJobProgress(0);
        $job->setUnique((bool) $unique);

        return $this->saveJobAndStaleDuplicateIfQualifies($job);
    }

    /**
     * @param Job $job
     * @return null|Job
     */
    private function saveJobAndStaleDuplicateIfQualifies($job)
    {
        try {
            $this->jobStorage->saveJob($job);
            return $job;
        } catch (DuplicateJobException $e) {
            $currentRootJob = $this->findRootJobByJobNameAndStatuses($job->getName(), $this->getActiveJobStatuses());
            if ($currentRootJob && $this->isJobStale($currentRootJob)) {
                $this->staleRootJobAndChildren($currentRootJob);
                return $this->saveJobAndStaleDuplicateIfQualifies($job);
            }
        }
        return null;
    }

    /**
     * @param Job $job
     * @return bool
     */
    private function isJobStale(Job $job)
    {
        if ($job->getStatus() === Job::STATUS_STALE) {
            return true;
        }

        if ($this->hasNotStartedChild($job)) {
            return false;
        }

        $timeBeforeStale = $this->getJobConfigurationProvider()->getTimeBeforeStaleForJobName($job->getName());
        if ($timeBeforeStale !== null && $timeBeforeStale != -1) {
            return $job->getLastActiveAt() <= new \DateTime('- ' . $timeBeforeStale. ' seconds');
        }

        return false;
    }

    /**
     * @param Job $job
     *
     * @return bool
     */
    private function hasNotStartedChild(Job $job)
    {
        foreach ($job->getChildJobs() as $childJob) {
            if (Job::STATUS_NEW === $childJob->getStatus()) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param string $jobName
     * @param Job $rootJob
     *
     * @return Job
     */
    public function findOrCreateChildJob($jobName, Job $rootJob)
    {
        if (! $jobName) {
            throw new \LogicException('Job name must not be empty');
        }

        $rootJob = $this->jobStorage->findJobById($rootJob->getId());
        $job = $this->jobStorage->findChildJobByName($jobName, $rootJob);

        if ($job) {
            return $job;
        }

        $job = $this->jobStorage->createJob();
        $job->setStatus(Job::STATUS_NEW);
        $job->setName($jobName);
        $job->setCreatedAt(new \DateTime());
        $job->setRootJob($rootJob);
        $rootJob->addChildJob($job);
        $job->setJobProgress(0);
        $this->jobStorage->saveJob($job);

        $this->sendCalculateJobStatusMessage($job, true);

        return $job;
    }

    /**
     * @param Job $job
     */
    public function startChildJob(Job $job)
    {
        if ($job->isRoot()) {
            throw new \LogicException(sprintf('Can\'t start root jobs. id: "%s"', $job->getId()));
        }

        $job = $this->jobStorage->findJobById($job->getId());

        if (! in_array($job->getStatus(), $this->getNotStartedJobStatuses(), true)) {
            throw new \LogicException(sprintf(
                'Can start only new jobs: id: "%s", status: "%s"',
                $job->getId(),
                $job->getStatus()
            ));
        }

        $job->setStatus(Job::STATUS_RUNNING);
        $job->setStartedAt(new \DateTime());

        $this->jobStorage->saveJob($job);
        $this->updateJobLastActiveAtAndSave($job->getRootJob());

        $this->sendCalculateJobStatusMessage($job);
    }

    /**
     * @param Job $job
     */
    public function successChildJob(Job $job)
    {
        if ($job->isRoot()) {
            throw new \LogicException(sprintf('Can\'t success root jobs. id: "%s"', $job->getId()));
        }

        $job = $this->jobStorage->findJobById($job->getId());

        if ($job->getStatus() !== Job::STATUS_RUNNING) {
            throw new \LogicException(sprintf(
                'Can success only running jobs. id: "%s", status: "%s"',
                $job->getId(),
                $job->getStatus()
            ));
        }

        $job->setStatus(Job::STATUS_SUCCESS);
        $job->setJobProgress(1);
        $job->setStoppedAt(new \DateTime());
        $this->jobStorage->saveJob($job);
        $this->updateJobLastActiveAtAndSave($job->getRootJob());

        $this->sendCalculateJobStatusMessage($job, true);
    }

    /**
     * @param Job $job
     */
    private function updateJobLastActiveAtAndSave(Job $job)
    {
        $job->setLastActiveAt(new \DateTime());
        $this->jobStorage->saveJob($job);
    }
    
    /**
     * @param Job $rootJob
     */
    private function staleRootJobAndChildren(Job $rootJob)
    {
        if (!$rootJob->isRoot()) {
            throw new \LogicException(sprintf('Can\'t stale child jobs. id: "%s"', $rootJob->getId()));
        }

        $this->jobStorage->saveJob($rootJob, function (Job $rootJob) {
            $rootJob->setStatus(Job::STATUS_STALE);
            $rootJob->setStoppedAt(new \DateTime());

            foreach ($rootJob->getChildJobs() as $childJob) {
                if (in_array($childJob->getStatus(), $this->getActiveJobStatuses(), true)) {
                    $childJob->setStatus(Job::STATUS_STALE);
                    $childJob->setStoppedAt(new \DateTime());
                    $this->jobStorage->saveJob($childJob);
                }
            }
        });
    }

    /**
     * @param Job $job
     */
    public function failChildJob(Job $job)
    {
        if ($job->isRoot()) {
            throw new \LogicException(sprintf('Can\'t fail root jobs. id: "%s"', $job->getId()));
        }

        $job = $this->jobStorage->findJobById($job->getId());

        if ($job->getStatus() !== Job::STATUS_RUNNING) {
            throw new \LogicException(sprintf(
                'Can fail only running jobs. id: "%s", status: "%s"',
                $job->getId(),
                $job->getStatus()
            ));
        }

        $job->setStatus(Job::STATUS_FAILED);
        $job->setStoppedAt(new \DateTime());

        $this->jobStorage->saveJob($job);
        $this->updateJobLastActiveAtAndSave($job->getRootJob());

        $this->sendCalculateJobStatusMessage($job, true);
    }

    /**
     * @param Job $job
     */
    public function failAndRedeliveryChildJob(Job $job)
    {
        if ($job->isRoot()) {
            throw new \LogicException(sprintf('Can\'t fail root jobs. id: "%s"', $job->getId()));
        }

        $job = $this->jobStorage->findJobById($job->getId());

        if ($job->getStatus() !== Job::STATUS_RUNNING) {
            throw new \LogicException(sprintf(
                'Can fail and redelivery only running jobs. id: "%s", status: "%s"',
                $job->getId(),
                $job->getStatus()
            ));
        }

        $job->setStatus(Job::STATUS_FAILED_REDELIVERED);
        $this->jobStorage->saveJob($job);
        $this->updateJobLastActiveAtAndSave($job->getRootJob());

        $this->sendCalculateJobStatusMessage($job);
    }

    /**
     * @param Job $job
     */
    public function cancelChildJob(Job $job)
    {
        if ($job->isRoot()) {
            throw new \LogicException(sprintf('Can\'t cancel root jobs. id: "%s"', $job->getId()));
        }

        $job = $this->jobStorage->findJobById($job->getId());

        if (! in_array($job->getStatus(), $this->getActiveJobStatuses(), true)) {
            throw new \LogicException(sprintf(
                'Can cancel only new or running jobs. id: "%s", status: "%s"',
                $job->getId(),
                $job->getStatus()
            ));
        }

        $job->setStatus(Job::STATUS_CANCELLED);
        $job->setStoppedAt($stoppedAt = new \DateTime());

        if (! $job->getStartedAt()) {
            $job->setStartedAt($stoppedAt);
        }

        $this->jobStorage->saveJob($job);
        $this->updateJobLastActiveAtAndSave($job->getRootJob());

        $this->sendCalculateJobStatusMessage($job, true);
    }

    /**
     * @param Job $job
     */
    public function cancelAllActiveChildJobs(Job $job)
    {
        if (!$job->isRoot() || !$job->getChildJobs()) {
            return;
        }

        foreach ($job->getChildJobs() as $childJob) {
            if (in_array($childJob->getStatus(), $this->getActiveJobStatuses(), true)) {
                $this->cancelChildJob($childJob);
            }
        }
    }

    /**
     * Cancels running for all child jobs that are not in run status.
     *
     * @param Job $job
     */
    public function cancelAllNotStartedChildJobs(Job $job)
    {
        if (!$job->isRoot() || !$job->getChildJobs()) {
            return;
        }

        foreach ($job->getChildJobs() as $childJob) {
            if (in_array($childJob->getStatus(), $this->getNotStartedJobStatuses(), true)) {
                $this->cancelChildJob($childJob);
            }
        }
    }

    /**
     * @param Job  $job
     * @param bool $force
     */
    public function interruptRootJob(Job $job, $force = false)
    {
        if (!$job->isRoot()) {
            throw new \LogicException(sprintf('Can interrupt only root jobs. id: "%s"', $job->getId()));
        }

        if ($job->isInterrupted()) {
            return;
        }

        $this->jobStorage->saveJob($job, function (Job $job) use ($force) {
            if ($job->isInterrupted()) {
                return;
            }

            $job->setInterrupted(true);

            if ($force) {
                $this->cancelAllActiveChildJobs($job);
                $job->setStoppedAt(new \DateTime());
            } else {
                // we should mark all child jobs as canceled to speed-up the terminate process
                $this->cancelAllNotStartedChildJobs($job);
            }
        });
    }

    /**
     * @param Job  $job
     * @param bool $calculateProgress
     */
    private function sendCalculateJobStatusMessage($job, $calculateProgress = false)
    {
        $message = ['jobId' => $job->getId()];
        if ($calculateProgress) {
            $message['calculateProgress'] = true;
        }
        $this->producer->send(
            Topics::CALCULATE_ROOT_JOB_STATUS,
            new Message($message, MessagePriority::HIGH)
        );
    }

    /**
     * @return string[]
     */
    private function getNotStartedJobStatuses()
    {
        return [Job::STATUS_NEW, Job::STATUS_FAILED_REDELIVERED];
    }

    /**
     * @return string[]
     */
    private function getActiveJobStatuses()
    {
        return [Job::STATUS_NEW, Job::STATUS_RUNNING, Job::STATUS_FAILED_REDELIVERED];
    }
}
