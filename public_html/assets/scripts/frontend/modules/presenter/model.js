define([
    'backbone'
], function (Backbone) {
    var model = Backbone.Model.extend({
        urlRoot: '/api/preview'
    });

    return model;
});