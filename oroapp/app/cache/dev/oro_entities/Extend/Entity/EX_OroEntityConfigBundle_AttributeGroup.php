<?php

namespace Extend\Entity;

use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;

abstract class EX_OroEntityConfigBundle_AttributeGroup extends \Oro\Bundle\LocaleBundle\Model\ExtendFallback implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultLabel($value)
    {
        return $this->setDefaultFallbackValue($this->labels, $value);
    }

    /**
     * @param Localization|null $localization
     * @return LocalizedFallbackValue|null
     */
    public function getLabel(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = NULL)
    {
        return $this->getFallbackValue($this->labels, $localization);
    }

    /**
     * @return LocalizedFallbackValue|null
     */
    public function getDefaultLabel()
    {
        return $this->getDefaultFallbackValue($this->labels);
    }

    public function __construct()
    {
    }
}