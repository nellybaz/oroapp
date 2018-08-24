<?php

namespace Oro\Bundle\SegmentBundle\Tests\Unit\Model;

use Oro\Bundle\SegmentBundle\Model\RestrictionSegmentProxy;
use Oro\Bundle\SegmentBundle\Tests\Unit\SegmentDefinitionTestCase;

class RestrictionSegmentProxyTest extends SegmentDefinitionTestCase
{
    /**
     * @dataProvider definitionProvider
     *
     * @param mixed $definition
     * @param mixed $expectedDefinition
     * @param null  $expectedException
     */
    public function testProxy($definition, $expectedDefinition, $expectedException = null)
    {
        if ($expectedException) {
            $this->expectException($expectedException);
        }

        $segment            = $this->getSegment(false, $definition);
        $expectedDefinition = json_encode($expectedDefinition);

        $entityMetadata = $this->getMockBuilder('Doctrine\ORM\Mapping\ClassMetadata')
            ->disableOriginalConstructor()->getMock();
        $entityMetadata->expects($this->any())->method('getIdentifier')
            ->will($this->returnValue([self::TEST_IDENTIFIER_NAME]));

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()->getMock();
        $em->expects($this->any())->method('getClassMetadata')->with(self::TEST_ENTITY)
            ->will($this->returnValue($entityMetadata));
        $proxy = new RestrictionSegmentProxy($segment, $em);
        $proxy->setEntity(self::TEST_ENTITY);
        $proxy->setDefinition(json_encode($definition));

        $this->assertSame($proxy->getEntity(), $segment->getEntity());
        $this->assertEquals($expectedDefinition, $proxy->getDefinition());
    }

    /**
     * @return array
     */
    public function definitionProvider()
    {
        return [
            'should process definition and convert segment columns to segment identifier' => [
                [
                    'columns' => [
                        [
                            'name'    => 'userName',
                            'label'   => 'User name',
                            'func'    => null,
                            'sorting' => null
                        ]
                    ],
                    'filters' => [
                        [
                            'columnName' => 'createdAt',
                            'criterion'  => [
                                'filter' => 'datetime',
                                'data'   => [
                                    'type'  => 4,
                                    'value' => [
                                        'end' => '2014-03-08 09:47:00'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'columns' => [
                        [
                            'name'    => 'userName',
                            'label'   => 'User name',
                            'func'    => null,
                            'sorting' => null
                        ],
                        [
                            'name'     => self::TEST_IDENTIFIER_NAME,
                            'distinct' => true
                        ]
                    ],
                    'filters' => [
                        [
                            'columnName' => 'createdAt',
                            'criterion'  => [
                                'filter' => 'datetime',
                                'data'   => [
                                    'type'  => 4,
                                    'value' => [
                                        'end' => '2014-03-08 09:47:00'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'bad definition given, expected exception'                                    => [
                null,
                null,
                'Oro\Bundle\QueryDesignerBundle\Exception\InvalidConfigurationException'
            ]
        ];
    }
}
