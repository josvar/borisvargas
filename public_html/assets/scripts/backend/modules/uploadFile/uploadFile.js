define([
    'app',
    'jquery.fileupload',
    'jquery',
    'underscore',
    './view',
], function (App, fileUpload, $, _, Views) {

    var id = 1;
    var UploadFile = function (buttonSelector) {
        this.buttonSelector = buttonSelector;

        _.bindAll(this);

        //this.options.success = this.showData;
        //this.options.cancel = this.cancel;
    };

    UploadFile.prototype = {
        //options: options,
        init: function () {
            var ModelUploadFile = Backbone.Model.extend({});
            var Collection = Backbone.Collection.extend({
                model: ModelUploadFile
            });
            var collectionUploadFile = new Collection;

            for (var i = 0; i < 6; i++) {
                collectionUploadFile.add([{id: id, link: ''}]);
                id++;
            }

            var viewCollection = new Views.ListView({
                collection: collectionUploadFile
            });

            Views.layout.insertView(viewCollection);
            Views.layout.render();

        }
    };


    return UploadFile;
});