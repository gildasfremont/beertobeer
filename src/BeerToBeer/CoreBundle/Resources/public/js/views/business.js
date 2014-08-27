var app = app || {};

app.BusinessView = Backbone.View.extend({
    tagName: 'div',
    className: 'row business',
    template: _.template( $( '#business' ).html() ),
    templateFull: _.template( $( '#fullBusiness' ).html() ),
    horairesTemplate: _.template($('#horairesTemplate').html()),
    beerTemplate: _.template($('#beer').html()),
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
        var beerTemplate = this.beerTemplate;
        _.each(beers, function(beer) {
            html += beerTemplate(beer);
        });
        $("#beers_container").html(html);
    },

    renderMap: function() {
        var positionTopMap = $("#mapFullBusiness").position().top;
        $("#mapFullBusiness").css({"position": "absolute", "top": positionTopMap, "height": $(window).height() - positionTopMap});
        var businessPosition = new google.maps.LatLng(this.model.get('latitude'), this.model.get('longitude'));
        var map = new google.maps.Map(document.getElementById('mapFullBusiness'), {
            center: businessPosition,
            zoom: 16,
            disableDefaultUI: true
        });
        console.log(markerBusinessUrl);
        var businessMarker = new google.maps.Marker({
            position: businessPosition,
            map: map,
            icon: markerBusinessUrl // L'URL générée par Symfony dans fullBusiness.twig.html
        });
        $("#btnsMap").show();
    },

    fullBusiness: function(e) {
    	location.href = "#business/"+ this.model.get('id');
    },

    renderFull: function() {
        //this.model.beers = new app.Beer();
        //this.model.beers.fetch({data: {businessId: this.model.id}});
    	app.AppView.BusinessesView.$el.html( this.templateFull( this ) );
        this.renderBeers(this.etatBeersPression);
        this.renderHoraires(false);
        this.renderMap();
    },

    dropHoraires: function(e) {
        $(".horaires .moreHoraires").toggle();
        $("#dropHoraires").toggleClass("focus");
    },

    dropHorairesType: function(e) {
        if (!$(e.target).hasClass("focus")) {
            $(".dropHorairesType").toggleClass("focus");
            if ($(".dropHorairesType.ouverture").hasClass("focus"))
                this.renderHoraires(false);
            else
                this.renderHoraires(true);
        }
    },

    renderHoraires: function(happyHour) {
        $("#horairesContainer").html(this.horairesTemplate({
            horaires: this.model.attributes.horaires,
            happyHour: happyHour
        }));
    },

    btnFullBusiness: function(e) {
        $(".btnFullBusiness").toggle();
        $(".beers").toggle();
        $("#mapFullBusiness").toggle();
        $("#btnsMap").toggle();
    },

    btnCopyAdress: function(e) {
        var doc = document;
        var text = doc.getElementById("adressBusiness");    

        if (doc.body.createTextRange) { // ms
            var range = doc.body.createTextRange();
            range.moveToElementText(text);
            range.select();
        } else if (window.getSelection) { // moz, opera, webkit
            var selection = window.getSelection();            
            var range = doc.createRange();
            range.selectNodeContents(text);
            selection.removeAllRanges();
            selection.addRange(range);
        }
    },

    editBeerLink: function(e) {
        e.preventDefault();
        var beerId = $(e.target).attr("id");
        console.log('Edit Beer with id "'+beerId+'"');
        $(".fullBusiness").append( _.template( $("#editBeerForm").html(), this.model.attributes ) );
    } 
});