<?php

namespace Oro\Bundle\RFPBundle\Tests\Unit\EventListener;

use Knp\Menu\MenuItem;
use Knp\Menu\MenuFactory;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Oro\Bundle\FeatureToggleBundle\Checker\FeatureChecker;
use Oro\Bundle\NavigationBundle\Event\ConfigureMenuEvent;
use Oro\Bundle\RFPBundle\EventListener\NavigationListener;

class NavigationListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var AuthorizationCheckerInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $authorizationChecker;

    /** @var FeatureChecker|\PHPUnit_Framework_MockObject_MockObject */
    private $featureChecker;

    /** @var NavigationListener */
    private $listener;

    protected function setUp()
    {
        $this->authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);
        $this->featureChecker = $this->createMock(FeatureChecker::class);

        $this->listener = new NavigationListener($this->authorizationChecker, $this->featureChecker);
    }

    /**
     * @param bool $isGranted
     * @param bool $isResourceEnabled
     * @param bool $expectedIsDisplayed
     *
     * @dataProvider navigationConfigureDataProvider
     */
    public function testOnNavigationConfigure($isGranted, $isResourceEnabled, $expectedIsDisplayed)
    {
        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('oro_rfp_frontend_request_view')
            ->willReturn($isGranted);
        $this->featureChecker->expects($this->exactly((int)!$isGranted))
            ->method('isResourceEnabled')
            ->with('oro_rfp_frontend_request_index', 'routes')
            ->willReturn($isResourceEnabled);

        $factory     = new MenuFactory();
        $menu        = new MenuItem('oro_customer_menu', $factory);
        $rfpMenuItem = new MenuItem('oro_rfp_frontend_request_index', $factory);
        $menu->addChild($rfpMenuItem);

        $eventData = new ConfigureMenuEvent($factory, $menu);
        $this->listener->onNavigationConfigure($eventData);

        $this->assertEquals($expectedIsDisplayed, $rfpMenuItem->isDisplayed());
    }

    /**
     * @return array
     */
    public function navigationConfigureDataProvider()
    {
        return [
            'access granted and resource enabled' => [
                true,
                true,
                true
            ],
            'access not granted and resource enabled' => [
                false,
                true,
                true
            ],
            'access granted and resource not enabled' => [
                true,
                false,
                true
            ],
            'access not granted and resource not enabled' => [
                false,
                false,
                false
            ]
        ];
    }
}
