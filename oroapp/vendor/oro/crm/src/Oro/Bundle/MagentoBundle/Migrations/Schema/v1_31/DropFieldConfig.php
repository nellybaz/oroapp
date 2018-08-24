<?php

namespace Oro\Bundle\MagentoBundle\Migrations\Schema\v1_31;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Type;

use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\ParametrizedSqlMigrationQuery;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class DropFieldConfig implements Migration
{
    /**
     * @var array
     */
    protected $fields = [
        'channel_id' => [
            'Oro\\Bundle\\MagentoBundle\\Entity\\Cart',
            'Oro\\Bundle\\MagentoBundle\\Entity\\Customer',
            'Oro\\Bundle\\MagentoBundle\\Entity\\CustomerGroup',
            'Oro\\Bundle\\MagentoBundle\\Entity\\Order',
            'Oro\\Bundle\\MagentoBundle\\Entity\\Product',
            'Oro\\Bundle\\MagentoBundle\\Entity\\Store',
            'Oro\\Bundle\\MagentoBundle\\Entity\\Website'
        ]
    ];

    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        foreach ($this->fields as $fieldName => $entityClasses) {
            foreach ($entityClasses as $entityClass) {
                $dropFieldsSql = <<<EOF
DELETE FROM oro_entity_config_field
WHERE field_name = :field_name
AND entity_id IN (SELECT id FROM oro_entity_config WHERE class_name = :class_name)
EOF;

                $dropFieldsQuery = new ParametrizedSqlMigrationQuery();
                $dropFieldsQuery->addSql(
                    $dropFieldsSql,
                    ['field_name' => $fieldName, 'class_name' => $entityClass],
                    ['field_name' => Type::STRING, 'class_name' => Type::STRING]
                );
                $queries->addPostQuery($dropFieldsQuery);
            }
        }
    }
}
