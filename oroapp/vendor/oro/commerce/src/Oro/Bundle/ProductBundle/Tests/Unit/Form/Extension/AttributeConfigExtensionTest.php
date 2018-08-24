<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Form\Extension;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\EntityBundle\EntityConfig\DatagridScope;
use Oro\Bundle\EntityConfigBundle\Config\ConfigInterface;
use Oro\Bundle\EntityConfigBundle\Config\ConfigManager;
use Oro\Bundle\EntityConfigBundle\Config\Id\FieldConfigId;
use Oro\Bundle\EntityConfigBundle\Entity\EntityConfigModel;
use Oro\Bundle\EntityConfigBundle\Entity\FieldConfigModel;
use Oro\Bundle\EntityConfigBundle\Form\Type\ConfigType;
use Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider;
use Oro\Bundle\EntityConfigBundle\Provider\PropertyConfigContainer;
use Oro\Bundle\EntityConfigBundle\Translation\ConfigTranslationHelper;
use Oro\Bundle\FormBundle\Form\Extension\DataBlockExtension;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Form\Extension\AttributeConfigExtension;
use Oro\Bundle\TranslationBundle\Translation\Translator;

use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;

class AttributeConfigExtensionTest extends FormIntegrationTestCase
{
    use EntityTrait;

    /** @var ConfigProvider|\PHPUnit_Framework_MockObject_MockObject */
    protected $attributeConfigProvider;

    /** @var TranslatorInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $translator;

    /** @var ConfigInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $config;

    protected function setUp()
    {
        $this->attributeConfigProvider = $this->createMock(ConfigProvider::class);

        $this->translator = $this->createMock(TranslatorInterface::class);
        $this->translator->expects($this->any())->method('trans')->willReturnArgument(0);

        parent::setUp();
    }

    /**
     * @dataProvider configProvider
     *
     * @param array $datagrid
     * @param array $attribute
     * @param array $expected
     */
    public function testBuildForm(array $datagrid, array $attribute, array $expected)
    {
        $this->config->expects($this->any())
            ->method('all')
            ->willReturn(
                $attribute,
                $datagrid
            );

        $form = $this->factory->create('oro_entity_config_type', null, [
            'config_model' => $this->getEntity(FieldConfigModel::class, [
                'entity' => new EntityConfigModel(Product::class)
            ])
        ]);

        $data = $form->getData();

        $this->assertEquals($expected, $data['datagrid']);
    }

    public function testBuildFormWithExistedFieldConfigModel()
    {
        $this->config->expects($this->any())
            ->method('all')
            ->willReturn(
                ['is_attribute' => true],
                ['is_visible' => DatagridScope::IS_VISIBLE_TRUE]
            );

        $form = $this->factory->create('oro_entity_config_type', null, [
            'config_model' => $this->getEntity(FieldConfigModel::class, [
                'id' => 1,
                'entity' => new EntityConfigModel(Product::class)
            ])
        ]);

        $data = $form->getData();

        $this->assertEquals(DatagridScope::IS_VISIBLE_TRUE, $data['datagrid']['is_visible']);
    }

    public function testBuildFormWithoutDefaultValue()
    {
        $this->config->expects($this->any())
            ->method('all')
            ->willReturn(
                ['is_attribute' => true],
                []
            );

        $form = $this->factory->create('oro_entity_config_type', null, [
            'config_model' => $this->getEntity(FieldConfigModel::class, [
                'entity' => new EntityConfigModel(Product::class)
            ])
        ]);

        $data = $form->getData();

        $this->assertArrayNotHasKey('is_visible', $data['datagrid']);
    }

    public function testGetExtendedType()
    {
        $extension = new AttributeConfigExtension($this->attributeConfigProvider, $this->translator);
        $this->assertEquals('oro_entity_config_type', $extension->getExtendedType());
    }

    public function testFinishViewNotApplicable()
    {
        /** @var FormView|\PHPUnit_Framework_MockObject_MockObject $view */
        $view = $this->createMock(FormView::class);
        $view->expects($this->never())->method($this->anything());

        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $form */
        $form = $this->createMock(FormInterface::class);
        $form->expects($this->never())->method($this->anything());

        $this->assertConfigProviderCalled(true, false);

        $extension = new AttributeConfigExtension($this->attributeConfigProvider, $this->translator);
        $extension->finishView($view, $form, ['config_model' => $this->getFieldConfigModel()]);
    }

