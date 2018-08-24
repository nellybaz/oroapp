<?php

namespace Extend\Entity;

use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;

abstract class EX_OroCMSBundle_ContentBlock extends \Oro\Bundle\LocaleBundle\Model\ExtendFallback implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultTitle($value)
    {
        return $this->setDefaultFallbackValue($this->titles, $value);
    }

    /**
     * @param Localization|null $localization
     * @return LocalizedFallbackValue|null
     */
    public function getTitle(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = NULL)
    {
        return $this->getFallbackValue($this->titles, $localization);
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @return LocalizedFallbackValue|null
     */
    public function getDefaultTitle()
    {
        return $this->getDefaultFallbackValue($this->titles);
    }

    public function __construct()
    {
    }
}