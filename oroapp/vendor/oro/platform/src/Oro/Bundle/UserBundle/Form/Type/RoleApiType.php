<?php

namespace Oro\Bundle\UserBundle\Form\Type;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;

use Oro\Bundle\SoapBundle\Form\EventListener\PatchSubscriber;

class RoleApiType extends AclRoleType
{
    public function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'label',
            'text',
            array(
                'required' => true,
                'label' => 'oro.user.role.label.label'
            )
        );

        $builder->add(
            'appendUsers',
            'oro_entity_identifier',
            array(
                'class'    => 'OroUserBundle:User',
                'required' => false,
                'mapped'   => false,
                'multiple' => true,
            )
        );

        $builder->add(
            'removeUsers',
            'oro_entity_identifier',
            array(
                'class'    => 'OroUserBundle:User',
                'required' => false,
                'mapped'   => false,
                'multiple' => true,
            )
        );
    }


    /**
     * {@inheritdoc}
     */
    public function addEntityFields(FormBuilderInterface $builder)
    {
        $builder->addEventSubscriber(new PatchSubscriber());
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(['csrf_protection' => false]);
    }

    /**
     * {@inheritdoc}
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
        return 'role';
    }
}
