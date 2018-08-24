<?php

namespace Oro\Bundle\CheckoutBundle\Tests\Unit\EventListener;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Oro\Bundle\ActionBundle\Model\ActionData;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CheckoutBundle\Entity\CheckoutLineItem;
use Oro\Bundle\CheckoutBundle\Tests\Unit\Model\Action\CheckoutSourceStub;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Manager\UserCurrencyManager;
use Oro\Bundle\PricingBundle\Model\PriceListRequestHandler;
use Oro\Bundle\PricingBundle\Model\ProductPriceCriteria;
use Oro\Bundle\PricingBundle\Provider\ProductPriceProvider;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;
use Oro\Bundle\CheckoutBundle\EventListener\HasPriceInShoppingLineItemsListener;
use Oro\Component\Action\Event\ExtendableConditionEvent;
use Oro\Component\Testing\Unit\EntityTrait;

class HasPriceInShoppingLineItemsListenerTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var string
     */
    const CURRENCY = 'USD';

    /**
     * @var ProductPriceProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    private $productPriceProvider;

    /**
     * @var UserCurrencyManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $userCurrencyManager;

    /**
     * @var PriceListRequestHandler|\PHPUnit_Framework_MockObject_MockObject
     */
    private $priceListRequestHandler;

    /**
     * @var HasPriceInShoppingLineItemsListener
     */
    private $listener;

    public function setUp()
    {
        $this->productPriceProvider = $this->createMock(ProductPriceProvider::class);
        $this->userCurrencyManager = $this->createMock(UserCurrencyManager::class);
        $this->priceListRequestHandler = $this->createMock(PriceListRequestHandler::class);

        $this->listener = new HasPriceInShoppingLineItemsListener(
            $this->productPriceProvider,
            $this->userCurrencyManager,
            $this->priceListRequestHandler
        );
    }

    /**
     * @return Collection|CheckoutLineItem[]
     */
    private function createCheckoutLineItems()
    {
        $firstProduct = $this->getEntity(Product::class, ['id' => 1]);
        $firstProductUnit = $this->getEntity(ProductUnit::class, ['code' => 'item']);
        $secondProduct = $this->getEntity(Product::class, ['id' => 2]);
        $secondProductUnit = $this->getEntity(ProductUnit::class, ['code' => 'item']);
        $thirdProduct = $this->getEntity(Product::class, ['id' => 3]);
        $thirdProductUnit = $this->getEntity(ProductUnit::class, ['code' => 'item']);

        return new ArrayCollection([
            $this->getEntity(CheckoutLineItem::class, [
                'product' => $firstProduct,
                'productUnit' => $firstProductUnit,
                'quantity' => 1,
                'priceFixed' => false
            ]),
            $this->getEntity(CheckoutLineItem::class, [
                'product' => $secondProduct,
                'productUnit' => $secondProductUnit,
                'quantity' => 2,
                'priceFixed' => false
            ]),
            $this->getEntity(CheckoutLineItem::class, [
                'product' => $thirdProduct,
                'productUnit' => $thirdProductUnit,
                'quantity' => 0,
                'priceFixed' => true
            ]),
        ]);
    }

    /**
     * @return Collection|CheckoutLineItem[]
     */
    private function createCheckoutLineItemsWithoutQuantity()
    {
        $firstProduct = $this->getEntity(Product::class, ['id' => 1]);
        $firstProductUnit = $this->getEntity(ProductUnit::class, ['code' => 'item']);
        $secondProduct = $this->getEntity(Product::class, ['id' => 2]);
        $secondProductUnit = $this->getEntity(ProductUnit::class, ['code' => 'item']);

        return new ArrayCollection([
            $this->getEntity(CheckoutLineItem::class, [
                'product' => $firstProduct,
                'productUnit' => $firstProductUnit,
                'quantity' => 0,
                'priceFixed' => false
            ]),
            $this->getEntity(CheckoutLineItem::class, [
                'product' => $secondProduct,
                'productUnit' => $secondProductUnit,
                'quantity' => 0,
                'priceFixed' => false
            ]),
        ]);
    }

    /**
     * @param ArrayCollection| Price[] $prices
     * @return ExtendableConditionEvent
     */
    private function expectsPrepareLineItemsAndReturnPrices($prices)
    {
        $lineItems = $this->createCheckoutLineItems();

        /** @var Checkout $checkout */
        $checkout = $this->getEntity(Checkout::class, [
            'lineItems' => $lineItems,
        ]);

        $context = new ActionData(['checkout' => $checkout]);

        $this->userCurrencyManager
            ->expects($this->exactly(2))
            ->method('getUserCurrency')
            ->willReturn(self::CURRENCY);

        $priceList = $this->getEntity(PriceList::class);
        $this->priceListRequestHandler
            ->expects($this->once())
            ->method('getPriceListByCustomer')
            ->willReturn($priceList);

        $this->productPriceProvider
            ->expects($this->once())
            ->method('getMatchedPrices')
            ->with(
                $this->callback(function ($productsPricesCriteria) use ($lineItems) {
                    /** @var ProductPriceCriteria[] $productsPricesCriteria */
                    $this->assertCount(2, $productsPricesCriteria);
                    $this->assertEquals($lineItems[0]->getProduct(), $productsPricesCriteria[0]->getProduct());
                    $this->assertEquals($lineItems[1]->getProduct(), $productsPricesCriteria[1]->getProduct());
                    $this->assertEquals($lineItems[0]->getProductUnit(), $productsPricesCriteria[0]->getProductUnit());
                    $this->assertEquals($lineItems[1]->getProductUnit(), $productsPricesCriteria[1]->getProductUnit());
                    $this->assertEquals($lineItems[0]->getQuantity(), $productsPricesCriteria[0]->getQuantity());
                    $this->assertEquals($lineItems[1]->getQuantity(), $productsPricesCriteria[1]->getQuantity());
                    $this->assertEquals(self::CURRENCY, $productsPricesCriteria[0]->getCurrency());
                    $this->assertEquals(self::CURRENCY, $productsPricesCriteria[1]->getCurrency());

                    return true;
                }),
                $priceList
            )
            ->willReturn($prices);

        return new ExtendableConditionEvent($context);
    }

    /**
     * @return ExtendableConditionEvent
     */
    private function expectsPrepareLineItemsWithoutQuantity()
    {
        $lineItems = $this->createCheckoutLineItemsWithoutQuantity();

        /** @var Checkout $checkout */
        $checkout = $this->getEntity(Checkout::class, [
            'lineItems' => $lineItems,
        ]);

        $context = new ActionData(['checkout' => $checkout]);

        $this->userCurrencyManager
            ->expects($this->never())
            ->method('getUserCurrency');

        $priceList = $this->getEntity(PriceList::class);
        $this->priceListRequestHandler
            ->expects($this->never())
            ->method('getPriceListByCustomer');

        $this->productPriceProvider
            ->expects($this->never())
            ->method('getMatchedPrices');

        return new ExtendableConditionEvent($context);
    }

    public function testOnStartCheckoutConditionCheckWhenContextIsNotActionData()
    {
        $event = new ExtendableConditionEvent(new \stdClass());
        $this->userCurrencyManager
            ->expects($this->never())
            ->method('getUserCurrency');

        $this->listener->onStartCheckoutConditionCheck($event);
    }

    public function testOnStartCheckoutConditionCheckWhenCheckoutIsNotOfCheckoutType()
    {
        $context = new ActionData(['checkout' => new \stdClass()]);
        $event = new ExtendableConditionEvent($context);
        $this->userCurrencyManager
            ->expects($this->never())
            ->method('getUserCurrency');

        $this->listener->onStartCheckoutConditionCheck($event);
    }

    public function testOnStartCheckoutConditionCheckWhenSourceEntityIsNotOfShoppingListType()
    {
        $shoppingList = new \stdClass();
        $checkoutSource = new CheckoutSourceStub();
        $checkoutSource->setShoppingList($shoppingList);
        $checkout = $this->getEntity(Checkout::class, ['source' => $checkoutSource]);

        $context = new ActionData(['checkout' => $checkout]);
        $event = new ExtendableConditionEvent($context);

        $this->listener->onStartCheckoutConditionCheck($event);
    }

    public function testOnStartCheckoutConditionCheckWhenCheckoutHasNoPrices()
    {
        $event = $this->expectsPrepareLineItemsAndReturnPrices([]);

        $this->listener->onStartCheckoutConditionCheck($event);

        $this->assertNotEmpty($event->getErrors());
        $expectedErrors = new ArrayCollection([
            [
                'message' => 'oro.frontend.shoppinglist.messages.cannot_create_order_no_line_item_with_price',
                'context' => null
            ]
        ]);

        $this->assertEquals($expectedErrors, $event->getErrors());
    }

    public function testOnStartCheckoutConditionCheckWhenCheckoutHasAtLeastOnePrice()
    {
        $event = $this->expectsPrepareLineItemsAndReturnPrices([$this->getEntity(Price::class)]);

        $this->listener->onStartCheckoutConditionCheck($event);

        $this->assertEmpty($event->getErrors());
    }

    public function testOnStartCheckoutConditionCheckWhenCheckoutHasNoItems()
    {
        $shoppingList = $this->getEntity(ShoppingList::class, []);
        $checkoutSource = new CheckoutSourceStub();
        $checkoutSource->setShoppingList($shoppingList);
        $checkout = $this->getEntity(Checkout::class, ['source' => $checkoutSource]);

        $context = new ActionData(['checkout' => $checkout]);
        $event = new ExtendableConditionEvent($context);

        $this->listener->onStartCheckoutConditionCheck($event);

        $this->assertEmpty($event->getErrors());
    }

    public function testOnStartCheckoutConditionCheckWhenCheckoutHasItemsWithoutQuantity()
    {
        $event = $this->expectsPrepareLineItemsWithoutQuantity();

        $this->listener->onStartCheckoutConditionCheck($event);

        $expectedErrors = new ArrayCollection([
            [
                'message' => 'oro.frontend.shoppinglist.messages.cannot_create_order_no_line_item_with_quantity',
                'context' => null
            ]
        ]);

        $this->assertEquals($expectedErrors, $event->getErrors());
    }
}
