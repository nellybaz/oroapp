<?php

namespace Oro\Bundle\SearchBundle\Tests\Unit\DependencyInjection;

use Oro\Bundle\SearchBundle\DependencyInjection\EntitiesConfigConfiguration;
use Oro\Component\Testing\Unit\LoadTestCaseDataTrait;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Processor;

class EntitiesConfigConfigurationTest extends \PHPUnit_Framework_TestCase
{
    use LoadTestCaseDataTrait;

    /** @var EntitiesConfigConfiguration */
    protected $configuration;

    protected function setUp()
    {
        $this->configuration = new EntitiesConfigConfiguration();
    }

    protected function tearDown()
    {
        unset($this->configuration);
    }

    public function testGetConfigTreeBuilder()
    {
        $this->assertInstanceOf(TreeBuilder::class, $this->configuration->getConfigTreeBuilder());
    }

    /**
     * @dataProvider processConfigurationDataProvider
     *
     * @param array $configs
     * @param array $expected
     */
    public function testProcessConfiguration(array $configs, array $expected)
    {
        $processor = new Processor();

        $this->assertEquals($expected, $processor->processConfiguration($this->configuration, $configs));
    }

    /**
     * @return array
     */
    public function processConfigurationDataProvider()
    {
        $path = implode(DIRECTORY_SEPARATOR, [
            __DIR__,
            'test_cases',
            'entities_config_configuration',
        ]);

        return $this->getTestCaseData($path);
    }
}
