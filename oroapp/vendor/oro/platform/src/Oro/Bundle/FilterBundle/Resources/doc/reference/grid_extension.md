Grid Extension
==============

Overview
--------

Filter bundle provides extension for data grid with ORM and Search datasources.
Filters could be added to datagrid in the `datagrids.yml` file for specified datagrid under `filters` node.
Definition of any filter has required option `data_name` that should be reference to column in query and type - filter type.
For example:

```
    SOME_DATAGRID:
        source:
            type: orm
            query:
                select:
                    - g.id
                    - g.label
                from:
                    - { table: OroContactBundle:Group, alias: g }

        filters:
            columns:
                SOME_FITLER_NAME: # uses for query param, and for setting default filters
                    type: string  # Filter type, list of available types described below
                    data_name: g.id
                    enabled: true|false #whether filter enabled or not. If filter is not enabled it will not be displayed in filter list but will be accessible in filter management.
                    disabled: true|false #If filter is disabled it will not be displayed in filter list and will not be available in filter management.
                    visible: true|false #If set to "false" - filter will not be displayed anywhere in UI. However, one can still set filter's value in backend or via url in frontend
                    force_like: true|false #Different search engines uses different methods for text search. When `force_like` is set to true, text-based filters will use simple `LIKE %%` OR `NOT LIKE %%`statement which depends on a chosen operator
                    min_length: integer #In case of text-based filters this option introduce possibility to ignore filters with less characters then specified. Validation message will also appear
                    divisor: number #In case of number-based filters this option will filter values rendered with datagrid divisor option.
                    case_insensitive: true|false #When set to 'true' text search filter will be case insensitive [Postgres only].
                    value_conversion: string #Callback for text search filter used for converting value passed to a query.

```

## Default values

### String filter

```
        filters:
            columns:
                fieldName:
                    type:      string
                    data_name: priorityLabel
                    case_insensitive: true
            default:
                fieldName: { value: 'someText', type: %oro_filter.form.type.filter.text.class%::TYPE_CONTAINS }
```

### Choice filter

```
        filters:
            columns:
                period:
                    type: orocrm_period_filter
                    data_name: period
                    options:
                        populate_default: false
                        field_options:
                            choices:
                                monthPeriod:    Monthly
                                quarterPeriod:  Quarterly
                                yearPeriod:     Yearly
            default:
                period: { value: monthPeriod }
```

## Additional params

 - `filter_condition` - use OR or AND operator in expression
 - `filter_by_having` - filter expression should be added to HAVING clause
 - `options` - pass form options directly to filter form type (for additional info [see](./filter_form_types.md)

Filters
-------

### String filter

Provides filtering using string comparison.

`type: string`
Validated by TextFilterType on backend and rendered by [Oro.Filter.ChoiceFilter](./javascript_widgets.md#orofilterchoicefilter).  When case_insensitive is set to false it's possible to convert value by using callback defined in 'value_conversion'. 

### Select Row filter

Provides filtering by selected/not selected records

`type: string`
Validated by [SelectRowFilterType](./filter_form_types.md#oro_type_selectrow) on backend.

### Number and percent filter

Provides filtering by numbers comparison.

**Note**: _value from frontend will automatically transform to percentage for "percent" filter_

`type: number` - integer/decimal filter

Validated by [NumberFilterType](./filter_form_types.md#oro_type_number_filter-form-type) on backend
and rendered by [Oro.Filter.NumberFilter](./javascript_widgets.md#orofilternumberfilter)

`type: number-range` - integer/decimal filter

`type: percent` - percent filter

`type: currency` - currency filter

Validated by [NumberRangeFilterType](./filter_form_types.md#oro_type_number_range_filter-form-type) on backend
and rendered by [Oro.Filter.NumberRangeFilter](./javascript_widgets.md#orofilternumberrangefilter)

### Boolean filter

Provides filtering for boolean values.

`type: boolean`

Validated by [BooleanFilterType](./filter_form_types.md#oro_type_boolean_filter-form-type) on backend
and rendered by [Oro.Filter.ChoiceFilter](./javascript_widgets.md#orofilterchoicefilter) with predefined set of option (yes/no)

### Choice filter

Provides filtering data using list of predefined choices

`type: choice`

Validated by [ChoiceFilterType](./filter_form_types.md#oro_type_choice_filter-form-type) on backend
and rendered by [Oro.Filter.ChoiceFilter](./javascript_widgets.md#orofilterchoicefilter)

### Entity filter

Provides filtering data using list of choices that extracted from database.

`type: entity`

Validated by [EntityFilterType](./filter_form_types.md#oro_type_entity_filter-form-type) on backend
and rendered by [Oro.Filter.ChoiceFilter](./javascript_widgets.md#orofilterchoicefilter)

**Note**: _`query_builder` option could be passed from yml configuration to `field_options` using [method call link](./../../link.md)._

### Date filter

Provides filtering data by date values

`type: date`

Validated by [DateRangeFilterType](./filter_form_types.md#oro_type_date_range_filter-form-type)
Rendered by [Oro.Filter.DateFilter](./javascript_widgets.md#orofilterdatefilter)

### DateTime filter

Provides filtering data by datetime values

`type: datetime`

Validated by [DateTimeRangeFilterType](./filter_form_types.md#oro_type_datetime_range_filter-form-type)
Rendered by [Oro.Filter.DateTimeFilter](./javascript_widgets.md#orofilterdatetimefilter)

### DateGrouping filter

Provides grouping dates using list of predefined choices: Day, Month, Quarter, Year

`type: datetime`

Validated by [DateGroupingFilterType](./filter_form_types.md#oro_type_dage_grouping_filter-form-type) on backend
and rendered by [Oro.Filter.ChoiceFilter](./javascript_widgets.md#orofilterdategroupingfilter)

### SkipEmptyPeriods filter

Provides skipping empty data using list of predefined choices: Yes, No

`type: choice`

Validated by [SkipEmptyPeriodsFilterType](./filter_form_types.md#oro_type_skip_empty_periods_filter-form-type) on backend
and rendered by [Oro.Filter.ChoiceFilter](./javascript_widgets.md#orofilterskipemptyperiodsfilter)

Customization
-------------
To implement your filter you have to do following:

 - Develop class that implements Oro\Bundle\FilterBundle\Filter\FilterInterface (also there is basic implementation in AbstractFilter class)
 - Register you filter as service with tag { name: oro\_filter.extension.orm\_filter.filter, type: YOUR\_FILTER\_TYPE }
