<?php

namespace Oro\Bundle\SecurityBundle\Cache;

use Symfony\Component\HttpKernel\CacheClearer\CacheClearerInterface;

use Oro\Bundle\SecurityBundle\Owner\OwnerTreeProviderInterface;

class OwnerTreeCacheCleaner implements CacheClearerInterface
{
    /**
     * @var OwnerTreeProviderInterface
     */
    protected $treeProvider;

    /**
     * @param OwnerTreeProviderInterface $treeProvider
     */
    public function __construct(OwnerTreeProviderInterface $treeProvider)
    {
        $this->treeProvider = $treeProvider;
    }

    /**
     * {@inheritdoc}
     */
    public function clear($cacheDir)
    {
        $this->treeProvider->clear();
    }
}
