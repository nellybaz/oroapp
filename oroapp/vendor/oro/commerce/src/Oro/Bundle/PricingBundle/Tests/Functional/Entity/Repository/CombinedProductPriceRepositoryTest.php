<?php

namespace Oro\Bundle\PricingBundle\Tests\Functional\Entity\Repository;

use Oro\Bundle\PricingBundle\Entity\CombinedPriceList;
use Oro\Bundle\PricingBundle\Entity\CombinedProductPrice;
use Oro\Bundle\PricingBundle\Entity\Repository\CombinedPriceListToPriceListRepository;
use Oro\Bundle\PricingBundle\Entity\Repository\CombinedProductPriceRepository;
use Oro\Bundle\PricingBundle\ORM\InsertFromSelectShardQueryExecutor;
use Oro\Bundle\PricingBundle\Sharding\ShardManager;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadCombinedPriceLists;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadCombinedProductPrices;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadProductPrices;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductData;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductUnits;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\WebsiteBundle\Tests\Functional\DataFixtures\LoadWebsiteData;

/**
 * @dbIsolationPerTest
 */
class CombinedProductPriceRepositoryTest extends WebTestCase
{
    /**
     * @var ShardManager
     */
    protected $shardManager;

    /**
     * @var InsertFromSelectShardQueryExecutor
     */
    protected $insertFromSelectQueryExecutor;

    protected function setUp()
    {
        $this->initClient();
        $this->loadFixtures(
            [
                LoadCombinedPriceLists::class,
                LoadProductPrices::class,
                LoadCombinedProductPrices::class,
            ]
        );
        $this->insertFromSelectQueryExecutor = $this->getContainer()
            ->get('oro_pricing.orm.multi_insert_shard_query_executor');
        $this->shardManager = $this->getContainer()->get('oro_pricing.shard_manager');
    }

    /**
     * @dataProvider insertPricesByPriceListDataProvider
     * @param string $combinedPriceList
     * @param string $product
     * @param boolean $expectedExists
     */
    public function testInsertPricesByPriceList($combinedPriceList, $product, $expectedExists)
    {
        /**
         * @var CombinedPriceList $combinedPriceList
         */
        $combinedPriceList = $this->getReference($combinedPriceList);
        /** @var Product $product */
        $product = $this->getReference($product);

        $repository = $this->getCombinedPriceListToPriceListRepository();
        $combinedPriceListRelations = $repository->getPriceListRelations($combinedPriceList, [$product]);

        $combinedProductPriceRepository = $this->getCombinedProductPriceRepository();

        $combinedProductPriceRepository->deleteCombinedPrices($combinedPriceList, [$product]);
        $prices = $combinedProductPriceRepository->findBy(
            [
                'priceList' => $combinedPriceList,
                'product' => $product,
            ]
        );
        $this->assertEmpty($prices);
        foreach ($combinedPriceListRelations as $combinedPriceListRelation) {
            $combinedProductPriceRepository->insertPricesByPriceList(
                $this->insertFromSelectQueryExecutor,
                $combinedPriceList,
                $combinedPriceListRelation->getPriceList(),
                $combinedPriceListRelation->isMergeAllowed(),
                [$product]
            );
        }
        $prices = $combinedProductPriceRepository->findBy(
            [
                'priceList' => $combinedPriceList,
                'product' => $product,
            ]
        );
        if ($expectedExists) {
            $this->assertNotEmpty($prices);
        } else {
            $this->assertEmpty($prices);
        }
    }

    /**
     * @return array
     */
    public function insertPricesByPriceListDataProvider()
    {
        return [
            'test getting price lists 1' => [
                'combinedPriceList' => '1t_2t_3t',
                'product' => 'product-1',
                'expectedExists' => true,
            ],
            'test getting price lists 2' => [
                'combinedPriceList' => '1t_2t_3t',
                'product' => 'product-2',
                'expectedExists' => true,
            ],
            'test getting price lists 3' => [
                'combinedPriceList' => '2t_3f_1t',
                'product' => 'product-7',
                'expectedExists' => false,
            ],
        ];
    }

