define(function(require) {
    'use strict';

    var _ = require('underscore');

    /**
     * @export  oroworkflow/js/tools/workflow-helper
     */
    return {
        getNameByString: function(str, prefix) {
            str = (prefix || '') + str;         //Add prefix to string
            str = str
                .toLowerCase()                   //Convert to lowercase
                .replace(/[^A-Za-z\s_-]+/g, '') //Remove all non latin symbols
                .replace(/\s+|\-+/g, '_')        //Replace spaces and - with underscore
                .replace(/__+/g, '_');           //Remove duplicated underscores;

            return str + '_' + this.getRandomId();
        },

        getRandomId: function() {
            return Math.random().toString(16).slice(2);
        },

        getFormData: function($form) {
            var data = $form.serializeArray();
            var result = {};
            for (var i = 0; i < data.length; i++) {
                var field = data[i];
                var name = field.name;

                var fieldNameParts = name.match(/\[(\w+)\]$/);
                if (fieldNameParts) {
                    name = fieldNameParts[1];
                    result[name] = field.value;
                    continue;
                }

                fieldNameParts = name.match(/\[(\w+)\]\[\]$/);
                if (fieldNameParts) {
                    name = fieldNameParts[1];
                    if (typeof result[name] === 'undefined') {
                        result[name] = [];
                    }

                    result[name].push(field.value);
                    continue;
                }

                result[name] = field.value;
            }
            return result;
        },

        deepClone: function(obj) {
            var result = _.clone(obj);
            for (var k in obj) {
                if (obj.hasOwnProperty(k) && _.isObject(obj[k])) {
                    obj[k] = this.deepClone(obj[k]);
                }
            }

            return result;
        }
    };
});
