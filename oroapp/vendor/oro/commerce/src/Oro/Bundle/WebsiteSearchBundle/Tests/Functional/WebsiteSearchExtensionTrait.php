<?php

namespace Oro\Bundle\WebsiteSearchBundle\Tests\Functional;

use Oro\Bundle\SearchBundle\Tests\Functional\SearchExtensionTrait;
use Oro\Bundle\WebsiteSearchBundle\Event\ReindexationRequestEvent;
use Oro\Bundle\ProductBundle\Entity\Product;

/** Please use this trait if you need reindex actions in your tests */
trait WebsiteSearchExtensionTrait
{
    use SearchExtensionTrait;

    protected function reindexProductData()
    {
        $this->getContainer()->get('oro_visibility.visibility.cache.product.cache_builder')->buildCache();
        $this->getContainer()->get('event_dispatcher')->dispatch(
            ReindexationRequestEvent::EVENT_NAME,
            new ReindexationRequestEvent([Product::class], [], [], false)
        );
    }
}
