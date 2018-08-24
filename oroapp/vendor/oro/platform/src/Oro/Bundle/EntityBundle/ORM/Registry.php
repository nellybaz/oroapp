<?php

namespace Oro\Bundle\EntityBundle\ORM;

use Doctrine\Bundle\DoctrineBundle\Registry as BaseRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;

class Registry extends BaseRegistry
{
    /** @var string[] [entity class => manager hash, ...] */
    private $managersMap = [];

    /** @var array [manager hash => manager|null, ...] */
    private $cachedManagers = [];

    /** @var array [service id => manager, ...] */
    private $cachedManagerServices = [];

    /**
     * {@inheritdoc}
     */
    protected function getService($name)
    {
        if (isset($this->cachedManagerServices[$name])) {
            return $this->cachedManagerServices[$name];
        }

        $manager = parent::getService($name);
        if ($manager instanceof OroEntityManager) {
            $manager->setDefaultQueryCacheLifetime(
                $this->container->getParameter('oro_entity.default_query_cache_lifetime')
            );
        }

        $this->cachedManagerServices[$name] = $manager;

        return $manager;
    }

    /**
     * {@inheritdoc}
     */
    protected function resetService($name)
    {
        unset($this->cachedManagerServices[$name]);
        parent::resetService($name);
    }

    /**
     * {@inheritdoc}
     */
    public function resetManager($name = null)
    {
        $this->managersMap = [];
        $this->cachedManagers = [];

        return parent::resetManager($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getManagerForClass($class)
    {
        if (array_key_exists($class, $this->managersMap)) {
            return $this->cachedManagers[$this->managersMap[$class]];
        }

        $manager = parent::getManagerForClass($class);
        $hash    = null !== $manager ? spl_object_hash($manager) : '';

        $this->managersMap[$class]   = $hash;
        $this->cachedManagers[$hash] = $manager;

        return $manager;
    }

    /**
     * {@inheritdoc}
     *
     * The default Doctrine's implementation is overridden to avoid unnecessary loading
     * of all managers if the alias belongs to the default manager.
     * @see \Doctrine\Bundle\DoctrineBundle\Registry::getAliasNamespace
     */
    public function getAliasNamespace($alias)
    {
        $names = $this->getManagerNames();
        foreach ($names as $name => $id) {
            $namespaces = $this->getNamespaces($this->getManager($name));
            if (isset($namespaces[$alias])) {
                return trim($namespaces[$alias], '\\');
            }
        }

        throw ORMException::unknownEntityNamespace($alias);
    }

    /**
     * @param object $manager
     *
     * @return string[]
     */
    private function getNamespaces($manager)
    {
        if ($manager instanceof EntityManagerInterface) {
            return $manager->getConfiguration()->getEntityNamespaces();
        }

        /**
         * Probably a handling of Doctrine ODM should be added here.
         * In this case the namespaces can be retrieved by
         * $manager->getConfiguration()->getDocumentNamespaces().
         * But this is not implemented for now because default Doctrine's implementation does not do this as well.
         * @see \Doctrine\Bundle\DoctrineBundle\Registry::getAliasNamespace
         */

        return [];
    }
}
