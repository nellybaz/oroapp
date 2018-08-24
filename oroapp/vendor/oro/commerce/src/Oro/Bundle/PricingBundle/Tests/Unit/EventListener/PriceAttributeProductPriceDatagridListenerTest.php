<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\EventListener;

use Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration;
use Oro\Bundle\DataGridBundle\Datagrid\Datagrid;
use Oro\Bundle\DataGridBundle\Datagrid\ParameterBag;
use Oro\Bundle\DataGridBundle\Datasource\ResultRecord;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\DataGridBundle\Event\BuildBefore;
use Oro\Bundle\DataGridBundle\Event\OrmResultAfter;
use Oro\Bundle\PricingBundle\Entity\PriceAttributePriceList;
use Oro\Bundle\PricingBundle\Entity\PriceAttributeProductPrice;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\Repository\PriceAttributePriceListRepository;
use Oro\Bundle\PricingBundle\Entity\Repository\PriceAttributeProductPriceRepository;
use Oro\Bundle\PricingBundle\Model\PriceListRequestHandler;
use Oro\Bundle\PricingBundle\EventListener\PriceAttributeProductPriceDatagridListener;
use Oro\Bundle\ProductBundle\Entity\Product;

class PriceAttributeProductPriceDatagridListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PriceListRequestHandler|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $priceListRequestHandler;

    /**
     * @var DoctrineHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $doctrineHelper;

    /**
     * @var PriceAttributeProductPriceDatagridListener
     */
    protected $priceAttributeProductPriceDatagridListener;

    protected function setUp()
    {
        $this->priceListRequestHandler = $this->getMockBuilder(
            'Oro\Bundle\PricingBundle\Model\PriceListRequestHandler'
        )
            ->disableOriginalConstructor()
            ->getMock();
        $this->doctrineHelper = $this->getMockBuilder(DoctrineHelper::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->priceAttributeProductPriceDatagridListener = new PriceAttributeProductPriceDatagridListener(
            $this->priceListRequestHandler,
            $this->doctrineHelper
        );
    }

    public function testOnBuildBeforeWithoutCurrency()
    {
        /* @var BuildBefore|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this->getMockBuilder(BuildBefore::class)->disableOriginalConstructor()->getMock();
        $this->setRequestHandlerExpectations([]);
        $this->doctrineHelper->expects($this->never())->method('getEntityRepository');
        $this->priceAttributeProductPriceDatagridListener->onBuildBefore($event);
    }

    public function testOnBuildBefore()
    {
        $parameterBagParams = [];
        $datagridParams = [];
        $paramsBag = new ParameterBag($parameterBagParams);
        $config = DatagridConfiguration::create($datagridParams);

        $datagrid = new Datagrid('grid', $config, $paramsBag);

        /* @var BuildBefore $event */
        $event = new BuildBefore($datagrid, $config);
        $currencies = ['USD', 'EUR'];
        $this->setRequestHandlerExpectations($currencies);

        $repo = $this->getMockBuilder(PriceAttributePriceListRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $repo->expects($this->once())->method('getAttributesWithCurrencies')
            ->with($currencies)
            ->willReturn([['id' => 1, 'currency' => 'USD', 'name' => 'MSRP']]);
        $this->doctrineHelper->expects($this->once())->method('getEntityRepository')
            ->with('OroPricingBundle:PriceAttributePriceList')
            ->willReturn($repo);

        $this->priceAttributeProductPriceDatagridListener->onBuildBefore($event);
        $this->assertEquals(
            [
                'query' => [
                    'select' =>
                        ['min(price_attribute_price_column_usd_1_table.value) as price_attribute_price_column_usd_1'],
                    'join' => [
                        'left' => [
                            [
                                'join' => 'OroPricingBundle:PriceAttributeProductPrice',
                                'alias' => 'price_attribute_price_column_usd_1_table',
                                'conditionType' => 'WITH',
                                'condition' => 'price_attribute_price_column_usd_1_table.product = product.id'.
                                    ' AND price_attribute_price_column_usd_1_table.currency = \'USD\''.
                                    ' AND price_attribute_price_column_usd_1_table.priceList = 1'.
                                    ' AND price_attribute_price_column_usd_1_table.quantity = 1',
                            ],
                        ],
                    ],
                ],
            ],
            $config->offsetGet('source')
        );

        $this->assertEquals(
            [
                'price_attribute_price_column_usd_1' => [
                    'label' => 'MSRP (USD)',
                    'type' => 'twig',
                    'template' => 'OroPricingBundle:Datagrid:Column/productPrice.html.twig',
                    'frontend_type' => 'html',
                    'renderable' => true,
                ],
            ],
            $config->offsetGet('columns')
        );

        $this->assertEquals(
            [
                'columns' => [
                    'price_attribute_price_column_usd_1' => [
                        'data_name' => 'price_attribute_price_column_usd_1',
                    ],
                ],
            ],
            $config->offsetGet('sorters')
        );

        $this->assertEquals(
            [
                'columns' => [
                    'price_attribute_price_column_usd_1' => [
                        'type' => 'price-attribute-product-price',
                        'data_name' => 'USD',
                    ],
                ],
            ],
            $config->offsetGet('filters')
        );
    }

    public function testOnResultAfterWithoutCurrency()
    {
        /* @var OrmResultAfter|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this->getMockBuilder(OrmResultAfter::class)->disableOriginalConstructor()->getMock();
        $this->setRequestHandlerExpectations([]);
        $this->doctrineHelper->expects($this->never())->method('getEntityRepository');
        $this->priceAttributeProductPriceDatagridListener->onResultAfter($event);
    }

    public function testOnResultAfter()
    {
        $config = DatagridConfiguration::create([]);
        $datagrid = new Datagrid('grid', $config, new ParameterBag([]));
        /** @var OrmResultAfter $event * */
        $event = new OrmResultAfter($datagrid, [new ResultRecord(['id' => 1])]);

        $product = new Product();
        $this->setProperty($product, 'id', 1);

        $priceAttribute = new PriceAttributePriceList();
        $this->setProperty($priceAttribute, 'id', 1);

        $priceAttributeProductPrice = new PriceAttributeProductPrice();
        $this->setProperty($priceAttributeProductPrice, 'id', 1);
        $priceAttributeProductPrice->setPrice(Price::create('42', 'USD'))
            ->setProduct($product)
            ->setPriceList($priceAttribute);

        $this->setRequestHandlerExpectations(['USD', 'EUR']);
        $priceRepository = $this->getMockBuilder(PriceAttributeProductPriceRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $priceRepository->expects($this->once())
            ->method('findByPriceAttributeProductPriceIdsAndProductIds')
            ->with([1], [1])
            ->willReturn([$priceAttributeProductPrice]);
        $this->doctrineHelper->expects($this->once())
            ->method('getEntityRepository')
            ->with('OroPricingBundle:PriceAttributeProductPrice')
            ->willReturn($priceRepository);
        $this->priceAttributeProductPriceDatagridListener
            ->setAttributesWithCurrencies([['id' => 1, 'name' => 'priceAttribute1', 'currency' => 'USD']]);
        $this->priceAttributeProductPriceDatagridListener->onResultAfter($event);

        $prices = current($event->getRecords())->getValue('price_attribute_price_column_usd_1');
        $this->assertCount(1, $prices);
        /** @var PriceAttributeProductPrice $price */
        $price = $prices[0];
        $this->assertEquals(1, $price->getProduct()->getId());
        $this->assertEquals(42, $price->getPrice()->getValue());
        $this->assertEquals('USD', $price->getPrice()->getCurrency());
    }

    /**
     * @param array $currencies
     */
    protected function setRequestHandlerExpectations($currencies)
    {
        $priceList = new PriceList();
        $this->priceListRequestHandler->expects($this->once())
            ->method('getPriceList')->willReturn($priceList);
        $this->priceListRequestHandler->expects($this->once())
            ->method('getPriceListSelectedCurrencies')
            ->with($priceList)
            ->willReturn($currencies);
    }

    /**
     * @param object $object
     * @param string $property
     * @param mixed $value
     *
     * @return object
     */
    protected function setProperty($object, $property, $value)
    {
        $reflection = new \ReflectionProperty(get_class($object), $property);
        $reflection->setAccessible(true);
        $reflection->setValue($object, $value);

        return $this;
    }
}
