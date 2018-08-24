# OroCacheBundle

*Note:* This article is published in the Oro documentation library.

OroCacheBundle introduces the configuration of the application data cache storage used by application bundles for different cache types.

## Table of Contents

 - [Abstract cache services](#abstract-cache-services)
 - [APC cache](#apc-cache)
 - [Warm up config cache](#warm-up-config-cache)
 - [Caching of Symfony Validation rules](#caching-of-symfony-validation-rules)

## Abstract cache services

There are two abstract services you can use as a parent for your cache services:

 - `oro.file_cache.abstract` - this cache should be used for caching data private for each node in a web farm
 - `oro.cache.abstract` - this cache should be used for caching data that need to be shared between nodes in a web farm

The following example shows how this services can be used:
``` yaml
services:
    acme.test.cache:
        public: false
        parent: oro.cache.abstract
        calls:
            - [ setNamespace, [ 'acme_test' ] ]
```

Also each of these abstract services can be re-declared in the application configuration file, for example:
``` yaml
services:
    oro.cache.abstract:
        abstract: true
        class:                Oro\Bundle\CacheBundle\Provider\PhpFileCache
        arguments:            [%kernel.cache_dir%/oro_data]
```

Read more about the [caching policy and default implementation](Resources/doc/caching_policy.md).

## APC cache

There is a possibility to use APC cache and few steps should be completed for this.

First of all, APC should be installed and enabled in the system. After this, the production configuration file (`config_prod.yml`) should be updated with the following parameters:


``` yaml
doctrine:
    orm:
        auto_mapping: true
        query_cache_driver:    apc
        metadata_cache_driver: apc
        result_cache_driver: apc

services:
    oro.cache.abstract:
        abstract:             true
        class:                Doctrine\Common\Cache\ApcCache
```

On the last step of the configuration, production cache should be cleared.

## Warm up config cache

The purpose is to update only cache that will be needed by the application without updating the cache of those resources,
that have not been changed. This gives a big performance over the approach when the all cache is updated. Cache warming 
occurs in debug mode whenever you updated the resource files. 

The following example shows how this services can be used:

```yaml
# To register your config dumper:
oro.config.dumper:
    class: 'Oro\Example\Dumper\CumulativeConfigMetadataDumper'
    public: false

# To register your config warmer with oro.config_cache_warmer.provider tag:
oro.configuration.provider.test:
    class: 'Oro\Example\Dumper\ConfigurationProvider'
    tags:
        - { name: oro.config_cache_warmer.provider, dumper: 'oro.config.dumper' }

```

```php
<?php

namespace Oro\Example\Dumper;

use Symfony\Component\DependencyInjection\ContainerBuilder;

use Oro\Component\Config\Dumper\ConfigMetadataDumperInterface;
use Oro\Bundle\CacheBundle\Provider\ConfigCacheWarmerInterface;

class CumulativeConfigMetadataDumper implements ConfigMetadataDumperInterface
{
    
    /**
     * Write meta file with resources related to specific config type
     *
     * @param ContainerBuilder $container container with resources to dump
     */
    public function dump(ContainerBuilder $container)
    {
    }
    
    /**
     * Check are config resources fresh?
     *
     * @return bool true if data in cache is present and up to date, false otherwise
     */
    public function isFresh()
    {
        return true;
    }
}

class ConfigurationProvider implements ConfigCacheWarmerInterface
{
    /**
    * @param ContainerBuilder $containerBuilder
    */
    public function warmUpResourceCache(ContainerBuilder $containerBuilder)
    {
        // some logic
        $resource = new CumulativeResource();
        $containerBuilder->addResource($resource);
    }
}
```

## Caching of Symfony Validation rules

By default, rules for [Symfony Validation Component](http://symfony.com/doc/current/book/validation.html) are cached using `oro.cache.abstract` service, but you can change this to make validation caching suit some custom requirements. To do this, you need to redefine `oro_cache.provider.validation` service.
