<?php

namespace Oro\Bundle\ContactBundle\Validator\Constraints;

use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

use Oro\Bundle\ContactBundle\Entity\Contact;

class HasContactInformationValidator extends ConstraintValidator
{
    /** @var TranslatorInterface */
    protected $translator;

    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$value) {
            return;
        }

        if (!$value instanceof Contact) {
            throw new \InvalidArgumentException(sprintf(
                'Validator expects $value to be instance of "%s"',
                'Oro\Bundle\ContactBundle\Entity\Contact'
            ));
        }

        if ($value->getFirstName() ||
            $value->getLastName() ||
            $value->getEmails()->count() > 0 ||
            $value->getPhones()->count() > 0) {
            return;
        }

        $this->context->addViolation(
            $this->translator->trans('oro.contact.validators.contact.has_information', [], 'validators')
        );
    }
}
