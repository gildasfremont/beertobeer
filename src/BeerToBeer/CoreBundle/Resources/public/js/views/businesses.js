var app = app || {};

app.BusinessesView = Backbone.View.extend({
    el: '#general',

    initialize: function() {
        console.log("Init BusinessesView");
        this.collection = new app.Businesses(app.fixtures);
    },

    search: function(adress) {
        console.log("Adresse : "+ adress);
        this.$el.html(_.template($('#businessList').html(), { BusinessesCounts: this.collection.length }));
        $('#searchInput').val(adress);
        if (adress != '')
            this.render();
    },

    render: function() {
        $('#businessesContainer').html('');
        this.collection.each(function( item ) {
            this.renderBusiness( item );
        }, this );
    },

    renderBusiness: function( item ) {
        var businessView = new app.BusinessView({
            model: item
        });
        $('#businessesContainer').append( businessView.render().el );
    }
});
