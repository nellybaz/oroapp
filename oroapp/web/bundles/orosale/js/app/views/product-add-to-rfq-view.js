define(function(require) {
    'use strict';

    var ProductAddToRfqView;
    var BaseView = require('oroui/js/app/views/base/view');
    var ElementsHelper = require('orofrontend/js/app/elements-helper');
    var $ = require('jquery');
    var routing = require('routing');
    var mediator = require('oroui/js/mediator');
    var _ = require('underscore');

    ProductAddToRfqView = BaseView.extend(_.extend({}, ElementsHelper, {
        events: {
            'click': 'onClick'
        },

        dropdownWidget: null,

        initialize: function(options) {
            ProductAddToRfqView.__super__.initialize.apply(this, arguments);
            this.deferredInitializeCheck(options, ['productModel', 'dropdownWidget']);
        },

        deferredInitialize: function(options) {
            this.dropdownWidget = options.dropdownWidget;
            if (options.productModel) {
                this.model = options.productModel;
            }
        },

        dispose: function() {
            delete this.dropdownWidget;
            ProductAddToRfqView.__super__.dispose.apply(this, arguments);
        },

        onClick: function(e) {
            var $button = $(e.currentTarget);
            var productItems = {};

            if (!this.dropdownWidget.validateForm()) {
                return;
            }

            productItems[this.model.get('id')] = [{
                quantity: this.model.get('quantity'),
                unit: this.model.get('unit')
            }];
            var url = routing.generate($button.data('url'), {
                product_items: productItems
            });
            mediator.execute('showLoading');
            mediator.execute('redirectTo', {url: url}, {redirect: true});
        }
    }));

    return ProductAddToRfqView;
});
