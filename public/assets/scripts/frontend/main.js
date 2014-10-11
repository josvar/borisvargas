/*global require*/
'use strict';

require.config({
    shim: {},
    paths: {
        jquery: '../libs/jquery',
        backbone: '../libs/backbone',
        underscore: '../libs/lodash'
    }
});

require([
    'app',
    'routes/boris',
    'views/menu',
], function (app, Router, Menu) {
    window.onpopstate = function (event) {
        Backbone.trigger('popstate', event);
    };

    app.menu = new Menu({el: app.options.menu});
    app.router = new Router();

    Backbone.history.start({pushState: true});
});