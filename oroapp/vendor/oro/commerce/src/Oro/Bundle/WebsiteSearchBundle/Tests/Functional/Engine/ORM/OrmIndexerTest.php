<?php

namespace Oro\Bundle\WebsiteSearchBundle\Tests\Functional\Engine\ORM;

use Doctrine\ORM\EntityRepository;

use Oro\Bundle\EntityBundle\ORM\Registry;
use Oro\Bundle\TestFrameworkBundle\Entity\TestDepartment;
use Oro\Bundle\TestFrameworkBundle\Entity\TestEmployee;
use Oro\Bundle\TestFrameworkBundle\Entity\TestProduct;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\WebsiteBundle\Entity\Repository\WebsiteRepository;
use Oro\Bundle\WebsiteBundle\Entity\Website;
use Oro\Bundle\WebsiteBundle\Provider\WebsiteProvider;
use Oro\Bundle\WebsiteSearchBundle\Engine\AbstractIndexer;
use Oro\Bundle\WebsiteSearchBundle\Engine\IndexerInputValidator;
use Oro\Bundle\WebsiteSearchBundle\Engine\ORM\OrmIndexer;
use Oro\Bundle\WebsiteSearchBundle\Entity\IndexDatetime;
use Oro\Bundle\WebsiteSearchBundle\Entity\IndexDecimal;
use Oro\Bundle\WebsiteSearchBundle\Entity\IndexInteger;
use Oro\Bundle\WebsiteSearchBundle\Entity\IndexText;
use Oro\Bundle\WebsiteSearchBundle\Entity\Item;
use Oro\Bundle\WebsiteSearchBundle\Provider\WebsiteSearchMappingProvider;
use Oro\Bundle\WebsiteSearchBundle\Tests\Functional\AbstractSearchWebTestCase;
use Oro\Bundle\WebsiteSearchBundle\Tests\Functional\DataFixtures\LoadItemData;
use Oro\Bundle\WebsiteSearchBundle\Tests\Functional\DataFixtures\LoadProductsToIndex;

