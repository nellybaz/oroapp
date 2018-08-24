<?php

namespace Oro\Bundle\MagentoBundle\Tests\Selenium;

use Oro\Bundle\TestFrameworkBundle\Test\Selenium2TestCase;
use Oro\Bundle\IntegrationBundle\Tests\Selenium\Pages\Integrations;
use Oro\Bundle\MagentoBundle\Tests\Selenium\Pages\Integration;

/**
 * Class CreateIntegrationTest
 *
 * @package Oro\Bundle\MagentoBundle\Tests\Selenium
 */
class ManageIntegrationTest extends Selenium2TestCase
{
    protected function setUp()
    {
        $this->markTestSkipped("Skipped because added Channels Management");
        $url = PHPUNIT_TESTSUITE_EXTENSION_MAGENTO_HOST . '/api/v2_soap/index/?wsdl=1';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if (!($httpCode>=200 && $httpCode<300)) {
            $this->markTestSkipped('Magento instance is not available');
        }

        parent::setUp();
    }

    /**
     * @return string
     */
    public function testCreateIntegration()
    {
        $name = 'Magento integration_' . mt_rand(10, 99);

        $login = $this->login();
        /** @var Integrations $login */
        $login = $login->openIntegrations('Oro\Bundle\IntegrationBundle')
            ->add()
            ->setName($name)
            ->setType('magento');
        /** @var Integration $login */
        $login->setWsdlUrl(PHPUNIT_TESTSUITE_EXTENSION_MAGENTO_HOST . '/api/v2_soap/index/?wsdl=1')
            ->setApiUser('api_user')
            ->setApiKey('api-key')
            ->setSyncDate('Jan 1, 2013')
            ->checkConnection()
            ->selectWebsite('All web sites')
            ->setAdminUrl(PHPUNIT_TESTSUITE_EXTENSION_MAGENTO_HOST . '/admin/')
            ->setConnectors(array('Customer connector', 'Order connector', 'Cart connector'))
            ->setTwoWaySync()
            ->setSyncPriority('Remote wins')
            ->save()
            ->assertMessage('Integration saved');

        return $name;
    }

    /**
     * @depends testCreateIntegration
     * @param $name
     * @return string
     */
    public function testDeactivateIntegration($name)
    {
        $login = $this->login();
        /** @var Integrations $login */
        $login->openIntegrations('Oro\Bundle\IntegrationBundle')
            ->filterBy('Name', $name)
            ->open(array($name))
            ->checkStatus('Active')
            ->deactivate()
            ->assertMessage('Integration deactivated')
            ->checkStatus('Inactive')
            ->activate()
            ->assertMessage('Integration activated')
            ->checkStatus('Active');
    }

    /**
     * @depends testCreateIntegration
     * @param $name
     */
    public function testScheduleIntegration($name)
    {
        $login = $this->login();
        /** @var Integrations $login */
        $login->openIntegrations('Oro\Bundle\IntegrationBundle')
            ->filterBy('Name', $name)
            ->open(array($name))
            ->scheduleSync()
            ->assertMessage('A sync job has been added to the queue.');
    }
}
