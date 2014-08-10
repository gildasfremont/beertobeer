var app = app || {};

var Router = Backbone.Router.extend({
  routes: {
    "search/:adress": "search",
  },

  search: function(adress){
    console.log("Search requested.");
    app.AppView.search(adress);
  },

  editTodo: function(id) {
    console.log("Edit todo opened.");
  }
});

app.Router = new Router();

Backbone.history.start();