define(function(require) {
    'use strict';

    var PrefixRedirect;
    var $ = require('jquery');
    var _ = require('underscore');
    var BaseView = require('oroui/js/app/views/base/view');

    /**
     * @export orowebcatalog/js/app/views/scope-toggle-view
     * @extends oroui.app.views.base.View
     * @class orowebcatalog.app.views.PrefixRedirect
     */
    PrefixRedirect = BaseView.extend({
        /**
         * @property {Object}
         */
        options: {
            selectors: {
                strategySelector: null,
                prefixSelector: '.slug-prefix',
                redirectSelector: '.create-redirect'
            },
            isAskStrategy: false,
            askStrategyName: 'ask'
        },

        /**
         * @property string
         */
        defaultPrefixValue: '',

        /**
         * @property {jQuery}
         */
        $prefixField: null,

        /**
         * @property {jQuery}
         */
        $createRedirectField: null,

        /**
         * @property {jQuery}
         */
        $strategySelector: null,

        /**
         * @inheritdoc
         */
        initialize: function(options) {
            this.options = $.extend(true, {}, this.options, options || {});

            if (this.options.selectors.strategySelector) {
                this.$strategySelector = $(this.el).closest('form').find(this.options.selectors.strategySelector);
            }

            this.$prefixField = $(this.el).find(this.options.selectors.prefixSelector);
            this.defaultPrefixValue = this.$prefixField.val();
            this.$createRedirectField = $(this.el).find(this.options.selectors.redirectSelector);

            this.$prefixField.on('keyup', _.bind(this.onPrefixChange, this));

            if (this.$strategySelector.length) {
                this.$strategySelector.on('change', _.bind(this.onStrategyChange, this));
            }
        },

        /**
         * @param {Event} event
         */
        onStrategyChange: function(event) {
            if ($(event.target).val() === this.options.askStrategyName &&
                this.$prefixField.val() !== this.defaultPrefixValue
            ) {
                this.$createRedirectField.show();
            } else {
                this.$createRedirectField.hide();
            }
        },

        /**
         * @param {Event} event
         */
        onPrefixChange: function(event) {
            if (this.isAskStrategy() && $(event.target).val() !== this.defaultPrefixValue) {
                this.$createRedirectField.show();
            } else {
                this.$createRedirectField.hide();
            }
        },

        isAskStrategy: function() {
            if (this.$strategySelector) {
                return this.$strategySelector.val() === this.options.askStrategyName;
            } else {
                return this.options.isAskStrategy;
            }
        }
    });

    return PrefixRedirect;
});
