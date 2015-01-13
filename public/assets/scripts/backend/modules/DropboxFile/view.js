define([
    'backbone',
    'underscore',
    'jquery'
], function (Backbone, _, S) {

    var DropboxView = Backbone.View.extend({
        el:false,
        template: '#dropbox-file-template',
        events: {

        }
    });

    return DropboxView;

});