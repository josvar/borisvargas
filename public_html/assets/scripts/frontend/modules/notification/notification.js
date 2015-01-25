define([
    './view',
    './model'
], function (NtfView, NtfModel) {

    var Notification = function (options) {

        if(options.columns === 2)
            var tpl = '#notification-two-tpl';

        // create model
        var model = new NtfModel({
            type: options.type,
            message: options.message,
            ttl: options.ttl
        });

        //create view
        this.view = new NtfView({
            template: tpl,
            model: model
        });

    };

    Notification.prototype.show = function () {
        this.view.show();
    };

    Notification.prototype.dismiss = function () {
        this.view.dismiss();
    };

    return Notification;

});