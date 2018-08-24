<?php

namespace Oro\Bundle\ShippingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\ProductBundle\Formatter\UnitLabelFormatter;
use Oro\Bundle\ShippingBundle\Provider\MeasureUnitProvider;

abstract class AbstractShippingOptionSelectType extends AbstractType
{
    const NAME = '';

    /** @var MeasureUnitProvider */
    protected $unitProvider;

    /** @var UnitLabelFormatter */
    protected $formatter;

    /** @var string */
    protected $entityClass;

    /**
     * @param MeasureUnitProvider $unitProvider
     * @param UnitLabelFormatter $formatter
     */
    public function __construct(MeasureUnitProvider $unitProvider, UnitLabelFormatter $formatter)
    {
        $this->unitProvider = $unitProvider;
        $this->formatter = $formatter;
    }

    /**
     * @param string $entityClass
     */
    public function setEntityClass($entityClass)
    {
        $this->entityClass = $entityClass;
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        /** @var ChoiceView $choice */
        foreach ($view->vars['choices'] as $choice) {
            $choice->label = $this->formatter->format($choice->data->getCode(), $options['compact']);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'class' => $this->entityClass,
                'property' => 'code',
                'compact' => false,
                'full_list' => false,
                'choices' => null,
            ]
        )
        ->setAllowedTypes('compact', ['bool'])
        ->setAllowedTypes('full_list', ['bool'])
        ->setNormalizer(
            'choices',
            function (Options $options, $value) {
                if (null !== $value) {
                    return $value;
                }

                return $this->unitProvider->getUnits(!$options['full_list']);
            }
        );

        $resolver->setNormalizer(
            'choice_label',
            function (Options $options) {
                $choices = $options->offsetGet('choices');

                if ($choices) {
                    return function ($choice, $key) use ($choices) {
                        return $key;
                    };
                }
                return;
            }
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return static::NAME;
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
    public function getParent()
    {
        return 'entity';
    }
}
