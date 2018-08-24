define(function(require) {
    'use strict';

    var StepModel;
    var _ = require('underscore');
    var TransitionCollection = require('./transition-collection');
    var BaseModel = require('oroui/js/app/models/base/model');

    StepModel = BaseModel.extend({
        defaults: {
            name: null,
            label: null,
            is_final: false,
            order: 0,
            allowed_transitions: null,
            _is_start: false,
            _is_clone: false,
            translateLinks: []
        },

        initialize: function() {
            this.workflow = null;
            this.allowedTransitions = null;
            if (this.get('allowed_transitions') === null) {
                this.set('allowed_transitions', []);
            }
        },

        setWorkflow: function(workflow) {
            this.workflow = workflow;
        },

        getAllowedTransitions: function(workflowModel) {
            if (!workflowModel) {
                workflowModel = this.workflow;
            }

            // Initialize allowedTransitions as Backbone.Collection instance.
            // allowed_transitions transition attribute should contain only names
            if (this.allowedTransitions === null) {
                var allowedTransitionsAttr = this.get('allowed_transitions');

                this.allowedTransitions = new TransitionCollection();
                if (_.isArray(allowedTransitionsAttr)) {
                    _.each(
                        allowedTransitionsAttr,
                        function(transitionName) {
                            this.allowedTransitions.add(workflowModel.getTransitionByName(transitionName));
                        },
                        this
                    );
                }

                var onTransitionAdd = _.bind(function(transition) {
                    var transitionName = transition.get('name');
                    if (_.indexOf(allowedTransitionsAttr, transitionName) === -1) {
                        this.get('allowed_transitions').push(transitionName);
                    }
                }, this);

                this.listenTo(this.allowedTransitions, 'add', onTransitionAdd);

                this.listenTo(this.allowedTransitions, 'reset', _.bind(function(transitions) {
                    this.set('allowed_transitions', []);
                    _.each(transitions.models, onTransitionAdd);
                }, this));

                this.listenTo(this.allowedTransitions, 'remove', _.bind(function(transition) {
                    var transitionName = transition.get('name');
                    this.set('allowed_transitions', _.without(this.get('allowed_transitions'), transitionName));
                }, this));
            }

            return this.allowedTransitions;
        },

        destroy: function(options) {
            if (this.workflow) {
                //Need to manually destroy collection elements to trigger all appropriate events
                var removeTransitions = function(models) {
                    if (models.length) {
                        for (var i = models.length - 1; i > -1; i--) {
                            models[i].destroy();
                        }
                    }
                };

                //Remove step transitions
                removeTransitions(this.getAllowedTransitions(this.workflow).models);
                //Remove transitions which lead into removed step
                removeTransitions(this.workflow.get('transitions').where({'step_to': this.get('name')}));
            }

            StepModel.__super__.destroy.call(this, options);
        }
    });

    return StepModel;
});
