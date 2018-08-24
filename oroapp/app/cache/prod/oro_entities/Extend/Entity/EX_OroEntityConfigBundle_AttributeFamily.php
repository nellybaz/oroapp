<?php

namespace Extend\Entity;

use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;

abstract class EX_OroEntityConfigBundle_AttributeFamily extends \Oro\Bundle\LocaleBundle\Model\ExtendFallback implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $image;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setImage($value)
    {
        $this->image = $value; return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultLabel($value)
    {
        return $this->setDefaultFallbackValue($this->labels, $value);
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @param Localization|null $localization
     * @return LocalizedFallbackValue|null
     */
    public function getLabel(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = NULL)
    {
        return $this->getFallbackValue($this->labels, $localization);
    }

    public function getImage()
    {
        return $this->image;
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