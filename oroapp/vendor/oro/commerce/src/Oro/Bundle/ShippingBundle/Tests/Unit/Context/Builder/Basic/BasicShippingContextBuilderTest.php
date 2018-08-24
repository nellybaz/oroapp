<?php

namespace Oro\Bundle\ShippingBundle\Tests\Unit\Context\Builder\Basic;

use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\LocaleBundle\Model\AddressInterface;
use Oro\Bundle\ShippingBundle\Context\Builder\Basic\BasicShippingContextBuilder;
use Oro\Bundle\ShippingBundle\Context\LineItem\Collection\ShippingLineItemCollectionInterface;
use Oro\Bundle\ShippingBundle\Context\ShippingContext;
use Oro\Bundle\ShippingBundle\Model\ShippingOrigin;
use Oro\Bundle\ShippingBundle\Provider\ShippingOriginProvider;
use Oro\Bundle\WebsiteBundle\Entity\Website;

class BasicShippingContextBuilderTest extends \PHPUnit_Framework_TestCase
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
     * @var ShippingLineItemCollectionInterface|\PHPUnit_Framework_MockObject_MockObject
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
     * @var AddressInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $shippingOriginMock;

    /**
     * @var Price|\PHPUnit_Framework_MockObject_MockObject
     */
    private $subtotalMock;

    /**
     * @var Checkout|\PHPUnit_Framework_MockObject_MockObject
     */
    private $sourceEntityMock;

    /**
     * @var ShippingOriginProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    private $shippingOriginProviderMock;

    /**
     * @var ShippingOrigin|\PHPUnit_Framework_MockObject_MockObject
     */
    private $defaultShippingOriginMock;

    /**
     * @var Website|\PHPUnit_Framework_MockObject_MockObject
     */
    private $websiteMock;

    protected function setUp()
    {
        $this->customerMock = $this->createMock(Customer::class);
        $this->customerUserMock = $this->createMock(CustomerUser::class);
        $this->lineItemsCollectionMock = $this->createMock(ShippingLineItemCollectionInterface::class);
        $this->billingAddressMock = $this->createMock(AddressInterface::class);
        $this->shippingAddressMock = $this->createMock(AddressInterface::class);
        $this->shippingOriginMock = $this->createMock(AddressInterface::class);
        $this->subtotalMock = $this->createMock(Price::class);
        $this->sourceEntityMock = $this->createMock(Checkout::class);
        $this->shippingOriginProviderMock = $this->createMock(ShippingOriginProvider::class);
        $this->defaultShippingOriginMock = $this->createMock(ShippingOrigin::class);
        $this->websiteMock = $this->createMock(Website::class);
    }

    public function testFullContextBuilding()
    {
        $paymentMethod = 'paymentMethod';
        $currency = 'usd';
        $entityId = '12';

        $this->shippingOriginProviderMock
            ->expects($this->never())
            ->method('getSystemShippingOrigin');

        $builder = new BasicShippingContextBuilder(
            $this->sourceEntityMock,
            $entityId,
            $this->shippingOriginProviderMock
        );

        $builder
            ->setCurrency($currency)
            ->setSubTotal($this->subtotalMock)
            ->setLineItems($this->lineItemsCollectionMock)
            ->setShippingAddress($this->shippingAddressMock)
            ->setBillingAddress($this->billingAddressMock)
            ->setCustomer($this->customerMock)
            ->setCustomerUser($this->customerUserMock)
            ->setPaymentMethod($paymentMethod)
            ->setShippingOrigin($this->shippingOriginMock)
            ->setWebsite($this->websiteMock);

        $expectedContext = $this->getExpectedFullContext(
            $paymentMethod,
            $currency,
            $entityId,
            $this->shippingOriginMock
        );
        $context = $builder->getResult();

        $this->assertEquals($expectedContext, $context);
    }

    public function testOptionalFields()
    {
        $entityId = '12';

        $this->shippingOriginProviderMock
            ->expects($this->once())
            ->method('getSystemShippingOrigin')
            ->willReturn($this->shippingOriginMock);

        $builder = new BasicShippingContextBuilder(
            $this->sourceEntityMock,
            $entityId,
            $this->shippingOriginProviderMock
        );

        $expectedContext = $this->getExpectedContextWithoutOptionalFields(
            $entityId,
            $this->shippingOriginMock
        );

        $context = $builder->getResult();

        $this->assertEquals($expectedContext, $context);
    }

    public function testWithoutOrigin()
    {
        $paymentMethod = 'paymentMethod';
        $currency = 'usd';
        $entityId = '12';
        $street = 'someStreet';

        $this->defaultShippingOriginMock
            ->method('getStreet')
            ->willReturn($street);

        $this->shippingOriginProviderMock
            ->expects($this->once())
            ->method('getSystemShippingOrigin')
            ->willReturn($this->defaultShippingOriginMock);

        $builder = new BasicShippingContextBuilder(
            $this->sourceEntityMock,
            $entityId,
            $this->shippingOriginProviderMock
        );

        $builder
            ->setCurrency($currency)
            ->setSubTotal($this->subtotalMock)
            ->setLineItems($this->lineItemsCollectionMock)
            ->setShippingAddress($this->shippingAddressMock)
            ->setBillingAddress($this->billingAddressMock)
            ->setCustomer($this->customerMock)
            ->setCustomerUser($this->customerUserMock)
            ->setPaymentMethod($paymentMethod)
            ->setWebsite($this->websiteMock);

        $expectedContext = $this->getExpectedFullContext(
            $paymentMethod,
            $currency,
            $entityId,
            $this->defaultShippingOriginMock
        );
        $context = $builder->getResult();

        $this->assertEquals($expectedContext, $context);
        $this->assertEquals($street, $context->getShippingOrigin()->getStreet());
    }

    /**
     * @param string           $paymentMethod
     * @param string           $currency
     * @param int              $entityId
     * @param AddressInterface $shippingOrigin
     *
     * @return ShippingContext
     */
    private function getExpectedFullContext($paymentMethod, $currency, $entityId, AddressInterface $shippingOrigin)
    {
        $params = [
            ShippingContext::FIELD_CUSTOMER => $this->customerMock,
            ShippingContext::FIELD_CUSTOMER_USER => $this->customerUserMock,
            ShippingContext::FIELD_LINE_ITEMS => $this->lineItemsCollectionMock,
            ShippingContext::FIELD_BILLING_ADDRESS => $this->billingAddressMock,
            ShippingContext::FIELD_SHIPPING_ADDRESS => $this->shippingAddressMock,
            ShippingContext::FIELD_SHIPPING_ORIGIN => $shippingOrigin,
            ShippingContext::FIELD_PAYMENT_METHOD => $paymentMethod,
            ShippingContext::FIELD_CURRENCY => $currency,
            ShippingContext::FIELD_SUBTOTAL => $this->subtotalMock,
            ShippingContext::FIELD_SOURCE_ENTITY => $this->sourceEntityMock,
            ShippingContext::FIELD_SOURCE_ENTITY_ID => $entityId,
            ShippingContext::FIELD_WEBSITE => $this->websiteMock,
        ];

        return new ShippingContext($params);
    }

    /**
     * @param int              $entityId
     * @param AddressInterface $shippingOrigin
     *
     * @return ShippingContext
     */
    private function getExpectedContextWithoutOptionalFields($entityId, AddressInterface $shippingOrigin)
    {
        $params = [
            ShippingContext::FIELD_LINE_ITEMS => null,
            ShippingContext::FIELD_SHIPPING_ORIGIN => $shippingOrigin,
            ShippingContext::FIELD_SOURCE_ENTITY => $this->sourceEntityMock,
            ShippingContext::FIELD_SOURCE_ENTITY_ID => $entityId,
        ];

        return new ShippingContext($params);
    }
}
