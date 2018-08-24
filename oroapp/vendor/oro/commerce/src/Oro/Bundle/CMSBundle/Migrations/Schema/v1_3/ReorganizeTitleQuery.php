<?php

namespace Oro\Bundle\CMSBundle\Migrations\Schema\v1_3;

use Doctrine\DBAL\Platforms\PostgreSqlPlatform;
use Doctrine\DBAL\Types\Type;
use Oro\Bundle\MigrationBundle\Migration\ArrayLogger;
use Oro\Bundle\MigrationBundle\Migration\ParametrizedMigrationQuery;
use Psr\Log\LoggerInterface;

class ReorganizeTitleQuery extends ParametrizedMigrationQuery
{
    /**
     * @var array
     * [
     *      'page_id' => 'title',
     * ]
     */
    protected $relations = [];

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        $logger = new ArrayLogger();
        $this->doExecute($logger, true);

        return $logger->getMessages();
    }

    /**
     * {@inheritdoc}
     */
    public function execute(LoggerInterface $logger)
    {
        $this->doExecute($logger);
    }

    /**
     * @param LoggerInterface $logger
     * @param bool $dryRun
     */
    protected function doExecute(LoggerInterface $logger, $dryRun = false)
    {
        $this->prepareRelations($logger);
        $this->updateRelations($logger, $dryRun);
    }

    /**
     * @param LoggerInterface $logger
     */
    protected function prepareRelations(LoggerInterface $logger)
    {
        $query = 'SELECT
p.id, p.title
FROM oro_cms_page p;';

        $this->logQuery($logger, $query);

        $rows  = $this->connection->fetchAll($query);
        foreach ($rows as $row) {
            $this->relations[$row['id']] = $row['title'];
        }
    }

    /**
     * @param LoggerInterface $logger
     * @param bool $dryRun
     */
    protected function updateRelations(LoggerInterface $logger, $dryRun = false)
    {
        foreach ($this->relations as $pageId => $title) {
            $localizationValueQuery = 'INSERT INTO oro_fallback_localization_val (string) VALUES (:values);';
            $params = ['values' => $title];
            $types = ['values' => 'string'];

            $this->logQuery($logger, $localizationValueQuery, $params, $types);

            if (!$dryRun) {
                $this->connection->executeQuery($localizationValueQuery, $params, $types);
            }

            $localizationValueQuery = 'INSERT INTO oro_cms_page_title (page_id, localized_value_id)
VALUES (:pageId, :localizationValueId);';

            $params = ['pageId' => $pageId, 'localizationValueId' => $this->connection->lastInsertId(
                $this->connection->getDatabasePlatform() instanceof PostgreSqlPlatform
                    ? 'oro_fallback_localization_val_id_seq'
                    : null
            )];
            $types = ['pageId' => Type::INTEGER, 'localizationValueId' => Type::INTEGER ];

            $this->logQuery($logger, $localizationValueQuery, $params, $types);

            if (!$dryRun) {
                $this->connection->executeQuery($localizationValueQuery, $params, $types);
            }
        }
    }
}
