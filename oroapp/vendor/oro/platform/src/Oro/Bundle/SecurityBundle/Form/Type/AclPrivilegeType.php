<?php

namespace Oro\Bundle\SecurityBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class AclPrivilegeType extends AbstractType
{
    const NAME = 'oro_acl_privilege';

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'identity',
            new AclPrivilegeIdentityType(),
            array(
                'required' => false,
            )
        );

        $builder->add(
            'permissions',
            PermissionCollectionType::NAME,
            array(
                'type' => new AclPermissionType(),
                'allow_add' => true,
                'prototype' => false,
                'allow_delete' => false,
                'options' => array(
                    'privileges_config' => $options['privileges_config']
                ),
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['privileges_config'] = $options['privileges_config'];
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'privileges_config' => array(),
                'data_class' => 'Oro\Bundle\SecurityBundle\Model\AclPrivilege',
            )
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
}
