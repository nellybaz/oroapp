define(function(require) {
    'use strict';

    var BaseProductVariantsView;
    var BaseView = require('oroui/js/app/views/base/view');
    var ElementsHelper = require('orofrontend/js/app/elements-helper');
    var LoadingMaskView = require('oroui/js/app/views/loading-mask-view');
    var $ = require('jquery');
    var _ = require('underscore');

    BaseProductVariantsView = BaseView.extend(_.extend({}, ElementsHelper, {
        options: {
            showLoading: true
        },

        elements: {
            variantForm: '[data-name="form__oro-product-product-variant-frontend-variant-field"]',
            variantFields: ['variantForm', ':input[data-name]']
        },

        elementsEvents: {},

        initialize: function(options) {
            this.options = $.extend(true, {}, this.options, _.pick(options, _.keys(this.options)));
            BaseProductVariantsView.__super__.initialize.apply(this, arguments);

            this.initModel(options);
            this.initializeElements(options);
        },

        initModel: function(options) {
            if (options.productModel) {
                this.model = options.productModel;
            }
        },

        updateProductInfo: function(id) {
            this.model.set('id', id ? parseInt(id, 10) : 0);
        },

        showLoading: function() {
            if (!this.options.showLoading) {
                return;
            }
            var $container = this.$el.closest('[data-role="layout-subtree-loading-container"]');
            if (!$container.length) {
                $container = this.$el;
            }
            this.subview('loadingMask', new LoadingMaskView({
                container: $container
            }));
            this.subview('loadingMask').show();
        },

        hideLoading: function() {
            if (!this.options.showLoading) {
                return;
            }
            this.removeSubview('loadingMask');
        },

        dispose: function() {
            this.disposeElements();
            BaseProductVariantsView.__super__.dispose.apply(this, arguments);
        }
    }));

    return BaseProductVariantsView;
});
