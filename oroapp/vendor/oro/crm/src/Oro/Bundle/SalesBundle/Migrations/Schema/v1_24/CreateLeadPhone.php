<?php

namespace Oro\Bundle\SalesBundle\Migrations\Schema\v1_24;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\OrderedMigrationInterface;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class CreateLeadPhone implements Migration, OrderedMigrationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 4;
    }

    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        /** Tables generation **/
        $this->createOrocrmLeadPhoneTable($schema);

        /** Foreign keys generation **/
        $this->addOrocrmLeadPhoneForeignKeys($schema);
    }

    /**
     * Create oro_lead_phone table
     *
     * @param Schema $schema
     */
    protected function createOrocrmLeadPhoneTable(Schema $schema)
    {
        $table = $schema->createTable('orocrm_sales_lead_phone');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('owner_id', 'integer', ['notnull' => false]);
        $table->addColumn('phone', 'string', ['length' => 255]);
        $table->addColumn('is_primary', 'boolean', ['notnull' => false]);
        $table->setPrimaryKey(['id']);
        $table->addIndex(['owner_id'], 'IDX_8475907F7E3C61F9', []);
        $table->addIndex(['phone', 'is_primary'], 'lead_primary_phone_idx', []);
        $table->addIndex(['phone'], 'lead_phone_idx');
    }

    /**
     * Add oro_lead_phone foreign keys.
     *
     * @param Schema $schema
     */
    protected function addOrocrmLeadPhoneForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('orocrm_sales_lead_phone');
        $table->addForeignKeyConstraint(
            $schema->getTable('orocrm_sales_lead'),
            ['owner_id'],
            ['id'],
            ['onDelete' => 'CASCADE', 'onUpdate' => null]
        );
    }
}
