<?php

namespace Oro\Bundle\ReportBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

use Oro\Bundle\ReportBundle\Entity\Report;
use Oro\Bundle\ReportBundle\Validator\Constraints\ReportDefinitionConstraint;

class ReportDefinitionValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$value instanceof Report) {
            return;
        }

        $definition = json_decode($value->getDefinition(), true);

        /** @var ReportDefinitionConstraint $constraint */
        if (!isset($definition['columns'])) {
            $this->context->addViolation($constraint->columnIsMandatory);
        }
    }
}
