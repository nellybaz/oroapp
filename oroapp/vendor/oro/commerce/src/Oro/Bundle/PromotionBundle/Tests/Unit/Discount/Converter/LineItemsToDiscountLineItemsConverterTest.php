<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Discount\Converter;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\PricingBundle\Provider\FrontendProductPricesDataProvider;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\PromotionBundle\Discount\DiscountLineItem;
use Oro\Bundle\PromotionBundle\Discount\Converter\LineItemsToDiscountLineItemsConverter;
use Oro\Bundle\ShoppingListBundle\Entity\LineItem;
use Oro\Component\Testing\Unit\EntityTrait;

class LineItemsToDiscountLineItemsConverterTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var FrontendProductPricesDataProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $productPricesDataProvider;

    /**
     * @var LineItemsToDiscountLineItemsConverter
     */
    protected $converter;

    protected function setUp()
    {
        $this->productPricesDataProvider = $this->createMock(FrontendProductPricesDataProvider::class);
        $this->converter = new LineItemsToDiscountLineItemsConverter($this->productPricesDataProvider);
    }

    /**
     * @dataProvider converterDataProvider
     * @param array $lineItems
     * @param array $matchedPrices
     * @param array $expected
     */
    public function testConvert(array $lineItems, array $matchedPrices, array $expected)
    {
        $this->productPricesDataProvider->expects($this->once())
            ->method('getProductsMatchedPrice')
            ->with($lineItems)
            ->willReturn($matchedPrices);

        $this->assertEquals($expected, $this->converter->convert($lineItems));
    }

    /**
     * @return array
     */
    public function converterDataProvider()
    {
        $productId = 42;
        $unitCode = 'item';

        /** @var Product $product */
        $product = $this->getEntity(Product::class, ['id' => $productId]);

        $price = Price::create(100, 'USD');

        $productUnit = new ProductUnit();
        $productUnit->setCode($unitCode);

        $lineItem = new LineItem();
        $lineItem->setUnit($productUnit);
        $lineItem->setProduct($product);
        $lineItem->setQuantity(10);

        $lineItemWithoutProduct = new LineItem();
        $lineItemWithoutProduct->setUnit($productUnit);
        $lineItemWithoutProduct->setQuantity(10);

        return [
            'with matched prices' => [
                'lineItems' => [$lineItem, $lineItemWithoutProduct],
                'matchedPrices' => [
                    $productId => [
                        $unitCode => $price
                    ]
                ],
                'expected' => [
                    (new DiscountLineItem())
                        ->setQuantity(10)
                        ->setProduct($product)
                        ->setProductUnit($productUnit)
                        ->setSourceLineItem($lineItem)
                        ->setPrice($price)
                        ->setSubtotal($price->getValue() * $lineItem->getQuantity())
                ]
            ],
            'without matched prices' => [
                'lineItems' => [$lineItem, $lineItemWithoutProduct],
                'matchedPrices' => [
                    $productId => [
                        'box' => $price
                    ]
                ],
                'expected' => [
                    (new DiscountLineItem())
                        ->setQuantity(10)
                        ->setProduct($product)
                        ->setProductUnit($productUnit)
                        ->setSourceLineItem($lineItem)
                        ->setSubtotal(0)]
            ],
         ];
    }
}
