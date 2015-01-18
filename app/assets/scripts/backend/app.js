define(function (require, exports, module) {
    "use strict";

    var $ = require('jquery');
    var _ = require('underscore');
    var Backbone = require('backbone');
    var Layout = require('layoutmanager');
    var Radio = require('radio');
    var Hogan = require('hogan');
    var app = module.exports;


    _.extend(app, Backbone.Events);
    _.extend(app, Radio.Commands);

    // app global options
    app.options = {
        _token: $('meta[name=csrf-token]').attr("content")
    };

    $.ajaxSetup({
        headers: {'X-CSRF-Token': app.options._token}
    });

    app.navigate = function (route, options) {
        options || (options = {});
        Backbone.history.navigate(route, options);
    };

    Layout.configure({
        manage: true,
        prefix: "/assets/scripts/backend/templates/",
        fetchTemplate: function (path) {
            // Check for a global JST object.  When you build your templates for
            // production, ensure they are all attached here.
            var JST = window.JST || {};

            // If the path exists in the object, use it instead of fetching remotely.
            if (JST[path]) {
                return JST[path];
            }

            // If it does not exist in the JST object, mark this function as
            // asynchronous.
            var done = this.async();

            // Fetch via jQuery's GET.  The third argument specifies the dataType.
            $.get(path, function (contents) {
                // Assuming you're using underscore templates, the compile step here is
                // `_.template`.
                done(Hogan.compile(contents));
            }, "text");
        },
        renderTemplate: function (template, context) {
            return $.trim(template.render(context));
        }
    });


    // The root path to run the application through.
    exports.root = "/";

    app.start = function () {

    }
});