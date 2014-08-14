var app = app || {};
$(function() {
	var Router = Backbone.Router.extend({
	  routes: {
	    "search/:adress": "search",
	    "gps": "gps",
	    "business/:id": "fullBusiness"
	  },

	  search: function(adress){
	    console.log("Search Route requested.");
	    app.AppView.BusinessesView.search(adress);
	  },

	  gps: function() {
	  	console.log("GPS Route requested.");
	  	app.AppView.BusinessesView.gps();
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
