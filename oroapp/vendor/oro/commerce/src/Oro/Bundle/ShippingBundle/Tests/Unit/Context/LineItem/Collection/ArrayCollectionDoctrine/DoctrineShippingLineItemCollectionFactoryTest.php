<?php

namespace Oro\Bundle\ShippingBundle\Tests\Unit\Context\LineItem\Collection\ArrayCollectionDoctrine;

use Oro\Bundle\ShippingBundle\Context\LineItem\Collection\Doctrine\Factory\DoctrineShippingLineItemCollectionFactory;
use Oro\Bundle\ShippingBundle\Context\ShippingLineItem;
use Oro\Bundle\ShoppingListBundle\Entity\LineItem;

class DoctrineShippingLineItemCollectionFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testFactory()
    {
        $shippingLineItems = [
            new ShippingLineItem([]),
            new ShippingLineItem([]),
            new ShippingLineItem([]),
            new ShippingLineItem([]),
        ];

        $collectionFactory = new DoctrineShippingLineItemCollectionFactory();
        $collection = $collectionFactory->createShippingLineItemCollection($shippingLineItems);

        $this->assertEquals($shippingLineItems, $collection->toArray());
    }

    /**
     * @expectedException        \InvalidArgumentException
     * @expectedExceptionMessage Expected: Oro\Bundle\ShippingBundle\Context\ShippingLineItemInterface
     */
    public function testFactoryWithException()
    {
        $shippingLineItems = [
            new LineItem(),
            new LineItem(),
            new LineItem(),
            new LineItem(),
        ];

        $collectionFactory = new DoctrineShippingLineItemCollectionFactory();
        $collectionFactory->createShippingLineItemCollection($shippingLineItems);
    }
}
