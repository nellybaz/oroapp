<?php

namespace Oro\Bundle\FallbackBundle\Migrations\Schema\v1_1;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Platforms\PostgreSqlPlatform;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Schema\Comparator;

use Oro\Bundle\MigrationBundle\Migration\Extension\DatabasePlatformAwareInterface;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class OroFallbackBundle implements Migration, DatabasePlatformAwareInterface
{
    /** @var AbstractPlatform */
    protected $platform;

    /**
     * {@inheritdoc}
     */
    public function setDatabasePlatform(AbstractPlatform $platform)
    {
        $this->platform = $platform;
    }

    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        $queries->addQuery(
            'INSERT INTO oro_fallback_localization_val (id, localization_id, fallback, string, text) ' .
            'SELECT id, locale_id, fallback, string, text FROM orob2b_fallback_locale_value'
        );

        if ($this->platform instanceof PostgreSqlPlatform) {
            $queries->addQuery(
                "SELECT setval(pg_get_serial_sequence('oro_fallback_localization_val', 'id'), max(id)) " .
                "FROM oro_fallback_localization_val"
            );
        }

        $preSchema = clone $schema;
        $preSchema->dropTable('orob2b_fallback_locale_value');

        foreach ($this->getSchemaDiff($schema, $preSchema) as $query) {
            $queries->addQuery($query);
        }
        
        $queries->addQuery(new InsertDefaultLocalizationTitleQuery());
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
}
