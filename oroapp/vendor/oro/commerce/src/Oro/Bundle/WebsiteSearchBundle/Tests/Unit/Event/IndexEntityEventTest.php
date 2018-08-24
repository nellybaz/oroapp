<?php

namespace Oro\Bundle\WebsiteSearchBundle\Tests\Unit\Event;

use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Bundle\WebsiteSearchBundle\Event\IndexEntityEvent;
use Oro\Bundle\WebsiteSearchBundle\Placeholder\PlaceholderValue;

class IndexEntityEventTest extends \PHPUnit_Framework_TestCase
{
    public function testGetEntityClass()
    {
        $className = 'testClass';

        $event = new IndexEntityEvent($className, [], []);

        $this->assertEquals($className, $event->getEntityClass());
    }

    public function testGetEntityIds()
    {
        $entities = [new \stdClass(), new \stdClass()];
        $event = new IndexEntityEvent(\stdClass::class, $entities, []);

        $this->assertEquals($entities, $event->getEntities());
    }

    public function testGetContext()
    {
        $context = [
            'someKey' => 'someValue',
        ];

        $event = new IndexEntityEvent(\stdClass::class, [], $context);

        $this->assertEquals($context, $event->getContext());
    }

    public function testGetEntitiesDataWhenNothingWasAdded()
    {
        $event = new IndexEntityEvent(\stdClass::class, [], []);

        $this->assertEquals([], $event->getEntitiesData());
    }

    public function testGetEntityDataWhenFieldsAreAdded()
    {
        $event = new IndexEntityEvent(\stdClass::class, [1, 2], []);

        $event->addField(1, 'name', 'Product name', true);
        $event->addField(1, 'description', 'Product description', true);
        $event->addField(1, 'price', 100.00);
        $event->addField(1, 'categoryId', 3);
        $event->addField(2, 'name', 'Another product name', true);
        $date = new \DateTime();
        $event->addField(2, 'date', $date);

        $expectedData = [
            1 => [
                'name' => [['value' => 'Product name', 'all_text' => true]],
                'description' => [['value' => 'Product description', 'all_text' => true]],
                'price' => [['value' => 100.00, 'all_text' => false]],
                'categoryId' => [['value' => 3, 'all_text' => false]],
            ],
            2 => [
                'name' => [['value' => 'Another product name', 'all_text' => true]],
                'date' => [['value' => $date, 'all_text' => false]],
            ],
        ];

        $this->assertEquals($expectedData, $event->getEntitiesData());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Scalars and \DateTime are supported only, "stdClass" given
     */
    public function testAddFieldObject()
    {
        $event = new IndexEntityEvent(\stdClass::class, [], []);
        $event->addField(1, 'sku', new \stdClass());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Scalars and \DateTime are supported only, "array" given
     */
    public function testAddFieldArray()
    {
        $event = new IndexEntityEvent(\stdClass::class, [], []);
        $event->addField(1, 'sku', []);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage supported only, "Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue" given
     */
    public function testAddPlaceholderFieldNotSupported()
    {
        $event = new IndexEntityEvent(\stdClass::class, [], []);
        $event->addPlaceholderField(1, 'sku', new LocalizedFallbackValue(), []);
    }

    public function testSamePlaceholderValueDoestOverridePrevious()
    {
        $event = new IndexEntityEvent(\stdClass::class, [], []);
        $event->addPlaceholderField(1, 'sku', 'value1', []);
        $event->addPlaceholderField(1, 'sku', 'value2', []);

        $this->assertEquals(
            [
                1 => [
                    'sku' => [
                        ['value' => new PlaceholderValue('value1'), 'all_text' => false],
                        ['value' => new PlaceholderValue('value2'), 'all_text' => false],
                    ]
                ]
            ],
            $event->getEntitiesData()
        );
    }
}
