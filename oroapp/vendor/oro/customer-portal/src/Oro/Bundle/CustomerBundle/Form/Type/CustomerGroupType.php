<?php

namespace Oro\Bundle\CustomerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerGroupType extends AbstractType
{
    const NAME = 'oro_customer_group_type';

    /**
     * @var string
     */
    protected $dataClass;

    /**
     * @var string
     */
    protected $customerClass;

    /**
     * @param string $dataClass
     */
    public function setDataClass($dataClass)
    {
        $this->dataClass = $dataClass;
    }

    /**
     * @param string $customerClass
     */
    public function setCustomerClass($customerClass)
    {
        $this->customerClass = $customerClass;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'name',
                'text',
                [
                    'label' => 'oro.customer.customergroup.name.label',
                    'required' => true
                ]
            )
            ->add(
                'appendCustomers',
                'oro_entity_identifier',
                [
                    'class'    => $this->customerClass,
                    'required' => false,
                    'mapped'   => false,
                    'multiple' => true
                ]
            )
            ->add(
                'removeCustomers',
                'oro_entity_identifier',
                [
                    'class'    => $this->customerClass,
                    'required' => false,
                    'mapped'   => false,
                    'multiple' => true
                ]
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => $this->dataClass]);
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
