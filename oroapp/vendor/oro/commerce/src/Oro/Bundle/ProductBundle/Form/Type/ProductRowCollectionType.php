<?php

namespace Oro\Bundle\ProductBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\FormBundle\Form\Type\CollectionType;
use Oro\Bundle\ProductBundle\Form\DataTransformer\ProductCollectionTransformer;
use Oro\Bundle\ProductBundle\Storage\ProductDataStorage;

class ProductRowCollectionType extends AbstractType
{
    const NAME = 'oro_product_row_collection';

    const ROW_COUNT_INITIAL = 8;

    const ROW_COUNT_ADD = 5;

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
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $products = $event->getData();
            if (!$products) {
                return;
            }

            foreach ($products as $key => $product) {
                if ($product[ProductDataStorage::PRODUCT_SKU_KEY] !== '' &&
                    $product[ProductDataStorage::PRODUCT_QUANTITY_KEY] === ''
                ) {
                    // default quantity
                    $products[$key][ProductDataStorage::PRODUCT_QUANTITY_KEY] = '1';
                }
            }
            $event->setData($products);
        });

        // remove empty rows from data
        $builder->addModelTransformer(new ProductCollectionTransformer());
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'type' => ProductRowType::NAME,
                'required' => false,
                'handle_primary' => false,
                'row_count_add' => self::ROW_COUNT_ADD,
                'row_count_initial' => self::ROW_COUNT_INITIAL,
                'products' => null,
            ]
        );
        $resolver->setAllowedTypes('products', ['array', 'null']);
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
