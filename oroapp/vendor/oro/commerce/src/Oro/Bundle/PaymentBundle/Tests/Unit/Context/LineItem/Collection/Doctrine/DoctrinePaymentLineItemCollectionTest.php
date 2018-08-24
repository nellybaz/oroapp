<?php

namespace Oro\Bundle\PaymentBundle\Tests\Unit\Context\LineItem\Collection\Doctrine;

use Oro\Bundle\PaymentBundle\Context\LineItem\Collection\Doctrine\DoctrinePaymentLineItemCollection;
use Oro\Bundle\PaymentBundle\Context\PaymentLineItem;

class DoctrinePaymentLineItemCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testCollection()
    {
        $paymentLineItems = [
            new PaymentLineItem([]),
            new PaymentLineItem([]),
            new PaymentLineItem([]),
            new PaymentLineItem([]),
        ];

        $collection = new DoctrinePaymentLineItemCollection($paymentLineItems);

        static::assertEquals($paymentLineItems, $collection->toArray());
    }
}
