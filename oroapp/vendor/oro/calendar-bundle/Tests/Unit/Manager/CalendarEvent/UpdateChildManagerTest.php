<?php

namespace Oro\Bundle\CalendarBundle\Tests\Unit\Manager;

use Doctrine\Common\Persistence\ManagerRegistry;

use Oro\Bundle\CalendarBundle\Entity\Attendee;
use Oro\Bundle\CalendarBundle\Entity\CalendarEvent;
use Oro\Bundle\CalendarBundle\Manager\CalendarEvent\UpdateChildManager;
use Oro\Bundle\OrganizationBundle\Entity\Organization;

class UpdateChildManagerTest extends \PHPUnit_Framework_TestCase
{
    /** @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject */
    private $doctrine;

    /** @var UpdateChildManager */
    private $manager;

    protected function setUp()
    {
        $this->doctrine = $this->getMockBuilder(ManagerRegistry::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->manager = new UpdateChildManager($this->doctrine);
    }

    public function testChildEventsAreNotCreatedWhenCalendarEventIsMainEventButNoOrganizer()
    {
        $calendarEvent = new CalendarEvent();
        $calendarEvent->setIsOrganizer(false)
            ->addAttendee(new Attendee());

        $this->doctrine->expects($this->never())
            ->method('getRepository');

        $this->manager->onEventUpdate($calendarEvent, new CalendarEvent(), new Organization());
    }
}
