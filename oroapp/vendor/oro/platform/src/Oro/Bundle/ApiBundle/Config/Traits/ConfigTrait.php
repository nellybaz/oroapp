<?php

namespace Oro\Bundle\ApiBundle\Config\Traits;

/**
 * @property array $items
 */
trait ConfigTrait
{
    /**
     * Checks whether the configuration attribute exists.
     *
     * @param string $key
     *
     * @return bool
     */
    public function has($key)
    {
        return array_key_exists($key, $this->items);
    }

    /**
     * Gets the configuration value.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function get($key)
    {
        if (!array_key_exists($key, $this->items)) {
            return null;
        }

        return $this->items[$key];
    }

    /**
     * Sets the configuration value.
     *
     * @param string $key
     * @param mixed  $value
     */
    public function set($key, $value)
    {
        if (null !== $value) {
            $this->items[$key] = $value;
        } else {
            unset($this->items[$key]);
        }
    }

    /**
     * Removes the configuration value.
     *
     * @param string $key
     */
    public function remove($key)
    {
        unset($this->items[$key]);
    }

    /**
     * Gets names of all configuration attributes.
     *
     * @return string[]
     */
    public function keys()
    {
        return array_keys($this->items);
    }

    /**
     * @param array  $config
     * @param string $key
     * @param mixed  $defaultValue
     */
    protected function removeItemWithDefaultValue(array &$config, $key, $defaultValue = false)
    {
        if (isset($config[$key]) && ($defaultValue === $config[$key] || null === $defaultValue)) {
            unset($config[$key]);
        }
    }

    /**
     * Gets a native PHP array representation of the configuration options.
     *
     * @return array
     */
    protected function convertItemsToArray()
    {
        $result = $this->items;
        foreach ($this->items as $key => $value) {
            if (is_object($value) && method_exists($value, 'toArray')) {
                $result[$key] = $value->toArray();
            }
        }

        return $result;
    }
}
