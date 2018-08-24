<?php

namespace Oro\Bundle\CalendarBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\SoapBundle\Form\EventListener\PatchSubscriber;

class CalendarPropertyApiType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'hidden', ['mapped' => false])
            ->add(
                'targetCalendar',
                'oro_entity_identifier',
                [
                    'required' => true,
                    'class'    => 'OroCalendarBundle:Calendar',
                    'multiple' => false
                ]
            )
            ->add('calendarAlias', 'text', ['required' => true])
            ->add('calendar', 'integer', ['required' => true])
            ->add('position', 'integer', ['required' => false])
            ->add('visible', 'checkbox', ['required' => false])
            ->add('backgroundColor', 'text', ['required' => false]);

        $builder->addEventSubscriber(new PatchSubscriber());
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class'           => 'Oro\Bundle\CalendarBundle\Entity\CalendarProperty',
                'csrf_protection'      => false,
            ]
        );
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
        return 'oro_calendar_property_api';
    }
}
