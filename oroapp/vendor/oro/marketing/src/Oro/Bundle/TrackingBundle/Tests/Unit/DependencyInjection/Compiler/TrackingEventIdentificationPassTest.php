<?php

namespace Oro\Bundle\TrackingBundle\Tests\Unit\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Reference;

use Oro\Bundle\TrackingBundle\DependencyInjection\Compiler\TrackingEventIdentificationPass;

class TrackingEventIdentificationPassTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    private $container;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->container = $this->getMockBuilder('Symfony\Component\DependencyInjection\ContainerBuilder')->getMock();
    }

    public function testProcessNotRegisterProvider()
    {
        $this->container->expects($this->once())
            ->method('hasDefinition')
            ->with($this->equalTo(TrackingEventIdentificationPass::PROVIDER_SERVICE_ID))
            ->will($this->returnValue(false));

        $this->container->expects($this->never())
            ->method('getDefinition');
        $this->container->expects($this->never())
            ->method('findTaggedServiceIds');

        $compilerPass = new TrackingEventIdentificationPass();
        $compilerPass->process($this->container);
    }

    public function testProcess()
    {
        $definition = $this->getMockBuilder('Symfony\Component\DependencyInjection\Definition')
            ->getMock();

        $definition->expects($this->at(0))
            ->method('addMethodCall')
            ->with(
                $this->equalTo('addProvider'),
                $this->equalTo([new Reference('provider4')])
            );
        $definition->expects($this->at(1))
            ->method('addMethodCall')
            ->with(
                $this->equalTo('addProvider'),
                $this->equalTo([new Reference('provider1')])
            );
        $definition->expects($this->at(2))
            ->method('addMethodCall')
            ->with(
                $this->equalTo('addProvider'),
                $this->equalTo([new Reference('provider2')])
            );
        $definition->expects($this->at(3))
            ->method('addMethodCall')
            ->with(
                $this->equalTo('addProvider'),
                $this->equalTo([new Reference('provider3')])
            );

        $serviceIds = [
            'provider1' => [['class' => 'Test\Class1']],
            'provider2' => [['class' => 'Test\Class2']],
            'provider3' => [['class' => 'Test\Class1', 'priority' => 100]],
            'provider4' => [['class' => 'Test\Class1', 'priority' => -100]]
        ];

        $this->container->expects($this->once())
            ->method('hasDefinition')
            ->with($this->equalTo(TrackingEventIdentificationPass::PROVIDER_SERVICE_ID))
            ->will($this->returnValue(true));

        $this->container->expects($this->once())
            ->method('getDefinition')
            ->with($this->equalTo(TrackingEventIdentificationPass::PROVIDER_SERVICE_ID))
            ->will($this->returnValue($definition));
        $this->container->expects($this->once())
            ->method('findTaggedServiceIds')
            ->with($this->equalTo(TrackingEventIdentificationPass::TAG))
            ->will($this->returnValue($serviceIds));

        $compilerPass = new TrackingEventIdentificationPass();
        $compilerPass->process($this->container);
    }

    public function testProcessEmptyProviders()
    {
        $this->container->expects($this->once())
            ->method('hasDefinition')
            ->with($this->equalTo(TrackingEventIdentificationPass::PROVIDER_SERVICE_ID))
            ->will($this->returnValue(true));

        $this->container->expects($this->once())
            ->method('findTaggedServiceIds')
            ->with($this->equalTo(TrackingEventIdentificationPass::TAG))
            ->will($this->returnValue([]));

        $this->container->expects($this->never())
            ->method('getDefinition')
            ->with($this->equalTo(TrackingEventIdentificationPass::PROVIDER_SERVICE_ID));

        $compilerPass = new TrackingEventIdentificationPass();
        $compilerPass->process($this->container);
    }
}
