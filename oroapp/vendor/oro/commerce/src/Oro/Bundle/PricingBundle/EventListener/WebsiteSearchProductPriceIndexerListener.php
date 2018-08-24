<?php

namespace Oro\Bundle\PricingBundle\EventListener;

use Symfony\Bridge\Doctrine\RegistryInterface;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\PricingBundle\DependencyInjection\Configuration;
use Oro\Bundle\PricingBundle\Entity\CombinedProductPrice;
use Oro\Bundle\PricingBundle\Placeholder\CPLIdPlaceholder;
use Oro\Bundle\PricingBundle\Placeholder\CurrencyPlaceholder;
use Oro\Bundle\PricingBundle\Placeholder\UnitPlaceholder;
use Oro\Bundle\WebsiteSearchBundle\Event\IndexEntityEvent;
use Oro\Bundle\WebsiteSearchBundle\Manager\WebsiteContextManager;

class WebsiteSearchProductPriceIndexerListener
{
    const MP_ALIAS = 'minimal_price_CPL_ID_CURRENCY_UNIT';

    /**
     * @var WebsiteContextManager
     */
    private $websiteContextManger;

    /**
     * @var RegistryInterface
     */
    private $doctrine;

    /**
     * @var ConfigManager
     */
    private $configManager;

    /**
     * @param WebsiteContextManager $websiteContextManager
     * @param RegistryInterface $doctrine
     * @param ConfigManager $configManager
     */
    public function __construct(
        WebsiteContextManager $websiteContextManager,
        RegistryInterface $doctrine,
        ConfigManager $configManager
    ) {
        $this->websiteContextManger = $websiteContextManager;
        $this->doctrine = $doctrine;
        $this->configManager = $configManager;
    }

    /**
     * @param IndexEntityEvent $event
     */
    public function onWebsiteSearchIndex(IndexEntityEvent $event)
    {
        $websiteId = $this->websiteContextManger->getWebsiteId($event->getContext());
        if (!$websiteId) {
            $event->stopPropagation();

            return;
        }

        $repository = $this->doctrine->getManagerForClass(CombinedProductPrice::class)
            ->getRepository(CombinedProductPrice::class);
        $configCpl = $this->configManager->get(Configuration::getConfigKeyToPriceList());

        $prices = $repository->findMinByWebsiteForFilter(
            $websiteId,
            $event->getEntities(),
            $configCpl
        );

        foreach ($prices as $price) {
            $event->addPlaceholderField(
                $price['product'],
                self::MP_ALIAS,
                $price['value'],
                [
                    CPLIdPlaceholder::NAME => $price['cpl'],
                    CurrencyPlaceholder::NAME => $price['currency'],
                    UnitPlaceholder::NAME => $price['unit'],
                ]
            );
        }

        $prices = $repository->findMinByWebsiteForSort(
            $websiteId,
            $event->getEntities(),
            $configCpl
        );
        foreach ($prices as $price) {
            $event->addPlaceholderField(
                $price['product'],
                'minimal_price_CPL_ID_CURRENCY',
                $price['value'],
                [
                    CPLIdPlaceholder::NAME => $price['cpl'],
                    CurrencyPlaceholder::NAME => $price['currency'],
                ]
            );
        }
    }
}
