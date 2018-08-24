define(function(require) {
    'use strict';

    var OrderLineItemAppliedDiscountsComponent;
    var _ = require('underscore');
    var mediator = require('oroui/js/mediator');
    var BaseComponent = require('oroui/js/app/components/base/component');
    var LoadingMaskView = require('oroui/js/app/views/loading-mask-view');
    var NumberFormatter = require('orolocale/js/formatter/number');

    /**
     * @export orotax/js/app/components/order-line-item-discounts-no-tax-component
     * @extends oroui.app.components.base.Component
     * @class orotax.app.components.OrderLineItemAppliedDiscountsComponent
     */
    OrderLineItemAppliedDiscountsComponent = BaseComponent.extend({
        /**
         * @property {Object}
         */
        options: {
            selectors: {
                rowTotalAfterDiscount: '.applied-discount-row-total-after-discount',
                appliedDiscountsAmount: '.applied-discount-row-total-discount-amount'
            }
        },

        /**
         * @property {LoadingMaskView}
         */
        loadingMaskView: null,

        /**
         * @inheritDoc
         */
        initialize: function(options) {
            this.options = _.defaults(options || {}, this.options);

            mediator.on('entry-point:order:load:before', this.showLoadingMask, this);
            mediator.on('entry-point:order:load', this.setDiscounts, this);
            mediator.on('entry-point:order:load:after', this.hideLoadingMask, this);

            this.loadingMaskView = new LoadingMaskView({container: this.options._sourceElement});
        },

        showLoadingMask: function() {
            this.loadingMaskView.show();
        },

        hideLoadingMask: function() {
            this.loadingMaskView.hide();
        },

        /**
         * @param {Object} response
         */
        setDiscounts: function(response) {
            var itemId =  this.options._sourceElement.closest('tr.order-line-item').index();
            if (!_.has(response.appliedDiscounts, itemId)) {
                return;
            }
            var discounts = response.appliedDiscounts[itemId];
            var appliedDiscountsAmount = NumberFormatter.formatCurrency(
                discounts.appliedDiscountsAmount,
                discounts.currency
            );
            var rowTotalAfterDiscount = NumberFormatter.formatCurrency(
                discounts.rowTotalAfterDiscount,
                discounts.currency
            );
            this.options._sourceElement
                .find(this.options.selectors.appliedDiscountsAmount)
                .text(appliedDiscountsAmount);
            this.options._sourceElement
                .find(this.options.selectors.rowTotalAfterDiscount)
                .text(rowTotalAfterDiscount);
        },

        /**
         * @inheritDoc
         */
        dispose: function() {
            if (this.disposed) {
                return;
            }

            mediator.off('entry-point:order:load:before', this.showLoadingMask, this);
            mediator.off('entry-point:order:load', this.setDiscounts, this);
            mediator.off('entry-point:order:load:after', this.hideLoadingMask, this);

            OrderLineItemAppliedDiscountsComponent.__super__.dispose.call(this);
        }
    });

    return OrderLineItemAppliedDiscountsComponent;
});
