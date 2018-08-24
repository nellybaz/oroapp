<?php

namespace Oro\Bundle\InventoryBundle\Form\Extension;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints\NotBlank;

use Oro\Bundle\CatalogBundle\Form\Extension\AbstractFallbackCategoryTypeExtension;
use Oro\Bundle\EntityBundle\Form\Type\EntityFieldFallbackValueType;
use Oro\Bundle\ValidationBundle\Validator\Constraints\Decimal;

class CategoryInventoryThresholdFormExtension extends AbstractFallbackCategoryTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFallbackProperties()
    {
        return [
            'inventoryThreshold'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add(
            'inventoryThreshold',
            EntityFieldFallbackValueType::NAME,
            [
                'label' => 'oro.inventory.inventory_threshold.label',
                'required' => true,
                'value_options' => [
                    'constraints' => [
                        new Decimal(),
                        new NotBlank(),
                    ]
                ]
            ]
        );
        $builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            [$this, 'onPreSubmitData']
        );
    }

    public function onPreSubmitData(FormEvent $event)
    {
        $data = $event->getData();
        if (isset($data['inventoryThreshold']['useFallback']) && $data['inventoryThreshold']['useFallback'] == '1') {
            $data['inventoryThreshold']['scalarValue'] = 0;
        }
        $event->setData($data);
    }
}
