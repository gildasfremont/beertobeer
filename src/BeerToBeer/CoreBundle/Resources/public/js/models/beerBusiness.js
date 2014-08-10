 var app = app || {};

  // BeerBusiness Model

  app.BeerBusiness = Backbone.Model.extend({

    defaults: {
      prixNow: 0,
      prixHappyHour: 0,
      businessNom: '',
      businessType: "Bar",
      businessAdress: "",
      businessDistance: ""
    }

  });