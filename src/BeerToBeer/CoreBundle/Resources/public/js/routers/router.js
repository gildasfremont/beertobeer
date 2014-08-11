var app = app || {};
$(function() {
	var Router = Backbone.Router.extend({
	  routes: {
	    "search/:adress": "search",
	  },

	  search: function(adress){
	    console.log("Search Route requested.");
	    app.AppView.BusinessesView.search(adress);
	  },
	});

	console.log("Init Router");
	app.Router = new Router();
	Backbone.history.start();
});
