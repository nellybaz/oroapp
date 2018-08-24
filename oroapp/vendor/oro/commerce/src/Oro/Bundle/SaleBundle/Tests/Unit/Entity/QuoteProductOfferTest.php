<?php

namespace Oro\Bundle\SaleBundle\Tests\Unit\Entity;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\SaleBundle\Entity\QuoteProduct;
use Oro\Bundle\SaleBundle\Entity\QuoteProductOffer;

class QuoteProductOfferTest extends AbstractTest
{
    public function testProperties()
    {
        $properties = [
            ['id', 123],
            ['quoteProduct', new QuoteProduct()],
            ['quantity', 11],
            ['productUnit', new ProductUnit()],
            ['productUnitCode', 'unit-code'],
            ['price', new Price()],
            ['priceType', QuoteProductOffer::PRICE_TYPE_UNIT],
            ['allowIncrements', true],
        ];

        static::assertPropertyAccessors(new QuoteProductOffer(), $properties);
    }

    public function testPostLoad()
    {
        $item = new QuoteProductOffer();

        $this->assertNull($item->getPrice());

        $this->setProperty($item, 'value', 10)->setProperty($item, 'currency', 'USD');

        $item->postLoad();

        $this->assertEquals(Price::create(10, 'USD'), $item->getPrice());
    }

    public function testUpdatePrice()
    {
        $item = new QuoteProductOffer();
        $item->setPrice(Price::create(11, 'EUR'));

        $item->updatePrice();

        $this->assertEquals(11, $this->getProperty($item, 'value'));
        $this->assertEquals('EUR', $this->getProperty($item, 'currency'));
    }

    public function testSetPrice()
    {
        $price = Price::create(22, 'EUR');

        $item = new QuoteProductOffer();
        $item->setPrice($price);

        $this->assertEquals($price, $item->getPrice());

        $this->assertEquals(22, $this->getProperty($item, 'value'));
        $this->assertEquals('EUR', $this->getProperty($item, 'currency'));
    }

    public function testSetProductUnit()
    {
        $item = new QuoteProductOffer();

        $this->assertNull($item->getProductUnitCode());

        $item->setProductUnit((new ProductUnit())->setCode('kg'));

        $this->assertEquals('kg', $item->getProductUnitCode());
    }

    public function testGetPriceTypes()
    {
        $this->assertEquals(
            [
                QuoteProductOffer::PRICE_TYPE_UNIT => 'unit',
                QuoteProductOffer::PRICE_TYPE_BUNDLED => 'bundled',
            ],
            QuoteProductOffer::getPriceTypes()
        );
    }
}
