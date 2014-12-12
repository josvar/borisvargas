/*global require*/
'use strict';

require.config({
    shim: {},
    paths: {
        jquery: '../libs/jquery',
        backbone: '../libs/backbone',
        underscore: '../libs/lodash',
        radio: '../libs/backbone.radio'
    }
});

require([
    'app',
    'modules/header/header'
], function (App, Header) {
    //window.onpopstate = function (event) {
    //    Backbone.trigger('popstate', event);
    //};
    //
    //app.menu = new Menu({el: app.options.menu});
    //app.router = new Router();
    //
    //Backbone.history.start({pushState: true});

    Header.start();

    var Backbone = require('backbone');
    var Router = Backbone.Router.extend({
        routes: {
            "": "showHome",
            "about": "showAbout",
            "work": "showWork",
            "services": "showServices",
            "contact": "showContact"
        },
        showAbout: function () {
            App.command('set:active:header', 'about');
        }
    });
    new Router();
    Backbone.history.start({pushState: true});

});