<?php

namespace Oro\Bundle\OrganizationBundle\Tests\Unit\Form\Type;

use Oro\Bundle\OrganizationBundle\Form\Type\BusinessUnitType;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;

class BusinessUnitTypeTest extends \PHPUnit_Framework_TestCase
{
    /** @var BusinessUnitType */
    protected $form;

    protected function setUp()
    {
        $businessUnitManager = $this->getMockBuilder('Oro\Bundle\OrganizationBundle\Entity\Manager\BusinessUnitManager')
            ->disableOriginalConstructor()
            ->getMock();

        $tokenAccessor = $this->createMock(TokenAccessorInterface::class);

        $businessUnitManager->expects($this->any())
            ->method('getBusinessUnitsTree')
            ->will($this->returnValue([]));

        $businessUnitManager->expects($this->any())
            ->method('getBusinessUnitIds')
            ->will($this->returnValue([]));

        $this->form = new BusinessUnitType($businessUnitManager, $tokenAccessor);
    }

    public function testSetDefaultOptions()
    {
        $optionResolver = $this->createMock('Symfony\Component\OptionsResolver\OptionsResolverInterface');
        $optionResolver->expects($this->once())
            ->method('setDefaults')
            ->with(
                [
                    'data_class' => 'Oro\Bundle\OrganizationBundle\Entity\BusinessUnit',
                    'ownership_disabled'      => true
                ]
            );
        $this->form->setDefaultOptions($optionResolver);
    }

    public function testBuildForm()
    {
        $builder = $this->getMockBuilder('Symfony\Component\Form\FormBuilder')
            ->disableOriginalConstructor()
            ->getMock();

        $builder->expects($this->any())
            ->method('add')
            ->will($this->returnSelf());

        $this->form->buildForm($builder, array());
    }

    public function testGetName()
    {
        $this->assertEquals('oro_business_unit', $this->form->getName());
    }
}
