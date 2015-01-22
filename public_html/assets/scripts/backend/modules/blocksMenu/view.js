define([
    'backbone'
], function (Backbone) {

    var MenuView = Backbone.Layout.extend({
        el: false,
        template: 'blocksMenu-widget.html',
        events: {
            "click .add": "addUploadFileWidget"
        },
        addUploadFileWidget: function () {
            this.trigger('add:widget:uploadFile');
        }
    });

    return MenuView;

});