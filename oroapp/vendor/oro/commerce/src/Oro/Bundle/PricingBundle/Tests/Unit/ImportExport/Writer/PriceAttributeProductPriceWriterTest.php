<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\ImportExport\Strategy;

use Akeneo\Bundle\BatchBundle\Entity\StepExecution;
use Doctrine\ORM\EntityManager;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\ImportExportBundle\Context\ContextInterface;
use Oro\Bundle\ImportExportBundle\Context\ContextRegistry;
use Oro\Bundle\PricingBundle\Entity\PriceAttributeProductPrice;
use Oro\Bundle\PricingBundle\ImportExport\Writer\PriceAttributeProductPriceWriter;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class PriceAttributeProductPriceWriterTest extends TestCase
{
    /**
     * @var EntityManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $entityManager;

    /**
     * @var PriceAttributeProductPriceWriter
     */
    private $writer;

    protected function setUp()
    {
        $this->entityManager = $this->createMock(EntityManager::class);

        $registry = $this->createMock(RegistryInterface::class);
        $registry->expects(static::any())
            ->method('getManager')
            ->willReturn($this->entityManager);

        $contextRegistry = $this->createMock(ContextRegistry::class);
        $contextRegistry->expects(static::any())
            ->method('getByStepExecution')
            ->willReturn($this->createMock(ContextInterface::class));

        $this->writer = new PriceAttributeProductPriceWriter(
            $registry,
            $this->createMock(EventDispatcherInterface::class),
            $contextRegistry,
            $this->createMock(LoggerInterface::class)
        );
        $this->writer->setStepExecution($this->createMock(StepExecution::class));
    }

    public function testWrite()
    {
        $items = [
            new PriceAttributeProductPrice(),
            $this->createAttributePriceWithPrice(Price::create('USD', 15)),
            $this->createAttributePriceWithPrice(Price::create('USD', 7)),
            $this->createAttributePriceWithId(1),
            $this->createAttributePriceWithId(2),
            $this->createAttributePriceWithIdPrice(3, Price::create('USD', 20)),
            $this->createAttributePriceWithIdPrice(4, Price::create('USD', 21)),
        ];

        $this->entityManager
            ->expects(self::exactly(2))
            ->method('remove')
            ->withConsecutive(
                [$items[3]],
                [$items[4]]
            );

        $this->entityManager
            ->expects(self::exactly(4))
            ->method('persist')
            ->withConsecutive(
                [$items[1]],
                [$items[2]],
                [$items[5]],
                [$items[6]]
            );

        $this->writer->write($items);
    }

    /**
     * @param int   $id
     * @param Price $price
     *
     * @return PriceAttributeProductPrice
     */
    private function createAttributePriceWithIdPrice(int $id, Price $price): PriceAttributeProductPrice
    {
        $entity = $this->createAttributePriceWithId($id);
        $entity->setPrice($price);

        return $entity;
    }

    /**
     * @param int $id
     *
     * @return PriceAttributeProductPrice
     */
    private function createAttributePriceWithId(int $id): PriceAttributeProductPrice
    {
        $entity = new PriceAttributeProductPrice();

        $entity->setId($id);

        return $entity;
    }

    /**
     * @param Price $price
     *
     * @return PriceAttributeProductPrice
     */
    private function createAttributePriceWithPrice(Price $price): PriceAttributeProductPrice
    {
        $entity = new PriceAttributeProductPrice();

        $entity->setPrice($price);

        return $entity;
    }
}
