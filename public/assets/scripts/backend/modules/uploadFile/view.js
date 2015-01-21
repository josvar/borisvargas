define([
    'backbone',
    'underscore',
    'jquery',
    'jquery.fileupload'
], function (Backbone, _, S) {

    var blocksLayout = new Backbone.Layout({
        el: $('#blocks-layout')
    });

    var ListView = Backbone.Layout.extend({
        addView: function (model, render) {
            // Insert a nested View into this View.
            var view = this.insertView(new ItemView({model: model}));

            // Only trigger render if it not inserted inside `beforeRender`.
            if (render !== false) {
                view.render();
            }
        },

        beforeRender: function () {
            this.collection.each(function (model) {
                this.addView(model, false);
            }, this);
        },

        initialize: function () {
            this.listenTo(this.collection, "add", this.addView);
        }
    })

    var ItemView = Backbone.Layout.extend({
        el: false,
        template: 'uploadfile-widget.html',
        events: {},
        initialize: function () {
            this.model.on('change', this.render, this);
        },
        afterRender: function () {
            var selector = '#fileupload-' + this.model.id;
            var that = this;
            $(selector).fileupload({
                dataType: 'json',
                url: '/backend/api/resources/create',
                formData: {},
                add: function (e, data) {
                    data.context = $('<button class="button tiny right"/>').text('Upload')
                        .appendTo($(this).parent())
                        .click(function () {
                            data.context = $('<p/>').text('Uploading...').replaceAll($(this));
                            data.submit();
                        });
                },
                done: function (e, data) {
                    data.context.text('Upload finished.');
                    that.model.set({
                        link: data.result.link,
                        raw_name: data.result.raw_name,
                        extension: data.result.extension,
                        thumb: location.protocol + "//" + location.host + '/' + data.result.thumb
                    });
                }
            });
        }
    });

    return {
        layout: blocksLayout,
        ItemView: ItemView,
        ListView: ListView
    };

});