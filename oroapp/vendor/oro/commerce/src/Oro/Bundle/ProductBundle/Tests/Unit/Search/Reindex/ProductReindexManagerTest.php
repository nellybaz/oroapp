<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Search\Reindex;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Search\Reindex\ProductReindexManager;
use Oro\Bundle\WebsiteSearchBundle\Event\ReindexationRequestEvent;

use Oro\Component\Testing\Unit\EntityTrait;

class ProductReindexManagerTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    const PRODUCT_ID = 1;
    const WEBSITE_ID = 777;
    
    /** @var EventDispatcherInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $eventDispatcher;

    /** @var ProductReindexManager */
    protected $reindexManager;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->eventDispatcher = $this->createMock(EventDispatcherInterface::class);
        $this->reindexManager = new ProductReindexManager($this->eventDispatcher);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->reindexManager);
        unset($this->eventDispatcher);
    }

    public function testReindexProduct()
    {
        $event = $this->getReindexationEvents(self::PRODUCT_ID, self::WEBSITE_ID);
        /** @var $product Product|\PHPUnit_Framework_MockObject_MockObject */
        $product = $this->getEntity(Product::class, [ 'id' => self::PRODUCT_ID ]);
        $this->eventDispatcher->expects($this->once())
            ->method('dispatch')
            ->with(ReindexationRequestEvent::EVENT_NAME, $event);
        $this->reindexManager->reindexProduct($product, self::WEBSITE_ID);
    }

    public function testReindexProducts()
    {
        $event = $this->getReindexationEvents(self::PRODUCT_ID, self::WEBSITE_ID);
        $this->eventDispatcher->expects($this->once())
            ->method('dispatch')
            ->with(ReindexationRequestEvent::EVENT_NAME, $event);
        $this->reindexManager->reindexProducts([self::PRODUCT_ID], self::WEBSITE_ID);
    }

    public function testReindexProductsWithNoProducts()
    {
        $this->eventDispatcher->expects($this->never())->method('dispatch');
        $this->reindexManager->reindexProducts([], self::WEBSITE_ID);
    }

    public function testReindexAllProducts()
    {
        $event = $this->getReindexationEvents([], self::WEBSITE_ID);
        $this->eventDispatcher->expects($this->once())
            ->method('dispatch')
            ->with(ReindexationRequestEvent::EVENT_NAME, $event);
        $this->reindexManager->reindexAllProducts(self::WEBSITE_ID);
    }

    /**
     * @param $productIds
     * @param $websiteId
     *
     * @return ReindexationRequestEvent
     */
    protected function getReindexationEvents($productIds, $websiteId)
    {
        $productIds = is_array($productIds) ? $productIds : [$productIds];
        return new ReindexationRequestEvent([Product::class], [$websiteId], $productIds, true);
    }
}
