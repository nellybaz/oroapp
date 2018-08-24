<?php

namespace Oro\Bundle\CheckoutBundle\Tests\Unit\Mapper;

use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CheckoutBundle\Mapper\OrderMapper;
use Oro\Bundle\CheckoutBundle\Tests\Unit\Model\Action\CheckoutSourceStub;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\EntityBundle\Provider\EntityFieldProvider;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\OrderBundle\Entity\OrderAddress;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm;
use Oro\Bundle\PaymentTermBundle\Provider\PaymentTermAssociationProvider;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;
use Oro\Bundle\WebsiteBundle\Entity\Website;
use Oro\Component\Testing\Unit\EntityTrait;

use Symfony\Component\PropertyAccess\PropertyAccess;

class OrderMapperTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var OrderMapper
     */
    protected $mapper;

    /**
     * @var EntityFieldProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $provider;

    /**
     * @var PaymentTermAssociationProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $paymentTermAssociationProvider;

    protected function setUp()
    {
        $this->provider = $this->getMockBuilder(EntityFieldProvider::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->paymentTermAssociationProvider = $this->getMockBuilder(PaymentTermAssociationProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->mapper = new OrderMapper(
            $this->provider,
            PropertyAccess::createPropertyAccessor(),
            $this->paymentTermAssociationProvider
        );
    }

    public function testMap()
    {
        $this->provider->expects($this->once())->method('getFields')->willReturn(
            [
                ['name' => 'id', 'identifier' => true],
                ['name' => 'website'],
                ['name' => 'paymentTerm'],
                ['name' => 'shippingAddress'],
                ['name' => 'billingAddress'],
                ['name' => 'currency'],
            ]
        );

        $website = new Website();
        $address = new OrderAddress();
        $address->setLabel('address1');
        $shippingCost = Price::create(10, 'USD');
        $checkout = (new Checkout())
            ->setOrganization(new Organization())
            ->setWebsite($website)
            ->setShippingAddress($address)
            ->setBillingAddress($address)
            ->setShippingCost($shippingCost)
            ->setCurrency('USD');

        $newAddress = new OrderAddress();
        $newAddress->setLabel('address2');

        $paymentTerm = new PaymentTerm();
        $this->paymentTermAssociationProvider->expects($this->once())
            ->method('setPaymentTerm')
            ->with($this->isInstanceOf(Order::class), $paymentTerm);

        $data = [
            'shippingAddress' => $newAddress,
            'paymentTerm' => $paymentTerm,
            'skipMe' => true
        ];

        $order = $this->mapper->map($checkout, $data, ['skipMe' => true]);

        $this->assertInstanceOf(Order::class, $order);
        $this->assertEquals($address, $order->getBillingAddress());
        $this->assertEquals($newAddress, $order->getShippingAddress());
        $this->assertEquals($website, $order->getWebsite());
        $this->assertEquals($shippingCost, $order->getShippingCost());
    }

    public function testMapWithSourceEntity()
    {
        $this->provider->expects($this->once())->method('getFields')->willReturn([]);

        $source = new CheckoutSourceStub();
        $source->setId(2);
        $source->setShoppingList($this->getEntity(ShoppingList::class, ['id' => 5, 'label' => 'SL#1']));
        $checkout = (new Checkout())->setSource($source);

        $order = $this->mapper->map($checkout, []);

        $this->assertInstanceOf(Order::class, $order);
        $this->assertEquals(ShoppingList::class, $order->getSourceEntityClass());
        $this->assertEquals(5, $order->getSourceEntityId());
        $this->assertEquals('SL#1', $order->getSourceEntityIdentifier());
    }

    public function testMapIdsIgnored()
    {
        $this->provider->expects($this->once())->method('getFields')->willReturn(
            [['name' => 'id', 'identifier' => true]]
        );

        $checkout = $this->getEntity(Checkout::class, ['id' => 5]);

        $order = $this->mapper->map($checkout, []);

        $this->assertInstanceOf(Order::class, $order);
        $this->assertNull($order->getId());
    }
}
