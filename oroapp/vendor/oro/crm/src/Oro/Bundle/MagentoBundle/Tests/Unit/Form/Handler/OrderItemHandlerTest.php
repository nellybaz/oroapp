<?php

namespace Oro\Bundle\MagentoBundle\Tests\Unit\Form\Handler;

use Oro\Bundle\MagentoBundle\Form\Handler\OrderItemHandler;
use Oro\Bundle\MagentoBundle\Entity\OrderItem;

class OrderItemHandlerTest extends AbstractHandlerTest
{
    protected function setUp()
    {
        $this->form = $this->getMockBuilder('Symfony\Component\Form\Form')
            ->disableOriginalConstructor()
            ->getMock();

        $this->request = $this->getMockBuilder('Symfony\Component\HttpFoundation\Request')
            ->disableOriginalConstructor()
            ->getMock();


        $registry = $this->getMockBuilder('Doctrine\Bundle\DoctrineBundle\Registry')
            ->disableOriginalConstructor()
            ->getMock();

        $this->manager = $this->createMock('Doctrine\Common\Persistence\ObjectManager');

        $registry->expects($this->once())
            ->method('getManager')
            ->will($this->returnValue($this->manager));

        $this->entity  = new OrderItem();
        $this->handler = new OrderItemHandler($this->form, $this->request, $registry);
    }
}
