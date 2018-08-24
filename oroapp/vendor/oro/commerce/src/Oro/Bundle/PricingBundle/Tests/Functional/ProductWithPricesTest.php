<?php

namespace Oro\Bundle\PricingBundle\Tests\Functional;

use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeFamily;
use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Model\FallbackType;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Migrations\Data\ORM\LoadProductDefaultAttributeFamilyData;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Form;

class ProductWithPricesTest extends WebTestCase
{
    const TEST_SKU = 'SKU-001';

    const PRICE_LIST_NAME = 'price_list_1';

    const FIRST_UNIT_CODE = 'item';
    const FIRST_UNIT_FULL_NAME = 'item';
    const FIRST_UNIT_PRECISION = 0;
    const SECOND_UNIT_CODE = 'kg';
    const SECOND_UNIT_FULL_NAME = 'kilogram';
    const SECOND_UNIT_PRECISION = 3;

    const FIRST_QUANTITY = 10;
    const SECOND_QUANTITY = 5.555556;
    const EXPECTED_SECOND_QUANTITY = 5.556;

    const FIRST_PRICE_VALUE = 10;
    const FIRST_PRICE_CURRENCY = 'USD';
    const SECOND_PRICE_VALUE = 0.5;
    const SECOND_PRICE_CURRENCY = 'USD';

    const DEFAULT_NAME = 'default name';

