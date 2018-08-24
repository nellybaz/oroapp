define(function(require) {
    'use strict';

    var SubjectFieldView;
    var BaseView = require('oroui/js/app/views/base/view');
    require('jquery.select2');

    SubjectFieldView = BaseView.extend({
        /**
         * Read value from the field
         *
         * @return {string}
         */
        getValue: function() {
            return this.$el.val();
        },

        /**
         * Updates field's value
         *
         * @param {string} value
         */
        setValue: function(value) {
            this.$el.val(value).trigger('change');
        }
    });

    return SubjectFieldView;
});
