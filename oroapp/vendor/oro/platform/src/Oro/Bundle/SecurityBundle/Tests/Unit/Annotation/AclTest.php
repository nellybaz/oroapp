<?php

namespace Oro\Bundle\SecurityBundle\Tests\Unit\Annotation;

use Oro\Bundle\SecurityBundle\Annotation\Acl;

class AclTest extends \PHPUnit_Framework_TestCase
{
    public function testAnnotation()
    {
        $annotation = new Acl(
            array(
                'id' => 'test_acl',
                'type' => 'SomeType',
                'class' => \stdClass::class,
                'permission' => 'SomePermission',
                'group_name' => 'SomeGroup',
                'label' => 'SomeLabel',
                'description' => 'SomeDescription',
                'category' => 'SomeCategory',
                'ignore_class_acl' => true
            )
        );
        $this->assertEquals('test_acl', $annotation->getId());
        $this->assertEquals('SomeType', $annotation->getType());
        $this->assertEquals(\stdClass::class, $annotation->getClass());
        $this->assertEquals('SomePermission', $annotation->getPermission());
        $this->assertEquals('SomeGroup', $annotation->getGroup());
        $this->assertEquals('SomeLabel', $annotation->getLabel());
        $this->assertEquals('SomeDescription', $annotation->getDescription());
        $this->assertEquals('SomeCategory', $annotation->getCategory());
        $this->assertTrue($annotation->getIgnoreClassAcl());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAnnotationWithEmptyId()
    {
        $annotation = new Acl(array('id' => ''));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAnnotationWithInvalidId()
    {
        $annotation = new Acl(array('id' => 'test acl'));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAnnotationWithMissingId()
    {
        $annotation = new Acl(array());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAnnotationWithEmptyType()
    {
        $annotation = new Acl(array('id' => 'test', 'type' => ''));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAnnotationWithMissingType()
    {
        $annotation = new Acl(array('id' => 'test'));
    }
}
