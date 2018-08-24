<?php

namespace Oro\Bundle\CatalogBundle\Tests\Unit\EventListener;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Doctrine\ORM\UnitOfWork;

use Oro\Bundle\CatalogBundle\Event\ProductsChangeRelationEvent;
use Oro\Bundle\CatalogBundle\EventListener\ProductsChangeRelationListener;
use Oro\Bundle\CatalogBundle\Tests\Unit\Entity\Stub\Category;
use Oro\Bundle\CatalogBundle\Tests\Unit\Entity\Stub\Product;

class ProductsChangeRelationListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var EntityManagerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $em;

    /**
     * @var UnitOfWork|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $unitOfWork;

    /**
     * @var EventDispatcherInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $eventDispatcher;

    /**
     * @var ProductsChangeRelationListener
     */
    protected $listener;

    /**
     * @var OnFlushEventArgs
     */
    protected $onFlushEvent;

    protected function setUp()
    {
        $this->em = $this
            ->getMockBuilder(EntityManagerInterface::class)
            ->getMock();
        $this->unitOfWork = $this
            ->getMockBuilder(UnitOfWork::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->em->expects($this->any())
            ->method('getUnitOfWork')
            ->willReturn($this->unitOfWork);
        $this->eventDispatcher = $this
            ->getMockBuilder(EventDispatcherInterface::class)
            ->getMock();

        $this->listener = new ProductsChangeRelationListener($this->eventDispatcher);
        $this->onFlushEvent = new OnFlushEventArgs($this->em);
    }

    public function testOnFlush()
    {
        $category = $this->createMock(Category::class);

        $product1 = new Product();
        $product1->setCategory($category);

        $this->unitOfWork->expects($this->once())
            ->method('getScheduledEntityUpdates')
            ->willReturn([$product1]);

        $this->unitOfWork->expects($this->once())
            ->method('getEntityChangeSet')
            ->willReturn(['category' => $category]);

        $event = new ProductsChangeRelationEvent([$product1]);
        $this->eventDispatcher->expects($this->once())
            ->method('dispatch')
            ->with(ProductsChangeRelationEvent::NAME, $event);

        $this->listener->onFlush($this->onFlushEvent);
    }

    public function testOnFlushNoAnyEntityChanged()
    {
        $this->unitOfWork->expects($this->once())
            ->method('getScheduledEntityUpdates')
            ->willReturn(null);
        $this->eventDispatcher->expects($this->never())
            ->method('dispatch');
        $this->listener->onFlush($this->onFlushEvent);
    }

    public function testOnFlushNoAnyProductChanged()
    {
        $category = new Category();

        $this->unitOfWork->expects($this->once())
            ->method('getScheduledEntityUpdates')
            ->willReturn([$category]);
        $this->eventDispatcher->expects($this->never())
            ->method('dispatch');
        $this->listener->onFlush($this->onFlushEvent);
    }

    public function testOnFlushNoProductCategoryChanged()
    {
        $category = $this->createMock(Category::class);

        $product1 = new Product();
        $product1->setCategory($category);

        $this->unitOfWork->expects($this->once())
            ->method('getScheduledEntityUpdates')
            ->willReturn([$product1]);

        $this->unitOfWork->expects($this->once())
            ->method('getEntityChangeSet')
            ->willReturn(['update' => '2010-10-10 10:10:10']);

        $this->eventDispatcher->expects($this->never())
            ->method('dispatch');

        $this->listener->onFlush($this->onFlushEvent);
    }
}
