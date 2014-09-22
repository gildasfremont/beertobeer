 var app = app || {};

  // Beer Model

  app.Beer = Backbone.Model.extend({
    defaults: {
      name: "",
      degree: "",
      prix: {}
    },
    label: function () {
      var degree = this.get("degree");
      if (degree == null)
        degree = "?";
      return this.get("name") + ' <span class="degree">' + degree + '°</span>';
    }
  });