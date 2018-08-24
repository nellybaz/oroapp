<?php

namespace Oro\Bundle\MessageQueueBundle\Tests\Unit\Log\Handler;

use Monolog\Logger;

use Symfony\Component\Console\Event\ConsoleCommandEvent;
use Symfony\Component\Console\Event\ConsoleTerminateEvent;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;

use Oro\Bundle\MessageQueueBundle\Log\ConsumerState;
use Oro\Bundle\MessageQueueBundle\Log\Handler\ConsoleHandler;

class ConsoleHandlerTest extends \PHPUnit_Framework_TestCase
{
    /** @var ConsumerState */
    private $consumerState;

    /** @var \PHPUnit_Framework_MockObject_MockObject|OutputInterface */
    private $output;

    /** @var ConsoleHandler */
    private $handler;

    protected function setUp()
    {
        $this->consumerState = new ConsumerState();
        $this->output = $this->createMock(OutputInterface::class);

        $this->handler = new ConsoleHandler($this->consumerState);
        $this->handler->setOutput($this->output);
    }

    public function testIsHandlingWhenConsumptionIsNotStarted()
    {
        $this->output->expects(self::never())
            ->method('getVerbosity');

        self::assertFalse($this->handler->isHandling([]));
    }

    public function testIsHandlingWhenConsumptionIsStarted()
    {
        $this->output->expects(self::once())
            ->method('getVerbosity')
            ->willReturn(OutputInterface::VERBOSITY_DEBUG);

        $this->consumerState->startConsumption();
        self::assertTrue($this->handler->isHandling(['level' => Logger::DEBUG]));
    }

    public function testHandleWhenConsumptionIsNotStarted()
    {
        $this->output->expects(self::never())
            ->method('getVerbosity');
        $this->output->expects(self::never())
            ->method('write');

        self::assertFalse($this->handler->handle([]));
    }

    public function testHandleWhenConsumptionIsStarted()
    {
        $this->output->expects(self::any())
            ->method('getVerbosity')
            ->willReturn(OutputInterface::VERBOSITY_DEBUG);
        $this->output->expects(self::once())
            ->method('write')
            ->with('%level_name%: test message {"processor":"Test\Processor"} {"key":"value"}' . "\n");

        $this->consumerState->startConsumption();
        self::assertFalse(
            $this->handler->handle([
                'message' => 'test message',
                'level'   => Logger::DEBUG,
                'context' => ['key' => 'value'],
                'extra'   => ['processor' => 'Test\Processor']
            ])
        );
    }

    public function testCommandEventSubscriber()
    {
        $this->consumerState->startConsumption();
        $handler = new ConsoleHandler($this->consumerState);

        $commandEvent = new ConsoleCommandEvent(
            $this->createMock(Command::class),
            $this->createMock(InputInterface::class),
            $this->output
        );
        $nestedCommandEvent = new ConsoleCommandEvent(
            $this->createMock(Command::class),
            $this->createMock(InputInterface::class),
            $this->createMock(OutputInterface::class)
        );

        // start a root command
        $handler->onCommand($commandEvent);
        // start a nested command
        $handler->onCommand($nestedCommandEvent);

        // test that the output of a root command is set
        $this->output->expects(self::any())
            ->method('getVerbosity')
            ->willReturn(OutputInterface::VERBOSITY_DEBUG);
        $this->output->expects(self::once())
            ->method('write')
            ->with('%level_name%: test message  ' . "\n");
        self::assertFalse(
            $this->handler->handle([
                'message' => 'test message',
                'level'   => Logger::DEBUG,
                'context' => [],
                'extra'   => []
            ])
        );

        // test that the output is not removed when a nested command terminates
        $handler->onTerminate(
            new ConsoleTerminateEvent(
                $nestedCommandEvent->getCommand(),
                $nestedCommandEvent->getInput(),
                $nestedCommandEvent->getOutput(),
                0
            )
        );
        self::assertTrue($handler->isHandling(['level' => Logger::DEBUG]));

        // test that the output is removed when a root command terminates
        $handler->onTerminate(
            new ConsoleTerminateEvent(
                $commandEvent->getCommand(),
                $commandEvent->getInput(),
                $commandEvent->getOutput(),
                0
            )
        );
        self::assertFalse($handler->isHandling(['level' => Logger::DEBUG]));
    }

    public function testOnCommandShouldSetStdoutNotStderr()
    {
        $output = $this->createMock(ConsoleOutputInterface::class);

        $commandEvent = new ConsoleCommandEvent(
            $this->createMock(Command::class),
            $this->createMock(InputInterface::class),
            $output
        );
        $output->expects(self::never())
            ->method('getErrorOutput');

        $handler = new ConsoleHandler($this->consumerState);
        $handler->onCommand($commandEvent);
    }
}
