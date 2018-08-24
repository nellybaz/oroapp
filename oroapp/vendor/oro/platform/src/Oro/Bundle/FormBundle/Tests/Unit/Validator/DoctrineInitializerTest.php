<?php

namespace Oro\Bundle\FormBundle\Tests\Unit\Validator;

use Symfony\Component\Form\Test\FormInterface;
use Symfony\Component\Form\Util\OrderedHashMap;
use Symfony\Component\Validator\ObjectInitializerInterface;

use Oro\Bundle\FormBundle\Validator\DoctrineInitializer;

class DoctrineInitializerTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $innerInitializer;

    /** @var DoctrineInitializer */
    protected $doctrineInitializer;

    protected function setUp()
    {
        $this->innerInitializer = $this->createMock(ObjectInitializerInterface::class);

        $this->doctrineInitializer = new DoctrineInitializer($this->innerInitializer);
    }

    /**
     * @dataProvider predefinedNotManageableObjectsProvider
     */
    public function testInitializeForPredefinedNotManageableObjects($object)
    {
        $this->innerInitializer->expects(self::never())
            ->method('initialize');

        $this->doctrineInitializer->initialize($object);
    }

    public function predefinedNotManageableObjectsProvider()
    {
        return [
            [$this->getMockBuilder(FormInterface::class)->disableOriginalConstructor()->getMock()],
            [$this->getMockBuilder(OrderedHashMap::class)->disableOriginalConstructor()->getMock()],
        ];
    }

    public function testInitializeForNotPredefinedObject()
    {
        $object = new \stdClass();

        $this->innerInitializer->expects(self::once())
            ->method('initialize')
            ->with(self::identicalTo($object));

        $this->doctrineInitializer->initialize($object);
    }
}
