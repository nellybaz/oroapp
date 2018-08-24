<?php

namespace Oro\Bundle\ScopeBundle\EventListener;

use Doctrine\Common\Cache\CacheProvider;
use Oro\Bundle\ScopeBundle\Entity\Repository\ScopeRepository;
use Oro\Bundle\ScopeBundle\Manager\ScopeEntityStorage;

class DoctrineEventListener
{
    /**
     * @var ScopeEntityStorage
     */
    private $entityStorage;

    /**
     * @var CacheProvider
     */
    private $scopeRepositoryCache;

    /**
     * @param ScopeEntityStorage $entityStorage
     */
    public function __construct(ScopeEntityStorage $entityStorage)
    {
        $this->entityStorage = $entityStorage;
    }

    /**
     * @param CacheProvider $scopeRepositoryCache
     */
    public function setScopeRepositoryCache(CacheProvider $scopeRepositoryCache)
    {
        $this->scopeRepositoryCache = $scopeRepositoryCache;
    }

    public function preFlush()
    {
        $this->entityStorage->persistScheduledForInsert();
        $this->entityStorage->clear();
    }

    public function postFlush()
    {
        if ($this->scopeRepositoryCache) {
            $this->scopeRepositoryCache->delete(ScopeRepository::SCOPE_RESULT_CACHE_KEY_ID);
        }
    }

    public function onClear()
    {
        $this->entityStorage->clear();
    }
}
