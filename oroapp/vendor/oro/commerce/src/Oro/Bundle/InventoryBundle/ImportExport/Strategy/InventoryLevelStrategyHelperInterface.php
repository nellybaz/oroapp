<?php

namespace Oro\Bundle\InventoryBundle\ImportExport\Strategy;

use Oro\Bundle\InventoryBundle\Entity\InventoryLevel;

interface InventoryLevelStrategyHelperInterface
{
    /**
     * Process imported entity, validate and extract existing entity base on the imported one,
     * make updates or create new objects.
     *
     * @param InventoryLevel $importedEntity
     * @param array $importData
     * @param array $newEntities
     * @param array $errors
     * @return mixed
     */
    public function process(
        InventoryLevel $importedEntity,
        array $importData = [],
        array $newEntities = [],
        array $errors = []
    );

    /**
     * @param InventoryLevelStrategyHelperInterface $successor
     */
    public function setSuccessor(InventoryLevelStrategyHelperInterface $successor);

    /**
     * Return the errors added by the validation process of the current strategy helper or all of
     * its successor if $deep parameter is true
     *
     * @param bool $deep
     * @return array
     */
    public function getErrors($deep = false);

    /**
     * Runs through helper and his successor (depending on the parameter) and clear any cache
     * that the helper has
     *
     * @param bool $deep
     * @return mixed
     */
    public function clearCache($deep = false);
}
