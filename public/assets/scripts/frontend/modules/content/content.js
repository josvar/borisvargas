define(['backbone', 'app'], function (Backbone, App) {

    var viewContent = Backbone.View.extend({

    });

    App.on('about:show', function () {
        console.log(777);
    });

    return viewContent;
})