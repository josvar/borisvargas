define(function (require, exports, module) {
    "use strict";

    var $ = require('jquery');
    var _ = require('underscore');
    var Backbone = require('backbone');
    var Layout = require('layoutmanager');
    var Radio = require('radio');
    var Modernizr = require('modernizr');
    var pace = require('pace');
    var app = module.exports;

    _.extend(app, Backbone.Events);
    _.extend(app, Radio.Commands);

    // app global options
    app.options = {
        _token: $('meta[name=csrf-token]').attr("content")
    };

    pace.start({
        document: false,
        restartOnPushState: false,
        ajax: {
            trackMethods: ['POST']
        }
    });

    $.ajaxSetup({
        headers: {'X-CSRF-Token': app.options._token}
    });

    app.options = {
        menu: $('nav ul.left'),
        content: $('.main-content'),
        thumbs: $('.listProjects')
    };

    app.navigate = function (route, options) {
        options || (options = {});
        Backbone.history.navigate(route, options);
    };

    Layout.configure({
        manage: true
    });


    // The root path to run the application through.
    exports.root = "/";

    app.start = function () {
        require([
            'modules/header/header',
            'modules/presenter/presenter',
            'modules/thumbs/thumbs',
            'modules/backToTop/backToTop',
            'modules/contact/contact',
            'modules/socialPopup/socialPopup'
        ], function (Header, presenter, thumbs, backToTop, Contact, SocialPopup) {
            Header.start();
            presenter.start();
            thumbs.start();
            Backbone.history.start();
            SocialPopup.start();
        });
    }
});