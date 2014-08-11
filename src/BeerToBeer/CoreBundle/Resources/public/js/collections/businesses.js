var app = app || {};

// business Collection
app.Businesses = Backbone.Collection.extend({
  // Reference to this collection's model.
  model: app.Business,
});
