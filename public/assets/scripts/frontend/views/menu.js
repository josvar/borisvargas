define([
    'jquery',
    'underscore',
    'backbone'
], function ($, _, Backbone) {
    'use strict';

    var MenuView = Backbone.View.extend({
        initialize: function () {
            this.items = {};
        },
        events: {
            'click a.nav-link': function (e) {
                e.preventDefault();
                var elemClicked = $(e.currentTarget).parent();
                var url = elemClicked.data('async');

                url = (url=='home') ? '' : url;
                Backbone.history.navigate(url, {trigger: true});
            }
        },
        active: function (id) {
            if(this.items.current)
                this.items.current.removeClass('active').find('a').blur();

            var nextActiveElem = (this.$el.find("[data-async='" + id +"']")).addClass('active');
            nextActiveElem.find('a.nav-link').blur();

            this.items.current = nextActiveElem;

        }
    });

    return MenuView;
});