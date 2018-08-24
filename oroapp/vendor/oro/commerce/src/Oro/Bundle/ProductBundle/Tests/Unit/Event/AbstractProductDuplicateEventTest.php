<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Event;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Event\AbstractProductDuplicateEvent;

class AbstractProductDuplicateEventTest extends \PHPUnit_Framework_TestCase
{
    public function testEvent()
    {
        $product = new Product();
        $product->setSku('SKU-1');

        $sourceProduct = new Product();
        $sourceProduct->setSku('SKU-2');

        /** @var AbstractProductDuplicateEvent $event */
        $event = $this->getMockBuilder('Oro\Bundle\ProductBundle\Event\AbstractProductDuplicateEvent')
            ->setConstructorArgs([$product, $sourceProduct])
            ->getMockForAbstractClass();

        $this->assertEquals($product, $event->getProduct());
        $this->assertEquals($sourceProduct, $event->getSourceProduct());
    }
}
