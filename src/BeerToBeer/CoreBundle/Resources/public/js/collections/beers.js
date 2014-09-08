var app = app || {};

// beer Collection
app.Beers = Backbone.Collection.extend({
	url: "api/beer",

  	// Reference to this collection's model.
  	model: app.Beer,
});
