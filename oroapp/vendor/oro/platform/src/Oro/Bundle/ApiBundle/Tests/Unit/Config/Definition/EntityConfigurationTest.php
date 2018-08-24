<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Config\Definition;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Yaml\Yaml;

use Oro\Bundle\ApiBundle\Config\ActionsConfigExtension;
use Oro\Bundle\ApiBundle\Config\ConfigExtensionRegistry;
use Oro\Bundle\ApiBundle\Config\Definition\ApiConfiguration;
use Oro\Bundle\ApiBundle\Config\Definition\EntityConfiguration;
use Oro\Bundle\ApiBundle\Config\Definition\EntityDefinitionConfiguration;
use Oro\Bundle\ApiBundle\Config\FiltersConfigExtension;
use Oro\Bundle\ApiBundle\Config\SortersConfigExtension;
use Oro\Bundle\ApiBundle\Config\SubresourcesConfigExtension;
use Oro\Bundle\ApiBundle\Request\ApiActions;
use Oro\Bundle\ApiBundle\Tests\Unit\Config\Stub\TestConfigExtension;

/**
 * Tests extensions config tree definitions
 */
class EntityConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider loadConfigurationDataProvider
     */
    public function testLoadConfiguration(array $config, array $expected, $error = null)
    {
        if (null !== $error) {
            $this->expectException('\Symfony\Component\Config\Definition\Exception\InvalidConfigurationException');
            $this->expectExceptionMessage($error);
        }

        $actionProcessorBag = $this->createMock('Oro\Bundle\ApiBundle\Processor\ActionProcessorBagInterface');
        $actionProcessorBag->expects($this->any())
            ->method('getActions')
            ->willReturn(
                [
                    ApiActions::GET,
                    ApiActions::GET_LIST,
                    ApiActions::UPDATE,
                    ApiActions::CREATE,
                    ApiActions::DELETE,
                    ApiActions::DELETE_LIST,
                    ApiActions::GET_SUBRESOURCE,
                    ApiActions::GET_RELATIONSHIP,
                    ApiActions::UPDATE_RELATIONSHIP,
                    ApiActions::ADD_RELATIONSHIP,
                    ApiActions::DELETE_RELATIONSHIP,
                ]
            );

        $configExtensionRegistry = new ConfigExtensionRegistry();
        $configExtensionRegistry->addExtension(new FiltersConfigExtension());
        $configExtensionRegistry->addExtension(new SortersConfigExtension());
        $configExtensionRegistry->addExtension(new ActionsConfigExtension($actionProcessorBag));
        $configExtensionRegistry->addExtension(new SubresourcesConfigExtension($actionProcessorBag));
        $configExtensionRegistry->addExtension(new TestConfigExtension());

        $configuration = new EntityConfiguration(
            ApiConfiguration::ENTITIES_SECTION,
            new EntityDefinitionConfiguration(),
            $configExtensionRegistry->getConfigurationSettings(),
            1
        );
        $configBuilder = new TreeBuilder();
        $configuration->configure($configBuilder->root('entity')->children());

        $processor = new Processor();
        $result    = $processor->process($configBuilder->buildTree(), [$config]);

        if (null === $error) {
            $this->assertEquals($expected, $result);
        }
    }

    public function loadConfigurationDataProvider()
    {
        $result = [];

        $finder = new Finder();
        $finder
            ->files()
            ->in(__DIR__ . DIRECTORY_SEPARATOR . 'Fixtures')
            ->name('*.yml');
        /** @var SplFileInfo $file */
        foreach ($finder as $file) {
            $configType = substr($file->getFilename(), 0, -4);
            $data       = Yaml::parse($file->getContents());
            foreach ($data as $testName => $testData) {
                $result[$configType . '_' . $testName] = $testData;
            }
        }

        return $result;
    }
}
