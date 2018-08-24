<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Model;

use Doctrine\ORM\EntityNotFoundException;

use Oro\Bundle\ActionBundle\Model\Attribute;
use Oro\Bundle\WorkflowBundle\Model\WorkflowData;

use Symfony\Component\PropertyAccess\PropertyPath;

class WorkflowDataTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var WorkflowData
     */
    protected $data;

    protected function setUp()
    {
        $this->data = new WorkflowData();
    }

    public function testIsModified()
    {
        $this->assertFalse($this->data->isModified());
        $this->data->set('foo', 'bar');
        $this->assertTrue($this->data->isModified());

        $this->data = new WorkflowData(array('foo' => 'bar'));
        $this->assertFalse($this->data->isModified());
        $this->data->set('foo', 'bar');
        $this->assertFalse($this->data->isModified());
        $this->data->set('foo', 'baz');
        $this->assertTrue($this->data->isModified());

        $this->data->setModified(false);
        $this->assertFalse($this->data->isModified());

        $this->data->set('nullable', null);
        $this->assertTrue($this->data->isModified());
    }

    public function testHasGetSetRemove()
    {
        $this->assertFalse($this->data->has('foo'));
        $this->assertNull($this->data->get('foo'));

        $this->data->set('foo', 'bar');
        $this->assertTrue($this->data->has('foo'));
        $this->assertEquals('bar', $this->data->get('foo'));

        $this->data->remove('foo');
        $this->assertFalse($this->data->has('foo'));
        $this->assertNull($this->data->get('foo'));
    }

    protected function createAttribute($name)
    {
        $attribute = new Attribute();
        $attribute->setName($name);
        return $attribute;
    }

    public function testIssetGetSetUnset()
    {
        $this->assertFalse(isset($this->data->foo));
        $this->assertNull($this->data->foo);

        $this->data->foo = 'bar';
        $this->assertTrue(isset($this->data->foo));
        $this->assertEquals('bar', $this->data->foo);

        unset($this->data->foo);
        $this->assertFalse(isset($this->data->foo));
        $this->assertNull($this->data->foo);
    }

    public function testArrayAccess()
    {
        $this->assertInstanceOf('ArrayAccess', $this->data);

        $this->assertFalse(isset($this->data['foo']));
        $this->assertNull($this->data['foo']);

        $this->data['foo'] = 'bar';
        $this->assertTrue(isset($this->data['foo']));
        $this->assertEquals('bar', $this->data['foo']);

        unset($this->data['foo']);
        $this->assertFalse(isset($this->data['foo']));
        $this->assertNull($this->data['foo']);
    }

    public function testCount()
    {
        $this->assertEquals(0, count($this->data));

        $this->data->set('foo', 'bar');
        $this->assertEquals(1, count($this->data));

        $this->data->set('baz', 'qux');
        $this->assertEquals(2, count($this->data));

        $this->data->remove('foo');
        $this->assertEquals(1, count($this->data));

        $this->data->remove('baz');
        $this->assertEquals(0, count($this->data));
    }

    public function testIsEmpty()
    {
        $this->assertTrue($this->data->isEmpty());

        $this->data->set('foo', 'bar');
        $this->assertFalse($this->data->isEmpty());
    }

    public function testIterable()
    {
        $this->data->set('foo', 'bar');
        $this->data->set('baz', 'qux');

        $data = array();
        foreach ($this->data as $key => $value) {
            $data[$key] = $value;
        }

        $this->assertEquals(array('foo' => 'bar', 'baz' => 'qux'), $data);
    }

    public function testGetValuesAll()
    {
        $this->data->set('foo', 'foo_value');
        $this->data->set('bar', 'bar_value');
        $this->data->set('baz', null);
        $this->data->set('quux', 'quux_value');

        $this->assertEquals(
            array(
                'foo' => 'foo_value',
                'bar' => 'bar_value',
                'baz' => null,
                'quux' => 'quux_value',
            ),
            $this->data->getValues()
        );
    }

    public function testGetValuesWithNames()
    {
        $this->data->set('foo', 'foo_value');
        $this->data->set('bar', 'bar_value');
        $this->data->set('baz', null);
        $this->data->set('quux', 'quux_value');

        $this->assertEquals(
            array(
                'foo' => 'foo_value',
                'baz' => null,
                'qux' => null,
                'quux' => 'quux_value',
            ),
            $this->data->getValues(array('foo', 'baz', 'qux', 'quux'))
        );
    }

    public function testAdd()
    {
        $this->data->set('foo', 'foo_value');
        $this->data->set('bar', 'bar_value');
        $this->data->set('val', 0);
        $this->assertSame(
            array(
                'foo' => 'foo_value',
                'bar' => 'bar_value',
                'val' => 0,
            ),
            $this->data->getValues()
        );

        $this->data->add(
            array(
                'bar' => 'new_bar_value',
                'baz' => 'baz_value',
                'val' => null,
            )
        );
        $this->assertSame(
            array(
                'foo' => 'foo_value',
                'bar' => 'new_bar_value',
                'val' => null,
                'baz' => 'baz_value',
            ),
            $this->data->getValues()
        );
    }

    public function testGetProxyValue()
    {
        $name = 'entity';

        $existingEntity = $this->createMock('Doctrine\Common\Persistence\Proxy');
        $existingEntity->expects($this->once())
            ->method('__isInitialized')
            ->will($this->returnValue(false));
        $existingEntity->expects($this->once())
            ->method('__load');

        $this->data->set($name, $existingEntity);
        $this->assertEquals($existingEntity, $this->data->get($name));

        $removedEntity = $this->createMock('Doctrine\Common\Persistence\Proxy');
        $removedEntity->expects($this->once())
            ->method('__isInitialized')
            ->will($this->returnValue(false));
        $removedEntity->expects($this->once())
            ->method('__load')
            ->will($this->throwException(new EntityNotFoundException()));

        $this->data->set($name, $removedEntity);
        $this->assertNull($this->data->get($name));
    }

    public function testUnknownPathGet()
    {
        $path = 'unknown_ppp.another';
        $this->assertNull($this->data->get($path));
    }

    public function testUnknownPathSet()
    {
        $path = 'unknown_ppp.another';
        $this->assertSame($this->data, $this->data->set($path, 'test'));
    }

    public function testMappedField()
    {
        $data = new \stdClass();
        $data->value = 'one';
        $data->nullable = null;
        $this->data->setFieldsMapping([
            'test2' => 'test.value',
            'nullable' => 'test.nullable'
        ]);

        $this->assertFalse($this->data->has('test'), 'no test');
        $this->assertFalse($this->data->has('test2'), 'no test2');
        $this->data->set('test', $data);
        $this->assertSame($data, $this->data->get('test'));
        $this->assertEquals('one', $this->data->get('test2'));

        $this->assertTrue($this->data->has('test'), 'has test');
        $this->assertTrue($this->data->has('test2'), 'has test2');

        $this->assertTrue($this->data->has('nullable'), 'has nullable');
        $this->assertNull($this->data->get('nullable'));

        $this->data->set('test2', 'two');
        $this->assertEquals('two', $this->data->get('test2'));
        $actualTest = $this->data->get('test');
        $this->assertEquals('two', $actualTest->value);

        $propertyPath = new PropertyPath('[test].value');
        $this->assertEquals('two', $this->data->get($propertyPath));
    }
}
