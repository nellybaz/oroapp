<?php

namespace Oro\Bundle\CustomerBundle\Tests\Unit\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;

use Oro\Bundle\CustomerBundle\DependencyInjection\Compiler\OwnerTreeListenerPass;

class OwnerTreeListenerPassTest extends \PHPUnit_Framework_TestCase
{
    public function testProcess()
    {
        $listenerDefinition = $this->getMockBuilder('Symfony\Component\DependencyInjection\Definition')
            ->disableOriginalConstructor()
            ->getMock();

        /** @var ContainerBuilder|\PHPUnit_Framework_MockObject_MockObject $containerBuilder */
        $containerBuilder = $this->getMockBuilder('Symfony\Component\DependencyInjection\ContainerBuilder')
            ->disableOriginalConstructor()
            ->getMock();

        $containerBuilder->expects($this->once())
            ->method('getDefinition')
            ->with(OwnerTreeListenerPass::LISTENER_SERVICE)
            ->willReturn($listenerDefinition);

        $containerBuilder->expects($this->once())
            ->method('hasDefinition')
            ->with(OwnerTreeListenerPass::LISTENER_SERVICE)
            ->willReturn(true);

        $containerBuilder->expects($this->exactly(2))
            ->method('getParameter')
            ->willReturnMap(
                [
                    ['oro_customer.entity.customer.class', 'Entity\Customer'],
                    ['oro_customer.entity.customer_user.class', 'Entity\CustomerUser'],
                ]
            );

        $listenerDefinition->expects($this->at(0))
            ->method('addMethodCall')
            ->with(
                'addSupportedClass',
                ['Entity\Customer', ['parent', 'organization']]
            );
        $listenerDefinition->expects($this->at(1))
            ->method('addMethodCall')
            ->with(
                'addSupportedClass',
                ['Entity\CustomerUser', ['customer', 'organization']]
            );

        $compilerPass = new OwnerTreeListenerPass();
        $compilerPass->process($containerBuilder);
    }

    public function testProcessWithoutDefinition()
    {
        /** @var ContainerBuilder|\PHPUnit_Framework_MockObject_MockObject $containerBuilder */
        $containerBuilder = $this->getMockBuilder('Symfony\Component\DependencyInjection\ContainerBuilder')
            ->disableOriginalConstructor()
            ->getMock();

        $containerBuilder->expects($this->never())->method('getDefinition');
        $containerBuilder->expects($this->never())->method('getParameter');

        $containerBuilder->expects($this->once())
            ->method('hasDefinition')
            ->with(OwnerTreeListenerPass::LISTENER_SERVICE)
            ->willReturn(false);


        $compilerPass = new OwnerTreeListenerPass();
        $compilerPass->process($containerBuilder);
    }
}
