<?php

namespace Oro\Bundle\SecurityBundle\Acl;

/**
 * This class defines all available access levels in the BAP security system.
 */
final class AccessLevel
{
    /**
     * Names of all access levels
     *
     * @var string[]
     */
    public static $allAccessLevelNames = ['BASIC', 'LOCAL', 'DEEP', 'GLOBAL', 'SYSTEM'];

    const NONE_LEVEL_NAME = 'NONE';

    /**
     * Unknown access level.
     */
    const UNKNOWN = -1;

    /**
     * Deny access.
     */
    const NONE_LEVEL = 0;

    /**
     * This access level gives a user access to own records and objects that are shared with the user.
     */
    const BASIC_LEVEL = 1;

    /**
     * This access level gives a user access to records in all business units are assigned to the user.
     */
    const LOCAL_LEVEL = 2;

    /**
     * This access level gives a user access to records in all business units are assigned to the user
     * and all business units subordinate to business units are assigned to the user.
     */
    const DEEP_LEVEL = 3;

    /**
     * This access level gives a user access to all records within the organization,
     * regardless of the business unit hierarchical level to which the domain object belongs
     * or the user is assigned to.
     */
    const GLOBAL_LEVEL = 4;

    /**
     * This access level gives a user access to all records within the system.
     */
    const SYSTEM_LEVEL = 5;

    /**
     * Gets constant value by its name
     *
     * @param string $name
     *
     * @return int
     */
    public static function getConst($name)
    {
        return constant('self::' . $name);
    }

    /**
     * Gets the name of an access level by the given value of the constant
     *
     * @param int $value
     *
     * @return string|null
     */
    public static function getAccessLevelName($value)
    {
        if ($value > self::NONE_LEVEL) {
            return self::$allAccessLevelNames[$value - 1];
        }

        return null;
    }

    /**
     * Get array with access levels from $minLevel to the System level + None level
     *
     * @param int   $minLevel      The min level to find names from. The default value is BASIC_LEVEL
     * @param int   $maxLevel      The max level to find names to. The default value is SYSTEM_LEVEL
     * @param array $excludeLevels Levels to exclude
     *
     * @return array [access level code => access level name, ...]
     */
    public static function getAccessLevelNames(
        $minLevel = self::BASIC_LEVEL,
        $maxLevel = self::SYSTEM_LEVEL,
        array $excludeLevels = []
    ) {
        $names = [self::NONE_LEVEL_NAME];
        for ($level = $minLevel; $level <= $maxLevel; $level++) {
            if (!in_array($level, $excludeLevels, true)) {
                $names[$level] = self::getAccessLevelName($level);
            }
        }

        return $names;
    }
}
