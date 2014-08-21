var app = app || {};

app.BusinessesView = Backbone.View.extend({
    el: '#general',

    userLat: 0,
    userLng: 0,

    events: {
        "click #link_pressions": "linkPressions",
        "click #link_others": "linkOthers",
        "focus #searchInput": "focusSearchInput"
    },

    initialize: function() {
        console.log("Init BusinessesView");
        this.collection = new app.Businesses();
        this.listenTo(this.collection, "reset", this.render);
    },

    getUserLocation: function() {
        var errorMessage = "";
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                app.AppView.BusinessesView.userLat = position.coords.latitude;
                app.AppView.BusinessesView.userLng = position.coords.longitude;
                // On redirige le lien "Chercher autour de moi" vers la page de recherche de la position
                $("#home #gpsContainer").attr("href", "#search/lat/"+result.geometry.location.lat()+"/lng/"+result.geometry.location.lng())
            }, function (error) {
                switch(error.code) {
                    case error.TIMEOUT:
                        errorMessage = "Vous avez mis trop de temps à nous donner votre position";
                    break;
                    case error.PERMISSION_DENIED:
                        errorMessage = "Vous devez nous donner la permission de vous localiser";
                    break;
                    case error.POSITION_UNAVAILABLE:
                        errorMessage = "Votre position n’a pu être déterminée";
                    break;
                    case error.UNKNOWN_ERROR:
                        errorMessage = "Erreur inconnue lors de votre géolocalisation";
                    break;
                }
            });
        } else {
            errorMessage = "Votre navigateur ne semble pas compatible avec la géolocalisation";
        }
        if (errorMessage != "") {
            alert(errorMessage);
            // TODO : afficher un message à la place de "Chercher autour de moi"
        }
    }

    focusSearchInput: function() {
        console.log('"focus #searchInput" triggered');
        // On anticipe le "Chercher autour de moi" en demandant dès maintenant la géolocalisation
        this.getUserLocation();
        $("#home").switchClass("unfocus", "focus");
        $("#home.unfocus #labelSearch").hide(400);
        $("#home.unfocus h2").hide(400);
        $("#home #gpsContainer").show(400);
        $("#searchInput")
            .geocomplete()
            .bind("geocode:result", function(event, result){
                app.Router.navigate("search/lat/"+result.geometry.location.lat()+"/lng/"+result.geometry.location.lng(), {trigger: true});
            })
        ;
    },

    home: function() {
        if (this.$el.children().attr("id") != "home")
            this.$el.html(_.template($('#homeTemplate').html()));
        $("#home.unfocus #labelSearch").show(400);
    },

    search: function(adress) {
        console.log("Adresse : "+ adress);
        this.$el.html(_.template($('#businessList').html()));
        $('#searchInput').val(adress);
        this.collection.fetch({reset: true, data: {latitude: 48.823549172, longitude: 2.302681803}});
    },

    gps: function() {
        this.$el.html(_.template($('#businessList').html()));
        $('#searchInput').val("Ma position");

        
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
    },

    renderFullBusiness: function( id ) {
        this.fullBusinessView = new app.BusinessView({
            model: this.collection.get(id)
        });
        if (typeof this.fullBusinessView.model == "undefined") {
            this.fullBusinessView.model = new app.Business({id: id});
            this.fullBusinessView.model.fetch({
                success : function(model, response) {
                    // Si elle n'existe pas déjà, on l'ajoute dans la collection
                    app.AppView.BusinessesView.collection.add(app.AppView.BusinessesView.fullBusinessView.model);
                    app.AppView.BusinessesView.fullBusinessView.renderFull();
                },
                error : function(collection, response) {
                    // ERROR
                }
            });
        }
        else {
            this.fullBusinessView.renderFull();
        }
    },

    linkPressions: function(e) {
        e.preventDefault();
        this.fullBusinessView.renderBeers(true);
        this.fullBusinessView.etatBeersPression = true;
        $("#link_pressions").unwrap();
        if ($("#link_others").parent().prop("tagName") != "A")
            $("#link_others").wrap('<a href="#"></a>');
    },

    linkOthers: function(e) {
        e.preventDefault();
        this.fullBusinessView.renderBeers(false);
        this.fullBusinessView.etatBeersPression = false;
        $("#link_others").unwrap();
        if ($("#link_pressions").parent().prop("tagName") != "A")
            $("#link_pressions").wrap('<a href="#"></a>');
    }
});
