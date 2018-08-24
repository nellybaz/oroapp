<?php

namespace Oro\Bundle\CheckoutBundle\Bundle\Tests\Unit\Factory;

use Doctrine\Common\Collections\ArrayCollection;
use Oro\Bundle\CheckoutBundle\DataProvider\Manager\CheckoutLineItemsManager;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CheckoutBundle\Factory\CheckoutShippingContextFactory;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\LocaleBundle\Model\AddressInterface;
use Oro\Bundle\OrderBundle\Converter\OrderShippingLineItemConverterInterface;
use Oro\Bundle\OrderBundle\Entity\OrderAddress;
use Oro\Bundle\OrderBundle\Entity\OrderLineItem;
use Oro\Bundle\PricingBundle\SubtotalProcessor\Model\Subtotal;
use Oro\Bundle\PricingBundle\SubtotalProcessor\TotalProcessorProvider;
use Oro\Bundle\ShippingBundle\Context\Builder\Factory\ShippingContextBuilderFactoryInterface;
use Oro\Bundle\ShippingBundle\Context\Builder\ShippingContextBuilderInterface;
use Oro\Bundle\ShippingBundle\Context\LineItem\Collection\Doctrine\DoctrineShippingLineItemCollection;
use Oro\Bundle\ShippingBundle\Context\ShippingLineItem;
use Oro\Bundle\WebsiteBundle\Entity\Website;

class CheckoutShippingContextFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CheckoutShippingContextFactory|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $factory;

    /**
     * @var CheckoutLineItemsManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $checkoutLineItemsManager;

    /**
     * @var TotalProcessorProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $totalProcessorProvider;

    /**
     * @var OrderShippingLineItemConverterInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $shippingLineItemConverter;

    /**
     * @var ShippingContextBuilderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $contextBuilderMock;

    /**
     * @var ShippingContextBuilderFactoryInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $shippingContextBuilderFactoryMock;

    protected function setUp()
    {
        $this->checkoutLineItemsManager = $this->createMock(CheckoutLineItemsManager::class);
        $this->totalProcessorProvider = $this->createMock(TotalProcessorProvider::class);
        $this->contextBuilderMock = $this->createMock(ShippingContextBuilderInterface::class);
        $this->shippingLineItemConverter = $this->createMock(OrderShippingLineItemConverterInterface::class);
        $this->shippingContextBuilderFactoryMock = $this->createMock(ShippingContextBuilderFactoryInterface::class);

        $this->factory = new CheckoutShippingContextFactory(
            $this->checkoutLineItemsManager,
            $this->totalProcessorProvider,
            $this->shippingLineItemConverter,
            $this->shippingContextBuilderFactoryMock
        );
    }

    /**
     * @dataProvider createDataProvider
     *
     * @param float $shippingCost
     */
    public function testCreate($shippingCost)
    {
        $checkout = $this->prepareCheckout($shippingCost);

        $convertedLineItems = new DoctrineShippingLineItemCollection([
            new ShippingLineItem([])
        ]);

        $this->shippingLineItemConverter
            ->expects($this->once())
            ->method('convertLineItems')
            ->willReturn($convertedLineItems);

        $this->contextBuilderMock
            ->expects($this->once())
            ->method('setLineItems')
            ->with($convertedLineItems);

        $this->factory->create($checkout);
    }

    /**
     * @return array
     */
    public function createDataProvider()
    {
        return [
            'zero shipping cost amount' => [
                'shippingCost' => 0.0
            ],
            'with shipping cost' => [
                'shippingCost' => 10.0
            ]
        ];
    }

    public function testWithNullLineItems()
    {
        $checkout = $this->prepareCheckout();

        $this->shippingLineItemConverter
            ->expects($this->once())
            ->method('convertLineItems')
            ->willReturn(null);

        $this->contextBuilderMock
            ->expects($this->never())
            ->method('setLineItems');

        $this->factory->create($checkout);
    }

    /**
     * @param float $shippingCost
     * @return Checkout
     */
    protected function prepareCheckout($shippingCost = 0.0)
    {
        /** @var AddressInterface $address */
        $address = $this->createMock(OrderAddress::class);
        $currency = 'USD';
        $paymentMethod = 'SomePaymentMethod';
        $amount = 100;
        $customer = new Customer();
        $customerUser = new CustomerUser();
        $checkoutLineItems = new ArrayCollection([new OrderLineItem()]);
        $websiteMock = $this->createMock(Website::class);

        $subtotal = (new Subtotal())
            ->setAmount($amount)
            ->setCurrency($currency);

        $checkout = (new Checkout())
            ->setBillingAddress($address)
            ->setShippingAddress($address)
            ->setCurrency($currency)
            ->setPaymentMethod($paymentMethod)
            ->setCustomer($customer)
            ->setCustomerUser($customerUser)
            ->setWebsite($websiteMock)
            ->setShippingCost(Price::create($shippingCost, $currency));

        $this->contextBuilderMock
            ->method('setShippingAddress')
            ->with($address);

        $this->contextBuilderMock
            ->method('setBillingAddress')
            ->with($address);

        $this->contextBuilderMock
            ->expects($this->once())
            ->method('setPaymentMethod')
            ->with($paymentMethod);

        $this->contextBuilderMock
            ->expects($this->once())
            ->method('setCustomer')
            ->with($customer);

        $this->contextBuilderMock
            ->expects($this->once())
            ->method('setCustomerUser')
            ->with($customerUser);

        $this->contextBuilderMock
            ->expects($this->once())
            ->method('getResult');

        $this->contextBuilderMock
            ->expects($this->once())
            ->method('setSubTotal')
            ->with(Price::create($subtotal->getAmount() - $shippingCost, $subtotal->getCurrency()))
            ->willReturnSelf();

        $this->contextBuilderMock
            ->expects($this->once())
            ->method('setCurrency')
            ->with($checkout->getCurrency());

        $this->contextBuilderMock
            ->expects($this->once())
            ->method('setWebsite')
            ->with($checkout->getWebsite());

        $this->shippingContextBuilderFactoryMock
            ->expects($this->once())
            ->method('createShippingContextBuilder')
            ->with($checkout, (string)$checkout->getId())
            ->willReturn($this->contextBuilderMock);

        $this->checkoutLineItemsManager
            ->expects(static::once())
            ->method('getData')
            ->willReturn($checkoutLineItems);

        $this->totalProcessorProvider
            ->expects(static::once())
            ->method('getTotal')
            ->with($checkout)
            ->willReturn($subtotal);

        return $checkout;
    }
}
