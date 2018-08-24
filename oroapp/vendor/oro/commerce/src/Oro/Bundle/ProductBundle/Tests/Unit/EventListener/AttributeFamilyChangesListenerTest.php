<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\EventListener;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeFamily;
use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeGroup;
use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeGroupRelation;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\Repository\ProductRepository;
use Oro\Bundle\ProductBundle\EventListener\AttributeFamilyChangesListener;
use Oro\Bundle\WebsiteSearchBundle\Event\ReindexationRequestEvent;
use Oro\Component\TestUtils\ORM\Mocks\UnitOfWork;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class AttributeFamilyChangesListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var RequestStack */
    protected $requestStack;

    /** @var ProductRepository|\PHPUnit_Framework_MockObject_MockObject */
    protected $repository;

    /** @var EntityManagerInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $entityManager;

    /** @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject */
    protected $registry;

    /** @var EventDispatcherInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $dispatcher;

    /** @var AttributeFamilyChangesListener */
    protected $listener;

    protected function setUp()
    {
        $this->requestStack = new RequestStack();

        $this->repository = $this->createMock(ProductRepository::class);

        $this->entityManager = $this->createMock(EntityManagerInterface::class);
        $this->entityManager->expects($this->any())
            ->method('getRepository')
            ->with(Product::class)
            ->willReturn($this->repository);

        $this->registry = $this->createMock(ManagerRegistry::class);
        $this->registry->expects($this->any())
            ->method('getManagerForClass')
            ->with(Product::class)
            ->willReturn($this->entityManager);

        $this->dispatcher = $this->createMock(EventDispatcherInterface::class);

        $this->listener = new AttributeFamilyChangesListener($this->requestStack, $this->registry, $this->dispatcher);
    }

    public function testFlushWithoutRequest()
    {
        $this->entityManager->expects($this->never())
            ->method('getUnitOfWork');

        $this->repository->expects($this->never())
            ->method('getProductIdsByAttributeFamilies');

        $this->dispatcher->expects($this->never())
            ->method('dispatch');

        $event = new OnFlushEventArgs($this->entityManager);

        $this->listener->onFlush($event);
        $this->listener->postFlush();
    }

    /**
     * @dataProvider flushDataProvider
     *
     * @param array $productIds
     * @param bool $expected
     */
    public function testFlush(array $productIds, $expected)
    {
        $this->requestStack->push(new Request());

        //relation added to attribute family
        $relation1 = new AttributeGroupRelation();

        $group1 = new AttributeGroup();
        $group1->addAttributeRelation($relation1);

        $family1 = new AttributeFamily();
        $family1->setCode('family1')->addAttributeGroup($group1);

        //relation not added to attribute family
        $relation2 = new AttributeGroupRelation();

        $family2 = new AttributeFamily();
        $family2->setCode('family2');

        $group2 = new AttributeGroup();
        $group2->setAttributeFamily($family2)->addAttributeRelation($relation2);

        $uow = new UnitOfWork();
        $uow->addInsertion($relation1)->addInsertion(new \stdClass());
        $uow->addDeletion($relation2)->addDeletion(new \stdClass());

        $this->entityManager->expects($this->once())
            ->method('getUnitOfWork')
            ->willReturn($uow);

        $this->repository->expects($this->once())
            ->method('getProductIdsByAttributeFamilies')
            ->with([$family1, $family2])
            ->willReturn($productIds);

        $this->dispatcher->expects($this->exactly((int)$expected))
            ->method('dispatch')
            ->with(
                ReindexationRequestEvent::EVENT_NAME,
                new ReindexationRequestEvent([Product::class], [], $productIds)
            );

        $event = new OnFlushEventArgs($this->entityManager);

        $this->listener->onFlush($event);
        $this->listener->postFlush();
    }

    /**
     * @return array
     */
    public function flushDataProvider()
    {
        return [
            'with related products' => [
                'productIds' => [42],
                'expected' => true
            ],
            'without related products' => [
                'productIds' => [],
                'expected' => false
            ],
        ];
    }
}
