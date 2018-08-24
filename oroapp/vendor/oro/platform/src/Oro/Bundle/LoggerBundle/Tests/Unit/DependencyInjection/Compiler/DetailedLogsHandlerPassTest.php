<?php

namespace Oro\Bundle\LoggerBundle\Tests\Unit\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\DefinitionDecorator;
use Symfony\Component\DependencyInjection\Reference;

use Oro\Bundle\LoggerBundle\DependencyInjection\Compiler\DetailedLogsHandlerPass;
use Oro\Bundle\LoggerBundle\Monolog\DetailedLogsHandler;

class DetailedLogsHandlerPassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DetailedLogsHandlerPass
     */
    protected $compilerPass;

    /**
     * @var ContainerBuilder|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $containerBuilder;

    protected function setUp()
    {
        $this->containerBuilder = $this->createMock(ContainerBuilder::class);
        $this->compilerPass = new DetailedLogsHandlerPass();
    }

    /**
     * @dataProvider processDoesntExecuteWhenLoggerNotLoadedProvider
     *
     * @param bool $hasLogger
     * @param bool $hasHandler
     */
    public function testProcessDoesntExecuteWhenLoggerNotLoaded($hasLogger, $hasHandler)
    {
        $this->containerBuilder->expects($this->any())
            ->method('has')
            ->with('monolog.logger')
            ->willReturn($hasLogger);

        $this->containerBuilder->expects($this->any())
            ->method('has')
            ->with('oro_logger.monolog.detailed_logs.handler')
            ->willReturn($hasHandler);

        $this->containerBuilder->expects($this->never())->method('getParameter');
        $this->containerBuilder->expects($this->never())->method('findDefinition');
    }

    public function processDoesntExecuteWhenLoggerNotLoadedProvider()
    {
        return [
            [
                'hasLogger' => true,
                'hasHandler' => false
            ],
            [
                'hasLogger' => false,
                'hasHandler' => true
            ]
        ];
    }

    public function testRemoveNestedHandlersFromHandlersToChannelsParam()
    {
        $handlersToChannels = [
            'monolog.handler.detailed_logs_nested' => null,
            'monolog.handler.detailed_logs' => null,
            'monolog.handler.nested' => null,
            'monolog.handler.main' => null,
        ];

        $expectedHandlersToChannels = [
            'monolog.handler.detailed_logs' => null,
            'monolog.handler.nested' => null,
            'monolog.handler.main' => null,
        ];

        $this->containerBuilder->expects($this->exactly(2))->method('has')->willReturn(true);

        $this->containerBuilder->expects($this->once())
            ->method('getParameter')
            ->with('monolog.handlers_to_channels')
            ->willReturn($handlersToChannels);

        $this->containerBuilder->expects($this->once())->method('findTaggedServiceIds')->willReturn([]);

        $this->containerBuilder->expects($this->exactly(5))
            ->method('findDefinition')
            ->will($this->returnCallback(function ($handlerId) {
                switch ($handlerId) {
                    case 'monolog.logger':
                        $logger = $this->createMock(Definition::class);
                        $logger->expects($this->any())->method('getMethodCalls')->willReturn([]);
                        return $logger;
                    case 'monolog.handler.detailed_logs_nested':
                        return $this->createMock(Definition::class);
                    case 'monolog.handler.detailed_logs':
                        $handler = $this->createMock(DefinitionDecorator::class);
                        $handler->expects($this->once())
                            ->method('getParent')
                            ->willReturn(DetailedLogsHandlerPass::DETAILED_LOGS_HANDLER_PROTOTYPE_ID);
                        return $handler;
                    case 'monolog.handler.nested':
                        return $this->createMock(Definition::class);
                    case 'monolog.handler.main':
                        return $this->createMock(Definition::class);
                    default:
                        $this->fail("Call to findDefinition with unexpected argument: $handlerId");
                        return null;
                }
            }));

        $this->containerBuilder->expects($this->once())
            ->method('setParameter')
            ->with('monolog.handlers_to_channels', $expectedHandlersToChannels);

        $this->compilerPass->process($this->containerBuilder);
    }

    /**
     * @expectedException \Oro\Bundle\LoggerBundle\Exception\InvalidConfigurationException
     */
    public function testRemoveNestedHandlersFromHandlersToChannelsParamFails()
    {
        $handlersToChannels = [
            'monolog.handler.detailed_logs' => null,
            'monolog.handler.nested' => null,
            'monolog.handler.main' => null,
        ];

        $this->containerBuilder->expects($this->exactly(2))->method('has')->willReturn(true);

        $this->containerBuilder->expects($this->once())
            ->method('getParameter')
            ->with('monolog.handlers_to_channels')
            ->willReturn($handlersToChannels);

        $detailedLogsHandler = $this->createMock(DefinitionDecorator::class);
        $detailedLogsHandler->expects($this->once())
            ->method('getParent')
            ->willReturn(DetailedLogsHandlerPass::DETAILED_LOGS_HANDLER_PROTOTYPE_ID);

        $this->containerBuilder->expects($this->once())
            ->method('findDefinition')
            ->willReturn($detailedLogsHandler);

        $this->compilerPass->process($this->containerBuilder);
    }

    public function testRemoveNestedHandlersFromAllChannels()
    {
        $this->containerBuilder->expects($this->exactly(2))->method('has')->willReturn(true);

        $this->containerBuilder->expects($this->once())
            ->method('getParameter')
            ->with('monolog.handlers_to_channels')
            ->willReturn([]);

        $this->containerBuilder->expects($this->once())
            ->method('findTaggedServiceIds')
            ->willReturn([
                [['channel' => 'doctrine']]
            ]);

        $this->containerBuilder->expects($this->exactly(6))
            ->method('findDefinition')
            ->will($this->returnCallback(function ($handlerId) {
                switch ($handlerId) {
                    case 'monolog.logger':
                    case 'monolog.logger.doctrine':
                        $detailedLogsNestedHandlerReference = $this->createMock(Reference::class);
                        $detailedLogsNestedHandlerReference->expects($this->any())
                            ->method('__toString')
                            ->willReturn('monolog.handler.detailed_logs_nested');

                        $detailedLogsHandlerReference = $this->createMock(Reference::class);
                        $detailedLogsHandlerReference->expects($this->any())
                            ->method('__toString')
                            ->willReturn('monolog.handler.detailed_logs');

                        $nestedHandlerReference = $this->createMock(Reference::class);
                        $nestedHandlerReference->expects($this->any())
                            ->method('__toString')
                            ->willReturn('monolog.handler.nested');

                        $mainHandlerReference = $this->createMock(Reference::class);
                        $mainHandlerReference->expects($this->any())
                            ->method('__toString')
                            ->willReturn('monolog.handler.main');

                        $logger = $this->createMock(Definition::class);
                        $logger->expects($this->any())
                            ->method('getMethodCalls')
                            ->willReturn([
                                ['pushHandler', [$detailedLogsNestedHandlerReference]],
                                ['pushHandler', [$detailedLogsHandlerReference]],
                                ['pushHandler', [$nestedHandlerReference]],
                                ['pushHandler', [$mainHandlerReference]]
                            ]);

                        $logger->expects($this->once())
                            ->method('removeMethodCall')
                            ->with('pushHandler')
                            ->willReturn($logger);

                        $newDetailedLogsHandlerReference = new Reference(
                            DetailedLogsHandlerPass::DETAILED_LOGS_HANDLER_SERVICE_PREFIX . 'detailed_logs'
                        );

                        $logger->expects($this->once())
                            ->method('setMethodCalls')
                            ->with([
                                1 => ['pushHandler', [$newDetailedLogsHandlerReference]],
                                2 => ['pushHandler', [$nestedHandlerReference]],
                                3 => ['pushHandler', [$mainHandlerReference]]
                            ]);

                        return $logger;
                    case 'monolog.handler.detailed_logs_nested':
                        return $this->createMock(Definition::class);
                    case 'monolog.handler.detailed_logs':
                        $handler = $this->createMock(DefinitionDecorator::class);
                        $handler->expects($this->once())
                            ->method('getParent')
                            ->willReturn(DetailedLogsHandlerPass::DETAILED_LOGS_HANDLER_PROTOTYPE_ID);
                        return $handler;
                    case 'monolog.handler.nested':
                        return $this->createMock(Definition::class);
                    case 'monolog.handler.main':
                        return $this->createMock(Definition::class);
                    case 'oro_logger.monolog.detailed_logs.handler':
                        $handler = $this->createMock(Definition::class);
                        $handler->expects($this->once())
                            ->method('addMethodCall')
                            ->with('setHandler', $this->callback(function ($args) {
                                return (string)$args[0] == 'monolog.handler.detailed_logs_nested';
                            }));
                        return $handler;
                    default:
                        $this->fail("Call to findDefinition with unexpected argument: $handlerId");
                        return null;
                }
            }));

        $this->compilerPass->process($this->containerBuilder);
    }

    /**
     * @expectedException \Oro\Bundle\LoggerBundle\Exception\InvalidConfigurationException
     */
    public function testRemoveNestedHandlersFromAllChannelsFails()
    {
        $this->containerBuilder->expects($this->exactly(2))->method('has')->willReturn(true);

        $this->containerBuilder->expects($this->once())
            ->method('getParameter')
            ->with('monolog.handlers_to_channels')
            ->willReturn([]);

        $this->containerBuilder->expects($this->once())
            ->method('findTaggedServiceIds')
            ->willReturn([]);

        $this->containerBuilder->expects($this->exactly(2))
            ->method('findDefinition')
            ->will($this->returnCallback(function ($handlerId) {
                switch ($handlerId) {
                    case 'monolog.logger':
                        $detailedLogsHandlerReference = $this->createMock(Reference::class);
                        $detailedLogsHandlerReference->expects($this->any())
                            ->method('__toString')
                            ->willReturn('monolog.handler.detailed_logs');

                        $nestedHandlerReference = $this->createMock(Reference::class);
                        $nestedHandlerReference->expects($this->any())
                            ->method('__toString')
                            ->willReturn('monolog.handler.nested');

                        $mainHandlerReference = $this->createMock(Reference::class);
                        $mainHandlerReference->expects($this->any())
                            ->method('__toString')
                            ->willReturn('monolog.handler.main');

                        $logger = $this->createMock(Definition::class);
                        $logger->expects($this->any())
                            ->method('getMethodCalls')
                            ->willReturn([
                                ['pushHandler', [$detailedLogsHandlerReference]],
                                ['pushHandler', [$nestedHandlerReference]],
                                ['pushHandler', [$mainHandlerReference]]
                            ]);

                        return $logger;
                    case 'monolog.handler.detailed_logs':
                        $handler = $this->createMock(DefinitionDecorator::class);
                        $handler->expects($this->once())
                            ->method('getParent')
                            ->willReturn(DetailedLogsHandlerPass::DETAILED_LOGS_HANDLER_PROTOTYPE_ID);
                        return $handler;
                    default:
                        $this->fail("Call to findDefinition with unexpected argument: $handlerId");
                        return null;
                }
            }));

        $this->compilerPass->process($this->containerBuilder);
    }
}
