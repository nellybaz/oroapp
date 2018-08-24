<?php

namespace Oro\Bundle\EntityConfigBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Oro\Bundle\FormBundle\Form\Type\CollectionType;
use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeGroup;

class AttributeGroupCollectionType extends AbstractType
{
    const NAME = 'oro_entity_config_attribute_group_collection';

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            [
                'type' => AttributeGroupType::NAME,
                'options' => [
                    'data_class' => AttributeGroup::class,
                ],
                'attr' => [
                    'class' => 'product-price-collection attibute-group-collection'
                ]
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return CollectionType::NAME;
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
}
