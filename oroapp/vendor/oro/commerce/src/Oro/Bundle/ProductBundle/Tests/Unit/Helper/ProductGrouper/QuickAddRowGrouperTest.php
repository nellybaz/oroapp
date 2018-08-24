<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Helper\ProductGrouper;

use Oro\Bundle\ProductBundle\Helper\ProductGrouper\QuickAddRowGrouper;
use Oro\Bundle\ProductBundle\Model\QuickAddRow;
use Oro\Bundle\ProductBundle\Model\QuickAddField;
use Oro\Bundle\ProductBundle\Model\QuickAddRowCollection;

class QuickAddRowGrouperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var QuickAddRowGrouper
     */
    private $grouper;

    protected function setUp()
    {
        $this->grouper = new QuickAddRowGrouper();
    }

    public function testProcess()
    {
        $products = new QuickAddRowCollection([
            $this->createQuickAddRow(1, 'SKU1', 2, 'item', null, new QuickAddField('test', 'test')),
            $this->createQuickAddRow(2, 'SKU2', 3, 'item'),
            $this->createQuickAddRow(3, 'SKU1', 3, 'item', 'some_error'),
            $this->createQuickAddRow(4, 'SKU1', 2, 'kg'),
            $this->createQuickAddRow(5, 'sku1', 1, 'item'),
        ]);
        $priceField = new QuickAddField('price', 10);
        $products->addAdditionalField($priceField);

        $expectedResult = new QuickAddRowCollection([
            $this->createQuickAddRow(1, 'SKU1', 6, 'item', 'some_error', new QuickAddField('test', 'test')),
            $this->createQuickAddRow(2, 'SKU2', 3, 'item'),
            $this->createQuickAddRow(4, 'SKU1', 2, 'kg'),
        ]);

        $result = $this->grouper->process($products);

        $this->assertEquals($result->getAdditionalField('price'), $priceField);
        $this->assertInstanceOf(QuickAddRowCollection::class, $expectedResult);
        $this->assertCount(3, $result);
        foreach ($result as $i => $productRow) {
            $this->assertEquals($expectedResult[$i], $productRow);
        }
    }

    /**
     * @param $index
     * @param string $sku
     * @param float $quantity
     * @param string $unit
     * @param string $error
     * @param QuickAddField $additionalField
     * @return QuickAddRow
     */
    private function createQuickAddRow(
        $index,
        $sku,
        $quantity,
        $unit,
        $error = null,
        QuickAddField $additionalField = null
    ) {
        $quickAddRow = new QuickAddRow($index, $sku, $quantity, $unit);

        if ($error !== null) {
            $quickAddRow->addError($error);
        }

        if ($additionalField !== null) {
            $quickAddRow->addAdditionalField($additionalField);
        }

        return $quickAddRow;
    }
}
