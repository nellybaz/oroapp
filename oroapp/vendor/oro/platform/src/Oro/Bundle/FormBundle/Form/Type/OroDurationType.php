<?php

namespace Oro\Bundle\FormBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\FormBundle\Form\DataTransformer\DurationToStringTransformer;

/**
 * Duration field type
 * Accepts numeric values (seconds), JIRA style (##h ##m ##s) and column style (##:##:##) duration encodings.
 *
 * @see DurationToStringTransformer for more details
 */
class OroDurationType extends AbstractType
{
    const NAME = 'oro_duration';

    const VALIDATION_REGEX_JIRA   = '/^
                                    (?:(?:(\d+(?:[\.,]\d{0,2})?)?)h
                                    (?:[\s]*|$))?(?:(?:(\d+(?:[\.,]\d{0,2})?)?)m
                                    (?:[\s]*|$))?(?:(?:(\d+(?:[\.,]\d{0,2})?)?)s?)?
                                    $/ix';

    const VALIDATION_REGEX_COLUMN = '/^
                                    ((\d{1,3}:)?\d{1,3}:)?\d{1,3}
                                    $/ix';

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new DurationToStringTransformer());
        // We need to validate user input before it is passed to the model transformer
        $builder->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'preSubmit']);
    }

    /**
     * Event listener callback to handle validation before data is submitted.
     *
     * @param FormEvent $event
     */
    public function preSubmit(FormEvent $event)
    {
        if ($this->isValidDuration($event->getData())) {
            return;
        }
        $event->getForm()->addError(new FormError('Value is not in a valid duration format'));
    }

    /**
     * Checks whether string is in a recognizable duration format
     *
     * @param string $value
     * @return bool
     */
    protected function isValidDuration($value)
    {
        return preg_match(self::VALIDATION_REGEX_JIRA, $value) ||
               preg_match(self::VALIDATION_REGEX_COLUMN, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'tooltip' => 'oro.form.oro_duration.tooltip',
                'type' => 'text',
                'validation_groups' => false, // disable frontend validators, we validate before submit
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
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'text';
    }
}
