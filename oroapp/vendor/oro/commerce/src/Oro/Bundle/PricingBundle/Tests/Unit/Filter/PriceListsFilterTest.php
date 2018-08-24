<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Filter;

use Doctrine\Bundle\DoctrineBundle\Registry;

use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;

use Oro\Bundle\FilterBundle\Datasource\FilterDatasourceAdapterInterface;
use Oro\Bundle\FilterBundle\Filter\FilterUtility;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Filter\PriceListsFilter;

class PriceListsFilterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|FormFactoryInterface
     */
    protected $formFactory;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|FormInterface
     */
    protected $form;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|FilterUtility
     */
    protected $filterUtility;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|Registry
     */
    protected $registry;

    /** @var PriceListsFilter */
    protected $priceListsFilter;

    public function setUp()
    {
        $this->form = $this->createMock('Symfony\Component\Form\Test\FormInterface');
        $this->formFactory = $this->createMock('Symfony\Component\Form\FormFactoryInterface');
        $this->formFactory->expects($this->any())
            ->method('create')
            ->will($this->returnValue($this->form));

        $this->filterUtility = $this->getMockBuilder('Oro\Bundle\FilterBundle\Filter\FilterUtility')
            ->disableOriginalConstructor()
            ->getMock();
        $this->filterUtility->expects($this->any())
            ->method('getExcludeParams')
            ->willReturn([]);

        $this->registry = $this->getMockBuilder('Doctrine\Bundle\DoctrineBundle\Registry')
            ->disableOriginalConstructor()
            ->getMock();

        $this->priceListsFilter = new PriceListsFilter(
            $this->formFactory,
            $this->filterUtility
        );

        $this->priceListsFilter->setRegistry($this->registry);
    }

    /**
     * @expectedException \Oro\Component\ConfigExpression\Exception\InvalidArgumentException
     * @expectedExceptionMessage Parameter relation_class_name is required
     */
    public function testInitEntityAliasExceptions()
    {
        $this->priceListsFilter->init('price_list', []);
    }

    public function testApplyNoData()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|FilterDatasourceAdapterInterface $ds */
        $ds = $this->getMockBuilder('Oro\Bundle\FilterBundle\Datasource\Orm\OrmFilterDatasourceAdapter')
            ->disableOriginalConstructor()
            ->getMock();

        $this->priceListsFilter->init(
            'price_list',
            [
                PriceListsFilter::RELATION_CLASS_NAME_PARAMETER => 'OroPricingBundle:PriceListToCustomer'
            ]
        );

        $result = $this->priceListsFilter->apply($ds, null);

        $this->assertFalse($result);
    }

    public function testApply()
    {
        $data = [
            'type' => null,
            'value' => [new PriceList()]
        ];

        /** @var \PHPUnit_Framework_MockObject_MockObject|FilterDatasourceAdapterInterface $ds */
        $ds = $this->getMockBuilder('Oro\Bundle\FilterBundle\Datasource\Orm\OrmFilterDatasourceAdapter')
            ->disableOriginalConstructor()
            ->getMock();

        $queryBuilder = $this->getMockBuilder('Doctrine\ORM\QueryBuilder')
            ->disableOriginalConstructor()
            ->getMock();

        $ds->expects($this->once())
            ->method('getQueryBuilder')
            ->willReturn($queryBuilder);

        $repository = $this
            ->getMockBuilder('Oro\Bundle\PricingBundle\Entity\Repository\PriceListToCustomerRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $repository->expects($this->once())
            ->method('restrictByPriceList');

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $em->expects($this->once())
            ->method('getRepository')
            ->with('OroPricingBundle:PriceListToCustomer')
            ->willReturn($repository);

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->with('OroPricingBundle:PriceListToCustomer')
            ->willReturn($em);

        $this->priceListsFilter->init(
            'price_list',
            [
                PriceListsFilter::RELATION_CLASS_NAME_PARAMETER => 'OroPricingBundle:PriceListToCustomer'
            ]
        );

        $result = $this->priceListsFilter->apply($ds, $data);

        $this->assertTrue($result);
    }
}
