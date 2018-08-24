<?php

namespace Oro\Bundle\VisibilityBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class VisibilityChangeSet extends Constraint
{
    /** @var string */
    public $invalidDataMessage ='oro.visibility.category.visibility.message.invalid_data';

    /** @var string */
    public $entityClass;

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return 'oro.visibility.catalog.visibility.change_set.validatior';
    }
}
