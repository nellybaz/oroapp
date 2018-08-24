<?php

namespace Oro\Bundle\PaymentBundle\Action;

use Oro\Bundle\PaymentBundle\Entity\PaymentTransaction;
use Oro\Bundle\PaymentBundle\Method\PaymentMethodInterface;

class PurchaseAction extends AbstractPaymentMethodAction
{
    const SAVE_FOR_LATER_USE = 'saveForLaterUse';

    /** {@inheritdoc} */
    protected function executeAction($context)
    {
        $options = $this->getOptions($context);

        $paymentTransaction = $this->paymentTransactionProvider->createPaymentTransaction(
            $options['paymentMethod'],
            PaymentMethodInterface::PURCHASE,
            $options['object']
        );

        $isPaymentMethodSupportsValidation = $this->isPaymentMethodSupportsValidation($paymentTransaction);

        $attributes = [
            'paymentMethod' => $options['paymentMethod'],
            'paymentMethodSupportsValidation' => (bool)$isPaymentMethodSupportsValidation,
        ];

        if ($isPaymentMethodSupportsValidation) {
            $sourcePaymentTransaction = $this->paymentTransactionProvider
                ->getActiveValidatePaymentTransaction($options['paymentMethod']);

            if (!$sourcePaymentTransaction) {
                throw new \RuntimeException('Validation payment transaction not found');
            }

            $paymentTransaction->setSourcePaymentTransaction($sourcePaymentTransaction);
        }

        $paymentTransaction
            ->setAmount($options['amount'])
            ->setCurrency($options['currency']);

        if (!empty($options['transactionOptions'])) {
            $paymentTransaction->setTransactionOptions($options['transactionOptions']);
        }

        $response = $this->executePaymentTransaction($paymentTransaction);

        $this->paymentTransactionProvider->savePaymentTransaction($paymentTransaction);

        if ($isPaymentMethodSupportsValidation) {
            $attributes['purchaseSuccessful'] = $paymentTransaction->isSuccessful();

            $this->handleSaveForLaterUse($paymentTransaction);
        }

        $this->setAttributeValue(
            $context,
            array_merge(
                $attributes,
                $this->getCallbackUrls($paymentTransaction),
                (array) $paymentTransaction->getTransactionOptions(),
                $response
            )
        );
    }

    /**
     * @param PaymentTransaction $paymentTransaction
     *
     * @return bool
     */
    protected function isPaymentMethodSupportsValidation(PaymentTransaction $paymentTransaction)
    {
        $paymentMethodIdentifier = $paymentTransaction->getPaymentMethod();
        if ($this->paymentMethodProvider->hasPaymentMethod($paymentMethodIdentifier)) {
            return $this->paymentMethodProvider
                ->getPaymentMethod($paymentMethodIdentifier)
                ->supports(PaymentMethodInterface::VALIDATE);
        }

        return false;
    }

    /**
     * @param PaymentTransaction $paymentTransaction
     */
    protected function handleSaveForLaterUse(PaymentTransaction $paymentTransaction)
    {
        $sourcePaymentTransaction = $paymentTransaction->getSourcePaymentTransaction();
        $sourcePaymentTransactionOptions = $sourcePaymentTransaction->getTransactionOptions();
        if (empty($sourcePaymentTransactionOptions[self::SAVE_FOR_LATER_USE])) {
            $sourcePaymentTransaction->setActive(false);
            $this->paymentTransactionProvider->savePaymentTransaction($sourcePaymentTransaction);
        }
    }
}
