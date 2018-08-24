<?php

namespace Oro\Bundle\MoneyOrderBundle\Migrations\Schema\v1_1;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Schema\SchemaException;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class CreateMoneyOrderShortLabelTable implements Migration
{
    /**
     * @param Schema $schema
     * @param QueryBag $queries
     *
     * @throws SchemaException
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        $this->createOroMoneyOrderShortLabelTable($schema);
        $this->addOroMoneyOrderShortLabelForeignKeys($schema);
    }

    /**
     * @param Schema $schema
     */
    private function createOroMoneyOrderShortLabelTable(Schema $schema)
    {
        $table = $schema->createTable('oro_money_order_short_label');

        $table->addColumn('transport_id', 'integer', []);
        $table->addColumn('localized_value_id', 'integer', []);

        $table->setPrimaryKey(['transport_id', 'localized_value_id']);
        $table->addIndex(['transport_id'], 'oro_money_order_short_label_transport_id', []);
        $table->addUniqueIndex(['localized_value_id'], 'oro_money_order_short_label_localized_value_id', []);
    }
    /**
     * @param Schema $schema
     *
     * @throws SchemaException
     */
    private function addOroMoneyOrderShortLabelForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('oro_money_order_short_label');

        $table->addForeignKeyConstraint(
            $schema->getTable('oro_fallback_localization_val'),
            ['localized_value_id'],
            ['id'],
            ['onDelete' => 'CASCADE', 'onUpdate' => null]
        );
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_integration_transport'),
            ['transport_id'],
            ['id'],
            ['onDelete' => 'CASCADE', 'onUpdate' => null]
        );
    }
}
