define(function(require) {
    'use strict';

    var SelectedProductGridSubComponent;
    var BaseComponent = require('oroui/js/app/components/base/component');
    var _ = require('underscore');
    var $ = require('jquery');
    var mediator = require('oroui/js/mediator');
    var routing = require('routing');

    SelectedProductGridSubComponent = BaseComponent.extend({
        /**
         * @property {Object}
         */
        options: {
            applyQueryEventName: null,
            excludedControlsBlockAlias: null,
            includedControlsBlockAlias: null,
            excludedProductsGridName: null,
            includedProductsGridName: null,
            wait: 100,
            highlightColor: '#f1f7db',
            selectors: {
                excluded: null,
                included: null,
                tabFiltered: '[data-role="tab-filtered"]',
                tabExcluded: '[data-role="tab-excluded"]',
                tabIncluded: '[data-role="tab-included"]',
                counter: '[data-role="counter"]'
            },
            grids: [
                {
                    'name': 'product-collection-grid',
                    'type': 'filtered'
                },
                {
                    'name': 'product-collection-included-products-grid',
                    'type': 'included'
                },
                {
                    'name': 'product-collection-excluded-products-grid',
                    'type': 'excluded'
                }
            ],
            counterRoute: 'oro_product_datagrid_count_get'
        },

        /**
         * @property {Object}
         */
        requiredOptions: [
            'applyQueryEventName',
            'excludedControlsBlockAlias',
            'includedControlsBlockAlias',
            'excludedProductsGridName',
            'includedProductsGridName'
        ],

        /**
         * @property {String}
         */
        namespace: null,

        /**
         * @property {Function}
         */
        reloadMainGrid: null,

        /**
         * @property {Object}
         */
        listen: {
            'grid_load:complete mediator': 'onGridLoadComplete'
        },

        initialize: function(options) {
            this.options = $.extend(true, {}, this.options, options || {});
            this._checkOptions();

            this.$excluded = this.options._sourceElement.find(this.options.selectors.excluded);
            this.$included = this.options._sourceElement.find(this.options.selectors.included);

            this._initializeTabElements();

            mediator.on('grid-sidebar:load:' + this.options.excludedControlsBlockAlias, this.refreshExcludedGrid, this);
            mediator.on('grid-sidebar:load:' + this.options.includedControlsBlockAlias, this.refreshIncludedGrid, this);
            mediator.on(this.options.applyQueryEventName, this.onUpdateFilteredGrid, this);
            this.$excluded.on(
                'change' + this.eventNamespace(),
                _.throttle(_.bind(this.onChangeExcluded, this), this.options.wait)
            );
            this.$included.on(
                'change' + this.eventNamespace(),
                _.throttle(_.bind(this.onChangeIncluded, this), this.options.wait)
            );

            this.reloadMainGrid = _.debounce(_.bind(this.triggerApplyQueryEvent, this), this.options.wait);
        },

        _initializeTabElements: function() {
            this.tabs = {
                filtered: {
                    tab: this.options._sourceElement.find(this.options.selectors.tabFiltered),
                    loadCounter: _.debounce(_.bind(this._loadCounter, this), this.options.wait),
                    request: null,
                    update: 0
                },
                included: {
                    tab: this.options._sourceElement.find(this.options.selectors.tabIncluded),
                    loadCounter: _.debounce(_.bind(this._loadCounter, this), this.options.wait),
                    request: null,
                    update: 0
                },
                excluded: {
                    tab: this.options._sourceElement.find(this.options.selectors.tabExcluded),
                    loadCounter: _.debounce(_.bind(this._loadCounter, this), this.options.wait),
                    request: null,
                    update: 0
                }
            };

            this.tabs.filtered.counter = this.tabs.filtered.tab.find(this.options.selectors.counter);
            this.tabs.excluded.counter = this.tabs.excluded.tab.find(this.options.selectors.counter);
            this.tabs.included.counter = this.tabs.included.tab.find(this.options.selectors.counter);
        },

        /**
         * @param {Object} collection
         * @param {Object} gridElement
         */
        onGridLoadComplete: function(collection, gridElement) {
            var type = this._getGridType(collection.inputName);
            if (!_.isUndefined(type) && this.tabs[type].update > 0) {
                var foundGrid = this.options._sourceElement.find(gridElement);
                if (foundGrid.length) {
                    this.tabs[type].loadCounter(collection, type);
                }
            }
        },

        /**
         * @param {String} gridName
         * @returns {String|undefined}
         * @private
         */
        _getGridType: function(gridName) {
            for (var i = 0; i < this.options.grids.length; i++) {
                if (gridName.indexOf(this.options.grids[i].name) !== -1) {
                    return this.options.grids[i].type;
                }
            }

            return undefined;
        },

        /**
         * @param {Object} collection
         * @param {String} type
         * @private
         */
        _loadCounter: function(collection, type) {
            var tabData = this.tabs[type];
            var originalUrl = collection.url;
            var query = originalUrl.substring(originalUrl.indexOf('?'), originalUrl.length);
            var url = routing.generate(this.options.counterRoute, {'gridName': collection.inputName});

            if (tabData.request) {
                tabData.request.abort();
            }
            tabData.request = $.getJSON(
                url + query,
                _.bind(tabData.counter.html, tabData.counter)
            );
            tabData.request
                .done(
                    _.bind(function() {
                        tabData.tab.effect('highlight', {'color': this.options.highlightColor}, 1000);
                    }, this)
                )
                .always(
                    function() {
                        tabData.update--;
                        tabData.request = null;
                    }
                );
        },

        /**
         * @return {String}
         */
        eventNamespace: function() {
            if (this.namespace === null) {
                this.namespace = _.uniqueId('.selectedProductsOnChange');
            }

            return this.namespace;
        },

        /**
         * @private
         */
        _checkOptions: function() {
            var requiredMissed = _.filter(this.requiredOptions, _.bind(function(option) {
                return _.isUndefined(this.options[option]);
            }, this));
            if (requiredMissed.length) {
                throw new TypeError('Missing required option(s): ' + requiredMissed.join(', '));
            }

            var requiredSelectors = [];
            _.each(this.options.selectors, function(selector, selectorName) {
                if (!selector) {
                    requiredSelectors.push(selectorName);
                }
            });
            if (requiredSelectors.length) {
                throw new TypeError('Missing required selectors(s): ' + requiredSelectors.join(', '));
            }
        },

        onChangeExcluded: function() {
            this.refreshExcludedGrid(true);
            this.reloadMainGrid();
        },

        /**
         * @param {Boolean} reload
         */
        refreshExcludedGrid: function(reload) {
            if (reload === true) {
                this.tabs.excluded.update++;
            }
            this._refreshGrid(
                this.options.excludedControlsBlockAlias,
                this.options.excludedProductsGridName,
                this.$excluded.val(),
                reload
            );
        },

        onChangeIncluded: function() {
            this.refreshIncludedGrid(true);
            this.reloadMainGrid();
        },

        /**
         * @param {Boolean} reload
         */
        refreshIncludedGrid: function(reload) {
            if (reload === true) {
                this.tabs.included.update++;
            }
            this._refreshGrid(
                this.options.includedControlsBlockAlias,
                this.options.includedProductsGridName,
                this.$included.val(),
                reload
            );
        },

        triggerApplyQueryEvent: function() {
            mediator.trigger(this.options.applyQueryEventName);
        },

        onUpdateFilteredGrid: function() {
            this.tabs.filtered.update++;
        },

        /**
         * @param {String} controlsBlockAlias
         * @param {String} gridName
         * @param {String} value
         * @param {Boolean} reload
         * @private
         */
        _refreshGrid: function(controlsBlockAlias, gridName, value, reload) {
            var parameters = {
                updateUrl: false,
                reload: reload,
                params: {}
            };
            parameters.params[gridName] = {selectedProducts: value};

            mediator.trigger('grid-sidebar:change:' + controlsBlockAlias, parameters);
        },

        dispose: function() {
            if (this.disposed) {
                return;
            }

            mediator.off(null, null, this);
            this.$excluded.off(this.eventNamespace());
            this.$included.off(this.eventNamespace());
        }
    });

    return SelectedProductGridSubComponent;
});
