<?php

namespace Oro\Bundle\AbandonedCartBundle\Tests\Unit\Model\AbandonedCartList;

use Oro\Bundle\AbandonedCartBundle\Model\AbandonedCartList\CampaignFactory;
use Oro\Bundle\MarketingListBundle\Entity\MarketingList;

class CampaignFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CampaignFactory
     */
    protected $factory;

    protected function setUp()
    {
        $this->factory = new CampaignFactory();
    }

    public function testCreate()
    {
        $marketingList = new MarketingList();
        $marketingList->setName('test campaign na$me');

        $campaign = $this->factory->create($marketingList);

        $this->assertInstanceOf('Oro\Bundle\CampaignBundle\Entity\Campaign', $campaign);

        $this->assertEquals($campaign->getCode(), 'test_campaign_na_me');
        $this->assertEquals($campaign->getName(), $marketingList->getName());
    }
}
