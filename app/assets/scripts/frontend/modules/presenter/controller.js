define([
    'backbone',
    'jquery',
    './model',
    './views'
], function (Backbone, $, Model, views) {
    var controller = {
        showPreview: function (id, cb_success, cb_fails) {

            $('html, body').animate({
                scrollTop: $("#presenter").offset().top
            }, 500);

            var model = new Model({id: id});
            var hr = new views.hr();
            var preloader = new views.Preloader();

            views.layout.insertViews([
                preloader
            ]);
            views.layout.render();

            var p = model.fetch();
            p.done(function () {
                    setTimeout(function () {
                        var preview = new views.Preview({
                            model: model
                        });

                        views.layout.insertViews([
                            preview,
                            hr
                        ]);
                        views.layout.render();
                        return cb_success();

                    }, 500);
                }
            );
            p.fail(function (jqXHR) {
                cb_fails();
            });
        },

        showWelcome: function (cb_success) {
            $('html, body').animate({
                scrollTop: 0
            }, 500);
            var welcome = new views.Welcome();
            views.layout.insertViews([
                welcome
            ]);
            views.layout.render();
            return cb_success();
        }
    }
    return controller;

});