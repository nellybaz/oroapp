<?php

namespace Oro\Bundle\SecurityBundle\Metadata;

use Doctrine\Common\Cache\CacheProvider;
use Oro\Bundle\EntityBundle\ORM\EntityClassResolver;
use Oro\Bundle\SecurityBundle\Acl\Extension\EntityAclExtension;
use Oro\Bundle\SecurityBundle\Annotation\Loader\AclAnnotationLoaderInterface;
use Oro\Bundle\SecurityBundle\Annotation\Acl as AclAnnotation;

class AclAnnotationProvider
{
    const CACHE_KEY = 'data';

    /** @var AclAnnotationLoaderInterface[] */
    protected $loaders = [];

    /** @var EntityClassResolver */
    protected $entityClassResolver;

    /** @var CacheProvider|null */
    protected $cache;

    /** @var AclAnnotationStorage */
    protected $storage;

    /**
     * @param EntityClassResolver $entityClassResolver
     * @param CacheProvider|null  $cache
     */
    public function __construct(EntityClassResolver $entityClassResolver, CacheProvider $cache = null)
    {
        $this->entityClassResolver = $entityClassResolver;
        $this->cache = $cache;
    }

    /**
     * Add new loader
     *
     * @param AclAnnotationLoaderInterface $loader
     */
    public function addLoader(AclAnnotationLoaderInterface $loader)
    {
        $this->loaders[] = $loader;
    }

    /**
     * Gets an annotation by its id
     *
     * @param  string             $id
     * @return AclAnnotation|null AclAnnotation object or null if ACL annotation was not found
     */
    public function findAnnotationById($id)
    {
        $this->ensureAnnotationsLoaded();

        return $this->storage->findById($id);
    }

    /**
     * Gets ACL annotation is bound to the given class/method
     *
     * @param  string             $class
     * @param  string|null        $method
     * @return AclAnnotation|null AclAnnotation object or null if ACL annotation was not found
     */
    public function findAnnotation($class, $method = null)
    {
        $this->ensureAnnotationsLoaded();

        return $this->storage->find($class, $method);
    }

    /**
     * Determines whether the given class/method has an annotation
     *
     * @param  string      $class
     * @param  string|null $method
     * @return bool
     */
    public function hasAnnotation($class, $method = null)
    {
        $this->ensureAnnotationsLoaded();

        return $this->storage->has($class, $method);
    }

    /**
     * Gets annotations
     *
     * @param  string|null     $type The annotation type
     * @return AclAnnotation[]
     */
    public function getAnnotations($type = null)
    {
        $this->ensureAnnotationsLoaded();

        return $this->storage->getAnnotations($type);
    }

    /**
     * Checks whether the given class or at least one of its method is protected by ACL security policy
     *
     * @param  string $class
     * @return bool   true if the class is protected; otherwise, false
     */
    public function isProtectedClass($class)
    {
        $this->ensureAnnotationsLoaded();

        return $this->storage->isKnownClass($class);
    }

    /**
     * Checks whether the given method of the given class is protected by ACL security policy
     *
     * @param  string $class
     * @param  string $method
     * @return bool   true if the method is protected; otherwise, false
     */
    public function isProtectedMethod($class, $method)
    {
        $this->ensureAnnotationsLoaded();

        return $this->storage->isKnownMethod($class, $method);
    }

    /**
     * Warms up the cache
     */
    public function warmUpCache()
    {
        $this->loadAnnotations();
    }

    /**
     * Clears the cache
     */
    public function clearCache()
    {
        if ($this->cache) {
            $this->cache->delete(self::CACHE_KEY);
        }
        $this->storage = null;
    }

    /**
     * Makes sure that annotations loaded and cached
     */
    protected function ensureAnnotationsLoaded()
    {
        if ($this->storage === null) {
            $data = null;
            if ($this->cache) {
                $data = $this->cache->fetch(self::CACHE_KEY);
            }
            if ($data) {
                $this->storage = $data;
            } else {
                $this->loadAnnotations();
            }
        }
    }

    /**
     * Loads annotations and save them in cache
     */
    protected function loadAnnotations()
    {
        $data = new AclAnnotationStorage();
        foreach ($this->loaders as $loader) {
            $loader->load($data);
        }

        // this small hack increases performance of Oro\Bundle\SecurityBundle\Acl\Extension\AclExtensionSelector
        $annotations = $data->getAnnotations();
        foreach ($annotations as $annotation) {
            if (EntityAclExtension::NAME === $annotation->getType()) {
                $annotation->setClass($this->entityClassResolver->getEntityClass($annotation->getClass()));
            }
        }

        if ($this->cache) {
            $this->cache->save(self::CACHE_KEY, $data);
        }

        $this->storage = $data;
    }
}
