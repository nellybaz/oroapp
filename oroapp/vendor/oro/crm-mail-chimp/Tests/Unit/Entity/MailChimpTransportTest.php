<?php

namespace Oro\Bundle\MailChimpBundle\Tests\Unit\Entity;

use Symfony\Component\HttpFoundation\ParameterBag;

use Oro\Bundle\MailChimpBundle\Entity\MailChimpTransport;

class MailChimpTransportTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MailChimpTransport
     */
    protected $entity;

    protected function setUp()
    {
        $this->entity = new MailChimpTransport();
    }

    public function testApiKey()
    {
        $apiKey = uniqid();
        $this->entity->setApiKey($apiKey);

        $this->assertEquals($apiKey, $this->entity->getApiKey());
    }

    public function testActivityUpdateInterval()
    {
        $this->assertEquals(
            MailChimpTransport::DEFAULT_ACTIVITY_UPDATE_INTERVAL,
            $this->entity->getActivityUpdateInterval()
        );
        $this->entity->setActivityUpdateInterval(42);
        $this->assertEquals(42, $this->entity->getActivityUpdateInterval());
    }

    public function testSettingsBag()
    {
        $apiKey = uniqid();
        $this->entity->setApiKey($apiKey);
        $this->entity->setActivityUpdateInterval(42);
        $this->assertNotNull($this->entity->getApiKey());
        $this->assertEquals(
            new ParameterBag(
                [
                    'apiKey' => $apiKey,
                    'activityUpdateInterval' => 42
                ]
            ),
            $this->entity->getSettingsBag()
        );

        // same any time
        $this->assertEquals(
            new ParameterBag(
                [
                    'apiKey' => $apiKey,
                    'activityUpdateInterval' => 42
                ]
            ),
            $this->entity->getSettingsBag()
        );
    }
}
