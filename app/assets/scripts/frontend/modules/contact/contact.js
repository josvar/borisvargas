define([
    'jquery',
    'modules/notification/notification'
], function ($, Notification) {

    $('form[data-remote]').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        var method = form.find('input[name="_method"]').val() || 'POST';
        var url = form.prop('action');
        var token = form.find('input[name="_token"]').val();

        var submit = form.find('input[data-send]');
        submit.prop('disabled', 'disabled');

        $.ajax({
            type: method,
            headers: {'X-CSRF-Token': token},
            url: url,
            data: form.serialize(),
            success: function () {
                var notification = new Notification({
                    type: 'success',
                    columns: 2,
                    message: {
                        left: 'Your email has been received',
                        right: 'Thank you for contacting me!'
                    },
                    ttl: false
                });

                notification.show();

                form.find('input[type=text], input[type=email], textarea').val('');
                submit.removeAttr('disabled');
            }
        }).fail(function () {
            var notification = new Notification({
                type: 'alert',
                columns: 1,
                message: {
                    message: 'Your message could not be send. Please try again.'
                },
                ttl: false
            });

            notification.show();

            submit.removeAttr('disabled');
        });

    })
});