<?php

namespace Oro\Bundle\MailChimpBundle\ImportExport\Strategy;

use Oro\Bundle\MailChimpBundle\Entity\SubscribersList;

class ListImportStrategy extends AbstractImportStrategy
{
    /**
     * @param SubscribersList $entity
     * @return SubscribersList|null
     */
    public function process($entity)
    {
        $this->assertEnvironment($entity);

        $this->cachedEntities = array();
        /** @var SubscribersList $entity */
        $entity = $this->beforeProcessEntity($entity);

        /** @var SubscribersList $existingEntity */
        $existingEntity = $this->findExistingEntity($entity);
        if ($existingEntity) {
            if ($this->logger) {
                $this->logger->info('Syncing Existing MailChimp List [origin_id=' . $entity->getOriginId() . ']');
            }

            $entity = $this->importExistingList($entity, $existingEntity);
        } else {
            if ($this->logger) {
                $this->logger->info('Adding new MailChimp List [origin_id=' . $entity->getOriginId() . ']');
            }

            $entity = $this->processEntity($entity, true, true, $this->context->getValue('itemData'));
        }

        $entity = $this->afterProcessEntity($entity);
        $entity = $this->validateAndUpdateContext($entity);

        return $entity;
    }

    /**
     * Update existing MailChimp List.
     *
     * @param SubscribersList $entity
     * @param SubscribersList $existingEntity
     * @return SubscribersList
     */
    protected function importExistingList(SubscribersList $entity, SubscribersList $existingEntity)
    {
        $itemData = $this->context->getValue('itemData');

        // Update MailChimp List
        $this->importExistingEntity(
            $entity,
            $existingEntity,
            $itemData,
            ['channel', 'marketingList']
        );

        return $existingEntity;
    }
}
