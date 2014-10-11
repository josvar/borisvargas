define([
    'backbone'
], function (Backbone) {
    var Content = Backbone.Model.extend({
        urlRoot: '/api/section'
    });
    return Content;
});