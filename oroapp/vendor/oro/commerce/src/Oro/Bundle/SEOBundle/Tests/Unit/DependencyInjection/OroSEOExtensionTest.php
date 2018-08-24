<?php

namespace Oro\Bundle\SEOBundle\Tests\Unit\DependencyInjection;

use Oro\Bundle\SEOBundle\DependencyInjection\OroSEOExtension;
use Oro\Bundle\TestFrameworkBundle\Test\DependencyInjection\ExtensionTestCase;

class OroSEOExtensionTest extends ExtensionTestCase
{
    public function testLoad()
    {
        $this->loadExtension(new OroSEOExtension());
        $expectedDefinitions = [
            // Services
            'oro_seo.block_type.localized_links_container',
            'oro_seo.sitemap.sitemap_url_dumper',
            'oro_seo.sitemap.sitemap_index_dumper',
            'oro_seo.layout.data_provider.seo_data'
        ];

        $this->assertDefinitionsLoaded($expectedDefinitions);
             
        $expectedExtensionConfigs = ['oro_seo'];
        $this->assertExtensionConfigsLoaded($expectedExtensionConfigs);
    }

    public function testLoadWhenZlibExtensionLoaded()
    {
        if (!extension_loaded('zlib')) {
            $this->markTestSkipped('This test need zlib extension loaded');
        }

        $this->loadExtension(new OroSEOExtension());
        $expectedDefinitions = [
            'oro_seo.sitemap.gzip_sitemap_file_writer'
        ];
        $this->assertDefinitionsLoaded($expectedDefinitions);
    }
}
