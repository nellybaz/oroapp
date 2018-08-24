<?php

namespace Oro\Bundle\DotmailerBundle\Tests\Unit\EventListener;

use Knp\Menu\MenuItem;
use Knp\Menu\MenuFactory;

use Oro\Bundle\NavigationBundle\Event\ConfigureMenuEvent;
use Oro\Bundle\DotmailerBundle\EventListener\NavigationListener;
use Oro\Bundle\DotmailerBundle\Provider\ChannelType;

class NavigationListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $registry;

    /** @var  NavigationListener */
    protected $listener;

    protected function setUp()
    {
        $this->registry = $this->getMockBuilder('Doctrine\Common\Persistence\ManagerRegistry')
            ->disableOriginalConstructor()->getMock();
        $this->listener = new NavigationListener($this->registry);
    }

    public function testOnNavigationConfigureHasDMIntegrations()
    {
        $channelRepository = $this->getMockBuilder('Oro\Bundle\IntegrationBundle\Entity\Repository\ChannelRepository')
                    ->disableOriginalConstructor()->getMock();
        $this->registry->expects($this->once())->method('getRepository')->with('OroIntegrationBundle:Channel')
            ->will($this->returnValue($channelRepository));
        $channelRepository->expects($this->once())->method('findBy')->with(['type' => ChannelType::TYPE])
            ->will($this->returnValue(['integration']));
        $factory = new MenuFactory();
        $menu         = new MenuItem('test_menu', $factory);
        $marketingTab = new MenuItem('marketing_tab', $factory);
        $dmTab        = new MenuItem('oro_dotmailer', $factory);
        $marketingTab->addChild($dmTab)->setDisplay(true);
        $menu->addChild($marketingTab);

        $eventData = new ConfigureMenuEvent($factory, $menu);
        $this->listener->onNavigationConfigure($eventData);
        $this->assertTrue($dmTab->isDisplayed());
    }

    public function testOnNavigationConfigureNoDMIntegrations()
    {
        $channelRepository = $this->getMockBuilder('Oro\Bundle\IntegrationBundle\Entity\Repository\ChannelRepository')
                    ->disableOriginalConstructor()->getMock();
        $this->registry->expects($this->once())->method('getRepository')->with('OroIntegrationBundle:Channel')
            ->will($this->returnValue($channelRepository));
        $channelRepository->expects($this->once())->method('findBy')->with(['type' => ChannelType::TYPE])
            ->will($this->returnValue([]));
        $factory = new MenuFactory();
        $menu         = new MenuItem('test_menu', $factory);
        $marketingTab = new MenuItem('marketing_tab', $factory);
        $dmTab        = new MenuItem('oro_dotmailer', $factory);
        $marketingTab->addChild($dmTab)->setDisplay(true);
        $menu->addChild($marketingTab);

        $eventData = new ConfigureMenuEvent($factory, $menu);
        $this->listener->onNavigationConfigure($eventData);
        $this->assertFalse($dmTab->isDisplayed());
    }
}
