var app = app || {};

app.BeerBusinessView = Backbone.View.extend({
    tagName: 'div',
    className: 'row',
    template: _.template( $( '#beerBusiness' ).html() ),

    render: function() {
        this.$el.html( this.template( this.model.attributes ) );

        return this;
    }
});