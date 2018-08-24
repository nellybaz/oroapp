<?php

namespace Oro\Bundle\ApiBundle\Processor\CollectSubresources;

use Oro\Bundle\ApiBundle\Processor\ApiContext;
use Oro\Bundle\ApiBundle\Request\ApiResource;
use Oro\Bundle\ApiBundle\Request\ApiResourceSubresources;
use Oro\Bundle\ApiBundle\Request\ApiResourceSubresourcesCollection;

/**
 * @method ApiResourceSubresourcesCollection|ApiResourceSubresources[] getResult()
 */
class CollectSubresourcesContext extends ApiContext
{
    /** @var ApiResource[] [entity class => ApiResource, ... ] */
    protected $resources = [];

    /** @var string[] */
    protected $accessibleResources = [];

    /**
     * {@inheritdoc}
     */
    protected function initialize()
    {
        parent::initialize();
        $this->setResult(new ApiResourceSubresourcesCollection());
    }

    /**
     * Indicates whether API resource for a given entity class is available through Data API.
     *
     * @param string $entityClass
     *
     * @return bool
     */
    public function hasResource($entityClass)
    {
        return isset($this->resources[$entityClass]);
    }

    /**
     * Gets API resources for a given entity class.
     *
     * @param string $entityClass
     *
     * @return ApiResource|null
     */
    public function getResource($entityClass)
    {
        return isset($this->resources[$entityClass])
            ? $this->resources[$entityClass]
            : null;
    }

    /**
     * Gets a list of resources available through Data API.
     *
     * @return ApiResource[] [entity class => ApiResource, ... ]
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Sets a list of resources available through Data API.
     *
     * @param ApiResource[] $resources
     */
    public function setResources(array $resources)
    {
        $this->resources = [];
        foreach ($resources as $resource) {
            $this->resources[$resource->getEntityClass()] = $resource;
        }
    }

    /**
     * Gets a list of resources accessible through Data API.
     *
     * @return string[] The list of class names
     */
    public function getAccessibleResources()
    {
        return $this->accessibleResources;
    }

    /**
     * Sets a list of resources accessible through Data API.
     *
     * @param string[] $classNames
     */
    public function setAccessibleResources(array $classNames)
    {
        $this->accessibleResources = $classNames;
    }
}
