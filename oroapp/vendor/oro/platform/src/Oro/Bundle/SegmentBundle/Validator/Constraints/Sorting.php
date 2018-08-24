<?php

namespace Oro\Bundle\SegmentBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Oro\Bundle\SegmentBundle\Validator\SortingValidator;

class Sorting extends Constraint
{
    /**
     * @var string
     */
    public $message = 'oro.segment.validation.sorting';

    /**
     * {@inheritdoc}
     */
    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return SortingValidator::class;
    }
}
