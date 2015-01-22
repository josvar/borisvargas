define([
    'app',
    'models/content',
    'views/content',
    'collections/content'
], function (app, Content, ContentView, ContentsCollection) {

    var _baseView;
    var _firstInit = true;

    var _loadView = function (model) {
        if (_firstInit) {
            _baseView = new ContentView({
                model: model,
                collection: new ContentsCollection,
                el: app.options.content
            });
            _firstInit = false;
        }
        else {
            _baseView.model.set(model.toJSON());
        }
    };
    var _showSection = function (id) {
        console.log(id);
        var m = new Content({id: id});
        _loadView(m);
        app.menu.active(id);
    };

    var Controller = {
        showHome: function () {
            _showSection('home');
        },
        showAbout: function () {
            _showSection('about');
        },
        showWork: function () {
            _showSection('work');
        },
        showServices: function () {
            _showSection('services');
        },
        showContact: function () {
            _showSection('contact');
        }
    };
    return Controller;
});