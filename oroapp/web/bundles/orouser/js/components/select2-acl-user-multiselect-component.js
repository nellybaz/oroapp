define(function(require) {
    'use strict';

    var Select2AclUserMultiselectComponent;
    var Select2AclUserAutocompleteComponent = require('oro/select2-acl-user-autocomplete-component');

    Select2AclUserMultiselectComponent = Select2AclUserAutocompleteComponent.extend({
        preConfig: function(config) {
            Select2AclUserMultiselectComponent.__super__.preConfig.call(this, config);
            config.multiple = true;
            return config;
        }
    });
    return Select2AclUserMultiselectComponent;
});
