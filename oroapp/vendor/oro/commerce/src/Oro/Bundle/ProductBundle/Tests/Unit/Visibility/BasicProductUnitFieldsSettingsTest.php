<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Visibility;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Entity\Repository\ProductUnitRepository;
use Oro\Bundle\ProductBundle\Visibility\BasicProductUnitFieldsSettings;

class BasicProductUnitFieldsSettingsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DoctrineHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    private $doctrineHelper;

    /**
     * @var BasicProductUnitFieldsSettings
     */
    private $settings;

    public function setUp()
    {
        $this->doctrineHelper = $this->getMockBuilder(DoctrineHelper::class)
            ->disableOriginalConstructor()->getMock();

        $this->settings = new BasicProductUnitFieldsSettings($this->doctrineHelper);
    }

    public function testIsProductUnitSelectionVisible()
    {
        /** @var Product $product */
        $product = $this->createMock(Product::class);
        $this->assertTrue($this->settings->isProductUnitSelectionVisible($product));
    }

    /**
     * @dataProvider productsDataProvider
     * @param Product|null $product
     */
    public function testIsProductPrimaryUnitVisible(Product $product = null)
    {
        $this->assertTrue($this->settings->isProductPrimaryUnitVisible($product));
    }

    /**
     * @dataProvider productsDataProvider
     * @param Product|null $product
     */
    public function testIsAddingAdditionalUnitsToProductAvailable(Product $product = null)
    {
        $this->assertTrue($this->settings->isAddingAdditionalUnitsToProductAvailable($product));
    }

    /**
     * @return array
     */
    public function productsDataProvider()
    {
        return [
            [null],
            [$this->createMock(Product::class)],
        ];
    }

    public function testGetAvailablePrimaryUnitChoices()
    {
        $units = [
            $this->createMock(ProductUnit::class),
            $this->createMock(ProductUnit::class),
            $this->createMock(ProductUnit::class),
        ];

        $repository = $this->getMockBuilder(ProductUnitRepository::class)
            ->disableOriginalConstructor()->getMock();

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityRepository')
            ->with(ProductUnit::class)
            ->willReturn($repository);

        $repository->expects($this->once())
            ->method('findAll')
            ->willReturn($units);

        $this->assertSame($units, $this->settings->getAvailablePrimaryUnitChoices());
    }
}
