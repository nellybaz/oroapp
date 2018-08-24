<?php

namespace Oro\Bundle\ContactBundle\ImportExport\Strategy;

use Doctrine\Common\Util\ClassUtils;

use Oro\Bundle\ImportExportBundle\Strategy\Import\ConfigurableAddOrReplaceStrategy;
use Oro\Bundle\ContactBundle\Entity\Contact;

class ContactAddOrReplaceStrategy extends ConfigurableAddOrReplaceStrategy
{
    /**
     * @var ContactImportHelper
     */
    protected $contactImportHelper;

    /**
     * @param ContactImportHelper $contactImportHelper
     */
    public function setContactImportHelper(ContactImportHelper $contactImportHelper)
    {
        $this->contactImportHelper = $contactImportHelper;
    }

    /**
     * {@inheritdoc}
     */
    protected function importExistingEntity(
        $entity,
        $existingEntity,
        $itemData = null,
        array $excludedFields = array()
    ) {
        // manually handle recursive relation to accounts
        $entityName = ClassUtils::getClass($entity);
        $fieldName = 'accounts';

        if ($entity instanceof Contact
            && $existingEntity instanceof Contact
            && !$this->isFieldExcluded($entityName, $fieldName, $itemData)
            && !in_array($fieldName, $excludedFields)
        ) {
            foreach ($existingEntity->getAccounts() as $account) {
                $existingEntity->removeAccount($account);
            }

            foreach ($entity->getAccounts() as $account) {
                $account->removeContact($entity);
                $existingEntity->addAccount($account);
            }

            $excludedFields[] = $fieldName;
        }

        parent::importExistingEntity($entity, $existingEntity, $itemData, $excludedFields);

        if ($existingEntity instanceof Contact) {
            $this->fixDuplicateEntities($existingEntity);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function beforeProcessEntity($entity)
    {
        /** @var Contact $entity */
        $entity = parent::beforeProcessEntity($entity);

        // need to manually set empty types to skip merge from existing entities
        $itemData = $this->context->getValue('itemData');

        if (!empty($itemData['addresses'])) {
            foreach ($itemData['addresses'] as $key => $address) {
                if (!isset($address['types'])) {
                    $itemData['addresses'][$key]['types'] = array();
                }
            }

            $this->context->setValue('itemData', $itemData);
        }

        return $entity;
    }

    /**
     * {@inheritdoc}
     */
    protected function afterProcessEntity($entity)
    {
        /** @var Contact $entity */
        $entity = parent::afterProcessEntity($entity);

        $this->contactImportHelper->updateScalars($entity);
        $this->contactImportHelper->updatePrimaryEntities($entity);

        return $entity;
    }

    /**
     * {@inheritdoc}
     */
    protected function findEntityByIdentityValues($entityName, array $identityValues)
    {
        // contact last name and first name must be in this order to support compound index
        if ($entityName == 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if (array_key_exists('firstName', $identityValues) && array_key_exists('lastName', $identityValues)) {
                $firstName = $identityValues['firstName'];
                $lastName = $identityValues['lastName'];
                unset($identityValues['firstName']);
                unset($identityValues['lastName']);
                $identityValues = array_merge(
                    array('lastName' => $lastName, 'firstName' => $firstName),
                    $identityValues
                );
            }
        }

        return parent::findEntityByIdentityValues($entityName, $identityValues);
    }

    /**
     * @param Contact $existingEntity
     */
    private function fixDuplicateEntities(Contact $existingEntity)
    {
        // need to remove duplicated entities, because Account and Contact add* related methods calls each other
        // eg. Contact::addAccount also calls Account::addContact
        foreach ($existingEntity->getAccounts() as $account) {
            foreach ($account->getContacts() as $contact) {
                $contactExistCallback = function ($key, Contact $value) use ($contact) {
                    return $contact !== $value && (int)$contact->getId() === (int)$value->getId();
                };

                if ($account->getContacts()->exists($contactExistCallback)) {
                    $account->removeContact($contact);
                }
            }
        }
    }
}
