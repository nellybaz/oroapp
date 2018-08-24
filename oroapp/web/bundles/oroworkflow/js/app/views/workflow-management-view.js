define(function(require) {
    'use strict';

    var WorkflowManagementView;
    var _ = require('underscore');
    var $ = require('jquery');
    var __ = require('orotranslation/js/translator');
    var Confirmation = require('oroui/js/delete-confirmation');
    var BaseView = require('oroui/js/app/views/base/view');
    var StepsListView = require('./step/step-list-view');

    /**
     * @export  oroworkflow/js/workflow-management
     * @class   oro.WorkflowManagement
     * @extends Backbone.View
     */
    WorkflowManagementView = BaseView.extend({
        events: {
            'click .add-step-btn': 'addNewStep',
            'click .add-transition-btn': 'addNewTransition',
            'click .refresh-btn': 'refreshChart',
            'submit': 'onSubmit',
            'click [type=submit]': 'setSubmitActor',
            'change [name$="[related_entity]"]': 'onEntityChange'
        },

        options: {
            stepsEl: null,
            model: null,
            entities: [],
            templateTranslateLink: null,
            selectorTranslateLinkContainer: '#workflow_translate_link_label',
            entitySelectSelector: '[name$="[related_entity]"]'
        },

        initialize: function(options) {
            this.options = _.defaults(options || {}, this.options);

            this.initStartStepSelector();

            this.stepListView = new StepsListView({
                el: this.$(this.options.stepsEl),
                collection: this.model.get('steps'),
                workflow: this.model
            });

            var template = this.options.templateTranslateLink || $('#workflow-translate-link-template').html();
            this.templateTranslateLink = _.template(template);

            this.listenTo(this.model.get('steps'), 'destroy', this.onStepRemove);
        },

        render: function() {
            this.renderSteps();
            if (this.model.translateLinkLabel) {
                $(this.options.selectorTranslateLinkContainer)
                    .html(this.templateTranslateLink({translateLink: this.model.translateLinkLabel}));
            }

            return this;
        },

        renderSteps: function() {
            this.stepListView.render();
        },

        onSubmit: function(e) {
            this.model.trigger('saveWorkflow', e);
        },

        setSubmitActor: function(e) {
            this.submitActor = e.target;
        },

        initStartStepSelector: function() {
            var getSteps = _.bind(function(query) {
                var steps = [];
                _.each(this.model.get('steps').models, function(step) {
                    // starting point is not allowed to be a start step
                    var stepLabel = step.get('label');
                    if (!step.get('_is_start') &&
                        (!query.term || query.term === stepLabel || _.indexOf(stepLabel, query.term) !== -1)
                    ) {
                        steps.push({
                            'id': step.get('name'),
                            'text': step.get('label')
                        });
                    }
                }, this);

                query.callback({results: steps});
            }, this);

            this.$startStepEl = this.$('[name="start_step"]');

            var select2Options = {
                'allowClear': true,
                'query': getSteps,
                'placeholder': __('Choose step...'),
                'initSelection': _.bind(function(element, callback) {
                    var startStep = this.model.getStepByName(element.val());
                    callback({
                        id: startStep.get('name'),
                        text: startStep.get('label')
                    });
                }, this)
            };

            this.$startStepEl.inputWidget('create', 'select2', {initializeOptions: select2Options});
        },

        onEntityChange: function(e) {
            var oldVal = _.result(e.removed, 'id') || null;
            if (oldVal !== null && this._hasData()) {
                this._confirm(this.applyEntitySelectValue.bind(this),
                    function() {
                        this.setEntitySelectValue(this.model.get('entity'));
                    }.bind(this)
                );
            } else {
                this.applyEntitySelectValue();
            }
        },

        applyEntitySelectValue: function() {
            this.model.set('entity', this.getEntitySelectValue());
        },

        _confirm: function(onConfirm, onCancel) {
            var confirm = new Confirmation({
                title: __('Change Entity Confirmation'),
                okText: __('Yes'),
                content: __('oro.workflow.change_entity_confirmation')
            });
            confirm.on('ok', onConfirm);
            confirm.on('cancel', onCancel);

            confirm.once('hidden', function() {
                confirm.off('ok cancel');
            });
            confirm.open();
        },

        _hasData: function() {
            return this.model.get('steps').length > 0 || !this.model.get('transitions').isEmpty() ||
                !this.model.get('transition_definitions').isEmpty() || this.model.get('attributes').isEmpty();
        },

        addNewTransition: function() {
            this.model.trigger('requestAddTransition');
        },

        addNewStep: function() {
            this.model.trigger('requestAddStep');
        },

        refreshChart: function() {
            this.model.trigger('requestRefreshChart');
        },

        onStepRemove: function(step) {
            //Deselect start_step if it was removed
            if (this.$startStepEl.val() === step.get('name')) {
                this.$startStepEl.inputWidget('val', '');
            }
        },

        isEntitySelected: function() {
            return Boolean(this.getEntitySelectValue());
        },

        getEntitySelectValue: function() {
            return this.$(this.options.entitySelectSelector).val();
        },

        setEntitySelectValue: function(value) {
            this.$(this.options.entitySelectSelector).inputWidget('val', value);
        },

        valid: function() {
            return this.$el.valid();
        }
    });

    return WorkflowManagementView;
});
