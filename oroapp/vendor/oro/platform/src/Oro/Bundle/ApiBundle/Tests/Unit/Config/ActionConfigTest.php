<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Config;

use Oro\Bundle\ApiBundle\Config\ActionFieldConfig;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

use Oro\Bundle\ApiBundle\Config\ActionConfig;

class ActionConfigTest extends \PHPUnit_Framework_TestCase
{
    public function testIsEmpty()
    {
        $config = new ActionConfig();
        $this->assertTrue($config->isEmpty());
    }

    public function testClone()
    {
        $config = new ActionConfig();
        $this->assertTrue($config->isEmpty());
        $this->assertEmpty($config->toArray());

        $config->set('test', 'value');
        $objValue = new \stdClass();
        $objValue->someProp = 123;
        $config->set('test_object', $objValue);

        $configClone = clone $config;

        $this->assertEquals($config, $configClone);
        $this->assertNotSame($objValue, $configClone->get('test_object'));
    }

    public function testExcluded()
    {
        $config = new ActionConfig();
        $this->assertFalse($config->hasExcluded());
        $this->assertFalse($config->isExcluded());

        $config->setExcluded();
        $this->assertTrue($config->hasExcluded());
        $this->assertTrue($config->isExcluded());
        $this->assertEquals(['exclude' => true], $config->toArray());

        $config->setExcluded(false);
        $this->assertTrue($config->hasExcluded());
        $this->assertFalse($config->isExcluded());
        $this->assertEquals(['exclude' => false], $config->toArray());
    }

    public function testCustomAttribute()
    {
        $attrName = 'test';

        $config = new ActionConfig();
        $this->assertFalse($config->has($attrName));
        $this->assertNull($config->get($attrName));
        $this->assertSame([], $config->keys());

        $config->set($attrName, null);
        $this->assertFalse($config->has($attrName));
        $this->assertNull($config->get($attrName));
        $this->assertEquals([], $config->toArray());
        $this->assertSame([], $config->keys());

        $config->set($attrName, false);
        $this->assertTrue($config->has($attrName));
        $this->assertFalse($config->get($attrName));
        $this->assertEquals([$attrName => false], $config->toArray());
        $this->assertEquals([$attrName], $config->keys());

        $config->remove($attrName);
        $this->assertFalse($config->has($attrName));
        $this->assertNull($config->get($attrName));
        $this->assertSame([], $config->toArray());
        $this->assertSame([], $config->keys());
    }

    public function testDescription()
    {
        $config = new ActionConfig();
        $this->assertFalse($config->hasDescription());
        $this->assertNull($config->getDescription());

        $config->setDescription('text');
        $this->assertTrue($config->hasDescription());
        $this->assertEquals('text', $config->getDescription());
        $this->assertEquals(['description' => 'text'], $config->toArray());

        $config->setDescription(null);
        $this->assertFalse($config->hasDescription());
        $this->assertNull($config->getDescription());
        $this->assertEquals([], $config->toArray());

        $config->setDescription('text');
        $config->setDescription('');
        $this->assertFalse($config->hasDescription());
        $this->assertNull($config->getDescription());
        $this->assertEquals([], $config->toArray());
    }

    public function testDocumentation()
    {
        $config = new ActionConfig();
        $this->assertFalse($config->hasDocumentation());
        $this->assertNull($config->getDocumentation());

        $config->setDocumentation('text');
        $this->assertTrue($config->hasDocumentation());
        $this->assertEquals('text', $config->getDocumentation());
        $this->assertEquals(['documentation' => 'text'], $config->toArray());

        $config->setDocumentation(null);
        $this->assertFalse($config->hasDocumentation());
        $this->assertNull($config->getDocumentation());
        $this->assertEquals([], $config->toArray());

        $config->setDocumentation('text');
        $config->setDocumentation('');
        $this->assertFalse($config->hasDocumentation());
        $this->assertNull($config->getDocumentation());
        $this->assertEquals([], $config->toArray());
    }

    public function testAclResource()
    {
        $config = new ActionConfig();
        $this->assertFalse($config->hasAclResource());
        $this->assertNull($config->getAclResource());

        $config->setAclResource('test_acl_resource');
        $this->assertTrue($config->hasAclResource());
        $this->assertEquals('test_acl_resource', $config->getAclResource());
        $this->assertEquals(['acl_resource' => 'test_acl_resource'], $config->toArray());

        $config->setAclResource(null);
        $this->assertTrue($config->hasAclResource());
        $this->assertNull($config->getAclResource());
        $this->assertEquals(['acl_resource' => null], $config->toArray());
    }

