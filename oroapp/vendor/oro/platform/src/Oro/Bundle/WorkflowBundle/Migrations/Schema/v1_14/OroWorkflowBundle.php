<?php

namespace Oro\Bundle\WorkflowBundle\Migrations\Schema\v1_14;

use Doctrine\DBAL\Schema\Comparator;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Type;

use Oro\Bundle\MigrationBundle\Migration\Extension\DatabasePlatformAwareInterface;
use Oro\Bundle\MigrationBundle\Migration\Extension\DatabasePlatformAwareTrait;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\ParametrizedSqlMigrationQuery;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

use Oro\Bundle\WorkflowBundle\Provider\WorkflowVirtualRelationProvider;

class OroWorkflowBundle implements Migration, DatabasePlatformAwareInterface
{
    use DatabasePlatformAwareTrait;

    const OLD_ITEMS_RELATION = 'workflowItem';
    const OLD_STEPS_RELATION = 'workflowStep';
    const NEW_ITEMS_RELATION = WorkflowVirtualRelationProvider::ITEMS_RELATION_NAME;
    const NEW_STEPS_RELATION = WorkflowVirtualRelationProvider::STEPS_RELATION_NAME;

    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        $preSchema = clone $schema;

        $table = $preSchema->getTable('oro_workflow_definition');
        $table->addColumn('active', 'boolean', ['default' => false]);
        $table->addColumn('priority', 'integer', ['default' => 0]);
        $table->addColumn('groups', 'array', ['notnull' => false, 'comment' => '(DC2Type:array)']);

        foreach ($this->getSchemaDiff($schema, $preSchema) as $query) {
            $queries->addQuery($query);
        }

        $queries->addQuery(
            new ParametrizedSqlMigrationQuery(
                'UPDATE oro_workflow_definition SET groups = :groups WHERE groups IS NULL',
                ['groups' => []],
                ['groups' => Type::TARRAY]
            )
        );

        $postSchema = clone $preSchema;

        $table = $postSchema->getTable('oro_workflow_definition');
        $table->changeColumn('groups', ['notnull' => true]);

        foreach ($this->getSchemaDiff($preSchema, $postSchema) as $query) {
            $queries->addQuery($query);
        }

        $this->updateReportsDefinitions($queries);
        $queries->addQuery(new RemoveExtendedFieldsQuery());
        $queries->addPostQuery(new MoveActiveFromConfigToFieldQuery());

        $this->removeScheduledTransitions($queries);
    }

    /**
     * @param QueryBag $queries
     */
    protected function updateReportsDefinitions(QueryBag $queries)
    {
        $queries->addPostQuery(
            sprintf(
                'UPDATE oro_report SET definition = REPLACE(definition, \'%s\', \'%s\')',
                self::OLD_ITEMS_RELATION,
                self::NEW_ITEMS_RELATION
            )
        );
        $queries->addPostQuery(
            sprintf(
                'UPDATE oro_report SET definition = REPLACE(definition, \'%s\', \'%s\')',
                self::OLD_STEPS_RELATION,
                self::NEW_STEPS_RELATION
            )
        );
    }

    /**
     * @param Schema $schema
     * @param Schema $toSchema
     * @return array
     */
    protected function getSchemaDiff(Schema $schema, Schema $toSchema)
    {
        $comparator = new Comparator();

        return $comparator->compare($schema, $toSchema)->toSql($this->platform);
    }

    /**
     * @param QueryBag $queries
     */
    protected function removeScheduledTransitions(QueryBag $queries)
    {
        $params = ['stpn_name' => 'stpn__%'];
        $types = ['stpn_name' => Type::STRING];

        $queries->addQuery(
            new ParametrizedSqlMigrationQuery(
                'DELETE FROM oro_process_trigger WHERE definition_name LIKE :stpn_name',
                $params,
                $types
            )
        );

        $queries->addQuery(
            new ParametrizedSqlMigrationQuery(
                'DELETE FROM oro_process_definition WHERE name LIKE :stpn_name',
                $params,
                $types
            )
        );
    }
}
