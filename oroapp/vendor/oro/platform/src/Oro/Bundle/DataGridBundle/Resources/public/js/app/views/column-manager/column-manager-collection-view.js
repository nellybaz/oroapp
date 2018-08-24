define(function(require) {
    'use strict';

    var ColumnManagerCollectionView;
    var template = require('tpl!orodatagrid/templates/column-manager/column-manager-collection.html');
    var $ = require('jquery');
    var _ = require('underscore');
    var BaseCollectionView = require('oroui/js/app/views/base/collection-view');
    var ColumnFilterModel = require('orodatagrid/js/app/models/column-manager/column-filter-model');
    var ColumnManagerItemView = require('./column-manager-item-view');
    var module = require('module');
    var config = module.config();
    require('jquery-ui');

    config = _.extend({
        fallbackSelector: '.column-manager-no-columns'
    }, config);

    ColumnManagerCollectionView = BaseCollectionView.extend({
        animationDuration: 0,
        template: template,
        itemView: ColumnManagerItemView,

        className: 'dropdown-menu',
        listSelector: 'tbody',
        fallbackSelector: config.fallbackSelector,

        events: {
            'click tbody tr [data-role=moveUp]': 'onMoveUp',
            'click tbody tr [data-role=moveDown]': 'onMoveDown'
        },

        listen: {
            'change collection': 'filter',
            'visibilityChange': 'updateHeaderWidths',
            'layout:reposition mediator': 'updateHeaderWidths'
        },

        /**
         * Number that is used to normalize order value
         *
         * @type {number}
         */
        orderShift: 0,

        /**
         * @type {ColumnFilterModel}
         */
        filterModel: null,

        /**
         * Check if sorting enabled
         *
         * @type {boolean}
         */
        addSorting: true,

        /**
         * @inheritDoc
         */
        initialize: function(options) {
            _.extend(this, _.pick(options, ['orderShift', 'filterModel', 'addSorting']));
            if (!(this.filterModel instanceof ColumnFilterModel)) {
                throw new TypeError('Invalid required option "filterModel"');
            }

            options.filterer = _.bind(this.filterModel.filterer, this.filterModel);
            ColumnManagerCollectionView.__super__.initialize.apply(this, arguments);
        },

        /**
         * @inheritDoc
         */
        delegateListeners: function() {
            this.listenTo(this.filterModel, 'change', this.filter);
            return ColumnManagerCollectionView.__super__.delegateListeners.apply(this, arguments);
        },

        /**
         * @inheritDoc
         */
        render: function() {
            ColumnManagerCollectionView.__super__.render.apply(this, arguments);
            if (this.addSorting) {
                this.initSorting();
            }
            this.updateHeaderWidths();
            return this;
        },

        initItemView: function() {
            var itemView = ColumnManagerCollectionView.__super__.initItemView.apply(this, arguments);
            itemView.setFilterModel(this.filterModel);
            return itemView;
        },

        /**
         * Initializes sorting widget for root element
         *  - allows to reorder columns
         */
        initSorting: function() {
            var placeholder;
            this.$('tbody').sortable({
                cursor: 'move',
                delay: 50,
                revert: 10,
                axis: 'y',
                containment: this.$('tbody'),
                items: 'tr',
                tolerance: 'pointer',
                handle: '.handle',
                helper: function(e, ui) {
                    placeholder = $('<tr />', {'class': 'sortable-placeholder'});
                    ui.children().each(function() {
                        var width = $(this).width();
                        $(this).width(width);
                        placeholder.append(
                            $('<td />').append(
                                $('<div/>').width(width)
                            )
                        );
                    });
                    ui.parent().append(placeholder);
                    return ui;
                },
                stop: _.bind(function() {
                    placeholder.remove();
                    this.onReorder();
                }, this)
            }).disableSelection();
        },

        /**
         * Reorders columns elements (moves the element up)
         *
         * @param {jQuery.Event} e
         */
        onMoveUp: function(e) {
            var $elem = this.$(e.currentTarget).closest('tr');
            var $prev = $elem.prev();
            if ($prev.length) {
                $elem.insertBefore($prev);
                this.onReorder();
            }
        },

        /**
         * Reorders columns elements (moves the element down)
         *
         * @param {jQuery.Event} e
         */
        onMoveDown: function(e) {
            var $elem = this.$(e.currentTarget).closest('tr');
            var $next = $elem.next();
            if ($next.length) {
                $elem.insertAfter($next);
                this.onReorder();
            }
        },

        /**
         * Handles sorting change event and update order attribute for each column
         */
        onReorder: function() {
            var reordered = false;
            var columnsElements = this.$('tbody tr').toArray();

            _.each(this.subviews, function(view) {
                var order = columnsElements.indexOf(view.el) + this.orderShift;
                if (view.model.get('order') !== order) {
                    reordered = true;
                    view.model.set('order', order);
                }
            }, this);

            if (reordered) {
                this.collection.sort();
                this.trigger('reordered');
            }
        },

        /**
         * @inheritDoc
         */
        toggleFallback: function() {
            var hasVisibleItems = Boolean(this.visibleItems.length);
            // to hide table's header once no visible data
            this.$('[data-role="column-manager-table-header-wrapper"], [data-role="column-manager-table-wrapper"]')
                .toggle(hasVisibleItems);
            ColumnManagerCollectionView.__super__.toggleFallback.apply(this, arguments);
        },

        updateHeaderWidths: function() {
            var i;
            var clientWidth;
            var $wrapper = this.$('[data-role="column-manager-table-wrapper"]');
            var $table = $wrapper.children('table');
            var tableThs = $table.find('thead th');
            var headerThs = this.$('[data-role="column-manager-table-header-wrapper"] tr th');
            $wrapper.css('padding-right', 0);
            clientWidth = $wrapper[0].clientWidth;
            if (clientWidth > 0) {
                $wrapper.css('padding-right', $table.width() - $wrapper[0].clientWidth + 'px');
            }
            for (i = 0; i < tableThs.length - 1; i += 1) {
                $(headerThs[i]).width($(tableThs[i]).width());
            }
        }
    });

    return ColumnManagerCollectionView;
});
