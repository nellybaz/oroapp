<?php

namespace Oro\Bundle\CalendarBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Form\Test\TypeTestCase;
use Symfony\Component\Validator\Validation;

use Doctrine\Common\Collections\ArrayCollection;

use Genemu\Bundle\FormBundle\Form\JQuery\Type\Select2Type;

use Oro\Bundle\CalendarBundle\Manager\CalendarEvent\NotificationManager;
use Oro\Bundle\CalendarBundle\Entity\Calendar;
use Oro\Bundle\CalendarBundle\Entity\CalendarEvent;
use Oro\Bundle\CalendarBundle\Form\Type\CalendarEventAttendeesApiType;
use Oro\Bundle\CalendarBundle\Model\Recurrence;
use Oro\Bundle\FormBundle\Form\Type\CollectionType;
use Oro\Bundle\FormBundle\Form\Type\EntityIdentifierType;
use Oro\Bundle\ReminderBundle\Form\Type\MethodType;
use Oro\Bundle\ReminderBundle\Form\Type\ReminderCollectionType;
use Oro\Bundle\ReminderBundle\Form\Type\ReminderInterval\UnitType;
use Oro\Bundle\ReminderBundle\Form\Type\ReminderIntervalType;
use Oro\Bundle\ReminderBundle\Form\Type\ReminderType;
use Oro\Bundle\ReminderBundle\Model\SendProcessorRegistry;
use Oro\Bundle\CalendarBundle\Form\Type\CalendarEventApiType;
use Oro\Bundle\CalendarBundle\Form\Type\RecurrenceFormType;
use Oro\Bundle\FormBundle\Form\Type\OroJquerySelect2HiddenType;
use Oro\Bundle\UserBundle\Form\Type\UserMultiSelectType;

