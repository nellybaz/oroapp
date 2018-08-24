<?php

namespace Oro\Bundle\QueryDesignerBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;
use Oro\Bundle\QueryDesignerBundle\QueryDesigner\Manager;

class GroupingType extends AbstractType
{
    const NAME = 'oro_query_designer_grouping';

    /** @var Manager */
    protected $manager;

    /**
     * @param Manager $manager
     */
    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $options = [
            'required'            => true,
            'page_component_name' => 'grouping-field-choice',
        ];

        $metadata = $this->manager->getMetadataForGrouping();
        if (isset($metadata['include'])) {
            $options['include_fields'] = $metadata['include'];
        }
        if (isset($metadata['exclude'])) {
            $options['exclude_fields'] = $metadata['exclude'];
        }

        $builder
            ->add('columnNames', 'oro_field_choice', $options);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'entity'             => null,
                'data_class'         => 'Oro\Bundle\QueryDesignerBundle\Model\Grouping',
                'intention'          => 'query_designer_grouping',
                'column_choice_type' => 'oro_entity_field_select'
            )
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
        return self::NAME;
    }
}
