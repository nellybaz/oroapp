<?php

namespace Oro\Bundle\UserBundle\Migrations\Schema\v1_9;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\MigrationBundle\Migration\QueryBag;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\EntityBundle\EntityConfig\DatagridScope;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;

class OroUserBundle implements Migration
{
    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        self::addTitleColumn($schema);
    }

    /**
     * @param Schema $schema
     */
    public static function addTitleColumn(Schema $schema)
    {
        $userTable = $schema->getTable('oro_user');
        $userTable->addColumn(
            'title',
            'string',
            [
                'length'      => 255,
                'oro_options' => [
                    'extend'   => ['owner' => ExtendScope::OWNER_CUSTOM],
                    'datagrid' => ['is_visible' => DatagridScope::IS_VISIBLE_FALSE],
                ],
            ]
        );
    }
}
