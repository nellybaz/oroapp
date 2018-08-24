<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit;

use Oro\Bundle\ProductBundle\DependencyInjection\CompilerPass\ProductCollectionCompilerPass;
use Oro\Bundle\ProductBundle\Entity\Brand;
use Symfony\Component\DependencyInjection\ContainerBuilder;

use Oro\Bundle\LocaleBundle\DependencyInjection\Compiler\DefaultFallbackExtensionPass;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\DependencyInjection\CompilerPass\ComponentProcessorPass;
use Oro\Bundle\ProductBundle\DependencyInjection\CompilerPass\DefaultProductUnitProvidersCompilerPass;
use Oro\Bundle\ProductBundle\DependencyInjection\CompilerPass\ProductDataStorageSessionBagPass;
use Oro\Bundle\ProductBundle\DependencyInjection\CompilerPass\TwigSandboxConfigurationPass;
use Oro\Bundle\ProductBundle\OroProductBundle;

class OroProductBundleTest extends \PHPUnit_Framework_TestCase
{
    public function testBuild()
    {
        $container = new ContainerBuilder();

        $kernel = $this->createMock('Symfony\Component\HttpKernel\KernelInterface');

        $bundle = new OroProductBundle($kernel);
        $bundle->build($container);

        $passes = $container->getCompiler()->getPassConfig()->getBeforeOptimizationPasses();

        $this->assertInternalType('array', $passes);
        $this->assertCount(6, $passes);
        $this->assertInstanceOf(ComponentProcessorPass::class, $passes[0]);
        $this->assertInstanceOf(ProductDataStorageSessionBagPass::class, $passes[1]);
        $this->assertInstanceOf(TwigSandboxConfigurationPass::class, $passes[2]);
        $this->assertInstanceOf(DefaultProductUnitProvidersCompilerPass::class, $passes[3]);
        $this->assertInstanceOf(DefaultFallbackExtensionPass::class, $passes[4]);
        $this->assertInstanceOf(ProductCollectionCompilerPass::class, $passes[5]);
        $this->assertAttributeEquals(
            [
                Product::class => [
                    'name' => 'names',
                    'description' => 'descriptions',
                    'shortDescription' => 'shortDescriptions',
                    'slugPrototype' => 'slugPrototypes'
                ],
                Brand::class => [
                    'name' => 'names',
                    'description' => 'descriptions',
                    'shortDescription' => 'shortDescriptions',
                    'slugPrototype' => 'slugPrototypes'
                ]
            ],
            'classes',
            $passes[4]
        );
    }
}
