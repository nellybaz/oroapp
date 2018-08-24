<?php

namespace Oro\Bundle\CalendarBundle\Tests\Unit\EventListener;

use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Knp\Menu\MenuFactory;
use Knp\Menu\MenuItem;

use Oro\Bundle\CalendarBundle\EventListener\NavigationListener;
use Oro\Bundle\CalendarBundle\Provider\SystemCalendarConfig;
use Oro\Bundle\NavigationBundle\Event\ConfigureMenuEvent;

class NavigationListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProviderWithToken
     */
    public function testOnNavigationConfigureWithUserInToken(
        $isPublicCalendarEnabled,
        $publicCalendarManagementAcl,
        $isSystemCalendarEnabled,
        $systemCalendarManagementAcl,
        $expectedVisibility
    ) {
        $factory     = new MenuFactory();
        $menu  = new MenuItem('parent_item', $factory);
        $menuItem = new MenuItem('oro_system_calendar_list', $factory);
        $menu->addChild($menuItem);

        $calendarConfig = $this->createMock(SystemCalendarConfig::class);
        $calendarConfig->expects($this->any())
            ->method('isPublicCalendarEnabled')
            ->willReturn($isPublicCalendarEnabled);
        $calendarConfig->expects($this->any())
            ->method('isSystemCalendarEnabled')
            ->willReturn($isSystemCalendarEnabled);

        $authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);
        $authorizationChecker->expects($this->any())
            ->method('isGranted')
            ->willReturnMap(
                [
                    ['oro_public_calendar_management', null, $publicCalendarManagementAcl],
                    ['oro_system_calendar_management', null, $systemCalendarManagementAcl]
                ]
            );

        $tokenAccessor = $this->createMock(TokenAccessorInterface::class);
        $tokenAccessor->expects($this->once())
            ->method('hasUser')
            ->willReturn(true);

        $listener = new NavigationListener($calendarConfig);
        $listener->setAuthorizationChecker($authorizationChecker);
        $listener->setTokenAccessor($tokenAccessor);

        $listener->onNavigationConfigure(new ConfigureMenuEvent($factory, $menu));

        $this->assertEquals($expectedVisibility, $menuItem->isDisplayed());
    }

    public function dataProviderWithToken()
    {
        return [
            [false, false, false, false, false],
            [true, false, false, false, false],
            [false, false, true, false, false],
            [false, false, true, true, true],
            [true, true, false, false, true],
            [true, false, true, false, false],
            [true, true, true, true, true],
        ];
    }

    /**
     * @dataProvider dataProviderWithoutToken
     */
    public function testOnNavigationConfigureWithoutUserInToken(
        $isPublicCalendarEnabled,
        $isSystemCalendarEnabled,
        $expectedVisibility
    ) {
        $factory     = new MenuFactory();
        $menu  = new MenuItem('parent_item', $factory);
        $menuItem = new MenuItem('oro_system_calendar_list', $factory);
        $menu->addChild($menuItem);

        $calendarConfig = $this->createMock(SystemCalendarConfig::class);
        $calendarConfig->expects($this->any())
            ->method('isPublicCalendarEnabled')
            ->willReturn($isPublicCalendarEnabled);
        $calendarConfig->expects($this->any())
            ->method('isSystemCalendarEnabled')
            ->willReturn($isSystemCalendarEnabled);

        $authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);
        $authorizationChecker->expects($this->never())
            ->method('isGranted');

        $tokenAccessor = $this->createMock(TokenAccessorInterface::class);
        $tokenAccessor->expects($this->once())
            ->method('hasUser')
            ->willReturn(false);

        $listener = new NavigationListener($calendarConfig);
        $listener->setAuthorizationChecker($authorizationChecker);
        $listener->setTokenAccessor($tokenAccessor);

        $listener->onNavigationConfigure(new ConfigureMenuEvent($factory, $menu));

        $this->assertEquals($expectedVisibility, $menuItem->isDisplayed());
    }

    public function dataProviderWithoutToken()
    {
        return [
            [false, false, false],
            [true, false, true],
            [false, true, true],
            [true, true, true],
        ];
    }
}
