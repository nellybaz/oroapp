Form Components Overview
------------------------

This article describes all form components that are stored in OroUIBundle.
Form components are form types, data transformers and event listeners.

### Form Types

* **Form / Type / OroDateType** (name = oro_date) - encapsulates date element logic;
* **Form / Type / OroDateTimeType** (name = oro_datetime) - encapsulates datetime element logic;
* **Form / Type / OroIconType** (name = oro_icon_select) - provide icon selector (based on genemu_jqueryselect2_hidden), supports autocomplete;
* **Form / Type / EntityIdentifierType** (name = oro_entity_identifier) - converts string or array of entity IDs to existing entities of specified type.
* **Form / Type / OroJquerySelect2HiddenType** (name = oro_jqueryselect2_hidden) - supports autocompletition ([more details](./autocomplete_form_type.md))
* **Form / Type / OroDurationType** (name = oro_duration) - time duration field type, supports column style #:#:# and JIRA style #h #m #s time encodings

### Data Transformers

* **Form / DataTransformer / ArrayToStringTransformer** - converts array to string and back;
* **Form / DataTransformer / EntitiesToIdsTransformer** - converts entity IDs to entities and back.
* **Form / DataTransformer / EntityToIdTransformer** - converts entity ID to entity and back.
* **Form / DataTransformer / DurationToStringTransformer** - converts numeric duration (in seconds) to string and back.


### Event Subscribers

* **Form / EventListener / FixArrayToStringListener** - converts array to string on form PRE_BIND event.


### Configuration

#### Form Types

```
parameters:
    oro_form.type.date.class:              Oro\Bundle\FormBundle\Form\Type\OroDateType
    oro_form.type.datetime.class:          Oro\Bundle\FormBundle\Form\Type\OroDateTimeType
    oro_form.type.entity_identifier.class: Oro\Bundle\FormBundle\Form\Type\EntityIdentifierType
    oro_form.type.jqueryselect2_hidden.class: Oro\Bundle\FormBundle\Form\Type\OroJquerySelect2HiddenType
    oro_form.type.duration.class:          Oro\Bundle\FormBundle\Form\Type\OroDurationType

services:
    oro_form.type.date:
        class: %oro_form.type.date.class%
        tags:
            - { name: form.type, alias: oro_date }

    oro_form.type.datetime:
        class: %oro_form.type.datetime.class%
        tags:
            - { name: form.type, alias: oro_datetime }

    oro_form.type.entity_identifier:
        class: %oro_form.type.entity_identifier.class%
        tags:
            - { name: form.type, alias: oro_entity_identifier }
        arguments: ["@doctrine"]

    oro_form.type.jqueryselect2_hidden:
        class: %oro_form.type.jqueryselect2_hidden.class%
        arguments:
            - @doctrine.orm.entity_manager
            - @oro_form.autocomplete.configuration
        tags:
            - { name: form.type, alias: oro_jqueryselect2_hidden }

    oro_form.type.duration:
        class: '%oro_form.type.duration.class%'
        tags:
            - { name: form.type, alias: oro_duration }
```