/**
 * @dbIsolationPerTest
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class OrmIndexerTest extends AbstractSearchWebTestCase
{
    /**
     * @var OrmIndexer
     */
    protected $indexer;

    /**
     * @var Registry
     */
    protected $doctrine;

    public static function checkSearchEngine(WebTestCase $webTestCase)
    {
        if ($webTestCase->getContainer()->getParameter('oro_website_search.engine') !== 'orm') {
            $webTestCase->markTestSkipped('Should be tested only with ORM engine');
        }
    }

    protected function preSetUp()
    {
        $this->checkEngine();
    }

    protected function preTearDown()
    {
        $this->checkEngine();
    }

    protected function checkEngine()
    {
        self::checkSearchEngine($this);
    }

    /**
     * {@inheritdoc}
     */
    protected function getResultItems(array $options)
    {
        return $this->getRepository(Item::class)->findBy(['alias' => $options['alias']]);
    }

    protected function setUp()
    {
        parent::setUp();

        $this->mappingProviderMock = $this->getMockBuilder(WebsiteSearchMappingProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        /** @var WebsiteRepository $repo */
        $repo = $this->getContainer()->get('oro_entity.doctrine_helper')->getEntityRepository(Website::class);
        $websiteProvider = $this->createMock(WebsiteProvider::class);
        $websiteProvider->expects($this->any())
            ->method('getWebsiteIds')
            ->will($this->returnCallback(function () use ($repo) {
                return $repo->getWebsiteIdentifiers();
            }));

        $inputValidator = new IndexerInputValidator(
            $this->doctrineHelper,
            $this->mappingProviderMock
        );
        $inputValidator->setWebsiteProvider($websiteProvider);

        $this->indexer = new OrmIndexer(
            $this->doctrineHelper,
            $this->mappingProviderMock,
            $this->getContainer()->get('oro_website_search.engine.entity_dependencies_resolver'),
            $this->getContainer()->get('oro_website_search.engine.text_filtered_index_data'),
            $this->getContainer()->get('oro_website_search.placeholder_decorator'),
            $inputValidator
        );

        $this->indexer->setDriver($this->getContainer()->get('oro_website_search.engine.orm.driver'));
        $this->doctrine = $this->getContainer()->get('doctrine');
    }

    protected function tearDown()
    {
        $this->clearIndexTextTable(IndexText::class);
    }

    /**
     * {@inheritdoc}
     */
    protected function assertItemsCount($expectedCount)
    {
        $this->assertEntityCount($expectedCount, Item::class);
    }

    /**
     * @param int $expectedCount
     * @param string $class
     */
    private function assertEntityCount($expectedCount, $class)
    {
        $repository = $this->getRepository($class);
        $actualCount = $this->makeCountQuery($repository);

        $this->assertEquals($expectedCount, $actualCount);
    }

    /**
     * @param EntityRepository $repository
     * @return mixed
     */
    private function makeCountQuery(EntityRepository $repository)
    {
        return $repository->createQueryBuilder('t')
            ->select('COUNT(t)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * @param string $entity
     * @return EntityRepository
     */
    protected function getRepository($entity)
    {
        return $this->doctrine->getRepository($entity, 'search');
    }

    public function testResetIndexOfCertainClass()
    {
        $this->loadFixtures([LoadItemData::class]);
        $this->indexer->resetIndex(TestProduct::class);

        $this->assertItemsCount(4);
        $this->assertEntityCount(0, IndexInteger::class);
        $this->assertEntityCount(4, IndexText::class);
        $this->assertEntityCount(0, IndexDatetime::class);
        $this->assertEntityCount(0, IndexDecimal::class);
    }

    public function testDeleteWhenNonExistentEntityRemoved()
    {
        $this->loadFixtures([LoadItemData::class]);
        $this->setClassSupportedExpectation(TestDepartment::class, false);
        $testEntity = new TestDepartment();
        $testEntity->setId(123456);

        $this->indexer->delete($testEntity, [
            AbstractIndexer::CONTEXT_CURRENT_WEBSITE_ID_KEY => $this->getDefaultWebsiteId()
        ]);

        $this->assertItemsCount(8);
        $this->assertEntityCount(6, IndexInteger::class);
        $this->assertEntityCount(6, IndexText::class);
        $this->assertEntityCount(2, IndexDatetime::class);
        $this->assertEntityCount(2, IndexDecimal::class);
    }

    public function testDeleteWhenEntityIdsArrayIsEmpty()
    {
        $this->loadFixtures([LoadItemData::class]);
        $this->mappingProviderMock
            ->expects($this->never())
            ->method('getEntityAlias');

        $this->indexer->delete([], [AbstractIndexer::CONTEXT_CURRENT_WEBSITE_ID_KEY => $this->getDefaultWebsiteId()]);

        $this->assertItemsCount(8);
        $this->assertEntityCount(6, IndexInteger::class);
        $this->assertEntityCount(6, IndexText::class);
        $this->assertEntityCount(2, IndexDatetime::class);
        $this->assertEntityCount(2, IndexDecimal::class);
    }

    public function testDeleteWhenProductEntitiesForSpecificWebsiteRemoved()
    {
        $this->loadFixtures([LoadItemData::class]);
        $this->mappingProviderMock
            ->expects($this->any())
            ->method('isClassSupported')
            ->with(TestProduct::class)
            ->willReturn(true);
        $this->setEntityAliasExpectation();

        $product1 = $this->getReference(LoadProductsToIndex::REFERENCE_PRODUCT1);
        $product2 = $this->getReference(LoadProductsToIndex::REFERENCE_PRODUCT2);
        $this->assertItemsCount(8);

        $this->indexer->delete(
            [
                $product1,
                $product2,
            ],
            [AbstractIndexer::CONTEXT_CURRENT_WEBSITE_ID_KEY => $this->getDefaultWebsiteId()]
        );

        $this->assertItemsCount(6);
        $this->assertEntityCount(3, IndexInteger::class);
        $this->assertEntityCount(5, IndexText::class);
        $this->assertEntityCount(1, IndexDatetime::class);
        $this->assertEntityCount(1, IndexDecimal::class);
    }

    public function testDeleteWhenProductEntitiesForSpecificWebsiteRemovedWithABatch()
    {
        $this->loadFixtures([LoadItemData::class]);
        $this->mappingProviderMock
            ->expects($this->any())
            ->method('isClassSupported')
            ->with(TestProduct::class)
            ->willReturn(true);
        $this->setEntityAliasExpectation();

        $product1 = $this->getReference(LoadProductsToIndex::REFERENCE_PRODUCT1);
        $product2 = $this->getReference(LoadProductsToIndex::REFERENCE_PRODUCT2);
        $this->assertItemsCount(8);
        $this->indexer->setBatchSize(1);
        $this->indexer->delete(
            [
                $product1,
                $product2,
            ],
            [AbstractIndexer::CONTEXT_CURRENT_WEBSITE_ID_KEY => $this->getDefaultWebsiteId()]
        );

        $this->assertItemsCount(6);
        $this->assertEntityCount(3, IndexInteger::class);
        $this->assertEntityCount(5, IndexText::class);
        $this->assertEntityCount(1, IndexDatetime::class);
        $this->assertEntityCount(1, IndexDecimal::class);
    }

    public function testDeleteForSpecificWebsiteAndEntitiesWithoutMappingConfigurationOrNotManageable()
    {
        $this->loadFixtures([LoadItemData::class]);

        $this->mappingProviderMock
            ->expects($this->exactly(3))
            ->method('isClassSupported')
            ->withConsecutive([TestProduct::class], [TestProduct::class], [TestDepartment::class])
            ->willReturnOnConsecutiveCalls(true, true, false);

        $this->setEntityAliasExpectation();

        $product1 = $this->getReference(LoadProductsToIndex::REFERENCE_PRODUCT1);
        $product2 = $this->getReference(LoadProductsToIndex::REFERENCE_PRODUCT2);

        $this->indexer->delete(
            [
                $product1,
                $product2,
                new \stdClass(),
                new \stdClass(),
                new TestDepartment()
            ],
            [AbstractIndexer::CONTEXT_CURRENT_WEBSITE_ID_KEY => $this->getDefaultWebsiteId()]
        );

        $this->assertItemsCount(6);
        $this->assertEntityCount(3, IndexInteger::class);
        $this->assertEntityCount(5, IndexText::class);
        $this->assertEntityCount(1, IndexDatetime::class);
        $this->assertEntityCount(1, IndexDecimal::class);
    }

    public function testDeleteWhenProductEntitiesForAllWebsitesRemoved()
    {
        $this->loadFixtures([LoadItemData::class]);
        $this->mappingProviderMock
            ->expects($this->any())
            ->method('isClassSupported')
            ->with(TestProduct::class)
            ->willReturn(true);

        $this->mappingProviderMock
            ->expects($this->never())
            ->method('getEntityAlias');

        $product1 = $this->getReference(LoadProductsToIndex::REFERENCE_PRODUCT1);
        $product2 = $this->getReference(LoadProductsToIndex::REFERENCE_PRODUCT2);

        $this->indexer->delete(
            [
                $product1,
                $product2,
            ],
            []
        );

        $this->assertItemsCount(4);
        $this->assertEntityCount(0, IndexInteger::class);
        $this->assertEntityCount(4, IndexText::class);
        $this->assertEntityCount(0, IndexDatetime::class);
        $this->assertEntityCount(0, IndexDecimal::class);
    }

    public function testResetWholeIndex()
    {
        $this->loadFixtures([LoadItemData::class]);

        $this->indexer->resetIndex();

        $this->assertItemsCount(0);
        $this->assertEntityCount(0, IndexInteger::class);
        $this->assertEntityCount(0, IndexText::class);
        $this->assertEntityCount(0, IndexDatetime::class);
        $this->assertEntityCount(0, IndexDecimal::class);
    }

    public function testReindexForDeletedEntity()
    {
        $this->loadFixtures([LoadProductsToIndex::class]);
        $this->mappingProviderMock
            ->expects($this->exactly(6))
            ->method('isClassSupported')
            ->with(TestProduct::class)
            ->willReturn(true);

        $this->setEntityAliasExpectation();
        $this->setGetEntityConfigExpectation();
        $this->setListener();
        $this->indexer->reindex(TestProduct::class);
        $removedProduct = $this->getReference(LoadProductsToIndex::REFERENCE_PRODUCT1);
        $removedProductId = $removedProduct->getId();
        $em = $this->doctrineHelper->getEntityManager(TestProduct::class);
        $em->remove($removedProduct);
        $em->flush();
        $this->indexer->reindex(
            TestProduct::class,
            [
                AbstractIndexer::CONTEXT_WEBSITE_IDS => [$this->getDefaultWebsiteId()],
                AbstractIndexer::CONTEXT_ENTITIES_IDS_KEY => [
                    $removedProductId,
                    $this->getReference(LoadProductsToIndex::REFERENCE_PRODUCT2)->getId()
                ]
            ]
        );
        $this->assertItemsCount(1);
    }

    public function testResetIndexForCertainWebsite()
    {
        $this->loadFixtures([LoadItemData::class]);

        $this->mappingProviderMock
            ->expects($this->exactly(1))
            ->method('getEntityClasses')
            ->willReturn([TestProduct::class, TestEmployee::class]);

        $this->setEntityAliasExpectation();

        $context = [AbstractIndexer::CONTEXT_CURRENT_WEBSITE_ID_KEY => $this->getDefaultWebsiteId()];
        $this->assertItemsCount(8);
        $this->indexer->resetIndex(null, $context);
        $this->assertItemsCount(4);
    }

    public function testReindexForNotExistingWebsite()
    {
        $this->loadFixtures([LoadProductsToIndex::class]);
        $this->setClassSupportedExpectation(TestProduct::class, true);
        $this->setEntityAliasExpectation();
        $this->setGetEntityConfigExpectation();
        $this->setListener();

        $this->mappingProviderMock
            ->expects($this->exactly(1))
            ->method('getEntityClasses')
            ->willReturn([TestProduct::class]);

        $notExistingId = 77777;
        $this->indexer->reindex(
            TestProduct::class,
            [
                AbstractIndexer::CONTEXT_WEBSITE_IDS => [$notExistingId]
            ]
        );

        $items = $this->getResultItems(['alias' => 'oro_product_'.  $notExistingId]);

        $this->assertCount(0, $items);
    }
}
