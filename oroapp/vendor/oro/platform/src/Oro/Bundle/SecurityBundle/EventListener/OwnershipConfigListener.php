<?php

namespace Oro\Bundle\SecurityBundle\EventListener;

use Oro\Bundle\EntityConfigBundle\Event\PreFlushConfigEvent;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\SecurityBundle\Owner\Metadata\OwnershipMetadataProviderInterface;

class OwnershipConfigListener
{
    /** @var OwnershipMetadataProviderInterface */
    protected $provider;

    /**
     * @param OwnershipMetadataProviderInterface $provider
     */
    public function __construct(OwnershipMetadataProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    /**
     * @param PreFlushConfigEvent $event
     */
    public function preFlush(PreFlushConfigEvent $event)
    {
        $config = $event->getConfig('extend');
        if (null === $config || $event->isFieldConfig()) {
            return;
        }

        $className = $config->getId()->getClassName();
        $this->provider->clearCache($className);

        $changeSet = $event->getConfigManager()->getConfigChangeSet($config);
        $isDeleted = isset($changeSet['state']) && $changeSet['state'][1] === ExtendScope::STATE_DELETE;
        if (!$isDeleted) {
            $this->provider->warmUpCache($className);
        }
    }
}
