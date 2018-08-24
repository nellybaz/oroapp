define(['jquery', 'orotranslation/js/translator', 'oroui/js/modal', 'oroui/js/messenger'],
function($, __, Modal, Messenger) {
    'use strict';

    /**
     * Deactivation handler
     *
     * @export  oroworkflow/js/deactivation-handler
     * @class   oroworkflow.WorkflowDeactivationHandler
     */
    return function(url, label, hideNotifications) {
        var el = this;
        var confirmDeactivation = new Modal({
            title:   __('oro.workflow.workflowdefinition.deactivate', {label: label}),
            content: __('oro.workflow.workflowdefinition.reset_workflow_data_message'),
            okText:  __('oro.workflow.workflowdefinition.deactivate_button_text')
        });

        confirmDeactivation.on('ok', function() {
            el.trigger('deactivation_start');
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    if (response.message && !hideNotifications) {
                        Messenger.notificationFlashMessage('success', response.message);
                    }
                    el.trigger('deactivation_success', [response]);
                },
                error: function(xhr, textStatus, error) {
                    el.trigger('deactivation_error', [xhr, textStatus, error]);
                }
            });
        });

        confirmDeactivation.open();
    };
});
