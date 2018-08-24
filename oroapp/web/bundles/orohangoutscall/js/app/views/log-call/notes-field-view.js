define(function(require) {
    'use strict';

    var NotesFieldView;
    var _ = require('underscore');
    var BaseView = require('oroui/js/app/views/base/view');
    require('jquery.select2');

    NotesFieldView = BaseView.extend({
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
            this.$el.val(_.nl2br(value)).trigger('change');
        }
    });

    return NotesFieldView;
});
