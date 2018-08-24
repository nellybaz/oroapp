define(function(require) {
    'use strict';

    var CheckboxInputWidget;
    var $ = require('jquery');
    var _ = require('underscore');
    var AbstractInputWidget = require('oroui/js/app/views/input-widget/abstract');

    CheckboxInputWidget = AbstractInputWidget.extend({
        widgetFunction: function() {
            this.container().on('keydown keypress', _.bind(this._handleEnterPress, this));
            this.$el.on('change', _.bind(this._handleChange, this));
        },

        _handleEnterPress: function(event) {
            if (event.which === 32) {
                event.preventDefault();
                this.$el.trigger('click');
            }
        },

        _handleChange: function() {
            var $content = $('[data-checkbox-triggered-content]');
            if (this.$el.prop('checked')) {
                this._on();
                $content.show();
            } else {
                this._off();
                $content.hide();
            }
        },

        _on: function() {
            this.$el.prop('checked', true);
            this.$el.parent().addClass('checked');
        },

        _off: function() {
            this.$el.prop('checked', false);
            this.$el.parent().removeClass('checked');
        },

        findContainer: function() {
            return this.$el.closest('label');
        }
    });

    return CheckboxInputWidget;
});
