 var app = app || {};

  // Business Model

  app.Business = Backbone.Model.extend({
    urlRoot: "api/business",

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