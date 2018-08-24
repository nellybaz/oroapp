<?php

namespace Oro\Bundle\CatalogBundle\Tests\Unit\EventListener;

use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;

use Doctrine\ORM\Event\OnFlushEventArgs;

use Oro\Component\Testing\Doctrine\EntityManagerMockBuilder;
use Oro\Component\WebCatalog\Entity\ContentNodeInterface;
use Oro\Component\WebCatalog\Entity\ContentVariantInterface;
use Oro\Component\WebCatalog\Entity\WebCatalogInterface;
use Oro\Component\WebCatalog\Provider\WebCatalogUsageProviderInterface;
use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Component\DoctrineUtils\ORM\FieldUpdatesChecker;
use Oro\Bundle\ProductBundle\Tests\Unit\Entity\Stub\ContentNodeStub;
use Oro\Bundle\CatalogBundle\ContentVariantType\CategoryPageContentVariantType;
use Oro\Bundle\CatalogBundle\Tests\Unit\ContentVariantType\Stub\ContentVariantStub;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\CatalogBundle\Manager\ProductIndexScheduler;
use Oro\Bundle\CatalogBundle\EventListener\CategoryContentVariantIndexListener;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class CategoryContentVariantIndexListenerTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /** @var ProductIndexScheduler|\PHPUnit_Framework_MockObject_MockObject */
    private $indexScheduler;

    /** @var PropertyAccessorInterface */
    private $accessor;

    /** @var CategoryContentVariantIndexListener */
    private $listener;

    /** @var FieldUpdatesChecker|\PHPUnit_Framework_MockObject_MockObject */
    private $fieldUpdatesChecker;

    /** @var WebCatalogUsageProviderInterface|\PHPUnit_Framework_MockObject_MockObject  */
    private $provider;

    /** @var EntityManagerMockBuilder */
    private $entityManagerMockBuilder;

    protected function setUp()
    {
        $this->entityManagerMockBuilder = new EntityManagerMockBuilder();
        $this->indexScheduler = $this->getMockBuilder(ProductIndexScheduler::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->fieldUpdatesChecker = $this->getMockBuilder(FieldUpdatesChecker::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->accessor = PropertyAccess::createPropertyAccessor();

        $this->provider = $this->getMockBuilder(WebCatalogUsageProviderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->listener = new CategoryContentVariantIndexListener(
            $this->indexScheduler,
            $this->accessor,
            $this->fieldUpdatesChecker,
            $this->provider
        );
    }

    public function testOnFlushNoEntities()
    {
        $entityManager = $this->entityManagerMockBuilder->getEntityManager($this, [], [], []);

        $this->indexScheduler->expects($this->never())
            ->method('scheduleProductsReindex');

        $this->listener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testOnFlushNoVariants()
    {
        $entityManager = $this->entityManagerMockBuilder->getEntityManager(
            $this,
            [new \stdClass()],
            [new \stdClass()],
            [new \stdClass()]
        );
        $this->indexScheduler->expects($this->never())
            ->method('scheduleProductsReindex');

        $this->listener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testOnFlushWithCategoriesWithoutChangeSet()
    {
        $emptyCategoryVariant = $this->generateContentVariant(null, 1);
        $firstVariant = $this->generateContentVariant(1, 1);
        $secondVariant = $this->generateContentVariant(1, 1);
        $thirdVariant = $this->generateContentVariant(2, 1);
        $incorrectTypeVariant = $this->getEntity(
            ContentVariantStub::class,
            [
                'type' => 'incorrectType',
                'node' => $firstVariant->getNode()
            ]
        );

        $entityManager = $this->entityManagerMockBuilder->getEntityManager(
            $this,
            [new \stdClass(), $emptyCategoryVariant, $firstVariant],
            [new \stdClass(), $secondVariant],
            [new \stdClass(), $thirdVariant, $incorrectTypeVariant, $this->getEntity(Category::class, ['id' => 3])]
        );
        $this->provider
            ->method('getAssignedWebCatalogs')
            ->willReturn([1 => 1]);

        $expectedCategories = [
            1 => $firstVariant->getCategoryPageCategory(),
            2 => $thirdVariant->getCategoryPageCategory()
        ];
        $this->assertCategoriesReindexationScheduled($expectedCategories, [1]);

        $this->listener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testOnFlushWithCategoriesWithChangeSet()
    {
        $oldCategory = $this->getEntity(Category::class, ['id' => 1]);
        $variant = $this->generateContentVariant(2, 1);

        $entityManager = $this->entityManagerMockBuilder->getEntityManager(
            $this,
            [],
            [$variant],
            [],
            ['category_page_category' => [$oldCategory, $variant->getCategoryPageCategory()]]
        );
        $this->provider
            ->method('getAssignedWebCatalogs')
            ->willReturn([1 => 1]);
        $this->fieldUpdatesChecker
            ->method('isRelationFieldChanged')
            ->willReturn(true);

        $expectedCategories = [1 => $oldCategory, 2 => $variant->getCategoryPageCategory()];
        $this->assertCategoriesReindexationScheduled($expectedCategories, [1]);

        $this->listener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testProductsOfRelatedContentVariantWillBeReindexOnlyIfConfigurableFieldsHaveSomeChanges()
    {
        $contentVariant1 = $this->generateContentVariant(1, 1);
        $contentVariant2 = $this->generateContentVariant(2, 1);
        $contentVariant3 = $this->generateContentVariant(3, 1);
        $contentVariant4 = $this->generateContentVariant(4, 1);
        $contentVariant5 = $this->generateContentVariant(5, 1);
        $contentVariant6 = $this->generateContentVariant(6, 1);

        $contentNodeWithFieldChanges = (new ContentNodeStub(1))
            ->addContentVariant($contentVariant1)
            ->addContentVariant($contentVariant2)
            ->addContentVariant($contentVariant3);
        $contentNodeWithoutFieldChanges = (new ContentNodeStub(2))
            ->addContentVariant($contentVariant4)
            ->addContentVariant($contentVariant5)
            ->addContentVariant($contentVariant6);

        $entityManager = $this->entityManagerMockBuilder->getEntityManager(
            $this,
            [],
            [$contentNodeWithFieldChanges, $contentNodeWithoutFieldChanges, new \stdClass()],
            []
        );
        $this->provider
            ->method('getAssignedWebCatalogs')
            ->willReturn([0 => '1']);

        $this->fieldUpdatesChecker
            ->method('isRelationFieldChanged')
            ->willReturnMap([
                [$contentNodeWithFieldChanges, 'titles', true],
                [$contentNodeWithoutFieldChanges, 'titles', false],
            ]);

        // only products related to categories from $contentNodeWithFieldChanges should be reindex
        $expectedCategories = [
            $contentVariant1->getCategoryPageCategory()->getId() => $contentVariant1->getCategoryPageCategory(),
            $contentVariant2->getCategoryPageCategory()->getId() => $contentVariant2->getCategoryPageCategory(),
            $contentVariant3->getCategoryPageCategory()->getId() => $contentVariant3->getCategoryPageCategory(),
        ];

        $this->indexScheduler->expects($this->once())
            ->method('scheduleProductsReindex')
            ->with($expectedCategories, null, true);

        $this->listener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testOnFlushWithCategoryAndDefaultWebsite()
    {
        $contentVariant = $this->generateContentVariant(1, 1);
        $entityManager = $this->entityManagerMockBuilder->getEntityManager($this, [$contentVariant]);
        $this->provider
            ->method('getAssignedWebCatalogs')
            ->willReturn([0 => '1']);

        $this->indexScheduler->expects($this->once())
            ->method('scheduleProductsReindex')
            ->with([1 => $contentVariant->getCategoryPageCategory()], null, true);

        $this->listener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testOnFlushWithCategoryAndRelatedWebsite()
    {
        $contentVariant = $this->generateContentVariant(1, 1);
        $entityManager = $this->entityManagerMockBuilder->getEntityManager($this, [$contentVariant]);
        $this->provider
            ->method('getAssignedWebCatalogs')
            ->willReturn([1 => '1']);

        $this->indexScheduler->expects($this->once())
            ->method('scheduleProductsReindex')
            ->with([1 => $contentVariant->getCategoryPageCategory()], 1, true);

        $this->listener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testWebsiteIdsWillNotBeCollectedIfThereAreNoProductsToReindex()
    {
        $entityManager = $this->entityManagerMockBuilder->getEntityManager($this, [], [], []);

        $this->provider->expects($this->never())->method('getAssignedWebCatalogs');
        $this->indexScheduler->expects($this->never())->method('scheduleProductsReindex');

        $this->listener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testReindexationWillNotBeTriggeredWhenThereAreNoWebsitesWithCurrentWebCatalog()
    {
        $contentVariant = $this->generateContentVariant(1, 1);
        $entityManager = $this->entityManagerMockBuilder->getEntityManager($this, [$contentVariant], [], []);

        $this->provider->method('getAssignedWebCatalogs')->willReturn([]);
        $this->indexScheduler->expects($this->never())->method('scheduleProductsReindex');

        $this->listener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function testReindexationWillBeScheduledForAllAssignedWebsites()
    {
        $contentVariantWithCategory1 = $this->generateContentVariant(1, 1);
        $contentVariantWithCategory2 = $this->generateContentVariant(2, 1);
        $category1 = $contentVariantWithCategory1->getCategoryPageCategory();
        $category2 = $contentVariantWithCategory2->getCategoryPageCategory();
        $entityManager = $this->entityManagerMockBuilder->getEntityManager(
            $this,
            [$contentVariantWithCategory1, $contentVariantWithCategory2],
            [],
            []
        );

        $this->provider->method('getAssignedWebCatalogs')->willReturn([
            1 => 1,
            2 => 1,
            3 => 2,
        ]);
        $this->assertCategoriesReindexationScheduled([
            $category1->getId() => $category1,
            $category2->getId() => $category2,
        ], [1, 2]);

        $this->listener->onFlush(new OnFlushEventArgs($entityManager));
    }

    /**
     * @dataProvider dataProviderForNotWebCatalogAwareEntities
     * @param ContentVariantInterface $contentVariant
     */
    public function testReindexationWillNotBeTriggeredWhenThereAreNotWebCatalogAwareEntitiesChanged(
        ContentVariantInterface $contentVariant
    ) {
        $entityManager = $this->entityManagerMockBuilder->getEntityManager($this, [$contentVariant], [], []);

        $this->provider->method('getAssignedWebCatalogs')->willReturn([1 => 1]);
        $this->indexScheduler->expects($this->never())->method('scheduleProductsReindex');

        $this->listener->onFlush(new OnFlushEventArgs($entityManager));
    }

    public function dataProviderForNotWebCatalogAwareEntities()
    {
        $notContentNodeAwareEntity = $this->createMock(ContentVariantInterface::class);
        $notWebCatalogAwareEntity = $this->generateContentVariant(1, 1);
        $notWebCatalogAwareEntity->setNode($this->createMock(ContentNodeInterface::class));

        return [
            [$notContentNodeAwareEntity],
            [$notWebCatalogAwareEntity],
        ];
    }

    /**
     * @param int  $categoryId
     * @param int|null $webCatalogId
     * @return ContentVariantStub
     */
    private function generateContentVariant($categoryId = null, $webCatalogId = 1)
    {
        $node = null;
        if ($webCatalogId) {
            $webCatalogMock = $this->createMock(WebCatalogInterface::class);
            $webCatalogMock->method('getId')
                ->willReturn($webCatalogId);
            $node = (new ContentNodeStub(1))->setWebCatalog($webCatalogMock);
        }

        return $this->getEntity(
            ContentVariantStub::class,
            [
                'categoryPageCategory' => $this->getEntity(Category::class, ['id' => $categoryId]),
                'type' => CategoryPageContentVariantType::TYPE,
                'node' => $node
            ]
        );
    }

    /**
     * @param array $categories
     * @param array $websiteIds
     */
    private function assertCategoriesReindexationScheduled(array $categories, array $websiteIds)
    {
        $arguments = [];
        foreach ($websiteIds as $websiteId) {
            $arguments[] = [$categories, $websiteId, true];
        }

        $this->indexScheduler->expects($this->exactly(count($websiteIds)))
            ->method('scheduleProductsReindex')
            ->withConsecutive(...$arguments);
    }
}
