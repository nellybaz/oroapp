<?php

namespace Oro\Bundle\PaymentTermBundle\EventListener;

use Oro\Bundle\CustomerBundle\Entity\CustomerOwnerAwareInterface;
use Oro\Bundle\DataGridBundle\Datasource\ResultRecord;
use Oro\Bundle\DataGridBundle\Event\BuildBefore;
use Oro\Bundle\DataGridBundle\Event\OrmResultAfter;
use Oro\Bundle\PaymentTermBundle\Provider\PaymentTermAssociationProvider;
use Oro\Bundle\PaymentTermBundle\Provider\PaymentTermProvider;

class DatagridListener
{
    /** @var PaymentTermAssociationProvider */
    private $paymentTermAssociationProvider;

    /** @var PaymentTermProvider */
    private $paymentTermProvider;

    /**
     * @param PaymentTermAssociationProvider $paymentTermAssociationProvider
     * @param PaymentTermProvider $paymentTermProvider
     */
    public function __construct(
        PaymentTermAssociationProvider $paymentTermAssociationProvider,
        PaymentTermProvider $paymentTermProvider
    ) {
        $this->paymentTermAssociationProvider = $paymentTermAssociationProvider;
        $this->paymentTermProvider = $paymentTermProvider;
    }

    /**
     * @param BuildBefore $event
     */
    public function onBuildBefore(BuildBefore $event)
    {
        $config = $event->getConfig();
        $className = $config->getExtendedEntityClassName();
        if (!$className) {
            return;
        }

        $associationNames = $this->paymentTermAssociationProvider->getAssociationNames($className);
        if (!$associationNames) {
            return;
        }

        foreach ($associationNames as $associationName) {
            $config->offsetSetByPath(sprintf('[columns][%s][type]', $associationName), 'twig');
            $config->offsetSetByPath(sprintf('[columns][%s][frontend_type]', $associationName), 'html');
            $config->offsetSetByPath(
                sprintf('[columns][%s][template]', $associationName),
                'OroPaymentTermBundle:PaymentTerm:column.html.twig'
            );
        }
    }

    /**
     * @param OrmResultAfter $event
     */
    public function onResultAfter(OrmResultAfter $event)
    {
        $config = $event->getDatagrid()->getConfig();
        $className = $config->getExtendedEntityClassName();
        if (!$className) {
            return;
        }

        $associationNames = $this->paymentTermAssociationProvider->getAssociationNames($className);
        if (!$associationNames) {
            return;
        }

        foreach ($event->getRecords() as $record) {
            if (!$record instanceof ResultRecord) {
                return;
            }

            $entity = $record->getRootEntity();
            if (!$entity instanceof CustomerOwnerAwareInterface) {
                return;
            }

            $customerGroupPaymentTerm = $this->paymentTermProvider->getCustomerGroupPaymentTermByOwner($entity);
            if ($customerGroupPaymentTerm) {
                $record->setValue('customer_group_payment_term', $customerGroupPaymentTerm->getLabel());
            }
        }
    }
}
