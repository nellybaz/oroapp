<?php

namespace Oro\Bundle\CalendarBundle\Tests\Unit\Manager;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\CalendarBundle\Entity\Recurrence;
use Oro\Bundle\CalendarBundle\Manager\CalendarEvent\DeleteManager;
use Oro\Bundle\CalendarBundle\Tests\Unit\Fixtures\Entity\Attendee;
use Oro\Bundle\CalendarBundle\Tests\Unit\Fixtures\Entity\CalendarEvent;

class DeleteManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $objectManager;

    /**
     * @var DeleteManager
     */
    protected $deleteManager;

    protected function setUp()
    {
        $doctrine = $this->createMock(ManagerRegistry::class);
        $this->objectManager = $this->createMock(ObjectManager::class);
        $doctrine->expects($this->any())
            ->method('getManager')
            ->willReturn($this->objectManager);

        $this->deleteManager = new DeleteManager($doctrine);
    }

    public function testDeleteRecurringEventAndClearAllExceptions()
    {
        $recurringEvent = new CalendarEvent(1);
        $recurringEvent->setRecurrence(new Recurrence());

        $childRecurringEvent = new CalendarEvent(3);
        $recurringEvent->addChildEvent($childRecurringEvent);

        $exceptionEvent = new CalendarEvent(2);
        $recurringEvent->addRecurringEventException($exceptionEvent);

        $childExceptionEvent = new CalendarEvent(4);
        $childRecurringEvent->addRecurringEventException($childExceptionEvent);

        $this->objectManager->expects($this->exactly(2))
            ->method('remove');

        $this->objectManager->expects($this->at(0))
            ->method('remove')
            ->with($exceptionEvent);

        $this->objectManager->expects($this->at(1))
            ->method('remove')
            ->with($childExceptionEvent);

        $this->deleteManager->deleteAndClearRecurringEventExceptions($recurringEvent);

        $this->assertCount(0, $recurringEvent->getRecurringEventExceptions());
        $this->assertCount(0, $childRecurringEvent->getRecurringEventExceptions());
    }

    public function testDeleteAttendeeExceptionEventCancelsTheEventAndRemovesAttendeeFromParentEvent()
    {
        $recurringEvent = new CalendarEvent(1);
        $childRecurringEvent = new CalendarEvent(2);
        $exceptionEvent = new CalendarEvent(3);
        $childExceptionEvent = new CalendarEvent(4);

        $exceptionEventAttendee = new Attendee(1);
        $childExceptionEventAttendee = new Attendee(2);

        $recurringEvent->setRecurrence(new Recurrence());
        $recurringEvent->addChildEvent($childRecurringEvent);
        $recurringEvent->addRecurringEventException($exceptionEvent);

        $exceptionEvent->addAttendee($exceptionEventAttendee);
        $exceptionEvent->addAttendee($childExceptionEventAttendee);
        $exceptionEvent->setRelatedAttendee($exceptionEventAttendee);
        $exceptionEvent->addChildEvent($childExceptionEvent);

        $childRecurringEvent->addRecurringEventException($childExceptionEvent);

        $childExceptionEvent->setRelatedAttendee($childExceptionEventAttendee);

        $this->objectManager->expects($this->never())
            ->method('remove');

        $this->deleteManager->deleteOrCancel($childExceptionEvent, true);

        $this->assertTrue($childExceptionEvent->isCancelled());
        $this->assertNull($childExceptionEvent->getRelatedAttendee());
        $this->assertFalse($exceptionEvent->getAttendees()->contains($childExceptionEventAttendee));
        $this->assertFalse($exceptionEvent->isCancelled());
    }

    public function testDeleteParentExceptionEventCancelsAllAttendeeEvents()
    {
        $recurringEvent = new CalendarEvent(1);
        $childRecurringEvent = new CalendarEvent(2);
        $exceptionEvent = new CalendarEvent(3);
        $childExceptionEvent = new CalendarEvent(4);

        $exceptionEventAttendee = new Attendee(1);
        $childExceptionEventAttendee = new Attendee(2);

        $recurringEvent->setRecurrence(new Recurrence());
        $recurringEvent->addChildEvent($childRecurringEvent);
        $recurringEvent->addRecurringEventException($exceptionEvent);

        $exceptionEvent->addAttendee($exceptionEventAttendee);
        $exceptionEvent->addAttendee($childExceptionEventAttendee);
        $exceptionEvent->setRelatedAttendee($exceptionEventAttendee);
        $exceptionEvent->addChildEvent($childExceptionEvent);

        $childRecurringEvent->addRecurringEventException($childExceptionEvent);

        $childExceptionEvent->setRelatedAttendee($childExceptionEventAttendee);

        $this->objectManager->expects($this->never())
            ->method('remove');

        $this->deleteManager->deleteOrCancel($exceptionEvent, true);

        $this->assertTrue($exceptionEvent->isCancelled());
        $this->assertTrue($childExceptionEvent->isCancelled());
        $this->assertNotNull($childExceptionEvent->getRelatedAttendee());
        $this->assertTrue($exceptionEvent->getAttendees()->contains($exceptionEventAttendee));
        $this->assertTrue($exceptionEvent->getAttendees()->contains($childExceptionEventAttendee));
    }
}
