<?php

namespace Oro\Bundle\IntegrationBundle\Migrations\Schema\v1_0;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class OroIntegrationBundle implements Migration
{
    /**
     * @inheritdoc
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        self::createTransportTable($schema);
        self::createChannelTable($schema);
        self::createChannelStatusTable($schema);
    }

    /**
     * Creates table oro_integration_channel
     *
     * @param Schema $schema
     */
    public static function createChannelTable(Schema $schema)
    {
        /** Generate table oro_integration_channel **/
        $table = $schema->createTable('oro_integration_channel');
        $table->addColumn('id', 'smallint', ['autoincrement' => true]);
        $table->addColumn('transport_id', 'smallint', ['notnull' => false]);
        $table->addColumn('name', 'string', ['length' => 255]);
        $table->addColumn('type', 'string', ['length' => 255]);
        $table->addColumn('connectors', 'array', ['comment' => '(DC2Type:array)']);
        $table->setPrimaryKey(['id']);
        $table->addUniqueIndex(['transport_id'], 'UNIQ_55B9B9C59909C13F');
        /** End of generate table oro_integration_channel **/
        /** Generate foreign keys for table oro_integration_channel **/
        $table = $schema->getTable('oro_integration_channel');
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_integration_transport'),
            ['transport_id'],
            ['id'],
            ['onDelete' => null, 'onUpdate' => null]
        );
        /** End of generate foreign keys for table oro_integration_channel **/
    }

    /**
     * Creates table oro_integration_channel_status
     *
     * @param Schema $schema
     */
    public static function createChannelStatusTable(Schema $schema)
    {
        /** Generate table oro_integration_channel_status **/
        $table = $schema->createTable('oro_integration_channel_status');
        $table->addColumn('id', 'smallint', ['autoincrement' => true]);
        $table->addColumn('channel_id', 'smallint', []);
        $table->addColumn('code', 'string', ['length' => 255]);
        $table->addColumn('connector', 'string', ['length' => 255]);
        $table->addColumn('message', 'text', []);
        $table->addColumn('date', 'datetime', []);
        $table->setPrimaryKey(['id']);
        $table->addIndex(['channel_id'], 'IDX_C0D7E5FB72F5A1AA', []);
        /** End of generate table oro_integration_channel_status **/
        /** Generate foreign keys for table oro_integration_channel_status **/
        $table = $schema->getTable('oro_integration_channel_status');
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_integration_channel'),
            ['channel_id'],
            ['id'],
            ['onDelete' => 'CASCADE', 'onUpdate' => null]
        );
        /** End of generate foreign keys for table oro_integration_channel_status **/
    }

    /**
     * Creates table oro_integration_transport
     *
     * @param Schema $schema
     */
    public static function createTransportTable(Schema $schema)
    {
        /** Generate table oro_integration_transport **/
        $table = $schema->createTable('oro_integration_transport');
        $table->addColumn('id', 'smallint', ['autoincrement' => true]);
        $table->addColumn('type', 'string', ['length' => 30]);
        $table->setPrimaryKey(['id']);
        /** End of generate table oro_integration_transport **/
    }
}
