<?php

namespace Oro\Bundle\ApiBundle\Processor\Delete;

use Oro\Component\ChainProcessor\ContextInterface;
use Oro\Component\ChainProcessor\ProcessorInterface;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfigExtra;
use Oro\Bundle\ApiBundle\Config\FilterIdentifierFieldsConfigExtra;
use Oro\Bundle\ApiBundle\Processor\Context;

/**
 * Sets an initial list of requests for configuration data.
 * It is supposed that the list was initialized if
 * the EntityDefinitionConfigExtra is already exist in the Context.
 */
class InitializeConfigExtras implements ProcessorInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContextInterface $context)
    {
        /** @var Context $context */

        if ($context->hasConfigExtra(EntityDefinitionConfigExtra::NAME)) {
            // config extras are already initialized
            return;
        }

        $context->addConfigExtra(new EntityDefinitionConfigExtra($context->getAction()));
        $context->addConfigExtra(new FilterIdentifierFieldsConfigExtra());
    }
}
