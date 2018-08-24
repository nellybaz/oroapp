define(['orosync/js/sync/wamp', 'backbone', 'requirejs-exposure'
    ], function(Wamp, Backbone, requirejsExposure) {
    'use strict';

    var exposure = requirejsExposure.disclose('orosync/js/sync/wamp');

    describe('orosync/js/sync/wamp', function() {
        var ab;
        var $;
        var session;
        beforeEach(function() {
            ab = jasmine.createSpyObj('ab', ['debug', 'connect']);
            $ = jasmine.createSpy('$');
            $.on = jasmine.createSpy('$.on');
            $.and.returnValue({on: $.on});
            $.ajax = jasmine.createSpy('$.ajax');
            session = jasmine.createSpyObj('session', ['subscribe', 'unsubscribe', 'close']);
            exposure.substitute('ab').by(ab);
            exposure.substitute('$').by($);
        });
        afterEach(function() {
            exposure.recover('ab');
            exposure.recover('$');
        });
        describe('create instance', function() {
            var wamp;
            var options;
            beforeEach(function() {
                options = {host: '127.0.0.1', syncTicketUrl: 'test_url'};
            });

            it('required options', function() {
                expect(function() {
                    wamp = new Wamp();
                }).toThrowError('host option is required');
            });

            it('debug mode', function() {
                wamp = new Wamp(options);
                expect(ab.debug).not.toHaveBeenCalled();
                options.debug = true;
                wamp = new Wamp(options);
                expect(ab.debug).toHaveBeenCalledWith(true, true, true);
            });

            it('connection open', function() {
                $.ajax.and.callFake(function(url, params) {
                    params.success({ticket: 'test_ticket'});
                });
                wamp = new Wamp(options);
                expect(ab.connect).toHaveBeenCalledWith(
                    jasmine.any(String),
                    jasmine.any(Function),
                    jasmine.any(Function),
                    wamp.options
                );
            });

            it('connection re-open', function() {
                wamp = new Wamp(options);
                // connection established
                wamp.session = session;
                ab.connect.calls.reset();
                wamp.connect();
                expect(ab.connect).not.toHaveBeenCalled();
            });

            it('implements Backbone.Events', function() {
                wamp = new Wamp(options);
                expect(wamp).toEqual(jasmine.objectContaining(Backbone.Events));
            });

            it('handle beforeunload event', function() {
                wamp = new Wamp(options);
                wamp.session = session;
                expect($).toHaveBeenCalledWith(window);
                expect($.on).toHaveBeenCalledWith('beforeunload', jasmine.any(Function));
                // execute callback
                $.on.calls.mostRecent().args[1]();
                expect(session.close).toHaveBeenCalled();
            });

            describe('connection callbacks', function() {
                var onConnect;
                var onHangup;
                beforeEach(function() {
                    $.ajax.and.callFake(function(url, params) {
                        params.success({ticket: 'test_ticket'});
                    });
                    wamp = new Wamp(options);
                    spyOn(wamp, 'trigger').and.callThrough();
                    onConnect = ab.connect.calls.mostRecent().args[1];
                    onHangup = ab.connect.calls.mostRecent().args[2];
                });

                it('on connect with empty channels queue', function() {
                    wamp.channels = {};
                    onConnect(session);
                    expect(wamp.session).toBe(session);
                    expect(wamp.trigger).toHaveBeenCalledWith('connection_established');
                    expect(session.subscribe).not.toHaveBeenCalled();
                });

                it('on connect with queid subscription', function() {
                    var callback11 = function() {};
                    var callback12 = function() {};
                    var callback21 = function() {};
                    wamp.channels = {
                        '/some/channel/1': [callback11, callback12],
                        '/some/channel/2': [callback21]
                    };
                    onConnect(session);
                    expect(wamp.session).toBe(session);
                    expect(wamp.trigger).toHaveBeenCalledWith('connection_established');
                    expect(session.subscribe.calls.count()).toEqual(3);
                    expect(session.subscribe).toHaveBeenCalledWith('/some/channel/1', callback11);
                    expect(session.subscribe).toHaveBeenCalledWith('/some/channel/1', callback12);
                    expect(session.subscribe).toHaveBeenCalledWith('/some/channel/2', callback21);
                    expect(session.subscribe).not.toHaveBeenCalledWith('/some/channel/2', callback11);
                });

                it('on hangup peacefully', function() {
                    wamp.session = session;
                    onHangup(0);
                    expect(wamp.session).toBeFalsy();
                });

                it('on hangup with error code', function() {
                    wamp.session = session;
                    onHangup(1);
                    expect(wamp.session).toBeFalsy();
                    expect(wamp.trigger).toHaveBeenCalledWith('connection_lost', jasmine.objectContaining({code: 1}));
                });
            });

            describe('subscription handling', function() {
                var wrappedCallback;
                var originalCallback1 = function() {};
                var originalCallback2 = function() {};
                var channel = 'some/channel';
                beforeEach(function() {
                    wamp = new Wamp(options);
                    wamp.session = session;
                });

                it('subscribe', function() {
                    wamp.subscribe(channel, originalCallback1);
                    expect(session.subscribe).toHaveBeenCalledWith(channel, jasmine.any(Function));
                    wrappedCallback = session.subscribe.calls.mostRecent().args[1];
                    expect(wrappedCallback).not.toBe(originalCallback1);
                    expect(wrappedCallback.origCallback).toBe(originalCallback1);
                    expect(wamp.channels[channel]).toEqual(jasmine.any(Array));
                    expect(wamp.channels[channel]).toContain(wrappedCallback);

                    wamp.subscribe(channel, originalCallback2);
                    wrappedCallback = session.subscribe.calls.mostRecent().args[1];
                    expect(wrappedCallback).not.toBe(originalCallback2);
                    expect(wrappedCallback.origCallback).toBe(originalCallback2);
                    expect(wamp.channels[channel]).toContain(wrappedCallback);
                });

                describe('unsubscribe', function() {
                    beforeEach(function() {
                        wamp.subscribe(channel, originalCallback1);
                        wamp.subscribe(channel, originalCallback2);
                        wrappedCallback = session.subscribe.calls.mostRecent().args[1];
                    });

                    it('with two parameters', function() {
                        expect(wamp.channels[channel].length).toEqual(2);

                        wamp.unsubscribe(channel, originalCallback1);
                        expect(session.unsubscribe).toHaveBeenCalledWith(channel, jasmine.any(Function));
                        expect(wamp.channels[channel]).toContain(wrappedCallback);
                        expect(wamp.channels[channel].length).toEqual(1);

                        wamp.unsubscribe(channel, originalCallback2);
                        expect(session.subscribe).toHaveBeenCalledWith(channel, wrappedCallback);
                        expect(wamp.channels[channel]).toBeUndefined();
                    });

                    it('by channle', function() {
                        expect(wamp.channels[channel].length).toEqual(2);

                        wamp.unsubscribe(channel);
                        expect(session.unsubscribe).toHaveBeenCalledWith(channel, undefined);
                        expect(wamp.channels[channel]).toBeUndefined();
                    });
                });
            });
        });
    });
});
