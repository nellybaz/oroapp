define(function(require) {
    'use strict';

    var BaseController = require('oroui/js/app/controllers/base/controller');
    var PageView = require('oroui/js/app/views/page-view');
    var module = require('module');
    var _ = require('underscore');

    var config = module.config();
    config = _.extend({
        showLoadingMaskOnStartup: false
    }, config);

    /**
     * Init PageView
     */
    BaseController.addToReuse('page', PageView, {
        el: 'body',
        keepElement: true,
        regions: {
            mainContainer: '#container',
            messages: '#flash-messages'
        }
    });

    /**
     * Init PageMessagesView
     */
    BaseController.loadBeforeAction([
        'oroui/js/app/views/page/messages-view'
    ], function(PageMessagesView) {
        BaseController.addToReuse('messages', PageMessagesView, {
            el: 'region:messages'
        });
    });

    /**
     * Init PageContentView
     */
    BaseController.loadBeforeAction([
        'oroui/js/app/views/page/content-view'
    ], function(PageContentView) {
        BaseController.addToReuse('content', PageContentView, {
            el: 'region:mainContainer'
        });
    });

    /**
     * Init PageLoadingMaskView
     */
    BaseController.loadBeforeAction([
        'oroui/js/mediator',
        'oroui/js/app/views/loading-mask-view'
    ], function(mediator, LoadingMaskView) {
        BaseController.addToReuse('loadingMask', {
            compose: function() {
                this.view = new LoadingMaskView({
                    container: 'body',
                    hideDelay: 25
                });
                mediator.setHandler('showLoading', this.view.show, this.view);
                mediator.setHandler('hideLoading', this.view.hide, this.view);
                mediator.on('page:beforeChange', this.view.show, this.view);
                mediator.on('page:afterChange', this.view.hide, this.view);
                if (config.showLoadingMaskOnStartup) {
                    this.view.show();
                }
            }
        });
    });
});
