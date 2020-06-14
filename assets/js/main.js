console.log('code js chargé');

// MODALS //

var modalInterUrbain = document.getElementById('modalInterUrbain');
var modalVoyage = document.getElementById('modalVoyage');
var modalSante = document.getElementById('modalSante');
var modalMarketplace = document.getElementById('modalMarketplace');

var btnInterUrbain = document.getElementById('btnInterUrbain');
var btnVoyage = document.getElementById('btnVoyage');
var btnSante = document.getElementById('btnSante');
var btnMarketplace = document.getElementById('btnMarketplace');
var btnFermer = document.getElementsByTagName('btnFermer');


// montrer modal inter-urbain
btnInterUrbain.addEventListener('click', function() {
    modalInterUrbain.style.display = 'block';
});
btnFermer.addEventListener('click', function() {
    modalInterUrbain.style.display = "none";
});