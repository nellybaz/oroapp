<?php

namespace Oro\Bundle\SaleBundle\Tests\Unit\Entity;

use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\SaleBundle\Entity\Quote;
use Oro\Bundle\SaleBundle\Entity\QuoteDemand;
use Oro\Bundle\SaleBundle\Entity\QuoteProduct;
use Oro\Bundle\SaleBundle\Entity\QuoteProductDemand;
use Oro\Bundle\SaleBundle\Entity\QuoteProductOffer;

class QuoteDemandTest extends AbstractTest
{
    use EntityTrait;

    public function testProperties()
    {
        $properties = [
            ['id', '123'],
            ['customer', new Customer()],
            ['customerUser', new CustomerUser()],
            ['quote', new Quote()],
            ['total', 100.1],
            ['subtotal', 100.1],
            ['totalCurrency', 'USD']
        ];

        static::assertPropertyAccessors(new QuoteDemand(), $properties);
    }

    public function testSetQuantity()
    {
        $quote = new Quote();
        $quote->setCurrency('USD');
        $quote->setEstimatedShippingCostAmount(5);
        $quoteProduct = new QuoteProduct();
        $firstOffer = new QuoteProductOffer();
        $quoteProduct->addQuoteProductOffer($firstOffer);
        $quoteProduct->addQuoteProductOffer(new QuoteProductOffer());
        $quote->addQuoteProduct($quoteProduct);

        $demand = new QuoteDemand();
        $this->assertNull($demand->getShippingCost());
        $demand->setQuote($quote);

        /** @var QuoteProductDemand $firstDemandProduct */
        $firstDemandProduct = $demand->getDemandProducts()->first();
        $this->assertSame($firstOffer, $firstDemandProduct->getQuoteProductOffer());
        $this->assertSame($demand->getLineItems(), $demand->getDemandProducts());
        $demand->removeDemandProduct($firstDemandProduct);
        $this->assertNotContains($firstDemandProduct, $demand->getDemandProducts());
        $this->assertEquals($quote->getShippingCost(), $demand->getShippingCost());
    }

    public function testSourceDocument()
    {
        /** @var Quote $quote */
        $quote = $this->getEntity('Oro\Bundle\SaleBundle\Entity\Quote', ['id' => 1, 'poNumber' => 'PO123']);
        $demand = new QuoteDemand();
        $demand->setQuote($quote);

        $this->assertSame($quote, $demand->getSourceDocument());
        $this->assertEquals('PO123', $demand->getSourceDocumentIdentifier());
    }

    public function testGetShippingMethod()
    {
        /** @var Quote $quote */
        $quote = $this->getEntity(Quote::class);
        $demand = new QuoteDemand();
        $demand->setQuote($quote);
        $this->assertNull($demand->getShippingMethod());
        $quote->setShippingMethod('test_ship');
        $this->assertSame('test_ship', $demand->getShippingMethod());
    }

    public function testGetShippingMethodType()
    {
        /** @var Quote $quote */
        $quote = $this->getEntity(Quote::class);
        $demand = new QuoteDemand();
        $demand->setQuote($quote);
        $this->assertNull($demand->getShippingMethodType());
        $quote->setShippingMethodType('test_ship_type');
        $this->assertSame('test_ship_type', $demand->getShippingMethodType());
    }
}
