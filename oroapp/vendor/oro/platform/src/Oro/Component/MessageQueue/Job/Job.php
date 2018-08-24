<?php
namespace Oro\Component\MessageQueue\Job;

class Job
{
    const STATUS_NEW = 'oro.message_queue_job.status.new';
    const STATUS_RUNNING = 'oro.message_queue_job.status.running';
    const STATUS_SUCCESS = 'oro.message_queue_job.status.success';
    const STATUS_FAILED = 'oro.message_queue_job.status.failed';
    const STATUS_FAILED_REDELIVERED = 'oro.message_queue_job.status.failed_redelivered';
    const STATUS_CANCELLED = 'oro.message_queue_job.status.cancelled';
    const STATUS_STALE = 'oro.message_queue_job.status.stale';

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $ownerId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var bool
     */
    protected $interrupted;

    /**
     * @var bool;
     */
    protected $unique;

    /**
     * @var Job
     */
    protected $rootJob;

    /**
     * @var Job[]
     */
    protected $childJobs;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $startedAt;

    /**
     * @var \DateTime
     */
    protected $lastActiveAt;

    /**
     * @var \DateTime
     */
    protected $stoppedAt;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var float
     */
    protected $jobProgress;

    public function __construct()
    {
        $this->interrupted = false;
        $this->unique = false;
        $this->data = [];
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Only JobProcessor is responsible to call this method.
     * Do not call from the outside.
     *
     * @internal
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Only JobProcessor is responsible to call this method.
     * Do not call from the outside.
     *
     * @internal
     *
     * @param string $ownerId
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Only JobProcessor is responsible to call this method.
     * Do not call from the outside.
     *
     * @internal
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Only JobProcessor is responsible to call this method.
     * Do not call from the outside.
     *
     * @internal
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return boolean
     */
    public function isInterrupted()
    {
        return $this->interrupted;
    }

    /**
     * Only JobProcessor is responsible to call this method.
     * Do not call from the outside.
     *
     * @internal
     *
     * @param boolean $interrupted
     */
    public function setInterrupted($interrupted)
    {
        $this->interrupted = $interrupted;
    }

    /**
     * @return boolean
     */
    public function isUnique()
    {
        return $this->unique;
    }

    /**
     * Only JobProcessor is responsible to call this method.
     * Do not call from the outside.
     *
     * @internal
     *
     * @param boolean $unique
     */
    public function setUnique($unique)
    {
        $this->unique = $unique;
    }

    /**
     * @return Job
     */
    public function getRootJob()
    {
        return $this->rootJob;
    }

    /**
     * Only JobProcessor is responsible to call this method.
     * Do not call from the outside.
     *
     * @internal
     *
     * @param Job $rootJob
     */
    public function setRootJob(Job $rootJob)
    {
        $this->rootJob = $rootJob;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Only JobProcessor is responsible to call this method.
     * Do not call from the outside.
     *
     * @internal
     *
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * Only JobProcessor is responsible to call this method.
     * Do not call from the outside.
     *
     * @internal
     *
     * @param \DateTime $startedAt
     */
    public function setStartedAt(\DateTime $startedAt)
    {
        $this->startedAt = $startedAt;
    }

    /**
     * @return \DateTime
     */
    public function getLastActiveAt()
    {
        return $this->lastActiveAt;
    }

    /**
     * @param \DateTime $lastActiveAt
     *
     * @return $this
     */
    public function setLastActiveAt(\DateTime $lastActiveAt)
    {
        $this->lastActiveAt = $lastActiveAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStoppedAt()
    {
        return $this->stoppedAt;
    }

    /**
     * Only JobProcessor is responsible to call this method.
     * Do not call from the outside.
     *
     * @internal
     *
     * @param \DateTime $stoppedAt
     */
    public function setStoppedAt(\DateTime $stoppedAt)
    {
        $this->stoppedAt = $stoppedAt;
    }

    /**
     * @return bool
     */
    public function isRoot()
    {
        return null === $this->getRootJob();
    }

    /**
     * @return Job[]
     */
    public function getChildJobs()
    {
        return $this->childJobs;
    }

    /**
     * Only JobProcessor is responsible to call this method.
     * Do not call from the outside.
     *
     * @internal
     *
     * @param Job[] $childJobs
     */
    public function setChildJobs($childJobs)
    {
        $this->childJobs = $childJobs;
    }

    /**
     * @param Job $childJob
     */
    public function addChildJob(Job $childJob)
    {
        $this->childJobs[] = $childJob;
    }

    /**
     * @return array
     */
    public function getData()
    {
        $data = $this->data;
        unset($data['_properties']);

        return $data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data)
    {
        if (array_key_exists('_properties', $this->data)) {
            $data['_properties'] = $this->data['_properties'];
        }
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        if (!array_key_exists('_properties', $this->data)) {
            return [];
        }

        return $this->data['_properties'];
    }

    /**
     * @param array $properties
     */
    public function setProperties(array $properties)
    {
        $this->data['_properties'] = $properties;
    }

    /**
     * @return float
     */
    public function getJobProgress()
    {
        return $this->jobProgress;
    }

    /**
     * @param float $jobProgress
     */
    public function setJobProgress($jobProgress)
    {
        $this->jobProgress = $jobProgress;
    }
}
