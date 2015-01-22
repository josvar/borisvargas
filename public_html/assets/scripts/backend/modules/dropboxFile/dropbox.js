define([
    'dropboxchooser',
    'jquery',
    'underscore',
    './view'
], function (Dropbox, $, _, View) {

    var options = {

        // Optional. "preview" (default) is a preview link to the document for sharing,
        // "direct" is an expiring link to download the contents of the file. For more
        // information about link types, see Link types below.
        linkType: "direct", // or "direct"

        // Optional. A value of false (default) limits selection to a single file, while
        // true enables multiple file selection.
        multiselect: false, // or true

        // Optional. This is a list of file extensions. If specified, the user will
        // only be able to select files with these extensions. You may also specify
        // file types, such as "video" or "images" in the list. For more information,
        // see File types below. By default, all extensions are allowed.
        extensions: ['.png', '.jpg', '.svg']
    };


    var DropboxFile = function (buttonSelector) {
        this.buttonSelector = buttonSelector;

        _.bindAll(this);

        this.options.success = this.showData;
        this.options.cancel = this.cancel;
    };

    DropboxFile.prototype = {
        options: options,
        init: function () {
            this.button = Dropbox.createChooseButton(this.options);
            this.buttonSelector.append(this.button);
            //this.showData({})
        },
        showData: function (files) {
            files[0].data = JSON.stringify(files[0]);
            var Model = Backbone.Model.extend({});
            console.log(new Model(files[0]));
            var viewData = new View.data({
                model: new Model(files[0])
            });
            this.buttonSelector.after(viewData.render().$el);
        },
        cancel: function () {

        }
    };


    return DropboxFile;
});