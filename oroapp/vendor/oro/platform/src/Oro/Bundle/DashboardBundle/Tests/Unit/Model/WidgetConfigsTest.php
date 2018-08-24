<?php

namespace Oro\Bundle\DashboardBundle\Tests\Unit\Model;

use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\DashboardBundle\Entity\Widget;
use Oro\Bundle\DashboardBundle\Model\WidgetConfigs;
use Oro\Bundle\DashboardBundle\Model\WidgetOptionBag;

class WidgetConfigsTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    private $widgetRepository;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    private $em;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    private $valueProvider;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $configProvider;

    /** @var WidgetConfigs */
    private $widgetConfigs;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $translator;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $eventDispatcher;

    public function setUp()
    {
        $this->configProvider = $this->getMockBuilder('Oro\Bundle\DashboardBundle\Model\ConfigProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $resolver = $this->createMock('Oro\Component\Config\Resolver\ResolverInterface');

        $this->em = $this->createMock('Doctrine\ORM\EntityManagerInterface');

        $this->valueProvider = $this->getMockBuilder('Oro\Bundle\DashboardBundle\Provider\ConfigValueProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->valueProvider->expects($this->any())
            ->method('getConvertedValue')
            ->willReturnCallback(
                function ($widgetConfig, $type, $value) {
                    return $value;
                }
            );

        $this->translator = $this->getMockBuilder('Symfony\Component\Translation\TranslatorInterface')
            ->disableOriginalConstructor()
            ->getMock();

        $this->eventDispatcher = $this->createMock('Symfony\Component\EventDispatcher\EventDispatcherInterface');

        $widgetConfigVisibilityFilter = $this
            ->getMockBuilder('Oro\Bundle\DashboardBundle\Filter\WidgetConfigVisibilityFilter')
            ->disableOriginalConstructor()
            ->getMock();
        $widgetConfigVisibilityFilter->expects($this->any())
            ->method('filterConfigs')
            ->will($this->returnArgument(0));

        $this->widgetConfigs = new WidgetConfigs(
            $this->configProvider,
            $resolver,
            $this->em,
            $this->valueProvider,
            $this->translator,
            $this->eventDispatcher,
            $widgetConfigVisibilityFilter
        );

        $this->widgetRepository = $this->getMockBuilder('Doctrine\ORM\EntityRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $this->em
            ->expects($this->any())
            ->method('getRepository')
            ->with('OroDashboardBundle:Widget')
            ->will($this->returnValue($this->widgetRepository));
    }

    public function testGetWidgetOptionsShouldReturnEmptyArrayIfRequestIsNull()
    {
        $this->widgetConfigs->setRequest(null);

        $this->assertEmpty($this->widgetConfigs->getWidgetOptions()->all());
    }

    public function testGetWidgetOptionsShouldReturnEmptyArrayIfThereIsNoWidgetIdInRequestQuery()
    {
        $request = new Request();
        $this->widgetConfigs->setRequest($request);

        $this->assertEmpty($this->widgetConfigs->getWidgetOptions()->all());
    }

    public function testGetWidgetOptionsShouldReturnOptionsOfWidget()
    {
        $request = new Request([
            '_widgetId' => 1,
        ]);
        $this->widgetConfigs->setRequest($request);

        $widget = new Widget();
        $this->widgetRepository
            ->expects($this->once())
            ->method('find')
            ->with(1)
            ->will($this->returnValue($widget));

        $options = ['k' => 'v', 'k2' => 'v2'];
        $widget->setOptions($options);

        $this->configProvider->expects($this->once())
            ->method('getWidgetConfig')
            ->willReturn(
                [
                    'configuration' => [
                        'k'  => ['type' => 'test'],
                        'k2' => ['type' => 'test'],
                    ]
                ]
            );

        $this->assertEquals(new WidgetOptionBag($options), $this->widgetConfigs->getWidgetOptions());
    }

    public function testGetWidgetOptionsShouldReturnOptionsOfWidgetSpecifiedAsArgument()
    {
        $request = new Request([
            '_widgetId' => 1,
        ]);
        $this->widgetConfigs->setRequest($request);

        $widget = new Widget();
        $this->widgetRepository
            ->expects($this->once())
            ->method('find')
            ->with(2)
            ->will($this->returnValue($widget));

        $options = ['k' => 'v', 'k2' => 'v2'];
        $widget->setOptions($options);

        $this->configProvider->expects($this->once())
            ->method('getWidgetConfig')
            ->willReturn(
                [
                    'configuration' => [
                        'k'  => ['type' => 'test'],
                        'k2' => ['type' => 'test'],
                    ]
                ]
            );

        $this->assertEquals(new WidgetOptionBag($options), $this->widgetConfigs->getWidgetOptions(2));
    }
}
