<?php

namespace Oro\Bundle\CheckoutBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Oro\Bundle\CheckoutBundle\Form\Type\SaveAddressType;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;

class SaveAddressTypeTest extends FormIntegrationTestCase
{
    /**
     * @var  AuthorizationCheckerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $authorizationChecker;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);
        parent::setUp();
    }

    public function testCreateByUserWithoutPermissions()
    {
        $this->authorizationChecker->expects($this->any())
            ->method('isGranted')
            ->will($this->returnValueMap(
                [
                    ['CREATE;entity:OroCustomerBundle:CustomerUserAddress', null, false],
                    ['CREATE;entity:OroCustomerBundle:CustomerAddress', null, false]
                ]
            ));

        $form = $this->factory->create(SaveAddressType::class);
        $this->assertInstanceOf(HiddenType::class, $form->getConfig()->getType()->getParent()->getInnerType());
        $this->assertEquals(0, $form->getConfig()->getData());
    }

    public function testCreateByUserWithPermissions()
    {
        $this->authorizationChecker->expects($this->any())
            ->method('isGranted')
            ->will($this->returnValueMap(
                [
                    ['CREATE;entity:OroCustomerBundle:CustomerUserAddress', null, true],
                    ['CREATE;entity:OroCustomerBundle:CustomerAddress', null, true]
                ]
            ));

        $form = $this->factory->create(SaveAddressType::class);
        $this->assertInstanceOf(CheckboxType::class, $form->getConfig()->getType()->getParent()->getInnerType());
    }

    /**
     * @return array
     */
    protected function getExtensions()
    {
        $type = new SaveAddressType($this->authorizationChecker);

        return [
            new PreloadedExtension([$type], [])
        ];
    }
}
