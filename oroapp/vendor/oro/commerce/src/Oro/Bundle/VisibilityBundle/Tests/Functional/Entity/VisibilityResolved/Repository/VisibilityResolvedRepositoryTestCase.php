<?php

namespace Oro\Bundle\VisibilityBundle\Tests\Functional\Entity\VisibilityResolved\Repository;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\EntityBundle\ORM\InsertFromSelectQueryExecutor;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ScopeBundle\Entity\Scope;
use Oro\Bundle\ScopeBundle\Manager\ScopeManager;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\VisibilityBundle\Entity\Visibility\CustomerProductVisibility;
use Oro\Bundle\VisibilityBundle\Entity\Visibility\VisibilityInterface;
use Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\CustomerProductVisibilityResolved;
use Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\BaseProductVisibilityResolved;
use Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\Repository\AbstractVisibilityRepository;
use Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\Repository\CustomerGroupProductRepository;
use Oro\Bundle\VisibilityBundle\Tests\Functional\DataFixtures\LoadProductVisibilityData;
use Oro\Bundle\VisibilityBundle\Tests\Functional\Entity\ResolvedEntityRepositoryTestTrait;

abstract class VisibilityResolvedRepositoryTestCase extends WebTestCase
{
    use ResolvedEntityRepositoryTestTrait;

    /**
     * @var  Registry
     */
    protected $registry;

    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @var ScopeManager
     */
    protected $scopeManager;

    protected function setUp()
    {
        $this->initClient();
        $this->client->useHashNavigation(true);
        $this->registry = $this->getContainer()->get('doctrine');
        $this->entityManager = $this->registry->getManager();
        $this->scopeManager = $this->getContainer()->get('oro_scope.scope_manager');

        $this->loadFixtures(
            [
                LoadProductVisibilityData::class,
            ]
        );
    }

    protected function tearDown()
    {
        $this->registry->getManager()->clear();
        parent::tearDown();
    }

    public function testClearTable()
    {
        $countQuery = $this->getRepository()
            ->createQueryBuilder('entity')
            ->select('COUNT(entity.visibility)')
            ->getQuery();

        $this->getRepository()->clearTable();

        $this->assertEquals(0, $countQuery->getSingleScalarResult());
    }

    /**
     * @dataProvider insertByCategoryDataProvider
     *
     * @param string $targetEntityReference
     * @param string $visibility
     * @param array $expectedData
     */
    public function testInsertByCategory($targetEntityReference, $visibility, array $expectedData)
    {
        $this->getRepository()->clearTable();
        $scope = $this->getScope($targetEntityReference);
        /** @var CustomerGroupProductRepository $repository */
        $repository = $this->getRepository();
        $repository->insertByCategory($this->getInsertFromSelectExecutor(), $this->scopeManager, $scope);
        $resolvedEntities = $this->getResolvedValues();
        $this->assertCount(count($expectedData), $resolvedEntities);
        foreach ($expectedData as $data) {
            /** @var Product $product */
            $product = $this->getReference($data['product']);

            $resolvedVisibility = $this->getResolvedVisibility($resolvedEntities, $product, $scope);
            $this->assertEquals($this->getCategory($product)->getId(), $resolvedVisibility->getCategory()->getId());
            $this->assertEquals($visibility, $resolvedVisibility->getVisibility());
        }
    }

    /**
     * @param string $targetEntityReference
     * @return Scope
     */
    abstract public function getScope($targetEntityReference);

    /**
     * @dataProvider insertStaticDataProvider
     * @param int $expectedRows
     */
    public function testInsertStatic($expectedRows)
    {
        /** @var CustomerGroupProductRepository $repository */
        $repository = $this->getRepository();
        $repository->clearTable();
        $repository->insertStatic($this->getInsertFromSelectExecutor());
        $resolved = $this->getResolvedValues();
        $this->assertCount($expectedRows, $resolved);
        $visibilities = $this->getSourceRepository()->findAll();
        foreach ($resolved as $resolvedValue) {
            $source = $this->getSourceVisibilityByResolved(
                $visibilities,
                $resolvedValue
            );
            $this->assertNotNull($source);
            if ($resolvedValue->getVisibility() == BaseProductVisibilityResolved::VISIBILITY_HIDDEN) {
                $visibility = VisibilityInterface::HIDDEN;
            } elseif ($resolvedValue->getVisibility()
                == CustomerProductVisibilityResolved::VISIBILITY_FALLBACK_TO_ALL
            ) {
                $visibility = CustomerProductVisibility::CURRENT_PRODUCT;
            } else {
                $visibility = VisibilityInterface::VISIBLE;
            }
            $this->assertEquals(
                $source->getVisibility(),
                $visibility
            );
        }
    }

    public function testFindByPrimaryKey()
    {
        /** @var BaseProductVisibilityResolved $actualEntity */
        $actualEntity = $this->getRepository()->findOneBy([]);
        if (!$actualEntity) {
            $this->markTestSkipped('Can\'t test method because fixture was not loaded.');
        }

        $this->assertEquals(spl_object_hash($this->findByPrimaryKey($actualEntity)), spl_object_hash($actualEntity));
    }

    /**
     * @param Product $product
     * @return null|Category
     */
    protected function getCategory(Product $product)
    {
        return $this->registry
            ->getRepository('OroCatalogBundle:Category')
            ->findOneByProduct($product);
    }

    /**
     * @return InsertFromSelectQueryExecutor
     */
    protected function getInsertFromSelectExecutor()
    {
        return $this->getContainer()
            ->get('oro_entity.orm.insert_from_select_query_executor');
    }

    /**
     * @param BaseProductVisibilityResolved $visibilityResolved
     * @return BaseProductVisibilityResolved
     */
    abstract public function findByPrimaryKey($visibilityResolved);

    /**
     * @return array
     */
    abstract public function insertByCategoryDataProvider();

    /**
     * @return array
     */
    abstract public function insertStaticDataProvider();

    /**
     * @return AbstractVisibilityRepository
     */
    abstract protected function getRepository();

    /**
     * @return EntityRepository
     */
    abstract protected function getSourceRepository();

    /**
     * @return BaseProductVisibilityResolved[]
     */
    abstract protected function getResolvedValues();

    /**
     * @param BaseProductVisibilityResolved[] $visibilities
     * @param Product $product
     * @param Scope $scope
     *
     * @return BaseProductVisibilityResolved|null
     */
    abstract protected function getResolvedVisibility($visibilities, Product $product, Scope $scope);

    /**
     * @param VisibilityInterface[]|null $sourceVisibilities
     * @param BaseProductVisibilityResolved $resolveVisibility
     * @return VisibilityInterface|null
     */
    abstract protected function getSourceVisibilityByResolved($sourceVisibilities, $resolveVisibility);
}
