<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Form\Type\Stub;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Oro\Bundle\CurrencyBundle\Form\Type\CurrencySelectionType;

class CurrencySelectionTypeStub extends AbstractType
{
    /**
     * {@inheritDoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            [
                'additional_currencies' => null,
                'compact'               => false,
                'currencies_list'       => null,
                'full_currency_list'    => true
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return CurrencySelectionType::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'currency';
    }
}
