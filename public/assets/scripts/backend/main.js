/*global require*/
'use strict';

require.config({
    urlArgs: "bust=" + (new Date()).getTime(),
    paths: {
        jquery: '../libs/jquery',
        "jquery.ui.widget": '../libs/vendor/jquery.ui.widget',
        "jquery.fileupload": '../libs/jquery.fileupload',
        "jquery.cookie": '../libs/jquery.cookie',
        "foundation": '../libs/foundation',
        "foundation.abide": '../libs/foundation.abide',
        "foundation.accordion": '../libs/foundation.accordion',
        "foundation.alert": '../libs/foundation.alert',
        "foundation.clearing": '../libs/foundation.clearing',
        "foundation.dropdown": '../libs/foundation.dropdown',
        "foundation.equalizer": '../libs/foundation.equalizer',
        "foundation.interchange": '../libs/foundation.interchange',
        "foundation.joyride": '../libs/foundation.joyride',
        "foundation.magellan": '../libs/foundation.magellan',
        "foundation.offcanvas": '../libs/foundation.offcanvas',
        "foundation.orbit": '../libs/foundation.orbit',
        "foundation.reveal": '../libs/foundation.reveal',
        "foundation.slider": '../libs/foundation.slider',
        "foundation.tab": '../libs/foundation.tab',
        "foundation.toolbar": '../libs/foundation.tooltip',
        "foundation.topbar": '../libs/foundation.topbar',

        backbone: '../libs/backbone',
        underscore: '../libs/lodash',
        radio: '../libs/backbone.radio',
        hogan: '../libs/hogan-3.0.2.amd',
        layoutmanager: '../libs/backbone.layoutmanager',

        "dropboxchooser": ["https://www.dropbox.com/static/api/2/dropins"]

    },
    shim: {
        "jquery.cookie": ['jquery'],
        "foundation": ['jquery'],
        "foundation.abide": ['foundation'],
        "foundation.accordion": ['foundation'],
        "foundation.alert": ['foundation'],
        "foundation.clearing": ['foundation'],
        "foundation.dropdown": ['foundation'],
        "foundation.equalizer": ['foundation'],
        "foundation.interchange": ['foundation'],
        "foundation.joyride": ['foundation', 'jquery.cookie'],
        "foundation.magellan": ['foundation'],
        "foundation.offcanvas": ['foundation'],
        "foundation.orbit": ['foundation'],
        "foundation.reveal": ['foundation'],
        "foundation.slider": ['foundation'],
        "foundation.tab": ['foundation'],
        "foundation.toolbar": ['foundation'],
        "foundation.topbar": ['foundation'],

        "dropboxchooser": {
            deps: [],
            exports: "Dropbox",
            init: function () {
                window.Dropbox.appKey = "ptlwm6dukz51y5p";
                return window.Dropbox;
            }

        }
    }
});

require([
    'app'
], function (App) {

    //require([
    //    './create-project'
    //], function (CreateProject)
    //{
    //    CreateProject.start();
    //});
    require([
        'foundation.tab',
        'modules/uploadFile/uploadFile'
    ], function (foundation, UploadFile) {
        $(document).foundation({});
        var fileUpload = new UploadFile();
        fileUpload.init();
    });

});