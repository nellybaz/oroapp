define(function(require) {
    'use strict';

    var InputWidgetManager;
    var AbstractInputWidget = require('oroui/js/app/views/input-widget/abstract');
    var $ = require('jquery');
    var _ = require('underscore');
    var error = require('oroui/js/error');

    /**
     * InputWidgetManager used to register input widgets and create widget for applicable inputs.
     *
     * Example of usage:
     *     InputWidgetManager.create($(':input'));//create widgets for inputs
     *     InputWidgetManager.create($(':input'), 'uniform-select');//create only 'uniform-select' widgets for inputs
     *
     *     //add widget to InputWidgetManager
     *     InputWidgetManager.addWidget('uniform-select', {
     *         priority: 10,
     *         selector: 'select:not(.no-uniform)',
     *         Widget: UniformSelectInputWidget
     *     });
     *
     *     'uniform-select' - unique widget key
     *     `selector` - required. Widget will be used only for inputs applicable to this selector
     *     `Widget` - required. InputWidget constructor
     *     `priority` - you can control the order of the widgets. For each input will be used first applicable widget.
     *     `disableAutoCreate` - if true, widget will be created only when create method called with widgetKey specified
     *
     *     //or you can remove widget from InputWidgetManager
     *     InputWidgetManager.removeWidget('uniform-select')
     */
    InputWidgetManager = {
        noWidgetSelector: '.no-input-widget',

        widgets: {},

        _cachedWidgetsByPriority: null,

        /**
         * @param {String} key
         * @param {Object} widget
         */
        addWidget: function(key, widget) {
            _.defaults(widget, {
                key: key,
                priority: 10,
                selector: '',
                disableAutoCreate: false,
                Widget: null
            });

            this.widgets[widget.key] = widget;
            delete this._cachedWidgetsByPriority;
            delete this._cachedCompoundQuery;
        },

        /**
         * @param {String} key
         */
        removeWidget: function(key) {
            delete this.widgets[key];
            delete this._cachedWidgetsByPriority;
            delete this._cachedCompoundQuery;
        },

        getWidgetsByPriority: function() {
            if (!this._cachedWidgetsByPriority) {
                var self = this;
                this._cachedWidgetsByPriority = [];
                _.each(_.sortBy(self.widgets, 'priority'), function(widget) {
                    if (!self.isValidWidget(widget)) {
                        self.error('Input widget "%s" is invalid', widget.key);
                        return;
                    }
                    self._cachedWidgetsByPriority.push(widget);
                });
            }
            return this._cachedWidgetsByPriority;
        },

        isValidWidget: function(widget) {
            return widget.selector &&
                _.isFunction(widget.Widget) &&
                widget.Widget.prototype instanceof AbstractInputWidget;
        },

        /**
         * Walk by each input and create widget for applicable inputs without widget
         *
         * @param {jQuery} $inputs
         * @param {String|null} widgetKey
         * @param {Object|null} options
         */
        create: function($inputs, widgetKey, options) {
            var self = this;
            var widgetsByPriority = this.getWidgetsByPriority();

            if (options || widgetKey) {
                //create new widget with options
                $inputs.inputWidget('dispose');
            }

            _.each($inputs, function(input) {
                var $input = $(input);
                if (self.hasWidget($input)) {
                    return ;
                }

                for (var i = 0; i < widgetsByPriority.length; i++) {
                    var widget = widgetsByPriority[i];
                    if (self.isApplicable($input, widget, widgetKey)) {
                        self.createWidget($input, widget.Widget, options || {});
                        break;
                    }
                }
            });
        },

        /**
         * @param {jQuery} $input
         * @param {Object} widget
         * @param {String|null} widgetKey
         * @returns {boolean}
         */
        isApplicable: function($input, widget, widgetKey) {
            if (widgetKey && widget.key !== widgetKey) {
                return false;
            } else if (!widgetKey && widget.disableAutoCreate) {
                return false;
            } else if (this.noWidgetSelector && $input.is(this.noWidgetSelector)) {
                return false;
            } else if (widget.selector && !$input.is(widget.selector)) {
                return false;
            }
            return true;
        },

        /**
         * @param {jQuery} $input
         * @param {AbstractInputWidget|Function} Widget
         * @param {Object} options
         */
        createWidget: function($input, Widget, options) {
            options = $.extend(true, {}, $input.data('input-widget-options') || {}, options || {});
            if (!options) {
                options = {};
            }
            options.el = $input.get(0);
            var widget = new Widget(options);
            if (!widget.isInitialized()) {
                widget.dispose();
            }
        },

        /**
         * @param {jQuery} $input
         * @returns {boolean}
         */
        hasWidget: function($input) {
            return Boolean($input.attr('data-bound-input-widget'));
        },

        /**
         * @param {jQuery} $input
         * @returns {AbstractInputWidget|null}
         */
        getWidget: function($input) {
            return $input.data('inputWidget') || null;
        },

        error: function(errMsg) {
            error.showErrorInConsole(new Error(errMsg));
        },

        getCompoundQuery: function() {
            if (!this._cachedCompoundQuery) {
                var queries = [];
                var widgetsByPriority = this.getWidgetsByPriority();
                for (var i = 0; i < widgetsByPriority.length; i++) {
                    var widget = widgetsByPriority[i];
                    queries.push(widget.selector);
                }
                this._cachedCompoundQuery = queries.join(',');
            }
            return this._cachedCompoundQuery;
        },

        /**
         * Finds and initializes all input widgets in container
         */
        seekAndCreateWidgetsInContainer: function($container) {
            var foundElements = $container.find(this.getCompoundQuery()).filter(
                ':not(' +
                (this.noWidgetSelector ? (this.noWidgetSelector + ',') : '') +
                '[data-bound-input-widget], [data-page-component-module], [data-bound-component]' +
                ')'
            ).filter(function() {
                //add data-skip-input-widgets to any container to disable widgets inside this container(for example when container is hidden)
                return $(this).closest('[data-skip-input-widgets]').length === 0;
            });
            this.create(foundElements);
            $container.data('attachedWidgetsCount',
                ($container.data('attachedWidgetsCount') || 0) + foundElements.length);
        },

        /**
         * Finds and destroys all input widgets in container
         */
        seekAndDestroyWidgetsInContainer: function($container) {
            if (!$container.data('attachedWidgetsCount')) {
                // no inputWidgets
                return;
            }
            var self = this;
            $container.find('[data-bound-input-widget]').each(function() {
                var widget = self.getWidget($(this));
                if (widget) {
                    widget.dispose();
                }
            });
            $container.data('attachedWidgetsCount', 0);
        }
    };

    $.fn.extend({
        /**
         * This is an jQuery API for InputWidgetManager or InputWidget.
         * If the first argument is "create" - will be executed `InputWidgetManager.create` function.
         * If the first argument is absent - will be returned InputWidget instance or `false`.
         * Otherwise will be executed `InputWidget[command]` function for each element.
         *
         * Example of usage:
         *     $(':input').inputWidget('create'); //create widgets
         *     $('#container').inputWidget('seekAndCreate'); //create widgets in container
         *     $('#container').inputWidget('seekAndDestroy'); //destroys widgets in container
         *     $(':input').inputWidget('refresh'); //update widget, for example after input value change
         *     $(':input:first').inputWidget('container'); //get widget root element
         *     $(':input').inputWidget('width', 100); //set widget width
         *     $(':input').inputWidget('dispose'); //destroy widgets and dispose widget instance
         *
         * @param {String|null} command
         * @returns {mixed}
         */
        inputWidget: function(command) {
            var args = _.rest(arguments);
            if (command === 'create') {
                args.unshift(this);
                InputWidgetManager.create.apply(InputWidgetManager, args);
                return this;
            }
            if (command === 'seekAndCreate') {
                args.unshift(this);
                InputWidgetManager.seekAndCreateWidgetsInContainer.apply(InputWidgetManager, args);
                return this;
            }
            if (command === 'seekAndDestroy') {
                args.unshift(this);
                InputWidgetManager.seekAndDestroyWidgetsInContainer.apply(InputWidgetManager, args);
                return this;
            }

            var response = null;
            var overrideJqueryMethods = AbstractInputWidget.prototype.overrideJqueryMethods;
            this.each(function(i) {
                var result = null;
                var $input = $(this);
                var widget = InputWidgetManager.getWidget($input);

                if (!command) {
                    result = widget;
                } else if (!widget || !_.isFunction(widget[command])) {
                    if (_.indexOf(overrideJqueryMethods, command) !== -1) {
                        result = $input[command].apply($input, args);
                    } else if (widget) {
                        InputWidgetManager.error('Input widget doesn\'t support command ' + command);
                    }
                } else {
                    result = widget[command].apply(widget, args);
                }

                if (i === 0) {
                    response = result;
                }
            });

            return response;
        }
    });

    return InputWidgetManager;
});
