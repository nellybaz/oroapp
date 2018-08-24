<?php

namespace Oro\Bundle\DashboardBundle\EventListener;

use Oro\Bundle\DashboardBundle\Model\WidgetConfigs;
use Oro\Bundle\DataGridBundle\Event\OrmResultBeforeQuery;

class WidgetSortByListener
{
    /** @var WidgetConfigs */
    protected $widgetconfigs;

    /**
     * @param WidgetConfigs $widgetconfigs
     */
    public function __construct(WidgetConfigs $widgetconfigs)
    {
        $this->widgetconfigs = $widgetconfigs;
    }

    /**
     * @param OrmResultBeforeQuery $event
     */
    public function onResultBeforeQuery(OrmResultBeforeQuery $event)
    {
        $widgetOptions = $this->widgetconfigs->getWidgetOptions();
        if (!$widgetOptions) {
            return;
        }

        $sortBy = $widgetOptions->get('sortBy');
        if (empty($sortBy['property'])) {
            return;
        }

        $qb = $event->getQueryBuilder();
        $rootAliases = $qb->getRootAliases();

        $metadata = $qb->getEntityManager()->getClassMetadata($sortBy['className']);
        if (!$metadata->hasField($sortBy['property'])) {
            return;
        }

        $qb
            ->resetDQLPart('orderBy')
            ->orderBy(sprintf('%s.%s', reset($rootAliases), $sortBy['property']), $sortBy['order']);
    }
}
