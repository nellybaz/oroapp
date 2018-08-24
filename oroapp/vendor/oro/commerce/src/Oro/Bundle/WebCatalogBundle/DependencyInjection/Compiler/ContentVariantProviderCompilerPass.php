<?php

namespace Oro\Bundle\WebCatalogBundle\DependencyInjection\Compiler;

use Oro\Component\DependencyInjection\Compiler\TaggedServicesCompilerPassTrait;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ContentVariantProviderCompilerPass implements CompilerPassInterface
{
    use TaggedServicesCompilerPassTrait;
    
    const CONTENT_VARIANT_PROVIDER_REGISTRY = 'oro_web_catalog.content_variant_provider.registry';
    const CONTENT_VARIANT_PROVIDER_TAG = 'oro_web_catalog.content_variant_provider';

    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder $container)
    {
        $this->registerTaggedServices(
            $container,
            self::CONTENT_VARIANT_PROVIDER_REGISTRY,
            self::CONTENT_VARIANT_PROVIDER_TAG,
            'addProvider'
        );
    }
}
