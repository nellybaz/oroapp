<?php

namespace Oro\Bundle\MagentoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

abstract class AbstractApiAddressType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('label', 'text', ['required' => false]);
        $builder->add('street', 'text', ['required' => false]);
        $builder->add('street2', 'text', ['required' => false]);
        $builder->add('city', 'text', ['required' => false]);
        $builder->add('postalCode', 'text', ['required' => false]);
        $builder->add('regionText', 'text', ['required' => false]);
        $builder->add('namePrefix', 'text', ['required' => false]);
        $builder->add('firstName', 'text', ['required' => true]);
        $builder->add('middleName', 'text', ['required' => false]);
        $builder->add('lastName', 'text', ['required' => true]);
        $builder->add('nameSuffix', 'text', ['required' => false]);
        $builder->add('phone', 'text', ['required' => false]);
        $builder->add('primary', 'checkbox', ['required' => false]);

        $builder->add(
            'country',
            'translatable_entity',
            [
                'class'    => 'Oro\Bundle\AddressBundle\Entity\Country',
                'property' => 'name',
                'required' => true
            ]
        );
        $builder->add('countryText', 'text', ['required' => false]);

        $builder->add(
            'region',
            'translatable_entity',
            [
                'class'    => 'Oro\Bundle\AddressBundle\Entity\Region',
                'property' => 'name',
                'required' => true
            ]
        );

        $builder->add(
            'types',
            'translatable_entity',
            [
                'class'    => 'OroAddressBundle:AddressType',
                'property' => 'label',
                'required' => false,
                'multiple' => true,
                'expanded' => true
            ]
        );
    }
}
