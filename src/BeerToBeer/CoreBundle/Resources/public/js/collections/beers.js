var app = app || {};

// beer Collection
app.Beer = Backbone.Collection.extend({
	url: "api/beer",

  	// Reference to this collection's model.
  	model: app.Beer,
});
