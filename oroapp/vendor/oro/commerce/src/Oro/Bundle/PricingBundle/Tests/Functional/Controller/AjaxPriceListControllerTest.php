<?php

namespace Oro\Bundle\PricingBundle\Tests\Functional\Controller;

use Symfony\Component\Intl\Intl;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\PricingBundle\Entity\PriceList;

class AjaxPriceListControllerTest extends WebTestCase
{
    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);

        $this->loadFixtures(['Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadPriceLists']);
    }

    public function testDefaultAction()
    {
        /** @var PriceList $priceList */
        $priceList = $this->getReference('price_list_1');

        $this->client->request(
            'GET',
            $this->getUrl('oro_pricing_price_list_default', ['id' => $priceList->getId()])
        );

        $result = $this->client->getResponse();
        $this->assertJsonResponseStatusCodeEquals($result, 200);

        $data = json_decode($result->getContent(), true);

        $this->assertArrayHasKey('successful', $data);
        $this->assertTrue($data['successful']);

        $defaultPriceLists = $this->getContainer()
            ->get('doctrine')
            ->getRepository('OroPricingBundle:PriceList')
            ->findBy(['default' => true]);

        $this->assertEquals([$priceList], $defaultPriceLists);
    }

    public function testGetPriceListCurrencyListAction()
    {
        /** @var PriceList $priceList */
        $priceList = $this->getReference('price_list_1');

        $this->client->request(
            'GET',
            $this->getUrl('oro_pricing_price_list_currency_list', ['id' => $priceList->getId()])
        );

        $result = $this->client->getResponse();
        $this->assertJsonResponseStatusCodeEquals($result, 200);

        $data = json_decode($result->getContent(), true);

        $this->assertEquals($priceList->getCurrencies(), array_keys($data));
        $this->assertEquals(
            array_map(
                function ($currencyCode) {
                    return Intl::getCurrencyBundle()->getCurrencyName($currencyCode);
                },
                $priceList->getCurrencies()
            ),
            array_values($data)
        );
    }
}