class CalendarEventApiTypeTest extends TypeTestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $registry;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $entityManager;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $calendarEventManager;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $notificationManager;

    /** @var CalendarEventApiType */
    protected $calendarEventApiType;

    public function setUp()
    {
        $this->registry     = $this->getMockBuilder('Doctrine\Common\Persistence\ManagerRegistry')
            ->disableOriginalConstructor()
            ->getMock();
        $this->calendarEventManager =
            $this->getMockBuilder('Oro\Bundle\CalendarBundle\Manager\CalendarEventManager')
                ->disableOriginalConstructor()
                ->getMock();

        $userMeta = $this->getMockBuilder('Doctrine\ORM\Mapping\ClassMetadata')
            ->disableOriginalConstructor()
            ->getMock();
        $userMeta->expects($this->any())
            ->method('getSingleIdentifierFieldName')
            ->will($this->returnValue('id'));
        $eventMeta = $this->getMockBuilder('Doctrine\ORM\Mapping\ClassMetadata')
            ->disableOriginalConstructor()
            ->getMock();
        $eventMeta->expects($this->any())
            ->method('getSingleIdentifierFieldName')
            ->will($this->returnValue('id'));

        $query = $this->getMockBuilder('Doctrine\ORM\AbstractQuery')
            ->disableOriginalConstructor()
            ->setMethods(['execute'])
            ->getMockForAbstractClass();
        $query->expects($this->any())
            ->method('execute')
            ->will($this->returnValue([]));

        $qb = $this->getMockBuilder('Doctrine\ORM\QueryBuilder')
            ->disableOriginalConstructor()
            ->getMock();
        $qb->expects($this->any())
            ->method('where')
            ->will($this->returnSelf());
        $qb->expects($this->any())
            ->method('setParameter')
            ->will($this->returnSelf());
        $qb->expects($this->any())
            ->method('getQuery')
            ->will($this->returnValue($query));

        $userRepo = $this->getMockBuilder('Doctrine\ORM\EntityRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $userRepo->expects($this->any())
            ->method('createQueryBuilder')
            ->with('event')
            ->will($this->returnValue($qb));

        $this->entityManager = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();
        $this->entityManager->expects($this->any())
            ->method('getRepository')
            ->with('OroUserBundle:User')
            ->will($this->returnValue($userRepo));
        $this->entityManager->expects($this->any())
            ->method('getClassMetadata')
            ->with('OroUserBundle:User')
            ->will($this->returnValue($userMeta));
        $emForEvent = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();
        $emForEvent->expects($this->any())
            ->method('getClassMetadata')
            ->with('OroCalendarBundle:CalendarEvent')
            ->will($this->returnValue($eventMeta));
        $this->registry->expects($this->any())
            ->method('getManagerForClass')
            ->willReturn($emForEvent);

        $this->notificationManager = $this->getMockBuilder(NotificationManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->calendarEventApiType = new CalendarEventApiType(
            $this->calendarEventManager,
            $this->notificationManager
        );

        parent::setUp();
    }

    /**
     * @return array
     */
    protected function getExtensions()
    {
        return [
            new PreloadedExtension(
                $this->loadTypes(),
                []
            ),
            new ValidatorExtension(Validation::createValidator())
        ];
    }

    public function testSubmitValidData()
    {
        $formData = [
            'uid'             => 'MOCK-UID-11111',
            'calendar'        => 1,
            'title'           => 'testTitle',
            'description'     => 'testDescription',
            'start'           => '2013-10-05T13:00:00Z',
            'end'             => '2013-10-05T13:30:00+00:00',
            'allDay'          => true,
            'backgroundColor' => '#FF0000',
            'reminders'       => new ArrayCollection(),
            'attendees'       => new ArrayCollection(),
        ];

        $this->notificationManager
            ->expects($this->any())
            ->method('getSupportedStrategies')
            ->willReturn([]);

        $form = $this->factory->create(
            $this->calendarEventApiType,
            null,
            ['data_class' => 'Oro\Bundle\CalendarBundle\Tests\Unit\Fixtures\Entity\CalendarEvent']
        );

        $this->calendarEventManager->expects($this->once())
            ->method('setCalendar')
            ->with(
                $this->isInstanceOf('Oro\Bundle\CalendarBundle\Entity\CalendarEvent'),
                Calendar::CALENDAR_ALIAS,
                1
            );

        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        /** @var CalendarEvent $result */
        $result = $form->getData();
        $this->assertInstanceOf('Oro\Bundle\CalendarBundle\Entity\CalendarEvent', $result);
        $this->assertEquals('MOCK-UID-11111', $result->getUid());
        $this->assertEquals('testTitle', $result->getTitle());
        $this->assertEquals('testDescription', $result->getDescription());
        $this->assertEquals((new \DateTime('2013-10-05T13:00:00Z'))->format('U'), $result->getStart()->format('U'));
        $this->assertEquals((new \DateTime('2013-10-05T13:30:00Z'))->format('U'), $result->getEnd()->format('U'));
        $this->assertTrue($result->getAllDay());
        $this->assertEquals('#FF0000', $result->getBackgroundColor());

        $view     = $form->createView();
        $children = $view->children;

        foreach (array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }

        $this->assertFalse($form->has('invitedUsers'));
    }

    public function testSubmitValidDataSystemCalendar()
    {
        $formData = [
            'calendar'        => 1,
            'calendarAlias'   => 'system',
            'title'           => 'testTitle',
            'description'     => 'testDescription',
            'start'           => '2013-10-05T13:00:00Z',
            'end'             => '2013-10-05T13:30:00+00:00',
            'allDay'          => true,
            'backgroundColor' => '#FF0000',
            'reminders'       => new ArrayCollection(),
        ];

        $this->notificationManager
            ->expects($this->any())
            ->method('getSupportedStrategies')
            ->willReturn([]);

        $form = $this->factory->create(
            $this->calendarEventApiType,
            null,
            ['data_class' => 'Oro\Bundle\CalendarBundle\Tests\Unit\Fixtures\Entity\CalendarEvent']
        );

        $this->calendarEventManager->expects($this->once())
            ->method('setCalendar')
            ->with(
                $this->isInstanceOf('Oro\Bundle\CalendarBundle\Entity\CalendarEvent'),
                'system',
                1
            );

        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        /** @var CalendarEvent $result */
        $result = $form->getData();
        $this->assertInstanceOf('Oro\Bundle\CalendarBundle\Entity\CalendarEvent', $result);
        $this->assertNull($result->getUid());
        $this->assertEquals('testTitle', $result->getTitle());
        $this->assertEquals('testDescription', $result->getDescription());
        $this->assertEquals((new \DateTime('2013-10-05T13:00:00Z'))->format('U'), $result->getStart()->format('U'));
        $this->assertEquals((new \DateTime('2013-10-05T13:30:00Z'))->format('U'), $result->getEnd()->format('U'));
        $this->assertTrue($result->getAllDay());
        $this->assertEquals('#FF0000', $result->getBackgroundColor());

        $view     = $form->createView();
        $children = $view->children;

        foreach (array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }

        $this->assertFalse($form->has('invitedUsers'));
    }

    public function testSetDefaultOptions()
    {
        $resolver = $this->getMockBuilder('Symfony\Component\OptionsResolver\OptionsResolver')
            ->disableOriginalConstructor()
            ->getMock();
        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with(
                [
                    'data_class'           => 'Oro\Bundle\CalendarBundle\Entity\CalendarEvent',
                    'intention'            => 'calendar_event',
                    'csrf_protection'      => false,
                ]
            );

        $this->calendarEventApiType->configureOptions($resolver);
    }

    public function testGetName()
    {
        $this->assertEquals('oro_calendar_event_api', $this->calendarEventApiType->getName());
    }

    /**
     * @return AbstractType[]
     */
    protected function loadTypes()
    {
        $searchHandler = $this->createMock('Oro\Bundle\FormBundle\Autocomplete\SearchHandlerInterface');
        $searchHandler->expects($this->any())
            ->method('getEntityName')
            ->will($this->returnValue('OroUserBundle:User'));

        $searchRegistry = $this->getMockBuilder('Oro\Bundle\FormBundle\Autocomplete\SearchRegistry')
            ->disableOriginalConstructor()
            ->getMock();
        $searchRegistry->expects($this->any())
            ->method('getSearchHandler')
            ->will($this->returnValue($searchHandler));

        $configProvider = $this->getMockBuilder('Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $strategy = $this->getMockBuilder('Oro\Bundle\CalendarBundle\Model\Recurrence\StrategyInterface')
            ->getMock();

        $recurrenceModel = new Recurrence($strategy);

        $types = [
            new ReminderCollectionType($this->registry),
            new CollectionType($this->registry),
            new ReminderType($this->registry),
            new MethodType(new SendProcessorRegistry([])),
            new ReminderIntervalType(),
            new UnitType(),
            new UserMultiSelectType($this->entityManager),
            new OroJquerySelect2HiddenType($this->entityManager, $searchRegistry, $configProvider),
            new Select2Type('hidden'),
            new CalendarEventAttendeesApiType(),
            new RecurrenceFormType($recurrenceModel),
            new EntityIdentifierType($this->registry),
        ];

        $keys = array_map(
            function ($type) {
                /* @var AbstractType $type */
                return $type->getName();
            },
            $types
        );

        return array_combine($keys, $types);
    }
}
