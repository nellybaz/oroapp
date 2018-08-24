<?php

namespace Oro\Bundle\ShoppingListBundle\Tests\Unit\Layout\DataProvider;

use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\PricingBundle\Formatter\ProductPriceFormatter;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\PricingBundle\Provider\FrontendProductPricesDataProvider;
use Oro\Bundle\ShoppingListBundle\DataProvider\ShoppingListLineItemsDataProvider;
use Oro\Bundle\ShoppingListBundle\Entity\LineItem;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;
use Oro\Bundle\ShoppingListBundle\Entity\Repository\LineItemRepository;
use Oro\Bundle\ShoppingListBundle\Layout\DataProvider\FrontendShoppingListProductsProvider;

class FrontendShoppingListProductsProviderTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var LineItemRepository|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $lineItemRepository;

    /**
     * @var FrontendProductPricesDataProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $frontendProductPricesDataProvider;

    /**
     * @var  FrontendShoppingListProductsProvider
     */
    protected $provider;

    /**
     * @var ShoppingListLineItemsDataProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $shoppingListLineItemsDataProvider;

    /**
     * @var ProductPriceFormatter|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $productPriceFormatter;

    public function setUp()
    {
        $this->lineItemRepository = $this->createMock(LineItemRepository::class);
        $this->frontendProductPricesDataProvider = $this->createMock(FrontendProductPricesDataProvider::class);
        $this->shoppingListLineItemsDataProvider = $this->createMock(ShoppingListLineItemsDataProvider::class);
        $this->productPriceFormatter = $this->createMock(ProductPriceFormatter::class);

        $this->provider = new FrontendShoppingListProductsProvider(
            $this->lineItemRepository,
            $this->frontendProductPricesDataProvider,
            $this->shoppingListLineItemsDataProvider,
            $this->productPriceFormatter
        );
    }

    public function testGetAllPrices()
    {
        /** @var ShoppingList $shoppingList */
        $shoppingList = $this->getEntity('Oro\Bundle\ShoppingListBundle\Entity\ShoppingList', ['id' => 2]);

        /** @var LineItem[] $lineItems */
        $lineItems = [
            $this->getEntity('Oro\Bundle\ShoppingListBundle\Entity\LineItem', ['id' => 1]),
        ];
        $prices = ['price_1', 'price_2'];
        $expected = ['price_1', 'price_2'];

        $this->shoppingListLineItemsDataProvider->expects($this->once())
            ->method('getShoppingListLineItems')
            ->with($shoppingList)
            ->willReturn($lineItems);

        $this->frontendProductPricesDataProvider
            ->expects($this->once())
            ->method('getProductsAllPrices')
            ->with($lineItems)
            ->willReturn($prices);

        $this->productPriceFormatter->expects($this->once())
            ->method('formatProducts')
            ->with($prices)
            ->willReturn($expected);

        $result = $this->provider->getAllPrices($shoppingList);
        $this->assertEquals($expected, $result);
    }

    public function testGetAllPricesWithoutShoppingList()
    {
        $this->shoppingListLineItemsDataProvider->expects($this->never())
            ->method('getShoppingListLineItems');
        $this->frontendProductPricesDataProvider->expects($this->never())
            ->method('getProductsAllPrices');
        $this->productPriceFormatter->expects($this->never())
            ->method('formatProducts');

        $this->provider->getAllPrices();
    }

    /**
     * @dataProvider matchedPriceDataProvider
     * @param ShoppingList|null $shoppingList
     */
    public function testGetMatchedPrice($shoppingList)
    {
        $expected = null;

        if ($shoppingList) {
            $lineItems = [];

            $this->shoppingListLineItemsDataProvider->expects($this->once())
                ->method('getShoppingListLineItems')
                ->willReturn($lineItems);

            $expected = 'expectedData';
            $this->frontendProductPricesDataProvider
                ->expects($this->once())
                ->method('getProductsMatchedPrice')
                ->with($lineItems)
                ->willReturn($expected);
        }

        $result = $this->provider->getMatchedPrice($shoppingList);
        $this->assertEquals($expected, $result);
    }

    /**
     * @return array
     */
    public function matchedPriceDataProvider()
    {
        return [
            'with shoppingList' => [
                'entity' => new ShoppingList(),
            ],
            'without shoppingList' => [
                'entity' => null,
            ],
        ];
    }

    public function testGetLastProductsGroupedByShoppingList()
    {
        $shoppingLists = [$this->getEntity('Oro\Bundle\ShoppingListBundle\Entity\ShoppingList')];
        $productCount = 1;
        $localization = $this->getEntity('Oro\Bundle\LocaleBundle\Entity\Localization');
        $this->lineItemRepository->expects($this->once())
            ->method('getLastProductsGroupedByShoppingList')
            ->with($shoppingLists, $productCount, $localization);

        $this->provider->getLastProductsGroupedByShoppingList($shoppingLists, $productCount, $localization);
    }

    /**
     * @return array
     */
    public function getConfigurableProductsFromShoppingListDataProvider()
    {
        $configurableProduct100 = $this->getEntity(Product::class, ['id' => 100]);
        $configurableProduct200 = $this->getEntity(Product::class, ['id' => 200]);
        $variantProduct1 = $this->getEntity(Product::class, ['id' => 10]);
        $variantProduct2 = $this->getEntity(Product::class, ['id' => 20]);
        $variantProduct3 = $this->getEntity(Product::class, ['id' => 30]);
        $simpleProduct1 = $this->getEntity(Product::class, ['id' => 1]);
        $simpleProduct2 = $this->getEntity(Product::class, ['id' => 2]);
        $simpleProduct3 = $this->getEntity(Product::class, ['id' => 3]);

        $lineItemSimple1 = $this->getEntity(LineItem::class, [
            'product' => $simpleProduct1,
        ]);
        $lineItemSimple2 = $this->getEntity(LineItem::class, [
            'product' => $simpleProduct2,
        ]);
        $lineItemConfigurable1 = $this->getEntity(LineItem::class, [
            'product' => $variantProduct1,
            'parentProduct' => $configurableProduct100,
        ]);
        $lineItemConfigurable2 = $this->getEntity(LineItem::class, [
            'product' => $variantProduct2,
            'parentProduct' => $configurableProduct100,
        ]);
        $lineItemConfigurable3 = $this->getEntity(LineItem::class, [
            'product' => $variantProduct3,
            'parentProduct' => $configurableProduct200,
        ]);
        $lineItemSimple3 = $this->getEntity(LineItem::class, [
            'product' => $simpleProduct3,
        ]);

        $shoppingListEmpty = $this->getEntity(ShoppingList::class, [
            'lineItems' => []
        ]);
        $shoppingListSimple = $this->getEntity(ShoppingList::class, [
            'lineItems' => [
                $lineItemSimple1,
                $lineItemSimple2,
                $lineItemSimple3,
            ]
        ]);
        $shoppingListSimpleAndConfigurable = $this->getEntity(ShoppingList::class, [
            'lineItems' => [
                $lineItemSimple1,
                $lineItemSimple2,
                $lineItemConfigurable1,
                $lineItemConfigurable2,
                $lineItemConfigurable3,
                $lineItemSimple3,
            ]
        ]);

        return [
            'empty shopping list' => [
                $shoppingListEmpty,
                [],
            ],
            'shopping without configurable products' => [
                $shoppingListSimple,
                [],
            ],
            'shopping with configurable products' => [
                $shoppingListSimpleAndConfigurable,
                [
                    100 => $configurableProduct100,
                    200 => $configurableProduct200,
                ]
            ],
        ];
    }

    /**
     * @param ShoppingList $shoppingList
     * @param Product[] $expected
     * @dataProvider getConfigurableProductsFromShoppingListDataProvider
     */
    public function testGetConfigurableProductsFromShoppingList(ShoppingList $shoppingList, $expected)
    {
        $this->assertEquals($expected, $this->provider->getConfigurableProductsFromShoppingList($shoppingList));
    }
}
