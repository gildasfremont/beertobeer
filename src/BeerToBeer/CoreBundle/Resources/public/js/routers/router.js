var app = app || {};
$(function() {
	var Router = Backbone.Router.extend({
	  routes: {
	  	"": "home",
	    "search/lat/:lat/lng/:lng": "search",
	    "searchAdd/lat/:lat/lng/:lng": "searchAddBusiness",
	    "search": "focusSearchInput",
	    "gps": "gps",
	    "business/:id": "fullBusiness"
	  },

	  home: function() {
	  	console.log("Home Route requested");
	  	app.AppView.BusinessesView.home();
	  },

	  search: function(lat, lng){
	    console.log("Search Route requested.");
	    app.AppView.BusinessesView.search(lat, lng, false);
	  },

	  searchAddBusiness: function(lat, lng) {
	  	console.log("searchAdd Route requested.");
	  	app.AppView.BusinessesView.search(lat, lng, true);
	  } ,

	  fullBusiness: function(id) {
		console.log("fullBusiness (id: "+id+") Route requested.");
		app.AppView.BusinessesView.renderFullBusiness(id);
	  },

	  focusSearchInput: function() {
	  	console.log("focusSearchInput Route requested");
	  	if(!$("#home").length)
	  		app.AppView.BusinessesView.home();
	  	app.AppView.BusinessesView.focusSearchInput();
	  }
	});

	console.log("Init Router");
	app.Router = new Router();
	Backbone.history.start();
});
