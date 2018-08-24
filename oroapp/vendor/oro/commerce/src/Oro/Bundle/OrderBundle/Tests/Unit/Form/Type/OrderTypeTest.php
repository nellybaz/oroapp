<?php

namespace Oro\Bundle\OrderBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Form\Test\TypeTestCase;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\CurrencyBundle\Form\Type\PriceType;
use Oro\Bundle\CurrencyBundle\Tests\Unit\Form\Type\PriceTypeGenerator;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\CustomerBundle\Form\Type\CustomerSelectType;
use Oro\Bundle\CustomerBundle\Form\Type\CustomerUserSelectType;
use Oro\Bundle\FormBundle\Form\Type\CollectionType;
use Oro\Bundle\FormBundle\Form\Type\OroDateType;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\OrderBundle\Entity\OrderLineItem;
use Oro\Bundle\OrderBundle\Form\Type\EventListener\SubtotalSubscriber;
use Oro\Bundle\OrderBundle\Form\Type\OrderDiscountCollectionRowType;
use Oro\Bundle\OrderBundle\Form\Type\OrderDiscountCollectionTableType;
use Oro\Bundle\OrderBundle\Form\Type\OrderLineItemsCollectionType;
use Oro\Bundle\OrderBundle\Form\Type\OrderLineItemType;
use Oro\Bundle\OrderBundle\Form\Type\OrderType;
use Oro\Bundle\OrderBundle\Handler\OrderCurrencyHandler;
use Oro\Bundle\OrderBundle\Pricing\PriceMatcher;
use Oro\Bundle\OrderBundle\Provider\DiscountSubtotalProvider;
use Oro\Bundle\OrderBundle\Provider\OrderAddressSecurityProvider;
use Oro\Bundle\OrderBundle\Total\TotalHelper;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Form\Type\PriceListSelectType;
use Oro\Bundle\PricingBundle\SubtotalProcessor\Model\Subtotal;
use Oro\Bundle\PricingBundle\SubtotalProcessor\Provider\LineItemSubtotalProvider;
use Oro\Bundle\PricingBundle\SubtotalProcessor\TotalProcessorProvider;
use Oro\Bundle\PricingBundle\Tests\Unit\Form\Type\Stub\CurrencySelectionTypeStub;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Provider\ProductUnitsProvider;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\QuantityTypeTrait;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\Stub\ProductSelectTypeStub;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\Stub\ProductUnitSelectionTypeStub;
use Oro\Bundle\SaleBundle\Tests\Unit\Form\Type\Stub\EntityType as StubEntityType;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Component\Testing\Unit\Form\Type\Stub\EntityType;
use Oro\Bundle\CurrencyBundle\Converter\RateConverterInterface;
use Oro\Bundle\CurrencyBundle\Entity\MultiCurrency;

class OrderTypeTest extends TypeTestCase
{
    use QuantityTypeTrait;

    /** @var \PHPUnit_Framework_MockObject_MockObject|OrderAddressSecurityProvider */
    private $orderAddressSecurityProvider;

    /** @var \PHPUnit_Framework_MockObject_MockObject|OrderCurrencyHandler */
    private $orderCurrencyHandler;

    /** @var OrderType */
    private $type;

    /** @var \PHPUnit_Framework_MockObject_MockObject|TotalProcessorProvider */
    protected $totalsProvider;

    /** @var \PHPUnit_Framework_MockObject_MockObject|LineItemSubtotalProvider */
    protected $lineItemSubtotalProvider;

    /** @var \PHPUnit_Framework_MockObject_MockObject|DiscountSubtotalProvider */
    protected $discountSubtotalProvider;

    /** @var PriceMatcher|\PHPUnit_Framework_MockObject_MockObject */
    protected $priceMatcher;

    /** @var RateConverterInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $rateConverter;

    /** @var ValidatorInterface  */
    private $validator;

