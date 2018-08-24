<?php

namespace Oro\Bundle\ReminderBundle\Model\Email;

use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Oro\Bundle\NotificationBundle\Manager\EmailNotificationManager;
use Oro\Bundle\ReminderBundle\Entity\Reminder;
use Oro\Bundle\ReminderBundle\Event\ReminderEvents;
use Oro\Bundle\ReminderBundle\Event\SendReminderEmailEvent;
use Oro\Bundle\ReminderBundle\Model\SendProcessorInterface;

class EmailSendProcessor implements SendProcessorInterface
{
    const NAME = 'email';

    /**
     * @var EmailNotificationManager
     */
    protected $emailNotificationManager;

    /**
     * @var ObjectManager
     */
    protected $em;

    /**
     * @var EmailNotification
     */
    protected $emailNotification;

    /**
     * @var Reminder[]
     */
    protected $reminders = array();

    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @param EmailNotificationManager $emailNotificationManager
     * @param EmailNotification          $emailNotification
     * @param EventDispatcherInterface   $eventDispatcher
     */
    public function __construct(
        EmailNotificationManager $emailNotificationManager,
        EmailNotification $emailNotification,
        EventDispatcherInterface $eventDispatcher
    ) {
        $this->emailNotificationManager = $emailNotificationManager;
        $this->emailNotification = $emailNotification;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function push(Reminder $reminder)
    {
        $this->reminders[] = $reminder;
    }

    /**
     * Send all reminders using email
     */
    public function process()
    {
        foreach ($this->reminders as $reminder) {
            $this->sendReminderEmail($reminder);
        }
        $this->reminders = array();
    }

    /**
     * Send reminder using email
     *
     * @param Reminder $reminder
     */
    public function sendReminderEmail(Reminder $reminder)
    {
        $event = new SendReminderEmailEvent($reminder);
        $this->eventDispatcher->dispatch(
            ReminderEvents::BEFORE_REMINDER_EMAIL_NOTIFICATION_SEND,
            $event
        );
        $this->emailNotification->setReminder($reminder);

        try {
            $this->emailNotificationManager
                ->process(
                    $this->emailNotification->getEntity(),
                    [$this->emailNotification],
                    null
                );
            $reminder->setState(Reminder::STATE_SENT);
        } catch (\Exception $exception) {
            $reminder->setState(Reminder::STATE_FAIL);
            $reminder->setFailureException($exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getLabel()
    {
        return 'oro.reminder.processor.email.label';
    }
}
