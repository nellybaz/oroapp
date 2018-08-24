<?php

namespace Oro\Bundle\DataGridBundle\Tests\Unit\Tools;

use Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration;
use Oro\Bundle\DataGridBundle\Provider\ConfigurationProviderInterface;
use Oro\Bundle\DataGridBundle\Tools\MixinConfigurationHelper;

class MixinConfigurationHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MixinConfigurationHelper
     */
    protected $helper;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ConfigurationProviderInterface
     */
    protected $configProvider;

    protected function setUp()
    {
        $this->configProvider = $this->createMock('Oro\Bundle\DataGridBundle\Provider\ConfigurationProviderInterface');

        $this->helper = new MixinConfigurationHelper($this->configProvider);
    }

    /**
     * @param string $gridName
     * @param array  $existingParameters
     * @param array  $additionalParameters
     * @param array  $expectedParameters
     *
     * @dataProvider extendConfigurationDataProvider
     */
    public function testExtendConfiguration(
        $gridName,
        array $existingParameters,
        array $additionalParameters,
        array $expectedParameters
    ) {
        $this->configProvider
            ->expects($this->once())
            ->method('getConfiguration')
            ->will(
                $this->returnValue(
                    DatagridConfiguration::create($additionalParameters)
                )
            );

        $this->assertEquals(
            DatagridConfiguration::create($expectedParameters)->toArray(),
            $this->helper->extendConfiguration(DatagridConfiguration::create($existingParameters), $gridName)->toArray()
        );
    }

    /**
     * @return array
     */
    public function extendConfigurationDataProvider()
    {
        return [
            'empty' => [
                'gridName' => 'gridName',
                'existingParameters' => [],
                'additionalParameters' => [],
                'expectedParameters' => []
            ],
            'leave_name' => [
                'gridName' => 'gridName',
                'existingParameters' => ['name' => 'existing'],
                'additionalParameters' => ['name' => 'additional'],
                'expectedParameters' => ['name' => 'existing']
            ],
            'not_array' => [
                'gridName' => 'gridName',
                'existingParameters' => ['scope' => 'existing'],
                'additionalParameters' => ['scope' => 'additional'],
                'expectedParameters' => ['scope' => 'existing']
            ],
            'merge' => [
                'gridName' => 'gridName',
                'existingParameters' => ['scope' => ['existing']],
                'additionalParameters' => ['scope' => ['additional']],
                'expectedParameters' => ['scope' => ['existing', 'additional']]
            ],
            'add_new' => [
                'gridName' => 'gridName',
                'existingParameters' => [],
                'additionalParameters' => ['scope' => ['additional']],
                'expectedParameters' => ['scope' => ['additional']]
            ],
            'without_update' => [
                'gridName' => 'gridName',
                'existingParameters' => ['scope' => ['existing']],
                'additionalParameters' => [],
                'expectedParameters' => ['scope' => ['existing']]
            ],
            'with alias update' => [
                'gridName' => 'gridName',
                'existingParameters' => [
                    'source' => [
                        'query' => [
                            'from' => [
                                [
                                    'table' => 'table',
                                    'alias' => 'T1000'
                                ]
                            ]
                        ]
                    ],
                    'columns' => ['T1000.name as name']
                ],
                'additionalParameters' => [
                    'columns' => ['__root_entity__.id', 'other.field'],
                    'sorters' => [
                        'columns' => ['__root_entity__.id', 'other.field']
                    ],
                    'filters' => [
                        'columns' => ['__root_entity__.id', 'other.field']
                    ],
                    'source' => [
                        'query' => [
                            'where' => 'other = some.type AND __root_entity__.id = some.id'
                        ]
                    ]
                ],
                'expectedParameters' => [
                    'columns' => ['T1000.name as name', 'T1000.id', 'other.field'],
                    'sorters' => [
                        'columns' => ['T1000.id', 'other.field']
                    ],
                    'filters' => [
                        'columns' => ['T1000.id', 'other.field']
                    ],
                    'source' => [
                        'query' => [
                            'from' => [
                                [
                                    'table' => 'table',
                                    'alias' => 'T1000'
                                ]
                            ],
                            'where' => 'other = some.type AND T1000.id = some.id'
                        ]
                    ]
                ]
            ],
        ];
    }


    /**
     * @dataProvider mergeDataProvider
     *
     * @param array $expected
     * @param array $first
     * @param array $second
     */
    public function testArrayMergeRecursiveDistinct(array $expected, array $first, array $second)
    {
        $this->assertEquals($expected, MixinConfigurationHelper::arrayMergeRecursiveAppendDistinct($first, $second));
    }

    /**
     * @return array
     */
    public function mergeDataProvider()
    {
        return [
            [
                [
                    'a',
                    'f',
                    'c' => [
                        'd' => 'd1',
                        'e' => 'e1'
                    ],
                    ['q'],
                    'b',
                    'g',
                    ['w']
                ],
                ['a', 'f', 'c' => ['d' => 'd1', 'e' => 'e1'], ['q']],
                ['b', 'c' => ['d' => 'd2'], 'g', ['w']]
            ]
        ];
    }
}
