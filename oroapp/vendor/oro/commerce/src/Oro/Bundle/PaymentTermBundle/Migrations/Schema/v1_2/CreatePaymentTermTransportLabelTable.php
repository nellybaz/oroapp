<?php

namespace Oro\Bundle\PaymentTermBundle\Migrations\Schema\v1_2;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Schema\SchemaException;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class CreatePaymentTermTransportLabelTable implements Migration
{
    /**
     * @param Schema   $schema
     * @param QueryBag $queries
     *
     * @throws SchemaException
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        $this->createOroPaymentTermTransportLabelTable($schema);
        $this->addOroPaymentTermTransportLabelForeignKeys($schema);
    }

    /**
     * @param Schema $schema
     */
    private function createOroPaymentTermTransportLabelTable(Schema $schema)
    {
        $table = $schema->createTable('oro_payment_term_trans_label');

        $table->addColumn('transport_id', 'integer', []);
        $table->addColumn('localized_value_id', 'integer', []);

        $table->setPrimaryKey(['transport_id', 'localized_value_id']);
        $table->addIndex(['transport_id'], 'oro_payment_term_trans_label_transport_id', []);
        $table->addUniqueIndex(['localized_value_id'], 'oro_payment_term_trans_label_localized_value_id', []);
    }

    /**
     * @param Schema $schema
     *
     * @throws SchemaException
     */
    private function addOroPaymentTermTransportLabelForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('oro_payment_term_trans_label');

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
