/*global require*/
'use strict';

require.config({
    shim: {
        'modernizr': {
            exports: 'Modernizr'
        }
    },
    paths: {
        modernizr: '../libs/modernizr',
        jquery: '../libs/jquery',
        backbone: '../libs/backbone',
        underscore: '../libs/lodash',
        radio: '../libs/backbone.radio',
        hogan: '../libs/hogan-3.0.2.amd',
        layoutmanager: '../libs/backbone.layoutmanager',
        pace: '../libs/pace'
    }
});

require([
    'app'
], function (App) {


    App.start();
    //window.onpopstate = function (event) {
    //    Backbone.trigger('popstate', event);
    //};
    //
    //app.menu = new Menu({el: app.options.menu});
    //app.router = new Router();
    //
    //Backbone.history.start({pushState: true});

    //Layout.configure({});
    //Header.start();
    //
    //var Backbone = require('backbone');
    //var Router = Backbone.Router.extend({
    //    routes: {
    //        "": "showHome",
    //        "about": "showAbout",
    //        "work": "showWork",
    //        "services": "showServices",
    //        "contact": "showContact"
    //    },
    //    showAbout: function () {
    //        App.command('set:active:header', 'about');
    //    }
    //});
    //new Router();
    //Backbone.history.start({pushState: true});


});