<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Config;

use Oro\Bundle\ApiBundle\Config\StatusCodeConfig;

class StatusCodeConfigTest extends \PHPUnit_Framework_TestCase
{
    public function testCustomAttribute()
    {
        $attrName = 'test';

        $config = new StatusCodeConfig();
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
        $config = new StatusCodeConfig();
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
        $config = new StatusCodeConfig();
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

    public function testDescription()
    {
        $config = new StatusCodeConfig();
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
}
