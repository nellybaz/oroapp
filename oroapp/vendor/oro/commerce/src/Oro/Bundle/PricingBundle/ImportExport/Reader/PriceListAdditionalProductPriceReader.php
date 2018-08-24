<?php

namespace Oro\Bundle\PricingBundle\ImportExport\Reader;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

use Oro\Bundle\ImportExportBundle\Context\ContextInterface;
use Oro\Bundle\ImportExportBundle\Context\ContextRegistry;
use Oro\Bundle\ImportExportBundle\Reader\IteratorBasedReader;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\Repository\PriceListToProductRepository;
use Oro\Bundle\PricingBundle\ImportExport\Reader\Iterator\AdditionalProductPricesIterator;
use Oro\Bundle\PricingBundle\Sharding\ShardManager;

class PriceListAdditionalProductPriceReader extends IteratorBasedReader
{
    /**
     * @var ShardManager
     */
    protected $shardManager;

    /**
     * @var int
     */
    protected $priceListId;

    /**
     * @var ManagerRegistry
     */
    protected $registry;

    /**
     * @param ContextRegistry $contextRegistry
     * @param ManagerRegistry $registry
     * @param ShardManager $shardManager
     */
    public function __construct(
        ContextRegistry $contextRegistry,
        ManagerRegistry $registry,
        ShardManager $shardManager
    ) {
        parent::__construct($contextRegistry);

        $this->registry = $registry;
        $this->shardManager = $shardManager;
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeFromContext(ContextInterface $context)
    {
        $this->priceListId = (int)$context->getOption('price_list_id');
        $this->setSourceIterator($this->createIterator());

        $configuration = $this->stepExecution->getJobExecution()->getJobInstance()->getRawConfiguration();
        $configuration['export']['firstLineIsHeader'] = false;
        $this->stepExecution->getJobExecution()->getJobInstance()->setRawConfiguration($configuration);

        parent::initializeFromContext($context);
    }

    /**
     * @return \Iterator
     */
    protected function createIterator()
    {
        if ($this->priceListId) {
            /** @var EntityManager $em */
            $em = $this->registry->getManagerForClass('OroPricingBundle:PriceListToProduct');

            /** @var PriceListToProductRepository $repository */
            $repository = $em->getRepository('OroPricingBundle:PriceListToProduct');
            
            /** @var PriceList $priceList */
            $priceList = $em->getReference('OroPricingBundle:PriceList', $this->priceListId);

            return new AdditionalProductPricesIterator(
                $repository->getProductsWithoutPrices($this->shardManager, $priceList),
                $priceList
            );
        } else {
            return new \ArrayIterator();
        }
    }
}
