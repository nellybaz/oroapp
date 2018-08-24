<?php

namespace Oro\Bundle\AccountBundle\Migrations\Schema\v1_5;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;
use Oro\Bundle\EntityConfigBundle\Migration\UpdateEntityConfigEntityValueQuery;

class UpdateEntityLabel implements Migration
{
    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        $queries->addQuery(
            new UpdateEntityConfigEntityValueQuery(
                'Oro\Bundle\AccountBundle\Entity\Account',
                'entity',
                'label',
                'oro.account.entity_label'
            )
        );
        $queries->addQuery(
            new UpdateEntityConfigEntityValueQuery(
                'Oro\Bundle\AccountBundle\Entity\Account',
                'entity',
                'plural_label',
                'oro.account.entity_plural_label'
            )
        );
    }
}
