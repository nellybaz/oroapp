<?php

namespace Oro\Bundle\EntityExtendBundle\EventListener;

use Oro\Bundle\EntityConfigBundle\Tools\CommandExecutor;
use Oro\Bundle\EntityExtendBundle\Migration\UpdateExtendConfigMigration;
use Oro\Bundle\MigrationBundle\Event\PostMigrationEvent;

class UpdateExtendConfigPostUpMigrationListener
{
    /** @var CommandExecutor */
    protected $commandExecutor;

    /** @var string */
    protected $configProcessorOptionsPath;

    /** @var string */
    protected $initialEntityConfigStatePath;

    /**
     * @param CommandExecutor $commandExecutor
     * @param string          $configProcessorOptionsPath
     * @param string          $initialEntityConfigStatePath
     */
    public function __construct(
        CommandExecutor $commandExecutor,
        $configProcessorOptionsPath,
        $initialEntityConfigStatePath
    ) {
        $this->commandExecutor              = $commandExecutor;
        $this->configProcessorOptionsPath   = $configProcessorOptionsPath;
        $this->initialEntityConfigStatePath = $initialEntityConfigStatePath;
    }

    /**
     * POST UP event handler
     *
     * @param PostMigrationEvent $event
     */
    public function onPostUp(PostMigrationEvent $event)
    {
        $event->addMigration(
            new UpdateExtendConfigMigration(
                $this->commandExecutor,
                $this->configProcessorOptionsPath,
                $this->initialEntityConfigStatePath
            )
        );
    }
}