    /**
     * @depends      testInsertPricesByPriceList
     * @dataProvider getPricesForProductsByPriceListDataProvider
     * @param string $priceList
     * @param array $products
     * @param string|null $currency
     */
    public function testGetPricesForProductsByPriceList($priceList, array $products, $currency = null)
    {
        /**
         * @var CombinedPriceList $priceList
         */
        $priceList = $this->getReference($priceList);
        $productIds = array_map(
            function ($product) {
                return $this->getReference($product)->getId();
            },
            $products
        );

        $expected = [];
        foreach ($products as $product) {
            $searchConditions = [
                'priceList' => $priceList,
                'product' => $this->getReference($product),
            ];
            if ($currency) {
                $searchConditions['currency'] = $currency;
            }
            $expected = array_merge(
                $expected,
                $this->getCombinedProductPriceRepository()->findBy($searchConditions)
            );
        }

        $result = $this->getCombinedProductPriceRepository()
            ->getPricesForProductsByPriceList($priceList, $productIds, $currency);

        $this->assertCount(count($expected), $result);
        foreach ($expected as $price) {
            $this->assertContains($price, $result);
        }
    }

    /**
     * @return array
     */
    public function getPricesForProductsByPriceListDataProvider()
    {
        return [
            [
                'combinedPriceList' => '1t_2t_3t',
                'products' => ['product-1'],
                'currency' => 'USD',
            ],
            [
                'combinedPriceList' => '1t_2t_3t',
                'products' => ['product-2'],
            ],
            [
                'combinedPriceList' => '1t_2t_3t',
                'products' => ['product-1', 'product-2'],
            ],
        ];
    }

    /**
     * @return CombinedProductPriceRepository
     */
    protected function getCombinedProductPriceRepository()
    {
        return $this->getContainer()->get('doctrine')
            ->getRepository('OroPricingBundle:CombinedProductPrice');
    }

    /**
     * @return CombinedPriceListToPriceListRepository
     */
    protected function getCombinedPriceListToPriceListRepository()
    {
        return $this->getContainer()->get('doctrine')
            ->getRepository('OroPricingBundle:CombinedPriceListToPriceList');
    }

    public function testFindMinByWebsiteForFilter()
    {
        $website = $this->getReference(LoadWebsiteData::WEBSITE1);
        $product1 = $this->getReference(LoadProductData::PRODUCT_1);
        $actual = $this->getCombinedProductPriceRepository()
            ->findMinByWebsiteForFilter(
                $website->getId(),
                [$product1],
                $this->getReference('1f')->getId()
            );
        $expected = [
            [
                'product' => (string)$product1->getId(),
                'value' => '1.1000',
                'currency' => 'USD',
                'unit' => 'bottle',
                'cpl' => $this->getReference('1t_2t_3t')->getId(),
            ],
            [
                'product' => (string)$product1->getId(),
                'value' => '1.2000',
                'currency' => 'USD',
                'unit' => 'liter',
                'cpl' => $this->getReference('1t_2t_3t')->getId(),
            ],
            [
                'product' => (string)$product1->getId(),
                'value' => '12.2000',
                'currency' => 'EUR',
                'unit' => 'bottle',
                'cpl' => $this->getReference('1f')->getId(),
            ],
            [
                'product' => (string)$product1->getId(),
                'value' => '13.1000',
                'currency' => 'USD',
                'unit' => 'bottle',
                'cpl' => $this->getReference('1f')->getId(),
            ],
            [
                'product' => (string)$product1->getId(),
                'value' => '10.0000',
                'currency' => 'USD',
                'unit' => 'liter',
                'cpl' => $this->getReference('1f')->getId(),
            ],
            [
                'product' => (string)$product1->getId(),
                'value' => '0.0000',
                'currency' => 'USD',
                'unit' => 'milliliter',
                'cpl' => $this->getReference('1f')->getId(),
            ],
        ];
        usort($expected, [$this, 'sort']);
        usort($actual, [$this, 'sort']);

        $this->assertEquals($expected, $actual);
    }

    public function testFindMinByWebsiteForSort()
    {
        $website = $this->getReference(LoadWebsiteData::WEBSITE1);
        $product1 = $this->getReference(LoadProductData::PRODUCT_1);
        $actual = $this->getCombinedProductPriceRepository()
            ->findMinByWebsiteForSort(
                $website->getId(),
                [$product1],
                $this->getReference('1f')->getId()
            );
        $expected = [
            [
                'product' => (string)$product1->getId(),
                'value' => '1.1000',
                'currency' => 'USD',
                'cpl' => $this->getReference('1t_2t_3t')->getId(),
            ],
            [
                'product' => (string)$product1->getId(),
                'value' => '12.2000',
                'currency' => 'EUR',
                'cpl' => $this->getReference('1f')->getId(),
            ],
            [
                'product' => (string)$product1->getId(),
                'value' => '0.0000',
                'currency' => 'USD',
                'cpl' => $this->getReference('1f')->getId(),
            ],
        ];
        usort($expected, [$this, 'sort']);
        usort($actual, [$this, 'sort']);

        $this->assertEquals($expected, $actual);
    }


