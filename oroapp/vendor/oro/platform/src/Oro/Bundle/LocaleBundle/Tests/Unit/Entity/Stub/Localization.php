<?php

namespace Oro\Bundle\LocaleBundle\Tests\Unit\Entity\Stub;

use Oro\Bundle\LocaleBundle\Entity\Localization as BaseLocalization;

class Localization extends BaseLocalization
{
    use LocalizedEntityTrait;

    /**
     * Because of magic methods in this class Oro\Component\Testing\Unit\EntityTrait can not set id correctly
     * without direct accessor
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function __call($name, $arguments)
    {
        return $this->localizedMethodCall(['title' => 'titles'], $name, $arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function __get($name)
    {
        return $this->localizedFieldGet(['title' => 'titles'], $name);
    }

    /**
     * {@inheritdoc}
     */
    public function __set($name, $value)
    {
        return $this->localizedFieldSet(['title' => 'titles'], $name, $value);
    }
}
