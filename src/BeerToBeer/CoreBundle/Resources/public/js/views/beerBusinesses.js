var app = app || {};

app.BeerBusinessesView = Backbone.View.extend({
    el: '#general',

    events: {
        'submit #searchForm': 'submitSearch'
    },

    initialize: function( initialBeerBusinesses ) {
        console.log("Init BeerBusinessesView");
        this.collection = app.BeerBusinesses;
        this.collection.reset(app.fixtures);
    },

    submitSearch: function(e) {
        e.preventDefault();
        console.log("Search Form submitted");
        location.href = "#search/"+ $('#searchInput').val();
    },

    search: function(adress) {
        console.log("Adresse : "+ adress);
        this.$el.html(_.template($('#beerBusinessList').html(), { BBCounts: this.collection.length }));
        $('#searchInput').val(adress);
        if (adress != '')
            this.render();
    },

    render: function() {
        $('#bBContainer').html('');
        this.collection.each(function( item ) {
            this.renderBeerBusiness( item );
        }, this );
    },

    renderBeerBusiness: function( item ) {
        var beerBusinessView = new app.BeerBusinessView({
            model: item
        });
        $('#bBContainer').append( beerBusinessView.render().el );
    }
});