    /**
     * @dataProvider insertMinimalPricesByPriceListDataProvider
     * @param string $combinedPriceList
     * @param string $product
     * @param array $expectedPrices
     */
    public function testInsertMinimalPricesByPriceList($combinedPriceList, $product, array $expectedPrices)
    {
        /** @var CombinedPriceList $combinedPriceList */
        $combinedPriceList = $this->getReference($combinedPriceList);
        /** @var Product $product */
        $product = $this->getReference($product);

        $repository = $this->getCombinedPriceListToPriceListRepository();
        $combinedPriceListRelations = $repository->getPriceListRelations($combinedPriceList, [$product]);

        $combinedProductPriceRepository = $this->getCombinedProductPriceRepository();

        $combinedProductPriceRepository->deleteCombinedPrices($combinedPriceList, [$product]);
        $prices = $combinedProductPriceRepository->findBy(
            [
                'priceList' => $combinedPriceList,
                'product' => $product,
            ]
        );
        $this->assertEmpty($prices);
        foreach ($combinedPriceListRelations as $combinedPriceListRelation) {
            $combinedProductPriceRepository->insertMinimalPricesByPriceList(
                $this->shardManager,
                $this->insertFromSelectQueryExecutor,
                $combinedPriceList,
                $combinedPriceListRelation->getPriceList(),
                [$product]
            );
        }
        $prices = $combinedProductPriceRepository->createQueryBuilder('prices')
            ->select('prices.productSku, prices.quantity, prices.value, prices.currency, IDENTITY(prices.unit) as unit')
            ->where('prices.priceList = :priceList AND prices.product = :product')
            ->setParameters(['priceList' => $combinedPriceList, 'product' => $product])
            ->orderBy('prices.currency, prices.quantity, prices.value')
            ->getQuery()
            ->getArrayResult();
        $this->assertEquals($expectedPrices, $prices);
    }

    public function testDeleteByProductUnit()
    {
        /** @var Product $product1 */
        $product = $this->getReference(LoadProductData::PRODUCT_1);
        $productUnit = $this->getReference(LoadProductUnits::LITER);

        $repo = $this->getContainer()
            ->get('doctrine')
            ->getRepository(CombinedProductPrice::class);

        $result = $repo->findBy(['product' => $product, 'unit' => $productUnit]);
        $this->assertCount(6, $result);

        $shardManager = $this->getContainer()->get('oro_pricing.shard_manager');
        $repo->deleteByProductUnit($shardManager, $product, $productUnit);

        $result = $repo->findBy(['product' => $product, 'unit' => $productUnit]);
        $this->assertCount(0, $result);
    }

    /**
     * @return array
     */
    public function insertMinimalPricesByPriceListDataProvider()
    {
        return [
            'test getting price lists 1' => [
                'combinedPriceList' => '1t_2t_3t',
                'product' => 'product-1',
                'prices' => [
                    [
                        'productSku' => 'product-1',
                        'quantity' => 1.0,
                        'value' => '12.2000',
                        'currency' => 'EUR',
                        'unit' => 'bottle',
                    ],
                    [
                        'productSku' => 'product-1',
                        'quantity' => 11.0,
                        'value' => '12.2000',
                        'currency' => 'EUR',
                        'unit' => 'bottle',
                    ],
                    [
                        'productSku' => 'product-1',
                        'quantity' => 1.0,
                        'value' => '10.0000',
                        'currency' => 'USD',
                        'unit' => 'liter',
                    ],
                    [
                        'productSku' => 'product-1',
                        'quantity' => 10.0,
                        'value' => '12.2000',
                        'currency' => 'USD',
                        'unit' => 'liter',
                    ],
                    [
                        'productSku' => 'product-1',
                        'quantity' => 15.0,
                        'value' => '12.2000',
                        'currency' => 'USD',
                        'unit' => 'liter',
                    ],
                ],
            ],
            'test getting price lists 2' => [
                'combinedPriceList' => '1t_2t_3t',
                'product' => 'product-2',
                'prices' => [
                    [
                        'productSku' => 'product-2',
                        'quantity' => 14.0,
                        'value' => '16.5000',
                        'currency' => 'EUR',
                        'unit' => 'liter',
                    ],
                    [
                        'productSku' => 'product-2',
                        'quantity' => 24.0,
                        'value' => '16.5000',
                        'currency' => 'EUR',
                        'unit' => 'bottle',
                    ],
                    [
                        'productSku' => 'product-2',
                        'quantity' => 1.0,
                        'value' => '20.0000',
                        'currency' => 'USD',
                        'unit' => 'liter',
                    ],
                    [
                        'productSku' => 'product-2',
                        'quantity' => 12.0,
                        'value' => '12.2000',
                        'currency' => 'USD',
                        'unit' => 'liter',
                    ],
                    [
                        'productSku' => 'product-2',
                        'quantity' => 13.0,
                        'value' => '12.2000',
                        'currency' => 'USD',
                        'unit' => 'liter',
                    ],
                    [
                        'productSku' => 'product-2',
                        'quantity' => 14.0,
                        'value' => '12.2000',
                        'currency' => 'USD',
                        'unit' => 'bottle',
                    ],
                ],
            ],
            'test getting price lists 3' => [
                'combinedPriceList' => '2t_3f_1t',
                'product' => 'product-7',
                'prices' => [],
            ],
        ];
    }

