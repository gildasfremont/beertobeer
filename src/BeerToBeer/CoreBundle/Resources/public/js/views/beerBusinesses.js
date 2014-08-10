var app = app || {};

app.BeerBusinessesView = Backbone.View.extend({
    el: '#general',

    events: {
        'submit #searchForm': 'submitSearch'
    },

    initialize: function( initialBeerBusinesses ) {
        console.log("init app");
        this.collection = app.BeerBusinesses;
        this.collection.reset(app.fixtures);
    },

    submitSearch: function(e) {
        e.preventDefault();
        console.log("submitSearch");
        location.href = "#search/"+ $('#searchInput').val();
    },

    search: function(adress) {
        console.log("Adresse : "+ adress);
        if (adress != '')
            this.render();
    },

    render: function() {
        $('#beerBusinessContainer').html('');
        this.collection.each(function( item ) {
            this.renderBeerBusiness( item );
        }, this );
    },

    renderBeerBusiness: function( item ) {
        var beerBusinessView = new app.BeerBusinessView({
            model: item
        });
        $('#beerBusinessContainer').append( beerBusinessView.render().el );
    }
});