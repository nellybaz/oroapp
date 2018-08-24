<?php

namespace Oro\Bundle\EntityBundle\Tests\Unit\ORM;

use Doctrine\ORM\ORMException;

use Oro\Bundle\EntityBundle\ORM\EntityClassResolver;

class EntityClassResolverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var EntityClassResolver
     */
    private $resolver;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $doctrine;

    protected function setUp()
    {
        $this->doctrine = $this->getMockBuilder('Doctrine\Common\Persistence\ManagerRegistry')
            ->disableOriginalConstructor()
            ->getMock();
        $this->resolver = new EntityClassResolver($this->doctrine);
    }

    public function testGetEntityClassWithFullClassName()
    {
        $testClass = 'Acme\Bundle\SomeBundle\SomeClass';
        $this->assertEquals($testClass, $this->resolver->getEntityClass($testClass));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testGetEntityClassWithInvalidEntityName()
    {
        $this->resolver->getEntityClass('AcmeSomeBundle:Entity:SomeClass');
    }

    /**
     * @expectedException \Doctrine\ORM\ORMException
     */
    public function testGetEntityClassWithUnknownEntityName()
    {
        $this->doctrine->expects($this->once())
            ->method('getAliasNamespace')
            ->with($this->equalTo('AcmeSomeBundle'))
            ->will($this->throwException(new ORMException()));
        $this->resolver->getEntityClass('AcmeSomeBundle:SomeClass');
    }

    public function testGetEntityClass()
    {
        $this->doctrine->expects($this->once())
            ->method('getAliasNamespace')
            ->with($this->equalTo('AcmeSomeBundle'))
            ->will($this->returnValue('Acme\Bundle\SomeBundle'));
        $this->assertEquals(
            'Acme\Bundle\SomeBundle\SomeClass',
            $this->resolver->getEntityClass('AcmeSomeBundle:SomeClass')
        );
    }

    public function testIsKnownEntityClassNamespace()
    {
        $config = $this->getMockBuilder('\Doctrine\ORM\Configuration')
            ->disableOriginalConstructor()
            ->getMock();
        $config->expects($this->exactly(2))
            ->method('getEntityNamespaces')
            ->will(
                $this->returnValue(
                    array(
                        'AcmeSomeBundle' => 'Acme\Bundle\SomeBundle\Entity'
                    )
                )
            );

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->setMethods(array('getConfiguration'))
            ->getMockForAbstractClass();
        $em->expects($this->exactly(2))
            ->method('getConfiguration')
            ->will($this->returnValue($config));

        $this->doctrine->expects($this->exactly(2))
            ->method('getManagerNames')
            ->will($this->returnValue(['default' => 'service.default']));
        $this->doctrine->expects($this->exactly(2))
            ->method('getManager')
            ->with('default')
            ->will($this->returnValue($em));

        $this->assertTrue($this->resolver->isKnownEntityClassNamespace('Acme\Bundle\SomeBundle\Entity'));
        $this->assertFalse($this->resolver->isKnownEntityClassNamespace('Acme\Bundle\AnotherBundle\Entity'));
    }

    public function testIsEntity()
    {
        $className = 'Test\Entity';

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();
        $this->doctrine->expects($this->once())
            ->method('getManagerForClass')
            ->with($className)
            ->will($this->returnValue($em));

        $this->assertTrue(
            $this->resolver->isEntity($className)
        );
    }

    public function testIsEntityForNotManageableEntity()
    {
        $className = 'Test\Entity';

        $this->doctrine->expects($this->once())
            ->method('getManagerForClass')
            ->with($className)
            ->will($this->returnValue(null));

        $this->assertFalse(
            $this->resolver->isEntity($className)
        );
    }
}
