define([
    'app',
    'backbone',
    'underscore',
    'jquery'
], function (App, Backbone, _, $) {

    var presenterLayout = new Backbone.Layout({
        el: $('#presenter')
    });

    var WelcomeView = Backbone.Layout.extend({
        el: false,
        template: '#welcome-template'
    });
    var PreviewView = Backbone.Layout.extend({
        el: false,
        template: '#preview-template'
    });

    var PreviewHrView = Backbone.Layout.extend({
        el: false,
        template: '#preview-hr-template'
    });
    var PreloaderPreview = Backbone.Layout.extend({
        el: false,
        template: _.template("<div id=\"preloader\"><div class=\"spinner\"></div></div>")
    });




    return {
        layout: presenterLayout,
        Welcome: WelcomeView,
        Preview: PreviewView,
        Preloader: PreloaderPreview,
        hr: PreviewHrView
    }
});
