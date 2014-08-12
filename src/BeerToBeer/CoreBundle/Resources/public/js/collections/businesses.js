var app = app || {};

// business Collection
app.Businesses = Backbone.Collection.extend({
	url: "api/business",

  	// Reference to this collection's model.
  	model: app.Business,
});
