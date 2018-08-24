<?php

namespace Oro\Bundle\CatalogBundle\Datagrid\Cache;

use Doctrine\Common\Cache\CacheProvider;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessor;

class CategoryCountsCache
{
    /** @var CacheProvider */
    protected $cacheProvider;

    /** @var TokenAccessor */
    protected $tokenAccessor;

    /**
     * @param CacheProvider $cacheProvider
     * @param TokenAccessor $tokenAccessor
     */
    public function __construct(CacheProvider $cacheProvider, TokenAccessor $tokenAccessor)
    {
        $this->cacheProvider = $cacheProvider;
        $this->tokenAccessor = $tokenAccessor;
    }

    /**
     * @param string $key
     * @return array|null
     */
    public function getCounts($key)
    {
        $key = $this->getDataKey($key);

        return $this->cacheProvider->contains($key) ? $this->cacheProvider->fetch($key) : null;
    }

    /**
     * @param string $key
     * @param array $counts
     * @param int $lifeTime
     */
    public function setCounts($key, array $counts, $lifeTime = 0)
    {
        $key = $this->getDataKey($key);

        $this->cacheProvider->save($key, $counts, $lifeTime);
    }

    /**
     * @param string $key
     * @return string
     */
    protected function getDataKey($key)
    {
        return sprintf('%s|%d', $key, $this->tokenAccessor->getUserId());
    }
}
