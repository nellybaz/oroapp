define(function(require) {
    'use strict';

    var TransitionModel;
    var _ = require('underscore');
    var BaseModel = require('oroui/js/app/models/base/model');

    TransitionModel = BaseModel.extend({
        defaults: {
            name: null,
            label: null,
            button_label: null,
            button_title: null,
            display_type: 'dialog',
            destination_page: '',
            step_to: null,
            is_start: false,
            form_options: null,
            message: null,
            is_unavailable_hidden: true,
            transition_definition: null,
            _is_clone: false,
            translateLinks: []
        },

        initialize: function() {
            this.workflow = null;

            if (_.isEmpty(this.get('form_options'))) {
                this.set('form_options', {'attribute_fields': {}});
            }

            if (_.isEmpty(this.get('form_options').attribute_fields)) {
                this.get('form_options').attribute_fields = {};
            }
        },

        setWorkflow: function(workflow) {
            this.workflow = workflow;
        },

        getTransitionDefinition: function() {
            if (this.workflow) {
                return this.workflow.getTransitionDefinitionByName(this.get('transition_definition'));
            }
            return null;
        },

        destroy: function(options) {
            var transitionDefinition = this.getTransitionDefinition();
            if (transitionDefinition) {
                transitionDefinition.destroy();
            }

            TransitionModel.__super__.destroy.call(this, options);
        }
    });

    return TransitionModel;
});
