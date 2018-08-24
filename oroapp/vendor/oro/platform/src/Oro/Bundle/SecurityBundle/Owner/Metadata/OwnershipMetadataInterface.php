<?php

namespace Oro\Bundle\SecurityBundle\Owner\Metadata;

interface OwnershipMetadataInterface
{
    /**
     * Gets an owner type for an entity is represented this metadata object
     *
     * @return int Can be a value of one of OwnershipMetadata::OWNER_TYPE_* constants
     */
    public function getOwnerType();

    /**
     * Indicates whether the entity has an owner
     *
     * @return bool
     */
    public function hasOwner();

    /**
     * Indicates whether the entity owner is an user
     *
     * @return bool
     */
    public function isUserOwned();

    /**
     * Indicates whether the entity owner is a business user
     *
     * @return bool
     */
    public function isBusinessUnitOwned();

    /**
     * Indicates whether the entity owner is an organisation
     *
     * @return bool
     */
    public function isOrganizationOwned();

    /**
     * Indicates whether the entity owner has basic level
     *
     * @return bool
     * @deprecated since 2.3, use isUserOwned instead
     */
    public function isBasicLevelOwned();

    /**
     * Indicates whether the entity owner has local level
     *
     * @param bool $deep false by default
     *
     * @return bool
     * @deprecated since 2.3, use isBusinessUnitOwned instead
     */
    public function isLocalLevelOwned($deep = false);

    /**
     * Indicates whether the entity owner has global level
     *
     * @return bool
     * @deprecated since 2.3, use isOrganizationOwned instead
     */
    public function isGlobalLevelOwned();

    /**
     * Indicates whether the entity owner has system level
     *
     * @return bool
     * @deprecated since 2.3
     */
    public function isSystemLevelOwned();

    /**
     * Gets the name of the field is used to store the entity owner
     *
     * @return string
     */
    public function getOwnerFieldName();

    /**
     * Gets the name of the database column is used to store the entity owner
     *
     * @return string
     */
    public function getOwnerColumnName();

    /**
     * @return string
     */
    public function getOrganizationFieldName();

    /**
     * @return string
     */
    public function getOrganizationColumnName();

    /**
     * @return string
     * @deprecated since 2.3, use getOrganizationColumnName instead
     */
    public function getGlobalOwnerColumnName();

    /**
     * @return string
     * @deprecated since 2.3, use getOrganizationFieldName instead
     */
    public function getGlobalOwnerFieldName();

    /**
     * Get list of allowed access level names
     *
     * @return array
     */
    public function getAccessLevelNames();
}
