define(function(require) {
    'use strict';

    var TotalsComponent;
    var mediator = require('oroui/js/mediator');
    var _ = require('underscore');
    var BaseComponent = require('oropricing/js/app/components/totals-component');
    var LoadingMaskView = require('oroui/js/app/views/loading-mask-view');

    /**
     * @export oroorder/js/app/components/totals-component
     * @extends oropricing.app.components.TotalsComponent
     * @class oroorder.app.components.TotalsComponent
     */
    TotalsComponent = BaseComponent.extend({

        /**
         * @property {Object}
         */
        currentTotals: {},

        /**
         * @inheritDoc
         */
        initialize: function(options) {
            this.options = _.defaults(options || {}, this.options);
            this.currentTotals = this._getDefaultTotals();

            mediator.on('entry-point:order:load:before', this.showLoadingMask, this);
            mediator.on('entry-point:order:load', this.setTotals, this);
            mediator.on('entry-point:order:load:after', this.hideLoadingMask, this);

            mediator.on('line-items-totals:update', this.updateTotals, this);
            mediator.on('shipping-cost:updated', this.setTotals, this);
            mediator.on('order:totals:get:current', this.getCurrentTotals, this);

            this.$totals = this.options._sourceElement.find(this.options.selectors.totals);

            this.resolveTemplates();

            this.loadingMaskView = new LoadingMaskView({container: this.options._sourceElement});

            this.setTotals(options);
        },

        _getDefaultTotals: function() {
            return {totals: {total: {}, subtotals: {}}};
        },

        /**
         * @param {Object} data
         */
        getCurrentTotals: function(data) {
            data.result = this.currentTotals;
        },

        /**
         * @param {Object} data
         */
        setTotals: function(data) {
            this.currentTotals = _.defaults(data, this._getDefaultTotals()).totals;

            mediator.trigger('entry-point:order:trigger:totals', this.currentTotals);

            TotalsComponent.__super__.triggerTotalsUpdateEvent.call(this, data.totals);

            this.render(this.currentTotals);
        },

        /**
         * @inheritDoc
         */
        updateTotals: function() {
            mediator.trigger('entry-point:order:trigger');
        },

        /**
         * @inheritDoc
         */
        dispose: function() {
            if (this.disposed) {
                return;
            }

            mediator.off('entry-point:order:load:before', this.showLoadingMask, this);
            mediator.off('entry-point:order:load', this.setTotals, this);
            mediator.off('entry-point:order:load:after', this.hideLoadingMask, this);

            TotalsComponent.__super__.dispose.call(this);
        }
    });

    return TotalsComponent;
});
