var app = app || {};

// beerBusiness Collection
app.BeerBusinesses = Backbone.Collection.extend({
  // Reference to this collection's model.
  model: app.BeerBusiness,
});
