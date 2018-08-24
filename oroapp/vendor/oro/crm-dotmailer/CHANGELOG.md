## 2.6.0 (2018-01-31)
[Show detailed list of changes](incompatibilities-2-6.md)

### Removed
* The parameter `oro_dotmailer.listener.datafield_remove.class` was removed form the service container

## 2.5.0 (2017-11-30)
[Show detailed list of changes](incompatibilities-2-5.md)

## 2.3.0 (2017-07-28)
[Show detailed list of changes](incompatibilities-2-3.md)

## 2.2.0 (2017-05-31)
[Show detailed list of changes](incompatibilities-2-2.md)

## 2.1.0 (2017-03-30)
[Show detailed list of changes](incompatibilities-2-1.md)
### Changed
- Class `AbstractMarketingListEntitiesAction`<sup>[[?]](https://github.com/oroinc/OroCRMDotmailerBundle/tree/2.1.0/Model/Action/AbstractMarketingListEntitiesAction.php "Oro\Bundle\DotmailerBundle\Model\Action\AbstractMarketingListEntitiesAction")</sup>
    - changed the return type of `getMarketingListEntitiesByEmail` method from `BufferedQueryResultIterator` to `BufferedQueryResultIteratorInterface`
### Removed
- Method `AddressBookController::synchronizeAddressBook`<sup>[[?]](https://github.com/oroinc/OroCRMDotmailerBundle/tree/2.0.0/Controller/AddressBookController.php#L40 "Oro\Bundle\DotmailerBundle\Controller\AddressBookController::synchronizeAddressBook")</sup> was removed, use `AddressBookController::synchronizeAddressBookAction`<sup>[[?]](https://github.com/oroinc/OroCRMDotmailerBundle/tree/2.1.0/Controller/AddressBookController.php#L41 "Oro\Bundle\DotmailerBundle\Controller\AddressBookController::synchronizeAddressBookAction")</sup> instead.
- Method `AddressBookController::synchronizeAddressBookDataFields`<sup>[[?]](https://github.com/oroinc/OroCRMDotmailerBundle/tree/2.1.0/Controller/AddressBookController.php#L0 "Oro\Bundle\DotmailerBundle\Controller\AddressBookController::synchronizeAddressBookDataFields")</sup> was removed, use `AddressBookController::synchronizeAddressBookDataFieldsAction`<sup>[[?]](https://github.com/oroinc/OroCRMDotmailerBundle/tree/2.1.0/Controller/AddressBookController.php#L83 "Oro\Bundle\DotmailerBundle\Controller\AddressBookController::synchronizeAddressBookDataFieldsAction")</sup> instead.
- Method `DataFieldController::synchronize`<sup>[[?]](https://github.com/oroinc/OroCRMDotmailerBundle/tree/2.0.0/Controller/DataFieldController.php#L124 "Oro\Bundle\DotmailerBundle\Controller\DataFieldController::synchronize")</sup> was removed, use `DataFieldController::synchronizeAction`<sup>[[?]](https://github.com/oroinc/OroCRMDotmailerBundle/tree/2.1.0/Controller/DataFieldController.php#L124 "Oro\Bundle\DotmailerBundle\Controller\DataFieldController::synchronizeAction")</sup> instead.
