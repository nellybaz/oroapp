<?php

namespace Oro\Bundle\NavigationBundle\Tests\Unit\Event;

use Doctrine\ORM\EntityManager;

use Oro\Bundle\EntityBundle\Event\OroEventManager;
use Oro\Bundle\NavigationBundle\Entity\Builder\ItemFactory;
use Oro\Bundle\NavigationBundle\Entity\NavigationHistoryItem;
use Oro\Bundle\NavigationBundle\Event\ResponseHistoryListener;
use Oro\Bundle\NavigationBundle\Provider\TitleService;
use Oro\Bundle\UserBundle\Entity\User;

use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class ResponseHistoryListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var EntityManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $em;

    /**
     * @var TokenStorageInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $tokenStorage;

    /**
     * @var ResponseHistoryListener
     */
    protected $listener;

    /**
     * @var NavigationHistoryItem|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $item;

    /**
     * @var ItemFactory|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $factory;

    /**
     * @var Request|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $request;

    /**
     * @var TitleService|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $titleService;

    /**
     * @var string
     */
    protected $serializedTitle;

    protected function setUp()
    {
        $this->factory = $this->createMock('Oro\Bundle\NavigationBundle\Entity\Builder\ItemFactory');
        $this->tokenStorage = $this->createMock(TokenStorageInterface::class);

        $user = new User();
        $user->setEmail('some@email.com');

        $token = $this->createMock('Symfony\Component\Security\Core\Authentication\Token\TokenInterface');
        $token->expects($this->any())->method('getUser')
            ->will($this->returnValue($user));

        $this->tokenStorage->expects($this->any())->method('getToken')
            ->will($this->returnValue($token));

        $this->item = $this->createMock('Oro\Bundle\NavigationBundle\Entity\NavigationHistoryItem');

        $this->serializedTitle = json_encode(['titleTemplate' => 'Test title template']);
    }

    /**
     * @dataProvider onResponseProvider
     *
     * @param $eventManager
     */
    public function testOnResponse($eventManager)
    {
        $response = $this->getResponse();

        $repository = $this->getDefaultRepositoryMock($this->item);
        $em         = $this->getEntityManager($repository, $eventManager);

        $listener = $this->getListener($this->factory, $this->tokenStorage, $em);
        $listener->onResponse($this->getEventMock($this->getRequest(), $response));
    }

    /**
     * @return array
     */
    public function onResponseProvider()
    {
        return [
            'with enabling/disabling listeners'    => ['Oro\Bundle\EntityBundle\Event\OroEventManager'],
            'without enabling/disabling listeners' => ['Doctrine\Common\EventManager']
        ];
    }

    public function testTitle()
    {
        $this->item->expects($this->once())
            ->method('setTitle')
            ->with($this->equalTo($this->serializedTitle));

        $response   = $this->getResponse();
        $repository = $this->getDefaultRepositoryMock($this->item);
        $em         = $this->getEntityManager($repository);

        $listener = $this->getListener($this->factory, $this->tokenStorage, $em);
        $listener->onResponse($this->getEventMock($this->getRequest(), $response));
    }

    public function testNewItem()
    {
        $user = new User();
        $user->setEmail('some@email.com');

        $this->factory->expects($this->once())
            ->method('createItem')
            ->will($this->returnValue($this->item));

        $repository = $this->getDefaultRepositoryMock(null);
        $em         = $this->getEntityManager($repository);

        $listener = $this->getListener($this->factory, $this->tokenStorage, $em);
        $response = $this->getResponse();

        $listener->onResponse($this->getEventMock($this->getRequest(), $response));
    }

    public function testNotMasterRequest()
    {
        $event = $this->getMockBuilder('Symfony\Component\HttpKernel\Event\FilterResponseEvent')
            ->disableOriginalConstructor()->getMock();

        $event->expects($this->never())
            ->method('getRequest');
        $event->expects($this->never())
            ->method('getResponse');
        $event->expects($this->once())
            ->method('getRequestType')
            ->will($this->returnValue(HttpKernelInterface::SUB_REQUEST));

        $registry = $this->createMock('Doctrine\Common\Persistence\ManagerRegistry');
        $registry->expects($this->never())->method('getManagerForClass');

        $titleService = $this->createMock('Oro\Bundle\NavigationBundle\Provider\TitleServiceInterface');

        $listener = new ResponseHistoryListener($this->factory, $this->tokenStorage, $registry, $titleService);
        $listener->onResponse($event);
    }

    public function testSkipErrorPages()
    {
        $event = $this->getMockBuilder('Symfony\Component\HttpKernel\Event\FilterResponseEvent')
            ->disableOriginalConstructor()
            ->getMock();
        $request = $this->getMockBuilder(Request::class)->disableOriginalConstructor()->getMock();
        $request->attributes = $this->createMock(ParameterBag::class);
        $request->attributes->expects($this->once())
            ->method('get')
            ->with('_controller')
            ->willReturn('Oro\Bundle\FrontendBundle\Controller\FrontendController::exceptionAction');

        $event->expects($this->once())
            ->method('getRequest')
            ->willReturn($request);
        $event->expects($this->never())
            ->method('getResponse');
        $event->expects($this->once())
            ->method('getRequestType')
            ->will($this->returnValue(HttpKernelInterface::MASTER_REQUEST));

        $registry = $this->createMock('Doctrine\Common\Persistence\ManagerRegistry');
        $registry->expects($this->never())->method('getManagerForClass');

        $titleService = $this->createMock('Oro\Bundle\NavigationBundle\Provider\TitleServiceInterface');
        $listener = new ResponseHistoryListener($this->factory, $this->tokenStorage, $registry, $titleService);
        $listener->onResponse($event);
    }

    /**
     * Get the mock of the GetResponseEvent and FilterResponseEvent.
     *
     * @param \Symfony\Component\HttpFoundation\Request       $request
     * @param null|\Symfony\Component\HttpFoundation\Response $response
     * @param string                                          $type
     *
     * @return mixed
     */
    private function getEventMock($request, $response, $type = 'Symfony\Component\HttpKernel\Event\FilterResponseEvent')
    {
        $event = $this->getMockBuilder($type)
            ->disableOriginalConstructor()
            ->getMock();
        $event->expects($this->any())
            ->method('getRequest')
            ->will($this->returnValue($request));
        $event->expects($this->any())
            ->method('getRequestType')
            ->will($this->returnValue(HttpKernelInterface::MASTER_REQUEST));

        $event->expects($this->any())
            ->method('getResponse')
            ->will($this->returnValue($response));

        return $event;
    }

    /**
     * Creates request mock object
     *
     * @return Request
     */
    private function getRequest()
    {
        $this->request = $this->createMock('Symfony\Component\HttpFoundation\Request');

        $this->request->expects($this->once())
            ->method('getRequestFormat')
            ->will($this->returnValue('html'));

        $this->request->expects($this->once())
            ->method('getMethod')
            ->will($this->returnValue('GET'));

        $this->request->expects($this->any())
            ->method('get')
            ->will(
                $this->returnValueMap(
                    [
                        ['_route', 'test_route'],
                        ['_route_params', []],
                        ['id', 1],
                    ]
                )
            );

        return $this->request;
    }

    /**
     * Creates response object mock
     *
     * @return Response
     */
    private function getResponse()
    {
        return new Response('message', 200);
    }

    /**
     * @return TitleService|\PHPUnit_Framework_MockObject_MockObject
     */
    public function getTitleService()
    {
        $this->titleService = $this->createMock('Oro\Bundle\NavigationBundle\Provider\TitleServiceInterface');
        $this->titleService->expects($this->once())
            ->method('getSerialized')
            ->will($this->returnValue($this->serializedTitle));

        return $this->titleService;
    }

    /**
     * @param ItemFactory           $factory
     * @param TokenStorageInterface $tokenStorage
     * @param EntityManager         $entityManager
     *
     * @return ResponseHistoryListener
     */
    private function getListener($factory, $tokenStorage, $entityManager)
    {
        $registry = $this->createMock('Doctrine\Common\Persistence\ManagerRegistry');
        $registry->expects($this->once())
            ->method('getManagerForClass')
            ->with('Oro\Bundle\NavigationBundle\Entity\NavigationHistoryItem')
            ->will($this->returnValue($entityManager));

        $listener = new ResponseHistoryListener($factory, $tokenStorage, $registry, $this->getTitleService());
        $listener->setHistoryItemEntityFQCN('Oro\Bundle\NavigationBundle\Entity\NavigationHistoryItem');
        $listener->setUserEntityFQCN('Oro\Bundle\UserBundle\Entity\User');
        $listener->setNavigationHistoryItemType('history');

        return $listener;
    }

    /**
     * Returns EntityManager
     *
     * @param  \Oro\Bundle\NavigationBundle\Entity\Repository\HistoryItemRepository $repositoryMock
     * @param  string                                                               $eventManager
     *
     * @return \Doctrine\ORM\EntityManager                                          $entityManager
     */
    private function getEntityManager($repositoryMock, $eventManager = 'Oro\Bundle\EntityBundle\Event\OroEventManager')
    {
        $eventManager = $this->getMockBuilder($eventManager)
            ->setMethods(['disableListeners', 'clearDisabledListeners'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();
        $this->em->expects($this->any())
            ->method('getEventManager')
            ->will($this->returnValue($eventManager));
        $this->em->expects($this->once())
            ->method('getRepository')
            ->with($this->equalTo('Oro\Bundle\NavigationBundle\Entity\NavigationHistoryItem'))
            ->will($this->returnValue($repositoryMock));

        $shouldBeDisabled = $eventManager instanceof OroEventManager;
        if ($shouldBeDisabled) {
            $eventManager->expects($this->once())
                ->method('disableListeners')
                ->with('^Oro');
        } else {
            $eventManager->expects($this->never())
                ->method('disableListeners');
        }

        $this->em->expects($this->once())
            ->method('persist')
            ->with($this->item);
        $this->em->expects($this->once())
            ->method('flush')
            ->with($this->item);
        $eventManager->expects($shouldBeDisabled ? $this->once() : $this->never())
            ->method('clearDisabledListeners');

        return $this->em;
    }

    /**
     * Prepare repository mock
     *
     * @param  mixed $returnValue
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function getDefaultRepositoryMock($returnValue)
    {
        $repository = $this->getMockBuilder('Oro\Bundle\NavigationBundle\Entity\Repository\HistoryItemRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $repository->expects($this->once())
            ->method('findOneBy')
            ->will($this->returnValue($returnValue));

        return $repository;
    }
}
