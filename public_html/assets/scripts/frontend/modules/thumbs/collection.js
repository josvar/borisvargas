define(['backbone', './model'], function (Backbone, Model) {
    var Collection = Backbone.Collection.extend({
        model: Model
    });

    return Collection;
});
