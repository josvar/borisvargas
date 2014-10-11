define(function(require, exports, module) {
    "use strict";

    var $ = require('jquery');
    var app = module.exports;
    app.options = {
        menu: $('nav ul.left'),
        content: $('.main-content')
    };

    // The root path to run the application through.
    exports.root = "/";
});