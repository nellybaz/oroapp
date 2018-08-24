<?php

namespace Oro\Bundle\TranslationBundle\Translation;

interface TranslationFieldsIteratorInterface extends \IteratorAggregate
{
    /**
     * Writes value to the field under current position of iterator
     *
     * @param mixed $value
     * @return void
     */
    public function writeCurrent($value);
}
