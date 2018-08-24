<?php

namespace Oro\Bundle\HangoutsCallBundle\Placeholder;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;

class CallPlaceholderFilter
{
    const CALL_CLASS = 'Oro\Bundle\CallBundle\Entity\Call';

    /** @var PlaceholderFilter */
    protected $placeholderFilter;


    /** @var DoctrineHelper */
    protected $doctrineHelper;

    /**
     * @param PlaceholderFilter $placeholderFilter
     * @param DoctrineHelper $doctrineHelper
     */
    public function __construct(
        PlaceholderFilter $placeholderFilter,
        DoctrineHelper $doctrineHelper
    ) {
        $this->placeholderFilter = $placeholderFilter;
        $this->doctrineHelper = $doctrineHelper;
    }

    /**
     * Check is "Start a Hangout" is applicable
     *
     * @param object|null $entity
     * @return bool
     */
    public function isApplicable($entity = null)
    {
        return $this->placeholderFilter->isPhoneApplicable() &&
            is_object($entity) && $this->doctrineHelper->getEntityClass($entity) == self::CALL_CLASS;
    }
}
