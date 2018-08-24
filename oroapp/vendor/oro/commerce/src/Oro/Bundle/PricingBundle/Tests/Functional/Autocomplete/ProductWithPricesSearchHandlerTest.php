<?php

namespace Oro\Bundle\PricingBundle\Tests\Functional\Autocomplete;

use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\PricingBundle\Autocomplete\ProductWithPricesSearchHandler;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\ProductPrice;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadFrontendProductData;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

class ProductWithPricesSearchHandlerTest extends WebTestCase
{
    /** @var ProductWithPricesSearchHandler */
    private $searchHandler;

    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());

        $this->loadFixtures(
            [
                LoadFrontendProductData::class
            ]
        );

        $this->getContainer()->get('request_stack')->push(Request::create(''));

        $this->searchHandler = $this->getContainer()
            ->get('oro_pricing.form.autocomplete.product_with_prices.search_handler');
    }

    public function testDoesNotReturnsNotMatchingProducts()
    {
        $items = $this->searchHandler->search(md5('11112222 random string'.uniqid()), 0, 100);

        $this->assertCount(0, $items['results']);
    }

    public function testReturnsProductsWithPrices()
    {
        $items = $this->searchHandler->search('product', 0, 100);

        $this->assertNotEmpty($items);

        /**
         * @var PriceList $priceList
         */
        $priceList = $this->getClient()->getContainer()->get('oro_pricing.model.price_list_request_handler')
            ->getPriceList();

        $shardManager = $this->getClient()->getContainer()->get('oro_pricing.shard_manager');

        /** @var ProductPrice[] $prices */
        $prices = $this->getClient()->getContainer()->get('doctrine')
            ->getRepository(ProductPrice::class)
            ->findByPriceList($shardManager, $priceList, []);

        $pricesToFind = [];

        foreach ($prices as $price) {
            if (!isset($pricesToFind[$price->getProduct()->getId()])) {
                $pricesToFind[$price->getProduct()->getId()] = [];
            }

            $pricesToFind[$price->getProduct()->getId()][] = [
                'price' => $price->getPrice()->getValue(),
                'currency' => $price->getPrice()->getCurrency(),
                'quantity' => $price->getQuantity(),
                'unit' => $price->getUnit()->getCode()
            ];
        }

        foreach ($pricesToFind as $productId => $currentPricesToFind) {
            foreach ($items['results'] as $item) {
                if ($item['id'] == $productId) {
                    $this->findPriceInItem($currentPricesToFind, $item);
                }
            }
        }
    }

    public function testUnitsAreIncludedInReturnedResponse()
    {
        $items = $this->searchHandler->search('product-1', 0, 100);
        $product1 = reset($items['results']);

        $this->assertArrayHasKey('units', $product1);
        $this->assertCount(1, $product1['units']);
        $this->assertEquals(0, $product1['units']['milliliter']);
    }

    /**
     * @param array $currentPricesToFind
     * @param array $item
     */
    protected function findPriceInItem(array $currentPricesToFind, array $item)
    {
        foreach ($currentPricesToFind as $priceToFind) {
            $found = false;

            foreach ($item['prices'] as $unit => $itemUnitPrices) {
                if ($unit == $priceToFind['unit']) {
                    foreach ($itemUnitPrices as $itemUnitPrice) {
                        if ($itemUnitPrice['price'] == $priceToFind['price']
                            && $itemUnitPrice['currency'] == $priceToFind['currency']
                            && $itemUnitPrice['unit'] == $priceToFind['unit']
                        ) {
                            $found = true;
                        }
                    }
                }
            }

            $this->assertTrue(
                $found,
                sprintf(
                    "Price (%d %s %s) not found.",
                    $priceToFind['price'],
                    $priceToFind['unit'],
                    $priceToFind['currency']
                )
            );
        }
    }
}
