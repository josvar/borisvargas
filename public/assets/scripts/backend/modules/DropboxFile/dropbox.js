define([
    'dropboxchooser',
    'jquery'
], function (Dropbox, $) {

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
        this.options.success = this.showData;
        this.options.cancel = this.cancel;
    };

    DropboxFile.prototype = {
        options: options,
        init: function () {
            this.button = Dropbox.createChooseButton(this.options);
            this.buttonSelector.append(this.button);
        },
        showData: function (files) {
            console.log(files);
        },
        cancel: function () {

        }
    };


    return DropboxFile;
});