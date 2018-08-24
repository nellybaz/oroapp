<?php

namespace Oro\Bundle\PaymentBundle\Action;

use Oro\Bundle\PaymentBundle\Entity\PaymentTransaction;
use Oro\Bundle\PaymentBundle\Method\Provider\PaymentMethodProviderInterface;
use Oro\Bundle\PaymentBundle\Provider\PaymentTransactionProvider;
use Oro\Component\Action\Action\AbstractAction;
use Oro\Component\ConfigExpression\ContextAccessor;
use Psr\Log\LoggerAwareTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;

abstract class AbstractPaymentMethodAction extends AbstractAction
{
    use LoggerAwareTrait;

    /** @var PaymentMethodProviderInterface */
    protected $paymentMethodProvider;

    /** @var PaymentTransactionProvider */
    protected $paymentTransactionProvider;

    /** @var RouterInterface */
    protected $router;

    /** @var OptionsResolver */
    private $optionsResolver;

    /** @var OptionsResolver */
    private $valuesResolver;

    /** @var object */
    protected $entity;

    /** @var array */
    protected $options = [];

    /**
     * @param ContextAccessor $contextAccessor
     * @param PaymentMethodProviderInterface $paymentMethodProvider
     * @param PaymentTransactionProvider $paymentTransactionProvider
     * @param RouterInterface $router
     */
    public function __construct(
        ContextAccessor $contextAccessor,
        PaymentMethodProviderInterface $paymentMethodProvider,
        PaymentTransactionProvider $paymentTransactionProvider,
        RouterInterface $router
    ) {
        parent::__construct($contextAccessor);

        $this->paymentMethodProvider = $paymentMethodProvider;
        $this->paymentTransactionProvider = $paymentTransactionProvider;
        $this->router = $router;
    }

    /**
     * @return OptionsResolver
     */
    protected function getOptionsResolver()
    {
        if (!$this->optionsResolver) {
            $this->optionsResolver = new OptionsResolver();
            $this->configureOptionsResolver($this->optionsResolver);
        }

        return $this->optionsResolver;
    }

    /**
     * @return OptionsResolver
     */
    protected function getValuesResolver()
    {
        if (!$this->valuesResolver) {
            $this->valuesResolver = new OptionsResolver();
            $this->configureValuesResolver($this->optionsResolver);
        }

        return $this->optionsResolver;
    }

    /**
     * @param OptionsResolver $resolver
     */
    protected function configureOptionsResolver(OptionsResolver $resolver)
    {
        $propertyPathType = 'Symfony\Component\PropertyAccess\PropertyPathInterface';

        $resolver
            ->setRequired(['object', 'amount', 'currency', 'paymentMethod'])
            ->setDefined(['transactionOptions', 'attribute', 'conditions'])
            ->setDefault('attribute', null)
            ->setDefault('transactionOptions', [])
            ->addAllowedTypes('object', ['object', $propertyPathType])
            ->addAllowedTypes('amount', ['float', 'string', $propertyPathType])
            ->addAllowedTypes('currency', ['string', $propertyPathType])
            ->addAllowedTypes('paymentMethod', ['string', $propertyPathType])
            ->setAllowedTypes('transactionOptions', ['array', $propertyPathType])
            ->setAllowedTypes('attribute', ['null', $propertyPathType]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    protected function configureValuesResolver(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired(['object', 'amount', 'currency', 'paymentMethod'])
            ->setDefined(['transactionOptions', 'attribute'])
            ->setDefault('attribute', null)
            ->setDefault('transactionOptions', [])
            ->addAllowedTypes('object', 'object')
            ->addAllowedTypes('amount', 'float')
            ->addAllowedTypes('currency', 'string')
            ->addAllowedTypes('paymentMethod', 'string')
            ->addAllowedTypes('transactionOptions', 'array')
            ->setAllowedTypes('attribute', ['null', 'Symfony\Component\PropertyAccess\PropertyPathInterface']);
    }

    /**
     * @param mixed $context
     * @return array
     */
    public function getOptions($context)
    {
        $values = [];

        $definedOptions = $this->getOptionsResolver()->getDefinedOptions();
        foreach ($definedOptions as $definedOption) {
            if (!array_key_exists($definedOption, $this->options)) {
                continue;
            }

            $values[$definedOption] = $this->contextAccessor->getValue($context, $this->options[$definedOption]);
            if (is_array($values[$definedOption])) {
                foreach ($values[$definedOption] as &$value) {
                    $value = $this->contextAccessor->getValue($context, $value);
                }
                unset($value);
            }
        }

        return $this->getValuesResolver()->resolve($values);
    }

    /**
     * @param PaymentTransaction $paymentTransaction
     * @return array
     */
    protected function getCallbackUrls(PaymentTransaction $paymentTransaction)
    {
        return [
            'errorUrl' => $this->router->generate(
                'oro_payment_callback_error',
                ['accessIdentifier' => $paymentTransaction->getAccessIdentifier()],
                UrlGeneratorInterface::ABSOLUTE_URL
            ),
            'returnUrl' => $this->router->generate(
                'oro_payment_callback_return',
                ['accessIdentifier' => $paymentTransaction->getAccessIdentifier()],
                UrlGeneratorInterface::ABSOLUTE_URL
            ),
        ];
    }

    /**
     * @param PaymentTransaction $paymentTransaction
     * @return array
     */
    protected function executePaymentTransaction(PaymentTransaction $paymentTransaction)
    {
        try {
            $paymentMethodIdentifier = $paymentTransaction->getPaymentMethod();
            if ($this->paymentMethodProvider->hasPaymentMethod($paymentMethodIdentifier)) {
                return $this->paymentMethodProvider
                    ->getPaymentMethod($paymentMethodIdentifier)
                    ->execute($paymentTransaction->getAction(), $paymentTransaction);
            }
        } catch (\Exception $e) {
            if ($this->logger) {
                // do not expose sensitive data in context
                $this->logger->error($e->getMessage(), []);
            }
        }

        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array $options)
    {
        $this->options = $this->getOptionsResolver()->resolve($options);
    }

    /**
     * @param mixed $context
     * @param mixed $value
     */
    protected function setAttributeValue($context, $value)
    {
        if (!empty($this->options['attribute'])) {
            $this->contextAccessor->setValue($context, $this->options['attribute'], $value);
        }
    }
}
