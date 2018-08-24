<?php

namespace Oro\Bundle\SaleBundle\Form\Type;

use Oro\Bundle\SaleBundle\Provider\OptionsProviderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactInfoUserAvailableOptionsType extends AbstractType
{
    const NAME = 'oro_sale_contact_info_user_available_option';

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
        $resolver->setDefaults([
            'choices' => array_flip($this->optionsProvider->getOptions()),
            'multiple' => true,
        ]);

        $resolver->setNormalizer('choice_label', function () {
            return function ($optionValue) {
                $label = sprintf('oro.sale.available_user_options.type.%s.label', $optionValue);

                return $label;
            };
        });
    }

    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $options = $event->getData();
            if (empty($options)) {
                $options = $this->optionsProvider->getOptions();
                $event->setData($options);
            }
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
