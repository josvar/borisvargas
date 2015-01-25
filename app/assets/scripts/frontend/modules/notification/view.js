define([
    'backbone',
    'jquery',
    'underscore'
], function (Backbone, $, _) {

    var support = {animations: Modernizr.cssanimations},
        animEndEventNames = {
            'WebkitAnimation': 'webkitAnimationEnd',
            'OAnimation': 'oAnimationEnd',
            'msAnimation': 'MSAnimationEnd',
            'animation': 'animationend'
        },
    // animation end event name
        animEndEventName = animEndEventNames[Modernizr.prefixed('animation')];

    var notificationView = Backbone.Layout.extend({
        el: false,

        initialize: function () {
            _.bindAll(this);
        },

        events: {
            'click .ns-close': 'dismiss'
        },

        show: function () {
            this.render();
            this.$el.appendTo('body');
            this.model.set({'active': true});

            this.$el.removeClass('ns-hide');
            this.$el.addClass('ns-show');

            var self = this;

            // checks to make sure ttl is not set to false in notification initialization
            if (this.model.get('ttl')) {
                this.dismissttl = setTimeout(function () {
                    if (self.model.get('active')) {
                        self.dismiss();
                    }
                }, this.model.get('ttl'));
            }
        },
        dismiss: function (e) {
            if (e)
                e.preventDefault();
            this.model.set({'active': false});
            clearTimeout(this.dismissttl);

            var self = this;
            this.$el.removeClass('ns-show');
            setTimeout(function () {
                self.$el.addClass('ns-hide');
            }, 25)

            if (support.animations) {
                this.el.addEventListener(animEndEventName, this._onEndAnimationFn);
            }
            else {
                this._onEndAnimationFn();
            }
        },

        _onEndAnimationFn: function (ev) {
            if (support.animations) {
                if (ev.target !== this.el) return false;
                this.el.removeEventListener(animEndEventName, this._onEndAnimationFn);
            }
            this.remove();
        }
    });

    return notificationView;

});