<?php

namespace Oro\Bundle\EmailBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\InvalidArgumentException;
use Symfony\Component\Form\Exception\UnexpectedTypeException;

class EmailBodyTypeApiTransformer implements DataTransformerInterface
{
    /**
     * {@inheritdoc}
     */
    public function transform($value)
    {
        if (null === $value) {
            return '';
        }

        return $value ? 'text' : 'html';
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform($value)
    {
        if (!$value) {
            return null;
        }

        if (!is_string($value)) {
            throw new UnexpectedTypeException($value, 'string');
        }

        switch ($value) {
            case 'text':
                return true;
            case 'html':
                return false;
            default:
                throw new InvalidArgumentException(
                    sprintf('Expected values "text" or "html", "%s" given', $value)
                );
        }
    }
}
