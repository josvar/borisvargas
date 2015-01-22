define([
    'app',
    './view'
], function (App, View) {

    var API = {
        addUploadImageWidget: function () {
            App.command('add:widget:uploadFile');
        },
        initView: function () {
            var view = new View();
            view.on('add:widget:uploadFile', this.addUploadImageWidget, this);
            return view
        }
    }

    var Menu = {
        started: false,
        start: function () {
            if (!this.started) {
                this.view = API.initView();
            }
        },
        getView: function () {
            return this.view;
        }

    }

    return Menu;
});