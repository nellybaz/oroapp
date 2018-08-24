<?php

namespace Oro\Bundle\CheckoutBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Oro\Bundle\FormBundle\Form\Type\OroDateType;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;

class CheckoutShipUntilType extends AbstractType
{
    const NAME = 'oro_checkout_ship_until';

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return OroDateType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'attr' => [
                'class' => 'datepicker-input input input--full',
                'placeholder' => 'oro.checkout.order_review.shipping_date_placeholder'
            ],
            'minDate' => '0',
        ]);

        $resolver->setRequired(['checkout']);
        $resolver->setAllowedValues(['checkout' => function ($value) {
            return $value instanceof Checkout;
        }]);
    }
}
