<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeFamily;
use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\ProductBundle\Entity\ProductImage;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision;
use Oro\Bundle\ProductBundle\Entity\ProductVariantLink;
use Oro\Bundle\ProductBundle\Tests\Unit\Entity\Stub\Product;
use Oro\Bundle\RedirectBundle\Entity\Slug;
use Oro\Bundle\RedirectBundle\Model\SlugPrototypesWithRedirect;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Component\Testing\Unit\EntityTestCaseTrait;

/**
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class ProductTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    public function testProperties()
    {
        $now = new \DateTime('now');
        $properties = [
            ['id', '123'],
            ['sku', 'sku-test-01'],
            ['owner', new User()],
            ['organization', new Organization()],
            ['primaryUnitPrecision',  null],
            ['createdAt', $now, false],
            ['updatedAt', $now, false],
            ['status', Product::STATUS_ENABLED, Product::STATUS_DISABLED],
            ['type', Product::TYPE_CONFIGURABLE, Product::TYPE_SIMPLE],
            ['attributeFamily', new AttributeFamily()],
            ['slugPrototypesWithRedirect', new SlugPrototypesWithRedirect(new ArrayCollection(), false), false],
            ['featured', true, false],
            ['newArrival', true, false],
        ];

        $this->assertPropertyAccessors(new Product(), $properties);
    }

    public function testCollections()
    {
        $collections = [
            ['names', new LocalizedFallbackValue()],
            ['descriptions', new LocalizedFallbackValue()],
            ['shortDescriptions', new LocalizedFallbackValue()],
            ['images', new ProductImage()],
            ['slugPrototypes', new LocalizedFallbackValue()],
            ['slugs', new Slug()],
            ['variantLinks', new ProductVariantLink()],
            ['parentVariantLinks', new ProductVariantLink()],
        ];

        $this->assertPropertyCollections(new Product(), $collections);
    }

    public function testToString()
    {
        $product = new Product();
        $this->assertSame('', (string)$product);

        $product->setSku(123);
        $this->assertSame('123', (string)$product);

        $product->addName((new LocalizedFallbackValue())->setString('localized_name'));
        $this->assertEquals('localized_name', (string)$product);
    }

    public function testJsonSerialize()
    {
        $product = new Product();

        $id = 123;
        $refProduct = new \ReflectionObject($product);
        $refId = $refProduct->getProperty('id');
        $refId->setAccessible(true);
        $refId->setValue($product, $id);

        $unitPrecision = new ProductUnitPrecision();
        $unitPrecision->setUnit((new ProductUnit())->setCode('kg'));
        $unitPrecision->setPrecision(3);

        $product->setPrimaryUnitPrecision($unitPrecision);
        $product->addName((new LocalizedFallbackValue())->setString('1234'));
        $product->setSku('SKU' . $id);

        $this->assertEquals(
            '{"id":123,"product_units":{"kg":3},"unit":"kg","name":"1234","sku":"SKU123"}',
            json_encode($product)
        );
    }

    public function testPrePersist()
    {
        $product = new Product();
        $this->addDefaultName($product, 'default');
        $product->prePersist();
        $this->assertInstanceOf('\DateTime', $product->getCreatedAt());
        $this->assertInstanceOf('\DateTime', $product->getUpdatedAt());
    }

    public function testPrePersistWithoutDefaultName()
    {
        $product = new Product();
        $this->expectException(\RuntimeException::class);
        $product->prePersist();
    }

    public function testPreUpdate()
    {
        $product = new Product();
        $product->setType(Product::TYPE_SIMPLE);
        $product->setVariantFields(['field']);
        $product->addVariantLink(new ProductVariantLink(new Product(), new Product()));
        $this->addDefaultName($product, 'default');

        $product->preUpdate();

        $this->assertInstanceOf('\DateTime', $product->getUpdatedAt());
        $this->assertCount(0, $product->getVariantFields());
    }

    public function testPreUpdateWithoutDefaultName()
    {
        $product = new Product();
        $product->setType(Product::TYPE_SIMPLE);
        $product->setVariantFields(['field']);
        $product->addVariantLink(new ProductVariantLink(new Product(), new Product()));

        $this->expectException(\RuntimeException::class);
        $product->preUpdate();
    }

    public function testUnitRelation()
    {
        $unitPrecision = new ProductUnitPrecision();
        $unitPrecision->setUnit((new ProductUnit())->setCode('kg'));
        $unitPrecision->setPrecision(0);

        $product = new Product();

        $this->assertCount(0, $product->getUnitPrecisions());

        // Add new ProductUnitPrecision
        $this->assertSame($product, $product->addAdditionalUnitPrecision($unitPrecision));
        $this->assertCount(1, $product->getUnitPrecisions());

        $actual = $product->getUnitPrecisions();
        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $actual);
        $this->assertEquals([$unitPrecision], $actual->toArray());

        // Add already added ProductUnitPrecision
        $this->assertSame($product, $product->addAdditionalUnitPrecision($unitPrecision));
        $this->assertCount(1, $product->getUnitPrecisions());

        // Remove ProductUnitPrecision
        $this->assertSame($product, $product->removeAdditionalUnitPrecision($unitPrecision));
        $this->assertCount(0, $product->getUnitPrecisions());

        $actual = $product->getUnitPrecisions();
        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $actual);
        $this->assertNotContains($unitPrecision, $actual->toArray());
    }

    public function testImagesRelation()
    {
        $productImage = new ProductImage();
        $product = new Product();

        $this->assertCount(0, $product->getImages());

        $this->assertSame($product, $product->addImage($productImage));
        $this->assertCount(1, $product->getImages());

        $actual = $product->getImages();
        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $actual);
        $this->assertEquals([$productImage], $actual->toArray());

        $this->assertSame($product, $product->addImage($productImage));
        $this->assertCount(1, $product->getImages());

        $this->assertSame($product, $product->removeImage($productImage));
        $this->assertCount(0, $product->getImages());

        $actual = $product->getImages();
        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $actual);
        $this->assertNotContains($productImage, $actual->toArray());
    }

    public function testGetUnitPrecisionByUnitCode()
    {
        $unit = new ProductUnit();
        $unit
            ->setCode('kg')
            ->setDefaultPrecision(3);

        $unitPrecision = new ProductUnitPrecision();
        $unitPrecision
            ->setUnit($unit)
            ->setPrecision($unit->getDefaultPrecision());

        $product = new Product();
        $product->addAdditionalUnitPrecision($unitPrecision);

        $this->assertNull($product->getUnitPrecision('item'));
        $this->assertEquals($unitPrecision, $product->getUnitPrecision('kg'));
    }

    public function testGetAvailableUnitCodes()
    {
        $unit = new ProductUnit();
        $unit
            ->setCode('kg')
            ->setDefaultPrecision(3);

        $unitPrecision = new ProductUnitPrecision();
        $unitPrecision
            ->setUnit($unit)
            ->setPrecision($unit->getDefaultPrecision());

        $product = new Product();
        $product->setPrimaryUnitPrecision($unitPrecision);

        $this->assertEquals(['kg'], $product->getAvailableUnitCodes());
    }

    public function testGetAvailableUnitsPrecision()
    {
        $kgUnit = new ProductUnit();
        $kgUnit->setCode('kg')->setDefaultPrecision(3);
        $itemUnit = new ProductUnit();
        $itemUnit->setCode('item')->setDefaultPrecision(0);

        $kgPrecision = new ProductUnitPrecision();
        $kgPrecision->setUnit($kgUnit)->setPrecision(1);
        $itemPrecision = new ProductUnitPrecision();
        $itemPrecision->setUnit($itemUnit)->setPrecision(0);

        $product = new Product();
        $product->setPrimaryUnitPrecision($kgPrecision)->addUnitPrecision($itemPrecision);

        $this->assertEquals(['kg' => 1, 'item' => 0], $product->getAvailableUnitsPrecision());
    }

    public function testGetAvailableUnits()
    {
        $unit = new ProductUnit();
        $unit
            ->setCode('itm')
            ->setDefaultPrecision(3);

        $unitPrecision = new ProductUnitPrecision();
        $unitPrecision
            ->setUnit($unit)
            ->setPrecision($unit->getDefaultPrecision());

        $product = new Product();
        $product->addUnitPrecision($unitPrecision);

        $this->assertEquals(['itm' => $unit], $product->getAvailableUnits());
    }

    public function testClone()
    {
        $id = 123;
        $unit = new ProductUnit();
        $unit->setCode('kg')->setDefaultPrecision(3);
        $unitPrecision = new ProductUnitPrecision();
        $unitPrecision->setUnit($unit);
        $product = new Product();
        $product->addAdditionalUnitPrecision($unitPrecision);
        $product->getNames()->add(new LocalizedFallbackValue());
        $product->getDescriptions()->add(new LocalizedFallbackValue());
        $product->getShortDescriptions()->add(new LocalizedFallbackValue());
        $product->addVariantLink(new ProductVariantLink(new Product(), new Product()));
        $product->setVariantFields(['field']);
        $product->addImage(new ProductImage());
        $product->addSlugPrototype(new LocalizedFallbackValue());
        $product->addSlug(new Slug());

        $refProduct = new \ReflectionObject($product);
        $refId = $refProduct->getProperty('id');
        $refId->setAccessible(true);
        $refId->setValue($product, $id);

        $this->assertEquals($id, $product->getId());
        $this->assertCount(1, $product->getUnitPrecisions());
        $this->assertCount(1, $product->getNames());
        $this->assertCount(1, $product->getDescriptions());
        $this->assertCount(1, $product->getShortDescriptions());
        $this->assertCount(1, $product->getImages());
        $this->assertCount(1, $product->getVariantLinks());
        $this->assertCount(1, $product->getVariantFields());
        $this->assertCount(1, $product->getSlugPrototypes());
        $this->assertCount(1, $product->getSlugs());

        $productCopy = clone $product;

        $this->assertNull($productCopy->getId());
        $this->assertEmpty($productCopy->getUnitPrecisions());
        $this->assertEmpty($productCopy->getNames());
        $this->assertEmpty($productCopy->getDescriptions());
        $this->assertEmpty($productCopy->getShortDescriptions());
        $this->assertEmpty($productCopy->getImages());
        $this->assertEmpty($productCopy->getVariantLinks());
        $this->assertEmpty($productCopy->getVariantFields());
        $this->assertEmpty($productCopy->getSlugPrototypes());
        $this->assertEmpty($productCopy->getSlugs());
    }

    public function testGetDefaultName()
    {
        $defaultName = 'default';
        $product = new Product();
        $this->addDefaultName($product, $defaultName);

        $localizedName = new LocalizedFallbackValue();
        $localizedName->setString('localized')
            ->setLocalization(new Localization());

        $product->addName($localizedName);

        $this->assertEquals($defaultName, $product->getDefaultName());
    }

    public function testNoDefaultName()
    {
        $product = new Product();
        $this->assertNull($product->getDefaultName());
    }

    public function testGetDefaultDescription()
    {
        $defaultDescription = new LocalizedFallbackValue();
        $defaultDescription->setString('default');

        $localizedDescription = new LocalizedFallbackValue();
        $localizedDescription->setString('localized')
            ->setLocalization(new Localization());

        $product = new Product();
        $product->addDescription($defaultDescription)
            ->addDescription($localizedDescription);

        $this->assertEquals($defaultDescription, $product->getDefaultDescription());
    }

    public function testGetDefaultShortDescription()
    {
        $defaultShortDescription = new LocalizedFallbackValue();
        $defaultShortDescription->setString('default short');

        $localizedShortDescription = new LocalizedFallbackValue();
        $localizedShortDescription->setString('localized')->setLocalization(new Localization());

        $product = new Product();
        $product->addShortDescription($defaultShortDescription)->addShortDescription($localizedShortDescription);

        $this->assertEquals($defaultShortDescription, $product->getDefaultShortDescription());
    }

    public function testVariantLinksRelation()
    {
        $variantLink = new ProductVariantLink(new Product(), new Product());
        $product = new Product();

        $this->assertCount(0, $product->getVariantLinks());

        $this->assertSame($product, $product->addVariantLink($variantLink));
        $this->assertCount(1, $product->getVariantLinks());

        $actual = $product->getVariantLinks();
        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $actual);
        $this->assertEquals([$variantLink], $actual->toArray());

        // Add already added variant link
        $this->assertSame($product, $product->addVariantLink($variantLink));
        $this->assertCount(1, $product->getVariantLinks());

        // Remove variant link
        $this->assertSame($product, $product->removeVariantLink($variantLink));
        $this->assertCount(0, $product->getVariantLinks());

        $actual = $product->getVariantLinks();
        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $actual);
        $this->assertNotContains($variantLink, $actual->toArray());
    }

    /**
     * @return array
     */
    public function getDefaultDescriptionExceptionDataProvider()
    {
        return [
            'several default descriptions' => [[new LocalizedFallbackValue(), new LocalizedFallbackValue()]],
        ];
    }

    public function testGetStatuses()
    {
        $this->assertInternalType('array', Product::getStatuses());
        $this->assertNotEmpty('array', Product::getStatuses());
    }

    public function testUnitPrecisions()
    {
        $product = new Product();
        $unitPrecision1 = $this->createUnitPrecision('kg', 3);
        $unitPrecision2 = $this->createUnitPrecision('piece', 1);
        $unitPrecision3 = $this->createUnitPrecision('set', 1);

        $product->setPrimaryUnitPrecision($unitPrecision1);
        $product->addAdditionalUnitPrecision($unitPrecision2);
        $product->addAdditionalUnitPrecision($unitPrecision3);

        $expectedAdditionalUnits = [$unitPrecision1, $unitPrecision2, $unitPrecision3];
        $actualAdditionalUnits = $product->getUnitPrecisions()->toArray();

        $this->assertEquals($expectedAdditionalUnits, array_values($actualAdditionalUnits));
    }

    /**
     * @param string $code
     * @param integer $precisionValue
     * @return ProductUnitPrecision $unitPrecision
     */
    private function createUnitPrecision($code, $precisionValue)
    {
        $unit = new ProductUnit();
        $unit
            ->setCode($code)
            ->setDefaultPrecision($precisionValue);

        $unitPrecision = new ProductUnitPrecision();
        $unitPrecision
            ->setUnit($unit)
            ->setPrecision($unit->getDefaultPrecision());
        return $unitPrecision;
    }

    public function testGetImagesByType()
    {
        $product = new Product();

        $this->assertCount(0, $product->getImagesByType('main'));

        $image1 = new ProductImage();
        $image1->addType('main');
        $image1->addType('additional');

        $image2 = new ProductImage();
        $image2->addType('main');

        $product->addImage($image1);
        $product->addImage($image2);

        $this->assertCount(2, $product->getImagesByType('main'));
        $this->assertCount(1, $product->getImagesByType('additional'));
    }

    public function testIsConfigurable()
    {
        $simpleProduct = new Product();

        $configurableProduct = new Product();
        $configurableProduct->setType(Product::TYPE_CONFIGURABLE);

        $this->assertFalse($simpleProduct->isConfigurable());
        $this->assertTrue($configurableProduct->isConfigurable());
    }

    public function testIsSimple()
    {
        $simpleProduct = new Product();

        $configurableProduct = new Product();
        $configurableProduct->setType(Product::TYPE_CONFIGURABLE);

        $this->assertFalse($configurableProduct->isSimple());
        $this->assertTrue($simpleProduct->isSimple());
    }

    public function testGetTypes()
    {
        $this->assertEquals([Product::TYPE_SIMPLE, Product::TYPE_CONFIGURABLE], Product::getTypes());
    }

    /**
     * @param Product $product
     * @param string $name
     */
    protected function addDefaultName(Product $product, $name)
    {
        $defaultName = new LocalizedFallbackValue();
        $defaultName->setString($name);

        $product->addName($defaultName);
    }
}
