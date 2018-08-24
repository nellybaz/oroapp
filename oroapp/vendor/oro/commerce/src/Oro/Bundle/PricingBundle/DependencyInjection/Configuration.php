<?php

namespace Oro\Bundle\PricingBundle\DependencyInjection;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\ConfigBundle\DependencyInjection\SettingsBuilder;
use Oro\Bundle\CurrencyBundle\Rounding\PriceRoundingService;
use Oro\Bundle\PricingBundle\Builder\CombinedPriceListsBuilder;
use Oro\Bundle\PricingBundle\PricingStrategy\MinimalPricesCombiningStrategy;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    const ROOT_NODE = 'oro_pricing';
    const DEFAULT_PRICE_LISTS = 'default_price_lists';
    const ROUNDING_TYPE = 'rounding_type';
    const PRECISION = 'precision';
    const COMBINED_PRICE_LIST = 'combined_price_list';
    const FULL_COMBINED_PRICE_LIST = 'full_combined_price_list';
    const OFFSET_OF_PROCESSING_CPL_PRICES = 'offset_of_processing_cpl_prices';
    const PRICE_LIST_STRATEGIES = 'price_strategy';

    /**
     * @var string
     */
    protected static $configKeyToPriceList;

    /**
     * @var string
     */
    protected static $configKeyToFullPriceList;

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root(OroPricingExtension::ALIAS);

        SettingsBuilder::append(
            $rootNode,
            [
                self::DEFAULT_PRICE_LISTS => ['type' => 'array', 'value' => []],
                self::ROUNDING_TYPE => ['value' => PriceRoundingService::ROUND_HALF_UP],
                self::PRECISION => ['value' => PriceRoundingService::FALLBACK_PRECISION],
                self::COMBINED_PRICE_LIST => ['value' => null],
                self::FULL_COMBINED_PRICE_LIST => ['value' => null],
                self::OFFSET_OF_PROCESSING_CPL_PRICES => [
                    'value' => CombinedPriceListsBuilder::DEFAULT_OFFSET_OF_PROCESSING_CPL_PRICES
                ],
                self::PRICE_LIST_STRATEGIES => ['type' => 'string', 'value' => MinimalPricesCombiningStrategy::NAME]
            ]
        );

        return $treeBuilder;
    }

    /**
     * @return string
     */
    public static function getConfigKeyToPriceList()
    {
        if (!self::$configKeyToPriceList) {
            self::$configKeyToPriceList = self::getConfigKeyByName(Configuration::COMBINED_PRICE_LIST);
        }

        return self::$configKeyToPriceList;
    }

    /**
     * @return string
     */
    public static function getConfigKeyToFullPriceList()
    {
        if (!self::$configKeyToFullPriceList) {
            self::$configKeyToFullPriceList = self::getConfigKeyByName(Configuration::FULL_COMBINED_PRICE_LIST);
        }

        return self::$configKeyToFullPriceList;
    }

    /**
     * @param string $key
     * @return string
     */
    public static function getConfigKeyByName($key)
    {
        return implode(ConfigManager::SECTION_MODEL_SEPARATOR, [OroPricingExtension::ALIAS, $key]);
    }
}
