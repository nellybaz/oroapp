<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Event\CombinedPriceList;

use Oro\Bundle\PricingBundle\Event\CombinedPriceList\WebsiteCPLUpdateEvent;

class WebsiteCPLUpdateEventTest extends \PHPUnit_Framework_TestCase
{
    public function testEvent()
    {
        $data = [1, 2, 3];
        $event = new WebsiteCPLUpdateEvent($data);
        $this->assertInstanceOf('Symfony\Component\EventDispatcher\Event', $event);
        $this->assertSame($data, $event->getWebsiteIds());
    }
}
