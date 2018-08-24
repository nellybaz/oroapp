<?php

namespace Oro\Bundle\ApiBundle\Provider;

use Doctrine\Common\Cache\CacheProvider;

use Oro\Bundle\ApiBundle\Request\ApiResource;
use Oro\Bundle\ApiBundle\Request\ApiResourceSubresources;
use Oro\Bundle\ApiBundle\Request\RequestType;

/**
 * Provides access to API resourses and sub-resources related cache.
 */
class ResourcesCache
{
    const RESOURCES_KEY_PREFIX            = 'resources_';
    const SUBRESOURCE_KEY_PREFIX          = 'subresource_';
    const ACCESSIBLE_RESOURCES_KEY_PREFIX = 'accessible_';
    const EXCLUDED_ACTIONS_KEY_PREFIX     = 'excluded_actions_';

    /** @var CacheProvider */
    protected $cache;

    /**
     * @param CacheProvider $cache
     */
    public function __construct(CacheProvider $cache)
    {
        $this->cache = $cache;
    }

    /**
     * Fetches a list of entity classes accessible through Data API from the cache.
     *
     * @param string      $version     The Data API version
     * @param RequestType $requestType The request type, for example "rest", "soap", etc.
     *
     * @return array|null [entity class => accessible flag] or NULL if the list is not cached yet
     */
    public function getAccessibleResources($version, RequestType $requestType)
    {
        $resources = $this->cache->fetch(
            self::ACCESSIBLE_RESOURCES_KEY_PREFIX . $this->getCacheKeyIndex($version, $requestType)
        );

        if (false === $resources) {
            return null;
        }

        return $resources;
    }

    /**
     * Fetches an information about excluded actions from the cache.
     *
     * @param string      $version     The Data API version
     * @param RequestType $requestType The request type, for example "rest", "soap", etc.
     *
     * @return array|null [entity class => [action, ...]] or NULL if the list is not cached yet
     */
    public function getExcludedActions($version, RequestType $requestType)
    {
        $excludedActions = $this->cache->fetch(
            self::EXCLUDED_ACTIONS_KEY_PREFIX . $this->getCacheKeyIndex($version, $requestType)
        );

        if (false === $excludedActions) {
            return null;
        }

        return $excludedActions;
    }

    /**
     * Fetches all Data API resources from the cache.
     *
     * @param string      $version     The Data API version
     * @param RequestType $requestType The request type, for example "rest", "soap", etc.
     *
     * @return ApiResource[]|null The list of Data API resources or NULL if it is not cached yet
     */
    public function getResources($version, RequestType $requestType)
    {
        $resources = $this->cache->fetch(
            self::RESOURCES_KEY_PREFIX . $this->getCacheKeyIndex($version, $requestType)
        );

        if (false === $resources) {
            return null;
        }

        $result = [];
        foreach ($resources as $entityClass => $cachedData) {
            $result[] = $this->unserializeApiResource($entityClass, $cachedData);
        }

        return $result;
    }

    /**
     * Fetches an entity sub-resources from the cache.
     *
     * @param string      $entityClass The FQCN of an entity
     * @param string      $version     The Data API version
     * @param RequestType $requestType The request type, for example "rest", "soap", etc.
     *
     * @return ApiResourceSubresources|null The list of sub-resources or NULL if it is not cached yet
     */
    public function getSubresources($entityClass, $version, RequestType $requestType)
    {
        $cachedData = $this->cache->fetch(
            self::SUBRESOURCE_KEY_PREFIX . $this->getCacheKeyIndex($version, $requestType) . $entityClass
        );

        if (false === $cachedData) {
            return null;
        }

        return $this->unserializeApiResourceSubresources($entityClass, $cachedData);
    }

