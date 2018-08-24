/*!
 * Chaplin 1.2.0
 *
 * Chaplin may be freely distributed under the MIT license.
 * For all details and documentation:
 * http://chaplinjs.org
 */

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    define(['backbone', 'underscore'], factory);
  } else if (typeof module === 'object' && module && module.exports) {
    module.exports = factory(require('backbone'), require('underscore'));
  } else if (typeof require === 'function') {
    factory(window.Backbone, window._ || window.Backbone.utils);
  } else {
    throw new Error('Chaplin requires Common.js or AMD modules');
  }
}(this, function(Backbone, _) {
  function require(name) {
    return {backbone: Backbone, underscore: _}[name];
  }

  require =(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';
module.exports = {
  Application: require('./chaplin/application'),
  Composer: require('./chaplin/composer'),
  Controller: require('./chaplin/controllers/controller'),
  Dispatcher: require('./chaplin/dispatcher'),
  Composition: require('./chaplin/lib/composition'),
  EventBroker: require('./chaplin/lib/event_broker'),
  History: require('./chaplin/lib/history'),
  Route: require('./chaplin/lib/route'),
  Router: require('./chaplin/lib/router'),
  support: require('./chaplin/lib/support'),
  SyncMachine: require('./chaplin/lib/sync_machine'),
  utils: require('./chaplin/lib/utils'),
  mediator: require('./chaplin/mediator'),
  Collection: require('./chaplin/models/collection'),
  Model: require('./chaplin/models/model'),
  CollectionView: require('./chaplin/views/collection_view'),
  Layout: require('./chaplin/views/layout'),
  View: require('./chaplin/views/view')
};


},{"./chaplin/application":2,"./chaplin/composer":3,"./chaplin/controllers/controller":4,"./chaplin/dispatcher":5,"./chaplin/lib/composition":6,"./chaplin/lib/event_broker":7,"./chaplin/lib/history":8,"./chaplin/lib/route":9,"./chaplin/lib/router":10,"./chaplin/lib/support":11,"./chaplin/lib/sync_machine":12,"./chaplin/lib/utils":13,"./chaplin/mediator":14,"./chaplin/models/collection":15,"./chaplin/models/model":16,"./chaplin/views/collection_view":17,"./chaplin/views/layout":18,"./chaplin/views/view":19}],2:[function(require,module,exports){
'use strict';
var Application, Backbone, Composer, Dispatcher, EventBroker, Layout, Router, _, mediator;

_ = require('underscore');

Backbone = require('backbone');

Composer = require('./composer');

Dispatcher = require('./dispatcher');

Router = require('./lib/router');

Layout = require('./views/layout');

EventBroker = require('./lib/event_broker');

mediator = require('./mediator');

module.exports = Application = (function() {
  Application.extend = Backbone.Model.extend;

  _.extend(Application.prototype, EventBroker);

  Application.prototype.title = '';

  Application.prototype.dispatcher = null;

  Application.prototype.layout = null;

  Application.prototype.router = null;

  Application.prototype.composer = null;

  Application.prototype.started = false;

  function Application(options) {
    if (options == null) {
      options = {};
    }
    this.initialize(options);
  }

  Application.prototype.initialize = function(options) {
    if (options == null) {
      options = {};
    }
    if (this.started) {
      throw new Error('Application#initialize: App was already started');
    }
    this.initRouter(options.routes, options);
    this.initDispatcher(options);
    this.initLayout(options);
    this.initComposer(options);
    this.initMediator();
    return this.start();
  };

  Application.prototype.initDispatcher = function(options) {
    return this.dispatcher = new Dispatcher(options);
  };

  Application.prototype.initLayout = function(options) {
    if (options == null) {
      options = {};
    }
    if (options.title == null) {
      options.title = this.title;
    }
    return this.layout = new Layout(options);
  };

  Application.prototype.initComposer = function(options) {
    if (options == null) {
      options = {};
    }
    return this.composer = new Composer(options);
  };

  Application.prototype.initMediator = function() {
    return Object.seal(mediator);
  };

  Application.prototype.initRouter = function(routes, options) {
    this.router = new Router(options);
    return typeof routes === "function" ? routes(this.router.match) : void 0;
  };

  Application.prototype.start = function() {
    this.router.startHistory();
    this.started = true;
    this.disposed = false;
    return Object.seal(this);
  };

  Application.prototype.dispose = function() {
    var i, len, prop, properties;
    if (this.disposed) {
      return;
    }
    properties = ['dispatcher', 'layout', 'router', 'composer'];
    for (i = 0, len = properties.length; i < len; i++) {
      prop = properties[i];
      if (this[prop] != null) {
        this[prop].dispose();
      }
    }
    this.disposed = true;
    return Object.freeze(this);
  };

  return Application;

})();


},{"./composer":3,"./dispatcher":5,"./lib/event_broker":7,"./lib/router":10,"./mediator":14,"./views/layout":18,"backbone":"backbone","underscore":"underscore"}],3:[function(require,module,exports){
'use strict';
var Backbone, Composer, Composition, EventBroker, _, mediator;

_ = require('underscore');

Backbone = require('backbone');

Composition = require('./lib/composition');

EventBroker = require('./lib/event_broker');

mediator = require('./mediator');

module.exports = Composer = (function() {
  Composer.extend = Backbone.Model.extend;

  _.extend(Composer.prototype, EventBroker);

  Composer.prototype.compositions = null;

  function Composer() {
    this.initialize.apply(this, arguments);
  }

  Composer.prototype.initialize = function(options) {
    if (options == null) {
      options = {};
    }
    this.compositions = {};
    mediator.setHandler('composer:compose', this.compose, this);
    mediator.setHandler('composer:retrieve', this.retrieve, this);
    return this.subscribeEvent('dispatcher:dispatch', this.cleanup);
  };

  Composer.prototype.compose = function(name, second, third) {
    if (typeof second === 'function') {
      if (third || second.prototype.dispose) {
        if (second.prototype instanceof Composition) {
          return this._compose(name, {
            composition: second,
            options: third
          });
        } else {
          return this._compose(name, {
            options: third,
            compose: function() {
              var autoRender, disabledAutoRender;
              if (second.prototype instanceof Backbone.Model || second.prototype instanceof Backbone.Collection) {
                this.item = new second(null, this.options);
              } else {
                this.item = new second(this.options);
              }
              autoRender = this.item.autoRender;
              disabledAutoRender = autoRender === void 0 || !autoRender;
              if (disabledAutoRender && typeof this.item.render === 'function') {
                return this.item.render();
              }
            }
          });
        }
      }
      return this._compose(name, {
        compose: second
      });
    }
    if (typeof third === 'function') {
      return this._compose(name, {
        compose: third,
        options: second
      });
    }
    return this._compose(name, second);
  };

  Composer.prototype._compose = function(name, options) {
    var composition, current, isPromise, returned;
    if (typeof options.compose !== 'function' && (options.composition == null)) {
      throw new Error('Composer#compose was used incorrectly');
    }
    if (options.composition != null) {
      composition = new options.composition(options.options);
    } else {
      composition = new Composition(options.options);
      composition.compose = options.compose;
      if (options.check) {
        composition.check = options.check;
      }
    }
    current = this.compositions[name];
    if (current && current.check(composition.options)) {
      current.stale(false);
    } else {
      if (current) {
        current.dispose();
      }
      returned = composition.compose(composition.options);
      isPromise = typeof (returned != null ? returned.then : void 0) === 'function';
      composition.stale(false);
      this.compositions[name] = composition;
    }
    if (isPromise) {
      return returned;
    } else {
      return this.compositions[name].item;
    }
  };

  Composer.prototype.retrieve = function(name) {
    var active;
    active = this.compositions[name];
    if (active && !active.stale()) {
      return active.item;
    }
  };

  Composer.prototype.cleanup = function() {
    var composition, i, key, len, ref;
    ref = Object.keys(this.compositions);
    for (i = 0, len = ref.length; i < len; i++) {
      key = ref[i];
      composition = this.compositions[key];
      if (composition.stale()) {
        composition.dispose();
        delete this.compositions[key];
      } else {
        composition.stale(true);
      }
    }
  };

  Composer.prototype.disposed = false;

  Composer.prototype.dispose = function() {
    var i, key, len, ref;
    if (this.disposed) {
      return;
    }
    this.unsubscribeAllEvents();
    mediator.removeHandlers(this);
    ref = Object.keys(this.compositions);
    for (i = 0, len = ref.length; i < len; i++) {
      key = ref[i];
      this.compositions[key].dispose();
    }
    delete this.compositions;
    this.disposed = true;
    return Object.freeze(this);
  };

  return Composer;

})();


},{"./lib/composition":6,"./lib/event_broker":7,"./mediator":14,"backbone":"backbone","underscore":"underscore"}],4:[function(require,module,exports){
'use strict';
var Backbone, Controller, EventBroker, _, mediator, utils,
  slice = [].slice;

_ = require('underscore');

Backbone = require('backbone');

mediator = require('../mediator');

EventBroker = require('../lib/event_broker');

utils = require('../lib/utils');

module.exports = Controller = (function() {
  Controller.extend = Backbone.Model.extend;

  _.extend(Controller.prototype, Backbone.Events);

  _.extend(Controller.prototype, EventBroker);

  Controller.prototype.view = null;

  Controller.prototype.redirected = false;

  function Controller() {
    this.initialize.apply(this, arguments);
  }

  Controller.prototype.initialize = function() {};

  Controller.prototype.beforeAction = function() {};

  Controller.prototype.adjustTitle = function(subtitle) {
    return mediator.execute('adjustTitle', subtitle);
  };

  Controller.prototype.reuse = function() {
    var method;
    method = arguments.length === 1 ? 'retrieve' : 'compose';
    return mediator.execute.apply(mediator, ["composer:" + method].concat(slice.call(arguments)));
  };

  Controller.prototype.compose = function() {
    throw new Error('Controller#compose was moved to Controller#reuse');
  };

  Controller.prototype.redirectTo = function() {
    this.redirected = true;
    return utils.redirectTo.apply(utils, arguments);
  };

  Controller.prototype.disposed = false;

  Controller.prototype.dispose = function() {
    var i, key, len, member, ref;
    if (this.disposed) {
      return;
    }
    ref = Object.keys(this);
    for (i = 0, len = ref.length; i < len; i++) {
      key = ref[i];
      member = this[key];
      if (typeof (member != null ? member.dispose : void 0) === 'function') {
        member.dispose();
        delete this[key];
      }
    }
    this.unsubscribeAllEvents();
    this.stopListening();
    this.disposed = true;
    return Object.freeze(this);
  };

  return Controller;

})();


},{"../lib/event_broker":7,"../lib/utils":13,"../mediator":14,"backbone":"backbone","underscore":"underscore"}],5:[function(require,module,exports){
'use strict';
var Backbone, Dispatcher, EventBroker, _, mediator, utils;

_ = require('underscore');

Backbone = require('backbone');

EventBroker = require('./lib/event_broker');

utils = require('./lib/utils');

mediator = require('./mediator');

module.exports = Dispatcher = (function() {
  Dispatcher.extend = Backbone.Model.extend;

  _.extend(Dispatcher.prototype, EventBroker);

  Dispatcher.prototype.previousRoute = null;

  Dispatcher.prototype.currentController = null;

  Dispatcher.prototype.currentRoute = null;

  Dispatcher.prototype.currentParams = null;

  Dispatcher.prototype.currentQuery = null;

  function Dispatcher() {
    this.initialize.apply(this, arguments);
  }

  Dispatcher.prototype.initialize = function(options) {
    if (options == null) {
      options = {};
    }
    this.settings = _.defaults(options, {
      controllerPath: 'controllers/',
      controllerSuffix: '_controller'
    });
    return this.subscribeEvent('router:match', this.dispatch);
  };

  Dispatcher.prototype.dispatch = function(route, params, options) {
    var ref, ref1;
    params = _.extend({}, params);
    options = _.extend({}, options);
    if (options.query == null) {
      options.query = {};
    }
    if (options.forceStartup !== true) {
      options.forceStartup = false;
    }
    if (!options.forceStartup && ((ref = this.currentRoute) != null ? ref.controller : void 0) === route.controller && ((ref1 = this.currentRoute) != null ? ref1.action : void 0) === route.action && _.isEqual(this.currentParams, params) && _.isEqual(this.currentQuery, options.query)) {
      return;
    }
    return this.loadController(route.controller, (function(_this) {
      return function(Controller) {
        return _this.controllerLoaded(route, params, options, Controller);
      };
    })(this));
  };

  Dispatcher.prototype.loadController = function(name, handler) {
    var fileName, moduleName;
    if (name === Object(name)) {
      return handler(name);
    }
    fileName = name + this.settings.controllerSuffix;
    moduleName = this.settings.controllerPath + fileName;
    return utils.loadModule(moduleName, handler);
  };

  Dispatcher.prototype.controllerLoaded = function(route, params, options, Controller) {
    var controller, prev, previous;
    if (this.nextPreviousRoute = this.currentRoute) {
      previous = _.extend({}, this.nextPreviousRoute);
      if (this.currentParams != null) {
        previous.params = this.currentParams;
      }
      if (previous.previous) {
        delete previous.previous;
      }
      prev = {
        previous: previous
      };
    }
    this.nextCurrentRoute = _.extend({}, route, prev);
    controller = new Controller(params, this.nextCurrentRoute, options);
    return this.executeBeforeAction(controller, this.nextCurrentRoute, params, options);
  };

  Dispatcher.prototype.executeAction = function(controller, route, params, options) {
    if (this.currentController) {
      this.publishEvent('beforeControllerDispose', this.currentController);
      this.currentController.dispose(params, route, options);
    }
    this.currentController = controller;
    this.currentParams = _.extend({}, params);
    this.currentQuery = _.extend({}, options.query);
    controller[route.action](params, route, options);
    if (controller.redirected) {
      return;
    }
    return this.publishEvent('dispatcher:dispatch', this.currentController, params, route, options);
  };

  Dispatcher.prototype.executeBeforeAction = function(controller, route, params, options) {
    var before, executeAction, promise;
    before = controller.beforeAction;
    executeAction = (function(_this) {
      return function() {
        if (controller.redirected || _this.currentRoute && route === _this.currentRoute) {
          _this.nextPreviousRoute = _this.nextCurrentRoute = null;
          controller.dispose();
          return;
        }
        _this.previousRoute = _this.nextPreviousRoute;
        _this.currentRoute = _this.nextCurrentRoute;
        _this.nextPreviousRoute = _this.nextCurrentRoute = null;
        return _this.executeAction(controller, route, params, options);
      };
    })(this);
    if (!before) {
      executeAction();
      return;
    }
    if (typeof before !== 'function') {
      throw new TypeError('Controller#beforeAction: function expected. ' + 'Old object-like form is not supported.');
    }
    promise = controller.beforeAction(params, route, options);
    if (typeof (promise != null ? promise.then : void 0) === 'function') {
      return promise.then(executeAction);
    } else {
      return executeAction();
    }
  };

  Dispatcher.prototype.disposed = false;

  Dispatcher.prototype.dispose = function() {
    if (this.disposed) {
      return;
    }
    this.unsubscribeAllEvents();
    this.disposed = true;
    return Object.freeze(this);
  };

  return Dispatcher;

})();


},{"./lib/event_broker":7,"./lib/utils":13,"./mediator":14,"backbone":"backbone","underscore":"underscore"}],6:[function(require,module,exports){
'use strict';
var Backbone, Composition, EventBroker, _;

_ = require('underscore');

Backbone = require('backbone');

EventBroker = require('./event_broker');

module.exports = Composition = (function() {
  Composition.extend = Backbone.Model.extend;

  _.extend(Composition.prototype, Backbone.Events);

  _.extend(Composition.prototype, EventBroker);

  Composition.prototype.item = null;

  Composition.prototype.options = null;

  Composition.prototype._stale = false;

  function Composition(options) {
    this.options = _.extend({}, options);
    this.item = this;
    this.initialize(this.options);
  }

  Composition.prototype.initialize = function() {};

  Composition.prototype.compose = function() {};

  Composition.prototype.check = function(options) {
    return _.isEqual(this.options, options);
  };

  Composition.prototype.stale = function(value) {
    var item, name;
    if (value == null) {
      return this._stale;
    }
    this._stale = value;
    for (name in this) {
      item = this[name];
      if (item && item !== this && typeof item === 'object' && item.hasOwnProperty('stale')) {
        item.stale = value;
      }
    }
  };

  Composition.prototype.disposed = false;

  Composition.prototype.dispose = function() {
    var i, key, len, member, ref;
    if (this.disposed) {
      return;
    }
    ref = Object.keys(this);
    for (i = 0, len = ref.length; i < len; i++) {
      key = ref[i];
      member = this[key];
      if (member && member !== this && typeof member.dispose === 'function') {
        member.dispose();
        delete this[key];
      }
    }
    this.unsubscribeAllEvents();
    this.stopListening();
    delete this.redirected;
    this.disposed = true;
    return Object.freeze(this);
  };

  return Composition;

})();


},{"./event_broker":7,"backbone":"backbone","underscore":"underscore"}],7:[function(require,module,exports){
'use strict';
var EventBroker, mediator,
  slice = [].slice;

mediator = require('../mediator');

EventBroker = {
  subscribeEvent: function(type, handler) {
    if (typeof type !== 'string') {
      throw new TypeError('EventBroker#subscribeEvent: ' + 'type argument must be a string');
    }
    if (typeof handler !== 'function') {
      throw new TypeError('EventBroker#subscribeEvent: ' + 'handler argument must be a function');
    }
    mediator.unsubscribe(type, handler, this);
    return mediator.subscribe(type, handler, this);
  },
  subscribeEventOnce: function(type, handler) {
    if (typeof type !== 'string') {
      throw new TypeError('EventBroker#subscribeEventOnce: ' + 'type argument must be a string');
    }
    if (typeof handler !== 'function') {
      throw new TypeError('EventBroker#subscribeEventOnce: ' + 'handler argument must be a function');
    }
    mediator.unsubscribe(type, handler, this);
    return mediator.subscribeOnce(type, handler, this);
  },
  unsubscribeEvent: function(type, handler) {
    if (typeof type !== 'string') {
      throw new TypeError('EventBroker#unsubscribeEvent: ' + 'type argument must be a string');
    }
    if (typeof handler !== 'function') {
      throw new TypeError('EventBroker#unsubscribeEvent: ' + 'handler argument must be a function');
    }
    return mediator.unsubscribe(type, handler);
  },
  unsubscribeAllEvents: function() {
    return mediator.unsubscribe(null, null, this);
  },
  publishEvent: function() {
    var args, type;
    type = arguments[0], args = 2 <= arguments.length ? slice.call(arguments, 1) : [];
    if (typeof type !== 'string') {
      throw new TypeError('EventBroker#publishEvent: ' + 'type argument must be a string');
    }
    return mediator.publish.apply(mediator, [type].concat(slice.call(args)));
  }
};

Object.freeze(EventBroker);

module.exports = EventBroker;


},{"../mediator":14}],8:[function(require,module,exports){
'use strict';
var Backbone, History, _, rootStripper, routeStripper,
  extend = function(child, parent) { for (var key in parent) { if (hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; },
  hasProp = {}.hasOwnProperty;

_ = require('underscore');

Backbone = require('backbone');

routeStripper = /^[#\/]|\s+$/g;

rootStripper = /^\/+|\/+$/g;

History = (function(superClass) {
  extend(History, superClass);

  function History() {
    return History.__super__.constructor.apply(this, arguments);
  }

  History.prototype.getFragment = function(fragment, forcePushState) {
    var root;
    if (fragment == null) {
      if (this._hasPushState || !this._wantsHashChange || forcePushState) {
        fragment = this.location.pathname + this.location.search;
        root = this.root.replace(/\/$/, '');
        if (!fragment.indexOf(root)) {
          fragment = fragment.slice(root.length);
        }
      } else {
        fragment = this.getHash();
      }
    }
    return fragment.replace(routeStripper, '');
  };

  History.prototype.start = function(options) {
    var atRoot, fragment, loc, ref, ref1, ref2;
    if (Backbone.History.started) {
      throw new Error('Backbone.history has already been started');
    }
    Backbone.History.started = true;
    this.options = _.extend({}, {
      root: '/'
    }, this.options, options);
    this.root = this.options.root;
    this._wantsHashChange = this.options.hashChange !== false;
    this._wantsPushState = Boolean(this.options.pushState);
    this._hasPushState = Boolean(this.options.pushState && ((ref = this.history) != null ? ref.pushState : void 0));
    fragment = this.getFragment();
    routeStripper = (ref1 = this.options.routeStripper) != null ? ref1 : routeStripper;
    rootStripper = (ref2 = this.options.rootStripper) != null ? ref2 : rootStripper;
    this.root = ('/' + this.root + '/').replace(rootStripper, '/');
    if (this._hasPushState) {
      Backbone.$(window).on('popstate', this.checkUrl);
    } else if (this._wantsHashChange) {
      Backbone.$(window).on('hashchange', this.checkUrl);
    }
    this.fragment = fragment;
    loc = this.location;
    atRoot = loc.pathname.replace(/[^\/]$/, '$&/') === this.root;
    if (this._wantsHashChange && this._wantsPushState && !this._hasPushState && !atRoot) {
      this.fragment = this.getFragment(null, true);
      this.location.replace(this.root + '#' + this.fragment);
      return true;
    } else if (this._wantsPushState && this._hasPushState && atRoot && loc.hash) {
      this.fragment = this.getHash().replace(routeStripper, '');
      this.history.replaceState({}, document.title, this.root + this.fragment);
    }
    if (!this.options.silent) {
      return this.loadUrl();
    }
  };

  History.prototype.navigate = function(fragment, options) {
    var historyMethod, url;
    if (fragment == null) {
      fragment = '';
    }
    if (!Backbone.History.started) {
      return false;
    }
    if (!options || options === true) {
      options = {
        trigger: options
      };
    }
    fragment = this.getFragment(fragment);
    url = this.root + fragment;
    if (this.fragment === fragment) {
      return false;
    }
    this.fragment = fragment;
    if (fragment.length === 0 && url !== this.root) {
      url = url.slice(0, -1);
    }
    if (this._hasPushState) {
      historyMethod = options.replace ? 'replaceState' : 'pushState';
      this.history[historyMethod]({}, document.title, url);
    } else if (this._wantsHashChange) {
      this._updateHash(this.location, fragment, options.replace);
    } else {
      return this.location.assign(url);
    }
    if (options.trigger) {
      return this.loadUrl(fragment);
    }
  };

  return History;

})(Backbone.History);

module.exports = Backbone.$ ? History : Backbone.History;


},{"backbone":"backbone","underscore":"underscore"}],9:[function(require,module,exports){
'use strict';
var Backbone, Controller, EventBroker, Route, _, utils,
  bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

_ = require('underscore');

Backbone = require('backbone');

EventBroker = require('./event_broker');

utils = require('./utils');

Controller = require('../controllers/controller');

module.exports = Route = (function() {
  var escapeRegExp, optionalRegExp, paramRegExp, processTrailingSlash;

  Route.extend = Backbone.Model.extend;

  _.extend(Route.prototype, EventBroker);

  escapeRegExp = /[\-{}\[\]+?.,\\\^$|#\s]/g;

  optionalRegExp = /\((.*?)\)/g;

  paramRegExp = /(?::|\*)(\w+)/g;

  processTrailingSlash = function(path, trailing) {
    switch (trailing) {
      case true:
        if (path.slice(-1) !== '/') {
          path += '/';
        }
        break;
      case false:
        if (path.slice(-1) === '/') {
          path = path.slice(0, -1);
        }
    }
    return path;
  };

  function Route(pattern1, controller, action, options) {
    this.pattern = pattern1;
    this.controller = controller;
    this.action = action;
    this.handler = bind(this.handler, this);
    this.parseOptionalPortion = bind(this.parseOptionalPortion, this);
    if (typeof this.pattern !== 'string') {
      throw new Error('Route: RegExps are not supported. Use strings with :names and `constraints` option of route');
    }
    this.options = _.extend({}, options);
    if (this.options.paramsInQS !== false) {
      this.options.paramsInQS = true;
    }
    if (this.options.name != null) {
      this.name = this.options.name;
    }
    if (this.name && this.name.indexOf('#') !== -1) {
      throw new Error('Route: "#" cannot be used in name');
    }
    if (this.name == null) {
      this.name = this.controller + '#' + this.action;
    }
    this.allParams = [];
    this.requiredParams = [];
    this.optionalParams = [];
    if (this.action in Controller.prototype) {
      throw new Error('Route: You should not use existing controller ' + 'properties as action names');
    }
    this.createRegExp();
    Object.freeze(this);
  }

  Route.prototype.matches = function(criteria) {
    var i, invalidParamsCount, len, name, propertiesCount, property, ref;
    if (typeof criteria === 'string') {
      return criteria === this.name;
    } else {
      propertiesCount = 0;
      ref = ['name', 'action', 'controller'];
      for (i = 0, len = ref.length; i < len; i++) {
        name = ref[i];
        propertiesCount++;
        property = criteria[name];
        if (property && property !== this[name]) {
          return false;
        }
      }
      invalidParamsCount = propertiesCount === 1 && (name === 'action' || name === 'controller');
      return !invalidParamsCount;
    }
  };

  Route.prototype.reverse = function(params, query) {
    var i, j, len, len1, name, raw, ref, ref1, remainingParams, url, value;
    params = this.normalizeParams(params);
    remainingParams = _.extend({}, params);
    if (params === false) {
      return false;
    }
    url = this.pattern;
    ref = this.requiredParams;
    for (i = 0, len = ref.length; i < len; i++) {
      name = ref[i];
      value = params[name];
      url = url.replace(RegExp("[:*]" + name, "g"), value);
      delete remainingParams[name];
    }
    ref1 = this.optionalParams;
    for (j = 0, len1 = ref1.length; j < len1; j++) {
      name = ref1[j];
      if (value = params[name]) {
        url = url.replace(RegExp("[:*]" + name, "g"), value);
        delete remainingParams[name];
      }
    }
    raw = url.replace(optionalRegExp, function(match, portion) {
      if (portion.match(/[:*]/g)) {
        return "";
      } else {
        return portion;
      }
    });
    url = processTrailingSlash(raw, this.options.trailing);
    if (typeof query !== 'object') {
      query = utils.queryParams.parse(query);
    }
    if (this.options.paramsInQS !== false) {
      _.extend(query, remainingParams);
    }
    if (!utils.isEmpty(query)) {
      url += '?' + utils.queryParams.stringify(query);
    }
    return url;
  };

  Route.prototype.normalizeParams = function(params) {
    var i, paramIndex, paramName, paramsHash, ref, routeParams;
    if (Array.isArray(params)) {
      if (params.length < this.requiredParams.length) {
        return false;
      }
      paramsHash = {};
      routeParams = this.requiredParams.concat(this.optionalParams);
      for (paramIndex = i = 0, ref = params.length - 1; i <= ref; paramIndex = i += 1) {
        paramName = routeParams[paramIndex];
        paramsHash[paramName] = params[paramIndex];
      }
      if (!this.testConstraints(paramsHash)) {
        return false;
      }
      params = paramsHash;
    } else {
      if (params == null) {
        params = {};
      }
      if (!this.testParams(params)) {
        return false;
      }
    }
    return params;
  };

  Route.prototype.testConstraints = function(params) {
    var constraints;
    constraints = this.options.constraints;
    return Object.keys(constraints || {}).every(function(key) {
      return constraints[key].test(params[key]);
    });
  };

  Route.prototype.testParams = function(params) {
    var i, len, paramName, ref;
    ref = this.requiredParams;
    for (i = 0, len = ref.length; i < len; i++) {
      paramName = ref[i];
      if (params[paramName] === void 0) {
        return false;
      }
    }
    return this.testConstraints(params);
  };

  Route.prototype.createRegExp = function() {
    var pattern;
    pattern = this.pattern;
    pattern = pattern.replace(escapeRegExp, '\\$&');
    this.replaceParams(pattern, (function(_this) {
      return function(match, param) {
        return _this.allParams.push(param);
      };
    })(this));
    pattern = pattern.replace(optionalRegExp, this.parseOptionalPortion);
    pattern = this.replaceParams(pattern, (function(_this) {
      return function(match, param) {
        _this.requiredParams.push(param);
        return _this.paramCapturePattern(match);
      };
    })(this));
    return this.regExp = RegExp("^" + pattern + "(?=\\/*(?=\\?|$))");
  };

  Route.prototype.parseOptionalPortion = function(match, optionalPortion) {
    var portion;
    portion = this.replaceParams(optionalPortion, (function(_this) {
      return function(match, param) {
        _this.optionalParams.push(param);
        return _this.paramCapturePattern(match);
      };
    })(this));
    return "(?:" + portion + ")?";
  };

  Route.prototype.replaceParams = function(s, callback) {
    return s.replace(paramRegExp, callback);
  };

  Route.prototype.paramCapturePattern = function(param) {
    if (param[0] === ':') {
      return '([^\/\?]+)';
    } else {
      return '(.*?)';
    }
  };

  Route.prototype.test = function(path) {
    var constraints, matched;
    matched = this.regExp.test(path);
    if (!matched) {
      return false;
    }
    constraints = this.options.constraints;
    if (constraints) {
      return this.testConstraints(this.extractParams(path));
    }
    return true;
  };

  Route.prototype.handler = function(pathParams, options) {
    var actionParams, params, path, query, ref, route;
    options = _.extend({}, options);
    if (pathParams && typeof pathParams === 'object') {
      query = utils.queryParams.stringify(options.query);
      params = pathParams;
      path = this.reverse(params);
    } else {
      ref = pathParams.split('?'), path = ref[0], query = ref[1];
      if (query == null) {
        query = '';
      } else {
        options.query = utils.queryParams.parse(query);
      }
      params = this.extractParams(path);
      path = processTrailingSlash(path, this.options.trailing);
    }
    actionParams = _.extend({}, params, this.options.params);
    route = {
      path: path,
      action: this.action,
      controller: this.controller,
      name: this.name,
      query: query
    };
    return this.publishEvent('router:match', route, actionParams, options);
  };

  Route.prototype.extractParams = function(path) {
    var i, index, len, match, matches, paramName, params, ref;
    params = {};
    matches = this.regExp.exec(path);
    ref = matches.slice(1);
    for (index = i = 0, len = ref.length; i < len; index = ++i) {
      match = ref[index];
      paramName = this.allParams.length ? this.allParams[index] : index;
      params[paramName] = match;
    }
    return params;
  };

  return Route;

})();


},{"../controllers/controller":4,"./event_broker":7,"./utils":13,"backbone":"backbone","underscore":"underscore"}],10:[function(require,module,exports){
'use strict';
var Backbone, EventBroker, History, Route, Router, _, mediator, utils,
  bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

_ = require('underscore');

Backbone = require('backbone');

EventBroker = require('./event_broker');

History = require('./history');

Route = require('./route');

utils = require('./utils');

mediator = require('../mediator');

module.exports = Router = (function() {
  Router.extend = Backbone.Model.extend;

  _.extend(Router.prototype, EventBroker);

  function Router(options1) {
    var isWebFile;
    this.options = options1 != null ? options1 : {};
    this.match = bind(this.match, this);
    isWebFile = window.location.protocol !== 'file:';
    _.defaults(this.options, {
      pushState: isWebFile,
      root: '/',
      trailing: false
    });
    this.removeRoot = new RegExp('^' + utils.escapeRegExp(this.options.root) + '(#)?');
    this.subscribeEvent('!router:route', this.oldEventError);
    this.subscribeEvent('!router:routeByName', this.oldEventError);
    this.subscribeEvent('!router:changeURL', this.oldURLEventError);
    this.subscribeEvent('dispatcher:dispatch', this.changeURL);
    mediator.setHandler('router:route', this.route, this);
    mediator.setHandler('router:reverse', this.reverse, this);
    this.createHistory();
  }

  Router.prototype.oldEventError = function() {
    throw new Error('!router:route and !router:routeByName events were removed. Use `Chaplin.utils.redirectTo`');
  };

  Router.prototype.oldURLEventError = function() {
    throw new Error('!router:changeURL event was removed.');
  };

  Router.prototype.createHistory = function() {
    return Backbone.history = new History();
  };

  Router.prototype.startHistory = function() {
    return Backbone.history.start(this.options);
  };

  Router.prototype.stopHistory = function() {
    if (Backbone.History.started) {
      return Backbone.history.stop();
    }
  };

  Router.prototype.findHandler = function(predicate) {
    var handler, i, len, ref;
    ref = Backbone.history.handlers;
    for (i = 0, len = ref.length; i < len; i++) {
      handler = ref[i];
      if (predicate(handler)) {
        return handler;
      }
    }
  };

  Router.prototype.match = function(pattern, target, options) {
    var action, controller, ref, ref1, route;
    if (options == null) {
      options = {};
    }
    if (arguments.length === 2 && target && typeof target === 'object') {
      ref = options = target, controller = ref.controller, action = ref.action;
      if (!(controller && action)) {
        throw new Error('Router#match must receive either target or ' + 'options.controller & options.action');
      }
    } else {
      controller = options.controller, action = options.action;
      if (controller || action) {
        throw new Error('Router#match cannot use both target and ' + 'options.controller / options.action');
      }
      ref1 = target.split('#'), controller = ref1[0], action = ref1[1];
    }
    _.defaults(options, {
      trailing: this.options.trailing
    });
    route = new Route(pattern, controller, action, options);
    Backbone.history.handlers.push({
      route: route,
      callback: route.handler
    });
    return route;
  };

  Router.prototype.route = function(pathDesc, params, options) {
    var handler, path, pathParams;
    if (pathDesc && typeof pathDesc === 'object') {
      path = pathDesc.url;
      if (!params && pathDesc.params) {
        params = pathDesc.params;
      }
    }
    params = Array.isArray(params) ? params.slice() : _.extend({}, params);
    if (path != null) {
      path = path.replace(this.removeRoot, '');
      handler = this.findHandler(function(handler) {
        return handler.route.test(path);
      });
      options = params;
      params = null;
    } else {
      options = _.extend({}, options);
      handler = this.findHandler(function(handler) {
        if (handler.route.matches(pathDesc)) {
          params = handler.route.normalizeParams(params);
          if (params) {
            return true;
          }
        }
        return false;
      });
    }
    if (handler) {
      _.defaults(options, {
        changeURL: true
      });
      pathParams = path != null ? path : params;
      handler.callback(pathParams, options);
      return true;
    } else {
      throw new Error('Router#route: request was not routed');
    }
  };

  Router.prototype.reverse = function(criteria, params, query) {
    var handler, handlers, i, len, reversed, root, url;
    root = this.options.root;
    if ((params != null) && typeof params !== 'object') {
      throw new TypeError('Router#reverse: params must be an array or an ' + 'object');
    }
    handlers = Backbone.history.handlers;
    for (i = 0, len = handlers.length; i < len; i++) {
      handler = handlers[i];
      if (!(handler.route.matches(criteria))) {
        continue;
      }
      reversed = handler.route.reverse(params, query);
      if (reversed !== false) {
        url = root ? root + reversed : reversed;
        return url;
      }
    }
    throw new Error('Router#reverse: invalid route criteria specified: ' + ("" + (JSON.stringify(criteria))));
  };

  Router.prototype.changeURL = function(controller, params, route, options) {
    var navigateOptions, url;
    if (!((route.path != null) && (options != null ? options.changeURL : void 0))) {
      return;
    }
    url = route.path + (route.query ? "?" + route.query : '');
    navigateOptions = {
      trigger: options.trigger === true,
      replace: options.replace === true
    };
    return Backbone.history.navigate(url, navigateOptions);
  };

  Router.prototype.disposed = false;

  Router.prototype.dispose = function() {
    if (this.disposed) {
      return;
    }
    this.stopHistory();
    delete Backbone.history;
    this.unsubscribeAllEvents();
    mediator.removeHandlers(this);
    this.disposed = true;
    return Object.freeze(this);
  };

  return Router;

})();


},{"../mediator":14,"./event_broker":7,"./history":8,"./route":9,"./utils":13,"backbone":"backbone","underscore":"underscore"}],11:[function(require,module,exports){
'use strict';
module.exports = {
  propertyDescriptors: true
};


},{}],12:[function(require,module,exports){
'use strict';
var STATE_CHANGE, SYNCED, SYNCING, SyncMachine, UNSYNCED, event, fn, i, len, ref;

UNSYNCED = 'unsynced';

SYNCING = 'syncing';

SYNCED = 'synced';

STATE_CHANGE = 'syncStateChange';

SyncMachine = {
  _syncState: UNSYNCED,
  _previousSyncState: null,
  syncState: function() {
    return this._syncState;
  },
  isUnsynced: function() {
    return this._syncState === UNSYNCED;
  },
  isSynced: function() {
    return this._syncState === SYNCED;
  },
  isSyncing: function() {
    return this._syncState === SYNCING;
  },
  unsync: function() {
    var ref;
    if ((ref = this._syncState) === SYNCING || ref === SYNCED) {
      this._previousSync = this._syncState;
      this._syncState = UNSYNCED;
      this.trigger(this._syncState, this, this._syncState);
      this.trigger(STATE_CHANGE, this, this._syncState);
    }
  },
  beginSync: function() {
    var ref;
    if ((ref = this._syncState) === UNSYNCED || ref === SYNCED) {
      this._previousSync = this._syncState;
      this._syncState = SYNCING;
      this.trigger(this._syncState, this, this._syncState);
      this.trigger(STATE_CHANGE, this, this._syncState);
    }
  },
  finishSync: function() {
    if (this._syncState === SYNCING) {
      this._previousSync = this._syncState;
      this._syncState = SYNCED;
      this.trigger(this._syncState, this, this._syncState);
      this.trigger(STATE_CHANGE, this, this._syncState);
    }
  },
  abortSync: function() {
    if (this._syncState === SYNCING) {
      this._syncState = this._previousSync;
      this._previousSync = this._syncState;
      this.trigger(this._syncState, this, this._syncState);
      this.trigger(STATE_CHANGE, this, this._syncState);
    }
  }
};

ref = [UNSYNCED, SYNCING, SYNCED, STATE_CHANGE];
fn = function(event) {
  return SyncMachine[event] = function(callback, context) {
    if (context == null) {
      context = this;
    }
    this.on(event, callback, context);
    if (this._syncState === event) {
      return callback.call(context);
    }
  };
};
for (i = 0, len = ref.length; i < len; i++) {
  event = ref[i];
  fn(event);
}

Object.freeze(SyncMachine);

module.exports = SyncMachine;


},{}],13:[function(require,module,exports){
'use strict';
var utils,
  slice = [].slice,
  indexOf = [].indexOf || function(item) { for (var i = 0, l = this.length; i < l; i++) { if (i in this && this[i] === item) return i; } return -1; };

utils = {
  isEmpty: function(object) {
    return !Object.getOwnPropertyNames(object).length;
  },
  serialize: function(data) {
    if (typeof data.serialize === 'function') {
      return data.serialize();
    } else if (typeof data.toJSON === 'function') {
      return data.toJSON();
    } else {
      throw new TypeError('utils.serialize: Unknown data was passed');
    }
  },
  readonly: function() {
    var i, key, keys, len, object;
    object = arguments[0], keys = 2 <= arguments.length ? slice.call(arguments, 1) : [];
    for (i = 0, len = keys.length; i < len; i++) {
      key = keys[i];
      Object.defineProperty(object, key, {
        value: object[key],
        writable: false,
        configurable: false
      });
    }
    return true;
  },
  getPrototypeChain: function(object) {
    var chain;
    chain = [];
    while (object = Object.getPrototypeOf(object)) {
      chain.unshift(object);
    }
    return chain;
  },
  getAllPropertyVersions: function(object, key) {
    var i, len, proto, ref, result, value;
    result = [];
    ref = utils.getPrototypeChain(object);
    for (i = 0, len = ref.length; i < len; i++) {
      proto = ref[i];
      value = proto[key];
      if (value && indexOf.call(result, value) < 0) {
        result.push(value);
      }
    }
    return result;
  },
  upcase: function(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
  },
  escapeRegExp: function(str) {
    return String(str || '').replace(/([.*+?^=!:${}()|[\]\/\\])/g, '\\$1');
  },
  modifierKeyPressed: function(event) {
    return event.shiftKey || event.altKey || event.ctrlKey || event.metaKey;
  },
  reverse: function(criteria, params, query) {
    return require('../mediator').execute('router:reverse', criteria, params, query);
  },
  redirectTo: function(pathDesc, params, options) {
    return require('../mediator').execute('router:route', pathDesc, params, options);
  },
  loadModule: (function() {
    var define, enqueue, require;
    define = window.define, require = window.require;
    if (typeof define === 'function' && define.amd) {
      return function(moduleName, handler) {
        return require([moduleName], handler);
      };
    } else {
      enqueue = typeof setImmediate !== "undefined" && setImmediate !== null ? setImmediate : setTimeout;
      return function(moduleName, handler) {
        return enqueue(function() {
          return handler(require(moduleName));
        });
      };
    }
  })(),
  matchesSelector: (function() {
    var el, matches;
    el = document.documentElement;
    matches = el.matches || el.msMatchesSelector || el.mozMatchesSelector || el.webkitMatchesSelector;
    return function() {
      return matches.call.apply(matches, arguments);
    };
  })(),
  querystring: {
    stringify: function(params, replacer) {
      if (params == null) {
        params = {};
      }
      if (typeof replacer !== 'function') {
        replacer = function(key, value) {
          if (Array.isArray(value)) {
            return value.map(function(value) {
              return {
                key: key,
                value: value
              };
            });
          } else if (value != null) {
            return {
              key: key,
              value: value
            };
          }
        };
      }
      return Object.keys(params).reduce(function(pairs, key) {
        var pair;
        pair = replacer(key, params[key]);
        return pairs.concat(pair || []);
      }, []).map(function(arg) {
        var key, value;
        key = arg.key, value = arg.value;
        return [key, value].map(encodeURIComponent).join('=');
      }).join('&');
    },
    parse: function(string, reviver) {
      if (string == null) {
        string = '';
      }
      if (typeof reviver !== 'function') {
        reviver = function(key, value) {
          return {
            key: key,
            value: value
          };
        };
      }
      string = string.slice(1 + string.indexOf('?'));
      return string.split('&').reduce(function(params, pair) {
        var key, parts, ref, value;
        parts = pair.split('=').map(decodeURIComponent);
        ref = reviver.apply(null, parts) || {}, key = ref.key, value = ref.value;
        if (value != null) {
          params[key] = params.hasOwnProperty(key) ? [].concat(params[key], value) : value;
        }
        return params;
      }, {});
    }
  }
};

utils.beget = Object.create;

utils.indexOf = function(array, item) {
  return array.indexOf(item);
};

utils.isArray = Array.isArray;

utils.queryParams = utils.querystring;

Object.seal(utils);

module.exports = utils;


},{"../mediator":14}],14:[function(require,module,exports){
'use strict';
var Backbone, handlers, mediator, utils,
  slice = [].slice;

Backbone = require('backbone');

utils = require('./lib/utils');

mediator = {};

mediator.subscribe = mediator.on = Backbone.Events.on;

mediator.subscribeOnce = mediator.once = Backbone.Events.once;

mediator.unsubscribe = mediator.off = Backbone.Events.off;

mediator.publish = mediator.trigger = Backbone.Events.trigger;

mediator._callbacks = null;

handlers = mediator._handlers = {};

mediator.setHandler = function(name, method, instance) {
  return handlers[name] = {
    instance: instance,
    method: method
  };
};

mediator.execute = function() {
  var args, handler, name, options, silent;
  options = arguments[0], args = 2 <= arguments.length ? slice.call(arguments, 1) : [];
  if (options && typeof options === 'object') {
    name = options.name, silent = options.silent;
  } else {
    name = options;
  }
  handler = handlers[name];
  if (handler) {
    return handler.method.apply(handler.instance, args);
  } else if (!silent) {
    throw new Error("mediator.execute: " + name + " handler is not defined");
  }
};

mediator.removeHandlers = function(instanceOrNames) {
  var handler, i, len, name;
  if (!instanceOrNames) {
    mediator._handlers = {};
  }
  if (Array.isArray(instanceOrNames)) {
    for (i = 0, len = instanceOrNames.length; i < len; i++) {
      name = instanceOrNames[i];
      delete handlers[name];
    }
  } else {
    for (name in handlers) {
      handler = handlers[name];
      if (handler.instance === instanceOrNames) {
        delete handlers[name];
      }
    }
  }
};

mediator.seal = function() {
  return Object.seal(mediator);
};

utils.readonly(mediator, 'subscribe', 'subscribeOnce', 'unsubscribe', 'publish', 'setHandler', 'execute', 'removeHandlers', 'seal');

module.exports = mediator;


},{"./lib/utils":13,"backbone":"backbone"}],15:[function(require,module,exports){
'use strict';
var Backbone, Collection, EventBroker, Model, _, utils,
  extend = function(child, parent) { for (var key in parent) { if (hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; },
  hasProp = {}.hasOwnProperty;

_ = require('underscore');

Backbone = require('backbone');

Model = require('./model');

EventBroker = require('../lib/event_broker');

utils = require('../lib/utils');

module.exports = Collection = (function(superClass) {
  extend(Collection, superClass);

  function Collection() {
    return Collection.__super__.constructor.apply(this, arguments);
  }

  _.extend(Collection.prototype, EventBroker);

  Collection.prototype.model = Model;

  Collection.prototype.serialize = function() {
    return this.map(utils.serialize);
  };

  Collection.prototype.disposed = false;

  Collection.prototype.dispose = function() {
    var i, len, prop, ref;
    if (this.disposed) {
      return;
    }
    this.trigger('dispose', this);
    this.reset([], {
      silent: true
    });
    this.unsubscribeAllEvents();
    this.stopListening();
    this.off();
    ref = ['model', 'models', '_byCid', '_callbacks'];
    for (i = 0, len = ref.length; i < len; i++) {
      prop = ref[i];
      delete this[prop];
    }
    this._byId = {};
    this.disposed = true;
    return Object.freeze(this);
  };

  return Collection;

})(Backbone.Collection);


},{"../lib/event_broker":7,"../lib/utils":13,"./model":16,"backbone":"backbone","underscore":"underscore"}],16:[function(require,module,exports){
'use strict';
var Backbone, EventBroker, Model, _, serializeAttributes, serializeModelAttributes,
  extend = function(child, parent) { for (var key in parent) { if (hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; },
  hasProp = {}.hasOwnProperty;

_ = require('underscore');

Backbone = require('backbone');

EventBroker = require('../lib/event_broker');

serializeAttributes = function(model, attributes, modelStack) {
  var delegator, i, key, len, otherModel, ref, serializedModels, value;
  delegator = Object.create(attributes);
  if (modelStack == null) {
    modelStack = {};
  }
  modelStack[model.cid] = true;
  for (key in attributes) {
    value = attributes[key];
    if (value instanceof Backbone.Model) {
      delegator[key] = serializeModelAttributes(value, model, modelStack);
    } else if (value instanceof Backbone.Collection) {
      serializedModels = [];
      ref = value.models;
      for (i = 0, len = ref.length; i < len; i++) {
        otherModel = ref[i];
        serializedModels.push(serializeModelAttributes(otherModel, model, modelStack));
      }
      delegator[key] = serializedModels;
    }
  }
  delete modelStack[model.cid];
  return delegator;
};

serializeModelAttributes = function(model, currentModel, modelStack) {
  var attributes;
  if (model === currentModel || model.cid in modelStack) {
    return null;
  }
  attributes = typeof model.getAttributes === 'function' ? model.getAttributes() : model.attributes;
  return serializeAttributes(model, attributes, modelStack);
};

module.exports = Model = (function(superClass) {
  extend(Model, superClass);

  function Model() {
    return Model.__super__.constructor.apply(this, arguments);
  }

  _.extend(Model.prototype, EventBroker);

  Model.prototype.getAttributes = function() {
    return this.attributes;
  };

  Model.prototype.serialize = function() {
    return serializeAttributes(this, this.getAttributes());
  };

  Model.prototype.disposed = false;

  Model.prototype.dispose = function() {
    var i, len, prop, ref, ref1;
    if (this.disposed) {
      return;
    }
    this.trigger('dispose', this);
    if ((ref = this.collection) != null) {
      if (typeof ref.remove === "function") {
        ref.remove(this, {
          silent: true
        });
      }
    }
    this.unsubscribeAllEvents();
    this.stopListening();
    this.off();
    ref1 = ['collection', 'attributes', 'changed', 'defaults', '_escapedAttributes', '_previousAttributes', '_silent', '_pending', '_callbacks'];
    for (i = 0, len = ref1.length; i < len; i++) {
      prop = ref1[i];
      delete this[prop];
    }
    this.disposed = true;
    return Object.freeze(this);
  };

  return Model;

})(Backbone.Model);


},{"../lib/event_broker":7,"backbone":"backbone","underscore":"underscore"}],17:[function(require,module,exports){
'use strict';
var $, Backbone, CollectionView, View, addClass, endAnimation, filterChildren, insertView, startAnimation, toggleElement, utils,
  bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; },
  extend = function(child, parent) { for (var key in parent) { if (hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; },
  hasProp = {}.hasOwnProperty;

Backbone = require('backbone');

View = require('./view');

utils = require('../lib/utils');

$ = Backbone.$;

filterChildren = function(nodeList, selector) {
  var i, len, node, results;
  if (!selector) {
    return nodeList;
  }
  results = [];
  for (i = 0, len = nodeList.length; i < len; i++) {
    node = nodeList[i];
    if (utils.matchesSelector(node, selector)) {
      results.push(node);
    }
  }
  return results;
};

toggleElement = (function() {
  if ($) {
    return function(elem, visible) {
      return elem.toggle(visible);
    };
  } else {
    return function(elem, visible) {
      return elem.style.display = (visible ? '' : 'none');
    };
  }
})();

addClass = (function() {
  if ($) {
    return function(elem, cls) {
      return elem.addClass(cls);
    };
  } else {
    return function(elem, cls) {
      return elem.classList.add(cls);
    };
  }
})();

startAnimation = (function() {
  if ($) {
    return function(elem, useCssAnimation, cls) {
      if (useCssAnimation) {
        return addClass(elem, cls);
      } else {
        return elem.css('opacity', 0);
      }
    };
  } else {
    return function(elem, useCssAnimation, cls) {
      if (useCssAnimation) {
        return addClass(elem, cls);
      } else {
        return elem.style.opacity = 0;
      }
    };
  }
})();

endAnimation = (function() {
  if ($) {
    return function(elem, duration) {
      return elem.animate({
        opacity: 1
      }, duration);
    };
  } else {
    return function(elem, duration) {
      elem.style.transition = "opacity " + duration + "ms";
      return elem.style.opacity = 1;
    };
  }
})();

insertView = (function() {
  if ($) {
    return function(list, viewEl, position, length, itemSelector) {
      var children, childrenLength, insertInMiddle, isEnd, method;
      insertInMiddle = (0 < position && position < length);
      isEnd = function(length) {
        return length === 0 || position >= length;
      };
      if (insertInMiddle || itemSelector) {
        children = list.children(itemSelector);
        childrenLength = children.length;
        if (children[position] !== viewEl) {
          if (isEnd(childrenLength)) {
            return list.append(viewEl);
          } else {
            if (position === 0) {
              return children.eq(position).before(viewEl);
            } else {
              return children.eq(position - 1).after(viewEl);
            }
          }
        }
      } else {
        method = isEnd(length) ? 'append' : 'prepend';
        return list[method](viewEl);
      }
    };
  } else {
    return function(list, viewEl, position, length, itemSelector) {
      var children, childrenLength, insertInMiddle, isEnd, last;
      insertInMiddle = (0 < position && position < length);
      isEnd = function(length) {
        return length === 0 || position === length;
      };
      if (insertInMiddle || itemSelector) {
        children = filterChildren(list.children, itemSelector);
        childrenLength = children.length;
        if (children[position] !== viewEl) {
          if (isEnd(childrenLength)) {
            return list.appendChild(viewEl);
          } else if (position === 0) {
            return list.insertBefore(viewEl, children[position]);
          } else {
            last = children[position - 1];
            if (list.lastChild === last) {
              return list.appendChild(viewEl);
            } else {
              return list.insertBefore(viewEl, last.nextElementSibling);
            }
          }
        }
      } else if (isEnd(length)) {
        return list.appendChild(viewEl);
      } else {
        return list.insertBefore(viewEl, list.firstChild);
      }
    };
  }
})();

module.exports = CollectionView = (function(superClass) {
  extend(CollectionView, superClass);

  CollectionView.prototype.itemView = null;

  CollectionView.prototype.autoRender = true;

  CollectionView.prototype.renderItems = true;

  CollectionView.prototype.animationDuration = 500;

  CollectionView.prototype.useCssAnimation = false;

  CollectionView.prototype.animationStartClass = 'animated-item-view';

  CollectionView.prototype.animationEndClass = 'animated-item-view-end';

  CollectionView.prototype.listSelector = null;

  CollectionView.prototype.$list = null;

  CollectionView.prototype.fallbackSelector = null;

  CollectionView.prototype.$fallback = null;

  CollectionView.prototype.loadingSelector = null;

  CollectionView.prototype.$loading = null;

  CollectionView.prototype.itemSelector = null;

  CollectionView.prototype.filterer = null;

  CollectionView.prototype.filterCallback = function(view, included) {
    if ($) {
      view.$el.stop(true, true);
    }
    return toggleElement(($ ? view.$el : view.el), included);
  };

  CollectionView.prototype.visibleItems = null;

  CollectionView.prototype.optionNames = View.prototype.optionNames.concat(['renderItems', 'itemView']);

  function CollectionView(options) {
    this.renderAllItems = bind(this.renderAllItems, this);
    this.toggleFallback = bind(this.toggleFallback, this);
    this.itemsReset = bind(this.itemsReset, this);
    this.itemRemoved = bind(this.itemRemoved, this);
    this.itemAdded = bind(this.itemAdded, this);
    this.visibleItems = [];
    CollectionView.__super__.constructor.apply(this, arguments);
  }

  CollectionView.prototype.initialize = function(options) {
    if (options == null) {
      options = {};
    }
    this.addCollectionListeners();
    if (options.filterer != null) {
      return this.filter(options.filterer);
    }
  };

  CollectionView.prototype.addCollectionListeners = function() {
    this.listenTo(this.collection, 'add', this.itemAdded);
    this.listenTo(this.collection, 'remove', this.itemRemoved);
    return this.listenTo(this.collection, 'reset sort', this.itemsReset);
  };

  CollectionView.prototype.getTemplateData = function() {
    var templateData;
    templateData = {
      length: this.collection.length
    };
    if (typeof this.collection.isSynced === 'function') {
      templateData.synced = this.collection.isSynced();
    }
    return templateData;
  };

  CollectionView.prototype.getTemplateFunction = function() {};

  CollectionView.prototype.render = function() {
    var listSelector;
    CollectionView.__super__.render.apply(this, arguments);
    listSelector = typeof this.listSelector === 'function' ? this.listSelector() : this.listSelector;
    if ($) {
      this.$list = listSelector ? this.find(listSelector) : this.$el;
    } else {
      this.list = listSelector ? this.find(this.listSelector) : this.el;
    }
    this.initFallback();
    this.initLoadingIndicator();
    if (this.renderItems) {
      return this.renderAllItems();
    }
  };

  CollectionView.prototype.itemAdded = function(item, collection, options) {
    return this.insertView(item, this.renderItem(item), options.at);
  };

  CollectionView.prototype.itemRemoved = function(item) {
    return this.removeViewForItem(item);
  };

  CollectionView.prototype.itemsReset = function() {
    return this.renderAllItems();
  };

  CollectionView.prototype.initFallback = function() {
    if (!this.fallbackSelector) {
      return;
    }
    if ($) {
      this.$fallback = this.find(this.fallbackSelector);
    } else {
      this.fallback = this.find(this.fallbackSelector);
    }
    this.on('visibilityChange', this.toggleFallback);
    this.listenTo(this.collection, 'syncStateChange', this.toggleFallback);
    return this.toggleFallback();
  };

  CollectionView.prototype.toggleFallback = function() {
    var visible;
    visible = this.visibleItems.length === 0 && (typeof this.collection.isSynced === 'function' ? this.collection.isSynced() : true);
    return toggleElement(($ ? this.$fallback : this.fallback), visible);
  };

  CollectionView.prototype.initLoadingIndicator = function() {
    if (!(this.loadingSelector && typeof this.collection.isSyncing === 'function')) {
      return;
    }
    if ($) {
      this.$loading = this.find(this.loadingSelector);
    } else {
      this.loading = this.find(this.loadingSelector);
    }
    this.listenTo(this.collection, 'syncStateChange', this.toggleLoadingIndicator);
    return this.toggleLoadingIndicator();
  };

  CollectionView.prototype.toggleLoadingIndicator = function() {
    var visible;
    visible = this.collection.length === 0 && this.collection.isSyncing();
    return toggleElement(($ ? this.$loading : this.loading), visible);
  };

  CollectionView.prototype.getItemViews = function() {
    var i, itemViews, key, len, ref;
    itemViews = {};
    ref = Object.keys(this.subviewsByName);
    for (i = 0, len = ref.length; i < len; i++) {
      key = ref[i];
      if (!key.indexOf('itemView:')) {
        itemViews[key.slice(9)] = this.subviewsByName[key];
      }
    }
    return itemViews;
  };

  CollectionView.prototype.filter = function(filterer, filterCallback) {
    var hasItemViews, i, included, index, item, len, ref, view;
    if (typeof filterer === 'function' || filterer === null) {
      this.filterer = filterer;
    }
    if (typeof filterCallback === 'function' || filterCallback === null) {
      this.filterCallback = filterCallback;
    }
    hasItemViews = Object.keys(this.subviewsByName).some(function(key) {
      return 0 === key.indexOf('itemView:');
    });
    if (hasItemViews) {
      ref = this.collection.models;
      for (index = i = 0, len = ref.length; i < len; index = ++i) {
        item = ref[index];
        included = typeof this.filterer === 'function' ? this.filterer(item, index) : true;
        view = this.subview("itemView:" + item.cid);
        if (!view) {
          throw new Error('CollectionView#filter: ' + ("no view found for " + item.cid));
        }
        this.filterCallback(view, included);
        this.updateVisibleItems(view.model, included, false);
      }
    }
    return this.trigger('visibilityChange', this.visibleItems);
  };

  CollectionView.prototype.renderAllItems = function() {
    var cid, i, index, item, items, j, k, len, len1, len2, ref, remainingViewsByCid, view;
    items = this.collection.models;
    this.visibleItems.length = 0;
    remainingViewsByCid = {};
    for (i = 0, len = items.length; i < len; i++) {
      item = items[i];
      view = this.subview("itemView:" + item.cid);
      if (view) {
        remainingViewsByCid[item.cid] = view;
      }
    }
    ref = Object.keys(this.getItemViews());
    for (j = 0, len1 = ref.length; j < len1; j++) {
      cid = ref[j];
      if (!(cid in remainingViewsByCid)) {
        this.removeSubview("itemView:" + cid);
      }
    }
    for (index = k = 0, len2 = items.length; k < len2; index = ++k) {
      item = items[index];
      view = this.subview("itemView:" + item.cid);
      if (view) {
        this.insertView(item, view, index, false);
      } else {
        this.insertView(item, this.renderItem(item), index);
      }
    }
    if (items.length === 0) {
      return this.trigger('visibilityChange', this.visibleItems);
    }
  };

  CollectionView.prototype.renderItem = function(item) {
    var view;
    view = this.subview("itemView:" + item.cid);
    if (!view) {
      view = this.initItemView(item);
      this.subview("itemView:" + item.cid, view);
    }
    view.render();
    return view;
  };

  CollectionView.prototype.initItemView = function(model) {
    if (this.itemView) {
      return new this.itemView({
        autoRender: false,
        model: model
      });
    } else {
      throw new Error('The CollectionView#itemView property ' + 'must be defined or the initItemView() must be overridden.');
    }
  };

  CollectionView.prototype.insertView = function(item, view, position, enableAnimation) {
    var elem, included, length, list;
    if (enableAnimation == null) {
      enableAnimation = true;
    }
    if (this.animationDuration === 0) {
      enableAnimation = false;
    }
    if (typeof position !== 'number') {
      position = this.collection.indexOf(item);
    }
    included = typeof this.filterer === 'function' ? this.filterer(item, position) : true;
    elem = $ ? view.$el : view.el;
    if (included && enableAnimation) {
      startAnimation(elem, this.useCssAnimation, this.animationStartClass);
    }
    if (this.filterer) {
      this.filterCallback(view, included);
    }
    length = this.collection.length;
    list = $ ? this.$list : this.list;
    if (included) {
      insertView(list, elem, position, length, this.itemSelector);
      view.trigger('addedToParent');
    }
    this.updateVisibleItems(item, included);
    if (included && enableAnimation) {
      if (this.useCssAnimation) {
        setTimeout((function(_this) {
          return function() {
            return addClass(elem, _this.animationEndClass);
          };
        })(this));
      } else {
        endAnimation(elem, this.animationDuration);
      }
    }
    return view;
  };

  CollectionView.prototype.removeViewForItem = function(item) {
    this.updateVisibleItems(item, false);
    return this.removeSubview("itemView:" + item.cid);
  };

  CollectionView.prototype.updateVisibleItems = function(item, includedInFilter, triggerEvent) {
    var includedInVisibleItems, visibilityChanged, visibleItemsIndex;
    if (triggerEvent == null) {
      triggerEvent = true;
    }
    visibilityChanged = false;
    visibleItemsIndex = this.visibleItems.indexOf(item);
    includedInVisibleItems = visibleItemsIndex !== -1;
    if (includedInFilter && !includedInVisibleItems) {
      this.visibleItems.push(item);
      visibilityChanged = true;
    } else if (!includedInFilter && includedInVisibleItems) {
      this.visibleItems.splice(visibleItemsIndex, 1);
      visibilityChanged = true;
    }
    if (visibilityChanged && triggerEvent) {
      this.trigger('visibilityChange', this.visibleItems);
    }
    return visibilityChanged;
  };

  CollectionView.prototype.dispose = function() {
    var i, len, prop, ref;
    if (this.disposed) {
      return;
    }
    ref = ['$list', '$fallback', '$loading', 'visibleItems'];
    for (i = 0, len = ref.length; i < len; i++) {
      prop = ref[i];
      delete this[prop];
    }
    return CollectionView.__super__.dispose.apply(this, arguments);
  };

  return CollectionView;

})(View);


},{"../lib/utils":13,"./view":19,"backbone":"backbone"}],18:[function(require,module,exports){
'use strict';
var $, Backbone, EventBroker, Layout, View, _, mediator, utils,
  bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; },
  extend = function(child, parent) { for (var key in parent) { if (hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; },
  hasProp = {}.hasOwnProperty;

_ = require('underscore');

Backbone = require('backbone');

View = require('./view');

EventBroker = require('../lib/event_broker');

utils = require('../lib/utils');

mediator = require('../mediator');

$ = Backbone.$;

module.exports = Layout = (function(superClass) {
  extend(Layout, superClass);

  Layout.prototype.el = 'body';

  Layout.prototype.keepElement = true;

  Layout.prototype.title = '';

  Layout.prototype.globalRegions = null;

  Layout.prototype.listen = {
    'beforeControllerDispose mediator': 'scroll'
  };

  function Layout(options) {
    if (options == null) {
      options = {};
    }
    this.openLink = bind(this.openLink, this);
    this.globalRegions = [];
    this.title = options.title;
    if (options.regions) {
      this.regions = options.regions;
    }
    this.settings = _.defaults(options, {
      titleTemplate: function(data) {
        var st;
        st = data.subtitle ? data.subtitle + " \u2013 " : '';
        return st + data.title;
      },
      openExternalToBlank: false,
      routeLinks: 'a, .go-to',
      skipRouting: '.noscript',
      scrollTo: [0, 0]
    });
    mediator.setHandler('region:show', this.showRegion, this);
    mediator.setHandler('region:register', this.registerRegionHandler, this);
    mediator.setHandler('region:unregister', this.unregisterRegionHandler, this);
    mediator.setHandler('region:find', this.regionByName, this);
    mediator.setHandler('adjustTitle', this.adjustTitle, this);
    Layout.__super__.constructor.apply(this, arguments);
    if (this.settings.routeLinks) {
      this.startLinkRouting();
    }
  }

  Layout.prototype.scroll = function() {
    var to, x, y;
    to = this.settings.scrollTo;
    if (to && typeof to === 'object') {
      x = to[0], y = to[1];
      return window.scrollTo(x, y);
    }
  };

  Layout.prototype.adjustTitle = function(subtitle) {
    var title;
    if (subtitle == null) {
      subtitle = '';
    }
    title = this.settings.titleTemplate({
      title: this.title,
      subtitle: subtitle
    });
    document.title = title;
    this.publishEvent('adjustTitle', subtitle, title);
    return title;
  };

  Layout.prototype.startLinkRouting = function() {
    var route;
    route = this.settings.routeLinks;
    if (route) {
      return this.delegate('click', route, this.openLink);
    }
  };

  Layout.prototype.stopLinkRouting = function() {
    var route;
    route = this.settings.routeLinks;
    if (route) {
      return this.undelegate('click', route);
    }
  };

  Layout.prototype.isExternalLink = function(link) {
    var host, protocol, target;
    if (!utils.matchesSelector(link, 'a, area')) {
      return false;
    }
    if (link.download) {
      return true;
    }
    if (!link.host) {
      link.href += '';
    }
    protocol = location.protocol, host = location.host;
    target = link.target;
    return target === '_blank' || link.rel === 'external' || link.protocol !== protocol || link.host !== host || (target === '_parent' && parent !== self) || (target === '_top' && top !== self);
  };

  Layout.prototype.openLink = function(event) {
    var el, href, skipRouting;
    if (utils.modifierKeyPressed(event)) {
      return;
    }
    el = $ ? event.currentTarget : event.delegateTarget;
    href = el.getAttribute('href') || el.getAttribute('data-href');
    if (!href || href[0] === '#') {
      return;
    }
    skipRouting = this.settings.skipRouting;
    switch (typeof skipRouting) {
      case 'function':
        if (!skipRouting(href, el)) {
          return;
        }
        break;
      case 'string':
        if (utils.matchesSelector(el, skipRouting)) {
          return;
        }
    }
    if (this.isExternalLink(el)) {
      if (this.settings.openExternalToBlank) {
        event.preventDefault();
        this.openWindow(href);
      }
      return;
    }
    utils.redirectTo({
      url: href
    });
    return event.preventDefault();
  };

  Layout.prototype.openWindow = function(href) {
    return window.open(href);
  };

  Layout.prototype.registerRegionHandler = function(instance, name, selector) {
    if (name != null) {
      return this.registerGlobalRegion(instance, name, selector);
    } else {
      return this.registerGlobalRegions(instance);
    }
  };

  Layout.prototype.registerGlobalRegion = function(instance, name, selector) {
    this.unregisterGlobalRegion(instance, name);
    return this.globalRegions.unshift({
      instance: instance,
      name: name,
      selector: selector
    });
  };

  Layout.prototype.registerGlobalRegions = function(instance) {
    var i, len, name, ref, selector, version;
    ref = utils.getAllPropertyVersions(instance, 'regions');
    for (i = 0, len = ref.length; i < len; i++) {
      version = ref[i];
      for (name in version) {
        selector = version[name];
        this.registerGlobalRegion(instance, name, selector);
      }
    }
  };

  Layout.prototype.unregisterRegionHandler = function(instance, name) {
    if (name != null) {
      return this.unregisterGlobalRegion(instance, name);
    } else {
      return this.unregisterGlobalRegions(instance);
    }
  };

  Layout.prototype.unregisterGlobalRegion = function(instance, name) {
    var cid, region;
    cid = instance.cid;
    return this.globalRegions = (function() {
      var i, len, ref, results;
      ref = this.globalRegions;
      results = [];
      for (i = 0, len = ref.length; i < len; i++) {
        region = ref[i];
        if (region.instance.cid !== cid || region.name !== name) {
          results.push(region);
        }
      }
      return results;
    }).call(this);
  };

  Layout.prototype.unregisterGlobalRegions = function(instance) {
    var region;
    return this.globalRegions = (function() {
      var i, len, ref, results;
      ref = this.globalRegions;
      results = [];
      for (i = 0, len = ref.length; i < len; i++) {
        region = ref[i];
        if (region.instance.cid !== instance.cid) {
          results.push(region);
        }
      }
      return results;
    }).call(this);
  };

  Layout.prototype.regionByName = function(name) {
    var i, len, ref, reg;
    ref = this.globalRegions;
    for (i = 0, len = ref.length; i < len; i++) {
      reg = ref[i];
      if (reg.name === name && !reg.instance.stale) {
        return reg;
      }
    }
  };

  Layout.prototype.showRegion = function(name, instance) {
    var region;
    region = this.regionByName(name);
    if (!region) {
      throw new Error("No region registered under " + name);
    }
    return instance.container = region.selector === '' ? $ ? region.instance.$el : region.instance.el : region.instance.noWrap ? region.instance.container.find(region.selector) : region.instance.find(region.selector);
  };

  Layout.prototype.dispose = function() {
    var i, len, prop, ref;
    if (this.disposed) {
      return;
    }
    this.stopLinkRouting();
    ref = ['globalRegions', 'title', 'route'];
    for (i = 0, len = ref.length; i < len; i++) {
      prop = ref[i];
      delete this[prop];
    }
    mediator.removeHandlers(this);
    return Layout.__super__.dispose.apply(this, arguments);
  };

  return Layout;

})(View);


},{"../lib/event_broker":7,"../lib/utils":13,"../mediator":14,"./view":19,"backbone":"backbone","underscore":"underscore"}],19:[function(require,module,exports){
'use strict';
var $, Backbone, EventBroker, View, _, attach, mediator, setHTML, utils,
  extend = function(child, parent) { for (var key in parent) { if (hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; },
  hasProp = {}.hasOwnProperty,
  indexOf = [].indexOf || function(item) { for (var i = 0, l = this.length; i < l; i++) { if (i in this && this[i] === item) return i; } return -1; };

_ = require('underscore');

Backbone = require('backbone');

EventBroker = require('../lib/event_broker');

utils = require('../lib/utils');

mediator = require('../mediator');

$ = Backbone.$;

setHTML = (function() {
  if ($) {
    return function(view, html) {
      view.$el.html(html);
      return html;
    };
  } else {
    return function(view, html) {
      return view.el.innerHTML = html;
    };
  }
})();

attach = (function() {
  if ($) {
    return function(view) {
      var actual;
      actual = $(view.container);
      if (typeof view.containerMethod === 'function') {
        return view.containerMethod(actual, view.el);
      } else {
        return actual[view.containerMethod](view.el);
      }
    };
  } else {
    return function(view) {
      var actual;
      actual = typeof view.container === 'string' ? document.querySelector(view.container) : view.container;
      if (typeof view.containerMethod === 'function') {
        return view.containerMethod(actual, view.el);
      } else {
        return actual[view.containerMethod](view.el);
      }
    };
  }
})();

module.exports = View = (function(superClass) {
  extend(View, superClass);

  _.extend(View.prototype, EventBroker);

  View.prototype.autoRender = false;

  View.prototype.autoAttach = true;

  View.prototype.container = null;

  View.prototype.containerMethod = $ ? 'append' : 'appendChild';

  View.prototype.regions = null;

  View.prototype.region = null;

  View.prototype.stale = false;

  View.prototype.noWrap = false;

  View.prototype.keepElement = false;

  View.prototype.subviews = null;

  View.prototype.subviewsByName = null;

  View.prototype.optionNames = ['autoAttach', 'autoRender', 'container', 'containerMethod', 'region', 'regions', 'noWrap'];

  function View(options) {
    var i, key, len, ref, region, render;
    if (options == null) {
      options = {};
    }
    ref = Object.keys(options);
    for (i = 0, len = ref.length; i < len; i++) {
      key = ref[i];
      if (indexOf.call(this.optionNames, key) >= 0) {
        this[key] = options[key];
      }
    }
    render = this.render;
    this.render = function() {
      var returnValue;
      if (this.disposed) {
        return false;
      }
      returnValue = render.apply(this, arguments);
      if (this.autoAttach) {
        this.attach.apply(this, arguments);
      }
      return returnValue;
    };
    this.subviews = [];
    this.subviewsByName = {};
    if (this.noWrap) {
      if (this.region) {
        region = mediator.execute('region:find', this.region);
        if (region != null) {
          this.el = region.instance.container != null ? region.instance.region != null ? $(region.instance.container).find(region.selector) : region.instance.container : region.instance.$(region.selector);
        }
      }
      if (this.container) {
        this.el = this.container;
      }
    }
    View.__super__.constructor.apply(this, arguments);
    this.delegateListeners();
    if (this.model) {
      this.listenTo(this.model, 'dispose', this.dispose);
    }
    if (this.collection) {
      this.listenTo(this.collection, 'dispose', (function(_this) {
        return function(subject) {
          if (!subject || subject === _this.collection) {
            return _this.dispose();
          }
        };
      })(this));
    }
    if (this.regions != null) {
      mediator.execute('region:register', this);
    }
    if (this.autoRender) {
      this.render();
    }
  }

  View.prototype.find = function(selector) {
    if ($) {
      return this.$el.find(selector);
    } else {
      return this.el.querySelector(selector);
    }
  };

  View.prototype.delegate = function(eventName, second, third) {
    var bound, event, events, handler, i, len, ref, selector;
    if (typeof eventName !== 'string') {
      throw new TypeError('View#delegate: first argument must be a string');
    }
    switch (arguments.length) {
      case 2:
        handler = second;
        break;
      case 3:
        selector = second;
        handler = third;
        if (typeof selector !== 'string') {
          throw new TypeError('View#delegate: ' + 'second argument must be a string');
        }
        break;
      default:
        throw new TypeError('View#delegate: ' + 'only two or three arguments are allowed');
    }
    if (typeof handler !== 'function') {
      throw new TypeError('View#delegate: ' + 'handler argument must be function');
    }
    bound = handler.bind(this);
    if ($) {
      events = eventName.split(' ').map((function(_this) {
        return function(name) {
          return name + ".delegateEvents" + _this.cid;
        };
      })(this)).join(' ');
      this.$el.on(events, selector, bound);
    } else {
      ref = eventName.split(' ');
      for (i = 0, len = ref.length; i < len; i++) {
        event = ref[i];
        View.__super__.delegate.call(this, event, selector, bound);
      }
    }
    return bound;
  };

  View.prototype._delegateEvents = function(events) {
    var handler, i, key, len, match, ref, value;
    ref = Object.keys(events);
    for (i = 0, len = ref.length; i < len; i++) {
      key = ref[i];
      value = events[key];
      handler = typeof value === 'function' ? value : this[value];
      if (!handler) {
        throw new Error("Method `" + value + "` does not exist");
      }
      match = /^(\S+)\s*(.*)$/.exec(key);
      this.delegate(match[1], match[2], handler);
    }
  };

  View.prototype.delegateEvents = function(events, keepOld) {
    var classEvents, i, len, ref;
    if (!keepOld) {
      this.undelegateEvents();
    }
    if (events) {
      return this._delegateEvents(events);
    }
    ref = utils.getAllPropertyVersions(this, 'events');
    for (i = 0, len = ref.length; i < len; i++) {
      classEvents = ref[i];
      if (typeof classEvents === 'function') {
        classEvents = classEvents.call(this);
      }
      this._delegateEvents(classEvents);
    }
  };

  View.prototype.undelegate = function(eventName, second) {
    var events, selector;
    if (eventName == null) {
      eventName = '';
    }
    if (typeof eventName !== 'string') {
      throw new TypeError('View#undelegate: first argument must be a string');
    }
    switch (arguments.length) {
      case 2:
        if (typeof second === 'string') {
          selector = second;
        }
        break;
      case 3:
        selector = second;
        if (typeof selector !== 'string') {
          throw new TypeError('View#undelegate: ' + 'second argument must be a string');
        }
    }
    if ($) {
      events = eventName.split(' ').map((function(_this) {
        return function(name) {
          return name + ".delegateEvents" + _this.cid;
        };
      })(this)).join(' ');
      return this.$el.off(events, selector);
    } else {
      if (eventName) {
        return View.__super__.undelegate.call(this, eventName, selector);
      } else {
        return this.undelegateEvents();
      }
    }
  };

  View.prototype.delegateListeners = function() {
    var eventName, i, j, key, len, len1, method, ref, ref1, ref2, target, version;
    if (!this.listen) {
      return;
    }
    ref = utils.getAllPropertyVersions(this, 'listen');
    for (i = 0, len = ref.length; i < len; i++) {
      version = ref[i];
      if (typeof version === 'function') {
        version = version.call(this);
      }
      ref1 = Object.keys(version);
      for (j = 0, len1 = ref1.length; j < len1; j++) {
        key = ref1[j];
        method = version[key];
        if (typeof method !== 'function') {
          method = this[method];
        }
        if (typeof method !== 'function') {
          throw new Error('View#delegateListeners: ' + ("listener for `" + key + "` must be function"));
        }
        ref2 = key.split(' '), eventName = ref2[0], target = ref2[1];
        this.delegateListener(eventName, target, method);
      }
    }
  };

  View.prototype.delegateListener = function(eventName, target, callback) {
    var prop;
    if (target === 'model' || target === 'collection') {
      prop = this[target];
      if (prop) {
        this.listenTo(prop, eventName, callback);
      }
    } else if (target === 'mediator') {
      this.subscribeEvent(eventName, callback);
    } else if (!target) {
      this.on(eventName, callback, this);
    }
  };

  View.prototype.registerRegion = function(name, selector) {
    return mediator.execute('region:register', this, name, selector);
  };

  View.prototype.unregisterRegion = function(name) {
    return mediator.execute('region:unregister', this, name);
  };

  View.prototype.unregisterAllRegions = function() {
    return mediator.execute({
      name: 'region:unregister',
      silent: true
    }, this);
  };

  View.prototype.subview = function(name, view) {
    var byName, subviews;
    subviews = this.subviews;
    byName = this.subviewsByName;
    if (name && view) {
      this.removeSubview(name);
      subviews.push(view);
      byName[name] = view;
      return view;
    } else if (name) {
      return byName[name];
    }
  };

  View.prototype.removeSubview = function(nameOrView) {
    var byName, index, name, subviews, view;
    if (!nameOrView) {
      return;
    }
    subviews = this.subviews;
    byName = this.subviewsByName;
    if (typeof nameOrView === 'string') {
      name = nameOrView;
      view = byName[name];
    } else {
      view = nameOrView;
      Object.keys(byName).some(function(key) {
        if (byName[key] === view) {
          return name = key;
        }
      });
    }
    if (!(name && (view != null ? view.dispose : void 0))) {
      return;
    }
    view.dispose();
    index = subviews.indexOf(view);
    if (index !== -1) {
      subviews.splice(index, 1);
    }
    return delete byName[name];
  };

  View.prototype.getTemplateData = function() {
    var data, source;
    data = this.model ? utils.serialize(this.model) : this.collection ? {
      items: utils.serialize(this.collection),
      length: this.collection.length
    } : {};
    source = this.model || this.collection;
    if (source) {
      if (typeof source.isSynced === 'function' && !('synced' in data)) {
        data.synced = source.isSynced();
      }
    }
    return data;
  };

  View.prototype.getTemplateFunction = function() {
    throw new Error('View#getTemplateFunction must be overridden');
  };

  View.prototype.render = function() {
    var el, html, templateFunc;
    if (this.disposed) {
      return false;
    }
    templateFunc = this.getTemplateFunction();
    if (typeof templateFunc === 'function') {
      html = templateFunc(this.getTemplateData());
      if (this.noWrap) {
        el = document.createElement('div');
        el.innerHTML = html;
        if (el.children.length > 1) {
          throw new Error('There must be a single top-level element ' + 'when using `noWrap`');
        }
        this.undelegateEvents();
        this.setElement(el.firstChild, true);
      } else {
        setHTML(this, html);
      }
    }
    return this;
  };

  View.prototype.attach = function() {
    if (this.region != null) {
      mediator.execute('region:show', this.region, this);
    }
    if (this.container && !document.body.contains(this.el)) {
      attach(this);
      return this.trigger('addedToDOM');
    }
  };

  View.prototype.disposed = false;

  View.prototype.dispose = function() {
    var i, j, len, len1, prop, ref, ref1, subview;
    if (this.disposed) {
      return;
    }
    this.unregisterAllRegions();
    ref = this.subviews;
    for (i = 0, len = ref.length; i < len; i++) {
      subview = ref[i];
      subview.dispose();
    }
    this.unsubscribeAllEvents();
    this.off();
    if (this.keepElement) {
      this.undelegateEvents();
      this.undelegate();
      this.stopListening();
    } else {
      this.remove();
    }
    ref1 = ['el', '$el', 'options', 'model', 'collection', 'subviews', 'subviewsByName', '_callbacks'];
    for (j = 0, len1 = ref1.length; j < len1; j++) {
      prop = ref1[j];
      delete this[prop];
    }
    this.disposed = true;
    return Object.freeze(this);
  };

  return View;

})(Backbone.NativeView || Backbone.View);


},{"../lib/event_broker":7,"../lib/utils":13,"../mediator":14,"backbone":"backbone","underscore":"underscore"}]},{},[1])
//# sourceMappingURL=data:application/json;charset:utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJzcmMvY2hhcGxpbi5jb2ZmZWUiLCJzcmMvY2hhcGxpbi9hcHBsaWNhdGlvbi5jb2ZmZWUiLCJzcmMvY2hhcGxpbi9jb21wb3Nlci5jb2ZmZWUiLCJzcmMvY2hhcGxpbi9jb250cm9sbGVycy9jb250cm9sbGVyLmNvZmZlZSIsInNyYy9jaGFwbGluL2Rpc3BhdGNoZXIuY29mZmVlIiwic3JjL2NoYXBsaW4vbGliL2NvbXBvc2l0aW9uLmNvZmZlZSIsInNyYy9jaGFwbGluL2xpYi9ldmVudF9icm9rZXIuY29mZmVlIiwic3JjL2NoYXBsaW4vbGliL2hpc3RvcnkuY29mZmVlIiwic3JjL2NoYXBsaW4vbGliL3JvdXRlLmNvZmZlZSIsInNyYy9jaGFwbGluL2xpYi9yb3V0ZXIuY29mZmVlIiwic3JjL2NoYXBsaW4vbGliL3N1cHBvcnQuY29mZmVlIiwic3JjL2NoYXBsaW4vbGliL3N5bmNfbWFjaGluZS5jb2ZmZWUiLCJzcmMvY2hhcGxpbi9saWIvdXRpbHMuY29mZmVlIiwic3JjL2NoYXBsaW4vbWVkaWF0b3IuY29mZmVlIiwic3JjL2NoYXBsaW4vbW9kZWxzL2NvbGxlY3Rpb24uY29mZmVlIiwic3JjL2NoYXBsaW4vbW9kZWxzL21vZGVsLmNvZmZlZSIsInNyYy9jaGFwbGluL3ZpZXdzL2NvbGxlY3Rpb25fdmlldy5jb2ZmZWUiLCJzcmMvY2hhcGxpbi92aWV3cy9sYXlvdXQuY29mZmVlIiwic3JjL2NoYXBsaW4vdmlld3Mvdmlldy5jb2ZmZWUiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUNBQTtBQUlBLE1BQU0sQ0FBQyxPQUFQLEdBQ0U7RUFBQSxXQUFBLEVBQWdCLE9BQUEsQ0FBUSx1QkFBUixDQUFoQjtFQUNBLFFBQUEsRUFBZ0IsT0FBQSxDQUFRLG9CQUFSLENBRGhCO0VBRUEsVUFBQSxFQUFnQixPQUFBLENBQVEsa0NBQVIsQ0FGaEI7RUFHQSxVQUFBLEVBQWdCLE9B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b0JBQUQsQ0FBQTtBQUdBO0FBQUEsU0FBQSxxQ0FBQTs7TUFBQSxPQUFPLENBQUMsT0FBUixDQUFBO0FBQUE7SUFHQSxJQUFDLENBQUEsb0JBQUQsQ0FBQTtJQUdBLElBQUMsQ0FBQSxHQUFELENBQUE7SUFHQSxJQUFHLElBQUMsQ0FBQSxXQUFKO01BRUUsSUFBQyxDQUFBLGdCQUFELENBQUE7TUFDQSxJQUFDLENBQUEsVUFBRCxDQUFBO01BRUEsSUFBQyxDQUFBLGFBQUQsQ0FBQSxFQUxGO0tBQUEsTUFBQTtNQVNFLElBQUMsQ0FBQSxNQUFELENBQUEsRUFURjs7QUFhQTtBQUFBLFNBQUEsd0NBQUE7O01BQUEsT0FBTyxJQUFLLENBQUEsSUFBQTtBQUFaO0lBUUEsSUFBQyxDQUFBLFFBQUQsR0FBWTtXQUdaLE1BQU0sQ0FBQyxNQUFQLENBQWMsSUFBZDtFQXhDTzs7OztHQTNheUIsUUFBUSxDQUFDLFVBQVQsSUFBdUIsUUFBUSxDQUFDIiwiZmlsZSI6ImdlbmVyYXRlZC5qcyIsInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24gZSh0LG4scil7ZnVuY3Rpb24gcyhvLHUpe2lmKCFuW29dKXtpZighdFtvXSl7dmFyIGE9dHlwZW9mIHJlcXVpcmU9PVwiZnVuY3Rpb25cIiYmcmVxdWlyZTtpZighdSYmYSlyZXR1cm4gYShvLCEwKTtpZihpKXJldHVybiBpKG8sITApO3ZhciBmPW5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIrbytcIidcIik7dGhyb3cgZi5jb2RlPVwiTU9EVUxFX05PVF9GT1VORFwiLGZ9dmFyIGw9bltvXT17ZXhwb3J0czp7fX07dFtvXVswXS5jYWxsKGwuZXhwb3J0cyxmdW5jdGlvbihlKXt2YXIgbj10W29dWzFdW2VdO3JldHVybiBzKG4/bjplKX0sbCxsLmV4cG9ydHMsZSx0LG4scil9cmV0dXJuIG5bb10uZXhwb3J0c312YXIgaT10eXBlb2YgcmVxdWlyZT09XCJmdW5jdGlvblwiJiZyZXF1aXJlO2Zvcih2YXIgbz0wO288ci5sZW5ndGg7bysrKXMocltvXSk7cmV0dXJuIHN9KSIsIid1c2Ugc3RyaWN0J1xuXG4jIE1haW4gZW50cnkgcG9pbnQgaW50byBDaGFwbGluIG1vZHVsZS5cbiMgTG9hZCBhbGwgY29tcG9uZW50cyBhbmQgZXhwb3NlIHRoZW0uXG5tb2R1bGUuZXhwb3J0cyA9XG4gIEFwcGxpY2F0aW9uOiAgICByZXF1aXJlICcuL2NoYXBsaW4vYXBwbGljYXRpb24nXG4gIENvbXBvc2VyOiAgICAgICByZXF1aXJlICcuL2NoYXBsaW4vY29tcG9zZXInXG4gIENvbnRyb2xsZXI6ICAgICByZXF1aXJlICcuL2NoYXBsaW4vY29udHJvbGxlcnMvY29udHJvbGxlcidcbiAgRGlzcGF0Y2hlcjogICAgIHJlcXVpcmUgJy4vY2hhcGxpbi9kaXNwYXRjaGVyJ1xuICBDb21wb3NpdGlvbjogICAgcmVxdWlyZSAnLi9jaGFwbGluL2xpYi9jb21wb3NpdGlvbidcbiAgRXZlbnRCcm9rZXI6ICAgIHJlcXVpcmUgJy4vY2hhcGxpbi9saWIvZXZlbnRfYnJva2VyJ1xuICBIaXN0b3J5OiAgICAgICAgcmVxdWlyZSAnLi9jaGFwbGluL2xpYi9oaXN0b3J5J1xuICBSb3V0ZTogICAgICAgICAgcmVxdWlyZSAnLi9jaGFwbGluL2xpYi9yb3V0ZSdcbiAgUm91dGVyOiAgICAgICAgIHJlcXVpcmUgJy4vY2hhcGxpbi9saWIvcm91dGVyJ1xuICBzdXBwb3J0OiAgICAgICAgcmVxdWlyZSAnLi9jaGFwbGluL2xpYi9zdXBwb3J0J1xuICBTeW5jTWFjaGluZTogICAgcmVxdWlyZSAnLi9jaGFwbGluL2xpYi9zeW5jX21hY2hpbmUnXG4gIHV0aWxzOiAgICAgICAgICByZXF1aXJlICcuL2NoYXBsaW4vbGliL3V0aWxzJ1xuICBtZWRpYXRvcjogICAgICAgcmVxdWlyZSAnLi9jaGFwbGluL21lZGlhdG9yJ1xuICBDb2xsZWN0aW9uOiAgICAgcmVxdWlyZSAnLi9jaGFwbGluL21vZGVscy9jb2xsZWN0aW9uJ1xuICBNb2RlbDogICAgICAgICAgcmVxdWlyZSAnLi9jaGFwbGluL21vZGVscy9tb2RlbCdcbiAgQ29sbGVjdGlvblZpZXc6IHJlcXVpcmUgJy4vY2hhcGxpbi92aWV3cy9jb2xsZWN0aW9uX3ZpZXcnXG4gIExheW91dDogICAgICAgICByZXF1aXJlICcuL2NoYXBsaW4vdmlld3MvbGF5b3V0J1xuICBWaWV3OiAgICAgICAgICAgcmVxdWlyZSAnLi9jaGFwbGluL3ZpZXdzL3ZpZXcnXG4iLCIndXNlIHN0cmljdCdcblxuIyBUaGlyZC1wYXJ0eSBsaWJyYXJpZXMuXG5fID0gcmVxdWlyZSAndW5kZXJzY29yZSdcbkJhY2tib25lID0gcmVxdWlyZSAnYmFja2JvbmUnXG5cbiMgQ29mZmVlU2NyaXB0IGNsYXNzZXMgd2hpY2ggYXJlIGluc3RhbnRpYXRlZCB3aXRoIGBuZXdgXG5Db21wb3NlciA9IHJlcXVpcmUgJy4vY29tcG9zZXInXG5EaXNwYXRjaGVyID0gcmVxdWlyZSAnLi9kaXNwYXRjaGVyJ1xuUm91dGVyID0gcmVxdWlyZSAnLi9saWIvcm91dGVyJ1xuTGF5b3V0ID0gcmVxdWlyZSAnLi92aWV3cy9sYXlvdXQnXG5cbiMgQSBtaXgtaW4gdGhhdCBzaG91bGQgYmUgbWl4ZWQgdG8gY2xhc3MuXG5FdmVudEJyb2tlciA9IHJlcXVpcmUgJy4vbGliL2V2ZW50X2Jyb2tlcidcblxuIyBJbmRlcGVuZGVudCBnbG9iYWwgZXZlbnQgYnVzIHRoYXQgaXMgdXNlZCBieSBpdHNlbGYsIHNvIGxvd2VyY2FzZWQuXG5tZWRpYXRvciA9IHJlcXVpcmUgJy4vbWVkaWF0b3InXG5cbiMgVGhlIGJvb3RzdHJhcHBlciBpcyB0aGUgZW50cnkgcG9pbnQgZm9yIENoYXBsaW4gYXBwcy5cbm1vZHVsZS5leHBvcnRzID0gY2xhc3MgQXBwbGljYXRpb25cbiAgIyBCb3Jyb3cgdGhlIGBleHRlbmRgIG1ldGhvZCBmcm9tIGEgZGVhciBmcmllbmQuXG4gIEBleHRlbmQgPSBCYWNrYm9uZS5Nb2RlbC5leHRlbmRcblxuICAjIE1peGluIGFuIGBFdmVudEJyb2tlcmAgZm9yICoqcHVibGlzaC9zdWJzY3JpYmUqKiBmdW5jdGlvbmFsaXR5LlxuICBfLmV4dGVuZCBAcHJvdG90eXBlLCBFdmVudEJyb2tlclxuXG4gICMgU2l0ZS13aWRlIHRpdGxlIHRoYXQgaXMgbWFwcGVkIHRvIEhUTUwgYHRpdGxlYCB0YWcuXG4gIHRpdGxlOiAnJ1xuXG4gICMgQ29yZSBPYmplY3QgSW5zdGFudGlhdGlvblxuICAjIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cblxuICAjIFRoZSBhcHBsaWNhdGlvbiBpbnN0YW50aWF0ZXMgdGhyZWUgKipjb3JlIG1vZHVsZXMqKjpcbiAgZGlzcGF0Y2hlcjogbnVsbFxuICBsYXlvdXQ6IG51bGxcbiAgcm91dGVyOiBudWxsXG4gIGNvbXBvc2VyOiBudWxsXG4gIHN0YXJ0ZWQ6IGZhbHNlXG5cbiAgY29uc3RydWN0b3I6IChvcHRpb25zID0ge30pIC0+XG4gICAgQGluaXRpYWxpemUgb3B0aW9uc1xuXG4gIGluaXRpYWxpemU6IChvcHRpb25zID0ge30pIC0+XG4gICAgIyBDaGVjayBpZiBhcHAgaXMgYWxyZWFkeSBzdGFydGVkLlxuICAgIGlmIEBzdGFydGVkXG4gICAgICB0aHJvdyBuZXcgRXJyb3IgJ0FwcGxpY2F0aW9uI2luaXRpYWxpemU6IEFwcCB3YXMgYWxyZWFkeSBzdGFydGVkJ1xuXG4gICAgIyBJbml0aWFsaXplIGNvcmUgY29tcG9uZW50cy5cbiAgICAjIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuXG4gICAgIyBSZWdpc3RlciBhbGwgcm91dGVzLlxuICAgICMgWW91IG1pZ2h0IHBhc3MgUm91dGVyL0hpc3Rvcnkgb3B0aW9ucyBhcyB0aGUgc2Vjb25kIHBhcmFtZXRlci5cbiAgICAjIENoYXBsaW4gZW5hYmxlcyBwdXNoU3RhdGUgcGVyIGRlZmF1bHQgYW5kIEJhY2tib25lIHVzZXMgLyBhc1xuICAgICMgdGhlIHJvb3QgcGVyIGRlZmF1bHQuIFlvdSBtaWdodCBjaGFuZ2UgdGhhdCBpbiB0aGUgb3B0aW9uc1xuICAgICMgaWYgbmVjZXNzYXJ5OlxuICAgICMgQGluaXRSb3V0ZXIgcm91dGVzLCBwdXNoU3RhdGU6IGZhbHNlLCByb290OiAnL3N1YmRpci8nXG4gICAgQGluaXRSb3V0ZXIgb3B0aW9ucy5yb3V0ZXMsIG9wdGlvbnNcblxuICAgICMgRGlzcGF0Y2hlciBsaXN0ZW5zIGZvciByb3V0aW5nIGV2ZW50cyBhbmQgaW5pdGlhbGlzZXMgY29udHJvbGxlcnMuXG4gICAgQGluaXREaXNwYXRjaGVyIG9wdGlvbnNcblxuICAgICMgTGF5b3V0IGxpc3RlbnMgZm9yIGNsaWNrIGV2ZW50cyAmIGRlbGVnYXRlcyBpbnRlcm5hbCBsaW5rcyB0byByb3V0ZXIuXG4gICAgQGluaXRMYXlvdXQgb3B0aW9uc1xuXG4gICAgIyBDb21wb3NlciBncmFudHMgdGhlIGFiaWxpdHkgZm9yIHZpZXdzIGFuZCBzdHVmZiB0byBiZSBwZXJzaXN0ZWQuXG4gICAgQGluaXRDb21wb3NlciBvcHRpb25zXG5cbiAgICAjIE1lZGlhdG9yIGlzIGEgZ2xvYmFsIG1lc3NhZ2UgYnJva2VyIHdoaWNoIGltcGxlbWVudHMgcHViIC8gc3ViIHBhdHRlcm4uXG4gICAgQGluaXRNZWRpYXRvcigpXG5cbiAgICAjIFN0YXJ0IHRoZSBhcHBsaWNhdGlvbi5cbiAgICBAc3RhcnQoKVxuXG4gICMgKipDaGFwbGluLkRpc3BhdGNoZXIqKiBzaXRzIGJldHdlZW4gdGhlIHJvdXRlciBhbmQgY29udHJvbGxlcnMgdG8gbGlzdGVuXG4gICMgZm9yIHJvdXRpbmcgZXZlbnRzLiBXaGVuIHRoZXkgb2NjdXIsIENoYXBsaW4uRGlzcGF0Y2hlciBsb2FkcyB0aGUgdGFyZ2V0XG4gICMgY29udHJvbGxlciBtb2R1bGUgYW5kIGluc3RhbnRpYXRlcyBpdCBiZWZvcmUgaW52b2tpbmcgdGhlIHRhcmdldCBhY3Rpb24uXG4gICMgQW55IHByZXZpb3VzbHkgYWN0aXZlIGNvbnRyb2xsZXIgaXMgYXV0b21hdGljYWxseSBkaXNwb3NlZC5cblxuICBpbml0RGlzcGF0Y2hlcjogKG9wdGlvbnMpIC0+XG4gICAgQGRpc3BhdGNoZXIgPSBuZXcgRGlzcGF0Y2hlciBvcHRpb25zXG5cbiAgIyAqKkNoYXBsaW4uTGF5b3V0KiogaXMgdGhlIHRvcC1sZXZlbCBhcHBsaWNhdGlvbiB2aWV3LiBJdCAqZG9lcyBub3RcbiAgIyBpbmhlcml0KiBmcm9tIENoYXBsaW4uVmlldyBidXQgYm9ycm93cyBzb21lIG9mIGl0cyBmdW5jdGlvbmFsaXRpZXMuIEl0XG4gICMgaXMgdGllZCB0byB0aGUgZG9jdW1lbnQgZG9tIGVsZW1lbnQgYW5kIHJlZ2lzdGVycyBhcHBsaWNhdGlvbi13aWRlXG4gICMgZXZlbnRzLCBzdWNoIGFzIGludGVybmFsIGxpbmtzLiBBbmQgbWFpbmx5LCB3aGVuIGEgbmV3IGNvbnRyb2xsZXIgaXNcbiAgIyBhY3RpdmF0ZWQsIENoYXBsaW4uTGF5b3V0IGlzIHJlc3BvbnNpYmxlIGZvciBjaGFuZ2luZyB0aGUgbWFpbiB2aWV3IHRvXG4gICMgdGhlIHZpZXcgb2YgdGhlIG5ldyBjb250cm9sbGVyLlxuXG4gIGluaXRMYXlvdXQ6IChvcHRpb25zID0ge30pIC0+XG4gICAgb3B0aW9ucy50aXRsZSA/PSBAdGl0bGVcbiAgICBAbGF5b3V0ID0gbmV3IExheW91dCBvcHRpb25zXG5cbiAgaW5pdENvbXBvc2VyOiAob3B0aW9ucyA9IHt9KSAtPlxuICAgIEBjb21wb3NlciA9IG5ldyBDb21wb3NlciBvcHRpb25zXG5cbiAgIyAqKkNoYXBsaW4ubWVkaWF0b3IqKiBpcyBhIHNpbmdsZXRvbiB0aGF0IHNlcnZlcyBhcyB0aGUgc29sZSBjb21tdW5pY2F0aW9uXG4gICMgY2hhbm5lbCBmb3IgYWxsIHBhcnRzIG9mIHRoZSBhcHBsaWNhdGlvbi4gSXQgc2hvdWxkIGJlIHNlYWxlZCBzbyB0aGF0IGl0c1xuICAjIG1pc3VzZSBhcyBhIGtpdGNoZW4gc2luayBpcyBwcm9oaWJpdGVkLiBJZiB5b3UgZG8gd2FudCB0byBnaXZlIG1vZHVsZXNcbiAgIyBhY2Nlc3MgdG8gc29tZSBzaGFyZWQgcmVzb3VyY2UsIGhvd2V2ZXIsIGFkZCBpdCBoZXJlIGJlZm9yZSBzZWFsaW5nIHRoZVxuICAjIG1lZGlhdG9yLlxuXG4gIGluaXRNZWRpYXRvcjogLT5cbiAgICBPYmplY3Quc2VhbCBtZWRpYXRvclxuXG4gICMgKipDaGFwbGluLlJvdXRlcioqIGlzIHJlc3BvbnNpYmxlIGZvciBvYnNlcnZpbmcgVVJMIGNoYW5nZXMuIFRoZSByb3V0ZXJcbiAgIyBpcyBhIHJlcGxhY2VtZW50IGZvciBCYWNrYm9uZS5Sb3V0ZXIgYW5kICpkb2VzIG5vdCBpbmhlcml0IGZyb20gaXQqXG4gICMgZGlyZWN0bHkuIEl0J3MgYSBkaWZmZXJlbnQgaW1wbGVtZW50YXRpb24gd2l0aCBzZXZlcmFsIGFkdmFudGFnZXMgb3ZlclxuICAjIHRoZSBzdGFuZGFyZCByb3V0ZXIgcHJvdmlkZWQgYnkgQmFja2JvbmUuIFRoZSByb3V0ZXIgaXMgdHlwaWNhbGx5XG4gICMgaW5pdGlhbGl6ZWQgYnkgcGFzc2luZyB0aGUgZnVuY3Rpb24gcmV0dXJuZWQgYnkgKipyb3V0ZXMuY29mZmVlKiouXG5cbiAgaW5pdFJvdXRlcjogKHJvdXRlcywgb3B0aW9ucykgLT5cbiAgICAjIFNhdmUgdGhlIHJlZmVyZW5jZSBmb3IgdGVzdGluZyBpbnRyb3NwZWN0aW9uIG9ubHkuXG4gICAgIyBNb2R1bGVzIHNob3VsZCBjb21tdW5pY2F0ZSB3aXRoIGVhY2ggb3RoZXIgdmlhICoqcHVibGlzaC9zdWJzY3JpYmUqKi5cbiAgICBAcm91dGVyID0gbmV3IFJvdXRlciBvcHRpb25zXG5cbiAgICAjIFJlZ2lzdGVyIGFueSBwcm92aWRlZCByb3V0ZXMuXG4gICAgcm91dGVzPyBAcm91dGVyLm1hdGNoXG5cbiAgIyBDYW4gYmUgY3VzdG9taXplZCB3aGVuIG92ZXJyaWRkZW4uXG4gIHN0YXJ0OiAtPlxuICAgICMgQWZ0ZXIgcmVnaXN0ZXJpbmcgdGhlIHJvdXRlcywgc3RhcnQgKipCYWNrYm9uZS5oaXN0b3J5KiouXG4gICAgQHJvdXRlci5zdGFydEhpc3RvcnkoKVxuXG4gICAgIyBNYXJrIGFwcCBhcyBpbml0aWFsaXplZC5cbiAgICBAc3RhcnRlZCA9IHRydWVcblxuICAgICMgRGlzcG9zYWwgc2hvdWxkIGJlIG93biBwcm9wZXJ0eSBiZWNhdXNlIG9mIGBPYmplY3Quc2VhbGBcbiAgICBAZGlzcG9zZWQgPSBmYWxzZVxuXG4gICAgIyBTZWFsIHRoZSBhcHBsaWNhdGlvbiBpbnN0YW5jZSB0byBwcmV2ZW50IGZ1cnRoZXIgY2hhbmdlcy5cbiAgICBPYmplY3Quc2VhbCB0aGlzXG5cbiAgZGlzcG9zZTogLT5cbiAgICAjIEFtIEkgYWxyZWFkeSBkaXNwb3NlZD9cbiAgICByZXR1cm4gaWYgQGRpc3Bvc2VkXG5cbiAgICBwcm9wZXJ0aWVzID0gWydkaXNwYXRjaGVyJywgJ2xheW91dCcsICdyb3V0ZXInLCAnY29tcG9zZXInXVxuICAgIGZvciBwcm9wIGluIHByb3BlcnRpZXMgd2hlbiB0aGlzW3Byb3BdP1xuICAgICAgdGhpc1twcm9wXS5kaXNwb3NlKClcblxuICAgIEBkaXNwb3NlZCA9IHRydWVcblxuICAgICMgWW91J3JlIGZyb3plbiB3aGVuIHlvdXIgaGVhcnQncyBub3Qgb3Blbi5cbiAgICBPYmplY3QuZnJlZXplIHRoaXNcbiIsIid1c2Ugc3RyaWN0J1xuXG5fID0gcmVxdWlyZSAndW5kZXJzY29yZSdcbkJhY2tib25lID0gcmVxdWlyZSAnYmFja2JvbmUnXG5cbkNvbXBvc2l0aW9uID0gcmVxdWlyZSAnLi9saWIvY29tcG9zaXRpb24nXG5FdmVudEJyb2tlciA9IHJlcXVpcmUgJy4vbGliL2V2ZW50X2Jyb2tlcidcbm1lZGlhdG9yID0gcmVxdWlyZSAnLi9tZWRpYXRvcidcblxuIyBDb21wb3NlclxuIyAtLS0tLS0tLVxuXG4jIFRoZSBzb2xlIGpvYiBvZiB0aGUgY29tcG9zZXIgaXMgdG8gYWxsb3cgdmlld3MgdG8gYmUgJ2NvbXBvc2VkJy5cbiNcbiMgSWYgdGhlIHZpZXcgaGFzIGFscmVhZHkgYmVlbiBjb21wb3NlZCBieSBhIHByZXZpb3VzIGFjdGlvbiB0aGVuIG5vdGhpbmdcbiMgYXBhcnQgZnJvbSByZWdpc3RlcmluZyB0aGUgdmlldyBhcyBpbiB1c2UgaGFwcGVucy4gRWxzZSwgdGhlIHZpZXdcbiMgaXMgaW5zdGFudGlhdGVkIGFuZCBwYXNzZWQgdGhlIG9wdGlvbnMgdGhhdCB3ZXJlIHBhc3NlZCBpbi4gSWYgYW4gYWN0aW9uXG4jIGlzIHJvdXRlZCB0byB3aGVyZSBhIHZpZXcgdGhhdCB3YXMgY29tcG9zZWQgaXMgbm90IHJlLWNvbXBvc2VkLCB0aGVcbiMgY29tcG9zZWQgdmlldyBpcyBkaXNwb3NlZC5cblxubW9kdWxlLmV4cG9ydHMgPSBjbGFzcyBDb21wb3NlclxuICAjIEJvcnJvdyB0aGUgc3RhdGljIGV4dGVuZCBtZXRob2QgZnJvbSBCYWNrYm9uZVxuICBAZXh0ZW5kID0gQmFja2JvbmUuTW9kZWwuZXh0ZW5kXG5cbiAgIyBNaXhpbiBhbiBFdmVudEJyb2tlclxuICBfLmV4dGVuZCBAcHJvdG90eXBlLCBFdmVudEJyb2tlclxuXG4gICMgVGhlIGNvbGxlY3Rpb24gb2YgY29tcG9zZWQgY29tcG9zaXRpb25zXG4gIGNvbXBvc2l0aW9uczogbnVsbFxuXG4gIGNvbnN0cnVjdG9yOiAtPlxuICAgIEBpbml0aWFsaXplIGFyZ3VtZW50cy4uLlxuXG4gIGluaXRpYWxpemU6IChvcHRpb25zID0ge30pIC0+XG4gICAgIyBJbml0aWFsaXplIGNvbGxlY3Rpb25zLlxuICAgIEBjb21wb3NpdGlvbnMgPSB7fVxuXG4gICAgIyBTdWJzY3JpYmUgdG8gZXZlbnRzLlxuICAgIG1lZGlhdG9yLnNldEhhbmRsZXIgJ2NvbXBvc2VyOmNvbXBvc2UnLCBAY29tcG9zZSwgdGhpc1xuICAgIG1lZGlhdG9yLnNldEhhbmRsZXIgJ2NvbXBvc2VyOnJldHJpZXZlJywgQHJldHJpZXZlLCB0aGlzXG4gICAgQHN1YnNjcmliZUV2ZW50ICdkaXNwYXRjaGVyOmRpc3BhdGNoJywgQGNsZWFudXBcblxuICAjIENvbnN0cnVjdHMgYSBjb21wb3NpdGlvbiBhbmQgY29tcG9zZXMgaW50byB0aGUgYWN0aXZlIGNvbXBvc2l0aW9ucy5cbiAgIyBUaGlzIGZ1bmN0aW9uIGhhcyBzZXZlcmFsIGZvcm1zIGFzIGRlc2NyaWJlZCBiZWxvdzpcbiAgI1xuICAjIDEuIGNvbXBvc2UoJ25hbWUnLCBDbGFzc1ssIG9wdGlvbnNdKVxuICAjICAgIENvbXBvc2VzIGEgY2xhc3Mgb2JqZWN0LiBUaGUgb3B0aW9ucyBhcmUgcGFzc2VkIHRvIHRoZSBjbGFzcyB3aGVuXG4gICMgICAgYW4gaW5zdGFuY2UgaXMgY29udHJ1Y3RlZCBhbmQgYXJlIGZ1cnRoZXIgdXNlZCB0byB0ZXN0IGlmIHRoZVxuICAjICAgIGNvbXBvc2l0aW9uIHNob3VsZCBiZSByZS1jb21wb3NlZC5cbiAgI1xuICAjIDIuIGNvbXBvc2UoJ25hbWUnLCBmdW5jdGlvbilcbiAgIyAgICBDb21wb3NlcyBhIGZ1bmN0aW9uIHRoYXQgZXhlY3V0ZXMgaW4gdGhlIGNvbnRleHQgb2YgdGhlIGNvbnRyb2xsZXI7XG4gICMgICAgZG8gTk9UIGJpbmQgdGhlIGZ1bmN0aW9uIGNvbnRleHQuXG4gICNcbiAgIyAzLiBjb21wb3NlKCduYW1lJywgb3B0aW9ucywgZnVuY3Rpb24pXG4gICMgICAgQ29tcG9zZXMgYSBmdW5jdGlvbiB0aGF0IGV4ZWN1dGVzIGluIHRoZSBjb250ZXh0IG9mIHRoZSBjb250cm9sbGVyO1xuICAjICAgIGRvIE5PVCBiaW5kIHRoZSBmdW5jdGlvbiBjb250ZXh0IGFuZCBpcyBwYXNzZWQgdGhlIG9wdGlvbnMgYXMgYVxuICAjICAgIHBhcmFtZXRlci4gVGhlIG9wdGlvbnMgYXJlIGZ1cnRoZXIgdXNlZCB0byB0ZXN0IGlmIHRoZSBjb21wb3NpdGlvblxuICAjICAgIHNob3VsZCBiZSByZWNvbXBvc2VkLlxuICAjXG4gICMgNC4gY29tcG9zZSgnbmFtZScsIG9wdGlvbnMpXG4gICMgICAgR2l2ZXMgY29udHJvbCBvdmVyIHRoZSBjb21wb3NpdGlvbiBwcm9jZXNzOyB0aGUgY29tcG9zZSBtZXRob2Qgb2ZcbiAgIyAgICB0aGUgb3B0aW9ucyBoYXNoIGlzIGV4ZWN1dGVkIGluIHBsYWNlIG9mIHRoZSBmdW5jdGlvbiBvZiBmb3JtICgzKSBhbmRcbiAgIyAgICB0aGUgY2hlY2sgbWV0aG9kIGlzIGNhbGxlZCAoaWYgcHJlc2VudCkgdG8gZGV0ZXJtaW5lIHJlLWNvbXBvc2l0aW9uIChcbiAgIyAgICBvdGhlcndpc2UgdGhpcyBpcyB0aGUgc2FtZSBhcyBmb3JtIFszXSkuXG4gICNcbiAgIyA1LiBjb21wb3NlKCduYW1lJywgQ29tcG9zaXRpb25DbGFzc1ssIG9wdGlvbnNdKVxuICAjICAgIEdpdmVzIGNvbXBsZXRlIGNvbnRyb2wgb3ZlciB0aGUgY29tcG9zaXRpb24gcHJvY2Vzcy5cbiAgI1xuICBjb21wb3NlOiAobmFtZSwgc2Vjb25kLCB0aGlyZCkgLT5cbiAgICAjIE5vcm1hbGl6ZSB0aGUgYXJndW1lbnRzXG4gICAgIyBJZiB0aGUgc2Vjb25kIHBhcmFtZXRlciBpcyBhIGZ1bmN0aW9uIHdlIGtub3cgaXQgaXMgKDEpIG9yICgyKS5cbiAgICBpZiB0eXBlb2Ygc2Vjb25kIGlzICdmdW5jdGlvbidcbiAgICAgICMgVGhpcyBpcyBmb3JtICgxKSBvciAoNSkgd2l0aCB0aGUgb3B0aW9uYWwgb3B0aW9ucyBoYXNoIGlmIHRoZSB0aGlyZFxuICAgICAgIyBpcyBhbiBvYmogb3IgdGhlIHNlY29uZCBwYXJhbWV0ZXIncyBwcm90b3R5cGUgaGFzIGEgZGlzcG9zZSBtZXRob2RcbiAgICAgIGlmIHRoaXJkIG9yIHNlY29uZDo6ZGlzcG9zZVxuICAgICAgICAjIElmIHRoZSBjbGFzcyBpcyBhIENvbXBvc2l0aW9uIGNsYXNzIHRoZW4gaXQgaXMgZm9ybSAoNSkuXG4gICAgICAgIGlmIHNlY29uZC5wcm90b3R5cGUgaW5zdGFuY2VvZiBDb21wb3NpdGlvblxuICAgICAgICAgIHJldHVybiBAX2NvbXBvc2UgbmFtZSwgY29tcG9zaXRpb246IHNlY29uZCwgb3B0aW9uczogdGhpcmRcbiAgICAgICAgZWxzZVxuICAgICAgICAgIHJldHVybiBAX2NvbXBvc2UgbmFtZSwgb3B0aW9uczogdGhpcmQsIGNvbXBvc2U6IC0+XG4gICAgICAgICAgICAjIFRoZSBjb21wb3NlIG1ldGhvZCBoZXJlIGp1c3QgY29uc3RydWN0cyB0aGUgY2xhc3MuXG4gICAgICAgICAgICAjIE1vZGVsIGFuZCBDb2xsZWN0aW9uIGJvdGggdGFrZSBgb3B0aW9uc2AgYXMgdGhlIHNlY29uZCBhcmd1bWVudC5cbiAgICAgICAgICAgIGlmIHNlY29uZC5wcm90b3R5cGUgaW5zdGFuY2VvZiBCYWNrYm9uZS5Nb2RlbCBvclxuICAgICAgICAgICAgc2Vjb25kLnByb3RvdHlwZSBpbnN0YW5jZW9mIEJhY2tib25lLkNvbGxlY3Rpb25cbiAgICAgICAgICAgICAgQGl0ZW0gPSBuZXcgc2Vjb25kIG51bGwsIEBvcHRpb25zXG4gICAgICAgICAgICBlbHNlXG4gICAgICAgICAgICAgIEBpdGVtID0gbmV3IHNlY29uZCBAb3B0aW9uc1xuXG4gICAgICAgICAgICAjIFJlbmRlciB0aGlzIGl0ZW0gaWYgaXQgaGFzIGEgcmVuZGVyIG1ldGhvZCBhbmQgaXQgZWl0aGVyXG4gICAgICAgICAgICAjIGRvZXNuJ3QgaGF2ZSBhbiBhdXRvUmVuZGVyIHByb3BlcnR5IG9yIHRoYXQgYXV0b1JlbmRlclxuICAgICAgICAgICAgIyBwcm9wZXJ0eSBpcyBmYWxzZVxuICAgICAgICAgICAgYXV0b1JlbmRlciA9IEBpdGVtLmF1dG9SZW5kZXJcbiAgICAgICAgICAgIGRpc2FibGVkQXV0b1JlbmRlciA9IGF1dG9SZW5kZXIgaXMgdW5kZWZpbmVkIG9yIG5vdCBhdXRvUmVuZGVyXG4gICAgICAgICAgICBpZiBkaXNhYmxlZEF1dG9SZW5kZXIgYW5kIHR5cGVvZiBAaXRlbS5yZW5kZXIgaXMgJ2Z1bmN0aW9uJ1xuICAgICAgICAgICAgICBAaXRlbS5yZW5kZXIoKVxuXG4gICAgICAjIFRoaXMgaXMgZm9ybSAoMikuXG4gICAgICByZXR1cm4gQF9jb21wb3NlIG5hbWUsIGNvbXBvc2U6IHNlY29uZFxuXG4gICAgIyBJZiB0aGUgdGhpcmQgcGFyYW1ldGVyIGV4aXN0cyBhbmQgaXMgYSBmdW5jdGlvbiB0aGlzIGlzICgzKS5cbiAgICBpZiB0eXBlb2YgdGhpcmQgaXMgJ2Z1bmN0aW9uJ1xuICAgICAgcmV0dXJuIEBfY29tcG9zZSBuYW1lLCBjb21wb3NlOiB0aGlyZCwgb3B0aW9uczogc2Vjb25kXG5cbiAgICAjIFRoaXMgbXVzdCBiZSBmb3JtICg0KS5cbiAgICByZXR1cm4gQF9jb21wb3NlIG5hbWUsIHNlY29uZFxuXG4gIF9jb21wb3NlOiAobmFtZSwgb3B0aW9ucykgLT5cbiAgICAjIEFzc2VydCBmb3IgcHJvZ3JhbW1lciBlcnJvcnNcbiAgICBpZiB0eXBlb2Ygb3B0aW9ucy5jb21wb3NlIGlzbnQgJ2Z1bmN0aW9uJyBhbmQgbm90IG9wdGlvbnMuY29tcG9zaXRpb24/XG4gICAgICB0aHJvdyBuZXcgRXJyb3IgJ0NvbXBvc2VyI2NvbXBvc2Ugd2FzIHVzZWQgaW5jb3JyZWN0bHknXG5cbiAgICBpZiBvcHRpb25zLmNvbXBvc2l0aW9uP1xuICAgICAgIyBVc2UgdGhlIHBhc3NlZCBjb21wb3NpdGlvbiBkaXJlY3RseVxuICAgICAgY29tcG9zaXRpb24gPSBuZXcgb3B0aW9ucy5jb21wb3NpdGlvbiBvcHRpb25zLm9wdGlvbnNcbiAgICBlbHNlXG4gICAgICAjIENyZWF0ZSB0aGUgY29tcG9zaXRpb24gYW5kIGFwcGx5IHRoZSBtZXRob2RzIChpZiBhdmFpbGFibGUpXG4gICAgICBjb21wb3NpdGlvbiA9IG5ldyBDb21wb3NpdGlvbiBvcHRpb25zLm9wdGlvbnNcbiAgICAgIGNvbXBvc2l0aW9uLmNvbXBvc2UgPSBvcHRpb25zLmNvbXBvc2VcbiAgICAgIGNvbXBvc2l0aW9uLmNoZWNrID0gb3B0aW9ucy5jaGVjayBpZiBvcHRpb25zLmNoZWNrXG5cbiAgICAjIENoZWNrIGZvciBhbiBleGlzdGluZyBjb21wb3NpdGlvblxuICAgIGN1cnJlbnQgPSBAY29tcG9zaXRpb25zW25hbWVdXG5cbiAgICAjIEFwcGx5IHRoZSBjaGVjayBtZXRob2RcbiAgICBpZiBjdXJyZW50IGFuZCBjdXJyZW50LmNoZWNrIGNvbXBvc2l0aW9uLm9wdGlvbnNcbiAgICAgICMgTWFyayB0aGUgY3VycmVudCBjb21wb3NpdGlvbiBhcyBub3Qgc3RhbGVcbiAgICAgIGN1cnJlbnQuc3RhbGUgZmFsc2VcbiAgICBlbHNlXG4gICAgICAjIFJlbW92ZSB0aGUgY3VycmVudCBjb21wb3NpdGlvbiBhbmQgYXBwbHkgdGhpcyBvbmVcbiAgICAgIGN1cnJlbnQuZGlzcG9zZSgpIGlmIGN1cnJlbnRcbiAgICAgIHJldHVybmVkID0gY29tcG9zaXRpb24uY29tcG9zZSBjb21wb3NpdGlvbi5vcHRpb25zXG4gICAgICBpc1Byb21pc2UgPSB0eXBlb2YgcmV0dXJuZWQ/LnRoZW4gaXMgJ2Z1bmN0aW9uJ1xuICAgICAgY29tcG9zaXRpb24uc3RhbGUgZmFsc2VcbiAgICAgIEBjb21wb3NpdGlvbnNbbmFtZV0gPSBjb21wb3NpdGlvblxuXG4gICAgIyBSZXR1cm4gdGhlIGFjdGl2ZSBjb21wb3NpdGlvblxuICAgIGlmIGlzUHJvbWlzZVxuICAgICAgcmV0dXJuZWRcbiAgICBlbHNlXG4gICAgICBAY29tcG9zaXRpb25zW25hbWVdLml0ZW1cblxuICAjIFJldHJpZXZlcyBhbiBhY3RpdmUgY29tcG9zaXRpb24gdXNpbmcgdGhlIGNvbXBvc2UgbWV0aG9kLlxuICByZXRyaWV2ZTogKG5hbWUpIC0+XG4gICAgYWN0aXZlID0gQGNvbXBvc2l0aW9uc1tuYW1lXVxuICAgIGlmIGFjdGl2ZSBhbmQgbm90IGFjdGl2ZS5zdGFsZSgpIHRoZW4gYWN0aXZlLml0ZW1cblxuICAjIERlY2xhcmUgYWxsIGNvbXBvc2l0aW9ucyBhcyBzdGFsZSBhbmQgcmVtb3ZlIGFsbCB0aGF0IHdlcmUgcHJldmlvdXNseVxuICAjIG1hcmtlZCBzdGFsZSB3aXRob3V0IGJlaW5nIHJlLWNvbXBvc2VkLlxuICBjbGVhbnVwOiAtPlxuICAgICMgQWN0aW9uIG1ldGhvZCBpcyBkb25lOyBwZXJmb3JtIHBvc3QtYWN0aW9uIGNsZWFuIHVwXG4gICAgIyBEaXNwb3NlIGFuZCBkZWxldGUgYWxsIG5vLWxvbmdlci1hY3RpdmUgY29tcG9zaXRpb25zLlxuICAgICMgRGVjbGFyZSBhbGwgYWN0aXZlIGNvbXBvc2l0aW9ucyBhcyBkZS1hY3RpdmF0ZWQgKGVnLiB0byBiZSByZW1vdmVkXG4gICAgIyBvbiB0aGUgbmV4dCBjb250cm9sbGVyIHN0YXJ0dXAgdW5sZXNzIHRoZXkgYXJlIHJlLWNvbXBvc2VkKS5cbiAgICBmb3Iga2V5IGluIE9iamVjdC5rZXlzIEBjb21wb3NpdGlvbnNcbiAgICAgIGNvbXBvc2l0aW9uID0gQGNvbXBvc2l0aW9uc1trZXldXG4gICAgICBpZiBjb21wb3NpdGlvbi5zdGFsZSgpXG4gICAgICAgIGNvbXBvc2l0aW9uLmRpc3Bvc2UoKVxuICAgICAgICBkZWxldGUgQGNvbXBvc2l0aW9uc1trZXldXG4gICAgICBlbHNlXG4gICAgICAgIGNvbXBvc2l0aW9uLnN0YWxlIHRydWVcblxuICAgICMgUmV0dXJuIG5vdGhpbmcuXG4gICAgcmV0dXJuXG5cbiAgZGlzcG9zZWQ6IGZhbHNlXG5cbiAgZGlzcG9zZTogLT5cbiAgICByZXR1cm4gaWYgQGRpc3Bvc2VkXG5cbiAgICAjIFVuYmluZCBoYW5kbGVycyBvZiBnbG9iYWwgZXZlbnRzXG4gICAgQHVuc3Vic2NyaWJlQWxsRXZlbnRzKClcblxuICAgIG1lZGlhdG9yLnJlbW92ZUhhbmRsZXJzIHRoaXNcblxuICAgICMgRGlzcG9zZSBvZiBhbGwgY29tcG9zaXRpb25zIGFuZCB0aGVpciBpdGVtcyAodGhhdCBjYW4gYmUpXG4gICAgZm9yIGtleSBpbiBPYmplY3Qua2V5cyBAY29tcG9zaXRpb25zXG4gICAgICBAY29tcG9zaXRpb25zW2tleV0uZGlzcG9zZSgpXG5cbiAgICAjIFJlbW92ZSBwcm9wZXJ0aWVzXG4gICAgZGVsZXRlIEBjb21wb3NpdGlvbnNcblxuICAgICMgRmluaXNoZWRcbiAgICBAZGlzcG9zZWQgPSB0cnVlXG5cbiAgICAjIFlvdeKAmXJlIGZyb3plbiB3aGVuIHlvdXIgaGVhcnTigJlzIG5vdCBvcGVuXG4gICAgT2JqZWN0LmZyZWV6ZSB0aGlzXG4iLCIndXNlIHN0cmljdCdcblxuXyA9IHJlcXVpcmUgJ3VuZGVyc2NvcmUnXG5CYWNrYm9uZSA9IHJlcXVpcmUgJ2JhY2tib25lJ1xuXG5tZWRpYXRvciA9IHJlcXVpcmUgJy4uL21lZGlhdG9yJ1xuRXZlbnRCcm9rZXIgPSByZXF1aXJlICcuLi9saWIvZXZlbnRfYnJva2VyJ1xudXRpbHMgPSByZXF1aXJlICcuLi9saWIvdXRpbHMnXG5cbm1vZHVsZS5leHBvcnRzID0gY2xhc3MgQ29udHJvbGxlclxuICAjIEJvcnJvdyB0aGUgc3RhdGljIGV4dGVuZCBtZXRob2QgZnJvbSBCYWNrYm9uZS5cbiAgQGV4dGVuZCA9IEJhY2tib25lLk1vZGVsLmV4dGVuZFxuXG4gICMgTWl4aW4gQmFja2JvbmUgZXZlbnRzIGFuZCBFdmVudEJyb2tlci5cbiAgXy5leHRlbmQgQHByb3RvdHlwZSwgQmFja2JvbmUuRXZlbnRzXG4gIF8uZXh0ZW5kIEBwcm90b3R5cGUsIEV2ZW50QnJva2VyXG5cbiAgdmlldzogbnVsbFxuXG4gICMgSW50ZXJuYWwgZmxhZyB3aGljaCBzdG9yZXMgd2hldGhlciBgcmVkaXJlY3RUb2BcbiAgIyB3YXMgY2FsbGVkIGluIHRoZSBjdXJyZW50IGFjdGlvbi5cbiAgcmVkaXJlY3RlZDogZmFsc2VcblxuICBjb25zdHJ1Y3RvcjogLT5cbiAgICBAaW5pdGlhbGl6ZSBhcmd1bWVudHMuLi5cblxuICBpbml0aWFsaXplOiAtPlxuICAgICMgRW1wdHkgcGVyIGRlZmF1bHQuXG5cbiAgYmVmb3JlQWN0aW9uOiAtPlxuICAgICMgRW1wdHkgcGVyIGRlZmF1bHQuXG5cbiAgIyBDaGFuZ2UgZG9jdW1lbnQgdGl0bGUuXG4gIGFkanVzdFRpdGxlOiAoc3VidGl0bGUpIC0+XG4gICAgbWVkaWF0b3IuZXhlY3V0ZSAnYWRqdXN0VGl0bGUnLCBzdWJ0aXRsZVxuXG4gICMgQ29tcG9zZXJcbiAgIyAtLS0tLS0tLVxuXG4gICMgQ29udmVuaWVuY2UgbWV0aG9kIHRvIHB1Ymxpc2ggdGhlIGAhY29tcG9zZXI6Y29tcG9zZWAgZXZlbnQuIFNlZSB0aGVcbiAgIyBjb21wb3NlciBmb3IgaW5mb3JtYXRpb24gb24gcGFyYW1ldGVycywgZXRjLlxuICByZXVzZTogLT5cbiAgICBtZXRob2QgPSBpZiBhcmd1bWVudHMubGVuZ3RoIGlzIDEgdGhlbiAncmV0cmlldmUnIGVsc2UgJ2NvbXBvc2UnXG4gICAgbWVkaWF0b3IuZXhlY3V0ZSBcImNvbXBvc2VyOiN7bWV0aG9kfVwiLCBhcmd1bWVudHMuLi5cblxuICAjIERlcHJlY2F0ZWQgbWV0aG9kLlxuICBjb21wb3NlOiAtPlxuICAgIHRocm93IG5ldyBFcnJvciAnQ29udHJvbGxlciNjb21wb3NlIHdhcyBtb3ZlZCB0byBDb250cm9sbGVyI3JldXNlJ1xuXG4gICMgUmVkaXJlY3Rpb25cbiAgIyAtLS0tLS0tLS0tLVxuXG4gICMgUmVkaXJlY3QgdG8gVVJMLlxuICByZWRpcmVjdFRvOiAtPlxuICAgIEByZWRpcmVjdGVkID0gdHJ1ZVxuICAgIHV0aWxzLnJlZGlyZWN0VG8gYXJndW1lbnRzLi4uXG5cbiAgIyBEaXNwb3NhbFxuICAjIC0tLS0tLS0tXG5cbiAgZGlzcG9zZWQ6IGZhbHNlXG5cbiAgZGlzcG9zZTogLT5cbiAgICByZXR1cm4gaWYgQGRpc3Bvc2VkXG5cbiAgICAjIERpc3Bvc2UgYW5kIGRlbGV0ZSBhbGwgbWVtYmVycyB3aGljaCBhcmUgZGlzcG9zYWJsZS5cbiAgICBmb3Iga2V5IGluIE9iamVjdC5rZXlzIHRoaXNcbiAgICAgIG1lbWJlciA9IEBba2V5XVxuICAgICAgaWYgdHlwZW9mIG1lbWJlcj8uZGlzcG9zZSBpcyAnZnVuY3Rpb24nXG4gICAgICAgIG1lbWJlci5kaXNwb3NlKClcbiAgICAgICAgZGVsZXRlIEBba2V5XVxuXG4gICAgIyBVbmJpbmQgaGFuZGxlcnMgb2YgZ2xvYmFsIGV2ZW50cy5cbiAgICBAdW5zdWJzY3JpYmVBbGxFdmVudHMoKVxuXG4gICAgIyBVbmJpbmQgYWxsIHJlZmVyZW5jZWQgaGFuZGxlcnMuXG4gICAgQHN0b3BMaXN0ZW5pbmcoKVxuXG4gICAgIyBGaW5pc2hlZC5cbiAgICBAZGlzcG9zZWQgPSB0cnVlXG5cbiAgICAjIFlvdSdyZSBmcm96ZW4gd2hlbiB5b3VyIGhlYXJ04oCZcyBub3Qgb3Blbi5cbiAgICBPYmplY3QuZnJlZXplIHRoaXNcbiIsIid1c2Ugc3RyaWN0J1xuXG5fID0gcmVxdWlyZSAndW5kZXJzY29yZSdcbkJhY2tib25lID0gcmVxdWlyZSAnYmFja2JvbmUnXG5cbkV2ZW50QnJva2VyID0gcmVxdWlyZSAnLi9saWIvZXZlbnRfYnJva2VyJ1xudXRpbHMgPSByZXF1aXJlICcuL2xpYi91dGlscydcbm1lZGlhdG9yID0gcmVxdWlyZSAnLi9tZWRpYXRvcidcblxubW9kdWxlLmV4cG9ydHMgPSBjbGFzcyBEaXNwYXRjaGVyXG4gICMgQm9ycm93IHRoZSBzdGF0aWMgZXh0ZW5kIG1ldGhvZCBmcm9tIEJhY2tib25lLlxuICBAZXh0ZW5kID0gQmFja2JvbmUuTW9kZWwuZXh0ZW5kXG5cbiAgIyBNaXhpbiBhbiBFdmVudEJyb2tlci5cbiAgXy5leHRlbmQgQHByb3RvdHlwZSwgRXZlbnRCcm9rZXJcblxuICAjIFRoZSBwcmV2aW91cyByb3V0ZSBpbmZvcm1hdGlvbi5cbiAgIyBUaGlzIG9iamVjdCBjb250YWlucyB0aGUgY29udHJvbGxlciBuYW1lLCBhY3Rpb24sIHBhdGgsIGFuZCBuYW1lIChpZiBhbnkpLlxuICBwcmV2aW91c1JvdXRlOiBudWxsXG5cbiAgIyBUaGUgY3VycmVudCBjb250cm9sbGVyLCByb3V0ZSBpbmZvcm1hdGlvbiwgYW5kIHBhcmFtZXRlcnMuXG4gICMgVGhlIGN1cnJlbnQgcm91dGUgb2JqZWN0IGNvbnRhaW5zIHRoZSBzYW1lIGluZm9ybWF0aW9uIGFzIHByZXZpb3VzLlxuICBjdXJyZW50Q29udHJvbGxlcjogbnVsbFxuICBjdXJyZW50Um91dGU6IG51bGxcbiAgY3VycmVudFBhcmFtczogbnVsbFxuICBjdXJyZW50UXVlcnk6IG51bGxcblxuICBjb25zdHJ1Y3RvcjogLT5cbiAgICBAaW5pdGlhbGl6ZSBhcmd1bWVudHMuLi5cblxuICBpbml0aWFsaXplOiAob3B0aW9ucyA9IHt9KSAtPlxuICAgICMgTWVyZ2UgdGhlIG9wdGlvbnMuXG4gICAgQHNldHRpbmdzID0gXy5kZWZhdWx0cyBvcHRpb25zLFxuICAgICAgY29udHJvbGxlclBhdGg6ICdjb250cm9sbGVycy8nXG4gICAgICBjb250cm9sbGVyU3VmZml4OiAnX2NvbnRyb2xsZXInXG5cbiAgICAjIExpc3RlbiB0byBnbG9iYWwgZXZlbnRzLlxuICAgIEBzdWJzY3JpYmVFdmVudCAncm91dGVyOm1hdGNoJywgQGRpc3BhdGNoXG5cbiAgIyBDb250cm9sbGVyIG1hbmFnZW1lbnQuXG4gICMgU3RhcnRpbmcgYW5kIGRpc3Bvc2luZyBjb250cm9sbGVycy5cbiAgIyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgIyBUaGUgc3RhbmRhcmQgZmxvdyBpczpcbiAgI1xuICAjICAgMS4gVGVzdCBpZiBpdOKAmXMgYSBuZXcgY29udHJvbGxlci9hY3Rpb24gd2l0aCBuZXcgcGFyYW1zXG4gICMgICAxLiBIaWRlIHRoZSBwcmV2aW91cyB2aWV3XG4gICMgICAyLiBEaXNwb3NlIHRoZSBwcmV2aW91cyBjb250cm9sbGVyXG4gICMgICAzLiBJbnN0YW50aWF0ZSB0aGUgbmV3IGNvbnRyb2xsZXIsIGNhbGwgdGhlIGNvbnRyb2xsZXIgYWN0aW9uXG4gICMgICA0LiBTaG93IHRoZSBuZXcgdmlld1xuICAjXG4gIGRpc3BhdGNoOiAocm91dGUsIHBhcmFtcywgb3B0aW9ucykgLT5cbiAgICAjIENsb25lIHBhcmFtcyBhbmQgb3B0aW9ucyBzbyB0aGUgb3JpZ2luYWwgb2JqZWN0cyByZW1haW4gdW50b3VjaGVkLlxuICAgIHBhcmFtcyA9IF8uZXh0ZW5kIHt9LCBwYXJhbXNcbiAgICBvcHRpb25zID0gXy5leHRlbmQge30sIG9wdGlvbnNcblxuICAgICMgbnVsbCBvciB1bmRlZmluZWQgcXVlcnkgcGFyYW1ldGVycyBhcmUgZXF1aXZhbGVudCB0byBhbiBlbXB0eSBoYXNoXG4gICAgb3B0aW9ucy5xdWVyeSA9IHt9IGlmIG5vdCBvcHRpb25zLnF1ZXJ5P1xuXG4gICAgIyBXaGV0aGVyIHRvIGZvcmNlIHRoZSBjb250cm9sbGVyIHN0YXJ0dXAgZXZlblxuICAgICMgaWYgY3VycmVudCBhbmQgbmV3IGNvbnRyb2xsZXJzIGFuZCBwYXJhbXMgbWF0Y2hcbiAgICAjIERlZmF1bHQgdG8gZmFsc2UgdW5sZXNzIGV4cGxpY2l0bHkgc2V0IHRvIHRydWUuXG4gICAgb3B0aW9ucy5mb3JjZVN0YXJ0dXAgPSBmYWxzZSB1bmxlc3Mgb3B0aW9ucy5mb3JjZVN0YXJ0dXAgaXMgdHJ1ZVxuXG4gICAgIyBTdG9wIGlmIHRoZSBkZXNpcmVkIGNvbnRyb2xsZXIvYWN0aW9uIGlzIGFscmVhZHkgYWN0aXZlXG4gICAgIyB3aXRoIHRoZSBzYW1lIHBhcmFtcy5cbiAgICByZXR1cm4gaWYgbm90IG9wdGlvbnMuZm9yY2VTdGFydHVwIGFuZFxuICAgICAgQGN1cnJlbnRSb3V0ZT8uY29udHJvbGxlciBpcyByb3V0ZS5jb250cm9sbGVyIGFuZFxuICAgICAgQGN1cnJlbnRSb3V0ZT8uYWN0aW9uIGlzIHJvdXRlLmFjdGlvbiBhbmRcbiAgICAgIF8uaXNFcXVhbChAY3VycmVudFBhcmFtcywgcGFyYW1zKSBhbmRcbiAgICAgIF8uaXNFcXVhbChAY3VycmVudFF1ZXJ5LCBvcHRpb25zLnF1ZXJ5KVxuXG4gICAgIyBGZXRjaCB0aGUgbmV3IGNvbnRyb2xsZXIsIHRoZW4gZ28gb24uXG4gICAgQGxvYWRDb250cm9sbGVyIHJvdXRlLmNvbnRyb2xsZXIsIChDb250cm9sbGVyKSA9PlxuICAgICAgQGNvbnRyb2xsZXJMb2FkZWQgcm91dGUsIHBhcmFtcywgb3B0aW9ucywgQ29udHJvbGxlclxuXG4gICMgTG9hZCB0aGUgY29uc3RydWN0b3IgZm9yIGEgZ2l2ZW4gY29udHJvbGxlciBuYW1lLlxuICAjIFRoZSBkZWZhdWx0IGltcGxlbWVudGF0aW9uIHVzZXMgcmVxdWlyZSgpIGZyb20gYSBBTUQgbW9kdWxlIGxvYWRlclxuICAjIGxpa2UgUmVxdWlyZUpTIHRvIGZldGNoIHRoZSBjb25zdHJ1Y3Rvci5cbiAgbG9hZENvbnRyb2xsZXI6IChuYW1lLCBoYW5kbGVyKSAtPlxuICAgIHJldHVybiBoYW5kbGVyIG5hbWUgaWYgbmFtZSBpcyBPYmplY3QgbmFtZVxuXG4gICAgZmlsZU5hbWUgPSBuYW1lICsgQHNldHRpbmdzLmNvbnRyb2xsZXJTdWZmaXhcbiAgICBtb2R1bGVOYW1lID0gQHNldHRpbmdzLmNvbnRyb2xsZXJQYXRoICsgZmlsZU5hbWVcbiAgICB1dGlscy5sb2FkTW9kdWxlIG1vZHVsZU5hbWUsIGhhbmRsZXJcblxuICAjIEhhbmRsZXIgZm9yIHRoZSBjb250cm9sbGVyIGxhenktbG9hZGluZy5cbiAgY29udHJvbGxlckxvYWRlZDogKHJvdXRlLCBwYXJhbXMsIG9wdGlvbnMsIENvbnRyb2xsZXIpIC0+XG4gICAgaWYgQG5leHRQcmV2aW91c1JvdXRlID0gQGN1cnJlbnRSb3V0ZVxuICAgICAgcHJldmlvdXMgPSBfLmV4dGVuZCB7fSwgQG5leHRQcmV2aW91c1JvdXRlXG4gICAgICBwcmV2aW91cy5wYXJhbXMgPSBAY3VycmVudFBhcmFtcyBpZiBAY3VycmVudFBhcmFtcz9cbiAgICAgIGRlbGV0ZSBwcmV2aW91cy5wcmV2aW91cyBpZiBwcmV2aW91cy5wcmV2aW91c1xuICAgICAgcHJldiA9IHtwcmV2aW91c31cbiAgICBAbmV4dEN1cnJlbnRSb3V0ZSA9IF8uZXh0ZW5kIHt9LCByb3V0ZSwgcHJldlxuXG4gICAgY29udHJvbGxlciA9IG5ldyBDb250cm9sbGVyIHBhcmFtcywgQG5leHRDdXJyZW50Um91dGUsIG9wdGlvbnNcbiAgICBAZXhlY3V0ZUJlZm9yZUFjdGlvbiBjb250cm9sbGVyLCBAbmV4dEN1cnJlbnRSb3V0ZSwgcGFyYW1zLCBvcHRpb25zXG5cbiAgIyBFeGVjdXRlcyBjb250cm9sbGVyIGFjdGlvbi5cbiAgZXhlY3V0ZUFjdGlvbjogKGNvbnRyb2xsZXIsIHJvdXRlLCBwYXJhbXMsIG9wdGlvbnMpIC0+XG4gICAgIyBEaXNwb3NlIHRoZSBwcmV2aW91cyBjb250cm9sbGVyLlxuICAgIGlmIEBjdXJyZW50Q29udHJvbGxlclxuICAgICAgIyBOb3RpZnkgdGhlIHJlc3Qgb2YgdGhlIHdvcmxkIGJlZm9yZWhhbmQuXG4gICAgICBAcHVibGlzaEV2ZW50ICdiZWZvcmVDb250cm9sbGVyRGlzcG9zZScsIEBjdXJyZW50Q29udHJvbGxlclxuXG4gICAgICAjIFBhc3NpbmcgbmV3IHBhcmFtZXRlcnMgdGhhdCB0aGUgYWN0aW9uIG1ldGhvZCB3aWxsIHJlY2VpdmUuXG4gICAgICBAY3VycmVudENvbnRyb2xsZXIuZGlzcG9zZSBwYXJhbXMsIHJvdXRlLCBvcHRpb25zXG5cbiAgICAjIFNhdmUgdGhlIG5ldyBjb250cm9sbGVyIGFuZCBpdHMgcGFyYW1ldGVycy5cbiAgICBAY3VycmVudENvbnRyb2xsZXIgPSBjb250cm9sbGVyXG4gICAgQGN1cnJlbnRQYXJhbXMgPSBfLmV4dGVuZCB7fSwgcGFyYW1zXG4gICAgQGN1cnJlbnRRdWVyeSA9IF8uZXh0ZW5kIHt9LCBvcHRpb25zLnF1ZXJ5XG5cbiAgICAjIENhbGwgdGhlIGNvbnRyb2xsZXIgYWN0aW9uIHdpdGggcGFyYW1zIGFuZCBvcHRpb25zLlxuICAgIGNvbnRyb2xsZXJbcm91dGUuYWN0aW9uXSBwYXJhbXMsIHJvdXRlLCBvcHRpb25zXG5cbiAgICAjIFN0b3AgaWYgdGhlIGFjdGlvbiB0cmlnZ2VyZWQgYSByZWRpcmVjdC5cbiAgICByZXR1cm4gaWYgY29udHJvbGxlci5yZWRpcmVjdGVkXG5cbiAgICAjIFdlJ3JlIGRvbmUhIFNwcmVhZCB0aGUgd29yZCFcbiAgICBAcHVibGlzaEV2ZW50ICdkaXNwYXRjaGVyOmRpc3BhdGNoJywgQGN1cnJlbnRDb250cm9sbGVyLFxuICAgICAgcGFyYW1zLCByb3V0ZSwgb3B0aW9uc1xuXG4gICMgRXhlY3V0ZXMgYmVmb3JlIGFjdGlvbiBmaWx0ZXJlci5cbiAgZXhlY3V0ZUJlZm9yZUFjdGlvbjogKGNvbnRyb2xsZXIsIHJvdXRlLCBwYXJhbXMsIG9wdGlvbnMpIC0+XG4gICAgYmVmb3JlID0gY29udHJvbGxlci5iZWZvcmVBY3Rpb25cblxuICAgIGV4ZWN1dGVBY3Rpb24gPSA9PlxuICAgICAgaWYgY29udHJvbGxlci5yZWRpcmVjdGVkIG9yIEBjdXJyZW50Um91dGUgYW5kIHJvdXRlIGlzIEBjdXJyZW50Um91dGVcbiAgICAgICAgQG5leHRQcmV2aW91c1JvdXRlID0gQG5leHRDdXJyZW50Um91dGUgPSBudWxsXG4gICAgICAgIGNvbnRyb2xsZXIuZGlzcG9zZSgpXG4gICAgICAgIHJldHVyblxuICAgICAgQHByZXZpb3VzUm91dGUgPSBAbmV4dFByZXZpb3VzUm91dGVcbiAgICAgIEBjdXJyZW50Um91dGUgPSBAbmV4dEN1cnJlbnRSb3V0ZVxuICAgICAgQG5leHRQcmV2aW91c1JvdXRlID0gQG5leHRDdXJyZW50Um91dGUgPSBudWxsXG4gICAgICBAZXhlY3V0ZUFjdGlvbiBjb250cm9sbGVyLCByb3V0ZSwgcGFyYW1zLCBvcHRpb25zXG5cbiAgICB1bmxlc3MgYmVmb3JlXG4gICAgICBleGVjdXRlQWN0aW9uKClcbiAgICAgIHJldHVyblxuXG4gICAgIyBUaHJvdyBkZXByZWNhdGlvbiB3YXJuaW5nLlxuICAgIGlmIHR5cGVvZiBiZWZvcmUgaXNudCAnZnVuY3Rpb24nXG4gICAgICB0aHJvdyBuZXcgVHlwZUVycm9yICdDb250cm9sbGVyI2JlZm9yZUFjdGlvbjogZnVuY3Rpb24gZXhwZWN0ZWQuICcgK1xuICAgICAgICAnT2xkIG9iamVjdC1saWtlIGZvcm0gaXMgbm90IHN1cHBvcnRlZC4nXG5cbiAgICAjIEV4ZWN1dGUgYWN0aW9uIGluIGNvbnRyb2xsZXIgY29udGV4dC5cbiAgICBwcm9taXNlID0gY29udHJvbGxlci5iZWZvcmVBY3Rpb24gcGFyYW1zLCByb3V0ZSwgb3B0aW9uc1xuICAgIGlmIHR5cGVvZiBwcm9taXNlPy50aGVuIGlzICdmdW5jdGlvbidcbiAgICAgIHByb21pc2UudGhlbiBleGVjdXRlQWN0aW9uXG4gICAgZWxzZVxuICAgICAgZXhlY3V0ZUFjdGlvbigpXG5cbiAgIyBEaXNwb3NhbFxuICAjIC0tLS0tLS0tXG5cbiAgZGlzcG9zZWQ6IGZhbHNlXG5cbiAgZGlzcG9zZTogLT5cbiAgICByZXR1cm4gaWYgQGRpc3Bvc2VkXG5cbiAgICBAdW5zdWJzY3JpYmVBbGxFdmVudHMoKVxuXG4gICAgQGRpc3Bvc2VkID0gdHJ1ZVxuXG4gICAgIyBZb3XigJlyZSBmcm96ZW4gd2hlbiB5b3VyIGhlYXJ04oCZcyBub3Qgb3Blbi5cbiAgICBPYmplY3QuZnJlZXplIHRoaXNcbiIsIid1c2Ugc3RyaWN0J1xuXG5fID0gcmVxdWlyZSAndW5kZXJzY29yZSdcbkJhY2tib25lID0gcmVxdWlyZSAnYmFja2JvbmUnXG5FdmVudEJyb2tlciA9IHJlcXVpcmUgJy4vZXZlbnRfYnJva2VyJ1xuXG4jIENvbXBvc2l0aW9uXG4jIC0tLS0tLS0tLS0tXG5cbiMgQSB1dGlsaXR5IGNsYXNzIHRoYXQgaXMgbWVhbnQgYXMgYSBzaW1wbGUgcHJveGllZCB2ZXJzaW9uIG9mIGFcbiMgY29udHJvbGxlciB0aGF0IGlzIHVzZWQgaW50ZXJuYWxseSB0byBpbmZsYXRlIHNpbXBsZVxuIyBjYWxscyB0byAhY29tcG9zZXI6Y29tcG9zZSBhbmQgbWF5IGJlIGV4dGVuZGVkIGFuZCB1c2VkIHRvIGhhdmUgY29tcGxldGVcbiMgY29udHJvbCBvdmVyIHRoZSBjb21wb3NpdGlvbiBwcm9jZXNzLlxubW9kdWxlLmV4cG9ydHMgPSBjbGFzcyBDb21wb3NpdGlvblxuICAjIEJvcnJvdyB0aGUgc3RhdGljIGV4dGVuZCBtZXRob2QgZnJvbSBCYWNrYm9uZS5cbiAgQGV4dGVuZCA9IEJhY2tib25lLk1vZGVsLmV4dGVuZFxuXG4gICMgTWl4aW4gQmFja2JvbmUgZXZlbnRzIGFuZCBFdmVudEJyb2tlci5cbiAgXy5leHRlbmQgQHByb3RvdHlwZSwgQmFja2JvbmUuRXZlbnRzXG4gIF8uZXh0ZW5kIEBwcm90b3R5cGUsIEV2ZW50QnJva2VyXG5cbiAgIyBUaGUgaXRlbSB0aGF0IGlzIGNvbXBvc2VkOyB0aGlzIGlzIGJ5IGRlZmF1bHQgYSByZWZlcmVuY2UgdG8gdGhpcy5cbiAgaXRlbTogbnVsbFxuXG4gICMgVGhlIG9wdGlvbnMgdGhhdCB0aGlzIGNvbXBvc2l0aW9uIHdhcyBjb25zdHJ1Y3RlZCB3aXRoLlxuICBvcHRpb25zOiBudWxsXG5cbiAgIyBXaGV0aGVyIHRoaXMgY29tcG9zaXRpb24gaXMgY3VycmVudGx5IHN0YWxlLlxuICBfc3RhbGU6IGZhbHNlXG5cbiAgY29uc3RydWN0b3I6IChvcHRpb25zKSAtPlxuICAgIEBvcHRpb25zID0gXy5leHRlbmQge30sIG9wdGlvbnNcbiAgICBAaXRlbSA9IHRoaXNcbiAgICBAaW5pdGlhbGl6ZSBAb3B0aW9uc1xuXG4gIGluaXRpYWxpemU6IC0+XG4gICAgIyBFbXB0eSBwZXIgZGVmYXVsdC5cblxuICAjIFRoZSBjb21wb3NlIG1ldGhvZCBpcyBjYWxsZWQgd2hlbiB0aGlzIGNvbXBvc2l0aW9uIGlzIHRvIGJlIGNvbXBvc2VkLlxuICBjb21wb3NlOiAtPlxuICAgICMgRW1wdHkgcGVyIGRlZmF1bHQuXG5cbiAgIyBUaGUgY2hlY2sgbWV0aG9kIGlzIGNhbGxlZCB3aGVuIHRoaXMgY29tcG9zaXRpb24gaXMgYXNrZWQgdG8gYmVcbiAgIyBjb21wb3NlZCBhZ2Fpbi4gVGhlIHBhc3NlZCBvcHRpb25zIGFyZSB0aGUgbmV3bHkgcGFzc2VkIG9wdGlvbnMuXG4gICMgSWYgdGhpcyByZXR1cm5zIGZhbHNlIHRoZW4gdGhlIGNvbXBvc2l0aW9uIGlzIHJlLWNvbXBvc2VkLlxuICBjaGVjazogKG9wdGlvbnMpIC0+XG4gICAgXy5pc0VxdWFsIEBvcHRpb25zLCBvcHRpb25zXG5cbiAgIyBNYXJrcyBhbGwgYXBwbGljYWJsZSBpdGVtcyBhcyBzdGFsZS5cbiAgc3RhbGU6ICh2YWx1ZSkgLT5cbiAgICAjIFJldHVybiB0aGUgY3VycmVudCBwcm9wZXJ0eSBpZiBub3QgcmVxdWVzdGluZyBhIGNoYW5nZS5cbiAgICByZXR1cm4gQF9zdGFsZSB1bmxlc3MgdmFsdWU/XG5cbiAgICAjIFNldHMgdGhlIHN0YWxlIHByb3BlcnR5IGZvciBldmVyeSBpdGVtIGluIHRoZSBjb21wb3NpdGlvbiB0aGF0IGhhcyBpdC5cbiAgICBAX3N0YWxlID0gdmFsdWVcbiAgICBmb3IgbmFtZSwgaXRlbSBvZiB0aGlzIHdoZW4gKFxuICAgICAgaXRlbSBhbmQgaXRlbSBpc250IHRoaXMgYW5kXG4gICAgICB0eXBlb2YgaXRlbSBpcyAnb2JqZWN0JyBhbmQgaXRlbS5oYXNPd25Qcm9wZXJ0eSAnc3RhbGUnXG4gICAgKVxuICAgICAgaXRlbS5zdGFsZSA9IHZhbHVlXG5cbiAgICAjIFJldHVybiBub3RoaW5nLlxuICAgIHJldHVyblxuXG4gICMgRGlzcG9zYWxcbiAgIyAtLS0tLS0tLVxuXG4gIGRpc3Bvc2VkOiBmYWxzZVxuXG4gIGRpc3Bvc2U6IC0+XG4gICAgcmV0dXJuIGlmIEBkaXNwb3NlZFxuXG4gICAgIyBEaXNwb3NlIGFuZCBkZWxldGUgYWxsIG1lbWJlcnMgd2hpY2ggYXJlIGRpc3Bvc2FibGUuXG4gICAgZm9yIGtleSBpbiBPYmplY3Qua2V5cyB0aGlzXG4gICAgICBtZW1iZXIgPSBAW2tleV1cbiAgICAgIGlmIG1lbWJlciBhbmQgbWVtYmVyIGlzbnQgdGhpcyBhbmRcbiAgICAgIHR5cGVvZiBtZW1iZXIuZGlzcG9zZSBpcyAnZnVuY3Rpb24nXG4gICAgICAgIG1lbWJlci5kaXNwb3NlKClcbiAgICAgICAgZGVsZXRlIEBba2V5XVxuXG4gICAgIyBVbmJpbmQgaGFuZGxlcnMgb2YgZ2xvYmFsIGV2ZW50cy5cbiAgICBAdW5zdWJzY3JpYmVBbGxFdmVudHMoKVxuXG4gICAgIyBVbmJpbmQgYWxsIHJlZmVyZW5jZWQgaGFuZGxlcnMuXG4gICAgQHN0b3BMaXN0ZW5pbmcoKVxuXG4gICAgIyBSZW1vdmUgcHJvcGVydGllcyB3aGljaCBhcmUgbm90IGRpc3Bvc2FibGUuXG4gICAgZGVsZXRlIHRoaXMucmVkaXJlY3RlZFxuXG4gICAgIyBGaW5pc2hlZC5cbiAgICBAZGlzcG9zZWQgPSB0cnVlXG5cbiAgICAjIFlvdSdyZSBmcm96ZW4gd2hlbiB5b3VyIGhlYXJ04oCZcyBub3Qgb3Blbi5cbiAgICBPYmplY3QuZnJlZXplIHRoaXNcbiIsIid1c2Ugc3RyaWN0J1xuXG5tZWRpYXRvciA9IHJlcXVpcmUgJy4uL21lZGlhdG9yJ1xuXG4jIEFkZCBmdW5jdGlvbmFsaXR5IHRvIHN1YnNjcmliZSBhbmQgcHVibGlzaCB0byBnbG9iYWxcbiMgUHVibGlzaC9TdWJzY3JpYmUgZXZlbnRzIHNvIHRoZXkgY2FuIGJlIHJlbW92ZWQgYWZ0ZXJ3YXJkc1xuIyB3aGVuIGRpc3Bvc2luZyB0aGUgb2JqZWN0LlxuI1xuIyBNaXhpbiB0aGlzIG9iamVjdCB0byBhZGQgdGhlIHN1YnNjcmliZXIgY2FwYWJpbGl0eSB0byBhbnkgb2JqZWN0OlxuIyBfLmV4dGVuZCBvYmplY3QsIEV2ZW50QnJva2VyXG4jIE9yIHRvIGEgcHJvdG90eXBlIG9mIGEgY2xhc3M6XG4jIF8uZXh0ZW5kIEBwcm90b3R5cGUsIEV2ZW50QnJva2VyXG4jXG4jIFNpbmNlIEJhY2tib25lIDAuOS4yIHRoaXMgYWJzdHJhY3Rpb24ganVzdCBzZXJ2ZXMgdGhlIHB1cnBvc2VcbiMgdGhhdCBhIGhhbmRsZXIgY2Fubm90IGJlIHJlZ2lzdGVyZWQgdHdpY2UgZm9yIHRoZSBzYW1lIGV2ZW50LlxuXG5FdmVudEJyb2tlciA9XG4gIHN1YnNjcmliZUV2ZW50OiAodHlwZSwgaGFuZGxlcikgLT5cbiAgICBpZiB0eXBlb2YgdHlwZSBpc250ICdzdHJpbmcnXG4gICAgICB0aHJvdyBuZXcgVHlwZUVycm9yICdFdmVudEJyb2tlciNzdWJzY3JpYmVFdmVudDogJyArXG4gICAgICAgICd0eXBlIGFyZ3VtZW50IG11c3QgYmUgYSBzdHJpbmcnXG4gICAgaWYgdHlwZW9mIGhhbmRsZXIgaXNudCAnZnVuY3Rpb24nXG4gICAgICB0aHJvdyBuZXcgVHlwZUVycm9yICdFdmVudEJyb2tlciNzdWJzY3JpYmVFdmVudDogJyArXG4gICAgICAgICdoYW5kbGVyIGFyZ3VtZW50IG11c3QgYmUgYSBmdW5jdGlvbidcblxuICAgICMgRW5zdXJlIHRoYXQgYSBoYW5kbGVyIGlzbuKAmXQgcmVnaXN0ZXJlZCB0d2ljZS5cbiAgICBtZWRpYXRvci51bnN1YnNjcmliZSB0eXBlLCBoYW5kbGVyLCB0aGlzXG5cbiAgICAjIFJlZ2lzdGVyIGdsb2JhbCBoYW5kbGVyLCBmb3JjZSBjb250ZXh0IHRvIHRoZSBzdWJzY3JpYmVyLlxuICAgIG1lZGlhdG9yLnN1YnNjcmliZSB0eXBlLCBoYW5kbGVyLCB0aGlzXG5cbiAgc3Vic2NyaWJlRXZlbnRPbmNlOiAodHlwZSwgaGFuZGxlcikgLT5cbiAgICBpZiB0eXBlb2YgdHlwZSBpc250ICdzdHJpbmcnXG4gICAgICB0aHJvdyBuZXcgVHlwZUVycm9yICdFdmVudEJyb2tlciNzdWJzY3JpYmVFdmVudE9uY2U6ICcgK1xuICAgICAgICAndHlwZSBhcmd1bWVudCBtdXN0IGJlIGEgc3RyaW5nJ1xuICAgIGlmIHR5cGVvZiBoYW5kbGVyIGlzbnQgJ2Z1bmN0aW9uJ1xuICAgICAgdGhyb3cgbmV3IFR5cGVFcnJvciAnRXZlbnRCcm9rZXIjc3Vic2NyaWJlRXZlbnRPbmNlOiAnICtcbiAgICAgICAgJ2hhbmRsZXIgYXJndW1lbnQgbXVzdCBiZSBhIGZ1bmN0aW9uJ1xuXG4gICAgIyBFbnN1cmUgdGhhdCBhIGhhbmRsZXIgaXNu4oCZdCByZWdpc3RlcmVkIHR3aWNlLlxuICAgIG1lZGlhdG9yLnVuc3Vic2NyaWJlIHR5cGUsIGhhbmRsZXIsIHRoaXNcblxuICAgICMgUmVnaXN0ZXIgZ2xvYmFsIGhhbmRsZXIsIGZvcmNlIGNvbnRleHQgdG8gdGhlIHN1YnNjcmliZXIuXG4gICAgbWVkaWF0b3Iuc3Vic2NyaWJlT25jZSB0eXBlLCBoYW5kbGVyLCB0aGlzXG5cbiAgdW5zdWJzY3JpYmVFdmVudDogKHR5cGUsIGhhbmRsZXIpIC0+XG4gICAgaWYgdHlwZW9mIHR5cGUgaXNudCAnc3RyaW5nJ1xuICAgICAgdGhyb3cgbmV3IFR5cGVFcnJvciAnRXZlbnRCcm9rZXIjdW5zdWJzY3JpYmVFdmVudDogJyArXG4gICAgICAgICd0eXBlIGFyZ3VtZW50IG11c3QgYmUgYSBzdHJpbmcnXG4gICAgaWYgdHlwZW9mIGhhbmRsZXIgaXNudCAnZnVuY3Rpb24nXG4gICAgICB0aHJvdyBuZXcgVHlwZUVycm9yICdFdmVudEJyb2tlciN1bnN1YnNjcmliZUV2ZW50OiAnICtcbiAgICAgICAgJ2hhbmRsZXIgYXJndW1lbnQgbXVzdCBiZSBhIGZ1bmN0aW9uJ1xuXG4gICAgIyBSZW1vdmUgZ2xvYmFsIGhhbmRsZXIuXG4gICAgbWVkaWF0b3IudW5zdWJzY3JpYmUgdHlwZSwgaGFuZGxlclxuXG4gICMgVW5iaW5kIGFsbCBnbG9iYWwgaGFuZGxlcnMuXG4gIHVuc3Vic2NyaWJlQWxsRXZlbnRzOiAtPlxuICAgICMgUmVtb3ZlIGFsbCBoYW5kbGVycyB3aXRoIGEgY29udGV4dCBvZiB0aGlzIHN1YnNjcmliZXIuXG4gICAgbWVkaWF0b3IudW5zdWJzY3JpYmUgbnVsbCwgbnVsbCwgdGhpc1xuXG4gIHB1Ymxpc2hFdmVudDogKHR5cGUsIGFyZ3MuLi4pIC0+XG4gICAgaWYgdHlwZW9mIHR5cGUgaXNudCAnc3RyaW5nJ1xuICAgICAgdGhyb3cgbmV3IFR5cGVFcnJvciAnRXZlbnRCcm9rZXIjcHVibGlzaEV2ZW50OiAnICtcbiAgICAgICAgJ3R5cGUgYXJndW1lbnQgbXVzdCBiZSBhIHN0cmluZydcblxuICAgICMgUHVibGlzaCBnbG9iYWwgaGFuZGxlci5cbiAgICBtZWRpYXRvci5wdWJsaXNoIHR5cGUsIGFyZ3MuLi5cblxuIyBZb3XigJlyZSBmcm96ZW4gd2hlbiB5b3VyIGhlYXJ04oCZcyBub3Qgb3Blbi5cbk9iamVjdC5mcmVlemUgRXZlbnRCcm9rZXJcblxuIyBSZXR1cm4gb3VyIGNyZWF0aW9uLlxubW9kdWxlLmV4cG9ydHMgPSBFdmVudEJyb2tlclxuIiwiJ3VzZSBzdHJpY3QnXG5cbl8gPSByZXF1aXJlICd1bmRlcnNjb3JlJ1xuQmFja2JvbmUgPSByZXF1aXJlICdiYWNrYm9uZSdcblxuIyBDYWNoZWQgcmVnZXggZm9yIHN0cmlwcGluZyBhIGxlYWRpbmcgaGFzaC9zbGFzaCBhbmQgdHJhaWxpbmcgc3BhY2UuXG5yb3V0ZVN0cmlwcGVyID0gL15bI1xcL118XFxzKyQvZ1xuXG4jIENhY2hlZCByZWdleCBmb3Igc3RyaXBwaW5nIGxlYWRpbmcgYW5kIHRyYWlsaW5nIHNsYXNoZXMuXG5yb290U3RyaXBwZXIgPSAvXlxcLyt8XFwvKyQvZ1xuXG4jIFBhdGNoZWQgQmFja2JvbmUuSGlzdG9yeSB3aXRoIGEgYmFzaWMgcXVlcnkgc3RyaW5ncyBzdXBwb3J0XG5jbGFzcyBIaXN0b3J5IGV4dGVuZHMgQmFja2JvbmUuSGlzdG9yeVxuXG4gICMgR2V0IHRoZSBjcm9zcy1icm93c2VyIG5vcm1hbGl6ZWQgVVJMIGZyYWdtZW50LCBlaXRoZXIgZnJvbSB0aGUgVVJMLFxuICAjIHRoZSBoYXNoLCBvciB0aGUgb3ZlcnJpZGUuXG4gIGdldEZyYWdtZW50OiAoZnJhZ21lbnQsIGZvcmNlUHVzaFN0YXRlKSAtPlxuICAgIGlmIG5vdCBmcmFnbWVudD9cbiAgICAgIGlmIEBfaGFzUHVzaFN0YXRlIG9yIG5vdCBAX3dhbnRzSGFzaENoYW5nZSBvciBmb3JjZVB1c2hTdGF0ZVxuICAgICAgICAjIENIQU5HRUQ6IE1ha2UgZnJhZ21lbnQgaW5jbHVkZSBxdWVyeSBzdHJpbmcuXG4gICAgICAgIGZyYWdtZW50ID0gQGxvY2F0aW9uLnBhdGhuYW1lICsgQGxvY2F0aW9uLnNlYXJjaFxuICAgICAgICAjIFJlbW92ZSB0cmFpbGluZyBzbGFzaC5cbiAgICAgICAgcm9vdCA9IEByb290LnJlcGxhY2UgL1xcLyQvLCAnJ1xuICAgICAgICBmcmFnbWVudCA9IGZyYWdtZW50LnNsaWNlIHJvb3QubGVuZ3RoIHVubGVzcyBmcmFnbWVudC5pbmRleE9mIHJvb3RcbiAgICAgIGVsc2VcbiAgICAgICAgZnJhZ21lbnQgPSBAZ2V0SGFzaCgpXG5cbiAgICBmcmFnbWVudC5yZXBsYWNlIHJvdXRlU3RyaXBwZXIsICcnXG5cbiAgIyBTdGFydCB0aGUgaGFzaCBjaGFuZ2UgaGFuZGxpbmcsIHJldHVybmluZyBgdHJ1ZWAgaWYgdGhlIGN1cnJlbnQgVVJMIG1hdGNoZXNcbiAgIyBhbiBleGlzdGluZyByb3V0ZSwgYW5kIGBmYWxzZWAgb3RoZXJ3aXNlLlxuICBzdGFydDogKG9wdGlvbnMpIC0+XG4gICAgaWYgQmFja2JvbmUuSGlzdG9yeS5zdGFydGVkXG4gICAgICB0aHJvdyBuZXcgRXJyb3IgJ0JhY2tib25lLmhpc3RvcnkgaGFzIGFscmVhZHkgYmVlbiBzdGFydGVkJ1xuICAgIEJhY2tib25lLkhpc3Rvcnkuc3RhcnRlZCA9IHRydWVcblxuICAgICMgRmlndXJlIG91dCB0aGUgaW5pdGlhbCBjb25maWd1cmF0aW9uLiBJcyBwdXNoU3RhdGUgZGVzaXJlZD9cbiAgICAjIElzIGl0IGF2YWlsYWJsZT8gQXJlIGN1c3RvbSBzdHJpcHBlcnMgcHJvdmlkZWQ/XG4gICAgQG9wdGlvbnMgICAgICAgICAgPSBfLmV4dGVuZCB7fSwge3Jvb3Q6ICcvJ30sIEBvcHRpb25zLCBvcHRpb25zXG4gICAgQHJvb3QgICAgICAgICAgICAgPSBAb3B0aW9ucy5yb290XG4gICAgQF93YW50c0hhc2hDaGFuZ2UgPSBAb3B0aW9ucy5oYXNoQ2hhbmdlIGlzbnQgZmFsc2VcbiAgICBAX3dhbnRzUHVzaFN0YXRlICA9IEJvb2xlYW4gQG9wdGlvbnMucHVzaFN0YXRlXG4gICAgQF9oYXNQdXNoU3RhdGUgICAgPSBCb29sZWFuIEBvcHRpb25zLnB1c2hTdGF0ZSBhbmQgQGhpc3Rvcnk/LnB1c2hTdGF0ZVxuICAgIGZyYWdtZW50ICAgICAgICAgID0gQGdldEZyYWdtZW50KClcbiAgICByb3V0ZVN0cmlwcGVyICAgICA9IEBvcHRpb25zLnJvdXRlU3RyaXBwZXIgPyByb3V0ZVN0cmlwcGVyXG4gICAgcm9vdFN0cmlwcGVyICAgICAgPSBAb3B0aW9ucy5yb290U3RyaXBwZXIgPyByb290U3RyaXBwZXJcblxuICAgICMgTm9ybWFsaXplIHJvb3QgdG8gYWx3YXlzIGluY2x1ZGUgYSBsZWFkaW5nIGFuZCB0cmFpbGluZyBzbGFzaC5cbiAgICBAcm9vdCA9ICgnLycgKyBAcm9vdCArICcvJykucmVwbGFjZSByb290U3RyaXBwZXIsICcvJ1xuXG4gICAgIyBEZXBlbmRpbmcgb24gd2hldGhlciB3ZSdyZSB1c2luZyBwdXNoU3RhdGUgb3IgaGFzaGVzLFxuICAgICMgZGV0ZXJtaW5lIGhvdyB3ZSBjaGVjayB0aGUgVVJMIHN0YXRlLlxuICAgIGlmIEBfaGFzUHVzaFN0YXRlXG4gICAgICBCYWNrYm9uZS4kKHdpbmRvdykub24gJ3BvcHN0YXRlJywgQGNoZWNrVXJsXG4gICAgZWxzZSBpZiBAX3dhbnRzSGFzaENoYW5nZVxuICAgICAgQmFja2JvbmUuJCh3aW5kb3cpLm9uICdoYXNoY2hhbmdlJywgQGNoZWNrVXJsXG5cbiAgICAjIERldGVybWluZSBpZiB3ZSBuZWVkIHRvIGNoYW5nZSB0aGUgYmFzZSB1cmwsIGZvciBhIHB1c2hTdGF0ZSBsaW5rXG4gICAgIyBvcGVuZWQgYnkgYSBub24tcHVzaFN0YXRlIGJyb3dzZXIuXG4gICAgQGZyYWdtZW50ID0gZnJhZ21lbnRcbiAgICBsb2MgPSBAbG9jYXRpb25cbiAgICBhdFJvb3QgPSBsb2MucGF0aG5hbWUucmVwbGFjZSgvW15cXC9dJC8sICckJi8nKSBpcyBAcm9vdFxuXG4gICAgIyBJZiB3ZSd2ZSBzdGFydGVkIG9mZiB3aXRoIGEgcm91dGUgZnJvbSBhIGBwdXNoU3RhdGVgLWVuYWJsZWQgYnJvd3NlcixcbiAgICAjIGJ1dCB3ZSdyZSBjdXJyZW50bHkgaW4gYSBicm93c2VyIHRoYXQgZG9lc24ndCBzdXBwb3J0IGl0Li4uXG4gICAgaWYgQF93YW50c0hhc2hDaGFuZ2UgYW5kIEBfd2FudHNQdXNoU3RhdGUgYW5kXG4gICAgbm90IEBfaGFzUHVzaFN0YXRlIGFuZCBub3QgYXRSb290XG4gICAgICAjIENIQU5HRUQ6IFByZXZlbnQgcXVlcnkgc3RyaW5nIGZyb20gYmVpbmcgYWRkZWQgYmVmb3JlIGhhc2guXG4gICAgICAjIFNvLCBpdCB3aWxsIGFwcGVhciBvbmx5IGFmdGVyICMsIGFzIGl0IGhhcyBiZWVuIGFscmVhZHkgaW5jbHVkZWRcbiAgICAgICMgaW50byBAZnJhZ21lbnRcbiAgICAgIEBmcmFnbWVudCA9IEBnZXRGcmFnbWVudCBudWxsLCB0cnVlXG4gICAgICBAbG9jYXRpb24ucmVwbGFjZSBAcm9vdCArICcjJyArIEBmcmFnbWVudFxuICAgICAgIyBSZXR1cm4gaW1tZWRpYXRlbHkgYXMgYnJvd3NlciB3aWxsIGRvIHJlZGlyZWN0IHRvIG5ldyB1cmxcbiAgICAgIHJldHVybiB0cnVlXG5cbiAgICAjIE9yIGlmIHdlJ3ZlIHN0YXJ0ZWQgb3V0IHdpdGggYSBoYXNoLWJhc2VkIHJvdXRlLCBidXQgd2UncmUgY3VycmVudGx5XG4gICAgIyBpbiBhIGJyb3dzZXIgd2hlcmUgaXQgY291bGQgYmUgYHB1c2hTdGF0ZWAtYmFzZWQgaW5zdGVhZC4uLlxuICAgIGVsc2UgaWYgQF93YW50c1B1c2hTdGF0ZSBhbmQgQF9oYXNQdXNoU3RhdGUgYW5kIGF0Um9vdCBhbmQgbG9jLmhhc2hcbiAgICAgIEBmcmFnbWVudCA9IEBnZXRIYXNoKCkucmVwbGFjZSByb3V0ZVN0cmlwcGVyLCAnJ1xuICAgICAgIyBDSEFOR0VEOiBJdCdzIG5vIGxvbmdlciBuZWVkZWQgdG8gYWRkIGxvYy5zZWFyY2ggYXQgdGhlIGVuZCxcbiAgICAgICMgYXMgcXVlcnkgcGFyYW1zIGhhdmUgYmVlbiBhbHJlYWR5IGluY2x1ZGVkIGludG8gQGZyYWdtZW50XG4gICAgICBAaGlzdG9yeS5yZXBsYWNlU3RhdGUge30sIGRvY3VtZW50LnRpdGxlLCBAcm9vdCArIEBmcmFnbWVudFxuXG4gICAgQGxvYWRVcmwoKSBpZiBub3QgQG9wdGlvbnMuc2lsZW50XG5cbiAgbmF2aWdhdGU6IChmcmFnbWVudCA9ICcnLCBvcHRpb25zKSAtPlxuICAgIHJldHVybiBmYWxzZSB1bmxlc3MgQmFja2JvbmUuSGlzdG9yeS5zdGFydGVkXG5cbiAgICBvcHRpb25zID0ge3RyaWdnZXI6IG9wdGlvbnN9IGlmIG5vdCBvcHRpb25zIG9yIG9wdGlvbnMgaXMgdHJ1ZVxuXG4gICAgZnJhZ21lbnQgPSBAZ2V0RnJhZ21lbnQgZnJhZ21lbnRcbiAgICB1cmwgPSBAcm9vdCArIGZyYWdtZW50XG5cbiAgICAjIFJlbW92ZSBmcmFnbWVudCByZXBsYWNlLCBjb3ogcXVlcnkgc3RyaW5nIGRpZmZlcmVudCBtZWFuIGRpZmZlcmVuY2UgcGFnZVxuICAgICMgU3RyaXAgdGhlIGZyYWdtZW50IG9mIHRoZSBxdWVyeSBhbmQgaGFzaCBmb3IgbWF0Y2hpbmcuXG4gICAgIyBmcmFnbWVudCA9IGZyYWdtZW50LnJlcGxhY2UocGF0aFN0cmlwcGVyLCAnJylcblxuICAgIHJldHVybiBmYWxzZSBpZiBAZnJhZ21lbnQgaXMgZnJhZ21lbnRcbiAgICBAZnJhZ21lbnQgPSBmcmFnbWVudFxuXG4gICAgIyBEb24ndCBpbmNsdWRlIGEgdHJhaWxpbmcgc2xhc2ggb24gdGhlIHJvb3QuXG4gICAgaWYgZnJhZ21lbnQubGVuZ3RoIGlzIDAgYW5kIHVybCBpc250IEByb290XG4gICAgICB1cmwgPSB1cmwuc2xpY2UgMCwgLTFcblxuICAgICMgSWYgcHVzaFN0YXRlIGlzIGF2YWlsYWJsZSwgd2UgdXNlIGl0IHRvIHNldCB0aGUgZnJhZ21lbnQgYXMgYSByZWFsIFVSTC5cbiAgICBpZiBAX2hhc1B1c2hTdGF0ZVxuICAgICAgaGlzdG9yeU1ldGhvZCA9IGlmIG9wdGlvbnMucmVwbGFjZSB0aGVuICdyZXBsYWNlU3RhdGUnIGVsc2UgJ3B1c2hTdGF0ZSdcbiAgICAgIEBoaXN0b3J5W2hpc3RvcnlNZXRob2RdIHt9LCBkb2N1bWVudC50aXRsZSwgdXJsXG5cbiAgICAjIElmIGhhc2ggY2hhbmdlcyBoYXZlbid0IGJlZW4gZXhwbGljaXRseSBkaXNhYmxlZCwgdXBkYXRlIHRoZSBoYXNoXG4gICAgIyBmcmFnbWVudCB0byBzdG9yZSBoaXN0b3J5LlxuICAgIGVsc2UgaWYgQF93YW50c0hhc2hDaGFuZ2VcbiAgICAgIEBfdXBkYXRlSGFzaCBAbG9jYXRpb24sIGZyYWdtZW50LCBvcHRpb25zLnJlcGxhY2VcblxuICAgICMgSWYgeW91J3ZlIHRvbGQgdXMgdGhhdCB5b3UgZXhwbGljaXRseSBkb24ndCB3YW50IGZhbGxiYWNrIGhhc2hjaGFuZ2UtXG4gICAgIyBiYXNlZCBoaXN0b3J5LCB0aGVuIGBuYXZpZ2F0ZWAgYmVjb21lcyBhIHBhZ2UgcmVmcmVzaC5cbiAgICBlbHNlXG4gICAgICByZXR1cm4gQGxvY2F0aW9uLmFzc2lnbiB1cmxcblxuICAgIGlmIG9wdGlvbnMudHJpZ2dlclxuICAgICAgQGxvYWRVcmwgZnJhZ21lbnRcblxubW9kdWxlLmV4cG9ydHMgPSBpZiBCYWNrYm9uZS4kIHRoZW4gSGlzdG9yeSBlbHNlIEJhY2tib25lLkhpc3RvcnlcbiIsIid1c2Ugc3RyaWN0J1xuXG5fID0gcmVxdWlyZSAndW5kZXJzY29yZSdcbkJhY2tib25lID0gcmVxdWlyZSAnYmFja2JvbmUnXG5cbkV2ZW50QnJva2VyID0gcmVxdWlyZSAnLi9ldmVudF9icm9rZXInXG51dGlscyA9IHJlcXVpcmUgJy4vdXRpbHMnXG5Db250cm9sbGVyID0gcmVxdWlyZSAnLi4vY29udHJvbGxlcnMvY29udHJvbGxlcidcblxubW9kdWxlLmV4cG9ydHMgPSBjbGFzcyBSb3V0ZVxuICAjIEJvcnJvdyB0aGUgc3RhdGljIGV4dGVuZCBtZXRob2QgZnJvbSBCYWNrYm9uZS5cbiAgQGV4dGVuZCA9IEJhY2tib25lLk1vZGVsLmV4dGVuZFxuXG4gICMgTWl4aW4gYW4gRXZlbnRCcm9rZXIuXG4gIF8uZXh0ZW5kIEBwcm90b3R5cGUsIEV2ZW50QnJva2VyXG5cbiAgIyBUYWtlbiBmcm9tIEJhY2tib25lLlJvdXRlci5cbiAgZXNjYXBlUmVnRXhwID0gL1tcXC17fVxcW1xcXSs/LixcXFxcXFxeJHwjXFxzXS9nXG4gIG9wdGlvbmFsUmVnRXhwID0gL1xcKCguKj8pXFwpL2dcbiAgcGFyYW1SZWdFeHAgPSAvKD86OnxcXCopKFxcdyspL2dcblxuICAjIEFkZCBvciByZW1vdmUgdHJhaWxpbmcgc2xhc2ggZnJvbSBwYXRoIGFjY29yZGluZyB0byB0cmFpbGluZyBvcHRpb24uXG4gIHByb2Nlc3NUcmFpbGluZ1NsYXNoID0gKHBhdGgsIHRyYWlsaW5nKSAtPlxuICAgIHN3aXRjaCB0cmFpbGluZ1xuICAgICAgd2hlbiB5ZXNcbiAgICAgICAgcGF0aCArPSAnLycgdW5sZXNzIHBhdGhbLTEuLl0gaXMgJy8nXG4gICAgICB3aGVuIG5vXG4gICAgICAgIHBhdGggPSBwYXRoWy4uLi0xXSBpZiBwYXRoWy0xLi5dIGlzICcvJ1xuICAgIHBhdGhcblxuICAjIENyZWF0ZSBhIHJvdXRlIGZvciBhIFVSTCBwYXR0ZXJuIGFuZCBhIGNvbnRyb2xsZXIgYWN0aW9uXG4gICMgZS5nLiBuZXcgUm91dGUgJy91c2Vycy86aWQnLCAndXNlcnMnLCAnc2hvdycsIHsgc29tZTogJ29wdGlvbnMnIH1cbiAgY29uc3RydWN0b3I6IChAcGF0dGVybiwgQGNvbnRyb2xsZXIsIEBhY3Rpb24sIG9wdGlvbnMpIC0+XG4gICAgIyBEaXNhbGxvdyByZWdleHAgcm91dGVzLlxuICAgIGlmIHR5cGVvZiBAcGF0dGVybiBpc250ICdzdHJpbmcnXG4gICAgICB0aHJvdyBuZXcgRXJyb3IgJ1JvdXRlOiBSZWdFeHBzIGFyZSBub3Qgc3VwcG9ydGVkLlxuICAgICAgICBVc2Ugc3RyaW5ncyB3aXRoIDpuYW1lcyBhbmQgYGNvbnN0cmFpbnRzYCBvcHRpb24gb2Ygcm91dGUnXG5cbiAgICAjIENsb25lIG9wdGlvbnMuXG4gICAgQG9wdGlvbnMgPSBfLmV4dGVuZCB7fSwgb3B0aW9uc1xuICAgIEBvcHRpb25zLnBhcmFtc0luUVMgPSB0cnVlIGlmIEBvcHRpb25zLnBhcmFtc0luUVMgaXNudCBmYWxzZVxuXG4gICAgIyBTdG9yZSB0aGUgbmFtZSBvbiB0aGUgcm91dGUgaWYgZ2l2ZW5cbiAgICBAbmFtZSA9IEBvcHRpb25zLm5hbWUgaWYgQG9wdGlvbnMubmFtZT9cblxuICAgICMgRG9u4oCZdCBhbGxvdyBhbWJpZ3VpdHkgd2l0aCBjb250cm9sbGVyI2FjdGlvbi5cbiAgICBpZiBAbmFtZSBhbmQgQG5hbWUuaW5kZXhPZignIycpIGlzbnQgLTFcbiAgICAgIHRocm93IG5ldyBFcnJvciAnUm91dGU6IFwiI1wiIGNhbm5vdCBiZSB1c2VkIGluIG5hbWUnXG5cbiAgICAjIFNldCBkZWZhdWx0IHJvdXRlIG5hbWUuXG4gICAgQG5hbWUgPz0gQGNvbnRyb2xsZXIgKyAnIycgKyBAYWN0aW9uXG5cbiAgICAjIEluaXRpYWxpemUgbGlzdCBvZiA6cGFyYW1zIHdoaWNoIHRoZSByb3V0ZSB3aWxsIHVzZS5cbiAgICBAYWxsUGFyYW1zID0gW11cbiAgICBAcmVxdWlyZWRQYXJhbXMgPSBbXVxuICAgIEBvcHRpb25hbFBhcmFtcyA9IFtdXG5cbiAgICAjIENoZWNrIGlmIHRoZSBhY3Rpb24gaXMgYSByZXNlcnZlZCBuYW1lXG4gICAgaWYgQGFjdGlvbiBvZiBDb250cm9sbGVyLnByb3RvdHlwZVxuICAgICAgdGhyb3cgbmV3IEVycm9yICdSb3V0ZTogWW91IHNob3VsZCBub3QgdXNlIGV4aXN0aW5nIGNvbnRyb2xsZXIgJyArXG4gICAgICAgICdwcm9wZXJ0aWVzIGFzIGFjdGlvbiBuYW1lcydcblxuICAgIEBjcmVhdGVSZWdFeHAoKVxuXG4gICAgIyBZb3XigJlyZSBmcm96ZW4gd2hlbiB5b3VyIGhlYXJ04oCZcyBub3Qgb3Blbi5cbiAgICBPYmplY3QuZnJlZXplIHRoaXNcblxuICAjIFRlc3RzIGlmIHJvdXRlIHBhcmFtcyBhcmUgZXF1YWwgdG8gY3JpdGVyaWEuXG4gIG1hdGNoZXM6IChjcml0ZXJpYSkgLT5cbiAgICBpZiB0eXBlb2YgY3JpdGVyaWEgaXMgJ3N0cmluZydcbiAgICAgIGNyaXRlcmlhIGlzIEBuYW1lXG4gICAgZWxzZVxuICAgICAgcHJvcGVydGllc0NvdW50ID0gMFxuICAgICAgZm9yIG5hbWUgaW4gWyduYW1lJywgJ2FjdGlvbicsICdjb250cm9sbGVyJ11cbiAgICAgICAgcHJvcGVydGllc0NvdW50KytcbiAgICAgICAgcHJvcGVydHkgPSBjcml0ZXJpYVtuYW1lXVxuICAgICAgICByZXR1cm4gZmFsc2UgaWYgcHJvcGVydHkgYW5kIHByb3BlcnR5IGlzbnQgdGhpc1tuYW1lXVxuICAgICAgaW52YWxpZFBhcmFtc0NvdW50ID0gcHJvcGVydGllc0NvdW50IGlzIDEgYW5kIG5hbWUgaW5cbiAgICAgICAgWydhY3Rpb24nLCAnY29udHJvbGxlciddXG4gICAgICBub3QgaW52YWxpZFBhcmFtc0NvdW50XG5cbiAgIyBHZW5lcmF0ZXMgcm91dGUgVVJMIGZyb20gcGFyYW1zLlxuICByZXZlcnNlOiAocGFyYW1zLCBxdWVyeSkgLT5cbiAgICBwYXJhbXMgPSBAbm9ybWFsaXplUGFyYW1zIHBhcmFtc1xuICAgIHJlbWFpbmluZ1BhcmFtcyA9IF8uZXh0ZW5kIHt9LCBwYXJhbXNcbiAgICByZXR1cm4gZmFsc2UgaWYgcGFyYW1zIGlzIGZhbHNlXG5cbiAgICB1cmwgPSBAcGF0dGVyblxuXG4gICAgIyBGcm9tIGEgcGFyYW1zIGhhc2g7IHdlIG5lZWQgdG8gYmUgYWJsZSB0byByZXR1cm5cbiAgICAjIHRoZSBhY3R1YWwgVVJMIHRoaXMgcm91dGUgcmVwcmVzZW50cy5cbiAgICAjIEl0ZXJhdGUgYW5kIHJlcGxhY2UgcGFyYW1zIGluIHBhdHRlcm4uXG4gICAgZm9yIG5hbWUgaW4gQHJlcXVpcmVkUGFyYW1zXG4gICAgICB2YWx1ZSA9IHBhcmFtc1tuYW1lXVxuICAgICAgdXJsID0gdXJsLnJlcGxhY2UgLy8vWzoqXSN7bmFtZX0vLy9nLCB2YWx1ZVxuICAgICAgZGVsZXRlIHJlbWFpbmluZ1BhcmFtc1tuYW1lXVxuXG4gICAgIyBSZXBsYWNlIG9wdGlvbmFsIHBhcmFtcy5cbiAgICBmb3IgbmFtZSBpbiBAb3B0aW9uYWxQYXJhbXNcbiAgICAgIGlmIHZhbHVlID0gcGFyYW1zW25hbWVdXG4gICAgICAgIHVybCA9IHVybC5yZXBsYWNlIC8vL1s6Kl0je25hbWV9Ly8vZywgdmFsdWVcbiAgICAgICAgZGVsZXRlIHJlbWFpbmluZ1BhcmFtc1tuYW1lXVxuXG4gICAgIyBLaWxsIHVuZnVsZmlsbGVkIG9wdGlvbmFsIHBvcnRpb25zLlxuICAgIHJhdyA9IHVybC5yZXBsYWNlIG9wdGlvbmFsUmVnRXhwLCAobWF0Y2gsIHBvcnRpb24pIC0+XG4gICAgICBpZiBwb3J0aW9uLm1hdGNoIC9bOipdL2dcbiAgICAgICAgXCJcIlxuICAgICAgZWxzZVxuICAgICAgICBwb3J0aW9uXG5cbiAgICAjIEFkZCBvciByZW1vdmUgdHJhaWxpbmcgc2xhc2ggYWNjb3JkaW5nIHRvIHRoZSBSb3V0ZSBvcHRpb25zLlxuICAgIHVybCA9IHByb2Nlc3NUcmFpbGluZ1NsYXNoIHJhdywgQG9wdGlvbnMudHJhaWxpbmdcblxuICAgIHF1ZXJ5ID0gdXRpbHMucXVlcnlQYXJhbXMucGFyc2UgcXVlcnkgaWYgdHlwZW9mIHF1ZXJ5IGlzbnQgJ29iamVjdCdcbiAgICBfLmV4dGVuZCBxdWVyeSwgcmVtYWluaW5nUGFyYW1zIHVubGVzcyBAb3B0aW9ucy5wYXJhbXNJblFTIGlzIGZhbHNlXG4gICAgdXJsICs9ICc/JyArIHV0aWxzLnF1ZXJ5UGFyYW1zLnN0cmluZ2lmeSBxdWVyeSB1bmxlc3MgdXRpbHMuaXNFbXB0eSBxdWVyeVxuICAgIHVybFxuXG4gICMgVmFsaWRhdGVzIGluY29taW5nIHBhcmFtcyBhbmQgcmV0dXJucyB0aGVtIGluIGEgdW5pZmllZCBmb3JtIC0gaGFzaFxuICBub3JtYWxpemVQYXJhbXM6IChwYXJhbXMpIC0+XG4gICAgaWYgQXJyYXkuaXNBcnJheSBwYXJhbXNcbiAgICAgICMgRW5zdXJlIHdlIGhhdmUgZW5vdWdoIHBhcmFtZXRlcnMuXG4gICAgICByZXR1cm4gZmFsc2UgaWYgcGFyYW1zLmxlbmd0aCA8IEByZXF1aXJlZFBhcmFtcy5sZW5ndGhcblxuICAgICAgIyBDb252ZXJ0IHBhcmFtcyBmcm9tIGFycmF5IGludG8gb2JqZWN0LlxuICAgICAgcGFyYW1zSGFzaCA9IHt9XG4gICAgICByb3V0ZVBhcmFtcyA9IEByZXF1aXJlZFBhcmFtcy5jb25jYXQgQG9wdGlvbmFsUGFyYW1zXG4gICAgICBmb3IgcGFyYW1JbmRleCBpbiBbMC4ucGFyYW1zLmxlbmd0aCAtIDFdIGJ5IDFcbiAgICAgICAgcGFyYW1OYW1lID0gcm91dGVQYXJhbXNbcGFyYW1JbmRleF1cbiAgICAgICAgcGFyYW1zSGFzaFtwYXJhbU5hbWVdID0gcGFyYW1zW3BhcmFtSW5kZXhdXG5cbiAgICAgIHJldHVybiBmYWxzZSB1bmxlc3MgQHRlc3RDb25zdHJhaW50cyBwYXJhbXNIYXNoXG5cbiAgICAgIHBhcmFtcyA9IHBhcmFtc0hhc2hcbiAgICBlbHNlXG4gICAgICAjIG51bGwgb3IgdW5kZWZpbmVkIHBhcmFtcyBhcmUgZXF1aXZhbGVudCB0byBhbiBlbXB0eSBoYXNoXG4gICAgICBwYXJhbXMgPz0ge31cblxuICAgICAgcmV0dXJuIGZhbHNlIHVubGVzcyBAdGVzdFBhcmFtcyBwYXJhbXNcblxuICAgIHBhcmFtc1xuXG4gICMgVGVzdCBpZiBwYXNzZWQgcGFyYW1zIGhhc2ggbWF0Y2hlcyBjdXJyZW50IGNvbnN0cmFpbnRzLlxuICB0ZXN0Q29uc3RyYWludHM6IChwYXJhbXMpIC0+XG4gICAgIyBBcHBseSB0aGUgcGFyYW1ldGVyIGNvbnN0cmFpbnRzLlxuICAgIGNvbnN0cmFpbnRzID0gQG9wdGlvbnMuY29uc3RyYWludHNcbiAgICBPYmplY3Qua2V5cyhjb25zdHJhaW50cyBvciB7fSkuZXZlcnkgKGtleSkgLT5cbiAgICAgIGNvbnN0cmFpbnRzW2tleV0udGVzdCBwYXJhbXNba2V5XVxuXG4gICMgVGVzdCBpZiBwYXNzZWQgcGFyYW1zIGhhc2ggbWF0Y2hlcyBjdXJyZW50IHJvdXRlLlxuICB0ZXN0UGFyYW1zOiAocGFyYW1zKSAtPlxuICAgICMgRW5zdXJlIHRoYXQgcGFyYW1zIGNvbnRhaW5zIGFsbCB0aGUgcGFyYW1ldGVycyBuZWVkZWQuXG4gICAgZm9yIHBhcmFtTmFtZSBpbiBAcmVxdWlyZWRQYXJhbXNcbiAgICAgIHJldHVybiBmYWxzZSBpZiBwYXJhbXNbcGFyYW1OYW1lXSBpcyB1bmRlZmluZWRcblxuICAgIEB0ZXN0Q29uc3RyYWludHMgcGFyYW1zXG5cbiAgIyBDcmVhdGVzIHRoZSBhY3R1YWwgcmVndWxhciBleHByZXNzaW9uIHRoYXQgQmFja2JvbmUuSGlzdG9yeSNsb2FkVXJsXG4gICMgdXNlcyB0byBkZXRlcm1pbmUgaWYgdGhlIGN1cnJlbnQgdXJsIGlzIGEgbWF0Y2guXG4gIGNyZWF0ZVJlZ0V4cDogLT5cbiAgICBwYXR0ZXJuID0gQHBhdHRlcm5cblxuICAgICMgRXNjYXBlIG1hZ2ljIGNoYXJhY3RlcnMuXG4gICAgcGF0dGVybiA9IHBhdHRlcm4ucmVwbGFjZShlc2NhcGVSZWdFeHAsICdcXFxcJCYnKVxuXG4gICAgIyBLZWVwIGFjY3VyYXRlIGJhY2stcmVmZXJlbmNlIGluZGljZXMgaW4gYWxsUGFyYW1zLlxuICAgICMgRWcuIE1hdGNoaW5nIHRoZSByZWdleCByZXR1cm5zIGFycmF5cyBsaWtlIFthLCB1bmRlZmluZWQsIGNdXG4gICAgIyAgYW5kIGVhY2ggaXRlbSBuZWVkcyB0byBiZSBtYXRjaGVkIHRvIHRoZSBjb3JyZWN0XG4gICAgIyAgbmFtZWQgcGFyYW1ldGVyIHZpYSBpdHMgcG9zaXRpb24gaW4gdGhlIGFycmF5LlxuICAgIEByZXBsYWNlUGFyYW1zIHBhdHRlcm4sIChtYXRjaCwgcGFyYW0pID0+XG4gICAgICBAYWxsUGFyYW1zLnB1c2ggcGFyYW1cblxuICAgICMgUHJvY2VzcyBvcHRpb25hbCByb3V0ZSBwb3J0aW9ucy5cbiAgICBwYXR0ZXJuID0gcGF0dGVybi5yZXBsYWNlIG9wdGlvbmFsUmVnRXhwLCBAcGFyc2VPcHRpb25hbFBvcnRpb25cblxuICAgICMgUHJvY2VzcyByZW1haW5pbmcgcmVxdWlyZWQgcGFyYW1zLlxuICAgIHBhdHRlcm4gPSBAcmVwbGFjZVBhcmFtcyBwYXR0ZXJuLCAobWF0Y2gsIHBhcmFtKSA9PlxuICAgICAgQHJlcXVpcmVkUGFyYW1zLnB1c2ggcGFyYW1cbiAgICAgIEBwYXJhbUNhcHR1cmVQYXR0ZXJuIG1hdGNoXG5cbiAgICAjIENyZWF0ZSB0aGUgYWN0dWFsIHJlZ3VsYXIgZXhwcmVzc2lvbiwgbWF0Y2ggdW50aWwgdGhlIGVuZCBvZiB0aGUgVVJMLFxuICAgICMgdHJhaWxpbmcgc2xhc2ggb3IgdGhlIGJlZ2luIG9mIHF1ZXJ5IHN0cmluZy5cbiAgICBAcmVnRXhwID0gLy8vXiN7cGF0dGVybn0oPz1cXC8qKD89XFw/fCQpKS8vL1xuXG4gIHBhcnNlT3B0aW9uYWxQb3J0aW9uOiAobWF0Y2gsIG9wdGlvbmFsUG9ydGlvbikgPT5cbiAgICAjIEV4dHJhY3QgYW5kIHJlcGxhY2UgcGFyYW1zLlxuICAgIHBvcnRpb24gPSBAcmVwbGFjZVBhcmFtcyBvcHRpb25hbFBvcnRpb24sIChtYXRjaCwgcGFyYW0pID0+XG4gICAgICBAb3B0aW9uYWxQYXJhbXMucHVzaCBwYXJhbVxuICAgICAgIyBSZXBsYWNlIHRoZSBtYXRjaCAoZWcuIDpmb28pIHdpdGggY2FwdHVyaW5nIGdyb3Vwcy5cbiAgICAgIEBwYXJhbUNhcHR1cmVQYXR0ZXJuIG1hdGNoXG5cbiAgICAjIFJlcGxhY2UgdGhlIG9wdGlvbmFsIHBvcnRpb24gd2l0aCBhIG5vbi1jYXB0dXJpbmcgYW5kIG9wdGlvbmFsIGdyb3VwLlxuICAgIFwiKD86I3twb3J0aW9ufSk/XCJcblxuICByZXBsYWNlUGFyYW1zOiAocywgY2FsbGJhY2spIC0+XG4gICAgIyBQYXJzZSA6Zm9vIGFuZCAqYmFyLCByZXBsYWNpbmcgdmlhIGNhbGxiYWNrLlxuICAgIHMucmVwbGFjZSBwYXJhbVJlZ0V4cCwgY2FsbGJhY2tcblxuICBwYXJhbUNhcHR1cmVQYXR0ZXJuOiAocGFyYW0pIC0+XG4gICAgaWYgcGFyYW1bMF0gaXMgJzonXG4gICAgICAjIFJlZ2V4cCBmb3IgOmZvby5cbiAgICAgICcoW15cXC9cXD9dKyknXG4gICAgZWxzZVxuICAgICAgIyBSZWdleHAgZm9yICpmb28uXG4gICAgICAnKC4qPyknXG5cbiAgIyBUZXN0IGlmIHRoZSByb3V0ZSBtYXRjaGVzIHRvIGEgcGF0aCAoY2FsbGVkIGJ5IEJhY2tib25lLkhpc3RvcnkjbG9hZFVybCkuXG4gIHRlc3Q6IChwYXRoKSAtPlxuICAgICMgVGVzdCB0aGUgbWFpbiBSZWdFeHAuXG4gICAgbWF0Y2hlZCA9IEByZWdFeHAudGVzdCBwYXRoXG4gICAgcmV0dXJuIGZhbHNlIHVubGVzcyBtYXRjaGVkXG5cbiAgICAjIEFwcGx5IHRoZSBwYXJhbWV0ZXIgY29uc3RyYWludHMuXG4gICAgY29uc3RyYWludHMgPSBAb3B0aW9ucy5jb25zdHJhaW50c1xuICAgIGlmIGNvbnN0cmFpbnRzXG4gICAgICByZXR1cm4gQHRlc3RDb25zdHJhaW50cyBAZXh0cmFjdFBhcmFtcyBwYXRoXG5cbiAgICB0cnVlXG5cbiAgIyBUaGUgaGFuZGxlciBjYWxsZWQgYnkgQmFja2JvbmUuSGlzdG9yeSB3aGVuIHRoZSByb3V0ZSBtYXRjaGVzLlxuICAjIEl0IGlzIGFsc28gY2FsbGVkIGJ5IFJvdXRlciNyb3V0ZSB3aGljaCBtaWdodCBwYXNzIG9wdGlvbnMuXG4gIGhhbmRsZXI6IChwYXRoUGFyYW1zLCBvcHRpb25zKSA9PlxuICAgIG9wdGlvbnMgPSBfLmV4dGVuZCB7fSwgb3B0aW9uc1xuXG4gICAgIyBwYXRoUGFyYW1zIG1heSBiZSBlaXRoZXIgYW4gb2JqZWN0IHdpdGggcGFyYW1zIGZvciByZXZlcnNpbmdcbiAgICAjIG9yIGEgc2ltcGxlIFVSTC5cbiAgICBpZiBwYXRoUGFyYW1zIGFuZCB0eXBlb2YgcGF0aFBhcmFtcyBpcyAnb2JqZWN0J1xuICAgICAgcXVlcnkgPSB1dGlscy5xdWVyeVBhcmFtcy5zdHJpbmdpZnkgb3B0aW9ucy5xdWVyeVxuICAgICAgcGFyYW1zID0gcGF0aFBhcmFtc1xuICAgICAgcGF0aCA9IEByZXZlcnNlIHBhcmFtc1xuICAgIGVsc2VcbiAgICAgIFtwYXRoLCBxdWVyeV0gPSBwYXRoUGFyYW1zLnNwbGl0ICc/J1xuICAgICAgaWYgbm90IHF1ZXJ5P1xuICAgICAgICBxdWVyeSA9ICcnXG4gICAgICBlbHNlXG4gICAgICAgIG9wdGlvbnMucXVlcnkgPSB1dGlscy5xdWVyeVBhcmFtcy5wYXJzZSBxdWVyeVxuICAgICAgcGFyYW1zID0gQGV4dHJhY3RQYXJhbXMgcGF0aFxuICAgICAgcGF0aCA9IHByb2Nlc3NUcmFpbGluZ1NsYXNoIHBhdGgsIEBvcHRpb25zLnRyYWlsaW5nXG5cbiAgICBhY3Rpb25QYXJhbXMgPSBfLmV4dGVuZCB7fSwgcGFyYW1zLCBAb3B0aW9ucy5wYXJhbXNcblxuICAgICMgQ29uc3RydWN0IGEgcm91dGUgb2JqZWN0IHRvIGZvcndhcmQgdG8gdGhlIG1hdGNoIGV2ZW50LlxuICAgIHJvdXRlID0ge3BhdGgsIEBhY3Rpb24sIEBjb250cm9sbGVyLCBAbmFtZSwgcXVlcnl9XG5cbiAgICAjIFB1Ymxpc2ggYSBnbG9iYWwgZXZlbnQgcGFzc2luZyB0aGUgcm91dGUgYW5kIHRoZSBwYXJhbXMuXG4gICAgIyBPcmlnaW5hbCBvcHRpb25zIGhhc2ggZm9yd2FyZGVkIHRvIGFsbG93IGZ1cnRoZXIgZm9yd2FyZGluZyB0byBiYWNrYm9uZS5cbiAgICBAcHVibGlzaEV2ZW50ICdyb3V0ZXI6bWF0Y2gnLCByb3V0ZSwgYWN0aW9uUGFyYW1zLCBvcHRpb25zXG5cbiAgIyBFeHRyYWN0IG5hbWVkIHBhcmFtZXRlcnMgZnJvbSB0aGUgVVJMIHBhdGguXG4gIGV4dHJhY3RQYXJhbXM6IChwYXRoKSAtPlxuICAgIHBhcmFtcyA9IHt9XG5cbiAgICAjIEFwcGx5IHRoZSByZWd1bGFyIGV4cHJlc3Npb24uXG4gICAgbWF0Y2hlcyA9IEByZWdFeHAuZXhlYyBwYXRoXG5cbiAgICAjIEZpbGwgdGhlIGhhc2ggdXNpbmcgcGFyYW0gbmFtZXMgYW5kIHRoZSBtYXRjaGVzLlxuICAgIGZvciBtYXRjaCwgaW5kZXggaW4gbWF0Y2hlcy5zbGljZSAxXG4gICAgICBwYXJhbU5hbWUgPSBpZiBAYWxsUGFyYW1zLmxlbmd0aCB0aGVuIEBhbGxQYXJhbXNbaW5kZXhdIGVsc2UgaW5kZXhcbiAgICAgIHBhcmFtc1twYXJhbU5hbWVdID0gbWF0Y2hcblxuICAgIHBhcmFtc1xuIiwiJ3VzZSBzdHJpY3QnXG5cbl8gPSByZXF1aXJlICd1bmRlcnNjb3JlJ1xuQmFja2JvbmUgPSByZXF1aXJlICdiYWNrYm9uZSdcblxuRXZlbnRCcm9rZXIgPSByZXF1aXJlICcuL2V2ZW50X2Jyb2tlcidcbkhpc3RvcnkgPSByZXF1aXJlICcuL2hpc3RvcnknXG5Sb3V0ZSA9IHJlcXVpcmUgJy4vcm91dGUnXG51dGlscyA9IHJlcXVpcmUgJy4vdXRpbHMnXG5tZWRpYXRvciA9IHJlcXVpcmUgJy4uL21lZGlhdG9yJ1xuXG4jIFRoZSByb3V0ZXIgd2hpY2ggaXMgYSByZXBsYWNlbWVudCBmb3IgQmFja2JvbmUuUm91dGVyLlxuIyBMaWtlIHRoZSBzdGFuZGFyZCByb3V0ZXIsIGl0IGNyZWF0ZXMgYSBCYWNrYm9uZS5IaXN0b3J5XG4jIGluc3RhbmNlIGFuZCByZWdpc3RlcnMgcm91dGVzIG9uIGl0LlxubW9kdWxlLmV4cG9ydHMgPSBjbGFzcyBSb3V0ZXIgIyBUaGlzIGNsYXNzIGRvZXMgbm90IGV4dGVuZCBCYWNrYm9uZS5Sb3V0ZXIuXG4gICMgQm9ycm93IHRoZSBzdGF0aWMgZXh0ZW5kIG1ldGhvZCBmcm9tIEJhY2tib25lLlxuICBAZXh0ZW5kID0gQmFja2JvbmUuTW9kZWwuZXh0ZW5kXG5cbiAgIyBNaXhpbiBhbiBFdmVudEJyb2tlci5cbiAgXy5leHRlbmQgQHByb3RvdHlwZSwgRXZlbnRCcm9rZXJcblxuICBjb25zdHJ1Y3RvcjogKEBvcHRpb25zID0ge30pIC0+XG4gICAgIyBFbmFibGUgcHVzaFN0YXRlIGJ5IGRlZmF1bHQgZm9yIEhUVFAocykuXG4gICAgIyBEaXNhYmxlIGl0IGZvciBmaWxlOi8vIHNjaGVtYS5cbiAgICBpc1dlYkZpbGUgPSB3aW5kb3cubG9jYXRpb24ucHJvdG9jb2wgaXNudCAnZmlsZTonXG4gICAgXy5kZWZhdWx0cyBAb3B0aW9ucyxcbiAgICAgIHB1c2hTdGF0ZTogaXNXZWJGaWxlXG4gICAgICByb290OiAnLydcbiAgICAgIHRyYWlsaW5nOiBub1xuXG4gICAgIyBDYWNoZWQgcmVnZXggZm9yIHN0cmlwcGluZyBhIGxlYWRpbmcgc3ViZGlyIGFuZCBoYXNoL3NsYXNoLlxuICAgIEByZW1vdmVSb290ID0gbmV3IFJlZ0V4cCAnXicgKyB1dGlscy5lc2NhcGVSZWdFeHAoQG9wdGlvbnMucm9vdCkgKyAnKCMpPydcblxuICAgIEBzdWJzY3JpYmVFdmVudCAnIXJvdXRlcjpyb3V0ZScsIEBvbGRFdmVudEVycm9yXG4gICAgQHN1YnNjcmliZUV2ZW50ICchcm91dGVyOnJvdXRlQnlOYW1lJywgQG9sZEV2ZW50RXJyb3JcbiAgICBAc3Vic2NyaWJlRXZlbnQgJyFyb3V0ZXI6Y2hhbmdlVVJMJywgQG9sZFVSTEV2ZW50RXJyb3JcblxuICAgIEBzdWJzY3JpYmVFdmVudCAnZGlzcGF0Y2hlcjpkaXNwYXRjaCcsIEBjaGFuZ2VVUkxcblxuICAgIG1lZGlhdG9yLnNldEhhbmRsZXIgJ3JvdXRlcjpyb3V0ZScsIEByb3V0ZSwgdGhpc1xuICAgIG1lZGlhdG9yLnNldEhhbmRsZXIgJ3JvdXRlcjpyZXZlcnNlJywgQHJldmVyc2UsIHRoaXNcblxuICAgIEBjcmVhdGVIaXN0b3J5KClcblxuICBvbGRFdmVudEVycm9yOiAtPlxuICAgIHRocm93IG5ldyBFcnJvciAnIXJvdXRlcjpyb3V0ZSBhbmQgIXJvdXRlcjpyb3V0ZUJ5TmFtZSBldmVudHMgd2VyZSByZW1vdmVkLlxuICBVc2UgYENoYXBsaW4udXRpbHMucmVkaXJlY3RUb2AnXG5cbiAgb2xkVVJMRXZlbnRFcnJvcjogLT5cbiAgICB0aHJvdyBuZXcgRXJyb3IgJyFyb3V0ZXI6Y2hhbmdlVVJMIGV2ZW50IHdhcyByZW1vdmVkLidcblxuICAjIENyZWF0ZSBhIEJhY2tib25lLkhpc3RvcnkgaW5zdGFuY2UuXG4gIGNyZWF0ZUhpc3Rvcnk6IC0+XG4gICAgQmFja2JvbmUuaGlzdG9yeSA9IG5ldyBIaXN0b3J5KClcblxuICBzdGFydEhpc3Rvcnk6IC0+XG4gICAgIyBTdGFydCB0aGUgQmFja2JvbmUuSGlzdG9yeSBpbnN0YW5jZSB0byBzdGFydCByb3V0aW5nLlxuICAgICMgVGhpcyBzaG91bGQgYmUgY2FsbGVkIGFmdGVyIGFsbCByb3V0ZXMgaGF2ZSBiZWVuIHJlZ2lzdGVyZWQuXG4gICAgQmFja2JvbmUuaGlzdG9yeS5zdGFydCBAb3B0aW9uc1xuXG4gICMgU3RvcCB0aGUgY3VycmVudCBCYWNrYm9uZS5IaXN0b3J5IGluc3RhbmNlIGZyb20gb2JzZXJ2aW5nIFVSTCBjaGFuZ2VzLlxuICBzdG9wSGlzdG9yeTogLT5cbiAgICBCYWNrYm9uZS5oaXN0b3J5LnN0b3AoKSBpZiBCYWNrYm9uZS5IaXN0b3J5LnN0YXJ0ZWRcblxuICAjIFNlYXJjaCB0aHJvdWdoIGJhY2tib25lIGhpc3RvcnkgaGFuZGxlcnMuXG4gIGZpbmRIYW5kbGVyOiAocHJlZGljYXRlKSAtPlxuICAgIGZvciBoYW5kbGVyIGluIEJhY2tib25lLmhpc3RvcnkuaGFuZGxlcnMgd2hlbiBwcmVkaWNhdGUgaGFuZGxlclxuICAgICAgcmV0dXJuIGhhbmRsZXJcblxuICAjIENvbm5lY3QgYW4gYWRkcmVzcyB3aXRoIGEgY29udHJvbGxlciBhY3Rpb24uXG4gICMgQ3JlYXRlcyBhIHJvdXRlIG9uIHRoZSBCYWNrYm9uZS5IaXN0b3J5IGluc3RhbmNlLlxuICBtYXRjaDogKHBhdHRlcm4sIHRhcmdldCwgb3B0aW9ucyA9IHt9KSA9PlxuICAgIGlmIGFyZ3VtZW50cy5sZW5ndGggaXMgMiBhbmQgdGFyZ2V0IGFuZCB0eXBlb2YgdGFyZ2V0IGlzICdvYmplY3QnXG4gICAgICAjIEhhbmRsZXMgY2FzZXMgbGlrZSBgbWF0Y2ggJ3VybCcsIGNvbnRyb2xsZXI6ICdjJywgYWN0aW9uOiAnYSdgLlxuICAgICAge2NvbnRyb2xsZXIsIGFjdGlvbn0gPSBvcHRpb25zID0gdGFyZ2V0XG4gICAgICB1bmxlc3MgY29udHJvbGxlciBhbmQgYWN0aW9uXG4gICAgICAgIHRocm93IG5ldyBFcnJvciAnUm91dGVyI21hdGNoIG11c3QgcmVjZWl2ZSBlaXRoZXIgdGFyZ2V0IG9yICcgK1xuICAgICAgICAgICdvcHRpb25zLmNvbnRyb2xsZXIgJiBvcHRpb25zLmFjdGlvbidcbiAgICBlbHNlXG4gICAgICAjIEhhbmRsZXMgYG1hdGNoICd1cmwnLCAnYyNhJ2AuXG4gICAgICB7Y29udHJvbGxlciwgYWN0aW9ufSA9IG9wdGlvbnNcbiAgICAgIGlmIGNvbnRyb2xsZXIgb3IgYWN0aW9uXG4gICAgICAgIHRocm93IG5ldyBFcnJvciAnUm91dGVyI21hdGNoIGNhbm5vdCB1c2UgYm90aCB0YXJnZXQgYW5kICcgK1xuICAgICAgICAgICdvcHRpb25zLmNvbnRyb2xsZXIgLyBvcHRpb25zLmFjdGlvbidcbiAgICAgICMgU2VwYXJhdGUgdGFyZ2V0IGludG8gY29udHJvbGxlciBhbmQgY29udHJvbGxlciBhY3Rpb24uXG4gICAgICBbY29udHJvbGxlciwgYWN0aW9uXSA9IHRhcmdldC5zcGxpdCAnIydcblxuICAgICMgTGV0IGVhY2ggbWF0Y2ggY2FsbCBwcm92aWRlIGl0cyBvd24gdHJhaWxpbmcgb3B0aW9uIHRvIGFwcHJvcHJpYXRlIFJvdXRlLlxuICAgICMgUGFzcyB0cmFpbGluZyB2YWx1ZSBmcm9tIHRoZSBSb3V0ZXIgYnkgZGVmYXVsdC5cbiAgICBfLmRlZmF1bHRzIG9wdGlvbnMsIHRyYWlsaW5nOiBAb3B0aW9ucy50cmFpbGluZ1xuXG4gICAgIyBDcmVhdGUgdGhlIHJvdXRlLlxuICAgIHJvdXRlID0gbmV3IFJvdXRlIHBhdHRlcm4sIGNvbnRyb2xsZXIsIGFjdGlvbiwgb3B0aW9uc1xuICAgICMgUmVnaXN0ZXIgdGhlIHJvdXRlIGF0IHRoZSBCYWNrYm9uZS5IaXN0b3J5IGluc3RhbmNlLlxuICAgICMgRG9u4oCZdCB1c2UgQmFja2JvbmUuaGlzdG9yeS5yb3V0ZSBoZXJlIGJlY2F1c2UgaXQgY2FsbHNcbiAgICAjIGhhbmRsZXJzLnVuc2hpZnQsIGluc2VydGluZyB0aGUgaGFuZGxlciBhdCB0aGUgdG9wIG9mIHRoZSBsaXN0LlxuICAgICMgU2luY2Ugd2Ugd2FudCByb3V0ZXMgdG8gbWF0Y2ggaW4gdGhlIG9yZGVyIHRoZXkgd2VyZSBzcGVjaWZpZWQsXG4gICAgIyB3ZeKAmXJlIGFwcGVuZGluZyB0aGUgcm91dGUgYXQgdGhlIGVuZC5cbiAgICBCYWNrYm9uZS5oaXN0b3J5LmhhbmRsZXJzLnB1c2gge3JvdXRlLCBjYWxsYmFjazogcm91dGUuaGFuZGxlcn1cbiAgICByb3V0ZVxuXG4gICMgUm91dGUgYSBnaXZlbiBVUkwgcGF0aCBtYW51YWxseS4gUmV0dXJucyB3aGV0aGVyIGEgcm91dGUgbWF0Y2hlZC5cbiAgIyBUaGlzIGxvb2tzIHF1aXRlIGxpa2UgQmFja2JvbmUuSGlzdG9yeTo6bG9hZFVybCBidXQgaXRcbiAgIyBhY2NlcHRzIGFuIGFic29sdXRlIFVSTCB3aXRoIGEgbGVhZGluZyBzbGFzaCAoZS5nLiAvZm9vKVxuICAjIGFuZCBwYXNzZXMgdGhlIHJvdXRpbmcgb3B0aW9ucyB0byB0aGUgY2FsbGJhY2sgZnVuY3Rpb24uXG4gIHJvdXRlOiAocGF0aERlc2MsIHBhcmFtcywgb3B0aW9ucykgLT5cbiAgICAjIFRyeSB0byBleHRyYWN0IGFuIFVSTCBmcm9tIHRoZSBwYXRoRGVzYyBpZiBpdCdzIGEgaGFzaC5cbiAgICBpZiBwYXRoRGVzYyBhbmQgdHlwZW9mIHBhdGhEZXNjIGlzICdvYmplY3QnXG4gICAgICBwYXRoID0gcGF0aERlc2MudXJsXG4gICAgICBwYXJhbXMgPSBwYXRoRGVzYy5wYXJhbXMgaWYgbm90IHBhcmFtcyBhbmQgcGF0aERlc2MucGFyYW1zXG5cbiAgICBwYXJhbXMgPSBpZiBBcnJheS5pc0FycmF5IHBhcmFtc1xuICAgICAgcGFyYW1zLnNsaWNlKClcbiAgICBlbHNlXG4gICAgICBfLmV4dGVuZCB7fSwgcGFyYW1zXG5cbiAgICAjIEFjY2VwdCBwYXRoIHRvIGJlIGdpdmVuIHZpYSBVUkwgd3JhcHBlZCBpbiBvYmplY3QsXG4gICAgIyBvciBpbXBsaWNpdGx5IHZpYSByb3V0ZSBuYW1lLCBvciBleHBsaWNpdGx5IHZpYSBvYmplY3QuXG4gICAgaWYgcGF0aD9cbiAgICAgICMgUmVtb3ZlIGxlYWRpbmcgc3ViZGlyIGFuZCBoYXNoIG9yIHNsYXNoLlxuICAgICAgcGF0aCA9IHBhdGgucmVwbGFjZSBAcmVtb3ZlUm9vdCwgJydcblxuICAgICAgIyBGaW5kIGEgbWF0Y2hpbmcgcm91dGUuXG4gICAgICBoYW5kbGVyID0gQGZpbmRIYW5kbGVyIChoYW5kbGVyKSAtPiBoYW5kbGVyLnJvdXRlLnRlc3QgcGF0aFxuXG4gICAgICAjIE9wdGlvbnMgaXMgdGhlIHNlY29uZCBhcmd1bWVudCBpbiB0aGlzIGNhc2UuXG4gICAgICBvcHRpb25zID0gcGFyYW1zXG4gICAgICBwYXJhbXMgPSBudWxsXG4gICAgZWxzZVxuICAgICAgb3B0aW9ucyA9IF8uZXh0ZW5kIHt9LCBvcHRpb25zXG5cbiAgICAgICMgRmluZCBhIHJvdXRlIHVzaW5nIGEgcGFzc2VkIHZpYSBwYXRoRGVzYyBzdHJpbmcgcm91dGUgbmFtZS5cbiAgICAgIGhhbmRsZXIgPSBAZmluZEhhbmRsZXIgKGhhbmRsZXIpIC0+XG4gICAgICAgIGlmIGhhbmRsZXIucm91dGUubWF0Y2hlcyBwYXRoRGVzY1xuICAgICAgICAgIHBhcmFtcyA9IGhhbmRsZXIucm91dGUubm9ybWFsaXplUGFyYW1zIHBhcmFtc1xuICAgICAgICAgIHJldHVybiB0cnVlIGlmIHBhcmFtc1xuICAgICAgICBmYWxzZVxuXG4gICAgaWYgaGFuZGxlclxuICAgICAgIyBVcGRhdGUgdGhlIFVSTCBwcm9ncmFtbWF0aWNhbGx5IGFmdGVyIHJvdXRpbmcuXG4gICAgICBfLmRlZmF1bHRzIG9wdGlvbnMsIGNoYW5nZVVSTDogdHJ1ZVxuXG4gICAgICBwYXRoUGFyYW1zID0gaWYgcGF0aD8gdGhlbiBwYXRoIGVsc2UgcGFyYW1zXG4gICAgICBoYW5kbGVyLmNhbGxiYWNrIHBhdGhQYXJhbXMsIG9wdGlvbnNcbiAgICAgIHRydWVcbiAgICBlbHNlXG4gICAgICB0aHJvdyBuZXcgRXJyb3IgJ1JvdXRlciNyb3V0ZTogcmVxdWVzdCB3YXMgbm90IHJvdXRlZCdcblxuICAjIEZpbmQgdGhlIFVSTCBmb3IgZ2l2ZW4gY3JpdGVyaWEgdXNpbmcgdGhlIHJlZ2lzdGVyZWQgcm91dGVzIGFuZFxuICAjIHByb3ZpZGVkIHBhcmFtZXRlcnMuIFRoZSBjcml0ZXJpYSBtYXkgYmUganVzdCB0aGUgbmFtZSBvZiBhIHJvdXRlXG4gICMgb3IgYW4gb2JqZWN0IGNvbnRhaW5pbmcgdGhlIG5hbWUsIGNvbnRyb2xsZXIsIGFuZC9vciBhY3Rpb24uXG4gICMgV2FybmluZzogdGhpcyBpcyB1c3VhbGx5ICoqaG90KiogY29kZSBpbiB0ZXJtcyBvZiBwZXJmb3JtYW5jZS5cbiAgIyBSZXR1cm5zIHRoZSBVUkwgc3RyaW5nIG9yIGZhbHNlLlxuICByZXZlcnNlOiAoY3JpdGVyaWEsIHBhcmFtcywgcXVlcnkpIC0+XG4gICAgcm9vdCA9IEBvcHRpb25zLnJvb3RcblxuICAgIGlmIHBhcmFtcz8gYW5kIHR5cGVvZiBwYXJhbXMgaXNudCAnb2JqZWN0J1xuICAgICAgdGhyb3cgbmV3IFR5cGVFcnJvciAnUm91dGVyI3JldmVyc2U6IHBhcmFtcyBtdXN0IGJlIGFuIGFycmF5IG9yIGFuICcgK1xuICAgICAgICAnb2JqZWN0J1xuXG4gICAgIyBGaXJzdCBmaWx0ZXIgdGhlIHJvdXRlIGhhbmRsZXJzIHRvIHRob3NlIHRoYXQgYXJlIG9mIHRoZSBzYW1lIG5hbWUuXG4gICAgaGFuZGxlcnMgPSBCYWNrYm9uZS5oaXN0b3J5LmhhbmRsZXJzXG4gICAgZm9yIGhhbmRsZXIgaW4gaGFuZGxlcnMgd2hlbiBoYW5kbGVyLnJvdXRlLm1hdGNoZXMgY3JpdGVyaWFcbiAgICAgICMgQXR0ZW1wdCB0byByZXZlcnNlIHVzaW5nIHRoZSBwcm92aWRlZCBwYXJhbWV0ZXIgaGFzaC5cbiAgICAgIHJldmVyc2VkID0gaGFuZGxlci5yb3V0ZS5yZXZlcnNlIHBhcmFtcywgcXVlcnlcblxuICAgICAgIyBSZXR1cm4gdGhlIHVybCBpZiB3ZSBnb3QgYSB2YWxpZCBvbmU7IGVsc2Ugd2UgY29udGludWUgb24uXG4gICAgICBpZiByZXZlcnNlZCBpc250IGZhbHNlXG4gICAgICAgIHVybCA9IGlmIHJvb3QgdGhlbiByb290ICsgcmV2ZXJzZWQgZWxzZSByZXZlcnNlZFxuICAgICAgICByZXR1cm4gdXJsXG5cbiAgICAjIFdlIGRpZG4ndCBnZXQgYW55dGhpbmcuXG4gICAgdGhyb3cgbmV3IEVycm9yICdSb3V0ZXIjcmV2ZXJzZTogaW52YWxpZCByb3V0ZSBjcml0ZXJpYSBzcGVjaWZpZWQ6ICcgK1xuICAgICAgXCIje0pTT04uc3RyaW5naWZ5IGNyaXRlcmlhfVwiXG5cbiAgIyBDaGFuZ2UgdGhlIGN1cnJlbnQgVVJMLCBhZGQgYSBoaXN0b3J5IGVudHJ5LlxuICBjaGFuZ2VVUkw6IChjb250cm9sbGVyLCBwYXJhbXMsIHJvdXRlLCBvcHRpb25zKSAtPlxuICAgIHJldHVybiB1bmxlc3Mgcm91dGUucGF0aD8gYW5kIG9wdGlvbnM/LmNoYW5nZVVSTFxuXG4gICAgdXJsID0gcm91dGUucGF0aCArIGlmIHJvdXRlLnF1ZXJ5IHRoZW4gXCI/I3tyb3V0ZS5xdWVyeX1cIiBlbHNlICcnXG5cbiAgICBuYXZpZ2F0ZU9wdGlvbnMgPVxuICAgICAgIyBEbyBub3QgdHJpZ2dlciBvciByZXBsYWNlIHBlciBkZWZhdWx0LlxuICAgICAgdHJpZ2dlcjogb3B0aW9ucy50cmlnZ2VyIGlzIHRydWVcbiAgICAgIHJlcGxhY2U6IG9wdGlvbnMucmVwbGFjZSBpcyB0cnVlXG5cbiAgICAjIE5hdmlnYXRlIHRvIHRoZSBwYXNzZWQgVVJMIGFuZCBmb3J3YXJkIG9wdGlvbnMgdG8gQmFja2JvbmUuXG4gICAgQmFja2JvbmUuaGlzdG9yeS5uYXZpZ2F0ZSB1cmwsIG5hdmlnYXRlT3B0aW9uc1xuXG4gICMgRGlzcG9zYWxcbiAgIyAtLS0tLS0tLVxuXG4gIGRpc3Bvc2VkOiBmYWxzZVxuXG4gIGRpc3Bvc2U6IC0+XG4gICAgcmV0dXJuIGlmIEBkaXNwb3NlZFxuXG4gICAgIyBTdG9wIEJhY2tib25lLkhpc3RvcnkgaW5zdGFuY2UgYW5kIHJlbW92ZSBpdC5cbiAgICBAc3RvcEhpc3RvcnkoKVxuICAgIGRlbGV0ZSBCYWNrYm9uZS5oaXN0b3J5XG5cbiAgICBAdW5zdWJzY3JpYmVBbGxFdmVudHMoKVxuXG4gICAgbWVkaWF0b3IucmVtb3ZlSGFuZGxlcnMgdGhpc1xuXG4gICAgIyBGaW5pc2hlZC5cbiAgICBAZGlzcG9zZWQgPSB0cnVlXG5cbiAgICAjIFlvdeKAmXJlIGZyb3plbiB3aGVuIHlvdXIgaGVhcnTigJlzIG5vdCBvcGVuLlxuICAgIE9iamVjdC5mcmVlemUgdGhpc1xuIiwiJ3VzZSBzdHJpY3QnXG5cbiMgQmFja3dhcmRzLWNvbXBhdGliaWxpdHkgbW9kdWxlXG4jIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuXG5tb2R1bGUuZXhwb3J0cyA9XG4gIHByb3BlcnR5RGVzY3JpcHRvcnM6IHllcyIsIid1c2Ugc3RyaWN0J1xuXG4jIFNpbXBsZSBmaW5pdGUgc3RhdGUgbWFjaGluZSBmb3Igc3luY2hyb25pemF0aW9uIG9mIG1vZGVscy9jb2xsZWN0aW9uc1xuIyBUaHJlZSBzdGF0ZXM6IHVuc3luY2VkLCBzeW5jaW5nIGFuZCBzeW5jZWRcbiMgU2V2ZXJhbCB0cmFuc2l0aW9ucyBiZXR3ZWVuIHRoZW1cbiMgRmlyZXMgQmFja2JvbmUgZXZlbnRzIG9uIGV2ZXJ5IHRyYW5zaXRpb25cbiMgKHVuc3luY2VkLCBzeW5jaW5nLCBzeW5jZWQ7IHN5bmNTdGF0ZUNoYW5nZSlcbiMgUHJvdmlkZXMgc2hvcnRjdXQgbWV0aG9kcyB0byBjYWxsIGhhbmRsZXJzIHdoZW4gYSBnaXZlbiBzdGF0ZSBpcyByZWFjaGVkXG4jIChuYW1lZCBhZnRlciB0aGUgZXZlbnRzIGFib3ZlKVxuXG5VTlNZTkNFRCA9ICd1bnN5bmNlZCdcblNZTkNJTkcgID0gJ3N5bmNpbmcnXG5TWU5DRUQgICA9ICdzeW5jZWQnXG5cblNUQVRFX0NIQU5HRSA9ICdzeW5jU3RhdGVDaGFuZ2UnXG5cblN5bmNNYWNoaW5lID1cbiAgX3N5bmNTdGF0ZTogVU5TWU5DRURcbiAgX3ByZXZpb3VzU3luY1N0YXRlOiBudWxsXG5cbiAgIyBHZXQgdGhlIGN1cnJlbnQgc3RhdGVcbiAgIyAtLS0tLS0tLS0tLS0tLS0tLS0tLS1cblxuICBzeW5jU3RhdGU6IC0+XG4gICAgQF9zeW5jU3RhdGVcblxuICBpc1Vuc3luY2VkOiAtPlxuICAgIEBfc3luY1N0YXRlIGlzIFVOU1lOQ0VEXG5cbiAgaXNTeW5jZWQ6IC0+XG4gICAgQF9zeW5jU3RhdGUgaXMgU1lOQ0VEXG5cbiAgaXNTeW5jaW5nOiAtPlxuICAgIEBfc3luY1N0YXRlIGlzIFNZTkNJTkdcblxuICAjIFRyYW5zaXRpb25zXG4gICMgLS0tLS0tLS0tLS1cblxuICB1bnN5bmM6IC0+XG4gICAgaWYgQF9zeW5jU3RhdGUgaW4gW1NZTkNJTkcsIFNZTkNFRF1cbiAgICAgIEBfcHJldmlvdXNTeW5jID0gQF9zeW5jU3RhdGVcbiAgICAgIEBfc3luY1N0YXRlID0gVU5TWU5DRURcbiAgICAgIEB0cmlnZ2VyIEBfc3luY1N0YXRlLCB0aGlzLCBAX3N5bmNTdGF0ZVxuICAgICAgQHRyaWdnZXIgU1RBVEVfQ0hBTkdFLCB0aGlzLCBAX3N5bmNTdGF0ZVxuICAgICMgd2hlbiBVTlNZTkNFRCBkbyBub3RoaW5nXG4gICAgcmV0dXJuXG5cbiAgYmVnaW5TeW5jOiAtPlxuICAgIGlmIEBfc3luY1N0YXRlIGluIFtVTlNZTkNFRCwgU1lOQ0VEXVxuICAgICAgQF9wcmV2aW91c1N5bmMgPSBAX3N5bmNTdGF0ZVxuICAgICAgQF9zeW5jU3RhdGUgPSBTWU5DSU5HXG4gICAgICBAdHJpZ2dlciBAX3N5bmNTdGF0ZSwgdGhpcywgQF9zeW5jU3RhdGVcbiAgICAgIEB0cmlnZ2VyIFNUQVRFX0NIQU5HRSwgdGhpcywgQF9zeW5jU3RhdGVcbiAgICAjIHdoZW4gU1lOQ0lORyBkbyBub3RoaW5nXG4gICAgcmV0dXJuXG5cbiAgZmluaXNoU3luYzogLT5cbiAgICBpZiBAX3N5bmNTdGF0ZSBpcyBTWU5DSU5HXG4gICAgICBAX3ByZXZpb3VzU3luYyA9IEBfc3luY1N0YXRlXG4gICAgICBAX3N5bmNTdGF0ZSA9IFNZTkNFRFxuICAgICAgQHRyaWdnZXIgQF9zeW5jU3RhdGUsIHRoaXMsIEBfc3luY1N0YXRlXG4gICAgICBAdHJpZ2dlciBTVEFURV9DSEFOR0UsIHRoaXMsIEBfc3luY1N0YXRlXG4gICAgIyB3aGVuIFNZTkNFRCwgVU5TWU5DRUQgZG8gbm90aGluZ1xuICAgIHJldHVyblxuXG4gIGFib3J0U3luYzogLT5cbiAgICBpZiBAX3N5bmNTdGF0ZSBpcyBTWU5DSU5HXG4gICAgICBAX3N5bmNTdGF0ZSA9IEBfcHJldmlvdXNTeW5jXG4gICAgICBAX3ByZXZpb3VzU3luYyA9IEBfc3luY1N0YXRlXG4gICAgICBAdHJpZ2dlciBAX3N5bmNTdGF0ZSwgdGhpcywgQF9zeW5jU3RhdGVcbiAgICAgIEB0cmlnZ2VyIFNUQVRFX0NIQU5HRSwgdGhpcywgQF9zeW5jU3RhdGVcbiAgICAjIHdoZW4gVU5TWU5DRUQsIFNZTkNFRCBkbyBub3RoaW5nXG4gICAgcmV0dXJuXG5cbiMgQ3JlYXRlIHNob3J0Y3V0IG1ldGhvZHMgdG8gYmluZCBhIGhhbmRsZXIgdG8gYSBzdGF0ZSBjaGFuZ2VcbiMgLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cblxuZm9yIGV2ZW50IGluIFtVTlNZTkNFRCwgU1lOQ0lORywgU1lOQ0VELCBTVEFURV9DSEFOR0VdXG4gIGRvIChldmVudCkgLT5cbiAgICBTeW5jTWFjaGluZVtldmVudF0gPSAoY2FsbGJhY2ssIGNvbnRleHQgPSB0aGlzKSAtPlxuICAgICAgQG9uIGV2ZW50LCBjYWxsYmFjaywgY29udGV4dFxuICAgICAgY2FsbGJhY2suY2FsbChjb250ZXh0KSBpZiBAX3N5bmNTdGF0ZSBpcyBldmVudFxuXG4jIFlvdeKAmXJlIGZyb3plbiB3aGVuIHlvdXIgaGVhcnTigJlzIG5vdCBvcGVuLlxuT2JqZWN0LmZyZWV6ZSBTeW5jTWFjaGluZVxuXG4jIFJldHVybiBvdXIgY3JlYXRpb24uXG5tb2R1bGUuZXhwb3J0cyA9IFN5bmNNYWNoaW5lXG4iLCIndXNlIHN0cmljdCdcblxuIyBVdGlsaXRpZXNcbiMgLS0tLS0tLS0tXG5cbnV0aWxzID1cbiAgaXNFbXB0eTogKG9iamVjdCkgLT5cbiAgICBub3QgT2JqZWN0LmdldE93blByb3BlcnR5TmFtZXMob2JqZWN0KS5sZW5ndGhcblxuICAjIFNpbXBsZSBkdWNrLXR5cGluZyBzZXJpYWxpemVyIGZvciBtb2RlbHMgYW5kIGNvbGxlY3Rpb25zLlxuICBzZXJpYWxpemU6IChkYXRhKSAtPlxuICAgIGlmIHR5cGVvZiBkYXRhLnNlcmlhbGl6ZSBpcyAnZnVuY3Rpb24nXG4gICAgICBkYXRhLnNlcmlhbGl6ZSgpXG4gICAgZWxzZSBpZiB0eXBlb2YgZGF0YS50b0pTT04gaXMgJ2Z1bmN0aW9uJ1xuICAgICAgZGF0YS50b0pTT04oKVxuICAgIGVsc2VcbiAgICAgIHRocm93IG5ldyBUeXBlRXJyb3IgJ3V0aWxzLnNlcmlhbGl6ZTogVW5rbm93biBkYXRhIHdhcyBwYXNzZWQnXG5cbiAgIyBNYWtlIHByb3BlcnRpZXMgcmVhZG9ubHkgYW5kIG5vdCBjb25maWd1cmFibGVcbiAgIyB1c2luZyBFQ01BU2NyaXB0IDUgcHJvcGVydHkgZGVzY3JpcHRvcnMuXG4gIHJlYWRvbmx5OiAob2JqZWN0LCBrZXlzLi4uKSAtPlxuICAgIGZvciBrZXkgaW4ga2V5c1xuICAgICAgT2JqZWN0LmRlZmluZVByb3BlcnR5IG9iamVjdCwga2V5LFxuICAgICAgICB2YWx1ZTogb2JqZWN0W2tleV1cbiAgICAgICAgd3JpdGFibGU6IGZhbHNlXG4gICAgICAgIGNvbmZpZ3VyYWJsZTogZmFsc2VcbiAgICAjIEFsd2F5cyByZXR1cm4gYHRydWVgIGZvciBjb21wYXRpYmlsaXR5IHJlYXNvbnMuXG4gICAgdHJ1ZVxuXG4gICMgR2V0IHRoZSB3aG9sZSBjaGFpbiBvZiBvYmplY3QgcHJvdG90eXBlcy5cbiAgZ2V0UHJvdG90eXBlQ2hhaW46IChvYmplY3QpIC0+XG4gICAgY2hhaW4gPSBbXVxuICAgIHdoaWxlIG9iamVjdCA9IE9iamVjdC5nZXRQcm90b3R5cGVPZiBvYmplY3RcbiAgICAgIGNoYWluLnVuc2hpZnQgb2JqZWN0XG4gICAgY2hhaW5cblxuICAjIEdldCBhbGwgcHJvcGVydHkgdmVyc2lvbnMgZnJvbSBvYmplY3TigJlzIHByb3RvdHlwZSBjaGFpbi5cbiAgIyBFLmcuIGlmIG9iamVjdDEgJiBvYmplY3QyIGhhdmUgYGtleWAgYW5kIG9iamVjdDIgaW5oZXJpdHMgZnJvbVxuICAjIG9iamVjdDEsIGl0IHdpbGwgZ2V0IFtvYmplY3QxcHJvcCwgb2JqZWN0MnByb3BdLlxuICBnZXRBbGxQcm9wZXJ0eVZlcnNpb25zOiAob2JqZWN0LCBrZXkpIC0+XG4gICAgcmVzdWx0ID0gW11cbiAgICBmb3IgcHJvdG8gaW4gdXRpbHMuZ2V0UHJvdG90eXBlQ2hhaW4gb2JqZWN0XG4gICAgICB2YWx1ZSA9IHByb3RvW2tleV1cbiAgICAgIGlmIHZhbHVlIGFuZCB2YWx1ZSBub3QgaW4gcmVzdWx0XG4gICAgICAgIHJlc3VsdC5wdXNoIHZhbHVlXG4gICAgcmVzdWx0XG5cbiAgIyBTdHJpbmcgSGVscGVyc1xuICAjIC0tLS0tLS0tLS0tLS0tXG5cbiAgIyBVcGNhc2UgdGhlIGZpcnN0IGNoYXJhY3Rlci5cbiAgdXBjYXNlOiAoc3RyKSAtPlxuICAgIHN0ci5jaGFyQXQoMCkudG9VcHBlckNhc2UoKSArIHN0ci5zbGljZSAxXG5cbiAgIyBFc2NhcGVzIGEgc3RyaW5nIHRvIHVzZSBpbiBhIHJlZ2V4LlxuICBlc2NhcGVSZWdFeHA6IChzdHIpIC0+XG4gICAgcmV0dXJuIFN0cmluZyhzdHIgb3IgJycpLnJlcGxhY2UgLyhbLiorP149IToke30oKXxbXFxdXFwvXFxcXF0pL2csICdcXFxcJDEnXG5cblxuICAjIEV2ZW50IGhhbmRsaW5nIGhlbHBlcnNcbiAgIyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgIyBSZXR1cm5zIHdoZXRoZXIgYSBtb2RpZmllciBrZXkgaXMgcHJlc3NlZCBkdXJpbmcgYSBrZXlwcmVzcyBvciBtb3VzZSBjbGljay5cbiAgbW9kaWZpZXJLZXlQcmVzc2VkOiAoZXZlbnQpIC0+XG4gICAgZXZlbnQuc2hpZnRLZXkgb3IgZXZlbnQuYWx0S2V5IG9yIGV2ZW50LmN0cmxLZXkgb3IgZXZlbnQubWV0YUtleVxuXG4gICMgUm91dGluZyBIZWxwZXJzXG4gICMgLS0tLS0tLS0tLS0tLS0tXG5cbiAgIyBSZXR1cm5zIHRoZSB1cmwgZm9yIGEgbmFtZWQgcm91dGUgYW5kIGFueSBwYXJhbXMuXG4gIHJldmVyc2U6IChjcml0ZXJpYSwgcGFyYW1zLCBxdWVyeSkgLT5cbiAgICByZXF1aXJlKCcuLi9tZWRpYXRvcicpLmV4ZWN1dGUgJ3JvdXRlcjpyZXZlcnNlJyxcbiAgICAgIGNyaXRlcmlhLCBwYXJhbXMsIHF1ZXJ5XG5cbiAgIyBSZWRpcmVjdHMgdG8gVVJMLCByb3V0ZSBuYW1lIG9yIGNvbnRyb2xsZXIgYW5kIGFjdGlvbiBwYWlyLlxuICByZWRpcmVjdFRvOiAocGF0aERlc2MsIHBhcmFtcywgb3B0aW9ucykgLT5cbiAgICByZXF1aXJlKCcuLi9tZWRpYXRvcicpLmV4ZWN1dGUgJ3JvdXRlcjpyb3V0ZScsXG4gICAgICBwYXRoRGVzYywgcGFyYW1zLCBvcHRpb25zXG5cbiAgIyBEZXRlcm1pbmVzIG1vZHVsZSBzeXN0ZW0gYW5kIHJldHVybnMgbW9kdWxlIGxvYWRlciBmdW5jdGlvbi5cbiAgbG9hZE1vZHVsZTogZG8gLT5cbiAgICB7ZGVmaW5lLCByZXF1aXJlfSA9IHdpbmRvd1xuXG4gICAgaWYgdHlwZW9mIGRlZmluZSBpcyAnZnVuY3Rpb24nIGFuZCBkZWZpbmUuYW1kXG4gICAgICAobW9kdWxlTmFtZSwgaGFuZGxlcikgLT5cbiAgICAgICAgcmVxdWlyZSBbbW9kdWxlTmFtZV0sIGhhbmRsZXJcbiAgICBlbHNlXG4gICAgICBlbnF1ZXVlID0gc2V0SW1tZWRpYXRlID8gc2V0VGltZW91dFxuXG4gICAgICAobW9kdWxlTmFtZSwgaGFuZGxlcikgLT5cbiAgICAgICAgZW5xdWV1ZSAtPiBoYW5kbGVyIHJlcXVpcmUgbW9kdWxlTmFtZVxuXG4gICMgRE9NIGhlbHBlcnNcbiAgIyAtLS0tLS0tLS0tLVxuXG4gIG1hdGNoZXNTZWxlY3RvcjogZG8gLT5cbiAgICBlbCA9IGRvY3VtZW50LmRvY3VtZW50RWxlbWVudFxuICAgIG1hdGNoZXMgPSBlbC5tYXRjaGVzIG9yXG4gICAgZWwubXNNYXRjaGVzU2VsZWN0b3Igb3JcbiAgICBlbC5tb3pNYXRjaGVzU2VsZWN0b3Igb3JcbiAgICBlbC53ZWJraXRNYXRjaGVzU2VsZWN0b3JcblxuICAgIC0+IG1hdGNoZXMuY2FsbCBhcmd1bWVudHMuLi5cblxuICAjIFF1ZXJ5IHBhcmFtZXRlcnMgSGVscGVyc1xuICAjIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuXG4gIHF1ZXJ5c3RyaW5nOlxuXG4gICAgIyBSZXR1cm5zIGEgcXVlcnkgc3RyaW5nIGZyb20gYSBoYXNoLlxuICAgIHN0cmluZ2lmeTogKHBhcmFtcyA9IHt9LCByZXBsYWNlcikgLT5cbiAgICAgIGlmIHR5cGVvZiByZXBsYWNlciBpc250ICdmdW5jdGlvbidcbiAgICAgICAgcmVwbGFjZXIgPSAoa2V5LCB2YWx1ZSkgLT5cbiAgICAgICAgICBpZiBBcnJheS5pc0FycmF5IHZhbHVlXG4gICAgICAgICAgICB2YWx1ZS5tYXAgKHZhbHVlKSAtPiB7a2V5LCB2YWx1ZX1cbiAgICAgICAgICBlbHNlIGlmIHZhbHVlP1xuICAgICAgICAgICAge2tleSwgdmFsdWV9XG5cbiAgICAgIE9iamVjdC5rZXlzKHBhcmFtcykucmVkdWNlIChwYWlycywga2V5KSAtPlxuICAgICAgICBwYWlyID0gcmVwbGFjZXIga2V5LCBwYXJhbXNba2V5XVxuICAgICAgICBwYWlycy5jb25jYXQgcGFpciBvciBbXVxuICAgICAgLCBbXVxuICAgICAgLm1hcCAoe2tleSwgdmFsdWV9KSAtPlxuICAgICAgICBba2V5LCB2YWx1ZV0ubWFwKGVuY29kZVVSSUNvbXBvbmVudCkuam9pbiAnPSdcbiAgICAgIC5qb2luICcmJ1xuXG4gICAgIyBSZXR1cm5zIGEgaGFzaCB3aXRoIHF1ZXJ5IHBhcmFtZXRlcnMgZnJvbSBhIHF1ZXJ5IHN0cmluZy5cbiAgICBwYXJzZTogKHN0cmluZyA9ICcnLCByZXZpdmVyKSAtPlxuICAgICAgaWYgdHlwZW9mIHJldml2ZXIgaXNudCAnZnVuY3Rpb24nXG4gICAgICAgIHJldml2ZXIgPSAoa2V5LCB2YWx1ZSkgLT4ge2tleSwgdmFsdWV9XG5cbiAgICAgIHN0cmluZyA9IHN0cmluZy5zbGljZSAxICsgc3RyaW5nLmluZGV4T2YgJz8nXG4gICAgICBzdHJpbmcuc3BsaXQoJyYnKS5yZWR1Y2UgKHBhcmFtcywgcGFpcikgLT5cbiAgICAgICAgcGFydHMgPSBwYWlyLnNwbGl0KCc9JykubWFwIGRlY29kZVVSSUNvbXBvbmVudFxuICAgICAgICB7a2V5LCB2YWx1ZX0gPSByZXZpdmVyKHBhcnRzLi4uKSBvciB7fVxuXG4gICAgICAgIGlmIHZhbHVlPyB0aGVuIHBhcmFtc1trZXldID1cbiAgICAgICAgICBpZiBwYXJhbXMuaGFzT3duUHJvcGVydHkga2V5XG4gICAgICAgICAgICBbXS5jb25jYXQgcGFyYW1zW2tleV0sIHZhbHVlXG4gICAgICAgICAgZWxzZVxuICAgICAgICAgICAgdmFsdWVcblxuICAgICAgICBwYXJhbXNcbiAgICAgICwge31cblxuXG4jIEJhY2t3YXJkcy1jb21wYXRpYmlsaXR5IG1ldGhvZHNcbiMgLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuXG51dGlscy5iZWdldCA9IE9iamVjdC5jcmVhdGVcbnV0aWxzLmluZGV4T2YgPSAoYXJyYXksIGl0ZW0pIC0+IGFycmF5LmluZGV4T2YgaXRlbVxudXRpbHMuaXNBcnJheSA9IEFycmF5LmlzQXJyYXlcbnV0aWxzLnF1ZXJ5UGFyYW1zID0gdXRpbHMucXVlcnlzdHJpbmdcblxuIyBGaW5pc2hcbiMgLS0tLS0tXG5cbiMgU2VhbCB0aGUgdXRpbHMgb2JqZWN0LlxuT2JqZWN0LnNlYWwgdXRpbHNcblxuIyBSZXR1cm4gb3VyIGNyZWF0aW9uLlxubW9kdWxlLmV4cG9ydHMgPSB1dGlsc1xuIiwiJ3VzZSBzdHJpY3QnXG5cbkJhY2tib25lID0gcmVxdWlyZSAnYmFja2JvbmUnXG51dGlscyA9IHJlcXVpcmUgJy4vbGliL3V0aWxzJ1xuXG4jIE1lZGlhdG9yXG4jIC0tLS0tLS0tXG5cbiMgVGhlIG1lZGlhdG9yIGlzIGEgc2ltcGxlIG9iamVjdCBhbGwgb3RoZXIgbW9kdWxlcyB1c2UgdG8gY29tbXVuaWNhdGVcbiMgd2l0aCBlYWNoIG90aGVyLiBJdCBpbXBsZW1lbnRzIHRoZSBQdWJsaXNoL1N1YnNjcmliZSBwYXR0ZXJuLlxuI1xuIyBBZGRpdGlvbmFsbHksIGl0IGhvbGRzIG9iamVjdHMgd2hpY2ggbmVlZCB0byBiZSBzaGFyZWQgYmV0d2VlbiBtb2R1bGVzLlxuIyBJbiB0aGlzIGNhc2UsIGEgYHVzZXJgIHByb3BlcnR5IGlzIGNyZWF0ZWQgZm9yIGdldHRpbmcgdGhlIHVzZXIgb2JqZWN0XG4jIGFuZCBhIGBzZXRVc2VyYCBtZXRob2QgZm9yIHNldHRpbmcgdGhlIHVzZXIuXG4jXG4jIFRoaXMgbW9kdWxlIHJldHVybnMgdGhlIHNpbmdsZXRvbiBvYmplY3QuIFRoaXMgaXMgdGhlXG4jIGFwcGxpY2F0aW9uLXdpZGUgbWVkaWF0b3IgeW91IG1pZ2h0IGxvYWQgaW50byBtb2R1bGVzXG4jIHdoaWNoIG5lZWQgdG8gdGFsayB0byBvdGhlciBtb2R1bGVzIHVzaW5nIFB1Ymxpc2gvU3Vic2NyaWJlLlxuXG4jIFN0YXJ0IHdpdGggYSBzaW1wbGUgb2JqZWN0XG5tZWRpYXRvciA9IHt9XG5cbiMgUHVibGlzaCAvIFN1YnNjcmliZVxuIyAtLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiMgTWl4aW4gZXZlbnQgbWV0aG9kcyBmcm9tIEJhY2tib25lLkV2ZW50cyxcbiMgY3JlYXRlIFB1Ymxpc2gvU3Vic2NyaWJlIGFsaWFzZXMuXG5tZWRpYXRvci5zdWJzY3JpYmUgICAgID0gbWVkaWF0b3Iub24gICAgICA9IEJhY2tib25lLkV2ZW50cy5vblxubWVkaWF0b3Iuc3Vic2NyaWJlT25jZSA9IG1lZGlhdG9yLm9uY2UgICAgPSBCYWNrYm9uZS5FdmVudHMub25jZVxubWVkaWF0b3IudW5zdWJzY3JpYmUgICA9IG1lZGlhdG9yLm9mZiAgICAgPSBCYWNrYm9uZS5FdmVudHMub2ZmXG5tZWRpYXRvci5wdWJsaXNoICAgICAgID0gbWVkaWF0b3IudHJpZ2dlciA9IEJhY2tib25lLkV2ZW50cy50cmlnZ2VyXG5cbiMgSW5pdGlhbGl6ZSBhbiBlbXB0eSBjYWxsYmFjayBsaXN0IHNvIHdlIG1pZ2h0IHNlYWwgdGhlIG1lZGlhdG9yIGxhdGVyLlxubWVkaWF0b3IuX2NhbGxiYWNrcyA9IG51bGxcblxuIyBSZXF1ZXN0IC8gUmVzcG9uc2VcbiMgLS3igJMtLS0tLS0tLS0tLS0tLS1cblxuIyBMaWtlIHB1YiAvIHN1YiwgYnV0IHdpdGggb25lIGhhbmRsZXIuIFNpbWlsYXIgdG8gT09QIG1lc3NhZ2UgcGFzc2luZy5cblxuaGFuZGxlcnMgPSBtZWRpYXRvci5faGFuZGxlcnMgPSB7fVxuXG4jIFNldHMgYSBoYW5kbGVyIGZ1bmN0aW9uIGZvciByZXF1ZXN0cy5cbm1lZGlhdG9yLnNldEhhbmRsZXIgPSAobmFtZSwgbWV0aG9kLCBpbnN0YW5jZSkgLT5cbiAgaGFuZGxlcnNbbmFtZV0gPSB7aW5zdGFuY2UsIG1ldGhvZH1cblxuIyBSZXRyaWV2ZXMgYSBoYW5kbGVyIGZ1bmN0aW9uIGFuZCBleGVjdXRlcyBpdC5cbm1lZGlhdG9yLmV4ZWN1dGUgPSAob3B0aW9ucywgYXJncy4uLikgLT5cbiAgaWYgb3B0aW9ucyBhbmQgdHlwZW9mIG9wdGlvbnMgaXMgJ29iamVjdCdcbiAgICB7bmFtZSwgc2lsZW50fSA9IG9wdGlvbnNcbiAgZWxzZVxuICAgIG5hbWUgPSBvcHRpb25zXG4gIGhhbmRsZXIgPSBoYW5kbGVyc1tuYW1lXVxuICBpZiBoYW5kbGVyXG4gICAgaGFuZGxlci5tZXRob2QuYXBwbHkgaGFuZGxlci5pbnN0YW5jZSwgYXJnc1xuICBlbHNlIGlmIG5vdCBzaWxlbnRcbiAgICB0aHJvdyBuZXcgRXJyb3IgXCJtZWRpYXRvci5leGVjdXRlOiAje25hbWV9IGhhbmRsZXIgaXMgbm90IGRlZmluZWRcIlxuXG4jIFJlbW92ZXMgaGFuZGxlcnMgZnJvbSBzdG9yYWdlLlxuIyBDYW4gdGFrZSBubyBhcmdzLCBsaXN0IG9mIGhhbmRsZXIgbmFtZXMgb3IgaW5zdGFuY2Ugd2hpY2ggaGFkIGJvdW5kIGhhbmRsZXJzLlxubWVkaWF0b3IucmVtb3ZlSGFuZGxlcnMgPSAoaW5zdGFuY2VPck5hbWVzKSAtPlxuICB1bmxlc3MgaW5zdGFuY2VPck5hbWVzXG4gICAgbWVkaWF0b3IuX2hhbmRsZXJzID0ge31cblxuICBpZiBBcnJheS5pc0FycmF5IGluc3RhbmNlT3JOYW1lc1xuICAgIGZvciBuYW1lIGluIGluc3RhbmNlT3JOYW1lc1xuICAgICAgZGVsZXRlIGhhbmRsZXJzW25hbWVdXG4gIGVsc2VcbiAgICBmb3IgbmFtZSwgaGFuZGxlciBvZiBoYW5kbGVycyB3aGVuIGhhbmRsZXIuaW5zdGFuY2UgaXMgaW5zdGFuY2VPck5hbWVzXG4gICAgICBkZWxldGUgaGFuZGxlcnNbbmFtZV1cbiAgcmV0dXJuXG5cbiMgU2VhbGluZyB0aGUgbWVkaWF0b3JcbiMgLS0tLS0tLS0tLS0tLS0tLS0tLS1cblxuIyBBZnRlciBhZGRpbmcgYWxsIG5lZWRlZCBwcm9wZXJ0aWVzLCB5b3Ugc2hvdWxkIHNlYWwgdGhlIG1lZGlhdG9yXG4jIHVzaW5nIHRoaXMgbWV0aG9kLlxubWVkaWF0b3Iuc2VhbCA9IC0+XG4gICMgUHJldmVudCBleHRlbnNpb25zIGFuZCBtYWtlIGFsbCBwcm9wZXJ0aWVzIG5vbi1jb25maWd1cmFibGUuXG4gIE9iamVjdC5zZWFsIG1lZGlhdG9yXG5cbiMgTWFrZSBwcm9wZXJ0aWVzIHJlYWRvbmx5LlxudXRpbHMucmVhZG9ubHkgbWVkaWF0b3IsXG4gICdzdWJzY3JpYmUnLCAnc3Vic2NyaWJlT25jZScsICd1bnN1YnNjcmliZScsICdwdWJsaXNoJyxcbiAgJ3NldEhhbmRsZXInLCAnZXhlY3V0ZScsICdyZW1vdmVIYW5kbGVycycsICdzZWFsJ1xuXG4jIFJldHVybiBvdXIgY3JlYXRpb24uXG5tb2R1bGUuZXhwb3J0cyA9IG1lZGlhdG9yXG4iLCIndXNlIHN0cmljdCdcblxuXyA9IHJlcXVpcmUgJ3VuZGVyc2NvcmUnXG5CYWNrYm9uZSA9IHJlcXVpcmUgJ2JhY2tib25lJ1xuXG5Nb2RlbCA9IHJlcXVpcmUgJy4vbW9kZWwnXG5FdmVudEJyb2tlciA9IHJlcXVpcmUgJy4uL2xpYi9ldmVudF9icm9rZXInXG51dGlscyA9IHJlcXVpcmUgJy4uL2xpYi91dGlscydcblxuIyBBYnN0cmFjdCBjbGFzcyB3aGljaCBleHRlbmRzIHRoZSBzdGFuZGFyZCBCYWNrYm9uZSBjb2xsZWN0aW9uXG4jIGluIG9yZGVyIHRvIGFkZCBzb21lIGZ1bmN0aW9uYWxpdHkuXG5tb2R1bGUuZXhwb3J0cyA9IGNsYXNzIENvbGxlY3Rpb24gZXh0ZW5kcyBCYWNrYm9uZS5Db2xsZWN0aW9uXG4gICMgTWl4aW4gYW4gRXZlbnRCcm9rZXIuXG4gIF8uZXh0ZW5kIEBwcm90b3R5cGUsIEV2ZW50QnJva2VyXG5cbiAgIyBVc2UgdGhlIENoYXBsaW4gbW9kZWwgcGVyIGRlZmF1bHQsIG5vdCBCYWNrYm9uZS5Nb2RlbC5cbiAgbW9kZWw6IE1vZGVsXG5cbiAgIyBTZXJpYWxpemVzIGNvbGxlY3Rpb24uXG4gIHNlcmlhbGl6ZTogLT5cbiAgICBAbWFwIHV0aWxzLnNlcmlhbGl6ZVxuXG4gICMgRGlzcG9zYWxcbiAgIyAtLS0tLS0tLVxuXG4gIGRpc3Bvc2VkOiBmYWxzZVxuXG4gIGRpc3Bvc2U6IC0+XG4gICAgcmV0dXJuIGlmIEBkaXNwb3NlZFxuXG4gICAgIyBGaXJlIGFuIGV2ZW50IHRvIG5vdGlmeSBhc3NvY2lhdGVkIHZpZXdzLlxuICAgIEB0cmlnZ2VyICdkaXNwb3NlJywgdGhpc1xuXG4gICAgIyBFbXB0eSB0aGUgbGlzdCBzaWxlbnRseSwgYnV0IGRvIG5vdCBkaXNwb3NlIGFsbCBtb2RlbHMgc2luY2VcbiAgICAjIHRoZXkgbWlnaHQgYmUgcmVmZXJlbmNlZCBlbHNld2hlcmUuXG4gICAgQHJlc2V0IFtdLCBzaWxlbnQ6IHRydWVcblxuICAgICMgVW5iaW5kIGFsbCBnbG9iYWwgZXZlbnQgaGFuZGxlcnMuXG4gICAgQHVuc3Vic2NyaWJlQWxsRXZlbnRzKClcblxuICAgICMgVW5iaW5kIGFsbCByZWZlcmVuY2VkIGhhbmRsZXJzLlxuICAgIEBzdG9wTGlzdGVuaW5nKClcblxuICAgICMgUmVtb3ZlIGFsbCBldmVudCBoYW5kbGVycyBvbiB0aGlzIG1vZHVsZS5cbiAgICBAb2ZmKClcblxuICAgICMgUmVtb3ZlIG1vZGVsIGNvbnN0cnVjdG9yIHJlZmVyZW5jZSwgaW50ZXJuYWwgbW9kZWwgbGlzdHNcbiAgICAjIGFuZCBldmVudCBoYW5kbGVycy5cbiAgICBkZWxldGUgdGhpc1twcm9wXSBmb3IgcHJvcCBpbiBbXG4gICAgICAnbW9kZWwnLFxuICAgICAgJ21vZGVscycsICdfYnlDaWQnLFxuICAgICAgJ19jYWxsYmFja3MnXG4gICAgXVxuXG4gICAgQF9ieUlkID0ge31cblxuICAgICMgRmluaXNoZWQuXG4gICAgQGRpc3Bvc2VkID0gdHJ1ZVxuXG4gICAgIyBZb3XigJlyZSBmcm96ZW4gd2hlbiB5b3VyIGhlYXJ04oCZcyBub3Qgb3Blbi5cbiAgICBPYmplY3QuZnJlZXplIHRoaXNcbiIsIid1c2Ugc3RyaWN0J1xuXG5fID0gcmVxdWlyZSAndW5kZXJzY29yZSdcbkJhY2tib25lID0gcmVxdWlyZSAnYmFja2JvbmUnXG5FdmVudEJyb2tlciA9IHJlcXVpcmUgJy4uL2xpYi9ldmVudF9icm9rZXInXG5cbiMgUHJpdmF0ZSBoZWxwZXIgZnVuY3Rpb24gZm9yIHNlcmlhbGl6aW5nIGF0dHJpYnV0ZXMgcmVjdXJzaXZlbHksXG4jIGNyZWF0aW5nIG9iamVjdHMgd2hpY2ggZGVsZWdhdGUgdG8gdGhlIG9yaWdpbmFsIGF0dHJpYnV0ZXNcbiMgaW4gb3JkZXIgdG8gcHJvdGVjdCB0aGVtIGZyb20gY2hhbmdlcy5cbnNlcmlhbGl6ZUF0dHJpYnV0ZXMgPSAobW9kZWwsIGF0dHJpYnV0ZXMsIG1vZGVsU3RhY2spIC0+XG4gICMgQ3JlYXRlIGEgZGVsZWdhdG9yIG9iamVjdC5cbiAgZGVsZWdhdG9yID0gT2JqZWN0LmNyZWF0ZSBhdHRyaWJ1dGVzXG5cbiAgIyBBZGQgbW9kZWwgdG8gc3RhY2suXG4gIG1vZGVsU3RhY2sgPz0ge31cbiAgbW9kZWxTdGFja1ttb2RlbC5jaWRdID0gdHJ1ZVxuXG4gICMgTWFwIG1vZGVsL2NvbGxlY3Rpb24gdG8gdGhlaXIgYXR0cmlidXRlcy4gQ3JlYXRlIGEgcHJvcGVydHlcbiAgIyBvbiB0aGUgZGVsZWdhdG9yIHRoYXQgc2hhZG93cyB0aGUgb3JpZ2luYWwgYXR0cmlidXRlLlxuICBmb3Iga2V5LCB2YWx1ZSBvZiBhdHRyaWJ1dGVzXG5cbiAgICAjIEhhbmRsZSBtb2RlbHMuXG4gICAgaWYgdmFsdWUgaW5zdGFuY2VvZiBCYWNrYm9uZS5Nb2RlbFxuICAgICAgZGVsZWdhdG9yW2tleV0gPSBzZXJpYWxpemVNb2RlbEF0dHJpYnV0ZXMgdmFsdWUsIG1vZGVsLCBtb2RlbFN0YWNrXG5cbiAgICAjIEhhbmRsZSBjb2xsZWN0aW9ucy5cbiAgICBlbHNlIGlmIHZhbHVlIGluc3RhbmNlb2YgQmFja2JvbmUuQ29sbGVjdGlvblxuICAgICAgc2VyaWFsaXplZE1vZGVscyA9IFtdXG4gICAgICBmb3Igb3RoZXJNb2RlbCBpbiB2YWx1ZS5tb2RlbHNcbiAgICAgICAgc2VyaWFsaXplZE1vZGVscy5wdXNoKFxuICAgICAgICAgIHNlcmlhbGl6ZU1vZGVsQXR0cmlidXRlcyhvdGhlck1vZGVsLCBtb2RlbCwgbW9kZWxTdGFjaylcbiAgICAgICAgKVxuICAgICAgZGVsZWdhdG9yW2tleV0gPSBzZXJpYWxpemVkTW9kZWxzXG5cbiAgIyBSZW1vdmUgbW9kZWwgZnJvbSBzdGFjay5cbiAgZGVsZXRlIG1vZGVsU3RhY2tbbW9kZWwuY2lkXVxuXG4gICMgUmV0dXJuIHRoZSBkZWxlZ2F0b3IuXG4gIGRlbGVnYXRvclxuXG4jIFNlcmlhbGl6ZSB0aGUgYXR0cmlidXRlcyBvZiBhIGdpdmVuIG1vZGVsXG4jIGluIHRoZSBjb250ZXh0IG9mIGEgZ2l2ZW4gdHJlZS5cbnNlcmlhbGl6ZU1vZGVsQXR0cmlidXRlcyA9IChtb2RlbCwgY3VycmVudE1vZGVsLCBtb2RlbFN0YWNrKSAtPlxuICAjIE51bGxpZnkgY2lyY3VsYXIgcmVmZXJlbmNlcy5cbiAgcmV0dXJuIG51bGwgaWYgbW9kZWwgaXMgY3VycmVudE1vZGVsIG9yIG1vZGVsLmNpZCBvZiBtb2RlbFN0YWNrXG4gICMgU2VyaWFsaXplIHJlY3Vyc2l2ZWx5LlxuICBhdHRyaWJ1dGVzID0gaWYgdHlwZW9mIG1vZGVsLmdldEF0dHJpYnV0ZXMgaXMgJ2Z1bmN0aW9uJ1xuICAgICMgQ2hhcGxpbiBtb2RlbHMuXG4gICAgbW9kZWwuZ2V0QXR0cmlidXRlcygpXG4gIGVsc2VcbiAgICAjIEJhY2tib25lIG1vZGVscy5cbiAgICBtb2RlbC5hdHRyaWJ1dGVzXG4gIHNlcmlhbGl6ZUF0dHJpYnV0ZXMgbW9kZWwsIGF0dHJpYnV0ZXMsIG1vZGVsU3RhY2tcblxuXG4jIEFic3RyYWN0aW9uIHRoYXQgYWRkcyBzb21lIHVzZWZ1bCBmdW5jdGlvbmFsaXR5IHRvIGJhY2tib25lIG1vZGVsLlxubW9kdWxlLmV4cG9ydHMgPSBjbGFzcyBNb2RlbCBleHRlbmRzIEJhY2tib25lLk1vZGVsXG4gICMgTWl4aW4gYW4gRXZlbnRCcm9rZXIuXG4gIF8uZXh0ZW5kIEBwcm90b3R5cGUsIEV2ZW50QnJva2VyXG5cbiAgIyBUaGlzIG1ldGhvZCBpcyB1c2VkIHRvIGdldCB0aGUgYXR0cmlidXRlcyBmb3IgdGhlIHZpZXcgdGVtcGxhdGVcbiAgIyBhbmQgbWlnaHQgYmUgb3ZlcndyaXR0ZW4gYnkgZGVjb3JhdG9ycyB3aGljaCBjYW5ub3QgY3JlYXRlIGFcbiAgIyBwcm9wZXIgYGF0dHJpYnV0ZXNgIGdldHRlciBkdWUgdG8gRUNNQVNjcmlwdCAzIGxpbWl0cy5cbiAgZ2V0QXR0cmlidXRlczogLT5cbiAgICBAYXR0cmlidXRlc1xuXG4gICMgUmV0dXJuIGFuIG9iamVjdCB3aGljaCBkZWxlZ2F0ZXMgdG8gdGhlIGF0dHJpYnV0ZXNcbiAgIyAoaS5lLiBhbiBvYmplY3Qgd2hpY2ggaGFzIHRoZSBhdHRyaWJ1dGVzIGFzIHByb3RvdHlwZSlcbiAgIyBzbyBwcmltaXRpdmUgdmFsdWVzIG1pZ2h0IGJlIGFkZGVkIGFuZCBhbHRlcmVkIHNhZmVseS5cbiAgIyBNYXAgbW9kZWxzIHRvIHRoZWlyIGF0dHJpYnV0ZXMsIHJlY3Vyc2l2ZWx5LlxuICBzZXJpYWxpemU6IC0+XG4gICAgc2VyaWFsaXplQXR0cmlidXRlcyB0aGlzLCBAZ2V0QXR0cmlidXRlcygpXG5cbiAgIyBEaXNwb3NhbFxuICAjIC0tLS0tLS0tXG5cbiAgZGlzcG9zZWQ6IGZhbHNlXG5cbiAgZGlzcG9zZTogLT5cbiAgICByZXR1cm4gaWYgQGRpc3Bvc2VkXG5cbiAgICAjIEZpcmUgYW4gZXZlbnQgdG8gbm90aWZ5IGFzc29jaWF0ZWQgY29sbGVjdGlvbnMgYW5kIHZpZXdzLlxuICAgIEB0cmlnZ2VyICdkaXNwb3NlJywgdGhpc1xuXG4gICAgQGNvbGxlY3Rpb24/LnJlbW92ZT8gdGhpcywgc2lsZW50OiB0cnVlXG5cbiAgICAjIFVuYmluZCBhbGwgZ2xvYmFsIGV2ZW50IGhhbmRsZXJzLlxuICAgIEB1bnN1YnNjcmliZUFsbEV2ZW50cygpXG5cbiAgICAjIFVuYmluZCBhbGwgcmVmZXJlbmNlZCBoYW5kbGVycy5cbiAgICBAc3RvcExpc3RlbmluZygpXG5cbiAgICAjIFJlbW92ZSBhbGwgZXZlbnQgaGFuZGxlcnMgb24gdGhpcyBtb2R1bGUuXG4gICAgQG9mZigpXG5cbiAgICAjIFJlbW92ZSB0aGUgY29sbGVjdGlvbiByZWZlcmVuY2UsIGludGVybmFsIGF0dHJpYnV0ZSBoYXNoZXNcbiAgICAjIGFuZCBldmVudCBoYW5kbGVycy5cbiAgICBkZWxldGUgdGhpc1twcm9wXSBmb3IgcHJvcCBpbiBbXG4gICAgICAnY29sbGVjdGlvbicsXG4gICAgICAnYXR0cmlidXRlcycsICdjaGFuZ2VkJywgJ2RlZmF1bHRzJyxcbiAgICAgICdfZXNjYXBlZEF0dHJpYnV0ZXMnLCAnX3ByZXZpb3VzQXR0cmlidXRlcycsXG4gICAgICAnX3NpbGVudCcsICdfcGVuZGluZycsXG4gICAgICAnX2NhbGxiYWNrcydcbiAgICBdXG5cbiAgICAjIEZpbmlzaGVkLlxuICAgIEBkaXNwb3NlZCA9IHRydWVcblxuICAgICMgWW914oCZcmUgZnJvemVuIHdoZW4geW91ciBoZWFydOKAmXMgbm90IG9wZW4uXG4gICAgT2JqZWN0LmZyZWV6ZSB0aGlzXG4iLCIndXNlIHN0cmljdCdcblxuQmFja2JvbmUgPSByZXF1aXJlICdiYWNrYm9uZSdcblxuVmlldyA9IHJlcXVpcmUgJy4vdmlldydcbnV0aWxzID0gcmVxdWlyZSAnLi4vbGliL3V0aWxzJ1xuXG4jIFNob3J0Y3V0IHRvIGFjY2VzcyB0aGUgRE9NIG1hbmlwdWxhdGlvbiBsaWJyYXJ5LlxueyR9ID0gQmFja2JvbmVcblxuZmlsdGVyQ2hpbGRyZW4gPSAobm9kZUxpc3QsIHNlbGVjdG9yKSAtPlxuICByZXR1cm4gbm9kZUxpc3QgdW5sZXNzIHNlbGVjdG9yXG4gIGZvciBub2RlIGluIG5vZGVMaXN0IHdoZW4gdXRpbHMubWF0Y2hlc1NlbGVjdG9yIG5vZGUsIHNlbGVjdG9yXG4gICAgbm9kZVxuXG50b2dnbGVFbGVtZW50ID0gZG8gLT5cbiAgaWYgJFxuICAgIChlbGVtLCB2aXNpYmxlKSAtPiBlbGVtLnRvZ2dsZSB2aXNpYmxlXG4gIGVsc2VcbiAgICAoZWxlbSwgdmlzaWJsZSkgLT5cbiAgICAgIGVsZW0uc3R5bGUuZGlzcGxheSA9IChpZiB2aXNpYmxlIHRoZW4gJycgZWxzZSAnbm9uZScpXG5cbmFkZENsYXNzID0gZG8gLT5cbiAgaWYgJFxuICAgIChlbGVtLCBjbHMpIC0+IGVsZW0uYWRkQ2xhc3MgY2xzXG4gIGVsc2VcbiAgICAoZWxlbSwgY2xzKSAtPiBlbGVtLmNsYXNzTGlzdC5hZGQgY2xzXG5cbnN0YXJ0QW5pbWF0aW9uID0gZG8gLT5cbiAgaWYgJFxuICAgIChlbGVtLCB1c2VDc3NBbmltYXRpb24sIGNscykgLT5cbiAgICAgIGlmIHVzZUNzc0FuaW1hdGlvblxuICAgICAgICBhZGRDbGFzcyBlbGVtLCBjbHNcbiAgICAgIGVsc2VcbiAgICAgICAgZWxlbS5jc3MgJ29wYWNpdHknLCAwXG4gIGVsc2VcbiAgICAoZWxlbSwgdXNlQ3NzQW5pbWF0aW9uLCBjbHMpIC0+XG4gICAgICBpZiB1c2VDc3NBbmltYXRpb25cbiAgICAgICAgYWRkQ2xhc3MgZWxlbSwgY2xzXG4gICAgICBlbHNlXG4gICAgICAgIGVsZW0uc3R5bGUub3BhY2l0eSA9IDBcblxuZW5kQW5pbWF0aW9uID0gZG8gLT5cbiAgaWYgJFxuICAgIChlbGVtLCBkdXJhdGlvbikgLT4gZWxlbS5hbmltYXRlIHtvcGFjaXR5OiAxfSwgZHVyYXRpb25cbiAgZWxzZVxuICAgIChlbGVtLCBkdXJhdGlvbikgLT5cbiAgICAgIGVsZW0uc3R5bGUudHJhbnNpdGlvbiA9IFwib3BhY2l0eSAje2R1cmF0aW9ufW1zXCJcbiAgICAgIGVsZW0uc3R5bGUub3BhY2l0eSA9IDFcblxuaW5zZXJ0VmlldyA9IGRvIC0+XG4gIGlmICRcbiAgICAobGlzdCwgdmlld0VsLCBwb3NpdGlvbiwgbGVuZ3RoLCBpdGVtU2VsZWN0b3IpIC0+XG4gICAgICBpbnNlcnRJbk1pZGRsZSA9ICgwIDwgcG9zaXRpb24gPCBsZW5ndGgpXG4gICAgICBpc0VuZCA9IChsZW5ndGgpIC0+IGxlbmd0aCBpcyAwIG9yIHBvc2l0aW9uID49IGxlbmd0aFxuXG4gICAgICBpZiBpbnNlcnRJbk1pZGRsZSBvciBpdGVtU2VsZWN0b3JcbiAgICAgICAgIyBHZXQgdGhlIGNoaWxkcmVuIHdoaWNoIG9yaWdpbmF0ZSBmcm9tIGl0ZW0gdmlld3MuXG4gICAgICAgIGNoaWxkcmVuID0gbGlzdC5jaGlsZHJlbiBpdGVtU2VsZWN0b3JcbiAgICAgICAgY2hpbGRyZW5MZW5ndGggPSBjaGlsZHJlbi5sZW5ndGhcblxuICAgICAgICAjIENoZWNrIGlmIGl0IG5lZWRzIHRvIGJlIGluc2VydGVkLlxuICAgICAgICB1bmxlc3MgY2hpbGRyZW5bcG9zaXRpb25dIGlzIHZpZXdFbFxuICAgICAgICAgIGlmIGlzRW5kIGNoaWxkcmVuTGVuZ3RoXG4gICAgICAgICAgICAjIEluc2VydCBhdCB0aGUgZW5kLlxuICAgICAgICAgICAgbGlzdC5hcHBlbmQgdmlld0VsXG4gICAgICAgICAgZWxzZVxuICAgICAgICAgICAgIyBJbnNlcnQgYXQgdGhlIHJpZ2h0IHBvc2l0aW9uLlxuICAgICAgICAgICAgaWYgcG9zaXRpb24gaXMgMFxuICAgICAgICAgICAgICBjaGlsZHJlbi5lcShwb3NpdGlvbikuYmVmb3JlIHZpZXdFbFxuICAgICAgICAgICAgZWxzZVxuICAgICAgICAgICAgICBjaGlsZHJlbi5lcShwb3NpdGlvbiAtIDEpLmFmdGVyIHZpZXdFbFxuICAgICAgZWxzZVxuICAgICAgICBtZXRob2QgPSBpZiBpc0VuZCBsZW5ndGggdGhlbiAnYXBwZW5kJyBlbHNlICdwcmVwZW5kJ1xuICAgICAgICBsaXN0W21ldGhvZF0gdmlld0VsXG4gIGVsc2VcbiAgICAobGlzdCwgdmlld0VsLCBwb3NpdGlvbiwgbGVuZ3RoLCBpdGVtU2VsZWN0b3IpIC0+XG4gICAgICBpbnNlcnRJbk1pZGRsZSA9ICgwIDwgcG9zaXRpb24gPCBsZW5ndGgpXG4gICAgICBpc0VuZCA9IChsZW5ndGgpIC0+IGxlbmd0aCBpcyAwIG9yIHBvc2l0aW9uIGlzIGxlbmd0aFxuXG4gICAgICBpZiBpbnNlcnRJbk1pZGRsZSBvciBpdGVtU2VsZWN0b3JcbiAgICAgICAgIyBHZXQgdGhlIGNoaWxkcmVuIHdoaWNoIG9yaWdpbmF0ZSBmcm9tIGl0ZW0gdmlld3MuXG4gICAgICAgIGNoaWxkcmVuID0gZmlsdGVyQ2hpbGRyZW4gbGlzdC5jaGlsZHJlbiwgaXRlbVNlbGVjdG9yXG4gICAgICAgIGNoaWxkcmVuTGVuZ3RoID0gY2hpbGRyZW4ubGVuZ3RoXG5cbiAgICAgICAgIyBDaGVjayBpZiBpdCBuZWVkcyB0byBiZSBpbnNlcnRlZC5cbiAgICAgICAgdW5sZXNzIGNoaWxkcmVuW3Bvc2l0aW9uXSBpcyB2aWV3RWxcbiAgICAgICAgICBpZiBpc0VuZCBjaGlsZHJlbkxlbmd0aFxuICAgICAgICAgICAgIyBJbnNlcnQgYXQgdGhlIGVuZC5cbiAgICAgICAgICAgIGxpc3QuYXBwZW5kQ2hpbGQgdmlld0VsXG4gICAgICAgICAgZWxzZSBpZiBwb3NpdGlvbiBpcyAwXG4gICAgICAgICAgICAjIEluc2VydCBhdCB0aGUgcmlnaHQgcG9zaXRpb24uXG4gICAgICAgICAgICBsaXN0Lmluc2VydEJlZm9yZSB2aWV3RWwsIGNoaWxkcmVuW3Bvc2l0aW9uXVxuICAgICAgICAgIGVsc2VcbiAgICAgICAgICAgIGxhc3QgPSBjaGlsZHJlbltwb3NpdGlvbiAtIDFdXG4gICAgICAgICAgICBpZiBsaXN0Lmxhc3RDaGlsZCBpcyBsYXN0XG4gICAgICAgICAgICAgIGxpc3QuYXBwZW5kQ2hpbGQgdmlld0VsXG4gICAgICAgICAgICBlbHNlXG4gICAgICAgICAgICAgIGxpc3QuaW5zZXJ0QmVmb3JlIHZpZXdFbCwgbGFzdC5uZXh0RWxlbWVudFNpYmxpbmdcbiAgICAgIGVsc2UgaWYgaXNFbmQgbGVuZ3RoXG4gICAgICAgIGxpc3QuYXBwZW5kQ2hpbGQgdmlld0VsXG4gICAgICBlbHNlXG4gICAgICAgIGxpc3QuaW5zZXJ0QmVmb3JlIHZpZXdFbCwgbGlzdC5maXJzdENoaWxkXG5cbiMgR2VuZXJhbCBjbGFzcyBmb3IgcmVuZGVyaW5nIENvbGxlY3Rpb25zLlxuIyBEZXJpdmUgdGhpcyBjbGFzcyBhbmQgZGVjbGFyZSBhdCBsZWFzdCBgaXRlbVZpZXdgIG9yIG92ZXJyaWRlXG4jIGBpbml0SXRlbVZpZXdgLiBgaW5pdEl0ZW1WaWV3YCBnZXRzIGFuIGl0ZW0gbW9kZWwgYW5kIHNob3VsZCBpbnN0YW50aWF0ZVxuIyBhbmQgcmV0dXJuIGEgY29ycmVzcG9uZGluZyBpdGVtIHZpZXcuXG5tb2R1bGUuZXhwb3J0cyA9IGNsYXNzIENvbGxlY3Rpb25WaWV3IGV4dGVuZHMgVmlld1xuICAjIENvbmZpZ3VyYXRpb24gb3B0aW9uc1xuICAjID09PT09PT09PT09PT09PT09PT09PVxuXG4gICMgVGhlc2Ugb3B0aW9ucyBtYXkgYmUgb3ZlcndyaXR0ZW4gaW4gZGVyaXZlZCBjbGFzc2VzLlxuXG4gICMgQSBjbGFzcyBvZiBpdGVtIGluIGNvbGxlY3Rpb24uXG4gICMgVGhpcyBwcm9wZXJ0eSBoYXMgdG8gYmUgb3ZlcnJpZGRlbiBieSBhIGRlcml2ZWQgY2xhc3MuXG4gIGl0ZW1WaWV3OiBudWxsXG5cbiAgIyBBdXRvbWF0aWMgcmVuZGVyaW5nXG4gICMgLS0tLS0tLS0tLS0tLS0tLS0tLVxuXG4gICMgUGVyIGRlZmF1bHQsIHJlbmRlciB0aGUgdmlldyBpdHNlbGYgYW5kIGFsbCBpdGVtcyBvbiBjcmVhdGlvbi5cbiAgYXV0b1JlbmRlcjogdHJ1ZVxuICByZW5kZXJJdGVtczogdHJ1ZVxuXG4gICMgQW5pbWF0aW9uXG4gICMgLS0tLS0tLS0tXG5cbiAgIyBXaGVuIG5ldyBpdGVtcyBhcmUgYWRkZWQsIHRoZWlyIHZpZXdzIGFyZSBmYWRlZCBpbi5cbiAgIyBBbmltYXRpb24gZHVyYXRpb24gaW4gbWlsbGlzZWNvbmRzIChzZXQgdG8gMCB0byBkaXNhYmxlIGZhZGUgaW4pXG4gIGFuaW1hdGlvbkR1cmF0aW9uOiA1MDBcblxuICAjIEJ5IGRlZmF1bHQsIGZhZGluZyBpbiBpcyBkb25lIGJ5IGphdmFzY3JpcHQgZnVuY3Rpb24gd2hpY2ggY2FuIGJlXG4gICMgc2xvdyBvbiBtb2JpbGUgZGV2aWNlcy4gQ1NTIGFuaW1hdGlvbnMgYXJlIGZhc3RlcixcbiAgIyBidXQgcmVxdWlyZSB1c2Vy4oCZcyBtYW51YWwgZGVmaW5pdGlvbnMuXG4gIHVzZUNzc0FuaW1hdGlvbjogZmFsc2VcblxuICAjIENTUyBjbGFzc2VzIHRoYXQgd2lsbCBiZSB1c2VkIHdoZW4gaGlkaW5nIC8gc2hvd2luZyBjaGlsZCB2aWV3cy5cbiAgYW5pbWF0aW9uU3RhcnRDbGFzczogJ2FuaW1hdGVkLWl0ZW0tdmlldydcbiAgYW5pbWF0aW9uRW5kQ2xhc3M6ICdhbmltYXRlZC1pdGVtLXZpZXctZW5kJ1xuXG4gICMgU2VsZWN0b3JzIGFuZCBlbGVtZW50c1xuICAjIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cblxuICAjIEEgY29sbGVjdGlvbiB2aWV3IG1heSBoYXZlIGEgdGVtcGxhdGUgYW5kIHVzZSBvbmUgb2YgaXRzIGNoaWxkIGVsZW1lbnRzXG4gICMgYXMgdGhlIGNvbnRhaW5lciBvZiB0aGUgaXRlbSB2aWV3cy4gSWYgeW91IHNwZWNpZnkgYGxpc3RTZWxlY3RvcmAsIHRoZVxuICAjIGl0ZW0gdmlld3Mgd2lsbCBiZSBhcHBlbmRlZCB0byB0aGlzIGVsZW1lbnQuIElmIGVtcHR5LCAkZWwgaXMgdXNlZC5cbiAgbGlzdFNlbGVjdG9yOiBudWxsXG5cbiAgIyBUaGUgYWN0dWFsIGVsZW1lbnQgd2hpY2ggaXMgZmV0Y2hlZCB1c2luZyBgbGlzdFNlbGVjdG9yYFxuICAkbGlzdDogbnVsbFxuXG4gICMgU2VsZWN0b3IgZm9yIGEgZmFsbGJhY2sgZWxlbWVudCB3aGljaCBpcyBzaG93biBpZiB0aGUgY29sbGVjdGlvbiBpcyBlbXB0eS5cbiAgZmFsbGJhY2tTZWxlY3RvcjogbnVsbFxuXG4gICMgVGhlIGFjdHVhbCBlbGVtZW50IHdoaWNoIGlzIGZldGNoZWQgdXNpbmcgYGZhbGxiYWNrU2VsZWN0b3JgXG4gICRmYWxsYmFjazogbnVsbFxuXG4gICMgU2VsZWN0b3IgZm9yIGEgbG9hZGluZyBpbmRpY2F0b3IgZWxlbWVudCB3aGljaCBpcyBzaG93blxuICAjIHdoaWxlIHRoZSBjb2xsZWN0aW9uIGlzIHN5bmNpbmcuXG4gIGxvYWRpbmdTZWxlY3RvcjogbnVsbFxuXG4gICMgVGhlIGFjdHVhbCBlbGVtZW50IHdoaWNoIGlzIGZldGNoZWQgdXNpbmcgYGxvYWRpbmdTZWxlY3RvcmBcbiAgJGxvYWRpbmc6IG51bGxcblxuICAjIFNlbGVjdG9yIHdoaWNoIGlkZW50aWZpZXMgY2hpbGQgZWxlbWVudHMgYmVsb25naW5nIHRvIGNvbGxlY3Rpb25cbiAgIyBJZiBlbXB0eSwgYWxsIGNoaWxkcmVuIG9mICRsaXN0IGFyZSBjb25zaWRlcmVkLlxuICBpdGVtU2VsZWN0b3I6IG51bGxcblxuICAjIEZpbHRlcmluZ1xuICAjIC0tLS0tLS0tLVxuXG4gICMgVGhlIGZpbHRlciBmdW5jdGlvbiwgaWYgYW55LlxuICBmaWx0ZXJlcjogbnVsbFxuXG4gICMgQSBmdW5jdGlvbiB0aGF0IHdpbGwgYmUgZXhlY3V0ZWQgYWZ0ZXIgZWFjaCBmaWx0ZXIuXG4gICMgSGlkZXMgZXhjbHVkZWQgaXRlbXMgYnkgZGVmYXVsdC5cbiAgZmlsdGVyQ2FsbGJhY2s6ICh2aWV3LCBpbmNsdWRlZCkgLT5cbiAgICB2aWV3LiRlbC5zdG9wIHRydWUsIHRydWUgaWYgJFxuICAgIHRvZ2dsZUVsZW1lbnQgKGlmICQgdGhlbiB2aWV3LiRlbCBlbHNlIHZpZXcuZWwpLCBpbmNsdWRlZFxuXG4gICMgVmlldyBsaXN0c1xuICAjIC0tLS0tLS0tLS1cblxuICAjIFRyYWNrIGEgbGlzdCBvZiB0aGUgdmlzaWJsZSB2aWV3cy5cbiAgdmlzaWJsZUl0ZW1zOiBudWxsXG5cbiAgIyBDb25zdHJ1Y3RvclxuICAjIC0tLS0tLS0tLS0tXG5cbiAgb3B0aW9uTmFtZXM6IFZpZXc6Om9wdGlvbk5hbWVzLmNvbmNhdCBbJ3JlbmRlckl0ZW1zJywgJ2l0ZW1WaWV3J11cblxuICBjb25zdHJ1Y3RvcjogKG9wdGlvbnMpIC0+XG4gICAgIyBJbml0aWFsaXplIGxpc3QgZm9yIHZpc2libGUgaXRlbXMuXG4gICAgQHZpc2libGVJdGVtcyA9IFtdXG5cbiAgICBzdXBlclxuXG4gICMgSW5pdGlhbGl6YXRpb25cbiAgIyAtLS0tLS0tLS0tLS0tLVxuXG4gIGluaXRpYWxpemU6IChvcHRpb25zID0ge30pIC0+XG4gICAgIyBEb24ndCBjYWxsIHN1cGVyOyB0aGUgYmFzZSB2aWV3J3MgaW5pdGlhbGl6ZSBpcyBhIG5vLW9wLlxuXG4gICAgIyBTdGFydCBvYnNlcnZpbmcgdGhlIGNvbGxlY3Rpb24uXG4gICAgQGFkZENvbGxlY3Rpb25MaXN0ZW5lcnMoKVxuXG4gICAgIyBBcHBseSBhIGZpbHRlciBpZiBvbmUgcHJvdmlkZWQuXG4gICAgQGZpbHRlciBvcHRpb25zLmZpbHRlcmVyIGlmIG9wdGlvbnMuZmlsdGVyZXI/XG5cbiAgIyBCaW5kaW5nIG9mIGNvbGxlY3Rpb24gbGlzdGVuZXJzLlxuICBhZGRDb2xsZWN0aW9uTGlzdGVuZXJzOiAtPlxuICAgIEBsaXN0ZW5UbyBAY29sbGVjdGlvbiwgJ2FkZCcsIEBpdGVtQWRkZWRcbiAgICBAbGlzdGVuVG8gQGNvbGxlY3Rpb24sICdyZW1vdmUnLCBAaXRlbVJlbW92ZWRcbiAgICBAbGlzdGVuVG8gQGNvbGxlY3Rpb24sICdyZXNldCBzb3J0JywgQGl0ZW1zUmVzZXRcblxuICAjIFJlbmRlcmluZ1xuICAjIC0tLS0tLS0tLVxuXG4gICMgT3ZlcnJpZGUgVmlldyNnZXRUZW1wbGF0ZURhdGEsIGRvbuKAmXQgc2VyaWFsaXplIGNvbGxlY3Rpb24gaXRlbXMgaGVyZS5cbiAgZ2V0VGVtcGxhdGVEYXRhOiAtPlxuICAgIHRlbXBsYXRlRGF0YSA9IHtsZW5ndGg6IEBjb2xsZWN0aW9uLmxlbmd0aH1cblxuICAgICMgSWYgdGhlIGNvbGxlY3Rpb24gaXMgYSBTeW5jTWFjaGluZSwgYWRkIGEgYHN5bmNlZGAgZmxhZy5cbiAgICBpZiB0eXBlb2YgQGNvbGxlY3Rpb24uaXNTeW5jZWQgaXMgJ2Z1bmN0aW9uJ1xuICAgICAgdGVtcGxhdGVEYXRhLnN5bmNlZCA9IEBjb2xsZWN0aW9uLmlzU3luY2VkKClcblxuICAgIHRlbXBsYXRlRGF0YVxuXG4gICMgSW4gY29udHJhc3QgdG8gbm9ybWFsIHZpZXdzLCBhIHRlbXBsYXRlIGlzIG5vdCBtYW5kYXRvcnlcbiAgIyBmb3IgQ29sbGVjdGlvblZpZXdzLiBQcm92aWRlIGFuIGVtcHR5IGBnZXRUZW1wbGF0ZUZ1bmN0aW9uYC5cbiAgZ2V0VGVtcGxhdGVGdW5jdGlvbjogLT5cblxuICAjIE1haW4gcmVuZGVyIG1ldGhvZCAoc2hvdWxkIGJlIGNhbGxlZCBvbmx5IG9uY2UpXG4gIHJlbmRlcjogLT5cbiAgICBzdXBlclxuXG4gICAgIyBTZXQgdGhlICRsaXN0IHByb3BlcnR5IHdpdGggdGhlIGFjdHVhbCBsaXN0IGNvbnRhaW5lci5cbiAgICBsaXN0U2VsZWN0b3IgPSBpZiB0eXBlb2YgQGxpc3RTZWxlY3RvciBpcyAnZnVuY3Rpb24nXG4gICAgICBAbGlzdFNlbGVjdG9yKClcbiAgICBlbHNlXG4gICAgICBAbGlzdFNlbGVjdG9yXG5cbiAgICBpZiAkXG4gICAgICBAJGxpc3QgPSBpZiBsaXN0U2VsZWN0b3IgdGhlbiBAZmluZCBsaXN0U2VsZWN0b3IgZWxzZSBAJGVsXG4gICAgZWxzZVxuICAgICAgQGxpc3QgPSBpZiBsaXN0U2VsZWN0b3IgdGhlbiBAZmluZCBAbGlzdFNlbGVjdG9yIGVsc2UgQGVsXG5cbiAgICBAaW5pdEZhbGxiYWNrKClcbiAgICBAaW5pdExvYWRpbmdJbmRpY2F0b3IoKVxuXG4gICAgIyBSZW5kZXIgYWxsIGl0ZW1zLlxuICAgIEByZW5kZXJBbGxJdGVtcygpIGlmIEByZW5kZXJJdGVtc1xuXG4gICMgQWRkaW5nIC8gUmVtb3ZpbmdcbiAgIyAtLS0tLS0tLS0tLS0tLS0tLVxuXG4gICMgV2hlbiBhbiBpdGVtIGlzIGFkZGVkLCBjcmVhdGUgYSBuZXcgdmlldyBhbmQgaW5zZXJ0IGl0LlxuICBpdGVtQWRkZWQ6IChpdGVtLCBjb2xsZWN0aW9uLCBvcHRpb25zKSA9PlxuICAgIEBpbnNlcnRWaWV3IGl0ZW0sIEByZW5kZXJJdGVtKGl0ZW0pLCBvcHRpb25zLmF0XG5cbiAgIyBXaGVuIGFuIGl0ZW0gaXMgcmVtb3ZlZCwgcmVtb3ZlIHRoZSBjb3JyZXNwb25kaW5nIHZpZXcgZnJvbSBET00gYW5kIGNhY2hlcy5cbiAgaXRlbVJlbW92ZWQ6IChpdGVtKSA9PlxuICAgIEByZW1vdmVWaWV3Rm9ySXRlbSBpdGVtXG5cbiAgIyBXaGVuIGFsbCBpdGVtcyBhcmUgcmVzZXR0ZWQsIHJlbmRlciBhbGwgYW5ldy5cbiAgaXRlbXNSZXNldDogPT5cbiAgICBAcmVuZGVyQWxsSXRlbXMoKVxuXG4gICMgRmFsbGJhY2sgbWVzc2FnZSB3aGVuIHRoZSBjb2xsZWN0aW9uIGlzIGVtcHR5XG4gICMgLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgaW5pdEZhbGxiYWNrOiAtPlxuICAgIHJldHVybiB1bmxlc3MgQGZhbGxiYWNrU2VsZWN0b3JcblxuICAgICMgU2V0IHRoZSAkZmFsbGJhY2sgcHJvcGVydHkuXG4gICAgaWYgJFxuICAgICAgQCRmYWxsYmFjayA9IEBmaW5kIEBmYWxsYmFja1NlbGVjdG9yXG4gICAgZWxzZVxuICAgICAgQGZhbGxiYWNrID0gQGZpbmQgQGZhbGxiYWNrU2VsZWN0b3JcblxuICAgICMgTGlzdGVuIGZvciB2aXNpYmxlIGl0ZW1zIGNoYW5nZXMuXG4gICAgQG9uICd2aXNpYmlsaXR5Q2hhbmdlJywgQHRvZ2dsZUZhbGxiYWNrXG5cbiAgICAjIExpc3RlbiBmb3Igc3luYyBldmVudHMgb24gdGhlIGNvbGxlY3Rpb24uXG4gICAgQGxpc3RlblRvIEBjb2xsZWN0aW9uLCAnc3luY1N0YXRlQ2hhbmdlJywgQHRvZ2dsZUZhbGxiYWNrXG5cbiAgICAjIFNldCB2aXNpYmlsaXR5IGluaXRpYWxseS5cbiAgICBAdG9nZ2xlRmFsbGJhY2soKVxuXG4gICMgU2hvdyBmYWxsYmFjayBpZiBubyBpdGVtIGlzIHZpc2libGUgYW5kIHRoZSBjb2xsZWN0aW9uIGlzIHN5bmNlZC5cbiAgdG9nZ2xlRmFsbGJhY2s6ID0+XG4gICAgdmlzaWJsZSA9IEB2aXNpYmxlSXRlbXMubGVuZ3RoIGlzIDAgYW5kIChcbiAgICAgIGlmIHR5cGVvZiBAY29sbGVjdGlvbi5pc1N5bmNlZCBpcyAnZnVuY3Rpb24nXG4gICAgICAgICMgQ29sbGVjdGlvbiBpcyBhIFN5bmNNYWNoaW5lLlxuICAgICAgICBAY29sbGVjdGlvbi5pc1N5bmNlZCgpXG4gICAgICBlbHNlXG4gICAgICAgICMgQXNzdW1lIGl0IGlzIHN5bmNlZC5cbiAgICAgICAgdHJ1ZVxuICAgIClcbiAgICB0b2dnbGVFbGVtZW50IChpZiAkIHRoZW4gQCRmYWxsYmFjayBlbHNlIEBmYWxsYmFjayksIHZpc2libGVcblxuICAjIExvYWRpbmcgaW5kaWNhdG9yXG4gICMgLS0tLS0tLS0tLS0tLS0tLS1cblxuICBpbml0TG9hZGluZ0luZGljYXRvcjogLT5cbiAgICAjIFRoZSBsb2FkaW5nIGluZGljYXRvciBvbmx5IHdvcmtzIGZvciBDb2xsZWN0aW9uc1xuICAgICMgd2hpY2ggYXJlIFN5bmNNYWNoaW5lcy5cbiAgICByZXR1cm4gdW5sZXNzIEBsb2FkaW5nU2VsZWN0b3IgYW5kXG4gICAgICB0eXBlb2YgQGNvbGxlY3Rpb24uaXNTeW5jaW5nIGlzICdmdW5jdGlvbidcblxuICAgICMgU2V0IHRoZSAkbG9hZGluZyBwcm9wZXJ0eS5cbiAgICBpZiAkXG4gICAgICBAJGxvYWRpbmcgPSBAZmluZCBAbG9hZGluZ1NlbGVjdG9yXG4gICAgZWxzZVxuICAgICAgQGxvYWRpbmcgPSBAZmluZCBAbG9hZGluZ1NlbGVjdG9yXG5cbiAgICAjIExpc3RlbiBmb3Igc3luYyBldmVudHMgb24gdGhlIGNvbGxlY3Rpb24uXG4gICAgQGxpc3RlblRvIEBjb2xsZWN0aW9uLCAnc3luY1N0YXRlQ2hhbmdlJywgQHRvZ2dsZUxvYWRpbmdJbmRpY2F0b3JcblxuICAgICMgU2V0IHZpc2liaWxpdHkgaW5pdGlhbGx5LlxuICAgIEB0b2dnbGVMb2FkaW5nSW5kaWNhdG9yKClcblxuICB0b2dnbGVMb2FkaW5nSW5kaWNhdG9yOiAtPlxuICAgICMgT25seSBzaG93IHRoZSBsb2FkaW5nIGluZGljYXRvciBpZiB0aGUgY29sbGVjdGlvbiBpcyBlbXB0eS5cbiAgICAjIE90aGVyd2lzZSBsb2FkaW5nIG1vcmUgaXRlbXMgaW4gb3JkZXIgdG8gYXBwZW5kIHRoZW0gd291bGRcbiAgICAjIHNob3cgdGhlIGxvYWRpbmcgaW5kaWNhdG9yLiBJZiB5b3Ugd2FudCB0aGUgaW5kaWNhdG9yIHRvXG4gICAgIyBzaG93IHVwIGluIHRoaXMgY2FzZSwgeW91IG5lZWQgdG8gb3ZlcndyaXRlIHRoaXMgbWV0aG9kIHRvXG4gICAgIyBkaXNhYmxlIHRoZSBjaGVjay5cbiAgICB2aXNpYmxlID0gQGNvbGxlY3Rpb24ubGVuZ3RoIGlzIDAgYW5kIEBjb2xsZWN0aW9uLmlzU3luY2luZygpXG4gICAgdG9nZ2xlRWxlbWVudCAoaWYgJCB0aGVuIEAkbG9hZGluZyBlbHNlIEBsb2FkaW5nKSwgdmlzaWJsZVxuXG4gICMgRmlsdGVyaW5nXG4gICMgLS0tLS0tLS0tXG5cbiAgIyBGaWx0ZXJzIG9ubHkgY2hpbGQgaXRlbSB2aWV3cyBmcm9tIGFsbCBjdXJyZW50IHN1YnZpZXdzLlxuICBnZXRJdGVtVmlld3M6IC0+XG4gICAgaXRlbVZpZXdzID0ge31cbiAgICBmb3Iga2V5IGluIE9iamVjdC5rZXlzIEBzdWJ2aWV3c0J5TmFtZVxuICAgICAgdW5sZXNzIGtleS5pbmRleE9mICdpdGVtVmlldzonXG4gICAgICAgIGl0ZW1WaWV3c1trZXkuc2xpY2UgOV0gPSBAc3Vidmlld3NCeU5hbWVba2V5XVxuICAgIGl0ZW1WaWV3c1xuXG4gICMgQXBwbGllcyBhIGZpbHRlciB0byB0aGUgY29sbGVjdGlvbiB2aWV3LlxuICAjIEV4cGVjdHMgYW4gaXRlcmF0b3IgZnVuY3Rpb24gYXMgZmlyc3QgcGFyYW1ldGVyXG4gICMgd2hpY2ggbmVlZCB0byByZXR1cm4gdHJ1ZSBvciBmYWxzZS5cbiAgIyBPcHRpb25hbCBmaWx0ZXIgY2FsbGJhY2sgd2hpY2ggaXMgY2FsbGVkIHRvXG4gICMgc2hvdy9oaWRlIHRoZSB2aWV3IG9yIG1hcmsgaXQgb3RoZXJ3aXNlIGFzIGZpbHRlcmVkLlxuICBmaWx0ZXI6IChmaWx0ZXJlciwgZmlsdGVyQ2FsbGJhY2spIC0+XG4gICAgIyBTYXZlIHRoZSBmaWx0ZXJlciBhbmQgZmlsdGVyQ2FsbGJhY2sgZnVuY3Rpb25zLlxuICAgIGlmIHR5cGVvZiBmaWx0ZXJlciBpcyAnZnVuY3Rpb24nIG9yIGZpbHRlcmVyIGlzIG51bGxcbiAgICAgIEBmaWx0ZXJlciA9IGZpbHRlcmVyXG4gICAgaWYgdHlwZW9mIGZpbHRlckNhbGxiYWNrIGlzICdmdW5jdGlvbicgb3IgZmlsdGVyQ2FsbGJhY2sgaXMgbnVsbFxuICAgICAgQGZpbHRlckNhbGxiYWNrID0gZmlsdGVyQ2FsbGJhY2tcblxuICAgIGhhc0l0ZW1WaWV3cyA9IE9iamVjdFxuICAgICAgLmtleXMgQHN1YnZpZXdzQnlOYW1lXG4gICAgICAuc29tZSAoa2V5KSAtPiAwIGlzIGtleS5pbmRleE9mICdpdGVtVmlldzonXG5cbiAgICAjIFNob3cvaGlkZSBleGlzdGluZyB2aWV3cy5cbiAgICBpZiBoYXNJdGVtVmlld3NcbiAgICAgIGZvciBpdGVtLCBpbmRleCBpbiBAY29sbGVjdGlvbi5tb2RlbHNcblxuICAgICAgICAjIEFwcGx5IGZpbHRlciB0byB0aGUgaXRlbS5cbiAgICAgICAgaW5jbHVkZWQgPSBpZiB0eXBlb2YgQGZpbHRlcmVyIGlzICdmdW5jdGlvbidcbiAgICAgICAgICBAZmlsdGVyZXIgaXRlbSwgaW5kZXhcbiAgICAgICAgZWxzZVxuICAgICAgICAgIHRydWVcblxuICAgICAgICAjIFNob3cvaGlkZSB0aGUgdmlldyBhY2NvcmRpbmdseS5cbiAgICAgICAgdmlldyA9IEBzdWJ2aWV3IFwiaXRlbVZpZXc6I3tpdGVtLmNpZH1cIlxuICAgICAgICAjIEEgdmlldyBoYXMgbm90IGJlZW4gY3JlYXRlZCBmb3IgdGhpcyBpdGVtIHlldC5cbiAgICAgICAgdW5sZXNzIHZpZXdcbiAgICAgICAgICB0aHJvdyBuZXcgRXJyb3IgJ0NvbGxlY3Rpb25WaWV3I2ZpbHRlcjogJyArXG4gICAgICAgICAgICBcIm5vIHZpZXcgZm91bmQgZm9yICN7aXRlbS5jaWR9XCJcblxuICAgICAgICAjIFNob3cvaGlkZSBvciBtYXJrIHRoZSB2aWV3IGFjY29yZGluZ2x5LlxuICAgICAgICBAZmlsdGVyQ2FsbGJhY2sgdmlldywgaW5jbHVkZWRcblxuICAgICAgICAjIFVwZGF0ZSB2aXNpYmxlSXRlbXMgbGlzdCwgYnV0IGRvIG5vdCB0cmlnZ2VyIGFuIGV2ZW50IGltbWVkaWF0ZWx5LlxuICAgICAgICBAdXBkYXRlVmlzaWJsZUl0ZW1zIHZpZXcubW9kZWwsIGluY2x1ZGVkLCBmYWxzZVxuXG4gICAgIyBUcmlnZ2VyIGEgY29tYmluZWQgYHZpc2liaWxpdHlDaGFuZ2VgIGV2ZW50LlxuICAgIEB0cmlnZ2VyICd2aXNpYmlsaXR5Q2hhbmdlJywgQHZpc2libGVJdGVtc1xuXG4gICMgSXRlbSB2aWV3IHJlbmRlcmluZ1xuICAjIC0tLS0tLS0tLS0tLS0tLS0tLS1cblxuICAjIFJlbmRlciBhbmQgaW5zZXJ0IGFsbCBpdGVtcy5cbiAgcmVuZGVyQWxsSXRlbXM6ID0+XG4gICAgaXRlbXMgPSBAY29sbGVjdGlvbi5tb2RlbHNcblxuICAgICMgUmVzZXQgdmlzaWJsZSBpdGVtcy5cbiAgICBAdmlzaWJsZUl0ZW1zLmxlbmd0aCA9IDBcblxuICAgICMgQ29sbGVjdCByZW1haW5pbmcgdmlld3MuXG4gICAgcmVtYWluaW5nVmlld3NCeUNpZCA9IHt9XG4gICAgZm9yIGl0ZW0gaW4gaXRlbXNcbiAgICAgIHZpZXcgPSBAc3VidmlldyBcIml0ZW1WaWV3OiN7aXRlbS5jaWR9XCJcbiAgICAgIGlmIHZpZXdcbiAgICAgICAgIyBWaWV3IHJlbWFpbnMuXG4gICAgICAgIHJlbWFpbmluZ1ZpZXdzQnlDaWRbaXRlbS5jaWRdID0gdmlld1xuXG4gICAgIyBSZW1vdmUgb2xkIHZpZXdzIG9mIGl0ZW1zIG5vdCBsb25nZXIgaW4gdGhlIGxpc3QuXG4gICAgZm9yIGNpZCBpbiBPYmplY3Qua2V5cyBAZ2V0SXRlbVZpZXdzKClcbiAgICAgIHVubGVzcyBjaWQgb2YgcmVtYWluaW5nVmlld3NCeUNpZFxuICAgICAgICAjIFJlbW92ZSB0aGUgdmlldy5cbiAgICAgICAgQHJlbW92ZVN1YnZpZXcgXCJpdGVtVmlldzoje2NpZH1cIlxuXG4gICAgIyBSZS1pbnNlcnQgcmVtYWluaW5nIGl0ZW1zOyByZW5kZXIgYW5kIGluc2VydCBuZXcgaXRlbXMuXG4gICAgZm9yIGl0ZW0sIGluZGV4IGluIGl0ZW1zXG4gICAgICAjIENoZWNrIGlmIHZpZXcgd2FzIGFscmVhZHkgY3JlYXRlZC5cbiAgICAgIHZpZXcgPSBAc3VidmlldyBcIml0ZW1WaWV3OiN7aXRlbS5jaWR9XCJcbiAgICAgIGlmIHZpZXdcbiAgICAgICAgIyBSZS1pbnNlcnQgdGhlIHZpZXcuXG4gICAgICAgIEBpbnNlcnRWaWV3IGl0ZW0sIHZpZXcsIGluZGV4LCBmYWxzZVxuICAgICAgZWxzZVxuICAgICAgICAjIENyZWF0ZSBhIG5ldyB2aWV3LCByZW5kZXIgYW5kIGluc2VydCBpdC5cbiAgICAgICAgQGluc2VydFZpZXcgaXRlbSwgQHJlbmRlckl0ZW0oaXRlbSksIGluZGV4XG5cbiAgICAjIElmIG5vIHZpZXcgd2FzIGNyZWF0ZWQsIHRyaWdnZXIgYHZpc2liaWxpdHlDaGFuZ2VgIGV2ZW50IG1hbnVhbGx5LlxuICAgIEB0cmlnZ2VyICd2aXNpYmlsaXR5Q2hhbmdlJywgQHZpc2libGVJdGVtcyBpZiBpdGVtcy5sZW5ndGggaXMgMFxuXG4gICMgSW5zdGFudGlhdGUgYW5kIHJlbmRlciBhbiBpdGVtIHVzaW5nIHRoZSBgdmlld3NCeUNpZGAgaGFzaCBhcyBhIGNhY2hlLlxuICByZW5kZXJJdGVtOiAoaXRlbSkgLT5cbiAgICAjIEdldCB0aGUgZXhpc3Rpbmcgdmlldy5cbiAgICB2aWV3ID0gQHN1YnZpZXcgXCJpdGVtVmlldzoje2l0ZW0uY2lkfVwiXG5cbiAgICAjIEluc3RhbnRpYXRlIGEgbmV3IHZpZXcgaWYgbmVjZXNzYXJ5LlxuICAgIHVubGVzcyB2aWV3XG4gICAgICB2aWV3ID0gQGluaXRJdGVtVmlldyBpdGVtXG4gICAgICAjIFNhdmUgdGhlIHZpZXcgaW4gdGhlIHN1YnZpZXdzLlxuICAgICAgQHN1YnZpZXcgXCJpdGVtVmlldzoje2l0ZW0uY2lkfVwiLCB2aWV3XG5cbiAgICAjIFJlbmRlciBpbiBhbnkgY2FzZS5cbiAgICB2aWV3LnJlbmRlcigpXG5cbiAgICB2aWV3XG5cbiAgIyBSZXR1cm5zIGFuIGluc3RhbmNlIG9mIHRoZSB2aWV3IGNsYXNzLiBPdmVycmlkZSB0aGlzXG4gICMgbWV0aG9kIHRvIHVzZSBzZXZlcmFsIGl0ZW0gdmlldyBjb25zdHJ1Y3RvcnMgZGVwZW5kaW5nXG4gICMgb24gdGhlIG1vZGVsIHR5cGUgb3IgZGF0YS5cbiAgaW5pdEl0ZW1WaWV3OiAobW9kZWwpIC0+XG4gICAgaWYgQGl0ZW1WaWV3XG4gICAgICBuZXcgQGl0ZW1WaWV3IHthdXRvUmVuZGVyOiBmYWxzZSwgbW9kZWx9XG4gICAgZWxzZVxuICAgICAgdGhyb3cgbmV3IEVycm9yICdUaGUgQ29sbGVjdGlvblZpZXcjaXRlbVZpZXcgcHJvcGVydHkgJyArXG4gICAgICAgICdtdXN0IGJlIGRlZmluZWQgb3IgdGhlIGluaXRJdGVtVmlldygpIG11c3QgYmUgb3ZlcnJpZGRlbi4nXG5cbiAgIyBJbnNlcnRzIGEgdmlldyBpbnRvIHRoZSBsaXN0IGF0IHRoZSBwcm9wZXIgcG9zaXRpb24uXG4gIGluc2VydFZpZXc6IChpdGVtLCB2aWV3LCBwb3NpdGlvbiwgZW5hYmxlQW5pbWF0aW9uID0gdHJ1ZSkgLT5cbiAgICBlbmFibGVBbmltYXRpb24gPSBmYWxzZSBpZiBAYW5pbWF0aW9uRHVyYXRpb24gaXMgMFxuXG4gICAgIyBHZXQgdGhlIGluc2VydGlvbiBvZmZzZXQgaWYgbm90IGdpdmVuLlxuICAgIHVubGVzcyB0eXBlb2YgcG9zaXRpb24gaXMgJ251bWJlcidcbiAgICAgIHBvc2l0aW9uID0gQGNvbGxlY3Rpb24uaW5kZXhPZiBpdGVtXG5cbiAgICAjIElzIHRoZSBpdGVtIGluY2x1ZGVkIGluIHRoZSBmaWx0ZXI/XG4gICAgaW5jbHVkZWQgPSBpZiB0eXBlb2YgQGZpbHRlcmVyIGlzICdmdW5jdGlvbidcbiAgICAgIEBmaWx0ZXJlciBpdGVtLCBwb3NpdGlvblxuICAgIGVsc2VcbiAgICAgIHRydWVcblxuICAgICMgR2V0IHRoZSB2aWV34oCZcyB0b3AgZWxlbWVudC5cbiAgICBlbGVtID0gaWYgJCB0aGVuIHZpZXcuJGVsIGVsc2Ugdmlldy5lbFxuXG4gICAgIyBTdGFydCBhbmltYXRpb24uXG4gICAgaWYgaW5jbHVkZWQgYW5kIGVuYWJsZUFuaW1hdGlvblxuICAgICAgc3RhcnRBbmltYXRpb24gZWxlbSwgQHVzZUNzc0FuaW1hdGlvbiwgQGFuaW1hdGlvblN0YXJ0Q2xhc3NcblxuICAgICMgSGlkZSBvciBtYXJrIHRoZSB2aWV3IGlmIGl04oCZcyBmaWx0ZXJlZC5cbiAgICBAZmlsdGVyQ2FsbGJhY2sgdmlldywgaW5jbHVkZWQgaWYgQGZpbHRlcmVyXG5cbiAgICBsZW5ndGggPSBAY29sbGVjdGlvbi5sZW5ndGhcblxuICAgICMgSW5zZXJ0IHRoZSB2aWV3IGludG8gdGhlIGxpc3QuXG4gICAgbGlzdCA9IGlmICQgdGhlbiBAJGxpc3QgZWxzZSBAbGlzdFxuXG4gICAgaWYgaW5jbHVkZWRcbiAgICAgIGluc2VydFZpZXcgbGlzdCwgZWxlbSwgcG9zaXRpb24sIGxlbmd0aCwgQGl0ZW1TZWxlY3RvclxuXG4gICAgICAjIFRlbGwgdGhlIHZpZXcgdGhhdCBpdCB3YXMgYWRkZWQgdG8gaXRzIHBhcmVudC5cbiAgICAgIHZpZXcudHJpZ2dlciAnYWRkZWRUb1BhcmVudCdcblxuICAgICMgVXBkYXRlIHRoZSBsaXN0IG9mIHZpc2libGUgaXRlbXMsIHRyaWdnZXIgYSBgdmlzaWJpbGl0eUNoYW5nZWAgZXZlbnQuXG4gICAgQHVwZGF0ZVZpc2libGVJdGVtcyBpdGVtLCBpbmNsdWRlZFxuXG4gICAgIyBFbmQgYW5pbWF0aW9uLlxuICAgIGlmIGluY2x1ZGVkIGFuZCBlbmFibGVBbmltYXRpb25cbiAgICAgIGlmIEB1c2VDc3NBbmltYXRpb25cbiAgICAgICAgIyBXYWl0IGZvciBET00gc3RhdGUgY2hhbmdlLlxuICAgICAgICBzZXRUaW1lb3V0ID0+IGFkZENsYXNzIGVsZW0sIEBhbmltYXRpb25FbmRDbGFzc1xuICAgICAgZWxzZVxuICAgICAgICAjIEZhZGUgdGhlIHZpZXcgaW4gaWYgaXQgd2FzIG1hZGUgdHJhbnNwYXJlbnQgYmVmb3JlLlxuICAgICAgICBlbmRBbmltYXRpb24gZWxlbSwgQGFuaW1hdGlvbkR1cmF0aW9uXG5cbiAgICB2aWV3XG5cbiAgIyBSZW1vdmUgdGhlIHZpZXcgZm9yIGFuIGl0ZW0uXG4gIHJlbW92ZVZpZXdGb3JJdGVtOiAoaXRlbSkgLT5cbiAgICAjIFJlbW92ZSBpdGVtIGZyb20gdmlzaWJsZUl0ZW1zIGxpc3QsIHRyaWdnZXIgYSBgdmlzaWJpbGl0eUNoYW5nZWAgZXZlbnQuXG4gICAgQHVwZGF0ZVZpc2libGVJdGVtcyBpdGVtLCBmYWxzZVxuICAgIEByZW1vdmVTdWJ2aWV3IFwiaXRlbVZpZXc6I3tpdGVtLmNpZH1cIlxuXG4gICMgTGlzdCBvZiB2aXNpYmxlIGl0ZW1zXG4gICMgLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgIyBVcGRhdGUgdmlzaWJsZUl0ZW1zIGxpc3QgYW5kIHRyaWdnZXIgYSBgdmlzaWJpbGl0eUNoYW5nZWRgIGV2ZW50XG4gICMgaWYgYW4gaXRlbSBjaGFuZ2VkIGl0cyB2aXNpYmlsaXR5LlxuICB1cGRhdGVWaXNpYmxlSXRlbXM6IChpdGVtLCBpbmNsdWRlZEluRmlsdGVyLCB0cmlnZ2VyRXZlbnQgPSB0cnVlKSAtPlxuICAgIHZpc2liaWxpdHlDaGFuZ2VkID0gZmFsc2VcblxuICAgIHZpc2libGVJdGVtc0luZGV4ID0gQHZpc2libGVJdGVtcy5pbmRleE9mIGl0ZW1cbiAgICBpbmNsdWRlZEluVmlzaWJsZUl0ZW1zID0gdmlzaWJsZUl0ZW1zSW5kZXggaXNudCAtMVxuXG4gICAgaWYgaW5jbHVkZWRJbkZpbHRlciBhbmQgbm90IGluY2x1ZGVkSW5WaXNpYmxlSXRlbXNcbiAgICAgICMgQWRkIGl0ZW0gdG8gdGhlIHZpc2libGUgaXRlbXMgbGlzdC5cbiAgICAgIEB2aXNpYmxlSXRlbXMucHVzaCBpdGVtXG4gICAgICB2aXNpYmlsaXR5Q2hhbmdlZCA9IHRydWVcbiAgICBlbHNlIGlmIG5vdCBpbmNsdWRlZEluRmlsdGVyIGFuZCBpbmNsdWRlZEluVmlzaWJsZUl0ZW1zXG4gICAgICAjIFJlbW92ZSBpdGVtIGZyb20gdGhlIHZpc2libGUgaXRlbXMgbGlzdC5cbiAgICAgIEB2aXNpYmxlSXRlbXMuc3BsaWNlIHZpc2libGVJdGVtc0luZGV4LCAxXG4gICAgICB2aXNpYmlsaXR5Q2hhbmdlZCA9IHRydWVcblxuICAgICMgVHJpZ2dlciBhIGB2aXNpYmlsaXR5Q2hhbmdlYCBldmVudCBpZiB0aGUgdmlzaWJsZSBpdGVtcyBjaGFuZ2VkLlxuICAgIGlmIHZpc2liaWxpdHlDaGFuZ2VkIGFuZCB0cmlnZ2VyRXZlbnRcbiAgICAgIEB0cmlnZ2VyICd2aXNpYmlsaXR5Q2hhbmdlJywgQHZpc2libGVJdGVtc1xuXG4gICAgdmlzaWJpbGl0eUNoYW5nZWRcblxuICAjIERpc3Bvc2FsXG4gICMgLS0tLS0tLS1cblxuICBkaXNwb3NlOiAtPlxuICAgIHJldHVybiBpZiBAZGlzcG9zZWRcblxuICAgICMgUmVtb3ZlIGpRdWVyeSBvYmplY3RzLCBpdGVtIHZpZXcgY2FjaGUgYW5kIHZpc2libGUgaXRlbXMgbGlzdC5cbiAgICBkZWxldGUgdGhpc1twcm9wXSBmb3IgcHJvcCBpbiBbXG4gICAgICAnJGxpc3QnLCAnJGZhbGxiYWNrJyxcbiAgICAgICckbG9hZGluZycsICd2aXNpYmxlSXRlbXMnXG4gICAgXVxuXG4gICAgIyBTZWxmLWRpc3Bvc2FsLlxuICAgIHN1cGVyXG4iLCIndXNlIHN0cmljdCdcblxuXyA9IHJlcXVpcmUgJ3VuZGVyc2NvcmUnXG5CYWNrYm9uZSA9IHJlcXVpcmUgJ2JhY2tib25lJ1xuXG5WaWV3ID0gcmVxdWlyZSAnLi92aWV3J1xuRXZlbnRCcm9rZXIgPSByZXF1aXJlICcuLi9saWIvZXZlbnRfYnJva2VyJ1xudXRpbHMgPSByZXF1aXJlICcuLi9saWIvdXRpbHMnXG5tZWRpYXRvciA9IHJlcXVpcmUgJy4uL21lZGlhdG9yJ1xuXG4jIFNob3J0Y3V0IHRvIGFjY2VzcyB0aGUgRE9NIG1hbmlwdWxhdGlvbiBsaWJyYXJ5LlxueyR9ID0gQmFja2JvbmVcblxubW9kdWxlLmV4cG9ydHMgPSBjbGFzcyBMYXlvdXQgZXh0ZW5kcyBWaWV3XG4gICMgQmluZCB0byBkb2N1bWVudCBib2R5IGJ5IGRlZmF1bHQuXG4gIGVsOiAnYm9keSdcblxuICAjIE92ZXJyaWRlIGRlZmF1bHQgdmlldyBiZWhhdmlvciwgd2UgZG9u4oCZdCB3YW50IGRvY3VtZW50LmJvZHkgdG8gYmUgcmVtb3ZlZC5cbiAga2VlcEVsZW1lbnQ6IHRydWVcblxuICAjIFRoZSBzaXRlIHRpdGxlIHVzZWQgaW4gdGhlIGRvY3VtZW50IHRpdGxlLlxuICAjIFRoaXMgc2hvdWxkIGJlIHNldCBpbiB5b3VyIGFwcC1zcGVjaWZpYyBBcHBsaWNhdGlvbiBjbGFzc1xuICAjIGFuZCBwYXNzZWQgYXMgYW4gb3B0aW9uLlxuICB0aXRsZTogJydcblxuICAjIFJlZ2lvbnNcbiAgIyAtLS0tLS0tXG5cbiAgIyBDb2xsZWN0aW9uIG9mIHJlZ2lzdGVyZWQgcmVnaW9uczsgYWxsIHZpZXcgcmVnaW9ucyBhcmUgY29sbGVjdGVkIGhlcmUuXG4gIGdsb2JhbFJlZ2lvbnM6IG51bGxcblxuICBsaXN0ZW46XG4gICAgJ2JlZm9yZUNvbnRyb2xsZXJEaXNwb3NlIG1lZGlhdG9yJzogJ3Njcm9sbCdcblxuICBjb25zdHJ1Y3RvcjogKG9wdGlvbnMgPSB7fSkgLT5cbiAgICBAZ2xvYmFsUmVnaW9ucyA9IFtdXG4gICAgQHRpdGxlID0gb3B0aW9ucy50aXRsZVxuICAgIEByZWdpb25zID0gb3B0aW9ucy5yZWdpb25zIGlmIG9wdGlvbnMucmVnaW9uc1xuICAgIEBzZXR0aW5ncyA9IF8uZGVmYXVsdHMgb3B0aW9ucyxcbiAgICAgIHRpdGxlVGVtcGxhdGU6IChkYXRhKSAtPlxuICAgICAgICBzdCA9IGlmIGRhdGEuc3VidGl0bGUgdGhlbiBcIiN7ZGF0YS5zdWJ0aXRsZX0gXFx1MjAxMyBcIiBlbHNlICcnXG4gICAgICAgIHN0ICsgZGF0YS50aXRsZVxuICAgICAgb3BlbkV4dGVybmFsVG9CbGFuazogZmFsc2VcbiAgICAgIHJvdXRlTGlua3M6ICdhLCAuZ28tdG8nXG4gICAgICBza2lwUm91dGluZzogJy5ub3NjcmlwdCdcbiAgICAgICMgUGVyIGRlZmF1bHQsIGp1bXAgdG8gdGhlIHRvcCBvZiB0aGUgcGFnZS5cbiAgICAgIHNjcm9sbFRvOiBbMCwgMF1cblxuICAgIG1lZGlhdG9yLnNldEhhbmRsZXIgJ3JlZ2lvbjpzaG93JywgQHNob3dSZWdpb24sIHRoaXNcbiAgICBtZWRpYXRvci5zZXRIYW5kbGVyICdyZWdpb246cmVnaXN0ZXInLCBAcmVnaXN0ZXJSZWdpb25IYW5kbGVyLCB0aGlzXG4gICAgbWVkaWF0b3Iuc2V0SGFuZGxlciAncmVnaW9uOnVucmVnaXN0ZXInLCBAdW5yZWdpc3RlclJlZ2lvbkhhbmRsZXIsIHRoaXNcbiAgICBtZWRpYXRvci5zZXRIYW5kbGVyICdyZWdpb246ZmluZCcsIEByZWdpb25CeU5hbWUsIHRoaXNcbiAgICBtZWRpYXRvci5zZXRIYW5kbGVyICdhZGp1c3RUaXRsZScsIEBhZGp1c3RUaXRsZSwgdGhpc1xuXG4gICAgc3VwZXJcblxuICAgICMgU2V0IHRoZSBhcHAgbGluayByb3V0aW5nLlxuICAgIEBzdGFydExpbmtSb3V0aW5nKCkgaWYgQHNldHRpbmdzLnJvdXRlTGlua3NcblxuICAjIENvbnRyb2xsZXIgc3RhcnR1cCBhbmQgZGlzcG9zYWxcbiAgIyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgIyBIYW5kbGVyIGZvciB0aGUgZ2xvYmFsIGJlZm9yZUNvbnRyb2xsZXJEaXNwb3NlIGV2ZW50LlxuICBzY3JvbGw6IC0+XG4gICAgIyBSZXNldCB0aGUgc2Nyb2xsIHBvc2l0aW9uLlxuICAgIHRvID0gQHNldHRpbmdzLnNjcm9sbFRvXG4gICAgaWYgdG8gYW5kIHR5cGVvZiB0byBpcyAnb2JqZWN0J1xuICAgICAgW3gsIHldID0gdG9cbiAgICAgIHdpbmRvdy5zY3JvbGxUbyB4LCB5XG5cbiAgIyBIYW5kbGVyIGZvciB0aGUgZ2xvYmFsIGRpc3BhdGNoZXI6ZGlzcGF0Y2ggZXZlbnQuXG4gICMgQ2hhbmdlIHRoZSBkb2N1bWVudCB0aXRsZSB0byBtYXRjaCB0aGUgbmV3IGNvbnRyb2xsZXIuXG4gICMgR2V0IHRoZSB0aXRsZSBmcm9tIHRoZSB0aXRsZSBwcm9wZXJ0eSBvZiB0aGUgY3VycmVudCBjb250cm9sbGVyLlxuICBhZGp1c3RUaXRsZTogKHN1YnRpdGxlID0gJycpIC0+XG4gICAgdGl0bGUgPSBAc2V0dGluZ3MudGl0bGVUZW1wbGF0ZSB7QHRpdGxlLCBzdWJ0aXRsZX1cbiAgICBkb2N1bWVudC50aXRsZSA9IHRpdGxlXG4gICAgQHB1Ymxpc2hFdmVudCAnYWRqdXN0VGl0bGUnLCBzdWJ0aXRsZSwgdGl0bGVcbiAgICB0aXRsZVxuXG4gICMgQXV0b21hdGljIHJvdXRpbmcgb2YgaW50ZXJuYWwgbGlua3NcbiAgIyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuXG4gIHN0YXJ0TGlua1JvdXRpbmc6IC0+XG4gICAgcm91dGUgPSBAc2V0dGluZ3Mucm91dGVMaW5rc1xuICAgIEBkZWxlZ2F0ZSAnY2xpY2snLCByb3V0ZSwgQG9wZW5MaW5rIGlmIHJvdXRlXG5cbiAgc3RvcExpbmtSb3V0aW5nOiAtPlxuICAgIHJvdXRlID0gQHNldHRpbmdzLnJvdXRlTGlua3NcbiAgICBAdW5kZWxlZ2F0ZSAnY2xpY2snLCByb3V0ZSBpZiByb3V0ZVxuXG4gIGlzRXh0ZXJuYWxMaW5rOiAobGluaykgLT5cbiAgICByZXR1cm4gZmFsc2UgdW5sZXNzIHV0aWxzLm1hdGNoZXNTZWxlY3RvciBsaW5rLCAnYSwgYXJlYSdcbiAgICByZXR1cm4gdHJ1ZSBpZiBsaW5rLmRvd25sb2FkXG5cbiAgICAjIElFIDktMTEgcmVzb2x2ZSBocmVmIGJ1dCBkbyBub3QgcG9wdWxhdGUgcHJvdG9jb2wsIGhvc3QgZXRjLlxuICAgICMgUmVhc3NpZ25pbmcgaHJlZiBoZWxwcy4gU2VlICM4NzggaXNzdWUgZm9yIGRldGFpbHMuXG4gICAgbGluay5ocmVmICs9ICcnIHVubGVzcyBsaW5rLmhvc3RcblxuICAgIHtwcm90b2NvbCwgaG9zdH0gPSBsb2NhdGlvblxuICAgIHt0YXJnZXR9ID0gbGlua1xuXG4gICAgdGFyZ2V0IGlzICdfYmxhbmsnIG9yXG4gICAgbGluay5yZWwgaXMgJ2V4dGVybmFsJyBvclxuICAgIGxpbmsucHJvdG9jb2wgaXNudCBwcm90b2NvbCBvclxuICAgIGxpbmsuaG9zdCBpc250IGhvc3Qgb3JcbiAgICAodGFyZ2V0IGlzICdfcGFyZW50JyBhbmQgcGFyZW50IGlzbnQgc2VsZikgb3JcbiAgICAodGFyZ2V0IGlzICdfdG9wJyBhbmQgdG9wIGlzbnQgc2VsZilcblxuICAjIEhhbmRsZSBhbGwgY2xpY2tzIG9uIEEgZWxlbWVudHMgYW5kIHRyeSB0byByb3V0ZSB0aGVtIGludGVybmFsbHkuXG4gIG9wZW5MaW5rOiAoZXZlbnQpID0+XG4gICAgcmV0dXJuIGlmIHV0aWxzLm1vZGlmaWVyS2V5UHJlc3NlZCBldmVudFxuXG4gICAgZWwgPSBpZiAkIHRoZW4gZXZlbnQuY3VycmVudFRhcmdldCBlbHNlIGV2ZW50LmRlbGVnYXRlVGFyZ2V0XG5cbiAgICAjIEdldCB0aGUgaHJlZiBhbmQgcGVyZm9ybSBjaGVja3Mgb24gaXQuXG4gICAgaHJlZiA9IGVsLmdldEF0dHJpYnV0ZSgnaHJlZicpIG9yIGVsLmdldEF0dHJpYnV0ZSgnZGF0YS1ocmVmJylcblxuICAgICMgQmFzaWMgaHJlZiBjaGVja3MuXG4gICAgIyBUZWNobmljYWxseSBhbiBlbXB0eSBzdHJpbmcgaXMgYSB2YWxpZCByZWxhdGl2ZSBVUkxcbiAgICAjIGJ1dCBpdCBkb2VzbuKAmXQgbWFrZSBzZW5zZSB0byByb3V0ZSBpdC5cbiAgICByZXR1cm4gaWYgbm90IGhyZWYgb3JcbiAgICAgICMgRXhjbHVkZSBmcmFnbWVudCBsaW5rcy5cbiAgICAgIGhyZWZbMF0gaXMgJyMnXG5cbiAgICAjIEFwcGx5IHNraXBSb3V0aW5nIG9wdGlvbi5cbiAgICB7c2tpcFJvdXRpbmd9ID0gQHNldHRpbmdzXG4gICAgc3dpdGNoIHR5cGVvZiBza2lwUm91dGluZ1xuICAgICAgd2hlbiAnZnVuY3Rpb24nXG4gICAgICAgIHJldHVybiB1bmxlc3Mgc2tpcFJvdXRpbmcgaHJlZiwgZWxcbiAgICAgIHdoZW4gJ3N0cmluZydcbiAgICAgICAgcmV0dXJuIGlmIHV0aWxzLm1hdGNoZXNTZWxlY3RvciBlbCwgc2tpcFJvdXRpbmdcblxuICAgICMgSGFuZGxlIGV4dGVybmFsIGxpbmtzLlxuICAgIGlmIEBpc0V4dGVybmFsTGluayBlbFxuICAgICAgaWYgQHNldHRpbmdzLm9wZW5FeHRlcm5hbFRvQmxhbmtcbiAgICAgICAgIyBPcGVuIGV4dGVybmFsIGxpbmtzIG5vcm1hbGx5IGluIGEgbmV3IHRhYi5cbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKVxuICAgICAgICBAb3BlbldpbmRvdyBocmVmXG4gICAgICByZXR1cm5cblxuICAgICMgUGFzcyB0byB0aGUgcm91dGVyLCB0cnkgdG8gcm91dGUgdGhlIHBhdGggaW50ZXJuYWxseS5cbiAgICB1dGlscy5yZWRpcmVjdFRvIHVybDogaHJlZlxuXG4gICAgIyBQcmV2ZW50IGRlZmF1bHQgaGFuZGxpbmcgaWYgdGhlIFVSTCBjb3VsZCBiZSByb3V0ZWQuXG4gICAgZXZlbnQucHJldmVudERlZmF1bHQoKVxuXG4gICMgSGFuZGxlIGFsbCBicm93c2luZyBjb250ZXh0IHJlc291cmNlc1xuICBvcGVuV2luZG93OiAoaHJlZikgLT5cbiAgICB3aW5kb3cub3BlbiBocmVmXG5cbiAgIyBSZWdpb24gbWFuYWdlbWVudFxuICAjIC0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgIyBIYW5kbGVyIGZvciBgIXJlZ2lvbjpyZWdpc3RlcmAuXG4gICMgUmVnaXN0ZXIgYSBzaW5nbGUgdmlldyByZWdpb24gb3IgYWxsIHJlZ2lvbnMgZXhwb3NlZC5cbiAgcmVnaXN0ZXJSZWdpb25IYW5kbGVyOiAoaW5zdGFuY2UsIG5hbWUsIHNlbGVjdG9yKSAtPlxuICAgIGlmIG5hbWU/XG4gICAgICBAcmVnaXN0ZXJHbG9iYWxSZWdpb24gaW5zdGFuY2UsIG5hbWUsIHNlbGVjdG9yXG4gICAgZWxzZVxuICAgICAgQHJlZ2lzdGVyR2xvYmFsUmVnaW9ucyBpbnN0YW5jZVxuXG4gICMgUmVnaXN0ZXJpbmcgb25lIHJlZ2lvbiBib3VuZCB0byBhIHZpZXcuXG4gIHJlZ2lzdGVyR2xvYmFsUmVnaW9uOiAoaW5zdGFuY2UsIG5hbWUsIHNlbGVjdG9yKSAtPlxuICAgICMgUmVtb3ZlIHRoZSByZWdpb24gaWYgdGhlcmUgd2FzIGFscmVhZHkgb25lIHJlZ2lzdGVyZWQgcGVyaGFwcyBieVxuICAgICMgYSBiYXNlIGNsYXNzLlxuICAgIEB1bnJlZ2lzdGVyR2xvYmFsUmVnaW9uIGluc3RhbmNlLCBuYW1lXG5cbiAgICAjIFBsYWNlIHRoaXMgcmVnaW9uIHJlZ2lzdHJhdGlvbiBpbnRvIHRoZSByZWdpb25zIGFycmF5LlxuICAgIEBnbG9iYWxSZWdpb25zLnVuc2hpZnQge2luc3RhbmNlLCBuYW1lLCBzZWxlY3Rvcn1cblxuICAjIFRyaWdnZXJlZCBieSB2aWV3OyBwYXNzZWQgaW4gdGhlIHJlZ2lvbnMgaGFzaC5cbiAgIyBTaW1wbHkgcmVnaXN0ZXIgYWxsIHJlZ2lvbnMgZXhwb3NlZCBieSBpdC5cbiAgcmVnaXN0ZXJHbG9iYWxSZWdpb25zOiAoaW5zdGFuY2UpIC0+XG4gICAgIyBSZWdpb25zIGNhbiBiZSBiZSBleHRlbmRlZCBieSBzdWJjbGFzc2VzLCBzbyB3ZSBuZWVkIHRvIGNoZWNrIHRoZVxuICAgICMgd2hvbGUgcHJvdG90eXBlIGNoYWluIGZvciBtYXRjaGluZyByZWdpb25zLiBSZWdpb25zIHJlZ2lzdGVyZWQgYnkgdGhlXG4gICAgIyBtb3JlLWRlcml2ZWQgY2xhc3Mgb3ZlcndyaXRlcyB0aGUgcmVnaW9uIHJlZ2lzdGVyZWQgYnkgdGhlIGxlc3MtZGVyaXZlZFxuICAgICMgY2xhc3MuXG4gICAgZm9yIHZlcnNpb24gaW4gdXRpbHMuZ2V0QWxsUHJvcGVydHlWZXJzaW9ucyBpbnN0YW5jZSwgJ3JlZ2lvbnMnXG4gICAgICBmb3IgbmFtZSwgc2VsZWN0b3Igb2YgdmVyc2lvblxuICAgICAgICBAcmVnaXN0ZXJHbG9iYWxSZWdpb24gaW5zdGFuY2UsIG5hbWUsIHNlbGVjdG9yXG4gICAgIyBSZXR1cm4gbm90aGluZy5cbiAgICByZXR1cm5cblxuICAjIEhhbmRsZXIgZm9yIGAhcmVnaW9uOnVucmVnaXN0ZXJgLlxuICAjIFVucmVnaXN0ZXJzIHNpbmdsZSBuYW1lZCByZWdpb24gb3IgYWxsIHZpZXcgcmVnaW9ucy5cbiAgdW5yZWdpc3RlclJlZ2lvbkhhbmRsZXI6IChpbnN0YW5jZSwgbmFtZSkgLT5cbiAgICBpZiBuYW1lP1xuICAgICAgQHVucmVnaXN0ZXJHbG9iYWxSZWdpb24gaW5zdGFuY2UsIG5hbWVcbiAgICBlbHNlXG4gICAgICBAdW5yZWdpc3Rlckdsb2JhbFJlZ2lvbnMgaW5zdGFuY2VcblxuICAjIFVucmVnaXN0ZXJzIGEgc3BlY2lmaWMgbmFtZWQgcmVnaW9uIGZyb20gYSB2aWV3LlxuICB1bnJlZ2lzdGVyR2xvYmFsUmVnaW9uOiAoaW5zdGFuY2UsIG5hbWUpIC0+XG4gICAgY2lkID0gaW5zdGFuY2UuY2lkXG4gICAgQGdsb2JhbFJlZ2lvbnMgPSAocmVnaW9uIGZvciByZWdpb24gaW4gQGdsb2JhbFJlZ2lvbnMgd2hlbiAoXG4gICAgICByZWdpb24uaW5zdGFuY2UuY2lkIGlzbnQgY2lkIG9yIHJlZ2lvbi5uYW1lIGlzbnQgbmFtZVxuICAgICkpXG5cbiAgIyBXaGVuIHZpZXdzIGFyZSBkaXNwb3NlZDsgcmVtb3ZlIGFsbCB0aGVpciByZWdpc3RlcmVkIHJlZ2lvbnMuXG4gIHVucmVnaXN0ZXJHbG9iYWxSZWdpb25zOiAoaW5zdGFuY2UpIC0+XG4gICAgQGdsb2JhbFJlZ2lvbnMgPSAocmVnaW9uIGZvciByZWdpb24gaW4gQGdsb2JhbFJlZ2lvbnMgd2hlbiAoXG4gICAgICByZWdpb24uaW5zdGFuY2UuY2lkIGlzbnQgaW5zdGFuY2UuY2lkXG4gICAgKSlcblxuICAjIFJldHVybnMgdGhlIHJlZ2lvbiBieSBpdHMgbmFtZSwgaWYgZm91bmQuXG4gIHJlZ2lvbkJ5TmFtZTogKG5hbWUpIC0+XG4gICAgZm9yIHJlZyBpbiBAZ2xvYmFsUmVnaW9ucyB3aGVuIHJlZy5uYW1lIGlzIG5hbWUgYW5kIG5vdCByZWcuaW5zdGFuY2Uuc3RhbGVcbiAgICAgIHJldHVybiByZWdcblxuICAjIFdoZW4gdmlld3MgYXJlIGluc3RhbnRpYXRlZCBhbmQgcmVxdWVzdCBmb3IgYSByZWdpb24gYXNzaWdubWVudDtcbiAgIyBhdHRlbXB0IHRvIGZ1bGZpbGwgaXQuXG4gIHNob3dSZWdpb246IChuYW1lLCBpbnN0YW5jZSkgLT5cbiAgICAjIEZpbmQgYW4gYXBwcm9wcmlhdGUgcmVnaW9uLlxuICAgIHJlZ2lvbiA9IEByZWdpb25CeU5hbWUgbmFtZVxuXG4gICAgIyBBc3NlcnQgdGhhdCB3ZSBnb3QgYSB2YWxpZCByZWdpb24uXG4gICAgdGhyb3cgbmV3IEVycm9yIFwiTm8gcmVnaW9uIHJlZ2lzdGVyZWQgdW5kZXIgI3tuYW1lfVwiIHVubGVzcyByZWdpb25cblxuICAgICMgQXBwbHkgdGhlIHJlZ2lvbiBzZWxlY3Rvci5cbiAgICBpbnN0YW5jZS5jb250YWluZXIgPSBpZiByZWdpb24uc2VsZWN0b3IgaXMgJydcbiAgICAgIGlmICRcbiAgICAgICAgcmVnaW9uLmluc3RhbmNlLiRlbFxuICAgICAgZWxzZVxuICAgICAgICByZWdpb24uaW5zdGFuY2UuZWxcbiAgICBlbHNlXG4gICAgICBpZiByZWdpb24uaW5zdGFuY2Uubm9XcmFwXG4gICAgICAgIHJlZ2lvbi5pbnN0YW5jZS5jb250YWluZXIuZmluZCByZWdpb24uc2VsZWN0b3JcbiAgICAgIGVsc2VcbiAgICAgICAgcmVnaW9uLmluc3RhbmNlLmZpbmQgcmVnaW9uLnNlbGVjdG9yXG5cbiAgIyBEaXNwb3NhbFxuICAjIC0tLS0tLS0tXG5cbiAgZGlzcG9zZTogLT5cbiAgICByZXR1cm4gaWYgQGRpc3Bvc2VkXG5cbiAgICAjIFN0b3Agcm91dGluZyBsaW5rcy5cbiAgICBAc3RvcExpbmtSb3V0aW5nKClcblxuICAgICMgUmVtb3ZlIGFsbCByZWdpb25zIGFuZCBkb2N1bWVudCB0aXRsZSBzZXR0aW5nLlxuICAgIGRlbGV0ZSB0aGlzW3Byb3BdIGZvciBwcm9wIGluIFsnZ2xvYmFsUmVnaW9ucycsICd0aXRsZScsICdyb3V0ZSddXG5cbiAgICBtZWRpYXRvci5yZW1vdmVIYW5kbGVycyB0aGlzXG5cbiAgICBzdXBlclxuIiwiJ3VzZSBzdHJpY3QnXG5cbl8gPSByZXF1aXJlICd1bmRlcnNjb3JlJ1xuQmFja2JvbmUgPSByZXF1aXJlICdiYWNrYm9uZSdcblxuRXZlbnRCcm9rZXIgPSByZXF1aXJlICcuLi9saWIvZXZlbnRfYnJva2VyJ1xudXRpbHMgPSByZXF1aXJlICcuLi9saWIvdXRpbHMnXG5tZWRpYXRvciA9IHJlcXVpcmUgJy4uL21lZGlhdG9yJ1xuXG4jIFNob3J0Y3V0IHRvIGFjY2VzcyB0aGUgRE9NIG1hbmlwdWxhdGlvbiBsaWJyYXJ5LlxueyR9ID0gQmFja2JvbmVcblxuc2V0SFRNTCA9IGRvIC0+XG4gIGlmICRcbiAgICAodmlldywgaHRtbCkgLT5cbiAgICAgIHZpZXcuJGVsLmh0bWwgaHRtbFxuICAgICAgaHRtbFxuICBlbHNlXG4gICAgKHZpZXcsIGh0bWwpIC0+XG4gICAgICB2aWV3LmVsLmlubmVySFRNTCA9IGh0bWxcblxuYXR0YWNoID0gZG8gLT5cbiAgaWYgJFxuICAgICh2aWV3KSAtPlxuICAgICAgYWN0dWFsID0gJCB2aWV3LmNvbnRhaW5lclxuICAgICAgaWYgdHlwZW9mIHZpZXcuY29udGFpbmVyTWV0aG9kIGlzICdmdW5jdGlvbidcbiAgICAgICAgdmlldy5jb250YWluZXJNZXRob2QgYWN0dWFsLCB2aWV3LmVsXG4gICAgICBlbHNlXG4gICAgICAgIGFjdHVhbFt2aWV3LmNvbnRhaW5lck1ldGhvZF0gdmlldy5lbFxuICBlbHNlXG4gICAgKHZpZXcpIC0+XG4gICAgICBhY3R1YWwgPSBpZiB0eXBlb2Ygdmlldy5jb250YWluZXIgaXMgJ3N0cmluZydcbiAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvciB2aWV3LmNvbnRhaW5lclxuICAgICAgZWxzZVxuICAgICAgICB2aWV3LmNvbnRhaW5lclxuXG4gICAgICBpZiB0eXBlb2Ygdmlldy5jb250YWluZXJNZXRob2QgaXMgJ2Z1bmN0aW9uJ1xuICAgICAgICB2aWV3LmNvbnRhaW5lck1ldGhvZCBhY3R1YWwsIHZpZXcuZWxcbiAgICAgIGVsc2VcbiAgICAgICAgYWN0dWFsW3ZpZXcuY29udGFpbmVyTWV0aG9kXSB2aWV3LmVsXG5cbm1vZHVsZS5leHBvcnRzID0gY2xhc3MgVmlldyBleHRlbmRzIEJhY2tib25lLk5hdGl2ZVZpZXcgb3IgQmFja2JvbmUuVmlld1xuICAjIE1peGluIGFuIEV2ZW50QnJva2VyLlxuICBfLmV4dGVuZCBAcHJvdG90eXBlLCBFdmVudEJyb2tlclxuXG4gICMgQXV0b21hdGljIHJlbmRlcmluZ1xuICAjIC0tLS0tLS0tLS0tLS0tLS0tLS1cblxuICAjIEZsYWcgd2hldGhlciB0byByZW5kZXIgdGhlIHZpZXcgYXV0b21hdGljYWxseSBvbiBpbml0aWFsaXphdGlvbi5cbiAgIyBBcyBhbiBhbHRlcm5hdGl2ZSB5b3UgbWlnaHQgcGFzcyBhIGByZW5kZXJgIG9wdGlvbiB0byB0aGUgY29uc3RydWN0b3IuXG4gIGF1dG9SZW5kZXI6IGZhbHNlXG5cbiAgIyBGbGFnIHdoZXRoZXIgdG8gYXR0YWNoIHRoZSB2aWV3IGF1dG9tYXRpY2FsbHkgb24gcmVuZGVyLlxuICBhdXRvQXR0YWNoOiB0cnVlXG5cbiAgIyBBdXRvbWF0aWMgaW5zZXJ0aW5nIGludG8gRE9NXG4gICMgLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuXG4gICMgVmlldyBjb250YWluZXIgZWxlbWVudC5cbiAgIyBTZXQgdGhpcyBwcm9wZXJ0eSBpbiBhIGRlcml2ZWQgY2xhc3MgdG8gc3BlY2lmeSB0aGUgY29udGFpbmVyIGVsZW1lbnQuXG4gICMgTm9ybWFsbHkgdGhpcyBpcyBhIHNlbGVjdG9yIHN0cmluZyBidXQgaXQgbWlnaHQgYWxzbyBiZSBhbiBlbGVtZW50IG9yXG4gICMgalF1ZXJ5IG9iamVjdC5cbiAgIyBUaGUgdmlldyBpcyBhdXRvbWF0aWNhbGx5IGluc2VydGVkIGludG8gdGhlIGNvbnRhaW5lciB3aGVuIGl04oCZcyByZW5kZXJlZC5cbiAgIyBBcyBhbiBhbHRlcm5hdGl2ZSB5b3UgbWlnaHQgcGFzcyBhIGBjb250YWluZXJgIG9wdGlvbiB0byB0aGUgY29uc3RydWN0b3IuXG4gIGNvbnRhaW5lcjogbnVsbFxuXG4gICMgTWV0aG9kIHdoaWNoIGlzIHVzZWQgZm9yIGFkZGluZyB0aGUgdmlldyB0byB0aGUgRE9NXG4gICMgTGlrZSBqUXVlcnnigJlzIGBodG1sYCwgYHByZXBlbmRgLCBgYXBwZW5kYCwgYGFmdGVyYCwgYGJlZm9yZWAgZXRjLlxuICBjb250YWluZXJNZXRob2Q6IGlmICQgdGhlbiAnYXBwZW5kJyBlbHNlICdhcHBlbmRDaGlsZCdcblxuICAjIFJlZ2lvbnNcbiAgIyAtLS0tLS0tXG5cbiAgIyBSZWdpb24gcmVnaXN0cmF0aW9uOyByZWdpb25zIGFyZSBpbiBlc3NlbmNlIG5hbWVkIHNlbGVjdG9ycyB0aGF0IGFpbVxuICAjIHRvIGRlY291cGxlIHRoZSB2aWV3IGZyb20gaXRzIHBhcmVudC5cbiAgI1xuICAjIFRoaXMgZnVuY3Rpb25zIGNsb3NlIHRvIHRoZSBkZWNsYXJhdGl2ZSBldmVudHMgaGFzaDsgdXNlIGFzIGZvbGxvd3M6XG4gICMgcmVnaW9uczpcbiAgIyAgICdyZWdpb24xJzogJy5jbGFzcydcbiAgIyAgICdyZWdpb24yJzogJyNpZCdcbiAgcmVnaW9uczogbnVsbFxuXG4gICMgUmVnaW9uIGFwcGxpY2F0aW9uIGlzIHRoZSByZXZlcnNlOyB5b3UncmUgc3BlY2lmeWluZyB0aGF0IHRoaXMgdmlld1xuICAjIHdpbGwgYmUgaW5zZXJ0ZWQgaW50byB0aGUgRE9NIGF0IHRoZSBuYW1lZCByZWdpb24uIEVycm9yIHRocm93biBpZlxuICAjIHRoZSByZWdpb24gaXMgdW5yZWdpc3RlcmVkIGF0IHRoZSB0aW1lIG9mIGluaXRpYWxpemF0aW9uLlxuICAjIFNldCB0aGUgcmVnaW9uIG5hbWUgb24geW91ciBkZXJpdmVkIGNsYXNzIG9yIHBhc3MgaXQgaW50byB0aGVcbiAgIyBjb25zdHJ1Y3RvciBpbiBjb250cm9sbGVyIGFjdGlvbi5cbiAgcmVnaW9uOiBudWxsXG5cbiAgIyBBIHZpZXcgaXMgYHN0YWxlYCB3aGVuIGl0IGhhcyBiZWVuIHByZXZpb3VzbHkgY29tcG9zZWQgYnkgdGhlIGxhc3RcbiAgIyByb3V0ZSBidXQgaGFzIG5vdCB5ZXQgYmVlbiBjb21wb3NlZCBieSB0aGUgY3VycmVudCByb3V0ZS5cbiAgc3RhbGU6IGZhbHNlXG5cbiAgIyBGbGFnIHdoZXRoZXIgdG8gd3JhcCBhIHZpZXcgd2l0aCB0aGUgYHRhZ05hbWVgIGVsZW1lbnQgd2hlblxuICAjIHJlbmRlcmluZyBpbnRvIGEgcmVnaW9uLlxuICBub1dyYXA6IGZhbHNlXG5cbiAgIyBTcGVjaWZpZXMgaWYgY3VycmVudCBlbGVtZW50IHNob3VsZCBiZSBrZXB0IGluIERPTSBhZnRlciBkaXNwb3NhbC5cbiAga2VlcEVsZW1lbnQ6IGZhbHNlXG5cbiAgIyBTdWJ2aWV3c1xuICAjIC0tLS0tLS0tXG5cbiAgIyBMaXN0IG9mIHN1YnZpZXdzLlxuICBzdWJ2aWV3czogbnVsbFxuICBzdWJ2aWV3c0J5TmFtZTogbnVsbFxuXG4gICMgSW5pdGlhbGl6YXRpb25cbiAgIyAtLS0tLS0tLS0tLS0tLVxuXG4gICMgTGlzdCBvZiBvcHRpb25zIHRoYXQgd2lsbCBiZSBwaWNrZWQgZnJvbSBjb25zdHJ1Y3Rvci5cbiAgIyBFYXN5IHRvIGV4dGVuZDogYG9wdGlvbk5hbWVzOiBWaWV3OjpvcHRpb25OYW1lcy5jb25jYXQgWyd0ZW1wbGF0ZSddYFxuICBvcHRpb25OYW1lczogW1xuICAgICdhdXRvQXR0YWNoJywgJ2F1dG9SZW5kZXInLFxuICAgICdjb250YWluZXInLCAnY29udGFpbmVyTWV0aG9kJyxcbiAgICAncmVnaW9uJywgJ3JlZ2lvbnMnXG4gICAgJ25vV3JhcCdcbiAgXVxuXG4gIGNvbnN0cnVjdG9yOiAob3B0aW9ucyA9IHt9KSAtPlxuICAgICMgQ29weSBzb21lIG9wdGlvbnMgdG8gaW5zdGFuY2UgcHJvcGVydGllcy5cbiAgICBmb3Iga2V5IGluIE9iamVjdC5rZXlzIG9wdGlvbnNcbiAgICAgIGlmIGtleSBpbiBAb3B0aW9uTmFtZXNcbiAgICAgICAgQFtrZXldID0gb3B0aW9uc1trZXldXG5cbiAgICAjIFdyYXAgYHJlbmRlcmAgc28gYGF0dGFjaGAgaXMgY2FsbGVkIGFmdGVyd2FyZHMuXG4gICAgIyBFbmNsb3NlIHRoZSBvcmlnaW5hbCBmdW5jdGlvbi5cbiAgICByZW5kZXIgPSBAcmVuZGVyXG4gICAgIyBDcmVhdGUgdGhlIHdyYXBwZXIgbWV0aG9kLlxuICAgIEByZW5kZXIgPSAtPlxuICAgICAgIyBTdG9wIGlmIHRoZSBpbnN0YW5jZSB3YXMgYWxyZWFkeSBkaXNwb3NlZC5cbiAgICAgIHJldHVybiBmYWxzZSBpZiBAZGlzcG9zZWRcbiAgICAgICMgQ2FsbCB0aGUgb3JpZ2luYWwgbWV0aG9kLlxuICAgICAgcmV0dXJuVmFsdWUgPSByZW5kZXIuYXBwbHkgdGhpcywgYXJndW1lbnRzXG4gICAgICAjIEF0dGFjaCB0byBET00uXG4gICAgICBAYXR0YWNoIGFyZ3VtZW50cy4uLiBpZiBAYXV0b0F0dGFjaFxuICAgICAgIyBSZXR1cm4gdmFsdWUgZnJvbSBvcmlnaW4gbWV0aG9kLlxuICAgICAgcmV0dXJuVmFsdWVcblxuICAgICMgSW5pdGlhbGl6ZSBzdWJ2aWV3cyBjb2xsZWN0aW9ucy5cbiAgICBAc3Vidmlld3MgPSBbXVxuICAgIEBzdWJ2aWV3c0J5TmFtZSA9IHt9XG5cbiAgICBpZiBAbm9XcmFwXG4gICAgICBpZiBAcmVnaW9uXG4gICAgICAgIHJlZ2lvbiA9IG1lZGlhdG9yLmV4ZWN1dGUgJ3JlZ2lvbjpmaW5kJywgQHJlZ2lvblxuICAgICAgICAjIFNldCB0aGUgYHRoaXMuZWxgIHRvIGJlIHRoZSBjbG9zZXN0IHJlbGV2YW50IGNvbnRhaW5lci5cbiAgICAgICAgaWYgcmVnaW9uP1xuICAgICAgICAgIEBlbCA9XG4gICAgICAgICAgICBpZiByZWdpb24uaW5zdGFuY2UuY29udGFpbmVyP1xuICAgICAgICAgICAgICBpZiByZWdpb24uaW5zdGFuY2UucmVnaW9uP1xuICAgICAgICAgICAgICAgICQocmVnaW9uLmluc3RhbmNlLmNvbnRhaW5lcikuZmluZCByZWdpb24uc2VsZWN0b3JcbiAgICAgICAgICAgICAgZWxzZVxuICAgICAgICAgICAgICAgIHJlZ2lvbi5pbnN0YW5jZS5jb250YWluZXJcbiAgICAgICAgICAgIGVsc2VcbiAgICAgICAgICAgICAgcmVnaW9uLmluc3RhbmNlLiQgcmVnaW9uLnNlbGVjdG9yXG5cbiAgICAgIEBlbCA9IEBjb250YWluZXIgaWYgQGNvbnRhaW5lclxuXG4gICAgIyBDYWxsIEJhY2tib25l4oCZcyBjb25zdHJ1Y3Rvci5cbiAgICBzdXBlclxuXG4gICAgIyBTZXQgdXAgZGVjbGFyYXRpdmUgYmluZGluZ3MgYWZ0ZXIgYGluaXRpYWxpemVgIGhhcyBiZWVuIGNhbGxlZFxuICAgICMgc28gaW5pdGlhbGl6ZSBtYXkgc2V0IG1vZGVsL2NvbGxlY3Rpb24gYW5kIGNyZWF0ZSBvciBiaW5kIG1ldGhvZHMuXG4gICAgQGRlbGVnYXRlTGlzdGVuZXJzKClcblxuICAgICMgTGlzdGVuIGZvciBkaXNwb3NhbCBvZiB0aGUgbW9kZWwgb3IgY29sbGVjdGlvbi5cbiAgICAjIElmIHRoZSBtb2RlbCBpcyBkaXNwb3NlZCwgYXV0b21hdGljYWxseSBkaXNwb3NlIHRoZSBhc3NvY2lhdGVkIHZpZXcuXG4gICAgQGxpc3RlblRvIEBtb2RlbCwgJ2Rpc3Bvc2UnLCBAZGlzcG9zZSBpZiBAbW9kZWxcbiAgICBpZiBAY29sbGVjdGlvblxuICAgICAgQGxpc3RlblRvIEBjb2xsZWN0aW9uLCAnZGlzcG9zZScsIChzdWJqZWN0KSA9PlxuICAgICAgICBAZGlzcG9zZSgpIGlmIG5vdCBzdWJqZWN0IG9yIHN1YmplY3QgaXMgQGNvbGxlY3Rpb25cblxuICAgICMgUmVnaXN0ZXIgYWxsIGV4cG9zZWQgcmVnaW9ucy5cbiAgICBtZWRpYXRvci5leGVjdXRlICdyZWdpb246cmVnaXN0ZXInLCB0aGlzIGlmIEByZWdpb25zP1xuXG4gICAgIyBSZW5kZXIgYXV0b21hdGljYWxseSBpZiBzZXQgYnkgb3B0aW9ucyBvciBpbnN0YW5jZSBwcm9wZXJ0eS5cbiAgICBAcmVuZGVyKCkgaWYgQGF1dG9SZW5kZXJcblxuICBmaW5kOiAoc2VsZWN0b3IpIC0+XG4gICAgaWYgJFxuICAgICAgQCRlbC5maW5kIHNlbGVjdG9yXG4gICAgZWxzZVxuICAgICAgQGVsLnF1ZXJ5U2VsZWN0b3Igc2VsZWN0b3JcblxuICAjIFVzZXIgaW5wdXQgZXZlbnQgaGFuZGxpbmdcbiAgIyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgIyBFdmVudCBoYW5kbGluZyB1c2luZyBldmVudCBkZWxlZ2F0aW9uXG4gICMgUmVnaXN0ZXIgYSBoYW5kbGVyIGZvciBhIHNwZWNpZmljIGV2ZW50IHR5cGVcbiAgIyBGb3IgdGhlIHdob2xlIHZpZXc6XG4gICMgICBkZWxlZ2F0ZShldmVudE5hbWUsIGhhbmRsZXIpXG4gICMgICBlLmcuXG4gICMgICBAZGVsZWdhdGUoJ2NsaWNrJywgQGNsaWNrZWQpXG4gICMgRm9yIGFuIGVsZW1lbnQgaW4gdGhlIHBhc3NpbmcgYSBzZWxlY3RvcjpcbiAgIyAgIGRlbGVnYXRlKGV2ZW50TmFtZSwgc2VsZWN0b3IsIGhhbmRsZXIpXG4gICMgICBlLmcuXG4gICMgICBAZGVsZWdhdGUoJ2NsaWNrJywgJ2J1dHRvbi5jb25maXJtJywgQGNvbmZpcm0pXG4gIGRlbGVnYXRlOiAoZXZlbnROYW1lLCBzZWNvbmQsIHRoaXJkKSAtPlxuICAgIGlmIHR5cGVvZiBldmVudE5hbWUgaXNudCAnc3RyaW5nJ1xuICAgICAgdGhyb3cgbmV3IFR5cGVFcnJvciAnVmlldyNkZWxlZ2F0ZTogZmlyc3QgYXJndW1lbnQgbXVzdCBiZSBhIHN0cmluZydcblxuICAgIHN3aXRjaCBhcmd1bWVudHMubGVuZ3RoXG4gICAgICB3aGVuIDJcbiAgICAgICAgaGFuZGxlciA9IHNlY29uZFxuICAgICAgd2hlbiAzXG4gICAgICAgIHNlbGVjdG9yID0gc2Vjb25kXG4gICAgICAgIGhhbmRsZXIgPSB0aGlyZFxuICAgICAgICBpZiB0eXBlb2Ygc2VsZWN0b3IgaXNudCAnc3RyaW5nJ1xuICAgICAgICAgIHRocm93IG5ldyBUeXBlRXJyb3IgJ1ZpZXcjZGVsZWdhdGU6ICcgK1xuICAgICAgICAgICAgJ3NlY29uZCBhcmd1bWVudCBtdXN0IGJlIGEgc3RyaW5nJ1xuICAgICAgZWxzZVxuICAgICAgICB0aHJvdyBuZXcgVHlwZUVycm9yICdWaWV3I2RlbGVnYXRlOiAnICtcbiAgICAgICAgICAnb25seSB0d28gb3IgdGhyZWUgYXJndW1lbnRzIGFyZSBhbGxvd2VkJ1xuXG4gICAgaWYgdHlwZW9mIGhhbmRsZXIgaXNudCAnZnVuY3Rpb24nXG4gICAgICB0aHJvdyBuZXcgVHlwZUVycm9yICdWaWV3I2RlbGVnYXRlOiAnICtcbiAgICAgICAgJ2hhbmRsZXIgYXJndW1lbnQgbXVzdCBiZSBmdW5jdGlvbidcblxuICAgICMgQWRkIGFuIGV2ZW50IG5hbWVzcGFjZSwgYmluZCBoYW5kbGVyIGl0IHRvIHZpZXcuXG4gICAgIyBCaW5kIGhhbmRsZXIgdG8gdmlldy5cbiAgICBib3VuZCA9IGhhbmRsZXIuYmluZCB0aGlzXG5cbiAgICBpZiAkXG4gICAgICBldmVudHMgPSBldmVudE5hbWVcbiAgICAgICAgLnNwbGl0ICcgJ1xuICAgICAgICAubWFwIChuYW1lKSA9PiBcIiN7bmFtZX0uZGVsZWdhdGVFdmVudHMje0BjaWR9XCJcbiAgICAgICAgLmpvaW4gJyAnXG5cbiAgICAgIEAkZWwub24gZXZlbnRzLCBzZWxlY3RvciwgYm91bmRcbiAgICBlbHNlXG4gICAgICBmb3IgZXZlbnQgaW4gZXZlbnROYW1lLnNwbGl0ICcgJ1xuICAgICAgICBzdXBlciBldmVudCwgc2VsZWN0b3IsIGJvdW5kXG5cbiAgICAjIFJldHVybiB0aGUgYm91bmQgaGFuZGxlci5cbiAgICBib3VuZFxuXG4gICMgQ29weSBvZiBvcmlnaW5hbCBCYWNrYm9uZSBtZXRob2Qgd2l0aG91dCBgdW5kZWxlZ2F0ZUV2ZW50c2AgY2FsbC5cbiAgX2RlbGVnYXRlRXZlbnRzOiAoZXZlbnRzKSAtPlxuICAgIGZvciBrZXkgaW4gT2JqZWN0LmtleXMgZXZlbnRzXG4gICAgICB2YWx1ZSA9IGV2ZW50c1trZXldXG4gICAgICBoYW5kbGVyID0gaWYgdHlwZW9mIHZhbHVlIGlzICdmdW5jdGlvbicgdGhlbiB2YWx1ZSBlbHNlIEBbdmFsdWVdXG4gICAgICB0aHJvdyBuZXcgRXJyb3IgXCJNZXRob2QgYCN7dmFsdWV9YCBkb2VzIG5vdCBleGlzdFwiIHVubGVzcyBoYW5kbGVyXG5cbiAgICAgIG1hdGNoID0gL14oXFxTKylcXHMqKC4qKSQvLmV4ZWMga2V5XG4gICAgICBAZGVsZWdhdGUgbWF0Y2hbMV0sIG1hdGNoWzJdLCBoYW5kbGVyXG5cbiAgICByZXR1cm5cblxuICAjIE92ZXJyaWRlIEJhY2tib25lcyBtZXRob2QgdG8gY29tYmluZSB0aGUgZXZlbnRzXG4gICMgb2YgdGhlIHBhcmVudCB2aWV3IGlmIGl0IGV4aXN0cy5cbiAgZGVsZWdhdGVFdmVudHM6IChldmVudHMsIGtlZXBPbGQpIC0+XG4gICAgQHVuZGVsZWdhdGVFdmVudHMoKSB1bmxlc3Mga2VlcE9sZFxuICAgIHJldHVybiBAX2RlbGVnYXRlRXZlbnRzIGV2ZW50cyBpZiBldmVudHNcbiAgICAjIENhbGwgX2RlbGVnYXRlRXZlbnRzIGZvciBhbGwgc3VwZXJjbGFzc2Vz4oCZIGBldmVudHNgLlxuICAgIGZvciBjbGFzc0V2ZW50cyBpbiB1dGlscy5nZXRBbGxQcm9wZXJ0eVZlcnNpb25zIHRoaXMsICdldmVudHMnXG4gICAgICBjbGFzc0V2ZW50cyA9IGNsYXNzRXZlbnRzLmNhbGwgdGhpcyBpZiB0eXBlb2YgY2xhc3NFdmVudHMgaXMgJ2Z1bmN0aW9uJ1xuICAgICAgQF9kZWxlZ2F0ZUV2ZW50cyBjbGFzc0V2ZW50c1xuXG4gICAgcmV0dXJuXG5cbiAgIyBSZW1vdmUgYWxsIGhhbmRsZXJzIHJlZ2lzdGVyZWQgd2l0aCBAZGVsZWdhdGUuXG4gIHVuZGVsZWdhdGU6IChldmVudE5hbWUgPSAnJywgc2Vjb25kKSAtPlxuICAgIGlmIHR5cGVvZiBldmVudE5hbWUgaXNudCAnc3RyaW5nJ1xuICAgICAgdGhyb3cgbmV3IFR5cGVFcnJvciAnVmlldyN1bmRlbGVnYXRlOiBmaXJzdCBhcmd1bWVudCBtdXN0IGJlIGEgc3RyaW5nJ1xuXG4gICAgc3dpdGNoIGFyZ3VtZW50cy5sZW5ndGhcbiAgICAgIHdoZW4gMlxuICAgICAgICBzZWxlY3RvciA9IHNlY29uZCBpZiB0eXBlb2Ygc2Vjb25kIGlzICdzdHJpbmcnXG4gICAgICB3aGVuIDNcbiAgICAgICAgc2VsZWN0b3IgPSBzZWNvbmRcbiAgICAgICAgaWYgdHlwZW9mIHNlbGVjdG9yIGlzbnQgJ3N0cmluZydcbiAgICAgICAgICB0aHJvdyBuZXcgVHlwZUVycm9yICdWaWV3I3VuZGVsZWdhdGU6ICcgK1xuICAgICAgICAgICAgJ3NlY29uZCBhcmd1bWVudCBtdXN0IGJlIGEgc3RyaW5nJ1xuXG4gICAgaWYgJFxuICAgICAgZXZlbnRzID0gZXZlbnROYW1lXG4gICAgICAgIC5zcGxpdCAnICdcbiAgICAgICAgLm1hcCAobmFtZSkgPT4gXCIje25hbWV9LmRlbGVnYXRlRXZlbnRzI3tAY2lkfVwiXG4gICAgICAgIC5qb2luICcgJ1xuXG4gICAgICBAJGVsLm9mZiBldmVudHMsIHNlbGVjdG9yXG4gICAgZWxzZVxuICAgICAgaWYgZXZlbnROYW1lXG4gICAgICAgIHN1cGVyIGV2ZW50TmFtZSwgc2VsZWN0b3JcbiAgICAgIGVsc2VcbiAgICAgICAgQHVuZGVsZWdhdGVFdmVudHMoKVxuXG4gICMgSGFuZGxlIGRlY2xhcmF0aXZlIGV2ZW50IGJpbmRpbmdzIGZyb20gYGxpc3RlbmBcbiAgZGVsZWdhdGVMaXN0ZW5lcnM6IC0+XG4gICAgcmV0dXJuIHVubGVzcyBAbGlzdGVuXG5cbiAgICAjIFdhbGsgYWxsIGBsaXN0ZW5gIGhhc2hlcyBpbiB0aGUgcHJvdG90eXBlIGNoYWluLlxuICAgIGZvciB2ZXJzaW9uIGluIHV0aWxzLmdldEFsbFByb3BlcnR5VmVyc2lvbnMgdGhpcywgJ2xpc3RlbidcbiAgICAgIHZlcnNpb24gPSB2ZXJzaW9uLmNhbGwgdGhpcyBpZiB0eXBlb2YgdmVyc2lvbiBpcyAnZnVuY3Rpb24nXG4gICAgICBmb3Iga2V5IGluIE9iamVjdC5rZXlzIHZlcnNpb25cbiAgICAgICAgIyBHZXQgdGhlIG1ldGhvZCwgZW5zdXJlIGl0IGlzIGEgZnVuY3Rpb24uXG4gICAgICAgIG1ldGhvZCA9IHZlcnNpb25ba2V5XVxuICAgICAgICBpZiB0eXBlb2YgbWV0aG9kIGlzbnQgJ2Z1bmN0aW9uJ1xuICAgICAgICAgIG1ldGhvZCA9IEBbbWV0aG9kXVxuICAgICAgICBpZiB0eXBlb2YgbWV0aG9kIGlzbnQgJ2Z1bmN0aW9uJ1xuICAgICAgICAgIHRocm93IG5ldyBFcnJvciAnVmlldyNkZWxlZ2F0ZUxpc3RlbmVyczogJyArXG4gICAgICAgICAgICBcImxpc3RlbmVyIGZvciBgI3trZXl9YCBtdXN0IGJlIGZ1bmN0aW9uXCJcblxuICAgICAgICAjIFNwbGl0IGV2ZW50IG5hbWUgYW5kIHRhcmdldC5cbiAgICAgICAgW2V2ZW50TmFtZSwgdGFyZ2V0XSA9IGtleS5zcGxpdCAnICdcbiAgICAgICAgQGRlbGVnYXRlTGlzdGVuZXIgZXZlbnROYW1lLCB0YXJnZXQsIG1ldGhvZFxuXG4gICAgcmV0dXJuXG5cbiAgZGVsZWdhdGVMaXN0ZW5lcjogKGV2ZW50TmFtZSwgdGFyZ2V0LCBjYWxsYmFjaykgLT5cbiAgICBpZiB0YXJnZXQgaW4gWydtb2RlbCcsICdjb2xsZWN0aW9uJ11cbiAgICAgIHByb3AgPSBAW3RhcmdldF1cbiAgICAgIEBsaXN0ZW5UbyBwcm9wLCBldmVudE5hbWUsIGNhbGxiYWNrIGlmIHByb3BcbiAgICBlbHNlIGlmIHRhcmdldCBpcyAnbWVkaWF0b3InXG4gICAgICBAc3Vic2NyaWJlRXZlbnQgZXZlbnROYW1lLCBjYWxsYmFja1xuICAgIGVsc2UgaWYgbm90IHRhcmdldFxuICAgICAgQG9uIGV2ZW50TmFtZSwgY2FsbGJhY2ssIHRoaXNcblxuICAgIHJldHVyblxuXG4gICMgUmVnaW9uIG1hbmFnZW1lbnRcbiAgIyAtLS0tLS0tLS0tLS0tLS0tLVxuXG4gICMgRnVuY3Rpb25hbGx5IHJlZ2lzdGVyIGEgc2luZ2xlIHJlZ2lvbi5cbiAgcmVnaXN0ZXJSZWdpb246IChuYW1lLCBzZWxlY3RvcikgLT5cbiAgICBtZWRpYXRvci5leGVjdXRlICdyZWdpb246cmVnaXN0ZXInLCB0aGlzLCBuYW1lLCBzZWxlY3RvclxuXG4gICMgRnVuY3Rpb25hbGx5IHVucmVnaXN0ZXIgYSBzaW5nbGUgcmVnaW9uIGJ5IG5hbWUuXG4gIHVucmVnaXN0ZXJSZWdpb246IChuYW1lKSAtPlxuICAgIG1lZGlhdG9yLmV4ZWN1dGUgJ3JlZ2lvbjp1bnJlZ2lzdGVyJywgdGhpcywgbmFtZVxuXG4gICMgVW5yZWdpc3RlciBhbGwgcmVnaW9uczsgY2FsbGVkIHVwb24gdmlldyBkaXNwb3NhbC5cbiAgdW5yZWdpc3RlckFsbFJlZ2lvbnM6IC0+XG4gICAgbWVkaWF0b3IuZXhlY3V0ZSBuYW1lOiAncmVnaW9uOnVucmVnaXN0ZXInLCBzaWxlbnQ6IHRydWUsIHRoaXNcblxuICAjIFN1YnZpZXdzXG4gICMgLS0tLS0tLS1cblxuICAjIEdldHRpbmcgb3IgYWRkaW5nIGEgc3Vidmlldy5cbiAgc3VidmlldzogKG5hbWUsIHZpZXcpIC0+XG4gICAgIyBJbml0aWFsaXplIHN1YnZpZXdzIGNvbGxlY3Rpb25zIGlmIHRoZXkgZG9u4oCZdCBleGlzdCB5ZXQuXG4gICAgc3Vidmlld3MgPSBAc3Vidmlld3NcbiAgICBieU5hbWUgPSBAc3Vidmlld3NCeU5hbWVcblxuICAgIGlmIG5hbWUgYW5kIHZpZXdcbiAgICAgICMgQWRkIHRoZSBzdWJ2aWV3LCBlbnN1cmUgaXTigJlzIHVuaXF1ZS5cbiAgICAgIEByZW1vdmVTdWJ2aWV3IG5hbWVcbiAgICAgIHN1YnZpZXdzLnB1c2ggdmlld1xuICAgICAgYnlOYW1lW25hbWVdID0gdmlld1xuICAgICAgdmlld1xuICAgIGVsc2UgaWYgbmFtZVxuICAgICAgIyBHZXQgYW5kIHJldHVybiB0aGUgc3VidmlldyBieSB0aGUgZ2l2ZW4gbmFtZS5cbiAgICAgIGJ5TmFtZVtuYW1lXVxuXG4gICMgUmVtb3ZpbmcgYSBzdWJ2aWV3LlxuICByZW1vdmVTdWJ2aWV3OiAobmFtZU9yVmlldykgLT5cbiAgICByZXR1cm4gdW5sZXNzIG5hbWVPclZpZXdcbiAgICBzdWJ2aWV3cyA9IEBzdWJ2aWV3c1xuICAgIGJ5TmFtZSA9IEBzdWJ2aWV3c0J5TmFtZVxuXG4gICAgaWYgdHlwZW9mIG5hbWVPclZpZXcgaXMgJ3N0cmluZydcbiAgICAgICMgTmFtZSBnaXZlbiwgc2VhcmNoIGZvciBhIHN1YnZpZXcgYnkgbmFtZS5cbiAgICAgIG5hbWUgPSBuYW1lT3JWaWV3XG4gICAgICB2aWV3ID0gYnlOYW1lW25hbWVdXG4gICAgZWxzZVxuICAgICAgIyBWaWV3IGluc3RhbmNlIGdpdmVuLCBzZWFyY2ggZm9yIHRoZSBjb3JyZXNwb25kaW5nIG5hbWUuXG4gICAgICB2aWV3ID0gbmFtZU9yVmlld1xuICAgICAgT2JqZWN0LmtleXMoYnlOYW1lKS5zb21lIChrZXkpIC0+XG4gICAgICAgIG5hbWUgPSBrZXkgaWYgYnlOYW1lW2tleV0gaXMgdmlld1xuXG4gICAgIyBCcmVhayBpZiBubyB2aWV3IGFuZCBuYW1lIHdlcmUgZm91bmQuXG4gICAgcmV0dXJuIHVubGVzcyBuYW1lIGFuZCB2aWV3Py5kaXNwb3NlXG5cbiAgICAjIERpc3Bvc2UgdGhlIHZpZXcuXG4gICAgdmlldy5kaXNwb3NlKClcblxuICAgICMgUmVtb3ZlIHRoZSBzdWJ2aWV3IGZyb20gdGhlIGxpc3RzLlxuICAgIGluZGV4ID0gc3Vidmlld3MuaW5kZXhPZiB2aWV3XG4gICAgc3Vidmlld3Muc3BsaWNlIGluZGV4LCAxIGlmIGluZGV4IGlzbnQgLTFcbiAgICBkZWxldGUgYnlOYW1lW25hbWVdXG5cbiAgIyBSZW5kZXJpbmdcbiAgIyAtLS0tLS0tLS1cblxuICAjIEdldCB0aGUgbW9kZWwvY29sbGVjdGlvbiBkYXRhIGZvciB0aGUgdGVtcGxhdGluZyBmdW5jdGlvblxuICAjIFVzZXMgb3B0aW1pemVkIENoYXBsaW4gc2VyaWFsaXphdGlvbiBpZiBhdmFpbGFibGUuXG4gIGdldFRlbXBsYXRlRGF0YTogLT5cbiAgICBkYXRhID0gaWYgQG1vZGVsXG4gICAgICB1dGlscy5zZXJpYWxpemUgQG1vZGVsXG4gICAgZWxzZSBpZiBAY29sbGVjdGlvblxuICAgICAge2l0ZW1zOiB1dGlscy5zZXJpYWxpemUoQGNvbGxlY3Rpb24pLCBsZW5ndGg6IEBjb2xsZWN0aW9uLmxlbmd0aH1cbiAgICBlbHNlXG4gICAgICB7fVxuXG4gICAgc291cmNlID0gQG1vZGVsIG9yIEBjb2xsZWN0aW9uXG4gICAgaWYgc291cmNlXG4gICAgICAjIElmIHRoZSBtb2RlbC9jb2xsZWN0aW9uIGlzIGEgU3luY01hY2hpbmUsIGFkZCBhIGBzeW5jZWRgIGZsYWcsXG4gICAgICAjIGJ1dCBvbmx5IGlmIGl04oCZcyBub3QgcHJlc2VudCB5ZXQuXG4gICAgICBpZiB0eXBlb2Ygc291cmNlLmlzU3luY2VkIGlzICdmdW5jdGlvbicgYW5kIG5vdCAoJ3N5bmNlZCcgb2YgZGF0YSlcbiAgICAgICAgZGF0YS5zeW5jZWQgPSBzb3VyY2UuaXNTeW5jZWQoKVxuXG4gICAgZGF0YVxuXG4gICMgUmV0dXJucyB0aGUgY29tcGlsZWQgdGVtcGxhdGUgZnVuY3Rpb24uXG4gIGdldFRlbXBsYXRlRnVuY3Rpb246IC0+XG4gICAgIyBDaGFwbGluIGRvZXNu4oCZdCBkZWZpbmUgaG93IHlvdSBsb2FkIGFuZCBjb21waWxlIHRlbXBsYXRlcyBpbiBvcmRlciB0b1xuICAgICMgcmVuZGVyIHZpZXdzLiBUaGUgZXhhbXBsZSBhcHBsaWNhdGlvbiB1c2VzIEhhbmRsZWJhcnMgYW5kIFJlcXVpcmVKU1xuICAgICMgdG8gbG9hZCBhbmQgY29tcGlsZSB0ZW1wbGF0ZXMgb24gdGhlIGNsaWVudCBzaWRlLiBTZWUgdGhlIGRlcml2ZWRcbiAgICAjIFZpZXcgY2xhc3MgaW4gdGhlXG4gICAgIyBbZXhhbXBsZSBhcHBsaWNhdGlvbl0oaHR0cHM6Ly9naXRodWIuY29tL2NoYXBsaW5qcy9mYWNlYm9vay1leGFtcGxlKS5cbiAgICAjXG4gICAgIyBJZiB5b3UgcHJlY29tcGlsZSB0ZW1wbGF0ZXMgdG8gSmF2YVNjcmlwdCBmdW5jdGlvbnMgb24gdGhlIHNlcnZlcixcbiAgICAjIHlvdSBtaWdodCBqdXN0IHJldHVybiBhIHJlZmVyZW5jZSB0byB0aGF0IGZ1bmN0aW9uLlxuICAgICMgU2V2ZXJhbCBwcmVjb21waWxlcnMgY3JlYXRlIGEgZ2xvYmFsIGBKU1RgIGhhc2ggd2hpY2ggc3RvcmVzIHRoZVxuICAgICMgdGVtcGxhdGUgZnVuY3Rpb25zLiBZb3UgY2FuIGdldCB0aGUgZnVuY3Rpb24gYnkgdGhlIHRlbXBsYXRlIG5hbWU6XG4gICAgIyBKU1RbQHRlbXBsYXRlTmFtZV1cbiAgICB0aHJvdyBuZXcgRXJyb3IgJ1ZpZXcjZ2V0VGVtcGxhdGVGdW5jdGlvbiBtdXN0IGJlIG92ZXJyaWRkZW4nXG5cbiAgIyBNYWluIHJlbmRlciBmdW5jdGlvbi5cbiAgIyBUaGlzIG1ldGhvZCBpcyBib3VuZCB0byB0aGUgaW5zdGFuY2UgaW4gdGhlIGNvbnN0cnVjdG9yIChzZWUgYWJvdmUpXG4gIHJlbmRlcjogLT5cbiAgICAjIERvIG5vdCByZW5kZXIgaWYgdGhlIG9iamVjdCB3YXMgZGlzcG9zZWRcbiAgICAjIChyZW5kZXIgbWlnaHQgYmUgY2FsbGVkIGFzIGFuIGV2ZW50IGhhbmRsZXIgd2hpY2ggd2FzbuKAmXRcbiAgICAjIHJlbW92ZWQgY29ycmVjdGx5KS5cbiAgICByZXR1cm4gZmFsc2UgaWYgQGRpc3Bvc2VkXG5cbiAgICB0ZW1wbGF0ZUZ1bmMgPSBAZ2V0VGVtcGxhdGVGdW5jdGlvbigpXG5cbiAgICBpZiB0eXBlb2YgdGVtcGxhdGVGdW5jIGlzICdmdW5jdGlvbidcbiAgICAgICMgQ2FsbCB0aGUgdGVtcGxhdGUgZnVuY3Rpb24gcGFzc2luZyB0aGUgdGVtcGxhdGUgZGF0YS5cbiAgICAgIGh0bWwgPSB0ZW1wbGF0ZUZ1bmMgQGdldFRlbXBsYXRlRGF0YSgpXG5cbiAgICAgICMgUmVwbGFjZSBIVE1MXG4gICAgICBpZiBAbm9XcmFwXG4gICAgICAgIGVsID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCAnZGl2J1xuICAgICAgICBlbC5pbm5lckhUTUwgPSBodG1sXG5cbiAgICAgICAgaWYgZWwuY2hpbGRyZW4ubGVuZ3RoID4gMVxuICAgICAgICAgIHRocm93IG5ldyBFcnJvciAnVGhlcmUgbXVzdCBiZSBhIHNpbmdsZSB0b3AtbGV2ZWwgZWxlbWVudCAnICtcbiAgICAgICAgICAgICd3aGVuIHVzaW5nIGBub1dyYXBgJ1xuXG4gICAgICAgICMgVW5kZWxlZ2F0ZSB0aGUgY29udGFpbmVyIGV2ZW50cyB0aGF0IHdlcmUgc2V0dXAuXG4gICAgICAgIEB1bmRlbGVnYXRlRXZlbnRzKClcbiAgICAgICAgIyBEZWxlZ2F0ZSBldmVudHMgdG8gdGhlIHRvcC1sZXZlbCBjb250YWluZXIgaW4gdGhlIHRlbXBsYXRlLlxuICAgICAgICBAc2V0RWxlbWVudCBlbC5maXJzdENoaWxkLCB0cnVlXG4gICAgICBlbHNlXG4gICAgICAgIHNldEhUTUwgdGhpcywgaHRtbFxuXG4gICAgIyBSZXR1cm4gdGhlIHZpZXcuXG4gICAgdGhpc1xuXG4gICMgVGhpcyBtZXRob2QgaXMgY2FsbGVkIGFmdGVyIGEgc3BlY2lmaWMgYHJlbmRlcmAgb2YgYSBkZXJpdmVkIGNsYXNzLlxuICBhdHRhY2g6IC0+XG4gICAgIyBBdHRlbXB0IHRvIGJpbmQgdGhpcyB2aWV3IHRvIGl0cyBuYW1lZCByZWdpb24uXG4gICAgbWVkaWF0b3IuZXhlY3V0ZSAncmVnaW9uOnNob3cnLCBAcmVnaW9uLCB0aGlzIGlmIEByZWdpb24/XG5cbiAgICAjIEF1dG9tYXRpY2FsbHkgYXBwZW5kIHRvIERPTSBpZiB0aGUgY29udGFpbmVyIGVsZW1lbnQgaXMgc2V0LlxuICAgIGlmIEBjb250YWluZXIgYW5kIG5vdCBkb2N1bWVudC5ib2R5LmNvbnRhaW5zIEBlbFxuICAgICAgYXR0YWNoIHRoaXNcbiAgICAgICMgVHJpZ2dlciBhbiBldmVudC5cbiAgICAgIEB0cmlnZ2VyICdhZGRlZFRvRE9NJ1xuXG4gICMgRGlzcG9zYWxcbiAgIyAtLS0tLS0tLVxuXG4gIGRpc3Bvc2VkOiBmYWxzZVxuXG4gIGRpc3Bvc2U6IC0+XG4gICAgcmV0dXJuIGlmIEBkaXNwb3NlZFxuXG4gICAgIyBVbnJlZ2lzdGVyIGFsbCByZWdpb25zLlxuICAgIEB1bnJlZ2lzdGVyQWxsUmVnaW9ucygpXG5cbiAgICAjIERpc3Bvc2Ugc3Vidmlld3MuXG4gICAgc3Vidmlldy5kaXNwb3NlKCkgZm9yIHN1YnZpZXcgaW4gQHN1YnZpZXdzXG5cbiAgICAjIFVuYmluZCBoYW5kbGVycyBvZiBnbG9iYWwgZXZlbnRzLlxuICAgIEB1bnN1YnNjcmliZUFsbEV2ZW50cygpXG5cbiAgICAjIFJlbW92ZSBhbGwgZXZlbnQgaGFuZGxlcnMgb24gdGhpcyBtb2R1bGUuXG4gICAgQG9mZigpXG5cbiAgICAjIENoZWNrIGlmIHZpZXcgc2hvdWxkIGJlIHJlbW92ZWQgZnJvbSBET00uXG4gICAgaWYgQGtlZXBFbGVtZW50XG4gICAgICAjIFVuc3Vic2NyaWJlIGZyb20gYWxsIERPTSBldmVudHMuXG4gICAgICBAdW5kZWxlZ2F0ZUV2ZW50cygpXG4gICAgICBAdW5kZWxlZ2F0ZSgpXG4gICAgICAjIFVuYmluZCBhbGwgcmVmZXJlbmNlZCBoYW5kbGVycy5cbiAgICAgIEBzdG9wTGlzdGVuaW5nKClcbiAgICBlbHNlXG4gICAgICAjIFJlbW92ZSB0aGUgdG9wbW9zdCBlbGVtZW50IGZyb20gRE9NLiBUaGlzIGFsc28gcmVtb3ZlcyBhbGwgZXZlbnRcbiAgICAgICMgaGFuZGxlcnMgZnJvbSB0aGUgZWxlbWVudCBhbmQgYWxsIGl0cyBjaGlsZHJlbi5cbiAgICAgIEByZW1vdmUoKVxuXG4gICAgIyBSZW1vdmUgZWxlbWVudCByZWZlcmVuY2VzLCBvcHRpb25zLFxuICAgICMgbW9kZWwvY29sbGVjdGlvbiByZWZlcmVuY2VzIGFuZCBzdWJ2aWV3IGxpc3RzLlxuICAgIGRlbGV0ZSB0aGlzW3Byb3BdIGZvciBwcm9wIGluIFtcbiAgICAgICdlbCcsICckZWwnLFxuICAgICAgJ29wdGlvbnMnLCAnbW9kZWwnLCAnY29sbGVjdGlvbicsXG4gICAgICAnc3Vidmlld3MnLCAnc3Vidmlld3NCeU5hbWUnLFxuICAgICAgJ19jYWxsYmFja3MnXG4gICAgXVxuXG4gICAgIyBGaW5pc2hlZC5cbiAgICBAZGlzcG9zZWQgPSB0cnVlXG5cbiAgICAjIFlvdeKAmXJlIGZyb3plbiB3aGVuIHlvdXIgaGVhcnTigJlzIG5vdCBvcGVuLlxuICAgIE9iamVjdC5mcmVlemUgdGhpc1xuIl19
return require(1);
}))