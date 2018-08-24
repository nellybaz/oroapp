<?php

namespace Oro\Bundle\FeatureToggleBundle\Tests\Unit\EventListener;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

use Oro\Bundle\FeatureToggleBundle\Checker\FeatureChecker;
use Oro\Bundle\FeatureToggleBundle\EventListener\RequestListener;

class RequestListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RequestListener
     */
    private $listener;

    /**
     * @var FeatureChecker|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $featureChecker;

    public function setUp()
    {
        $this->featureChecker = $this->getMockBuilder(FeatureChecker::class)->disableOriginalConstructor()->getMock();
        $this->listener = new RequestListener($this->featureChecker);
    }

    /**
     * @expectedException \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function testWhenRouteFeatureDisabled()
    {
        $this->featureChecker
            ->expects($this->once())
            ->method('isResourceEnabled')
            ->with('oro_login', 'routes')
            ->willReturn(false);

        $request = $this->createMock(Request::class);
        $request->method('get')->with('_route')->willReturn('oro_login');
        /** @var GetResponseEvent|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this->getMockBuilder(GetResponseEvent::class)->disableOriginalConstructor()->getMock();
        $event->method('getRequest')->willReturn($request);
        $event->method('isMasterRequest')->willReturn(true);
        
        $this->listener->onRequest($event);
    }

    public function testWhenRouteFeatureEnabled()
    {
        $this->featureChecker
            ->expects($this->once())
            ->method('isResourceEnabled')
            ->with('oro_login', 'routes')
            ->willReturn(true);

        $request = $this->createMock(Request::class);
        $request->method('get')->with('_route')->willReturn('oro_login');
        /** @var GetResponseEvent|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this->getMockBuilder(GetResponseEvent::class)->disableOriginalConstructor()->getMock();
        $event->method('getRequest')->willReturn($request);
        $event->method('isMasterRequest')->willReturn(true);
        
        $this->listener->onRequest($event);
    }

    public function testForNonMasterRequest()
    {
        $this->featureChecker
            ->expects($this->once())
            ->method('isResourceEnabled')
            ->with('oro_login', 'routes')
            ->willReturn(false);

        $request = $this->createMock(Request::class);
        $request->method('get')->with('_route')->willReturn('oro_login');
        /** @var GetResponseEvent|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this->getMockBuilder(GetResponseEvent::class)->disableOriginalConstructor()->getMock();
        $event->method('getRequest')->willReturn($request);
        $event->expects($this->once())
            ->method('isMasterRequest')
            ->willReturn(false);

        $this->listener->onRequest($event);
    }
}
