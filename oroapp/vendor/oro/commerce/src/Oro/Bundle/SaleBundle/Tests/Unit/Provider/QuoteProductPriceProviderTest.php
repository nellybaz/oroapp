<?php

namespace Oro\Bundle\SaleBundle\Tests\Unit\Provider;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\PricingBundle\Entity\CombinedPriceList;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Model\PriceListTreeHandler;
use Oro\Bundle\PricingBundle\Model\ProductPriceCriteria;
use Oro\Bundle\PricingBundle\Provider\ProductPriceProvider;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Tests\Unit\Entity\Stub\Product;
use Oro\Bundle\SaleBundle\Entity\Quote;
use Oro\Bundle\SaleBundle\Entity\QuoteProduct;
use Oro\Bundle\SaleBundle\Entity\QuoteProductOffer;
use Oro\Bundle\SaleBundle\Provider\QuoteProductPriceProvider;
use Oro\Bundle\WebsiteBundle\Entity\Website;
use Oro\Component\Testing\Unit\EntityTrait;

class QuoteProductPriceProviderTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    const DEFAULT_PRICE_LIST_ID = 1;

    /**
     * @var QuoteProductPriceProvider
     */
    protected $quoteProductPriceProvider;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ProductPriceProvider
     */
    protected $productPriceProvider;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|PriceListTreeHandler
     */
    protected $treeHandler;

    protected function setUp()
    {
        $this->productPriceProvider = $this->createMock(ProductPriceProvider::class);

        $this->treeHandler = $this->getMockBuilder(PriceListTreeHandler::class)
            ->setMethods(['getPriceList', 'getPriceListByCustomer'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->quoteProductPriceProvider = new QuoteProductPriceProvider(
            $this->productPriceProvider,
            $this->treeHandler
        );
    }

    protected function tearDown()
    {
        unset($this->quoteProductPriceProvider, $this->productPriceProvider, $this->priceListRequestHandler);
    }

    /**
     * @dataProvider getTierPricesDataProvider
     * @param PriceList|null $quotePriceList
     * @param QuoteProduct[] $quoteProducts
     * @param array|null $productPriceProviderArgs
     * @param int $tierPricesCount
     */
    public function testGetTierPrices($quotePriceList, $quoteProducts, $productPriceProviderArgs, $tierPricesCount)
    {
        $quote = new Quote();
        $website = new Website();
        $customer = new Customer();
        $quote->setWebsite($website)
            ->setCustomer($customer);
        foreach ($quoteProducts as $quoteProduct) {
            $quote->addQuoteProduct($quoteProduct);
        }

        $this->treeHandler->expects($this->any())
            ->method('getPriceList')
            ->with($customer, $website)
            ->willReturn($quotePriceList);

        if ($productPriceProviderArgs) {
            call_user_func_array(
                [
                    $this->productPriceProvider->expects($this->once())->method('getPriceByPriceListIdAndProductIds'),
                    'with'
                ],
                $productPriceProviderArgs
            )->willReturn(range(0, $tierPricesCount - 1));
        }

        $result = $this->quoteProductPriceProvider->getTierPrices($quote);

        $this->assertInternalType('array', $result);
        $this->assertCount($tierPricesCount, $result);
    }

    /**
     * @dataProvider getTierPricesDataProvider
     * @param PriceList|null $quotePriceList
     * @param QuoteProduct[] $quoteProducts
     * @param array|null $productPriceProviderArgs
     * @param int $tierPricesCount
     */
    public function testGetTierPricesForProducts(
        $quotePriceList,
        $quoteProducts,
        $productPriceProviderArgs,
        $tierPricesCount
    ) {
        $website = new Website();
        $customer = new Customer();

        $quote = new Quote();
        $quote->setWebsite($website)->setCustomer($customer);

        $this->treeHandler->expects($this->any())
            ->method('getPriceList')
            ->with($customer, $website)
            ->willReturn($quotePriceList);

        if ($productPriceProviderArgs) {
            call_user_func_array(
                [
                    $this->productPriceProvider->expects($this->once())->method('getPriceByPriceListIdAndProductIds'),
                    'with'
                ],
                $productPriceProviderArgs
            )->willReturn(range(0, $tierPricesCount - 1));
        }

        $result = $this->quoteProductPriceProvider->getTierPricesForProducts(
            $quote,
            array_filter(
                array_map(
                    function (QuoteProduct $quoteProduct) {
                        return $quoteProduct->getProduct() ? $quoteProduct->getProduct()->getId() : null;
                    },
                    $quoteProducts
                )
            )
        );

        $this->assertInternalType('array', $result);
        $this->assertCount($tierPricesCount, $result);
    }

    /**
     * @return array
     */
    public function getTierPricesDataProvider()
    {
        $quoteProduct = $this->getQuoteProduct();
        $emptyQuoteProduct = $this->getQuoteProduct('empty');

        $quotePriceList = $this->getEntity(CombinedPriceList::class, ['id' => 2]);

        $product1 = $quoteProduct->getProduct();

        return [
            'no price list' => [
                'quotePriceList' => null,
                'quoteProducts' => [$quoteProduct, $emptyQuoteProduct],
                'productPriceProviderArgs' => null,
                'tierPricesCount' => 0,
            ],
            'quote price list' => [
                'quotePriceList' => $quotePriceList,
                'quoteProducts' => [$quoteProduct, $emptyQuoteProduct],
                'productPriceProviderArgs' => [$quotePriceList->getId(), [$product1->getId()]],
                'tierPricesCount' => 1,
            ],
            'empty quote products list' => [
                'quotePriceList' => $quotePriceList,
                'quoteProducts' => [],
                'productPriceProviderArgs' => null,
                'tierPricesCount' => 0,
            ],
        ];
    }

    /**
     * @dataProvider getMatchedPricesDataProvider
     * @param PriceList|null $quotePriceList
     * @param QuoteProduct[] $quoteProducts
     * @param array|null $productPriceProviderArgs
     * @param int $matchedPriceCount
     */
    public function testGetMatchedPrices($quotePriceList, $quoteProducts, $productPriceProviderArgs, $matchedPriceCount)
    {
        $quote = new Quote();
        $website = new Website();
        $customer = new Customer();
        $quote->setWebsite($website)
            ->setCustomer($customer);
        foreach ($quoteProducts as $quoteProduct) {
            $quote->addQuoteProduct($quoteProduct);
        }

        $this->treeHandler->expects($this->once())
            ->method('getPriceList')
            ->with($customer, $website)
            ->willReturn($quotePriceList);

        if ($productPriceProviderArgs) {
            call_user_func_array(
                [
                    $this->productPriceProvider->expects($this->once())->method('getMatchedPrices'),
                    'with'
                ],
                $productPriceProviderArgs
            )->willReturn(array_fill(0, $matchedPriceCount, new Price()));
        }

        $result = $this->quoteProductPriceProvider->getMatchedPrices($quote);

        $this->assertInternalType('array', $result);
        $this->assertCount($matchedPriceCount, $result);
        if ($matchedPriceCount) {
            $this->assertArrayHasKey('value', $result[0]);
            $this->assertArrayHasKey('currency', $result[0]);
        }
    }

    /**
     * @return array
     */
    public function getMatchedPricesDataProvider()
    {
        $quoteProduct = $this->getQuoteProduct();
        $emptyQuoteProduct = $this->getQuoteProduct('empty');

        $quotePriceList = $this->getEntity(CombinedPriceList::class, ['id' => 2]);

        $product1 = $quoteProduct->getProduct();

        $quoteProductOffer1 = $quoteProduct->getQuoteProductOffers()->get(0);
        $quoteProductOffer2 = $quoteProduct->getQuoteProductOffers()->get(1);

        $productsPriceCriteria = [];
        $productsPriceCriteria[] = new ProductPriceCriteria(
            $product1,
            $quoteProductOffer1->getProductUnit(),
            $quoteProductOffer1->getQuantity(),
            $quoteProductOffer1->getPrice()->getCurrency()
        );
        $productsPriceCriteria[] = new ProductPriceCriteria(
            $product1,
            $quoteProductOffer2->getProductUnit(),
            $quoteProductOffer2->getQuantity(),
            $quoteProductOffer2->getPrice()->getCurrency()
        );

        return [
            'no price list' => [
                'quotePriceList' => null,
                'quoteProducts' => [$quoteProduct, $emptyQuoteProduct],
                'productPriceProviderArgs' => null,
                'matchedPrice' => 0,
            ],
            'quote price list' => [
                'quotePriceList' => $quotePriceList,
                'quoteProducts' => [$quoteProduct, $emptyQuoteProduct],
                'productPriceProviderArgs' => [$productsPriceCriteria, $quotePriceList],
                'matchedPrice' => 3,
            ],
            'empty quote products list' => [
                'quotePriceList' => $quotePriceList,
                'quoteProducts' => [],
                'productPriceProviderArgs' => null,
                'matchedPrice' => 0,
            ],
        ];
    }

    /**
     * @param string $type
     * @return QuoteProduct
     */
    protected function getQuoteProduct($type = '')
    {
        $productUnit = new ProductUnit();
        $productUnit->setCode('kg');

        $price = new Price();
        $price->setCurrency('USD');

        $quoteProductOffer = new QuoteProductOffer();
        $quoteProductOffer->setProductUnit($productUnit);
        $quoteProductOffer->setQuantity(1);
        $quoteProductOffer->setPrice($price);

        $quoteProductOffer2 = new QuoteProductOffer();
        $quoteProductOffer2->setQuantity(2);

        $quoteProductOffer3 = new QuoteProductOffer();
        $quoteProductOffer3->setProductUnit($productUnit);

        /** @var Product $product1 */
        $product1 = $this->getEntity(Product::class, ['id' => 1]);

        switch ($type) {
            case 'empty':
                $quoteProduct = new QuoteProduct();
                break;
            default:
                $quoteProduct = new QuoteProduct();
                $quoteProduct->setProduct($product1);
                $quoteProduct->addQuoteProductOffer($quoteProductOffer);
                $quoteProduct->addQuoteProductOffer(clone($quoteProductOffer));
                $quoteProduct->addQuoteProductOffer($quoteProductOffer2);
                $quoteProduct->addQuoteProductOffer($quoteProductOffer3);
                break;
        }
        return $quoteProduct;
    }
}
