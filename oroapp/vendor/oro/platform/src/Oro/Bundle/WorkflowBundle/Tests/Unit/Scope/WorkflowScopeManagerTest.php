<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Scope;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;

use Psr\Log\LoggerInterface;

use Oro\Bundle\ScopeBundle\Entity\Scope;
use Oro\Bundle\ScopeBundle\Manager\ScopeManager;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;
use Oro\Bundle\WorkflowBundle\Scope\WorkflowScopeManager;

use Oro\Component\Testing\Unit\EntityTrait;

class WorkflowScopeManagerTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    const FIELD_NAME = 'testField';
    const ENTITY_CLASS = 'stdClass';
    const ENTITY_ID = 42;

    /** @var ObjectRepository|\PHPUnit_Framework_MockObject_MockObject */
    private $repository;

    /** @var ObjectManager|\PHPUnit_Framework_MockObject_MockObject */
    private $manager;

    /** @var ScopeManager|\PHPUnit_Framework_MockObject_MockObject */
    private $scopeManager;

    /** @var LoggerInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $logger;

    /** @var WorkflowScopeManager */
    private $workflowScopeManager;

    protected function setUp()
    {
        $this->repository = $this->createMock(ObjectRepository::class);

        $this->manager = $this->createMock(ObjectManager::class);
        $this->manager->expects($this->any())
            ->method('getRepository')
            ->with(self::ENTITY_CLASS)
            ->willReturn($this->repository);

        $registry = $this->getMockBuilder(ManagerRegistry::class)->disableOriginalConstructor()->getMock();
        $registry->expects($this->any())
            ->method('getManagerForClass')
            ->willReturnMap(
                [
                    [self::ENTITY_CLASS, $this->manager],
                    [WorkflowDefinition::class, $this->manager]
                ]
            );

        $this->scopeManager = $this->getMockBuilder(ScopeManager::class)->disableOriginalConstructor()->getMock();

        $this->logger = $this->createMock(LoggerInterface::class);

        $this->workflowScopeManager = new WorkflowScopeManager($registry, $this->scopeManager, $this->logger);
    }

    protected function tearDown()
    {
        unset($this->workflowScopeManager, $this->repository, $this->manager, $this->scopeManager, $this->logger);
    }

    public function testUpdateScopes()
    {
        $scope1 = $this->createScope(101);
        $scope2 = $this->createScope(102);

        $definition = $this->createWorkflowDefinition(
            [[self::FIELD_NAME => self::ENTITY_ID], ['extraField' => self::ENTITY_ID]],
            [$this->createScope(100), $this->createScope(101)]
        );
        $entity = $this->createEntity(self::ENTITY_ID);

        $this->scopeManager->expects($this->once())
            ->method('getScopeEntities')
            ->with(WorkflowScopeManager::SCOPE_TYPE)
            ->willReturn(
                [
                    'extraField' => self::ENTITY_CLASS,
                    self::FIELD_NAME => self::ENTITY_CLASS
                ]
            );
        $this->scopeManager->expects($this->exactly(2))
            ->method('findOrCreate')
            ->willReturnMap(
                [
                    [WorkflowScopeManager::SCOPE_TYPE, [self::FIELD_NAME => $entity], true, $scope1],
                    [WorkflowScopeManager::SCOPE_TYPE, ['extraField' => $entity], true, $scope2]
                ]
            );

        $this->repository->expects($this->exactly(2))->method('find')->with(self::ENTITY_ID)->willReturn($entity);
        $this->manager->expects($this->once())->method('flush');

        $this->workflowScopeManager->updateScopes($definition);

        $this->assertEquals([$scope1, $scope2], array_values($definition->getScopes()->toArray()));
    }

    public function testUpdateScopesWithresetFlag()
    {
        $this->scopeManager->expects($this->never())->method($this->anything());
        $this->repository->expects($this->never())->method($this->anything());
        $this->manager->expects($this->once())->method('flush');

        $definition = $this->createWorkflowDefinition(
            [[self::FIELD_NAME => self::ENTITY_ID], ['extraField' => self::ENTITY_ID]],
            [$this->createScope(100), $this->createScope(101)],
            false
        );

        $this->workflowScopeManager->updateScopes($definition, true);

        $this->assertEmpty($definition->getScopes()->toArray());
    }

    /**
     * @dataProvider updateScopesExceptionDataProvider
     *
     * @param WorkflowDefinition $definition
     * @param string $exception
     * @param string $exceptionMessage
     */
    public function testUpdateScopesException(WorkflowDefinition $definition, $exception, $exceptionMessage)
    {
        $this->scopeManager->expects($this->once())
            ->method('getScopeEntities')
            ->with(WorkflowScopeManager::SCOPE_TYPE)
            ->willReturn([self::FIELD_NAME => self::ENTITY_CLASS]);

        $this->logger->expects($this->once())
            ->method('error')
            ->with(
                '[WorkflowScopeManager] Workflow scopes could not be updated.',
                [
                    'worklflow' => $definition->getName(),
                    'scope_configs' => $definition->getScopesConfig(),
                    'exception' => new $exception($exceptionMessage)
                ]
            );

        $this->expectException($exception);
        $this->expectExceptionMessage($exceptionMessage);

        $this->workflowScopeManager->updateScopes($definition);
    }

    /**
     * @return array
     */
    public function updateScopesExceptionDataProvider()
    {
        return [
            [
                'definition' => $this->createWorkflowDefinition([['test' => self::ENTITY_ID]]),
                'exception' => 'Oro\Bundle\WorkflowBundle\Exception\WorkflowScopeConfigurationException',
                'exceptionMessage' => 'Unknown field name "test" for scope type "workflow_definition".'
            ],
            [
                'definition' => $this->createWorkflowDefinition([[self::FIELD_NAME => self::ENTITY_ID]]),
                'exception' => 'Oro\Bundle\WorkflowBundle\Exception\WorkflowScopeConfigurationException',
                'exceptionMessage' => 'Cannot find entity "stdClass" with id "42".'
            ]
        ];
    }

    /**
     * @param array $scopesConfig
     * @param array $scopes
     * @param bool $active
     * @return WorkflowDefinition
     */
    protected function createWorkflowDefinition(array $scopesConfig = [], array $scopes = [], $active = true)
    {
        return $this->getEntity(
            WorkflowDefinition::class,
            [
                'active' => $active,
                'configuration' => ['scopes' => $scopesConfig],
                'scopes' => new ArrayCollection($scopes)
            ]
        );
    }

    /**
     * @param int $id
     * @return \stdClass
     */
    protected function createEntity($id)
    {
        $class = self::ENTITY_CLASS;

        $obj = new $class;
        $obj->id = $id;

        return $obj;
    }

    /**
     * @param int $id
     * @return Scope
     */
    protected function createScope($id)
    {
        return $this->getEntity(Scope::class, ['id' => $id]);
    }
}
