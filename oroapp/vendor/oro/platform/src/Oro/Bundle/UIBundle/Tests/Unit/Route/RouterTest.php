<?php

namespace Oro\Bundle\UIBundle\Tests\Route;

use Oro\Bundle\UIBundle\Route\Router;
use Symfony\Bundle\FrameworkBundle\Routing\Router as SymfonyRouter;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class RouterTest extends \PHPUnit_Framework_TestCase
{
    /** @var Request|\PHPUnit_Framework_MockObject_MockObject */
    protected $request;

    /** @var ParameterBag|\PHPUnit_Framework_MockObject_MockObject */
    protected $requestQuery;

    /** @var SymfonyRouter|\PHPUnit_Framework_MockObject_MockObject */
    protected $symfonyRouter;

    /** @var AuthorizationCheckerInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $authorizationChecker;

    /** @var Router */
    protected $router;

    protected function setUp()
    {
        $this->requestQuery = $this->createMock(ParameterBag::class);
        $this->request = $this->createMock(Request::class);
        $this->request->query = $this->requestQuery;

        /** @var RequestStack|\PHPUnit_Framework_MockObject_MockObject $requestStack */
        $requestStack = $this->createMock(RequestStack::class);
        $requestStack->expects($this->any())->method('getCurrentRequest')->willReturn($this->request);

        $this->symfonyRouter = $this->createMock(SymfonyRouter::class);
        $this->authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);
        $this->router = new Router($requestStack, $this->symfonyRouter, $this->authorizationChecker);
    }

    public function testSaveAndStayRedirectAfterSave()
    {
        $testUrl = 'test\\url\\index.html';

        $this->request->expects($this->once())
            ->method('get')
            ->will($this->returnValue(Router::ACTION_SAVE_AND_STAY));

        $this->symfonyRouter->expects($this->once())
            ->method('generate')
            ->will($this->returnValue($testUrl));

        $this->authorizationChecker->expects($this->never())
            ->method('isGranted');

        $redirect = $this->router->redirectAfterSave(
            array(
                'route'      => 'test_route',
                'parameters' => array('id' => 1),
            ),
            array()
        );

        $this->assertEquals($testUrl, $redirect->getTargetUrl());
    }

    public function testSaveAndStayWithAccessGrantedRedirectAfterSave()
    {
        $testUrl = 'test\\url\\index.html';

        $this->request->expects($this->once())
            ->method('get')
            ->will($this->returnValue(Router::ACTION_SAVE_AND_STAY));

        $this->symfonyRouter->expects($this->once())
            ->method('generate')
            ->will($this->returnValue($testUrl));

        $entity = new \stdClass();

        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('EDIT', $this->identicalTo($entity))
            ->will($this->returnValue(true));

        $redirect = $this->router->redirectAfterSave(
            array(
                'route'      => 'test_route',
                'parameters' => array('id' => 1),
            ),
            array(),
            $entity
        );

        $this->assertEquals($testUrl, $redirect->getTargetUrl());
    }

    public function testSaveAndStayWithAccessDeniedRedirectAfterSave()
    {
        $testUrl1 = 'test\\url\\index1.html';
        $testUrl2 = 'test\\url\\index2.html';

        $this->request->expects($this->once())
            ->method('get')
            ->will($this->returnValue(Router::ACTION_SAVE_AND_STAY));

        $this->symfonyRouter->expects($this->once())
            ->method('generate')
            ->will(
                $this->returnCallback(
                    function ($name, $parameters) use (&$testUrl1, &$testUrl2) {
                        if ($name === 'test_route1') {
                            return $testUrl1;
                        } elseif ($name === 'test_route2') {
                            return $testUrl2;
                        } else {
                            return '';
                        }
                    }
                )
            );

        $entity = new \stdClass();

        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('EDIT', $this->identicalTo($entity))
            ->will($this->returnValue(false));

        $redirect = $this->router->redirectAfterSave(
            array(
                'route'      => 'test_route1',
                'parameters' => array('id' => 1),
            ),
            array(
                'route'      => 'test_route2',
                'parameters' => array('id' => 1),
            ),
            $entity
        );

        $this->assertEquals($testUrl2, $redirect->getTargetUrl());
    }

    public function testSaveAndCloseRedirectAfterSave()
    {
        $testUrl = 'save_and_close.html';

        $this->request->expects($this->once())
            ->method('get')
            ->will($this->returnValue(Router::ACTION_SAVE_CLOSE));

        $this->symfonyRouter->expects($this->once())
            ->method('generate')
            ->will($this->returnValue($testUrl));

        $this->authorizationChecker->expects($this->never())
            ->method('isGranted');

        $redirect = $this->router->redirectAfterSave(
            array(),
            array(
                'route'      => 'test_route',
                'parameters' => array('id' => 1),
            )
        );

        $this->assertEquals($testUrl, $redirect->getTargetUrl());
    }

    public function testWrongParametersRedirectAfterSave()
    {
        $this->expectException('\InvalidArgumentException');
        $this->router->redirectAfterSave(
            array(),
            array()
        );
    }

    public function testRedirectWillBeToTheSamePageIfInputActionIsEmpty()
    {
        $expectedUrl = '/example/view/1';
        $this->request->expects($this->once())
            ->method('getUri')
            ->willReturn($expectedUrl);

        $response = $this->router->redirect([]);
        $this->assertEquals($response->getTargetUrl(), $expectedUrl);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Request parameter "input_action" must be string, array is given.
     */
    public function testRedirectFailsWhenInputActionNotString()
    {
        $this->request->expects($this->any())
            ->method('get')
            ->with(Router::ACTION_PARAMETER)
            ->willReturn(['invalid_value']);

        $this->router->redirect([]);
    }

    // @codingStandardsIgnoreStart
    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Cannot parse route name from request parameter "input_action". Value of key "route" cannot be empty: {"route":""}
     */
    // @codingStandardsIgnoreEnd
    public function testRedirectFailsWhenRouteIsEmpty()
    {
        $this->request->expects($this->any())
            ->method('get')
            ->with(Router::ACTION_PARAMETER)
            ->willReturn(json_encode(['route' => '']));

        $this->router->redirect([]);
    }

    // @codingStandardsIgnoreStart
    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Cannot parse route name from request parameter "input_action". Value of key "route" must be string: {"route":{"foo":"bar"}}
     */
    // @codingStandardsIgnoreEnd
    public function testRedirectFailsWhenRouteIsNotString()
    {
        $this->request->expects($this->any())
            ->method('get')
            ->with(Router::ACTION_PARAMETER)
            ->willReturn(json_encode(['route' => ['foo' => 'bar']]));

        $this->router->redirect([]);
    }

    // @codingStandardsIgnoreStart
    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Cannot parse route name from request parameter "input_action". Value of key "params" must be array: {"route":"foo","params":"bar"}
     */
    // @codingStandardsIgnoreEnd
    public function testRedirectFailsWhenRouteParamsIsNotArray()
    {
        $this->request->expects($this->any())
            ->method('get')
            ->with(Router::ACTION_PARAMETER)
            ->willReturn(json_encode(['route' => 'foo', 'params' => 'bar']));

        $this->router->redirect([]);
    }

    /**
     * @dataProvider redirectDataProvider
     * @param array $expected
     * @param array $data
     */
    public function testRedirectWorks(array $expected, array $data)
    {
        $this->request->expects($this->any())
            ->method('get')
            ->with(Router::ACTION_PARAMETER)
            ->willReturn(json_encode($data['actionParameters']));

        $this->requestQuery->expects($this->once())
            ->method('all')
            ->will($this->returnValue($data['queryParameters']));

        $expectedUrl = 'http://expected.com';
        $this->symfonyRouter->expects($this->once())
            ->method('generate')
            ->with($expected['route'], $expected['parameters'])
            ->willReturn($expectedUrl);

        $response = $this->router->redirect($data['context']);
        $this->assertEquals($expectedUrl, $response->getTargetUrl());
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     *
     * @return array
     */
    public function redirectDataProvider()
    {
        $expectedId = 42;
        $entity = $this->getEntityStub($expectedId);

        $expectedSecondEntityId = 21;

        return [
            'with query parameters' => [
                'expected' => [
                    'route' => 'test_route',
                    'parameters' => [
                        'testStaticParameter' => 'Oro\Bundle\CallBundle\Entity\Call',
                        'id' => $expectedId,
                        'testQueryParameter' => 'foo'
                    ]
                ],
                'data' => [
                    'actionParameters' => [
                        'route' => 'test_route',
                        'params' => [
                            'testStaticParameter' => 'Oro\Bundle\CallBundle\Entity\Call',
                            'id' => '$id'
                        ]
                    ],
                    'context' => $entity,
                    'queryParameters' => [
                        'testQueryParameter' => 'foo'
                    ],
                ]
            ],
            'with query parameters overridden by route parameter' => [
                'expected' => [
                    'route' => 'test_route',
                    'parameters' => [
                        'testStaticParameter' => 'Oro\Bundle\CallBundle\Entity\Call',
                        'id' => $expectedId,
                    ]
                ],
                'data' => [
                    'actionParameters' => [
                        'route' => 'test_route',
                        'params' => [
                            'testStaticParameter' => 'Oro\Bundle\CallBundle\Entity\Call',
                            'id' => '$id'
                        ]
                    ],
                    'context' => $entity,
                    'queryParameters' => [
                        'testStaticParameter' => 'foo'
                    ],
                ]
            ],
            'with dynamic parameters and entity as context' => [
                'expected' => [
                    'route' => 'test_route',
                    'parameters' => [
                        'testStaticParameter' => 'Oro\Bundle\CallBundle\Entity\Call',
                        'id' => $expectedId
                    ]
                ],
                'data' => [
                    'actionParameters' => [
                        'route' => 'test_route',
                        'params' => [
                            'testStaticParameter' => 'Oro\Bundle\CallBundle\Entity\Call',
                            'id' => '$id'
                        ]
                    ],
                    'context' => $entity,
                    'queryParameters' => [],
                ]
            ],
            'with dynamic parameters and array as context' => [
                'expected' => [
                    'route' => 'test_route',
                    'parameters' => [
                        'testStaticParameter' => 'Oro\Bundle\CallBundle\Entity\Call',
                        'id' => $expectedId,
                        'secondId' => $expectedSecondEntityId
                    ]
                ],
                'data' => [
                    'actionParameters' => [
                        'route' => 'test_route',
                        'params' => [
                            'testStaticParameter' => 'Oro\Bundle\CallBundle\Entity\Call',
                            'id' => '$firstEntity.id',
                            'secondId' => '$secondEntity.id'
                        ]
                    ],
                    'context' => [
                        'firstEntity' => $entity,
                        'secondEntity' => $this->getEntityStub($expectedSecondEntityId)
                    ],
                    'queryParameters' => [],
                ]
            ],
        ];
    }

    /**
     * @param int $id
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getEntityStub($id)
    {
        $entity = $this->createPartialMock('StdClass', ['getId']);
        $entity->expects($this->any())
            ->method('getId')
            ->willReturn($id);

        return $entity;
    }
}