    public function testMaxResults()
    {
        $config = new ActionConfig();
        $this->assertFalse($config->hasMaxResults());
        $this->assertNull($config->getMaxResults());

        $config->setMaxResults(123);
        $this->assertTrue($config->hasMaxResults());
        $this->assertEquals(123, $config->getMaxResults());
        $this->assertEquals(['max_results' => 123], $config->toArray());

        $config->setMaxResults(-1);
        $this->assertTrue($config->hasMaxResults());
        $this->assertEquals(-1, $config->getMaxResults());
        $this->assertEquals(['max_results' => -1], $config->toArray());

        $config->setMaxResults('456');
        $this->assertTrue($config->hasMaxResults());
        $this->assertSame(456, $config->getMaxResults());
        $this->assertEquals(['max_results' => 456], $config->toArray());

        $config->setMaxResults(-2);
        $this->assertTrue($config->hasMaxResults());
        $this->assertEquals(-1, $config->getMaxResults());
        $this->assertEquals(['max_results' => -1], $config->toArray());

        $config->setMaxResults(null);
        $this->assertFalse($config->hasMaxResults());
        $this->assertNull($config->getMaxResults());
        $this->assertEquals([], $config->toArray());
    }

    public function testPageSize()
    {
        $config = new ActionConfig();
        $this->assertFalse($config->hasPageSize());
        $this->assertNull($config->getPageSize());

        $config->setPageSize(123);
        $this->assertTrue($config->hasPageSize());
        $this->assertEquals(123, $config->getPageSize());
        $this->assertEquals(['page_size' => 123], $config->toArray());

        $config->setPageSize(-1);
        $this->assertTrue($config->hasPageSize());
        $this->assertEquals(-1, $config->getPageSize());
        $this->assertEquals(['page_size' => -1], $config->toArray());

        $config->setPageSize('456');
        $this->assertTrue($config->hasPageSize());
        $this->assertSame(456, $config->getPageSize());
        $this->assertEquals(['page_size' => 456], $config->toArray());

        $config->setPageSize(-2);
        $this->assertTrue($config->hasPageSize());
        $this->assertEquals(-1, $config->getPageSize());
        $this->assertEquals(['page_size' => -1], $config->toArray());

        $config->setPageSize(null);
        $this->assertFalse($config->hasPageSize());
        $this->assertNull($config->getPageSize());
        $this->assertEquals([], $config->toArray());
    }

    public function testOrderBy()
    {
        $config = new ActionConfig();
        $this->assertEquals([], $config->getOrderBy());

        $config->setOrderBy(['field1' => 'DESC']);
        $this->assertEquals(['field1' => 'DESC'], $config->getOrderBy());
        $this->assertEquals(['order_by' => ['field1' => 'DESC']], $config->toArray());

        $config->setOrderBy([]);
        $this->assertEquals([], $config->getOrderBy());
        $this->assertEquals([], $config->toArray());
    }

    public function testSortingFlag()
    {
        $config = new ActionConfig();
        $this->assertTrue($config->isSortingEnabled());

        $config->disableSorting();
        $this->assertFalse($config->isSortingEnabled());
        $this->assertEquals(['disable_sorting' => true], $config->toArray());

        $config->enableSorting();
        $this->assertTrue($config->isSortingEnabled());
        $this->assertEquals([], $config->toArray());
    }

    public function testInclusionFlag()
    {
        $config = new ActionConfig();
        $this->assertTrue($config->isInclusionEnabled());

        $config->disableInclusion();
        $this->assertFalse($config->isInclusionEnabled());
        $this->assertEquals(['disable_inclusion' => true], $config->toArray());

        $config->enableInclusion();
        $this->assertTrue($config->isInclusionEnabled());
        $this->assertEquals([], $config->toArray());
    }

    public function testFieldsetFlag()
    {
        $config = new ActionConfig();
        $this->assertTrue($config->isFieldsetEnabled());

        $config->disableFieldset();
        $this->assertFalse($config->isFieldsetEnabled());
        $this->assertEquals(['disable_fieldset' => true], $config->toArray());

        $config->enableFieldset();
        $this->assertTrue($config->isFieldsetEnabled());
        $this->assertEquals([], $config->toArray());
    }

