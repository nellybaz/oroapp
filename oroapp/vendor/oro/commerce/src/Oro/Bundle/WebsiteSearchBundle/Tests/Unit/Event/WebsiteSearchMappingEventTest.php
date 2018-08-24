<?php

namespace Oro\Bundle\WebsiteSearchBundle\Tests\Unit\Event;

use Oro\Bundle\WebsiteSearchBundle\Event\WebsiteSearchMappingEvent;

class WebsiteSearchMappingEventTest extends \PHPUnit_Framework_TestCase
{
    /** @var WebsiteSearchMappingEvent */
    protected $event;

    protected function setUp()
    {
        $this->event = new WebsiteSearchMappingEvent();
    }

    public function testAccessors()
    {
        $this->assertSame([], $this->event->getConfiguration());

        $data = ['test'];
        $this->event->setConfiguration($data);
        $this->assertSame($data, $this->event->getConfiguration());
    }
}
