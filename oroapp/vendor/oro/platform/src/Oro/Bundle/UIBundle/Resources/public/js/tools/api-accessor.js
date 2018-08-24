/** @lends ApiAccessor */
define(function(require) {
    'use strict';

    /**
     * Abstraction of api access point. This class is by design to be initiated from server configuration.
     *
     * #### Sample usage of api_accessor with a full set of options provided(except `route_parameters_rename_map`).
     * Example of configuration provided on the server:
     * ``` yml
     * save_api_accessor:
     *     route: orocrm_opportunity_task_update # for example this route uses following mask
     *                         # to generate url /api/opportunity/{opportunity_id}/tasks/{id}
     *     http_method: POST
     *     headers:
     *         Api-Secret: ANS2DFN33KASD4F6OEV7M8
     *     default_route_parameters:
     *         opportunity_id: 23
     *     action: patch
     *     query_parameter_names: [action]
     * ```
     *
     * Then following code on the client:
     * ``` javascript
     * var apiAP = new ApiAccessror(serverConfiguration);
     * apiAP.send({id: 321}, {name: 'new name'}).then(function(result) {
     *     console.log(result)
     * })
     * ```
     * Will raise POST request to `/api/opportunity/23/tasks/321?action=patch` with body == `{name: 'new name'}`
     * and will put response to console after completion
     *
     * @class
     * @param {Object} options - Options container
     * @param {string} options.route - Required. Route name
     * @param {string} options.http_method - Http method to access this route (e.g. GET/POST/PUT/PATCH...)
     *                          By default `'GET'`.
     * @param {string} options.form_name - Optional. Wraps the request body into a form_name, so request will look like
     *                          `{<form_name>:<request_body>}`
     * @param {Object} options.headers - Optional. Allows to provide additional http headers
     * @param {Object} options.default_route_parameters - Optional. Provides default parameters for route,
     *                                                    this defaults will be merged the `urlParameters` to get url
     * @param {Object} options.route_parameters_rename_map - Optional. Allows to rename incoming parameters, which came
     *                                                    into send() function, to proper names.
     *
     *                                                    Please provide here an object with following structure:
     *                                                    `{<old-name>: <new-name>, ...}`
     * @param {Array.<string>} options.query_parameter_names - Optional. Array of parameter names to put into query
     *                          string (e.g. `?<parameter-name>=<value>&<parameter-name>=<value>`).
     *                          (The reason of adding this argument is that FOSRestBundle doesn’t provides acceptable
     *                          query parameters for client usage, so it is required to specify list of them)
     * @augments [BaseClass](./base-class.md)
     * @exports ApiAccessor
     */
    var ApiAccessor;

    var _ = require('underscore');
    var mediator = require('oroui/js/mediator');
    var $ = require('jquery');
    var BaseClass = require('../base-class');
    var RouteModel = require('../app/models/route-model');
    var apiAccessorUnloadMessagesGroup = require('./api-accessor-unload-messages-group');

    ApiAccessor = BaseClass.extend(/** @exports ApiAccessor.prototype */{
        DEFAULT_HEADERS: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },

        DEFAULT_HTTP_METHOD: 'GET',

        clientCacheExpires: 30 * 60 * 1000,

        formName: void 0,

        /**
         * @param {Object} options passed to the constructor
         */
        initialize: function(options) {
            if (!options) {
                options = {};
            }
            this.initialOptions = options;
            this.httpMethod = options.http_method ? options.http_method.toUpperCase() : this.DEFAULT_HTTP_METHOD;
            this.headers = _.extend({}, this.DEFAULT_HEADERS, options.headers || {});
            this.formName = options.form_name;
            this.routeParametersRenameMap = options.route_parameters_rename_map || {};
            // init route model
            if (!options.route) {
                throw Error('"route" is a required option');
            }
            this.route = new RouteModel(_.extend({}, options.default_route_parameters, {
                routeName: options.route,
                routeQueryParameterNames: options.query_parameter_names
            }));
            this.cache = {};
            if (options.clientCache && options.clientCache.enable) {
                if (!this.isCacheAllowed()) {
                    throw new Error('Cache is not allowed');
                }
                this.enableClientCache = true;
                if (options.clientCache.expires) {
                    this.clientCacheExpires = options.clientCache.expires;
                }
            }
        },

        /**
         * Returns true if selected HTTP_METHOD allows caching
         *
         * @returns {boolean}
         */
        isCacheAllowed: function() {
            return this.httpMethod === 'GET' || this.httpMethod === 'OPTIONS' || this.httpMethod === 'HEAD';
        },

        /**
         * Clears response cache
         */
        clearCache: function() {
            this.cache = {};
            this.trigger('cache:clear');
        },

        /**
         * Validates url parameters
         *
         * @param {Object} urlParameters - Url parameters to compose the url
         * @returns {boolean} - true, if parameters are valid and route url could be built
         */
        validateUrlParameters: function(urlParameters) {
            return this.route.validateParameters(this.prepareUrlParameters(urlParameters));
        },

        /**
         * Sends request to the server and returns $.Promise instance with abort() support
         *
         * @param {Object} urlParameters - Url parameters to compose the url
         * @param {Object} body - Request body
         * @param {Object} headers - Headers to send with the request
         * @param {Object} options - Additional options
         * @param {string} options.processingMessage - Shows notification message while request is going
         * @param {boolean|string} options.preventWindowUnload - Prevent window from being unloaded without user
         *                          confirmation until request is finished.
         *                          If true provided - page unload will be prevented with default message.
         *                          If string provided - please describe change in it. This string will be added to
         *                              list on changes.
         *
         *                          Default message will be like:
         *                            Server is being updated and the following changes might be lost:
         *                            {messages list, each on new line}
         *
         * @returns {$.Promise} - $.Promise instance with abort() support
         */
        send: function(urlParameters, body, headers, options) {
            var promise = this._makeAjaxRequest({
                headers: this.getHeaders(headers),
                type: this.httpMethod,
                url: this.getUrl(urlParameters),
                data: JSON.stringify(this.formatBody(body)),
                errorHandlerMessage: this.getErrorHandlerMessage(options)
            });
            var resultPromise = promise.then(_.bind(this.formatResult, this), _.bind(this.onAjaxError, this));
            if (options && options.processingMessage) {
                mediator.execute('showProcessingMessage', options.processingMessage, resultPromise);
            }
            if (options && options.preventWindowUnload) {
                apiAccessorUnloadMessagesGroup.hold(options.preventWindowUnload);
                resultPromise.always(function() {
                    apiAccessorUnloadMessagesGroup.release(options.preventWindowUnload);
                });
            }
            resultPromise.abort = _.bind(promise.abort, promise);
            return resultPromise;
        },

        /**
         * Get error handler message attribute
         *
         * @param options
         * @returns {boolean} true if need to use global handler and false if not
         * @protected
         */
        getErrorHandlerMessage: function(options) {
            var errorHandlerMessage = true;
            if (_.has(options, 'errorHandlerMessage') && options.errorHandlerMessage !== undefined) {
                errorHandlerMessage = options.errorHandlerMessage;
            }

            return errorHandlerMessage;
        },

        /**
         * Makes Ajax request or returns result from cache
         *
         * @param {Object} options - options to pass to ajax call
         * @protected
         */
        _makeAjaxRequest: function(options) {
            if (this.enableClientCache) {
                var hash = this.hashCode(options.url);
                var time = (new Date()).getTime();
                var cacheRecord = this.cache[hash];
                if (!cacheRecord || cacheRecord.expires < time) {
                    cacheRecord = this.cache[hash] = {
                        expires: time + this.clientCacheExpires,
                        request: $.ajax(options)
                    };
                    // remove item from cache when request fails
                    cacheRecord.request.fail(_.bind(function() {
                        delete this.cache[hash];
                    }, this));
                }
                return cacheRecord.request;
            }
            return $.ajax(options);
        },

        /**
         * Returns hash code of url
         *
         * @param {string} url
         * @returns {string}
         */
        hashCode: function(url) {
            return url;
        },

        /**
         * Returns true if data is cached for concrete urlParameters
         *
         * @param {Object} urlParameters - url parameters to check
         * @protected
         */
        isCacheExistsFor: function(urlParameters) {
            if (this.enableClientCache) {
                var hash = this.hashCode(this.getUrl(urlParameters));
                var time = (new Date()).getTime();
                var cacheRecord = this.cache[hash];
                return cacheRecord && cacheRecord.expires > time;
            }
            return false;
        },

        /**
         * Prepares headers for the request.
         *
         * @param {Object} headers - Headers to merge into the default list
         * @returns {Object}
         */
        getHeaders: function(headers) {
            return _.extend({}, this.headers, headers || {});
        },

        /**
         * Prepares url parameters before the url build
         *
         * @param urlParameters
         * @returns {Object}
         */
        prepareUrlParameters: function(urlParameters) {
            for (var oldName in this.routeParametersRenameMap) {
                if (this.routeParametersRenameMap.hasOwnProperty(oldName)) {
                    var newName = this.routeParametersRenameMap[oldName];
                    urlParameters[newName] = urlParameters[oldName];
                }
            }
            return urlParameters;
        },

        /**
         * Prepares url for the request.
         *
         * @param {Object} urlParameters - Map of url parameters to use
         * @returns {string}
         */
        getUrl: function(urlParameters) {
            return this.route.getUrl(this.prepareUrlParameters(urlParameters));
        },

        /**
         * Prepares the request body.
         *
         * @param {Object} body - Map of the url parameters to use
         * @returns {Object}
         */
        formatBody: function(body) {
            var formattedBody;
            if (this.formName) {
                formattedBody = {};
                formattedBody[this.formName] = body;
            } else {
                formattedBody = body;
            }
            return formattedBody;
        },

        /**
         * Formats response before it is sent out from this api accessor.
         *
         * @param {Object} response
         * @returns {Object}
         */
        formatResult: function(response) {
            // if we didn't receive any content, we make assumption about what changed
            // based on http method (for example when we send "DELETE" - entity was probably removed)
            if (typeof response === 'undefined') {
                return _.pick(this, 'httpMethod');
            }

            return response;
        },

        onAjaxError: function(xhr) {
            return xhr;
        }
    });

    return ApiAccessor;
});
