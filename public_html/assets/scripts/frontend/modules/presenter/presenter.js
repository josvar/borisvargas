define([
    'app',
    'backbone',
    './controller',
], function (App, Backbone, controller) {

    var API = {
        showPreview: function (id) {
            controller.showPreview(id, function () {
                return App.command("set:active:thumb", id);
            });
        },
        showWelcome: function () {
            controller.showWelcome(function () {
                return App.command("set:disable:thumbs")
            });
        }
    };

    var Route = Backbone.Router.extend({
        routes: {
            "": "showWelcome",
            "preview/:id": "showPreview"
        },
        showPreview: API.showPreview,
        showWelcome: API.showWelcome
    });

    App.on("preview:show", function (id) {
        App.navigate("preview/" + id);
        API.showPreview(id);
    });

    var presenter = {
        start: function () {
            new Route();
        }
    };

    return presenter;

});
