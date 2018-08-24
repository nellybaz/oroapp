define(function(require) {
    'use strict';

    var AttachmentView;
    var BaseView = require('oroui/js/app/views/base/view');

    AttachmentView = BaseView.extend({
        optionNames:  BaseView.prototype.optionNames.concat(['inputSelector']),

        events: {
            'click [data-role="remove"]': 'onRemoveAttachment'
        },

        onRemoveAttachment: function(e) {
            e.preventDefault();
            this.$el.hide();
            this.$(this.inputSelector).val(true);
        }
    });

    return AttachmentView;
});
