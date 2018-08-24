<?php

namespace Oro\Component\EntitySerializer;

/**
 * This class is used by EntitySerializer instead of EntityConfig
 * and allows caching intermediate data related to an entity.
 */
class InternalEntityConfig extends EntityConfig
{
    /** @var array */
    protected $cache = [];

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return array_merge(parent::toArray(), $this->cache);
    }

    /**
     * {@inheritdoc}
     */
    public function has($key)
    {
        return array_key_exists($key, $this->cache) || parent::has($key);
    }

    /**
     * {@inheritdoc}
     */
    public function get($key)
    {
        if (array_key_exists($key, $this->cache)) {
            return $this->cache[$key];
        }

        return parent::get($key);
    }

    /**
     * {@inheritdoc}
     */
    public function set($key, $value)
    {
        $this->cache[$key] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function remove($key)
    {
        unset($this->cache[$key]);
        parent::remove($key);
    }
}
