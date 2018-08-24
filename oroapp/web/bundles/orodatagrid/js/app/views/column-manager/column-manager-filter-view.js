define(function(require) {
    'use strict';

    var ColumnManagerFilterView;
    var template = require('tpl!orodatagrid/templates/column-manager/column-manager-filter.html');
    var _ = require('underscore');
    var BaseView = require('oroui/js/app/views/base/view');

    ColumnManagerFilterView = BaseView.extend({
        template: template,
        autoRender: true,
        events: {
            'keyup [data-role="column-manager-search"]': 'onSearch',
            'change [data-role="column-manager-search"]': 'onSearch',
            'paste [data-role="column-manager-search"]': 'onSearch',
            'click [data-role="column-manager-clear-search"]': 'onClearSearch',
            'click [data-role="column-manager-show-all"]': 'onShowAll',
            'click [data-role="column-manager-show-selected"]': 'onShowSelected'
        },

        listen: {
            'change model': 'updateView'
        },

        /**
         * @inheritDoc
         */
        initialize: function(options) {
            this.onSearch = _.debounce(this.onSearch, 100);
            ColumnManagerFilterView.__super__.initialize.apply(this, arguments);
        },

        updateView: function() {
            var search = this.model.get('search');
            var renderable = Boolean(this.model.get('renderable'));
            this.$('[data-role="column-manager-search"]').val(search);
            this.$('[datagrid-manager-search]').toggleClass('empty', search.length === 0);
            this.$('[data-role="column-manager-show-all"]').toggleClass('active', !renderable);
            this.$('[data-role="column-manager-show-selected"]').toggleClass('active', renderable);
        },

        onSearch: function(e) {
            this.model.set('search', e.currentTarget.value);
        },

        onClearSearch: function(e) {
            e.preventDefault();
            e.stopPropagation();
            this.$('[data-role="column-manager-search"]').focus();
            this.model.set('search', '');
        },

        onShowAll: function(e) {
            e.preventDefault();
            e.stopPropagation();
            this.model.set('renderable', false);
        },

        onShowSelected: function(e) {
            e.preventDefault();
            e.stopPropagation();
            this.model.set('renderable', true);
        }
    });

    return ColumnManagerFilterView;
});
