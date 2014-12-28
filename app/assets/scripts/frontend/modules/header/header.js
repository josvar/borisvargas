define(['app', './controller'], function (App, headerController) {

    var Header = function () {
        this.controller = headerController;
    };

    Header.prototype = {
        start: function () {
            App.comply('set:active:header', function (id) {
                this.controller.setActiveHeader(id);
            }, this);

            this.controller.listHeader();
        }
    };

    return new Header();

});