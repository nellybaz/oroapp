<?php

namespace Oro\Bundle\ProductBundle\Tests\Functional\ImportExport\Strategy;

use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeFamily;
use Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue;
use Oro\Bundle\EntityExtendBundle\Tools\ExtendHelper;
use Oro\Bundle\ImportExportBundle\Context\Context;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision;
use Oro\Bundle\ProductBundle\Entity\ProductVariantLink;
use Oro\Bundle\ProductBundle\ImportExport\Strategy\ProductStrategy;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductData;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductUnits;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Component\Testing\Unit\EntityTrait;

class ProductStrategyTest extends WebTestCase
{
    use EntityTrait;

    /**
     * @var ProductStrategy
     * */
    protected $strategy;

    protected function setUp()
    {
        $this->initClient();
        $this->loadFixtures([LoadProductData::class]);
        $container = $this->getContainer();

        $container->get('oro_importexport.field.database_helper')->onClear();
        $this->strategy = new ProductStrategy(
            $container->get('event_dispatcher'),
            $container->get('oro_importexport.strategy.import.helper'),
            $container->get('oro_entity.helper.field_helper'),
            $container->get('oro_importexport.field.database_helper'),
            $container->get('oro_entity.entity_class_name_provider'),
            $container->get('translator'),
            $container->get('oro_importexport.strategy.new_entities_helper'),
            $container->get('oro_entity.doctrine_helper'),
            $container->get('oro_security.owner.checker')
        );
        $this->strategy->setEntityName(Product::class);
        $this->strategy->setVariantLinkClass(ProductVariantLink::class);
        $this->strategy->setLocalizedFallbackValueClass(LocalizedFallbackValue::class);
        $this->strategy->setTokenAccessor($container->get('oro_security.token_accessor'));
    }

    /**
     * Impossible to import product when it's variant is in the same batch.
     * Caused because variant is not in DB it could not be loaded by SKU and variant link contains invalid relation.
     *
     * @link https://magecore.atlassian.net/browse/BB-7908
     */
    public function testProcessWithVariantLinks()
    {
        $context = new Context([]);
        $context->setValue('itemData', []);
        $this->strategy->setImportExportContext($context);

        $inventoryStatus = $this->getInventoryStatus();

        /** @var ProductUnit $unit */
        $unit = $this->getReference(LoadProductUnits::BOX);
        /** @var AttributeFamily $attributeFamily */
        $attributeFamily = $this->getEntity(AttributeFamily::class, ['code' => 'default_family']);
        $newProductSku = 'PR-V1';

        // Prepare new product that is imported in same batch and will be used later as variant link
        $newProduct = $this->createProduct($newProductSku, $attributeFamily, $unit, $inventoryStatus);
        /** @var Product $processedNewProduct */
        $processedNewProduct = $this->strategy->process($newProduct);
        $this->assertEquals([], $context->getErrors());
        $this->assertInstanceOf(Product::class, $processedNewProduct);
        $this->assertSame($newProductSku, $processedNewProduct->getSku());

        // Get existing product that should be found by SKU as variant link relation
        /** @var Product $existingProduct */
        $existingProduct = $this->getReference(LoadProductData::PRODUCT_1);

        $linkToNewProduct = new ProductVariantLink();
        $linkToNewProduct->setProduct((new Product())->setSku($newProductSku));
        $linkToExistingProduct = new ProductVariantLink();
        $linkToExistingProduct->setProduct((new Product())->setSku($existingProduct->getSku()));

        // Add prepared variant links to newly imported product
        $productWithVariants = $this->createProduct('PR-VV', $attributeFamily, $unit, $inventoryStatus);
        $productWithVariants->addVariantLink($linkToNewProduct);
        $productWithVariants->addVariantLink($linkToExistingProduct);

        // Check that all variant links present and were attached correctly
        /** @var Product $processedProductWithVariants */
        $processedProductWithVariants = $this->strategy->process($productWithVariants);
        $this->assertEquals([], $context->getErrors());
        $this->assertInstanceOf(Product::class, $processedProductWithVariants);
        $this->assertSame($productWithVariants->getSku(), $processedProductWithVariants->getSku());
        $this->assertCount(2, $processedProductWithVariants->getVariantLinks());
        $usedVariantLinksProductSkus = array_map(
            function (ProductVariantLink $variantLink) {
                return $variantLink->getProduct()->getSku();
            },
            $processedProductWithVariants->getVariantLinks()->toArray()
        );
        $this->assertContains($newProductSku, $usedVariantLinksProductSkus);
        $this->assertContains($existingProduct->getSku(), $usedVariantLinksProductSkus);
    }

