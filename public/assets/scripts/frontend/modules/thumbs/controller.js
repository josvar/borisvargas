define([
    'app',
    './views',
    './collection'
], function (App, Views, Collection) {

    var controller = {
        listThumb: function () {
            //init views
            this.thumb_views = new Views.list({
                el: App.options.thumbs,
                collection: new Collection()
            });
        },
        setActiveThumb: function (id) {
            if(this.thumb_views.hasOwnProperty('currentModel'))
                this.thumb_views.currentModel.deselect();
            var newCurrent = this.thumb_views.collection.get(id).select();
            this.thumb_views.currentModel = newCurrent;
        },
        disableThumbs: function () {
            if(this.thumb_views.hasOwnProperty('currentModel'))
                this.thumb_views.currentModel.deselect();
        }
    }

    return controller;

});