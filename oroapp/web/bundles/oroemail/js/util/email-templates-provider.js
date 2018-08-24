define(function(require) {
    'use strict';

    var $ = require('jquery');
    var routing = require('routing');
    var __ = require('orotranslation/js/translator');

    return {
        create: function(templateId, relatedEntityId) {
            var url = routing.generate(
                'oro_api_get_emailtemplate_compiled',
                {'id': templateId, 'entityId': relatedEntityId}
            );

            return $.ajax({
                url: url,
                dataType: 'json',
                errorHandlerMessage: __('oro.email.emailtemplate.load_failed')
            }).then(function(data, textStatus, jqXHR) {
                return data;
            });
        }
    };
});
