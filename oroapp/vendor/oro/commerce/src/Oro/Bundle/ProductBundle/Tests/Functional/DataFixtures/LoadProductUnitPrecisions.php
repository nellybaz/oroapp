<?php

namespace Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision;

class LoadProductUnitPrecisions extends AbstractFixture implements DependentFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->createProductUnitPrecision($manager, 'product-1', 'product_unit.liter', 3, 5, true);
        $this->createProductUnitPrecision($manager, 'product-1', 'product_unit.bottle', 2, 3, true);
        $this->createProductUnitPrecision($manager, 'product-2', 'product_unit.liter', 3, 5, true);
        $this->createProductUnitPrecision($manager, 'product-2', 'product_unit.bottle', 1, 2, true);
        $this->createProductUnitPrecision($manager, 'product-2', 'product_unit.box', 1, 5, true);
        $this->createProductUnitPrecision($manager, 'product-3', 'product_unit.liter', 3, 5, true);
        $this->createProductUnitPrecision($manager, 'product-4', 'product_unit.box', 1, 5, true);
        $this->createProductUnitPrecision($manager, 'product-4', 'product_unit.bottle', 1, 5, true);
        $this->createProductUnitPrecision($manager, 'product-5', 'product_unit.box', 1, 5, true);
        $this->createProductUnitPrecision($manager, 'product-5', 'product_unit.bottle', 1, 5, true);
        $this->createProductUnitPrecision($manager, 'product-6', 'product_unit.box', 1, 5, true);
        $this->createProductUnitPrecision($manager, 'product-6', 'product_unit.bottle', 1, 5, true);
        $this->createProductUnitPrecision($manager, 'product-7', 'product_unit.box', 1, 5, true);
        $this->createProductUnitPrecision($manager, 'product-7', 'product_unit.bottle', 1, 5, true);

        $manager->flush();
    }

    /**
     * @param ObjectManager $manager
     * @param string $productReference
     * @param string $unitReference
     * @param int $precision
     * @param float $conversionRate
     * @param boolean $sell
     * @return ProductUnitPrecision
     */
    protected function createProductUnitPrecision(
        ObjectManager $manager,
        $productReference,
        $unitReference,
        $precision = 0,
        $conversionRate = 1.0,
        $sell = false
    ) {
        /** @var Product $productReference */
        $product = $this->getReference($productReference);
        /** @var ProductUnit $unitReference */
        $unit = $this->getReference($unitReference);

        $productUnitPrecision = new ProductUnitPrecision();
        $productUnitPrecision->setProduct($product);
        $productUnitPrecision->setPrecision($precision);
        $productUnitPrecision->setUnit($unit);
        $productUnitPrecision->setConversionRate($conversionRate);
        $productUnitPrecision->setSell($sell);
        $manager->persist($productUnitPrecision);
        $this->addReference(
            sprintf('product_unit_precision.%s', implode('.', [$product->getSku(), $unit->getCode()])),
            $productUnitPrecision
        );

        return $productUnitPrecision;
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies()
    {
        return [
            'Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductData',
            'Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductUnits'
        ];
    }
}
