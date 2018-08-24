<?php

namespace Oro\Bundle\AnalyticsBundle\Tests\Functional\Builder;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\AnalyticsBundle\Builder\RFMBuilder;
use Oro\Bundle\AnalyticsBundle\Tests\Functional\DataFixtures\LoadCustomerData;
use Oro\Bundle\AnalyticsBundle\Tests\Functional\DataFixtures\LoadOrderData;
use Oro\Bundle\AnalyticsBundle\Tests\Functional\DataFixtures\LoadRFMMetricCategoryData;
use Oro\Bundle\ChannelBundle\Entity\Channel;
use Oro\Bundle\MagentoBundle\Entity\Customer;

class RFMBuilderTest extends WebTestCase
{
    /**
     * @var RFMBuilder
     */
    protected $builder;

    protected function setUp()
    {
        $this->initClient();
        $this->loadFixtures([LoadCustomerData::class, LoadRFMMetricCategoryData::class, LoadOrderData::class]);

        $this->builder = $this->getContainer()->get('oro_analytics.builder.rfm');
    }

    /**
     * @dataProvider buildDataProvider
     *
     * @param $channelReference
     * @param array $ids
     * @param array $expectedData
     */
    public function testBuild($channelReference, array $expectedData, array $ids = [])
    {
        /** @var Channel $channel */
        $channel = $this->getReference($channelReference);
        $this->builder->build($channel, $ids);
        $this->assertAnalyticBuild($channel, $expectedData);
    }

    /**
     * @return array
     */
    public function buildDataProvider()
    {
        return [
            [
                'channelReference' => 'Channel.CustomerChannel',
                'expectedData' => [
                    'Channel.CustomerIdentity.CustomerIdentity' => [
                        'recency' => 10,
                        'frequency' => null,
                        'monetary' => 8,
                    ],
                    'Channel.CustomerChannel.Customer' => [
                        'recency' => null,
                        'frequency' => 9,
                        'monetary' => 8,
                    ],
                ]
            ]
        ];
    }

    /**
     * @param Channel $channel
     * @param array $expectedData
     */
    protected function assertAnalyticBuild(Channel $channel, array $expectedData)
    {
        $expectedData = array_combine(array_map(function ($item) {
            return $this->getReference($item)->getId();
        }, array_keys($expectedData)), array_values($expectedData));

        $repository = $this->getContainer()->get('doctrine')
            ->getManagerForClass('Oro\Bundle\MagentoBundle\Entity\Customer')
            ->getRepository('Oro\Bundle\MagentoBundle\Entity\Customer');

        $actualData = $repository->findBy(['dataChannel' => $channel]);
        /** @var Customer[] $actualData */
        $actualData = array_reduce($actualData, function ($result, Customer $item) {
            $result[$item->getId()] = [
                'recency' => $item->getRecency(),
                'frequency' => $item->getFrequency(),
                'monetary' => $item->getMonetary(),
            ];
            return $result;
        }, []);
        $this->assertCount(count($expectedData), $actualData);
        $this->assertEquals($expectedData, $actualData);
    }
}
