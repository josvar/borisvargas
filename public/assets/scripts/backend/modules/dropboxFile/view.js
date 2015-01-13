define([
    'backbone',
    'underscore',
    'jquery'
], function (Backbone, _, S) {

    var DropboxView = Backbone.Layout.extend({
        el:false,
        template: '#dropbox-file-template',
        events: {

        }
    });

    return {
        data: DropboxView
    };

});