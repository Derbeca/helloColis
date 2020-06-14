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

var btnFermer = document.getElementsByClassName('btnFermer');



// montrer modals
btnInterUrbain.addEventListener('click', function() {
    modalInterUrbain.style.display = 'block';
});
btnVoyage.addEventListener('click', function() {
    modalVoyage.style.display = 'block';
});
btnSante.addEventListener('click', function() {
    modalSante.style.display = 'block';
});
btnMarketplace.addEventListener('click', function() {
    modalMarketplace.style.display = 'block';
});

// fermer modal
for(let i = 0; i < btnFermer.length; i++) {
    var modal = document.querySelectorAll('.modal');
    btnFermer[i].addEventListener('click', function() {
        console.log('tu as clické');
        for(let j = 0; j < modal.length; j++) {
            modal[j].style.display = 'none';
        }
    })
  }