    /**
     * @return FieldConfigModel
     */
    protected function getFieldConfigModel()
    {
        $fieldConfigModel = new FieldConfigModel('test', 'string');
        $fieldConfigModel->setEntity(new EntityConfigModel(\stdClass::class));

        return $fieldConfigModel;
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testFinishView()
    {
        $child1 = new FormView();

        $blockConfig = [
            'general' => [
                'title' => 'General',
                'priority' => 10,
                'subblocks' => []
            ]
        ];
        $attributeBlockConfig = [
            'attribute' => [
                'title' => 'Attribute',
                'priority' => 20,
                'subblocks' => ['attribute_config']
            ]
        ];
        $backendBlockConfig = [
            'other' => [
                'title' => 'Other',
                'priority' => 30,
                'subblocks' => []
            ]
        ];

        $child2 = new FormView();
        $child2->vars['block'] = 'general';
        $child2->vars['block_config'] = $blockConfig;

        $child3 = new FormView();
        $child3->vars['block'] = 'attribute';
        $child3->vars['block_config'] = $attributeBlockConfig;

        $child4 = new FormView();
        $child4->vars['block'] = 'other';
        $child4->vars['block_config'] = $backendBlockConfig;

        $view = new FormView();
        $view->children[] = $child1;
        $view->children[] = $child2;
        $view->children[] = $child3;
        $view->children[] = $child4;

        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $form */
        $form = $this->createMock(FormInterface::class);
        $form->expects($this->never())->method($this->anything());

        $this->assertConfigProviderCalled(true, true);

        $extension = new AttributeConfigExtension($this->attributeConfigProvider, $this->translator);
        $extension->finishView($view, $form, ['config_model' => $this->getFieldConfigModel()]);

        // check that block configurations of child1 is empty
        $this->assertArrayNotHasKey('block', $child1->vars);
        $this->assertArrayNotHasKey('subblock', $child1->vars);
        $this->assertArrayNotHasKey('block_config', $child1->vars);

        // check that block configurations of child2 not changed
        $this->assertArrayHasKey('block', $child2->vars);
        $this->assertEquals('general', $child2->vars['block']);
        $this->assertArrayNotHasKey('subblock', $child2->vars);
        $this->assertArrayHasKey('block_config', $child2->vars);
        $this->assertEquals($blockConfig, $child2->vars['block_config']);

        // check that block configurations of child3 changed for frontend
        $this->assertArrayHasKey('block', $child3->vars);
        $this->assertEquals('frontend', $child3->vars['block']);
        $this->assertArrayNotHasKey('subblock', $child3->vars);
        $this->assertArrayHasKey('block_config', $child3->vars);
        $this->assertEquals(
            [
                'frontend' => [
                    'title' => 'oro.product.entity_config.block_titles.frontend.label',
                    'priority' => 20,
                    'subblocks' => [
                        'attribute' => [
                            'title' => null,
                            'priority' => 20,
                            'subblocks' => ['attribute_config']
                        ]
                    ]
                ]
            ],
            $child3->vars['block_config']
        );

        // check that block configurations of child4 changed for backend
        $this->assertArrayHasKey('block', $child4->vars);
        $this->assertEquals('backend', $child4->vars['block']);
        $this->assertArrayHasKey('subblock', $child4->vars);
        $this->assertEquals('other', $child4->vars['subblock']);
        $this->assertArrayHasKey('block_config', $child4->vars);
        $this->assertEquals(
            [
                'backend' => [
                    'title' => 'oro.product.entity_config.block_titles.backend.label',
                    'priority' => 10,
                    'subblocks' => $backendBlockConfig
                ]
            ],
            $child4->vars['block_config']
        );
    }

    /**
     * @return array
     */
    public function configProvider()
    {
        return [
            'is attribute with default value' => [
                'datagrid' => [
                    'is_visible' => DatagridScope::IS_VISIBLE_TRUE
                ],
                'attribute' => [
                    'is_attribute' => true
                ],
                'expected datagrid' => [
                    'is_visible' => DatagridScope::IS_VISIBLE_HIDDEN
                ]
            ],
            'is attribute without default value' => [
                'datagrid' => [],
                'attribute' => [
                    'is_attribute' => true
                ],
                'expected datagrid' => []
            ]
        ];
    }

    /**
     * @param bool $hasAttributes
     * @param bool $isAttribute
     */
    protected function assertConfigProviderCalled($hasAttributes, $isAttribute)
    {
        $entityConfig = $this->createMock(ConfigInterface::class);
        $entityConfig->expects($this->any())->method('is')->with('has_attributes')->willReturn($hasAttributes);

        $fieldConfig = $this->createMock(ConfigInterface::class);
        $fieldConfig->expects($this->any())->method('is')->with('is_attribute')->willReturn($isAttribute);

        $this->attributeConfigProvider->expects($this->atLeastOnce())
            ->method('getConfig')
            ->willReturnMap(
                [
                    [\stdClass::class, null, $entityConfig],
                    [\stdClass::class, 'test', $fieldConfig]
                ]
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtensions()
    {
        $this->config = $this->createMock(ConfigInterface::class);
        $this->config->expects($this->any())->method('get')->willReturn([]);

        $fieldConfigId = new FieldConfigId('extend', Product::class, 'test');

        $propertyConfig = $this->createMock(PropertyConfigContainer::class);
        $propertyConfig->expects($this->any())->method('hasForm')->willReturn(true);
        $propertyConfig->expects($this->any())->method('getFormItems')->willReturn([]);
        $propertyConfig->expects($this->any())->method('getTranslatableValues')->willReturn([]);

        /** @var ConfigProvider|\PHPUnit_Framework_MockObject_MockObject $attributeProvider */
        $attributeProvider = $this->createMock(ConfigProvider::class);
        $attributeProvider->expects($this->any())->method('getPropertyConfig')->willReturn($propertyConfig);
        $attributeProvider->expects($this->any())->method('getScope')->willReturn('attribute');
        $attributeProvider->expects($this->any())->method('getId')->willReturn($fieldConfigId);

        /** @var ConfigProvider|\PHPUnit_Framework_MockObject_MockObject $datagridProvider */
        $datagridProvider = $this->createMock(ConfigProvider::class);
        $datagridProvider->expects($this->any())->method('getPropertyConfig')->willReturn($propertyConfig);
        $datagridProvider->expects($this->any())->method('getScope')->willReturn('datagrid');
        $datagridProvider->expects($this->any())->method('getId')->willReturn($fieldConfigId);

        /** @var ConfigProvider|\PHPUnit_Framework_MockObject_MockObject $configProvider */
        $configProvider = $this->createMock(ConfigProvider::class);
        $configProvider->expects($this->any())->method('getConfigById')->willReturn($this->config);

        /** @var ConfigManager|\PHPUnit_Framework_MockObject_MockObject $configManager */
        $configManager = $this->createMock(ConfigManager::class);
        $configManager->expects($this->any())->method('getProvider')->willReturn($configProvider);
        $configManager->expects($this->any())->method('getConfig')->willReturn($this->config);
        $configManager->expects($this->any())->method('getConfigIdByModel')->willReturn($fieldConfigId);
        $configManager->expects($this->any())->method('getProviders')->willReturn([
            $attributeProvider,
            $datagridProvider
        ]);

        /** @var ConfigTranslationHelper|\PHPUnit_Framework_MockObject_MockObject $translatorHelper */
        $translatorHelper = $this->createMock(ConfigTranslationHelper::class);
        /** @var Translator|\PHPUnit_Framework_MockObject_MockObject $translator */
        $translator = $this->createMock(Translator::class);

        return [
            new PreloadedExtension(
                [
                    'oro_entity_config_type' => new ConfigType($translatorHelper, $configManager, $translator),
                ],
                [
                    'oro_entity_config_type' => [
                        new AttributeConfigExtension($this->attributeConfigProvider, $this->translator)
                    ],
                    'form' => [new DataBlockExtension()]
                ]
            ),
        ];
    }
}
