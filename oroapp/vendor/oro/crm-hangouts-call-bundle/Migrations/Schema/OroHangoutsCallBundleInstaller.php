<?php

namespace Oro\Bundle\HangoutsCallBundle\Migrations\Schema;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\MigrationBundle\Migration\Installation;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;
use Oro\Bundle\HangoutsCallBundle\Migrations\Schema\v1_0\AddUseHangoutColumn;

class OroHangoutsCallBundleInstaller implements Installation
{
    /**
     * {@inheritdoc}
     */
    public function getMigrationVersion()
    {
        return 'v1_0';
    }

    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        AddUseHangoutColumn::useHangoutColumn($schema);
    }
}
