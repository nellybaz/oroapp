<?php

namespace Oro\Bundle\ProductBundle\EventListener;

use Oro\Bundle\WebsiteSearchBundle\Event\RestrictIndexEntityEvent;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Model\ProductVisibilityQueryBuilderModifier;

class RestrictIndexProductsEventListener
{
    /** @var ConfigManager */
    protected $configManager;

    /** @var ProductVisibilityQueryBuilderModifier */
    protected $modifier;

    /** @var string */
    protected $configPath;

    /**
     * @param ConfigManager $configManager
     * @param ProductVisibilityQueryBuilderModifier $modifier
     * @param string $configPath
     */
    public function __construct(
        ConfigManager $configManager,
        ProductVisibilityQueryBuilderModifier $modifier,
        $configPath
    ) {
        $this->configManager = $configManager;
        $this->modifier = $modifier;
        $this->configPath = $configPath;
    }

    /**
     * @param RestrictIndexEntityEvent $event
     */
    public function onRestrictIndexEntityEvent(RestrictIndexEntityEvent $event)
    {
        $this->modifier->modifyByStatus($event->getQueryBuilder(), [Product::STATUS_ENABLED]);
        $inventoryStatuses = $this->configManager->get($this->configPath);
        $this->modifier->modifyByInventoryStatus($event->getQueryBuilder(), $inventoryStatuses);
    }
}
