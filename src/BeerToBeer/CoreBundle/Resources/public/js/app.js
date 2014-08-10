var app = app || {};

$(function() {
	console.log("Init App");

    app.fixtures = [
        { businessNom: 'Dirty Dick', prixNow: 2, prixHappyHour: 2, businessDistance: "300m", businessAdress: "10 rue Frochot, 75009 Paris" },
        { businessNom: 'Marlusse et Lapin', prixNow: 6, prixHappyHour: 4.3, businessDistance: "150m", businessAdress: "102 rue Frochot, 75009 Paris" },
        { businessNom: 'Le Syphax', prixNow: 6.5, prixHappyHour: 4, businessDistance: "250m", businessAdress: "7 rue Frochot, 75009 Paris" },
        { businessNom: 'Le Truskel', prixNow: 8, prixHappyHour: 6, businessDistance: "300m", businessAdress: "17 bd Poissonière, 75002 Paris" },
        { businessNom: 'Le Triton', prixNow: 8, prixHappyHour: 6, businessDistance: "298m", businessAdress: "27 bd Poissonière, 75002 Paris" },

    ];

    app.AppView = new app.BeerBusinessesView();
});