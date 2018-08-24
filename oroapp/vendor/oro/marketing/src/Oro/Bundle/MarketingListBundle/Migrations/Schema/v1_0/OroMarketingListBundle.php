<?php

namespace Oro\Bundle\MarketingListBundle\Migrations\Schema\v1_0;

use Doctrine\DBAL\Schema\Schema;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class OroMarketingListBundle implements Migration
{
    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        /** Tables generation **/
        $this->createOrocrmMarketingListTypeTable($schema);
        $this->createOrocrmMarketingListItemTable($schema);
        $this->createOrocrmMlItemUnsTable($schema);
        $this->createOrocrmMarketingListTable($schema);
        $this->createOrocrmMlItemRmTable($schema);

        /** Foreign keys generation **/
        $this->addOrocrmMarketingListItemForeignKeys($schema);
        $this->addOrocrmMlItemUnsForeignKeys($schema);
        $this->addOrocrmMarketingListForeignKeys($schema);
        $this->addOrocrmMlItemRmForeignKeys($schema);
    }

    /**
     * Create oro_marketing_list_type table
     *
     * @param Schema $schema
     */
    protected function createOrocrmMarketingListTypeTable(Schema $schema)
    {
        $table = $schema->createTable('orocrm_marketing_list_type');
        $table->addColumn('name', 'string', ['length' => 32]);
        $table->addColumn('label', 'string', ['length' => 255]);
        $table->addUniqueIndex(['label'], 'uniq_143b81a8ea750e8');
        $table->setPrimaryKey(['name']);
    }

    /**
     * Create oro_marketing_list_item table
     *
     * @param Schema $schema
     */
    protected function createOrocrmMarketingListItemTable(Schema $schema)
    {
        $table = $schema->createTable('orocrm_marketing_list_item');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('marketing_list_id', 'integer', []);
        $table->addColumn('entity_id', 'integer', []);
        $table->addColumn('contacted_times', 'integer', []);
        $table->addColumn('last_contacted_at', 'datetime', []);
        $table->addColumn('created_at', 'datetime', []);
        $table->addUniqueIndex(['entity_id', 'marketing_list_id'], 'orocrm_ml_list_ent_unq');
        $table->addIndex(['marketing_list_id'], 'idx_87fef39f96434d04', []);
        $table->setPrimaryKey(['id']);
    }

    /**
     * Create oro_ml_item_uns table
     *
     * @param Schema $schema
     */
    protected function createOrocrmMlItemUnsTable(Schema $schema)
    {
        $table = $schema->createTable('orocrm_ml_item_uns');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('marketing_list_id', 'integer', []);
        $table->addColumn('entity_id', 'integer', []);
        $table->addColumn('created_at', 'datetime', []);
        $table->addIndex(['marketing_list_id'], 'idx_ceb0306896434d04', []);
        $table->setPrimaryKey(['id']);
        $table->addUniqueIndex(['entity_id', 'marketing_list_id'], 'orocrm_ml_list_ent_uns_unq');
    }

    /**
     * Create oro_marketing_list table
     *
     * @param Schema $schema
     */
    protected function createOrocrmMarketingListTable(Schema $schema)
    {
        $table = $schema->createTable('orocrm_marketing_list');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('owner_id', 'integer', ['notnull' => false]);
        $table->addColumn('segment_id', 'integer', ['notnull' => false]);
        $table->addColumn('type', 'string', ['length' => 32]);
        $table->addColumn('name', 'string', ['length' => 255]);
        $table->addColumn('description', 'text', ['notnull' => false]);
        $table->addColumn('entity', 'string', ['length' => 255]);
        $table->addColumn('last_run', 'datetime', ['notnull' => false]);
        $table->addColumn('created_at', 'datetime', []);
        $table->addColumn('updated_at', 'datetime', []);
        $table->addIndex(['type'], 'idx_3acc3ba8cde5729', []);
        $table->addIndex(['segment_id'], 'idx_3acc3badb296aad', []);
        $table->addUniqueIndex(['name'], 'uniq_3acc3ba5e237e06');
        $table->setPrimaryKey(['id']);
        $table->addIndex(['owner_id'], 'idx_3acc3ba7e3c61f9', []);
    }

    /**
     * Create oro_ml_item_rm table
     *
     * @param Schema $schema
     */
    protected function createOrocrmMlItemRmTable(Schema $schema)
    {
        $table = $schema->createTable('orocrm_ml_item_rm');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('marketing_list_id', 'integer', []);
        $table->addColumn('entity_id', 'integer', []);
        $table->addColumn('created_at', 'datetime', []);
        $table->addUniqueIndex(['entity_id', 'marketing_list_id'], 'orocrm_ml_list_ent_rm_unq');
        $table->addIndex(['marketing_list_id'], 'idx_8f6405f96434d04', []);
        $table->setPrimaryKey(['id']);
    }

    /**
     * Add oro_marketing_list_item foreign keys.
     *
     * @param Schema $schema
     */
    protected function addOrocrmMarketingListItemForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('orocrm_marketing_list_item');
        $table->addForeignKeyConstraint(
            $schema->getTable('orocrm_marketing_list'),
            ['marketing_list_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'CASCADE']
        );
    }

    /**
     * Add oro_ml_item_uns foreign keys.
     *
     * @param Schema $schema
     */
    protected function addOrocrmMlItemUnsForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('orocrm_ml_item_uns');
        $table->addForeignKeyConstraint(
            $schema->getTable('orocrm_marketing_list'),
            ['marketing_list_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'CASCADE']
        );
    }

    /**
     * Add oro_marketing_list foreign keys.
     *
     * @param Schema $schema
     */
    protected function addOrocrmMarketingListForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('orocrm_marketing_list');
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_user'),
            ['owner_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'SET NULL']
        );
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_segment'),
            ['segment_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'SET NULL']
        );
        $table->addForeignKeyConstraint(
            $schema->getTable('orocrm_marketing_list_type'),
            ['type'],
            ['name'],
            ['onUpdate' => null, 'onDelete' => null]
        );
    }

    /**
     * Add oro_ml_item_rm foreign keys.
     *
     * @param Schema $schema
     */
    protected function addOrocrmMlItemRmForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('orocrm_ml_item_rm');
        $table->addForeignKeyConstraint(
            $schema->getTable('orocrm_marketing_list'),
            ['marketing_list_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'CASCADE']
        );
    }
}
