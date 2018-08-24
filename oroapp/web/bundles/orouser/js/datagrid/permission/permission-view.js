define(function(require) {
    'use strict';

    var PermissionView;
    var _ = require('underscore');
    var BaseView = require('oroui/js/app/views/base/view');
    var DropdownMenuCollectionView = require('oroui/js/app/views/dropdown-menu-collection-view');

    PermissionView = BaseView.extend({
        tagName: 'li',
        className: 'action-permissions__item dropdown',
        template: require('tpl!orouser/templates/datagrid/permission/permission-view.html'),
        events: {
            'shown.bs.dropdown': 'onDropdownOpen',
            'hide.bs.dropdown': 'onDropdownClose'
        },
        listen: {
            'change:access_level model': 'render'
        },
        id: function() {
            return 'ActionPermissionsCell-' + this.cid;
        },

        getTemplateData: function() {
            var data = PermissionView.__super__.getTemplateData.call(this);
            data.dropdownTarget = '#' + _.result(this, 'id');
            data.isAccessLevelChanged = this.model.isAccessLevelChanged();
            return data;
        },

        render: function() {
            var dropdown = this.subview('dropdown');
            this.$el.trigger('tohide.bs.dropdown');
            if (dropdown) {
                dropdown.$el.detach();
            }
            PermissionView.__super__.render.call(this);
            if (dropdown) {
                this.$el.append(dropdown.$el);
            }
        },

        onDropdownOpen: function(e) {
            var dropdown = this.subview('dropdown');
            var accessLevels = this.model.accessLevels;
            if (!dropdown) {
                dropdown = new DropdownMenuCollectionView({
                    className: [
                        'dropdown-menu',
                        'dropdown-menu-collection',
                        'dropdown-menu__permissions-item'
                    ].join(' '),
                    collection: accessLevels,
                    keysMap: {
                        id: 'access_level',
                        text: 'access_level_label'
                    },
                    dropdownMenuOptions: {
                        container: true
                    }
                });
                this.listenTo(dropdown, 'selected', this.onAccessLevelSelect);
                this.subview('dropdown', dropdown);
                this.$el.append(dropdown.$el);
            }
            if (!accessLevels.length) {
                accessLevels.fetch({
                    success: function(collection) {
                        _.each(collection.models, function(model) {
                            if (isNaN(model.get('access_level'))) {
                                collection.remove(model);
                            }
                        });
                    }
                });
            }
            this.$('.action-permissions__item-wrapper').addClass('active');
        },

        onDropdownClose: function(e) {
            this.$('.action-permissions__item-wrapper').removeClass('active');
        },

        onAccessLevelSelect: function(patch) {
            this.model.set(patch);
        }
    });

    return PermissionView;
});
