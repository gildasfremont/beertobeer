var app = app || {};
$(function() {
	var Router = Backbone.Router.extend({
	  routes: {
	    "search/:adress": "search",
	  },

	  search: function(adress){
	    console.log("Search requested.");
	    app.AppView.search(adress);
	  },
	});

	console.log("Init Router");
	app.Router = new Router();
	Backbone.history.start();
});