    const CATEGORY_ID = 1;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);
        $this->loadFixtures(['Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadPriceLists']);
    }

    /**
     * @return AttributeFamily
     */
    private function getDefaultFamily()
    {
        $defaultFamily = $this->getContainer()
            ->get('oro_entity.doctrine_helper')
            ->getEntityRepositoryForClass(AttributeFamily::class)
            ->findOneBy(['code' => LoadProductDefaultAttributeFamilyData::DEFAULT_FAMILY_CODE]);

        return $defaultFamily;
    }

    /**
     * @return string
     */
    public function testCreate()
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_product_create'));
        $form = $crawler->selectButton('Continue')->form();
        $formValues = $form->getPhpValues();
        $formValues['input_action'] = 'oro_product_create';
        $formValues['oro_product_step_one']['category'] = self::CATEGORY_ID;
        $formValues['oro_product_step_one']['type'] = Product::TYPE_SIMPLE;
        $formValues['oro_product_step_one']['attributeFamily'] = $this->getDefaultFamily()->getId();

        $this->client->followRedirects(true);
        $crawler = $this->client->request('POST', $this->getUrl('oro_product_create'), $formValues);

        /** @var Form $form */
        $form = $crawler->selectButton('Save and Close')->form();

        /** @var PriceList $priceList */
        $priceList = $this->getReference(self::PRICE_LIST_NAME);

        $this->client->followRedirects(true);

        $localizations = $this->getLocalizations();

        $formData = $form->getPhpValues()['oro_product'];
        $formData = array_merge($formData, [
            '_token' => $form['oro_product[_token]']->getValue(),
            'owner'  => $this->getBusinessUnitId(),
            'sku'    => self::TEST_SKU,
            'inventory_status' => Product::INVENTORY_STATUS_IN_STOCK,
            'primaryUnitPrecision' => [
                'unit'      => self::FIRST_UNIT_CODE,
                'precision' => self::FIRST_UNIT_PRECISION
            ],
            'additionalUnitPrecisions' => [

                [
                    'unit'      => self::SECOND_UNIT_CODE,
                    'precision' => self::SECOND_UNIT_PRECISION
                ]
            ],
            'prices' => [
                [
                    'priceList' => $priceList->getId(),
                    'price'     => [
                        'value'    => self::FIRST_PRICE_VALUE,
                        'currency' => self::FIRST_PRICE_CURRENCY
                    ],
                    'quantity'  => self::FIRST_QUANTITY,
                    'unit'      => self::FIRST_UNIT_CODE
                ]
            ],
            'status' => Product::STATUS_ENABLED,
            'type' => Product::TYPE_SIMPLE,
        ]);

        $formData['names']['values']['default'] = self::DEFAULT_NAME;
        foreach ($localizations as $localization) {
            $formData['names']['values']['localizations'][$localization->getId()]['fallback'] = FallbackType::SYSTEM;
        }
        $crawler = $this->client->request($form->getMethod(), $form->getUri(), [
            'input_action' => 'save_and_stay',
            'oro_product' => $formData
        ]);
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        $this->assertContains('Product has been saved', $crawler->html());

        $this->assertEquals(
            $priceList->getId(),
            $crawler->filter('input[name="oro_product[prices][0][priceList]"]')->extract('value')[0]
        );
        $this->assertEquals(
            self::FIRST_QUANTITY,
            $crawler->filter('input[name="oro_product[prices][0][quantity]"]')->extract('value')[0]
        );
        $this->assertEquals(
            self::FIRST_UNIT_FULL_NAME,
            $crawler->filter('select[name="oro_product[prices][0][unit]"] :selected')->html()
        );
        $this->assertEquals(
            self::FIRST_PRICE_VALUE,
            $crawler->filter('input[name="oro_product[prices][0][price][value]"]')->extract('value')[0]
        );
        $this->assertEquals(
            self::FIRST_PRICE_CURRENCY,
            $crawler->filter('select[name="oro_product[prices][0][price][currency]"] :selected')
                ->extract('value')[0]
        );

        /** @var Product $product */
        $product = $this->getContainer()->get('doctrine')
            ->getManagerForClass('OroProductBundle:Product')
            ->getRepository('OroProductBundle:Product')
            ->findOneBy(['sku' => self::TEST_SKU]);
        $this->assertNotEmpty($product);

        return $product->getId();
    }

    /**
     * @depends testCreate
     * @param $id int
     * @return integer
     */
    public function testUpdate($id)
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_product_update', ['id' => $id]));

        /** @var PriceList $priceList */
        $priceList = $this->getReference(self::PRICE_LIST_NAME);

        /** @var Form $form */
        $form = $crawler->selectButton('Save and Close')->form();
        $form['oro_product[sku]'] = self::TEST_SKU;
        $form['oro_product[prices][0][priceList]'] = $priceList->getId();
        $form['oro_product[prices][0][quantity]'] = self::SECOND_QUANTITY;
        $form['oro_product[prices][0][unit]'] = self::SECOND_UNIT_CODE;
        $form['oro_product[prices][0][price][value]'] = self::SECOND_PRICE_VALUE;
        $form['oro_product[prices][0][price][currency]'] = self::SECOND_PRICE_CURRENCY;

        $this->client->followRedirects(true);

        $crawler = $this->client->submit($form);
        $result = $this->client->getResponse();

        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains('Product has been saved', $crawler->html());

        $crawler = $this->client->request('GET', $this->getUrl('oro_product_update', ['id' => $id]));

        $this->assertEquals(
            $priceList->getId(),
            $crawler->filter('input[name="oro_product[prices][0][priceList]"]')->extract('value')[0]
        );
        $this->assertEquals(
            self::EXPECTED_SECOND_QUANTITY,
            $crawler->filter('input[name="oro_product[prices][0][quantity]"]')->extract('value')[0]
        );
        $this->assertEquals(
            self::SECOND_UNIT_FULL_NAME,
            $crawler->filter('select[name="oro_product[prices][0][unit]"] :selected')->html()
        );
        $this->assertEquals(
            self::SECOND_PRICE_VALUE,
            $crawler->filter('input[name="oro_product[prices][0][price][value]"]')->extract('value')[0]
        );
        $this->assertEquals(
            self::SECOND_PRICE_CURRENCY,
            $crawler->filter('select[name="oro_product[prices][0][price][currency]"] :selected')
                ->extract('value')[0]
        );

        return $id;
    }

    /**
     * @depends testUpdate
     * @param integer $id
     */
    public function testDelete($id)
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_product_update', ['id' => $id]));

        /** @var Form $form */
        $form = $crawler->selectButton('Save and Close')->form();

        unset($form['oro_product[prices]']);

        $this->client->followRedirects(true);

        $crawler = $this->client->submit($form);
        $result = $this->client->getResponse();

        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains('Product has been saved', $crawler->html());

        $crawler = $this->client->request('GET', $this->getUrl('oro_product_update', ['id' => $id]));

        $this->assertContains('oro_product[additionalUnitPrecisions][0]', $crawler->html());
        $this->assertNotContains('oro_product[prices][0]', $crawler->html());
    }

    /**
     * @return Localization[]
     */
    protected function getLocalizations()
    {
        return $this->getContainer()->get('doctrine')->getManagerForClass('OroLocaleBundle:Localization')
            ->getRepository('OroLocaleBundle:Localization')
            ->findAll();
    }

    /**
     * @return integer
     */
    protected function getBusinessUnitId()
    {
        return $this->getContainer()->get('security.token_storage')->getToken()->getUser()->getOwner()->getId();
    }
}
