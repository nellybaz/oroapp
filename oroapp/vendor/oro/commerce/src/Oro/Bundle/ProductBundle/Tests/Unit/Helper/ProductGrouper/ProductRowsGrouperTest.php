<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Helper\ProductGrouper;

use Oro\Bundle\ProductBundle\Helper\ProductGrouper\ProductRowsGrouper;
use Oro\Bundle\ProductBundle\Model\ProductRow;

class ProductRowsGrouperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ProductRowsGrouper
     */
    private $grouper;

    protected function setUp()
    {
        $this->grouper = new ProductRowsGrouper();
    }

    public function testProcess()
    {
        $products = [
            $this->createProductRowObject('SKU1', 2, 'item'),
            $this->createProductRowObject('SKU2', 3, 'item'),
            $this->createProductRowObject('SKU1', 3, 'item'),
            $this->createProductRowObject('SKU1', 2, 'kg'),
            $this->createProductRowObject('sku1', 1, 'item'),
        ];

        $expectedResult = [
            $this->createProductRowObject('SKU1', 6, 'item'),
            $this->createProductRowObject('SKU2', 3, 'item'),
            $this->createProductRowObject('SKU1', 2, 'kg'),
        ];

        $result = $this->grouper->process($products);

        $this->assertCount(3, $result);
        foreach ($result as $i => $productRow) {
            $this->assertEquals($expectedResult[$i], $productRow);
        }
    }

    /**
     * @param string $sku
     * @param float $quantity
     * @param string $unit
     * @return ProductRow
     */
    private function createProductRowObject($sku, $quantity, $unit)
    {
        $productRow = new ProductRow();
        $productRow->productSku = $sku;
        $productRow->productQuantity = $quantity;
        $productRow->productUnit = $unit;

        return $productRow;
    }
}
