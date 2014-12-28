/*global require*/
'use strict';

require.config({
    shim: {},
    paths: {
        jquery: '../libs/jquery',
        backbone: '../libs/backbone',
        underscore: '../libs/lodash',
        radio: '../libs/backbone.radio',
        hogan: '../libs/hogan-3.0.2.amd',
        layoutmanager: '../libs/backbone.layoutmanager'
    }
});

require([
    'app',
    'modules/header/header',
    'modules/presenter/presenter',
    'modules/thumbs/thumbs'
], function (App) {

    require([
        'modules/header/header',
        'modules/presenter/presenter',
        'modules/thumbs/thumbs'
    ], function (Header, presenter, thumbs) {
        presenter.start();
        thumbs.start();
        Backbone.history.start();
    });
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