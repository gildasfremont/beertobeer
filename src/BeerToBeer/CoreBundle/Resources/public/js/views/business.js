var app = app || {};

app.BusinessView = Backbone.View.extend({
    tagName: 'div',
    className: 'row business',
    template: _.template( $( '#business' ).html() ),
    templateFull: _.template( $( '#fullBusiness' ).html() ),
    etatBeersPression: true,

    events: {
    	"click": "fullBusiness"
    },

    render: function() {
        var attrs = this.model.attributes;
        attrs.prixNow = this.model.getPrixNow();
        this.$el.html( this.template( attrs ) );

        return this;
    },

    // Rendu de la liste des bières (la liste pression ou la liste des autres bières)
    renderBeers: function(pression) {
        var beers = _.where(this.model.attributes.beers, {pression: pression});
        var html = "";
        _.each(beers, function(beer) {
            html += _.template( $( '#beer' ).html(), beer);
        });
        $("#beers_container").html(html);
    },

    fullBusiness: function(e) {
    	location.href = "#business/"+ this.model.get('id');
    },

    renderFull: function() {
        //this.model.beers = new app.Beer();
        //this.model.beers.fetch({data: {businessId: this.model.id}});
    	app.AppView.BusinessesView.$el.html( this.templateFull( this ) );
        this.renderBeers(this.etatBeersPression);
    }
});