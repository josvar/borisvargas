/*global define */
define([
    'underscore',
    'backbone',
    './model'
], function (_, Backbone, Model) {
    'use strict';

    var TodosCollection = Backbone.Collection.extend({
        // Reference to this collection's model.
        model: Model,

        // We keep the Todos in sequential order, despite being saved by unordered
        // GUID in the database. This generates the next order number for new items.
        nextOrder: function () {
            return this.length ? this.last().get('order') + 1 : 1;
        },
    });

    return new TodosCollection();
});
