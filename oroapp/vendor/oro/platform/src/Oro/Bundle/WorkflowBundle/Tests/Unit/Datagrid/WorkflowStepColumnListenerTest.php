<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Datagrid;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\Parameter;
use Oro\Bundle\ActionBundle\Provider\CurrentApplicationProviderInterface;
use Oro\Bundle\DataGridBundle\Datagrid\ParameterBag;
use Oro\Bundle\DataGridBundle\Datasource\DatasourceInterface;
use Oro\Bundle\DataGridBundle\Datasource\Orm\OrmDatasource;
use Oro\Bundle\DataGridBundle\Datasource\ResultRecord;
use Oro\Bundle\DataGridBundle\Event\BuildAfter;
use Oro\Bundle\DataGridBundle\Event\BuildBefore;
use Oro\Bundle\DataGridBundle\Event\OrmResultAfter;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\EntityBundle\ORM\EntityClassResolver;
use Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider;
use Oro\Bundle\WorkflowBundle\Datagrid\WorkflowStepColumnListener;
use Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration;
use Oro\Bundle\WorkflowBundle\Entity\Repository\WorkflowItemRepository;
use Oro\Bundle\WorkflowBundle\Form\Type\WorkflowDefinitionSelectType;
use Oro\Bundle\WorkflowBundle\Form\Type\WorkflowStepSelectType;
use Oro\Bundle\WorkflowBundle\Model\Workflow;
use Oro\Bundle\WorkflowBundle\Model\WorkflowManager;
use Oro\Bundle\WorkflowBundle\Model\WorkflowManagerRegistry;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class WorkflowStepColumnListenerTest extends \PHPUnit_Framework_TestCase
{
    const ENTITY = 'Test:Entity';
    const ENTITY_FULL_NAME = 'Test\Entity\Full\Name';
    const ALIAS = 'testEntity';
    const COLUMN = 'workflowStepLabel';

    /**
     * @var DoctrineHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $doctrineHelper;

    /**
     * @var EntityClassResolver|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $entityClassResolver;

    /**
     * @var ConfigProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $configProvider;

    /**
     * @var WorkflowManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $workflowManager;

    /**
     * @var WorkflowManagerRegistry|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $workflowManagerRegistry;

    /**
     * @var WorkflowStepColumnListener
     */
    protected $listener;

    protected function setUp()
    {
        $this->doctrineHelper = $this->getMockBuilder(DoctrineHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->entityClassResolver = $this->getMockBuilder(EntityClassResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->configProvider = $this->getMockBuilder(ConfigProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->workflowManager = $this->getMockBuilder(WorkflowManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->workflowManagerRegistry = $this->getMockBuilder(WorkflowManagerRegistry::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->listener = new WorkflowStepColumnListener(
            $this->doctrineHelper,
            $this->entityClassResolver,
            $this->configProvider,
            $this->workflowManagerRegistry
        );
    }

    protected function tearDown()
    {
        unset(
            $this->listener,
            $this->doctrineHelper,
            $this->configProvider,
            $this->workflowManager,
            $this->workflowManagerRegistry
        );
    }

    public function testAddWorkflowStepColumn()
    {
        $this->assertAttributeEquals(
            [WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN],
            'workflowStepColumns',
            $this->listener
        );

        $this->listener->addWorkflowStepColumn(WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN);
        $this->listener->addWorkflowStepColumn('workflowStep');
        $this->listener->addWorkflowStepColumn('workflowStep');

        $this->assertAttributeEquals(
            [WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN, 'workflowStep'],
            'workflowStepColumns',
            $this->listener
        );
    }

    /**
     * @param array $config
     * @param bool $hasWorkflow
     * @param bool $hasConfig
     * @param bool $isShowStep
     *
     * @dataProvider buildBeforeNoUpdateDataProvider
     */
    public function testBuildBeforeNoUpdate(array $config, $hasWorkflow = true, $hasConfig = true, $isShowStep = true)
    {
        $this->setUpEntityManagerMock(self::ENTITY, self::ENTITY);
        $this->setUpWorkflowManagerMock(self::ENTITY, $hasWorkflow);
        $this->setUpConfigProviderMock(self::ENTITY, $hasConfig, $isShowStep);

        $this->listener->addWorkflowStepColumn(self::COLUMN);

        $event = $this->createBuildBeforeEvent($config);
        $this->listener->onBuildBefore($event);
        $this->assertEquals($config, $event->getConfig()->toArray());
    }

    /**
     * @return array
     */
    public function buildBeforeNoUpdateDataProvider()
    {
        return [
            'workflow step column already defined' => [
                'config' => [
                    'source' => [],
                    'columns' => [
                        self::COLUMN => ['label' => 'Test'],
                    ]
                ]
            ],
            'no root entity' => [
                'config' => [
                    'source' => [
                        'query' => [
                            'from' => []
                        ]
                    ],
                    'columns' => []
                ]
            ],
            'no root alias' => [
                'config' => [
                    'source' => [
                        'query' => [
                            'from' => [['table' => self::ENTITY]]
                        ]
                    ],
                    'columns' => []
                ]
            ],
            'no active workflow' => [
                'config' => [
                    'source' => [
                        'query' => [
                            'from' => [['table' => self::ENTITY, 'alias' => self::ALIAS]]
                        ]
                    ],
                    'columns' => []
                ],
                'hasWorkflow' => false,
            ],
            'no entity config' => [
                'config' => [
                    'source' => [
                        'query' => [
                            'from' => [['table' => self::ENTITY, 'alias' => self::ALIAS]]
                        ]
                    ],
                    'columns' => []
                ],
                'hasWorkflow' => true,
                'hasConfig' => false
            ],
            'workflow step is hidden' => [
                'config' => [
                    'source' => [
                        'query' => [
                            'from' => [['table' => self::ENTITY, 'alias' => self::ALIAS]]
                        ]
                    ],
                    'columns' => []
                ],
                'hasWorkflow' => true,
                'hasConfig' => true,
                'isShowStep' => false,
            ],
        ];
    }

    /**
     * @param array $inputConfig
     * @param array $expectedConfig
     * @param bool $multiWorkflows
     * @dataProvider buildBeforeAddColumnDataProvider
     */
    public function testBuildBeforeAddColumn(array $inputConfig, array $expectedConfig, $multiWorkflows = true)
    {
        $this->setUpEntityManagerMock(self::ENTITY, self::ENTITY_FULL_NAME);
        $this->setUpWorkflowManagerMock(self::ENTITY_FULL_NAME, true, $multiWorkflows);
        $this->setUpConfigProviderMock(self::ENTITY_FULL_NAME);

        $event = $this->createBuildBeforeEvent($inputConfig);
        $this->listener->onBuildBefore($event);
        $this->assertEquals($expectedConfig, $event->getConfig()->toArray());
    }

    /**
     * @return array
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function buildBeforeAddColumnDataProvider()
    {
        return [
            'simple configuration' => [
                'inputConfig' => [
                    'source' => [
                        'query' => [
                            'select' => [
                                self::ALIAS . '.rootField',
                            ],
                            'from' => [['table' => self::ENTITY, 'alias' => self::ALIAS]],
                        ],
                        'type' => OrmDatasource::TYPE,
                    ],
                    'columns' => [
                        'rootField' => ['label' => 'Root field'],
                    ],
                ],
                'expectedConfig' => [
                    'source' => [
                        'query' => [
                            'select' => [
                                self::ALIAS . '.rootField'
                            ],
                            'from' => [['table' => self::ENTITY, 'alias' => self::ALIAS]]
                        ],
                        'type' => OrmDatasource::TYPE,
                    ],
                    'columns' => [
                        'rootField' => ['label' => 'Root field'],
                        WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN => [
                            'label' => 'oro.workflow.workflowstep.grid.label',
                            'type' => 'twig',
                            'frontend_type' => 'html',
                            'template' => 'OroWorkflowBundle:Datagrid:Column/workflowStep.html.twig'
                        ],
                    ],
                ],
            ],
            'full configuration' => [
                'inputConfig' => [
                    'source' => [
                        'query' => [
                            'select' => [
                                self::ALIAS . '.rootField',
                                'b.innerJoinField',
                                'c.leftJoinField',
                            ],
                            'from' => [['table' => self::ENTITY, 'alias' => self::ALIAS]],
                            'join' => [
                                'inner' => [['join' => self::ALIAS . '.b', 'alias' => 'b']],
                                'left' => [['join' => self::ALIAS . '.c', 'alias' => 'c']],
                            ],
                        ],
                        'type' => OrmDatasource::TYPE,
                    ],
                    'columns' => [
                        'rootField' => ['label' => 'Root field'],
                        'innerJoinField' => ['label' => 'Inner join field'],
                        'leftJoinField' => ['label' => 'Left join field'],
                    ],
                    'filters' => [
                        'columns' => [
                            'rootField' => ['data_name' => self::ALIAS . '.rootField'],
                            'innerJoinField' => ['data_name' => 'b.innerJoinField'],
                            'leftJoinField' => ['data_name' => 'c.leftJoinField'],
                        ],
                    ],
                    'sorters' => [
                        'columns' => [
                            'rootField' => ['data_name' => self::ALIAS . '.rootField'],
                            'innerJoinField' => ['data_name' => 'b.innerJoinField'],
                            'leftJoinField' => ['data_name' => 'c.leftJoinField'],
                        ],
                    ],
                ],
                'expectedConfig' => [
                    'source' => [
                        'query' => [
                            'select' => [
                                self::ALIAS . '.rootField',
                                'b.innerJoinField',
                                'c.leftJoinField'
                            ],
                            'from' => [['table' => self::ENTITY, 'alias' => self::ALIAS]],
                            'join' => [
                                'inner' => [['join' => self::ALIAS . '.b', 'alias' => 'b']],
                                'left' => [['join' => self::ALIAS . '.c', 'alias' => 'c']]
                            ],
                        ],
                        'type' => OrmDatasource::TYPE,
                    ],
                    'columns' => [
                        'rootField' => ['label' => 'Root field'],
                        'innerJoinField' => ['label' => 'Inner join field'],
                        'leftJoinField' => ['label' => 'Left join field'],
                        WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN => [
                            'label' => 'oro.workflow.workflowstep.grid.label',
                            'type' => 'twig',
                            'frontend_type' => 'html',
                            'template' => 'OroWorkflowBundle:Datagrid:Column/workflowStep.html.twig'
                        ],
                    ],
                    'filters' => [
                        'columns' => [
                            'rootField' => ['data_name' => self::ALIAS . '.rootField'],
                            'innerJoinField' => ['data_name' => 'b.innerJoinField'],
                            'leftJoinField' => ['data_name' => 'c.leftJoinField'],
                            WorkflowStepColumnListener::WORKFLOW_FILTER => [
                                'type' => 'entity',
                                'data_name' => WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN,
                                'options' => [
                                    'field_type' => WorkflowDefinitionSelectType::NAME,
                                    'field_options' => [
                                        'workflow_entity_class' => self::ENTITY_FULL_NAME,
                                        'multiple' => true
                                    ]
                                ],
                                'label' => 'oro.workflow.workflowdefinition.entity_label'
                            ],
                            WorkflowStepColumnListener::WORKFLOW_STEP_FILTER => [
                                'type' => 'entity',
                                'data_name' => WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN . '.id',
                                'options' => [
                                    'field_type' => WorkflowStepSelectType::NAME,
                                    'field_options' => [
                                        'workflow_entity_class' => self::ENTITY_FULL_NAME,
                                        'multiple' => true,
                                        'translatable_options' => false
                                    ]
                                ],
                                'label' => 'oro.workflow.workflowstep.grid.label'
                            ],
                        ],
                    ],
                    'sorters' => [
                        'columns' => [
                            'rootField' => ['data_name' => self::ALIAS . '.rootField'],
                            'innerJoinField' => ['data_name' => 'b.innerJoinField'],
                            'leftJoinField' => ['data_name' => 'c.leftJoinField']
                        ],
                    ],
                ],
            ],
            'full configuration for one workflow' => [
                'inputConfig' => [
                    'source' => [
                        'query' => [
                            'select' => [
                                self::ALIAS . '.rootField',
                                'b.innerJoinField',
                                'c.leftJoinField',
                            ],
                            'from' => [['table' => self::ENTITY, 'alias' => self::ALIAS]],
                            'join' => [
                                'inner' => [['join' => self::ALIAS . '.b', 'alias' => 'b']],
                                'left' => [['join' => self::ALIAS . '.c', 'alias' => 'c']],
                            ],
                        ],
                        'type' => OrmDatasource::TYPE,
                    ],
                    'columns' => [
                        'rootField' => ['label' => 'Root field'],
                        'innerJoinField' => ['label' => 'Inner join field'],
                        'leftJoinField' => ['label' => 'Left join field'],
                    ],
                    'filters' => [
                        'columns' => [
                            'rootField' => ['data_name' => self::ALIAS . '.rootField'],
                            'innerJoinField' => ['data_name' => 'b.innerJoinField'],
                            'leftJoinField' => ['data_name' => 'c.leftJoinField'],
                        ],
                    ],
                    'sorters' => [
                        'columns' => [
                            'rootField' => ['data_name' => self::ALIAS . '.rootField'],
                            'innerJoinField' => ['data_name' => 'b.innerJoinField'],
                            'leftJoinField' => ['data_name' => 'c.leftJoinField'],
                        ],
                    ],
                ],
                'expectedConfig' => [
                    'source' => [
                        'query' => [
                            'select' => [
                                self::ALIAS . '.rootField',
                                'b.innerJoinField',
                                'c.leftJoinField'
                            ],
                            'from' => [['table' => self::ENTITY, 'alias' => self::ALIAS]],
                            'join' => [
                                'inner' => [['join' => self::ALIAS . '.b', 'alias' => 'b']],
                                'left' => [
                                    ['join' => self::ALIAS . '.c', 'alias' => 'c'],
                                ]
                            ],
                        ],
                        'type' => OrmDatasource::TYPE,
                    ],
                    'columns' => [
                        'rootField' => ['label' => 'Root field'],
                        'innerJoinField' => ['label' => 'Inner join field'],
                        'leftJoinField' => ['label' => 'Left join field'],
                        WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN => [
                            'label' => 'oro.workflow.workflowstep.grid.label',
                            'type' => 'twig',
                            'frontend_type' => 'html',
                            'template' => 'OroWorkflowBundle:Datagrid:Column/workflowStep.html.twig'
                        ],
                    ],
                    'filters' => [
                        'columns' => [
                            'rootField' => ['data_name' => self::ALIAS . '.rootField'],
                            'innerJoinField' => ['data_name' => 'b.innerJoinField'],
                            'leftJoinField' => ['data_name' => 'c.leftJoinField'],
                            WorkflowStepColumnListener::WORKFLOW_STEP_FILTER => [
                                'type' => 'entity',
                                'data_name' => WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN . '.id',
                                'options' => [
                                    'field_type' => WorkflowStepSelectType::NAME,
                                    'field_options' => [
                                        'workflow_entity_class' => self::ENTITY_FULL_NAME,
                                        'multiple' => true,
                                        'translatable_options' => false
                                    ]
                                ],
                                'label' => 'oro.workflow.workflowstep.grid.label'
                            ],
                        ],
                    ],
                    'sorters' => [
                        'columns' => [
                            'rootField' => ['data_name' => self::ALIAS . '.rootField'],
                            'innerJoinField' => ['data_name' => 'b.innerJoinField'],
                            'leftJoinField' => ['data_name' => 'c.leftJoinField'],
                        ],
                    ],
                ],
                'multiWorkflow' => false
            ]
        ];
    }

    /**
     * @param array $inputConfig
     * @param array $expectedConfig
     * @dataProvider buildBeforeRemoveColumnDataProvider
     */
    public function testBuildBeforeRemoveColumn(array $inputConfig, array $expectedConfig)
    {
        $this->setUpEntityManagerMock(self::ENTITY, self::ENTITY_FULL_NAME);
        $this->setUpWorkflowManagerMock(self::ENTITY_FULL_NAME);
        $this->setUpConfigProviderMock(self::ENTITY_FULL_NAME, true, false);

        $event = $this->createBuildBeforeEvent($inputConfig);
        $this->listener->onBuildBefore($event);
        $this->assertEquals($expectedConfig, $event->getConfig()->toArray());
    }

    /**
     * @return array
     */
    public function buildBeforeRemoveColumnDataProvider()
    {
        return [
            'remove defined workflow step column' => [
                'inputConfig' => [
                    'source' => [
                        'query' => [
                            'select' => [
                                self::ALIAS . '.rootField',
                                'workflowStep.label as ' . WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN,
                            ],
                            'from' => [['table' => self::ENTITY, 'alias' => self::ALIAS]],
                            'join' => [
                                'inner' => [
                                    [
                                        'join' => self::ALIAS . '.' . 'workflowStep',
                                        'alias' => 'workflowStep',
                                    ]
                                ],
                            ],
                        ],
                        'type' => OrmDatasource::TYPE,
                    ],
                    'columns' => [
                        'rootField' => ['label' => 'Root field'],
                        WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN => [
                            'label' => 'oro.workflow.workflowstep.grid.label'
                        ],
                    ],
                    'filters' => [
                        'columns' => [
                            'rootField' => ['data_name' => self::ALIAS . '.rootField'],
                            WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN => [
                                'type' => 'entity',
                                'data_name' => self::ALIAS . '.' . 'workflowStep',
                                'options' => [
                                    'field_type' => 'oro_workflow_step_select',
                                    'field_options' => ['workflow_entity_class' => self::ENTITY_FULL_NAME]
                                ]
                            ],
                        ],
                    ],
                    'sorters' => [
                        'columns' => [
                            'rootField' => ['data_name' => self::ALIAS . '.rootField'],
                            WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN => [
                                'data_name' => 'workflowStep.stepOrder',
                            ],
                        ],
                    ],
                ],
                'expectedConfig' => [
                    'source' => [
                        'query' => [
                            'select' => [
                                self::ALIAS . '.rootField',
                                'workflowStep.label as ' . WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN,
                            ],
                            'from' => [['table' => self::ENTITY, 'alias' => self::ALIAS]],
                            'join' => [
                                'inner' => [
                                    [
                                        'join' => self::ALIAS . '.' . 'workflowStep',
                                        'alias' => 'workflowStep',
                                    ]
                                ],
                            ],
                        ],
                        'type' => OrmDatasource::TYPE,
                    ],
                    'columns' => [
                        'rootField' => ['label' => 'Root field'],
                    ],
                    'filters' => [
                        'columns' => [
                            'rootField' => ['data_name' => self::ALIAS . '.rootField'],
                        ],
                    ],
                    'sorters' => [
                        'columns' => [
                            'rootField' => ['data_name' => self::ALIAS . '.rootField'],
                        ],
                    ],
                ],
            ]
        ];
    }

    /**
     * @dataProvider buildAfterNoUpdateDataProvider
     *
     * @param \PHPUnit_Framework_MockObject_MockObject|DatasourceInterface $datasource
     * @param DatagridConfiguration $inputConfig
     */
    public function testOnBuildAfterNoUpdate(DatasourceInterface $datasource, DatagridConfiguration $inputConfig)
    {
        $datasource->expects($this->never())->method($this->anything());

        $event = $this->createBuildAfterEvent($datasource, $inputConfig);

        /** @var \PHPUnit_Framework_MockObject_MockObject $datagrid */
        $datagrid = $event->getDatagrid();
        $datagrid->expects($this->any())->method('getParameters')->willReturn(new ParameterBag());

        $this->listener->onBuildAfter($event);
    }

    /**
     * @return array
     */
    public function buildAfterNoUpdateDataProvider()
    {
        return [
            'no orm datasource' => [
                'datasource' => $this->createMock('Oro\Bundle\DataGridBundle\Datasource\DatasourceInterface'),
                'inputConfig' => DatagridConfiguration::create([])
            ],
            'orm datasource and empty config' => [
                'datasource' => $this->getMockBuilder('Oro\Bundle\DataGridBundle\Datasource\Orm\OrmDatasource')
                    ->disableOriginalConstructor()
                    ->disableOriginalClone()
                    ->getMock(),
                'inputConfig' => DatagridConfiguration::create([])
            ],
            'orm datasource and no filters' => [
                'datasource' => $this->getMockBuilder('Oro\Bundle\DataGridBundle\Datasource\Orm\OrmDatasource')
                    ->disableOriginalConstructor()
                    ->disableOriginalClone()
                    ->getMock(),
                'inputConfig' => DatagridConfiguration::create(
                    [
                        'columns' => [
                            WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN => []
                        ]
                    ]
                )
            ]
        ];
    }

    public function testOnBuildAfter()
    {
        $this->setUpEntityManagerMock(self::ENTITY, self::ENTITY_FULL_NAME);

        $repository = $this->setUpWorkflowItemRepository();
        $repository->expects($this->once())
            ->method('getEntityIdsByEntityClassAndWorkflowNames')
            ->with(self::ENTITY_FULL_NAME, ['workflow_filter_value'])
            ->willReturn([42, 100]);
        $repository->expects($this->once())
            ->method('getEntityIdsByEntityClassAndWorkflowStepIds')
            ->with(self::ENTITY_FULL_NAME, ['workflow_step_filter_value'])
            ->willReturn([42]);

        $expr = $this->getMockBuilder('Doctrine\ORM\Query\Expr')->disableOriginalConstructor()->getMock();
        $expr->expects($this->once())->method('in')->with(self::ALIAS, ':filteredWorkflowItemIds')->willReturnSelf();

        $qParameter = new Parameter('filteredWorkflowItemIds', [42, 100]);

        $qb = $this->getMockBuilder('Doctrine\ORM\QueryBuilder')->disableOriginalConstructor()->getMock();
        $qb->expects($this->at(0))->method('getParameter')->with('filteredWorkflowItemIds')->willReturn(null);
        $qb->expects($this->at(1))->method('expr')->willReturn($expr);
        $qb->expects($this->at(2))->method('andWhere')->with($expr)->willReturnSelf();
        $qb->expects($this->at(3))->method('setParameter')->with('filteredWorkflowItemIds', [42, 100]);
        $qb->expects($this->at(4))->method('getParameter')->with('filteredWorkflowItemIds')->willReturn($qParameter);
        $qb->expects($this->at(5))->method('setParameter')->with('filteredWorkflowItemIds', [42]);

        $datasource = $this->getMockBuilder('Oro\Bundle\DataGridBundle\Datasource\Orm\OrmDatasource')
            ->disableOriginalConstructor()
            ->getMock();
        $datasource->expects($this->exactly(2))->method('getQueryBuilder')->willReturn($qb);

        $event = $this->createBuildAfterEvent(
            $datasource,
            DatagridConfiguration::create(
                [
                    'source' => [
                        'query' => [
                            'select' => [
                                self::ALIAS . '.rootField'
                            ],
                            'from' => [
                                ['table' => self::ENTITY, 'alias' => self::ALIAS]
                            ]
                        ]
                    ],
                    'columns' => [
                        WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN => []
                    ]
                ]
            )
        );

        $parameters = new ParameterBag(
            [
                '_filter' => [
                    WorkflowStepColumnListener::WORKFLOW_FILTER => ['value' => 'workflow_filter_value'],
                    WorkflowStepColumnListener::WORKFLOW_STEP_FILTER => ['value' => 'workflow_step_filter_value']
                ]
            ]
        );

        /** @var \PHPUnit_Framework_MockObject_MockObject $datagrid */
        $datagrid = $event->getDatagrid();
        $datagrid->expects($this->exactly(2))->method('getParameters')->willReturn($parameters);

        $this->listener->onBuildAfter($event);

        $this->assertEquals([], $parameters->get('_filter'));
    }

    public function testOnResultAfterNoUpdate()
    {
        $event = $this->createResultAfterEvent(DatagridConfiguration::create([]));
        $event->expects($this->never())->method('getRecords');

        $repository = $this->setUpWorkflowItemRepository();
        $repository->expects($this->never())->method($this->anything());

        $this->listener->onResultAfter($event);
    }

    public function testOnResultAfter()
    {
        $this->setUpEntityManagerMock(self::ENTITY, self::ENTITY_FULL_NAME);

        $recordOne = new ResultRecord(['id' => 42]);
        $recordTwo = new ResultRecord(['id' => 100]);

        $event = $this->createResultAfterEvent(
            DatagridConfiguration::create(
                [
                    'source' => [
                        'query' => [
                            'select' => [
                                self::ALIAS . '.rootField'
                            ],
                            'from' => [
                                ['table' => self::ENTITY, 'alias' => self::ALIAS]
                            ]
                        ]
                    ],
                    'columns' => [
                        WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN => []
                    ]
                ]
            )
        );
        $event->expects($this->once())->method('getRecords')->willReturn([$recordOne, $recordTwo]);

        $data = [
            ['entityId' => 42, 'workflowName' => 'test1', 'stepName' => 'step1'],
            ['entityId' => 42, 'workflowName' => 'test2', 'stepName' => 'step2']
        ];

        $repository = $this->setUpWorkflowItemRepository();
        $repository->expects($this->once())
            ->method('getGroupedWorkflowNameAndWorkflowStepName')
            ->with(self::ENTITY_FULL_NAME, [42, 100], true, ['test1', 'test2'])
            ->willReturn([42 => $data]);

        $this->workflowManagerRegistry->expects($this->once())->method('getManager')
            ->willReturn($this->workflowManager);

        $this->workflowManager->expects($this->once())->method('getApplicableWorkflows')
            ->with(WorkflowStepColumnListenerTest::ENTITY_FULL_NAME)
            ->willReturn([
                'test1' => $this->getWorkflowMock(),
                'test2' => $this->getWorkflowMock(),
            ]);

        $this->listener->onResultAfter($event);

        $this->assertEquals($data, $recordOne->getValue(WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN));
        $this->assertEquals([], $recordTwo->getValue(WorkflowStepColumnListener::WORKFLOW_STEP_COLUMN));
    }

    /**
     * @param string $entity
     * @param string $entityFullName
     */
    protected function setUpEntityManagerMock($entity, $entityFullName)
    {
        $metadata = $this->getMockBuilder('Doctrine\ORM\Mapping\ClassMetadata')
            ->disableOriginalConstructor()
            ->getMock();
        $metadata->expects($this->any())->method('getName')->willReturn($entityFullName);

        $entityManager = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();
        $entityManager->expects($this->any())->method('getClassMetadata')->with($entity)->willReturn($metadata);

        $this->doctrineHelper->expects($this->any())
            ->method('getEntityManager')
            ->with($entity)
            ->willReturn($entityManager);

        $this->entityClassResolver->expects($this->any())
            ->method('getEntityClass')
            ->with(self::ENTITY)
            ->willReturn(self::ENTITY_FULL_NAME);
    }

    /**
     * @return WorkflowItemRepository|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function setUpWorkflowItemRepository()
    {
        $repository = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\Repository\WorkflowItemRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $this->doctrineHelper->expects($this->any())
            ->method('getEntityRepository')
            ->with('OroWorkflowBundle:WorkflowItem')
            ->willReturn($repository);

        return $repository;
    }

    /**
     * @param string $entity
     * @param bool $hasConfig
     * @param bool $isShowStep
     */
    protected function setUpConfigProviderMock($entity, $hasConfig = true, $isShowStep = true)
    {
        $this->configProvider->expects($this->any())->method('hasConfig')->with($entity)
            ->will($this->returnValue($hasConfig));

        if ($hasConfig) {
            $config = $this->createMock('Oro\Bundle\EntityConfigBundle\Config\ConfigInterface');
            $config->expects($this->any())->method('has')->with('show_step_in_grid')
                ->will($this->returnValue(true));
            $config->expects($this->any())->method('is')->with('show_step_in_grid')
                ->will($this->returnValue($isShowStep));

            $this->configProvider->expects($this->any())->method('getConfig')->with($entity)
                ->will($this->returnValue($config));
        } else {
            $this->configProvider->expects($this->never())->method('getConfig');
        }
    }

    /**
     * @param string $entityClass
     * @param bool $hasWorkflow
     * @param bool $multiWorkflow
     */
    protected function setUpWorkflowManagerMock($entityClass, $hasWorkflow = true, $multiWorkflow = true)
    {
        $workflows = new ArrayCollection();

        if ($hasWorkflow) {
            $workflows->add($this->getWorkflowMock());
            if ($multiWorkflow) {
                $workflows->add($this->getWorkflowMock());
            }
        }

        $this->workflowManagerRegistry->expects($this->any())
            ->method('getManager')
            ->willReturn($this->workflowManager);

        $this->workflowManager->expects($this->any())
            ->method('getApplicableWorkflows')
            ->with($entityClass)
            ->willReturn($workflows);
    }

    /**
     * @param array $configuration
     * @return BuildBefore
     */
    protected function createBuildBeforeEvent(array $configuration)
    {
        $datagridConfiguration = DatagridConfiguration::create($configuration);

        $event = $this->getMockBuilder('Oro\Bundle\DataGridBundle\Event\BuildBefore')
            ->disableOriginalConstructor()
            ->getMock();
        $event->expects($this->any())->method('getConfig')->willReturn($datagridConfiguration);

        return $event;
    }

    /**
     * @param DatasourceInterface $datasource
     * @param DatagridConfiguration $configuration
     * @return BuildAfter
     */
    protected function createBuildAfterEvent(DatasourceInterface $datasource, DatagridConfiguration $configuration)
    {
        $datagrid = $this->createMock('Oro\Bundle\DataGridBundle\Datagrid\DatagridInterface');
        $datagrid->expects($this->any())->method('getDatasource')->willReturn($datasource);
        $datagrid->expects($this->any())->method('getConfig')->willReturn($configuration);

        $event = $this->getMockBuilder('Oro\Bundle\DataGridBundle\Event\BuildAfter')
            ->disableOriginalConstructor()
            ->getMock();
        $event->expects($this->any())->method('getDatagrid')->willReturn($datagrid);

        return $event;
    }

    /**
     * @param DatagridConfiguration $configuration
     * @return OrmResultAfter|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function createResultAfterEvent(DatagridConfiguration $configuration)
    {
        $datagrid = $this->createMock('Oro\Bundle\DataGridBundle\Datagrid\DatagridInterface');
        $datagrid->expects($this->any())->method('getConfig')->willReturn($configuration);

        $event = $this->getMockBuilder('Oro\Bundle\DataGridBundle\Event\OrmResultAfter')
            ->disableOriginalConstructor()
            ->getMock();
        $event->expects($this->any())->method('getDatagrid')->willReturn($datagrid);

        return $event;
    }

    /**
     * @return Workflow|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function getWorkflowMock()
    {
        return $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Model\Workflow')
            ->disableOriginalConstructor()
            ->getMock();
    }
}
