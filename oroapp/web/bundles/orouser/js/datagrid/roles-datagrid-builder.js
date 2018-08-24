define(function(require) {
    'use strict';

    var rolesDatagridBuilder;
    var _ = require('underscore');
    var mediator = require('oroui/js/mediator');
    var PermissionModel = require('orouser/js/models/role/permission-model');
    var AccessLevelsCollection = require('orouser/js/models/role/access-levels-collection');
    var BaseCollection = require('oroui/js/app/models/base/collection');
    var RowView = require('orouser/js/datagrid/action-permissions-row-view');
    var ReadonlyRowView = require('orouser/js/datagrid/action-permissions-readonly-row-view');

    rolesDatagridBuilder = {
        processDatagridOptions: function(deferred, options) {
            var reg = /\\/g;
            options.themeOptions.rowView = options.themeOptions.readonly ? ReadonlyRowView : RowView;
            _.each(options.data.data, function(item) {
                item.permissions = new BaseCollection(item.permissions, {
                    model: PermissionModel
                });

                var routeParameters = {oid: item.identity.replace(reg, '_'), permission: ''};
                if (options.metadata.options.access_level_route) {
                    routeParameters.routeName = options.metadata.options.access_level_route;
                }
                var accessLevelsCollection = new AccessLevelsCollection([], {
                    routeParameters: routeParameters
                });
                item.permissions.accessLevels = accessLevelsCollection;
                item.permissions.each(function(model) {
                    model.accessLevels = accessLevelsCollection;
                });
            });
            deferred.resolve();
        },

        init: function(deferred, options) {
            options.gridPromise.done(function(grid) {
                rolesDatagridBuilder.build(grid, options);
                deferred.resolve();
            }).fail(function() {
                deferred.reject();
            });
        },

        build: function(grid, options) {
            var currentCategory = {
                id: options.currentCategoryId || 'all'
            };
            var filterer = function(model) {
                return currentCategory.id === 'all' || model.get('group') === currentCategory.id;
            };
            grid.body.filter(filterer);
            grid.body.listenTo(mediator, 'role:entity-category:changed', function(category) {
                _.extend(currentCategory, category);
                grid.body.filter();
                grid.$el.toggle(grid.body.visibleItems.length > 0);
            });
        }
    };

    return rolesDatagridBuilder;
});
