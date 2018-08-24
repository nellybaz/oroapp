<?php

namespace Oro\Bundle\CaseBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CaseCommentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'message',
            'textarea',
            [
                'label'     => 'oro.case.casecomment.message.label'
            ]
        );

        $builder->add(
            'public',
            'checkbox',
            [
                'label'     => 'oro.case.casecomment.public.label',
                'required'  => false,
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        if (isset($view->vars['public_field_hidden'])) {
            $publicFieldHidden = $view->vars['public_field_hidden'];
        } else {
            $publicFieldHidden = $options['public_field_hidden'];
        }

        if ($publicFieldHidden) {
            unset($view['public']);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            [
                'public_field_hidden'   => true,
                'data_class'            => 'Oro\\Bundle\\CaseBundle\\Entity\\CaseComment',
                'intention'             => 'oro_case_comment',
                'ownership_disabled'    => true,
            ]
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
        return 'oro_case_comment';
    }
}
