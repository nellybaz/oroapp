/*global gapi, window*/
(function() {
    'use strict';

    var startData = JSON.parse(atob(gapi.hangout.getStartData()));
    var origin = window.location.protocol + '//' + startData.host;
    var baseURL = origin + '/' + startData.basePath + '/';
    var iframeSrc = baseURL + 'iframe.html';
    var eventBroker = (function() {
        var eventBroker = {
            _events: {},
            on: function(name, handler) {
                if (!this._events[name]) {
                    this._events[name] = [];
                }
                this._events[name].push(handler);
            },
            off: function(name, handler) {
                if (!this._events[name]) {
                    return;
                }
                var index = this._events[name].indexOf(handler);
                if (index !== -1) {
                    this._events[name].splice(index, 1);
                }
                if (!this._events[name].length) {
                    delete this._events[name];
                }
            },
            trigger: function(name, data) {
                if (!this._events[name]) {
                    return;
                }
                for (var i = 0; i < this._events[name].length; i++) {
                    var handler = this._events[name][i];
                    if (typeof handler === 'function') {
                        handler(data);
                    }
                }
            },
            dispatchToInstance: function(name, data) {
                var event = {
                    token: startData.token,
                    name: name,
                    data: data
                };
                iframe.contentWindow.postMessage(event, origin);
            }
        };
        window.addEventListener('message', function(e) {
            if (e.origin === origin) {
                eventBroker.trigger(e.data.name, e.data.data);
            }
        });
        return eventBroker;
    })();

    document.head.insertAdjacentHTML('beforeend', '<link rel="stylesheet" href="' + baseURL + 'style.css" />');
    document.body.insertAdjacentHTML('afterbegin', '<iframe class="app-proxy" src="' + iframeSrc + '" />');
    document.body.insertAdjacentHTML('beforeend', '<div class="app-page"></div>');
    var iframe = document.querySelector('iframe.app-proxy');
    var appPage = document.querySelector('div.app-page');

    iframe.onload = function() {
        eventBroker.dispatchToInstance('application-start');
    };

    function onFormChange() {
        var data = {};
        if (!appPage) {
            return null;
        }
        // @TODO add support for multi-select, checkbox and radio-buttons
        var elements = appPage.querySelectorAll('input, select, textarea');
        for (var i = 0; i < elements.length; i++) {
            data[elements[i].name] = elements[i].value;
        }
        eventBroker.dispatchToInstance('form-data-change', data);
    }
    appPage.addEventListener('keyup', onFormChange);
    appPage.addEventListener('change', onFormChange);
    appPage.addEventListener('submit', function(event) { event.preventDefault(); });

    // Update page HTML
    eventBroker.on('set:appPageHTML', function(appPageHTML) {
        appPage.innerHTML = appPageHTML;
    });

    // Phone call tracking
    (function() {
        var phoneCallHandler = {
            /** @type {number|null} */
            _interval: null,

            /** @type {gapi.hangout.telephone.Call|null} */
            _call: null,

            /**
             * Starts tracking given call on state change
             *
             * @param {gapi.hangout.telephone.Call} call
             */
            track: function(call) {
                if (this._call) {
                    this.stopTracking();
                }
                this._call = call;
                if (this._call.getState().toUpperCase() === 'CONNECTED') {
                    this._onCallStart();
                }
                this._call.onCallStateChanged.add(this._onStateChange);
            },

            /**
             * Stops tracking current call
             */
            stopTracking: function() {
                if (this._call) {
                    this._call.onCallStateChanged.remove(this._onStateChange);
                    this._call = null;
                }
                this._resetInterval();
            },

            /**
             * Clears interval for 'call-is-going' event
             * @protected
             */
            _resetInterval: function() {
                clearInterval(this._interval);
                this._interval = null;
            },

            /**
             * Handles state change of phone call
             * @protected
             */
            _onStateChange: function(event) {
                switch (event.newState.toUpperCase()) {
                    case 'CONNECTED':
                        this._onCallStart();
                        break;
                    case 'DISCONNECTED':
                        this._onCallEnd();
                        break;
                    case 'RINGING':
                        this._resetInterval();
                        break;
                }
            },

            /**
             * Publishes event 'call-started' and sets interval handler to publish 'call-is-going'
             * @protected
             */
            _onCallStart: function() {
                var startedAt = new Date(Date.now() - this._call.getDuration());
                var call = this._call;
                eventBroker.dispatchToInstance('call-started', {
                    startedAt: startedAt.toISOString(),
                    number: this._call.getPhoneNumber()
                });
                this._interval = setInterval(function() {
                    eventBroker.dispatchToInstance('call-is-going', {
                        duration: call.getDuration()
                    });
                }, 1000);
            },

            /**
             * Publishes 'call-is-going' event and stops tracking a call
             * @protected
             */
            _onCallEnd: function() {
                if (this._call.getDuration()) {
                    eventBroker.dispatchToInstance('call-ended', {
                        endedAt: (new Date()).toISOString(),
                        duration: this._call.getDuration()
                    });
                }
                this.stopTracking();
            }
        };
        phoneCallHandler._onStateChange = phoneCallHandler._onStateChange.bind(phoneCallHandler);

        // a call is already started
        var calls = gapi.hangout.telephone.getCalls();
        if (calls[0]) {
            phoneCallHandler.track(calls[0]);
        }

        // listening initiating a call
        gapi.hangout.telephone.onCallInitiated.add(function(e) {
            phoneCallHandler.track(e.callInformation);
        });
    })();

    // Other calls tracking
    (function() {
        var otherCallHandler = {
            /** @type {number|null} */
            interval: null,

            /**
             * Marks the call as started
             *  - triggers event of call start
             *  - starts interval of publishing 'call-is-going' event
             */
            start: function() {
                var startedAt = this.startedAt = new Date();
                if (this.isGoing()) {
                    this.end();
                }
                eventBroker.dispatchToInstance('call-started', {
                    startedAt: startedAt.toISOString()
                });
                this.interval = setInterval(function() {
                    eventBroker.dispatchToInstance('call-is-going', {
                        duration: (new Date()) - startedAt
                    });
                }, 1000);
            },

            /**
             * Marks the call as ended
             *  - triggers event of call end
             *  - clears interval of publishing 'call-is-going' event
             */
            end: function() {
                if (this.isGoing()) {
                    var endedAt = new Date();
                    eventBroker.dispatchToInstance('call-ended', {
                        endedAt: endedAt.toISOString(),
                        duration: endedAt - this.startedAt
                    });
                    clearInterval(this.interval);
                    this.interval = null;
                }
            },

            /**
             * Checks if there's going a call
             *
             * @return {boolean}
             */
            isGoing: function() {
                return this.interval !== null;
            }
        };

        gapi.hangout.onEnabledParticipantsChanged.add(function() {
            // participants without OroHangoutApp and person id not is empty (not phone call)
            var participants = gapi.hangout.getParticipants().filter(function(participant) {
                return participant.hasAppEnabled === false && participant.person.id !== '';
            });

            if (!otherCallHandler.isGoing() && participants.length) {
                otherCallHandler.start();
            } else if (otherCallHandler.isGoing() && !participants.length) {
                otherCallHandler.end();
            }
        });
    })();
})();
