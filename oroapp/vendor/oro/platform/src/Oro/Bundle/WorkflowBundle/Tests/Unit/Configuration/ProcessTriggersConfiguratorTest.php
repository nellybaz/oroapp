<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Configuration;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ManagerRegistry;

use Psr\Log\LoggerInterface;

use Oro\Bundle\WorkflowBundle\Configuration\ProcessConfigurationBuilder;
use Oro\Bundle\WorkflowBundle\Configuration\ProcessTriggersConfigurator;
use Oro\Bundle\WorkflowBundle\Cron\ProcessTriggerCronScheduler;
use Oro\Bundle\WorkflowBundle\Entity\ProcessDefinition;
use Oro\Bundle\WorkflowBundle\Entity\ProcessTrigger;
use Oro\Bundle\WorkflowBundle\Entity\Repository\ProcessTriggerRepository;
use Oro\Component\Testing\Unit\EntityTrait;

class ProcessTriggersConfiguratorTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /** @var ProcessConfigurationBuilder|\PHPUnit_Framework_MockObject_MockObject */
    protected $configurationBuilder;

    /** @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject */
    protected $managerRegistry;

    /** @var string|\PHPUnit_Framework_MockObject_MockObject */
    protected $triggerEntityClass;

    /** @var ProcessTriggerCronScheduler|\PHPUnit_Framework_MockObject_MockObject */
    protected $processCronScheduler;

    /** @var ProcessTriggersConfigurator */
    protected $processTriggersConfigurator;

    /** @var ProcessTriggerRepository|\PHPUnit_Framework_MockObject_MockObject */
    protected $repository;

    /** @var ObjectManager|\PHPUnit_Framework_MockObject_MockObject */
    protected $objectManager;

    /** @var LoggerInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $logger;

    protected function setUp()
    {
        $this->configurationBuilder = $this->createMock(
            'Oro\Bundle\WorkflowBundle\Configuration\ProcessConfigurationBuilder'
        );

        $this->repository = $this->getMockBuilder(
            'Oro\Bundle\WorkflowBundle\Entity\Repository\ProcessTriggerRepository'
        )->disableOriginalConstructor()->getMock();

        $this->objectManager = $this->createMock('Doctrine\Common\Persistence\ObjectManager');

        $this->managerRegistry = $this->createMock('Doctrine\Common\Persistence\ManagerRegistry');
        $this->processCronScheduler = $this
            ->getMockBuilder('Oro\Bundle\WorkflowBundle\Cron\ProcessTriggerCronScheduler')
            ->disableOriginalConstructor()
            ->getMock();

        $this->triggerEntityClass = 'Oro\Bundle\WorkflowBundle\Entity\ProcessTrigger';

        $this->logger = $this->createMock(LoggerInterface::class);

        $this->processTriggersConfigurator = new ProcessTriggersConfigurator(
            $this->configurationBuilder,
            $this->processCronScheduler,
            $this->managerRegistry,
            $this->triggerEntityClass
        );
        $this->processTriggersConfigurator->setLogger($this->logger);
    }

    public function testConfigureTriggers()
    {
        $triggersConfiguration = ['definition_name' => [['exist'], ['not_exist']]];
        $definition = new ProcessDefinition();
        $definition->setName('definition_name');
        $definitions = ['definition_name' => $definition];

        $existentNewTrigger = new ProcessTrigger();
        $existentNewTrigger->setDefinition($definition);
        $nonExistentNewTrigger = new ProcessTrigger();

        $this->configurationBuilder->expects($this->exactly(2))
            ->method('buildProcessTrigger')
            ->willReturnMap([
                [['exist'], $definition, $existentNewTrigger],
                [['not_exist'], $definition, $nonExistentNewTrigger],
            ]);

        $this->assertManagerRegistryCalled($this->triggerEntityClass);
        $this->assertObjectManagerCalledForRepository($this->triggerEntityClass);

        /** @var ProcessTrigger|\PHPUnit_Framework_MockObject_MockObject $mockExistentTrigger */
        $mockExistentTrigger = $this->createMock($this->triggerEntityClass);

        $nonExistentNewTrigger->setDefinition($definition)->setCron('42 * * * *');
        $mockExistentTrigger->expects($this->once())->method('import')->with($existentNewTrigger);
        $mockExistentTrigger->expects($this->once())->method('isDefinitiveEqual')->willReturn(true);
        $mockExistentTrigger->expects($this->any())->method('getDefinition')->willReturn($definition);
        $mockExistentTrigger->expects($this->any())->method('getCron')->willReturn('43 * * * *');

        $mockUnaffectedTrigger = $this->createMock($this->triggerEntityClass);
        $mockUnaffectedTrigger->expects($this->any())->method('isDefinitiveEqual')->willReturn(false);

        $this->repository->expects($this->once())
            ->method('findByDefinitionName')->willReturn([$mockExistentTrigger, $mockUnaffectedTrigger]);

        //delete unaffected
        $mockUnaffectedTrigger->expects($this->any())->method('getCron')->willReturn('string'); //in dropSchedule
        $this->processCronScheduler->expects($this->once())->method('removeSchedule')->with($mockUnaffectedTrigger);

        $this->logger->expects($this->at(0))
            ->method('info')
            ->with(
                '>> process trigger: {definition_name} [{type}] - {action}',
                ['definition_name' => 'definition_name', 'action' => 'updated', 'type' => 'cron:43 * * * *']
            );
        $this->logger->expects($this->at(1))
            ->method('info')
            ->with(
                '>> process trigger: {definition_name} [{type}] - {action}',
                ['definition_name' => 'definition_name', 'action' => 'created', 'type' => 'cron:42 * * * *']
            );

        $this->processTriggersConfigurator->configureTriggers($triggersConfiguration, $definitions);

        $this->assertAttributeEquals(true, 'dirty', $this->processTriggersConfigurator);

        $this->assertAttributeEquals([$mockUnaffectedTrigger], 'forRemove', $this->processTriggersConfigurator);
        $this->assertAttributeEquals([$nonExistentNewTrigger], 'forPersist', $this->processTriggersConfigurator);
    }

    public function testRemoveDefinitionTriggers()
    {
        $this->assertManagerRegistryCalled($this->triggerEntityClass);
        $this->assertObjectManagerCalledForRepository($this->triggerEntityClass);

        $definition = (new ProcessDefinition())->setName('definition_name');

        $trigger = (new ProcessTrigger())->setCron('42 * * * *')->setDefinition($definition);

        $this->repository->expects($this->once())->method('findByDefinitionName')->with('definition_name')
            ->willReturn([$trigger]);

        $this->processCronScheduler->expects($this->once())->method('removeSchedule')->with($trigger);

        $this->logger->expects($this->once())
            ->method('info')
            ->with(
                '>> process trigger: {definition_name} [{type}] - {action}',
                ['definition_name' => $definition->getName(), 'action' => 'deleted', 'type' => 'cron:42 * * * *']
            );

        $this->processTriggersConfigurator->removeDefinitionTriggers($definition);

        $this->assertAttributeEquals(true, 'dirty', $this->processTriggersConfigurator);
        $this->assertAttributeEquals([$trigger], 'forRemove', $this->processTriggersConfigurator);
    }

    /**
     * @dataProvider flushDataProvider
     * @param bool $dirty
     * @param array $triggers
     * @param $expectedSchedulesCount
     */
    public function testFlush($dirty, array $triggers, $expectedSchedulesCount)
    {
        $this->setValue($this->processTriggersConfigurator, 'dirty', $dirty);
        $this->setValue($this->processTriggersConfigurator, 'triggers', $triggers);

        $this->processCronScheduler->expects($this->exactly($expectedSchedulesCount))->method('add');

        if ($dirty) {
            $this->assertManagerRegistryCalled($this->triggerEntityClass);
            $this->objectManager->expects($this->once())->method('flush');
        } else {
            $this->objectManager->expects($this->never())->method('flush');
        }

        $this->processTriggersConfigurator->flush();

        $this->assertAttributeEquals(false, 'dirty', $this->processTriggersConfigurator);
    }

    /**
     * @return array
     */
    public function flushDataProvider()
    {
        $triggerWithCron = new ProcessTrigger();
        $triggerWithCron->setCron('* * * * *');
        $triggerWithoutCron = new ProcessTrigger();

        return [
            'no changes' => [
                'dirty' => false,
                'triggers' => [],
                'expected' => 0,
            ],
            'no triggers' => [
                'dirty' => true,
                'triggers' => [],
                'expected' => 0,
            ],
            'with triggers' => [
                'dirty' => true,
                'triggers' => [$triggerWithCron, $triggerWithoutCron],
                'expected' => 1,
            ],
        ];
    }

    public function testFlushRemoves()
    {
        $this->setValue($this->processTriggersConfigurator, 'dirty', true);

        $trigger = new ProcessTrigger();
        $this->setValue($this->processTriggersConfigurator, 'forRemove', [$trigger]);

        $this->assertManagerRegistryCalled($this->triggerEntityClass);

        $this->objectManager->expects($this->once())->method('contains')->with($trigger)->willReturn(true);
        $this->objectManager->expects($this->once())->method('remove')->with($trigger);
        $this->objectManager->expects($this->once())->method('flush');
        $this->processCronScheduler->expects($this->once())->method('flush');

        $this->logger->expects($this->once())
            ->method('info')
            ->with('>> process triggers modifications stored in DB');

        $this->processTriggersConfigurator->flush();
    }

    public function testFlushPersists()
    {
        $this->setValue($this->processTriggersConfigurator, 'dirty', true);

        $trigger = new ProcessTrigger();
        $this->setValue($this->processTriggersConfigurator, 'forPersist', [$trigger]);

        $this->assertManagerRegistryCalled($this->triggerEntityClass);

        $this->objectManager->expects($this->once())->method('persist')->with($trigger);
        $this->objectManager->expects($this->once())->method('flush');
        $this->processCronScheduler->expects($this->once())->method('flush');

        $this->logger->expects($this->once())
            ->method('info')
            ->with('>> process triggers modifications stored in DB');

        $this->processTriggersConfigurator->flush();
    }

    /**
     * @param string $entityClass
     */
    public function assertManagerRegistryCalled($entityClass)
    {
        $this->managerRegistry->expects($this->atLeastOnce())
            ->method('getManagerForClass')
            ->with($entityClass)
            ->willReturn($this->objectManager);
    }

    /**
     * @param string $entityClass
     */
    public function assertObjectManagerCalledForRepository($entityClass)
    {
        $this->objectManager->expects($this->once())
            ->method('getRepository')
            ->with($entityClass)
            ->willReturn($this->repository);
    }
}