    public function testMetaPropertiesFlag()
    {
        $config = new ActionConfig();
        $this->assertTrue($config->isMetaPropertiesEnabled());

        $config->disableMetaProperties();
        $this->assertFalse($config->isMetaPropertiesEnabled());
        $this->assertEquals(['disable_meta_properties' => true], $config->toArray());

        $config->enableMetaProperties();
        $this->assertTrue($config->isMetaPropertiesEnabled());
        $this->assertEquals([], $config->toArray());
    }

    public function testFormType()
    {
        $config = new ActionConfig();
        $this->assertNull($config->getFormType());

        $config->setFormType('test');
        $this->assertEquals('test', $config->getFormType());
        $this->assertEquals(['form_type' => 'test'], $config->toArray());

        $config->setFormType(null);
        $this->assertNull($config->getFormType());
        $this->assertEquals([], $config->toArray());
    }

    public function testFormOptions()
    {
        $config = new ActionConfig();
        $this->assertNull($config->getFormOptions());

        $config->setFormOptions(['key' => 'val']);
        $this->assertEquals(['key' => 'val'], $config->getFormOptions());
        $this->assertEquals(['form_options' => ['key' => 'val']], $config->toArray());

        $config->setFormOptions(null);
        $this->assertNull($config->getFormOptions());
        $this->assertEquals([], $config->toArray());
    }

    public function testSetFormOption()
    {
        $config = new ActionConfig();

        $config->setFormOption('option1', 'value1');
        $config->setFormOption('option2', 'value2');
        $this->assertEquals(
            ['option1' => 'value1', 'option2' => 'value2'],
            $config->getFormOptions()
        );

        $config->setFormOption('option1', 'newValue');
        $this->assertEquals(
            ['option1' => 'newValue', 'option2' => 'value2'],
            $config->getFormOptions()
        );
    }

    public function testAddFormConstraint()
    {
        $config = new ActionConfig();

        $config->addFormConstraint(new NotNull());
        $this->assertEquals(['constraints' => [new NotNull()]], $config->getFormOptions());

        $config->addFormConstraint(new NotBlank());
        $this->assertEquals(['constraints' => [new NotNull(), new NotBlank()]], $config->getFormOptions());
    }

    public function testFormEventSubscribers()
    {
        $config = new ActionConfig();
        $this->assertNull($config->getFormEventSubscribers());

        $config->setFormEventSubscribers(['subscriber1']);
        $this->assertEquals(['subscriber1'], $config->getFormEventSubscribers());
        $this->assertEquals(['form_event_subscriber' => ['subscriber1']], $config->toArray());

        $config->setFormEventSubscribers([]);
        $this->assertNull($config->getFormOptions());
        $this->assertEquals([], $config->toArray());
    }

    public function testSetNullToFormEventSubscribers()
    {
        $config = new ActionConfig();
        $config->setFormEventSubscribers(['subscriber1']);

        $config->setFormEventSubscribers(null);
        $this->assertNull($config->getFormOptions());
        $this->assertEquals([], $config->toArray());
    }

    /**
     * @expectedException \TypeError
     */
    public function testSetInvalidValueToFormEventSubscribers()
    {
        $config = new ActionConfig();
        $config->setFormEventSubscribers('subscriber1');
    }

    public function testFields()
    {
        $config = new ActionConfig();
        $this->assertFalse($config->hasFields());
        $this->assertEquals([], $config->getFields());
        $this->assertTrue($config->isEmpty());
        $this->assertEquals([], $config->toArray());

        $field = $config->addField('field');
        $this->assertTrue($config->hasFields());
        $this->assertTrue($config->hasField('field'));
        $this->assertEquals(['field' => $field], $config->getFields());
        $this->assertSame($field, $config->getField('field'));
        $this->assertFalse($config->isEmpty());
        $this->assertEquals(['fields' => ['field' => null]], $config->toArray());

        $config->removeField('field');
        $this->assertFalse($config->hasFields());
        $this->assertFalse($config->hasField('field'));
        $this->assertEquals([], $config->getFields());
        $this->assertTrue($config->isEmpty());
        $this->assertEquals([], $config->toArray());
    }

    public function testGetOrAddField()
    {
        $config = new ActionConfig();

        $field = $config->getOrAddField('field');
        $this->assertSame($field, $config->getField('field'));

        $field1 = $config->getOrAddField('field');
        $this->assertSame($field, $field1);
    }

    public function testAddField()
    {
        $config = new ActionConfig();

        $field = $config->addField('field');
        $this->assertSame($field, $config->getField('field'));

        $field1 = new ActionFieldConfig();
        $field1 = $config->addField('field', $field1);
        $this->assertSame($field1, $config->getField('field'));
        $this->assertNotSame($field, $field1);
    }
}
