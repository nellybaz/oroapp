<?php

namespace Oro\Bundle\ReminderBundle\Tests\Unit\Model\Email;

use Oro\Bundle\NotificationBundle\Manager\EmailNotificationManager;
use Oro\Bundle\ReminderBundle\Entity\Reminder;
use Oro\Bundle\ReminderBundle\Event\ReminderEvents;
use Oro\Bundle\ReminderBundle\Event\SendReminderEmailEvent;
use Oro\Bundle\ReminderBundle\Model\Email\EmailNotification;
use Oro\Bundle\ReminderBundle\Model\Email\EmailSendProcessor;
use Symfony\Component\EventDispatcher\EventDispatcher;

class EmailSendProcessorTest extends \PHPUnit_Framework_TestCase
{
    const EXCEPTION_MESSAGE = 'message';

    /**
     * @var EmailSendProcessor
     */
    protected $processor;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject | EmailNotificationManager
     */
    protected $emailNotificationManager;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject | EmailNotification
     */
    protected $emailNotification;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject | EventDispatcher
     */
    protected $eventDispatcher;

    protected function setUp()
    {
        $this->emailNotificationManager = $this
            ->getMockBuilder(EmailNotificationManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->emailNotification = $this
            ->getMockBuilder(EmailNotification::class)
            ->disableOriginalConstructor()
            ->setMethods(array('setReminder', 'getEntity'))
            ->getMock();

        $this->eventDispatcher = $this->createMock(EventDispatcher::class);

        $this->processor = new EmailSendProcessor(
            $this->emailNotificationManager,
            $this->emailNotification,
            $this->eventDispatcher
        );
    }

    public function testPush()
    {
        $fooReminder = $this->createMock('Oro\Bundle\ReminderBundle\Entity\Reminder');
        $barReminder = $this->createMock('Oro\Bundle\ReminderBundle\Entity\Reminder');

        $this->processor->push($fooReminder);
        $this->processor->push($barReminder);

        $this->assertAttributeEquals(
            array($fooReminder, $barReminder),
            'reminders',
            $this->processor
        );
    }

    public function testProcess()
    {
        $fooEntity = $this->createMock(\stdClass::class);
        $fooReminder = $this->createMock('Oro\Bundle\ReminderBundle\Entity\Reminder');
        $barEntity = $this->createMock(\ArrayObject::class);
        $barReminder = $this->createMock('Oro\Bundle\ReminderBundle\Entity\Reminder');

        $this->emailNotification
            ->expects($this->at(0))
            ->method('setReminder')
            ->with($fooReminder);

        $this->emailNotification
            ->expects($this->at(1))
            ->method('getEntity')
            ->will($this->returnValue($fooEntity));

        $this->emailNotification
            ->expects($this->at(2))
            ->method('setReminder')
            ->with($barReminder);

        $this->emailNotification
            ->expects($this->at(3))
            ->method('getEntity')
            ->will($this->returnValue($barEntity));

        $this->emailNotificationManager
            ->expects($this->at(0))
            ->method('process')
            ->with($fooEntity, array($this->emailNotification));

        $this->emailNotificationManager
            ->expects($this->at(1))
            ->method('process')
            ->with($barEntity, array($this->emailNotification));

        $fooReminder->expects($this->once())
            ->method('setState')
            ->with(Reminder::STATE_SENT);

        $barReminder->expects($this->once())
            ->method('setState')
            ->with(Reminder::STATE_SENT);

        $assertEvent = $this->callback(function ($event) use ($fooReminder) {
            $this->assertInstanceOf('Oro\Bundle\ReminderBundle\Event\SendReminderEmailEvent', $event);
            /** @var SendReminderEmailEvent $event */
            $this->assertEquals($fooReminder, $event->getReminder());
            return true;
        });
        $this->eventDispatcher->expects($this->at(0))
            ->method('dispatch')
            ->with(
                ReminderEvents::BEFORE_REMINDER_EMAIL_NOTIFICATION_SEND,
                $assertEvent
            );

        $assertEvent = $this->callback(function ($event) use ($barReminder) {
            $this->assertInstanceOf('Oro\Bundle\ReminderBundle\Event\SendReminderEmailEvent', $event);
            /** @var SendReminderEmailEvent $event */
            $this->assertEquals($barReminder, $event->getReminder());
            return true;
        });
        $this->eventDispatcher->expects($this->at(1))
            ->method('dispatch')
            ->with(
                ReminderEvents::BEFORE_REMINDER_EMAIL_NOTIFICATION_SEND,
                $assertEvent
            );

        $this->processor->push($fooReminder);
        $this->processor->push($barReminder);

        $this->processor->process();
    }

    public function testProcessFailed()
    {
        $fooEntity = $this->createMock(\stdClass::class);
        $fooReminder = $this->createMock('Oro\Bundle\ReminderBundle\Entity\Reminder');

        $this->emailNotification
            ->expects($this->at(0))
            ->method('setReminder')
            ->with($fooReminder);

        $this->emailNotification
            ->expects($this->at(1))
            ->method('getEntity')
            ->will($this->returnValue($fooEntity));

        $exception = new \Exception();

        $this->emailNotificationManager
            ->expects($this->once())
            ->method('process')
            ->with($fooEntity, array($this->emailNotification))
            ->will($this->throwException($exception));

        $fooReminder->expects($this->once())
            ->method('setState')
            ->with(Reminder::STATE_FAIL);

        $fooReminder->expects($this->once())
            ->method('setFailureException')
            ->with($exception);

        $this->processor->push($fooReminder);

        $this->processor->process();
    }

    public function testGetName()
    {
        $this->assertEquals(
            EmailSendProcessor::NAME,
            $this->processor->getName()
        );
    }

    public function testGetLabel()
    {
        $this->assertEquals(
            'oro.reminder.processor.email.label',
            $this->processor->getLabel()
        );
    }
}
