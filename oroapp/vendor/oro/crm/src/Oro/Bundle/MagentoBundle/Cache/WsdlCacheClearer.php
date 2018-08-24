<?php

namespace Oro\Bundle\MagentoBundle\Cache;

use Symfony\Component\HttpKernel\CacheClearer\CacheClearerInterface;

use Oro\Bundle\MagentoBundle\Service\WsdlManager;

class WsdlCacheClearer implements CacheClearerInterface
{
    /**
     * @var WsdlManager
     */
    protected $wsdlManager;

    /**
     * @param WsdlManager $wsdlManager
     */
    public function __construct(WsdlManager $wsdlManager)
    {
        $this->wsdlManager = $wsdlManager;
    }

    /**
     * {@inheritdoc}
     */
    public function clear($cacheDir)
    {
        $this->wsdlManager->clearAllWsdlCaches();
    }
}
