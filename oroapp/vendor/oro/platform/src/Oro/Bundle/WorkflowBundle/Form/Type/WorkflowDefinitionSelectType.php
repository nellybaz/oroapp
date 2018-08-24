<?php

namespace Oro\Bundle\WorkflowBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\WorkflowBundle\Model\Workflow;
use Oro\Bundle\WorkflowBundle\Model\WorkflowRegistry;
use Oro\Bundle\WorkflowBundle\Helper\WorkflowTranslationHelper;

class WorkflowDefinitionSelectType extends AbstractType
{
    const NAME = 'oro_workflow_definition_select';

    /** @var WorkflowRegistry */
    protected $workflowRegistry;

    /** @var TranslatorInterface */
    protected $translator;

    /**
     * @param WorkflowRegistry $workflowRegistry
     * @param TranslatorInterface $translator
     */
    public function __construct(WorkflowRegistry $workflowRegistry, TranslatorInterface $translator)
    {
        $this->workflowRegistry = $workflowRegistry;
        $this->translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefined(['workflow_entity_class', 'workflow_name']);
        $resolver->setDefaults(
            [
                'class' => 'OroWorkflowBundle:WorkflowDefinition',
                'property' => 'label'
            ]
        );

        $resolver->setNormalizer(
            'choices',
            function (Options $options, $choices) {
                if (!empty($choices)) {
                    return $choices;
                }

                if (isset($options['workflow_name'])) {
                    $workflowName = $options['workflow_name'];
                    $workflows = [$this->workflowRegistry->getWorkflow($workflowName)];
                } elseif (isset($options['workflow_entity_class'])) {
                    $workflows = $this->workflowRegistry->getActiveWorkflowsByEntityClass(
                        $options['workflow_entity_class']
                    );
                } else {
                    throw new \InvalidArgumentException(
                        'Either "workflow_name" or "workflow_entity_class" must be set'
                    );
                }

                $definitions = [];

                /** @var Workflow[] $workflows */
                foreach ($workflows as $workflow) {
                    $definition = $workflow->getDefinition();

                    $definitions[$definition->getName()] = $definition;
                }

                return $definitions;
            }
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'entity';
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        /** @var ChoiceView $choiceView */
        foreach ($view->vars['choices'] as $choiceView) {
            $choiceView->label = $this->translator->trans(
                $choiceView->label,
                [],
                WorkflowTranslationHelper::TRANSLATION_DOMAIN
            );
        }
    }
}
