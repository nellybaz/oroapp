define(function(require) {
    'use strict';

    var UseSefaultView;
    var $ = require('jquery');
    var BaseView = require('oroui/js/app/views/base/view');
    var mediator = require('oroui/js/mediator');

    UseSefaultView = BaseView.extend({
        events: {
            'change input[type="checkbox"]': '_handleChangeUseDefault'
        },

        _handleChangeUseDefault: function(e) {
            mediator.trigger('strategy-creation-account:changeUseDefault', $(e.target).is(':checked'));
        }
    });

    return UseSefaultView;
});
