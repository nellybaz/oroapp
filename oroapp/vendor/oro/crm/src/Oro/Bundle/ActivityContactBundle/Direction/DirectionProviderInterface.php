<?php

namespace Oro\Bundle\ActivityContactBundle\Direction;

use Doctrine\ORM\EntityManager;

interface DirectionProviderInterface
{
    const DIRECTION_INCOMING = 'incoming';
    const DIRECTION_OUTGOING = 'outgoing';
    const DIRECTION_UNKNOWN  = 'unknown';
    const CONTACT_INFORMATION_SCOPE_EMAIL = 'email';

    /**
     * Return supported activity entity class name
     *
     * @return string
     */
    public function getSupportedClass();

    /**
     * Return direction of activity for target
     *
     * @param object $activity
     * @param object $target
     *
     * @return string
     */
    public function getDirection($activity, $target);

    /**
     * Checks if direction was changed
     *
     * @param array $changeSet
     *
     * @return bool
     */
    public function isDirectionChanged($changeSet = []);

    /**
     * Return activity datetime
     *
     * @param $activity
     *
     * @return \DateTime
     */
    public function getDate($activity);

    /**
     * Return array of last activities for given target
     *
     * @param EntityManager $em
     * @param object        $target
     * @param string        $direction
     * @param integer       $skipId
     *
     * @return array of dates
     *   - all: Last activity date without regard to the direction
     *   - direction:   Last activity date for given direction
     */
    public function getLastActivitiesDateForTarget(EntityManager $em, $target, $direction, $skipId = null);
}
