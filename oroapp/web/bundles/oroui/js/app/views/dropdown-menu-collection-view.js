define(function(require) {
    'use strict';

    var DropdownMenuCollectionView;
    var _ = require('underscore');
    var __ = require('orotranslation/js/translator');
    var BaseCollectionView = require('oroui/js/app/views/base/collection-view');
    var BaseView = require('oroui/js/app/views/base/view');

    /**
     * DropdownMenuCollectionView renders dropdown element based on passed items collection
     *
     * Supports Chaplin's CollectionView blocks "list", "loading" and "fallback"
     *
     * Basic usage:
     * ```javascript
     * // ...
     * var itemsCollection = new Collection([
     *     {value: '3', value_text: 'Three'},
     *     {value: '5', value_text: 'Five'}
     * ]);
     *
     * var dropdownMenu = new DropdownMenuCollectionView({
     *     collection: itemsCollection,
     *     loadingText: __('Searching...'),
     *     fallbackText: __('No items found'),
     *     keysMap: {
     *         id: 'value',
     *         text: 'value_text',
     *     }
     * });
     *
     * this.$el.append(dropdownMenu.$el);
     *
     * // ...
     * ```
     *
     * @class
     * @augment BaseCollectionView
     * @exports DropdownMenuView
     */
    DropdownMenuCollectionView = BaseCollectionView.extend({
        tagName: 'div',
        className: 'dropdown-menu dropdown-menu-collection',
        animationDuration: 0,
        listSelector: '[data-name="list"]',
        loadingSelector: '[data-name="loading"]',
        fallbackSelector: '[data-name="fallback"]',
        dropdownMenuOptions: null,

        /**
         * @type {string}
         */
        loadingText: __('Loading...'),

        /**
         * @type {string}
         */
        fallbackText: __('No matches found'),

        events: {
            'click li': 'onItemClick'
        },

        listen: {
            'sync collection': 'onCollectionSync',
            'syncStateChange collection': 'onCollectionSyncStateChange'
        },

        template: _.template([
            '<div class="dropdown-menu-collection__fallback" data-name="fallback"><%= fallbackText %></div>',
            '<div class="dropdown-menu-collection__loading" data-name="loading"><%= loadingText %></div>',
            '<ul class="dropdown-menu-collection__list" data-name="list"></ul>'
        ].join('')),

        initialize: function(options) {
            _.extend(this, _.pick(options, ['loadingText', 'fallbackText', 'keysMap', 'dropdownMenuOptions']));
            if (options.keysMap) {
                var keysMap = options.keysMap;
                var ItemView = this.itemView = this.itemView.extend({
                    getTemplateData: function() {
                        var data = ItemView.__super__.getTemplateData.call(this);
                        data.id = keysMap.id && data[keysMap.id];
                        data.text = keysMap.text && data[keysMap.text];
                        return data;
                    }
                });
            }
            DropdownMenuCollectionView.__super__.initialize.call(this, options);
        },

        render: function() {
            DropdownMenuCollectionView.__super__.render.call(this);
            if (this.dropdownMenuOptions) {
                this.$el.data('options', this.dropdownMenuOptions);
            }
            return this;
        },

        getTemplateData: function() {
            var data = DropdownMenuCollectionView.__super__.getTemplateData.call(this);
            _.extend(data, _.pick(this, ['loadingText', 'fallbackText']));
            return data;
        },

        itemView: BaseView.extend({
            tagName: 'li',
            template: _.template('<a href="#" data-value="<%= id %>"><%= text %></a>')
        }),

        onItemClick: function(e) {
            e.preventDefault();
            e.stopPropagation();
            var subview = _.find(this.subviews, function(subview) {
                return subview.el === e.currentTarget;
            });
            if (subview) {
                this.trigger('selected', subview.model.toJSON());
            }
        },

        onCollectionSync: function() {
            this.$el.trigger('content:changed');
        },

        onCollectionSyncStateChange: function() {
            _.defer(_.bind(function() {
                this.$el.trigger('content:changed');
            }, this));
        }
    });

    return DropdownMenuCollectionView;
});
