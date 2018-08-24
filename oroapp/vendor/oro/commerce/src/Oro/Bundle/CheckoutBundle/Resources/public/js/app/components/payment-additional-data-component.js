/** @lends PaymentAdditionalDataComponent */
define(function(require) {
    'use strict';

    var PaymentAdditionalDataComponent;
    var $ = require('jquery');
    var mediator = require('oroui/js/mediator');
    var BaseComponent = require('oroui/js/app/components/base/component');

    PaymentAdditionalDataComponent = BaseComponent.extend({
        /**
         * @property {jQuery}
         */
        $el: null,

        /**
         * @property {Object}
         */
        selectors: {
            additionalData: '[name$="[additional_data]"]'
        },

        /**
         * @inheritDoc
         */
        initialize: function(options) {
            this.$el = $(options._sourceElement);

            mediator.on('checkout:payment:additional-data:get', this.onGetAdditionalData, this);
            mediator.on('checkout:payment:additional-data:set', this.onSetAdditionalData, this);
        },

        /**
         * @param {string} additionalData
         */
        onSetAdditionalData: function(additionalData) {
            this.getAdditionalDataElement().val(additionalData);
        },

        /**
         * @param {Object} object
         */
        onGetAdditionalData: function(object) {
            object.additionalData = this.getAdditionalDataElement().val();
        },

        /**
         * @returns {jQuery|HTMLElement}
         */
        getAdditionalDataElement: function() {
            return this.$el.find(this.selectors.additionalData);
        },

        /**
         * @inheritDoc
         */
        dispose: function() {
            if (this.disposed) {
                return;
            }

            mediator.off('checkout:payment:additional-data:get', this.onGetAdditionalData, this);
            mediator.off('checkout:payment:additional-data:set', this.onSetAdditionalData, this);

            PaymentAdditionalDataComponent.__super__.dispose.call(this);
        }
    });

    return PaymentAdditionalDataComponent;
});
