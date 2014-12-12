define(function(require, exports, module) {
    "use strict";

    var $ = require('jquery');
    var _ = require('underscore');
    var Backbone = require('backbone');
    var Radio = require('radio');
    var app = module.exports;

    _.extend(app, Radio.Commands);

    app.options = {
        menu: $('nav ul.left'),
        content: $('.main-content')
    };

    app.navigate = function(route,  options){
        options || (options = {});
        Backbone.history.navigate(route, options);
    };


    // The root path to run the application through.
    exports.root = "/";

    app.start = function () {

    }
});