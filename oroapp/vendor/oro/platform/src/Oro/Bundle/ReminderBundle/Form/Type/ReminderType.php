<?php

namespace Oro\Bundle\ReminderBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReminderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'method',
            'oro_reminder_method',
            array(
                'required' => true,
                'attr'     => array('class' => 'method'),
            )
        );

        $builder->add(
            'interval',
            'oro_reminder_interval',
            array('required' => true)
        );
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class'           => 'Oro\\Bundle\\ReminderBundle\\Entity\\Reminder',
                'intention'            => 'reminder',
                'error_bubbling'       => false,
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
        return 'oro_reminder';
    }
}
