<?php

namespace Oro\Bundle\DotmailerBundle\Transport;

use Oro\Bundle\CampaignBundle\Entity\EmailCampaign;
use Oro\Bundle\CampaignBundle\Transport\TransportInterface;
use Oro\Bundle\CampaignBundle\Transport\VisibilityTransportInterface;
use Oro\Bundle\DotmailerBundle\Form\Type\DotmailerTransportSettingsType;

class DotmailerEmailCampaignTransport implements TransportInterface, VisibilityTransportInterface
{
    const NAME = 'dotmailer';

    /**
     * {@inheritdoc}
     */
    public function send(EmailCampaign $campaign, $entity, array $from, array $to)
    {
        //CBORO-10 do not required realization of this method
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
        return 'oro.dotmailer.emailcampaign.transport.' . self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getSettingsFormType()
    {
        return DotmailerTransportSettingsType::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getSettingsEntityFQCN()
    {
        return 'Oro\Bundle\DotmailerBundle\Entity\DotmailerTransportSettings';
    }

    /**
     * {@inheritdoc}
     */
    public function isVisibleInForm()
    {
        return false;
    }
}
