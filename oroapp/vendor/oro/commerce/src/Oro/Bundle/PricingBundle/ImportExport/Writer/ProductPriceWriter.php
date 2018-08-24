<?php

namespace Oro\Bundle\PricingBundle\ImportExport\Writer;

use Doctrine\ORM\EntityManager;
use Oro\Bundle\ImportExportBundle\Context\ContextRegistry;
use Oro\Bundle\IntegrationBundle\ImportExport\Writer\PersistentBatchWriter;
use Oro\Bundle\PlatformBundle\Manager\OptionalListenerManager;
use Oro\Bundle\PricingBundle\ImportExport\Strategy\ProductPriceImportStrategy;
use Oro\Bundle\PricingBundle\Manager\PriceManager;
use Psr\Log\LoggerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class ProductPriceWriter extends PersistentBatchWriter
{
    /**
     * @var OptionalListenerManager
     */
    protected $listenerManager;

    /**
     * @var PriceManager
     */
    protected $priceManager;

    /**
     * @var array
     */
    protected $listeners = [];

    /**
     * @param RegistryInterface        $registry
     * @param EventDispatcherInterface $eventDispatcher
     * @param ContextRegistry          $contextRegistry
     * @param LoggerInterface          $logger
     * @param PriceManager             $priceManager
     */
    public function __construct(
        RegistryInterface $registry,
        EventDispatcherInterface $eventDispatcher,
        ContextRegistry $contextRegistry,
        LoggerInterface $logger,
        PriceManager $priceManager
    ) {
        $this->priceManager = $priceManager;
        parent::__construct($registry, $eventDispatcher, $contextRegistry, $logger);
    }

    /**
     * @param OptionalListenerManager $listenerManager
     */
    public function setOptionalListenerManager(OptionalListenerManager $listenerManager)
    {
        $this->listenerManager = $listenerManager;
    }

    /**
     * {@inheritdoc}
     */
    public function write(array $items)
    {
        $this->clearContext();

        parent::write($items);
    }

    /**
     * @param array         $items
     * @param EntityManager $em
     */
    protected function saveItems(array $items, EntityManager $em)
    {
        $this->listenerManager->disableListeners($this->listeners);
        foreach ($items as $item) {
            $this->priceManager->persist($item);
        }
        $this->priceManager->flush();
        $em->flush();
        $this->listenerManager->enableListeners($this->listeners);
    }

    protected function clearContext()
    {
        $this->contextRegistry
            ->getByStepExecution($this->stepExecution)
            ->setValue(ProductPriceImportStrategy::PROCESSED_ENTITIES_HASH, null);
    }

    /**
     * @param string $listener
     */
    public function disableListener($listener)
    {
        $this->listeners[] = $listener;
    }
}
