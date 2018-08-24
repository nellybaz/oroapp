<?php

namespace Oro\Bundle\ProductBundle\ComponentProcessor;

class ComponentProcessorRegistry
{
    /**
     * @var ComponentProcessorInterface[]
     */
    protected $processors = [];

    /**
     * @param ComponentProcessorInterface $processor
     */
    public function addProcessor(ComponentProcessorInterface $processor)
    {
        $this->processors[$processor->getName()] = $processor;
    }

    /**
     * @return ComponentProcessorInterface[]
     */
    public function getProcessors()
    {
        return $this->processors;
    }

    /**
     * @param string $name
     * @return null|ComponentProcessorInterface
     */
    public function getProcessorByName($name)
    {
        if ($this->hasProcessor($name)) {
            return $this->processors[$name];
        }

        return null;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasProcessor($name)
    {
        return array_key_exists($name, $this->processors);
    }

    /**
     * @return bool
     */
    public function hasAllowedProcessor()
    {
        $hasAllowed = false;
        foreach ($this->processors as $processor) {
            if ($processor->isAllowed()) {
                $hasAllowed = true;
                break;
            }
        }
        return $hasAllowed;
    }
}
