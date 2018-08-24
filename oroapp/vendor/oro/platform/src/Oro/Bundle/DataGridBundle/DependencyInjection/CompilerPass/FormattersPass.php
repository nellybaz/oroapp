<?php

namespace Oro\Bundle\DataGridBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

class FormattersPass implements CompilerPassInterface
{
    const FORMATTER_EXTENSION_ID = 'oro_datagrid.extension.formatter';
    const TAG_NAME               = 'oro_datagrid.extension.formatter.property';

    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder $container)
    {
        /**
         * Find and add available properties to formatter extension
         */
        $extension = $container->getDefinition(self::FORMATTER_EXTENSION_ID);
        if ($extension) {
            $properties = $container->findTaggedServiceIds(self::TAG_NAME);
            foreach ($properties as $serviceId => $tags) {
                if ($container->hasDefinition($serviceId)) {
                    $container->getDefinition($serviceId)->setPublic(false);
                }
                $tagAttrs = reset($tags);
                $extension->addMethodCall('registerProperty', [$tagAttrs['type'], new Reference($serviceId)]);
            }
        }
    }
}
