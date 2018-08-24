define(function(require) {
    'use strict';

    var AttributeModel;
    var BaseModel = require('oroui/js/app/models/base/model');

    AttributeModel = BaseModel.extend({
        defaults: {
            name: null,
            label: null,
            translated_label: null,
            type: null,
            property_path: null,
            options: null,
            translateLinks: []
        },

        initialize: function() {
            if (this.get('options') === null) {
                this.set('options', {});
            }
        }
    });

    return AttributeModel;
});
