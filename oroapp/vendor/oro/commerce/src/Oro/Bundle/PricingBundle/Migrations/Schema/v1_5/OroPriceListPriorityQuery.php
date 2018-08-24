<?php

namespace Oro\Bundle\PricingBundle\Migrations\Schema\v1_5;

use Doctrine\DBAL\Types\Type;
use Oro\Bundle\MigrationBundle\Migration\ArrayLogger;
use Oro\Bundle\MigrationBundle\Migration\ParametrizedMigrationQuery;
use Psr\Log\LoggerInterface;

class OroPriceListPriorityQuery extends ParametrizedMigrationQuery
{
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
        $this->updatePriceListAccountGroupPriorities($logger, $dryRun);
        $this->updatePriceListAccountPriorities($logger, $dryRun);
        $this->updatePriceListWebsitePriorities($logger, $dryRun);
        $this->updatePriceListConfigPriority($logger, $dryRun);
    }

    /**
     * @param LoggerInterface $logger
     * @param bool $dryRun
     * @throws \Doctrine\DBAL\DBALException
     */
    protected function updatePriceListConfigPriority(LoggerInterface $logger, $dryRun = false)
    {
        $selectQuery = 'SELECT id, array_value FROM oro_config_value WHERE name = :name AND section = :section LIMIT 1';
        $selectQueryParameters = [
            'name' => 'default_price_lists',
            'section' => 'oro_pricing'
        ];
        $selectQueryTypes = [
            'name' => 'string',
            'section' => 'string'
        ];

        $this->logQuery($logger, $selectQuery, $selectQueryParameters, $selectQueryTypes);
        $result = $this->connection->fetchAssoc($selectQuery, $selectQueryParameters, $selectQueryTypes);

        $arrayType = Type::getType(Type::TARRAY);
        $platform = $this->connection->getDatabasePlatform();
        
        $defaultPriceLists = $arrayType->convertToPHPValue($result['array_value'], $platform);

        // Change priority only if already existing several default price lists
        if (count($defaultPriceLists) > 1) {
            usort(
                $defaultPriceLists,
                function ($a, $b) {
                    return ($a['priority'] < $b['priority']) ? -1 : 1;
                }
            );

            $priceListsCount = count($defaultPriceLists);
            for ($i = 0; $i < (int)($priceListsCount/2); $i++) {
                $swapIdx = $priceListsCount - 1 - $i;
                $oldValue = $defaultPriceLists[$i]['priority'];
                $defaultPriceLists[$i]['priority'] = $defaultPriceLists[$swapIdx]['priority'];
                $defaultPriceLists[$swapIdx]['priority'] = $oldValue;
            }

            $updateQuery = 'UPDATE oro_config_value SET array_value = :array_value WHERE id = :id';
            $updateQueryParameters = [
                'array_value' => $defaultPriceLists,
                'id' => $result['id']
            ];
            $updateQueryTypes = [
                'array_value' => 'array',
                'id' => 'integer'
            ];

            $this->logQuery($logger, $updateQuery, $updateQueryParameters, $updateQueryTypes);
            if (!$dryRun) {
                $this->connection->executeUpdate($updateQuery, $updateQueryParameters, $updateQueryTypes);
            }
        }
    }

    /**
     * @param LoggerInterface $logger
     * @param bool $dryRun
     */
    protected function updatePriceListAccountGroupPriorities(LoggerInterface $logger, $dryRun = false)
    {
        $sql = 'SELECT website_id, account_group_id, priority, price_list_id
                FROM oro_price_list_to_acc_group
                ORDER BY website_id, account_group_id, priority';

        $oldPriorities = $this->fetchData($logger, $sql);
        $newPriorities = $this->collectPriorities($oldPriorities, 'website_id', 'account_group_id');

        $sql = 'UPDATE oro_price_list_to_acc_group SET priority = :priority 
                WHERE website_id = :websiteId AND account_group_id = :accountGroupId AND price_list_id = :priceListId';

        $types = [
            'priority' => 'integer',
            'websiteId' => 'integer',
            'accountGroupId' => 'integer',
            'priceListId' => 'integer',
        ];

        foreach ($oldPriorities as $value) {
            $params = [
                'priority' => array_pop($newPriorities[$value['website_id']][$value['account_group_id']]),
                'websiteId' => $value['website_id'],
                'accountGroupId' => $value['account_group_id'],
                'priceListId' => $value['price_list_id']
            ];

            $this->saveData($logger, $sql, $params, $types, $dryRun);
        }
    }

    /**
     * @param LoggerInterface $logger
     * @param bool $dryRun
     */
    protected function updatePriceListAccountPriorities(LoggerInterface $logger, $dryRun = false)
    {
        $sql = 'SELECT website_id, account_id, priority, price_list_id
                FROM oro_price_list_to_account
                ORDER BY website_id, account_id, priority';

        $oldPriorities = $this->fetchData($logger, $sql);
        $newPriorities = $this->collectPriorities($oldPriorities, 'website_id', 'account_id');

        $sql = 'UPDATE oro_price_list_to_account SET priority = :priority 
                WHERE website_id = :websiteId AND account_id = :accountId AND price_list_id = :priceListId';

        $types = [
            'priority' => 'integer',
            'websiteId' => 'integer',
            'accountId' => 'integer',
            'priceListId' => 'integer',
        ];

        foreach ($oldPriorities as $value) {
            $params = [
                'priority' => array_pop($newPriorities[$value['website_id']][$value['account_id']]),
                'websiteId' => $value['website_id'],
                'accountId' => $value['account_id'],
                'priceListId' => $value['price_list_id']
            ];

            $this->saveData($logger, $sql, $params, $types, $dryRun);
        }
    }

    /**
     * @param LoggerInterface $logger
     * @param bool $dryRun
     */
    protected function updatePriceListWebsitePriorities(LoggerInterface $logger, $dryRun = false)
    {
        $sql = 'SELECT website_id, priority, price_list_id
                FROM oro_price_list_to_website
                ORDER BY website_id, priority';

        $oldPriorities = $this->fetchData($logger, $sql);
        $newPriorities = $this->collectPriorities($oldPriorities, 'website_id');

        $sql = 'UPDATE oro_price_list_to_website SET priority = :priority 
                WHERE website_id = :websiteId AND price_list_id = :priceListId';

        $types = [
            'priority' => 'integer',
            'websiteId' => 'integer',
            'priceListId' => 'integer',
        ];

        foreach ($oldPriorities as $value) {
            $params = [
                'priority' => array_pop($newPriorities[$value['website_id']]),
                'websiteId' => $value['website_id'],
                'priceListId' => $value['price_list_id']
            ];

            $this->saveData($logger, $sql, $params, $types, $dryRun);
        }
    }

    /**
     * @param LoggerInterface $logger
     * @param string $sql
     * @return array
     */
    protected function fetchData(LoggerInterface $logger, $sql)
    {
        $logger->info($sql);
        return $this->connection->fetchAll($sql);
    }

    /**
     * @param LoggerInterface $logger
     * @param string $sql
     * @param array $params
     * @param array $types
     * @param bool $dryRun
     */
    protected function saveData(LoggerInterface $logger, $sql, array $params, array $types, $dryRun)
    {
        $this->logQuery($logger, $sql, $params, $types);

        if (!$dryRun) {
            $this->connection->executeQuery($sql, $params, $types);
        }
    }

    /**
     * @param array $oldPriorities
     * @param string $firstLevel
     * @param string|null $secondLevel
     * @return array
     */
    protected function collectPriorities(array $oldPriorities, $firstLevel, $secondLevel = null)
    {
        $priorities = [];

        foreach ($oldPriorities as $value) {
            $firstLevelValue = $value[$firstLevel];

            if (empty($priorities[$firstLevelValue])) {
                $priorities[$firstLevelValue] = [];
            }

            if ($secondLevel !== null) {
                $secondLevelValue = $value[$secondLevel];
                if (empty($priorities[$firstLevelValue][$secondLevelValue])) {
                    $priorities[$firstLevelValue][$secondLevelValue] = [];
                }
                $priorities[$firstLevelValue][$secondLevelValue][] = $value['priority'];
            } else {
                $priorities[$firstLevelValue][] = $value['priority'];
            }
        }

        return $priorities;
    }
}
