/*global define*/
define([
    'underscore', 'oroform/js/validator/regex'
], function(_, regexConstraint) {
    'use strict';

    var constraint = _.clone(regexConstraint);

    constraint[0] = 'Oro\\Bundle\\ValidationBundle\\Validator\\Constraints\\AlphanumericDash';

    return constraint;
});
