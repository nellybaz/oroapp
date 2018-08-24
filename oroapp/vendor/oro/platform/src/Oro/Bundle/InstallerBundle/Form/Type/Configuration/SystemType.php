<?php

namespace Oro\Bundle\InstallerBundle\Form\Type\Configuration;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class SystemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'oro_installer_locale',
                'locale',
                array(
                    'label'             => 'form.configuration.system.locale',
                    'preferred_choices' => array('en'),
                    'constraints'       => array(
                        new Assert\NotBlank(),
                        new Assert\Locale(),
                    ),
                    'client_validation'  => false,
                )
            )
            ->add(
                'oro_installer_secret',
                'text',
                array(
                    'label'             => 'form.configuration.system.secret',
                    'data'              => md5(uniqid()),
                    'constraints'       => array(
                        new Assert\NotBlank(),
                    )
                )
            );
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oro_installer_configuration_system';
    }
}
