define([
    'app',
    'backbone',
    './views',
    './collection'
], function (App, Backbone, Views, Collection) {

    //init views
    var thumb_views = new View.list({
        el: App.options.menu,
        collection: new Collection()
    });

});