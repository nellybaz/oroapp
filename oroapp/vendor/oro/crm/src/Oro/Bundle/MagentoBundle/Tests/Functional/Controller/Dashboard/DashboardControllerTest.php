<?php

namespace Oro\Bundle\MagentoBundle\Tests\Functional\Controller\Dashboard;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectRepository;

use Oro\Bundle\DashboardBundle\Entity\Dashboard;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\ChannelBundle\Entity\Channel;
use Oro\Bundle\MagentoBundle\Provider\MagentoChannelType;

class DashboardControllerTest extends WebTestCase
{
    /** @var array */
    protected $data = [];

    /** @var ManagerRegistry */
    protected $doctrine;

    public function setUp()
    {
        $this->initClient();
        $this->loadFixtures(['Oro\Bundle\MagentoBundle\Tests\Functional\DataFixtures\LoadDashboardData']);

        $this->doctrine = $this->getContainer()->get('doctrine');

        /** @var ObjectRepository $dashboardRepo */
        $dashboardRepo = $this->doctrine->getRepository('OroDashboardBundle:Dashboard');
        $dashboard     = $dashboardRepo->findOneBy(['name' => 'TestWidgets']);

        /** @var ObjectRepository $widgetRepo */
        $widgetRepo = $this->doctrine->getRepository('OroDashboardBundle:Widget');

        $averageOrderAmountChart = $widgetRepo->findOneBy([
            'dashboard' => $dashboard,
            'name'      => 'average_order_amount_chart'
        ]);

        $newMagentoCustomersChart = $widgetRepo->findOneBy([
            'dashboard' => $dashboard,
            'name'      => 'new_magento_customers_chart'
        ]);

        $this->data = [
            'dashboardId'                 => $dashboard->getId(),
            'average_order_amount_chart'  => $averageOrderAmountChart->getId(),
            'new_magento_customers_chart' => $newMagentoCustomersChart->getId()
        ];
    }

    public function testAverageOrderAmountAction()
    {
        $this->client->request(
            'GET',
            $this->getUrl(
                'oro_magento_dashboard_average_order_amount',
                ['_widgetId' => $this->data['average_order_amount_chart']]
            )
        );
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains('Average order amount', $result->getContent());

        /** @var Channel[] $channels */
        $channels = $this->doctrine
            ->getRepository('OroChannelBundle:Channel')
            ->findBy(['channelType' => MagentoChannelType::TYPE]);
        foreach ($channels as $channel) {
            $this->assertContains($channel->getName(), $result->getContent());
        }
    }

    public function testNewCustomersAction()
    {
        $this->client->request(
            'GET',
            $this->getUrl(
                'oro_magento_dashboard_new_customers_chart',
                ['_widgetId' => $this->data['new_magento_customers_chart']]
            )
        );
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains('New Magento Customers', $result->getContent());

        $aclHelper = $this->getContainer()->get('oro_security.acl_helper');

        /** @var array $channels */
        $channels = $this->doctrine->getRepository('OroChannelBundle:Channel')
            ->getAvailableChannelNames($aclHelper, MagentoChannelType::TYPE);
        foreach ($channels as $channel) {
            $this->assertContains($channel['name'], $result->getContent());
        }
    }
}
