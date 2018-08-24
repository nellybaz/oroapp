<?php

namespace Oro\Bundle\HangoutsCallBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UseHangoutCheckboxType extends AbstractType
{
    const NAME = 'oro_hangouts_call_use_hangout_checkbox_type';

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'checkbox';
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(['tooltip' => 'oro.calendar.calendarevent.use_hangout.tooltip']);
    }
}
