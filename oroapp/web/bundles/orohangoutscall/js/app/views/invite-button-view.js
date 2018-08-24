define(function(require) {
    'use strict';

    var InviteButtonView;
    var BaseView = require('oroui/js/app/views/base/view');

    InviteButtonView = BaseView.extend({
        events: {
            click: function() {
                this.trigger('invite');
            }
        }
    });

    return InviteButtonView;
});
