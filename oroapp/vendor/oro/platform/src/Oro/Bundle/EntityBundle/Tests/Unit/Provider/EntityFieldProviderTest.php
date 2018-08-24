<?php

namespace Oro\Bundle\EntityBundle\Tests\Unit\Provider;

use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Component\Translation\Translator;
use Doctrine\ORM\Mapping\ClassMetadataInfo;

use Oro\Bundle\EntityBundle\ORM\EntityClassResolver;
use Oro\Bundle\EntityBundle\Provider\EntityFieldProvider;
use Oro\Bundle\EntityBundle\Provider\EntityProvider;
use Oro\Bundle\EntityBundle\Provider\ExclusionProviderInterface;
use Oro\Bundle\EntityBundle\Provider\VirtualFieldProviderInterface;
use Oro\Bundle\EntityBundle\Provider\VirtualRelationProviderInterface;
use Oro\Bundle\EntityConfigBundle\Config\Config;
use Oro\Bundle\EntityConfigBundle\Config\Id\FieldConfigId;
use Oro\Bundle\EntityConfigBundle\Tests\Unit\ConfigProviderMock;
use Oro\Bundle\EntityExtendBundle\Extend\FieldTypeHelper;
use Oro\Bundle\FeatureToggleBundle\Checker\FeatureChecker;

/**
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 */
class EntityFieldProviderTest extends \PHPUnit_Framework_TestCase
{
    /** @var ConfigProviderMock */
    protected $entityConfigProvider;

    /** @var ConfigProviderMock */
    protected $extendConfigProvider;

    /** @var \PHPUnit_Framework_MockObject_MockObject|EntityClassResolver */
    protected $entityClassResolver;

    /** @var \PHPUnit_Framework_MockObject_MockObject|VirtualFieldProviderInterface */
    protected $virtualFieldProvider;

    /** @var \PHPUnit_Framework_MockObject_MockObject|VirtualRelationProviderInterface */
    protected $virtualRelationProvider;

    /** @var \PHPUnit_Framework_MockObject_MockObject|ManagerRegistry */
    protected $doctrine;

    /** @var \PHPUnit_Framework_MockObject_MockObject|Translator */
    protected $translator;

    /** @var EntityProvider */
    protected $entityProvider;

    /** @var EntityFieldProvider */
    protected $provider;

    /** @var ExclusionProviderInterface */
    protected $exclusionProvider;

    /** @var FeatureChecker */
    protected $featureChecker;

