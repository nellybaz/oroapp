define(['jquery', 'underscore'], function($, _) {
    'use strict';

    var InventoryStatus = function() {
        this.initialize.apply(this, arguments);
    };

    _.extend(InventoryStatus.prototype, {
        /**
         * @property {Grid}
         */
        datagrid: null,

        /**
         * @property {Object}
         */
        statusMetadata: null,

        /**
         * @property {Object}
         */
        options: {
            statusColumnName: 'inventory_status',
            productKey: 'productId'
        },

        /**
         * @param {Object} [options.grid] grid instance
         * @param {Object} [options.options] grid initialization options
         */
        initialize: function(options) {
            var self = this;

            self.datagrid = options.grid;
            self.statusMetadata = _.find(options.options.metadata.columns, function(column) {
                return column.name === self.options.statusColumnName;
            });

            self.datagrid.collection.on('reset', _.bind(self._reloadInventoryStatus, this));

            this._reloadInventoryStatus();
        },

        /**
         * Reload inventory statuses when one of them changes.
         */
        _reloadInventoryStatus: function() {
            var self = this;
            var statusColumn = self.options.statusColumnName;

            _.each(this.datagrid.collection.models, function(model) {
                self._initializeInventoryStatus(model, statusColumn);

                model.on('change:' + statusColumn, function(model, value) {
                    self._updateInventoryStatus(model, value);
                });
            });
        },

        /**
         * Initializes all inventory statuses with the correct label.
         * @param {Object} model
         * @param {string} statusColumn
         */
        _initializeInventoryStatus: function(model, statusColumn) {
            var self = this;
            var value = model.get(statusColumn);

            if (typeof value === 'string') {
                value = value.trim();
            }
            var columnValue = self.statusMetadata.choices[value];
            if (typeof columnValue !== 'undefined') {
                model.set(statusColumn, columnValue);
            }
        },

        /**
         * Update all inventory statuses with the same options.productkey as the model.
         * @param {Object} model
         * @param {string} value
         */
        _updateInventoryStatus: function(model, value) {
            var self = this;
            var columnValue = self.statusMetadata.choices[value];

            if (typeof columnValue !== 'undefined') {
                _.each(this.datagrid.body.rows, function(row) {
                    if (row.model.get(self.options.productKey) === model.get(self.options.productKey) &&
                        row.model.get(self.options.statusColumnName) !== columnValue
                    ) {
                        row.model.set(self.options.statusColumnName, columnValue);
                        row.render();
                    }
                });
            }
        }
    });

    return {
        /**
         * @param {jQuery.Deferred} deferred
         * @param {Object} options
         */
        init: function(deferred, options) {
            options.gridPromise.done(function(grid) {
                var update = new InventoryStatus({
                    'grid': grid,
                    'options': options
                });
                deferred.resolve(update);
            }).fail(function() {
                deferred.reject();
            });
        }
    };
});
