<?php

namespace Oro\Bundle\SaleBundle\Form\Type;

use Oro\Bundle\SaleBundle\Provider\OptionsProviderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactInfoSourceOptionsType extends AbstractType
{
    const NAME = 'oro_sale_contact_info_customer_option';

    /**
     * @var OptionsProviderInterface
     */
    protected $optionsProvider;

    /**
     * @param OptionsProviderInterface $optionsProvider
     */
    public function __construct(OptionsProviderInterface $optionsProvider)
    {
        $this->optionsProvider = $optionsProvider;
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $options = array_flip($this->optionsProvider->getOptions());
        $resolver->setDefaults([
            'choices' => $options
        ]);

        $resolver->setNormalizer('choice_label', function () {
            return function ($optionValue) {
                $label = sprintf('oro.sale.available_customer_options.type.%s.label', $optionValue);

                return $label;
            };
        });
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        return static::NAME;
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        return 'choice';
    }
}
