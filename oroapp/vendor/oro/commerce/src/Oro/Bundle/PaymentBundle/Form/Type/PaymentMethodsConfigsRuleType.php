<?php

namespace Oro\Bundle\PaymentBundle\Form\Type;

use Oro\Bundle\CurrencyBundle\Form\Type\CurrencySelectionType;
use Oro\Bundle\PaymentBundle\Entity\PaymentMethodsConfigsRule;
use Oro\Bundle\PaymentBundle\Form\EventSubscriber\DestinationCollectionTypeSubscriber;
use Oro\Bundle\PaymentBundle\Method\Provider\PaymentMethodProviderInterface;
use Oro\Bundle\PaymentBundle\Method\View\PaymentMethodViewProviderInterface;
use Oro\Bundle\RuleBundle\Form\Type\RuleType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraint;

class PaymentMethodsConfigsRuleType extends AbstractType
{
    const BLOCK_PREFIX = 'oro_payment_methods_configs_rule';

    /**
     * @var PaymentMethodProviderInterface
     */
    protected $paymentMethodProvider;

    /**
     * @var PaymentMethodViewProviderInterface
     */
    protected $methodViewProvider;

    /**
     * @param PaymentMethodProviderInterface $paymentMethodProvider
     * @param PaymentMethodViewProviderInterface      $methodViewProvider
     */
    public function __construct(
        PaymentMethodProviderInterface $paymentMethodProvider,
        PaymentMethodViewProviderInterface $methodViewProvider
    ) {
        $this->paymentMethodProvider = $paymentMethodProvider;
        $this->methodViewProvider = $methodViewProvider;
    }

    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('methodConfigs', PaymentMethodConfigCollectionType::class, [
                'required' => false
            ])
            ->add('destinations', PaymentMethodsConfigsRuleDestinationCollectionType::class, [
                'required'             => false,
                'label'                => 'oro.payment.paymentmethodsconfigsrule.destinations.label',
                'show_form_when_empty' => false,
            ])
            ->add('currency', CurrencySelectionType::class, [
                'label'       => 'oro.payment.paymentmethodsconfigsrule.currency.label',
                'empty_value' => 'oro.currency.currency.form.choose',
            ])
            ->add('rule', RuleType::class, [
                'label' => 'oro.payment.paymentmethodsconfigsrule.rule.label',
            ])
            ->add('method', ChoiceType::class, [
                'mapped'  => false,
                'choices' => $this->getMethods(),
            ]);

        $builder->addEventSubscriber(new DestinationCollectionTypeSubscriber());
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['methods'] = $this->getMethods();
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PaymentMethodsConfigsRule::class,
            'validation_groups' => [Constraint::DEFAULT_GROUP, 'PaymentMethodsConfigsRule'],
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        return self::BLOCK_PREFIX;
    }

    /**
     * @return array
     */
    protected function getMethods()
    {
        $result = [];
        foreach ($this->paymentMethodProvider->getPaymentMethods() as $method) {
            $identifier = $method->getIdentifier();
            $result[$identifier] = $this->methodViewProvider
                ->getPaymentMethodView($identifier)
                ->getAdminLabel();
        }

        return $result;
    }
}
