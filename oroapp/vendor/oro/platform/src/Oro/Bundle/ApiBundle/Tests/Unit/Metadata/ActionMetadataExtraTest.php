<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Metadata;

use Oro\Bundle\ApiBundle\Metadata\ActionMetadataExtra;
use Oro\Bundle\ApiBundle\Processor\GetMetadata\MetadataContext;

class ActionMetadataExtraTest extends \PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $extra = new ActionMetadataExtra('test_action');
        $this->assertEquals(ActionMetadataExtra::NAME, $extra->getName());
    }

    public function testCacheKeyPart()
    {
        $extra = new ActionMetadataExtra('test_action');
        $this->assertEquals(
            'action:test_action',
            $extra->getCacheKeyPart()
        );
    }

    public function testConfigureContext()
    {
        $extra = new ActionMetadataExtra('test_action');
        $context = new MetadataContext();
        $extra->configureContext($context);
        $this->assertEquals('test_action', $context->getTargetAction());
    }
}