    /**
     * Puts Data API resources into the cache.
     *
     * @param string        $version             The Data API version
     * @param RequestType   $requestType         The request type, for example "rest", "soap", etc.
     * @param ApiResource[] $resources           The list of Data API resources
     * @param string[]      $accessibleResources The list of resources accessible through Data API
     */
    public function saveResources($version, RequestType $requestType, array $resources, array $accessibleResources)
    {
        $allResources = [];
        $excludedActionsData = [];
        $accessibleResourcesData = array_fill_keys($accessibleResources, true);
        foreach ($resources as $resource) {
            $entityClass = $resource->getEntityClass();
            $allResources[$entityClass] = $this->serializeApiResource($resource);
            if (!isset($accessibleResourcesData[$entityClass])) {
                $accessibleResourcesData[$entityClass] = false;
            }
            $excludedActions = $resource->getExcludedActions();
            if (!empty($excludedActions)) {
                $excludedActionsData[$entityClass] = $excludedActions;
            }
        }

        $keyIndex = $this->getCacheKeyIndex($version, $requestType);
        $this->cache->save(self::RESOURCES_KEY_PREFIX . $keyIndex, $allResources);
        $this->cache->save(self::ACCESSIBLE_RESOURCES_KEY_PREFIX . $keyIndex, $accessibleResourcesData);
        $this->cache->save(self::EXCLUDED_ACTIONS_KEY_PREFIX . $keyIndex, $excludedActionsData);
    }

    /**
     * Puts sub-resources for all entities into the cache.
     *
     * @param string                    $version      The Data API version
     * @param RequestType               $requestType  The request type, for example "rest", "soap", etc.
     * @param ApiResourceSubresources[] $subresources The list of sub-resources
     */
    public function saveSubresources($version, RequestType $requestType, array $subresources)
    {
        $keyIndex = self::SUBRESOURCE_KEY_PREFIX . $this->getCacheKeyIndex($version, $requestType);
        foreach ($subresources as $entitySubresources) {
            $this->cache->save(
                $keyIndex . $entitySubresources->getEntityClass(),
                $this->serializeApiResourceSubresources($entitySubresources)
            );
        }
    }

    /**
     * Deletes all Data API resources from the cache.
     */
    public function clear()
    {
        $this->cache->deleteAll();
    }

    /**
     * @param string      $version
     * @param RequestType $requestType
     *
     * @return string
     */
    protected function getCacheKeyIndex($version, RequestType $requestType)
    {
        return $version . (string)$requestType;
    }

    /**
     * @param string $entityClass
     * @param array  $cachedData
     *
     * @return ApiResource
     */
    protected function unserializeApiResource($entityClass, array $cachedData)
    {
        $resource = new ApiResource($entityClass);
        $resource->setExcludedActions($cachedData[0]);

        return $resource;
    }

    /**
     * @param ApiResource $resource
     *
     * @return array
     */
    protected function serializeApiResource(ApiResource $resource)
    {
        return [
            $resource->getExcludedActions()
        ];
    }

    /**
     * @param string $entityClass
     * @param array  $cachedData
     *
     * @return ApiResourceSubresources
     */
    protected function unserializeApiResourceSubresources($entityClass, array $cachedData)
    {
        $resource = new ApiResourceSubresources($entityClass);
        foreach ($cachedData[0] as $associationName => $serializedSubresource) {
            $subresource = $resource->addSubresource($associationName);
            $subresource->setTargetClassName($serializedSubresource[0]);
            $subresource->setAcceptableTargetClassNames($serializedSubresource[1]);
            $subresource->setIsCollection($serializedSubresource[2]);
            $subresource->setExcludedActions($serializedSubresource[3]);
        }

        return $resource;
    }

    /**
     * @param ApiResourceSubresources $entitySubresources
     *
     * @return array
     */
    protected function serializeApiResourceSubresources(ApiResourceSubresources $entitySubresources)
    {
        $serializedSubresources = [];
        $subresources = $entitySubresources->getSubresources();
        foreach ($subresources as $associationName => $subresource) {
            $serializedSubresources[$associationName] = [
                $subresource->getTargetClassName(),
                $subresource->getAcceptableTargetClassNames(),
                $subresource->isCollection(),
                $subresource->getExcludedActions()
            ];
        }

        return [
            $serializedSubresources
        ];
    }
}
