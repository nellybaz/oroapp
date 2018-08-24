<?php

namespace Oro\Bundle\CheckoutBundle\Tests\Unit\Layout\DataProvider;

use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CheckoutBundle\Factory\CheckoutShippingContextFactory;
use Oro\Bundle\CheckoutBundle\Layout\DataProvider\CheckoutShippingContextProvider;
use Oro\Bundle\ShippingBundle\Context\ShippingContext;

class CheckoutShippingContextProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CheckoutShippingContextFactory| \PHPUnit_Framework_MockObject_MockObject
     */
    protected $shippingContextFactory;

    /**
     * @var Checkout| \PHPUnit_Framework_MockObject_MockObject
     */
    protected $checkout;

    /**
     * @var CheckoutShippingContextProvider
     */
    protected $provider;

    public function setUp()
    {
        $this->checkout = $this->getMockBuilder(Checkout::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->shippingContextFactory = $this->getMockBuilder(CheckoutShippingContextFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->provider = new CheckoutShippingContextProvider($this->shippingContextFactory);
    }

    public function testGetPaymentStatus()
    {
        $context = new ShippingContext([]);

        $this->shippingContextFactory->expects($this->once())
            ->method('create')
            ->with($this->checkout)
            ->willReturn($context);

        $shippingContext = $this->provider->getContext($this->checkout);
        $this->assertEquals($context, $shippingContext);
    }
}
