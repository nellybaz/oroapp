Address Form Types
------------------

OroAddressBundle provides form types to render address entities on forms.

### Form Types Description

* **oro\_address** - encapsulates form fields for Address entity;
* **oro\_address\_collection** - collection of form types for address entities;
* **oro\_country** - encapsulates form fields for Country entity;
* **oro\_region** - encapsulates form fields for Region entity.

### Classes Description

* **Form \ Type \ AddressType** - base form for Address, includes form fields for address attributes;
* **Form \ Type \ TypedAddressType** - extends AddressType, adds functionality to work with address types;
* **Form \ Type \ AddressType** - implementation of AbstractAddressType, name is "oro_address";
* **Form \ Type\ AddressCollectionType** - provides functionality to work with address collections,
name is "oro_address_collection";
* **Form \ Type \ CountryType** - form type for Country entity, name is "oro_country";
* **Form \ Type \ RegionType** - form type fot Region entity, name is "oro_region";
* **Form \ EventListener \ AddressCountryAndRegionSubscriber** - responsible for processing relation
between countries and regions on address form;
* **Form \ EventListener \ FixAddressPrimaryAndTypesSubscriber** - responsible for processing single address submit
to respect rules of single primary address and uniqueness types of addresses;
* **Form \ EventListener \ AddressCollectionTypeSubscriber** - responsible for processing
of address elements at address collection form;
* **Form \ Handler \ AddressHandler** - processes save for Address entity using specified form.
