var app = app || {};

app.BusinessesView = Backbone.View.extend({
    el: '#general',

    userLat: 0,
    userLng: 0,

    events: {
        "click #link_pressions": "linkPressions",
        "click #link_others": "linkOthers",
        "focus #searchInput": "focusSearchInput",
        "focusout #searchInput": "focusOutSearchInput"
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
                $("#search #gpsContainer a").attr("href", "#search/lat/"+position.coords.latitude+"/lng/"+position.coords.longitude)
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
    },

    focusSearchInput: function() {
        console.log('"focus #searchInput" triggered');
        $("#home").switchClass("unfocus", "focus");
        $("#home.unfocus #labelSearch").hide(400);
        $("#home.unfocus h2").hide(400);
        $("#searchInput")
            .geocomplete()
            .bind("geocode:result", function(event, result){
                app.Router.navigate("search/lat/"+result.geometry.location.lat()+"/lng/"+result.geometry.location.lng(), {trigger: true});
            })
        ;
        $(window)
            .resize(function() { // Adapter la taille du bloc "Chercher autour de moi" à la largeur du champ de recherche
                console.log("Sizing gpsContainer...");
                var width = $("#searchInput").outerWidth();
                $("#home #gpsContainer a").width(width-4); // -4 pour le fait que Google soit complètement foncedé et me fasse des putains de listes mal dimensionnées
            })
            .resize() // Trigger resize
        ;
        $("#home").attr("id", "search");
        this.getUserLocation();
        $("#search #gpsContainer").show();
    },

    focusOutSearchInput: function() {
        window.setTimeout(function(){$("#search #gpsContainer").hide();}, 50); // Un petit TimeOut pour avoir le temps de cliquer
    },

    home: function() {
        if (this.$el.children().attr("id") != "home")
            this.$el.html(_.template($('#homeTemplate').html()));
        $("#home.unfocus #labelSearch").show(400);
    },

    // Trouver les bars les plus proches de la position donnée
    search: function(lat, lng) {
        console.log("Searching "+lat);
        if (this.$el.children().attr("id") != "search") {
            this.$el.html(_.template($('#homeTemplate').html()));
            this.focusSearchInput();
        } 
        $("#searchInput").blur(); // Trigger blur pour que le "Chercher autour de moi disparaisse"
        this.$el.append(_.template($('#businessList').html())); // TODO : vérifier qu'il n'y pas déjà une liste
        this.collection.fetch({reset: true, data: {latitude: lat, longitude: lng}});
        // Si l'utilisateur a demandé sa position, on tente de trouver son adresse par reverse geocoding
        if ($('#searchInput').val() == "")
            $('#searchInput').val(this.reverseGeocoding(lat, lng));
    },

    reverseGeocoding: function(lat, lng) {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({'latLng': new google.maps.LatLng(lat, lng)}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[1]) {
                    return results[1].formatted_address;
                } else {
                    return false;
                    alert('No results found');
                }
            } else {
                return false;
                alert('Geocoder failed due to: ' + status);
            }
        });
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
