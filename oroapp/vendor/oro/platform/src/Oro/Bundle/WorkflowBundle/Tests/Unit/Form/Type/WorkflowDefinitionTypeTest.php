<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Form\Type;

use Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider;
use Oro\Bundle\FormBundle\Form\Extension\TooltipFormExtension;
use Oro\Bundle\FormBundle\Form\Type\OroChoiceType;
use Oro\Bundle\FormBundle\Form\Type\OroIconType;
use Oro\Bundle\TranslationBundle\Translation\Translator;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;
use Oro\Bundle\WorkflowBundle\Form\Type\ApplicableEntitiesType;
use Oro\Bundle\WorkflowBundle\Form\Type\WorkflowDefinitionType;
use Oro\Bundle\WorkflowBundle\Provider\WorkflowDefinitionChoicesGroupProvider;
use Oro\Bundle\WorkflowBundle\Tests\Unit\Form\Type\Stub\ApplicableEntitiesTypeStub;
use Oro\Bundle\WorkflowBundle\Tests\Unit\Form\Type\Stub\OroIconTypeStub;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WorkflowDefinitionTypeTest extends FormIntegrationTestCase
{
    /** @var WorkflowDefinitionType */
    protected $formType;

    protected function setUp()
    {
        parent::setUp();

        $choicesProvider = $this->createMock(WorkflowDefinitionChoicesGroupProvider::class);
        $this->formType = new WorkflowDefinitionType($choicesProvider);
    }

    protected function tearDown()
    {
        unset($this->formType);

        parent::tearDown();
    }

    /**
     * @dataProvider submitDataProvider
     *
     * @param array $fields
     * @param array $submittedData
     * @param array $expectedData
     */
    public function testSubmit(array $fields, array $submittedData, array $expectedData)
    {
        $form = $this->factory->create($this->formType);

        foreach ($fields as $field => $options) {
            $this->assertTrue($form->has($field));
            $config = $form->get($field)->getConfig();

            foreach ($options as $option => $value) {
                $this->assertEquals($value, $config->getOption($option));
            }
        }

        $form->submit($submittedData);
        $this->assertTrue($form->isValid());

        foreach ($expectedData as $field => $data) {
            $this->assertTrue($form->has($field));
            $this->assertEquals($data, $form->get($field)->getData());
        }
    }

    /**
     * @return array
     */
    public function submitDataProvider()
    {
        return [
            [
                'fields' => [
                    'label' => ['required' => true],
                    'related_entity' => ['required' => true],
                    'steps_display_ordered' => ['required' => false],
                    'transition_prototype_icon' => ['required' => false],
                    'exclusive_active_groups' => ['required' => false],
                    'exclusive_record_groups' => ['required' => false],
                ],
                'submittedData' => [
                    'label' => 'label',
                    'related_entity' => 'stdClass',
                    'steps_display_ordered' => true,
                    'transition_prototype_icon' => null,
                    'exclusive_active_groups' => [],
                    'exclusive_record_groups' => [],
                ],
                'expectedData' => [
                    'label' => 'label',
                    'related_entity' => 'stdClass',
                    'steps_display_ordered' => true,
                    'transition_prototype_icon' => null,
                    'exclusive_active_groups' => [],
                    'exclusive_record_groups' => [],
                ]
            ]
        ];
    }

    public function testConfigureOptions()
    {
        /* @var $resolver \PHPUnit_Framework_MockObject_MockObject|OptionsResolver */
        $resolver = $this->getMockBuilder(OptionsResolver::class)->disableOriginalConstructor()->getMock();
        $resolver->expects($this->once())->method('setDefaults')->with(['data_class' => WorkflowDefinition::class]);

        $this->formType->configureOptions($resolver);
    }

    public function testGetName()
    {
        $this->assertEquals(WorkflowDefinitionType::NAME, $this->formType->getName());
    }

    public function testGetBlockPrefix()
    {
        $this->assertEquals(WorkflowDefinitionType::NAME, $this->formType->getBlockPrefix());
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtensions()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|ConfigProvider $configProvider */
        $configProvider = $this->getMockBuilder(ConfigProvider::class)->disableOriginalConstructor()->getMock();

        /** @var \PHPUnit_Framework_MockObject_MockObject|Translator $translator */
        $translator = $this->getMockBuilder(Translator::class)->disableOriginalConstructor()->getMock();

        $choiceType = $this->getMockBuilder(OroChoiceType::class)
            ->setMethods(['configureOptions', 'getParent'])
            ->disableOriginalConstructor()
            ->getMock();
        $choiceType->expects($this->any())->method('getParent')->willReturn('choice');

        return array_merge(
            parent::getExtensions(),
            [
                new PreloadedExtension(
                    [
                        OroIconType::NAME => new OroIconTypeStub(),
                        OroChoiceType::NAME => $choiceType,
                        ApplicableEntitiesType::NAME => new ApplicableEntitiesTypeStub()
                    ],
                    [
                        'form' => [new TooltipFormExtension($configProvider, $translator)],
                    ]
                ),
                $this->getValidatorExtension(false)
            ]
        );
    }
}
