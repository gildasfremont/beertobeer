var app = app || {};

$(function() {
	var AppView = Backbone.View.extend({
	    el: '#general',

	    events: {
	        'submit #searchForm': 'submitSearch'
	    },

	    initialize: function() {
			console.log("Init App");
	        this.BusinessesView = new app.BusinessesView();
	    },

	    submitSearch: function(e) {
	        e.preventDefault();
	        console.log("Search Form submitted");
	        location.href = "#search/"+ $('#searchInput').val();
	    },
	});

    app.fixtures = [
        { nom: 'Dirty Dick', prixNow: 2, prixHappyHour: 2, distance: "300m", adress: "10 rue Frochot, 75009 Paris" },
        { nom: 'Marlusse et Lapin', prixNow: 6, prixHappyHour: 4.3, distance: "150m", adress: "102 rue Frochot, 75009 Paris" },
        { nom: 'Le Syphax', prixNow: 6.5, prixHappyHour: 4, distance: "250m", adress: "7 rue Frochot, 75009 Paris" },
        { nom: 'Le Truskel', prixNow: 8, prixHappyHour: 6, distance: "300m", adress: "17 bd Poissonière, 75002 Paris" },
        { nom: 'Le Triton', prixNow: 8, prixHappyHour: 6, distance: "298m", adress: "27 bd Poissonière, 75002 Paris" },

    ];

    app.AppView = new AppView();
});