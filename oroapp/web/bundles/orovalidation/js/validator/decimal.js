/*global define*/
define([
    'underscore', 'oroform/js/validator/regex', 'orolocale/js/locale-settings'
], function(_, regexConstraint, localeSettings) {
    'use strict';

    var options = localeSettings.getNumberFormats('decimal');
    var groupingSeparator = options.grouping_separator_symbol;
    var decimalSeparator = options.decimal_separator_symbol;

    return [
        'Oro\\Bundle\\ValidationBundle\\Validator\\Constraints\\Decimal',
        function(value, element, param) {
            param.pattern = '/^[0-9\\+\\-\\' + groupingSeparator + '\\' + decimalSeparator + ']*$/';
            return regexConstraint[1].call(this, value, element, param);
        },
        regexConstraint[2]
    ];
});
