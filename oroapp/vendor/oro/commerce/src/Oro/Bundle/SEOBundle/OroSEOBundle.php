<?php

namespace Oro\Bundle\SEOBundle;

use Oro\Bundle\SEOBundle\DependencyInjection\Compiler\FullListUrlProvidersCompilerPass;
use Oro\Bundle\SEOBundle\DependencyInjection\Compiler\UrlItemsProviderCompilerPass;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

use Oro\Bundle\ProductBundle\DependencyInjection\CompilerPass\ContentNodeFieldsChangesCompilerPass;
use Oro\Bundle\LocaleBundle\DependencyInjection\Compiler\DefaultFallbackExtensionPass;

class OroSEOBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $fields = [
            'metaTitle' => 'metaTitles',
            'metaDescription' => 'metaDescriptions',
            'metaKeyword' => 'metaKeywords'
        ];

        $container
            ->addCompilerPass(new DefaultFallbackExtensionPass([
                'Oro\Bundle\ProductBundle\Entity\Product' => $fields,
                'Oro\Bundle\CatalogBundle\Entity\Category' => $fields,
                'Oro\Bundle\CMSBundle\Entity\Page' => $fields,
                'Oro\Bundle\ProductBundle\Entity\Brand' => $fields,
            ]))
            ->addCompilerPass(new ContentNodeFieldsChangesCompilerPass(
                array_values($fields),
                'oro_product.event_listener.product_content_variant_reindex'
            ))
            ->addCompilerPass(new ContentNodeFieldsChangesCompilerPass(
                array_values($fields),
                'oro_catalog.event_listener.category_content_variant_index'
            ))
            ->addCompilerPass(new UrlItemsProviderCompilerPass(
                'oro_seo.sitemap.provider.url_items_provider_registry',
                'oro_seo.sitemap.url_items_provider'
            ))
            ->addCompilerPass(new UrlItemsProviderCompilerPass(
                'oro_seo.sitemap.provider.website_access_denied_urls_provider_registry',
                'oro_seo.sitemap.website_access_denied_urls_provider'
            ))
            ->addCompilerPass(new FullListUrlProvidersCompilerPass());
    }
}
