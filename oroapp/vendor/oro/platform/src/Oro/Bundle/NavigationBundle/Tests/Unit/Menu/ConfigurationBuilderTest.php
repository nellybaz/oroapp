<?php

namespace Oro\Bundle\NavigationBundle\Tests\Unit\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\MenuFactory;
use Knp\Menu\MenuItem;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Oro\Bundle\NavigationBundle\Config\MenuConfiguration;
use Oro\Bundle\NavigationBundle\Event\ConfigureMenuEvent;
use Oro\Bundle\NavigationBundle\Menu\ConfigurationBuilder;

use Oro\Component\Config\Resolver\SystemAwareResolver;

class ConfigurationBuilderTest extends \PHPUnit_Framework_TestCase
{
    /** @var ConfigurationBuilder */
    protected $configurationBuilder;

    /** @var MenuFactory */
    protected $factory;

    /** @var FactoryInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $menuFactory;

    /** @var EventDispatcherInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $eventDispatcher;

    /** @var MenuConfiguration|\PHPUnit_Framework_MockObject_MockObject */
    protected $menuConfiguration;

    protected function setUp()
    {
        $resolver = new SystemAwareResolver();

        $this->menuFactory = $this->createMock(FactoryInterface::class);
        $this->eventDispatcher = $this->createMock(EventDispatcherInterface::class);
        $this->menuConfiguration = $this->getMockBuilder(MenuConfiguration::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->configurationBuilder = new ConfigurationBuilder(
            $resolver,
            $this->menuFactory,
            $this->eventDispatcher,
            $this->menuConfiguration
        );

        $this->factory = $this->getMockBuilder(MenuFactory::class)
            ->setMethods(['getRouteInfo', 'processRoute'])
            ->getMock();

        $this->factory->expects($this->any())
            ->method('getRouteInfo')
            ->will($this->returnValue(false));

        $this->factory->expects($this->any())
            ->method('processRoute')
            ->will($this->returnSelf());
    }

    /**
     * @dataProvider menuStructureProvider
     * @param array $options
     */
    public function testBuild($options)
    {
        $this->menuConfiguration->expects(self::once())
            ->method('getTree')
            ->willReturn($options['tree']);
        $this->menuConfiguration->expects(self::any())
            ->method('getItems')
            ->willReturn(isset($options['items']) ? $options['items'] : []);

        $menu = new MenuItem('navbar', $this->factory);

        $this->eventDispatcher
            ->expects($this->once())
            ->method('dispatch')
            ->with('oro_menu.configure.navbar', new ConfigureMenuEvent($this->menuFactory, $menu));

        $this->configurationBuilder->build($menu, [], 'navbar');

        $this->assertCount(2, $menu->getChildren());
        $this->assertEquals($options['tree']['navbar']['type'], $menu->getExtra('type'));
        $this->assertCount(
            count($options['tree']['navbar']['children']['user_user_show']['children']),
            $menu->getChild('user_user_show')
        );
        $this->assertEquals('user_user_show', $menu->getChild('user_user_show')->getName());
    }

    /**
     * @dataProvider setAreaToExtraProvider
     * @param array $options
     * @param string $expectedArea
     */
    public function testSetAreaToExtra($options, $expectedArea)
    {
        $this->menuConfiguration->expects(self::once())
            ->method('getTree')
            ->willReturn($options['tree']);
        $this->menuConfiguration->expects(self::once())
            ->method('getItems')
            ->willReturn($options['items']);

        $menu = new MenuItem('navbar', $this->factory);
        $this->configurationBuilder->build($menu, [], 'navbar');

        $this->assertEquals($expectedArea, $menu->getExtra('scope_type'));
    }

    /**
     * @return array
     */
    public function setAreaToExtraProvider()
    {
        return [
            'with no scope type specified' => [
                'options' => [
                    'items' => [
                        'homepage' => [
                            'name' => 'Home page 2',
                            'label' => 'Home page title',
                            'route' => 'oro_menu_index',
                            'translateDomain' => 'SomeBundle',
                            'translateParameters' => [],
                            'routeParameters' => [],
                            'extras' => []
                        ]
                    ],
                    'tree' => [
                        'navbar' => [
                            'type' => 'navbar',
                            'children' => [
                                'homepage' => [
                                    'position' => 7,
                                    'children' => []
                                ]
                            ]
                        ]
                    ]
                ],
                'expectedArea' => 'menu_default_visibility',
            ],
            'with scope type' => [
                'options' => [
                    'items' => [
                        'homepage' => [
                            'name' => 'Home page 2',
                            'label' => 'Home page title',
                            'route' => 'oro_menu_index',
                            'translateDomain' => 'SomeBundle',
                            'translateParameters' => [],
                            'routeParameters' => [],
                            'extras' => []
                        ]
                    ],
                    'tree' => [
                        'navbar' => [
                            'type' => 'navbar',
                            'scope_type' => 'frontend',
                            'children' => [
                                'homepage' => [
                                    'position' => 7,
                                    'children' => []
                                ]
                            ]
                        ]
                    ]
                ],
                'expectedArea' => 'frontend',
            ]
        ];
    }

    /**
     * @return array
     */
    public function menuStructureProvider()
    {
        return [
            'full_menu' => [[
                'areas' => [],
                'templates' => [
                    'navbar' => [
                        'template' => 'OroNavigationBundle:Menu:navbar.html.twig'
                    ],
                    'dropdown' => [
                        'template' => 'OroNavigationBundle:Menu:dropdown.html.twig'
                    ]
                ],
                'items' => [
                    'homepage' => [
                        'name' => 'Home page 2',
                        'label' => 'Home page title',
                        'route' => 'oro_menu_index',
                        'translateDomain' => 'SomeBundle',
                        'translateParameters' => [],
                        'translate_disabled' => false,
                        'routeParameters' => [],
                        'extras' => []
                    ],
                    'user_registration_register' => [
                        'route' => 'oro_menu_submenu',
                        'translateDomain' => 'SomeBundle',
                        'translateParameters' => [],
                        'translate_disabled' => true,
                        'routeParameters' => [],
                        'extras' => []
                    ],
                    'user_user_show' => [
                        'translateDomain' => 'SomeBundle',
                        'translateParameters' => [],
                        'routeParameters' => [],
                        'extras' => []
                    ],
                ],
                'tree' => [
                    'navbar' => [
                        'type' => 'navbar',
                        'extras' => [
                            'brand' => 'Oro',
                            'brandLink' => '/'
                        ],
                        'children' => [
                            'user_user_show' => [
                                'position' => '10',
                                'children' => [
                                    'user_registration_register' => [
                                        'children' => []
                                    ]
                                ]
                            ],
                            'homepage' => [
                                'position' => 7,
                                'children' => []
                            ]
                        ]
                    ]
                ]
            ]]
        ];
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Item key "user_user_show" duplicated in tree menu "navbar".
     */
    public function testBuildDuplicatedItemTreeCallException()
    {
        $options = [
            'areas' => [],
            'items' => [
                'user_registration_register' => [
                    'route' => 'oro_menu_submenu',
                    'extras' => []
                ],
                'user_user_show' => [
                    'translateDomain' => 'SomeBundle',
                    'extras' => []
                ],
            ],
            'tree' => [
                'navbar' => [
                    'type' => 'navbar',
                    'extras' => [],
                    'children' => [
                        'user_user_show' => [
                            'position' => '10',
                            'children' => [
                                'user_registration_register' => [
                                    'children' => [
                                        'user_user_show' => [
                                            'children' => []
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
        $this->menuConfiguration->expects(self::once())
            ->method('getTree')
            ->willReturn($options['tree']);
        $this->menuConfiguration->expects(self::any())
            ->method('getItems')
            ->willReturn($options['items']);
        $menu = new MenuItem('navbar', $this->factory);
        $this->configurationBuilder->build($menu, [], 'navbar');
    }

    public function testBuildExtraIsAllowed()
    {
        $options = [
            'items' => [
                'user_registration_register' => [
                    'route' => 'oro_menu_submenu',
                    'extras' => []
                ]
            ],
            'tree' => [
                'navbar' => [
                    'type' => 'navbar',
                    'extras' => [],
                    'children' => [
                        'user_user_show' => [
                            'position' => '10'
                        ]
                    ]
                ]
            ]
        ];
        $this->menuConfiguration->expects(self::once())
            ->method('getTree')
            ->willReturn($options['tree']);
        $this->menuConfiguration->expects(self::any())
            ->method('getItems')
            ->willReturn($options['items']);

        $menu = new MenuItem('navbar', $this->factory);
        $menu->setExtra('isAllowed', true);
        $this->configurationBuilder->build($menu, [], 'navbar');

        $this->assertFalse($menu->getExtra('isAllowed'));
    }
}
