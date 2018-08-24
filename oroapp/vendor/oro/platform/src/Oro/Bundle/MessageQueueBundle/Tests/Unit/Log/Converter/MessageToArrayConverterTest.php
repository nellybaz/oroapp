<?php

namespace Oro\Bundle\MessageQueueBundle\Tests\Unit\Log\Converter;

use Oro\Bundle\MessageQueueBundle\Log\Converter\MessageToArrayConverter;
use Oro\Component\MessageQueue\Transport\MessageInterface;

class MessageToArrayConverterTest extends \PHPUnit_Framework_TestCase
{
    /** @var MessageToArrayConverter */
    private $converter;

    protected function setUp()
    {
        $this->converter = new MessageToArrayConverter();
    }

    public function testConvertRequiredProperties()
    {
        $message = $this->createMock(MessageInterface::class);
        $message->expects(self::once())
            ->method('getMessageId')
            ->willReturn('123');
        $message->expects(self::once())
            ->method('getBody')
            ->willReturn('message body');
        $message->expects(self::once())
            ->method('getProperties')
            ->willReturn([]);
        $message->expects(self::once())
            ->method('getHeaders')
            ->willReturn([]);
        $message->expects(self::once())
            ->method('isRedelivered')
            ->willReturn(false);

        self::assertEquals(
            [
                'id'   => '123',
                'body' => 'message body'
            ],
            $this->converter->convert($message)
        );
    }

    public function testConvertAllProperties()
    {
        $message = $this->createMock(MessageInterface::class);
        $message->expects(self::once())
            ->method('getMessageId')
            ->willReturn('123');
        $message->expects(self::once())
            ->method('getBody')
            ->willReturn('message body');
        $message->expects(self::once())
            ->method('getProperties')
            ->willReturn(['property1' => 'val1']);
        $message->expects(self::once())
            ->method('getHeaders')
            ->willReturn(['header1' => 'val1']);
        $message->expects(self::once())
            ->method('isRedelivered')
            ->willReturn(true);

        self::assertEquals(
            [
                'id'          => '123',
                'body'        => 'message body',
                'properties'  => [
                    'property1' => 'val1'
                ],
                'headers'     => [
                    'header1' => 'val1'
                ],
                'redelivered' => true
            ],
            $this->converter->convert($message)
        );
    }
}
