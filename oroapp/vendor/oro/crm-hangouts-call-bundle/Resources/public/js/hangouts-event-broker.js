define(function(require) {
    'use strict';

    var HangoutsEventBroker;
    var _ = require('underscore');
    var tools = require('oroui/js/tools');
    var BaseClass = require('oroui/js/base-class');

    HangoutsEventBroker = BaseClass.extend({
        /** @type {number|null} */
        interval: null,

        /** @type {string|null} */
        token: null,

        /** @type {Array} */
        history: null,

        /**
         * @inheritDoc
         * @param {Object} options
         * @param {string=} options.token a key to distinguish hangout call process
         */
        initialize: function(options) {
            this.token = options.token || tools.createRandomUUID();
            this.history = [];
            setInterval(_.bind(this._checkStorage, this), 50);
            HangoutsEventBroker.__super__.initialize.call(this, options);
        },

        /**
         * @inheritDoc
         */
        dispose: function() {
            if (this.disposed) {
                return;
            }
            clearInterval(this.interval);
            HangoutsEventBroker.__super__.dispose.call(this);
        },

        /**
         * Returns token for the instance
         *
         * @return {string}
         */
        getToken: function() {
            return this.token;
        },

        /**
         * Allows to execute handlers related to a specific context for missed events
         *
         * @param {Object} context
         */
        repeatTriggerFor: function(context) {
            var message;
            var events;
            if (!this._events) {
                // nothing to replay
                return;
            }
            for (var i = 0; i < this.history.length; i++) {
                message = this.history[i];
                events = this._events[message.name];
                if (!events) {
                    continue;
                }
                for (var j = 0; j < events.length; j++) {
                    if (events[j].context === context) {
                        events[j].callback.call(events[j].ctx, message.data);
                    }
                }
            }
        },

        /**
         * Check the storage and triggers events
         *
         * @protected
         */
        _checkStorage: function() {
            var key = 'from-app:' + this.token;
            var events = localStorage.getItem(key);
            if (events) {
                localStorage.removeItem(key);
                events = JSON.parse(events);
                for (var i = 0; i < events.length; i++) {
                    this.trigger(events[i].name, events[i].data);
                    this.history.push(events[i]);
                }
            }
        },

        /**
         * Pushes message to hangout application
         *
         * @param {string} name
         * @param {*} data
         */
        dispatchToApp: function(name, data) {
            var key = 'to-app:' + this.token;
            localStorage.setItem(key, JSON.stringify({
                name: name,
                data: data
            }));
        }
    });

    return HangoutsEventBroker;
});
