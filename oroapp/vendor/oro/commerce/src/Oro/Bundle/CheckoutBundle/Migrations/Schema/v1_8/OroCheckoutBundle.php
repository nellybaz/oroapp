<?php

namespace Oro\Bundle\CheckoutBundle\Migrations\Schema\v1_8;

use Doctrine\DBAL\Platforms\PostgreSqlPlatform;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Type;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

use Oro\Bundle\CheckoutBundle\Async\Topics;
use Oro\Bundle\MigrationBundle\Migration\Extension\DatabasePlatformAwareInterface;
use Oro\Bundle\MigrationBundle\Migration\Extension\DatabasePlatformAwareTrait;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\ParametrizedSqlMigrationQuery;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;
use Oro\Component\MessageQueue\Client\Message;

class OroCheckoutBundle implements Migration, ContainerAwareInterface, DatabasePlatformAwareInterface
{
    use ContainerAwareTrait;
    use DatabasePlatformAwareTrait;

    /**
     * {@inheritDoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        $this->updateOroCheckoutSubtotalTable($schema);

        $this->addOroCheckoutSubtotalForeignKeys($schema);

        $queries->addPostQuery(
            new ParametrizedSqlMigrationQuery(
                $this->platform instanceof PostgreSqlPlatform ? $this->getPostgreSql() : $this->getMySql(),
                [
                    'isValid' => false,
                    'deleted' => false,
                    'completed' => false
                ],
                [
                    'isValid' => Type::BOOLEAN,
                    'deleted' => Type::BOOLEAN,
                    'completed' => Type::BOOLEAN
                ]
            )
        );

        $this->container->get('oro_message_queue.client.message_producer')
            ->send(Topics::RECALCULATE_CHECKOUT_SUBTOTALS, new Message());
    }

    /**
     * Update oro_checkout_subtotal table
     *
     * @param Schema $schema
     */
    private function updateOroCheckoutSubtotalTable(Schema $schema)
    {
        $table = $schema->getTable('oro_checkout_subtotal');
        $table->addColumn('combined_price_list_id', 'integer', ['notnull' => false]);
        $table->addIndex(['is_valid'], 'idx_checkout_subtotal_valid');
    }

    /**
     * Add oro_checkout_subtotal foreign keys.
     *
     * @param Schema $schema
     */
    private function addOroCheckoutSubtotalForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('oro_checkout_subtotal');
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_price_list_combined'),
            ['combined_price_list_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'SET NULL']
        );
    }

    /**
     * @return string
     */
    private function getPostgreSql()
    {
        return <<<SQL
UPDATE oro_checkout_subtotal
SET is_valid = :isValid
FROM (
         SELECT cs.id as subtotal_id
         FROM oro_checkout_subtotal AS cs
             INNER JOIN oro_checkout AS c
                 ON c.id = cs.checkout_id
                    AND c.deleted = :deleted
                    AND c.completed = :completed
      ) AS subquery
WHERE subquery.subtotal_id = id
SQL;
    }

    /**
     * @return string
     */
    private function getMySql()
    {
        return <<<SQL
UPDATE oro_checkout_subtotal AS cs
    INNER JOIN oro_checkout AS c
         ON c.id = cs.checkout_id
            AND c.deleted = :deleted
            AND c.completed = :completed
SET cs.is_valid = :isValid
SQL;
    }
}
