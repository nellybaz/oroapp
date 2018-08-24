<?php

namespace Extend\Entity;

use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;

abstract class EX_OroCatalogBundle_Category extends \Oro\Bundle\LocaleBundle\Model\ExtendFallback implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $smallImage;
    protected $serialized_data;
    protected $products;
    protected $minimumQuantityToOrder;
    protected $metaTitles;
    protected $metaKeywords;
    protected $metaDescriptions;
    protected $maximumQuantityToOrder;
    protected $manageInventory;
    protected $lowInventoryThreshold;
    protected $largeImage;
    protected $isUpcoming;
    protected $inventoryThreshold;
    protected $highlightLowInventory;
    protected $decrementQuantity;
    protected $backOrder;
    protected $availability_date;

    public function setSmallImage($value)
    {
        $this->smallImage = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setProducts($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->products instanceof \Doctrine\Common\Collections\Collection) {
            $this->products = $value;
            return $this;
        }
        foreach ($this->products as $item) {
            $this->removeProduct($item);
        }
        foreach ($value as $item) {
            $this->addProduct($item);
        }
        return $this;
    }

    public function setMinimumQuantityToOrder($value)
    {
        $this->minimumQuantityToOrder = $value; return $this;
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

    public function setMaximumQuantityToOrder($value)
    {
        $this->maximumQuantityToOrder = $value; return $this;
    }

    public function setManageInventory($value)
    {
        $this->manageInventory = $value; return $this;
    }

    public function setLowInventoryThreshold($value)
    {
        $this->lowInventoryThreshold = $value; return $this;
    }

    public function setLargeImage($value)
    {
        $this->largeImage = $value; return $this;
    }

    public function setIsUpcoming($value)
    {
        $this->isUpcoming = $value; return $this;
    }

    public function setInventoryThreshold($value)
    {
        $this->inventoryThreshold = $value; return $this;
    }

    public function setHighlightLowInventory($value)
    {
        $this->highlightLowInventory = $value; return $this;
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
     * @param string $value
     * @return $this
     */
    public function setDefaultShortDescription($value)
    {
        return $this->setDefaultFallbackValue($this->shortDescriptions, $value);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultMetaTitle($value)
    {
        return $this->setDefaultFallbackValue($this->metaTitles, $value);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultMetaKeyword($value)
    {
        return $this->setDefaultFallbackValue($this->metaKeywords, $value);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultMetaDescription($value)
    {
        return $this->setDefaultFallbackValue($this->metaDescriptions, $value);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultLongDescription($value)
    {
        return $this->setDefaultFallbackValue($this->longDescriptions, $value);
    }

    public function setDecrementQuantity($value)
    {
        $this->decrementQuantity = $value; return $this;
    }

    public function setBackOrder($value)
    {
        $this->backOrder = $value; return $this;
    }

    public function setAvailabilityDate($value)
    {
        $this->availability_date = $value; return $this;
    }

    /**
     * @deprecated since 1.10. Use removeProduct instead
     */
    public function removeProducts($value)
    {
        $this->removeProduct($value);
    }

    public function removeProduct($value)
    {
        if ($this->products && $this->products->contains($value)) {
            $this->products->removeElement($value);
            $value->setCategory(null);
        }
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

    public function getSmallImage()
    {
        return $this->smallImage;
    }

    /**
     * @param Localization|null $localization
     * @return LocalizedFallbackValue|null
     */
    public function getSlugPrototype(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = NULL)
    {
        return $this->getFallbackValue($this->slugPrototypes, $localization);
    }

    /**
     * @param Localization|null $localization
     * @return LocalizedFallbackValue|null
     */
    public function getShortDescription(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = NULL)
    {
        return $this->getFallbackValue($this->shortDescriptions, $localization);
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getMinimumQuantityToOrder()
    {
        return $this->minimumQuantityToOrder;
    }

    public function getMetaTitles()
    {
        return $this->metaTitles;
    }

    /**
     * @param Localization|null $localization
     * @return LocalizedFallbackValue|null
     */
    public function getMetaTitle(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = NULL)
    {
        return $this->getFallbackValue($this->metaTitles, $localization);
    }

    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @param Localization|null $localization
     * @return LocalizedFallbackValue|null
     */
    public function getMetaKeyword(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = NULL)
    {
        return $this->getFallbackValue($this->metaKeywords, $localization);
    }

    public function getMetaDescriptions()
    {
        return $this->metaDescriptions;
    }

    /**
     * @param Localization|null $localization
     * @return LocalizedFallbackValue|null
     */
    public function getMetaDescription(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = NULL)
    {
        return $this->getFallbackValue($this->metaDescriptions, $localization);
    }

    public function getMaximumQuantityToOrder()
    {
        return $this->maximumQuantityToOrder;
    }

    public function getManageInventory()
    {
        return $this->manageInventory;
    }

    public function getLowInventoryThreshold()
    {
        return $this->lowInventoryThreshold;
    }

    /**
     * @param Localization|null $localization
     * @return LocalizedFallbackValue|null
     */
    public function getLongDescription(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = NULL)
    {
        return $this->getFallbackValue($this->longDescriptions, $localization);
    }

    public function getLargeImage()
    {
        return $this->largeImage;
    }

    public function getIsUpcoming()
    {
        return $this->isUpcoming;
    }

    public function getInventoryThreshold()
    {
        return $this->inventoryThreshold;
    }

    public function getHighlightLowInventory()
    {
        return $this->highlightLowInventory;
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
     * @return LocalizedFallbackValue|null
     */
    public function getDefaultShortDescription()
    {
        return $this->getDefaultFallbackValue($this->shortDescriptions);
    }

    /**
     * @return LocalizedFallbackValue|null
     */
    public function getDefaultMetaTitle()
    {
        return $this->getDefaultFallbackValue($this->metaTitles);
    }

    /**
     * @return LocalizedFallbackValue|null
     */
    public function getDefaultMetaKeyword()
    {
        return $this->getDefaultFallbackValue($this->metaKeywords);
    }

    /**
     * @return LocalizedFallbackValue|null
     */
    public function getDefaultMetaDescription()
    {
        return $this->getDefaultFallbackValue($this->metaDescriptions);
    }

    /**
     * @return LocalizedFallbackValue|null
     */
    public function getDefaultLongDescription()
    {
        return $this->getDefaultFallbackValue($this->longDescriptions);
    }

    public function getDecrementQuantity()
    {
        return $this->decrementQuantity;
    }

    public function getBackOrder()
    {
        return $this->backOrder;
    }

    public function getAvailabilityDate()
    {
        return $this->availability_date;
    }

    /**
     * @deprecated since 1.10. Use addProduct instead
     */
    public function addProducts($value)
    {
        $this->addProduct($value);
    }

    public function addProduct($value)
    {
        if (!$this->products->contains($value)) {
            $this->products->add($value);
            $value->setCategory($this);
        }
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
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
        $this->metaTitles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->metaDescriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->metaKeywords = new \Doctrine\Common\Collections\ArrayCollection();
    }
}