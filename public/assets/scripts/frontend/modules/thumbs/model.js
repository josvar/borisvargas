define(['backbone'], function (Backbone) {
    var Model = Backbone.Model.extend({
        defaults: {
            'selected': false
        },
        select: function () {
            this.set('selected', true);
            return this;
        },
        deselect: function () {
            this.set('selected', false);
            return this;
        }
    });

    return Model;
})