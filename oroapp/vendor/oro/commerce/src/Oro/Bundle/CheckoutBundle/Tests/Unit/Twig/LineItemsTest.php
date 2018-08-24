<?php

namespace Oro\Bundle\CheckoutBundle\Tests\Unit\Twig;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\CheckoutBundle\Twig\LineItemsExtension;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\OrderBundle\Entity\OrderLineItem;
use Oro\Bundle\PricingBundle\SubtotalProcessor\Model\Subtotal;
use Oro\Bundle\PricingBundle\SubtotalProcessor\Provider\LineItemSubtotalProvider;
use Oro\Bundle\PricingBundle\SubtotalProcessor\TotalProcessorProvider;
use Oro\Bundle\ProductBundle\Tests\Unit\Entity\Stub\Product;
use Oro\Component\Testing\Unit\TwigExtensionTestCaseTrait;

class LineItemsTest extends \PHPUnit_Framework_TestCase
{
    use TwigExtensionTestCaseTrait;

    /** @var TotalProcessorProvider|\PHPUnit_Framework_MockObject_MockObject */
    protected $totalsProvider;

    /** @var LineItemSubtotalProvider|\PHPUnit_Framework_MockObject_MockObject */
    protected $lineItemSubtotalProvider;

    /** @var LineItemsExtension */
    protected $extension;

    public function setUp()
    {
        $this->totalsProvider = $this->getMockBuilder(TotalProcessorProvider::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->lineItemSubtotalProvider = $this->getMockBuilder(LineItemSubtotalProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        $container = self::getContainerBuilder()
            ->add('oro_pricing.subtotal_processor.total_processor_provider', $this->totalsProvider)
            ->add('oro_pricing.subtotal_processor.provider.subtotal_line_item', $this->lineItemSubtotalProvider)
            ->getContainer($this);

        $this->extension = new LineItemsExtension($container);
    }

    /**
     * @dataProvider productDataProvider
     * @param boolean $freeForm
     */
    public function testGetOrderLineItems($freeForm)
    {
        $currency = 'UAH';
        $quantity = 22;
        $priceValue = 123;
        $name = 'Item Name';
        $sku = 'Item Sku';

        $subtotals = [
            (new Subtotal())->setLabel('label2')->setAmount(321)->setCurrency('UAH'),
            (new Subtotal())->setLabel('label1')->setAmount(123)->setCurrency('USD')
        ];
        $this->totalsProvider->expects($this->once())->method('getSubtotals')->willReturn($subtotals);
        $this->lineItemSubtotalProvider->expects($this->any())->method('getRowTotal')->willReturn(321);
        $order = new Order();
        $order->setCurrency($currency);

        $product = $freeForm ? null : (new Product())->setSku($sku);
        $order->addLineItem($this->createLineItem($currency, $quantity, $priceValue, $name, $sku, $product));

        $result = self::callTwigFunction($this->extension, 'order_line_items', [$order]);
        $this->assertArrayHasKey('lineItems', $result);
        $this->assertArrayHasKey('subtotals', $result);
        $this->assertCount(1, $result['lineItems']);
        $this->assertCount(2, $result['subtotals']);

        $lineItem = $result['lineItems'][0];
        $productName = $freeForm ? $name : $sku;
        $this->assertEquals($productName, $lineItem['product_name']);
        $this->assertEquals($sku, $lineItem['product_sku']);

        $this->assertEquals($quantity, $lineItem['quantity']);
        /** @var Price $price */
        $price = $lineItem['price'];
        $this->assertEquals($priceValue, $price->getValue());
        $this->assertEquals($currency, $price->getCurrency());

        /** @var Price $subtotal */
        $subtotal = $lineItem['subtotal'];
        $this->assertEquals(321, $subtotal->getValue());
        $this->assertEquals('UAH', $subtotal->getCurrency());
        $this->assertNull($lineItem['unit']);

        $firstSubtotal = $result['subtotals'][0];
        $this->assertEquals('label2', $firstSubtotal['label']);
        /** @var Price $totalPrice */
        $totalPrice = $firstSubtotal['totalPrice'];
        $this->assertEquals(321, $totalPrice->getValue());
        $this->assertEquals('UAH', $totalPrice->getCurrency());
    }

    /**
     * @return array
     */
    public function productDataProvider()
    {
        return [
            'withoutProduct' => ['freeForm' => true],
            'withProduct' => ['freeForm' => false]
        ];
    }

    /**
     * @param string $currency
     * @param float $quantity
     * @param float $priceValue
     * @param string $name
     * @param string $sku
     * @param Product|null $product
     * @return OrderLineItem
     */
    protected function createLineItem($currency, $quantity, $priceValue, $name, $sku, Product $product = null)
    {
        $lineItem = new OrderLineItem();
        $lineItem->setCurrency($currency);
        $lineItem->setQuantity($quantity);
        $lineItem->setPrice(Price::create($priceValue, $currency));
        $lineItem->setProductSku($sku);
        if (!$product) {
            $lineItem->setFreeFormProduct($name);
        } else {
            $lineItem->setProduct($product);
        }

        return $lineItem;
    }
}
