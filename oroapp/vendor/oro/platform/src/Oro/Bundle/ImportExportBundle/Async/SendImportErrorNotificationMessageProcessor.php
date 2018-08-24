<?php

namespace Oro\Bundle\ImportExportBundle\Async;

use Psr\Log\LoggerInterface;

use Symfony\Bridge\Doctrine\RegistryInterface;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\NotificationBundle\Async\Topics as NotificationTopics;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Component\MessageQueue\Client\MessageProducerInterface;
use Oro\Component\MessageQueue\Client\TopicSubscriberInterface;
use Oro\Component\MessageQueue\Consumption\MessageProcessorInterface;
use Oro\Component\MessageQueue\Transport\MessageInterface;
use Oro\Component\MessageQueue\Transport\SessionInterface;
use Oro\Component\MessageQueue\Util\JSON;

/**
 * @deprecated since 2.1, will be removed in 2.3
 */
class SendImportErrorNotificationMessageProcessor implements MessageProcessorInterface, TopicSubscriberInterface
{
    /**
     * @var MessageProducerInterface
     */
    private $producer;

    /**
     *  @var LoggerInterface
     */
    private $logger;

    /**
     * @var ConfigManager
     */
    private $configManager;

    /**
     * @var RegistryInterface
     */
    private $doctrine;

    /**
     * @param MessageProducerInterface $producer
     * @param LoggerInterface $logger
     * @param ConfigManager $configManager
     * @param RegistryInterface $doctrine
     */
    public function __construct(
        MessageProducerInterface $producer,
        LoggerInterface $logger,
        ConfigManager $configManager,
        RegistryInterface $doctrine
    ) {
        $this->producer = $producer;
        $this->logger = $logger;
        $this->configManager = $configManager;
        $this->doctrine = $doctrine;
    }

    /**
     * {@inheritdoc}
     */
    public function process(MessageInterface $message, SessionInterface $session)
    {
        $body = JSON::decode($message->getBody());

        if (! isset($body['file'], $body['error']) &&
            ! (isset($body['userId']) || isset($body['notifyEmail']))
        ) {
            $this->logger->critical('Invalid message');

            return self::REJECT;
        }

        if (!isset($body['notifyEmail']) || !$body['notifyEmail']) {
            $user = $this->doctrine->getRepository(User::class)->find($body['userId']);
            if (! $user instanceof User) {
                $this->logger->error(
                    sprintf('User not found. Id: %s', $body['userId'])
                );

                return self::REJECT;
            }
            $notifyEmail = $user->getEmail();
        } else {
            $notifyEmail = $body['notifyEmail'];
        }
        $subject = sprintf('Cannot Import file %s', $body['file']);
        $this->sendNotification($notifyEmail, $body['error'], $subject);

        return self::ACK;
    }

    protected function sendNotification($toEmail, $summary, $subject)
    {
        $fromEmail = $this->configManager->get('oro_notification.email_notification_sender_email');
        $fromName = $this->configManager->get('oro_notification.email_notification_sender_name');
        $message = [
            'fromEmail' => $fromEmail,
            'fromName' => $fromName,
            'toEmail' => $toEmail,
            'subject' => $subject,
            'body' => $summary,
        ];

        $this->producer->send(
            NotificationTopics::SEND_NOTIFICATION_EMAIL,
            $message
        );

        $this->logger->info('Sent notification message.');
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedTopics()
    {
        return [Topics::SEND_IMPORT_ERROR_NOTIFICATION];
    }
}
