var app = app || {};

$(function() {
    var beerBusinesses = [
        { businessNom: 'Dirty Dick', prixNormal: 2, prixHappyHour: 2 },
        { businessNom: 'Marlusse et Lapin', prixNormal: 6, prixHappyHour: 4.3 },
        { businessNom: 'Le Syphax', prixNormal: 6.5, prixHappyHour: 4 },
        { businessNom: 'Le Truskel', prixNormal: 8, prixHappyHour: 6 },
        { businessNom: 'Le Triton', prixNormal: 8, prixHappyHour: 6 },

    ];

    new app.BeerBusinessesView( beerBusinesses );
});