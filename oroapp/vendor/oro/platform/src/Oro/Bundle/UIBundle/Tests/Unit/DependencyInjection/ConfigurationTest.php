<?php
namespace Oro\Bundle\UIBundle\Tests\Unit\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Oro\Bundle\UIBundle\DependencyInjection\Configuration;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigTreeBuilder()
    {
        $bundleConfiguration = new Configuration();
        $this->assertTrue($bundleConfiguration->getConfigTreeBuilder() instanceof TreeBuilder);
    }

    public function testGetFullConfigKey()
    {
        $key = 'some_key';
        $expectedKey = 'oro_ui.' . $key;

        $fullConfigKey = Configuration::getFullConfigKey($key);
        $this->assertEquals($expectedKey, $fullConfigKey);
    }
}
