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
            this.fixPositionFixedForTouchKeyboard();
	    },

        // Cette fonction permet de corriger un bug sur mobile avec écran tactile. Lors du focus sur un input, des éléments comme les boutons qui était fixés en bas étaient déplacés avec le clavier qui apparaît. Cette fonction ajoute une classe spéciale lors du focus pour gérer ce bug en css. Ce "fix" a été trouvé ici : http://dansajin.com/2012/12/07/fix-position-fixed/
        fixPositionFixedForTouchKeyboard: function() {
            if ('ontouchstart' in window) { // On vérifie que c'est bien pour les terminaux tactiles (ce test n'a pas l'air de fonctionner très correctement, on le garde pour l'instant, étant donné que Beer To Beer ne sera utilisé que sur terminaux mobiles et tactiles pour l'instant)
                /* cache dom references */ 
                var $body = jQuery('body'); 

                /* bind events */
                $(document)
                .on('focus', 'input', function(e) {
                    $body.addClass('fixfixed');
                })
                .on('blur', 'input', function(e) {
                    $body.removeClass('fixfixed');
                });
            } 
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