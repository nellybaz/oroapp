<?php

namespace Oro\Bundle\DataGridBundle\Tests\Unit\Extension\Columns;

use Doctrine\Common\Persistence\ManagerRegistry;

use Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration;
use Oro\Bundle\DataGridBundle\Datagrid\Common\MetadataObject;
use Oro\Bundle\DataGridBundle\Datagrid\ParameterBag;
use Oro\Bundle\DataGridBundle\Extension\Columns\ColumnsExtension;
use Oro\Bundle\DataGridBundle\Tools\ColumnsHelper;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Oro\Bundle\SecurityBundle\ORM\Walker\AclHelper;

class ColumnsExtensionTest extends \PHPUnit_Framework_TestCase
{
    /** @var ColumnsExtension */
    protected $extension;

    /** @var \PHPUnit_Framework_MockObject_MockBuilder */
    protected $tokenAccessor;

    /** @var \PHPUnit_Framework_MockObject_MockBuilder */
    protected $registry;

    /** @var \PHPUnit_Framework_MockObject_MockBuilder */
    protected $aclHelper;

    /** @var ColumnsHelper*/
    protected $columnsHelper;

    protected function setUp()
    {
        $this->registry = $this->createMock(ManagerRegistry::class);
        $this->tokenAccessor = $this->createMock(TokenAccessorInterface::class);
        $this->aclHelper = $this->createMock(AclHelper::class);
        $this->columnsHelper = new ColumnsHelper();

        $this->extension = new ColumnsExtension(
            $this->registry,
            $this->tokenAccessor,
            $this->aclHelper,
            $this->columnsHelper
        );

        $this->extension->setParameters(new ParameterBag());
    }

    /**
     * @param $input
     * @param $result
     *
     * @dataProvider isApplicableProvider
     */
    public function testIsApplicable($input, $result)
    {
        static::assertEquals(
            $this->extension->isApplicable(
                DatagridConfiguration::create($input)
            ),
            $result
        );
    }

    /**
     * @return array
     */
    public function isApplicableProvider()
    {
        return [
            'applicable'     => [
                'input'  => [
                    'columns' => [
                        'name'  => [],
                        'label' => []
                    ]
                ],
                'result' => true
            ],
            'not applicable' => [
                'input'  => [
                    'columns' => []
                ],
                'result' => false
            ]
        ];
    }

