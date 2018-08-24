<?php

namespace Oro\Bundle\ApiBundle\Processor\Subresource;

use Oro\Bundle\ApiBundle\Processor\Subresource\GetRelationship\GetRelationshipContext;

class GetRelationshipProcessor extends SubresourceProcessor
{
    /**
     * {@inheritdoc}
     */
    protected function createContextObject()
    {
        return new GetRelationshipContext($this->configProvider, $this->metadataProvider);
    }
}
