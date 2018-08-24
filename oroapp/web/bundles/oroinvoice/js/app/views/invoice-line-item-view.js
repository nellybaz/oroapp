define(function(require) {
    'use strict';

    var LineItemView;
    var $ = require('jquery');
    var _ = require('underscore');
    var LineItemProductView = require('oroproduct/js/app/views/line-item-product-view');
    var ProductUnitComponent = require('oroproduct/js/app/components/product-unit-component');
    var TotalsListener = require('oropricing/js/app/listener/totals-listener');
    var NumberFormatter = require('orolocale/js/formatter/number');
    var mediator = require('oroui/js/mediator');
    var localeSettings = require('orolocale/js/locale-settings');

    /**
     * @export oroinvoice/js/app/views/line-item-view
     * @extends oroui.app.views.base.View
     * @class orob2invoice.app.views.LineItemView
     */
    LineItemView = LineItemProductView.extend({
        options: {
            priceTypes: {
                'BUNDLE': 20,
                'UNIT': 10
            },
            selectors: {
                productSelector: '.invoice-line-item-type-product [data-name="field__product"]',
                quantitySelector: '.invoice-line-item-quantity input',
                unitSelector: '.invoice-line-item-quantity select',
                productSku: '.invoice-line-item-sku .invoice-line-item-type-product',
                productType: '.invoice-line-item-type-product',
                freeFormType: '.invoice-line-item-type-free-form',
                totalPrice: '.invoice-line-item-total-price'
            },
            currency: localeSettings.defaults.currency
        },

        pricesComponent: null,

        /**
         * @inheritDoc
         */
        initialize: function(options) {
            this.options = _.defaults(options || {}, this.options);
            this.$el.on('click', '.removeLineItem', $.proxy(this._removeRow, this));
            mediator.on('update:currency', this._updateCurrency, this);

            LineItemView.__super__.initialize.apply(this, arguments);
        },

        /**
         * @inheritDoc
         */
        handleLayoutInit: function() {
            this.$fields = this.$el.find(':input[name]');

            this.fieldsByName = {};
            this.$fields.each(_.bind(function(i, field) {
                this.fieldsByName[this._formFieldName(field)] = $(field);
            }, this));

            this.initSubtotalListener();
            this.initUnitLoader();
            this.initTypeSwitcher();
            this.initProduct();
            this.initItemTotal();
            mediator.trigger('invoice-line-item:created', this.$el);

            LineItemView.__super__.handleLayoutInit.apply(this, arguments);
        },

        initSubtotalListener: function() {
            TotalsListener.listen([
                this.fieldsByName.product,
                this.fieldsByName.quantity,
                this.fieldsByName.productUnit,
                this.fieldsByName.priceValue,
                this.fieldsByName.priceType
            ]);
        },

        initUnitLoader: function(options) {
            var defaultOptions = {
                _sourceElement: this.$el,
                productSelector: this.options.selectors.productSelector,
                quantitySelector: this.options.selectors.quantitySelector,
                unitSelector: this.options.selectors.unitSelector,
                loadingMaskEnabled: false,
                dropQuantityOnLoad: false,
                defaultValues: this.options.freeFormUnits,
                model: this.model
            };

            this.subview('productUnitComponent', new ProductUnitComponent(_.extend({}, defaultOptions, options || {})));
        },

        initTypeSwitcher: function() {
            var $product = this.$el.find('div' + this.options.selectors.productType);
            var $freeForm = this.$el.find('div' + this.options.selectors.freeFormType);

            var showFreeFormType = function() {
                $product.hide();
                $freeForm.show();
            };

            var showProductType = function() {
                $freeForm.hide();
                $product.show();
            };

            $freeForm.find('a' + this.options.selectors.productType).click(_.bind(function() {
                showProductType();
                $freeForm.find(':input').val('').change();
            }, this));

            $product.find('a' + this.options.selectors.freeFormType).click(_.bind(function() {
                showFreeFormType();
                this.fieldsByName.product.inputWidget('val', '');
                this.fieldsByName.product.change();
            }, this));

            if (this.fieldsByName.freeFormProduct.val() !== '') {
                showFreeFormType();
            } else {
                showProductType();
            }
        },

        initProduct: function() {
            if (this.fieldsByName.product) {
                this.fieldsByName.product.change(_.bind(function() {
                    this._resetData();

                    var data = this.fieldsByName.product.inputWidget('data') || {};
                    this.$el.find(this.options.selectors.productSku).text(data.sku || null);
                }, this));
            }
        },

        initItemTotal: function() {
            this._setTotalPrice();

            this.fieldsByName.priceValue
                .add(this.fieldsByName.priceType)
                .add(this.fieldsByName.productUnit)
                .add(this.fieldsByName.quantity)
                .add(this.fieldsByName.priceCurrency)
                .on('change', $.proxy(this._setTotalPrice, this));
        },

        /**
         * @param {Object} field
         * @returns {String}
         */
        _formFieldName: function(field) {
            var name = '';
            var nameParts = field.name.replace(/.*\[[0-9]+\]/, '').replace(/[\[\]]/g, '_').split('_');
            var namePart;

            for (var i = 0, iMax = nameParts.length; i < iMax; i++) {
                namePart = nameParts[i];
                if (!namePart.length) {
                    continue;
                }
                if (name.length === 0) {
                    name += namePart;
                } else {
                    name += namePart[0].toUpperCase() + namePart.substr(1);
                }
            }
            return name;
        },

        _resetData: function() {
            if (this.fieldsByName.hasOwnProperty('quantity')) {
                this.fieldsByName.quantity.val(1);
            }
        },

        _updateCurrency: function(val) {
            this.options.currency = val;
            this.fieldsByName.priceCurrency.val(val);
            this.fieldsByName.priceCurrency.trigger('change');
        },

        _setTotalPrice: function() {
            var totalPrice;
            if (!this.fieldsByName.priceValue) {
                return;
            }

            totalPrice = +this.fieldsByName.priceValue.val();
            if (+this.fieldsByName.priceType.val() === this.options.priceTypes.UNIT) {
                totalPrice *= +this.fieldsByName.quantity.val();
            }

            this.$el.find(this.options.selectors.totalPrice)
                .text(NumberFormatter.formatCurrency(totalPrice, this.options.currency));
        },

        _removeRow: function() {
            this.$el.trigger('content:remove');
            this.remove();
        },

        /**
         * @inheritDoc
         */
        dispose: function() {
            if (this.disposed) {
                return;
            }

            this.$el.off('click', '.removeLineItem', $.proxy(this._removeRow, this));
            this.fieldsByName.priceValue.off('change', $.proxy(this._setTotalPrice, this));
            mediator.off(null, null, this);

            LineItemView.__super__.dispose.call(this);
        }
    });

    return LineItemView;
});
