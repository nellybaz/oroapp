<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Config;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

use Oro\Bundle\ApiBundle\Config\EntityDefinitionFieldConfig;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Bundle\ApiBundle\Util\ConfigUtil;

class EntityDefinitionConfigTest extends \PHPUnit_Framework_TestCase
{
    public function testKey()
    {
        $config = new EntityDefinitionConfig();
        $this->assertNull($config->getKey());

        $config->setKey('text');
        $this->assertEquals('text', $config->getKey());
        $this->assertEquals([], $config->toArray());

        $config->setKey(null);
        $this->assertNull($config->getKey());
    }

    public function testClone()
    {
        $config = new EntityDefinitionConfig();
        $config->setKey('some key');
        $config->setExcludeAll();
        $config->set('test_scalar', 'value');
        $objValue = new \stdClass();
        $objValue->someProp = 123;
        $config->set('test_object', $objValue);
        $config->addField('field1')->setDataType('int');

        $configClone = clone $config;

        $this->assertEquals($config, $configClone);
        $this->assertNotSame($objValue, $configClone->get('test_object'));
    }

    public function testCustomAttribute()
    {
        $attrName = 'test';

        $config = new EntityDefinitionConfig();
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

    public function testParentResourceClass()
    {
        $config = new EntityDefinitionConfig();
        $this->assertNull($config->getParentResourceClass());

        $config->setParentResourceClass('Test\Class');
        $this->assertEquals('Test\Class', $config->getParentResourceClass());
        $this->assertEquals(['parent_resource_class' => 'Test\Class'], $config->toArray());

        $config->setParentResourceClass(null);
        $this->assertNull($config->getParentResourceClass());
        $this->assertEquals([], $config->toArray());

        $config->setParentResourceClass('Test\Class');
        $config->setParentResourceClass(null);
        $this->assertNull($config->getParentResourceClass());
        $this->assertEquals([], $config->toArray());
    }

    public function testDescription()
    {
        $config = new EntityDefinitionConfig();
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
        $config = new EntityDefinitionConfig();
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

    public function testDocumentationResources()
    {
        $config = new EntityDefinitionConfig();
        $this->assertFalse($config->hasDocumentationResources());
        $this->assertSame([], $config->getDocumentationResources());

        $config->setDocumentationResources(['resource link']);
        $this->assertTrue($config->hasDocumentationResources());
        $this->assertEquals(['resource link'], $config->getDocumentationResources());
        $this->assertEquals(['documentation_resource' => ['resource link']], $config->toArray());

        $config->setDocumentationResources('another resource link');
        $this->assertTrue($config->hasDocumentationResources());
        $this->assertEquals(['another resource link'], $config->getDocumentationResources());
        $this->assertEquals(['documentation_resource' => ['another resource link']], $config->toArray());

        $config->setDocumentationResources(null);
        $this->assertFalse($config->hasDocumentationResources());
        $this->assertSame([], $config->getDocumentationResources());
        $this->assertEquals([], $config->toArray());

        $config->setDocumentationResources(['resource link']);
        $config->setDocumentationResources([]);
        $this->assertFalse($config->hasDocumentationResources());
        $this->assertSame([], $config->getDocumentationResources());
        $this->assertEquals([], $config->toArray());
    }

    public function testFields()
    {
        $config = new EntityDefinitionConfig();
        $this->assertFalse($config->hasFields());
        $this->assertEquals([], $config->getFields());
        $this->assertTrue($config->isEmpty());
        $this->assertEquals([], $config->toArray());

        $field = $config->addField('field');
        $this->assertTrue($config->hasFields());
        $this->assertEquals(['field' => $field], $config->getFields());
        $this->assertSame($field, $config->getField('field'));
        $this->assertFalse($config->isEmpty());
        $this->assertEquals(['fields' => ['field' => null]], $config->toArray());

        $config->removeField('field');
        $this->assertFalse($config->hasFields());
        $this->assertEquals([], $config->getFields());
        $this->assertTrue($config->isEmpty());
        $this->assertEquals([], $config->toArray());
    }

    public function testFindField()
    {
        $config = new EntityDefinitionConfig();

        $field1 = $config->addField('field1');
        $field2 = $config->addField('field2');
        $field2->setPropertyPath('realField2');
        $field3 = $config->addField('field3');
        $field3->setPropertyPath('field3');
        $swapField = $config->addField('swapField');
        $swapField->setPropertyPath('realSwapField');
        $realSwapField = $config->addField('realSwapField');
        $realSwapField->setPropertyPath('swapField');
        $ignoredField = $config->addField('ignoredField');
        $ignoredField->setPropertyPath(ConfigUtil::IGNORE_PROPERTY_PATH);

        $this->assertNull($config->findField('unknown'));
        $this->assertNull($config->findField('unknown', true));
        $this->assertNull($config->findFieldNameByPropertyPath('unknown'));
        $this->assertNull($config->findFieldByPath('unknown'));
        $this->assertNull($config->findFieldByPath('unknown', true));

        $this->assertSame($field1, $config->findField('field1'));
        $this->assertSame($field1, $config->findField('field1', true));
        $this->assertSame('field1', $config->findFieldNameByPropertyPath('field1'));
        $this->assertSame($field1, $config->findFieldByPath('field1'));
        $this->assertSame($field1, $config->findFieldByPath('field1', true));

        $this->assertSame($field2, $config->findField('field2'));
        $this->assertNull($config->findField('field2', true));
        $this->assertNull($config->findFieldNameByPropertyPath('field2'));
        $this->assertSame($field2, $config->findFieldByPath('field2'));
        $this->assertNull($config->findFieldByPath('field2', true));
        $this->assertNull($config->findField('realField2'));
        $this->assertSame($field2, $config->findField('realField2', true));
        $this->assertSame('field2', $config->findFieldNameByPropertyPath('realField2'));
        $this->assertNull($config->findFieldByPath('realField2'));
        $this->assertSame($field2, $config->findFieldByPath('realField2', true));

        $this->assertSame($field3, $config->findField('field3'));
        $this->assertSame($field3, $config->findField('field3', true));
        $this->assertSame('field3', $config->findFieldNameByPropertyPath('field3'));
        $this->assertSame($field3, $config->findFieldByPath('field3'));
        $this->assertSame($field3, $config->findFieldByPath('field3', true));

        $this->assertSame($swapField, $config->findField('swapField'));
        $this->assertSame($realSwapField, $config->findField('swapField', true));
        $this->assertSame('realSwapField', $config->findFieldNameByPropertyPath('swapField'));
        $this->assertSame($swapField, $config->findFieldByPath('swapField'));
        $this->assertSame($realSwapField, $config->findFieldByPath('swapField', true));
        $this->assertSame($realSwapField, $config->findField('realSwapField'));
        $this->assertSame($swapField, $config->findField('realSwapField', true));
        $this->assertSame('swapField', $config->findFieldNameByPropertyPath('realSwapField'));
        $this->assertSame($realSwapField, $config->findFieldByPath('realSwapField'));
        $this->assertSame($swapField, $config->findFieldByPath('realSwapField', true));

        $this->assertSame($ignoredField, $config->findField('ignoredField'));
        $this->assertNull($config->findField('ignoredField', true));
        $this->assertNull($config->findField(ConfigUtil::IGNORE_PROPERTY_PATH));
        $this->assertNull($config->findField(ConfigUtil::IGNORE_PROPERTY_PATH, true));
        $this->assertSame('ignoredField', $config->findFieldNameByPropertyPath('ignoredField'));
        $this->assertNull($config->findFieldNameByPropertyPath(ConfigUtil::IGNORE_PROPERTY_PATH));
        $this->assertSame($ignoredField, $config->findFieldByPath('ignoredField'));
        $this->assertNull($config->findFieldByPath('ignoredField', true));
        $this->assertNull($config->findFieldByPath(ConfigUtil::IGNORE_PROPERTY_PATH));
        $this->assertNull($config->findFieldByPath(ConfigUtil::IGNORE_PROPERTY_PATH, true));
    }

    public function testFindFieldByPathForChildFields()
    {
        $config = new EntityDefinitionConfig();

        $field1 = $config->addField('field1');
        $field11 = $field1->createAndSetTargetEntity()->addField('field11');
        $field11->setPropertyPath('realField11');
        $field111 = $field11->createAndSetTargetEntity()->addField('field111');

        $this->assertSame($field111, $config->findFieldByPath('field1.field11.field111'));
        $this->assertNull($config->findFieldByPath('field1.field11.field111', true));
        $this->assertSame($field111, $config->findFieldByPath('field1.realField11.field111', true));

        $this->assertSame($field111, $config->findFieldByPath(['field1', 'field11', 'field111']));
        $this->assertNull($config->findFieldByPath(['field1', 'field11', 'field111'], true));
        $this->assertSame($field111, $config->findFieldByPath(['field1', 'realField11', 'field111'], true));
    }

    public function testGetOrAddField()
    {
        $config = new EntityDefinitionConfig();

        $field = $config->getOrAddField('field');
        $this->assertSame($field, $config->getField('field'));

        $field1 = $config->getOrAddField('field');
        $this->assertSame($field, $field1);
    }

    public function testAddField()
    {
        $config = new EntityDefinitionConfig();

        $field = $config->addField('field');
        $this->assertSame($field, $config->getField('field'));

        $field1 = new EntityDefinitionFieldConfig();
        $field1 = $config->addField('field', $field1);
        $this->assertSame($field1, $config->getField('field'));
        $this->assertNotSame($field, $field1);
    }

    public function testExclusionPolicy()
    {
        $config = new EntityDefinitionConfig();
        $this->assertFalse($config->hasExclusionPolicy());
        $this->assertEquals('none', $config->getExclusionPolicy());
        $this->assertFalse($config->isExcludeAll());

        $config->setExclusionPolicy('all');
        $this->assertTrue($config->hasExclusionPolicy());
        $this->assertEquals('all', $config->getExclusionPolicy());
        $this->assertTrue($config->isExcludeAll());
        $this->assertEquals(['exclusion_policy' => 'all'], $config->toArray());

        $config->setExclusionPolicy('none');
        $this->assertTrue($config->hasExclusionPolicy());
        $this->assertEquals('none', $config->getExclusionPolicy());
        $this->assertFalse($config->isExcludeAll());
        $this->assertEquals([], $config->toArray());

        $config->setExcludeAll();
        $this->assertTrue($config->hasExclusionPolicy());
        $this->assertEquals('all', $config->getExclusionPolicy());
        $this->assertTrue($config->isExcludeAll());
        $this->assertEquals(['exclusion_policy' => 'all'], $config->toArray());

        $config->setExcludeNone();
        $this->assertTrue($config->hasExclusionPolicy());
        $this->assertEquals('none', $config->getExclusionPolicy());
        $this->assertFalse($config->isExcludeAll());
        $this->assertEquals([], $config->toArray());
    }

    public function testCollapsed()
    {
        $config = new EntityDefinitionConfig();
        $this->assertFalse($config->isCollapsed());

        $config->setCollapsed();
        $this->assertTrue($config->isCollapsed());
        $this->assertEquals(['collapse' => true], $config->toArray());

        $config->setCollapsed(false);
        $this->assertFalse($config->isCollapsed());
        $this->assertEquals([], $config->toArray());
    }

    public function testPageSize()
    {
        $config = new EntityDefinitionConfig();
        $this->assertFalse($config->hasPageSize());
        $this->assertNull($config->getPageSize());

        $config->setPageSize(50);
        $this->assertTrue($config->hasPageSize());
        $this->assertEquals(50, $config->getPageSize());
        $this->assertEquals(['page_size' => 50], $config->toArray());

        $config->setPageSize('100');
        $this->assertTrue($config->hasPageSize());
        $this->assertSame(100, $config->getPageSize());
        $this->assertSame(['page_size' => 100], $config->toArray());

        $config->setPageSize(-1);
        $this->assertTrue($config->hasPageSize());
        $this->assertEquals(-1, $config->getPageSize());
        $this->assertEquals(['page_size' => -1], $config->toArray());

        $config->setPageSize(null);
        $this->assertFalse($config->hasPageSize());
        $this->assertNull($config->getPageSize());
        $this->assertEquals([], $config->toArray());
    }

    public function testSortingFlag()
    {
        $config = new EntityDefinitionConfig();
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
        $config = new EntityDefinitionConfig();
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
        $config = new EntityDefinitionConfig();
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
        $config = new EntityDefinitionConfig();
        $this->assertTrue($config->isMetaPropertiesEnabled());

        $config->disableMetaProperties();
        $this->assertFalse($config->isMetaPropertiesEnabled());
        $this->assertEquals(['disable_meta_properties' => true], $config->toArray());

        $config->enableMetaProperties();
        $this->assertTrue($config->isMetaPropertiesEnabled());
        $this->assertEquals([], $config->toArray());
    }

    public function testIdentifierFieldNames()
    {
        $config = new EntityDefinitionConfig();
        $this->assertEquals([], $config->getIdentifierFieldNames());

        $config->setIdentifierFieldNames(['id']);
        $this->assertEquals(['id'], $config->getIdentifierFieldNames());
        $this->assertEquals(['identifier_field_names' => ['id']], $config->toArray());

        $config->setIdentifierFieldNames([]);
        $this->assertEquals([], $config->getIdentifierFieldNames());
        $this->assertEquals([], $config->toArray());
    }

    public function testMaxResults()
    {
        $config = new EntityDefinitionConfig();
        $this->assertFalse($config->hasMaxResults());
        $this->assertNull($config->getMaxResults());

        $config->setMaxResults(50);
        $this->assertTrue($config->hasMaxResults());
        $this->assertEquals(50, $config->getMaxResults());
        $this->assertEquals(['max_results' => 50], $config->toArray());

        $config->setMaxResults('100');
        $this->assertTrue($config->hasMaxResults());
        $this->assertSame(100, $config->getMaxResults());
        $this->assertSame(['max_results' => 100], $config->toArray());

        $config->setMaxResults(-1);
        $this->assertTrue($config->hasMaxResults());
        $this->assertEquals(-1, $config->getMaxResults());
        $this->assertEquals(['max_results' => -1], $config->toArray());

        $config->setMaxResults(null);
        $this->assertFalse($config->hasMaxResults());
        $this->assertNull($config->getMaxResults());
        $this->assertEquals([], $config->toArray());
    }

    public function testFormType()
    {
        $config = new EntityDefinitionConfig();
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
        $config = new EntityDefinitionConfig();
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
        $config = new EntityDefinitionConfig();

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
        $config = new EntityDefinitionConfig();

        $config->addFormConstraint(new NotNull());
        $this->assertEquals(['constraints' => [new NotNull()]], $config->getFormOptions());

        $config->addFormConstraint(new NotBlank());
        $this->assertEquals(['constraints' => [new NotNull(), new NotBlank()]], $config->getFormOptions());
    }

    public function testFormEventSubscribers()
    {
        $config = new EntityDefinitionConfig();
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
        $config = new EntityDefinitionConfig();
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
        $config = new EntityDefinitionConfig();
        $config->setFormEventSubscribers('subscriber1');
    }

    public function testHints()
    {
        $config = new EntityDefinitionConfig();
        $this->assertEquals([], $config->getHints());

        $config->setHints(['hint1']);
        $this->assertEquals(['hint1'], $config->getHints());
        $this->assertEquals(['hints' => ['hint1']], $config->toArray());

        $config->setHints();
        $this->assertEquals([], $config->getHints());
        $this->assertEquals([], $config->toArray());

        $config->setHints(['hint1']);
        $config->setHints([]);
        $this->assertEquals([], $config->getHints());
        $this->assertEquals([], $config->toArray());
    }
}
