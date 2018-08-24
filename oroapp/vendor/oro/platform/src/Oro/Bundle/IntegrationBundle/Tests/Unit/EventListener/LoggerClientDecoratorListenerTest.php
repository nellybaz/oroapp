<?php

namespace Oro\Bundle\IntegrationBundle\Tests\Unit\EventListener;

use Psr\Log\LoggerInterface;

use Oro\Bundle\IntegrationBundle\Provider\Rest\Client\RestClientInterface;
use Oro\Bundle\IntegrationBundle\Provider\Rest\Transport\RestTransportSettingsInterface;
use Oro\Bundle\IntegrationBundle\Event\ClientCreatedAfterEvent;
use Oro\Bundle\IntegrationBundle\EventListener\LoggerClientDecoratorListener;
use Oro\Bundle\IntegrationBundle\Provider\Rest\Client\Decorator\LoggerClientDecorator;

class LoggerClientDecoratorListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var LoggerClientDecoratorListener
     */
    protected $listener;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject | LoggerInterface
     */
    protected $logger;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->logger = $this->createMock(LoggerInterface::class);
        $this->listener = new LoggerClientDecoratorListener();
        $this->listener->setLogger($this->logger);
    }

    public function testDecoratorAttached()
    {
        $client = $this->createMock(RestClientInterface::class);
        $transport = $this->createMock(RestTransportSettingsInterface::class);
        $transport
            ->expects($this->any())
            ->method('getOptions')
            ->will($this->returnValue([]));

        $event = new ClientCreatedAfterEvent($client, $transport);
        $this->listener->onClientCreated($event);

        $this->assertInstanceOf(
            LoggerClientDecorator::class,
            $event->getClient(),
            "Decorator must be attached to client !"
        );
    }

    public function testDecoratorNotAttached()
    {
        $configuration = [
            LoggerClientDecoratorListener::CONFIG_KEY => [
                'enabled' => false
            ]
        ];

        $client = $this->createMock(RestClientInterface::class);
        $transport = $this->createMock(RestTransportSettingsInterface::class);
        $transport
            ->expects($this->any())
            ->method('getOptions')
            ->will($this->returnValue($configuration));

        $event = new ClientCreatedAfterEvent($client, $transport);
        $this->listener->onClientCreated($event);

        $this->assertSame($client, $event->getClient());
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->logger, $this->listener);
    }
}
