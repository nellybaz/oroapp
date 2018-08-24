<?php

namespace Oro\Bundle\ShippingBundle\Tests\Unit\EventListener;

use Doctrine\Common\Persistence\ObjectManager;

use Doctrine\Common\Persistence\ObjectRepository;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\ShippingBundle\Entity\ProductShippingOptions;
use Oro\Bundle\ShippingBundle\EventListener\ProductDuplicateListener;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Event\ProductDuplicateAfterEvent;

class ProductDuplicateListenerTest extends \PHPUnit_Framework_TestCase
{
    const CLASS_NAME = 'stdClass';

    /** @var \PHPUnit_Framework_MockObject_MockObject|DoctrineHelper */
    protected $doctrineHelper;

    /** @var ProductDuplicateListener */
    protected $listener;

    /** @var \PHPUnit_Framework_MockObject_MockObject|ObjectManager */
    protected $objectManager;

    /** @var \PHPUnit_Framework_MockObject_MockObject|ObjectRepository */
    protected $repository;

    /** @var Product */
    protected $product;

    /** @var Product */
    protected $sourceProduct;

    protected function setUp()
    {
        $this->doctrineHelper = $this->getMockBuilder('Oro\Bundle\EntityBundle\ORM\DoctrineHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->listener = new ProductDuplicateListener($this->doctrineHelper);
        $this->listener->setProductShippingOptionsClass(self::CLASS_NAME);

        $this->repository = $this->createMock('Doctrine\Common\Persistence\ObjectRepository');
        $this->objectManager = $this->createMock('Doctrine\Common\Persistence\ObjectManager');

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityRepository')
            ->with(self::CLASS_NAME)
            ->willReturn($this->repository);

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityManager')
            ->with(self::CLASS_NAME)
            ->willReturn($this->objectManager);

        $this->product = new Product();
        $this->sourceProduct = new Product();
    }

    public function testOnDuplicateAfter()
    {
        $this->repository->expects($this->once())
            ->method('findBy')
            ->with(['product' => $this->sourceProduct])
            ->willReturn(
                [
                    new ProductShippingOptions(),
                    new ProductShippingOptions(),
                    new ProductShippingOptions()
                ]
            );

        $this->objectManager->expects($this->exactly(3))->method('persist');
        $this->objectManager->expects($this->once())->method('flush');

        $this->listener->onDuplicateAfter(new ProductDuplicateAfterEvent($this->product, $this->sourceProduct));
    }

    public function testOnDuplicateAfterSourceProductWithoutOptions()
    {
        $this->repository->expects($this->once())
            ->method('findBy')
            ->with(['product' => $this->sourceProduct])
            ->willReturn([]);

        $this->objectManager->expects($this->never())->method('persist');
        $this->objectManager->expects($this->never())->method('flush');

        $this->listener->onDuplicateAfter(new ProductDuplicateAfterEvent($this->product, $this->sourceProduct));
    }
}
