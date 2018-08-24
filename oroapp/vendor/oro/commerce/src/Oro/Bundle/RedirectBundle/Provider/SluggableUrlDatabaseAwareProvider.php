<?php

namespace Oro\Bundle\RedirectBundle\Provider;

use Doctrine\Common\Cache\FlushableCache;
use Oro\Bundle\RedirectBundle\Cache\UrlCacheInterface;
use Oro\Bundle\RedirectBundle\Entity\Repository\SlugRepository;
use Oro\Bundle\RedirectBundle\Entity\Slug;
use Symfony\Bridge\Doctrine\ManagerRegistry;

/**
 * If human readable URL is not present in cache, read it from DB and save in cache
 */
class SluggableUrlDatabaseAwareProvider implements SluggableUrlProviderInterface
{
    const URL_KEY = 'url';
    const SLUG_PROTOTYPE_KEY = 'slug_prototype';
    const SLUG_ROUTES_KEY = '__slug_routes__';

    /**
     * @var ManagerRegistry
     */
    protected $registry;

    /**
     * @var SluggableUrlCacheAwareProvider
     */
    protected $urlCacheProvider;

    /**
     * @var UrlCacheInterface
     */
    protected $cache;

    /**
     * @var SlugRepository
     */
    protected $slugRepository;

    /**
     * @param SluggableUrlCacheAwareProvider $urlCacheAwareProvider
     * @param UrlCacheInterface $cache
     * @param ManagerRegistry $registry
     */
    public function __construct(
        SluggableUrlCacheAwareProvider $urlCacheAwareProvider,
        UrlCacheInterface $cache,
        ManagerRegistry $registry
    ) {
        $this->urlCacheProvider = $urlCacheAwareProvider;
        $this->cache = $cache;
        $this->registry = $registry;
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($routeName, $routeParameters, $localizationId)
    {
        // Skip routes that does not have slugs
        $sluggableRoutes = $this->getSluggableRoutes();
        if (empty($sluggableRoutes[$routeName])) {
            return null;
        }

        // Read URL from cache and return it if exists
        $url = $this->urlCacheProvider->getUrl($routeName, $routeParameters, $localizationId);

        if ($url) {
            return $url;
        }

        $this->fillCacheByDatabase($routeName, $routeParameters, $localizationId);

        return $this->urlCacheProvider->getUrl($routeName, $routeParameters, $localizationId);
    }

    /**
     * {@inheritdoc}
     */
    public function setContextUrl($contextUrl)
    {
        $this->urlCacheProvider->setContextUrl($contextUrl);
    }

    /**
     * @param string $routeName
     * @param array $routeParameters
     * @param int|null $localizationId
     */
    protected function fillCacheByDatabase($routeName, $routeParameters, $localizationId)
    {
        $slugData = $this->getSlugData($routeName, $routeParameters, $localizationId);

        // Store in the persistent cache to bypass database read in future
        // Store URL for requested localizationId even for cases where repository returns URL for default localization
        // to increase cache hits.
        // On slug changes caches should be refreshed during new Slug entities actualization
        // by queue processor DirectUrlProcessor
        $this->cache->setUrl(
            $routeName,
            $routeParameters,
            $slugData[self::URL_KEY],
            $slugData[self::SLUG_PROTOTYPE_KEY],
            $localizationId
        );

        if ($this->cache instanceof FlushableCache) {
            $this->cache->flushAll();
        }
    }

    /**
     * @param string $routeName
     * @param array $routeParameters
     * @param int|null $localizationId
     * @return array|null
     */
    protected function getSlugData($routeName, $routeParameters, $localizationId)
    {
        $slugData = $this->getSlugRepository()->getRawSlug(
            $routeName,
            $routeParameters,
            $localizationId
        );

        if (!$slugData) {
            $slugData = [
                self::URL_KEY => null,
                self::SLUG_PROTOTYPE_KEY => null
            ];
        }

        return $slugData;
    }

    /**
     * @return array
     */
    protected function getSluggableRoutes()
    {
        if (!$this->cache->has(self::SLUG_ROUTES_KEY, [])) {
            $sluggableRoutes = [];
            foreach ($this->getSlugRepository()->getUsedRoutes() as $usedRoute) {
                $sluggableRoutes[$usedRoute] = true;
            }

            $this->cache->setUrl(self::SLUG_ROUTES_KEY, [], json_encode($sluggableRoutes));
        }

        return json_decode($this->cache->getUrl(self::SLUG_ROUTES_KEY, []), true);
    }

    /**
     * @return SlugRepository
     */
    protected function getSlugRepository()
    {
        if (!$this->slugRepository) {
            $this->slugRepository = $this->registry
                ->getManagerForClass(Slug::class)
                ->getRepository(Slug::class);
        }

        return $this->slugRepository;
    }
}
