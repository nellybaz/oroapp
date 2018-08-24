<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Provider;

use Doctrine\Common\Persistence\ManagerRegistry;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\PricingBundle\Entity\BasePriceList;
use Oro\Bundle\PricingBundle\Entity\ProductPrice;
use Oro\Bundle\PricingBundle\Model\ProductPriceCriteria;
use Oro\Bundle\PricingBundle\Provider\ProductPriceProvider;
use Oro\Bundle\PricingBundle\Sharding\ShardManager;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;

class ProductPriceProviderTest extends \PHPUnit_Framework_TestCase
{
    const CLASS_NAME = '\stdClass';

    /**
     * @var ShardManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $shardManager;

    /**
     * @var ProductPriceProvider
     */
    protected $provider;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ManagerRegistry
     */
    protected $registry;

    protected function setUp()
    {
        $this->registry = $this->createMock('Doctrine\Common\Persistence\ManagerRegistry');
        $this->shardManager = $this->createMock(ShardManager::class);
        $this->provider = new ProductPriceProvider($this->registry, $this->shardManager);
        $this->provider->setClassName('\stdClass');
    }

    protected function tearDown()
    {
        unset($this->provider, $this->registry);
    }

    /**
     * @dataProvider getAvailableCurrenciesDataProvider
     * @param int $priceListId
     * @param array $productIds
     * @param array $prices
     * @param array $expectedData
     */
    public function testGetAvailableCurrencies($priceListId, array $productIds, array $prices, array $expectedData)
    {
        $repository = $this->getMockBuilder('Oro\Bundle\PricingBundle\Entity\Repository\ProductPriceRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $repository->expects($this->once())
            ->method('findByPriceListIdAndProductIds')
            ->with($this->shardManager, $priceListId, $productIds, true, null)
            ->willReturn($prices);

        $manager = $this->getMockBuilder('Doctrine\Common\Persistence\ObjectManager')
            ->disableOriginalConstructor()
            ->getMock();

        $manager->expects($this->once())
            ->method('getRepository')
            ->with($this->equalTo('\stdClass'))
            ->willReturn($repository);

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->with($this->equalTo('\stdClass'))
            ->will($this->returnValue($manager));

        $this->assertEquals(
            $expectedData,
            $this->provider->getPriceByPriceListIdAndProductIds($priceListId, $productIds)
        );
    }

    /**
     * @return array
     */
    public function getAvailableCurrenciesDataProvider()
    {
        return [
            'with prices' => [
                'priceListId' => 1,
                'productIds' => [1, 2],
                'prices' => [
                    $this->createPrice(1, 'item', 1, 100.0000, 'USD'),
                    $this->createPrice(1, 'kg', 1, 20.0000, 'USD'),
                    $this->createPrice(1, 'kg', 10, 15.0000, 'USD'),
                    $this->createPrice(2, 'kg', 3, 50.0000, 'EUR')
                ],
                'expectedData' => [
                    '1' => [
                        [
                            'price' => '100.0000',
                            'currency' => 'USD',
                            'quantity' => 1,
                            'unit' => 'item',
                        ],
                        [
                            'price' => '20.0000',
                            'currency' => 'USD',
                            'quantity' => 1,
                            'unit' => 'kg',
                        ],
                        [
                            'price' => '15.0000',
                            'currency' => 'USD',
                            'quantity' => 10,
                            'unit' => 'kg',
                        ],
                    ],
                    '2' => [
                        [
                            'price' => '50.0000',
                            'currency' => 'EUR',
                            'quantity' => 3,
                            'unit' => 'kg',
                        ],
                    ],
                ]
            ],
            'without prices' => [
                'priceListId' => 1,
                'productIds' => [1, 2],
                'prices' => [],
                'expectedData' => []
            ]
        ];
    }

    /**
     * @param int $productId
     * @param string $unitCode
     * @param int $quantity
     * @param float $value
     * @param string $currency
     * @return ProductPrice
     */
    protected function createPrice($productId, $unitCode, $quantity, $value, $currency)
    {
        $productPrice = new ProductPrice();

        $price = new Price();
        $price->setCurrency($currency);
        $price->setValue($value);

        $product = new Product();
        $idReflection = new \ReflectionProperty(get_class($product), 'id');
        $idReflection->setAccessible(true);
        $idReflection->setValue($product, $productId);

        $unit = new ProductUnit();
        $unit->setCode($unitCode);

        $productPrice->setProduct($product);
        $productPrice->setUnit($unit);
        $productPrice->setQuantity($quantity);
        $productPrice->setPrice($price);

        return $productPrice;
    }

    /**
     * @dataProvider getMatchedPricesDataProvider
     *
     * @param array $productPriceCriteria
     * @param array $repositoryData
     * @param array $expectedData
     */
    public function testGetMatchedPrices(
        array $productPriceCriteria,
        array $repositoryData,
        array $expectedData
    ) {
        $priceList = $this->getEntity('Oro\Bundle\PricingBundle\Entity\PriceList', 12);

        $repository = $this->getMockBuilder('Oro\Bundle\PricingBundle\Entity\Repository\ProductPriceRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $repository->expects($this->once())->method('getPricesBatch')->willReturn($repositoryData);

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')->disableOriginalConstructor()->getMock();
        $em->expects($this->once())
            ->method('getRepository')
            ->with(self::CLASS_NAME)
            ->willReturn($repository);

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->with(self::CLASS_NAME)
            ->willReturn($em);

        $prices = $this->provider->getMatchedPrices($productPriceCriteria, $priceList);

        $this->assertInternalType('array', $prices);
        $this->assertEquals(count($productPriceCriteria), count($prices));
        $this->assertEquals($expectedData, $prices);
    }

    /**
     * @return array
     */
    public function getMatchedPricesDataProvider()
    {
        $currency = 'USD';
        $prodUnitQty1 = $this->getProductPriceCriteria(1, $currency, 0);
        $prodUnitQty105 = $this->getProductPriceCriteria(10.5, $currency, 0);
        $prodUnitQty50 = $this->getProductPriceCriteria(50, $currency, 3);

        return [
            [
                'productPriceCriteria' => [$prodUnitQty1, $prodUnitQty105, $prodUnitQty50],
                'repositoryData' => $this->getRepositoryData($prodUnitQty50),
                'expectedData' => [
                    $prodUnitQty1->getIdentifier() => null,
                    $prodUnitQty105->getIdentifier() => Price::create(15, $currency),
                    $prodUnitQty50->getIdentifier() => Price::create(6, $currency),
                ]
            ],
        ];
    }

    /**
     * @param float $quantity
     * @param string $currency
     * @return ProductPriceCriteria
     */
    protected function getProductPriceCriteria($quantity, $currency, $precision)
    {
        /** @var Product $product */
        $product = $this->getEntity('Oro\Bundle\ProductBundle\Entity\Product', 42);

        $productUnit = new ProductUnit();
        $productUnit->setDefaultPrecision($precision);
        $productUnit->setCode('kg');

        return new ProductPriceCriteria($product, $productUnit, $quantity, $currency);
    }

    /**
     * @param ProductPriceCriteria $productPriceCriteria
     * @return array
     */
    protected function getRepositoryData(ProductPriceCriteria $productPriceCriteria)
    {
        $product = $productPriceCriteria->getProduct();
        $productUnit = $productPriceCriteria->getProductUnit();

        return [
            [
                'id' => $product->getId(),
                'code' => $productUnit->getCode(),
                'quantity' => 1,
                'value' => 20,
                'currency' => 'EUR'
            ],
            [
                'id' => $product->getId(),
                'code' => $productUnit->getCode(),
                'quantity' => 1.5,
                'value' => 15,
                'currency' => 'USD'
            ],
            [
                'id' => $product->getId(),
                'code' => $productUnit->getCode(),
                'quantity' => 20,
                'value' => 120,
                'currency' => 'USD'
            ],
            [
                'id' => $product->getId(),
                'code' => $productUnit->getCode(),
                'quantity' => 100,
                'value' => 1400,
                'currency' => 'USD'
            ]
        ];
    }

    /**
     * @param string $className
     * @param int $id
     * @return BasePriceList
     */
    protected function getEntity($className, $id)
    {
        $entity = new $className;

        $reflectionClass = new \ReflectionClass($className);
        $method = $reflectionClass->getProperty('id');
        $method->setAccessible(true);
        $method->setValue($entity, $id);

        return $entity;
    }
}
