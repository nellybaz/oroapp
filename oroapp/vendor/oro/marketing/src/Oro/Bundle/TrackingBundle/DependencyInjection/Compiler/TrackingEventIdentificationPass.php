<?php

namespace Oro\Bundle\TrackingBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class TrackingEventIdentificationPass implements CompilerPassInterface
{
    const TAG = 'oro_tracking.provider.identification';

    const PROVIDER_SERVICE_ID = 'oro_tracking.provider.identifier_provider';

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition(self::PROVIDER_SERVICE_ID)) {
            return;
        }

        // find providers
        $providers      = [];
        $taggedServices = $container->findTaggedServiceIds(self::TAG);
        foreach ($taggedServices as $id => $attributes) {
            $priority               = isset($attributes[0]['priority']) ? $attributes[0]['priority'] : 0;
            $providers[$priority][] = new Reference($id);
        }
        if (empty($providers)) {
            return;
        }

        // sort by priority and flatten
        ksort($providers);
        $providers = call_user_func_array('array_merge', $providers);

        // register
        $serviceDef = $container->getDefinition(self::PROVIDER_SERVICE_ID);
        foreach ($providers as $provider) {
            $serviceDef->addMethodCall('addProvider', [$provider]);
        }
    }
}
