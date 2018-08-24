<?php

namespace Oro\Bundle\AbandonedCartBundle\Provider\Transport\Iterator;

use Oro\Bundle\MailChimpBundle\Entity\Campaign;
use Oro\Bundle\MailChimpBundle\Provider\Transport\Iterator\CampaignIterator;

class AutomationCampaignIterator extends CampaignIterator
{
    /**
     * @var CampaignIterator
     */
    protected $campaignIterator;

    /**
     * @param CampaignIterator $campaignIterator
     */
    public function __construct(CampaignIterator $campaignIterator)
    {
        parent::__construct($campaignIterator->client, $campaignIterator->filters, $campaignIterator->batchSize);
        $this->campaignIterator = $campaignIterator;
        $this->filters['uses_segment'] = true;
        $this->filters['type'] = Campaign::TYPE_AUTO;
    }
}
