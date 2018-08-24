<?php

namespace Oro\Bundle\AccountBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Oro\Bundle\AccountBundle\Form\Type\AccountApiType;

class AccountApiTypeTest extends \PHPUnit_Framework_TestCase
{
    /** @var AccountApiType */
    private $type;

    /**
     * init environment
     */
    public function init($havePrivilege = true)
    {
        $entityNameResolver = $this->getMockBuilder('Oro\Bundle\EntityBundle\Provider\EntityNameResolver')
            ->disableOriginalConstructor()
            ->getMock();

        $router = $this->getMockBuilder('Symfony\Component\Routing\Router')
            ->disableOriginalConstructor()
            ->getMock();

        $authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);
        $authorizationChecker->expects($this->any())
            ->method('isGranted')
            ->with('oro_contact_view')
            ->will($this->returnValue($havePrivilege));

        $this->type = new AccountApiType($router, $entityNameResolver, $authorizationChecker);
    }

    public function testSetDefaultOptions()
    {
        $this->init();
        /** @var OptionsResolverInterface $resolver */
        $resolver = $this->createMock('Symfony\Component\OptionsResolver\OptionsResolverInterface');

        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with($this->isType('array'));

        $this->type->setDefaultOptions($resolver);
    }

    public function testName()
    {
        $this->init();
        $this->assertEquals('account', $this->type->getName());
    }

    public function testAddEntityFields()
    {
        $this->init();
        /** @var FormBuilderInterface $builder */
        $builder = $this->getMockBuilder('Symfony\Component\Form\FormBuilder')
            ->disableOriginalConstructor()
            ->getMock();

        $builder->expects($this->at(0))
            ->method('add')
            ->with('name', 'text')
            ->will($this->returnSelf());
        $builder->expects($this->at(1))
            ->method('add')
            ->with('default_contact', 'oro_entity_identifier')
            ->will($this->returnSelf());
        $builder->expects($this->at(2))
            ->method('add')
            ->with('contacts', 'oro_multiple_entity')
            ->will($this->returnSelf());

        $builder->expects($this->once())
            ->method('addEventSubscriber')
            ->with($this->isInstanceOf('Symfony\Component\EventDispatcher\EventSubscriberInterface'));

        $this->type->buildForm($builder, []);
    }

    public function testAddEntityFieldsWithoutContactPermission()
    {
        $this->init(false);
        /** @var FormBuilderInterface $builder */
        $builder = $this->getMockBuilder('Symfony\Component\Form\FormBuilder')
            ->disableOriginalConstructor()
            ->getMock();

        $builder->expects($this->at(0))
            ->method('add')
            ->with('name', 'text')
            ->will($this->returnSelf());

        $builder->expects($this->once())
            ->method('addEventSubscriber')
            ->with($this->isInstanceOf('Symfony\Component\EventDispatcher\EventSubscriberInterface'));

        $this->type->buildForm($builder, []);
    }
}
