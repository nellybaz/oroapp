<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\FormBundle\Form\Type\OroChoiceType;
use Oro\Bundle\WorkflowBundle\Form\Type\WorkflowTransitionSelectType;
use Oro\Bundle\WorkflowBundle\Model\Transition;
use Oro\Bundle\WorkflowBundle\Model\TransitionManager;
use Oro\Bundle\WorkflowBundle\Helper\WorkflowTranslationHelper;
use Oro\Bundle\WorkflowBundle\Model\Workflow;
use Oro\Bundle\WorkflowBundle\Model\WorkflowRegistry;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;

class WorkflowTransitionSelectTypeTest extends FormIntegrationTestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject|WorkflowRegistry */
    protected $workflowRegistry;

    /** @var \PHPUnit_Framework_MockObject_MockObject|TranslatorInterface */
    protected $translator;

    /** @var WorkflowTransitionSelectType */
    protected $type;

    protected function setUp()
    {
        parent::setUp();

        $this->workflowRegistry = $this->createMock(WorkflowRegistry::class);
        $this->translator = $this->createMock(TranslatorInterface::class);

        $this->type = new WorkflowTransitionSelectType($this->workflowRegistry, $this->translator);
    }

    public function testSubmit()
    {
        $transition = $this->getTransition('transition_name', 'transition_label');

        $transitionManager = $this->createMock(TransitionManager::class);
        $transitionManager->expects($this->once())
            ->method('getTransitions')
            ->willReturn([$transition]);

        $workflow = $this->createMock(Workflow::class);
        $workflow->expects($this->once())
            ->method('getTransitionManager')
            ->willReturn($transitionManager);

        $this->workflowRegistry->expects($this->once())
            ->method('getWorkflow')
            ->with('test_workflow')
            ->willReturn($workflow);

        $form = $this->factory->create($this->type, null, ['workflowName' => 'test_workflow']);

        $this->assertFormOptionEqual([$transition->getName() => $transition->getLabel()], 'choices', $form);
        $this->assertNull($form->getData());

        $form->submit($transition->getName());

        $this->assertFormIsValid($form);
        $this->assertEquals($transition->getName(), $form->getData());
    }

    public function testGetName()
    {
        $this->assertEquals(WorkflowTransitionSelectType::NAME, $this->type->getName());
    }

    public function testConfigureOptions()
    {
        /** @var OptionsResolver|\PHPUnit_Framework_MockObject_MockObject $resolver */
        $resolver = $this->createMock(OptionsResolver::class);
        $resolver->expects($this->once())->method('setDefined')->with('workflowName');
        $resolver->expects($this->once())->method('setAllowedTypes')->with('workflowName', ['string', 'null']);
        $resolver->expects($this->once())->method('setNormalizer')->with('choices');

        $this->type->configureOptions($resolver);
    }

    public function testGetParent()
    {
        $this->assertEquals(OroChoiceType::NAME, $this->type->getParent());
    }

    /**
     * @dataProvider incorrectOptionsDataProvider
     *
     * @param array $options
     * @param string $exceptionMessage
     *
     * @expectedException \InvalidArgumentException
     */
    public function testNormalizersException(array $options, $exceptionMessage)
    {
        $this->expectExceptionMessage($exceptionMessage);

        $this->factory->create($this->type, null, $options);
    }

    /**
     * @return array
     */
    public function incorrectOptionsDataProvider()
    {
        return [
            'empty options' => [
                'options' => [],
                'exceptionMessage' => 'The required option "workflowName" is missing',
            ],
            'wrong options' => [
                'options' => ['workflowName' => new \stdClass()],
                'exceptionMessage' => 'The option "workflowName" with value stdClass is expected to be of type ' .
                    '"string" or "null", but is of type "stdClass"',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtensions()
    {
        $choiceType = $this->getMockBuilder(OroChoiceType::class)
            ->setMethods(['configureOptions', 'getParent'])
            ->disableOriginalConstructor()
            ->getMock();
        $choiceType->expects($this->any())->method('getParent')->willReturn('choice');

        return [
            new PreloadedExtension(['oro_choice' => $choiceType], [])
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

        $this->assertEquals([new ChoiceView([], 'test', "$translatedLabel (test)")], $view->vars['choices']);
    }

    /**
     * @param string $name
     * @param string $label
     * @return Transition|\PHPUnit_Framework_MockObject_MockObject
     */
    private function getTransition($name, $label)
    {
        $transition = $this->createMock(Transition::class);
        $transition->expects($this->any())->method('getName')->willReturn($name);
        $transition->expects($this->any())->method('getLabel')->willReturn($label);

        return $transition;
    }
}
