/*global define*/
define([
    'underscore',
    'backbone'
], function (_, Backbone) {
    'use strict';

    var Model = Backbone.Model.extend({
        // Default attributes for the todo
        defaults: {
            title: ''
        }
    });

    return Model;
});
