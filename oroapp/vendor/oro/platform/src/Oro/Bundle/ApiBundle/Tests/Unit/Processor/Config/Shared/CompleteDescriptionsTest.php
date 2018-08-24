<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Config\Shared;

use Symfony\Component\Translation\TranslatorInterface;

use Oro\Component\Testing\Unit\Entity\Stub\StubEnumValue as EnumEntity;
use Oro\Bundle\ApiBundle\ApiDoc\EntityDescriptionProvider;
use Oro\Bundle\ApiBundle\ApiDoc\Parser\MarkdownApiDocParser;
use Oro\Bundle\ApiBundle\ApiDoc\ResourceDocProviderInterface;
use Oro\Bundle\ApiBundle\Config\FiltersConfig;
use Oro\Bundle\ApiBundle\Model\Label;
use Oro\Bundle\ApiBundle\Processor\Config\Shared\CompleteDescriptions;
use Oro\Bundle\ApiBundle\Request\RequestType;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\Config\ConfigProcessorTestCase;
use Oro\Bundle\ApiBundle\Util\ConfigUtil;
use Oro\Bundle\ApiBundle\Util\RequestDependedTextProcessor;
use Oro\Bundle\ApiBundle\Util\RequestExpressionMatcher;
use Oro\Bundle\EntityConfigBundle\Config\ConfigManager;
use Oro\Bundle\EntityConfigBundle\Tests\Unit\ConfigProviderMock;

