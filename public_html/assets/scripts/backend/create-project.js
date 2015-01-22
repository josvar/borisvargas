define([
    'app',
    'jquery',
    'backbone',
    './modules/blocksMenu/blocksMenu'
], function (App, $, Backbone, BlocksMenu) {

    var ProjectLayout = new Backbone.Layout({
        el: $('#project-create-layout')
    });

    var Project =  {
        start: function () {
            BlocksMenu.start();
            ProjectLayout.setView("#blocks-layout", BlocksMenu.getView());
            ProjectLayout.render();
        }
    };


    return Project;
});