<?php

namespace Oro\Bundle\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

use Oro\Bundle\UserBundle\Form\EventListener\ChangePasswordSubscriber;
use Oro\Bundle\UserBundle\Form\Provider\PasswordFieldOptionsProvider;
use Symfony\Component\Validator\Constraints\Valid;

class ChangePasswordType extends AbstractType
{
    const NAME = 'oro_change_password';

    /** @var ChangePasswordSubscriber */
    protected $subscriber;

    /** @var PasswordFieldOptionsProvider */
    protected $optionsProvider;

    /**
     * @param ChangePasswordSubscriber $subscriber
     * @param PasswordFieldOptionsProvider $optionsProvider
     */
    public function __construct(ChangePasswordSubscriber $subscriber, PasswordFieldOptionsProvider $optionsProvider)
    {
        $this->subscriber = $subscriber;
        $this->optionsProvider = $optionsProvider;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventSubscriber($this->subscriber);
        $builder
            ->add(
                'currentPassword',
                'password',
                [
                    'required' => false,
                    'label' => $options['current_password_label'],
                    'constraints' => [
                        new UserPassword()
                    ],
                    'mapped' => false,
                ]
            )
            ->add(
                'plainPassword',
                'repeated',
                [
                    'required' => false,
                    'type' => 'password',
                    'invalid_message' => $options['plain_password_invalid_message'],
                    'options' => [
                        'attr' => [
                            'class' => 'password-field'
                        ]
                    ],
                    'first_options' => [
                        'label' => $options['first_options_label'],
                        'tooltip' => $this->optionsProvider->getTooltip(),
                        'attr' => [
                            'data-validation' => $this->optionsProvider->getDataValidationOption(),
                        ],
                    ],
                    'second_options' => ['label' => $options['second_options_label'],
                    ],
                    'mapped' => false,
                ]
            );
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

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'inherit_data' => true,
                'current_password_label' => 'oro.user.password.label',
                'plain_password_invalid_message' => 'oro.user.message.password_mismatch',
                'first_options_label' => 'oro.user.new_password.label',
                'second_options_label' => 'oro.user.new_password_re.label',
            ]
        );
    }
}
