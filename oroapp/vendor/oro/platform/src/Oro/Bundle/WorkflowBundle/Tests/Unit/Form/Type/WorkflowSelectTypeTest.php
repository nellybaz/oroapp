<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Form\Type;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Test\FormIntegrationTestCase;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\EntityConfigBundle\Config\Id\EntityConfigId;

use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;
use Oro\Bundle\WorkflowBundle\Helper\WorkflowTranslationHelper;
use Oro\Bundle\WorkflowBundle\Form\Type\WorkflowSelectType;

class WorkflowSelectTypeTest extends FormIntegrationTestCase
{
    const TEST_ENTITY_CLASS   = 'Test\Entity\Class';
    const TEST_WORKFLOW_NAME  = 'test_workflow_name';
    const TEST_WORKFLOW_LABEL = 'Test Workflow Label';

    /** @var \PHPUnit_Framework_MockObject_MockObject|ManagerRegistry */
    protected $registry;

    /** @var WorkflowSelectType */
    protected $type;

    /** @var \PHPUnit_Framework_MockObject_MockObject|TranslatorInterface */
    protected $translator;

    protected function setUp()
    {
        parent::setUp();

        $this->registry = $this->getMockBuilder(ManagerRegistry::class)->disableOriginalConstructor()->getMock();

        $this->translator = $this->createMock('Symfony\Component\Translation\TranslatorInterface');

        $this->type = new WorkflowSelectType($this->registry, $this->translator);
    }

    protected function tearDown()
    {
        parent::tearDown();

        unset($this->registry, $this->type);
    }

    /**
     * @param array $inputOptions
     * @param array $expectedOptions
     * @dataProvider setDefaultOptionsDataProvider
     */
    public function testSetDefaultOptions(array $inputOptions, array $expectedOptions)
    {
        $testWorkflowDefinition = new WorkflowDefinition();
        $testWorkflowDefinition->setName(self::TEST_WORKFLOW_NAME)
            ->setLabel(self::TEST_WORKFLOW_LABEL);

        $repository = $this->getMockBuilder('Doctrine\ORM\EntityRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $repository->expects($this->any())
            ->method('findBy')
            ->with(['relatedEntity' => self::TEST_ENTITY_CLASS])
            ->will($this->returnValue([$testWorkflowDefinition]));

        $this->registry->expects($this->any())
            ->method('getRepository')
            ->with(WorkflowDefinition::class)
            ->will($this->returnValue($repository));

        $form = $this->factory->create($this->type, null, $inputOptions);

        $actualOptions = $form->getConfig()->getOptions();
        foreach ($expectedOptions as $name => $expectedValue) {
            $this->assertArrayHasKey($name, $actualOptions);
            $this->assertEquals($expectedValue, $actualOptions[$name]);
        }
    }

    /**
     * @return array
     */
    public function setDefaultOptionsDataProvider()
    {
        return [
            'no additional data' => [
                'inputOptions' => [],
                'expectedOptions' => [
                    'entity_class' => null,
                    'choices' => [],
                ]
            ],
            'custom choices' => [
                'inputOptions' => [
                    'choices' => ['key' => 'value']
                ],
                'expectedOptions' => [
                    'choices' => ['key' => 'value'],
                ]
            ],
            'custom entity class' => [
                'inputOptions' => [
                    'entity_class' => self::TEST_ENTITY_CLASS,
                ],
                'expectedOptions' => [
                    'entity_class' => self::TEST_ENTITY_CLASS,
                    'choices' => [self::TEST_WORKFLOW_NAME => self::TEST_WORKFLOW_LABEL],
                ]
            ],
            'parent configuration id' => [
                'inputOptions' => [
                    'config_id' => new EntityConfigId('test', self::TEST_ENTITY_CLASS),
                ],
                'expectedOptions' => [
                    'choices' => [self::TEST_WORKFLOW_NAME => self::TEST_WORKFLOW_LABEL],
                ]
            ],
        ];
    }

    public function testFinishView()
    {
        $label = 'test_label';
        $translatedLabel = 'translated_test_label';

        $view = new FormView();
        $view->vars['choices'] = [new ChoiceView([], 'test', $label)];

        $this->translator->expects($this->once())
            ->method('trans')
            ->with($label, [], WorkflowTranslationHelper::TRANSLATION_DOMAIN)
            ->willReturn($translatedLabel);

        $this->type->finishView($view, $this->createMock(FormInterface::class), []);

        $this->assertEquals([new ChoiceView([], 'test', $translatedLabel)], $view->vars['choices']);
    }
}
