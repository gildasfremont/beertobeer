var app = app || {};

var Router = Backbone.Router.extend({
  routes: {
    "search/:adress": "search",
  },

  search: function(adress){
    console.log("Search requested.");
    app.AppView.search(adress);
  },
});

app.Router = new Router();

Backbone.history.start();