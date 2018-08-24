<?php

namespace Oro\Bundle\ShippingBundle\Bundle\Tests\Unit\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;

use Oro\Bundle\ShippingBundle\DependencyInjection\Configuration;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /** @var Configuration */
    protected $configuration;

    protected function setUp()
    {
        $this->configuration = new Configuration();
    }

    protected function tearDown()
    {
        unset($this->configuration);
    }

    public function testGetConfigTreeBuilder()
    {
        $this->assertInstanceOf(
            'Symfony\Component\Config\Definition\Builder\TreeBuilder',
            $this->configuration->getConfigTreeBuilder()
        );
    }

    /**
     * @dataProvider processConfigurationDataProvider
     *
     * @param array $config
     * @param array $expected
     */
    public function testProcessConfiguration(array $config, array $expected)
    {
        $processor = new Processor();

        $this->assertEquals($expected, $processor->processConfiguration($this->configuration, $config));
    }

    /**
     * @return array
     */
    public function processConfigurationDataProvider()
    {
        return [
            [
                'config'  => [],
                'expected' => [
                    'settings' => [
                        'resolved' => true,
                        'shipping_origin' => ['value' => [], 'scope' => 'app'],
                        'length_units' => ['value' => ['inch', 'foot', 'cm', 'm'], 'scope' => 'app'],
                        'weight_units' => ['value' => ['lbs', 'kg'], 'scope' => 'app'],
                        'freight_classes' => ['value' => ['parcel'], 'scope' => 'app'],
                    ]
                ]
            ]
        ];
    }
}
