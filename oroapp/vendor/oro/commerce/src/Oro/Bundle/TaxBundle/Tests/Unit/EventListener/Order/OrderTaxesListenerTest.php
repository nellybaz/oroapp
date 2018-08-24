<?php

namespace Oro\Bundle\TaxBundle\Tests\Unit\EventListener\Order;

use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\OrderBundle\Event\OrderEvent;
use Oro\Bundle\OrderBundle\EventListener\Order\MatchingPriceEventListener;
use Oro\Bundle\OrderBundle\Pricing\PriceMatcher;
use Oro\Bundle\TaxBundle\EventListener\Order\OrderTaxesListener;
use Oro\Bundle\TaxBundle\Model\Result;
use Oro\Bundle\TaxBundle\Model\ResultElement;
use Oro\Bundle\TaxBundle\Model\TaxResultElement;
use Oro\Bundle\TaxBundle\Provider\TaxationSettingsProvider;
use Oro\Bundle\TaxBundle\Provider\TaxProviderInterface;
use Oro\Bundle\TaxBundle\Provider\TaxProviderRegistry;
use Oro\Component\Testing\Unit\EntityTrait;

class OrderTaxesListenerTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /** @var OrderTaxesListener */
    protected $listener;

    /** @var TaxProviderInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $taxProvider;

    /** @var OrderEvent|\PHPUnit_Framework_MockObject_MockObject */
    protected $event;

    /** @var PriceMatcher|\PHPUnit_Framework_MockObject_MockObject */
    protected $priceMatcher;

    /** @var TaxationSettingsProvider|\PHPUnit_Framework_MockObject_MockObject */
    protected $taxationSettingsProvider;

    protected function setUp()
    {
        $this->taxProvider = $this->createMock(TaxProviderInterface::class);
        $taxProviderRegistry = $this->createMock(TaxProviderRegistry::class);
        $taxProviderRegistry->expects($this->any())
            ->method('getEnabledProvider')
            ->willReturn($this->taxProvider);

        $this->event = $this->getMockBuilder('Oro\Bundle\OrderBundle\Event\OrderEvent')
            ->disableOriginalConstructor()
            ->getMock();

        $this->taxationSettingsProvider = $this
            ->getMockBuilder('Oro\Bundle\TaxBundle\Provider\TaxationSettingsProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->priceMatcher = $this->getMockBuilder('Oro\Bundle\OrderBundle\Pricing\PriceMatcher')
            ->disableOriginalConstructor()
            ->getMock();

        $this->listener = new OrderTaxesListener(
            $taxProviderRegistry,
            $this->taxationSettingsProvider,
            $this->priceMatcher
        );
    }

    protected function tearDown()
    {
        unset($this->listener, $this->taxManager, $this->event, $this->numberFormatter);
    }

    /**
     * @param Result $result
     * @param array $expectedResult
     *
     * @dataProvider onOrderEventDataProvider
     */
    public function testOnOrderEvent(Result $result, array $expectedResult)
    {
        $order = new Order();
        $prices = [MatchingPriceEventListener::MATCHED_PRICES_KEY => ['price1' => []]];
        $data = new \ArrayObject($prices);

        $this->taxProvider->expects($this->once())
            ->method('getTax')
            ->with($order)
            ->willReturn($result);

        $this->taxationSettingsProvider->expects($this->once())
            ->method('isEnabled')
            ->willReturn(true);

        $this->event->expects($this->once())
            ->method('getOrder')
            ->willReturn($order);

        $this->event->expects($this->once())
            ->method('getData')
            ->willReturn($data);

        $this->priceMatcher->expects($this->once())->method('fillMatchingPrices');

        $this->listener->onOrderEvent($this->event);

        $this->assertEquals($data->getArrayCopy(), array_merge($expectedResult, $prices));
    }

    public function testOnOrderEventTaxationDisabled()
    {
        $this->taxProvider->expects($this->never())->method($this->anything());
        $this->event->expects($this->never())->method($this->anything());

        $this->taxationSettingsProvider->expects($this->once())
            ->method('isEnabled')
            ->willReturn(false);

        $this->listener->onOrderEvent($this->event);
    }

    /**
     * @return array
     */
    public function onOrderEventDataProvider()
    {
        $taxResult = TaxResultElement::create('TAX', 0.1, 50, 5);
        $taxResult->offsetSet(TaxResultElement::CURRENCY, 'USD');

        $lineItem = new Result();
        $lineItem->offsetSet(Result::UNIT, ResultElement::create(11, 10, 1, 0));
        $lineItem->offsetSet(Result::ROW, ResultElement::create(55, 50, 5, 0));
        $lineItem->offsetSet(Result::TAXES, [$taxResult]);

        $result = new Result();
        $result->offsetSet(Result::TOTAL, ResultElement::create(55, 50, 5, 0));
        $result->offsetSet(Result::ITEMS, [$lineItem]);
        $result->offsetSet(Result::TAXES, [$taxResult]);

        return [
            [
                $result,
                [
                    'taxItems' => [
                        [
                            'unit' => [
                                'includingTax' => 11,
                                'excludingTax' => 10,
                                'taxAmount' => 1,
                                'adjustment' => 0,
                            ],
                            'row' => [
                                'includingTax' => 55,
                                'excludingTax' => 50,
                                'taxAmount' => 5,
                                'adjustment' => 0,
                            ],
                            'taxes' => [
                                [
                                    'tax' => 'TAX',
                                    'rate' => '0.1',
                                    'taxableAmount' => '50',
                                    'taxAmount' => '5',
                                    'currency' => 'USD',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }

    public function testOnOrderEventNoData()
    {
        $order = new Order();
        $data = new \ArrayObject();

        $this->taxProvider->expects($this->once())
            ->method('getTax')
            ->with($order)
            ->willReturn(new Result());

        $this->taxationSettingsProvider->expects($this->once())
            ->method('isEnabled')
            ->willReturn(true);

        $this->event->expects($this->once())
            ->method('getOrder')
            ->willReturn($order);

        $this->event->expects($this->once())
            ->method('getData')
            ->willReturn($data);

        $this->priceMatcher->expects($this->never())->method('fillMatchingPrices');

        $this->listener->onOrderEvent($this->event);
    }

    public function testOnOrderEventNoPrices()
    {
        $order = new Order();
        $data = new \ArrayObject([MatchingPriceEventListener::MATCHED_PRICES_KEY => []]);

        $this->taxProvider->expects($this->once())
            ->method('getTax')
            ->with($order)
            ->willReturn(new Result());

        $this->taxationSettingsProvider->expects($this->once())
            ->method('isEnabled')
            ->willReturn(true);

        $this->event->expects($this->once())
            ->method('getOrder')
            ->willReturn($order);

        $this->event->expects($this->once())
            ->method('getData')
            ->willReturn($data);

        $this->priceMatcher->expects($this->never())->method('fillMatchingPrices');

        $this->listener->onOrderEvent($this->event);
    }
}
