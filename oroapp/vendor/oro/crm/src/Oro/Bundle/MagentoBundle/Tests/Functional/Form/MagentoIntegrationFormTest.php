<?php

namespace Oro\Bundle\MagentoBundle\Tests\Functional\Form;

use Symfony\Component\DomCrawler\Crawler;

use Oro\Bundle\IntegrationBundle\Manager\TypesRegistry;
use Oro\Bundle\IntegrationBundle\Provider\ConnectorInterface;
use Oro\Bundle\MagentoBundle\Provider\ExtensionAwareInterface;
use Oro\Bundle\MagentoBundle\Provider\MagentoChannelType;
use Oro\Bundle\MagentoBundle\Provider\Magento2ChannelType;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

class MagentoIntegrationFormTest extends WebTestCase
{
    /** @var  TypesRegistry */
    protected $typesRegistry;

    protected function setUp()
    {
        $this->initClient(['debug' => false], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);

        $this->typesRegistry = $this->client
                                    ->getContainer()
                                    ->get('oro_integration.manager.types_registry');
    }

    /**
     * @dataProvider magentoIntegrationConnectorsProvider
     *
     * @param string    $integrationType
     */
    public function testMagento2RestIntegrationConnectors($integrationType)
    {
        $expected = $this->getExpectedConnectors($integrationType);

        $crawler = $this->client->request(
            'GET',
            $this->getUrl(
                'oro_channel_integration_create',
                [
                    'type' => $integrationType,
                    '_widgetContainer' => 'dialog'
                ]
            )
        );

        $form = $crawler->selectButton('Save')->form();
        $fields = $form->get('oro_integration_channel_form[connectors]');

        $this->assertCount(count($expected), $fields);

        $input = $crawler->filter('input[name="oro_integration_channel_form[connectors][]"]');

        $values = $input->each(function (Crawler $node) {
            return $node->attr("value");
        });

        foreach ($values as $value) {
            $this->assertContains($value, $expected);
        }
    }

    /**
     * @return array
     */
    public function magentoIntegrationConnectorsProvider()
    {
        return [
            [
                'type' => MagentoChannelType::TYPE
            ],
            // @todo: Configuration runs test for magento2. It should be enabled in CRM-8153
//            [
//                'type' => Magento2ChannelType::TYPE
//            ]
        ];
    }

    /**
     * @param string $channelType
     *
     * @return array
     */
    protected function getExpectedConnectors($channelType)
    {
        return array_flip($this->typesRegistry->getAvailableConnectorsTypesChoiceList(
            $channelType,
            function (ConnectorInterface $connector) {
                return $connector instanceof ExtensionAwareInterface ? false : true;
            }
        ));
    }
}
