<?php

namespace Oro\Bundle\OrganizationBundle\Validator\Constraints;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Util\ClassUtils;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

use Oro\Bundle\OrganizationBundle\Entity\Manager\BusinessUnitManager;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\SecurityBundle\Acl\Domain\OneShotIsGrantedObserver;
use Oro\Bundle\SecurityBundle\Acl\Voter\AclVoter;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Oro\Bundle\SecurityBundle\Owner\EntityOwnerAccessor;
use Oro\Bundle\SecurityBundle\Owner\Metadata\OwnershipMetadataInterface;
use Oro\Bundle\SecurityBundle\Owner\Metadata\OwnershipMetadataProviderInterface;
use Oro\Bundle\SecurityBundle\Owner\OwnerTreeProvider;

class OwnerValidator extends ConstraintValidator
{
    /** @var OwnershipMetadataProviderInterface */
    protected $ownershipMetadataProvider;

    /** @var EntityOwnerAccessor */
    protected $ownerAccessor;

    /** @var BusinessUnitManager */
    protected $businessUnitManager;

    /** @var AclVoter */
    protected $aclVoter;

    /** @var AuthorizationCheckerInterface */
    protected $authorizationChecker;

    /** @var TokenAccessorInterface */
    protected $tokenAccessor;

    /** @var OwnerTreeProvider */
    protected $treeProvider;

    /** @var ManagerRegistry */
    protected $doctrine;

    /** @var object */
    protected $object;

    /**
     * @param ManagerRegistry                    $doctrine
     * @param BusinessUnitManager                $businessUnitManager
     * @param OwnershipMetadataProviderInterface $ownershipMetadataProvider
     * @param EntityOwnerAccessor                $ownerAccessor
     * @param AuthorizationCheckerInterface      $authorizationChecker
     * @param TokenAccessorInterface             $tokenAccessor
     * @param OwnerTreeProvider                  $treeProvider
     * @param AclVoter                           $aclVoter
     */
    public function __construct(
        ManagerRegistry $doctrine,
        BusinessUnitManager $businessUnitManager,
        OwnershipMetadataProviderInterface $ownershipMetadataProvider,
        EntityOwnerAccessor $ownerAccessor,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenAccessorInterface $tokenAccessor,
        OwnerTreeProvider $treeProvider,
        AclVoter $aclVoter
    ) {
        $this->doctrine = $doctrine;
        $this->ownershipMetadataProvider = $ownershipMetadataProvider;
        $this->ownerAccessor = $ownerAccessor;
        $this->businessUnitManager = $businessUnitManager;
        $this->aclVoter = $aclVoter;
        $this->authorizationChecker = $authorizationChecker;
        $this->tokenAccessor = $tokenAccessor;
        $this->treeProvider = $treeProvider;
    }


    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        $this->object = $value;

        $entityClass = ClassUtils::getClass($value);
        $manager = $this->doctrine->getManagerForClass($entityClass);
        if (null === $manager) {
            return;
        }

        $ownershipMetadata = $this->ownershipMetadataProvider->getMetadata($entityClass);
        if (!$ownershipMetadata || !$ownershipMetadata->hasOwner()) {
            return;
        }

        $owner = $this->ownerAccessor->getOwner($value);
        if (!$owner) {
            return;
        }

        $idValues = $manager->getClassMetadata($entityClass)->getIdentifierValues($value);
        if (count($idValues) !== 0) {
            $accessLevel = $this->getAccessLevel('ASSIGN', $value);
        } else {
            $accessLevel = $this->getAccessLevel('CREATE', 'entity:' . $entityClass);
        }

        $isOwnerValid = true;
        if ($accessLevel === null) {
            $isOwnerValid = false;
        } elseif (null !== $owner->getId()) {
            $isOwnerValid = $this->isValidOwner($ownershipMetadata, $owner, $accessLevel);
        } elseif ($this->ownerAccessor->getOrganization($owner) !== $this->ownerAccessor->getOrganization($value)) {
            $isOwnerValid = false;
        }

        if (!$isOwnerValid) {
            $ownerFieldName = $ownershipMetadata->getOwnerFieldName();
            /** @var ExecutionContextInterface $context */
            $context = $this->context;
            $context->buildViolation($constraint->message)
                ->atPath($ownerFieldName)
                ->setParameter('{{ owner }}', $ownerFieldName)
                ->addViolation();
        }
    }

    /**
     * Returns true if given owner can be used
     *
     * @param OwnershipMetadataInterface $metadata
     * @param object                     $owner
     * @param integer                    $accessLevel
     *
     * @return bool
     */
    protected function isValidOwner(OwnershipMetadataInterface $metadata, $owner, $accessLevel)
    {
        if ($metadata->isUserOwned()) {
            return $this->businessUnitManager->canUserBeSetAsOwner(
                $this->tokenAccessor->getUser(),
                $owner,
                $accessLevel,
                $this->treeProvider,
                $this->getOrganization()
            );
        } elseif ($metadata->isBusinessUnitOwned()) {
            return $this->businessUnitManager->canBusinessUnitBeSetAsOwner(
                $this->tokenAccessor->getUser(),
                $owner,
                $accessLevel,
                $this->treeProvider,
                $this->getOrganization()
            );
        } elseif ($metadata->isOrganizationOwned()) {
            return in_array(
                $owner->getId(),
                $this->treeProvider->getTree()->getUserOrganizationIds($this->tokenAccessor->getUserId()),
                true
            );
        }

        return true;
    }

    /**
     * @param $permission
     * @param $object
     *
     * @return int|null
     */
    protected function getAccessLevel($permission, $object)
    {
        $observer = new OneShotIsGrantedObserver();
        $this->aclVoter->addOneShotIsGrantedObserver($observer);
        if ($this->authorizationChecker->isGranted($permission, $object)) {
            return $observer->getAccessLevel();
        }

        return null;
    }

    /**
     * Returns current Organization
     *
     * @return Organization
     */
    protected function getOrganization()
    {
        return $this->tokenAccessor->getOrganization();
    }
}
