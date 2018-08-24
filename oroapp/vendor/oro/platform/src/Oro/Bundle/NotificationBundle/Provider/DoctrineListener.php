<?php

namespace Oro\Bundle\NotificationBundle\Provider;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PostFlushEventArgs;

use Oro\Bundle\PlatformBundle\EventListener\OptionalListenerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Oro\Bundle\NotificationBundle\Doctrine\EntityPool;
use Oro\Bundle\NotificationBundle\Event\NotificationEvent;

class DoctrineListener implements OptionalListenerInterface
{
    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @var EntityPool
     */
    protected $entityPool;

    /**
     * @var bool
     */
    protected $enabled = true;

    /**
     * @param EntityPool $entityPool
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(EntityPool $entityPool, EventDispatcherInterface $eventDispatcher)
    {
        $this->entityPool = $entityPool;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnabled($enabled = true)
    {
        $this->enabled = $enabled;
    }

    /**
     * Persist and flush entities from spool: jobs and email spool items.
     *
     * @param PostFlushEventArgs $args
     * @return $this
     */
    public function postFlush(PostFlushEventArgs $args)
    {
        if (!$this->enabled) {
            return;
        }

        $this->entityPool->persistAndFlush($args->getEntityManager());

        return $this;
    }

    /**
     * Post update event process
     *
     * @param LifecycleEventArgs $args
     * @return $this
     */
    public function postUpdate(LifecycleEventArgs $args)
    {
        if (!$this->enabled) {
            return;
        }

        $this->eventDispatcher
            ->dispatch('oro.notification.event.entity_post_update', $this->getNotificationEvent($args));

        return $this;
    }

    /**
     * Post persist event process
     *
     * @param LifecycleEventArgs $args
     * @return $this
     */
    public function postPersist(LifecycleEventArgs $args)
    {
        if (!$this->enabled) {
            return;
        }

        $this->eventDispatcher
            ->dispatch('oro.notification.event.entity_post_persist', $this->getNotificationEvent($args));

        return $this;
    }

    /**
     * Post remove event process
     *
     * @param LifecycleEventArgs $args
     * @return $this
     */
    public function postRemove(LifecycleEventArgs $args)
    {
        if (!$this->enabled) {
            return;
        }

        $this->eventDispatcher
            ->dispatch('oro.notification.event.entity_post_remove', $this->getNotificationEvent($args));

        return $this;
    }

    /**
     * Create new event instance
     *
     * @param LifecycleEventArgs $args
     * @return NotificationEvent
     */
    public function getNotificationEvent(LifecycleEventArgs $args)
    {
        $event = new NotificationEvent($args->getEntity());

        return $event;
    }
}
