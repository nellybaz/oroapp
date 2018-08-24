<?php

namespace Oro\Bundle\RFPBundle\Tests\Functional;

use Symfony\Component\DomCrawler\Crawler;

use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadProductPrices;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\FrontendTestFrameworkBundle\Migrations\Data\ORM\LoadCustomerUserData;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\ComponentProcessor\DataStorageAwareComponentProcessor;
use Oro\Bundle\VisibilityBundle\Tests\Functional\DataFixtures\LoadFrontendProductVisibilityData;

class RFPFrontendActionsTest extends WebTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->initClient(
            [],
            $this->generateBasicAuthHeader(LoadCustomerUserData::AUTH_USER, LoadCustomerUserData::AUTH_PW)
        );

        $this->loadFixtures(
            [
                LoadProductPrices::class,
                LoadFrontendProductVisibilityData::class,
            ]
        );
    }

    public function testQuickAdd()
    {
        $this->markTestSkipped(
            'Waiting for new quick order page to be finished'
        );

        $crawler = $this->client->request('GET', $this->getUrl('oro_product_frontend_quick_add'));
        $this->assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 200);

        $form = $crawler->filter('form[name="oro_product_quick_add"]')->form();

        /** @var Product $product */
        $product = $this->getReference('product-3');

        $products = [
            [
                'productSku' => $product->getSku(),
                'productQuantity' => 15,
            ],
        ];

        /** @var DataStorageAwareComponentProcessor $processor */
        $processor = $this->getContainer()->get('oro_rfp.processor.quick_add');

        $this->client->followRedirects(true);
        $crawler = $this->client->request(
            $form->getMethod(),
            $form->getUri(),
            [
                'oro_product_quick_add' => [
                    '_token' => $form['oro_product_quick_add[_token]']->getValue(),
                    'products' => $products,
                    'component' => $processor->getName(),
                ],
            ]
        );

        $this->assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 200);

        $expectedQuickAddLineItems = [
            [
                'product' => $product->getId(),
                'quantity' => 15,
            ],
        ];

        $this->assertEquals($expectedQuickAddLineItems, $this->getActualLineItems($crawler, 1));

        $form = $crawler->selectButton('Submit Request')->form();
        $form['oro_rfp_frontend_request[firstName]'] = 'Firstname';
        $form['oro_rfp_frontend_request[lastName]'] = 'Lastname';
        $form['oro_rfp_frontend_request[email]'] = 'email@example.com';
        $form['oro_rfp_frontend_request[phone]'] = '55555555';
        $form['oro_rfp_frontend_request[company]'] = 'Test Company';
        $form['oro_rfp_frontend_request[role]'] = 'Test Role';
        $form['oro_rfp_frontend_request[note]'] = 'Test notes';
        $form['oro_rfp_frontend_request[requestProducts][0][requestProductItems][0][price][value]'] = 100;
        $form['oro_rfp_frontend_request[requestProducts][0][requestProductItems][0][price][currency]'] = 'USD';

        $crawler = $this->client->submit($form);

        $this->assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 200);
        $this->assertContains('Request has been saved', $crawler->html());
    }

    /**
     * @param Crawler $crawler
     * @param int $count
     * @return array
     */
    protected function getActualLineItems(Crawler $crawler, $count)
    {
        $result = [];
        $basePath = 'input[name="oro_rfp_frontend_request[requestProducts]';

        for ($i = 0; $i < $count; $i++) {
            $value = $crawler->filter($basePath.'['.$i.'][product]"]')->extract('value');
            $quantity = $crawler->filter($basePath.'['.$i.'][requestProductItems][0][quantity]"]')
                ->extract('value');

            $this->assertNotEmpty($value, 'Product is empty');
            $this->assertNotEmpty($quantity, 'Quantity is empty');

            $result[] = ['product' => $value[0], 'quantity' => $quantity[0]];
        }

        return $result;
    }
}
