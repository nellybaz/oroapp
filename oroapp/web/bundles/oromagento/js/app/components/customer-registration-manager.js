/*jshint devel: true*/
define(function(require) {
    'use strict';

    return function(options) {
        var $ = require('jquery');
        var __ = require('orotranslation/js/translator');
        var mediator = require('oroui/js/mediator');
        var messenger = require('oroui/js/messenger');

        $('.customer-registration').click(function(e) {
            e.preventDefault();

            var url = $(this).data('url');

            mediator.execute('showLoading');

            $.ajax(url, {
                method: 'POST',
                success: function(response) {
                    if (response.successful) {
                        messenger.notificationMessage('success', __('oro.magento.customer_registration.success'));
                        mediator.execute('refreshPage');
                    } else {
                        messenger.notificationMessage('error', __('oro.magento.customer_registration.error'));
                        console.warn(response.error);
                    }
                },
                errorHandlerMessage: __('oro.integration.error'),
                dataType: 'json'
            }).always(function() {
                mediator.execute('hideLoading');
            });
        });
    };
});
