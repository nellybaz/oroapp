<?php

namespace Oro\Bundle\MagentoBundle\Tests\Unit\Form\Handler;

use Oro\Bundle\MagentoBundle\Entity\CartItem;
use Oro\Bundle\MagentoBundle\Form\Handler\CartItemHandler;

class CartItemHandlerTest extends AbstractHandlerTest
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

        $this->entity  = new CartItem();
        $this->handler = new CartItemHandler($this->form, $this->request, $registry);
    }
}
