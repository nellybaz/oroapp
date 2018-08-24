<?php

namespace Oro\Bundle\WebsiteSearchBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

use Oro\Component\Config\Loader\CumulativeConfigLoader;
use Oro\Component\Config\Loader\YamlCumulativeFileLoader;

class OroWebsiteSearchExtension extends Extension
{
    const ALIAS = 'oro_website_search';

    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $config = $this->processConfiguration(new Configuration(), $configs);

        $container->setParameter('oro_website_search.engine', $config['engine']);
        $container->setParameter('oro_website_search.engine_parameters', $config['engine_parameters']);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
        $loader->load('attribute_types.yml');

        $ymlLoader = new YamlCumulativeFileLoader(
            'Resources/config/oro/website_search_engine/' . $config['engine'] . '.yml'
        );

        $engineLoader = new CumulativeConfigLoader('oro_website_search', $ymlLoader);
        $engineResources = $engineLoader->load($container);

        foreach ($engineResources as $engineResource) {
            $loader->load($engineResource->path);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAlias()
    {
        return self::ALIAS;
    }
}
