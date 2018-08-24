define(function(require) {
    'use strict';

    var ColumnManagerPlugin;
    var _ = require('underscore');
    var __ = require('orotranslation/js/translator');
    var BasePlugin = require('oroui/js/app/plugins/base/plugin');
    var ShowComponentAction = require('oro/datagrid/action/show-component-action');
    var ColumnsCollection = require('orodatagrid/js/app/models/column-manager/columns-collection');
    var ColumnManagerComponent = require('orodatagrid/js/app/components/column-manager-component');

    var config = require('module').config();
    config = _.extend({
        icon: 'cog',
        wrapperClassName: 'column-manager',
        label: __('oro.datagrid.column_manager.title')
    }, config);

    ColumnManagerPlugin = BasePlugin.extend({
        enable: function() {
            this.listenTo(this.main, 'beforeToolbarInit', this.onBeforeToolbarInit);
            ColumnManagerPlugin.__super__.enable.call(this);
        },

        onBeforeToolbarInit: function(toolbarOptions) {
            this._createManagedCollection();
            var options = {
                datagrid: this.main,
                launcherOptions: _.extend(config, {
                    componentConstructor: toolbarOptions.componentConstructor || ColumnManagerComponent,
                    columns: this.main.columns,
                    managedColumns: this.managedColumns,
                    addSorting: true
                }, toolbarOptions.columnManager),
                order: 600
            };

            toolbarOptions.addToolbarAction(new ShowComponentAction(options));
        },

        /**
         * Create collection with manageable columns
         *
         * @param {Object} options
         * @protected
         */
        _createManagedCollection: function(options) {
            var managedColumns = [];

            this.main.columns.each(function(column, i) {
                var isManageable =  column.get('manageable') !== false;

                // set initial order
                if (_.isUndefined(column.get('order')) || isManageable) {
                    column.set('order', i, {silent: true});
                }

                // collect manageable columns
                if (isManageable) {
                    managedColumns.push(column);
                }
            });

            this.managedColumns = new ColumnsCollection(managedColumns,
                _.pick(options, ['minVisibleColumnsQuantity']));
        }
    });

    return ColumnManagerPlugin;
});
