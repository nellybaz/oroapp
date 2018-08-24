define([
    'jquery',
    'oroui/js/mediator',
    'underscore',
    'oroui/js/widget/collapse-widget'
], function($, mediator, _) {
    'use strict';

    $.widget('oroui.rowCollapseWidget', $.oroui.collapseWidget, {
        options: $.extend({}, $.oroui.collapseWidget.options, {
            rowsCount: 0,
            visibleRows: 3,
            checkOverflow: true,
            rowSelector: 'tbody tr',
            headerSelector: 'thead'
        }),

        _init: function() {
            this._super();
            this.$trigger.show();
        },

        _initEvents: function() {
            this._super();
            mediator.on('viewport:change', this.onViewportChange, this);
        },

        _isOverflow: function() {
            return this.options.rowsCount > this.options.visibleRows;
        },

        _applyStateOnContainer: function(isOpen) {
            if (this.options.animationSpeed) {
                if (isOpen) {
                    this.$container.animate({
                        height: this.getRowsHeight()
                    }, this.options.animationSpeed, _.bind(function() {
                        this.$container.css('overflow', 'visible');
                    }, this));
                } else {
                    this.$container.animate({
                        height: this.getRowsHeight(this.options.visibleRows)
                    }, this.options.animationSpeed, _.bind(function() {
                        this.$container.css('overflow', 'hidden');
                    }, this));
                }
            }
        },

        _applyStateOnTrigger: function(isOpen) {
            if (isOpen) {
                this.$trigger.text(_.__('oro_frontend.rows_collapse.trigger.label.normal'));
            } else {
                this.$trigger.text(_.__('oro_frontend.rows_collapse.trigger.label.truncated', {
                    hiddenRows: this.calculateHiddenRows()
                }));
            }
            this._super();
        },

        onViewportChange: function() {
            this._applyStateOnContainer(this.options.open);
        },

        calculateHiddenRows: function() {
            return this.options.rowsCount - this.options.visibleRows;
        },

        getRowsHeight: function(rows) {
            var self = this;
            var $rows = this.$el.find(self.options.rowSelector);
            var height = this.$el.find(self.options.headerSelector).outerHeight();
            var rowsCount = rows || $rows.length;

            $rows.each(_.bind(function(index, row) {
                if (index >= rowsCount) {
                    return;
                }
                height += $(row).outerHeight();
            }, this));

            return height;
        }
    });

    return 'rowCollapseWidget';
});