    public function testProcessWithEmptyAdditionalUnitPrecisionCode()
    {
        $context = new Context([]);
        $context->setValue('itemData', []);
        $this->strategy->setImportExportContext($context);
        /** @var ProductUnit $unit */
        $unit = $this->getReference(LoadProductUnits::BOX);
        /** @var AttributeFamily $attributeFamily */
        $attributeFamily = $this->getEntity(AttributeFamily::class, ['code' => 'default_family']);
        $newProductSku = 'PR-V1';
        // Prepare new product that is imported in same batch and will be used later as variant link
        $newProduct = $this->createProduct($newProductSku, $attributeFamily, $unit, $this->getInventoryStatus());
        //Add invalid ProductUnitPrecision without unit
        $newProduct->getUnitPrecisions()->add((new ProductUnitPrecision()));
        /** @var Product $processedNewProduct */
        $processedNewProduct = $this->strategy->process($newProduct);
        $this->assertEquals([], $context->getErrors());
        $this->assertCount(1, $processedNewProduct->getUnitPrecisions());
    }

    public function testProcessWithDuplicateUnitPrecisionCode()
    {
        $context = new Context([]);
        $context->setValue('itemData', [
            'additionalUnitPrecisions' => [
                [
                    'unit' => ['code' => 'duplicate_code'],
                    'precision' => 0
                ],
                [
                    'unit' => ['code' => 'duplicate_code'],
                    'precision' => 0
                ]
            ]
        ]);
        $this->strategy->setImportExportContext($context);
        /** @var ProductUnit $unit */
        $unit = $this->getReference(LoadProductUnits::BOX);
        /** @var AttributeFamily $attributeFamily */
        $attributeFamily = $this->getEntity(AttributeFamily::class, ['code' => 'default_family']);
        $newProductSku = 'PR-V1';
        // Prepare new product that is imported in same batch and will be used later as variant link
        $newProduct = $this->createProduct($newProductSku, $attributeFamily, $unit, $this->getInventoryStatus());
        /** @var Product $processedNewProduct */
        $this->strategy->process($newProduct);
        $this->assertEquals(['Error in row #. Each product unit code should be unique'], $context->getErrors());
    }

    /**
     * @return AbstractEnumValue
     */
    private function getInventoryStatus()
    {
        $inventoryStatusClassName = ExtendHelper::buildEnumValueClassName('prod_inventory_status');
        /** @var AbstractEnumValue $inventoryStatus */
        $inventoryStatus = $this->getContainer()
            ->get('doctrine')
            ->getRepository($inventoryStatusClassName)
            ->find('in_stock');

        return $inventoryStatus;
    }

    /**
     * @param string $sku
     * @param AttributeFamily $attributeFamily
     * @param ProductUnit $unit
     * @param AbstractEnumValue $inventoryStatus
     * @return Product
     */
    protected function createProduct(
        $sku,
        AttributeFamily $attributeFamily,
        ProductUnit $unit,
        AbstractEnumValue $inventoryStatus
    ) {
        $newProduct = new Product();
        $newProduct->setSku($sku);
        $newProduct->setAttributeFamily($attributeFamily);
        $newProduct->setInventoryStatus($inventoryStatus);
        $newProduct->setPrimaryUnitPrecision(
            (new ProductUnitPrecision())->setUnit($unit)
                ->setPrecision(0)
        );

        return $newProduct;
    }
}
