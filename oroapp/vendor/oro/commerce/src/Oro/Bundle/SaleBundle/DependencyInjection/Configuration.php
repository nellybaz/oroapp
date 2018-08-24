<?php

namespace Oro\Bundle\SaleBundle\DependencyInjection;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\ConfigBundle\DependencyInjection\SettingsBuilder;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\SaleBundle\Provider\ContactInfoSourceOptionsProvider;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    const CONTACT_INFO_SOURCE_DISPLAY = 'contact_info_source_display';
    const CONTACT_DETAILS = 'contact_details';
    const ALLOW_USER_CONFIGURATION = 'allow_user_configuration';
    const AVAILABLE_USER_OPTIONS = 'available_user_options';
    const CONTACT_INFO_USER_OPTION = 'contact_info_user_option';
    const CONTACT_INFO_MANUAL_TEXT = 'contact_info_manual_text';
    const GUEST_CONTACT_INFO_TEXT = 'guest_contact_info_text';

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root('oro_sale');

        SettingsBuilder::append(
            $rootNode,
            [
                'backend_product_visibility' => [
                    'value' => [
                        Product::INVENTORY_STATUS_IN_STOCK,
                        Product::INVENTORY_STATUS_OUT_OF_STOCK
                    ]
                ],
                self::CONTACT_INFO_SOURCE_DISPLAY => ['value' => ContactInfoSourceOptionsProvider::DONT_DISPLAY],
                self::CONTACT_DETAILS => ['value' => ''],
                self::ALLOW_USER_CONFIGURATION => ['value' => true, 'type' => 'boolean'],
                self::AVAILABLE_USER_OPTIONS => ['value' => [], 'type' => 'array'],
                self::CONTACT_INFO_USER_OPTION => ['value' => ''],
                self::CONTACT_INFO_MANUAL_TEXT => ['value' => ''],
                self::GUEST_CONTACT_INFO_TEXT => ['value' => ''],
            ]
        );

        return $treeBuilder;
    }

    /**
     * @param string $key
     * @return string
     */
    public static function getConfigKeyByName($key)
    {
        return implode(ConfigManager::SECTION_MODEL_SEPARATOR, [OroSaleExtension::ALIAS, $key]);
    }
}
