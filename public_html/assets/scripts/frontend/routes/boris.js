define([
    'jquery',
    'backbone',
    'controllers/boris'
], function ($, Backbone, Controller) {
    'use strict';

    var BorisRouter = Backbone.Router.extend({
        routes: {
            "": "showHome",
            "about": "showAbout",
            "work": "showWork",
            "services": "showServices",
            "contact": "showContact"
        },
        initialize: function () {
            var routeName;
            for (var route in this.routes) {
                routeName = this.routes[route];
                this.route(route, routeName, $.proxy(Controller[routeName], Controller));
            }
        }
    });

    return BorisRouter;
});