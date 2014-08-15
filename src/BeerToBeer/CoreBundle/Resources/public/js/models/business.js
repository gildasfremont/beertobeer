 var app = app || {};

  // Business Model

  app.Business = Backbone.Model.extend({
    urlRoot: "api/business",

    parse: function(response) {
      var normalizedHoraires = [];
      _.each(response.horaires, function(horaire) {
        normalizedHoraires[horaire.jour] = normalizedHoraires[horaire.jour] || {};
        var ouverture = new Date(horaire.ouverture.date.replace(" ", "T"));
        var fermeture = new Date(ouverture.getTime()+1000*60*horaire.duree);
        if (horaire.happyHour) {
          normalizedHoraires[horaire.jour].happyHour = {
            ouverture: ouverture,
            fermeture: fermeture
          };
        } else {
          normalizedHoraires[horaire.jour].normal = {
            ouverture: ouverture,
            fermeture: fermeture
          }
          normalizedHoraires[horaire.jour].normal.ouvert = (horaire.duree > 0)
        }
      });
      response.horaires = normalizedHoraires;
      return response;
    },

    defaults: {
      typeArray: {
        1: "Bar",
        2: "Resto"
      },

      id: 0,
      prixNormal: 0,
      prixHappyHour: 0,
      nom: '',
      type: 1,
      adress: "",
      distance: "",
      horaires: {},
      prixNow: 0,
      beers: {}
    }

  });