define(function(require) {
    'use strict';
    var JsPlumbOverlayManager = require('./jsplumb-overlay-manager');
    var _ = require('underscore');
    var Graph = require('./path-finder/graph');
    var Rectangle = require('./path-finder/rectangle');
    var finderSettings = require('./path-finder/settings');
    var Finder = require('./path-finder/finder');
    var directions = require('./path-finder/directions');

    function JsPlumbSmartlineManager(jsPlumbInstance, settings) {
        this.settings = _.extend({}, this.settings, settings);
        this.jsPlumbInstance = jsPlumbInstance;
        this.jsPlumbOverlayManager = new JsPlumbOverlayManager(this);
        this.cache = {
            state: {},
            connections: {}
        };
        this.debouncedCalculateOverlays = _.debounce(_.bind(this.jsPlumbOverlayManager.calculate,
            this.jsPlumbOverlayManager), 50);
    }

    window.getLastRequest = function() {
        return JSON.stringify(JsPlumbSmartlineManager.lastRequest);
    };

    JsPlumbSmartlineManager.prototype = {
        settings: {
            connectionWidth: 12,
            blockVMargin: 8,
            blockHMargin: 4
        },

        isCacheValid: function() {
            return _.isEqual(this.getState(), this.cache.state);
        },

        getConnectionPath: function(connector) {
            if (!this.isCacheValid()) {
                this.refreshCache();
            }

            var cacheRecord = this.cache.connections[connector.getId()];
            if (!cacheRecord) {
                return [];
            }
            return _.clone(cacheRecord.points);
        },

        getNaivePathLength: function(fromRect, toRect) {
            if (fromRect === toRect) {
                return 0;
            }
            return Math.abs(fromRect.bottom - toRect.top) +
                Math.max(0, fromRect.left - toRect.right, toRect.left - fromRect.right) +
                ((fromRect.bottom - toRect.top > 0) ? 1200 : 0);
        },

        getState: function() {
            var state = {
                    rectangles: {},
                    connections: []
                };
            var endpoints = this.jsPlumbInstance.sourceEndpointDefinitions;
            for (var id in endpoints) {
                if (endpoints.hasOwnProperty(id)) {
                    state.rectangles[id] = this.jsPlumbInstance.getCachedData(id);
                }
            }

            var connections = this.jsPlumbInstance.getConnections();
            for (var i = connections.length - 1; i >= 0; i--) {
                var conn = connections[i];
                if (conn.sourceId in state.rectangles && conn.targetId in state.rectangles) {
                    state.connections.push([conn.connector.getId(), conn.sourceId, conn.targetId]);
                }
            }

            return state;
        },

        refreshCache: function() {
            var _this = this;
            var connections = [];
            var rects = {};
            var graph = new Graph();
            var settings = this.settings;
            this.cache.state = this.getState();
            this.cache.connections = {};
            _.each(this.jsPlumbInstance.sourceEndpointDefinitions, function(endPoint, id) {
                var clientRect;
                var el = document.getElementById(id);
                if (el) {
                    clientRect = new Rectangle(
                        el.offsetLeft - settings.blockHMargin,
                        el.offsetTop - settings.blockVMargin,
                        el.offsetWidth + settings.blockHMargin * 2,
                        el.offsetHeight + settings.blockVMargin * 2);
                    rects[id] = clientRect;
                    clientRect.cid = id;
                    graph.rectangles.push(clientRect);
                }
            });

            if (graph.rectangles.length < 1) {
                return;
            }

            graph.build();
            finderSettings.recommendedConnectionWidth = settings.connectionWidth;

            _.each(this.jsPlumbInstance.getConnections(), function(conn) {
                if (conn.sourceId in rects && conn.targetId in rects && conn.source && conn.target) {
                    connections.push([conn.sourceId, conn.targetId, this.getNaivePathLength(rects[conn.sourceId],
                        rects[conn.targetId]), conn]);
                }
            }, this);

            connections.sort(function(a, b) {
                return a[2] - b[2];
            });

            _.each(connections, function(conn) {
                var finder = new Finder(graph);

                finder.addTo(graph.getPathFromCid(conn[1], directions.BOTTOM_TO_TOP));
                finder.addFrom(graph.getPathFromCid(conn[0], directions.TOP_TO_BOTTOM));

                var path = finder.find();
                if (path) {
                    graph.updateWithPath(path);
                    _this.cache.connections[conn[3].connector.getId()] = {
                        connection: conn[3],
                        path: path
                    };
                }
            });

            graph.locateAxises();

            _.each(this.cache.connections, function(item) {
                item.points = item.path.points.reverse();
                delete item.path;
            });

            _.defer(_.bind(this.jsPlumbInstance.repaintEverything, this.jsPlumbInstance));

            this.debouncedCalculateOverlays();

            // debug code
            JsPlumbSmartlineManager.lastRequest = {
                sources: graph.rectangles.map(function(item) {
                    return [item.cid, item.left, item.top, item.width, item.height];
                }),
                connections: connections.map(function(item) {return item.slice(0, 2);})
            };
        }
    };

    return JsPlumbSmartlineManager;
});
