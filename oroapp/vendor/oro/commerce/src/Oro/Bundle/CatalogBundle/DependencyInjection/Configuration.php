<?php

namespace Oro\Bundle\CatalogBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\ConfigBundle\DependencyInjection\SettingsBuilder;

class Configuration implements ConfigurationInterface
{
    const ROOT_NODE = OroCatalogExtension::ALIAS;
    const DIRECT_URL_PREFIX = 'category_direct_url_prefix';
    const ALL_PRODUCTS_PAGE_ENABLED = 'all_products_page_enabled';

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root(self::ROOT_NODE);

        SettingsBuilder::append(
            $rootNode,
            [
                self::DIRECT_URL_PREFIX => ['value' => ''],
                self::ALL_PRODUCTS_PAGE_ENABLED => ['type' => 'boolean', 'value' => false],
            ]
        );

        return $treeBuilder;
    }

    /**
     * Returns full key name by it's last part
     *
     * @param $name string last part of the key name (one of the class cons can be used)
     * @return string full config path key
     */
    public static function getConfigKeyByName($name)
    {
        return self::ROOT_NODE . ConfigManager::SECTION_MODEL_SEPARATOR . $name;
    }
}
