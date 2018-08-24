<?php

namespace Oro\Bundle\WorkflowBundle\Form\Type;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\EntityConfigBundle\Config\Id\ConfigIdInterface;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;
use Oro\Bundle\WorkflowBundle\Helper\WorkflowTranslationHelper;

class WorkflowSelectType extends AbstractType
{
    /**
     * @var ManagerRegistry
     */
    protected $registry;

    /** @var TranslatorInterface */
    protected $translator;

    /**
     * @param ManagerRegistry $registry
     * @param TranslatorInterface $translator
     */
    public function __construct(ManagerRegistry $registry, TranslatorInterface $translator)
    {
        $this->registry = $registry;
        $this->translator = $translator;
    }

    /**
     * {@inheritDoc}
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
        return 'oro_workflow_select';
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        return 'choice';
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'entity_class' => null,
                'config_id' => null, // can be extracted from parent form
            ]
        );

        $resolver->setNormalizer(
            'choices',
            function (Options $options, $value) {
                if (!empty($value)) {
                    return $value;
                }

                $entityClass = $options['entity_class'];
                if (!$entityClass && $options->has('config_id')) {
                    $configId = $options['config_id'];
                    if ($configId && $configId instanceof ConfigIdInterface) {
                        $entityClass = $configId->getClassName();
                    }
                }

                $choices = [];
                if ($entityClass) {
                    /** @var WorkflowDefinition[] $definitions */
                    $definitions = $this->registry->getRepository(WorkflowDefinition::class)
                        ->findBy(['relatedEntity' => $entityClass]);

                    foreach ($definitions as $definition) {
                        $name = $definition->getName();
                        $label = $definition->getLabel();
                        $choices[$name] = $label;
                    }
                }

                return $choices;
            }
        );
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
