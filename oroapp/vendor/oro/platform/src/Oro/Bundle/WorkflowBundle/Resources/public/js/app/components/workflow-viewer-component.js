/** @exports WorkflowViewerComponent */
define(function(require) {
    'use strict';

    var WorkflowViewerComponent;
    var _ = require('underscore');
    var tools = require('oroui/js/tools');
    var BaseComponent = require('oroui/js/app/components/base/component');
    var workflowModelFactory = require('../../tools/workflow-model-factory');
    var FlowchartViewerWorkflowView = require('../views/flowchart/viewer/workflow-view');
    var FlowchartControlView = require('../views/flowchart/viewer/flowchart-control-view');
    var FlowchartStateModel = require('../models/flowchart-state-model');

    /**
     * Builds workflow editor UI.
     *
     * @class WorkflowViewerComponent
     * @augments BaseComponent
     */
    WorkflowViewerComponent = BaseComponent.extend(/** @lends WorkflowViewerComponent.prototype */{

        options: {
            entity: {},
            chartOptions: {},
            connectionOptions: {},
            availableDestinations: {}
        },

        /**
         * @inheritDoc
         */
        initialize: function(options) {
            this.options = _.defaults(options || {}, this.options);

            this.flowchartEnabled = !tools.isMobile();
            var flowchartOptions = this.flowchartEnabled ? {} : _.pick(options, ['connectionOptions', 'chartOptions']);
            WorkflowViewerComponent.__super__.initialize.apply(this, arguments);
            this.model = workflowModelFactory.createWorkflowModel(options);
            if (this.flowchartEnabled) {
                this.flowchartState = new FlowchartStateModel();
                this.FlowchartWorkflowView = FlowchartViewerWorkflowView;
            }
            if (this.deferredInit) {
                this.deferredInit.done(function() {
                    this.initViews(options._sourceElement, flowchartOptions);
                }.bind(this));
            } else {
                this.initViews(options._sourceElement, flowchartOptions);
            }
        },

        /**
         * Initializes related views
         *
         * @param {jQuery} $el root element
         * @param {Object} flowchartOptions options for the flow chart
         *  contain connectionOptions and chartOptions properties
         */
        initViews: function($el, flowchartOptions) {
            if (this.flowchartEnabled) {
                flowchartOptions = _.extend(flowchartOptions, {
                    model: this.model,
                    el: $el.find('.workflow-flowchart'),
                    flowchartState: this.flowchartState
                });
                this.flowchartView = new this.FlowchartWorkflowView(flowchartOptions);
                this.flowchartControlView = new FlowchartControlView({
                    model: this.flowchartState,
                    el: $el.find('.workflow-flowchart-controls')
                });
            }
        }

    });

    return WorkflowViewerComponent;
});
