 var app = app || {};

  // BeerBusiness Model

  app.BeerBusiness = Backbone.Model.extend({

    defaults: {
      beerName: '',
      beerDegree: 0,
      prixNormal: 0,
      prixHappyHour: 0,
      businessNom: ''
    },

    toggle: function() {
      this.save({
        completed: !this.get('completed')
      });
    }

  });