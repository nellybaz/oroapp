<?php

namespace Oro\Bundle\PayPalBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

use Oro\Bundle\ValidationBundle\Validator\Constraints\Integer;

class CreditCardType extends AbstractType
{
    const NAME = 'oro_paypal_credit_card';

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'ACCT',
            'text',
            [
                'required' => true,
                'label' => 'oro.paypal.credit_card.card_number.label',
                'mapped' => false,
                'attr' => [
                    'data-validation' => [
                        'credit-card-number' => [
                            'message' => 'oro.payment.validation.credit_card',
                            'payload' => null,
                        ],
                        'credit-card-type' => [
                            'message' => 'oro.payment.validation.credit_card_type',
                            'payload' => null,
                        ]
                    ],
                    'data-credit-card-type-validator' => 'credit-card-type',
                    'data-card-number' => true,
                    'autocomplete' => 'off',
                    'data-gateway' => true,
                    'placeholder' => false,
                ],
                'constraints' => [
                    new Integer(),
                    new NotBlank(),
                    new Length(['min' => '12', 'max' => '19']),
                ],
            ]
        )->add(
            'expirationDate',
            CreditCardExpirationDateType::NAME,
            [
                'required' => true,
                'label' => 'oro.paypal.credit_card.expiration_date.label',
                'mapped' => false,
                'placeholder' => [
                    'year' => 'Year',
                    'month' => 'Month',
                ],
                'attr' => [
                    'data-expiration-date' => true,
                ],
            ]
        )->add(
            'EXPDATE',
            'hidden',
            [
                'attr' => [
                    'data-gateway' => true,
                ],
            ]
        );

        if ($options['requireCvvEntryEnabled']) {
            $builder->add(
                'CVV2',
                'password',
                [
                    'required' => true,
                    'label' => 'oro.paypal.credit_card.cvv2.label',
                    'mapped' => false,
                    'block_name' => 'payment_credit_card_cvv',
                    'constraints' => [
                        new Integer(['message' => 'oro.payment.number.error']),
                        new NotBlank(),
                        new Length(['min' => 3, 'max' => 4]),
                    ],
                    'attr' => [
                        'data-card-cvv' => true,
                        'data-gateway' => true,
                        'placeholder' => false,
                    ],
                ]
            );
        }

        if ($options['zeroAmountAuthorizationEnabled']) {
            $builder->add(
                'save_for_later',
                'checkbox',
                [
                    'required' => false,
                    'label' => 'oro.paypal.credit_card.save_for_later.label',
                    'mapped' => false,
                    'data' => true,
                    'attr' => [
                        'data-save-for-later' => true,
                    ],
                ]
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'label' => 'oro.paypal.methods.credit_card.label',
            'csrf_protection' => false,
            'zeroAmountAuthorizationEnabled' => false,
            'requireCvvEntryEnabled' => true,
        ]);
    }


    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        foreach ($view->children as $child) {
            $child->vars['full_name'] = $child->vars['name'];
        }
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
