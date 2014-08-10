var app = app || {};

$(function() {
    app.fixtures = [
        { businessNom: 'Dirty Dick', prixNow: 2, prixHappyHour: 2 },
        { businessNom: 'Marlusse et Lapin', prixNow: 6, prixHappyHour: 4.3 },
        { businessNom: 'Le Syphax', prixNow: 6.5, prixHappyHour: 4 },
        { businessNom: 'Le Truskel', prixNow: 8, prixHappyHour: 6 },
        { businessNom: 'Le Triton', prixNow: 8, prixHappyHour: 6 },

    ];

    app.AppView = new app.BeerBusinessesView();
});