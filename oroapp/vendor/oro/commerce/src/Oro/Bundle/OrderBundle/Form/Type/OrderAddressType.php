<?php

namespace Oro\Bundle\OrderBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Oro\Bundle\CustomerBundle\Entity\CustomerOwnerAwareInterface;

class OrderAddressType extends AbstractOrderAddressType
{
    const NAME = 'oro_order_address_type';

    /**
     * {@inheritdoc}
     */
    protected function initCustomerAddressField(
        FormBuilderInterface $builder,
        $type,
        CustomerOwnerAwareInterface $entity,
        $isManualEditGranted,
        $isEditEnabled
    ) {
        if ($isEditEnabled) {
            $addressCollection = $this->orderAddressManager->getGroupedAddresses($entity, $type);
            $addresses = $addressCollection->toArray();

            $customerAddressOptions = [
                'label' => false,
                'required' => false,
                'mapped' => false,
                'choices' => $this->getChoices($addresses),
                'configs' => ['placeholder' => 'oro.order.form.address.choose'],
                'attr' => [
                    'data-addresses' => json_encode($this->getPlainData($addresses)),
                    'data-default' => $addressCollection->getDefaultAddressKey(),
                ],
            ];

            if ($isManualEditGranted) {
                $customerAddressOptions['choices'] = array_merge(
                    $customerAddressOptions['choices'],
                    ['oro.order.form.address.manual']
                );
                $customerAddressOptions['configs']['placeholder'] = 'oro.order.form.address.choose_or_create';
            }

            $builder->add('customerAddress', 'genemu_jqueryselect2_choice', $customerAddressOptions);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'oro_address';
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
