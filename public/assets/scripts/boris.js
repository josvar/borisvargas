/*!
 * jQuery lightweight plugin boilerplate
 * Original author: @ajpiano
 * Further changes, comments: @addyosmani
 * Licensed under the MIT license
 */

// the semi-colon before the function invocation is a safety
// net against concatenated scripts and/or other plugins
// that are not closed properly.
;
(function ($, window, document, undefined) {

    // Create the defaults once
    var pluginName = "loader",
        defaults = {
            propertyName: "value"
        };

    // The actual plugin constructor
    function Plugin(element, options) {
        this.element = element;

        this.options = $.extend({}, defaults, options);

        this._defaults = defaults;
        this._name = pluginName

        this.menu = {
            init: function (menu, cmd) {
                this.menuElem = menu;
                this.cmd = cmd;
                this.currentElem = menu.find('li.active');

                //bind click menu
                this.menuElem.on('click', '[data-async] a.nav-link', {that: this}, this.click_menu);

                // Foundation close top-bar
                this.menuElem.find('.nav-link').click(function (evt, fakestatus) {
                    if (typeof fakestatus === 'undefined')
                        $('.toggle-topbar').click();
                });
            },
            click_menu: function (e, fakeStatus) {
                var that = e.data.that;
                that.currentElem.removeClass('active').find('a').blur();
                that.currentElem = $(this).parent().addClass('active');
                that.currentElem.find('a').blur();

                var currentID = that.currentElem.data('async');
                fakeStatus = fakeStatus || false;
                // Execute command here!
                that.cmd.execute('api/section', currentID, {
                    fake: fakeStatus,
                    menu: {
                        id: currentID
                    }
                });
                e.preventDefault();
            },
            find: function (id) {
                return this.menuElem.find('[data-async=' + id + '] a.nav-link');
            }
        };

        // ShowCommand
        this.showCmd = {
            init: function (content, status) {
                this.content = content;
                this.status = status;
                return this;
            },
            execute: function (endpoint, id, state) {
                //make request
                this.makeRequest(endpoint + "/" + id)
                    .done(function (data) {
                        this.successRequest(data, id, state);
                    })
                    .fail(function () {
                        this.failRequest();
                    });
            },
            makeRequest: function (url) {
                return $.ajax({
                    context: this,
                    type: 'GET',
                    url: url
                });
            },
            successRequest: function (data, id, state) {
                //update status page: title, history, etc
                if ( state.fake == false) {
                    if(id == 'home') id = '/';
                    this.status.update(data.title, id, state);
                }
                //load page
                this.content.render(data);
            },
            failRequest: function () {
                console.log('Error');
            }
        }
        // links ajax async of Section
        this.links = {
            init: function (links_content, cmd) {
                this.cmd = cmd;
                this.reset_events();
                this.addEvents(links_content);
            },
            click_link: function (e) {
                var that = e.data.that;
                that.cmd.execute(that.current.data('async'));
                e.preventDefault();
            },
            re_init: function (links_content) {
                this.reset_events();
                this.addEvents(links_content);
            },
            reset_events: function () {
                this.links_async.off();
            },
            addEvents: function (links_content) {
                this.links_async = links_content.find('[data-async] a.nav-link');
                this.links_async.on('click', {that: this}, this.click_link);
            }
        };

        // place to load the sections
        this.content = {
            init: function (main_content, pre) {
                this.main_content = main_content;
                this.pre = pre;
            },
            render: function (data) {
                var that = this;
                this.main_content.fadeOut('slow', function () {
                    that.pre.fadeIn('slow', function () {
                        //load page
                        that.main_content[0].innerHTML = data.html;
                        that.pre.hide();
                        that.main_content.fadeIn('slow', function () {
                        });
                    });
                });
            }
        };
        this.status = {
            init: function (window, document, context) {
                this.history = window.history;
                this.document = document;
                this.context = context;
                // bind event popstate
                $(window).on('popstate', {context: this.context}, function (e) {
                    if (window.history.state && window.history.state.hasOwnProperty('menu')) {
                        e.data.context.menu.find(history.state.menu.id)
                            .trigger('click', [true]);
                    }
                    else{
                        window.location.reload();
                    }
                });

            },
            update: function (title, id, state) {
                this.document.title = title;
                this.history.pushState(state, title, id);
            }
        };

        this.init();
    }

    Plugin.prototype = {
        init: function () {
            this.status.init(window, document, this);
            this.content.init($(this.element), this.options.pre);
            this.showCmd.init(this.content, this.status)
            this.menu.init(this.options.menu, this.showCmd);
        }
    };

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[pluginName] = function (options) {
        return this.each(function () {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName,
                    new Plugin(this, options));
            }
        });
    };

})(jQuery, window, document);

$('.main-content').loader({
    menu: $('nav.top-bar'),
    pre: $('#preloader')
})

