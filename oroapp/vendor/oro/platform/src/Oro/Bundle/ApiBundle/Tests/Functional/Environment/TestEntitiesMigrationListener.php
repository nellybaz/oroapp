<?php

namespace Oro\Bundle\ApiBundle\Tests\Functional\Environment;

use Oro\Bundle\MigrationBundle\Event\PostMigrationEvent;

class TestEntitiesMigrationListener
{
    /**
     * @param PostMigrationEvent $event
     */
    public function onPostUp(PostMigrationEvent $event)
    {
        $event->addMigration(new TestEntitiesMigration());
    }
}
