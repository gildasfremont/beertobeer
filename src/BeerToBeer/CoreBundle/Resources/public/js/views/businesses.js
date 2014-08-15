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
        this.$el.html(_.template($('#businessList').html()));
        $('#searchInput').val(adress);
        this.collection.fetch({reset: true, data: {latitude: 48.823549172, longitude: 2.302681803}});
    },

    gps: function() {
        this.$el.html(_.template($('#businessList').html()));
        $('#searchInput').val("Ma position");

        var errorMessage = "";
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                app.AppView.BusinessesView.collection.fetch({reset: true, data: {latitude: position.coords.latitude, longitude: position.coords.longitude}});
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
        if (errorMessage != "")
            alert(errorMessage);
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
        var business = new app.Business({id: id});
        var businessView = new app.BusinessView({
            model: new app.Business({id: id})
        });
        businessView.model.fetch({
            success : function(model, response) {
                app.AppView.BusinessesView.collection.remove(app.AppView.BusinessesView.collection.get(id));
                app.AppView.BusinessesView.collection.add(businessView.model);
                businessView.renderFull();
            },
            error : function(collection, response) {
                // ERROR
            }
        });
    }
});
