define([
    'app',
    './view',
    './collection'
], function (App, View, Collection) {

    var controller = {
        listHeader: function () {
            //init views
             this.headers_view = new View.list({
                el: App.options.menu,
                collection: new Collection()
            });

            //bind events
            this.headers_view.on('childview:navigate', function () {

            });
        },
        setActiveHeader: function (id) {
            this.headers_view.currentModel.deselect();
            var newCurrent = this.headers_view.collection.get(id).select();
            this.headers_view.currentModel = newCurrent;
        }
    }

    return controller;

});