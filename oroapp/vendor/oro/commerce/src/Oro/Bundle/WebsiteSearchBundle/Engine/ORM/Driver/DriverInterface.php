<?php

namespace Oro\Bundle\WebsiteSearchBundle\Engine\ORM\Driver;

use Doctrine\ORM\EntityManagerInterface;

use Oro\Bundle\SearchBundle\Engine\Orm\DBALPersisterInterface;
use Oro\Bundle\SearchBundle\Entity\AbstractItem;
use Oro\Bundle\SearchBundle\Query\Query;
use Oro\Bundle\EntityBundle\ORM\DatabaseDriverInterface;

interface DriverInterface extends DatabaseDriverInterface, DBALPersisterInterface
{
    /**
     * Search query by Query builder object
     *
     * @param Query $query
     *
     * @return array
     */
    public function search(Query $query);

    /**
     * Get count of records without limit parameters in query
     *
     * @param \Oro\Bundle\SearchBundle\Query\Query $query
     *
     * @return integer
     */
    public function getRecordsCount(Query $query);

    /**
     * Get aggregated data assigned based on requirements from query
     *
     * @param Query $query
     * @return array
     */
    public function getAggregatedData(Query $query);

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function initialize(EntityManagerInterface $entityManager);

    /**
     * @param string $currentAlias
     */
    public function removeIndexByAlias($currentAlias);

    /**
     * @param string $temporaryAlias
     * @param string $currentAlias
     */
    public function renameIndexAlias($temporaryAlias, $currentAlias);

    /**
     * @param array $entityIds
     * @param string $entityClass
     * @param string|null $entityAlias
     */
    public function removeEntities(array $entityIds, $entityClass, $entityAlias = null);

    /**
     * Removes index data for given $entityClass or all classes.
     * @param string $entityClass
     */
    public function removeIndexByClass($entityClass = null);

    /**
     * @return AbstractItem
     */
    public function createItem();

    /**
     * @deprecated Please use writeItem() and flushWrites() instead from the DBALPersister.
     *
     * @param AbstractItem[] $items
     * @return bool
     */
    public function saveItems(array $items);
}
