<?php

namespace Oro\Bundle\WorkflowBundle\Configuration\Handler;

use Oro\Bundle\WorkflowBundle\Configuration\WorkflowConfiguration;

class AttributeHandler extends AbstractHandler
{
    /**
     * {@inheritDoc}
     */
    public function handle(array $configuration)
    {
        $rawAttributes = array();
        if (!empty($configuration[WorkflowConfiguration::NODE_ATTRIBUTES])) {
            $rawAttributes = $configuration[WorkflowConfiguration::NODE_ATTRIBUTES];
        }

        $handledAttributes = array();
        foreach ($rawAttributes as $rawAttribute) {
            $handledAttributes[] = $this->handleAttributeConfiguration($rawAttribute);
        }

        $configuration[WorkflowConfiguration::NODE_ATTRIBUTES] = $handledAttributes;

        return $configuration;
    }

    /**
     * @param array $attribute
     * @return array
     */
    protected function handleAttributeConfiguration(array $attribute)
    {
        if (empty($attribute['name'])) {
            $attribute['name'] = uniqid('attribute_');
        }

        return $attribute;
    }
}
