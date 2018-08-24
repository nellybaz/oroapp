<?php

namespace Oro\Bundle\ShippingBundle\Tests\Functional\Controller;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Component\PhpUtils\ArrayUtil;

class SystemConfigurationTest extends WebTestCase
{
    /** @var ConfigManager */
    protected $configManager;

    protected function setUp()
    {
        $this->initClient([], static::generateBasicAuthHeader());
        $this->client->useHashNavigation(true);

        $this->configManager = static::getContainer()->get('oro_config.global');
    }

    public function testConfig()
    {
        $crawler = $this->client->request(
            'GET',
            $this->getUrl(
                'oro_config_configuration_system',
                ['activeGroup' => 'commerce', 'activeSubGroup' => 'shipping_origin']
            )
        );

        static::assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 200);

        $token = static::getContainer()->get('security.csrf.token_manager')->getToken('shipping_origin')->getValue();
        $form = $crawler->selectButton('Save settings')->form();
        $formData = ArrayUtil::arrayMergeRecursiveDistinct(
            $form->getPhpValues(),
            [
                'shipping_origin' => [
                    'oro_shipping___shipping_origin' => [
                        'use_parent_scope_value' => false,
                        'value' => [
                            'country' => 'US',
                            'region' => 'US-NY',
                            'postalCode' => 'code2',
                            'city' => 'city2',
                            'street' => 'street2',
                            'street2' => 'street3',
                        ],
                    ],
                    '_token' => $token,
                ],
            ]
        );

        $this->client->followRedirects(true);
        $this->client->request($form->getMethod(), $form->getUri(), $formData);

        static::assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 200);

        $this->configManager->reload();

        $this->assertEquals(
            [
                'country' => 'US',
                'region' => 'US-NY',
                'region_text' => null,
                'postalCode' => 'code2',
                'city' => 'city2',
                'street' => 'street2',
                'street2' => 'street3',
            ],
            $this->configManager->get('oro_shipping.shipping_origin')
        );
    }
}
