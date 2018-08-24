<?php

namespace Oro\Bundle\RedirectBundle\Tests\Unit\Security;

use Oro\Bundle\RedirectBundle\Routing\MatchedUrlDecisionMaker;
use Oro\Bundle\RedirectBundle\Security\Firewall;
use Oro\Bundle\RedirectBundle\Security\FirewallFactory;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Security\Http\Firewall as FrameworkFirewall;
use Symfony\Component\Security\Http\FirewallMapInterface;

class FirewallTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RequestContext|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $context;

    /**
     * @var FrameworkFirewall|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $baseFirewall;

    /**
     * @var MatchedUrlDecisionMaker|\PHPUnit_Framework_MockObject_MockObject
     */
    private $matchedUrlDecisionMaker;

    /**
     * @var Firewall
     */
    protected $firewall;

    protected function setUp()
    {
        /** @var FirewallMapInterface|\PHPUnit_Framework_MockObject_MockObject $map */
        $map = $this->createMock(FirewallMapInterface::class);

        /** @var EventDispatcherInterface|\PHPUnit_Framework_MockObject_MockObject $dispatcher */
        $dispatcher = $this->createMock(EventDispatcherInterface::class);

        $this->baseFirewall = $this->getMockBuilder(FrameworkFirewall::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->matchedUrlDecisionMaker = $this->getMockBuilder(MatchedUrlDecisionMaker::class)
            ->disableOriginalConstructor()
            ->getMock();

        /** @var FirewallFactory|\PHPUnit_Framework_MockObject_MockObject $firewallFactory */
        $firewallFactory = $this->getMockBuilder(FirewallFactory::class)
            ->disableOriginalConstructor()
            ->getMock();
        $firewallFactory->expects($this->once())
            ->method('create')
            ->with($map, $dispatcher)
            ->willReturn($this->baseFirewall);
        $this->context = $this->getMockBuilder(RequestContext::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->firewall = new Firewall(
            $map,
            $dispatcher,
            $firewallFactory,
            $this->matchedUrlDecisionMaker,
            $this->context
        );
    }

    public function testOnKernelRequestBeforeRouting()
    {
        $request = $this->getMockBuilder(Request::class)
            ->disableOriginalConstructor()
            ->getMock();

        $url = '/test';
        $request->expects($this->any())
            ->method('getPathInfo')
            ->willReturn($url);

        $this->matchedUrlDecisionMaker->expects($this->any())
            ->method('matches')
            ->with($url)
            ->willReturn(true);

        /** @var GetResponseEvent|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this->getMockBuilder(GetResponseEvent::class)
            ->disableOriginalConstructor()
            ->getMock();
        $event->expects($this->any())
            ->method('getRequest')
            ->willReturn($request);
        $event->expects($this->once())
            ->method('isMasterRequest')
            ->willReturn(true);

        $this->context->expects($this->once())
            ->method('fromRequest')
            ->with($request);

        $this->baseFirewall->expects($this->once())
            ->method('onKernelRequest')
            ->with($event);

        $this->firewall->onKernelRequestBeforeRouting($event);
    }

    public function testOnKernelRequestBeforeRoutingNotMatchedUrl()
    {
        $request = $this->getMockBuilder(Request::class)
            ->disableOriginalConstructor()
            ->getMock();

        $url = '/test';
        $request->expects($this->any())
            ->method('getPathInfo')
            ->willReturn($url);

        $this->matchedUrlDecisionMaker->expects($this->any())
            ->method('matches')
            ->with($url)
            ->willReturn(false);

        /** @var GetResponseEvent|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this->getMockBuilder(GetResponseEvent::class)
            ->disableOriginalConstructor()
            ->getMock();
        $event->expects($this->any())
            ->method('getRequest')
            ->willReturn($request);

        $this->baseFirewall->expects($this->never())
            ->method($this->anything());

        $this->firewall->onKernelRequestBeforeRouting($event);
    }

    /**
     * @dataProvider afterRoutingNotProcessedDataProvider
     * @param bool $isMasterRequest
     * @param bool $hasResponse
     * @param array $attributes
     */
    public function testOnKernelRequestAfterRoutingSkip($isMasterRequest, $hasResponse, array $attributes)
    {
        $url = '/test';
        $request = Request::create($url);

        $this->matchedUrlDecisionMaker->expects($this->any())
            ->method('matches')
            ->with($url)
            ->willReturn(true);
        $request->attributes->add($attributes);

        /** @var GetResponseEvent|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this->getMockBuilder(GetResponseEvent::class)
            ->disableOriginalConstructor()
            ->getMock();
        $event->expects($this->any())
            ->method('getRequest')
            ->willReturn($request);
        $event->expects($this->any())
            ->method('isMasterRequest')
            ->willReturn($isMasterRequest);
        $event->expects($this->any())
            ->method('hasResponse')
            ->willReturn($hasResponse);

        $this->baseFirewall->expects($this->never())
            ->method($this->anything());

        $this->firewall->onKernelRequestAfterRouting($event);
    }

    /**
     * @return array
     */
    public function afterRoutingNotProcessedDataProvider()
    {
        return [
            'subrequest' => [
                false,
                false,
                ['_resolved_slug_url' => '/resolved/slug']
            ],
            'has response' => [
                true,
                true,
                ['_resolved_slug_url' => '/resolved/slug']
            ],
            'routed system url' => [
                true,
                false,
                []
            ]
        ];
    }

    public function testOnKernelRequestAfterRouting()
    {
        $event = $this->prepareEvent();

        $kernel = $event->getKernel();
        $request = $event->getRequest();
        $requestType = $event->getRequestType();

        $newRequest = Request::create(
            $request->attributes->get('_resolved_slug_url'),
            $request->getMethod(),
            $request->query->all(),
            $request->cookies->all(),
            $request->files->all(),
            $request->server->all(),
            $request->getContent()
        );
        $newRequest->setSession($request->getSession());
        $newRequest->setLocale($request->getLocale());
        $newRequest->setDefaultLocale($request->getDefaultLocale());

        $newEvent = new GetResponseEvent($kernel, $newRequest, $requestType);
        $this->baseFirewall->expects($this->once())
            ->method('onKernelRequest')
            ->with($newEvent);

        $this->firewall->onKernelRequestAfterRouting($event);
    }

    public function testOnKernelRequestAfterRoutingNotMatchedUrl()
    {
        $requestedUrl = '/test';
        $request = Request::create($requestedUrl);

        $this->matchedUrlDecisionMaker->expects($this->any())
            ->method('matches')
            ->with($requestedUrl)
            ->willReturn(false);

        /** @var GetResponseEvent|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this->getMockBuilder(GetResponseEvent::class)
            ->disableOriginalConstructor()
            ->getMock();
        $event->expects($this->atLeastOnce())
            ->method('getRequest')
            ->willReturn($request);

        $this->baseFirewall->expects($this->once())
            ->method('onKernelRequest')
            ->with($event);

        $this->firewall->onKernelRequestAfterRouting($event);
    }

    public function testOnKernelRequestAfterRoutingWithResponse()
    {
        $event = $this->prepareEvent();

        /** @var Response|\PHPUnit_Framework_MockObject_MockObject $response */
        $response = $this->getMockBuilder(Response::class)
            ->disableOriginalConstructor()
            ->getMock();

        $event->expects($this->once())
            ->method('setResponse')
            ->with($response);
        $this->baseFirewall->expects($this->once())
            ->method('onKernelRequest')
            ->willReturnCallback(
                function (GetResponseEvent $event) use ($response) {
                    $event->setResponse($response);
                }
            );

        $this->firewall->onKernelRequestAfterRouting($event);
    }

    public function testOnKernelFinishRequestNoSlugApplied()
    {
        /** @var KernelInterface|\PHPUnit_Framework_MockObject_MockObject $kernel */
        $kernel = $this->createMock(KernelInterface::class);

        $requestType = KernelInterface::MASTER_REQUEST;
        $request = Request::create('/slug');
        $event = new FinishRequestEvent($kernel, $request, $requestType);
        $this->baseFirewall->expects($this->once())
            ->method('onKernelFinishRequest')
            ->with($event);
        $this->firewall->onKernelFinishRequest($event);
    }

    public function testOnKernelFinishRequestSlugApplied()
    {
        /** @var KernelInterface|\PHPUnit_Framework_MockObject_MockObject $kernel */
        $kernel = $this->createMock(KernelInterface::class);
        $requestType = KernelInterface::MASTER_REQUEST;

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session */
        $session = $this->createMock(SessionInterface::class);

        $request = Request::create('/slug');
        $request->attributes->set('_resolved_slug_url', '/test');
        $request->setSession($session);

        $this->matchedUrlDecisionMaker->expects($this->any())
            ->method('matches')
            ->with('/slug')
            ->willReturn(true);

        $getResponseEvent = new GetResponseEvent($kernel, $request, $requestType);
        $this->firewall->onKernelRequestAfterRouting($getResponseEvent);

        $event = new FinishRequestEvent($kernel, $request, $requestType);

        $newRequest = Request::create(
            $request->attributes->get('_resolved_slug_url'),
            $request->getMethod(),
            $request->query->all(),
            $request->cookies->all(),
            $request->files->all(),
            $request->server->all(),
            $request->getContent()
        );
        $newRequest->setSession($request->getSession());
        $newRequest->setLocale($request->getLocale());
        $newRequest->setDefaultLocale($request->getDefaultLocale());
        $finishRequestEvent = new FinishRequestEvent(
            $event->getKernel(),
            $newRequest,
            $event->getRequestType()
        );

        $this->baseFirewall->expects($this->once())
            ->method('onKernelFinishRequest')
            ->with($finishRequestEvent);
        $this->firewall->onKernelFinishRequest($event);
    }

    /**
     * @return GetResponseEvent|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function prepareEvent()
    {
        $slugResolvedUrl = '/resolved/slug';
        $attributes = ['_resolved_slug_url' => $slugResolvedUrl];
        $query = ['query' => true];
        $cookies = ['cookie' => true];
        $file = $this->getMockBuilder(UploadedFile::class)
            ->disableOriginalConstructor()
            ->getMock();
        $files = [$file];
        $server = ['server' => true];

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session */
        $session = $this->createMock(SessionInterface::class);
        $locale = 'en_GB';
        $defaultLocale = 'en';
        $requestedUrl = '/test';

        $request = Request::create($requestedUrl);
        $request->attributes->add($attributes);
        $request->query->add($query);
        $request->cookies->add($cookies);
        $request->files->add($files);
        $request->server->add($server);
        $request->setSession($session);
        $request->setLocale($locale);
        $request->setDefaultLocale($defaultLocale);

        $this->matchedUrlDecisionMaker->expects($this->any())
            ->method('matches')
            ->with($requestedUrl)
            ->willReturn(true);

        /** @var KernelInterface|\PHPUnit_Framework_MockObject_MockObject $kernel */
        $kernel = $this->createMock(KernelInterface::class);
        $requestType = KernelInterface::MASTER_REQUEST;

        /** @var GetResponseEvent|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this->getMockBuilder(GetResponseEvent::class)
            ->disableOriginalConstructor()
            ->getMock();
        $event->expects($this->atLeastOnce())
            ->method('getRequest')
            ->willReturn($request);
        $event->expects($this->any())
            ->method('isMasterRequest')
            ->willReturn(true);
        $event->expects($this->any())
            ->method('hasResponse')
            ->willReturn(false);
        $event->expects($this->atLeastOnce())
            ->method('getKernel')
            ->willReturn($kernel);
        $event->expects($this->atLeastOnce())
            ->method('getRequestType')
            ->willReturn($requestType);

        $finishRequestEvent = new FinishRequestEvent($kernel, $request, $requestType);
        $this->baseFirewall->expects($this->once())
            ->method('onKernelFinishRequest')
            ->with($finishRequestEvent);

        return $event;
    }
}
