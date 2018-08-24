define(function(require) {
    'use strict';

    var CallDatetimeFieldView;
    var moment = require('moment');
    var datetimeFormatter = require('orolocale/js/formatter/datetime');
    var BaseView = require('oroui/js/app/views/base/view');

    CallDatetimeFieldView = BaseView.extend({
        /**
         * Read value from the field and returns its JSON format
         *
         * @return {string}
         */
        getValue: function() {
            var value = this.$el.val();
            return moment(value).toJSON();
        },

        /**
         * Converts passed datetime value into backend format and updates the field
         *
         * @param {string} value
         */
        setValue: function(value) {
            value = moment(value).utc().format(datetimeFormatter.backendFormats.datetime);
            this.$el.val(value).trigger('change');
        }
    });

    return CallDatetimeFieldView;
});
