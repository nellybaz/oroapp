<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Config\Shared;

use Doctrine\ORM\Mapping\ClassMetadata;

use Oro\Bundle\ApiBundle\Processor\Config\Shared\ExcludeNotAccessibleRelations;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\Config\ConfigProcessorTestCase;

class ExcludeNotAccessibleRelationsTest extends ConfigProcessorTestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $doctrineHelper;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $resourcesProvider;

    /** @var ExcludeNotAccessibleRelations */
    protected $processor;

    protected function setUp()
    {
        parent::setUp();

        $this->doctrineHelper = $this->getMockBuilder('Oro\Bundle\ApiBundle\Util\DoctrineHelper')
            ->disableOriginalConstructor()
            ->getMock();
        $this->resourcesProvider = $this->getMockBuilder('Oro\Bundle\ApiBundle\Provider\ResourcesProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->processor = new ExcludeNotAccessibleRelations(
            $this->doctrineHelper,
            $this->resourcesProvider
        );
    }

    public function testProcessForNotCompletedConfig()
    {
        $config = [
            'fields' => [
                'field1' => null
            ]
        ];

        $this->doctrineHelper->expects($this->never())
            ->method('isManageableEntityClass');

        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'fields' => [
                    'field1' => null
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testProcessWhenNoFields()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
            ]
        ];

        $this->doctrineHelper->expects($this->never())
            ->method('isManageableEntityClass');

        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all'
            ],
            $this->context->getResult()
        );
    }

    public function testProcessForNotManageableEntity()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'field1' => null
            ]
        ];

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(false);

        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'field1' => null
                ]
            ],
            $this->context->getResult()
        );
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testProcessForManageableEntity()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'field1'       => null,
                'field2'       => [
                    'exclude' => true
                ],
                'association1' => null,
                'association2' => [
                    'exclude' => true
                ],
                'association3' => [
                    'property_path' => 'realAssociation3'
                ],
                'association4' => [
                    'exclude' => false
                ],
            ]
        ];

        $rootEntityMetadata = $this->getClassMetadataMock(self::TEST_CLASS_NAME);
        $rootEntityMetadata->expects($this->exactly(3))
            ->method('hasAssociation')
            ->willReturnMap(
                [
                    ['field1', false],
                    ['association1', true],
                    ['realAssociation3', true],
                ]
            );
        $rootEntityMetadata->expects($this->exactly(2))
            ->method('getAssociationMapping')
            ->willReturnMap(
                [
                    ['association1', ['targetEntity' => 'Test\Association1Target']],
                    ['realAssociation3', ['targetEntity' => 'Test\Association3Target']],
                ]
            );

        $association1Metadata = $this->getClassMetadataMock('Test\Association1Target');
        $association3Metadata = $this->getClassMetadataMock('Test\Association3Target');

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);
        $this->doctrineHelper->expects($this->exactly(3))
            ->method('getEntityMetadataForClass')
            ->willReturnMap(
                [
                    [self::TEST_CLASS_NAME, true, $rootEntityMetadata],
                    ['Test\Association1Target', true, $association1Metadata],
                    ['Test\Association3Target', true, $association3Metadata],
                ]
            );
        $this->resourcesProvider->expects($this->exactly(2))
            ->method('isResourceAccessible')
            ->willReturnMap(
                [
                    ['Test\Association1Target', $this->context->getVersion(), $this->context->getRequestType(), true],
                    ['Test\Association3Target', $this->context->getVersion(), $this->context->getRequestType(), true],
                ]
            );

        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'field1'       => null,
                    'field2'       => [
                        'exclude' => true
                    ],
                    'association1' => null,
                    'association2' => [
                        'exclude' => true
                    ],
                    'association3' => [
                        'property_path' => 'realAssociation3'
                    ],
                    'association4' => null,
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testProcessWhenTargetEntityDoesNotHaveAccessibleApiResource()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'association1' => null,
            ]
        ];

        $rootEntityMetadata = $this->getClassMetadataMock(self::TEST_CLASS_NAME);
        $rootEntityMetadata->expects($this->once())
            ->method('hasAssociation')
            ->with('association1')
            ->willReturn(true);
        $rootEntityMetadata->expects($this->once())
            ->method('getAssociationMapping')
            ->with('association1')
            ->willReturn(['targetEntity' => 'Test\Association1Target']);

        $association1Metadata = $this->getClassMetadataMock('Test\Association1Target');

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);
        $this->doctrineHelper->expects($this->exactly(2))
            ->method('getEntityMetadataForClass')
            ->willReturnMap(
                [
                    [self::TEST_CLASS_NAME, true, $rootEntityMetadata],
                    ['Test\Association1Target', true, $association1Metadata],
                ]
            );
        $this->resourcesProvider->expects($this->once())
            ->method('isResourceAccessible')
            ->with('Test\Association1Target', $this->context->getVersion(), $this->context->getRequestType())
            ->willReturn(false);

        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'association1' => [
                        'exclude' => true
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testProcessForArrayAssociation()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'association1' => [
                    'data_type' => 'array'
                ]
            ]
        ];

        $rootEntityMetadata = $this->getClassMetadataMock(self::TEST_CLASS_NAME);
        $rootEntityMetadata->expects($this->once())
            ->method('hasAssociation')
            ->with('association1')
            ->willReturn(true);
        $rootEntityMetadata->expects($this->once())
            ->method('getAssociationMapping')
            ->with('association1')
            ->willReturn(['targetEntity' => 'Test\Association1Target']);

        $association1Metadata = $this->getClassMetadataMock('Test\Association1Target');

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);
        $this->doctrineHelper->expects($this->exactly(2))
            ->method('getEntityMetadataForClass')
            ->willReturnMap(
                [
                    [self::TEST_CLASS_NAME, true, $rootEntityMetadata],
                    ['Test\Association1Target', true, $association1Metadata],
                ]
            );
        $this->resourcesProvider->expects($this->once())
            ->method('isResourceKnown')
            ->with('Test\Association1Target', $this->context->getVersion(), $this->context->getRequestType())
            ->willReturn(true);

        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'association1' => [
                        'data_type' => 'array'
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testProcessForArrayAssociationAndTargetEntityDoesNotHaveApiResource()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'association1' => [
                    'data_type' => 'array'
                ]
            ]
        ];

        $rootEntityMetadata = $this->getClassMetadataMock(self::TEST_CLASS_NAME);
        $rootEntityMetadata->expects($this->once())
            ->method('hasAssociation')
            ->with('association1')
            ->willReturn(true);
        $rootEntityMetadata->expects($this->once())
            ->method('getAssociationMapping')
            ->with('association1')
            ->willReturn(['targetEntity' => 'Test\Association1Target']);

        $association1Metadata = $this->getClassMetadataMock('Test\Association1Target');

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);
        $this->doctrineHelper->expects($this->exactly(2))
            ->method('getEntityMetadataForClass')
            ->willReturnMap(
                [
                    [self::TEST_CLASS_NAME, true, $rootEntityMetadata],
                    ['Test\Association1Target', true, $association1Metadata],
                ]
            );
        $this->resourcesProvider->expects($this->once())
            ->method('isResourceKnown')
            ->with('Test\Association1Target', $this->context->getVersion(), $this->context->getRequestType())
            ->willReturn(false);

        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'association1' => [
                        'data_type' => 'array',
                        'exclude'   => true
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testProcessWhenTargetEntityUsesTableInheritance()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'association1' => null,
            ]
        ];

        $rootEntityMetadata = $this->getClassMetadataMock(self::TEST_CLASS_NAME);
        $rootEntityMetadata->expects($this->once())
            ->method('hasAssociation')
            ->with('association1')
            ->willReturn(true);
        $rootEntityMetadata->expects($this->once())
            ->method('getAssociationMapping')
            ->with('association1')
            ->willReturn(['targetEntity' => 'Test\Association1Target']);

        $association1Metadata                  = $this->getClassMetadataMock('Test\Association1Target');
        $association1Metadata->inheritanceType = ClassMetadata::INHERITANCE_TYPE_SINGLE_TABLE;
        $association1Metadata->subClasses      = ['Test\Association1Target1'];

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);
        $this->doctrineHelper->expects($this->exactly(2))
            ->method('getEntityMetadataForClass')
            ->willReturnMap(
                [
                    [self::TEST_CLASS_NAME, true, $rootEntityMetadata],
                    ['Test\Association1Target', true, $association1Metadata],
                ]
            );
        $this->resourcesProvider->expects($this->once())
            ->method('isResourceAccessible')
            ->with('Test\Association1Target', $this->context->getVersion(), $this->context->getRequestType())
            ->willReturn(true);

        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'association1' => null
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testProcessForArrayAssociationWhenTargetEntityUsesTableInheritance()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'association1' => [
                    'data_type' => 'array'
                ]
            ]
        ];

        $rootEntityMetadata = $this->getClassMetadataMock(self::TEST_CLASS_NAME);
        $rootEntityMetadata->expects($this->once())
            ->method('hasAssociation')
            ->with('association1')
            ->willReturn(true);
        $rootEntityMetadata->expects($this->once())
            ->method('getAssociationMapping')
            ->with('association1')
            ->willReturn(['targetEntity' => 'Test\Association1Target']);

        $association1Metadata                  = $this->getClassMetadataMock('Test\Association1Target');
        $association1Metadata->inheritanceType = ClassMetadata::INHERITANCE_TYPE_SINGLE_TABLE;
        $association1Metadata->subClasses      = ['Test\Association1Target1'];

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);
        $this->doctrineHelper->expects($this->exactly(2))
            ->method('getEntityMetadataForClass')
            ->willReturnMap(
                [
                    [self::TEST_CLASS_NAME, true, $rootEntityMetadata],
                    ['Test\Association1Target', true, $association1Metadata],
                ]
            );
        $this->resourcesProvider->expects($this->once())
            ->method('isResourceKnown')
            ->with('Test\Association1Target', $this->context->getVersion(), $this->context->getRequestType())
            ->willReturn(true);

        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'association1' => [
                        'data_type' => 'array'
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testProcessWhenTargetEntityUsesTableInheritanceAndNoAccessibleApiResourceForAnyConcreteTarget()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'association1' => null,
            ]
        ];

        $rootEntityMetadata = $this->getClassMetadataMock(self::TEST_CLASS_NAME);
        $rootEntityMetadata->expects($this->once())
            ->method('hasAssociation')
            ->with('association1')
            ->willReturn(true);
        $rootEntityMetadata->expects($this->once())
            ->method('getAssociationMapping')
            ->with('association1')
            ->willReturn(['targetEntity' => 'Test\Association1Target']);

        $association1Metadata                  = $this->getClassMetadataMock('Test\Association1Target');
        $association1Metadata->inheritanceType = ClassMetadata::INHERITANCE_TYPE_SINGLE_TABLE;
        $association1Metadata->subClasses      = ['Test\Association1Target1'];

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);
        $this->doctrineHelper->expects($this->exactly(2))
            ->method('getEntityMetadataForClass')
            ->willReturnMap(
                [
                    [self::TEST_CLASS_NAME, true, $rootEntityMetadata],
                    ['Test\Association1Target', true, $association1Metadata],
                ]
            );
        $this->resourcesProvider->expects($this->exactly(2))
            ->method('isResourceAccessible')
            ->willReturnMap(
                [
                    ['Test\Association1Target', $this->context->getVersion(), $this->context->getRequestType(), false],
                    ['Test\Association1Target1', $this->context->getVersion(), $this->context->getRequestType(), false],
                ]
            );

        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'association1' => [
                        'exclude' => true
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testProcessForArrayAssociationAndTargetUsesTableInheritanceAndNoApiResourceForAnyConcreteTarget()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'association1' => [
                    'data_type' => 'array'
                ]
            ]
        ];

        $rootEntityMetadata = $this->getClassMetadataMock(self::TEST_CLASS_NAME);
        $rootEntityMetadata->expects($this->once())
            ->method('hasAssociation')
            ->with('association1')
            ->willReturn(true);
        $rootEntityMetadata->expects($this->once())
            ->method('getAssociationMapping')
            ->with('association1')
            ->willReturn(['targetEntity' => 'Test\Association1Target']);

        $association1Metadata                  = $this->getClassMetadataMock('Test\Association1Target');
        $association1Metadata->inheritanceType = ClassMetadata::INHERITANCE_TYPE_SINGLE_TABLE;
        $association1Metadata->subClasses      = ['Test\Association1Target1'];

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);
        $this->doctrineHelper->expects($this->exactly(2))
            ->method('getEntityMetadataForClass')
            ->willReturnMap(
                [
                    [self::TEST_CLASS_NAME, true, $rootEntityMetadata],
                    ['Test\Association1Target', true, $association1Metadata],
                ]
            );
        $this->resourcesProvider->expects($this->exactly(2))
            ->method('isResourceKnown')
            ->willReturnMap(
                [
                    ['Test\Association1Target', $this->context->getVersion(), $this->context->getRequestType(), false],
                    ['Test\Association1Target1', $this->context->getVersion(), $this->context->getRequestType(), false],
                ]
            );

        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'association1' => [
                        'data_type' => 'array',
                        'exclude'   => true
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }
}
