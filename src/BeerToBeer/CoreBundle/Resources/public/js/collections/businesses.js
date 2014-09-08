var app = app || {};

// business Collection
app.Businesses = Backbone.Collection.extend({
	url: "api/business",
	lastLat: 0,
	lastLng: 0,

  	// Reference to this collection's model.
  	model: app.Business,
});
