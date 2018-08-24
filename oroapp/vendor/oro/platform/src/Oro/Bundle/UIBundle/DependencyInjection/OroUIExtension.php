<?php

namespace Oro\Bundle\UIBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

use Oro\Component\Config\Loader\CumulativeConfigLoader;
use Oro\Component\Config\Loader\YamlCumulativeFileLoader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class OroUIExtension extends Extension
{
    const ALIAS = 'oro_ui';
    const PLACEHOLDERS_CONFIG_ROOT_NODE = 'placeholders';
    const PLACEHOLDERS_NODE = 'placeholders';
    const PLACEHOLDERS_ITEMS_NODE = 'items';

    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();

        array_unshift(
            $configs,
            $this->loadPlaceholdersConfigs($container)
        );
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
        $loader->load('content_providers.yml');
        $loader->load('layouts.yml');
        $loader->load('block_types.yml');
        $loader->load('form_types.yml');

        $container->setParameter(
            'oro_ui.placeholders',
            [
                'placeholders' => $config['placeholders'],
                'items' => $config['placeholder_items']
            ]
        );

        $container->prependExtensionConfig($this->getAlias(), array_intersect_key($config, array_flip(['settings'])));

        $this->addClassesToCompile([
            'Oro\Bundle\UIBundle\EventListener\ContentProviderListener',
            'Oro\Bundle\UIBundle\Twig\Environment'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getAlias()
    {
        return static::ALIAS;
    }

    /**
     * Loads configuration from placeholders.yml files
     *
     * @param ContainerBuilder $container
     * @return array
     */
    protected function loadPlaceholdersConfigs(ContainerBuilder $container)
    {
        $placeholders = [];
        $items = [];

        $configLoader = new CumulativeConfigLoader(
            'oro_placeholders',
            new YamlCumulativeFileLoader('Resources/config/oro/placeholders.yml')
        );
        $resources = $configLoader->load($container);

        foreach ($resources as $resource) {
            if (!isset($resource->data[self::PLACEHOLDERS_CONFIG_ROOT_NODE])
                || !is_array($resource->data[self::PLACEHOLDERS_CONFIG_ROOT_NODE])
            ) {
                continue;
            }

            $config = &$resource->data[self::PLACEHOLDERS_CONFIG_ROOT_NODE];

            if (isset($config[self::PLACEHOLDERS_NODE])) {
                $this->ensurePlaceholdersCompleted($config[self::PLACEHOLDERS_NODE]);
                $placeholders = array_replace_recursive($placeholders, $config[self::PLACEHOLDERS_NODE]);
            }
            if (isset($config[self::PLACEHOLDERS_ITEMS_NODE])) {
                $items = array_replace_recursive($items, $config[self::PLACEHOLDERS_ITEMS_NODE]);
            }
        }

        return [
            'placeholders' => $placeholders,
            'placeholder_items' => $items
        ];
    }

    /**
     * Makes sure the placeholder's array does not contains gaps
     *
     * For example 'items' attribute should exist for each placeholder
     * even if there are no any items there
     *
     * it is required for correct merging of placeholders
     * if we do not do this the newly loaded placeholder without 'items' attribute removes
     * already loaded items
     *
     * @param array $placeholders
     */
    protected function ensurePlaceholdersCompleted(&$placeholders)
    {
        $names = array_keys($placeholders);
        foreach ($names as $name) {
            if (!isset($placeholders[$name]['items'])) {
                $placeholders[$name]['items'] = [];
            }
        }
    }
}
