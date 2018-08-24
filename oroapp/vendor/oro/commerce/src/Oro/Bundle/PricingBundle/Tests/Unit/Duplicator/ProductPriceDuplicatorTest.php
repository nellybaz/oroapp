<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Duplicator;

use Doctrine\Common\Persistence\ObjectManager;
use Oro\Bundle\PricingBundle\Duplicator\ProductPriceDuplicator;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\Repository\ProductPriceRepository;
use Oro\Bundle\PricingBundle\ORM\InsertFromSelectShardQueryExecutor;
use Symfony\Bridge\Doctrine\ManagerRegistry;

class ProductPriceDuplicatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $registry;

    /**
     * @var ProductPriceDuplicator
     */
    protected $priceDuplicator;

    /**
     * @var InsertFromSelectShardQueryExecutor|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $insertExecutor;

    /**
     * @var ObjectManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $manager;

    /**
     * @var ProductPriceRepository|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $repository;

    public function setUp()
    {
        $this->registry = $this->getMockWithoutConstructor('Symfony\Bridge\Doctrine\ManagerRegistry');
        $this->insertExecutor = $this
            ->getMockWithoutConstructor(InsertFromSelectShardQueryExecutor::class);
        $this->manager = $this->getMockWithoutConstructor('Doctrine\Common\Persistence\ObjectManager');

        $this->priceDuplicator = new ProductPriceDuplicator(
            $this->registry,
            $this->insertExecutor
        );
        $this->repository = $this
            ->getMockWithoutConstructor('Oro\Bundle\PricingBundle\Entity\Repository\ProductPriceRepository');
    }

    /**
     * @dataProvider duplicateDataProvider
     * @param PriceList $sourcePriceList
     * @param PriceList $targetPriceList
     */
    public function testDuplicate(PriceList $sourcePriceList, PriceList $targetPriceList)
    {
        $priceListClass = 'Oro\Bundle\PricingBundle\Entity\ProductPrice';
        $this->priceDuplicator->setPriceListClass($priceListClass);

        $this->manager->expects($this->once())
            ->method('getRepository')
            ->with($priceListClass)
            ->willReturn($this->repository);
        $this->registry->expects($this->once())->method('getManagerForClass')->willReturn($this->manager);
        $this->repository->expects($this->once())
            ->method('copyPrices')
            ->with($sourcePriceList, $targetPriceList, $this->insertExecutor);

        $this->priceDuplicator->duplicate($sourcePriceList, $targetPriceList);
    }

    /**
     * @return array
     */
    public function duplicateDataProvider()
    {
        return [
            'target price list without prices' => [
                'sourcePriceList' => new PriceList(),
                'targetPriceList' => new PriceList()
            ],
        ];
    }

    /**
     * @param $className
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getMockWithoutConstructor($className)
    {
        return $this->getMockBuilder($className)->disableOriginalConstructor()->getMock();
    }
}