    public function testInsertPricesByCombinedPriceList()
    {
        $combinedPriceList = $this->getReference('1t_2t_3t');
        $sourceCpl = $this->getReference('2t_3t');
        $product = $this->getReference('product-1');

        /** @var CombinedProductPriceRepository $repo */
        $repo = $this->getContainer()
            ->get('doctrine')
            ->getRepository(CombinedProductPrice::class);

        $repo->insertPricesByCombinedPriceList(
            $this->insertFromSelectQueryExecutor,
            $combinedPriceList,
            $sourceCpl
        );

        $prices = $repo->createQueryBuilder('prices')
            ->select('prices.productSku, prices.quantity, prices.value, prices.currency, IDENTITY(prices.unit) as unit')
            ->where('prices.priceList = :priceList AND prices.product = :product')
            ->setParameters(['priceList' => $combinedPriceList, 'product' => $product])
            ->orderBy('prices.currency, prices.quantity, prices.value')
            ->getQuery()
            ->getArrayResult();

        $expected = [
            [
                'productSku' => 'product-1',
                'quantity' => 1.0,
                'value' => '0.1',
                'currency' => 'USD',
                'unit' => 'liter',
            ],
            [
                'productSku' => 'product-1',
                'quantity' => 1.0,
                'value' => '1.1',
                'currency' => 'USD',
                'unit' => 'bottle',
            ],
            [
                'productSku' => 'product-1',
                'quantity' => 10.0,
                'value' => '1.2',
                'currency' => 'USD',
                'unit' => 'liter',
            ],
        ];

        $this->assertEquals($expected, $prices);
    }

    public function testInsertMinimalPricesByCombinedPriceList()
    {
        $combinedPriceList = $this->getReference('1t_2t_3t');
        $sourceCpl = $this->getReference('2t_3t');
        $product = $this->getReference('product-1');

        /** @var CombinedProductPriceRepository $repo */
        $repo = $this->getContainer()
            ->get('doctrine')
            ->getRepository(CombinedProductPrice::class);

        $repo->insertMinimalPricesByCombinedPriceList(
            $this->insertFromSelectQueryExecutor,
            $combinedPriceList,
            $sourceCpl
        );

        $prices = $repo->createQueryBuilder('prices')
            ->select('prices.productSku, prices.quantity, prices.value, prices.currency, IDENTITY(prices.unit) as unit')
            ->where('prices.priceList = :priceList AND prices.product = :product')
            ->setParameters(['priceList' => $combinedPriceList, 'product' => $product])
            ->orderBy('prices.currency, prices.quantity, prices.value')
            ->getQuery()
            ->getArrayResult();

        $expected = [
            [
                'productSku' => 'product-1',
                'quantity' => 1.0,
                'value' => '0.1',
                'currency' => 'USD',
                'unit' => 'liter',
            ],
            [
                'productSku' => 'product-1',
                'quantity' => 1.0,
                'value' => '1.1',
                'currency' => 'USD',
                'unit' => 'bottle',
            ],
            [
                'productSku' => 'product-1',
                'quantity' => 10.0,
                'value' => '1.01',
                'currency' => 'USD',
                'unit' => 'liter',
            ],
        ];

        $this->assertEquals($expected, $prices);
    }

    /**
     * @param array $a
     * @param array $b
     * @return bool
     */
    protected function sort(array $a, array $b)
    {
        if ($a['cpl'] === $b['cpl'] && $a['currency'] === $b['currency']) {
            return $a['unit'] > $b['unit'] ? 1 : 0;
        } elseif ($a['cpl'] === $b['cpl']) {
            return $a['currency'] > $b['currency'] ? 1 : 0;
        }

        return $a['cpl'] > $b['cpl'] ? 1 : 0;
    }
}
