<?php

namespace Oro\Bundle\WorkflowBundle\Async;

use Psr\Log\LoggerInterface;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\WorkflowBundle\Entity\ProcessJob;
use Oro\Bundle\WorkflowBundle\Model\ProcessHandler;

use Oro\Component\MessageQueue\Client\TopicSubscriberInterface;
use Oro\Component\MessageQueue\Consumption\MessageProcessorInterface;
use Oro\Component\MessageQueue\Transport\MessageInterface;
use Oro\Component\MessageQueue\Transport\SessionInterface;
use Oro\Component\MessageQueue\Util\JSON;

class ExecuteProcessJobProcessor implements MessageProcessorInterface, TopicSubscriberInterface
{
    /**
     * @var DoctrineHelper
     */
    private $doctrineHelper;

    /**
     * @var ProcessHandler
     */
    private $processHandler;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param DoctrineHelper $doctrineHelper
     * @param ProcessHandler $processHandler
     * @param LoggerInterface $logger
     */
    public function __construct(DoctrineHelper $doctrineHelper, ProcessHandler $processHandler, LoggerInterface $logger)
    {
        $this->doctrineHelper = $doctrineHelper;
        $this->processHandler = $processHandler;
        $this->logger = $logger;
    }

    /**
     * {@inheritdoc}
     */
    public function process(MessageInterface $message, SessionInterface $session)
    {
        $body = array_replace_recursive(['process_job_id' => null], JSON::decode($message->getBody()));
        if (false == $body['process_job_id']) {
            $this->logger->critical('Process Job Id not set');

            return self::REJECT;
        }

        $entityManager = $this->doctrineHelper->getEntityManager(ProcessJob::class);
        if (null == $entityManager) {
            $this->logger->critical(
                'Cannot get Entity Manager for {process_job_class}',
                ['process_job_class' => ProcessJob::class]
            );

            return self::REJECT;
        }

        /** @var ProcessJob $processJob */
        $processJob = $this->doctrineHelper->getEntityRepository(ProcessJob::class)->find($body['process_job_id']);
        if (!$processJob) {
            $this->logger->critical(
                'Process Job with id {process_job_id} not found',
                ['process_job_id' => $body['process_job_id']]
            );

            return self::REJECT;
        }

        $entityManager->beginTransaction();
        try {
            try {
                $this->processHandler->handleJob($processJob);
                $entityManager->remove($processJob);
                $entityManager->flush();
            } finally {
                $this->processHandler->finishJob($processJob);
            }
            $entityManager->commit();
        } catch (\Exception $e) {
            $entityManager->rollback();

            throw $e;
        }

        return self::ACK;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedTopics()
    {
        return [Topics::EXECUTE_PROCESS_JOB];
    }
}
