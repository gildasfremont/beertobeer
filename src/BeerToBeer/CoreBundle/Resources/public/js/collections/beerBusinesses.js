var app = app || {};

// beerBusiness Collection
var BeerBusinessList = Backbone.Collection.extend({
  // Reference to this collection's model.
  model: app.BeerBusiness,
});

app.BeerBusinesses = new BeerBusinessList();