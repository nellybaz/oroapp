<?php

namespace Oro\Component\Action\Tests\Unit\Action;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Routing\RouterInterface;

use Oro\Component\Action\Action\AssignUrl;
use Oro\Component\ConfigExpression\ContextAccessor;
use Oro\Component\ConfigExpression\Tests\Unit\Fixtures\ItemStub;

class AssignUrlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|RouterInterface
     */
    protected $router;

    /**
     * @var AssignUrl
     */
    protected $action;

    protected function setUp()
    {
        $this->router = $this->getMockBuilder('Symfony\Component\Routing\RouterInterface')
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $this->router->expects($this->any())
            ->method('generate')
            ->will($this->returnCallback(array($this, 'generateTestUrl')));

        $this->action = new AssignUrl(new ContextAccessor(), $this->router);

        /** @var EventDispatcher $dispatcher */
        $dispatcher = $this->getMockBuilder('Symfony\Component\EventDispatcher\EventDispatcher')
            ->disableOriginalConstructor()
            ->getMock();
        $this->action->setDispatcher($dispatcher);
    }

    protected function tearDown()
    {
        unset($this->router, $this->action);
    }

    /**
     * @param array $options
     * @dataProvider optionsDataProvider
     */
    public function testInitialize(array $options)
    {
        $this->action->initialize($options);
        $this->assertAttributeEquals($options, 'options', $this->action);
    }

    /**
     * @return array
     */
    public function optionsDataProvider()
    {
        return array(
            'route' => array(
                'options' => array(
                    'route' => 'test_route_name',
                    'attribute' => 'test'
                ),
                'expectedUrl' => $this->generateTestUrl('test_route_name'),
            ),
            'route with parameters' => array(
                'options' => array(
                    'route' => 'test_route_name',
                    'route_parameters' => array('id' => 1),
                    'attribute' => 'test'
                ),
                'expectedUrl' => $this->generateTestUrl('test_route_name', array('id' => 1)),
            )
        );
    }

    /**
     * @param array $options
     * @param string $exceptionName
     * @param string $exceptionMessage
     * @dataProvider initializeExceptionDataProvider
     */
    public function testInitializeException(array $options, $exceptionName, $exceptionMessage)
    {
        $this->expectException($exceptionName);
        $this->expectExceptionMessage($exceptionMessage);
        $this->action->initialize($options);
    }

    /**
     * @return array
     */
    public function initializeExceptionDataProvider()
    {
        return array(
            'no name' => array(
                'options' => array(),
                'exceptionName' => '\Oro\Component\Action\Exception\InvalidParameterException',
                'exceptionMessage' => 'Route parameter must be specified',
            ),
            'invalid route parameters' => array(
                'options' => array(
                    'route' => 'test_route_name',
                    'route_parameters' => 'stringData',
                    'attribute' => 'test'
                ),
                'exceptionName' => '\Oro\Component\Action\Exception\InvalidParameterException',
                'exceptionMessage' => 'Route parameters must be an array',
            ),
            'no attribute' => array(
                'options' => array(
                    'route' => 'test_route_name'
                ),
                'exceptionName' => '\Oro\Component\Action\Exception\InvalidParameterException',
                'exceptionMessage' => 'Attribiute parameters is required',
            ),
        );
    }

    /**
     * @param array $options
     * @param string $expectedUrl
     * @dataProvider optionsDataProvider
     */
    public function testExecute(array $options, $expectedUrl)
    {
        $context = new ItemStub();

        $this->action->initialize($options);
        $this->action->execute($context);

        $urlProperty = $options['attribute'];
        $this->assertEquals($expectedUrl, $context->$urlProperty);
    }

    /**
     * @param string $routeName
     * @param array $routeParameters
     * @return string
     */
    public function generateTestUrl($routeName, array $routeParameters = array())
    {
        $url = 'url:' . $routeName;
        if ($routeParameters) {
            $url .= ':' . serialize($routeParameters);
        }

        return $url;
    }
}
