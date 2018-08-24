define(function(require) {
    'use strict';

    var TypeValueSwitcher;
    var $ = require('jquery');
    var _ = require('underscore');
    var BaseView = require('oroui/js/app/views/base/view');

    TypeValueSwitcher = BaseView.extend({
        /**
         * @property {Object}
         */
        $type: null,

        /**
         * @property {Object}
         */
        $amountDiscountValue: null,

        /**
         * @property {Object}
         */
        $percentDiscountValue: null,

        /**
         * @property {Object}
         */
        options: {
            type_selector: null,
            amount_discount_value_selector: null,
            percent_discount_value_selector: null,
            control_group_selector: '.control-group',
            amount_type_value: null,
            percent_type_value: null
        },

        /**
         * @property {Object}
         */
        requiredOptions: [
            'type_selector',
            'amount_discount_value_selector',
            'percent_discount_value_selector',
            'amount_type_value',
            'percent_type_value'
        ],

        /**
         * @param {Object} options
         */
        initialize: function(options) {
            this.options = $.extend(true, {}, this.options, options || {});
            var requiredMissed = this.requiredOptions.filter(_.bind(function(option) {
                return _.isUndefined(this.options[option]) || _.isNull(this.options[option]);
            }, this));
            if (requiredMissed.length) {
                throw new TypeError('Missing required option(s): ' + requiredMissed.join(', '));
            }

            var $el = this.options.el;
            this.$type = $el.find(this.options.type_selector);
            this.$amountDiscountValue = $el.find(this.options.amount_discount_value_selector);
            this.$percentDiscountValue = $el.find(this.options.percent_discount_value_selector);

            this.options.el.on('change', this.options.type_selector, _.bind(this.switchValues, this));
        },

        switchValues: function() {
            if (this.options.amount_type_value === this.$type.val()) {
                this.$amountDiscountValue.removeClass('hide');
                this.$amountDiscountValue.closest(this.options.control_group_selector).show();
                this.$percentDiscountValue.closest(this.options.control_group_selector).hide();
                this.$percentDiscountValue.attr('value', '');
            } else if (this.options.percent_type_value === this.$type.val()) {
                this.$percentDiscountValue.removeClass('hide');
                this.$percentDiscountValue.closest(this.options.control_group_selector).show();
                this.$amountDiscountValue.closest(this.options.control_group_selector).hide();
                this.$amountDiscountValue.attr('value', '');
            }
        },

        /**
         * @inheritDoc
         */
        dispose: function() {
            if (this.disposed) {
                return;
            }

            delete this.$type;
            delete this.$amountDiscountValue;
            delete this.$percentDiscountValue;
            delete this.requiredOptions;
            TypeValueSwitcher.__super__.dispose.call(this);
        }
    });

    return TypeValueSwitcher;
});
