<?php

namespace Oro\Bundle\TranslationBundle\Migrations\Schema\v1_0;

use Doctrine\DBAL\Schema\Schema;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class OroTranslationBundle implements Migration
{
    /**
     * @inheritdoc
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        /** Generate table oro_translation **/
        $table = $schema->createTable('oro_translation');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('key', 'string', ['length' => 500]);
        $table->addColumn('value', 'text', ['notnull' => false]);
        $table->addColumn('locale', 'string', ['length' => 5]);
        $table->addColumn('domain', 'string', ['length' => 255]);
        $table->addColumn('scope', 'smallint', []);
        $table->setPrimaryKey(['id']);
        $table->addIndex(['locale', 'domain', 'key', 'scope'], 'MESSAGE_IDX', []);
        /** End of generate table oro_translation **/
    }
}
