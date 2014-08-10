var app = app || {};

app.BeerBusinessView = Backbone.View.extend({
    tagName: 'li',
    className: 'beerBusiness',
    template: _.template( $( '#beerBusiness' ).html() ),

    render: function() {
        this.$el.html( this.template( this.model.attributes ) );

        return this;
    }
});