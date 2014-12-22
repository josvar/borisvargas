define([
    'app',
    'backbone',
    './controller'
], function (App, Backbone, Controller) {

    var Thumbs = {
        start: function () {
            Controller.listThumb();
        }
    }

    App.comply("set:active:thumb", function (id) {
        Controller.setActiveThumb(id);
    });
    App.comply("set:disable:thumbs", function () {
        Controller.disableThumbs();
    });

    return Thumbs;

});