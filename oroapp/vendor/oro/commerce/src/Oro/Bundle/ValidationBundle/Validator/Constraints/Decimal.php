<?php

namespace Oro\Bundle\ValidationBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class Decimal extends Constraint implements AliasAwareConstraintInterface
{
    const ALIAS = 'decimal';

    public $message = 'This value should be decimal number.';

    /**
     * {@inheritdoc}
     */
    public function getAlias()
    {
        return self::ALIAS;
    }
}
