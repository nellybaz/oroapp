<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Layout\DataProvider;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Layout\DataProvider\ProductStickersProvider;

class ProductStickersProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ProductStickersProvider
     */
    protected $productStickersProvider;
    /**
     * @var ConfigManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $configManager;

    protected function setUp()
    {
        $this->configManager = $this->createMock(ConfigManager::class);
        $this->productStickersProvider = new ProductStickersProvider($this->configManager);
    }

    public function testGetStickers()
    {
        /** @var Product|\PHPUnit_Framework_MockObject_MockObject $newArrivalProduct */
        $newArrivalProduct = $this->createMock(Product::class);
        $newArrivalProduct->method('isNewArrival')->willReturn(true);
        $stickers = $this->productStickersProvider->getStickers($newArrivalProduct);
        self::assertEquals(
            [
                ['type' => 'new_arrival'],
            ],
            $stickers
        );
        /** @var Product|\PHPUnit_Framework_MockObject_MockObject $product */
        $product = $this->createMock(Product::class);
        $product->method('isNewArrival')->willReturn(false);
        $stickers = $this->productStickersProvider->getStickers($product);
        self::assertEquals([], $stickers);
    }

    public function testIsStickersDisabledOnView()
    {
        $this->configManager->method('get')
            ->with('oro_product.product_promotion_show_on_product_view')
            ->willReturn(false);
        self::assertFalse($this->productStickersProvider->isStickersEnabledOnView());
    }

    public function testIsStickersEnabledOnView()
    {
        $this->configManager->method('get')
            ->with('oro_product.product_promotion_show_on_product_view')
            ->willReturn(true);
        self::assertTrue($this->productStickersProvider->isStickersEnabledOnView());
    }
}
