<?php

namespace Oro\Bundle\PaymentBundle\Tests\Unit\Context\Builder\Basic;

use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\LocaleBundle\Model\AddressInterface;
use Oro\Bundle\PaymentBundle\Context\Builder\Basic\BasicPaymentContextBuilder;
use Oro\Bundle\PaymentBundle\Context\LineItem\Collection\Factory\PaymentLineItemCollectionFactoryInterface;
use Oro\Bundle\PaymentBundle\Context\LineItem\Collection\PaymentLineItemCollectionInterface;
use Oro\Bundle\PaymentBundle\Context\PaymentContext;
use Oro\Bundle\PaymentBundle\Context\PaymentLineItem;
use Oro\Bundle\WebsiteBundle\Entity\Website;

class BasicPaymentContextBuilderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Customer|\PHPUnit_Framework_MockObject_MockObject
     */
    private $customerMock;

    /**
     * @var CustomerUser|\PHPUnit_Framework_MockObject_MockObject
     */
    private $customerUserMock;

    /**
     * @var PaymentLineItemCollectionInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $lineItemsCollectionMock;

    /**
     * @var AddressInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $billingAddressMock;

    /**
     * @var AddressInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $shippingAddressMock;

    /**
     * @var Price|\PHPUnit_Framework_MockObject_MockObject
     */
    private $subtotalMock;

    /**
     * @var Checkout|\PHPUnit_Framework_MockObject_MockObject
     */
    private $sourceEntityMock;

    /**
     * @var PaymentLineItemCollectionFactoryInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $paymentLineItemCollectionFactoryMock;

    /**
     * @var Website|\PHPUnit_Framework_MockObject_MockObject
     */
    private $websiteMock;

    protected function setUp()
    {
        $this->customerMock = $this->getMockBuilder(Customer::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->customerUserMock = $this->getMockBuilder(CustomerUser::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->lineItemsCollectionMock = $this->createMock(PaymentLineItemCollectionInterface::class);
        $this->billingAddressMock = $this->createMock(AddressInterface::class);
        $this->shippingAddressMock = $this->createMock(AddressInterface::class);
        $this->subtotalMock = $this->getMockBuilder(Price::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->sourceEntityMock = $this->getMockBuilder(Checkout::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->paymentLineItemCollectionFactoryMock = $this->createMock(
            PaymentLineItemCollectionFactoryInterface::class
        );
        $this->websiteMock = $this->createMock(Website::class);
    }

    public function testFullContextBuilding()
    {
        $shippingMethod = 'shippingMethod';
        $currency = 'usd';
        $entityId = '12';
        $lineItems = [
            new PaymentLineItem([PaymentLineItem::FIELD_QUANTITY => 2]),
            new PaymentLineItem([PaymentLineItem::FIELD_QUANTITY => 5])
        ];

        $this->lineItemsCollectionMock
            ->expects(static::once())
            ->method('toArray')
            ->willReturn($lineItems);

        $this->paymentLineItemCollectionFactoryMock
            ->expects(static::once())
            ->method('createPaymentLineItemCollection')
            ->with($lineItems)
            ->willReturn($this->lineItemsCollectionMock);

        $builder = new BasicPaymentContextBuilder(
            $this->sourceEntityMock,
            $entityId,
            $this->paymentLineItemCollectionFactoryMock
        );

        $builder
            ->setCurrency($currency)
            ->setSubTotal($this->subtotalMock)
            ->setLineItems($this->lineItemsCollectionMock)
            ->setShippingAddress($this->shippingAddressMock)
            ->setBillingAddress($this->billingAddressMock)
            ->setCustomer($this->customerMock)
            ->setCustomerUser($this->customerUserMock)
            ->setShippingMethod($shippingMethod)
            ->setWebsite($this->websiteMock);

        $expectedContext = $this->getExpectedFullContext(
            $shippingMethod,
            $currency,
            $entityId
        );
        $context = $builder->getResult();

        static::assertEquals($expectedContext, $context);
    }

    public function testOptionalFields()
    {
        $entityId = '12';
        $lineItems = [];

        $this->paymentLineItemCollectionFactoryMock
            ->expects(static::once())
            ->method('createPaymentLineItemCollection')
            ->with($lineItems)
            ->willReturn($this->lineItemsCollectionMock);

        $builder = new BasicPaymentContextBuilder(
            $this->sourceEntityMock,
            $entityId,
            $this->paymentLineItemCollectionFactoryMock
        );

        $expectedContext = $this->getExpectedContextWithoutOptionalFields($entityId);

        $context = $builder->getResult();

        static::assertEquals($expectedContext, $context);
    }

    /**
     * @param $shippingMethod
     * @param $currency
     * @param $entityId
     *
     * @return PaymentContext
     */
    private function getExpectedFullContext($shippingMethod, $currency, $entityId)
    {
        $params = [
            PaymentContext::FIELD_CUSTOMER => $this->customerMock,
            PaymentContext::FIELD_CUSTOMER_USER => $this->customerUserMock,
            PaymentContext::FIELD_LINE_ITEMS => $this->lineItemsCollectionMock,
            PaymentContext::FIELD_BILLING_ADDRESS => $this->billingAddressMock,
            PaymentContext::FIELD_SHIPPING_ADDRESS => $this->shippingAddressMock,
            PaymentContext::FIELD_SHIPPING_METHOD => $shippingMethod,
            PaymentContext::FIELD_CURRENCY => $currency,
            PaymentContext::FIELD_SUBTOTAL => $this->subtotalMock,
            PaymentContext::FIELD_SOURCE_ENTITY => $this->sourceEntityMock,
            PaymentContext::FIELD_SOURCE_ENTITY_ID => $entityId,
            PaymentContext::FIELD_WEBSITE => $this->websiteMock,
        ];

        return new PaymentContext($params);
    }

    /**
     * @param $entityId
     *
     * @return PaymentContext
     */
    private function getExpectedContextWithoutOptionalFields($entityId)
    {
        $params = [
            PaymentContext::FIELD_LINE_ITEMS => $this->lineItemsCollectionMock,
            PaymentContext::FIELD_SOURCE_ENTITY => $this->sourceEntityMock,
            PaymentContext::FIELD_SOURCE_ENTITY_ID => $entityId,
        ];

        return new PaymentContext($params);
    }
}
