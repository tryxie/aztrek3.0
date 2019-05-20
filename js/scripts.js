$(document).ready(function () {

  // Menu responsive
  $('.main-nav').stellarNav({
    position: 'left',
    closeLabel: 'Fermer',
    breakpoint: 991,
  });

  // Carousel
  $('.realisations').owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: ['<i class="fas fa-arrow-alt-circle-left"></i><span class="hidden-text">Précédent</span>', '<i class="fas fa-arrow-alt-circle-right"></i><span class="hidden-text">Suivant</span>']
  });


  // Insta-carousel
  $('.insta-carousel').owlCarousel({
    items: 5,
    loop: true,
    nav: true,
    navText: ['<i class="fas fa-arrow-alt-circle-left"></i><span class="hidden-text">Précédent</span>', '<i class="fas fa-arrow-alt-circle-right"></i><span class="hidden-text">Suivant</span>']
  });


});