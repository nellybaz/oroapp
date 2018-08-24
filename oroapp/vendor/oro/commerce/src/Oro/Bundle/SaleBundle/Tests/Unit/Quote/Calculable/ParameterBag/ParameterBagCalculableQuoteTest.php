<?php

namespace Oro\Bundle\SaleBundle\Tests\Unit\Quote\Calculable\ParameterBag;

use Doctrine\Common\Collections\ArrayCollection;
use Oro\Bundle\SaleBundle\Quote\Calculable\ParameterBag\ParameterBagCalculableQuote;
use Oro\Bundle\ShippingBundle\Context\ShippingLineItemInterface;

class ParameterBagCalculableQuoteTest extends \PHPUnit_Framework_TestCase
{
    public function testGetters()
    {
        $lineItems = new ArrayCollection([
            $this->getShippingLineItemMock()
        ]);

        $calculableQuote = new ParameterBagCalculableQuote([
            ParameterBagCalculableQuote::FIELD_LINE_ITEMS => $lineItems
        ]);

        $this->assertEquals($lineItems, $calculableQuote->getLineItems());
    }

    /**
     * @return ShippingLineItemInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private function getShippingLineItemMock()
    {
        return $this
            ->getMockBuilder(ShippingLineItemInterface::class)
            ->getMock();
    }
}
