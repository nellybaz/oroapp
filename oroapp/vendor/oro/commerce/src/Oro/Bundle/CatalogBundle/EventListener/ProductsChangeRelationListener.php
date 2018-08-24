<?php

namespace Oro\Bundle\CatalogBundle\EventListener;

use Doctrine\ORM\Event\OnFlushEventArgs;
use Doctrine\ORM\UnitOfWork;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Oro\Bundle\CatalogBundle\Event\ProductsChangeRelationEvent;
use Oro\Bundle\ProductBundle\Entity\Product;

class ProductsChangeRelationListener
{
    /** @var EventDispatcherInterface */
    private $eventDispatcher;

    /**
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param OnFlushEventArgs $event
     */
    public function onFlush(OnFlushEventArgs $event)
    {
        $unitOfWork = $event->getEntityManager()->getUnitOfWork();
        $productsChangedRelation = [];

        /** @var Product $entity */
        foreach ((array) $unitOfWork->getScheduledEntityUpdates() as $entity) {
            if ($entity instanceof Product && $this->isCategoryChanged($unitOfWork, $entity)) {
                $productsChangedRelation[] = $entity;
            }
        }

        if ($productsChangedRelation) {
            $event = new ProductsChangeRelationEvent($productsChangedRelation);
            $this->eventDispatcher->dispatch(ProductsChangeRelationEvent::NAME, $event);
        }
    }

    /**
     * @param UnitOfWork $unitOfWork
     * @param Product $entity
     *
     * @return bool
     */
    private function isCategoryChanged(UnitOfWork $unitOfWork, Product $entity)
    {
        $changeSet = $unitOfWork->getEntityChangeSet($entity);

        return isset($changeSet['category']) ? true : false;
    }
}
