define([
    'backbone',
    'models/content'
], function (Backbone, ContentModel) {
    var Content = Backbone.Collection.extend({
        model: ContentModel
    });
    return Content;
});