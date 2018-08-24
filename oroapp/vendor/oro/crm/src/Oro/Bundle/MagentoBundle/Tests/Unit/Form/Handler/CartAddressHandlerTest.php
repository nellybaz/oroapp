<?php

namespace Oro\Bundle\MagentoBundle\Tests\Unit\Form\Handler;

use Oro\Bundle\AddressBundle\Entity\AddressType;
use Oro\Bundle\MagentoBundle\Entity\CartAddress;
use Oro\Bundle\MagentoBundle\Form\Handler\CartAddressHandler;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;

class CartAddressHandlerTest extends AbstractHandlerTest
{
    protected function setUp()
    {
        $this->form = $this->getMockBuilder('Symfony\Component\Form\Form')
            ->disableOriginalConstructor()
            ->getMock();

        $this->request = $this->getMockBuilder('Symfony\Component\HttpFoundation\Request')
            ->disableOriginalConstructor()
            ->getMock();

        $registry = $this->createMock('Symfony\Bridge\Doctrine\RegistryInterface');

        $this->manager = $this->createMock('Doctrine\Common\Persistence\ObjectManager');

        $registry->expects($this->once())
            ->method('getManager')
            ->will($this->returnValue($this->manager));

        $tokenAccessor = $this->createMock(TokenAccessorInterface::class);
        $organization = $this->getMockBuilder('Oro\Bundle\OrganizationBundle\Entity\Organization')
            ->disableOriginalConstructor()
            ->getMock();
        $tokenAccessor->expects($this->once())
            ->method('getOrganization')
            ->will($this->returnValue($organization));

        $this->entity  = new CartAddress();
        $this->handler = new CartAddressHandler($this->form, $this->request, $registry, $tokenAccessor);
    }

    public function testAddCartAddressOnSuccess()
    {
        $cart = $this->getMockBuilder('Oro\Bundle\MagentoBundle\Entity\Cart')
            ->disableOriginalConstructor()
            ->getMock();

        $cart->expects($this->once())
            ->method('setBillingAddress')
            ->with($this->entity);

        $this->form->expects($this->once())
            ->method('setData')
            ->with($this->entity);

        $this->request->expects($this->once())
            ->method('getMethod')
            ->will($this->returnValue('POST'));

        $this->form->expects($this->once())
            ->method('submit');

        $this->form->expects($this->once())
            ->method('isValid')
            ->will($this->returnValue(true));

        $this->manager->expects($this->at(0))
            ->method('persist')
            ->with($cart);

        $this->manager->expects($this->at(1))
            ->method('persist')
            ->with($this->entity);

        $this->manager->expects($this->once())
            ->method('flush');

        $this->assertTrue($this->handler->process($this->entity, $cart, AddressType::TYPE_BILLING));
    }
}
