<?php

namespace Oro\Bundle\TagBundle\Tests\Unit\Form\Type;

use Oro\Bundle\TagBundle\Form\Type\TagApiType;

class TagApiTypeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var TagApiType
     */
    protected $type;

    protected function setUp()
    {
        $this->type = new TagApiType();
    }

    protected function tearDown()
    {
        unset($this->type);
    }

    public function testSetDefaultOptions()
    {
        $resolver = $this->createMock('Symfony\Component\OptionsResolver\OptionsResolverInterface');
        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with($this->isType('array'));

        $this->type->setDefaultOptions($resolver);
    }

    public function testBuildForm()
    {
        $builder = $this->getMockBuilder('Symfony\Component\Form\FormBuilder')
            ->disableOriginalConstructor()
            ->getMock();
        $builder->expects($this->exactly(2))
            ->method('add')
            ->will($this->returnSelf());

        $builder->expects($this->once())
            ->method('addEventSubscriber')
            ->with($this->isInstanceOf('Oro\Bundle\SoapBundle\Form\EventListener\PatchSubscriber'));

        $this->type->buildForm($builder, array());
    }
}
