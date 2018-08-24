<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Request\JsonApi;

use Oro\Bundle\ApiBundle\Metadata\EntityMetadata;
use Oro\Bundle\ApiBundle\Model\Error;
use Oro\Bundle\ApiBundle\Request\DataType;
use Oro\Bundle\ApiBundle\Request\EntityIdTransformerInterface;
use Oro\Bundle\ApiBundle\Request\JsonApi\JsonApiDocumentBuilder;
use Oro\Bundle\ApiBundle\Request\RequestType;
use Oro\Bundle\ApiBundle\Request\ValueNormalizer;
use Oro\Bundle\ApiBundle\Tests\Unit\Request\DocumentBuilderTestCase;
use Oro\Bundle\EntityBundle\Exception\EntityAliasNotFoundException;

class JsonApiDocumentBuilderTest extends DocumentBuilderTestCase
{
    /** @var JsonApiDocumentBuilder */
    protected $documentBuilder;

    protected function setUp()
    {
        $valueNormalizer = $this->createMock(ValueNormalizer::class);
        $valueNormalizer->expects($this->any())
            ->method('normalizeValue')
            ->willReturnCallback(
                function ($value, $dataType, $requestType, $isArrayAllowed) {
                    $this->assertEquals(DataType::ENTITY_TYPE, $dataType);
                    $this->assertEquals(new RequestType([RequestType::JSON_API]), $requestType);
                    $this->assertFalse($isArrayAllowed);

                    if (false !== strpos($value, 'WithoutAlias')) {
                        throw new EntityAliasNotFoundException();
                    }

                    return strtolower(str_replace('\\', '_', $value));
                }
            );

        $entityIdTransformer = $this->createMock(EntityIdTransformerInterface::class);
        $entityIdTransformer->expects($this->any())
            ->method('transform')
            ->willReturnCallback(
                function ($id, EntityMetadata $metadata) {
                    return sprintf('%s::%s', $metadata->getClassName(), $id);
                }
            );

        $this->documentBuilder = new JsonApiDocumentBuilder(
            $valueNormalizer,
            $entityIdTransformer
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The metadata should be provided.
     */
    public function testSetDataObjectWithoutMetadata()
    {
        $object = [
            'id'   => 123,
            'name' => 'Name',
        ];

        $this->documentBuilder->setDataObject($object);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The metadata should be provided.
     */
    public function testSetDataCollectionWithoutMetadata()
    {
        $object = [
            'id'   => 123,
            'name' => 'Name',
        ];

        $this->documentBuilder->setDataCollection([$object]);
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testSetDataObjectWithMetadata()
    {
        $object = [
            'id'         => 123,
            'name'       => 'Name',
            'meta1'      => 'Meta1',
            'category'   => 456,
            'group'      => null,
            'role'       => ['id' => 789],
            'categories' => [
                ['id' => 456],
                ['id' => 457]
            ],
            'groups'     => null,
            'products'   => [],
            'roles'      => [
                ['id' => 789, 'name' => 'Role1'],
                ['id' => 780, 'name' => 'Role2']
            ],
            'otherRoles' => [ // this is used to test that "included" collection does not contain duplicates
                ['id' => 789, 'name' => 'Role1'],
                ['id' => 780, 'name' => 'Role2']
            ],
            'unknown'    => 'test'
        ];

        $metadata = $this->getEntityMetadata('Test\Entity', ['id']);
        $metadata->addField($this->createFieldMetadata('id'));
        $metadata->addField($this->createFieldMetadata('name'));
        $metadata->addField($this->createFieldMetadata('missingField'));
        $metadata->addMetaProperty($this->createMetaPropertyMetadata('meta1'));
        $metadata->addMetaProperty($this->createMetaPropertyMetadata('missingMeta'));
        $metadata->addAssociation($this->createAssociationMetadata('category', 'Test\Category'));
        $metadata->addAssociation($this->createAssociationMetadata('group', 'Test\Groups'));
        $metadata->addAssociation($this->createAssociationMetadata('role', 'Test\Role'));
        $metadata->addAssociation($this->createAssociationMetadata('categories', 'Test\Category', true));
        $metadata->addAssociation($this->createAssociationMetadata('groups', 'Test\Group', true));
        $metadata->addAssociation($this->createAssociationMetadata('products', 'Test\Product', true));
        $metadata->addAssociation($this->createAssociationMetadata('roles', 'Test\Role', true));
        $metadata->getAssociation('roles')->getTargetMetadata()->addField($this->createFieldMetadata('name'));
        $metadata->addAssociation($this->createAssociationMetadata('otherRoles', 'Test\Role', true));
        $metadata->getAssociation('otherRoles')->getTargetMetadata()->addField($this->createFieldMetadata('name'));
        $metadata->addAssociation($this->createAssociationMetadata('missingToOne', 'Test\Class'));
        $metadata->addAssociation($this->createAssociationMetadata('missingToMany', 'Test\Class', true));

        $this->documentBuilder->setDataObject($object, $metadata);
        $this->assertEquals(
            [
                'data'     => [
                    'type'          => 'test_entity',
                    'id'            => 'Test\Entity::123',
                    'meta'          => [
                        'meta1' => 'Meta1',
                    ],
                    'attributes'    => [
                        'name'         => 'Name',
                        'missingField' => null
                    ],
                    'relationships' => [
                        'category'      => [
                            'data' => [
                                'type' => 'test_category',
                                'id'   => 'Test\Category::456'
                            ]
                        ],
                        'group'         => [
                            'data' => null
                        ],
                        'role'          => [
                            'data' => [
                                'type' => 'test_role',
                                'id'   => 'Test\Role::789'
                            ]
                        ],
                        'categories'    => [
                            'data' => [
                                [
                                    'type' => 'test_category',
                                    'id'   => 'Test\Category::456'
                                ],
                                [
                                    'type' => 'test_category',
                                    'id'   => 'Test\Category::457'
                                ]
                            ]
                        ],
                        'groups'        => [
                            'data' => []
                        ],
                        'products'      => [
                            'data' => []
                        ],
                        'roles'         => [
                            'data' => [
                                [
                                    'type' => 'test_role',
                                    'id'   => 'Test\Role::789'
                                ],
                                [
                                    'type' => 'test_role',
                                    'id'   => 'Test\Role::780'
                                ]
                            ]
                        ],
                        'otherRoles'    => [
                            'data' => [
                                [
                                    'type' => 'test_role',
                                    'id'   => 'Test\Role::789'
                                ],
                                [
                                    'type' => 'test_role',
                                    'id'   => 'Test\Role::780'
                                ]
                            ]
                        ],
                        'missingToOne'  => [
                            'data' => null
                        ],
                        'missingToMany' => [
                            'data' => []
                        ]
                    ]
                ],
                'included' => [
                    [
                        'type'       => 'test_role',
                        'id'         => 'Test\Role::789',
                        'attributes' => [
                            'name' => 'Role1'
                        ]
                    ],
                    [
                        'type'       => 'test_role',
                        'id'         => 'Test\Role::780',
                        'attributes' => [
                            'name' => 'Role2'
                        ]
                    ]
                ]
            ],
            $this->documentBuilder->getDocument()
        );
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testSetDataCollectionWithMetadata()
    {
        $object = [
            'id'         => 123,
            'name'       => 'Name',
            'meta1'      => 'Meta1',
            'category'   => 456,
            'group'      => null,
            'role'       => ['id' => 789],
            'categories' => [
                ['id' => 456],
                ['id' => 457]
            ],
            'groups'     => null,
            'products'   => [],
            'roles'      => [
                ['id' => 789, 'name' => 'Role1'],
                ['id' => 780, 'name' => 'Role2']
            ],
            'unknown'    => 'test'
        ];

        $metadata = $this->getEntityMetadata('Test\Entity', ['id']);
        $metadata->addField($this->createFieldMetadata('id'));
        $metadata->addField($this->createFieldMetadata('name'));
        $metadata->addField($this->createFieldMetadata('missingField'));
        $metadata->addMetaProperty($this->createMetaPropertyMetadata('meta1'));
        $metadata->addMetaProperty($this->createMetaPropertyMetadata('missingMeta'));
        $metadata->addAssociation($this->createAssociationMetadata('category', 'Test\Category'));
        $metadata->addAssociation($this->createAssociationMetadata('group', 'Test\Groups'));
        $metadata->addAssociation($this->createAssociationMetadata('role', 'Test\Role'));
        $metadata->addAssociation($this->createAssociationMetadata('categories', 'Test\Category', true));
        $metadata->addAssociation($this->createAssociationMetadata('groups', 'Test\Group', true));
        $metadata->addAssociation($this->createAssociationMetadata('products', 'Test\Product', true));
        $metadata->addAssociation($this->createAssociationMetadata('roles', 'Test\Role', true));
        $metadata->getAssociation('roles')->getTargetMetadata()->addField($this->createFieldMetadata('name'));
        $metadata->addAssociation($this->createAssociationMetadata('missingToOne', 'Test\Class'));
        $metadata->addAssociation($this->createAssociationMetadata('missingToMany', 'Test\Class', true));

        $this->documentBuilder->setDataCollection([$object], $metadata);
        $this->assertEquals(
            [
                'data'     => [
                    [
                        'type'          => 'test_entity',
                        'id'            => 'Test\Entity::123',
                        'meta'          => [
                            'meta1' => 'Meta1',
                        ],
                        'attributes'    => [
                            'name'         => 'Name',
                            'missingField' => null
                        ],
                        'relationships' => [
                            'category'      => [
                                'data' => [
                                    'type' => 'test_category',
                                    'id'   => 'Test\Category::456'
                                ]
                            ],
                            'group'         => [
                                'data' => null
                            ],
                            'role'          => [
                                'data' => [
                                    'type' => 'test_role',
                                    'id'   => 'Test\Role::789'
                                ]
                            ],
                            'categories'    => [
                                'data' => [
                                    [
                                        'type' => 'test_category',
                                        'id'   => 'Test\Category::456'
                                    ],
                                    [
                                        'type' => 'test_category',
                                        'id'   => 'Test\Category::457'
                                    ]
                                ]
                            ],
                            'groups'        => [
                                'data' => []
                            ],
                            'products'      => [
                                'data' => []
                            ],
                            'roles'         => [
                                'data' => [
                                    [
                                        'type' => 'test_role',
                                        'id'   => 'Test\Role::789'
                                    ],
                                    [
                                        'type' => 'test_role',
                                        'id'   => 'Test\Role::780'
                                    ]
                                ]
                            ],
                            'missingToOne'  => [
                                'data' => null
                            ],
                            'missingToMany' => [
                                'data' => []
                            ]
                        ]
                    ]
                ],
                'included' => [
                    [
                        'type'       => 'test_role',
                        'id'         => 'Test\Role::789',
                        'attributes' => [
                            'name' => 'Role1'
                        ]
                    ],
                    [
                        'type'       => 'test_role',
                        'id'         => 'Test\Role::780',
                        'attributes' => [
                            'name' => 'Role2'
                        ]
                    ]
                ]
            ],
            $this->documentBuilder->getDocument()
        );
    }

    public function testAssociationWithInheritance()
    {
        $object = [
            'id'         => 123,
            'categories' => [
                ['id' => 456, '__class__' => 'Test\Category1', 'name' => 'Category1'],
                ['id' => 457, '__class__' => 'Test\Category2', 'name' => 'Category2']
            ]
        ];

        $metadata = $this->getEntityMetadata('Test\Entity', ['id']);
        $metadata->addField($this->createFieldMetadata('id'));
        $metadata->addAssociation($this->createAssociationMetadata('categories', 'Test\CategoryWithoutAlias', true));
        $metadata->getAssociation('categories')->getTargetMetadata()->setInheritedType(true);
        $metadata->getAssociation('categories')->setAcceptableTargetClassNames(
            ['Test\Category1', 'Test\Category2']
        );
        $metadata->getAssociation('categories')->getTargetMetadata()->addField($this->createFieldMetadata('name'));

        $this->documentBuilder->setDataObject($object, $metadata);
        $this->assertEquals(
            [
                'data'     => [
                    'type'          => 'test_entity',
                    'id'            => 'Test\Entity::123',
                    'relationships' => [
                        'categories' => [
                            'data' => [
                                [
                                    'type' => 'test_category1',
                                    'id'   => 'Test\CategoryWithoutAlias::456'
                                ],
                                [
                                    'type' => 'test_category2',
                                    'id'   => 'Test\CategoryWithoutAlias::457'
                                ]
                            ]
                        ]
                    ]
                ],
                'included' => [
                    [
                        'type'       => 'test_category1',
                        'id'         => 'Test\CategoryWithoutAlias::456',
                        'attributes' => [
                            'name' => 'Category1'
                        ]
                    ],
                    [
                        'type'       => 'test_category2',
                        'id'         => 'Test\CategoryWithoutAlias::457',
                        'attributes' => [
                            'name' => 'Category2'
                        ]
                    ]
                ]
            ],
            $this->documentBuilder->getDocument()
        );
    }

    public function testAssociationWithInheritanceAndSomeInheritedEntitiesDoNotHaveAlias()
    {
        $object = [
            'id'         => 123,
            'categories' => [
                ['id' => 456, '__class__' => 'Test\Category1', 'name' => 'Category1'],
                ['id' => 457, '__class__' => 'Test\Category2WithoutAlias', 'name' => 'Category2']
            ]
        ];

        $metadata = $this->getEntityMetadata('Test\Entity', ['id']);
        $metadata->addField($this->createFieldMetadata('id'));
        $metadata->addAssociation($this->createAssociationMetadata('categories', 'Test\Category', true));
        $metadata->getAssociation('categories')->getTargetMetadata()->setInheritedType(true);
        $metadata->getAssociation('categories')->setAcceptableTargetClassNames(
            ['Test\Category1', 'Test\Category2WithoutAlias']
        );
        $metadata->getAssociation('categories')->getTargetMetadata()->addField($this->createFieldMetadata('name'));

        $this->documentBuilder->setDataObject($object, $metadata);
        $this->assertEquals(
            [
                'data'     => [
                    'type'          => 'test_entity',
                    'id'            => 'Test\Entity::123',
                    'relationships' => [
                        'categories' => [
                            'data' => [
                                [
                                    'type' => 'test_category1',
                                    'id'   => 'Test\Category::456'
                                ],
                                [
                                    'type' => 'test_category',
                                    'id'   => 'Test\Category::457'
                                ]
                            ]
                        ]
                    ]
                ],
                'included' => [
                    [
                        'type'       => 'test_category1',
                        'id'         => 'Test\Category::456',
                        'attributes' => [
                            'name' => 'Category1'
                        ]
                    ],
                    [
                        'type'       => 'test_category',
                        'id'         => 'Test\Category::457',
                        'attributes' => [
                            'name' => 'Category2'
                        ]
                    ]
                ]
            ],
            $this->documentBuilder->getDocument()
        );
    }

    public function testMissingAssociationsAsFields()
    {
        $object = [
            'id' => 123,
        ];

        $metadata = $this->getEntityMetadata('Test\Entity', ['id']);
        $metadata->addField($this->createFieldMetadata('id'));
        $metadata->addAssociation($this->createAssociationMetadata('missingToOne', 'Test\Class'));
        $metadata->addAssociation($this->createAssociationMetadata('missingToMany', 'Test\Class', true));
        foreach ($metadata->getAssociations() as $association) {
            $association->setDataType('array');
        }

        $this->documentBuilder->setDataObject($object, $metadata);
        $this->assertEquals(
            [
                'data'     => [
                    'type'       => 'test_entity',
                    'id'         => 'Test\Entity::123',
                    'attributes' => [
                        'missingToOne'  => null,
                        'missingToMany' => []
                    ]
                ],
            ],
            $this->documentBuilder->getDocument()
        );
    }

    /**
     * @dataProvider toOneAssociationAsFieldProvider
     */
    public function testToOneAssociationAsField($value, $expected)
    {
        $object = [
            'id'       => 123,
            'category' => $value,
        ];

        $metadata = $this->getEntityMetadata('Test\Entity', ['id']);
        $metadata->addField($this->createFieldMetadata('id'));
        $association = $metadata->addAssociation(
            $this->createAssociationMetadata('category', 'Test\Category')
        );
        $association->setDataType('object');
        $association->getTargetMetadata()->addField($this->createFieldMetadata('name'));

        $this->documentBuilder->setDataObject($object, $metadata);
        $this->assertEquals(
            [
                'data'     => [
                    'type'       => 'test_entity',
                    'id'         => 'Test\Entity::123',
                    'attributes' => [
                        'category' => $expected
                    ]
                ],
            ],
            $this->documentBuilder->getDocument()
        );
    }

    public function toOneAssociationAsFieldProvider()
    {
        return [
            [null, null],
            [123, 123],
            [
                ['id' => 123],
                ['id' => 123, 'name' => null],
            ],
            [
                ['id' => 123, 'name' => 'name1'],
                ['id' => 123, 'name' => 'name1'],
            ],
            [
                ['id' => 123, 'name' => 'name1', 'other' => 'val1'],
                ['id' => 123, 'name' => 'name1'],
            ],
        ];
    }

    /**
     * @dataProvider toManyAssociationAsFieldProvider
     */
    public function testToManyAssociationAsField($value, $expected)
    {
        $object = [
            'id'         => 123,
            'categories' => $value,
        ];

        $metadata = $this->getEntityMetadata('Test\Entity', ['id']);
        $metadata->addField($this->createFieldMetadata('id'));
        $association = $metadata->addAssociation(
            $this->createAssociationMetadata('categories', 'Test\Category', true)
        );
        $association->setDataType('array');
        $association->getTargetMetadata()->addField($this->createFieldMetadata('name'));

        $this->documentBuilder->setDataObject($object, $metadata);
        $this->assertEquals(
            [
                'data'     => [
                    'type'       => 'test_entity',
                    'id'         => 'Test\Entity::123',
                    'attributes' => [
                        'categories' => $expected
                    ]
                ],
            ],
            $this->documentBuilder->getDocument()
        );
    }

    public function toManyAssociationAsFieldProvider()
    {
        return [
            [null, []],
            [[], []],
            [[123, 124], [123, 124]],
            [
                [['id' => 123], ['id' => 124]],
                [['id' => 123, 'name' => null], ['id' => 124, 'name' => null]],
            ],
            [
                [['id' => 123, 'name' => 'name1'], ['id' => 124, 'name' => 'name2']],
                [['id' => 123, 'name' => 'name1'], ['id' => 124, 'name' => 'name2']],
            ],
            [
                [
                    ['id' => 123, 'name' => 'name1', 'other' => 'val1'],
                    ['id' => 124, 'name' => 'name2', 'other' => 'val1']
                ],
                [['id' => 123, 'name' => 'name1'], ['id' => 124, 'name' => 'name2']],
            ],
        ];
    }

    /**
     * @dataProvider toOneAssociationAsFieldForIdFieldsOnlyProvider
     */
    public function testToOneAssociationAsFieldForIdFieldsOnly($value, $expected)
    {
        $object = [
            'id'       => 123,
            'category' => $value,
        ];

        $metadata = $this->getEntityMetadata('Test\Entity', ['id']);
        $metadata->addField($this->createFieldMetadata('id'));
        $association = $metadata->addAssociation(
            $this->createAssociationMetadata('category', 'Test\Category')
        );
        $association->setDataType('scalar');

        $this->documentBuilder->setDataObject($object, $metadata);
        $this->assertEquals(
            [
                'data'     => [
                    'type'       => 'test_entity',
                    'id'         => 'Test\Entity::123',
                    'attributes' => [
                        'category' => $expected
                    ]
                ],
            ],
            $this->documentBuilder->getDocument()
        );
    }

    public function toOneAssociationAsFieldForIdFieldsOnlyProvider()
    {
        return [
            [null, null],
            [123, 123],
            [['id' => 123], 123],
            [['id' => 123, 'name' => 'name1'], 123],
        ];
    }

    /**
     * @dataProvider toManyAssociationAsFieldForIdFieldsOnlyProvider
     */
    public function testToManyAssociationAsFieldForIdFieldsOnly($value, $expected)
    {
        $object = [
            'id'         => 123,
            'categories' => $value,
        ];

        $metadata = $this->getEntityMetadata('Test\Entity', ['id']);
        $metadata->addField($this->createFieldMetadata('id'));
        $association = $metadata->addAssociation(
            $this->createAssociationMetadata('categories', 'Test\Category', true)
        );
        $association->setDataType('array');

        $this->documentBuilder->setDataObject($object, $metadata);
        $this->assertEquals(
            [
                'data'     => [
                    'type'       => 'test_entity',
                    'id'         => 'Test\Entity::123',
                    'attributes' => [
                        'categories' => $expected
                    ]
                ],
            ],
            $this->documentBuilder->getDocument()
        );
    }

    public function toManyAssociationAsFieldForIdFieldsOnlyProvider()
    {
        return [
            [null, []],
            [[], []],
            [[123, 124], [123, 124]],
            [
                [['id' => 123], ['id' => 124]],
                [123, 124]
            ],
            [
                [['id' => 123, 'name' => 'name1'], ['id' => 124, 'name' => 'name2']],
                [123, 124]
            ],
        ];
    }

    /**
     * @dataProvider toOneCollapsedAssociationAsFieldProvider
     */
    public function testToOneCollapsedAssociationAsField($value, $expected)
    {
        $object = [
            'id'       => 123,
            'category' => $value,
        ];

        $metadata = $this->getEntityMetadata('Test\Entity', ['id']);
        $metadata->addField($this->createFieldMetadata('id'));
        $association = $metadata->addAssociation(
            $this->createAssociationMetadata('category', 'Test\Category')
        );
        $association->setDataType('scalar');
        $association->setCollapsed(true);
        $association->getTargetMetadata()->removeField('id');
        $association->getTargetMetadata()->addField($this->createFieldMetadata('name'));

        $this->documentBuilder->setDataObject($object, $metadata);
        $this->assertEquals(
            [
                'data'     => [
                    'type'       => 'test_entity',
                    'id'         => 'Test\Entity::123',
                    'attributes' => [
                        'category' => $expected
                    ]
                ],
            ],
            $this->documentBuilder->getDocument()
        );
    }

    public function toOneCollapsedAssociationAsFieldProvider()
    {
        return [
            [null, null],
            ['name1', 'name1'],
            [
                ['name' => 'name1'],
                'name1',
            ],
            [
                ['name' => 'name1', 'other' => 'val1'],
                'name1',
            ],
        ];
    }

    /**
     * @dataProvider toManyCollapsedAssociationAsFieldProvider
     */
    public function testToManyCollapsedAssociationAsField($value, $expected)
    {
        $object = [
            'id'         => 123,
            'categories' => $value,
        ];

        $metadata = $this->getEntityMetadata('Test\Entity', ['id']);
        $metadata->addField($this->createFieldMetadata('id'));
        $association = $metadata->addAssociation(
            $this->createAssociationMetadata('categories', 'Test\Category', true)
        );
        $association->setDataType('array');
        $association->setCollapsed(true);
        $association->getTargetMetadata()->removeField('id');
        $association->getTargetMetadata()->addField($this->createFieldMetadata('name'));

        $this->documentBuilder->setDataObject($object, $metadata);
        $this->assertEquals(
            [
                'data'     => [
                    'type'       => 'test_entity',
                    'id'         => 'Test\Entity::123',
                    'attributes' => [
                        'categories' => $expected
                    ]
                ],
            ],
            $this->documentBuilder->getDocument()
        );
    }

    public function toManyCollapsedAssociationAsFieldProvider()
    {
        return [
            [null, []],
            [[], []],
            [['name1', 'name2'], ['name1', 'name2']],
            [
                [['name' => 'name1'], ['name' => 'name2']],
                ['name1', 'name2'],
            ],
            [
                [
                    ['name' => 'name1', 'other' => 'val1'],
                    ['name' => 'name2', 'other' => 'val1']
                ],
                ['name1', 'name2'],
            ],
        ];
    }

    public function testNestedAssociationAsArrayAttribute()
    {
        $object = [
            'id'          => 1,
            'association' => [
                'id'         => 123,
                'name'       => 'Name',
                'meta1'      => 'Meta1',
                'meta2'      => 'Meta2',
                'category'   => 456,
                'group'      => null,
                'role'       => ['id' => 789],
                'categories' => [
                    ['id' => 456],
                    ['id' => 457]
                ],
                'groups'     => null,
                'products'   => [],
                'roles'      => [
                    ['id' => 789, 'name' => 'Role1'],
                    ['id' => 780, 'name' => 'Role2']
                ],
                'unknown'    => 'test'
            ],
        ];

        $targetMetadata = $this->getEntityMetadata('Test\Target', ['id']);
        $targetMetadata->addField($this->createFieldMetadata('id'));
        $targetMetadata->addField($this->createFieldMetadata('name'));
        $targetMetadata->addField($this->createFieldMetadata('missingField'));
        $targetMetadata->addMetaProperty($this->createMetaPropertyMetadata('meta1'));
        $targetMetadata->addMetaProperty($this->createMetaPropertyMetadata('meta2'))
            ->setResultName('resultMeta2');
        $targetMetadata->addMetaProperty($this->createMetaPropertyMetadata('missingMeta'));
        $targetMetadata->addAssociation($this->createAssociationMetadata('category', 'Test\Category'));
        $targetMetadata->addAssociation($this->createAssociationMetadata('group', 'Test\Groups'));
        $targetMetadata->addAssociation($this->createAssociationMetadata('role', 'Test\Role'));
        $targetMetadata->addAssociation($this->createAssociationMetadata('categories', 'Test\Category', true));
        $targetMetadata->addAssociation($this->createAssociationMetadata('groups', 'Test\Group', true));
        $targetMetadata->addAssociation($this->createAssociationMetadata('products', 'Test\Product', true));
        $targetMetadata->addAssociation($this->createAssociationMetadata('roles', 'Test\Role', true));
        $targetMetadata->getAssociation('roles')->getTargetMetadata()->addField($this->createFieldMetadata('name'));
        $targetMetadata->addAssociation($this->createAssociationMetadata('missingToOne', 'Test\Class'));
        $targetMetadata->addAssociation($this->createAssociationMetadata('missingToMany', 'Test\Class', true));

        $metadata = $this->getEntityMetadata('Test\Entity', ['id']);
        $metadata->addField($this->createFieldMetadata('id'));
        $associationMetadata = $metadata->addAssociation(
            $this->createAssociationMetadata('association', 'Test\Target')
        );
        $associationMetadata->setTargetMetadata($targetMetadata);
        $associationMetadata->setDataType('array');

        $this->documentBuilder->setDataObject($object, $metadata);
        $this->assertEquals(
            [
                'data'     => [
                    'type'       => 'test_entity',
                    'id'         => 'Test\Entity::1',
                    'attributes' => [
                        'association' => [
                            'id'            => 123,
                            'name'          => 'Name',
                            'missingField'  => null,
                            'meta1'         => 'Meta1',
                            'resultMeta2'   => 'Meta2',
                            'category'      => 456,
                            'group'         => null,
                            'role'          => 789,
                            'categories'    => [456, 457],
                            'groups'        => [],
                            'products'      => [],
                            'roles'         => [
                                ['id' => 789, 'name' => 'Role1'],
                                ['id' => 780, 'name' => 'Role2']
                            ],
                            'missingToOne'  => null,
                            'missingToMany' => []
                        ]
                    ]
                ],
            ],
            $this->documentBuilder->getDocument()
        );
    }

    public function testSetErrorObject()
    {
        $error = new Error();
        $error->setStatusCode(500);
        $error->setCode('errCode');
        $error->setTitle('some error');
        $error->setDetail('some error details');

        $this->documentBuilder->setErrorObject($error);
        $this->assertEquals(
            [
                'errors' => [
                    [
                        'status' => '500',
                        'code'   => 'errCode',
                        'title'  => 'some error',
                        'detail' => 'some error details'
                    ]
                ]
            ],
            $this->documentBuilder->getDocument()
        );
    }

    public function testSetErrorCollection()
    {
        $error = new Error();
        $error->setStatusCode(500);
        $error->setCode('errCode');
        $error->setTitle('some error');
        $error->setDetail('some error details');

        $this->documentBuilder->setErrorCollection([$error]);
        $this->assertEquals(
            [
                'errors' => [
                    [
                        'status' => '500',
                        'code'   => 'errCode',
                        'title'  => 'some error',
                        'detail' => 'some error details'
                    ]
                ]
            ],
            $this->documentBuilder->getDocument()
        );
    }

    public function testMetaPropertyWithResultName()
    {
        $object = [
            'id'    => 123,
            'meta1' => 'Meta1',
        ];

        $metadata = $this->getEntityMetadata('Test\Entity', ['id']);
        $metadata->addField($this->createFieldMetadata('id'));
        $metadata->addMetaProperty($this->createMetaPropertyMetadata('meta1'))
            ->setResultName('resultMeta1');

        $this->documentBuilder->setDataObject($object, $metadata);
        $this->assertEquals(
            [
                'data'     => [
                    'type' => 'test_entity',
                    'id'   => 'Test\Entity::123',
                    'meta' => [
                        'resultMeta1' => 'Meta1',
                    ],
                ],
            ],
            $this->documentBuilder->getDocument()
        );
    }
}
