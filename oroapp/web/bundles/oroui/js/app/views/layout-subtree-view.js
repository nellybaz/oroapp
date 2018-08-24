define(function(require) {
    'use strict';

    var LayoutSubtreeView;
    var BaseView = require('oroui/js/app/views/base/view');
    var LoadingMaskView = require('oroui/js/app/views/loading-mask-view');
    var LayoutSubtreeManager = require('oroui/js/layout-subtree-manager');
    var $ = require('jquery');
    var _ = require('underscore');

    LayoutSubtreeView = BaseView.extend({
        options: {
            blockId: '',
            reloadEvents: [],
            showLoading: true,
            restoreFormState: false
        },

        formState: null,

        initialize: function(options) {
            this.options = $.extend(true, {}, this.options, options);
            LayoutSubtreeView.__super__.initialize.apply(this, arguments);
            LayoutSubtreeManager.addView(this);
        },

        dispose: function() {
            LayoutSubtreeManager.removeView(this);
            return LayoutSubtreeView.__super__.dispose.apply(this, arguments);
        },

        setContent: function(content) {
            this._hideLoading();
            this.disposePageComponents();

            this.$el
                .trigger('content:remove')
                .html($(content).children())
                .trigger('content:changed');
        },

        beforeContentLoading: function() {
            this._showLoading();

            if (this.options.restoreFormState) {
                this._saveFormState();
            }
        },

        afterContentLoading: function() {
            this._restoreFormState();
        },

        contentLoadingFail: function() {
            this._hideLoading();
        },

        _showLoading: function() {
            if (!this.options.showLoading) {
                return;
            }
            var $container = this.$el.closest('[data-role="layout-subtree-loading-container"]');
            if (!$container.length) {
                $container = this.$el;
            }
            this.subview('loadingMask', new LoadingMaskView({
                container: $container
            }));
            this.subview('loadingMask').show();
        },

        _hideLoading: function() {
            if (!this.options.showLoading) {
                return;
            }
            this.removeSubview('loadingMask');
        },

        _saveFormState: function() {
            this.formState = {};

            _.each(this._getInputs(), _.bind(function(input) {
                var name = input.name;
                var value = input.value;

                if ($(input).is(':checkbox, :radio')) {
                    name += ':' + value;
                    value = input.checked;
                }
                this.formState[name] = value;
            }, this));
        },

        _restoreFormState: function() {
            if (!this.formState) {
                return;
            }

            _.each(this._getInputs(), _.bind(function(input) {
                var name = input.name;
                var isRadio = $(input).is(':checkbox, :radio');
                if (isRadio) {
                    name += ':' + input.value;
                }

                var savedInput = this.formState[name];
                if (savedInput === undefined || (isRadio && !savedInput)) {
                    return;
                }

                var $input = $(input);
                if (isRadio) {
                    $input.click();
                } else {
                    $input.val(savedInput).change();
                }
            }, this));
        },

        _getInputs: function() {
            return this.$el.find('input, textarea, select').filter('[name!=""]');
        }
    });

    return LayoutSubtreeView;
});
