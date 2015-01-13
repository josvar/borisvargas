define(function(require, exports, module) {
    "use strict";

    var $ = require('jquery');
    var _ = require('underscore');
    var Backbone = require('backbone');
    var Layout = require('layoutmanager');
    var Radio = require('radio');
    var app = module.exports;


    _.extend(app, Backbone.Events);
    _.extend(app, Radio.Commands);

    // selectores para las vistas y layouts
    app.options = {
    };

    app.navigate = function(route,  options){
        options || (options = {});
        Backbone.history.navigate(route, options);
    };

    Layout.configure({
        manage: true
    });



    // The root path to run the application through.
    exports.root = "/";

    app.start = function () {

    }
});