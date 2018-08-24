Formatter extension:
=======
This extension do not affects Datasource, it applies after result set is fetched by datagrid and provides changes using formatters that described in config.
Also this extension responsible for passing columns configuration to view layer.

Formatters
-----------

### Field
```yaml
column_name:
    type: field # default value `field`, so this key could be skipped here
    frontend_type: date|datetime|decimal|integer|percent|currency|select|text|html|boolean # optional default string
    data_name: someAlias.someField # optional, key in result that should represent this field
    divisor: some number # optional if you need to divide a numeric value by a number before rendering it
```
Represents default data field.

### Url
```yaml
column_name:
    type: url
    route: some_route # required
    isAbsolute: true|false # optional
    params: [] # optional params for route generating, will be took from record
    anchor: string #optional, use it when need to add some #anchor to generated url
```
Represents url field, mostly used for generating urls for actions.

### Link
```yaml
column_name:
    type: link
    route: some_route # required
    isAbsolute: true|false # optional
    params: [] # optional params for route generating, will be took from record
    anchor: string #optional, use it when need to add some #anchor to generated url
    frontend_type: html #needed to display prepared link (a-tag) as html
```
Represents link field to display a link as html. Link text is value of records "column_name", values for url generation are specified via "params". 

### Twig
```yaml
column_name:
    type: twig
    template: string # required, template name
    context: [] # optional, should not contain reserved keys(record, value)
```
Represents twig template formatted field.

### Translatable
```yaml
column_name:
    type: translatable
    data_name: string #optional if need to took value from another column
    domain: string #optional
    locale: string #optional
```
Used when field should be translated by symfony translator.

### Callback
```yaml
column_name:
    type: callback
    callable: @link # required
```
Used when field should be formatted using some callback, format [see](./../references_in_configuration.md).

Note that the whole node configuration is passed to the callback method as the `$node` argument.
Therefore, if you need is to pass some arguments to the callback method, you can add any parameter to the grid config, e.g.:

```yaml
column_name:
    type: callback
    callable: @link.to.some.service->myCallbackMethod
    myCallbackParam: 'Some Value'
```

And then use this parameter in the callback method like this:

```php
use Oro\Bundle\DataGridBundle\Datasource\ResultRecordInterface;

class MyFormatterService
{
    public function myCallbackMethod($gridName, $keyName, $node)
    {
        if (!array_key_exists('myCallbackParam', $node)) {
            return false;
        }

        $myCallbackParam = $node['myCallbackParam'];

        return function (ResultRecordInterface $record) use ($myCallbackParam) {
            $result = '';
            // Do something using $myCallbackParam

            return $result;
        };
    }
}
```

### Localized Number
```yaml
column_name:
    type: localized_number
    method: formatCurrency      # required
    context: []                 # optional
    context_resolver: @callable # optional
    divisor: some number # optional if you need to divide a numeric value by a number before rendering it
```
Using for format numbers using Oro\Bundle\LocaleBundle\Formatter\NumberFormatter on backend.

`method` - method from NumberFormatter that should be used for formatting
`context` - static arguments for method that will be called, starts from 2nd arg
`context_resolver` - callback that will resolve dynamic arguments for method that will be called, starts from 2nd arg
should be compatible with following declaration:
function (ResultRecordInterface $record, $value, NumberFormatter $formatter) {}

Example:
We would like to format currency, but currency code should be retrieved from current row
```yaml
column_name:
    type: localized_number
    method: formatCurrency
    context_resolver: staticClass::staticFunc
```
```php
class staticClass {
    public static function staticFunc()
        {
            return function (ResultRecordInterface $record, $value, NumberFormatter $formatter) {
                return [$record->getValue('currencyFieldInResultRow')];
            };
        }
}

// will call
// NumberFormatter->formatCurrency('value of column_name field', 'value of currencyFieldInResultRow field');
```

**Note:** _option `frontend_type` could be applied to formatter of any type, it will be used for formatting cell data on frontend_

Customization
-----------

To implement your own formatter you have to do following:

 - Develop class that implement PropertyInterface (also there is basic implementation in AbstractProperty)
 - Register you formatter as service tagged as { name:  oro_datagrid.extension.formatter.property, type: YOUR_TYPE }
