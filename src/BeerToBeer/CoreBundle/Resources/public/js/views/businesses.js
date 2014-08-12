var app = app || {};

app.BusinessesView = Backbone.View.extend({
    el: '#general',

    initialize: function() {
        console.log("Init BusinessesView");
        this.collection = new app.Businesses();
        this.listenTo(this.collection, "reset", this.render);
    },

    search: function(adress) {
        console.log("Adresse : "+ adress);
        $('#searchInput').val(adress);
        this.$el.html(_.template($('#businessList').html()));
        this.collection.fetch({reset: true, data: {latitude: 48.823549172, longitude: 2.302681803}});
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
