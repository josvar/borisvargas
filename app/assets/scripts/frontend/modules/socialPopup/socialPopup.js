define([
    'jquery'
], function ($) {

    var Popup = {
        _open_popup: function (url, title, w, h) {
            var left = screen.width / 2 - w / 2, top = screen.height / 2 - h / 2, popup = window.open(url, title, "toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,copyhistory=no,width=" + w + ",height=" + h + ",top=" + top + ",left=" + left);
            return popup && popup.focus(), popup
        },

        start: function () {
            var self = this;
            $('[data-social-popup]').on('click', function (e){
                e.preventDefault();
                if (self.popup) {
                    self.popup.close();
                }
                self.popup = self._open_popup(this.getAttribute("href"), "Share", 750, 316);
            });
        }
    };

    return Popup;

});