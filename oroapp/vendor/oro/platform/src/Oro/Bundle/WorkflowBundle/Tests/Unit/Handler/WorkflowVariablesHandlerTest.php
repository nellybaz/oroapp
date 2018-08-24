<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Handler;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;
use Oro\Bundle\WorkflowBundle\Handler\WorkflowVariablesHandler;
use Oro\Bundle\WorkflowBundle\Model\WorkflowData;

class WorkflowVariablesHandlerTest extends \PHPUnit_Framework_TestCase
{
    /** @var WorkflowVariablesHandler */
    protected $handler;

    /** @var \PHPUnit_Framework_MockObject_MockObject|EntityManager */
    protected $entityManager;

    /** @var \PHPUnit_Framework_MockObject_MockObject|EventDispatcherInterface */
    protected $eventDispatcher;

    /** @var \PHPUnit_Framework_MockObject_MockObject|ManagerRegistry $managerRegistry */
    protected $managerRegistry;

    /** @var \PHPUnit_Framework_MockObject_MockObject|EntityRepository */
    protected $entityRepository;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->entityManager = $this->createMock(EntityManager::class);
        $this->managerRegistry = $this->createMock(ManagerRegistry::class);

        /** @var \PHPUnit_Framework_MockObject_MockObject|EventDispatcherInterface */
        $this->eventDispatcher = $this->createMock(EventDispatcherInterface::class);

        $this->entityManager->expects($this->any())
            ->method('getRepository')
            ->willReturn($this->entityRepository);

        $this->managerRegistry->expects($this->any())
            ->method('getManagerForClass')
            ->willReturn($this->entityManager);

        $this->handler = new WorkflowVariablesHandler($this->eventDispatcher, $this->managerRegistry);
    }

    /**
     * @dataProvider updateWorkflowVariablesDataProvider
     *
     * @param WorkflowDefinition $definition
     * @param WorkflowData       $data
     * @param WorkflowDefinition $expectedDefinition
     */
    public function testUpdateWorkflowVariables($definition, $data, $expectedDefinition)
    {
        $this->entityManager->expects($this->once())->method('persist');
        $this->entityManager->expects($this->once())->method('flush');

        $this->assertEquals($this->handler->updateWorkflowVariables($definition, $data), $expectedDefinition);
    }

    /**
     * @return array
     */
    public function updateWorkflowVariablesDataProvider()
    {
        $definition = new WorkflowDefinition();
        $definition->setConfiguration([
            'variable_definitions' => [
                'variables' => [
                    'variable1' => [
                        'type' => 'array',
                        'value' => [1, 2],
                    ],
                    'variable2' => [
                        'type' => 'string',
                        'value' => 'variable2Value',
                    ],
                ],
            ],
            'other_fields' => [],
        ]);

        $data = new WorkflowData([
            'variable1' => [3, 4],
            'variable2' => 'variable2NewValue',
            'not_existing_variable' => 9001,
        ]);

        $expected = new WorkflowDefinition();
        $expected->setConfiguration([
            'variable_definitions' => [
                'variables' => [
                    'variable1' => [
                        'type' => 'array',
                        'value' => [3, 4],
                    ],
                    'variable2' => [
                        'type' => 'string',
                        'value' => 'variable2NewValue',
                    ],
                ],
            ],
            'other_fields' => [],
        ]);


        return [
            [$definition, $data, $expected],
        ];
    }
}
