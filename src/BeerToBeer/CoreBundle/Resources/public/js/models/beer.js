 var app = app || {};

  // Beer Model

  app.Beer = Backbone.Model.extend({
    defaults: {
      name: "",
      degree: "",
      prix: {}
    }

  });