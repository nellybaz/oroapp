<?php
namespace Oro\Bundle\SyncBundle\Tests\Unit\Wamp;

use Oro\Bundle\SyncBundle\Authentication\Ticket\TicketProvider;
use Oro\Bundle\SyncBundle\Wamp\TopicPublisher;
use Oro\Bundle\SyncBundle\Wamp\WebSocket;

class TopicPublisherTest extends \PHPUnit_Framework_TestCase
{
    const TOPIC = 'Topic';
    const MESSAGE = 'Message';

    /** @var  TopicPublisher */
    protected $wamp;

    /** @var WebSocket */
    protected $socket;
    protected function setUp()
    {
        $this->socket = $this->createMock('Oro\Bundle\SyncBundle\Wamp\WebSocket');

        $this->wamp = new TopicPublisher('example.com', 1);
        /** @var  \ReflectionClass $reflection */
        $reflection = new \ReflectionClass('Oro\Bundle\SyncBundle\Wamp\TopicPublisher');
        $reflection_property = $reflection->getProperty('ws');
        $reflection_property->setAccessible(true);
        $reflection_property->setValue($this->wamp, $this->socket);
    }

    public function testSend()
    {
        $this->socket->expects($this->any())
            ->method('sendData')
            ->with(
                json_encode(
                    array(
                          \Ratchet\Wamp\ServerProtocol::MSG_PUBLISH,
                          self::TOPIC,
                          self::MESSAGE
                    )
                )
            );
        $this->assertTrue($this->wamp->send(self::TOPIC, self::MESSAGE));
    }

    public function testCheckTrue()
    {
        $this->assertTrue($this->wamp->check());
    }

    public function testCheckFalse()
    {
        $this->wamp = new TopicPublisher('example.com', 1);
        $ticketProvider = $this->createMock(TicketProvider::class);
        $ticketProvider->expects($this->once())
            ->method('generateTicket')
            ->with(true)
            ->willReturn('test_ticket');
        $this->wamp->setTicketProvider($ticketProvider);

        $this->assertFalse($this->wamp->check());
    }
}
