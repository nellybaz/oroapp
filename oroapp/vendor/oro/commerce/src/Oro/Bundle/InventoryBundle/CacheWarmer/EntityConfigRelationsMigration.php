<?php

namespace Oro\Bundle\InventoryBundle\CacheWarmer;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\Connection;

use Psr\Log\LoggerInterface;

use Oro\Bundle\ActivityListBundle\Entity\ActivityList;
use Oro\Bundle\EntityBundle\ORM\DatabasePlatformInterface;
use Oro\Bundle\EntityConfigBundle\Migration\RemoveManyToManyRelationQuery;
use Oro\Bundle\EntityConfigBundle\Migration\RemoveManyToOneRelationQuery;
use Oro\Bundle\MigrationBundle\Migration\ParametrizedMigrationQuery;
use Oro\Bundle\NoteBundle\Entity\Note;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\OrderBundle\Entity\OrderLineItem;

class EntityConfigRelationsMigration
{
    const NOTE_WAREHOUSE_ASSOCIATION = 'warehouse_c913b87';
    const NOTE_WAREHOUSE_ASSOCIATION_BETA1 = 'warehouse_6eca7547';

    const ACTIVITY_LIST_WAREHOUSE_ASSOCIATION = 'warehouse_901db874';
    const ACTIVITY_LIST_WAREHOUSE_ASSOCIATION_BETA1 = 'warehouse_2de8bcd1';

    const ORDER_WAREHOUSE_ASSOCIATION = 'warehouse';

    /** @var ManagerRegistry */
    private $managerRegistry;

    /** @var LoggerInterface */
    private $logger;

    /** @var bool */
    private $applicationInstalled;

    /**
     * @param ManagerRegistry $managerRegistry
     * @param LoggerInterface $logger
     * @param bool $applicationInstalled
     */
    public function __construct(
        ManagerRegistry $managerRegistry,
        LoggerInterface $logger,
        $applicationInstalled
    ) {
        $this->managerRegistry = $managerRegistry;
        $this->logger = $logger;
        $this->applicationInstalled = (bool)$applicationInstalled;
    }

    public function migrate()
    {
        if (!$this->applicationInstalled) {
            return;
        }

        // if Warehouse entity exists (which means that commerce-enterprise bundle WarehouseBundle is loaded)
        // we should skip these migration fixes
        if (class_exists('Oro\Bundle\WarehouseBundle\Entity\Warehouse')) {
            return;
        }

        /** @var Connection $configConnection */
        $configConnection = $this->managerRegistry->getConnection('config');
        $tables = $configConnection->getSchemaManager()->listTableNames();
        if (!in_array('oro_entity_config', $tables, true)) {
            return;
        }

        $wasUpdated = false;
        foreach ([self::NOTE_WAREHOUSE_ASSOCIATION, self::NOTE_WAREHOUSE_ASSOCIATION_BETA1] as $association) {
            if ($this->isUpdateRequired($configConnection, Note::class, $association)) {
                continue;
            }

            $this->executeUpdateRelationsQuery(
                new RemoveManyToOneRelationQuery(Note::class, $association),
                $configConnection
            );

            $wasUpdated = true;
        }

        $associations = [
            self::ACTIVITY_LIST_WAREHOUSE_ASSOCIATION,
            self::ACTIVITY_LIST_WAREHOUSE_ASSOCIATION_BETA1,
        ];
        foreach ($associations as $association) {
            if ($this->isUpdateRequired($configConnection, ActivityList::class, $association)) {
                continue;
            }

            $this->executeUpdateRelationsQuery(
                new RemoveManyToManyRelationQuery(ActivityList::class, $association),
                $configConnection
            );

            $wasUpdated = true;
        }

        if (!$wasUpdated) {
            return;
        }

        $warehouseClass = $this->prepareFrom($configConnection, 'WarehouseBundle\\Entity\\Warehouse');
        $configConnection->executeQuery("DELETE FROM oro_entity_config WHERE class_name like '%$warehouseClass%'");

        $this->executeUpdateRelationsQuery(
            new RemoveManyToOneRelationQuery(Order::class, self::ORDER_WAREHOUSE_ASSOCIATION),
            $configConnection
        );
        $this->executeUpdateRelationsQuery(
            new RemoveManyToOneRelationQuery(OrderLineItem::class, self::ORDER_WAREHOUSE_ASSOCIATION),
            $configConnection
        );
    }

    /**
     * @param ParametrizedMigrationQuery $query
     * @param Connection $connection
     */
    protected function executeUpdateRelationsQuery(ParametrizedMigrationQuery $query, Connection $connection)
    {
        $query->setConnection($connection);
        $query->execute($this->logger);
    }

    /**
     * @param Connection $defaultConnection
     * @param string $class
     * @param string $association
     * @return bool
     */
    protected function isUpdateRequired(Connection $defaultConnection, $class, $association)
    {
        $class = $this->prepareFrom($defaultConnection, $class);

        try {
            $sql = 'SELECT field.id FROM oro_entity_config_field as field
                INNER JOIN oro_entity_config as entity ON field.entity_id = entity.id
                WHERE entity.class_name = ?
                AND field.field_name = ?
                LIMIT 1';

            $configCheck = $defaultConnection->fetchColumn($sql, [$class, $association]);
        } catch (\Exception $e) {
            return false;
        }

        return $configCheck;
    }

    /**
     * @param Connection $connection
     * @param string $from
     * @return string
     */
    protected function prepareFrom(Connection $connection, $from)
    {
        $from = str_replace('\\', '\\\\', $from);

        if ($connection->getDatabasePlatform()->getName() === DatabasePlatformInterface::DATABASE_MYSQL) {
            return str_replace('\\', '\\\\', $from);
        }

        return $from;
    }
}
