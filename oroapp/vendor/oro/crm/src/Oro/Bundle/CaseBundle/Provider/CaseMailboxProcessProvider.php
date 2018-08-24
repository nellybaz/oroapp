<?php

namespace Oro\Bundle\CaseBundle\Provider;

use Oro\Bundle\EmailBundle\Entity\Mailbox;
use Oro\Bundle\EmailBundle\Mailbox\MailboxProcessProviderInterface;

/**
 * Class CaseMailboxProcessProvider
 *
 * Registers convert to case mailbox email process.
 * Actual implementation of this process can be found in processes.yml of this bundle.
 *
 * @package Oro\Bundle\CaseBundle\Provider
 */
class CaseMailboxProcessProvider implements MailboxProcessProviderInterface
{
    const PROCESS_DEFINITION_NAME = 'convert_mailbox_email_to_case';

    /**
     * {@inheritdoc}
     */
    public function getSettingsEntityFQCN()
    {
        return 'Oro\Bundle\CaseBundle\Entity\CaseMailboxProcessSettings';
    }

    /**
     * {@inheritdoc}
     */
    public function getSettingsFormType()
    {
        return 'oro_case_mailbox_process_settings';
    }

    /**
     * {@inheritdoc}
     */
    public function getLabel()
    {
        return 'oro.case.mailbox.process.case.label';
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled(Mailbox $mailbox = null)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessDefinitionName()
    {
        return self::PROCESS_DEFINITION_NAME;
    }
}
