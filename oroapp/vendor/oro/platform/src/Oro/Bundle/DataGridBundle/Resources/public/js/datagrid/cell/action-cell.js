define([
    'jquery',
    'underscore',
    'backgrid',
    'module'
], function($, _, Backgrid, module) {
    'use strict';

    var config = module.config();
    config = _.extend({
        showCloseButton: false
    }, config);

    var ActionCell;

    /**
     * Cell for grid, contains actions
     *
     * @export  oro/datagrid/cell/action-cell
     * @class   oro.datagrid.cell.ActionCell
     * @extends Backgrid.Cell
     */
    ActionCell = Backgrid.Cell.extend({

        /** @property */
        className: 'action-cell',

        /** @property {Array} */
        actions: undefined,

        /** @property {Boolean} */
        isDropdownActions: null,

        /** @property Integer */
        actionsHideCount: 3,

        /** @property {Array} */
        launchers: undefined,

        /** @property Boolean */
        showCloseButton: config.showCloseButton,

        /** @property {String}: 'icon-text' | 'icon-only' | 'text-only' */
        launcherMode: '',

        /** @property {String}: 'show' | 'hide' */
        actionsState: '',

        /** @property */
        baseMarkup:
            '<div class="more-bar-holder">' +
                '<div class="dropdown">' +
                    '<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">...</a>' +
                    '<ul class="dropdown-menu dropdown-menu__action-cell launchers-dropdown-menu" ' +
                        'data-options="{&quot;container&quot;: true, &quot;align&quot;: &quot;right&quot;}"></ul>' +
                '</div>' +
            '</div>',

        /** @property */
        simpleBaseMarkup: '<div class="more-bar-holder action-row"></div>',
        /** @property */
        closeButtonTemplate: _.template(
            '<li class="dropdown-close"><i class="fa-close hide-text">' + _.__('Close') + '</i></li>'
        ),

        /** @property */
        launchersContainerSelector: '.launchers-dropdown-menu',

        /** @property */
        launchersListTemplate: _.template(
            '<% if (withIcons) { %>' +
                '<li><ul class="nav nav-pills icons-holder launchers-list"></ul></li>' +
            '<% } else { %>' +
                '<li class="well-small"><ul class="unstyled launchers-list"></ul></li>' +
            '<% } %>'
        ),

        /** @property */
        simpleLaunchersListTemplate: _.template(
            '<% if (withIcons) { %>' +
                '<ul class="nav nav-pills icons-holder launchers-list"></ul>' +
            '<% } else { %>' +
                '<ul class="unstyled launchers-list"></ul>' +
            '<% } %>'
        ),

        /** @property */
        launcherItemTemplate: _.template(
            '<li class="launcher-item<% if (className) { %> <%= \'mode-\' + className %><% } %>"></li>'
        ),

        /** @property */
        events: {
            'click': '_showDropdown',
            'mouseover .dropdown-toggle': '_showDropdown',
            'mouseleave .dropdown-menu, .dropdown-menu__placeholder': '_hideDropdown',
            'click .dropdown-close .fa-close': '_hideDropdown'
        },

        /**
         * Initialize cell actions and launchers
         */
        initialize: function(options) {
            var opts = options || {};
            this.subviews = [];

            if (!_.isUndefined(opts.actionsHideCount)) {
                this.actionsHideCount = opts.actionsHideCount;
            }

            if (!_.isUndefined(opts.themeOptions.actionsHideCount)) {
                this.actionsHideCount = opts.themeOptions.actionsHideCount;
            }

            if (_.isObject(opts.themeOptions.launcherOptions)) {
                this.launcherMode = opts.themeOptions.launcherOptions.launcherMode || this.launcherMode;
                this.actionsState = opts.themeOptions.launcherOptions.actionsState || this.actionsState;
            }

            ActionCell.__super__.initialize.apply(this, arguments);
            this.actions = this.createActions();
            _.each(this.actions, function(action) {
                this.listenTo(action, 'preExecute', this.onActionRun);
            }, this);

            this.subviews.push.apply(this.subviews, this.actions);
        },

        /**
         * @inheritDoc
         */
        dispose: function() {
            if (this.disposed) {
                return;
            }
            delete this.actions;
            delete this.column;

            this.$('.dropdown-toggle').dropdown('destroy');
            ActionCell.__super__.dispose.apply(this, arguments);
        },

        /**
         * Handle action run
         *
         * @param {oro.datagrid.action.AbstractAction} action
         */
        onActionRun: function(action) {
            this.$('.dropdown.open .dropdown-toggle').trigger('tohide.bs.dropdown');
        },

        /**
         * Creates actions
         *
         * @return {Array}
         */
        createActions: function() {
            var result = [];
            var actions = this.column.get('actions');
            var config = this.model.get('action_configuration') || {};

            _.each(actions, function(action, name) {
                // filter available actions for current row
                if (!config || config[name] !== false) {
                    result.push(this.createAction(action, config[name] || {}));
                }
            }, this);

            return _.sortBy(result, 'order');
        },

        /**
         * Creates action
         *
         * @param {Function} Action
         * @param {Object} configuration
         * @protected
         */
        createAction: function(Action, configuration) {
            return new Action({
                model: this.model,
                datagrid: this.column.get('datagrid'),
                configuration: configuration
            });
        },

        /**
         * Creates actions launchers
         *
         * @protected
         */
        createLaunchers: function() {
            return _.map(this.actions, function(action) {
                return action.createLauncher({launcherMode: this.launcherMode});
            }, this);
        },

        /**
         * Render cell with actions
         */
        render: function() {
            var isSimplifiedMarkupApplied = false;
            // don't render anything if list of launchers is empty
            if (_.isEmpty(this.actions)) {
                this.$el.empty();

                return this;
            }

            this.isDropdownActions = this.actions.length >= this.actionsHideCount;

            if (this.actionsState === 'show') {
                this.isDropdownActions = false;
            } else if (this.actionsState === 'hide') {
                this.isDropdownActions = true;
            }

            if (!this.isDropdownActions) {
                isSimplifiedMarkupApplied = true;
                this.baseMarkup = this.simpleBaseMarkup;
                this.launchersListTemplate = this.simpleLaunchersListTemplate;
                this.launchersContainerSelector = '.more-bar-holder';
            }

            this.$el.html(this.baseMarkup);
            this.isLauncherListFilled = false;

            if (isSimplifiedMarkupApplied) {
                this.fillLauncherList();
            }

            return this;
        },

        fillLauncherList: function() {
            if (!this.isLauncherListFilled) {
                this.isLauncherListFilled = true;

                var launcherList = this.createLaunchers();

                var launchers = this.getLaunchersByIcons(launcherList);
                var $listsContainer = this.$(this.launchersContainerSelector);

                if (this.showCloseButton && launcherList.length >= this.actionsHideCount) {
                    $listsContainer.append(this.closeButtonTemplate());
                }

                if (launchers.withIcons.length) {
                    this.renderLaunchersList(launchers.withIcons, {withIcons: true})
                        .appendTo($listsContainer);
                }

                if (launchers.withIcons.length && launchers.withoutIcons.length) {
                    $listsContainer.append('<li class="divider"></li>');
                }

                if (launchers.withoutIcons.length) {
                    this.renderLaunchersList(launchers.withoutIcons, {withIcons: false})
                        .appendTo($listsContainer);
                }
            }
        },

        /**
         * Render launchers list
         *
         * @param {Array} launchers
         * @param {Object=} params
         * @return {jQuery} Rendered element wrapped with jQuery
         */
        renderLaunchersList: function(launchers, params) {
            params = params || {};
            var result = $(this.launchersListTemplate(params));
            var $launchersList = result.filter('.launchers-list').length ? result : $('.launchers-list', result);
            _.each(launchers, function(launcher) {
                $launchersList.append(this.renderLauncherItem(launcher));
            }, this);

            return result;
        },

        /**
         * Render launcher
         *
         * @param {orodatagrid.datagrid.ActionLauncher} launcher
         * @param {Object=} params
         * @return {jQuery} Rendered element wrapped with jQuery
         */
        renderLauncherItem: function(launcher, params) {
            params = _.extend(params || {}, {className: launcher.launcherMode});
            var result = $(this.launcherItemTemplate(params));
            var $launcherItem = result.filter('.launcher-item').length ? result : $('.launcher-item', result);
            $launcherItem.append(launcher.render().$el);
            return result;
        },

        /**
         * Get separate object of launchers arrays: with icons (key `withIcons`) and without icons (key `withoutIcons`).
         *
         * @return {Object}
         * @protected
         */
        getLaunchersByIcons: function(launcherList) {
            var launchers = {
                withIcons: [],
                withoutIcons: []
            };

            _.each(launcherList, function(launcher) {
                if (launcher.icon) {
                    launchers.withIcons.push(launcher);
                } else {
                    launchers.withoutIcons.push(launcher);
                }
            }, this);

            return launchers;
        },

        /**
         * Show dropdown
         *
         * @param {Event} e
         * @protected
         */
        _showDropdown: function(e) {
            this.fillLauncherList();
            if (!this.$('.dropdown-toggle').parent().hasClass('open')) {
                this.$('.dropdown-toggle').dropdown('toggle');
            }
            this.model.set('isDropdownActions', this.isDropdownActions);
            e.stopPropagation();
        },

        /**
         * Hide dropdown
         *
         * @param {Event} e
         * @protected
         */
        _hideDropdown: function(e) {
            if (this.$('.dropdown-toggle').parent().hasClass('open')) {
                this.$('.dropdown-toggle').dropdown('toggle');
            }
            e.stopPropagation();
        }
    });

    return ActionCell;
});
