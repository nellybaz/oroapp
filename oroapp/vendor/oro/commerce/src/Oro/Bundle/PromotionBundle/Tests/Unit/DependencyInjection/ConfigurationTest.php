<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\DependencyInjection;

use Oro\Bundle\PromotionBundle\DependencyInjection\Configuration;
use Symfony\Component\Config\Definition\Processor;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Configuration
     */
    protected $configuration;

    protected function setUp()
    {
        $configuration = new Configuration();

        $treeBuilder = $configuration->getConfigTreeBuilder();
        $this->assertInstanceOf('Symfony\Component\Config\Definition\Builder\TreeBuilder', $treeBuilder);
    }

    public function testProcessConfiguration()
    {
        $configuration = new Configuration();
        $processor     = new Processor();

        $expected = [
            'settings' => [
                'resolved' => true,
                Configuration::FEATURE_ENABLED => [
                    'value' => true,
                    'scope' => 'app'
                ],
                Configuration::DISCOUNT_STRATEGY => [
                    'value' => 'apply_all',
                    'scope' => 'app'
                ],
            ]
        ];

        $this->assertEquals($expected, $processor->processConfiguration($configuration, []));
    }
}
