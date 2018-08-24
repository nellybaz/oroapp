<?php

namespace Oro\Bundle\PricingBundle\Tests\Functional\Compiler;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\CatalogBundle\Tests\Functional\DataFixtures\LoadCategoryData;
use Oro\Bundle\CatalogBundle\Tests\Functional\DataFixtures\LoadCategoryProductData;
use Oro\Bundle\PricingBundle\Compiler\ProductAssignmentRuleCompiler;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\PriceListToProduct;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadPriceAttributeProductPrices;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadPriceLists;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadProductPrices;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductData;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

class ProductAssignmentRuleCompilerTest extends WebTestCase
{
    /**
     * @var ProductAssignmentRuleCompiler
     */
    protected $compiler;

    /**
     * @var ManagerRegistry
     */
    protected $registry;

    public function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);
        $this->loadFixtures(
            [
                LoadPriceAttributeProductPrices::class,
                LoadCategoryProductData::class,
                LoadProductPrices::class
            ]
        );

        $this->registry = $this->getContainer()->get('doctrine');
        $this->compiler = $this->getContainer()->get('oro_pricing.compiler.product_assignment_rule_compiler');
    }

    public function testCompileTwoProducts()
    {
        /** @var Product $product1 */
        $product1 = $this->getReference(LoadProductData::PRODUCT_1);
        /** @var Product $product2 */
        $product2 = $this->getReference(LoadProductData::PRODUCT_2);

        /** @var Category $category1 */
        $category1 = $this->getReference(LoadCategoryData::FIRST_LEVEL);
        /** @var Category $category2 */
        $category2 = $this->getReference(LoadCategoryData::SECOND_LEVEL1);

        $assignmentRule = sprintf(
            'product.category in [%s, %s] and (
                product.price_attribute_price_list_1.value > 1
                or product.price_attribute_price_list_2.currency == "USD"
            )',
            $category1->getId(),
            $category2->getId()
        );

        $priceList = $this->createPriceList($assignmentRule);
        $qb = $this->getQueryBuilder($priceList);

        $expected = [
            [$product1->getId(), $priceList->getId(), false],
            [$product2->getId(), $priceList->getId(), false],
        ];
        $actual = $this->getActualResult($qb);
        $this->assertEquals($expected, $actual);

        // Check that cache does not affect results
        $qb = $this->getQueryBuilder($priceList);
        $actual = $this->getActualResult($qb);
        $this->assertEquals($expected, $actual);
    }

    public function testCompileRestrictredByProduct()
    {
        /** @var Product $product1 */
        $product1 = $this->getReference(LoadProductData::PRODUCT_1);

        /** @var Category $category1 */
        $category1 = $this->getReference(LoadCategoryData::FIRST_LEVEL);
        /** @var Category $category2 */
        $category2 = $this->getReference(LoadCategoryData::SECOND_LEVEL1);

        $assignmentRule = sprintf(
            'product.category in [%s, %s] and (
                product.price_attribute_price_list_1.value > 1
                or product.price_attribute_price_list_2.currency == "USD"
            )',
            $category1->getId(),
            $category2->getId()
        );

        $priceList = $this->createPriceList($assignmentRule);
        $qb = $this->getQueryBuilder($priceList, $product1);

        $expected = [
            [$product1->getId(), $priceList->getId(), false],
        ];
        $actual = $this->getActualResult($qb);
        $this->assertEquals($expected, $actual);

        // Check that cache does not affect results
        $qb = $this->getQueryBuilder($priceList, $product1);
        $actual = $this->getActualResult($qb);
        $this->assertEquals($expected, $actual);
    }

    public function testCompileRuleBasedOnOtherPriseList()
    {
        $basePriceList = $this->createPriceList(
            sprintf('product.category == %s', $this->getReference(LoadCategoryData::FIRST_LEVEL)->getId())
        );

        $priceList = $this->createPriceList(
            sprintf(
                'pricelist[%s].productAssignmentRule or product.category == %s',
                $basePriceList->getId(),
                $this->getReference(LoadCategoryData::SECOND_LEVEL1)->getId()
            )
        );
        $qb = $this->getQueryBuilder($priceList);

        $expected = [
            [$this->getReference(LoadProductData::PRODUCT_1)->getId(), $priceList->getId(), false],
            [$this->getReference(LoadProductData::PRODUCT_2)->getId(), $priceList->getId(), false],
        ];
        $actual = $this->getActualResult($qb);
        $this->assertEquals($expected, $actual);

        // Check that cache does not affect results
        $qb = $this->getQueryBuilder($priceList);
        $actual = $this->getActualResult($qb);
        $this->assertEquals($expected, $actual);
    }

    public function testCompileRuleBasedOnOtherPriseListAssignedProducts()
    {
        $basePriceList = $this->getReference(LoadPriceLists::PRICE_LIST_6);
        $priceList = $this->createPriceList(
            sprintf('product.id in pricelist[%s].assignedProducts', $basePriceList->getId())
        );
        $qb = $this->getQueryBuilder($priceList);
        $expected = [
            [$this->getReference(LoadProductData::PRODUCT_2)->getId(), $priceList->getId(), false]
        ];
        $actual = $this->getActualResult($qb);
        $this->assertEquals($expected, $actual);

        // Check that cache does not affect results
        $qb = $this->getQueryBuilder($priceList);
        $actual = $this->getActualResult($qb);
        $this->assertEquals($expected, $actual);
    }

    public function testCompileWithManuallyAssigned()
    {
        /** @var Product $product1 */
        $product1 = $this->getReference(LoadProductData::PRODUCT_1);
        /** @var Product $product2 */
        $product2 = $this->getReference(LoadProductData::PRODUCT_2);

        /** @var Category $category1 */
        $category1 = $this->getReference(LoadCategoryData::FIRST_LEVEL);
        /** @var Category $category2 */
        $category2 = $this->getReference(LoadCategoryData::SECOND_LEVEL1);

        $assignmentRule = '(product.category == ' . $category1->getId()
            . ' or product.category == ' . $category2->getId() . ')'
            . " and (
                    product.price_attribute_price_list_1.value > 1
                    or product.price_attribute_price_list_2.currency == 'USD'
                )
            ";

        $priceList = $this->createPriceList($assignmentRule);

        $manualAssignment = new PriceListToProduct();
        $manualAssignment->setManual(true)
            ->setProduct($product2)
            ->setPriceList($priceList);
        $em = $this->registry->getManagerForClass(PriceListToProduct::class);
        $em->persist($manualAssignment);
        $em->flush();

        $qb = $this->getQueryBuilder($priceList);
        $expected = [
            [$product1->getId(), $priceList->getId(), false],
        ];
        $actual = $this->getActualResult($qb);
        $this->assertEquals($expected, array_values($actual));
    }

    public function testCompileJoinCategory()
    {
        /** @var Product $product1 */
        $product1 = $this->getReference(LoadProductData::PRODUCT_1);
        /** @var Category $category1 */
        $category1 = $this->getReference(LoadCategoryData::FIRST_LEVEL);

        $assignmentRule = sprintf('product.category.id == %d', $category1->getId());

        $priceList = $this->createPriceList($assignmentRule);
        $qb = $this->getQueryBuilder($priceList);

        $this->assertContains(
            'FROM Oro\Bundle\ProductBundle\Entity\Product t1'
            . ' LEFT JOIN t1.category t2'
            . ' WHERE',
            $qb->getDQL()
        );
        $this->assertNotContains(
            'FROM Oro\Bundle\ProductBundle\Entity\Product t1'
            . ' LEFT JOIN Oro\Bundle\CatalogBundle\Entity\Category t2 WITH t1 MEMBER OF t2.products'
            . ' WHERE',
            $qb->getDQL()
        );
    }

    /**
     * @param string $assignmentRule
     * @return PriceList
     */
    protected function createPriceList($assignmentRule)
    {
        $priceList = new PriceList();
        $priceList->setActive(true)
            ->setCurrencies(['USD', 'EUR'])
            ->setName('Test Assignment Rules Price List')
            ->setProductAssignmentRule($assignmentRule);
        $em = $this->registry->getManagerForClass(PriceList::class);
        $em->persist($priceList);
        $em->flush();

        return $priceList;
    }

    /**
     * @param PriceList $priceList
     * @param Product|null $product
     * @return QueryBuilder
     */
    protected function getQueryBuilder(PriceList $priceList, Product $product = null)
    {
        $qb = $this->compiler->compile($priceList, $product ? [$product] : []);
        $aliases = $qb->getRootAliases();
        $rootAlias = reset($aliases);
        $qb->orderBy($rootAlias . '.id');

        return $qb;
    }

    /**
     * @param QueryBuilder $qb
     * @return array
     */
    protected function getActualResult(QueryBuilder $qb)
    {
        $actual = $qb->getQuery()->getArrayResult();
        $actual = array_map(
            function (array $value) {
                return array_map(
                    function ($val) {
                        if (is_numeric($val)) {
                            $val = (int)$val;
                        }
                        return $val;
                    },
                    array_values($value)
                );
            },
            $actual
        );

        return $actual;
    }
}
