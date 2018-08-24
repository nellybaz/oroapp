<?php

namespace Oro\Bundle\FilterBundle\Tests\Unit\Filter;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;

use Symfony\Component\Form\FormFactoryInterface;

use Oro\Bundle\FilterBundle\Form\Type\Filter\TextFilterType;
use Oro\Bundle\FilterBundle\Datasource\Orm\OrmFilterDatasourceAdapter;
use Oro\Bundle\FilterBundle\Filter\FilterUtility;
use Oro\Bundle\FilterBundle\Filter\StringFilter;

class StringFilterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var StringFilter
     */
    protected $filter;

    /**
     * @var string
     */
    protected $filterName = 'filter-name';

    /**
     * @var string
     */
    protected $dataName = 'field-name';

    /**
     * @var string
     */
    protected $parameterName = 'parameter-name';

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        /* @var $formFactory FormFactoryInterface|\PHPUnit_Framework_MockObject_MockObject */
        $formFactory = $this->createMock('Symfony\Component\Form\FormFactoryInterface');

        /* @var $filterUtility FilterUtility|\PHPUnit_Framework_MockObject_MockObject */
        $filterUtility = $this->createMock('Oro\Bundle\FilterBundle\Filter\FilterUtility');

        $this->filter = new StringFilter($formFactory, $filterUtility);
        $this->filter->init($this->filterName, [
            FilterUtility::DATA_NAME_KEY => $this->dataName,
        ]);
    }

    /**
     * @dataProvider applyProvider
     *
     * @param array $inputData
     * @param array $expectedData
     */
    public function testApply(array $inputData, array $expectedData)
    {
        $ds = $this->prepareDatasource();

        $this->filter->apply($ds, $inputData['data']);

        $where = $this->parseQueryCondition($ds);

        $this->assertEquals($expectedData['where'], $where);
    }

    /**
     * @return array
     */
    public function applyProvider()
    {
        return [
            'EMPTY' => [
                'input' => [
                    'data' => [
                        'type' => FilterUtility::TYPE_EMPTY,
                        'value' => null,
                    ],
                ],
                'expected' => [
                    'where' => 'field-name IS NULL OR field-name = \'\'',
                ],
            ],
            'NOT_EMPTY' => [
                'input' => [
                    'data' => [
                        'type' => FilterUtility::TYPE_NOT_EMPTY,
                        'value' => null,
                    ],
                ],
                'expected' => [
                    'where' => 'field-name IS NOT NULL AND field-name <> \'\'',
                ],
            ],
            'CONTAINS_EMPTY_STRING' => [
                'input' => [
                    'data' => [
                        'type' => TextFilterType::TYPE_CONTAINS,
                        'value' => '',
                    ],
                ],
                'expected' => [
                    'where' => '',
                ],
            ],
            'CONTAINS_STRING' => [
                'input' => [
                    'data' => [
                        'type' => TextFilterType::TYPE_CONTAINS,
                        'value' => 'test',
                    ],
                ],
                'expected' => [
                    'where' => 'field-name LIKE %test%',
                ],
            ],
            'CONTAINS_STRING_0' => [
                'input' => [
                    'data' => [
                        'type' => TextFilterType::TYPE_CONTAINS,
                        'value' => '0',
                    ],
                ],
                'expected' => [
                    'where' => 'field-name LIKE %0%',
                ],
            ],
        ];
    }

    /**
     * @return OrmFilterDatasourceAdapter|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function prepareDatasource()
    {
        /* @var $em EntityManagerInterface|\PHPUnit_Framework_MockObject_MockObject */
        $em = $this->createMock('Doctrine\ORM\EntityManagerInterface');
        $em->expects($this->any())
            ->method('getExpressionBuilder')
            ->willReturn(new Query\Expr())
        ;
        $ds = $this->getMockBuilder('Oro\Bundle\FilterBundle\Datasource\Orm\OrmFilterDatasourceAdapter')
            ->setMethods(['generateParameterName', 'getDatabasePlatform'])
            ->setConstructorArgs([new QueryBuilder($em)])
            ->getMock();
        $ds->expects($this->any())
            ->method('getDatabasePlatform')
            ->willReturn(new \stdClass())
        ;

        return $ds;
    }


    /**
     * @param OrmFilterDatasourceAdapter $ds
     * @return string
     */
    protected function parseQueryCondition(OrmFilterDatasourceAdapter $ds)
    {
        $qb = $ds->getQueryBuilder();

        $parameters = array();
        foreach ($qb->getParameters() as $param) {
            /* @var $param Query\Parameter */
            $parameters[':' . $param->getName()] = $param->getValue();
        }

        $parts = $qb->getDQLParts();

        $where = '';

        if ($parts['where']) {
            $where = str_replace(
                array_keys($parameters),
                array_values($parameters),
                (string)$parts['where']
            );
        }

        return $where;
    }
}
