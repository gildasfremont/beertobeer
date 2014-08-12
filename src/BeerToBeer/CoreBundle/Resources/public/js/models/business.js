 var app = app || {};

  // Business Model

  app.Business = Backbone.Model.extend({

    defaults: {
      typeArray: {
        1: "Bar",
        2: "Resto"
      },

      prixNow: 0,
      prixHappyHour: 0,
      nom: '',
      type: "Bar",
      adress: "",
      distance: ""
    }

  });