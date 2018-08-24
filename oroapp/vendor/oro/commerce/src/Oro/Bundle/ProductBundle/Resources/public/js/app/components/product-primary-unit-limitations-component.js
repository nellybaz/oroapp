/*jslint nomen:true*/
/*global define*/
define(function(require) {
    'use strict';

    var ProductPrimaryUnitLimitationsComponent;
    var $ = require('jquery');
    var _ = require('underscore');
    var BaseComponent = require('oroui/js/app/components/base/component');
    var mediator = require('oroui/js/mediator');

    ProductPrimaryUnitLimitationsComponent = BaseComponent.extend({
        /**
         * @property {Object}
         */
        options: {
            unitsAttribute: 'units',
            allUnitsAttribute: 'all_units',
            deleteMessage: 'oro.product.productunit.delete.confirmation',
            addButtonSelector: 'a.add-list-item',
            selectParent: '.oro-multiselect-holder',
            dataContent: '*[data-content]',
            unitSelect: 'select[name$="[unit]"]',
            hiddenUnitClass: 'hidden-unit',
            precisions: {},
            initialAdditionalUnits: {}
        },

        /**
         * @property {Object}
         */
        listen: {
            'product:precision:remove mediator': 'onAdditionalPrecisionsChange',
            'product:precision:add mediator': 'onAdditionalPrecisionsChange'
        },

        /**
         * @inheritDoc
         */
        initialize: function(options) {
            this.options = _.defaults(options || {}, this.options);
            this.$select = this.options._sourceElement.find(this.options.unitSelect);

            this.options._sourceElement
                .on('change', _.bind(this.onChange, this));
            this.saveInitialOptions();
            this.options._sourceElement.trigger('change');
            this.onAdditionalPrecisionsChange(this.options.initialAdditionalUnits);
        },

        /**
         * Handle change select
         */
        onChange: function() {
            this.$select.on('change', _.bind(this.onSelectChange, this));
            var option = this.$select.find('option:selected');
            var changes = {};
            changes.removed = this.getData() || {};
            this.saveData({});
            var storedData = this.getData();

            if (option.val() !== undefined) {
                storedData[option.val()] = option.text();
            } else {
                storedData = changes.removed;
            }
            this.saveData(storedData);
            changes.added = storedData;

            if (changes.added !== changes.removed) {
                this.triggerChangeEvent(changes);
            }
        },

        /**
         * Handle select change
         *
         * @param {jQuery.Event} e
         */
        onSelectChange: function(e) {
            var select = $(e.target);
            var option = select.find('option:selected');
            var value = this.options.precisions[option.val()];
            select.closest('tr').find('input[class="precision"]').val(value);
        },

        /**
         *  Handle changes in additional precisions
         */
        onAdditionalPrecisionsChange: function(e) {
            var additionalPrecisions = e;
            var precisions = this.getInitialOptions();
            _.each(additionalPrecisions, function(val, key) {
                delete precisions[key];
            });

            var options = this.$select.find('option');
            var selected = this.$select.find('option:selected');
            delete precisions[selected.val()];

            _.each(options, function(option) {
                if (option.value !== selected.val()) {
                    $(option).remove();
                }
            });
            var self = this;
            _.each(precisions, function(text, val) {
                self.$select.append($('<option></option>').val(val).text(text));
            });
            self.$select.find(selected.val()).selected(true).trigger('change');
        },

        /**
         * Return units from data attribute
         *
         * @returns {jQuery.Element}
         */
        getData: function() {
            return this.options._sourceElement.data(this.options.unitsAttribute) || {};
        },

        /**
         * Return initial full options from data attribute
         *
         * @returns {jQuery.Element}
         */
        getInitialOptions: function() {
            return _.clone(this.options._sourceElement.data(this.options.allUnitsAttribute) || {});
        },

        /**
         * Save data to data attribute
         *
         * @param {Object} data
         */
        saveData: function(data) {
            this.options._sourceElement.data(this.options.unitsAttribute, data);
        },

        /**
         * Save initial full select options to data attribute
         */
        saveInitialOptions: function() {
            var options = this.$select.find('option');
            var allUnits = {};
            _.each(options, function(option) {
                allUnits[option.value] = option.text;
            });
            this.options._sourceElement.data(this.options.allUnitsAttribute, allUnits);
        },

        /**
         * Trigger add event
         *
         * @param {Object} data
         */
        triggerChangeEvent: function(data) {
            mediator.trigger('product:primary:precision:change', data);
        },

        dispose: function() {
            if (this.disposed) {
                return;
            }
            if (this.confirm) {
                this.confirm
                    .off()
                    .remove();
            }

            this.options._sourceElement.off();
            this.$select.off('change');

            ProductPrimaryUnitLimitationsComponent.__super__.dispose.call(this);
        }
    });

    return ProductPrimaryUnitLimitationsComponent;
});
