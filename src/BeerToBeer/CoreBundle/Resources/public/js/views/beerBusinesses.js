var app = app || {};

app.BeerBusinessesView = Backbone.View.extend({
    el: '#businesses',

    initialize: function( initialBeerBusinesses ) {
        this.collection = new app.BeerBusinesses( initialBeerBusinesses );
        this.render();
    },

    render: function() {
        this.collection.each(function( item ) {
            this.renderBeerBusiness( item );
        }, this );
    },

    renderBeerBusiness: function( item ) {
        var beerBusinessView = new app.BeerBusinessView({
            model: item
        });
        this.$el.append( beerBusinessView.render().el );
    }
});