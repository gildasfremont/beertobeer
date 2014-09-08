 var app = app || {};

  // Beer Model

  app.Beer = Backbone.Model.extend({
    defaults: {
      name: "",
      degree: "",
      prix: {}
    },
    label: function () {
      return this.get("name") + ' <span class="degree">' + this.get("degree") + '°</span>';
    }
  });