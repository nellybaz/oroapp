define(function(require) {
    'use strict';

    var DurationFieldView;
    var numberFormatter = require('orolocale/js/formatter/number');
    var BaseView = require('oroui/js/app/views/base/view');

    DurationFieldView = BaseView.extend({
        getValue: function() {
            var value = this.$el.val();
            return numberFormatter.unformatDuration(value);
        },

        setValue: function(value) {
            var duration = numberFormatter.formatDuration(value);
            this.$el.val(duration).trigger('change');
        }
    });

    return DurationFieldView;
});
