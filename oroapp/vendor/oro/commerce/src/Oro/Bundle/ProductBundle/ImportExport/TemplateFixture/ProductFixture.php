<?php

namespace Oro\Bundle\ProductBundle\ImportExport\TemplateFixture;

use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeFamily;
use Oro\Bundle\ImportExportBundle\TemplateFixture\AbstractTemplateRepository;
use Oro\Bundle\ImportExportBundle\TemplateFixture\TemplateFixtureInterface;
use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Component\Testing\Unit\Entity\Stub\StubEnumValue;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;

class ProductFixture extends AbstractTemplateRepository implements TemplateFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function getEntityClass()
    {
        return 'Oro\Bundle\ProductBundle\Entity\Product';
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return $this->getEntityData('Example Product');
    }

    /**
     * {@inheritdoc}
     */
    protected function createEntity($key)
    {
        return new Product();
    }

    /**
     * @param string  $key
     * @param Product $entity
     */
    public function fillEntityData($key, $entity)
    {
        $inventoryStatus = new StubEnumValue(Product::INVENTORY_STATUS_IN_STOCK, 'In Stock');

        $localization = new Localization();
        $localization->setName('English');

        $name = new LocalizedFallbackValue();
        $name->setString('Product Name');

        $localizedName = new LocalizedFallbackValue();
        $localizedName->setLocalization($localization)
            ->setString('US Product Name')
            ->setFallback('system');

        $description = new LocalizedFallbackValue();
        $description->setText('Product Description');

        $localizedDescription = new LocalizedFallbackValue();
        $localizedDescription->setLocalization($localization)
            ->setText('US Product Description')
            ->setFallback('system');

        $shortDescription = new LocalizedFallbackValue();
        $shortDescription->setText('Product Short Description');

        $localizedShortDescription = new LocalizedFallbackValue();
        $localizedShortDescription->setLocalization($localization)
            ->setText('US Product Short Description')
            ->setFallback('system');

        $primaryProductUnit = (new ProductUnit())
            ->setCode('kg')
            ->setDefaultPrecision(3);

        $additionalProductUnit = (new ProductUnit())
            ->setCode('item')
            ->setDefaultPrecision(0);

        $primaryProductUnitPrecision = $this
            ->createEntityWithId('Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision', 1);
        $primaryProductUnitPrecision
            ->setUnit($primaryProductUnit)
            ->setPrecision($primaryProductUnit->getDefaultPrecision())
            ->setConversionRate(1)
            ->setSell(true);

        $additionalProductUnitPrecision = $this
            ->createEntityWithId('Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision', 2);
        $additionalProductUnitPrecision
            ->setUnit($additionalProductUnit)
            ->setPrecision($additionalProductUnit->getDefaultPrecision())
            ->setConversionRate(5)
            ->setSell(false);

        $attributeFamily = new AttributeFamily();
        $attributeFamily->setCode('default_family');

        $entity->setSku('sku_001')
            ->setAttributeFamily($attributeFamily)
            ->setStatus('enabled')
            ->setType(Product::TYPE_SIMPLE)
            ->setInventoryStatus($inventoryStatus)
            ->addName($name)
            ->addName($localizedName)
            ->setPrimaryUnitPrecision($primaryProductUnitPrecision)
            ->addAdditionalUnitPrecision($additionalProductUnitPrecision)
            ->addDescription($description)
            ->addDescription($localizedDescription)
            ->addShortDescription($shortDescription)
            ->addShortDescription($localizedShortDescription);
    }

    /**
     * @param string $className
     * @param int $id
     *
     * @return object
     */
    protected function createEntityWithId($className, $id)
    {
        $entity = new $className;

        $reflectionClass = new \ReflectionClass($className);
        $method = $reflectionClass->getProperty('id');
        $method->setAccessible(true);
        $method->setValue($entity, $id);

        return $entity;
    }
}
