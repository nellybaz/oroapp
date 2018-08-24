<?php

namespace Oro\Bundle\SecurityBundle\Acl\Extension;

use Symfony\Component\Security\Acl\Exception\InvalidDomainObjectException;

/**
 * Provides an interface which should be implemented by a class
 * which makes decisions based on ownership of domain objects.
 */
interface AccessLevelOwnershipDecisionMakerInterface
{
    /**
     * Determines whether the given domain object is global level entity
     *
     * @param object $domainObject
     *
     * @return bool
     * @deprecated since 2.3. Use isOrganization instead
     */
    public function isGlobalLevelEntity($domainObject);

    /**
     * Determines whether the given domain object is local level entity or deep level entity
     *
     * @param object $domainObject
     *
     * @return bool
     * @deprecated since 2.3. Use isBusinessUnit instead
     */
    public function isLocalLevelEntity($domainObject);

    /**
     * Determines whether the given domain object is basic level entity
     *
     * @param object $domainObject
     *
     * @return bool
     * @deprecated since 2.3. Use isUser instead
     */
    public function isBasicLevelEntity($domainObject);

    /**
     * Determines whether the given domain object is associated with
     * an any global level entity (e.g. organization) of the given user
     *
     * @param object|null $user
     * @param object      $domainObject
     * @param object      $organization
     *
     * @return bool
     * @throws InvalidDomainObjectException
     * @deprecated since 2.3. Use isAssociatedWithOrganization instead
     */
    public function isAssociatedWithGlobalLevelEntity($user, $domainObject, $organization = null);

    /**
     * Determines whether the given domain object is associated with
     * an any (e.g. business unit) of the given user
     *
     * @param object|null $user
     * @param object      $domainObject
     * @param boolean     $deep Specify whether subordinate business units should be checked. Defaults to false.
     * @param object      $organization
     *
     * @return bool
     * @throws InvalidDomainObjectException
     * @deprecated since 2.3. Use isAssociatedWithBusinessUnit instead
     */
    public function isAssociatedWithLocalLevelEntity($user, $domainObject, $deep = false, $organization = null);

    /**
     * Determines whether the given domain object is associated with the basic level entity
     *
     * @param object|null $user
     * @param object      $domainObject
     * @param object      $organization
     *
     * @return bool
     * @throws InvalidDomainObjectException
     * @deprecated since 2.3. Use isAssociatedWithUser instead
     */
    public function isAssociatedWithBasicLevelEntity($user, $domainObject, $organization = null);

    /**
     * Determines whether the given domain object is an organization
     *
     * @param object $domainObject
     *
     * @return bool
     */
    public function isOrganization($domainObject);

    /**
     * Determines whether the given domain object is a business unit
     *
     * @param object $domainObject
     *
     * @return bool
     */
    public function isBusinessUnit($domainObject);

    /**
     * Determines whether the given domain object is an user
     *
     * @param object $domainObject
     *
     * @return bool
     */
    public function isUser($domainObject);

    /**
     * Determines whether the given domain object is associated with
     * an organization of the given user
     *
     * @param object      $user
     * @param object      $domainObject
     * @param object|null $organization
     *
     * @return bool
     *
     * @throws InvalidDomainObjectException
     */
    public function isAssociatedWithOrganization($user, $domainObject, $organization = null);

    /**
     * Determines whether the given domain object is associated with
     * a business unit of the given user
     *
     * @param object      $user
     * @param object      $domainObject
     * @param boolean     $deep Specify whether subordinate business units should be checked. Defaults to false.
     * @param object|null $organization
     *
     * @return bool
     *
     * @throws InvalidDomainObjectException
     */
    public function isAssociatedWithBusinessUnit($user, $domainObject, $deep = false, $organization = null);

    /**
     * Determines whether the given domain object is associated with an user
     *
     * @param object      $user
     * @param object      $domainObject
     * @param object|null $organization
     *
     * @return bool
     *
     * @throws InvalidDomainObjectException
     */
    public function isAssociatedWithUser($user, $domainObject, $organization = null);

    /**
     * @return bool
     */
    public function supports();
}
