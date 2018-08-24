<?php

namespace Oro\Bundle\SEOBundle\Tests\Functional\Controller\Frontend;

use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadFrontendProductData;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\FrontendTestFrameworkBundle\Migrations\Data\ORM\LoadCustomerUserData;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\CatalogBundle\Tests\Functional\DataFixtures\LoadCategoryData;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductData;
use Oro\Bundle\SEOBundle\Tests\Functional\DataFixtures\LoadCategoryMetaData;
use Oro\Bundle\SEOBundle\Tests\Functional\DataFixtures\LoadProductMetaData;

class ProductControllerTest extends WebTestCase
{
    use SEOFrontendTrait;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->initClient(
            [],
            $this->generateBasicAuthHeader(LoadCustomerUserData::AUTH_USER, LoadCustomerUserData::AUTH_PW)
        );

        $this->loadFixtures([
            LoadFrontendProductData::class,
            LoadProductMetaData::class,
            LoadCategoryMetaData::class,
        ]);
    }

    /**
     * @dataProvider viewDataProvider
     * @param string $product
     * @param array $metaTags
     */
    public function testView($product, array $metaTags)
    {
        $product = $this->getProduct($product);

        $crawler = $this->client->request(
            'GET',
            $this->getUrl('oro_product_frontend_product_view', ['id' => $product->getId()])
        );
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->checkSEOFrontendMetaTags($crawler, $metaTags);
    }

    /**
     * @return array
     */
    public function viewDataProvider()
    {
        $title1 = $this->getMetaContent(LoadProductData::PRODUCT_1, LoadProductMetaData::META_TITLES);
        $description1 = $this->getMetaContent(LoadProductData::PRODUCT_1, LoadProductMetaData::META_DESCRIPTIONS);
        $keywords1 = $this->getMetaContent(LoadProductData::PRODUCT_1, LoadProductMetaData::META_KEYWORDS);

        return [
            'Product 1' => [
                'product' => LoadProductData::PRODUCT_1,
                'metaTags' => [
                    ['name' => $this->getMetaTitleName(), 'content' => $title1],
                    ['name' => $this->getMetaDescriptionName(), 'content' => $description1],
                    ['name' => $this->getMetaKeywordsName(), 'content' => $keywords1],
                ],
            ],
            'Product 2' => [
                'product' => LoadProductData::PRODUCT_2,
                'metaTags' => [
                    ['name' => 'title', 'content' => ''],
                    ['name' => 'description', 'content' => ''],
                    ['name' => 'keywords', 'content' => ''],
                ],
            ],
        ];
    }

    /**
     * @dataProvider indexDataProvider
     * @param $category
     * @param array $metaTags
     */
    public function testIndex($category, array $metaTags)
    {
        $category = $this->getCategory($category);

        $crawler = $this->client->request(
            'GET',
            $this->getUrl('oro_product_frontend_product_index', ['categoryId' => $category->getId()])
        );
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->checkSEOFrontendMetaTags($crawler, $metaTags);
    }

    /**
     * @return array
     */
    public function indexDataProvider()
    {
        $description1 = $this->getMetaContent(LoadCategoryData::FIRST_LEVEL, LoadCategoryMetaData::META_DESCRIPTIONS);
        $keywords1 = $this->getMetaContent(LoadCategoryData::FIRST_LEVEL, LoadCategoryMetaData::META_KEYWORDS);

        return [
            'Category 1' => [
                'category' => LoadCategoryData::FIRST_LEVEL,
                'metaTags' => [
                    ['name' => $this->getMetaDescriptionName(), 'content' => $description1],
                    ['name' => $this->getMetaKeywordsName(), 'content' => $keywords1],
                ],
            ],
            'Category 2' => [
                'category' => LoadCategoryData::SECOND_LEVEL1,
                'metaTags' => [
                    ['name' => 'description', 'content' => 'defaultMetaDescription'],
                    ['name' => 'keywords', 'content' => 'defaultMetaKeywords'],
                ],
            ],
        ];
    }

    /**
     * @param string $reference
     * @return Category
     */
    protected function getCategory($reference)
    {
        return $this->getReference($reference);
    }

    /**
     * @param string $reference
     * @return Product
     */
    protected function getProduct($reference)
    {
        return $this->getReference($reference);
    }

    /**
     * @param string $entity
     * @return array
     */
    protected function getMetadataArray($entity)
    {
        if (strpos($entity, 'product') !== false) {
            return LoadProductMetaData::$metadata;
        }

        return LoadCategoryMetaData::$metadata;
    }
}
