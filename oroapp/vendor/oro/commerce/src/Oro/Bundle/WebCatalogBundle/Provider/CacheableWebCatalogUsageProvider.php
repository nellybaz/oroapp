<?php

namespace Oro\Bundle\WebCatalogBundle\Provider;

use Oro\Component\WebCatalog\Entity\WebCatalogInterface;
use Oro\Component\WebCatalog\Provider\WebCatalogUsageProviderInterface;

class CacheableWebCatalogUsageProvider implements WebCatalogUsageProviderInterface
{
    /** @var WebCatalogUsageProviderInterface */
    private $webCatalogUsageProvider;

    /** @var array|null */
    private $assignedWebCatalogs;

    /** @var array [web catalog id => in use flag, ...] */
    private $inUseWebCatalogs = [];

    /**
     * @param WebCatalogUsageProviderInterface $webCatalogUsageProvider
     */
    public function __construct(WebCatalogUsageProviderInterface $webCatalogUsageProvider)
    {
        $this->webCatalogUsageProvider = $webCatalogUsageProvider;
    }

    /**
     * {@inheritdoc}
     */
    public function isInUse(WebCatalogInterface $webCatalog)
    {
        $webCatalogId = $webCatalog->getId();
        if (!isset($this->inUseWebCatalogs[$webCatalogId])) {
            $this->inUseWebCatalogs[$webCatalogId] = $this->webCatalogUsageProvider->isInUse($webCatalog);
        }

        return $this->inUseWebCatalogs[$webCatalogId];
    }

    /**
     * {@inheritdoc}
     */
    public function getAssignedWebCatalogs()
    {
        if (null === $this->assignedWebCatalogs) {
            $this->assignedWebCatalogs = $this->webCatalogUsageProvider->getAssignedWebCatalogs();
        }

        return $this->assignedWebCatalogs;
    }

    /**
     * Checks if this provider has data in the internal cache.
     *
     * @return bool
     */
    public function hasCache()
    {
        return null !== $this->assignedWebCatalogs || !empty($this->inUseWebCatalogs);
    }

    /**
     * Removes all data from the internal cache.
     */
    public function clearCache()
    {
        $this->assignedWebCatalogs = null;
        $this->inUseWebCatalogs = [];
    }
}