    /**
     * @param array $columnsConfigArray
     * @param array $dataState
     * @param array $columnsDataArray
     * @param array $gridViewColumnsData
     * @param array $gridViewId
     * @param array $stateResult
     * @param array $initialStateResult
     * @param array $dataInitialState
     * @param bool  $isGridView
     *
     * @dataProvider configDataProvider
     */
    public function testVisitMetadata(
        $columnsConfigArray,
        $dataState,
        $columnsDataArray,
        $gridViewColumnsData,
        $gridViewId,
        $stateResult,
        $initialStateResult,
        $dataInitialState,
        $isGridView = true
    ) {
        $this->extension->setParameters(new ParameterBag([]));
        $user = $this->getMockBuilder('Oro\Bundle\UserBundle\Entity\User')
            ->disableOriginalConstructor()
            ->getMock();

        $this->tokenAccessor->expects(static::any())
            ->method('getUser')
            ->willReturn($user);

        $config = $this->getMockBuilder('Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration')
            ->disableOriginalConstructor()
            ->getMock();
        $quantity = ($isGridView) ? 4 : 3;
        $config
            ->expects(static::exactly($quantity))
            ->method('offsetGet')
            ->with('columns')
            ->will(static::returnValue($columnsConfigArray));
        $config
            ->expects(static::any())
            ->method('getName')
            ->will(static::returnValue('test-grid'));

        $data = MetadataObject::createNamed('test-grid', []);
        $data->offsetSet('columns', $columnsDataArray);
        $data->offsetSet('state', $dataState);
        $data->offsetSet('initialState', $dataInitialState);
        $data->offsetSet(
            'gridViews',
            [
                'views' => [
                    ['name' => '__all__', 'label' => 'label', 'columns' => []]
                ]
            ]
        );

        $repository = $this->getMockBuilder('Oro\Bundle\DataGridBundle\Entity\Repository\GridViewRepository')
            ->setMethods(['findGridViews', 'findDefaultGridView'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->registry
            ->expects(static::any())
            ->method('getRepository')
            ->with('OroDataGridBundle:GridView')
            ->will(static::returnValue($repository));

        $gridView = $this->getMockBuilder('Oro\Bundle\DataGridBundle\Entity\GridView')
            ->disableOriginalConstructor()
            ->getMock();

        if ($isGridView) {
            $gridView
                ->expects(static::once())
                ->method('getId')
                ->will(static::returnValue($gridViewId));
            $gridView
                ->expects(static::once())
                ->method('getColumnsData')
                ->will(static::returnValue($gridViewColumnsData));
            $repository
                ->expects(static::once())
                ->method('findGridViews')
                ->will(static::returnValue([$gridView]));
        } else {
            $repository
                ->expects(static::once())
                ->method('findGridViews')
                ->will(static::returnValue(null));
        }

        $this->extension->visitMetadata($config, $data);

        static::assertEquals($stateResult, $data->offsetGet('state'));
        static::assertEquals($initialStateResult, $data->offsetGet('initialState'));

        $gridViews = $data->offsetGet('gridViews');
        if ($isGridView) {
            foreach ($gridViews['views'] as $gridView) {
                if ('__all__' === $gridView['name']) {
                    static::assertEquals($gridView['columns'], $initialStateResult['columns']);
                    break;
                }
            }
        }
    }

    public function testVisitMetadataNotCurrentUser()
    {
        $this->tokenAccessor->expects($this->exactly(3))
            ->method('getUser')
            ->will($this->returnValue(null));

        $config = $this->getMockBuilder('Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration')
            ->disableOriginalConstructor()
            ->getMock();
        $config
            ->expects(static::exactly(2))
            ->method('offsetGet')
            ->with('columns')
            ->will(static::returnValue(['name'  => ['order' => 2, 'renderable' => true]]));

        $data = MetadataObject::createNamed('test-grid', []);
        $this->extension->setParameters(new ParameterBag([]));
        $result = $this->extension->visitMetadata($config, $data);
        $this->assertEquals(null, $result);
        $initState = ['columns' => ['name' => ['order' => 2, 'renderable' => true]]];
        $this->assertEquals($data->offsetGet('initialState'), $initState);
    }

    /**
     * @return array
     */
    public function configDataProvider()
    {
        $columns = [
            'name'  => ['order' => 2, 'renderable' => true],
            'label' => ['order' => 1, 'renderable' => true],
            'some'  => ['order' => 3, 'renderable' => true]
        ];

        return [
            'same state'         => [
                'columnsConfigArray'  => [
                    'name'  => ['order' => 2,'renderable' => true, 'label' => 'name', 'type' => 'string'],
                    'label' => ['order' => 1,'renderable' => true, 'label' => 'label', 'type' => 'string'],
                    'some'  => ['order' => 3,'renderable' => true, 'label' => 'label', 'type' => 'string']
                ],
                'dataState'           => ['gridView' => 1, 'filters' => []],
                'columnsDataArray'    => [
                    ['label' => 'Test Name', 'type' => 'string', 'name' => 'name', 'order' => 2,'renderable' => true],
                    ['label' => 'Test Label', 'type' => 'string', 'name' => 'label'],
                    ['label' => 'Test Some', 'type' => 'string', 'name' => 'some']
                ],
                'gridViewColumnsData' => $columns,
                'gridViewId'          => 1,
                'stateResult'         => [
                    'gridView' => 1,
                    'filters'  => [],
                    'columns'  => $columns
                ],
                'initialStateResult'  => [
                    'gridView' => '__all__',
                    'filters'  => [],
                    'columns'  => $columns
                ],
                'dataInitialState'    => ['gridView' => '__all__', 'filters' => []],
            ],
            'different state id' => [
                'columnsConfigArray'  => [
                    'name'  => ['order' => 2,'renderable' => true, 'label' => 'name', 'type' => 'string'],
                    'label' => ['order' => 1,'renderable' => true, 'label' => 'label', 'type' => 'string'],
                    'some'  => ['order' => 3,'renderable' => true, 'label' => 'label', 'type' => 'string']
                ],
                'dataState'           => ['gridView' => '__all__', 'filters' => []],
                'columnsDataArray'    => [
                    ['label' => 'Test Name', 'type' => 'string', 'name' => 'name', 'order' => 2,'renderable' => true],
                    ['label' => 'Test Label', 'type' => 'string', 'name' => 'label'],
                    ['label' => 'Test Some', 'type' => 'string', 'name' => 'some']
                ],
                'gridViewColumnsData' => [
                    'name'  => ['order' => 3, 'renderable' => true],
                    'label' => ['order' => 1, 'renderable' => true],
                    'some'  => ['order' => 2, 'renderable' => true],
                ],
                'gridViewId'          => 0,
                'stateResult'         => [
                    'gridView' => '__all__',
                    'filters'  => [],
                    'columns'  => [
                        'name'  => ['order' => 3, 'renderable' => true],
                        'label' => ['order' => 1, 'renderable' => true],
                        'some'  => ['order' => 2, 'renderable' => true],
                    ]
                ],
                'initialStateResult'  => [
                    'gridView' => '__all__',
                    'filters'  => [],
                    'columns'  => $columns
                ],
                'dataInitialState'    => ['gridView' => '__all__', 'filters' => []],
            ],
            'No grid view'       => [
                'columnsConfigArray'  => [
                    'name'  => ['order' => 2, 'renderable' => true, 'label' => 'name', 'type' => 'string'],
                    'label' => ['order' => 1, 'renderable' => true, 'label' => 'label', 'type' => 'string'],
                    'some'  => ['order' => 3, 'renderable' => true, 'label' => 'label', 'type' => 'string']
                ],
                'dataState'           => ['gridView' => '__all__', 'filters' => []],
                'columnsDataArray'    => [
                    ['label' => 'Test Name', 'type' => 'string', 'name' => 'name', 'order' => 2,'renderable' => true],
                    ['label' => 'Test Label', 'type' => 'string', 'name' => 'label'],
                    ['label' => 'Test Some', 'type' => 'string', 'name' => 'some']
                ],
                'gridViewColumnsData' => [],
                'gridViewId'          => 0,
                'stateResult'         => [
                    'gridView' => '__all__',
                    'filters'  => [],
                    'columns'  => $columns
                ],
                'initialStateResult'  => [
                    'gridView' => '__all__',
                    'filters'  => [],
                    'columns'  => $columns
                ],
                'dataInitialState'    => ['gridView' => '__all__', 'filters' => []],
                'isGridView'          => false
            ],
        ];
    }

    /**
     * @param array $input
     * @param array $expected
     * @dataProvider setParametersDataProvider
     */
    public function testSetParameters(array $input, array $expected)
    {
        $this->extension->setParameters(new ParameterBag($input));
        $this->assertEquals($expected, $this->extension->getParameters()->all());
    }

    /**
     * @return array
     */
    public function setParametersDataProvider()
    {
        $minifiedParams = 'name1.updatedAt1.contactName1.contactEmail0.contactPhone1.ownerName1.createdAt1';

        return [
            'empty' => [
                'input' => [],
                'expected' => [],
            ],
            'regular' => [
                'input' => [
                    ColumnsExtension::COLUMNS_PARAM => $minifiedParams
                ],
                'expected' => [
                    ColumnsExtension::COLUMNS_PARAM => $minifiedParams
                ]
            ],
            'minified' => [
                'input' => [
                    ParameterBag::MINIFIED_PARAMETERS => [
                        ColumnsExtension::MINIFIED_COLUMNS_PARAM => $minifiedParams
                    ]
                ],
                'expected' => [
                    ParameterBag::MINIFIED_PARAMETERS => [
                        ColumnsExtension::MINIFIED_COLUMNS_PARAM => $minifiedParams
                    ],
                    ColumnsExtension::MINIFIED_COLUMNS_PARAM => $minifiedParams
                ]
            ]
        ];
    }
}
