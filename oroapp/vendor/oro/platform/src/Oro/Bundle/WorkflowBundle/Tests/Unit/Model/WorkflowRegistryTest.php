<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;
use Oro\Bundle\WorkflowBundle\Model\Filter\WorkflowDefinitionFilterInterface;
use Oro\Bundle\WorkflowBundle\Model\Filter\WorkflowDefinitionFilters;
use Oro\Bundle\WorkflowBundle\Model\WorkflowAssembler;
use Oro\Bundle\WorkflowBundle\Model\WorkflowRegistry;
use Oro\Bundle\WorkflowBundle\Model\Workflow;
use Oro\Bundle\WorkflowBundle\Provider\WorkflowDefinitionProvider;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class WorkflowRegistryTest extends \PHPUnit_Framework_TestCase
{
    const ENTITY_CLASS = 'testEntityClass';
    const WORKFLOW_NAME = 'test_workflow';

    /** @var WorkflowDefinitionProvider|\PHPUnit_Framework_MockObject_MockObject */
    protected $definitionProvider;

    /** @var WorkflowAssembler|\PHPUnit_Framework_MockObject_MockObject */
    private $assembler;

    /** @var WorkflowDefinitionFilters|\PHPUnit_Framework_MockObject_MockObject */
    private $filters;

    /** @var WorkflowDefinitionFilterInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $filter;

    /** @var WorkflowRegistry */
    private $registry;

    protected function setUp()
    {
        $this->assembler = $this->getMockBuilder(WorkflowAssembler::class)
            ->disableOriginalConstructor()
            ->setMethods(['assemble'])
            ->getMock();

        $this->filters = $this->getMockBuilder(WorkflowDefinitionFilters::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->filter = $this->createMock(WorkflowDefinitionFilterInterface::class);

        $this->definitionProvider = $this->createMock(WorkflowDefinitionProvider::class);
        $this->definitionProvider->expects($this->any())
            ->method('refreshWorkflowDefinition')
            ->willReturnCallback(function (WorkflowDefinition $definition = null) {
                return $definition;
            });

        $this->registry = new WorkflowRegistry(
            $this->definitionProvider,
            $this->assembler,
            $this->filters
        );
    }

    protected function tearDown()
    {
        unset(
            $this->configManager,
            $this->assembler,
            $this->filters,
            $this->filter,
            $this->registry,
            $this->definitionProvider
        );
    }

    /**
     * @param WorkflowDefinition|null $workflowDefinition
     * @param Workflow|null $workflow
     */
    public function prepareAssemblerMock($workflowDefinition = null, $workflow = null)
    {
        if ($workflowDefinition && $workflow) {
            $this->assembler->expects($this->once())
                ->method('assemble')
                ->with($workflowDefinition)
                ->willReturn($workflow);
        } else {
            $this->assembler->expects($this->never())
                ->method('assemble');
        }
    }

    /**
     * @expectedException \Oro\Bundle\WorkflowBundle\Exception\WorkflowNotFoundException
     * @expectedExceptionMessage Workflow "test_workflow" not found
     */
    public function testGetWorkflowAndFilteredItem()
    {
        $workflow = $this->createWorkflow(self::WORKFLOW_NAME);
        $workflowDefinition = $workflow->getDefinition();

        $this->definitionProvider->expects($this->once())->method('find')
            ->with(self::WORKFLOW_NAME)->willReturn($workflowDefinition);

        $this->prepareAssemblerMock();

        $this->filters->expects($this->once())->method('getFilters')->willReturn(new ArrayCollection([$this->filter]));
        $this->filter->expects($this->once())->method('filter')
            ->with(new ArrayCollection([$workflowDefinition]))->willReturn(new ArrayCollection());

        $this->registry->getWorkflow(self::WORKFLOW_NAME);
    }

    public function testGetActiveWorkflowsByEntityClass()
    {
        $workflow = $this->createWorkflow(self::WORKFLOW_NAME, self::ENTITY_CLASS);
        $workflowDefinition = $workflow->getDefinition();

        $this->definitionProvider->expects($this->once())
            ->method('getActiveDefinitionsForRelatedEntity')
            ->with(self::ENTITY_CLASS)
            ->willReturn([$workflowDefinition]);
        $this->prepareAssemblerMock($workflowDefinition, $workflow);

        $this->filters->expects($this->once())->method('getFilters')->willReturn(new ArrayCollection());

        $this->assertEquals(
            new ArrayCollection([self::WORKFLOW_NAME => $workflow]),
            $this->registry->getActiveWorkflowsByEntityClass(self::ENTITY_CLASS)
        );
    }

    /**
     * @dataProvider hasWorkflowsByEntityClassDataProvider
     *
     * @param array $definitions
     * @param bool $expected
     */
    public function testHasActiveWorkflowsByEntityClass(array $definitions, $expected)
    {
        $this->definitionProvider->expects($this->once())
            ->method('getActiveDefinitionsForRelatedEntity')
            ->with(self::ENTITY_CLASS)
            ->willReturn($definitions);
        $this->filters->expects($this->any())->method('getFilters')->willReturn(new ArrayCollection());

        $this->assertEquals($expected, $this->registry->hasActiveWorkflowsByEntityClass(self::ENTITY_CLASS));
    }

    public function testGetWorkflowsByEntityClass()
    {
        $workflow = $this->createWorkflow(self::WORKFLOW_NAME, self::ENTITY_CLASS);
        $workflowDefinition = $workflow->getDefinition();

        $this->definitionProvider->expects($this->once())
            ->method('getDefinitionsForRelatedEntity')
            ->with(self::ENTITY_CLASS)
            ->willReturn([$workflowDefinition]);
        $this->prepareAssemblerMock($workflowDefinition, $workflow);

        $this->filters->expects($this->once())->method('getFilters')->willReturn(new ArrayCollection());

        $this->assertEquals(
            new ArrayCollection([self::WORKFLOW_NAME => $workflow]),
            $this->registry->getWorkflowsByEntityClass(self::ENTITY_CLASS)
        );
    }

    /**
     * @dataProvider hasWorkflowsByEntityClassDataProvider
     *
     * @param array $definitions
     * @param bool $expected
     */
    public function testHasWorkflowsByEntityClass(array $definitions, $expected)
    {
        $this->definitionProvider->expects($this->once())
            ->method('getDefinitionsForRelatedEntity')
            ->with(self::ENTITY_CLASS)
            ->willReturn($definitions);
        $this->filters->expects($this->any())->method('getFilters')->willReturn(new ArrayCollection());

        $this->assertEquals($expected, $this->registry->hasWorkflowsByEntityClass(self::ENTITY_CLASS));
    }

    /**
     * @return array
     */
    public function hasWorkflowsByEntityClassDataProvider()
    {
        $workflow = $this->createWorkflow(self::WORKFLOW_NAME, self::ENTITY_CLASS);

        return [
            'no workflows' => [
                'definitions' => [],
                'expected' => false,
            ],
            'with workflows' => [
                'definitions' => [$workflow],
                'expected' => true,
            ],
        ];
    }

    /**
     * @param array $groups
     * @param array $activeDefinitions
     * @param array|Workflow[] $expectedWorkflows
     * @param WorkflowDefinitionFilterInterface $filter
     * @dataProvider getActiveWorkflowsByActiveGroupsDataProvider
     */
    public function testGetActiveWorkflowsByActiveGroups(
        array $groups,
        array $activeDefinitions,
        array $expectedWorkflows,
        WorkflowDefinitionFilterInterface $filter
    ) {
        foreach ($expectedWorkflows as $at => $workflow) {
            $this->assembler->expects($this->at($at))
                ->method('assemble')
                ->with($workflow->getDefinition())
                ->willReturn($workflow);
        }

        $this->definitionProvider->expects($this->once())
            ->method('getActiveDefinitions')
            ->willReturn($activeDefinitions);

        $this->filters->expects($this->any())->method('getFilters')->willReturn(new ArrayCollection([$filter]));

        $this->assertEquals(
            $expectedWorkflows,
            $this->registry->getActiveWorkflowsByActiveGroups($groups)->getValues()
        );
    }

    /**
     * @return array
     */
    public function getActiveWorkflowsByActiveGroupsDataProvider()
    {
        $workflow1 = $this->createWorkflow('test_workflow1', self::ENTITY_CLASS);
        $workflowDefinition1 = $workflow1->getDefinition();
        $workflowDefinition1->setExclusiveActiveGroups(['group1']);
        $filter1 = $this->createDefinitionFilterMock(
            new ArrayCollection([]),
            new ArrayCollection([])
        );

        $filter2 = $this->createDefinitionFilterMock(
            new ArrayCollection(['test_workflow1' => $workflowDefinition1]),
            new ArrayCollection(['test_workflow1' => $workflowDefinition1])
        );

        $workflow2 = $this->createWorkflow('test_workflow2', self::ENTITY_CLASS);
        $workflowDefinition2 = $workflow2->getDefinition();
        $workflowDefinition2->setExclusiveActiveGroups(['group2', 'group3']);
        $filter3 = $this->createDefinitionFilterMock(
            new ArrayCollection(['test_workflow1' => $workflowDefinition1]),
            new ArrayCollection([])
        );

        return [
            'empty' => [
                'groups' => [],
                'activeDefinitions' => [],
                'expectedWorkflows' => [],
                'filter' => $filter1
            ],
            'filled' => [
                'groups' => ['group1'],
                'activeDefinitions' => [$workflowDefinition1, $workflowDefinition2],
                'expectedWorkflows' => [$workflow1],
                'filter' => $filter2
            ],
            'filtered' => [
                'groups' => ['group1'],
                'activeDefinitions' => [$workflowDefinition1, $workflowDefinition2],
                'expectedWorkflows' => [],
                'filter' => $filter3
            ]
        ];
    }

    public function testGetActiveWorkflows()
    {
        $workflow = $this->createWorkflow(self::WORKFLOW_NAME, self::ENTITY_CLASS);
        $workflowDefinition = $workflow->getDefinition();
        $workflowDefinition->setExclusiveActiveGroups(['group1']);

        $filter = $this->createDefinitionFilterMock(
            new ArrayCollection([self::WORKFLOW_NAME => $workflowDefinition]),
            new ArrayCollection([self::WORKFLOW_NAME => $workflowDefinition])
        );
        $this->filters->expects($this->once())->method('getFilters')->willReturn(new ArrayCollection([$filter]));

        $this->definitionProvider->expects($this->once())
            ->method('getActiveDefinitions')
            ->willReturn([$workflowDefinition]);
        $this->prepareAssemblerMock($workflowDefinition, $workflow);

        $this->assertEquals(
            new ArrayCollection([self::WORKFLOW_NAME => $workflow]),
            $this->registry->getActiveWorkflows()
        );
    }

    public function testGetActiveWorkflowsNoFeature()
    {
        $workflow = $this->createWorkflow(self::WORKFLOW_NAME, self::ENTITY_CLASS);
        $workflowDefinition = $workflow->getDefinition();
        $workflowDefinition->setExclusiveActiveGroups(['group1']);

        $filter = $this->createDefinitionFilterMock(
            new ArrayCollection([self::WORKFLOW_NAME => $workflowDefinition]),
            new ArrayCollection([])
        );
        $this->filters->expects($this->once())->method('getFilters')->willReturn(new ArrayCollection([$filter]));

        $this->definitionProvider->expects($this->once())
            ->method('getActiveDefinitions')
            ->willReturn([$workflowDefinition]);

        $this->prepareAssemblerMock();

        $this->assertEquals(
            new ArrayCollection(),
            $this->registry->getActiveWorkflows()
        );
    }

    public function testGetActiveWorkflowsByActiveGroupsWithDisabledFeature()
    {
        $workflow1 = $this->createWorkflow('test_workflow1', self::ENTITY_CLASS);
        $workflowDefinition1 = $workflow1->getDefinition();
        $workflowDefinition1->setExclusiveActiveGroups(['group1']);

        $workflow2 = $this->createWorkflow('test_workflow2', self::ENTITY_CLASS);
        $workflowDefinition2 = $workflow2->getDefinition();
        $workflowDefinition2->setExclusiveActiveGroups(['group2', 'group3']);

        $this->definitionProvider->expects($this->once())
            ->method('getActiveDefinitions')
            ->willReturn([$workflowDefinition1, $workflowDefinition2]);

        $filter = $this->createDefinitionFilterMock(
            new ArrayCollection(['test_workflow1' => $workflowDefinition1]),
            new ArrayCollection()
        );

        $this->filters->expects($this->once())->method('getFilters')->willReturn(new ArrayCollection([$filter]));

        $this->assertEmpty($this->registry->getActiveWorkflowsByActiveGroups(['group1']));
    }

    /**
     * @param Collection $in
     * @param Collection $out
     * @return WorkflowDefinitionFilterInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private function createDefinitionFilterMock(Collection $in, Collection $out)
    {
        $filter = $this->createMock(WorkflowDefinitionFilterInterface::class);
        $filter->expects($this->any())->method('filter')->with($in)->willReturn($out);

        return $filter;
    }

    /**
     * @param string $workflowName
     *
     * @param string|null $relatedEntity
     * @return Workflow|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function createWorkflow($workflowName, $relatedEntity = null)
    {
        $workflowDefinition = new WorkflowDefinition();
        $workflowDefinition->setName($workflowName);

        if ($relatedEntity) {
            $workflowDefinition->setRelatedEntity($relatedEntity);
        }

        return $this->createWorkflowFromDefinition($workflowDefinition);
    }

    /**
     * @expectedException \Oro\Bundle\WorkflowBundle\Exception\WorkflowNotFoundException
     * @expectedExceptionMessage Workflow "not_existing_workflow" not found
     */
    public function testGetWorkflowNotFoundException()
    {
        $workflowName = 'not_existing_workflow';

        $this->definitionProvider->expects($this->once())
            ->method('find')
            ->with($workflowName)
            ->willReturn(null);
        $this->prepareAssemblerMock();

        $this->registry->getWorkflow($workflowName);
    }

    /**
     * @param WorkflowDefinition $definition
     * @return Workflow|\PHPUnit_Framework_MockObject_MockObject
     */
    private function createWorkflowFromDefinition(WorkflowDefinition $definition)
    {
        /** @var Workflow|\PHPUnit_Framework_MockObject_MockObject $workflow */
        $workflow = $this->getMockBuilder(Workflow::class)
            ->disableOriginalConstructor()
            ->getMock();

        $workflow->expects($this->any())
            ->method('getDefinition')
            ->willReturn($definition);

        $workflow->expects($this->any())
            ->method('getName')
            ->willReturn($definition->getName());

        return $workflow;
    }
}
