<?php

namespace Oro\Bundle\HelpBundle\Tests\Unit\EventListener;

use Oro\Bundle\HelpBundle\EventListener\HelpLinkRequestListener;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernel;

class HelpLinkRequestListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var HelpLinkRequestListener
     */
    protected $listener;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $container;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $linkProvider;

    protected function setUp()
    {
        $this->container = $this->createMock('Symfony\Component\DependencyInjection\ContainerInterface');
        $this->linkProvider = $this->getMockBuilder('Oro\Bundle\HelpBundle\Model\HelpLinkProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->listener = new HelpLinkRequestListener($this->container);
    }

    public function testOnKernelControllerMasterRequest()
    {
        $this->container->expects($this->once())
            ->method('get')
            ->with('oro_help.model.help_link_provider')
            ->will($this->returnValue($this->linkProvider));

        $event = $this->getMockBuilder('Symfony\Component\HttpKernel\Event\FilterControllerEvent')
            ->disableOriginalConstructor()
            ->getMock();

        $event->expects($this->once())
            ->method('getRequestType')
            ->will($this->returnValue(HttpKernel::MASTER_REQUEST));

        $request = new Request();

        $event->expects($this->once())
            ->method('getRequest')
            ->will($this->returnValue($request));

        $this->linkProvider->expects($this->once())
            ->method('setRequest')
            ->with($request);

        $this->listener->onKernelController($event);
    }

    public function testOnKernelControllerSubRequest()
    {
        $event = $this->getMockBuilder('Symfony\Component\HttpKernel\Event\FilterControllerEvent')
            ->disableOriginalConstructor()
            ->getMock();

        $event->expects($this->once())
            ->method('getRequestType')
            ->will($this->returnValue(HttpKernel::SUB_REQUEST));

        $this->container->expects($this->never())->method('get');
        $this->linkProvider->expects($this->never())->method($this->anything());

        $this->listener->onKernelController($event);
    }
}
