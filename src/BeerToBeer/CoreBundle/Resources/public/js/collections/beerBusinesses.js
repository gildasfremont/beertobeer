var app = app || {};

// beerBusiness Collection
var BeerBusinesses = Backbone.Collection.extend({
  // Reference to this collection's model.
  model: app.BeerBusiness,
});

app.BeerBusinesses = new BeerBusinesses();
