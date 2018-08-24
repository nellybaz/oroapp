<?php

namespace Oro\Bundle\MailChimpBundle\Acl\Voter;

use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\QueryBuilder;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\SecurityBundle\Acl\Voter\AbstractEntityVoter;
use Oro\Bundle\MailChimpBundle\Entity\Member;
use Oro\Bundle\MailChimpBundle\Model\FieldHelper;
use Oro\Bundle\MarketingListBundle\Entity\MarketingListStateItemInterface;
use Oro\Bundle\MarketingListBundle\Provider\ContactInformationFieldsProvider;

class MarketingListStateItemVoter extends AbstractEntityVoter
{
    /**
     * @var array
     */
    protected $supportedAttributes = ['DELETE'];

    /**
     * @var ContactInformationFieldsProvider
     */
    protected $contactInformationFieldsProvider;

    /**
     * @var FieldHelper
     */
    protected $fieldHelper;

    /**
     * @var string
     */
    protected $memberClassName;

    /**
     * @var string
     */
    protected $subscriberListClassName;

    /**
     * @var string
     */
    protected $marketingListClassName;

    /**
     * @param DoctrineHelper $doctrineHelper
     * @param ContactInformationFieldsProvider $contactInformationFieldsProvider
     * @param FieldHelper $fieldHelper
     * @param string $memberClassName
     * @param string $subscriberListClassName
     * @param string $marketingListClassName
     */
    public function __construct(
        DoctrineHelper $doctrineHelper,
        ContactInformationFieldsProvider $contactInformationFieldsProvider,
        FieldHelper $fieldHelper,
        $memberClassName,
        $subscriberListClassName,
        $marketingListClassName
    ) {
        $this->doctrineHelper = $doctrineHelper;
        $this->contactInformationFieldsProvider = $contactInformationFieldsProvider;
        $this->fieldHelper = $fieldHelper;
        $this->memberClassName = $memberClassName;
        $this->subscriberListClassName = $subscriberListClassName;
        $this->marketingListClassName = $marketingListClassName;
    }

    /**
     * {@inheritdoc}
     */
    protected function getPermissionForAttribute($class, $identifier, $attribute)
    {
        /** @var MarketingListStateItemInterface $item */
        $item = $this->doctrineHelper->getEntityRepository($this->className)->find($identifier);
        $entityClass = $item->getMarketingList()->getEntity();
        $entity = $this->doctrineHelper->getEntityRepository($entityClass)->find($item->getEntityId());

        if (!$entity) {
            return self::ACCESS_ABSTAIN;
        }

        $contactInformationFields = $this->contactInformationFieldsProvider->getEntityTypedFields(
            $entityClass,
            ContactInformationFieldsProvider::CONTACT_INFORMATION_SCOPE_EMAIL
        );

        $contactInformationValues = $this->contactInformationFieldsProvider->getTypedFieldsValues(
            $contactInformationFields,
            $entity
        );

        $qb = $this->getQueryBuilder($contactInformationValues, $item);

        $result = $qb->getQuery()->getScalarResult();

        if (!empty($result)) {
            return self::ACCESS_DENIED;
        }

        return self::ACCESS_ABSTAIN;
    }

    /**
     * @param array $contactInformationValues
     * @param MarketingListStateItemInterface $item
     * @return QueryBuilder
     */
    protected function getQueryBuilder(array $contactInformationValues, $item)
    {
        $qb = $this->doctrineHelper
            ->getEntityManager($this->memberClassName)
            ->createQueryBuilder();

        $qb
            ->setMaxResults(1)
            ->select('mmb.id')
            ->from($this->subscriberListClassName, 'subscribersList')
            ->join(
                $this->memberClassName,
                'mmb',
                Join::WITH,
                'mmb.subscribersList = subscribersList.id'
            )
            ->join(
                $this->marketingListClassName,
                'ml',
                Join::WITH,
                'mmb.subscribersList = subscribersList.id'
            )
            ->where(
                $qb->expr()->andX(
                    $qb->expr()->eq('ml.id', ':marketingListId'),
                    $qb->expr()->in('mmb.email', ':contactInformationValues'),
                    $qb->expr()->in('mmb.status', ':statuses')
                )
            )
            ->setParameter('marketingListId', $item->getMarketingList()->getId())
            ->setParameter('contactInformationValues', $contactInformationValues)
            ->setParameter('statuses', [Member::STATUS_UNSUBSCRIBED, Member::STATUS_CLEANED]);

        return $qb;
    }
}
