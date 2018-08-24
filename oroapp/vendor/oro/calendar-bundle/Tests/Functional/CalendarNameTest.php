<?php

namespace Oro\Bundle\CalendarBundle\Tests\Functional;

use Oro\Bundle\EntityBundle\Provider\EntityNameResolver;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\CalendarBundle\Entity\Calendar;
use Oro\Bundle\CalendarBundle\Tests\Functional\DataFixtures\LoadUserData;

class CalendarNameTest extends WebTestCase
{
    /**
     * @var EntityNameResolver
     */
    protected $nameResollver;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->initClient([]);

        $this->loadFixtures([
            LoadUserData::class
        ]);

        $this->nameResollver = $this->getClientInstance()
            ->getContainer()
            ->get('oro_entity.entity_name_resolver');
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->nameResollver);
    }

    /**
     * @param bool      $withName
     * @param string    $expectedEventName
     * @param bool      $withoutOwner
     *
     * @dataProvider dataProvider
     */
    public function testCalendarNameEqualsToExpected($withName, $expectedEventName, $withoutOwner)
    {
        /**
         * @var $calendar Calendar
         */
        $calendar = $this->getReference('oro_calendar:calendar:system_user_1');
        if ($withName) {
            $calendar->setName($expectedEventName);
        } else {
            $calendar->setName(null);
        }

        if ($withoutOwner) {
            $calendar->setOwner(null);
        }

        $eventName = $this->nameResollver->getName($calendar);
        $this->assertSame($expectedEventName, $eventName);
    }

    public function dataProvider()
    {
        return [
            'Event with name' => [
                'withName' => true,
                'expectedEventName' => 'calendarWithName',
                'withoutOwner' => false
            ],
            'Event without name' => [
                'withName' => false,
                'expectedEventName' => 'Elley Towards',
                'withoutOwner' => false
            ],
            'Event without owner' => [
                'withName' => false,
                'expectedEventName' => 'N/A',
                'withoutOwner'      => true
            ]
        ];
    }
}
