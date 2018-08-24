<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\EventListener;

use Doctrine\ORM\Event\OnFlushEventArgs;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Oro\Component\Testing\Doctrine\EntityManagerMockBuilder;
use Oro\Component\WebCatalog\Entity\ContentNodeInterface;
use Oro\Component\WebCatalog\Entity\ContentVariantInterface;
use Oro\Bundle\ProductBundle\Tests\Unit\Entity\Stub\ContentNodeStub;
use Oro\Bundle\WebsiteBundle\Entity\Website;
use Oro\Component\DoctrineUtils\ORM\FieldUpdatesChecker;
use Oro\Bundle\CatalogBundle\ContentVariantType\CategoryPageContentVariantType;
use Oro\Bundle\WebsiteSearchBundle\Event\ReindexationRequestEvent;
use Oro\Bundle\ProductBundle\ContentVariantType\ProductCollectionContentVariantType;
use Oro\Bundle\ProductBundle\ContentVariantType\ProductPageContentVariantType;
use Oro\Bundle\ProductBundle\EventListener\ProductCollectionVariantReindexMessageSendListener;
use Oro\Bundle\ProductBundle\EventListener\ProductContentVariantReindexEventListener;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Tests\Unit\ContentVariant\Stub\ContentVariantStub;
use Oro\Bundle\SegmentBundle\Entity\Segment;
use Oro\Component\WebCatalog\Entity\WebCatalogInterface;
use Oro\Component\WebCatalog\Provider\WebCatalogUsageProviderInterface;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class ProductContentVariantReindexEventListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var ProductContentVariantReindexEventListener */
    private $eventListener;

    /** @var WebCatalogUsageProviderInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $webCatalogUsageProvider;

    /** @var FieldUpdatesChecker|\PHPUnit_Framework_MockObject_MockObject */
    private $fieldUpdatesChecker;

    /** @var EventDispatcherInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $eventDispatcher;

    /** @var ProductCollectionVariantReindexMessageSendListener|\PHPUnit_Framework_MockObject_MockObject */
    private $messageSendListener;

    /** @var EntityManagerMockBuilder */
    private $entityManagerMockBuilder;

    public function setUp()
    {
        $this->entityManagerMockBuilder = new EntityManagerMockBuilder();
        $this->eventDispatcher = $this->getMockBuilder(EventDispatcherInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->fieldUpdatesChecker = $this->getMockBuilder(FieldUpdatesChecker::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->webCatalogUsageProvider = $this->getMockBuilder(WebCatalogUsageProviderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->messageSendListener = $this->createMock(ProductCollectionVariantReindexMessageSendListener::class);

        $this->eventListener = new ProductContentVariantReindexEventListener(
            $this->eventDispatcher,
            $this->fieldUpdatesChecker,
            $this->messageSendListener,
            $this->webCatalogUsageProvider
        );
    }

    public function testItAcceptsOnlyContentVariantAfterFlush()
    {
        $entityManager = $this->entityManagerMockBuilder->getEntityManager($this, [new \stdClass()], [], []);
        $this->eventDispatcher
            ->expects($this->never())
            ->method('dispatch');

        $this->eventListener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testCreatedAndDeletedProductsOfContentVariantsWillBeReindexButNoProductsWithoutChangeSet()
    {
        $contentVariant1 = $this->generateContentVariant(1);
        $contentVariant2 = $this->generateContentVariant(2);
        $contentVariant3 = $this->generateContentVariant(3);
        $contentVariant4 = $this->generateContentVariant(4);
        $contentVariant5 = $this->generateContentVariant(5);
        $contentVariant6 = $this->generateContentVariant(6);

        $entityManager = $this->entityManagerMockBuilder->getEntityManager(
            $this,
            [$contentVariant1, $contentVariant2],
            [$contentVariant3, $contentVariant4],
            [$contentVariant5, $contentVariant6]
        );

        $this->webCatalogUsageProvider
            ->method('getAssignedWebCatalogs')
            ->willReturn([1 => 1]);

        $this->assertReindexEvent([1, 2, 5, 6], [1]);
        $this->eventListener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testItReindexEachProductOnlyOnceAfterFlush()
    {
        $contentVariant1 = $this->generateContentVariant(1);
        $contentVariant2 = $this->generateContentVariant(2);
        $contentVariant3 = $this->generateContentVariant(3);

        $entityManager = $this->entityManagerMockBuilder->getEntityManager(
            $this,
            [$contentVariant1, $contentVariant2, $contentVariant3],
            [$contentVariant1, $contentVariant2, $contentVariant3],
            [$contentVariant1, $contentVariant2, $contentVariant3]
        );

        $this->webCatalogUsageProvider
            ->method('getAssignedWebCatalogs')
            ->willReturn([1 => 1]);

        $this->assertReindexEvent([1, 2, 3], [1]);
        $this->eventListener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testProductIdsOfChangedContentVariantsWillBeTriggered()
    {
        $contentVariant1 = $this->generateContentVariant(1);
        $oldProduct = $contentVariant1->getProductPageProduct();
        $newProduct = $this->generateProduct(3);
        $contentVariant1->setProductPageProduct($newProduct);

        $entityChangeSet = ['product_page_product' => [$oldProduct, $newProduct]];
        $entityManager = $this->entityManagerMockBuilder->getEntityManager(
            $this,
            [],
            [$contentVariant1],
            [],
            $entityChangeSet
        );

        $this->webCatalogUsageProvider
            ->method('getAssignedWebCatalogs')
            ->willReturn([1 => 1]);

        $this->assertReindexEvent([1, 3], [1]);
        $this->eventListener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testItReindexWithManyProductsAfterFlushWithEmptyChangeSet()
    {
        $contentVariant = $this->generateContentVariant(1);
        $product = $this->generateProduct(1);
        $contentVariant->setProductPageProduct($product);

        $entityChangeSet = ['product_page_product' => [0 => null, 1 => null]];
        $entityManager = $this->entityManagerMockBuilder->getEntityManager(
            $this,
            [$contentVariant],
            [],
            [],
            $entityChangeSet
        );
        $this->webCatalogUsageProvider
            ->method('getAssignedWebCatalogs')
            ->willReturn([1 => 1]);

        $this->assertReindexEvent([1], [1]);
        $this->eventListener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testProductsOfRelatedContentVariantWillBeReindexOnlyIfConfigurableFieldsHaveSomeChanges()
    {
        $contentVariant1 = $this->generateContentVariant(1);
        $contentVariant2 = $this->generateContentVariant(2);
        $contentVariant3 = $this->generateContentVariant(3);
        $contentVariant4 = $this->generateContentVariant(4);

        $contentNodeWithFieldChanges = (new ContentNodeStub(1))
            ->addContentVariant($contentVariant1)
            ->addContentVariant($contentVariant2);
        $contentNodeWithoutFieldChanges = (new ContentNodeStub(2))
            ->addContentVariant($contentVariant3)
            ->addContentVariant($contentVariant4);

        $entityManager = $this->entityManagerMockBuilder->getEntityManager(
            $this,
            [],
            [$contentNodeWithFieldChanges, $contentNodeWithoutFieldChanges, new \stdClass()],
            []
        );
        $this->fieldUpdatesChecker
            ->method('isRelationFieldChanged')
            ->willReturnMap([
                [$contentNodeWithFieldChanges, 'titles', true],
                [$contentNodeWithoutFieldChanges, 'titles', false],
            ]);

        $this->webCatalogUsageProvider
            ->method('getAssignedWebCatalogs')
            ->willReturn([1 => 1]);

        // only products from $contentNodeWithFieldChanges should be reindex
        $this->assertReindexEvent([1, 2], [1]);
        $this->eventListener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testItReindexRelatedWebsitesAfterFlush()
    {
        $contentVariant1 = $this->generateContentVariant(1, 1);
        $contentVariant2 = $this->generateContentVariant(2, 1);
        $contentVariant3 = $this->generateContentVariant(null, 1);
        $contentVariant3->setType(CategoryPageContentVariantType::TYPE);

        $entityManager = $this->entityManagerMockBuilder->getEntityManager(
            $this,
            [$contentVariant1, $contentVariant2, $contentVariant3]
        );

        $this->webCatalogUsageProvider
            ->method('getAssignedWebCatalogs')
            ->willReturn([1 => '1', 2 => '2', 3 => '1', 4 => '2', 5 => '3', 6 => '5']);

        $this->assertReindexEvent([1, 2], [1, 3]);
        $this->eventListener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testItReindexDefaultRelatedWebsiteAfterFlush()
    {
        $websiteMock = $this->createMock(Website::class);
        $websiteMock->method('getId')
            ->willReturn(1);

        $contentVariant1 = $this->generateContentVariant(1, 1);
        $contentVariant2 = $this->generateContentVariant(2, 1);
        $contentVariant3 = $this->generateContentVariant(null, 1);
        $contentVariant3->setType(CategoryPageContentVariantType::TYPE);

        $entityManager = $this->entityManagerMockBuilder->getEntityManager(
            $this,
            [$contentVariant1, $contentVariant2, $contentVariant3]
        );

        $this->webCatalogUsageProvider
            ->method('getAssignedWebCatalogs')
            ->willReturn([1 => 1]);

        $this->assertReindexEvent([1, 2], [1]);
        $this->eventListener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testWebsiteIdsWillNotBeCollectedIfThereAreNoProductsToReindex()
    {
        $entityManager = $this->entityManagerMockBuilder->getEntityManager($this, [], [], []);

        $this->webCatalogUsageProvider->expects($this->never())->method('getAssignedWebCatalogs');
        $this->eventDispatcher->expects($this->never())->method('dispatch');

        $this->eventListener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testReindexationWillNotBeTriggeredWhenThereAreNoWebsitesWithCurrentWebCatalog()
    {
        $contentVariant = $this->generateContentVariant(1);
        $entityManager = $this->entityManagerMockBuilder->getEntityManager($this, [$contentVariant], [], []);

        $this->webCatalogUsageProvider->method('getAssignedWebCatalogs')->willReturn([]);
        $this->eventDispatcher->expects($this->never())->method('dispatch');

        $this->eventListener->onFlush(new OnFlushEventArgs($entityManager));
    }

    /**
     * @dataProvider dataProviderForNotWebCatalogAwareEntities
     * @param ContentVariantInterface $contentVariant
     */
    public function testReindexationWillNotBeTriggeredWhenThereAreNotWebCatalogAwareEntitiesChanged(
        ContentVariantInterface $contentVariant
    ) {
        $entityManager = $this->entityManagerMockBuilder->getEntityManager($this, [$contentVariant], [], []);

        $this->webCatalogUsageProvider->method('getAssignedWebCatalogs')->willReturn([1 => 1]);
        $this->eventDispatcher->expects($this->never())->method('dispatch');

        $this->eventListener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function dataProviderForNotWebCatalogAwareEntities()
    {
        $notContentNodeAwareEntity = $this->createMock(ContentVariantInterface::class);
        $notWebCatalogAwareEntity = $this->generateContentVariant(1);
        $notWebCatalogAwareEntity->setNode($this->createMock(ContentNodeInterface::class));

        return [
            [$notContentNodeAwareEntity],
            [$notWebCatalogAwareEntity],
        ];
    }

    public function testReindexationForProductCollectionIfNodeFieldsWasChanged()
    {
        list($contentNode, $segment) = $this->generateContentNodeAndSegment();
        $entityManager = $this->entityManagerMockBuilder->getEntityManager($this, [], [$contentNode], []);
        $this->fieldUpdatesChecker->expects($this->once())
            ->method('isRelationFieldChanged')
            ->with($contentNode, 'titles')
            ->willReturn(true);
        $this->messageSendListener->expects($this->once())
            ->method('scheduleSegment')
            ->with($segment);

        $this->eventListener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testReindexationForProductCollectionIfNodeFieldsWithoutChanges()
    {
        list($contentNode) = $this->generateContentNodeAndSegment();
        $entityManager = $this->entityManagerMockBuilder->getEntityManager($this, [], [$contentNode], []);
        $this->fieldUpdatesChecker->expects($this->once())
            ->method('isRelationFieldChanged')
            ->with($contentNode, 'titles')
            ->willReturn(false);
        $this->messageSendListener->expects($this->never())
            ->method('scheduleSegment');

        $this->eventListener->onFlush(new OnFlushEventArgs($entityManager));
    }

    /**
     * @param int $webCatalogId
     * @return array|[ContentNode,Segment]
     */
    private function generateContentNodeAndSegment($webCatalogId = 1)
    {
        $contentVariant = new ContentVariantStub();
        $contentVariant->setType(ProductCollectionContentVariantType::TYPE);
        $segment = new Segment();
        $contentVariant->setProductCollectionSegment($segment);
        $webCatalogMock = $this->createMock(WebCatalogInterface::class);
        $webCatalogMock->method('getId')
            ->willReturn($webCatalogId);

        $contentNode = new ContentNodeStub(1);
        $contentNode->setWebCatalog($webCatalogMock);
        $contentNode->addContentVariant($contentVariant);
        $contentVariant->setNode($contentNode);

        return [$contentNode, $segment];
    }

    /**
     * @param int|null $productId
     * @param int|null $webCatalogId
     * @return ContentVariantStub
     */
    private function generateContentVariant($productId = null, $webCatalogId = 1)
    {
        $contentVariant = new ContentVariantStub();
        $contentVariant->setType(ProductPageContentVariantType::TYPE);
        if ($productId !== null) {
            $product = $this->generateProduct($productId);
            $contentVariant->setProductPageProduct($product);
        }
        $webCatalogMock = $this->createMock(WebCatalogInterface::class);
        $webCatalogMock->method('getId')
            ->willReturn($webCatalogId);

        $contentVariant->setNode((new ContentNodeStub(1))->setWebCatalog($webCatalogMock));

        return $contentVariant;
    }

    /**
     * @param int $productId
     * @return Product|\PHPUnit_Framework_MockObject_MockObject
     */
    private function generateProduct($productId)
    {
        $product = $this->createMock(Product::class);
        $product->method('getId')
            ->willReturn($productId);

        return $product;
    }

    /**
     * @param array $productIds
     * @param array $websiteIds
     */
    private function assertReindexEvent(array $productIds = [], array $websiteIds = [])
    {
        $this->eventDispatcher
            ->expects($this->once())
            ->method('dispatch')
            ->with(
                ReindexationRequestEvent::EVENT_NAME,
                new ReindexationRequestEvent([Product::class], $websiteIds, $productIds)
            );
    }
}
