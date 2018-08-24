## Doctrine field types ##

Some entities have fields which data is money or percents.

For this data was created new field types - money and percent.

**money** field type allow to store money data. It's an alias to decimal(19,4) type.

You can use this field type like:

```php
    /**
     * @var decimal
     *
     * @ORM\Column(name="tax_amount", type="money")
     */
    protected $taxAmount;
```

**percent** field type allow to store percent data. It's an alias to float type.

You can use this field type like:

```php
    /**
     * @var float
     *
     * @ORM\Column(name="percent_field", type="percent")
     */
    protected $percentField;
```

This two data types are available in extend fields. You can create new fields with this types. Additionally in view pages, in grids and in edit pages this fields will be automatically formatted with currency or percent formatters.

In grid, for percent data type will be automatically generated percent filter.

**config_object** type that maps and converts `Oro\Component\Config\Common\ConfigObject` based on PHP’s JSON encoding functions. Values retrieved from the database are always converted to `Oro\Component\Config\Common\ConfigObject` or null if no data is present.

You can use this field type like:

```php
    /**
     * @var \Oro\Component\Config\Common\ConfigObject
     *
     * @ORM\Column(name="map_config", type="config_object")
     */
    protected $mapConfigField;
```


**duration** field type allow to store time duration in seconds. It's an alias to integer type.

You can use this field type like:

```php
    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="duration")
     */
    protected $duration;
```
