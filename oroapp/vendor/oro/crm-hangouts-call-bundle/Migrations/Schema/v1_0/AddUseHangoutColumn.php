<?php

namespace Oro\Bundle\HangoutsCallBundle\Migrations\Schema\v1_0;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\EntityBundle\EntityConfig\DatagridScope;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class AddUseHangoutColumn implements Migration
{
    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        self::useHangoutColumn($schema);
    }

    /**
     * @param Schema $schema
     */
    public static function useHangoutColumn(Schema $schema)
    {
        $table = $schema->getTable('oro_calendar_event');
        $table->addColumn(
            'use_hangout',
            'boolean',
            [
                'oro_options' => [
                    'extend'       => ['owner' => ExtendScope::OWNER_CUSTOM],
                    'form'         => [
                        'is_enabled' => true,
                        'form_type' => 'oro_hangouts_call_use_hangout_checkbox_type'
                    ],
                    'datagrid'     => ['is_visible' => DatagridScope::IS_VISIBLE_FALSE],
                ],
                'notnull'     => false,
            ]
        );
    }
}
