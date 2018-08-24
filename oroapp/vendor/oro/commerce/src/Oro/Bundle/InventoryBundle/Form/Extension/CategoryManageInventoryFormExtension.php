<?php

namespace Oro\Bundle\InventoryBundle\Form\Extension;

use Symfony\Component\Form\FormBuilderInterface;

use Oro\Bundle\CatalogBundle\Form\Extension\AbstractFallbackCategoryTypeExtension;
use Oro\Bundle\EntityBundle\Form\Type\EntityFieldFallbackValueType;

class CategoryManageInventoryFormExtension extends AbstractFallbackCategoryTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFallbackProperties()
    {
        return [
            'manageInventory'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add(
            'manageInventory',
            EntityFieldFallbackValueType::NAME,
            [
                'label' => 'oro.inventory.manage_inventory.label',
            ]
        );
    }
}
