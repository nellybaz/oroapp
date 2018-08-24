<?php

namespace Oro\Bundle\CampaignBundle\EventListener;

use Doctrine\Common\Persistence\ManagerRegistry;

use Oro\Bundle\DataGridBundle\Datagrid\ParameterBag;
use Oro\Bundle\DataGridBundle\Event\PreBuild;
use Oro\Bundle\DataGridBundle\EventListener\MixinListener;
use Oro\Bundle\MarketingListBundle\Model\MarketingListHelper;

class CampaignStatisticDatagridListener
{
    /** @deprecated since 1.10. Use config->getName() instead */
    const PATH_NAME = '[name]';

    const MIXIN_SENT_NAME = 'oro-email-campaign-marketing-list-sent-items-mixin';
    const MIXIN_UNSENT_NAME = 'oro-email-campaign-marketing-list-unsent-items-mixin';

    /**
     * @var ManagerRegistry
     */
    protected $registry;

    /**
     * @var MarketingListHelper
     */
    protected $marketingListHelper;

    /**
     * @param MarketingListHelper $marketingListHelper
     * @param ManagerRegistry $registry
     */
    public function __construct(MarketingListHelper $marketingListHelper, ManagerRegistry $registry)
    {
        $this->marketingListHelper = $marketingListHelper;
        $this->registry = $registry;
    }

    /**
     * @param PreBuild $event
     */
    public function onPreBuild(PreBuild $event)
    {
        $config = $event->getConfig();
        $parameters = $event->getParameters();

        if (!$this->isApplicable($config->getName(), $parameters)) {
            return;
        }

        $emailCampaignId = $parameters->get('emailCampaign');
        $emailCampaign = $this->registry->getRepository('OroCampaignBundle:EmailCampaign')
            ->find($emailCampaignId);

        if ($emailCampaign->isSent()) {
            $config->getOrmQuery()->resetWhere();
            $mixin = self::MIXIN_SENT_NAME;
        } else {
            $mixin = self::MIXIN_UNSENT_NAME;
        }

        $parameters->set(MixinListener::GRID_MIXIN, $mixin);
    }

    /**
     * This listener is applicable for marketing list grids that has emailCampaign parameter set.
     *
     * @param string $gridName
     * @param ParameterBag $parameterBag
     *
     * @return bool
     */
    public function isApplicable($gridName, ParameterBag $parameterBag)
    {
        if (!$parameterBag->has('emailCampaign')) {
            return false;
        }

        return (bool)$this->marketingListHelper->getMarketingListIdByGridName($gridName);
    }
}
