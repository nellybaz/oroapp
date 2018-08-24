<?php

namespace Oro\Bundle\FedexShippingBundle\Tests\Functional\Controller;

use Oro\Bundle\AddressBundle\Entity\Country;
use Oro\Bundle\AddressBundle\Entity\Region;
use Oro\Bundle\FedexShippingBundle\Tests\Functional\Stub\SoapClientStub;
use Oro\Bundle\ShippingBundle\Model\ShippingOrigin;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

class ValidateConnectionControllerTest extends WebTestCase
{
    protected function setUp()
    {
        $this->initClient([], static::generateBasicAuthHeader());
    }

    public function testValidateConnectionActionNoShippingOptions()
    {
        $this->client->request(
            'POST',
            $this->getUrl('oro_fedex_validate_connection', ['channelId' => 0])
        );

        //@codingStandardsIgnoreStart
        $this->assertResponseHasErrorMessage(
            'No shipping origin options provided. Please, fill them in System Configuration -> Shipping -> Shipping Origin'
        );
        //@codingStandardsIgnoreEnd
    }

    public function testValidateConnectionActionAuthorizationError()
    {
        $this->setConfigShippingOrigin();

        $this->client->request(
            'POST',
            $this->getUrl('oro_fedex_validate_connection', ['channelId' => '0']),
            $this->getRequestFormData(SoapClientStub::AUTHORIZATION_ERROR_OPTION)
        );

        $this->assertResponseHasErrorMessage('Authentication error has occurred');
    }

    public function testValidateConnectionActionConnectionError()
    {
        $this->setConfigShippingOrigin();

        $this->client->request(
            'POST',
            $this->getUrl('oro_fedex_validate_connection', ['channelId' => '0']),
            $this->getRequestFormData(SoapClientStub::CONNECTION_ERROR_OPTION)
        );

        $this->assertResponseHasErrorMessage('Connection error has occurred. Please, try again later');
    }

    public function testValidateConnectionActionNoServices()
    {
        $this->setConfigShippingOrigin();

        $this->client->request(
            'POST',
            $this->getUrl('oro_fedex_validate_connection', ['channelId' => '0']),
            $this->getRequestFormData(SoapClientStub::NO_SERVICES_OPTION)
        );
        $this->assertResponseHasErrorMessage(
            'No services are available for current configuration,'
            .' make sure that Shipping Origin configuration is correct in'
            .' System Configuration -> Shipping -> Shipping Origin'
        );
    }

    public function testValidateConnectionActionOk()
    {
        $this->setConfigShippingOrigin();

        $this->client->request(
            'POST',
            $this->getUrl('oro_fedex_validate_connection', ['channelId' => '0']),
            $this->getRequestFormData(SoapClientStub::OK_OPTION)
        );

        $result = static::getJsonResponseContent($this->client->getResponse(), 200);

        static::assertTrue($result['success']);
        static::assertEquals(
            'Connection is valid',
            $result['message']
        );
    }

    /**
     * @param string $key
     *
     * @return array
     */
    private function getRequestFormData(string $key): array
    {
        return [
            'oro_integration_channel_form' => [
                'type' => 'fedex',
                'name' => 'fedex',
                'transportType' => 'fedex',
                'transport' => [
                    'labels' => [
                        'values' => ['default' => 'fedex'],
                    ],
                    'key' => $key,
                    'password' => 'password',
                    'accountNumber' => 'accountNumber',
                    'meterNumber' => 'meterNumber',
                    'pickupType' => 'pickupType',
                    'unitOfWeight' => 'unitOfWeight',
                    'shippingServices' => ['2'],
                ],
            ],
        ];
    }

    private function setConfigShippingOrigin()
    {
        $configManager = static::getContainer()->get('oro_config.global');

        $configManager->set(
            'oro_shipping.shipping_origin',
            (new ShippingOrigin())
                ->setCountry(new Country('US'))
                ->setRegion(new Region('US-CA'))
                ->setCity('City')
                ->setPostalCode('12345')
                ->setStreet('street')
        );
        $configManager->flush();
    }

    /**
     * @param string $message
     */
    private function assertResponseHasErrorMessage(string $message)
    {
        $result = static::getJsonResponseContent($this->client->getResponse(), 200);

        static::assertFalse($result['success']);
        static::assertEquals(
            $message,
            $result['message']
        );
    }
}
