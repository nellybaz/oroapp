<?php

namespace Oro\Bundle\ShippingBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FreightClassExtensionPass implements CompilerPassInterface
{
    const PROVIDER_TAG = 'oro_shipping.extension.freight_classes';
    const EXTENSION_SERVICE_ID = 'oro_shipping.provider.measure_units.freight';

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition(self::EXTENSION_SERVICE_ID)) {
            return;
        }

        $providers = $container->findTaggedServiceIds(self::PROVIDER_TAG);
        if (!$providers) {
            return;
        }

        $service = $container->getDefinition(self::EXTENSION_SERVICE_ID);

        foreach ($providers as $id => $attributes) {
            $definition = $container->getDefinition($id);
            $definition->setPublic(false);

            foreach ($attributes as $eachTag) {
                $alias = empty($eachTag['alias']) ? $id : $eachTag['alias'];

                $service->addMethodCall('addExtension', [$alias, $definition]);
            }
        }
    }
}
