define([
    'jquery',
    'underscore',
    'backbone',
    './model',
    'app'
], function ($, _, Backbone, Model, App) {

    var viewItem = Backbone.View.extend({
        initialize: function () {
            this.listenTo( this.model, 'change:selected', this.changeStatus)
        },
        events: {
            "click a": "navigate"
        },
        navigate: function (e) {
            e.preventDefault();
            console.log("navigate " + this.model.id);

            Backbone.history.navigate(this.model.id);

            // no deberia estar aca, deberia ser lanzado desde modulo content
            App.command('set:active:header', this.model.id);
        },
        changeStatus: function () {
            if(this.model.get("selected"))
                this.$el.addClass("active");
            else {
                this.$el.removeClass('active');
            }
        }

    });

    var viewList = Backbone.View.extend({
        childViews: [],
        initialize: function () {
            var items = this.$el.find('li');
            var _this = this;
            items.each(function (index, item) {
                var model;
                if($(item).hasClass('active')) {
                    model = new Model({id: $(item).data('async'), selected: true});
                    _this.currentModel = model;
                }
                else
                    model = new Model({ id: $(item).data('async') });
                _this.collection.push( model );
                _this.childViews.push( new viewItem({ el: item, model: model }) );
            });
        }
    });

    return {
        list: viewList,
        item: viewItem
    };
})