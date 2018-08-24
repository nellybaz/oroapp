<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Provider\Cache\Doctrine;

use Doctrine\Common\Cache\Cache;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Provider\Cache\Doctrine\CachedProductsProviderDecorator;
use Oro\Bundle\ProductBundle\Provider\ProductsProviderInterface;

class CachedProductsProviderDecoratorTest extends \PHPUnit_Framework_TestCase
{
    const CACHE_KEY = 'cached_products_provider_decorator';

    /**
     * @var ProductsProviderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $decoratedProvider;

    /**
     * @var Cache|\PHPUnit_Framework_MockObject_MockObject
     */
    private $cache;

    /**
     * @var string
     */
    private $cacheKey;

    /**
     * @var CachedProductsProviderDecorator
     */
    private $provider;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->decoratedProvider = $this->createMock(ProductsProviderInterface::class);
        $this->cache = $this->createMock(Cache::class);
        $this->cacheKey = self::CACHE_KEY;

        $this->provider = new CachedProductsProviderDecorator($this->decoratedProvider, $this->cache, $this->cacheKey);
    }

    public function testGetProductsFromCache()
    {
        $products = [
            $this->getProductMock(),
            $this->getProductMock(),
        ];

        $this->cache->expects(static::once())
            ->method('contains')
            ->with($this->cacheKey)
            ->willReturn(true);

        $this->cache->expects(static::once())
            ->method('fetch')
            ->with($this->cacheKey)
            ->willReturn($products);

        $this->decoratedProvider->expects(static::never())
            ->method('getProducts');

        static::assertEquals($products, $this->provider->getProducts());
    }

    /**
     * @dataProvider productDataProvider
     *
     * @param array $products
     */
    public function testGetProductsEmptyCache(array $products)
    {
        $this->cache->expects(static::once())
            ->method('contains')
            ->with($this->cacheKey)
            ->willReturn(false);

        $this->cache->expects(static::never())
            ->method('fetch');

        $this->decoratedProvider->expects(static::once())
            ->method('getProducts')
            ->willReturn($products);

        $this->cache->expects(static::once())
            ->method('save')
            ->with($this->cacheKey, $products);

        static::assertEquals($products, $this->provider->getProducts());
    }

    /**
     * @return array
     */
    public function productDataProvider(): array
    {
        return [
            [
                []
            ],
            [
                [

                    $this->getProductMock(),
                    $this->getProductMock(),
                ]
            ],
        ];
    }

    /**
     * @return Product|\PHPUnit_Framework_MockObject_MockObject
     */
    private function getProductMock()
    {
        return $this->createMock(Product::class);
    }
}
