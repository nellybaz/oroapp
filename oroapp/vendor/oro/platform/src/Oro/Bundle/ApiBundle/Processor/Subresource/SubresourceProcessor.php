<?php

namespace Oro\Bundle\ApiBundle\Processor\Subresource;

use Oro\Component\ChainProcessor\ContextInterface as ComponentContextInterface;
use Oro\Bundle\ApiBundle\Processor\RequestActionProcessor;

class SubresourceProcessor extends RequestActionProcessor
{
    /**
     * {@inheritdoc}
     */
    protected function getLogContext(ComponentContextInterface $context)
    {
        /** @var SubresourceContext $context */

        $result = parent::getLogContext($context);
        $associationClass = $result['class'];
        unset($result['class']);
        $result['parentClass'] = $context->getParentClassName();
        $result['parentId'] = $context->getParentId();
        $result['association'] = $context->getAssociationName();
        $result['associationClass'] = $associationClass;

        return $result;
    }
}
