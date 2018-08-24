<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Entity\Stub;

use Doctrine\Common\Collections\ArrayCollection;
use Oro\Bundle\EntityBundle\Entity\EntityFieldFallbackValue;
use Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue;
use Oro\Bundle\LocaleBundle\Tests\Unit\Entity\Stub\LocalizedEntityTrait;
use Oro\Bundle\ProductBundle\Entity\Product as BaseProduct;
use Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision;
use Oro\Component\PropertyAccess\PropertyAccessor;
use Symfony\Component\PropertyAccess\PropertyAccess;

class Product extends BaseProduct
{
    use LocalizedEntityTrait;

    /**
     * @var PropertyAccessor
     */
    private $propertyAccessor;

    /**
     * @var AbstractEnumValue
     */
    private $inventoryStatus;

    /**
     * @var mixed
     */
    private $visibility = [];

    /**
     * @var string
     */
    private $size;

    /**
     * @var string
     */
    private $color;

    /**
     * @var bool
     */
    private $slimFit;

    /**
     * @var EntityFieldFallbackValue
     */
    private $pageTemplate;

    /**
     * @var AbstractEnumValue[]|ArrayCollection
     */
    private $flags;

    /**
     * @var array
     */
    private $localizedFields = [
        'name' => 'names',
        'description' => 'descriptions',
        'shortDescription' => 'shortDescriptions',
    ];

    public function __construct()
    {
        parent::__construct();

        $this->flags = new ArrayCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function __call($name, $arguments)
    {
        return $this->localizedMethodCall($this->localizedFields, $name, $arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->localizedFields)) {
            return $this->localizedFieldGet($this->localizedFields, $name);
        } else {
            $this->getPropertyAccessor()->getValue($this, $name);
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->localizedFields)) {
            return $this->localizedFieldSet($this->localizedFields, $name, $value);
        } else {
            //PropertyAccessor::setValue() not work in this case
            $reflection = new \ReflectionProperty(self::class, $name);
            $reflection->setAccessible(true);
            $reflection->setValue($this, $value);
        }

        return null;
    }

    /**
     * @return PropertyAccessor
     */
    private function getPropertyAccessor()
    {
        if (!$this->propertyAccessor) {
            $this->propertyAccessor = PropertyAccess::createPropertyAccessor();
        }

        return $this->propertyAccessor;
    }

    /**
     * @return AbstractEnumValue
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param mixed $visibility
     * @return AbstractEnumValue
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * @return AbstractEnumValue
     */
    public function getInventoryStatus()
    {
        return $this->inventoryStatus;
    }

    /**
     * @param AbstractEnumValue $inventoryStatus
     * @return $this
     */
    public function setInventoryStatus(AbstractEnumValue $inventoryStatus)
    {
        $this->inventoryStatus = $inventoryStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getSlimFit()
    {
        return $this->slimFit;
    }

    /**
     * @param bool $slimFit
     */
    public function setSlimFit($slimFit)
    {
        $this->slimFit = $slimFit;
    }

    /**
     * @return EntityFieldFallbackValue
     */
    public function getPageTemplate()
    {
        return $this->pageTemplate;
    }

    /**
     * @param EntityFieldFallbackValue $pageTemplate
     */
    public function setPageTemplate(EntityFieldFallbackValue $pageTemplate)
    {
        $this->pageTemplate = $pageTemplate;
    }

    /**
     * @param ProductUnitPrecision $primaryUnitPrecision
     */
    public function setDirectlyPrimaryUnitPrecision(ProductUnitPrecision $primaryUnitPrecision)
    {
        $this->primaryUnitPrecision = $primaryUnitPrecision;
    }

    /**
     * @return ArrayCollection|AbstractEnumValue[]
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * @param ArrayCollection|AbstractEnumValue[] $flags
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;
    }
}
