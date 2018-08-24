<?php

namespace Oro\Component\EntitySerializer\Tests\Unit;

use Oro\Component\EntitySerializer\EntityConfig;
use Oro\Component\EntitySerializer\FieldConfig;

class EntityConfigTest extends \PHPUnit_Framework_TestCase
{
    public function testToArray()
    {
        $entityConfig = new EntityConfig();
        $this->assertEquals([], $entityConfig->toArray());

        $entityConfig->setExcludeAll();

        $field = new FieldConfig();
        $field->setExcluded();
        $entityConfig->addField('test', $field);

        $this->assertEquals(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'test' => ['exclude' => true]
                ]
            ],
            $entityConfig->toArray()
        );
    }

    public function testIsEmpty()
    {
        $entityConfig = new EntityConfig();
        $this->assertTrue($entityConfig->isEmpty());

        $entityConfig->setExcludeAll();
        $this->assertFalse($entityConfig->isEmpty());

        $entityConfig->setExcludeNone();
        $this->assertTrue($entityConfig->isEmpty());

        $entityConfig->addField('test');
        $this->assertFalse($entityConfig->isEmpty());

        $entityConfig->removeField('test');
        $this->assertTrue($entityConfig->isEmpty());
    }

    public function testFields()
    {
        $entityConfig = new EntityConfig();
        $this->assertFalse($entityConfig->hasField('test'));
        $this->assertNull($entityConfig->getField('test'));
        $this->assertEquals([], $entityConfig->getFields());

        $field = new FieldConfig();
        $this->assertSame($field, $entityConfig->addField('test', $field));
        $this->assertTrue($entityConfig->hasField('test'));
        $this->assertSame($field, $entityConfig->getField('test'));
        $this->assertEquals(['test' => $field], $entityConfig->getFields());
        $this->assertEquals(['fields' => ['test' => []]], $entityConfig->toArray());

        $entityConfig->removeField('test');
        $this->assertFalse($entityConfig->hasField('test'));
        $this->assertNull($entityConfig->getField('test'));
        $this->assertEquals([], $entityConfig->getFields());
        $this->assertEquals([], $entityConfig->toArray());
    }

    public function testExclusionPolicy()
    {
        $entityConfig = new EntityConfig();
        $this->assertFalse($entityConfig->isExcludeAll());

        $entityConfig->setExcludeAll();
        $this->assertTrue($entityConfig->isExcludeAll());
        $this->assertEquals(['exclusion_policy' => 'all'], $entityConfig->toArray());

        $entityConfig->setExcludeNone();
        $this->assertFalse($entityConfig->isExcludeAll());
        $this->assertEquals([], $entityConfig->toArray());

        $entityConfig->setExclusionPolicy(EntityConfig::EXCLUSION_POLICY_ALL);
        $this->assertTrue($entityConfig->isExcludeAll());
        $this->assertEquals(['exclusion_policy' => 'all'], $entityConfig->toArray());

        $entityConfig->setExclusionPolicy(EntityConfig::EXCLUSION_POLICY_NONE);
        $this->assertFalse($entityConfig->isExcludeAll());
        $this->assertEquals([], $entityConfig->toArray());
    }

    public function testPartialLoad()
    {
        $entityConfig = new EntityConfig();
        $this->assertTrue($entityConfig->isPartialLoadEnabled());

        $entityConfig->disablePartialLoad();
        $this->assertFalse($entityConfig->isPartialLoadEnabled());
        $this->assertEquals(['disable_partial_load' => true], $entityConfig->toArray());

        $entityConfig->enablePartialLoad();
        $this->assertTrue($entityConfig->isPartialLoadEnabled());
        $this->assertEquals([], $entityConfig->toArray());
    }

    public function testOrderBy()
    {
        $entityConfig = new EntityConfig();
        $this->assertEquals([], $entityConfig->getOrderBy());

        $entityConfig->setOrderBy(['test' => 'ASC']);
        $this->assertEquals(['test' => 'ASC'], $entityConfig->getOrderBy());
        $this->assertEquals(['order_by' => ['test' => 'ASC']], $entityConfig->toArray());

        $entityConfig->setOrderBy();
        $this->assertEquals([], $entityConfig->getOrderBy());
        $this->assertEquals([], $entityConfig->toArray());
    }

    public function testMaxResults()
    {
        $entityConfig = new EntityConfig();
        $this->assertNull($entityConfig->getMaxResults());

        $entityConfig->setMaxResults(123);
        $this->assertEquals(123, $entityConfig->getMaxResults());
        $this->assertEquals(['max_results' => 123], $entityConfig->toArray());

        $entityConfig->setMaxResults();
        $this->assertNull($entityConfig->getMaxResults());
        $this->assertEquals([], $entityConfig->toArray());
    }

    public function testHints()
    {
        $entityConfig = new EntityConfig();
        $this->assertEquals([], $entityConfig->getHints());

        $entityConfig->addHint('hint1');
        $entityConfig->addHint('hint2', 'val');
        $this->assertEquals(['hint1', ['name' => 'hint2', 'value' => 'val']], $entityConfig->getHints());
        $this->assertEquals(['hints' => ['hint1', ['name' => 'hint2', 'value' => 'val']]], $entityConfig->toArray());

        $entityConfig->removeHint('hint1', 'val');
        $this->assertEquals(['hint1', ['name' => 'hint2', 'value' => 'val']], $entityConfig->getHints());
        $this->assertEquals(['hints' => ['hint1', ['name' => 'hint2', 'value' => 'val']]], $entityConfig->toArray());

        $entityConfig->removeHint('hint1');
        $this->assertEquals([['name' => 'hint2', 'value' => 'val']], $entityConfig->getHints());
        $this->assertEquals(['hints' => [['name' => 'hint2', 'value' => 'val']]], $entityConfig->toArray());

        $entityConfig->removeHint('hint2');
        $this->assertEquals([['name' => 'hint2', 'value' => 'val']], $entityConfig->getHints());
        $this->assertEquals(['hints' => [['name' => 'hint2', 'value' => 'val']]], $entityConfig->toArray());

        $entityConfig->removeHint('hint2', 'val');
        $this->assertEquals([], $entityConfig->getHints());
        $this->assertEquals([], $entityConfig->toArray());
    }

    public function testPostSerializeHandler()
    {
        $entityConfig = new EntityConfig();
        $this->assertNull($entityConfig->getPostSerializeHandler());

        $handler = 'test';
        $entityConfig->setPostSerializeHandler($handler);
        $this->assertSame($handler, $entityConfig->getPostSerializeHandler());
        $this->assertEquals(['post_serialize' => 'test'], $entityConfig->toArray());

        $entityConfig->setPostSerializeHandler();
        $this->assertNull($entityConfig->getPostSerializeHandler());
        $this->assertEquals([], $entityConfig->toArray());
    }
}
