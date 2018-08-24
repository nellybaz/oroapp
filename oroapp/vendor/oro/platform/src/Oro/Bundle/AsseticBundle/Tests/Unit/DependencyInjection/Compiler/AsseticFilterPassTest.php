<?php

namespace Oro\Bundle\AsseticBundle\Tests\Unit\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;

use Oro\Bundle\AsseticBundle\DependencyInjection\Compiler\AsseticFilterPass;

class AsseticFilterPassTest extends \PHPUnit_Framework_TestCase
{
    public function testProcess()
    {
        /** @var ContainerBuilder|\PHPUnit_Framework_MockObject_MockObject $container */
        $container = $this->getMockBuilder(ContainerBuilder::class)->getMock();
        $container->expects($this->once())
            ->method('hasDefinition')
            ->with('assetic.filter.scssphp')
            ->willReturn(false);

        $container->expects($this->once())
            ->method('removeDefinition')
            ->with('oro_assetic.decorating_filter.scssphp');

        $pass = new AsseticFilterPass();
        $pass->process($container);
    }
}
