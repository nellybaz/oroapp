<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Config;

use Oro\Bundle\ApiBundle\Config\FilterFieldConfig;

class FilterFieldConfigTest extends \PHPUnit_Framework_TestCase
{
    public function testCustomAttribute()
    {
        $attrName = 'test';

        $config = new FilterFieldConfig();
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

    public function testClone()
    {
        $config = new FilterFieldConfig();
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
        $config = new FilterFieldConfig();
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
        $config = new FilterFieldConfig();
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
        $config = new FilterFieldConfig();
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

    public function testDataType()
    {
        $config = new FilterFieldConfig();
        $this->assertFalse($config->hasDataType());
        $this->assertNull($config->getDataType());

        $config->setDataType('string');
        $this->assertTrue($config->hasDataType());
        $this->assertEquals('string', $config->getDataType());
        $this->assertEquals(['data_type' => 'string'], $config->toArray());

        $config->setDataType(null);
        $this->assertFalse($config->hasDataType());
        $this->assertNull($config->getDataType());
        $this->assertEquals([], $config->toArray());

        $config->setDataType('string');
        $config->setDataType('');
        $this->assertFalse($config->hasDataType());
        $this->assertNull($config->getDataType());
        $this->assertEquals([], $config->toArray());
    }

    public function testArrayAllowed()
    {
        $config = new FilterFieldConfig();
        $this->assertFalse($config->hasArrayAllowed());
        $this->assertFalse($config->isArrayAllowed());

        $config->setArrayAllowed();
        $this->assertTrue($config->hasArrayAllowed());
        $this->assertTrue($config->isArrayAllowed());
        $this->assertEquals(['allow_array' => true], $config->toArray());

        $config->setArrayAllowed(false);
        $this->assertTrue($config->hasArrayAllowed());
        $this->assertFalse($config->isArrayAllowed());
        $this->assertEquals([], $config->toArray());
    }

    public function testRangeAllowed()
    {
        $config = new FilterFieldConfig();
        $this->assertFalse($config->hasRangeAllowed());
        $this->assertFalse($config->isRangeAllowed());

        $config->setRangeAllowed();
        $this->assertTrue($config->hasRangeAllowed());
        $this->assertTrue($config->isRangeAllowed());
        $this->assertEquals(['allow_range' => true], $config->toArray());

        $config->setRangeAllowed(false);
        $this->assertTrue($config->hasRangeAllowed());
        $this->assertFalse($config->isRangeAllowed());
        $this->assertEquals([], $config->toArray());
    }

    public function testType()
    {
        $config = new FilterFieldConfig();
        $this->assertFalse($config->hasType());
        $this->assertNull($config->getType());

        $config->setType('test');
        $this->assertTrue($config->hasType());
        $this->assertEquals('test', $config->getType());
        $this->assertEquals(['type' => 'test'], $config->toArray());

        $config->setType(null);
        $this->assertFalse($config->hasType());
        $this->assertNull($config->getType());
        $this->assertEquals([], $config->toArray());
    }

    public function testOptions()
    {
        $config = new FilterFieldConfig();
        $this->assertNull($config->getOptions());

        $config->setOptions(['key' => 'val']);
        $this->assertEquals(['key' => 'val'], $config->getOptions());
        $this->assertEquals(['options' => ['key' => 'val']], $config->toArray());

        $config->setOptions(null);
        $this->assertNull($config->getOptions());
        $this->assertEquals([], $config->toArray());
    }

    public function testOperators()
    {
        $config = new FilterFieldConfig();
        $this->assertNull($config->getOperators());

        $config->setOperators(['=', '!=']);
        $this->assertEquals(['=', '!='], $config->getOperators());
        $this->assertEquals(['operators' => ['=', '!=']], $config->toArray());

        $config->setOperators(null);
        $this->assertNull($config->getOperators());
        $this->assertEquals([], $config->toArray());
    }
}
