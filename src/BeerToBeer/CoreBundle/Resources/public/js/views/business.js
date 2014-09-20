var app = app || {};

app.BusinessView = Backbone.View.extend({
    tagName: 'div',
    className: 'row business',
    template: _.template( $( '#business' ).html() ),
    templateFull: _.template( $( '#fullBusiness' ).html() ),
    horairesTemplate: _.template($('#horairesTemplate').html()),
    beerTemplate: _.template($('#beer').html()),
    editBeerFormTemplate: _.template( $("#editBeerForm").html() ),
    addBeerFormTemplate: _.template( $("#addBeerForm").html() ),
    oneBeerTemplate: _.template($("#oneBeerBusinessForm").html()),
    etatBeersPression: true,

    events: {
        "click": "fullBusiness",
        "click .addThisBusiness": "fullBusiness"
    },

    render: function() {
        var attrs = this.model.attributes;
        attrs.prixNow = this.model.getPrixNow();
        this.$el.html( this.template( attrs ) );

        return this;
    },

    // Rendu de la liste des bières (la liste pression ou la liste des autres bières)
    renderBeers: function(pression) {
        var beersPression = _.filter(this.model.attributes.beers, function(beer) {
            return _.some(beer.prix, function(price) {
                return price.pression == true;
            });
        });
        var beersOthers = _.filter(this.model.attributes.beers, function(beer) {
            return _.some(beer.prix, function(price) {
                return price.pression == false;
            });
        });

        // On affiche directement bières non pression si pas de pression
        if (!beersPression.length)
            pression = false;

        if (!beersPression.length && !beersOthers.length)
            $("#noBeers").show();
        else
            $("#noBeers").hide();

        if (!beersPression.length && $("#link_pressions").css('display') == 'inline')
            $("#link_pressions").hide();
        else if (beersPression.length && $("#link_pressions").css('display') == 'none')
            $("#link_pressions").show();

        if (!beersOthers.length && $("#link_others").css('display') == 'inline')
            $("#link_others").hide();
        else if (beersOthers.length && $("#link_others").css('display') == 'none')
            $("#link_others").show();

        $("#link_pressions span").html(beersPression.length);
        $("#link_others span").html(beersOthers.length);
        if (pression)
            var beers = beersPression;
        else
            var beers = beersOthers;

        var html = "";
        var beerTemplate = this.beerTemplate;
        _.each(beers, function(beer) {
            beer.pression = pression
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
        if (!app.AppView.BusinessesView.forAdd)
            location.href = "#business/"+ this.model.get('id');
    },

    renderFull: function() {
        app.AppView.BusinessesView.$el.html( this.templateFull( this ) );
        this.renderBeers(this.etatBeersPression);
        this.renderHoraires(false);
        this.renderMap();
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

        $(document).click(function(){
          $(".horaires .moreHoraires").hide();
          $("#dropHoraires").removeClass("focus");
        });
        $("#dropHoraires").click(function(e) {
            e.stopPropagation();
            $(".horaires .moreHoraires").toggle();
            $("#dropHoraires").toggleClass("focus");
        });
        $(".horaires .moreHoraires").click(function(e) {
            e.stopPropagation();
        });
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

    formBeer: function(beerId) {
        // On stocke le type courant dans une variable pour pouvoir y accéder facilement
        var currentPression = true;

        // Choisir le type de prix à ajouter
        $(".formBeer #changeType").on("click", "a", function(event) {
            event.preventDefault();

            // Ces 4 lignes permettent de changer le lien de place
            $(event.target).addClass("toDisable");
            $(".formBeer #changeType span:not(.toDisable)").wrap('<a href="#"></a>');
            $(event.target).removeClass("toDisable");
            $(event.target).unwrap();

            $("#BeerBusinesses_container div").toggle();
            currentPression = !($("#BeerBusinesses_container .pressions").css('display') == 'none');
        });

        // Supprimer un champ BeerBusiness
        $(".formBeer").on("click", ".oneBeerBusiness .remove a", function(event) { 
            event.preventDefault();
            var idBeerBusiness = $(event.target).attr("id");
            _.find(app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].prix, function(price, index) {
                if (price.id == idBeerBusiness) {
                    // On ne supprime pas tout de suite, il faut que l'utilisateur confirme plus tard
                    app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].prix[index].toRemove = true;
                    return true;
                }
            });
            
            $(".formBeer #" + idBeerBusiness + ".oneBeerBusiness").remove();
        });

        $("#addVolumeBeer").click(function(event) {
            event.preventDefault();
            var newId = -1;
            while ($("#"+newId+".oneBeerBusiness").length) {
                newId--;
            }
            if (currentPression)
                var divTypeClass = "pressions";
            else
                var divTypeClass = "others";
            $(".formBeer #BeerBusinesses_container ." + divTypeClass).append(app.AppView.BusinessesView.fullBusinessView.oneBeerTemplate({id: newId}));
        })

        // Event for "Annuler" link
        $("#cancelBeers").click(function(event) {
            event.preventDefault();
            $(".formBeer").remove();
        });

        // Click sur "Supprimer la bière"
        $("#deleteBeers").click(function(event) {
            _.each(app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].prix, function(price, index, prix) {
                app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].prix[index].toRemove = true;
            });
            $("#submitBeers").click();
        })

        // Soumission du formulaire
        $("#submitBeers").click(function(event) {
            console.log('Beer submitted...');
            var error = false;
            var change = false;

            // Vérification du champ de la bière si c'est un ajout
            if ($("#beerNameInput").length) {
                change = true;
                if ($("#beerNameInput").val().length < 1) {
                    alert("Vous n'avez pas entré le nom de la bière");
                    error = true;
                } else
                    app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].name = $("#beerNameInput").val();
            }
            _.each(app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].prix, function(price, index, prix) {
                if (!price.toRemove) {
                    var prixNormal = parseFloat($("#" + price.id + ".inputNormal").val());
                    var prixHappyHour = parseFloat($("#" + price.id + ".inputHappyHour").val());
                    if (prixNormal == null) {
                        alert("Vous devez rentrer un prix normal.")
                        error = true;
                    }
                    else if (prixNormal < prixHappyHour) {
                        alert("Le prix Happy-Hour doit être inférieur au prix Normal");
                        error = true;
                    }
                    else if (prixNormal != price.prixNormal || prixHappyHour != price.prixHappyHour) {
                        if (prixHappyHour == null)
                            prixHappyHour = prixNormal;
                        change = true;
                        app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].prix[index].prixNormal = prixNormal;
                        app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].prix[index].prixHappyHour = prixHappyHour;
                    }
                }
                else {
                    change = true;
                }
            });
            // Ajout des nouveaux volumes
            if ($(".formBeer .oneBeerBusiness.undefined").length) {
                change = true;
                $(".formBeer .oneBeerBusiness.undefined").each(function (index, item) {
                    var pression = $(item).parent().attr("class") == "pressions";
                    var prixNormal = parseFloat($("#" + $(this).attr('id') + ".inputNormal").val());
                    var prixHappyHour = parseFloat($("#" + $(this).attr('id') + ".inputHappyHour").val());
                    var volume = parseInt($("#" + $(this).attr('id') + ".inputVolume").val());

                    if (isNaN(volume)) {
                        alert("Vous devez rentrer un volume.");
                        error = true;
                    }
                    else if (_.some(app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].prix, function(prix) { return (prix.volume == volume ); })) {
                        alert("Vous tentez de faire 2 prix pour un même volume.");
                        error = true;
                    }
                    else if (isNaN(prixNormal)) {
                        alert("Vous devez rentrer un prix normal.")
                        error = true;
                    }
                    else if (prixNormal < prixHappyHour) {
                        alert("Le prix Happy-Hour doit être inférieur au prix Normal");
                        error = true;
                    }
                    else {
                        if (isNaN(prixHappyHour)) {
                            prixHappyHour = prixNormal;
                        }
                        app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].prix.push({
                            pression: pression,
                            volume: volume,
                            prixHappyHour: prixHappyHour,
                            prixNormal: prixNormal
                        });
                    }
                });
            }
            if (!error && change) {
                var pression = app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].pression;
                app.AppView.BusinessesView.fullBusinessView.model.save(null, { 
                    datatype: 'text',
                    success: function() {
                        console.log("Business successfully synced !")
                        // Re rendu de l'espace "bières"
                        var idCount = pression ? "link_pressions" : "link_others";
                        var count = _.where(app.AppView.BusinessesView.fullBusinessView.model.attributes.beers, {pression: pression}).length;
                        $("#" + idCount + " span").html(count);
                        app.AppView.BusinessesView.fullBusinessView.renderBeers(pression);

                        app.AppView.BusinessesView.collection.reset();
                    },
                    error: function(error, domain) {
                        console.log(error);
                        console.log(domain);
                    }
                });

                // Suppression effective des prix (si pas nouvelle bière)
                /*if (beerId > -1) {
                    _.each(app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].prix, function(price, index, prix) {
                        if (price.toRemove === true) {
                            app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].prix.splice(index, 1);
                            if (app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId].prix.length == 0) {
                                delete app.AppView.BusinessesView.fullBusinessView.model.attributes.beers[beerId];
                            }
                        }
                    });
                }*/
                
                $(".formBeer").remove();
            } else if (!error && !change)
                $(".formBeer").remove();
        });
    },

    editBeerLink: function(e) {
        e.preventDefault();
        var beerId = $(e.target).attr("id");
        console.log('Edit Beer with id "'+beerId+'"');
        $(".fullBusiness").append( this.editBeerFormTemplate( this.model.attributes.beers[beerId] ) );

        this.formBeer(beerId);

        $("#formEditBeers").submit(function(e) {$("#submitEditBeers").click();});
    },

    btnAddBeer: function(e) {
        var beerId = -1;

        this.model.attributes.beers[beerId] = {
            id: beerId,
            pression: true,
            prix: []
        };
        $(".fullBusiness").append( this.addBeerFormTemplate( this.model.attributes.beers[beerId] ) );

        this.formBeer(beerId);

        var beers = new app.Beers();
        beers.fetch();

        var autocomplete = new app.AutoCompleteView({
            input: $("#beerNameInput"),
            model: beers,
            minKeywordLength: -1
        }).render();
        beers.on("sync", function() {
            if ($("#beerNameInput").is(":focus"))
                autocomplete.focus();
        });
    }
});
