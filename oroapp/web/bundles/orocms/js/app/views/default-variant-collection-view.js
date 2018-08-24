define(function(require) {
    'use strict';

    var DefaultVariantCollectionView;
    var BaseView = require('oroui/js/app/views/base/view');
    var mediator = require('oroui/js/mediator');
    var $ = require('jquery');
    var _ = require('underscore');

    DefaultVariantCollectionView = BaseView.extend({
        $collection: null,

        options: {
            defaultSelector: '[name$="[default]"]',
            itemSelector: '[data-role="content-variant-item"]',
            defaultItemClass: 'content-variant-item-default'
        },

        /**
         * @inheritDoc
         */
        initialize: function(options) {
            this.options = $.extend(true, {}, this.options, options || {});

            this.$el.on(
                'click',
                this.options.defaultSelector,
                _.bind(
                    function(e) {
                        this.onDefaultChange($(e.target));
                    },
                    this
                )
            );
            mediator.on('cms:content-variant-collection:add', this.handleAdd, this);
            mediator.on('cms:content-variant-collection:remove', this.handleRemove, this);

            this.handleAdd();
        },

        handleRemove: function($container) {
            // Check is default variant removed
            if ($container.find(this.options.defaultSelector + ':checked').length === 0) {
                this.checkDefaultVariant();
            }
        },

        handleAdd: function() {
            if (this.$el.find(this.options.itemSelector).length &&
                this.$el.find(this.options.defaultSelector + ':checked').length === 0
            ) {
                this.checkDefaultVariant();
            }
        },

        checkDefaultVariant: function() {
            var $default = this.$el.find(this.options.defaultSelector + ':not(:checked)').first();
            $default.prop('checked', true).trigger('change');

            this.onDefaultChange($default);
        },

        onDefaultChange: function($default) {
            this.$el.find('.' + this.options.defaultItemClass).removeClass(this.options.defaultItemClass);
            $default.closest(this.options.itemSelector).addClass(this.options.defaultItemClass);
        }
    });

    return DefaultVariantCollectionView;
});
