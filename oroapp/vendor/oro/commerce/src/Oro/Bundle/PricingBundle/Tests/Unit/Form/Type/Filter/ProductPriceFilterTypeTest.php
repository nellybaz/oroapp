<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Form\Type\Filter;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\ORM\EntityManager;

use Oro\Bundle\FilterBundle\Form\Type\Filter\NumberRangeFilterType;
use Oro\Bundle\FilterBundle\Tests\Unit\Fixtures\CustomFormExtension;
use Oro\Bundle\FilterBundle\Tests\Unit\Form\Type\Filter\NumberRangeFilterTypeTest;
use Oro\Bundle\ProductBundle\Formatter\ProductUnitLabelFormatter;
use Oro\Bundle\PricingBundle\Form\Type\Filter\ProductPriceFilterType;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;

class ProductPriceFilterTypeTest extends NumberRangeFilterTypeTest
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ManagerRegistry
     */
    protected $registry;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $translator = $this->createMockTranslator();
        $this->formExtensions[] = new CustomFormExtension([new NumberRangeFilterType($translator)]);

        parent::setUp();

        /** @var \PHPUnit_Framework_MockObject_MockObject|ProductUnitLabelFormatter $formatter */
        $formatter = $this->getMockBuilder('Oro\Bundle\ProductBundle\Formatter\ProductUnitLabelFormatter')
            ->disableOriginalConstructor()
            ->getMock();
        $formatter->expects($this->any())
            ->method('format')
            ->with('item')
            ->will($this->returnValue('Item'));

        $this->type = new ProductPriceFilterType($translator, $this->getRegistry(), $formatter);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|ManagerRegistry
     */
    public function getRegistry()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|ProductUnit $productUnitMock */
        $productUnitMock = $this->createMock('Oro\Bundle\ProductBundle\Entity\ProductUnit');
        $productUnitMock->expects($this->any())
            ->method('getCode')
            ->will($this->returnValue('item'));

        /** @var \PHPUnit_Framework_MockObject_MockObject|ObjectRepository $productUnitRepository */
        $productUnitRepository = $this
            ->getMockBuilder(
                'Oro\Bundle\ProductBundle\Entity\Repository\ProductUnitRepository'
            )
            ->disableOriginalConstructor()
            ->getMock();

        $productUnitRepository->expects($this->any())
            ->method('getAllUnitCodes')
            ->willReturn(['item']);

        /** @var \PHPUnit_Framework_MockObject_MockObject|EntityManager $entityManager */
        $entityManager = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();
        $entityManager->expects($this->any())
            ->method('getRepository')
            ->with('OroProductBundle:ProductUnit')
            ->will($this->returnValue($productUnitRepository));

        $this->registry = $this->createMock('Doctrine\Common\Persistence\ManagerRegistry');
        $this->registry->expects($this->any())
            ->method('getManagerForClass')
            ->with('OroProductBundle:ProductUnit')
            ->will($this->returnValue($entityManager));

        return $this->registry;
    }

    /**
     * {@inheritDoc}
     */
    public function testGetName()
    {
        $this->assertEquals(ProductPriceFilterType::NAME, $this->type->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptionsProvider()
    {
        return [
            [
                'defaultOptions' => [
                    'data_type' => NumberRangeFilterType::DATA_DECIMAL,
                    'operator_choices' => [
                        NumberRangeFilterType::TYPE_BETWEEN          => 'oro.filter.form.label_type_range_between',
                        NumberRangeFilterType::TYPE_EQUAL            => 'oro.filter.form.label_type_range_equals',
                        NumberRangeFilterType::TYPE_GREATER_THAN     => 'oro.filter.form.label_type_range_more_than',
                        NumberRangeFilterType::TYPE_LESS_THAN        => 'oro.filter.form.label_type_range_less_than',
                        NumberRangeFilterType::TYPE_GREATER_EQUAL    => 'oro.filter.form.label_type_range_more_equals',
                        NumberRangeFilterType::TYPE_LESS_EQUAL        => 'oro.filter.form.label_type_range_less_equals',
                    ]
                ]
            ]
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function bindDataProvider()
    {
        $bindData = parent::bindDataProvider();

        /* ProductPriceFilterType doesn't have "not between" option */
        unset($bindData['not between range']);

        foreach ($bindData as $key => &$data) {
            $data['bindData']['unit'] = 'item';
            $data['formData']['unit'] = 'item';
            $data['viewData']['value']['unit'] = 'item';
        }

        return $bindData;
    }

    public function testGetParent()
    {
        $this->assertEquals(NumberRangeFilterType::NAME, $this->type->getParent());
    }
}