    protected function setUp()
    {
        $configManager = $this->getMockBuilder('Oro\Bundle\EntityConfigBundle\Config\ConfigManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->entityConfigProvider = new ConfigProviderMock($configManager, 'entity');
        $this->extendConfigProvider = new ConfigProviderMock($configManager, 'extend');
        $this->entityClassResolver = $this->getMockBuilder('Oro\Bundle\EntityBundle\ORM\EntityClassResolver')
            ->disableOriginalConstructor()
            ->getMock();
        $this->entityClassResolver->expects($this->any())
            ->method('getEntityClass')
            ->will(
                $this->returnCallback(
                    function ($entityName) {
                        return str_replace(':', '\\Entity\\', $entityName);
                    }
                )
            );

        $this->translator = $this->getMockBuilder('Symfony\Component\Translation\Translator')
            ->disableOriginalConstructor()
            ->getMock();

        $this->exclusionProvider = $this->createMock('Oro\Bundle\EntityBundle\Provider\ExclusionProviderInterface');

        $this->featureChecker = $this->getMockBuilder(FeatureChecker::class)
            ->setMethods(['isResourceEnabled'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->entityProvider = new EntityProvider(
            $this->entityConfigProvider,
            $this->extendConfigProvider,
            $this->entityClassResolver,
            $this->translator,
            $this->featureChecker
        );
        $this->entityProvider->setExclusionProvider($this->exclusionProvider);

        $this->doctrine = $this->getMockBuilder('Symfony\Bridge\Doctrine\ManagerRegistry')
            ->disableOriginalConstructor()
            ->getMock();

        $this->virtualFieldProvider = $this
            ->createMock('Oro\Bundle\EntityBundle\Provider\VirtualFieldProviderInterface');

        $this->virtualRelationProvider =
            $this->createMock('Oro\Bundle\EntityBundle\Provider\VirtualRelationProviderInterface');

        $this->provider = new EntityFieldProvider(
            $this->entityConfigProvider,
            $this->extendConfigProvider,
            $this->entityClassResolver,
            new FieldTypeHelper([]),
            $this->doctrine,
            $this->translator,
            []
        );
        $this->provider->setEntityProvider($this->entityProvider);
        $this->provider->setVirtualFieldProvider($this->virtualFieldProvider);
        $this->provider->setVirtualRelationProvider($this->virtualRelationProvider);
        $this->provider->setExclusionProvider($this->exclusionProvider);
    }

    public function testGetFieldsNoEntityConfig()
    {
        $entityName = 'Acme:Test';
        $entityClassName = 'Acme\Entity\Test';

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->doctrine->expects($this->any())
            ->method('getManagerForClass')
            ->with($entityClassName)
            ->will($this->returnValue($em));

        $result = $this->provider->getFields($entityName);
        $this->assertEquals([], $result);
    }

    public function testGetFieldsWithDefaultParameters()
    {
        $config = [
            'Acme\Entity\Test' => [
                'config' => [
                    'label' => 'Test Label',
                    'plural_label' => 'Test Plural Label',
                    'icon' => 'fa-test',
                ],
                'fields' => [
                    'field1' => [
                        'type' => 'integer',
                        'identifier' => true,
                        'config' => [
                            'label' => 'C',
                        ]
                    ],
                    'field2' => [
                        'type' => 'string',
                        'config' => [
                            'label' => 'B',
                        ]
                    ],
                    'field3' => [
                        'type' => 'string',
                        'config' => [
                            'label' => 'A',
                        ]
                    ],
                    'field4' => [
                        'type' => 'string',
                        'config' => []
                    ],
                ]
            ]
        ];
        $this->prepare($config);

        $result = $this->provider->getFields('Acme:Test');
        $expected = [
            [
                'name' => 'field3',
                'type' => 'string',
                'label' => 'A Translated',
            ],
            [
                'name' => 'field4',
                'type' => 'string',
                'label' => 'acme.entity.test.field4.label Translated',
            ],
            [
                'name' => 'field2',
                'type' => 'string',
                'label' => 'B Translated',
            ],
            [
                'name' => 'field1',
                'type' => 'integer',
                'label' => 'C Translated',
                'identifier' => true
            ],
        ];

        $this->assertEquals($expected, $result);
    }

    /**
     * @param array $expected
     *
     * @dataProvider fieldsWithRelationsExpectedDataProvider
     */
    public function testGetFieldsWithRelations(array $expected)
    {
        $this->prepareWithRelations();
        $result = $this->provider->getFields('Acme:Test', true);

        $this->assertEquals($expected, $result);
    }

    /**
     * exclusions are not used in workflow
     *
     * @return array
     */
    public function fieldsWithRelationsExpectedDataProvider()
    {
        return [
            [
                [
                    [
                        'name' => 'field3',
                        'type' => 'string',
                        'label' => 'A Translated',
                    ],
                    [
                        'name' => 'field4',
                        'type' => 'string',
                        'label' => 'acme.entity.test.field4.label Translated',
                    ],
                    [
                        'name' => 'field2',
                        'type' => 'string',
                        'label' => 'B Translated',
                    ],
                    [
                        'name' => 'field1',
                        'type' => 'integer',
                        'label' => 'C Translated',
                        'identifier' => true
                    ],
                    [
                        'name' => 'rel1',
                        'type' => 'ref-many',
                        'label' => 'Rel1 Translated',
                        'relation_type' => 'ref-many',
                        'related_entity_name' => 'Acme\Entity\Test1'
                    ],
                ]
            ]
        ];
    }

    /**
     * @param array $expected
     *
     * @dataProvider getFieldsWithRelationsAndDeepLevelDataProvider
     */
    public function testGetFieldsWithRelationsAndDeepLevel(array $expected)
    {
        $this->prepareWithRelations();
        $result = $this->provider->getFields('Acme:Test', true, false, false, false, 1);

        $this->assertEquals($expected, $result);
    }

    /**
     * @return array
     */
    public function getFieldsWithRelationsAndDeepLevelDataProvider()
    {
        return [
            [
                [
                    [
                        'name' => 'field3',
                        'type' => 'string',
                        'label' => 'A Translated',
                    ],
                    [
                        'name' => 'field4',
                        'type' => 'string',
                        'label' => 'acme.entity.test.field4.label Translated',
                    ],
                    [
                        'name' => 'field2',
                        'type' => 'string',
                        'label' => 'B Translated',
                    ],
                    [
                        'name' => 'field1',
                        'type' => 'integer',
                        'label' => 'C Translated',
                        'identifier' => true
                    ],
                    [
                        'name' => 'rel1',
                        'type' => 'ref-many',
                        'label' => 'Rel1 Translated',
                        'relation_type' => 'ref-many',
                        'related_entity_name' => 'Acme\Entity\Test1',
                    ],
                ]
            ]
        ];
    }

    /**
     * @param array $expected
     *
     * @dataProvider getFieldsWithRelationsAndDeepLevelAndEntityDetailsDataProvider
     */
    public function testGetFieldsWithRelationsAndDeepLevelAndEntityDetails(array $expected)
    {
        $this->prepareWithRelations();
        $result = $this->provider->getFields('Acme:Test', true, false, true, false, 1);

        $this->assertEquals($expected, $result);
    }

    /**
     * @return array
     */
    public function getFieldsWithRelationsAndDeepLevelAndEntityDetailsDataProvider()
    {
        return [
            [
                [
                    [
                        'name' => 'field3',
                        'type' => 'string',
                        'label' => 'A Translated',
                    ],
                    [
                        'name' => 'field4',
                        'type' => 'string',
                        'label' => 'acme.entity.test.field4.label Translated',
                    ],
                    [
                        'name' => 'field2',
                        'type' => 'string',
                        'label' => 'B Translated',
                    ],
                    [
                        'name' => 'field1',
                        'type' => 'integer',
                        'label' => 'C Translated',
                        'identifier' => true
                    ],
                    [
                        'name' => 'rel1',
                        'type' => 'ref-many',
                        'label' => 'Rel1 Translated',
                        'relation_type' => 'ref-many',
                        'related_entity_name' => 'Acme\Entity\Test1',
                        'related_entity_label' => 'Test1 Label Translated',
                        'related_entity_plural_label' => 'Test1 Plural Label Translated',
                        'related_entity_icon' => 'fa-test1',
                    ],
                ]
            ]
        ];
    }

    /**
     * @param array $expected
     *
     * @dataProvider getFieldsWithRelationsAndDeepLevelAndLastLevelRelations
     */
    public function testGetFieldsWithRelationsAndDeepLevelAndLastLevelRelations(array $expected)
    {
        $this->prepareWithRelations();
        $result = $this->provider->getFields('Acme:Test', true, false, false, false, 1, true);

        $this->assertEquals($expected, $result);
    }

    /**
     * @return array
     */
    public function getFieldsWithRelationsAndDeepLevelAndLastLevelRelations()
    {
        return [
            [
                [
                    [
                        'name' => 'field3',
                        'type' => 'string',
                        'label' => 'A Translated',
                    ],
                    [
                        'name' => 'field4',
                        'type' => 'string',
                        'label' => 'acme.entity.test.field4.label Translated',
                    ],
                    [
                        'name' => 'field2',
                        'type' => 'string',
                        'label' => 'B Translated',
                    ],
                    [
                        'name' => 'field1',
                        'type' => 'integer',
                        'label' => 'C Translated',
                        'identifier' => true
                    ],
                    [
                        'name' => 'rel1',
                        'type' => 'ref-many',
                        'label' => 'Rel1 Translated',
                        'relation_type' => 'ref-many',
                        'related_entity_name' => 'Acme\Entity\Test1',
                    ],
                ]
            ]
        ];
    }

    /**
     * @param array $expected
     *
     * @dataProvider getFieldsWithRelationsAndDeepLevelAndLastLevelRelationsAndEntityDetailsDataProvider
     */
    public function testGetFieldsWithRelationsAndDeepLevelAndLastLevelRelationsAndEntityDetails(array $expected)
    {
        $this->prepareWithRelations();
        $result = $this->provider->getFields('Acme:Test', true, false, true, false, 1, true);

        $this->assertEquals($expected, $result);
    }

    /**
     * @return array
     */
    public function getFieldsWithRelationsAndDeepLevelAndLastLevelRelationsAndEntityDetailsDataProvider()
    {
        return [
            [
                [
                    [
                        'name' => 'field3',
                        'type' => 'string',
                        'label' => 'A Translated',
                    ],
                    [
                        'name' => 'field4',
                        'type' => 'string',
                        'label' => 'acme.entity.test.field4.label Translated',
                    ],
                    [
                        'name' => 'field2',
                        'type' => 'string',
                        'label' => 'B Translated',
                    ],
                    [
                        'name' => 'field1',
                        'type' => 'integer',
                        'label' => 'C Translated',
                        'identifier' => true
                    ],
                    [
                        'name' => 'rel1',
                        'type' => 'ref-many',
                        'label' => 'Rel1 Translated',
                        'relation_type' => 'ref-many',
                        'related_entity_name' => 'Acme\Entity\Test1',
                        'related_entity_label' => 'Test1 Label Translated',
                        'related_entity_plural_label' => 'Test1 Plural Label Translated',
                        'related_entity_icon' => 'fa-test1',
                    ],
                ]
            ]
        ];
    }

    /**
     * @param array $expected
     *
     * @dataProvider getFieldsWithRelationsAndDeepLevelAndWithUnidirectional
     */
    public function testGetFieldsWithRelationsAndDeepLevelAndWithUnidirectional(array $expected)
    {
        $this->prepareWithRelations();

        $result = $this->provider->getFields('Acme:Test1', true, false, false, true, false);

        $this->assertEquals($expected, $result);
    }

    /**
     * @return array
     */
    public function getFieldsWithRelationsAndDeepLevelAndWithUnidirectional()
    {
        return [
            [
                [
                    [
                        'name' => 'Test1field2',
                        'type' => 'string',
                        'label' => 'A Translated'
                    ],
                    [
                        'name' => 'id',
                        'type' => 'integer',
                        'label' => 'B Translated',
                        'identifier' => true
                    ],
                    [
                        'name' => 'rel1',
                        'type' => 'ref-one',
                        'label' => 'Rel11 Translated',
                        'relation_type' => 'ref-one',
                        'related_entity_name' => 'Acme\Entity\Test11',
                    ],
                    [
                        'name' => 'Acme\Entity\Test22::uni_rel1',
                        'type' => 'ref-one',
                        'label' => 'UniRel1 Translated (Test22 Label Translated)',
                        'relation_type' => 'ref-one',
                        'related_entity_name' => 'Acme\Entity\Test22',
                    ]
                ]
            ]
        ];
    }

    /**
     * @param array $expected
     *
     * @dataProvider getFieldsWithVirtualRelationsAndEnumsDataProvider
     */
    public function testGetFieldsWithVirtualRelationsAndEnums(array $expected)
    {
        $className = 'Acme\Entity\Test';

        $config = [
            $className => [
                'config' => [
                    'label' => 'Test Label',
                    'plural_label' => 'Test Plural Label',
                    'icon' => 'fa-test',
                ],
                'fields' => [
                    'field1' => [
                        'type' => 'integer',
                        'identifier' => true,
                        'config' => [
                            'label' => 'Field 1',
                        ]
                    ],
                ],
                'relations' => [
                    'rel1' => [
                        'target_class' => 'Acme\EnumValue1',
                        'type' => 'ref-one',
                        'config' => [
                            'label' => 'Enum Field',
                        ]
                    ],
                    'rel2' => [
                        'target_class' => 'Acme\EnumValue2',
                        'type' => 'ref-many',
                        'config' => [
                            'label' => 'Multi Enum Field',
                        ]
                    ],
                ]
            ]
        ];
        $this->prepare($config);

        $this->virtualFieldProvider->expects($this->once())
            ->method('getVirtualFields')
            ->with($className)
            ->will($this->returnValue(['rel1', 'rel2']));

        $this->virtualRelationProvider->expects($this->once())
            ->method('getVirtualRelations')
            ->with($className)
            ->will(
                $this->returnValue(
                    [
                        'virtual_relation' => [
                            'relation_type' => 'oneToMany',
                            'related_entity_name' => 'OtherEntity',
                            'query' => [
                                'select' => ['select expression'],
                                'join' => ['join expression']
                            ]
                        ]
                    ]
                )
            );
        $this->virtualFieldProvider->expects($this->exactly(2))
            ->method('getVirtualFieldQuery')
            ->will(
                $this->returnValueMap(
                    [
                        [
                            $className,
                            'rel1',
                            [
                                'select' => [
                                    'return_type' => 'enum',
                                    'filter_by_id' => true
                                ]
                            ]
                        ],
                        [
                            $className,
                            'rel2',
                            [
                                'select' => [
                                    'return_type' => 'multiEnum',
                                    'filter_by_id' => true
                                ]
                            ]
                        ],
                    ]
                )
            );

        $result = $this->provider->getFields('Acme:Test', true, true);

        $this->assertEquals($expected, $result);
    }

    /**
     * @return array
     */
    public function getFieldsWithVirtualRelationsAndEnumsDataProvider()
    {
        return [
            [
                [
                    [
                        'name' => 'rel1',
                        'type' => 'enum',
                        'label' => 'Enum Field Translated',
                        'related_entity_name' => 'Acme\EnumValue1'
                    ],
                    [
                        'name' => 'field1',
                        'type' => 'integer',
                        'label' => 'Field 1 Translated',
                        'identifier' => true
                    ],
                    [
                        'name' => 'rel2',
                        'type' => 'multiEnum',
                        'label' => 'Multi Enum Field Translated',
                        'related_entity_name' => 'Acme\EnumValue2'
                    ],
                    [
                        'name' => 'virtual_relation',
                        'type' => 'oneToMany',
                        'label' => 'acme.entity.test.virtual_relation.label Translated',
                        'relation_type' => 'oneToMany',
                        'related_entity_name' => 'OtherEntity'
                    ]
                ]
            ]
        ];
    }

    /**
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     *
     * @param array $config
     */
    protected function prepare($config)
    {
        $metadata = [];
        $fieldConfigs = [];
        foreach ($config as $entityClassName => $entityData) {
            $entityMetadata = $this->getMockBuilder('Doctrine\ORM\Mapping\ClassMetadata')
                ->disableOriginalConstructor()
                ->getMock();
            $entityMetadata->expects($this->any())
                ->method('getName')
                ->will($this->returnValue($entityClassName));
            $metadata[$entityClassName] = $entityMetadata;

            $fieldNames = [];
            $fieldTypes = [];
            $fieldIdentifiers = [];
            $configs = [];
            foreach ($entityData['fields'] as $fieldName => $fieldData) {
                $fieldNames[] = $fieldName;
                $fieldTypes[] = [$fieldName, $fieldData['type']];
                $fieldIdentifiers[] = [$fieldName, isset($fieldData['identifier']) ? $fieldData['identifier'] : false];
                $configId = new FieldConfigId('extend', $entityClassName, $fieldName, $fieldData['type']);
                $configs[] = new Config($configId);
            }
            $fieldConfigs[$entityClassName] = $configs;
            $entityMetadata->expects($this->any())
                ->method('getFieldNames')
                ->will($this->returnValue($fieldNames));
            $entityMetadata->expects($this->any())
                ->method('hasField')
                ->willReturnCallback(
                    function ($name) use ($fieldNames) {
                        return in_array($name, $fieldNames, true);
                    }
                );
            $entityMetadata->expects($this->any())
                ->method('isIdentifier')
                ->will($this->returnValueMap($fieldIdentifiers));

            $relNames = [];
            $mappings = [];
            if (isset($entityData['relations'])) {
                $relTargetClasses = [];
                foreach ($entityData['relations'] as $relName => $relData) {
                    $type = $relData['type'];
                    $relTargetClass = $relData['target_class'];
                    if ($type === 'ref-one') {
                        $mappings[$relName] = $relData;
                    }
                    $fieldTypes[] = [$relName, $type];
                    $relNames[] = $relName;
                    $relTargetClasses[] = [$relName, $relTargetClass];
                }
                $entityMetadata->expects($this->any())
                    ->method('getAssociationTargetClass')
                    ->will($this->returnValueMap($relTargetClasses));
                $entityMetadata->expects($this->any())
                    ->method('getAssociationMappedByTargetField')
                    ->will($this->returnValue('id'));
            }
            $entityMetadata->expects($this->any())
                ->method('getAssociationNames')
                ->will($this->returnValue($relNames));
            $entityMetadata->expects($this->any())
                ->method('hasAssociation')
                ->willReturnCallback(
                    function ($name) use ($relNames) {
                        return in_array($name, $relNames, true);
                    }
                );
            if (isset($entityData['unidirectional_relations'])) {
                foreach ($entityData['unidirectional_relations'] as $relName => $relData) {
                    $fieldTypes[] = [$relName, $relData['type']];
                    $relData['type'] = $relData['type'] !== 'ref-one' ?:ClassMetadataInfo::MANY_TO_ONE;
                    $relData['fieldName'] = $relName;
                    $relData['isOwningSide'] = true;
                    $relData['inversedBy'] = null;
                    $relData['sourceEntity'] = $entityClassName;
                    unset($relData['config']);
                    $mappings[$relName] = $relData;
                }
                $entityMetadata->expects($this->any())
                    ->method('getAssociationMappings')
                    ->will($this->returnValue($mappings));
            }
            $entityMetadata->expects($this->any())
                ->method('isSingleValuedAssociation')
                ->will(
                    $this->returnCallback(
                        function ($field) use ($mappings) {
                            return !empty($mappings[$field]);
                        }
                    )
                );
            $entityMetadata->expects($this->any())
                ->method('getTypeOfField')
                ->will($this->returnValueMap($fieldTypes));
        }

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $metadataFactory = $this->createMock('Doctrine\ORM\Mapping\ClassMetadataFactory');
        $em->expects($this->any())
            ->method('getMetadataFactory')
            ->will($this->returnValue($metadataFactory));
        $metadataFactory->expects($this->any())
            ->method('getMetadataFor')
            ->will(
                $this->returnCallback(
                    function ($entityClassName) use (&$metadata) {
                        return $metadata[$entityClassName];
                    }
                )
            );

        $this->doctrine->expects($this->any())
            ->method('getManagerForClass')
            ->with($this->isType('string'))
            ->will($this->returnValue($em));

        foreach ($config as $entityClassName => $entityData) {
            if (isset($entityData['config'])) {
                $this->entityConfigProvider->addEntityConfig($entityClassName, $entityData['config']);
                $this->extendConfigProvider->addEntityConfig($entityClassName);
            }
            foreach (['fields', 'relations', 'unidirectional_relations'] as $fieldType) {
                if (isset($entityData[$fieldType])) {
                    foreach ($entityData[$fieldType] as $fieldName => $fieldData) {
                        if (isset($fieldData['config'])) {
                            $this->entityConfigProvider->addFieldConfig(
                                $entityClassName,
                                $fieldName,
                                $fieldData['type'],
                                $fieldData['config']
                            );
                            $this->extendConfigProvider->addFieldConfig(
                                $entityClassName,
                                $fieldName,
                                $fieldData['type']
                            );
                        }
                    }
                }
            }
        }
        $this->translator->expects($this->any())
            ->method('trans')
            ->will(
                $this->returnCallback(
                    function ($messageId) {
                        return $messageId . ' Translated';
                    }
                )
            );
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function prepareWithRelations()
    {
        $config = [
            'Acme\Entity\Test' => [
                'config' => [
                    'label' => 'Test Label',
                    'plural_label' => 'Test Plural Label',
                    'icon' => 'fa-test',
                ],
                'fields' => [
                    'field1' => [
                        'type' => 'integer',
                        'identifier' => true,
                        'config' => [
                            'label' => 'C',
                        ]
                    ],
                    'field2' => [
                        'type' => 'string',
                        'config' => [
                            'label' => 'B',
                        ]
                    ],
                    'field3' => [
                        'type' => 'string',
                        'config' => [
                            'label' => 'A',
                        ]
                    ],
                    'field4' => [
                        'type' => 'string',
                        'config' => []
                    ],
                ],
                'relations' => [
                    'rel1' => [
                        'target_class' => 'Acme\Entity\Test1',
                        'type' => 'ref-many',
                        'config' => [
                            'label' => 'Rel1',
                        ]
                    ],
                ]
            ],
            'Acme\Entity\Test1' => [
                'config' => [
                    'label' => 'Test1 Label',
                    'plural_label' => 'Test1 Plural Label',
                    'icon' => 'fa-test1',
                ],
                'fields' => [
                    'id' => [
                        'type' => 'integer',
                        'identifier' => true,
                        'config' => [
                            'label' => 'B',
                        ]
                    ],
                    'Test1field2' => [
                        'type' => 'string',
                        'config' => [
                            'label' => 'A',
                        ]
                    ],
                ],
                'relations' => [
                    'rel1' => [
                        'target_class' => 'Acme\Entity\Test11',
                        'type' => 'ref-one',
                        'config' => [
                            'label' => 'Rel11',
                        ]
                    ],
                ]
            ],
            'Acme\Entity\Test11' => [
                'config' => [
                    'label' => 'Test11 Label',
                    'plural_label' => 'Test11 Plural Label',
                    'icon' => 'fa-test11',
                ],
                'fields' => [
                    'id' => [
                        'type' => 'integer',
                        'identifier' => true,
                        'config' => [
                            'label' => 'B',
                        ]
                    ],
                    'Test11field2' => [
                        'type' => 'string',
                        'config' => [
                            'label' => 'A',
                        ]
                    ],
                ],
                'relations' => [
                    'rel1' => [
                        'target_class' => 'Acme\Entity\Test111',
                        'type' => 'ref-one',
                        'config' => [
                            'label' => 'Rel111',
                        ]
                    ],
                ]
            ],
            'Acme\Entity\Test111' => [
                'config' => [
                    'label' => 'Test111 Label',
                    'plural_label' => 'Test111 Plural Label',
                    'icon' => 'fa-test111',
                ],
                'fields' => [
                    'id' => [
                        'type' => 'integer',
                        'identifier' => true,
                        'config' => [
                            'label' => 'B',
                        ]
                    ],
                    'Test111field2' => [
                        'type' => 'string',
                        'config' => [
                            'label' => 'A',
                        ]
                    ],
                ],
            ],
            'Acme\Entity\Test22' => [
                'config' => [
                    'label' => 'Test22 Label',
                    'plural_label' => 'Test22 Plural Label',
                    'icon' => 'fa-test22',
                ],
                'fields' => [
                    'id' => [
                        'type' => 'integer',
                        'identifier' => true,
                        'config' => [
                            'label' => 'B',
                        ]
                    ],
                ],
                'unidirectional_relations' => [
                    'uni_rel1' => [
                        'targetEntity' => 'Acme\Entity\Test1',
                        'type' => 'ref-one',
                        'config' => [
                            'label' => 'UniRel1',
                        ]
                    ],
                ]
            ]
        ];
        $this->prepare($config);
    }

    /**
     * @param array $expected
     *
     * @dataProvider relationsExpectedDataProvider
     */
    public function testGetRelations(array $expected)
    {
        $this->prepareWithRelations();
        $result = $this->provider->getRelations('Acme:Test', true);

        $this->assertEquals($expected, $result);
    }

    /**
     * exclusions are not used in workflow
     *
     * @return array
     */
    public function relationsExpectedDataProvider()
    {
        return [
            [
                [
                    'rel1' => [
                        'name' => 'rel1',
                        'type' => 'ref-many',
                        'label' => 'Rel1 Translated',
                        'relation_type' => 'ref-many',
                        'related_entity_name' => 'Acme\Entity\Test1',
                        'related_entity_label' => 'Test1 Label Translated',
                        'related_entity_plural_label' => 'Test1 Plural Label Translated',
                        'related_entity_icon' => 'fa-test1'
                    ],
                ]
            ]
        ];
    }

    /**
     * @param bool        $translate
     * @param string      $fieldLabel
     * @param string      $fieldLabelTranslated
     * @param string|null $locale
     * @param int         $transCalls
     *
     * @dataProvider getTranslatedFieldsDataProvider
     */
    public function testGetTranslatedFields($translate, $fieldLabel, $fieldLabelTranslated, $locale, $transCalls)
    {
        $config = [
            'Acme\Entity\Test' => [
                'config' => [
                    'label' => 'Test Label',
                    'plural_label' => 'Test Plural Label',
                    'icon' => 'fa-test',
                ],
                'fields' => [
                    'field1' => [
                        'type' => 'string',
                        'config' => [
                            'label' => $fieldLabel
                        ]
                    ]
                ]
            ]
        ];
        $this->translator->expects($this->exactly($transCalls))
            ->method('trans')
            ->with($fieldLabel, [], null, $locale)
            ->will($this->returnValue($fieldLabelTranslated));
        $this->prepare($config);


        $this->provider->setLocale($locale);
        $result = $this->provider->getFields('Acme:Test', false, false, false, false, true, $translate);
        $expected = [
            [
                'name' => 'field1',
                'type' => 'string',
                'label' => $fieldLabelTranslated
            ]
        ];

        $this->assertEquals($expected, $result);
    }

    /**
     * @return array
     */
    public function getTranslatedFieldsDataProvider()
    {
        return [
            'translated' => [
                'translate' => true,
                'fieldLabel' => 'C',
                'fieldLabelTranslated' => 'C Translated',
                'locale' => 'it_IT',
                'transCalls' => 1
            ],
            'with translate = false' => [
                'translate' => false,
                'fieldLabel' => 'C',
                'fieldLabelTranslated' => 'C',
                'locale' => null,
                'transCalls' => 0
            ],
            'default translation' => [
                'translate' => true,
                'fieldLabel' => 'C',
                'fieldLabelTranslated' => 'C Default',
                'locale' => null,
                'transCalls' => 1
            ]
        ];
    }
}
