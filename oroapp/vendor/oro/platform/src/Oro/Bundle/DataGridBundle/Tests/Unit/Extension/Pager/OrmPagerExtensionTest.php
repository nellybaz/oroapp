<?php

namespace Oro\Bundle\DataGridBundle\Tests\Unit\Extension\Pager;

use Doctrine\ORM\QueryBuilder;

use Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration;
use Oro\Bundle\DataGridBundle\Datagrid\ParameterBag;
use Oro\Bundle\DataGridBundle\Datasource\DatasourceInterface;
use Oro\Bundle\DataGridBundle\Datasource\Orm\OrmDatasource;
use Oro\Bundle\DataGridBundle\Extension\Mode\ModeExtension;
use Oro\Bundle\DataGridBundle\Extension\Pager\Orm\Pager;
use Oro\Bundle\DataGridBundle\Extension\Pager\OrmPagerExtension;
use Oro\Bundle\DataGridBundle\Extension\Pager\PagerInterface;

class OrmPagerExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|Pager
     */
    protected $pager;

    /**
     * @var OrmPagerExtension
     */
    protected $extension;

    protected function setUp()
    {
        $this->pager = $this->getMockBuilder('Oro\Bundle\DataGridBundle\Extension\Pager\Orm\Pager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->extension = new OrmPagerExtension($this->pager);
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
        return array(
            'empty' => array(
                'input' => array(),
                'expected' => array(),
            ),
            'regular' => array(
                'input' => array(
                    PagerInterface::PAGER_ROOT_PARAM => array(
                        PagerInterface::PAGE_PARAM => 1,
                        PagerInterface::PER_PAGE_PARAM => 25,
                    )
                ),
                'expected' => array(
                    PagerInterface::PAGER_ROOT_PARAM => array(
                        PagerInterface::PAGE_PARAM => 1,
                        PagerInterface::PER_PAGE_PARAM => 25,
                    )
                )
            ),
            'minified' => array(
                'input' => array(
                    ParameterBag::MINIFIED_PARAMETERS => array(
                        PagerInterface::MINIFIED_PAGE_PARAM => 1,
                        PagerInterface::MINIFIED_PER_PAGE_PARAM => 25,
                    )
                ),
                'expected' => array(
                    ParameterBag::MINIFIED_PARAMETERS => array(
                        PagerInterface::MINIFIED_PAGE_PARAM => 1,
                        PagerInterface::MINIFIED_PER_PAGE_PARAM => 25,
                    ),
                    PagerInterface::PAGER_ROOT_PARAM => array(
                        PagerInterface::PAGE_PARAM => 1,
                        PagerInterface::PER_PAGE_PARAM => 25,
                    )
                )
            ),
        );
    }

    public function visitDatasourceNoRestrictionsDataProvider()
    {
        return [
            'regular grid' => [
                'config' => [],
                'page' => 1,
                'maxPerPage' => 10,
            ],
            'one page pagination' => [
                'config' => [
                    'options' => [
                        'toolbarOptions' => [
                            'pagination' => [
                                'onePage' => true
                            ]
                        ]
                    ]
                ],
                'page' => 0,
                'maxPerPage' => 0,
            ],
            'client mode' => [
                'config' => [
                    'options' => [
                        'mode' => ModeExtension::MODE_CLIENT,
                    ]
                ],
                'page' => 0,
                'maxPerPage' => 0,
            ],
        ];
    }

    /**
     * @param array $config
     * @param int $page
     * @param int $maxPerPage
     * @dataProvider visitDatasourceNoRestrictionsDataProvider
     */
    public function testVisitDatasourceNoPagerRestrictions(array $config, $page, $maxPerPage)
    {
        $this->pager->expects($this->once())
            ->method('setPage')
            ->with($page);
        $this->pager->expects($this->once())
            ->method('setMaxPerPage')
            ->with($maxPerPage);

        /** @var DatasourceInterface|\PHPUnit_Framework_MockObject_MockObject $dataSource */
        $dataSource = $this->getMockBuilder(OrmDatasource::class)
            ->disableOriginalConstructor()->getMock();

        $configObject = DatagridConfiguration::create($config);

        $queryBuilder = $this->getMockBuilder(QueryBuilder::class)
            ->disableOriginalConstructor()->getMock();

        $dataSource
            ->method('getQueryBuilder')->withAnyParameters()->willReturn($queryBuilder);
        $dataSource->method('getCountQueryHints')->willReturn([]);

        $this->extension->setParameters(new ParameterBag());
        $this->extension->visitDatasource($configObject, $dataSource);
    }

    /**
     * @param null $count
     * @param bool $adjustTotalCount
     *
     * @dataProvider adjustedCountDataProvider
     */
    public function testVisitDatasourceWithAdjustedCount($count, $adjustTotalCount = false)
    {
        if ($adjustTotalCount) {
            $this->pager->expects($this->once())
                ->method('adjustTotalCount')
                ->with($count);
        } else {
            $this->pager->expects($this->never())
                ->method('adjustTotalCount')
                ->with($count);
        }

        /** @var DatasourceInterface|\PHPUnit_Framework_MockObject_MockObject $dataSource */
        $dataSource = $this->getMockBuilder(OrmDatasource::class)
            ->disableOriginalConstructor()->getMock();

        $queryBuilder = $this->getMockBuilder(QueryBuilder::class)
            ->disableOriginalConstructor()->getMock();

        $dataSource
            ->method('getQueryBuilder')->withAnyParameters()->willReturn($queryBuilder);
        $dataSource->method('getCountQueryHints')->willReturn([]);
        $configObject = DatagridConfiguration::create([]);
        $parameters = [];
        if (null !== $count) {
            $parameters[PagerInterface::PAGER_ROOT_PARAM] = [PagerInterface::ADJUSTED_COUNT => $count];
        }
        $this->extension->setParameters(new ParameterBag($parameters));
        $this->extension->visitDatasource($configObject, $dataSource);
    }

    public function testHintCount()
    {
        $hints = ['HINT'];
        $this->pager->expects($this->once())
            ->method('setCountQueryHints')
            ->with($hints);

        /** @var DatasourceInterface|\PHPUnit_Framework_MockObject_MockObject $dataSource */
        $dataSource = $this->getMockBuilder(OrmDatasource::class)
            ->disableOriginalConstructor()->getMock();

        $queryBuilder = $this->getMockBuilder(QueryBuilder::class)
            ->disableOriginalConstructor()->getMock();

        $dataSource
            ->method('getQueryBuilder')->withAnyParameters()->willReturn($queryBuilder);
        $dataSource->method('getCountQueryHints')->willReturn($hints);
        $configObject = DatagridConfiguration::create([]);
        $parameters = [];

        $this->extension->setParameters(new ParameterBag($parameters));
        $this->extension->visitDatasource($configObject, $dataSource);
    }

    public function adjustedCountDataProvider()
    {
        return [
            'valid value' => [150, true],
            'no value' => [null],
            'not valid value(negative)' => [-100],
            'not valid value(string)' => ['test'],
            'not valid value(false)' => [false],
            'not valid value(true)' => [true]
        ];
    }
}
