/*jslint nomen:true*/
/*global define*/
define(function(require) {
    'use strict';

    var ProductUnitPrecisionLimitationsComponent;
    var $ = require('jquery');
    var _ = require('underscore');
    var BaseComponent = require('oroui/js/app/components/base/component');
    var __ = require('orotranslation/js/translator');

    ProductUnitPrecisionLimitationsComponent = BaseComponent.extend({
        /**
         * @property {Object}
         */
        options: {
            selectSelector: 'select[name^="oro_product[prices]"][name$="[unit]"]',
            unitsAttribute: 'units',
            unitRemovedSuffix: __('oro.product.productunit.removed.suffix')
        },

        /**
         * @property {Object}
         */
        listen: {
            'product:precision:remove mediator': 'onChange',
            'product:precision:add mediator': 'onChange',
            'product:primary:precision:change mediator': 'onChange'
        },

        /**
         * @inheritDoc
         */
        initialize: function(options) {
            this.options = _.defaults(options || {}, this.options);

            this.options._sourceElement
                .on('content:changed', _.bind(this.onChange, this));

            this.options._sourceElement.trigger('content:changed');
        },

        /**
         * Change options in selects
         */
        onChange: function() {
            var self = this;
            var units = this.getUnits();

            _.each(this.getSelects(), function(select) {
                var $select = $(select);
                var clearChangeRequired = self.clearOptions(units, $select);
                var addChangeRequired = self.addOptions(units, $select);
                if (clearChangeRequired || addChangeRequired) {
                    $select.trigger('change');
                }
            });
        },

        /**
         * Clear options from selects
         *
         * @param {Array} units
         * @param {jQuery.Element} $select
         *
         * @return {Boolean}
         */
        clearOptions: function(units, $select) {
            var updateRequired = false;
            var self = this;

            _.each($select.find('option'), function(option) {
                if (!option.value) {
                    return;
                }

                var $option = $(option);
                if (!units.hasOwnProperty(option.value)) {
                    if (option.selected !== true) {
                        $option.remove();
                    } else if (option.text.indexOf(' - ') < 0) {
                        $option.text($option.text() + ' - ' + self.options.unitRemovedSuffix);
                    }

                    updateRequired = true;
                }
            });

            return updateRequired;
        },

        /**
         * Add options based on units configuration
         *
         * @param {Array} units
         * @param {jQuery.Element} $select
         *
         * @return {Boolean}
         */
        addOptions: function(units, $select) {
            var updateRequired = false;
            var emptyOption = $select.find('option[value=""]');

            if (_.isEmpty(units)) {
                emptyOption.show();
            } else {
                emptyOption.hide();
            }

            _.each($select.find('option:contains( - )'), function(option) {
                if (units.hasOwnProperty(option.value)) {
                    var oldText = option.text;
                    var newText = oldText.substring(0, oldText.indexOf(' - '));
                    $(option).text(newText);
                    $select.closest('.oro-multiselect-holder').find('.validation-failed').hide();
                    updateRequired = true;
                }
            });

            _.each(units, function(text, value) {
                if (!$select.find('option[value="' + value + '"]').length) {
                    $select.append('<option value="' + value + '">' + text + '</option>');
                    updateRequired = true;
                }
            });

            if ($select.val() === '' && !_.isEmpty(units)) {
                var value = _.keys(units)[0];
                $select.val(value);
                updateRequired = true;
            }

            return updateRequired;
        },

        /**
         * Return selects to update
         *
         * @returns {jQuery.Element}
         */
        getSelects: function() {
            return this.options._sourceElement.find(this.options.selectSelector);
        },

        /**
         * Return units from data attribute
         *
         * @returns {Object}
         */
        getUnits: function() {
            var units = {};
            var attribute = this.options.unitsAttribute;
            _.each($(':data(' + attribute + ')'), function(container) {
                var unit = $(container).data(attribute) || {};
                _.each(unit, function(val, key) {
                    units[key] = val;
                });
            });

            return units;
        },

        /**
         * Return units from data attribute
         *
         * @returns {Object}
         */
        getUnitsWithPrices: function() {
            var unitsWithPrice = {};
            _.each(this.getSelects(), function(select) {
                var selected = $(select).find('option:selected');
                unitsWithPrice[selected.val()] = selected.text();
            });

            return unitsWithPrice;
        },

        dispose: function() {
            if (this.disposed) {
                return;
            }

            this.options._sourceElement.off();

            ProductUnitPrecisionLimitationsComponent.__super__.dispose.call(this);
        }
    });

    return ProductUnitPrecisionLimitationsComponent;
});
