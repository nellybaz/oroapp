<?php

namespace Oro\Bundle\ApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

use Oro\Component\ChainProcessor\Debug\TraceableProcessorApplicableCheckerFactory;
use Oro\Component\ChainProcessor\Debug\TraceableProcessorFactory;
use Oro\Component\Config\Loader\CumulativeConfigLoader;
use Oro\Component\Config\Loader\YamlCumulativeFileLoader;
use Oro\Component\DependencyInjection\ExtendedContainerBuilder;
use Oro\Bundle\ApiBundle\Config\Definition\ApiConfiguration;
use Oro\Bundle\ApiBundle\Debug\TraceableActionProcessorBag;
use Oro\Bundle\ApiBundle\Util\DependencyInjectionUtil;

class OroApiExtension extends Extension implements PrependExtensionInterface
{
    const API_DOC_VIEWS_PARAMETER_NAME = 'oro_api.api_doc.views';
    const API_DOC_PATH_PARAMETER_NAME  = 'oro_api.api_doc.path';

    const ACTION_PROCESSOR_BAG_SERVICE_ID                 = 'oro_api.action_processor_bag';
    const CONFIG_EXTENSION_REGISTRY_SERVICE_ID            = 'oro_api.config_extension_registry';
    const PROCESSOR_BAG_SERVICE_ID                        = 'oro_api.processor_bag';
    const PROCESSOR_FACTORY_SERVICE_ID                    = 'oro_api.processor_factory';
    const APPLICABLE_CHECKER_FACTORY_SERVICE_ID           = 'oro_api.processor_applicable_checker_factory';
    const APPLICABLE_CHECKER_FACTORY_UNGROUPED_SERVICE_ID = 'oro_api.processor_applicable_checker_factory.ungrouped';
    const COLLECT_RESOURCES_PROCESSOR_SERVICE_ID          = 'oro_api.collect_resources.processor';
    const COLLECT_SUBRESOURCES_PROCESSOR_SERVICE_ID       = 'oro_api.collect_subresources.processor';
    const CUSTOMIZE_LOADED_DATA_PROCESSOR_SERVICE_ID      = 'oro_api.customize_loaded_data.processor';
    const CUSTOMIZE_FORM_DATA_PROCESSOR_SERVICE_ID        = 'oro_api.customize_form_data.processor';
    const GET_CONFIG_PROCESSOR_SERVICE_ID                 = 'oro_api.get_config.processor';
    const GET_RELATION_CONFIG_PROCESSOR_SERVICE_ID        = 'oro_api.get_relation_config.processor';
    const GET_METADATA_PROCESSOR_SERVICE_ID               = 'oro_api.get_metadata.processor';
    const NORMALIZE_VALUE_PROCESSOR_SERVICE_ID            = 'oro_api.normalize_value.processor';
    const CONFIG_BAG_SERVICE_ID                           = 'oro_api.config_bag';
    const ENTITY_ALIAS_PROVIDER_SERVICE_ID                = 'oro_api.entity_alias_provider';
    const ENTITY_EXCLUSION_PROVIDER_SERVICE_ID            = 'oro_api.entity_exclusion_provider';
    const CONFIG_ENTITY_EXCLUSION_PROVIDER_SERVICE_ID     = 'oro_api.entity_exclusion_provider.config';

    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $config = $this->processConfiguration($this->getConfiguration($configs, $container), $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
        $loader->load('data_transformers.yml');
        $loader->load('filters.yml');
        $loader->load('form.yml');
        $loader->load('processors.normalize_value.yml');
        $loader->load('processors.collect_resources.yml');
        $loader->load('processors.collect_subresources.yml');
        $loader->load('processors.get_config.yml');
        $loader->load('processors.get_metadata.yml');
        $loader->load('processors.customize_loaded_data.yml');
        $loader->load('processors.shared.yml');
        $loader->load('processors.get_list.yml');
        $loader->load('processors.get.yml');
        $loader->load('processors.delete.yml');
        $loader->load('processors.delete_list.yml');
        $loader->load('processors.create.yml');
        $loader->load('processors.update.yml');
        $loader->load('processors.get_subresource.yml');
        $loader->load('processors.get_relationship.yml');
        $loader->load('processors.delete_relationship.yml');
        $loader->load('processors.add_relationship.yml');
        $loader->load('processors.update_relationship.yml');

        if ($container->getParameter('kernel.debug')) {
            $loader->load('debug.yml');
            $this->registerDebugServices($container);
        }
        if ('test' === $container->getParameter('kernel.environment')) {
            $this->configureTestEnvironment($container);
        }

        /**
         * To load configuration we need fully configured config tree builder,
         * that's why the action processors bag and all configuration extensions should be registered before.
         */
        $this->registerConfigParameters($container, $config);
        $this->registerActionProcessors($container, $config);
        $this->registerConfigExtensions($container, $config);

        try {
            $this->loadApiConfiguration($container);
            $this->loadFrontendApiConfiguration($container);
        } catch (InvalidConfigurationException $e) {
            // we have to rethrow the configuration exception but without an inner exception,
            // otherwise a message of the root exception is displayed
            if (null !== $e->getPrevious()) {
                $e = new InvalidConfigurationException($e->getMessage());
            }
            throw $e;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepend(ContainerBuilder $container)
    {
        if ($container instanceof ExtendedContainerBuilder) {
            $configs = $container->getExtensionConfig('fos_rest');
            foreach ($configs as $key => $config) {
                if (isset($config['format_listener']['rules']) && is_array($config['format_listener']['rules'])) {
                    array_unshift(
                        $configs[$key]['format_listener']['rules'],
                        [
                            'path'             => '^/api/(?!(rest|doc)(/|$)+)',
                            'priorities'       => ['json'],
                            'fallback_format'  => 'json',
                            'prefer_extension' => false
                        ]
                    );
                    break;
                }
            }
            $container->setExtensionConfig('fos_rest', $configs);
        }
    }

    /**
     * @param ContainerBuilder $container
     */
    protected function registerDebugServices(ContainerBuilder $container)
    {
        DependencyInjectionUtil::registerDebugService(
            $container,
            self::ACTION_PROCESSOR_BAG_SERVICE_ID,
            TraceableActionProcessorBag::class
        );
        DependencyInjectionUtil::registerDebugService(
            $container,
            self::PROCESSOR_FACTORY_SERVICE_ID,
            TraceableProcessorFactory::class
        );
        DependencyInjectionUtil::registerDebugService(
            $container,
            self::APPLICABLE_CHECKER_FACTORY_SERVICE_ID,
            TraceableProcessorApplicableCheckerFactory::class
        );
        DependencyInjectionUtil::registerDebugService(
            $container,
            self::APPLICABLE_CHECKER_FACTORY_UNGROUPED_SERVICE_ID,
            TraceableProcessorApplicableCheckerFactory::class
        );
        DependencyInjectionUtil::registerDebugService(
            $container,
            self::COLLECT_RESOURCES_PROCESSOR_SERVICE_ID
        );
        DependencyInjectionUtil::registerDebugService(
            $container,
            self::COLLECT_SUBRESOURCES_PROCESSOR_SERVICE_ID
        );
        DependencyInjectionUtil::registerDebugService(
            $container,
            self::CUSTOMIZE_LOADED_DATA_PROCESSOR_SERVICE_ID
        );
        DependencyInjectionUtil::registerDebugService(
            $container,
            self::CUSTOMIZE_FORM_DATA_PROCESSOR_SERVICE_ID
        );
        DependencyInjectionUtil::registerDebugService(
            $container,
            self::GET_CONFIG_PROCESSOR_SERVICE_ID
        );
        DependencyInjectionUtil::registerDebugService(
            $container,
            self::GET_RELATION_CONFIG_PROCESSOR_SERVICE_ID
        );
        DependencyInjectionUtil::registerDebugService(
            $container,
            self::GET_METADATA_PROCESSOR_SERVICE_ID
        );
        DependencyInjectionUtil::registerDebugService(
            $container,
            self::NORMALIZE_VALUE_PROCESSOR_SERVICE_ID
        );
    }

    /**
     * @param ContainerBuilder $container
     */
    protected function configureTestEnvironment(ContainerBuilder $container)
    {
        // oro_api.tests.migration_listener
        $testMigrationListenerDef = new Definition(
            'Oro\Bundle\ApiBundle\Tests\Functional\Environment\TestEntitiesMigrationListener'
        );
        $testMigrationListenerDef->addTag(
            'kernel.event_listener',
            ['event' => 'oro_migration.post_up', 'method' => 'onPostUp']
        );
        $container->setDefinition('oro_api.tests.migration_listener', $testMigrationListenerDef);

        // oro_api.tests.entity_alias_provider
        $testEntityAliasProviderDef = new Definition(
            'Oro\Bundle\ApiBundle\Tests\Functional\Environment\TestEntitiesAliasProvider'
        );
        $testEntityAliasProviderDef->setPublic(false);
        $testEntityAliasProviderDef->addTag('oro_entity.alias_provider');
        $container->setDefinition('oro_api.tests.entity_alias_provider', $testEntityAliasProviderDef);

        // oro_api.config_bag
        $configBagDef = $container->getDefinition(self::CONFIG_BAG_SERVICE_ID);
        $configBagDef->setClass('Oro\Bundle\ApiBundle\Tests\Functional\Environment\TestConfigBag');
        $configBagDef->addMethodCall(
            'setExtensionRegistry',
            [new Reference(self::CONFIG_EXTENSION_REGISTRY_SERVICE_ID)]
        );

        // oro_api.tests.config_registry
        $container->setDefinition(
            'oro_api.tests.config_registry',
            new Definition(
                'Oro\Bundle\ApiBundle\Tests\Functional\Environment\TestConfigRegistry',
                [
                    new Reference(self::CONFIG_BAG_SERVICE_ID),
                    new Reference('oro_api.config_provider'),
                    new Reference('oro_api.relation_config_provider'),
                    new Reference('oro_api.metadata_provider'),
                    new Reference('oro_api.resources_cache.impl')
                ]
            )
        );
    }

    /**
     * @param ContainerBuilder $container
     */
    protected function loadApiConfiguration(ContainerBuilder $container)
    {
        $configFileLoaders = [new YamlCumulativeFileLoader('Resources/config/oro/api.yml')];
        if ('test' === $container->getParameter('kernel.environment')) {
            $configFileLoaders[] = new YamlCumulativeFileLoader('Tests/Functional/Environment/api.yml');
        }
        $configLoader = new CumulativeConfigLoader('oro_api', $configFileLoaders);
        $resources = $configLoader->load($container);

        $config = [];
        foreach ($resources as $resource) {
            if (array_key_exists(ApiConfiguration::ROOT_NODE, $resource->data)) {
                $config[] = $resource->data[ApiConfiguration::ROOT_NODE];
            }
        }
        $config = $this->processConfiguration(
            new ApiConfiguration($container->get(self::CONFIG_EXTENSION_REGISTRY_SERVICE_ID)),
            $config
        );

        $entityAliases = $config[ApiConfiguration::ENTITY_ALIASES_SECTION];
        unset($config[ApiConfiguration::ENTITY_ALIASES_SECTION]);
        $exclusions = $config[ApiConfiguration::EXCLUSIONS_SECTION];
        unset($config[ApiConfiguration::EXCLUSIONS_SECTION]);
        $inclusions = $config[ApiConfiguration::INCLUSIONS_SECTION];
        unset($config[ApiConfiguration::INCLUSIONS_SECTION]);

        $configBagDef = $container->getDefinition(self::CONFIG_BAG_SERVICE_ID);
        $configBagDef->replaceArgument(0, $config);

        $entityAliasProviderDef = $container->getDefinition(self::ENTITY_ALIAS_PROVIDER_SERVICE_ID);
        $entityAliasProviderDef->replaceArgument(0, $entityAliases);
        $entityAliasProviderDef->replaceArgument(1, array_column($exclusions, 'entity'));

        $exclusionProviderDef = $container->getDefinition(self::CONFIG_ENTITY_EXCLUSION_PROVIDER_SERVICE_ID);
        $exclusionProviderDef->replaceArgument(1, $exclusions);

        $chainProviderDef = $container->getDefinition(self::ENTITY_EXCLUSION_PROVIDER_SERVICE_ID);
        $chainProviderDef->replaceArgument(1, $inclusions);
    }

    /**
     * @param ContainerBuilder $container
     */
    private function loadFrontendApiConfiguration(ContainerBuilder $container)
    {
        $configFileLoaders = [new YamlCumulativeFileLoader('Resources/config/oro/api_frontend.yml')];
        if ('test' === $container->getParameter('kernel.environment')) {
            $configFileLoaders[] = new YamlCumulativeFileLoader('Tests/Functional/Environment/api_frontend.yml');
        }
        $configLoader = new CumulativeConfigLoader('oro_api', $configFileLoaders);
        $resources = $configLoader->load($container);

        $config = [];
        foreach ($resources as $resource) {
            if (array_key_exists(ApiConfiguration::ROOT_NODE, $resource->data)) {
                $config[] = $resource->data[ApiConfiguration::ROOT_NODE];
            }
        }
        $config = $this->processConfiguration(
            new ApiConfiguration($container->get(self::CONFIG_EXTENSION_REGISTRY_SERVICE_ID)),
            $config
        );

        unset($config[ApiConfiguration::ENTITY_ALIASES_SECTION]);
        unset($config[ApiConfiguration::EXCLUSIONS_SECTION]);
        unset($config[ApiConfiguration::INCLUSIONS_SECTION]);

        $configBagDef = $container->getDefinition(self::CONFIG_BAG_SERVICE_ID);
        $configBagDef->addMethodCall('setFrontendConfig', [$config]);
    }

    /**
     * @param ContainerBuilder $container
     * @param array            $config
     */
    protected function registerConfigParameters(ContainerBuilder $container, array $config)
    {
        $container
            ->getDefinition(self::CONFIG_EXTENSION_REGISTRY_SERVICE_ID)
            ->replaceArgument(0, $config['config_max_nesting_level']);
        $container->setParameter(self::API_DOC_VIEWS_PARAMETER_NAME, $config['api_doc_views']);
        $container->setParameter(self::API_DOC_PATH_PARAMETER_NAME, $config['documentation_path']);
    }

    /**
     * @param ContainerBuilder $container
     * @param array            $config
     */
    protected function registerActionProcessors(ContainerBuilder $container, array $config)
    {
        $actionProcessorBagServiceDef = DependencyInjectionUtil::findDefinition(
            $container,
            self::ACTION_PROCESSOR_BAG_SERVICE_ID
        );
        if (null !== $actionProcessorBagServiceDef) {
            $logger = new Reference('logger', ContainerInterface::IGNORE_ON_INVALID_REFERENCE);
            foreach ($config['actions'] as $action => $actionConfig) {
                if (empty($actionConfig['processor_service_id'])) {
                    continue;
                }
                $actionProcessorServiceId = $actionConfig['processor_service_id'];
                // inject the logger for "api" channel into an action processor
                // we have to do it in this way rather than in service.yml to avoid
                // "The service definition "logger" does not exist." exception
                $container->getDefinition($actionProcessorServiceId)
                    ->addTag('monolog.logger', ['channel' => 'api'])
                    ->addMethodCall('setLogger', [$logger]);
                // register an action processor in the bag
                $actionProcessorBagServiceDef->addMethodCall(
                    'addProcessor',
                    [new Reference($actionProcessorServiceId)]
                );
            }
        }
    }

    /**
     * @param ContainerBuilder $container
     * @param array            $config
     */
    protected function registerConfigExtensions(ContainerBuilder $container, array $config)
    {
        $configExtensionRegistryDef = DependencyInjectionUtil::findDefinition(
            $container,
            self::CONFIG_EXTENSION_REGISTRY_SERVICE_ID
        );
        if (null !== $configExtensionRegistryDef) {
            foreach ($config['config_extensions'] as $serviceId) {
                $configExtensionRegistryDef->addMethodCall(
                    'addExtension',
                    [new Reference($serviceId)]
                );
            }
        }
    }
}
