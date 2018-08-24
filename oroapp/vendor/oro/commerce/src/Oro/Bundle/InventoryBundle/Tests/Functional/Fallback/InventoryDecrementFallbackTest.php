<?php

namespace Oro\Bundle\InventoryBundle\Tests\Functional\Fallback;

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\DomCrawler\Form;

use Oro\Bundle\CatalogBundle\Tests\Functional\DataFixtures\LoadCategoryProductData;
use Oro\Bundle\CatalogBundle\Tests\Functional\DataFixtures\LoadCategoryData;
use Oro\Bundle\EntityBundle\Tests\Functional\Helper\FallbackTestTrait;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductData;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

class InventoryDecrementFallbackTest extends WebTestCase
{
    use FallbackTestTrait;

    const VIEW_DECREMENT_INVENTORY_XPATH =
        "//label[text() = 'Decrement Inventory']/following-sibling::div/div[contains(@class,  'control-label')]";

    public function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->loadFixtures([LoadCategoryProductData::class]);
    }

    public function testProductBackOrderView()
    {
        $product = $this->getReference(LoadProductData::PRODUCT_1);
        $crawler = $this->client->request('GET', $this->getUrl('oro_product_view', ['id' => $product->getId()]));
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $inventoryDecrementValue = $crawler->filterXPath(self::VIEW_DECREMENT_INVENTORY_XPATH)->html();
        $this->assertEquals('On Order Submission', $inventoryDecrementValue);
    }

    public function testProductDecrementQuantityUpdate()
    {
        $newValue = 0;
        $product = $this->getReference(LoadProductData::PRODUCT_1);
        $crawler = $this->setProductDecrementQuantityField($product, $newValue, null);
        $this->assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 200);
        $value = $crawler->filterXPath(self::VIEW_DECREMENT_INVENTORY_XPATH)->html();
        $this->assertEquals('Defined by Workflow', $value);
    }

    /**
     * @param Product $product
     * @param mixed $ownValue
     * @param bool $useFallbackValue
     * @param mixed $fallbackValue
     * @return Crawler
     */
    protected function setProductDecrementQuantityField($product, $ownValue, $fallbackValue)
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_product_update', ['id' => $product->getId()]));

        /** @var Form $form */
        $form = $crawler->selectButton('Save and Close')->form();
        $form['input_action'] = 'save_and_close';

        $this->updateFallbackField($form, $ownValue, $fallbackValue, 'oro_product', 'decrementQuantity');

        $this->client->followRedirects(true);

        return $this->client->submit($form);
    }

    public function testCategoryDecrementQuantity()
    {
        $newCategoryFallbackValue = true;
        $category = $this->getReference(LoadCategoryData::FIRST_LEVEL);
        $crawler = $this->client->request(
            'GET',
            $this->getUrl('oro_catalog_category_update', ['id' => $category->getId()])
        );
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        /** @var Form $form */
        $form = $crawler->selectButton('Save')->form();
        $inventoryDecrementValue = $form->get('oro_catalog_category[decrementQuantity][scalarValue]')->getValue();
        $this->assertEmpty($inventoryDecrementValue);

        $form['input_action'] = 'save';
        $form['oro_catalog_category[decrementQuantity][useFallback]'] = false;
        $form['oro_catalog_category[decrementQuantity][scalarValue]'] = $newCategoryFallbackValue;
        $this->client->followRedirects(true);

        $crawler = $this->client->submit($form);

        $form = $crawler->selectButton('Save')->form();
        $this->assertEquals(
            $newCategoryFallbackValue,
            $form->get('oro_catalog_category[decrementQuantity][scalarValue]')->getValue()
        );
    }
}
