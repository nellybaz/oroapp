<?php

namespace Extend\Entity;

use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;

abstract class EX_OroWebCatalogBundle_ContentNode extends \Oro\Bundle\LocaleBundle\Model\ExtendFallback implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $metaTitles;
    protected $metaKeywords;
    protected $metaDescriptions;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setMetaTitles($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->metaTitles instanceof \Doctrine\Common\Collections\Collection) {
            $this->metaTitles = $value;
            return $this;
        }
        foreach ($this->metaTitles as $item) {
            $this->removeMetaTitl($item);
        }
        foreach ($value as $item) {
            $this->addMetaTitl($item);
        }
        return $this;
    }

    public function setMetaKeywords($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->metaKeywords instanceof \Doctrine\Common\Collections\Collection) {
            $this->metaKeywords = $value;
            return $this;
        }
        foreach ($this->metaKeywords as $item) {
            $this->removeMetaKeyword($item);
        }
        foreach ($value as $item) {
            $this->addMetaKeyword($item);
        }
        return $this;
    }

    public function setMetaDescriptions($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->metaDescriptions instanceof \Doctrine\Common\Collections\Collection) {
            $this->metaDescriptions = $value;
            return $this;
        }
        foreach ($this->metaDescriptions as $item) {
            $this->removeMetaDescription($item);
        }
        foreach ($value as $item) {
            $this->addMetaDescription($item);
        }
        return $this;
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
     * @param string $value
     * @return $this
     */
    public function setDefaultSlugPrototype($value)
    {
        return $this->setDefaultFallbackValue($this->slugPrototypes, $value);
    }

    /**
     * @deprecated since 1.10. Use removeMetaTitl instead
     */
    public function removeMetaTitles($value)
    {
        $this->removeMetaTitl($value);
    }

    public function removeMetaTitl($value)
    {
        if ($this->metaTitles && $this->metaTitles->contains($value)) {
            $this->metaTitles->removeElement($value);
        }
    }

    /**
     * @deprecated since 1.10. Use removeMetaKeyword instead
     */
    public function removeMetaKeywords($value)
    {
        $this->removeMetaKeyword($value);
    }

    public function removeMetaKeyword($value)
    {
        if ($this->metaKeywords && $this->metaKeywords->contains($value)) {
            $this->metaKeywords->removeElement($value);
        }
    }

    /**
     * @deprecated since 1.10. Use removeMetaDescription instead
     */
    public function removeMetaDescriptions($value)
    {
        $this->removeMetaDescription($value);
    }

    public function removeMetaDescription($value)
    {
        if ($this->metaDescriptions && $this->metaDescriptions->contains($value)) {
            $this->metaDescriptions->removeElement($value);
        }
    }

    /**
     * @param Localization|null $localization
     * @return LocalizedFallbackValue|null
     */
    public function getTitle(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = NULL)
    {
        return $this->getFallbackValue($this->titles, $localization);
    }

    /**
     * @param Localization|null $localization
     * @return LocalizedFallbackValue|null
     */
    public function getSlugPrototype(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = NULL)
    {
        return $this->getFallbackValue($this->slugPrototypes, $localization);
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getMetaTitles()
    {
        return $this->metaTitles;
    }

    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    public function getMetaDescriptions()
    {
        return $this->metaDescriptions;
    }

    /**
     * @return LocalizedFallbackValue|null
     */
    public function getDefaultTitle()
    {
        return $this->getDefaultFallbackValue($this->titles);
    }

    /**
     * @return LocalizedFallbackValue|null
     */
    public function getDefaultSlugPrototype()
    {
        return $this->getDefaultFallbackValue($this->slugPrototypes);
    }

    /**
     * @deprecated since 1.10. Use addMetaTitl instead
     */
    public function addMetaTitles($value)
    {
        $this->addMetaTitl($value);
    }

    public function addMetaTitl($value)
    {
        if (!$this->metaTitles->contains($value)) {
            $this->metaTitles->add($value);
        }
    }

    /**
     * @deprecated since 1.10. Use addMetaKeyword instead
     */
    public function addMetaKeywords($value)
    {
        $this->addMetaKeyword($value);
    }

    public function addMetaKeyword($value)
    {
        if (!$this->metaKeywords->contains($value)) {
            $this->metaKeywords->add($value);
        }
    }

    /**
     * @deprecated since 1.10. Use addMetaDescription instead
     */
    public function addMetaDescriptions($value)
    {
        $this->addMetaDescription($value);
    }

    public function addMetaDescription($value)
    {
        if (!$this->metaDescriptions->contains($value)) {
            $this->metaDescriptions->add($value);
        }
    }

    public function __construct()
    {
        $this->metaTitles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->metaDescriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->metaKeywords = new \Doctrine\Common\Collections\ArrayCollection();
    }
}