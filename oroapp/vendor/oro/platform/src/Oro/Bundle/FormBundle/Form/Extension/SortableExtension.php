<?php

namespace Oro\Bundle\FormBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Oro\Bundle\FormBundle\Form\Extension\Traits\FormExtendedTypeTrait;

class SortableExtension extends AbstractTypeExtension
{
    use FormExtendedTypeTrait;

    const POSITION_FIELD_NAME = '_position';

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if (!$options['sortable']) {
            return;
        }

        $builder->add(self::POSITION_FIELD_NAME, 'hidden', [
            'property_path' => $options['sortable_property_path'],
            'block_name' => 'hidden',
            'empty_data' => '0',
            'attr' => [
                'class' => 'position-input',
            ],
        ]);
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'sortable' => false,
            'sortable_property_path' => 'position',
        ]);
    }
}
