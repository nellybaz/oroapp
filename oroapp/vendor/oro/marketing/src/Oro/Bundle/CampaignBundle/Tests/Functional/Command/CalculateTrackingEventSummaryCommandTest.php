<?php

namespace Oro\Bundle\CampaignBundle\Tests\Functional\Command;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\CampaignBundle\Command\CalculateTrackingEventSummaryCommand;

class CalculateTrackingEventSummaryCommandTest extends WebTestCase
{
    protected function setUp()
    {
        $this->initClient();
        $this->loadFixtures(
            [
                'Oro\Bundle\CampaignBundle\Tests\Functional\DataFixtures\LoadCampaignData',
                'Oro\Bundle\CampaignBundle\Tests\Functional\DataFixtures\LoadTrackingEventData',
            ]
        );
    }

    public function testReportUpdate()
    {
        $result = $this->runCommand(CalculateTrackingEventSummaryCommand::NAME);

        $expectedMessages = [
            'Campaigns to calculate: 3',
            'Calculating statistic for campaign: Campaign1',
            'Calculating statistic for campaign: Campaign2',
            'Calculating statistic for campaign: Campaign3',
            'Finished campaigns statistic calculation'
        ];

        $this->assertEquals(implode(' ', $expectedMessages), $result);

        $timezone = new \DateTimeZone('UTC');
        $dateOne = new \DateTime('-1 day', $timezone);
        $dateTwo = new \DateTime('-2 days', $timezone);
        $dateThree = new \DateTime('-3 days', $timezone);
        $expectedData = [
            [
                'code' => 'cmp1',
                'name' => 'ev1',
                'visitCount' => 2,
                'loggedAtDate' => $dateThree->format('Y-m-d')
            ],
            [
                'code' => 'cmp1',
                'name' => 'ev1',
                'visitCount' => 1,
                'loggedAtDate' => $dateTwo->format('Y-m-d')
            ],
            [
                'code' => 'cmp1',
                'name' => 'ev1',
                'visitCount' => 1,
                'loggedAtDate' => $dateOne->format('Y-m-d')
            ],
            [
                'code' => 'cmp1',
                'name' => 'ev2',
                'visitCount' => 1,
                'loggedAtDate' => $dateThree->format('Y-m-d')
            ],
            [
                'code' => 'cmp3',
                'name' => 'ev1',
                'visitCount' => 1,
                'loggedAtDate' => $dateOne->format('Y-m-d')
            ],
        ];
        $summaryData = $this->getSummaryData();

        $this->assertEquals($expectedData, $summaryData);
    }

    /**
     * @return array
     */
    protected function getSummaryData()
    {
        return $this->getContainer()->get('doctrine')
            ->getRepository('OroCampaignBundle:TrackingEventSummary')
            ->createQueryBuilder('q')
            ->select(['q.code', 'q.name', 'q.visitCount', 'DATE(q.loggedAt) as loggedAtDate'])
            ->addOrderBy('q.code, q.name, q.loggedAt')
            ->getQuery()
            ->getArrayResult();
    }
}
