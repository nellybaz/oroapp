<?php

namespace Oro\Bundle\CalendarBundle\Notification;

use Oro\Bundle\EmailBundle\Model\EmailTemplateInterface;
use Oro\Bundle\NotificationBundle\Model\EmailNotificationInterface;

class EmailNotificationAdapter implements EmailNotificationInterface
{
    /**
     * @var EmailTemplateInterface
     */
    protected $template;

    /**
     * @var string[]
     */
    protected $recipients;

    /**
     * Constructor
     *
     * @param EmailTemplateInterface $template
     * @param                        $toEmail
     */
    public function __construct(EmailTemplateInterface $template, $toEmail)
    {
        $this->template = $template;
        $this->recipients = array($toEmail);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Gets email address of an user who owns a calendar
     *
     * @return string[]
     */
    public function getRecipientEmails()
    {
        return $this->recipients;
    }
}
