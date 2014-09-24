var app = app || {};
$(function() {
	var Router = Backbone.Router.extend({
	  routes: {
	  	"": "home",
	    "search/lat/:lat/lng/:lng": "search",
	    "searchAdd/lat/:lat/lng/:lng": "searchAddBusiness",
	    "search": "focusSearchInput",
	    "gps": "gps",
	    "business/propose": "proposeBusiness",
	    "business/:id": "fullBusiness"
	  },

	  home: function() {
	  	console.log("Home Route requested");
	  	app.AppView.BusinessesView.forAdd = false;;
	  	app.AppView.BusinessesView.home();
	  },

	  search: function(lat, lng){
	    console.log("Search Route requested.");
	  	app.AppView.BusinessesView.forAdd = false;;
	    app.AppView.BusinessesView.search(lat, lng);
	  },

	  searchAddBusiness: function(lat, lng) {
	  	console.log("searchAdd Route requested.");
	  	app.AppView.BusinessesView.forAdd = true;
	  	app.AppView.BusinessesView.search(lat, lng);
	  } ,

	  fullBusiness: function(id) {
		console.log("fullBusiness (id: "+id+") Route requested.");
		app.AppView.BusinessesView.renderFullBusiness(id);
	  },

	  proposeBusiness: function() {
	  	console.log("ProposeBusiness route requested");
	  	app.AppView.BusinessesView.proposeBusiness();
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
