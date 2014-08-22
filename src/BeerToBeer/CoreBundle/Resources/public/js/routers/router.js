var app = app || {};
$(function() {
	var Router = Backbone.Router.extend({
	  routes: {
	  	"": "home",
	    "search/lat/:lat/lng/:lng": "search",
	    "gps": "gps",
	    "business/:id": "fullBusiness"
	  },

	  home: function() {
	  	console.log("Home Route requested");
	  	app.AppView.BusinessesView.home();
	  },

	  search: function(lat, lng){
	    console.log("Search Route requested.");
	    app.AppView.BusinessesView.search(lat, lng);
	  },

	  fullBusiness: function(id) {
		console.log("fullBusiness (id: "+id+") Route requested.");
		app.AppView.BusinessesView.renderFullBusiness(id);
	  }
	});

	console.log("Init Router");
	app.Router = new Router();
	Backbone.history.start();
});
