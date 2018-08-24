define(function(require) {
    'use strict';

    var FrontendCollectionFiltersManager;
    var _ = require('underscore');
    var CollectionFiltersManager = require('orofrontend/js/app/datafilter/frontend-collection-filters-manager');
    var viewportManager = require('oroui/js/viewport-manager');
    var config = require('module').config();
    config = _.extend({
        enableMultiselectWidget: true
    }, config);

    FrontendCollectionFiltersManager = CollectionFiltersManager.extend({
        /**
         * @property {Boolean}
         */
        enableMultiselectWidget: config.enableMultiselectWidget,

        /**
         * @inheritDoc
         */
        _updateRenderMode: function() {
            switch (viewportManager.getViewport().type) {
                case 'tablet':
                case 'tablet-small':
                    this.renderMode = 'collapse-mode';
                    break;
                case 'mobile-landscape':
                case 'mobile':
                    this.renderMode = 'toggle-mode';
                    break;
            }
        },

        /**
         * @inheritDoc
         */
        _initializeSelectWidget: function() {
            if (!this.enableMultiselectWidget) {
                this.$(this.filterSelector).hide();
                return;
            }
            FrontendCollectionFiltersManager.__super__._initializeSelectWidget.apply(this, arguments);
        },

        /**
         * @inheritDoc
         */
        _refreshSelectWidget: function() {
            if (this.enableMultiselectWidget) {
                FrontendCollectionFiltersManager.__super__._refreshSelectWidget.apply(this, arguments);
            }
        },

        /**
         * @inheritDoc
         */
        _onChangeFilterSelect: function() {
            if (this.enableMultiselectWidget) {
                FrontendCollectionFiltersManager.__super__._onChangeFilterSelect.apply(this, arguments);
            }
        },

        /**
         * @inheritDoc
         */
        isFiltersStateViewNeeded: function(options) {
            return false;
        }
    });

    return FrontendCollectionFiltersManager;
});
