<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Config;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

use Oro\Bundle\ApiBundle\Config\EntityDefinitionFieldConfig;

class EntityDefinitionFieldConfigTest extends \PHPUnit_Framework_TestCase
{
    public function testCustomAttribute()
    {
        $attrName = 'test';

        $config = new EntityDefinitionFieldConfig();
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

    public function testExcluded()
    {
        $config = new EntityDefinitionFieldConfig();
        $this->assertFalse($config->hasExcluded());
        $this->assertFalse($config->isExcluded());

        $config->setExcluded();
        $this->assertTrue($config->hasExcluded());
        $this->assertTrue($config->isExcluded());
        $this->assertEquals(['exclude' => true], $config->toArray());

        $config->setExcluded(false);
        $this->assertTrue($config->hasExcluded());
        $this->assertFalse($config->isExcluded());
        $this->assertEquals([], $config->toArray());
    }

    public function testPropertyPath()
    {
        $config = new EntityDefinitionFieldConfig();
        $this->assertFalse($config->hasPropertyPath());
        $this->assertNull($config->getPropertyPath());
        $this->assertEquals('default', $config->getPropertyPath('default'));

        $config->setPropertyPath('path');
        $this->assertTrue($config->hasPropertyPath());
        $this->assertEquals('path', $config->getPropertyPath());
        $this->assertEquals('path', $config->getPropertyPath('default'));
        $this->assertEquals(['property_path' => 'path'], $config->toArray());

        $config->setPropertyPath(null);
        $this->assertFalse($config->hasPropertyPath());
        $this->assertNull($config->getPropertyPath());
        $this->assertEquals([], $config->toArray());

        $config->setPropertyPath('path');
        $config->setPropertyPath('');
        $this->assertFalse($config->hasPropertyPath());
        $this->assertNull($config->getPropertyPath());
        $this->assertEquals('default', $config->getPropertyPath('default'));
        $this->assertEquals([], $config->toArray());
    }

    public function testDescription()
    {
        $config = new EntityDefinitionFieldConfig();
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

    public function testMetaProperty()
    {
        $config = new EntityDefinitionFieldConfig();
        $this->assertFalse($config->isMetaProperty());

        $config->setMetaProperty(true);
        $this->assertTrue($config->isMetaProperty());
        $this->assertEquals(['meta_property' => true], $config->toArray());

        $config->setMetaProperty(false);
        $this->assertFalse($config->isMetaProperty());
        $this->assertEquals([], $config->toArray());
    }

    public function testGetOrCreateTargetEntity()
    {
        $config = new EntityDefinitionFieldConfig();
        $this->assertFalse($config->hasTargetEntity());
        $this->assertNull($config->getTargetEntity());

        $targetEntity = $config->getOrCreateTargetEntity();
        $this->assertTrue($config->hasTargetEntity());
        $this->assertSame($targetEntity, $config->getTargetEntity());

        $targetEntity1 = $config->getOrCreateTargetEntity();
        $this->assertSame($targetEntity, $targetEntity1);
        $this->assertSame($targetEntity1, $config->getTargetEntity());
    }

    public function testCreateAndSetTargetEntity()
    {
        $config = new EntityDefinitionFieldConfig();
        $this->assertFalse($config->hasTargetEntity());
        $this->assertNull($config->getTargetEntity());

        $targetEntity = $config->createAndSetTargetEntity();
        $this->assertTrue($config->hasTargetEntity());
        $this->assertSame($targetEntity, $config->getTargetEntity());

        $targetEntity1 = $config->createAndSetTargetEntity();
        $this->assertNotSame($targetEntity, $targetEntity1);
        $this->assertSame($targetEntity1, $config->getTargetEntity());
    }

    public function testTargetClass()
    {
        $config = new EntityDefinitionFieldConfig();
        $this->assertNull($config->getTargetClass());

        $config->setTargetClass('Test\Class');
        $this->assertEquals('Test\Class', $config->getTargetClass());
        $this->assertEquals(['target_class' => 'Test\Class'], $config->toArray());

        $config->setTargetClass(null);
        $this->assertNull($config->getTargetClass());
        $this->assertEquals([], $config->toArray());
    }

    public function testTargetType()
    {
        $config = new EntityDefinitionFieldConfig();
        $this->assertFalse($config->hasTargetType());
        $this->assertNull($config->getTargetType());
        $this->assertNull($config->isCollectionValuedAssociation());

        $config->setTargetType('to-one');
        $this->assertTrue($config->hasTargetType());
        $this->assertEquals('to-one', $config->getTargetType());
        $this->assertFalse($config->isCollectionValuedAssociation());
        $this->assertEquals(['target_type' => 'to-one'], $config->toArray());

        $config->setTargetType('to-many');
        $this->assertTrue($config->hasTargetType());
        $this->assertEquals('to-many', $config->getTargetType());
        $this->assertTrue($config->isCollectionValuedAssociation());
        $this->assertEquals(['target_type' => 'to-many'], $config->toArray());

        $config->setTargetType(null);
        $this->assertFalse($config->hasTargetType());
        $this->assertNull($config->getTargetType());
        $this->assertNull($config->isCollectionValuedAssociation());
        $this->assertEquals([], $config->toArray());
    }

    public function testCollapsed()
    {
        $config = new EntityDefinitionFieldConfig();
        $this->assertFalse($config->hasCollapsed());
        $this->assertFalse($config->isCollapsed());

        $config->setCollapsed();
        $this->assertTrue($config->hasCollapsed());
        $this->assertTrue($config->isCollapsed());
        $this->assertEquals(['collapse' => true], $config->toArray());

        $config->setCollapsed(false);
        $this->assertTrue($config->hasCollapsed());
        $this->assertFalse($config->isCollapsed());
        $this->assertEquals([], $config->toArray());
    }

    public function testFormType()
    {
        $config = new EntityDefinitionFieldConfig();
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
        $config = new EntityDefinitionFieldConfig();
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
        $config = new EntityDefinitionFieldConfig();

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
        $config = new EntityDefinitionFieldConfig();

        $config->addFormConstraint(new NotNull());
        $this->assertEquals(['constraints' => [new NotNull()]], $config->getFormOptions());

        $config->addFormConstraint(new NotBlank());
        $this->assertEquals(['constraints' => [new NotNull(), new NotBlank()]], $config->getFormOptions());
    }

    public function testSetDataTransformers()
    {
        $config = new EntityDefinitionFieldConfig();
        $this->assertFalse($config->hasDataTransformers());
        $this->assertEquals([], $config->getDataTransformers());

        $config->setDataTransformers('service_id');
        $this->assertTrue($config->hasDataTransformers());
        $this->assertEquals(['service_id'], $config->getDataTransformers());
        $this->assertEquals(['data_transformer' => ['service_id']], $config->toArray());

        $config->setDataTransformers(['service_id', ['class', 'method']]);
        $this->assertTrue($config->hasDataTransformers());
        $this->assertEquals(['service_id', ['class', 'method']], $config->getDataTransformers());
        $this->assertEquals(['data_transformer' => ['service_id', ['class', 'method']]], $config->toArray());

        $config->setDataTransformers([]);
        $this->assertFalse($config->hasDataTransformers());
        $this->assertEquals([], $config->getDataTransformers());
        $this->assertEquals([], $config->toArray());
    }

    public function testDependsOn()
    {
        $config = new EntityDefinitionFieldConfig();
        $this->assertNull($config->getDependsOn());

        $config->setDependsOn(['field1']);
        $this->assertEquals(['field1'], $config->getDependsOn());
        $this->assertEquals(['depends_on' => ['field1']], $config->toArray());

        $config->setDependsOn([]);
        $this->assertNull($config->getDependsOn());
        $this->assertEquals([], $config->toArray());
    }
}
