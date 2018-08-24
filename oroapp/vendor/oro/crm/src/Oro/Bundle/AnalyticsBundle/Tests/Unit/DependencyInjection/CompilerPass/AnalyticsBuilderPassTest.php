<?php

namespace Oro\Bundle\AnalyticsBundle\Tests\Unit\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\ContainerBuilder;

use Oro\Bundle\AnalyticsBundle\DependencyInjection\CompilerPass\AnalyticsBuilderPass;

class AnalyticsBuilderPassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AnalyticsBuilderPass
     */
    protected $compilerPass;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ContainerBuilder
     */
    protected $container;

    protected function setUp()
    {
        $this->container = $this
            ->getMockBuilder('Symfony\Component\DependencyInjection\ContainerBuilder')
            ->getMock();

        $this->compilerPass = new AnalyticsBuilderPass();
    }

    public function testServiceNotExists()
    {
        $this->container->expects($this->once())
            ->method('hasDefinition')
            ->with($this->equalTo(AnalyticsBuilderPass::ANALYTICS_BUILDER_SERVICE))
            ->will($this->returnValue(false));

        $this->container->expects($this->never())
            ->method('getDefinition');

        $this->container->expects($this->never())
            ->method('findTaggedServiceIds');

        $this->compilerPass->process($this->container);
    }

    public function testServiceExistsNotTaggedServices()
    {
        $this->container->expects($this->once())
            ->method('hasDefinition')
            ->with($this->equalTo(AnalyticsBuilderPass::ANALYTICS_BUILDER_SERVICE))
            ->will($this->returnValue(true));

        $this->container->expects($this->once())
            ->method('findTaggedServiceIds')
            ->with($this->equalTo(AnalyticsBuilderPass::TAG))
            ->will($this->returnValue([]));

        $this->container->expects($this->never())
            ->method('getDefinition');

        $this->compilerPass->process($this->container);
    }

    public function testServiceExistsWithTaggedServices()
    {
        $this->container->expects($this->once())
            ->method('hasDefinition')
            ->with($this->equalTo(AnalyticsBuilderPass::ANALYTICS_BUILDER_SERVICE))
            ->will($this->returnValue(true));

        $this->container->expects($this->once())
            ->method('findTaggedServiceIds')
            ->with($this->equalTo(AnalyticsBuilderPass::TAG))
            ->will($this->returnValue(['service' => ['class' => '\stdClass']]));

        $definition = $this->createMock('Symfony\Component\DependencyInjection\Definition');

        $this->container->expects($this->once())
            ->method('getDefinition')
            ->with($this->equalTo(AnalyticsBuilderPass::ANALYTICS_BUILDER_SERVICE))
            ->will($this->returnValue($definition));

        $definition->expects($this->once())
            ->method('addMethodCall')
            ->with($this->isType('string'), $this->isType('array'));

        $this->compilerPass->process($this->container);
    }
}