/**
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class CompleteDescriptionsTest extends ConfigProcessorTestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject|EntityDescriptionProvider */
    private $entityDocProvider;

    /** @var \PHPUnit_Framework_MockObject_MockObject|ResourceDocProviderInterface */
    private $resourceDocProvider;

    /** @var \PHPUnit_Framework_MockObject_MockObject|MarkdownApiDocParser */
    private $apiDocParser;

    /** @var \PHPUnit_Framework_MockObject_MockObject|TranslatorInterface */
    private $translator;

    /** @var ConfigProviderMock */
    private $ownershipConfigProvider;

    /** @var CompleteDescriptions */
    private $processor;

    protected function setUp()
    {
        parent::setUp();

        $this->entityDocProvider = $this->getMockBuilder(EntityDescriptionProvider::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->resourceDocProvider = $this->createMock(ResourceDocProviderInterface::class);
        $this->apiDocParser = $this->createMock(MarkdownApiDocParser::class);
        $this->translator = $this->createMock(TranslatorInterface::class);

        $configManager = $this->createMock(ConfigManager::class);
        $this->ownershipConfigProvider = new ConfigProviderMock($configManager, 'ownership');

        $this->processor = new CompleteDescriptions(
            $this->entityDocProvider,
            $this->resourceDocProvider,
            $this->apiDocParser,
            $this->translator,
            $this->ownershipConfigProvider,
            new RequestDependedTextProcessor(new RequestExpressionMatcher())
        );
    }

    public function testWithoutTargetAction()
    {
        $config = [
            'exclusion_policy'       => 'all',
            'identifier_field_names' => ['id'],
            'fields'                 => [
                'id'     => null,
                'field1' => null,
            ]
        ];

        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy'       => 'all',
                'identifier_field_names' => ['id'],
                'fields'                 => [
                    'id'     => null,
                    'field1' => null,
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testIdentifierField()
    {
        $config = [
            'identifier_field_names' => ['id'],
            'exclusion_policy'       => 'all',
            'fields'                 => [
                'id'     => null,
                'field1' => null,
            ]
        ];

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'identifier_field_names' => ['id'],
                'exclusion_policy'       => 'all',
                'fields'                 => [
                    'id'     => [
                        'description' => CompleteDescriptions::ID_DESCRIPTION
                    ],
                    'field1' => null,
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testIdentifierFieldWhenItAlreadyHasDescription()
    {
        $config = [
            'identifier_field_names' => ['id'],
            'exclusion_policy'       => 'all',
            'fields'                 => [
                'id'     => [
                    'description' => 'existing description'
                ],
                'field1' => null,
            ]
        ];

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'identifier_field_names' => ['id'],
                'exclusion_policy'       => 'all',
                'fields'                 => [
                    'id'     => [
                        'description' => 'existing description'
                    ],
                    'field1' => null,
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testRenamedIdentifierField()
    {
        $config = [
            'identifier_field_names' => ['id1'],
            'exclusion_policy'       => 'all',
            'fields'                 => [
                'id'  => null,
                'id1' => null,
            ]
        ];

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'identifier_field_names' => ['id1'],
                'exclusion_policy'       => 'all',
                'fields'                 => [
                    'id'  => null,
                    'id1' => [
                        'description' => CompleteDescriptions::ID_DESCRIPTION
                    ],
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testCompositeIdentifierField()
    {
        $config = [
            'identifier_field_names' => ['id1', 'id2'],
            'exclusion_policy'       => 'all',
            'fields'                 => [
                'id'  => null,
                'id1' => null,
                'id2' => null,
            ]
        ];

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'identifier_field_names' => ['id1', 'id2'],
                'exclusion_policy'       => 'all',
                'fields'                 => [
                    'id'  => null,
                    'id1' => null,
                    'id2' => null,
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testIdentifierFieldDoesNotExist()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'id'     => null,
                'field1' => null,
            ]
        ];

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'id'     => null,
                    'field1' => null,
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testCreatedAtField()
    {
        $config = [
            'fields' => [
                'id'        => null,
                'createdAt' => null,
            ]
        ];

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'fields' => [
                    'id'        => null,
                    'createdAt' => [
                        'description' => CompleteDescriptions::CREATED_AT_DESCRIPTION
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testCreatedAtFieldWhenItAlreadyHasDescription()
    {
        $config = [
            'fields' => [
                'id'        => null,
                'createdAt' => [
                    'description' => 'existing description'
                ],
            ]
        ];

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'fields' => [
                    'id'        => null,
                    'createdAt' => [
                        'description' => 'existing description'
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testUpdatedAtField()
    {
        $config = [
            'fields' => [
                'id'        => null,
                'created'   => null,
                'updatedAt' => null,
            ]
        ];

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'fields' => [
                    'id'        => null,
                    'created'   => null,
                    'updatedAt' => [
                        'description' => CompleteDescriptions::UPDATED_AT_DESCRIPTION
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testUpdatedAtFieldWhenItAlreadyHasDescription()
    {
        $config = [
            'fields' => [
                'id'        => null,
                'updatedAt' => [
                    'description' => 'existing description'
                ],
            ]
        ];

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'fields' => [
                    'id'        => null,
                    'updatedAt' => [
                        'description' => 'existing description'
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testOwnershipFieldsForNonConfigurableEntity()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'owner'        => null,
                'organization' => null,
            ]
        ];

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            $config,
            $this->context->getResult()
        );
    }

    public function testOwnershipFieldsWithoutConfiguration()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'owner'        => null,
                'organization' => null,
            ]
        ];

        $this->ownershipConfigProvider->addEntityConfig(
            self::TEST_CLASS_NAME,
            []
        );

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            $config,
            $this->context->getResult()
        );
    }

    public function testOwnerField()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'owner'        => null,
                'organization' => null,
            ]
        ];

        $this->ownershipConfigProvider->addEntityConfig(
            self::TEST_CLASS_NAME,
            ['owner_field_name' => 'owner']
        );

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'owner'        => [
                        'description' => CompleteDescriptions::OWNER_DESCRIPTION
                    ],
                    'organization' => null,
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testOrganizationField()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'owner'        => null,
                'organization' => null,
            ]
        ];

        $this->ownershipConfigProvider->addEntityConfig(
            self::TEST_CLASS_NAME,
            ['organization_field_name' => 'organization']
        );

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'owner'        => null,
                    'organization' => [
                        'description' => CompleteDescriptions::ORGANIZATION_DESCRIPTION
                    ]
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testRenamedOwnerField()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'owner2'       => ['property_path' => 'owner1'],
                'organization' => null,
            ]
        ];

        $this->ownershipConfigProvider->addEntityConfig(
            self::TEST_CLASS_NAME,
            ['owner_field_name' => 'owner1']
        );

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'owner2'       => [
                        'property_path' => 'owner1',
                        'description'   => CompleteDescriptions::OWNER_DESCRIPTION
                    ],
                    'organization' => null,
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testRenamedOrganizationField()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'owner'         => null,
                'organization2' => ['property_path' => 'organization1'],
            ]
        ];

        $this->ownershipConfigProvider->addEntityConfig(
            self::TEST_CLASS_NAME,
            ['organization_field_name' => 'organization1']
        );

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'owner'         => null,
                    'organization2' => [
                        'property_path' => 'organization1',
                        'description'   => CompleteDescriptions::ORGANIZATION_DESCRIPTION
                    ]
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testEnumFields()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'name'     => null,
                'default'  => null,
                'priority' => null,
            ]
        ];

        $this->context->setClassName(EnumEntity::class);
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'name'     => [
                        'description' => CompleteDescriptions::ENUM_NAME_DESCRIPTION
                    ],
                    'default'  => [
                        'description' => CompleteDescriptions::ENUM_DEFAULT_DESCRIPTION
                    ],
                    'priority' => [
                        'description' => CompleteDescriptions::ENUM_PRIORITY_DESCRIPTION
                    ],
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionWhenItExistsInConfig()
    {
        $entityClass = 'Test\Entity';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => [
                    'description' => 'field description'
                ]
            ]
        ];

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => 'field description'
                    ],
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionWhenItIsLabelObject()
    {
        $entityClass = 'Test\Entity';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => [
                    'description' => new Label('field description label')
                ]
            ]
        ];

        $this->translator->expects(self::once())
            ->method('trans')
            ->with('field description label')
            ->willReturn('translated field description');

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => 'translated field description'
                    ],
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionWhenItExistsInConfigAndContainsInheritDocPlaceholder()
    {
        $entityClass = 'Test\Entity';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => [
                    'description' => 'field description, {@inheritdoc}'
                ]
            ]
        ];

        $this->entityDocProvider->expects(self::once())
            ->method('getFieldDocumentation')
            ->with($entityClass, 'testField')
            ->willReturn('field description from the entity config');

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => 'field description, field description from the entity config'
                    ],
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionForRenamedFieldWhenItExistsInConfigAndContainsInheritDocPlaceholder()
    {
        $entityClass = 'Test\Entity';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'renamedField' => [
                    'property_path' => 'testField',
                    'description'   => 'field description, {@inheritdoc}'
                ]
            ]
        ];

        $this->entityDocProvider->expects(self::once())
            ->method('getFieldDocumentation')
            ->with($entityClass, 'testField')
            ->willReturn('field description from the entity config');

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'renamedField' => [
                        'property_path' => 'testField',
                        'description'   => 'field description, field description from the entity config'
                    ],
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionWhenItExistsInDocFile()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];

        $this->apiDocParser->expects(self::once())
            ->method('getFieldDocumentation')
            ->with($entityClass, 'testField', $targetAction)
            ->willReturn('field description');

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => 'field description'
                    ],
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionWhenItExistsInDocFileAndContainsInheritDocPlaceholder()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];

        $this->apiDocParser->expects(self::exactly(2))
            ->method('getFieldDocumentation')
            ->willReturnMap([
                [$entityClass, 'testField', null, 'common field description'],
                [$entityClass, 'testField', $targetAction, 'action field description. {@inheritdoc}'],
            ]);

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => 'action field description. common field description'
                    ],
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionWhenItAndCommonDescriptionExistInDocFileAndContainsInheritDocPlaceholder()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];

        $this->apiDocParser->expects(self::exactly(2))
            ->method('getFieldDocumentation')
            ->willReturnMap([
                [$entityClass, 'testField', null, 'common field description. {@inheritdoc}'],
                [$entityClass, 'testField', $targetAction, 'action field description. {@inheritdoc}'],
            ]);
        $this->entityDocProvider->expects(self::once())
            ->method('getFieldDocumentation')
            ->with($entityClass, 'testField')
            ->willReturn('field description from the entity config');

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => 'action field description. common field description. '
                            . 'field description from the entity config'
                    ],
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionWhenItExistsInDocFileAndContainsInheritDocPlaceholderButNoAndCommonDescription()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];

        $this->apiDocParser->expects(self::exactly(2))
            ->method('getFieldDocumentation')
            ->willReturnMap([
                [$entityClass, 'testField', null, null],
                [$entityClass, 'testField', $targetAction, 'action field description. {@inheritdoc}'],
            ]);
        $this->entityDocProvider->expects(self::once())
            ->method('getFieldDocumentation')
            ->with($entityClass, 'testField')
            ->willReturn('field description from the entity config');

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => 'action field description. field description from the entity config'
                    ],
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionWhenItDoesNotExistInDocFileButExistCommonDescription()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];

        $this->apiDocParser->expects(self::exactly(2))
            ->method('getFieldDocumentation')
            ->willReturnMap([
                [$entityClass, 'testField', null, 'common field description'],
                [$entityClass, 'testField', $targetAction, null],
            ]);

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => 'common field description'
                    ],
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionWhenItDoesNotExistInDocFileButExistCommonDescriptionWithInheritDocPlaceholder()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];

        $this->apiDocParser->expects(self::exactly(2))
            ->method('getFieldDocumentation')
            ->willReturnMap([
                [$entityClass, 'testField', null, 'common field description. {@inheritdoc}'],
                [$entityClass, 'testField', $targetAction, null],
            ]);
        $this->entityDocProvider->expects(self::once())
            ->method('getFieldDocumentation')
            ->with($entityClass, 'testField')
            ->willReturn('field description from the entity config');

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => 'common field description. field description from the entity config'
                    ],
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionWhenItAndCommonDescriptionDoNotExistInDocFile()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];

        $this->apiDocParser->expects(self::exactly(2))
            ->method('getFieldDocumentation')
            ->willReturnMap([
                [$entityClass, 'testField', null, null],
                [$entityClass, 'testField', $targetAction, null],
            ]);
        $this->entityDocProvider->expects(self::once())
            ->method('getFieldDocumentation')
            ->with($entityClass, 'testField')
            ->willReturn('field description from the entity config');

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => 'field description from the entity config'
                    ],
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionForNestedField()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => [
                    'fields' => [
                        'nestedField' => null
                    ]
                ]
            ]
        ];

        $this->entityDocProvider->expects(self::exactly(2))
            ->method('getFieldDocumentation')
            ->willReturnMap([
                [$entityClass, 'testField', null],
                [$entityClass, 'testField.nestedField', 'nested field description'],
            ]);

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'fields' => [
                            'nestedField' => [
                                'description' => 'nested field description'
                            ]
                        ]
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionForNestedFieldWhenFieldIsRenamed()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'renamedField' => [
                    'property_path' => 'testField',
                    'fields'        => [
                        'nestedField' => null
                    ]
                ]
            ]
        ];

        $this->entityDocProvider->expects(self::exactly(2))
            ->method('getFieldDocumentation')
            ->willReturnMap([
                [$entityClass, 'testField', null],
                [$entityClass, 'testField.nestedField', 'nested field description'],
            ]);

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'renamedField' => [
                        'property_path' => 'testField',
                        'fields'        => [
                            'nestedField' => [
                                'description' => 'nested field description'
                            ]
                        ]
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionForRenamedNestedField()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => [
                    'fields' => [
                        'renamedNestedField' => [
                            'property_path' => 'nestedField'
                        ]
                    ]
                ]
            ]
        ];

        $this->entityDocProvider->expects(self::exactly(2))
            ->method('getFieldDocumentation')
            ->willReturnMap([
                [$entityClass, 'testField', null],
                [$entityClass, 'testField.nestedField', 'nested field description'],
            ]);

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'fields' => [
                            'renamedNestedField' => [
                                'property_path' => 'nestedField',
                                'description'   => 'nested field description'
                            ]
                        ]
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testFieldDescriptionForAssociationField()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => [
                    'target_class' => 'Test\AssociationEntity',
                    'fields'       => [
                        'associationField' => null
                    ]
                ]
            ]
        ];

        $this->entityDocProvider->expects(self::exactly(2))
            ->method('getFieldDocumentation')
            ->willReturnMap([
                [$entityClass, 'testField', null],
                [$entityClass, 'associationField', 'association field description'],
            ]);

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'target_class' => 'Test\AssociationEntity',
                        'fields'       => [
                            'associationField' => [
                                'description' => 'association field description'
                            ]
                        ]
                    ]
                ]

            ],
            $this->context->getResult()
        );
    }

    public function testFilterDescriptionWhenItExistsInConfig()
    {
        $entityClass = 'Test\Entity';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];
        $filters = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => [
                    'description' => 'filter description'
                ]
            ]
        ];

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->context->setFilters($this->createConfigObject($filters, ConfigUtil::FILTERS));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => 'filter description'
                    ],
                ]

            ],
            $this->context->getFilters()
        );
    }

    public function testFilterDescriptionWhenItIsLabelObject()
    {
        $entityClass = 'Test\Entity';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];
        $filters = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => [
                    'description' => new Label('filter description label')
                ]
            ]
        ];

        $this->translator->expects(self::once())
            ->method('trans')
            ->with('filter description label')
            ->willReturn('translated filter description');

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->context->setFilters($this->createConfigObject($filters, ConfigUtil::FILTERS));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => 'translated filter description'
                    ],
                ]

            ],
            $this->context->getFilters()
        );
    }

    public function testFilterDescriptionWhenItExistsInDocFile()
    {
        $entityClass = 'Test\Entity';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];
        $filters = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];

        $this->apiDocParser->expects(self::once())
            ->method('getFilterDocumentation')
            ->with($entityClass, 'testField')
            ->willReturn('filter description');

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->context->setFilters($this->createConfigObject($filters, ConfigUtil::FILTERS));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => 'filter description'
                    ],
                ]

            ],
            $this->context->getFilters()
        );
    }

    public function testFilterDescriptionForRegularField()
    {
        $entityClass = 'Test\Entity';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];
        $filters = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];

        $this->apiDocParser->expects(self::once())
            ->method('getFilterDocumentation')
            ->with($entityClass, 'testField')
            ->willReturn(null);

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->context->setFilters($this->createConfigObject($filters, ConfigUtil::FILTERS));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => sprintf(CompleteDescriptions::FIELD_FILTER_DESCRIPTION, 'testField')
                    ],
                ]

            ],
            $this->context->getFilters()
        );
    }

    public function testFilterDescriptionForAssociation()
    {
        $entityClass = 'Test\Entity';
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => [
                    'fields' => [
                        'id' => null
                    ]
                ]
            ]
        ];
        $filters = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'testField' => null
            ]
        ];

        $this->apiDocParser->expects(self::once())
            ->method('getFilterDocumentation')
            ->with($entityClass, 'testField')
            ->willReturn(null);

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->context->setFilters($this->createConfigObject($filters, ConfigUtil::FILTERS));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'testField' => [
                        'description' => sprintf(CompleteDescriptions::ASSOCIATION_FILTER_DESCRIPTION, 'testField')
                    ],
                ]

            ],
            $this->context->getFilters()
        );
    }

    public function testRequestDependedContentForEntityDocumentation()
    {
        $config = [
            'exclusion_policy' => 'all',
            'documentation'    => '{@request:json_api}JSON API{@/request}{@request:rest}REST{@/request}'
        ];

        $this->context->getRequestType()->set(new RequestType([RequestType::JSON_API]));
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'documentation'    => 'JSON API'
            ],
            $this->context->getResult()
        );
    }

    public function testRequestDependedContentForFieldDescription()
    {
        $config = [
            'exclusion_policy' => 'all',
            'fields'           => [
                'field1' => [
                    'description' => '{@request:json_api}JSON API{@/request}{@request:rest}REST{@/request}'
                ]
            ]
        ];

        $this->context->getRequestType()->set(new RequestType([RequestType::JSON_API]));
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'fields'           => [
                    'field1' => [
                        'description' => 'JSON API'
                    ]
                ]
            ],
            $this->context->getResult()
        );
    }

    public function testRequestDependedContentForFilterDescription()
    {
        $filters = new FiltersConfig();
        $filter1 = $filters->addField('field1');
        $filter1->setDescription('{@request:json_api}JSON API{@/request}{@request:rest}REST{@/request}');

        $this->context->getRequestType()->set(new RequestType([RequestType::JSON_API]));
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject([]));
        $this->context->setFilters($filters);
        $this->processor->process($this->context);

        self::assertEquals('JSON API', $filter1->getDescription());
    }

    public function testPrimaryResourceDescriptionWhenItExistsInConfig()
    {
        $config = [
            'exclusion_policy' => 'all',
            'description'      => 'test description'
        ];

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'description'      => 'test description'
            ],
            $this->context->getResult()
        );
    }

    public function testSubresourceDescriptionWhenItExistsInConfig()
    {
        $config = [
            'exclusion_policy' => 'all',
            'description'      => 'test description'
        ];

        $this->context->setParentClassName('Test\Entity');
        $this->context->setAssociationName('testAssociation');
        $this->context->setTargetAction('get_subresource');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'description'      => 'test description'
            ],
            $this->context->getResult()
        );
    }

    public function testPrimaryResourceDescriptionWhenItIsLabelObject()
    {
        $config = [
            'exclusion_policy' => 'all',
            'description'      => new Label('description_label')
        ];

        $this->translator->expects(self::once())
            ->method('trans')
            ->with('description_label')
            ->willReturn('translated description');

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'description'      => 'translated description'
            ],
            $this->context->getResult()
        );
    }

    public function testSubresourceDescriptionWhenItIsLabelObject()
    {
        $config = [
            'exclusion_policy' => 'all',
            'description'      => new Label('description_label')
        ];

        $this->translator->expects(self::once())
            ->method('trans')
            ->with('description_label')
            ->willReturn('translated description');

        $this->context->setParentClassName('Test\Entity');
        $this->context->setAssociationName('testAssociation');
        $this->context->setTargetAction('get_subresource');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'description'      => 'translated description'
            ],
            $this->context->getResult()
        );
    }

    public function testPrimaryResourceDescriptionLoadedByEntityDocProvider()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get';
        $config = [
            'exclusion_policy' => 'all'
        ];
        $entityDescription = 'some entity';
        $actionDescription = 'Get some entity';

        $this->entityDocProvider->expects(self::once())
            ->method('getEntityDescription')
            ->with($entityClass)
            ->willReturn($entityDescription);
        $this->resourceDocProvider->expects(self::once())
            ->method('getResourceDescription')
            ->with($targetAction, $entityDescription)
            ->willReturn($actionDescription);

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'description'      => $actionDescription
            ],
            $this->context->getResult()
        );
    }

    public function testSubresourceDescriptionLoadedByEntityDocProvider()
    {
        $parentEntityClass = 'Test\Entity';
        $associationName = 'testAssociation';
        $targetAction = 'get_subresource';
        $config = [
            'exclusion_policy' => 'all'
        ];
        $associationDescription = 'test association';
        $subresourceDescription = 'Get test association';

        $this->entityDocProvider->expects(self::once())
            ->method('humanizeAssociationName')
            ->with($associationName)
            ->willReturn($associationDescription);
        $this->resourceDocProvider->expects(self::once())
            ->method('getSubresourceDescription')
            ->with($targetAction, $associationDescription, false)
            ->willReturn($subresourceDescription);

        $this->context->setParentClassName($parentEntityClass);
        $this->context->setAssociationName($associationName);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'description'      => $subresourceDescription
            ],
            $this->context->getResult()
        );
    }

    public function testPrimaryResourceDescriptionLoadedByEntityDocProviderForCollectionResource()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy' => 'all'
        ];
        $entityDescription = 'some entities';
        $actionDescription = 'Get list of some entities';

        $this->entityDocProvider->expects(self::once())
            ->method('getEntityPluralDescription')
            ->with($entityClass)
            ->willReturn($entityDescription);
        $this->resourceDocProvider->expects(self::once())
            ->method('getResourceDescription')
            ->with($targetAction, $entityDescription)
            ->willReturn($actionDescription);

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setIsCollection(true);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'description'      => $actionDescription
            ],
            $this->context->getResult()
        );
    }

    public function testSubresourceDescriptionLoadedByEntityDocProviderForCollectionResource()
    {
        $parentEntityClass = 'Test\Entity';
        $associationName = 'testAssociation';
        $targetAction = 'get_subresource';
        $config = [
            'exclusion_policy' => 'all'
        ];
        $associationDescription = 'test association';
        $subresourceDescription = 'Get test association';

        $this->entityDocProvider->expects(self::once())
            ->method('humanizeAssociationName')
            ->with($associationName)
            ->willReturn($associationDescription);
        $this->resourceDocProvider->expects(self::once())
            ->method('getSubresourceDescription')
            ->with($targetAction, $associationDescription, true)
            ->willReturn($subresourceDescription);

        $this->context->setParentClassName($parentEntityClass);
        $this->context->setAssociationName($associationName);
        $this->context->setTargetAction($targetAction);
        $this->context->setIsCollection(true);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'description'      => $subresourceDescription
            ],
            $this->context->getResult()
        );
    }

    public function testPrimaryResourceRegisterDocumentationResources()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy'       => 'all',
            'documentation_resource' => ['foo_file.md', 'bar_file.md']
        ];
        $actionDocumentation = 'action description';

        $this->apiDocParser->expects(self::at(0))
            ->method('parseDocumentationResource')
            ->with('foo_file.md');
        $this->apiDocParser->expects(self::at(1))
            ->method('parseDocumentationResource')
            ->with('bar_file.md');
        $this->apiDocParser->expects(self::at(2))
            ->method('getActionDocumentation')
            ->with($entityClass, $targetAction)
            ->willReturn($actionDocumentation);

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy'       => 'all',
                'documentation_resource' => ['foo_file.md', 'bar_file.md'],
                'documentation'          => $actionDocumentation
            ],
            $this->context->getResult()
        );
    }

    public function testSubresourceRegisterDocumentationResources()
    {
        $parentEntityClass = 'Test\Entity';
        $associationName = 'testAssociation';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy'       => 'all',
            'documentation_resource' => ['documentation.md']
        ];
        $subresourceDocumentation = 'subresurce description';

        $this->apiDocParser->expects(self::once())
            ->method('parseDocumentationResource')
            ->with('documentation.md');
        $this->apiDocParser->expects(self::once())
            ->method('getSubresourceDocumentation')
            ->with($parentEntityClass, $associationName, $targetAction)
            ->willReturn($subresourceDocumentation);

        $this->context->setParentClassName($parentEntityClass);
        $this->context->setAssociationName($associationName);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy'       => 'all',
                'documentation_resource' => ['documentation.md'],
                'documentation'          => $subresourceDocumentation
            ],
            $this->context->getResult()
        );
    }

    public function testPrimaryResourceDocumentationWhenItExistsInConfig()
    {
        $config = [
            'exclusion_policy' => 'all',
            'documentation'    => 'test documentation'
        ];

        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'documentation'    => 'test documentation'
            ],
            $this->context->getResult()
        );
    }

    public function testSubresourceDocumentationWhenItExistsInConfig()
    {
        $config = [
            'exclusion_policy' => 'all',
            'documentation'    => 'test documentation'
        ];

        $this->context->setParentClassName('Test\Entity');
        $this->context->setAssociationName('testAssociation');
        $this->context->setTargetAction('get_subresource');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'documentation'    => 'test documentation'
            ],
            $this->context->getResult()
        );
    }

    public function testPrimaryResourceDocumentationWithInheritDocPlaceholder()
    {
        $entityClass = 'Test\Entity';
        $config = [
            'exclusion_policy' => 'all',
            'documentation'    => 'action documentation. {@inheritdoc}'
        ];

        $this->entityDocProvider->expects(self::once())
            ->method('getEntityDocumentation')
            ->with($entityClass)
            ->willReturn('entity documentation');

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction('get_list');
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'documentation'    => 'action documentation. entity documentation'
            ],
            $this->context->getResult()
        );
    }

    public function testPrimaryResourceDocumentationLoadedByResourceDocProvider()
    {
        $entityClass = 'Test\Entity';
        $targetAction = 'get_list';
        $config = [
            'exclusion_policy' => 'all'
        ];
        $entityDescription = 'some entity';
        $resourceDocumentation = 'Get some entity';

        $this->entityDocProvider->expects(self::once())
            ->method('getEntityDescription')
            ->with($entityClass)
            ->willReturn($entityDescription);
        $this->resourceDocProvider->expects(self::once())
            ->method('getResourceDocumentation')
            ->with($targetAction, $entityDescription)
            ->willReturn($resourceDocumentation);

        $this->context->setClassName($entityClass);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'documentation'    => $resourceDocumentation
            ],
            $this->context->getResult()
        );
    }

    public function testSubresourceDocumentationLoadedByResourceDocProvider()
    {
        $parentEntityClass = 'Test\Entity';
        $associationName = 'testAssociation';
        $targetAction = 'get_subresource';
        $config = [
            'exclusion_policy' => 'all'
        ];
        $associationDescription = 'test association';
        $subresourceDocumentation = 'Get test association';

        $this->entityDocProvider->expects(self::once())
            ->method('humanizeAssociationName')
            ->with($associationName)
            ->willReturn($associationDescription);
        $this->resourceDocProvider->expects(self::once())
            ->method('getSubresourceDocumentation')
            ->with($targetAction, $associationDescription, false)
            ->willReturn($subresourceDocumentation);

        $this->context->setParentClassName($parentEntityClass);
        $this->context->setAssociationName($associationName);
        $this->context->setTargetAction($targetAction);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'documentation'    => $subresourceDocumentation
            ],
            $this->context->getResult()
        );
    }

    public function testSubresourceDocumentationLoadedByResourceDocProviderForCollectionResource()
    {
        $parentEntityClass = 'Test\Entity';
        $associationName = 'testAssociation';
        $targetAction = 'get_subresource';
        $config = [
            'exclusion_policy' => 'all'
        ];
        $associationDescription = 'test association';
        $subresourceDocumentation = 'Get test association';

        $this->entityDocProvider->expects(self::once())
            ->method('humanizeAssociationName')
            ->with($associationName)
            ->willReturn($associationDescription);
        $this->resourceDocProvider->expects(self::once())
            ->method('getSubresourceDocumentation')
            ->with($targetAction, $associationDescription, true)
            ->willReturn($subresourceDocumentation);

        $this->context->setParentClassName($parentEntityClass);
        $this->context->setAssociationName($associationName);
        $this->context->setTargetAction($targetAction);
        $this->context->setIsCollection(true);
        $this->context->setResult($this->createConfigObject($config));
        $this->processor->process($this->context);

        $this->assertConfig(
            [
                'exclusion_policy' => 'all',
                'documentation'    => $subresourceDocumentation
            ],
            $this->context->getResult()
        );
    }
}
