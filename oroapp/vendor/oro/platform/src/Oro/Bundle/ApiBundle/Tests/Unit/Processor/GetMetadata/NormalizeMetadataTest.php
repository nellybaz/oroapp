<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\GetMetadata;

use Doctrine\ORM\Mapping\ClassMetadata;

use Oro\Bundle\ApiBundle\Metadata\AssociationMetadata;
use Oro\Bundle\ApiBundle\Metadata\EntityMetadata;
use Oro\Bundle\ApiBundle\Metadata\EntityMetadataFactory;
use Oro\Bundle\ApiBundle\Metadata\FieldMetadata;
use Oro\Bundle\ApiBundle\Processor\GetMetadata\NormalizeMetadata;

class NormalizeMetadataTest extends MetadataProcessorTestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $doctrineHelper;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $metadataProvider;

    /** @var NormalizeMetadata */
    protected $processor;

    protected function setUp()
    {
        parent::setUp();

        $this->doctrineHelper = $this
            ->getMockBuilder('Oro\Bundle\ApiBundle\Util\DoctrineHelper')
            ->disableOriginalConstructor()
            ->getMock();
        $this->metadataProvider = $this
            ->getMockBuilder('Oro\Bundle\ApiBundle\Provider\MetadataProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->processor = new NormalizeMetadata(
            $this->doctrineHelper,
            new EntityMetadataFactory($this->doctrineHelper),
            $this->metadataProvider
        );
    }

    /**
     * @param string      $fieldName
     * @param string|null $dataType
     *
     * @return FieldMetadata
     */
    protected function createFieldMetadata($fieldName, $dataType = null)
    {
        $fieldMetadata = new FieldMetadata();
        $fieldMetadata->setName($fieldName);
        if ($dataType) {
            $fieldMetadata->setDataType($dataType);
        }
        $fieldMetadata->setIsNullable(false);

        return $fieldMetadata;
    }

    /**
     * @param string        $associationName
     * @param string        $targetClass
     * @param string        $associationType
     * @param bool|null     $isCollection
     * @param string|null   $dataType
     * @param string[]|null $acceptableTargetClasses
     * @param bool          $collapsed
     *
     * @return AssociationMetadata
     */
    protected function createAssociationMetadata(
        $associationName,
        $targetClass,
        $associationType = null,
        $isCollection = null,
        $dataType = null,
        $acceptableTargetClasses = null,
        $collapsed = false
    ) {
        $associationMetadata = new AssociationMetadata();
        $associationMetadata->setName($associationName);
        $associationMetadata->setTargetClassName($targetClass);
        if (null !== $associationType) {
            $associationMetadata->setAssociationType($associationType);
        }
        if (null !== $isCollection) {
            $associationMetadata->setIsCollection($isCollection);
        }
        if (null !== $dataType) {
            $associationMetadata->setDataType($dataType);
        }
        if (null !== $acceptableTargetClasses) {
            $associationMetadata->setAcceptableTargetClassNames($acceptableTargetClasses);
        }
        $associationMetadata->setIsNullable(false);
        $associationMetadata->setCollapsed($collapsed);

        return $associationMetadata;
    }

    public function testProcessWithoutMetadata()
    {
        $this->processor->process($this->context);
    }

    public function testProcessNormalizationWithoutLinkedProperties()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'field1'        => null,
                'field2'        => [
                    'exclude' => true
                ],
                'field3'        => [
                    'property_path' => 'realField3'
                ],
                'association1'  => null,
                'association2'  => [
                    'exclude' => true
                ],
                'association3'  => [
                    'property_path' => 'realAssociation3'
                ],
            ]
        ];

        $metadata = new EntityMetadata();
        $metadata->addField($this->createFieldMetadata('field1'));
        $metadata->addField($this->createFieldMetadata('field2'));
        $metadata->addField($this->createFieldMetadata('field3'));
        $metadata->addField($this->createFieldMetadata('field4'));
        $metadata->addAssociation(
            $this->createAssociationMetadata('association1', 'Test\Association1Target')
        );
        $metadata->addAssociation(
            $this->createAssociationMetadata('association2', 'Test\Association2Target')
        );
        $metadata->addAssociation(
            $this->createAssociationMetadata('association3', 'Test\Association3Target')
        );
        $metadata->addAssociation(
            $this->createAssociationMetadata('association4', 'Test\Association4Target')
        );

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);

        $this->context->setConfig($this->createConfigObject($config));
        $this->context->setResult($metadata);
        $this->processor->process($this->context);

        $expectedMetadata = new EntityMetadata();
        $expectedMetadata->addField($this->createFieldMetadata('field1'));
        $expectedMetadata->addField($this->createFieldMetadata('field3'));
        $expectedMetadata->addAssociation(
            $this->createAssociationMetadata('association1', 'Test\Association1Target')
        );
        $expectedMetadata->addAssociation(
            $this->createAssociationMetadata('association3', 'Test\Association3Target')
        );

        $this->assertEquals($expectedMetadata, $this->context->getResult());
    }

    public function testProcessWhenExcludedPropertiesShouldNotBeRemoved()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'field1'        => null,
                'field2'        => [
                    'exclude' => true
                ],
            ]
        ];

        $metadata = new EntityMetadata();
        $metadata->addField($this->createFieldMetadata('field1'));
        $metadata->addField($this->createFieldMetadata('field2'));

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);

        $this->context->setConfig($this->createConfigObject($config));
        $this->context->setResult($metadata);
        $this->context->setWithExcludedProperties(true);
        $this->processor->process($this->context);

        $expectedMetadata = new EntityMetadata();
        $expectedMetadata->addField($this->createFieldMetadata('field1'));
        $expectedMetadata->addField($this->createFieldMetadata('field2'));

        $this->assertEquals($expectedMetadata, $this->context->getResult());
    }

    public function testProcessLinkedPropertiesForFieldWithoutPropertyPath()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'field1'       => null,
            ]
        ];
        $configObject = $this->createConfigObject($config);

        $metadata = new EntityMetadata();
        $metadata->setClassName(self::TEST_CLASS_NAME);
        $metadata->addField($this->createFieldMetadata('field1'));

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);

        $this->context->setConfig($configObject);
        $this->context->setResult($metadata);
        $this->processor->process($this->context);

        $expectedMetadata = new EntityMetadata();
        $expectedMetadata->setClassName(self::TEST_CLASS_NAME);
        $expectedMetadata->addField($this->createFieldMetadata('field1'));

        $this->assertEquals($expectedMetadata, $this->context->getResult());
    }

    public function testProcessLinkedPropertiesForRenamedField()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'field2'       => [
                    'property_path' => 'realField2'
                ],
            ]
        ];
        $configObject = $this->createConfigObject($config);

        $metadata = new EntityMetadata();
        $metadata->setClassName(self::TEST_CLASS_NAME);
        $metadata->addField($this->createFieldMetadata('field2'));

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);

        $this->context->setConfig($configObject);
        $this->context->setResult($metadata);
        $this->processor->process($this->context);

        $expectedMetadata = new EntityMetadata();
        $expectedMetadata->setClassName(self::TEST_CLASS_NAME);
        $expectedMetadata->addField($this->createFieldMetadata('field2'));

        $this->assertEquals($expectedMetadata, $this->context->getResult());
    }

    public function testProcessLinkedPropertiesForAssociationWithPropertyPath()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'association3' => [
                    'property_path' => 'association31.association311'
                ],
            ]
        ];
        $configObject = $this->createConfigObject($config);

        $metadata = new EntityMetadata();
        $metadata->setClassName(self::TEST_CLASS_NAME);
        $metadata->addAssociation(
            $this->createAssociationMetadata('association3', 'Test\Association3Target')
        );

        $this->context->setConfig($configObject);
        $this->context->setResult($metadata);
        $this->processor->process($this->context);

        $expectedMetadata = new EntityMetadata();
        $expectedMetadata->setClassName(self::TEST_CLASS_NAME);
        $expectedMetadata->addAssociation(
            $this->createAssociationMetadata('association3', 'Test\Association3Target')
        );

        $this->assertEquals($expectedMetadata, $this->context->getResult());
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testProcessLinkedPropertiesForAssociationWithPropertyPathAndHasConfigForTargetField()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'association4' => [
                    'property_path' => 'association41.association411',
                    'fields'        => [
                        'association411' => [
                            'fields' => [
                                'id' => null
                            ]
                        ]
                    ]
                ],
            ]
        ];
        $configObject = $this->createConfigObject($config);

        $metadata = new EntityMetadata();
        $metadata->setClassName(self::TEST_CLASS_NAME);
        $metadata->addAssociation(
            $this->createAssociationMetadata('association411', 'Test\Association411Target')
        );

        $association41ClassMetadata = $this->getClassMetadataMock('Test\Association41Target');
        $association41ClassMetadata->expects($this->once())
            ->method('hasAssociation')
            ->with('association411')
            ->willReturn(true);
        $association41ClassMetadata->expects($this->once())
            ->method('getAssociationTargetClass')
            ->with('association411')
            ->willReturn('Test\Association411Target');
        $association41ClassMetadata->expects($this->once())
            ->method('isCollectionValuedAssociation')
            ->with('association411')
            ->willReturn(false);
        $association41ClassMetadata->expects($this->once())
            ->method('getAssociationMapping')
            ->with('association411')
            ->willReturn(['type' => ClassMetadata::MANY_TO_ONE]);

        $association411ClassMetadata = $this->getClassMetadataMock('Test\Association411Target');
        $association411ClassMetadata->expects($this->once())
            ->method('getIdentifierFieldNames')
            ->willReturn(['id']);
        $association411ClassMetadata->expects($this->once())
            ->method('getTypeOfField')
            ->with('id')
            ->willReturn('integer');

        $association411TargetMetadata = new EntityMetadata();
        $association411TargetMetadata->setClassName('Test\Association411Target');

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);
        $this->doctrineHelper->expects($this->once())
            ->method('findEntityMetadataByPath')
            ->with(self::TEST_CLASS_NAME, ['association41'])
            ->willReturn($association41ClassMetadata);
        $this->doctrineHelper->expects($this->once())
            ->method('getEntityMetadataForClass')
            ->with('Test\Association411Target')
            ->willReturn($association411ClassMetadata);

        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                'Test\Association411Target',
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $configObject->getField('association4')->getTargetEntity(),
                $this->context->getExtras(),
                false
            )
            ->willReturn($association411TargetMetadata);

        $this->context->setConfig($configObject);
        $this->context->setResult($metadata);
        $this->processor->process($this->context);

        $expectedMetadata = new EntityMetadata();
        $expectedMetadata->setClassName(self::TEST_CLASS_NAME);
        $expectedAssociation4 = $this->createAssociationMetadata(
            'association4',
            'Test\Association411Target',
            'manyToOne',
            false,
            'integer',
            ['Test\Association411Target']
        );
        $expectedAssociation4->setPropertyPath('association411');
        $expectedAssociation4->setIsNullable(true);
        $expectedAssociation4->setTargetMetadata($association411TargetMetadata);
        $expectedMetadata->addAssociation($expectedAssociation4);
        $expectedMetadata->addAssociation(
            $this->createAssociationMetadata('association411', 'Test\Association411Target')
        );

        $this->assertEquals($expectedMetadata, $this->context->getResult());
    }

    public function testProcessLinkedPropertiesForAssociationWithPropertyPathAndWithoutConfigForTargetField()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'field5'       => [
                    'property_path' => 'association51.field511'
                ],
            ]
        ];
        $configObject = $this->createConfigObject($config);

        $metadata = new EntityMetadata();
        $metadata->setClassName(self::TEST_CLASS_NAME);

        $association51ClassMetadata = $this->getClassMetadataMock('Test\Association51Target');
        $association51ClassMetadata->expects($this->once())
            ->method('hasAssociation')
            ->with('field511')
            ->willReturn(false);
        $association51ClassMetadata->expects($this->once())
            ->method('hasField')
            ->with('field511')
            ->willReturn(true);
        $association51ClassMetadata->expects($this->once())
            ->method('getTypeOfField')
            ->with('field511')
            ->willReturn('string');

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);
        $this->doctrineHelper->expects($this->once())
            ->method('findEntityMetadataByPath')
            ->with(self::TEST_CLASS_NAME, ['association51'])
            ->willReturn($association51ClassMetadata);

        $this->context->setConfig($configObject);
        $this->context->setResult($metadata);
        $this->processor->process($this->context);

        $expectedMetadata = new EntityMetadata();
        $expectedMetadata->setClassName(self::TEST_CLASS_NAME);
        $expectedField5 = $expectedMetadata->addField($this->createFieldMetadata('field5', 'string'));
        $expectedField5->setPropertyPath('field511');

        $this->assertEquals($expectedMetadata, $this->context->getResult());
    }

    public function testProcessLinkedPropertiesWithPropertyPathButWhenIntermediateFieldIsNotAssociation()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'field6'       => [
                    'property_path' => 'field61.field611'
                ],
            ]
        ];
        $configObject = $this->createConfigObject($config);

        $metadata = new EntityMetadata();
        $metadata->setClassName(self::TEST_CLASS_NAME);

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);
        $this->doctrineHelper->expects($this->once())
            ->method('findEntityMetadataByPath')
            ->with(self::TEST_CLASS_NAME, ['field61'])
            ->willReturn(null);

        $this->context->setConfig($configObject);
        $this->context->setResult($metadata);
        $this->processor->process($this->context);

        $expectedMetadata = new EntityMetadata();
        $expectedMetadata->setClassName(self::TEST_CLASS_NAME);

        $this->assertEquals($expectedMetadata, $this->context->getResult());
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testProcessRenamedLinkedProperty()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'linkedAssociation1' => [
                    'property_path' => 'realAssociation1.realAssociation11'
                ],
                'association1' => [
                    'exclude'       => true,
                    'property_path' => 'realAssociation1',
                    'fields'        => [
                        'association11' => [
                            'property_path' => 'realAssociation11',
                            'fields'        => [
                                'id' => null
                            ]
                        ]
                    ]
                ]
            ]
        ];
        $configObject = $this->createConfigObject($config);

        $metadata = new EntityMetadata();
        $metadata->setClassName(self::TEST_CLASS_NAME);
        $metadata->addAssociation(
            $this->createAssociationMetadata(
                'association1',
                'Test\Association1Target',
                'manyToOne',
                false,
                'integer',
                ['Test\Association1Target']
            )
        );

        $association1ClassMetadata = $this->getClassMetadataMock('Test\Association1Target');
        $association1ClassMetadata->expects($this->once())
            ->method('hasAssociation')
            ->with('realAssociation11')
            ->willReturn(true);
        $association1ClassMetadata->expects($this->once())
            ->method('getAssociationTargetClass')
            ->with('realAssociation11')
            ->willReturn('Test\Association11Target');
        $association1ClassMetadata->expects($this->once())
            ->method('isCollectionValuedAssociation')
            ->with('realAssociation11')
            ->willReturn(false);
        $association1ClassMetadata->expects($this->once())
            ->method('getAssociationMapping')
            ->with('realAssociation11')
            ->willReturn(['type' => ClassMetadata::MANY_TO_ONE]);

        $association11ClassMetadata = $this->getClassMetadataMock('Test\Association11Target');
        $association11ClassMetadata->expects($this->once())
            ->method('getIdentifierFieldNames')
            ->willReturn(['id']);
        $association11ClassMetadata->expects($this->once())
            ->method('getTypeOfField')
            ->with('id')
            ->willReturn('integer');

        $association11TargetMetadata = new EntityMetadata();
        $association11TargetMetadata->setClassName('Test\Association11Target');

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);
        $this->doctrineHelper->expects($this->once())
            ->method('findEntityMetadataByPath')
            ->with(self::TEST_CLASS_NAME, ['realAssociation1'])
            ->willReturn($association1ClassMetadata);
        $this->doctrineHelper->expects($this->once())
            ->method('getEntityMetadataForClass')
            ->with('Test\Association11Target')
            ->willReturn($association11ClassMetadata);

        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                'Test\Association11Target',
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $configObject
                    ->getField('association1')
                    ->getTargetEntity()
                    ->getField('association11')
                    ->getTargetEntity(),
                $this->context->getExtras(),
                false
            )
         ->willReturn($association11TargetMetadata);

        $this->context->setConfig($configObject);
        $this->context->setResult($metadata);
        $this->processor->process($this->context);

        $expectedMetadata = new EntityMetadata();
        $expectedMetadata->setClassName(self::TEST_CLASS_NAME);
        $expectedLinkedAssociation1 = $this->createAssociationMetadata(
            'linkedAssociation1',
            'Test\Association11Target',
            'manyToOne',
            false,
            'integer',
            ['Test\Association11Target']
        );
        $expectedLinkedAssociation1->setPropertyPath('realAssociation11');
        $expectedLinkedAssociation1->setIsNullable(true);
        $expectedLinkedAssociation1->setTargetMetadata($association11TargetMetadata);
        $expectedMetadata->addAssociation($expectedLinkedAssociation1);

        $this->assertEquals($expectedMetadata, $this->context->getResult());
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testProcessCollapsedArrayAssociationLinkedProperty()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'linkedAssociation1' => [
                    'property_path' => 'realAssociation1.realAssociation11',
                ],
                'association1' => [
                    'exclude'       => true,
                    'property_path' => 'realAssociation1',
                    'fields'        => [
                        'association11' => [
                            'data_type'        => 'array',
                            'collapse'         => true,
                            'exclusion_policy' => 'all',
                            'property_path'    => 'realAssociation11',
                            'fields'        => [
                                'name' => null
                            ]
                        ]
                    ]
                ]
            ]
        ];
        $configObject = $this->createConfigObject($config);

        $metadata = new EntityMetadata();
        $metadata->setClassName(self::TEST_CLASS_NAME);
        $metadata->addAssociation(
            $this->createAssociationMetadata(
                'association1',
                'Test\Association1Target',
                'manyToOne',
                false,
                'integer',
                ['Test\Association1Target']
            )
        );

        $association1ClassMetadata = $this->getClassMetadataMock('Test\Association1Target');
        $association1ClassMetadata->expects($this->once())
            ->method('hasAssociation')
            ->with('realAssociation11')
            ->willReturn(true);
        $association1ClassMetadata->expects($this->once())
            ->method('getAssociationTargetClass')
            ->with('realAssociation11')
            ->willReturn('Test\Association11Target');
        $association1ClassMetadata->expects($this->once())
            ->method('isCollectionValuedAssociation')
            ->with('realAssociation11')
            ->willReturn(true);
        $association1ClassMetadata->expects($this->once())
            ->method('getAssociationMapping')
            ->with('realAssociation11')
            ->willReturn(['type' => ClassMetadata::MANY_TO_MANY]);

        $association11ClassMetadata = $this->getClassMetadataMock('Test\Association11Target');
        $association11ClassMetadata->expects($this->once())
            ->method('getIdentifierFieldNames')
            ->willReturn(['id']);
        $association11ClassMetadata->expects($this->once())
            ->method('getTypeOfField')
            ->with('id')
            ->willReturn('integer');

        $association11TargetMetadata = new EntityMetadata();
        $association11TargetMetadata->setClassName('Test\Association11Target');

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_CLASS_NAME)
            ->willReturn(true);
        $this->doctrineHelper->expects($this->once())
            ->method('findEntityMetadataByPath')
            ->with(self::TEST_CLASS_NAME, ['realAssociation1'])
            ->willReturn($association1ClassMetadata);
        $this->doctrineHelper->expects($this->once())
            ->method('getEntityMetadataForClass')
            ->with('Test\Association11Target')
            ->willReturn($association11ClassMetadata);

        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                'Test\Association11Target',
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $configObject
                    ->getField('association1')
                    ->getTargetEntity()
                    ->getField('association11')
                    ->getTargetEntity(),
                $this->context->getExtras(),
                false
            )
            ->willReturn($association11TargetMetadata);

        $this->context->setConfig($configObject);
        $this->context->setResult($metadata);
        $this->processor->process($this->context);

        $expectedMetadata = new EntityMetadata();
        $expectedMetadata->setClassName(self::TEST_CLASS_NAME);
        $expectedLinkedAssociation1 = $this->createAssociationMetadata(
            'linkedAssociation1',
            'Test\Association11Target',
            'manyToMany',
            true,
            'array',
            ['Test\Association11Target'],
            true
        );
        $expectedLinkedAssociation1->setPropertyPath('realAssociation11');
        $expectedLinkedAssociation1->setIsNullable(true);
        $expectedLinkedAssociation1->setTargetMetadata($association11TargetMetadata);
        $expectedMetadata->addAssociation($expectedLinkedAssociation1);

        $this->assertEquals($expectedMetadata, $this->context->getResult());
    }
}
