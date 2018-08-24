<?php

namespace Oro\Bundle\CheckoutBundle\Tests\Unit;

use Symfony\Component\DependencyInjection\ContainerBuilder;

use Oro\Bundle\CheckoutBundle\OroCheckoutBundle;

class OroCheckoutBundleTest extends \PHPUnit_Framework_TestCase
{
    public function testBuild()
    {
        /** @var ContainerBuilder|\PHPUnit_Framework_MockObject_MockObject $container */
        $container = $this->createMock('Symfony\Component\DependencyInjection\ContainerBuilder');
        $kernel = $this->createMock('Symfony\Component\HttpKernel\KernelInterface');

        $container->expects($this->exactly(4))
            ->method('addCompilerPass')
            ->with($this->isInstanceOf('Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface'))
            ->will($this->returnSelf());

        $bundle = new OroCheckoutBundle($kernel);
        $bundle->build($container);
    }
}
