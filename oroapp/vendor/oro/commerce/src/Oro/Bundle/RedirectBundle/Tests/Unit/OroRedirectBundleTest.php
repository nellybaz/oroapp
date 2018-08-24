<?php

namespace Oro\Bundle\RedirectBundle\Tests\Unit;

use Oro\Bundle\RedirectBundle\DependencyInjection\Compiler\ContextUrlProviderCompilerPass;
use Oro\Bundle\RedirectBundle\DependencyInjection\Compiler\RoutingInformationProviderCompilerPass;
use Oro\Bundle\RedirectBundle\OroRedirectBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\KernelInterface;

class OroRedirectBundleTest extends \PHPUnit_Framework_TestCase
{
    public function testBuild()
    {
        $container = new ContainerBuilder();

        $kernel = $this->createMock(KernelInterface::class);

        $bundle = new OroRedirectBundle($kernel);
        $bundle->build($container);

        $passes = $container->getCompiler()->getPassConfig()->getBeforeOptimizationPasses();

        $this->assertInternalType('array', $passes);
        $this->assertCount(2, $passes);

        $expectedPasses = [
            new RoutingInformationProviderCompilerPass(),
            new ContextUrlProviderCompilerPass()
        ];

        foreach ($expectedPasses as $expectedPass) {
            $this->assertContains($expectedPass, $passes, '', false, false);
        }
    }
}
