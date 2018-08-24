<?php

namespace Oro\Bundle\PaymentBundle\Manager;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\PaymentBundle\Entity\PaymentStatus;
use Oro\Bundle\PaymentBundle\Entity\PaymentTransaction;
use Oro\Bundle\PaymentBundle\Provider\PaymentStatusProviderInterface;
use Oro\Bundle\PaymentBundle\Provider\PaymentTransactionProvider;

class PaymentStatusManager
{
    /** @var PaymentStatusProviderInterface */
    protected $statusProvider;

    /** @var DoctrineHelper */
    protected $doctrineHelper;

    /** @var PaymentTransactionProvider */
    protected $paymentTransactionProvider;

    /**
     * @param PaymentStatusProviderInterface $provider
     * @param DoctrineHelper $doctrineHelper
     * @param PaymentTransactionProvider $transactionProvider
     */
    public function __construct(
        PaymentStatusProviderInterface $provider,
        DoctrineHelper $doctrineHelper,
        PaymentTransactionProvider $transactionProvider
    ) {
        $this->statusProvider = $provider;
        $this->doctrineHelper = $doctrineHelper;
        $this->paymentTransactionProvider = $transactionProvider;
    }

    /**
     * @param PaymentTransaction $transaction
     */
    public function updateStatus(PaymentTransaction $transaction)
    {
        $entityClass = $transaction->getEntityClass();
        $entityId = $transaction->getEntityIdentifier();
        $object = $this->doctrineHelper->getEntityReference($entityClass, $entityId);
        $paymentStatusEntity = $this->doctrineHelper->getEntityRepository(PaymentStatus::class)->findOneBy([
            'entityClass' => $entityClass,
            'entityIdentifier' => $entityId
        ]);

        if (!$paymentStatusEntity) {
            $paymentStatusEntity = new PaymentStatus();
            $paymentStatusEntity->setEntityClass($entityClass);
            $paymentStatusEntity->setEntityIdentifier($entityId);
        }
        $status = $this->statusProvider->getPaymentStatus($object);
        $paymentStatusEntity->setPaymentStatus($status);
        $em = $this->doctrineHelper->getEntityManager(PaymentStatus::class);
        $em->persist($paymentStatusEntity);
        $em->flush($paymentStatusEntity);
    }
}
