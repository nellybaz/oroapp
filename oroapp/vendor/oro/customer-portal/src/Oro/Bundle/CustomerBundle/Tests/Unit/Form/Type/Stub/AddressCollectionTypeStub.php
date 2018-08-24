<?php

namespace Oro\Bundle\CustomerBundle\Tests\Unit\Form\Type\Stub;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Oro\Bundle\AddressBundle\Form\Type\AddressCollectionType;
use Oro\Bundle\CustomerBundle\Form\Type\CustomerTypedAddressType;

class AddressCollectionTypeStub extends AddressCollectionType
{
    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'type'     => CustomerTypedAddressType::NAME,
            'options'  => ['data_class' => 'Oro\Bundle\CustomerBundle\Entity\CustomerAddress'],
            'multiple' => true,
        ]);

        parent::setDefaultOptions($resolver);
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'test_address_entity';
    }
}
