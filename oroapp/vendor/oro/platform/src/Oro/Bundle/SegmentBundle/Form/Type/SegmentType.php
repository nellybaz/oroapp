<?php

namespace Oro\Bundle\SegmentBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\QueryDesignerBundle\Form\Type\AbstractQueryDesignerType;

class SegmentType extends AbstractQueryDesignerType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', ['required' => true])
            ->add('entity', 'oro_segment_entity_choice', ['required' => true])
            ->add(
                'type',
                'entity',
                [
                    'class'       => 'OroSegmentBundle:SegmentType',
                    'property'    => 'label',
                    'required'    => true,
                    'empty_value' => 'oro.segment.form.choose_segment_type',
                    'tooltip'     => 'oro.segment.type.tooltip_text'
                ]
            )
            ->add('recordsLimit', 'integer', ['required' => false])
            ->add('description', 'textarea', ['required' => false]);

        parent::buildForm($builder, $options);
    }

    /**
     * Gets the default options for this type.
     *
     * @return array
     */
    public function getDefaultOptions()
    {
        return [
            'column_column_field_choice_options' => [
                'exclude_fields' => ['relation_type'],
            ],
            'column_column_choice_type' => 'hidden',
            'filter_column_choice_type' => 'oro_entity_field_select'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $options = array_merge(
            $this->getDefaultOptions(),
            [
                'data_class'         => 'Oro\Bundle\SegmentBundle\Entity\Segment',
                'intention'          => 'segment',
                'query_type'         => 'segment',
            ]
        );

        $resolver->setDefaults($options);
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
        return 'oro_segment';
    }
}
