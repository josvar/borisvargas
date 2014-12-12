define([
    'jquery',
    'underscore',
    'backbone'
], function ($, _, Backbone) {
    var Content = Backbone.View.extend({
        templateLoader: _.template("<div id=\"preloader\"><div class=\"spinner\"></div></div>"),
        initialize: function () {
            if (this.model)
                this.model.on('change:id', this.render, this);
        },
        render: function () {
            var that = this;
            this.$el.fadeOut('slow', function () {
                $('body').append(that.templateLoader());
                var p = that.model.fetch();
                setTimeout(function() {
                    p.done(function () {
                        $('#preloader').remove();
                        that.el.innerHTML = that.model.get('html');
                        that.$el.fadeIn('slow');
                    });
                }, 1000);
            });
        },
        afterRender: function () {

        }
    });

    return Content;
});