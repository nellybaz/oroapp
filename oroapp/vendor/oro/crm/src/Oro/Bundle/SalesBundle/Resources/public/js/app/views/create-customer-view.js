define(function(require) {
    'use strict';

    var _ = require('underscore');
    var __ = require('orotranslation/js/translator');
    var mediator = require('oroui/js/mediator');
    var routing = require('routing');
    var DialogWidget = require('oro/dialog-widget');
    var BaseView = require('oroui/js/app/views/base/view');

    var CustomerView = BaseView.extend({
        events: {
            'click button': 'onCreate'
        },

        dialogWidget: null,

        initialize: function(options) {
            CustomerView.__super__.initialize.apply(this, arguments);

            this.options = _.defaults(options || {}, this.options);
        },

        onCreate: function() {
            var customer = this.$('[data-customer]').data('customer');
            var routeParams = this.$el.parents()
                .find(this.options.inputSelector)
                .data('select2_query_additional_params') || {};

            this.dialogWidget = new DialogWidget({
                title: __('Create {{ entity }}', {'entity': this.$el.text()}),
                url: routing.generate(customer.routeCreate, routeParams),
                stateEnabled: false,
                incrementalPosition: true,
                dialogOptions: {
                    modal: true,
                    allowMaximize: true,
                    width: 1280,
                    height: 650
                }
            });

            this.dialogWidget.once('formSave', _.bind(function(id) {
                this.dialogWidget.remove();
                this.dialogWidget = null;

                mediator.trigger(
                    'customer-dialog:select',
                    JSON.stringify({'entityClass': customer.className,  'entityId': id})
                );
            }, this));

            this.dialogWidget.render();
        }
    });

    return CustomerView;
});
