 var app = app || {};

  // Business Model

  app.Business = Backbone.Model.extend({
    urlRoot: "api/business",

    parse: function(response) {
      var normalizedHoraires = [];
      _.each(response.horaires, function(horaire) {
        normalizedHoraires[horaire.jour] = normalizedHoraires[horaire.jour] || [];
        var ouverture = new Date(horaire.ouverture*1000);
        var fermeture = new Date(ouverture.getTime()+1000*60*horaire.duree);
        if (horaire.happyHour) {
          normalizedHoraires[horaire.jour].happyHour = normalizedHoraires[horaire.jour].happyHour || [];
          normalizedHoraires[horaire.jour].happyHour.push({
            ouverture: ouverture,
            fermeture: fermeture
          });
        } else {
          normalizedHoraires[horaire.jour].normal = normalizedHoraires[horaire.jour].normal || [];
          normalizedHoraires[horaire.jour].normal.push({
            ouverture: ouverture,
            fermeture: fermeture
          });
          if (horaire.duree > 0)
            normalizedHoraires[horaire.jour].ouvert = true;
        }
      });
      _.each(normalizedHoraires, function(horaire, index) {
        if (typeof horaire.ouvert == "undefined")
          normalizedHoraires[index].ouvert = false;
      });
      response.horaires = normalizedHoraires;

      return response;
    },

    getPrixNow: function() {
      return "€ " + this.attributes.prixNormal;
      var now = new Date();
      var todayHoraires = this.attributes.horaires[now.getDay()];
      if (typeof todayHoraires.happyHour != "undefined" && now.getTime() >= todayHoraires.happyHour.ouverture.getTime() && now.getTime() <= todayHoraires.happyHour.fermeture.getTime()) {
        return "€ " + this.attributes.prixHappyHour;
      }
      else if (typeof todayHoraires.normal != "undefined" && now.getTime() >= todayHoraires.normal.ouverture.getTime() && now.getTime() <= todayHoraires.normal.fermeture.getTime()) {
        return "€ " + this.attributes.prixNormal;
      }
      else if (typeof todayHoraires.normal == "undefined") {
        return "€ ?";
      }
      else {
        return "Fermé"
      }
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
      latitude: 0,
      longitude: 0,
      distance: "",
      horaires: {},
      prixNow: 0,
      beers: {}
    }

  });