<?php

namespace Oro\Bundle\PromotionBundle\Tests\Functional\Provider;

use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductData;
use Oro\Bundle\PromotionBundle\Discount\DiscountLineItem;
use Oro\Bundle\PromotionBundle\Provider\MatchingProductsProvider;
use Oro\Bundle\PromotionBundle\Tests\Functional\DataFixtures\LoadPromotionSegmentData;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

class MatchingProductsProviderTest extends WebTestCase
{
    /**
     * @var MatchingProductsProvider
     */
    private $provider;

    protected function setUp()
    {
        $this->initClient([], static::generateBasicAuthHeader());
        $this->loadFixtures([LoadPromotionSegmentData::class]);
        $this->provider = new MatchingProductsProvider(static::getContainer()->get('oro_segment.segment_manager'));
    }

    public function testGetMatchingProductsWhenEmptyIntersection()
    {
        $segment = $this->getReference(LoadPromotionSegmentData::NOT_EMPTY_PROMOTION_SEGMENT);

        $this->assertEquals(
            [],
            $this->provider->getMatchingProducts($segment, $this->createLineItems([
                LoadProductData::PRODUCT_2,
                LoadProductData::PRODUCT_4,
                LoadProductData::PRODUCT_5
            ]))
        );
    }

    public function testHasMatchingProductsWhenEmptyIntersection()
    {
        $segment = $this->getReference(LoadPromotionSegmentData::NOT_EMPTY_PROMOTION_SEGMENT);

        $this->assertFalse($this->provider->hasMatchingProducts($segment, $this->createLineItems([
            LoadProductData::PRODUCT_2,
            LoadProductData::PRODUCT_4,
            LoadProductData::PRODUCT_5
        ])));
    }

    public function testGetMatchingProductsWhenNotEmptyIntersection()
    {
        $this->markTestIncomplete('Unstable test. Will be fixed in BB-11881');
        $segment = $this->getReference(LoadPromotionSegmentData::NOT_EMPTY_PROMOTION_SEGMENT);

        $expectedProducts = [
            $this->getReference(LoadProductData::PRODUCT_1),
            $this->getReference(LoadProductData::PRODUCT_3)
        ];

        $this->assertEquals(
            $expectedProducts,
            $this->provider->getMatchingProducts($segment, $this->createLineItems([
                LoadProductData::PRODUCT_1,
                LoadProductData::PRODUCT_2,
                LoadProductData::PRODUCT_3,
                LoadProductData::PRODUCT_4,
                LoadProductData::PRODUCT_5
            ]))
        );
    }

    public function testHasMatchingProductsWhenNotEmptyIntersection()
    {
        $segment = $this->getReference(LoadPromotionSegmentData::NOT_EMPTY_PROMOTION_SEGMENT);

        $this->assertTrue($this->provider->hasMatchingProducts($segment, $this->createLineItems([
            LoadProductData::PRODUCT_1,
            LoadProductData::PRODUCT_2,
            LoadProductData::PRODUCT_3,
            LoadProductData::PRODUCT_4,
            LoadProductData::PRODUCT_5
        ])));
    }

    public function testGetMatchingProductsWithEmptySegmentSnapshot()
    {
        $segment = $this->getReference(LoadPromotionSegmentData::EMPTY_PROMOTION_SEGMENT);

        $this->assertEquals(
            [],
            $this->provider->getMatchingProducts($segment, $this->createLineItems([
                LoadProductData::PRODUCT_1,
                LoadProductData::PRODUCT_2,
                LoadProductData::PRODUCT_3
            ]))
        );
    }

    public function testHasMatchingProductsWithEmptySegmentSnapshot()
    {
        $segment = $this->getReference(LoadPromotionSegmentData::EMPTY_PROMOTION_SEGMENT);

        $this->assertFalse($this->provider->hasMatchingProducts($segment, $this->createLineItems([
            LoadProductData::PRODUCT_1,
            LoadProductData::PRODUCT_2,
            LoadProductData::PRODUCT_3
        ])));
    }

    /**
     * @param array $productReferences
     * @return array|DiscountLineItem[]
     */
    private function createLineItems(array $productReferences)
    {
        $lineItems = [];
        foreach ($productReferences as $productReference) {
            $lineItem = new DiscountLineItem();
            $lineItem->setProduct($this->getReference($productReference));
            $lineItems[] = $lineItem;
        }

        return $lineItems;
    }
}
