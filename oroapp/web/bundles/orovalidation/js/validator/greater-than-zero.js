/*global define*/
define([
    'module',
    'underscore',
    'orotranslation/js/translator',
    'orolocale/js/formatter/number'
], function(module, _, __, numberFormatter) {
    'use strict';

    var config = module.config();

    var defaultParam = {
        message: 'This value should be greater than {{ compared_value }}.'
    };

    /**
     * @export oroform/js/validator/range
     */
    return [
        'Oro\\Bundle\\ValidationBundle\\Validator\\Constraints\\GreaterThanZero',
        function(value, element) {
            value = numberFormatter.unformat(value);
            return this.optional(element) || value > 0;
        },
        function(param, element) {
            var value = this.elementValue(element);
            var placeholders = {compared_value: 0};
            param = _.extend({}, defaultParam, param, config);
            placeholders.value = value;
            return __(param.message, placeholders);
        }
    ];
});
