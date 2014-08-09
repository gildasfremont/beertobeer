 var app = app || {};

  // BeerBusiness Model

  app.BeerBusiness = Backbone.Model.extend({

    defaults: {
      prixNormal: 0,
      prixHappyHour: 0,
      businessNom: ''
    }

  });