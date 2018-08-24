<?php

namespace Oro\Bundle\InventoryBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\ConfigBundle\DependencyInjection\SettingsBuilder;

class Configuration implements ConfigurationInterface
{
    const MANAGE_INVENTORY = 'manage_inventory';
    const HIGHLIGHT_LOW_INVENTORY = 'highlight_low_inventory';
    const INVENTORY_THRESHOLD = 'inventory_threshold';
    const LOW_INVENTORY_THRESHOLD = 'low_inventory_threshold';
    const BACKORDERS = 'backorders';
    const DECREMENT_INVENTORY = 'decrement_inventory';
    const MINIMUM_QUANTITY_TO_ORDER = 'minimum_quantity_to_order';
    const MAXIMUM_QUANTITY_TO_ORDER = 'maximum_quantity_to_order';
    const DEFAULT_MAXIMUM_QUANTITY_TO_ORDER = 100000;

    /**
     * @return string
     */
    public static function getMaximumQuantityToOrderFullConfigurationName()
    {
        return self::getConfigKeyByName(self::MAXIMUM_QUANTITY_TO_ORDER);
    }

    /**
     * @return string
     */
    public static function getMinimumQuantityToOrderFullConfigurationName()
    {
        return self::getConfigKeyByName(self::MINIMUM_QUANTITY_TO_ORDER);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root(OroInventoryExtension::ALIAS);
        SettingsBuilder::append(
            $rootNode,
            [
                self::MANAGE_INVENTORY => ['type' => 'boolean', 'value' => false],
                self::HIGHLIGHT_LOW_INVENTORY => ['type' => 'boolean', 'value' => false],
                self::INVENTORY_THRESHOLD => ['type' => 'decimal', 'value' => 0],
                self::LOW_INVENTORY_THRESHOLD => ['type' => 'decimal', 'value' => 0],
                self::BACKORDERS => ['type' => 'boolean', 'value' => false],
                self::DECREMENT_INVENTORY => ['type' => 'boolean', 'value' => true],
                self::MINIMUM_QUANTITY_TO_ORDER => ['type' => 'decimal', 'value' => null],
                self::MAXIMUM_QUANTITY_TO_ORDER => [
                    'type' => 'decimal',
                    'value' => self::DEFAULT_MAXIMUM_QUANTITY_TO_ORDER,
                ],
            ]
        );

        return $treeBuilder;
    }

    /**
     * Returns the full config path key (with namespace) by the config name
     *
     * @param $name string last part of the key name (one of the class const can be used)
     * @return string full config path key
     */
    public static function getConfigKeyByName($name)
    {
        return OroInventoryExtension::ALIAS . ConfigManager::SECTION_MODEL_SEPARATOR . $name;
    }
}
