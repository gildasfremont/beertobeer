 var app = app || {};

  // Business Model

  app.Business = Backbone.Model.extend({

    defaults: {
      prixNow: 0,
      prixHappyHour: 0,
      nom: '',
      type: "Bar",
      adress: "",
      distance: ""
    }

  });