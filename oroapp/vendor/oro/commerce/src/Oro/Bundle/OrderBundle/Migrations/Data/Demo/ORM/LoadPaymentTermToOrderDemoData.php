<?php

namespace Oro\Bundle\OrderBundle\Migrations\Data\Demo\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

use Oro\Bundle\IntegrationBundle\Entity\Channel;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\PaymentBundle\Method\PaymentMethodInterface;
use Oro\Bundle\PaymentTermBundle\Migrations\Data\Demo\ORM\LoadPaymentRuleIntegrationData;
use Oro\Bundle\PaymentTermBundle\Migrations\Data\Demo\ORM\LoadPaymentTermDemoData;

class LoadPaymentTermToOrderDemoData extends AbstractFixture implements
    DependentFixtureInterface,
    ContainerAwareInterface
{
    use ContainerAwareTrait;

    /**
     * {@inheritDoc}
     */
    public function getDependencies()
    {
        return [
            LoadPaymentRuleIntegrationData::class,
            LoadPaymentTermDemoData::class,
            LoadOrderLineItemDemoData::class,
            LoadCustomerOrderLineItemsDemoData::class,
        ];
    }

    /**
     * @param EntityManager $manager
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $paymentTransactionProvider = $this->container->get('oro_payment.provider.payment_transaction');

        $orders = $this->container->get('doctrine')->getRepository('OroOrderBundle:Order')->findAll();

        $orderTaxListener = $this->container->get('oro_tax.event_listener.order_tax');
        $orderLineItemTaxListener = $this->container->get('oro_tax.event_listener.order_line_item_tax');

        /**
         * Listeners should be disable because of BB-11299
         * TODO: Remove code after BB-11299
         */
        $orderTaxListener->setEnabled(false);
        $orderLineItemTaxListener->setEnabled(false);

        /** @var Order[] $orders */
        foreach ($orders as $order) {
            $paymentTransaction = $paymentTransactionProvider->getPaymentTransaction($order);
            if (!$paymentTransaction) {
                $paymentTransaction = $paymentTransactionProvider->createPaymentTransaction(
                    $this->getPaymentTermMethodIdentifier(),
                    PaymentMethodInterface::PURCHASE,
                    $order
                );
            }

            $paymentTransaction
                ->setAmount($order->getTotal())
                ->setCurrency($order->getCurrency())
                ->setSuccessful(true);

            $paymentTransactionProvider->savePaymentTransaction($paymentTransaction);
        }

        $manager->flush();

        $orderTaxListener->setEnabled(true);
        $orderLineItemTaxListener->setEnabled(true);
    }

    /**
     * @return string
     */
    private function getPaymentTermMethodIdentifier()
    {
        return $this->container->get('oro_payment_term.config.integration_method_identifier_generator')
            ->generateIdentifier($this->getPaymentTermIntegrationChannel());
    }

    /**
     * @return Channel|object
     */
    private function getPaymentTermIntegrationChannel()
    {
        return $this->getReference(LoadPaymentRuleIntegrationData::PAYMENT_TERM_INTEGRATION_CHANNEL_REFERENCE);
    }
}