    protected function setUp()
    {
        $this->orderAddressSecurityProvider = $this
            ->getMockBuilder(OrderAddressSecurityProvider::class)
            ->disableOriginalConstructor()->getMock();
        $this->orderCurrencyHandler = $this->getMockBuilder(OrderCurrencyHandler::class)
            ->disableOriginalConstructor()->getMock();

        $this->totalsProvider = $this
            ->getMockBuilder(TotalProcessorProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->lineItemSubtotalProvider = $this
            ->getMockBuilder(LineItemSubtotalProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->discountSubtotalProvider = $this
            ->getMockBuilder(DiscountSubtotalProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->priceMatcher = $this->getMockBuilder(PriceMatcher::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->rateConverter = $this->getMockBuilder(RateConverterInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $totalHelper = new TotalHelper(
            $this->totalsProvider,
            $this->lineItemSubtotalProvider,
            $this->discountSubtotalProvider,
            $this->rateConverter
        );

        // create a type instance with the mocked dependencies
        $this->type = new OrderType(
            $this->orderAddressSecurityProvider,
            $this->orderCurrencyHandler,
            new SubtotalSubscriber($totalHelper, $this->priceMatcher)
        );

        $this->type->setDataClass(Order::class);
        parent::setUp();
    }

    public function testConfigureOptions()
    {
        /* @var $resolver \PHPUnit_Framework_MockObject_MockObject|OptionsResolver */
        $resolver = $this->createMock(OptionsResolver::class);
        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with(
                [
                    'data_class' => 'Order',
                    'intention' => 'order'
                ]
            );

        $this->type->setDataClass('Order');
        $this->type->configureOptions($resolver);
    }

    public function testGetName()
    {
        $this->assertEquals('oro_order_type', $this->type->getName());
    }

    /**
     * @dataProvider submitDataProvider
     *
     * @param $submitData
     * @param Order $expectedOrder
     */
    public function testSubmitValidData($submitData, $expectedOrder)
    {
        $order = new Order();
        $order->setTotalDiscounts(Price::create(99, 'USD'));

        $options = [
            'data' => $order
        ];

        $this->orderCurrencyHandler->expects($this->any())->method('setOrderCurrency');

        $form = $this->factory->create($this->type, null, $options);

        $subtotal = new Subtotal();
        $subtotal->setAmount(99);
        $subtotal->setCurrency('USD');
        $this->lineItemSubtotalProvider
            ->expects($this->any())
            ->method('getSubtotal')
            ->willReturn($subtotal);

        $total = new Subtotal();
        $total->setAmount(0);
        $total->setCurrency('USD');

        $this->totalsProvider
            ->expects($this->once())
            ->method('enableRecalculation')
            ->willReturnSelf();

        $this->totalsProvider
            ->expects($this->once())
            ->method('getTotal')
            ->willReturn($total);

        $this->rateConverter
            ->expects($this->exactly(2))
            ->method('getBaseCurrencyAmount')
            ->willReturnCallback(function (MultiCurrency $value) {
                return $value->getValue();
            });

        $form->submit($submitData);

        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($expectedOrder, $form->getData());
    }

    /**
     * @return array
     */
    public function submitDataProvider()
    {
        return [
            'valid data' => [
                'submitData' => [
                    'sourceEntityClass' => 'Class',
                    'sourceEntityId' => '1',
                    'sourceEntityIdentifier' => '1',
                    'customerUser' => 1,
                    'customer' => 2,
                    'poNumber' => '11',
                    'shipUntil' => null,
                    'subtotal' => 0.0,
                    'total' => 0.0,
                    'totalDiscounts' => 0.0,
                    'lineItems' => [
                        [
                            'productSku' => 'HLCU',
                            'product' => 3,
                            'freeFormProduct' => '',
                            'quantity' => 39,
                            'productUnit' => 'piece',
                            'price' => [
                                'value' => 26.5050,
                                'currency' => 'USD',
                            ],
                            'priceType' => 10,
                            'shipBy' => '',
                            'comment' => ''
                        ],
                    ],
                    'currency' => 'USD',
                    'shippingMethod' => 'shippingMethod1',
                    'shippingMethodType' => 'shippingType1',
                    'estimatedShippingCostAmount' => 10,
                    'overriddenShippingCostAmount' => [
                        'value' => 5,
                        'currency' => 'USD',
                    ]
                ],
                'expectedOrder' => $this->getOrder(
                    [
                        'sourceEntityClass' => 'Class',
                        'sourceEntityId' => '1',
                        'sourceEntityIdentifier' => '1',
                        'customerUser' => 1,
                        'customer' => 2,
                        'poNumber' => '11',
                        'shipUntil' => null,
                        'subtotalObject' => MultiCurrency::create(99, 'USD', 99),
                        'totalObject' => MultiCurrency::create(0, 'USD', 0),
                        'totalDiscounts' => new Price(),
                        'lineItems' => [
                            [
                                'productSku' => 'HLCU',
                                'product' => 3,
                                'freeFormProduct' => '',
                                'quantity' => 39,
                                'price' => [
                                    'value' => 26.5050,
                                    'currency' => 'USD',
                                ],
                                'priceType' => 10,
                                'comment' => null
                            ],
                        ],
                        'currency' => 'USD',
                        'shippingMethod' => 'shippingMethod1',
                        'shippingMethodType' => 'shippingType1',
                        'estimatedShippingCostAmount' => '10',
                        'overriddenShippingCostAmount' => 5.0
                    ]
                )
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtensions()
    {
        $userSelectType = new StubEntityType(
            [
                1 => $this->getEntity(User::class, 1),
                2 => $this->getEntity(User::class, 2),
            ],
            'oro_user_select'
        );

        $customerSelectType = new StubEntityType(
            [
                1 => $this->getEntity(Customer::class, 1),
                2 => $this->getEntity(Customer::class, 2),
            ],
            CustomerSelectType::NAME
        );

        $customerUserSelectType = new StubEntityType(
            [
                1 => $this->getEntity(CustomerUser::class, 1),
                2 => $this->getEntity(CustomerUser::class, 2),
            ],
            CustomerUserSelectType::NAME
        );

        $priceListSelectType = new StubEntityType(
            [
                1 => $this->getEntity(PriceList::class, 1),
                2 => $this->getEntity(PriceList::class, 2),
            ],
            PriceListSelectType::NAME
        );

        $productUnitSelectionType = $this->prepareProductUnitSelectionType();
        $productSelectType = new ProductSelectTypeStub();
        $entityType = $this->prepareProductEntityType();
        $priceType = $this->preparePriceType();

        /** @var \PHPUnit_Framework_MockObject_MockObject|ProductUnitsProvider $productUnitsProvider */
        $productUnitsProvider = $this->createMock(ProductUnitsProvider::class);
        $productUnitsProvider->expects($this->any())
            ->method('getAvailableProductUnits')
            ->willReturn([
                'item' => 'item',
                'kg' => 'kilogram',
            ]);

        $orderLineItemType = new OrderLineItemType($productUnitsProvider);
        $orderLineItemType->setDataClass(OrderLineItem::class);
        $currencySelectionType = new CurrencySelectionTypeStub();

        $this->validator = $this->createMock(ValidatorInterface::class);
        $this->validator
            ->method('validate')
            ->will($this->returnValue(new ConstraintViolationList()));

        return [
            new PreloadedExtension(
                [
                    CollectionType::NAME => new CollectionType(),
                    OroDateType::NAME => new OroDateType(),
                    $priceType->getName() => $priceType,
                    $entityType->getName() => $entityType,
                    $userSelectType->getName() => $userSelectType,
                    $productSelectType->getName() => $productSelectType,
                    $productUnitSelectionType->getName() => $productUnitSelectionType,
                    $customerSelectType->getName() => $customerSelectType,
                    $currencySelectionType->getName() => $currencySelectionType,
                    $customerUserSelectType->getName() => $customerUserSelectType,
                    $priceListSelectType->getName() => $priceListSelectType,
                    OrderLineItemsCollectionType::NAME => new OrderLineItemsCollectionType(),
                    OrderDiscountCollectionTableType::NAME => new OrderDiscountCollectionTableType(),
                    OrderLineItemType::NAME => $orderLineItemType,
                    OrderDiscountCollectionRowType::NAME => new OrderDiscountCollectionRowType(),
                    QuantityTypeTrait::$name => $this->getQuantityType(),
                ],
                []
            ),
            new ValidatorExtension(Validation::createValidator())
        ];
    }

    /**
     * @param string $className
     * @param int $id
     * @param string $primaryKey
     *
     * @return object
     */
    protected function getEntity($className, $id, $primaryKey = 'id')
    {
        static $entities = [];

        if (!isset($entities[$className])) {
            $entities[$className] = [];
        }

        if (!isset($entities[$className][$id])) {
            $entities[$className][$id] = new $className;
            $reflectionClass = new \ReflectionClass($className);
            $method = $reflectionClass->getProperty($primaryKey);
            $method->setAccessible(true);
            $method->setValue($entities[$className][$id], $id);
        }

        return $entities[$className][$id];
    }

    /**
     * @return EntityType
     */
    protected function prepareProductEntityType()
    {
        $entityType = new EntityType(
            [
                2 => $this->getEntity(Product::class, 2),
                3 => $this->getEntity(Product::class, 3),
            ]
        );

        return $entityType;
    }

    /**
     * @return EntityType
     */
    protected function prepareProductUnitSelectionType()
    {
        return new ProductUnitSelectionTypeStub(
            [
                'kg' => $this->getEntity(ProductUnit::class, 'kg', 'code'),
                'item' => $this->getEntity(ProductUnit::class, 'item', 'code'),
            ]
        );
    }

    /**
     * @return PriceType
     */
    protected function preparePriceType()
    {
        return PriceTypeGenerator::createPriceType($this);
    }

    /**
     * @param array $data
     * @return Order
     */
    protected function getOrder($data)
    {
        $order = new Order();
        $accessor = PropertyAccess::createPropertyAccessor();
        foreach ($data as $fieldName => $value) {
            if ($fieldName === 'lineItems') {
                foreach ($value as $lineItem) {
                    $lineItem = $this->getLineItem($lineItem);
                    $order->addLineItem($lineItem);
                }
            } elseif ($fieldName === 'customerUser') {
                $order->setCustomerUser($this->getEntity(
                    CustomerUser::class,
                    $value
                ));
            } elseif ($fieldName === 'customer') {
                $order->setCustomer(
                    $this->getEntity(
                        Customer::class,
                        $value
                    )
                );
            } else {
                $accessor->setValue($order, $fieldName, $value);
            }
        }

        return $order;
    }

    /**
     * @param array $data
     * @return OrderLineItem
     */
    protected function getLineItem($data)
    {
        $lineItem = new OrderLineItem();
        $accessor = PropertyAccess::createPropertyAccessor();
        foreach ($data as $fieldName => $value) {
            if ($fieldName === 'product') {
                $lineItem->setProduct($this->getEntity(Product::class, $value));
            } elseif ($fieldName === 'price') {
                $price = new Price();
                $price->setCurrency($value['currency']);
                $price->setValue($value['value']);
                $lineItem->setPrice($price);
            } else {
                $accessor->setValue($lineItem, $fieldName, $value);
            }
        }

        return $lineItem;
    }
}
