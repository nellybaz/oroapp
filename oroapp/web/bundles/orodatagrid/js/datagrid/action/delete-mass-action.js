define([
    'oroui/js/delete-confirmation',
    'orotranslation/js/translator',
    'underscore',
    './mass-action',
    'oroui/js/mediator'
], function(DeleteConfirmation, __, _, MassAction, mediator) {
    'use strict';

    var DeleteMassAction;

    /**
     * Delete mass action class.
     *
     * @export  oro/datagrid/action/delete-mass-action
     * @class   oro.datagrid.action.DeleteMassAction
     * @extends oro.datagrid.action.MassAction
     */
    DeleteMassAction = MassAction.extend({
        /** @property {Function} */
        confirmModalConstructor: DeleteConfirmation,

        /** @property {Object} */
        defaultMessages: {
            confirm_title: 'Delete Confirmation',
            confirm_content: 'Are you sure you want to delete these items?',
            confirm_ok: 'Yes, Delete',
            confirm_cancel: 'Cancel',
            success: 'Selected items were deleted.',
            error: 'Selected items were not deleted.',
            empty_selection: 'Please select items to delete.'
        },

        /** @property {Object} */
        confirmMessages: {
            selected_message: 'oro.datagrid.mass_action.delete.selected_message',
            max_limit_message: 'oro.datagrid.mass_action.delete.max_limit_message',
            restricted_access_message: 'oro.datagrid.mass_action.delete.restricted_access_message',
            restricted_access_empty_message: 'oro.datagrid.mass_action.delete.restricted_access_empty_message'
        },

        /** @property {String} */
        confirmMessage: null,

        /** @property {Boolean} */
        allowOk: true,

        /**
         * As in this action we need to send POST request to get data for confirm message
         * we set this.confirmation = false at initialization to prevent opening confirm window.
         *
         * @param options
         */
        initialize: function(options) {
            DeleteMassAction.__super__.initialize.apply(this, arguments);
            this.confirmMessage = __(this.defaultMessages.confirm_content);
            this.confirmation = false;
        },

        /**
         * Get view for confirm modal
         *
         * @return {oroui.Modal}
         */
        getConfirmDialog: function(callback) {
            if (!this.confirmModal) {
                this.confirmModal = (new this.confirmModalConstructor({
                    title: __(this.messages.confirm_title),
                    content: this.getConfirmContentMessage(),
                    okText: __(this.messages.confirm_ok),
                    cancelText: __(this.messages.confirm_cancel),
                    allowOk: this.allowOk
                }));
                this.listenTo(this.confirmModal, 'ok', callback);

                this.subviews.push(this.confirmModal);
            }
            return this.confirmModal;
        },

        /**
         * Need to handle POST and DELETE requests differently.
         *
         *  - POST request: we prepare confirm message from result data
         *    and set requestType = DELETE and this.confirmation = true, to prepare actually request for deleting.
         *  - DELETE request: handled as ordinary mass action request.
         *
         */
        _onAjaxSuccess: function(data, textStatus, jqXHR) {
            if (this.requestType === 'POST') {
                this.requestType = 'DELETE';
                this.setConfirmMessage(data);
                if (this.reloadData) {
                    this.datagrid.hideLoading();
                }
                this.confirmation = true;
                return DeleteMassAction.__super__.execute.call(this);
            } else {
                DeleteMassAction.__super__._onAjaxSuccess.apply(this, arguments);

                mediator.trigger('datagrid:afterMassRemoveRow:' + this.datagrid.name);
            }
        },

        /**
         * Sends POST request to prepare confirm message.
         * Normal action request will be send manually after handling POST request.
         * Sets this.confirmModal = null to rebuild confirm window after each request.
         */
        execute: function() {
            this.requestType = 'POST';
            this.confirmModal = null;
            if (this.checkSelectionState()) {
                DeleteMassAction.__super__.executeConfiguredAction.call(this);
            }
        },

        /**
         * @inheritDoc
         */
        getConfirmContentMessage: function() {
            return this.confirmMessage;
        },

        /**
         * Sets confirm message from received data.
         *
         * @param data
         */
        setConfirmMessage: function(data) {
            this.allowOk = true;
            if (this.isDefined(data.selected) && this.isDefined(data.deletable) && this.isDefined(data.max_limit)) {
                if (data.deletable === 0) {
                    this.confirmMessage = __(this.confirmMessages.restricted_access_empty_message);
                    this.allowOk = false;
                } else if (data.deletable <= data.max_limit) {
                    if (data.deletable >= data.selected) {
                        var placeholders = {selected: data.selected};
                        this.confirmMessage = __(this.confirmMessages.selected_message, placeholders, data.selected);
                    } else {
                        this.confirmMessage = __(this.confirmMessages.restricted_access_message, {
                            deletable: data.deletable,
                            selected: data.selected
                        });
                    }
                } else {
                    this.confirmMessage = __(this.confirmMessages.max_limit_message, {max_limit: data.max_limit});
                }

            }
        },

        isDefined: function(value) {
            return !_.isUndefined(value);
        },

        getLink: function(parameters) {
            if (this.requestType === 'DELETE') {
                var actionParameters = this.getActionParameters();
                if (_.isUndefined(parameters)) {
                    parameters = {};
                }
                parameters = _.extend(actionParameters, parameters);
            }

            return DeleteMassAction.__super__.getLink.call(this, parameters);
        }
    });

    return DeleteMassAction;
});
