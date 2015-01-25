define([
    'backbone',
], function (Backbone) {
    var model = Backbone.Model.extend({
        defaults: {
            'active': false,
            'type': 'success',
            'ttl': false,
            'effect': ''
        }
    });

    return model;
});